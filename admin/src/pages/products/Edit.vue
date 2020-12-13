<template>
<div class="col-6 q-my-xl">
    <q-card>
        <q-card-title>Upraviť produkt</q-card-title>
        <q-card-main>
            <q-field :count="50">
                <q-input float-label="Názov" v-model="productName" max-length="50" />
            </q-field>
            <q-field :count="5000">
                <q-input
                    type="textarea"
                    float-label="Popis"
                    v-model="productDescription"
                    :max-height="100"
                    rows="7"
                />
            </q-field>
             <q-field :count="5">
                <q-input type="text" float-label="Veľkosť" v-model="productSize" max-length="5" />
            </q-field>
            <q-field >
                <q-input type="number" float-label="Cena" v-model="productPrice" />
            </q-field>
            <q-select v-model="productCategoryId" :options="[{ label: 'Bicykle', value: 1 }, { label: 'Elektrobicykle', value: 2 }, { label: 'Oblečenie', value: 3 }, { label: 'Tretry', value: 4 }, { label: 'Komponenty', value: 5 }, { label: 'Príslušenstvo', value: 6 }]" float-label="Kategória"/>
            <q-field >
                <q-input type="number" float-label="Množstvo" v-model="productQuantity" />
            </q-field>
            <q-field :count="25">
                <q-input type="text" float-label="Značka" v-model="productBrand" max-length="25" />
            </q-field>
            <q-field helper="Supported format: JPG, max. file size: 300KiB, max. uploaded files: 5" class="q-mt-lg">
                <q-uploader :url=pathImages  max-file-size="300" max-files="5" float-label="Obrázky" multiple extensions=".jpg" hide-upload-button auto-expand ref="uploader" />
            </q-field>
            <q-card-actions class="q-mt-md">
                <div class="row justify-end full-width docs-btn">
                    <q-btn color="red" label="Odstrániť produkt" @click="removeProduct"/>
                    <q-btn label="Zatvoriť" flat to="/products/index"/>
                    <q-btn label="Upraviť produkt" color="primary" @click="updateProduct"/>
                </div>
            </q-card-actions>
        </q-card-main>
    </q-card>
    <q-card class="q-mt-md">
        <q-card-title>Zoznam obrázkov produktu</q-card-title>
        <q-card-main class="row full-width justify-center items-center">
            <div v-for="id in imagesNumber" :key="id" class="row full-width justify-center items-center q-mb-lg">
                <p class="hidden">{{temp = path + (id - 1)}}</p>
              <img :src="temp" class="img-circle w-70" alt="Obrazok" />
              <q-btn color="red" round icon="delete" @click="deleteImage(id-1)"/>
            </div>
        </q-card-main>
    </q-card>
</div>
</template>

<style lang="stylus">
.docs-btn .q-btn
    padding 15px 20px
.w-70
    width 70%
</style>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      images: '',
      imagesNumber: 0,
      path: 'http://127.0.0.1:8000/api/images/' + this.$route.params.id + '/',
      pathImages: 'http://127.0.0.1:8000/api/images/upload/' + this.$route.params.id,
      productName: '',
      productDescription: '',
      productSize: '',
      productPrice: '',
      productCategoryId: '',
      productQuantity: '',
      productBrand: ''
    }
  },
  methods: {
    updateProduct () {
      axios
        .put(`http://127.0.0.1:8000/api/update/` + this.$route.params.id, this.productData)
        .then(response => {
          this.$refs.uploader.upload()
          this.$q.notify({ type: 'positive', timeout: 2000, message: 'Produkt bol úspešne aktualizovaný.' })
        })
        .then(response => {
          this.loadProduct()
          this.loadImages()
        })
        .catch(error => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'Vyskytla sa chyba.' })
          console.log(error)
        })
    },
    deleteImage (id) {
      axios
        .get(`http://127.0.0.1:8000/api/delImage/` + this.$route.params.id + '/' + id)
        .then(() => {
          this.$q.notify({ type: 'positive', timeout: 2000, message: 'Obrazok bol odstránený.' })
          this.loadImages()
        })
        .catch(() => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'Nastala chyba.' })
        })
    },
    removeProduct () {
      this.$q.dialog({
        title: 'Vymazať',
        message: 'Ste si istý že chete odstrániť produkt?',
        color: 'primary',
        ok: true,
        cancel: true
      }).then(() => {
        axios
          .delete(`http://127.0.0.1:8000/api/delete-product/${this.$route.params.id}`)
          .then(() => {
            this.$q.notify({ type: 'positive', timeout: 2000, message: 'Produkt bol odstránený.' })
            this.$router.push('/products/index')
          })
          .catch(error => {
            this.$q.notify({ type: 'negative', timeout: 2000, message: 'Nastala chyba.' })
            console.log(error)
          })
      }).catch(() => {
        // nic sa nestane
      })
    },
    loadProduct () {
      axios
        .get(`http://127.0.0.1:8000/api/edit/` + this.$route.params.id)
        .then(response => {
          this.productName = response.data.name
          this.productDescription = response.data.description
          this.productSize = response.data.size
          this.productPrice = response.data.price
          this.productCategoryId = response.data.category_id
          this.productQuantity = response.data.quantity
          this.productBrand = response.data.brand
        })
        .catch(error => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'Loading product: an error has been occured.' })
          console.log(error)
        })
    },
    loadImages () {
      axios
        .get(`http://127.0.0.1:8000/api/imagesNumber/` + this.$route.params.id)
        .then(response => {
          this.imagesNumber = response.data
          console.log(this.imagesNumber)
        })
    }
  },
  mounted () {
    this.loadProduct()
    this.loadImages()
  },
  computed: {
    productData: function () {
      return { name: this.productName, description: this.productDescription, size: this.productSize, price: this.productPrice, category_id: this.productCategoryId, quantity: this.productQuantity, brand: this.productBrand }
    }
  }
}
</script>

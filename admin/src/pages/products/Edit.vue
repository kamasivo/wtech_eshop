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
            <q-field helper="Supported format: JPG, max. file size: 300KiB" class="q-mt-lg">
                <!-- <q-uploader float-label="Images" multiple extensions=".jpg" auto-expand/> -->
            </q-field>
        </q-card-main>
        <q-card-actions class="q-mt-md">
            <div class="row justify-end full-width docs-btn">
                <q-btn label="Zatvoriť" flat to="/products/index"/>
                <q-btn label="Upraviť produkt" color="primary" @click="updateProduct"/>
            </div>
        </q-card-actions>
    </q-card>
</div>
</template>

<style lang="stylus">
.docs-btn .q-btn
    padding 15px 20px
</style>

<script>
import axios from 'axios'

export default {
  data () {
    return {
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
          this.$q.notify({ type: 'positive', timeout: 2000, message: 'Produkt bol úspešne aktualizovaný.' })
        })
        .catch(error => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'Vyskytla sa chyba.' })
          console.log(error)
        })
    }
  },
  mounted () {
    axios
      .get(`http://127.0.0.1:8000/api/admin-products/` + this.$route.params.id + '/edit')
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
  computed: {
    productData: function () {
      return { name: this.productName, description: this.productDescription, size: this.productSize, price: this.productPrice, category_id: this.productCategoryId, quantity: this.productQuantity, brand: this.productBrand }
    }
  }
}
</script>

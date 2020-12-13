<template>
<div class="col-6 q-my-xl">
    <q-card>
        <q-card-title>Create new product</q-card-title>
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
                <q-input type="number" float-label="Cena" min="1" v-model="productPrice" />
            </q-field>
            <q-select v-model="productCategoryId" :options="optionsCategory" float-label="Kategória" />
            <q-field >
                <q-input type="number" float-label="Množstvo" min="1" v-model="productQuantity" />
            </q-field>
            <q-field :count="25">
                <q-input type="text" float-label="Značka" v-model="productBrand" max-length="25" />
            </q-field>
            <q-field helper="Supported format: JPG, max. file size: 300KiB, max. uploaded files: 5" class="q-mt-lg">
                <q-uploader url="path + $this.productId"  max-file-size="300" max-files="5" float-label="Obrázky" multiple extensions=".jpg" hide-upload-button auto-expand ref="uploader" />
            </q-field>
        </q-card-main>
        <q-card-actions class="q-mt-md">
            <div class="row justify-end full-width docs-btn">
                <q-btn label="Cancel" flat to="/products/index"/>
                <q-btn label="Create" color="primary" @click="createProduct"/>
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
      path: 'http://127.0.0.1:8000/api/admin-images/upload/',
      productName: '',
      productDescription: '',
      productSize: '',
      productPrice: '',
      productCategoryId: '',
      optionsCategory: [{ label: 'Bicykle', value: '1' }, { label: 'Elektrobicykle', value: '2' }, { label: 'Oblečenie', value: '3' }, { label: 'Tretry', value: '4' }, { label: 'Komponenty', value: '5' }, { label: 'Príslušenstvo', value: '6' }],
      productQuantity: '',
      productBrand: '',
      productId: ''
    }
  },
  methods: {
    createProduct (file, updateProgress) {
      axios
        .post('http://127.0.0.1:8000/api/admin-products', this.productData)
        .then(response => {
          console.log('Response1: ', response.data.id)
          this.productId = response.data.id
        })
        .then(response => {
          this.$refs.uploader.upload()
          this.$q.notify({ type: 'positive', timeout: 2000, message: 'The product has been created.' })
        })
        .catch(error => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'An error has been occured.' })
          console.log(error)
        })
    }
  },
  computed: {
    productData: function () {
      return { name: this.productName, description: this.productDescription, size: this.productSize, price: this.productPrice, category_id: this.productCategoryId, quantity: this.productQuantity, brand: this.productBrand }
    }
  }
}
</script>

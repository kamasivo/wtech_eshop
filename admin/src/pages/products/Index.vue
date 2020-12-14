<template>
<div class="q-my-xl w-90">
<q-table
      :data="serverData"
      row-key="name"
      :pagination.sync="serverPagination"
      :loading="loading"
      @request="request"
      :columns="columns"
      title="Zoznam produktov"
      binary-state-sort
      >
      <q-tr slot="body" slot-scope="props" :props="props">
        <q-td key="id" :props="props">
          <span>{{ props.row.id }}</span>
        </q-td>
        <q-td key="name" :props="props">
          <span>{{ props.row.name }}</span>
        </q-td>
        <q-td key="price" :props="props">
          <span>{{ props.row.price }}€</span>
        </q-td>
        <q-td key="size" :props="props">
          <span>{{ props.row.size }}</span>
        </q-td>
        <q-td key="quantity" :props="props">
          <span>{{ props.row.quantity }}</span>
        </q-td>
        <q-td class="text-right">
          <div>
            <q-btn round icon="edit" class="q-mr-xs" @click="$router.push('/products/' + props.row.id + '/edit')" />
            <q-btn round icon="delete" @click="destroy(props.row.id, props.row.name, props.row.__index)"/>
          </div>
        </q-td>
      </q-tr>
    </q-table>
</div>
</template>

<style lang="stylus">
.w-90
    width 90%
</style>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      columns: [
        { name: 'id', label: 'ID', field: 'id', sortable: false, align: 'left' },
        { name: 'name', label: 'Názov produktu', field: 'name', sortable: true, align: 'left' },
        { name: 'price', label: 'Cena', field: 'price', sortable: false, align: 'left' },
        { name: 'size', label: 'Veľkosť', field: 'size', sortable: false, align: 'left' },
        { name: 'quantity', label: 'Počet', field: 'quantity', sortable: false, align: 'left' },
        { name: 'actions', label: 'Akcie', sortable: false, align: 'right' }
      ],
      selected: [],
      loading: false,
      serverPagination: {
        page: 1,
        rowsNumber: 10, // the number of total rows in DB
        rowsPerPage: 5,
        sortBy: 'name',
        descending: true
      },
      serverData: []
    }
  },
  methods: {
    request ({ pagination }) {
      this.loading = true
      axios
        .get(`http://127.0.0.1:8000/api/admin-products/list/${pagination.page}?rowsPerPage=${pagination.rowsPerPage}&sortBy=${pagination.sortBy}&descending=${pagination.descending}`)
        .then(({ data }) => {
          console.log(data)
          // updating pagination to reflect in the UI
          this.serverPagination = pagination

          // we also set (or update) rowsNumber
          this.serverPagination.rowsNumber = data.rowsNumber

          // then we update the rows with the fetched ones
          this.serverData = data.rows
          this.loading = false
        })
        .catch(error => {
          console.log(error)
          this.loading = false
        })
    },
    requestAll () {
      axios
        .get(`http://127.0.0.1:8000/api/admin-products/listAll`)
        .then(({ data }) => {
          this.serverData = data.rows
        })
    },
    destroy (id, name, rowIndex) {
      this.$q.dialog({
        title: 'Vymazať',
        message: 'Ste si istý že chete odstrániť ' + name + '?',
        color: 'primary',
        ok: true,
        cancel: true
      }).then(() => {
        axios
          .delete(`http://127.0.0.1:8000/api/delete-product/${id}`)
          .then(() => {
            this.$q.notify({ type: 'positive', timeout: 2000, message: 'Produkt bol odstránený.' })
            // potrebujem reloadnut tabulku
            this.request({ pagination: this.serverPagination, filter: this.filter })
          })
          .catch(error => {
            this.$q.notify({ type: 'negative', timeout: 2000, message: 'Nastala chyba.' })
            console.log(error)
          })
      }).catch(() => {
        // nic sa nestane
      })
    }

  },
  mounted () {
    // once mounted, we need to trigger the initial server data fetch
    this.requestAll()
    this.request({
      pagination: this.serverPagination,
      filter: this.filter
    })
  }
}
</script>

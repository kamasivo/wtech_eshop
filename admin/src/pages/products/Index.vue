<template>
<div class="q-my-xl">
    <q-table
      :data="tableData"
      :columns="columns"
      row-key="id"
      title="List of products"
      >
      <q-tr slot="body" slot-scope="props" :props="props">
        <q-td key="id" :props="props">
          <span>{{ props.row.id }}</span>
        </q-td>
        <q-td key="name" :props="props">
          <span>{{ props.row.name }}</span>
        </q-td>
        <q-td class="text-right">
            <q-btn round icon="edit" class="q-mr-xs" @click="$router.push('/products/' + props.row.id + '/edit')" />
            <q-btn round icon="delete" />
        </q-td>
      </q-tr>
    </q-table>
</div>
</template>

<script>
import tableData from 'assets/table-data'
export default {
  data () {
    return {
      tableData,
      columns: [
        { name: 'id', label: 'ID', field: 'id', sortable: false, align: 'left' },
        { name: 'name', label: 'Name', field: 'name', sortable: true, align: 'left' },
        { name: 'actions', label: 'Actions', sortable: false, align: 'right' }
      ],
      selected: []
    }
  }
}
</script>

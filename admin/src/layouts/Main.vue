<template>
  <q-layout>
    <q-layout-header >
      <q-toolbar class="bg-deep-orange-6 ">
        <q-btn
          flat
          round
          dense
          icon="menu"
          @click="left = !left"
          class="q-mr-md"
        />
        <q-toolbar-title
          >CykloShop - ADMIN
          </q-toolbar-title
        >
      </q-toolbar>
    </q-layout-header>

    <q-layout-drawer v-model="left" side="left">
      <main-layout-drawer></main-layout-drawer>
    </q-layout-drawer>

    <q-page-container>
      <div class="row full-width justify-center">
        <router-view />
      </div>
    </q-page-container>

    <q-layout-footer class="no-shadow">
      <div class=" text-center q-pa-md">Copyright (C) 2020, Ivan Kamas, Miroslav Pavlák (WTECH)</div>
    </q-layout-footer>
  </q-layout>
</template>

<script>
import MainLayoutDrawer from 'components/layouts/Main/Drawer.vue'

export default {
  components: {
    MainLayoutDrawer
  },
  computed: {
    left: {
      get () {
        return this.$store.state.moduleUI.layout.drawerState
      },
      set (val) {
        this.$store.commit('moduleUI/updateDrawerState', val)
      }
    }
  }
}
</script>

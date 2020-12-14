<template>
  <div class="bg-deep-orange-3 full-height q-px-md q-py-lg" color="grey-1">
    <div class="q-subheading q-mb-sm">Produkty</div>
    <q-list link class="no-border">
      <q-item class="q-body-1" to="/products/index">
        <q-item-main>Zoznam produktov</q-item-main>
      </q-item>
      <q-item class="q-body-1" to="/products/create">
        <q-item-main>Vytvoriť produkt</q-item-main>
      </q-item>
      <q-btn type="a" color="green" href="http://127.0.0.1:8000" >Naspäť do obchodu</q-btn>
    </q-list>
  </div>
</template>

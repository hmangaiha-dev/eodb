<template>
  <q-menu>
    <q-list style="min-width: 100px">

      <q-item v-for="menu in menus.items" :key="menu.key" @click="handleMenuClick(menu.key)" clickable v-close-popup>
        <q-item-section>{{menu.title}}</q-item-section>
      </q-item>
    </q-list>
  </q-menu>
</template>
<script>
import {reactive} from "@vue/reactivity";

export default {
  emits: ['onMenuItemClick'],
  setup(props,context){
    const menus=reactive({
      items:[
        {key:'profile',title:'Update profile'},
        {key:'password',title:'Change password'},
        {key:'logout',title:'logout'},
      ]
    })
    const handleMenuClick=(menuitem)=>{
      context.emit("onMenuItemClick", menuitem);
    }
    return{
      menus,
      handleMenuClick
    }
  }
}
</script>

<template>
  <q-btn-dropdown v-for="menu in menus" :key="menu.id" no-caps dropdown-icon="arrow_drop_down" flat :icon="menu.icon" :label="menu.label">
    <q-list separator>
      <q-item v-for="menuItem in menu.items" :to="{name:menuItem.route_name}" clickable v-close-popup>
        <q-item-section avatar>
          <q-icon :name="menuItem.leftIcon"/>
        </q-item-section>
        <q-item-section>
          <q-item-label>{{menuItem.label}}</q-item-label>
        </q-item-section>
      </q-item>
    </q-list>
  </q-btn-dropdown>
</template>
<script>
export default {

  setup(props) {
    return{
      menus:[
        {id:'admin',label:'Admin Control',icon:null,
          items:[
            {route_name:'posting:read',label:'Staff postings',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'office:read',label:'Manage offices',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'staff:read',label:'Manage staffs',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'role:read',label:'Manage roles',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'district:read',label:'Master data',leftIcon:'tag',rightIcon:'navigate_next'}
          ]
        },
      ]
    }
  }
}
</script>

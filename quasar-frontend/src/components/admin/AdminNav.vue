<template>
  <q-btn-dropdown v-for="menu in menus" :key="menu.id" no-caps dropdown-icon="arrow_drop_down" flat :icon="menu.icon" :label="menu.label">
    <q-list separator>
      <q-item v-for="menuItem in menu.items" :to="{name:menuItem.route_name}" clickable v-close-popup>

        <q-item-section>
          <q-item-label>{{menuItem.label}}</q-item-label>
        </q-item-section>
        <q-item-section side>
          <q-icon :name="menuItem.rightIcon"/>
        </q-item-section>
      </q-item>
    </q-list>
  </q-btn-dropdown>
</template>
<script>
export default {

  // const test = {
  //   id: 'admin', label: 'File management', icon: 'bookmark',
  //   items: [
  //     {route_name: 'file:create', label: 'New file', leftIcon: 'label', rightIcon: 'navigate_next'},
  //     {route_name: 'file:read', label: 'Active files', leftIcon: 'label', rightIcon: 'navigate_next'},
  //     {route_name: 'file:incoming', label: 'Incoming files', leftIcon: 'label', rightIcon: 'navigate_next'},
  //     {route_name: 'file:outgoing', label: 'Outgoing files', leftIcon: 'label', rightIcon: 'navigate_next'},
  //     {route_name: 'file:archived', label: 'Archived files', leftIcon: 'label', rightIcon: 'navigate_next'},
  //   ]
  // }
  setup(props) {
    return{
      menus:[
         {id:'admin',label:'Applications',icon:'description',
          items:[
            // {route_name:'application:create',label:'New application',leftIcon:'label',rightIcon:'navigate_next'},
            {route_name:'ongoing-applications:read',label:'Ongoing Applications',leftIcon:'label',rightIcon:'navigate_next'},
            // {route_name:'application:incoming',label:'Incoming (online)',leftIcon:'label',rightIcon:'navigate_next'},
            {route_name:'application:archived',label:'Archived',leftIcon:'label',rightIcon:'navigate_next'},
          ]
        },
        {id:'admin',label:'Admin Control',icon:'settings_applications',
          items:[
            {route_name:'posting:read',label:'Staff postings',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'office:read',label:'Manage offices',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'staff:read',label:'Manage staffs',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'role:read',label:'Manage roles',leftIcon:'tag',rightIcon:'navigate_next'},
            {route_name:'district:read',label:'Master data',leftIcon:'tag',rightIcon:'navigate_next'}
          ]
        }
      ]
    }
  }
}
</script>

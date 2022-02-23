<template>
  <q-btn-dropdown
    v-for="menu in menus"
    :key="menu.id"
    no-caps
    dropdown-icon="arrow_drop_down"
    flat
    :icon="menu.icon"
    :label="menu.label"
  >
    <q-list separator>
      <q-item
        v-for="menuItem in menu.items"
        :key="menuItem.route_name"
        :to="{ name: menuItem.route_name }"
        clickable
        v-close-popup
      >
        <q-item-section>
          <q-item-label>{{ menuItem.label }}</q-item-label>
        </q-item-section>
        <q-item-section side>
          <q-icon :name="menuItem.rightIcon" />
        </q-item-section>
      </q-item>
    </q-list>
  </q-btn-dropdown>
</template>
<script>
import usePermissions from "src/utils/usePerms";
import { useStore } from "vuex";
import { computed, onMounted, ref, reactive } from "vue";
import { api } from "src/boot/axios";

export default {
  setup(props) {
    const store = useStore();
    const perms = computed(() => store.state.authData.permissions);
    const isSuper = ref(false);

    let menus = reactive([
      {
        id: "admin",
        label: "Applications",
        icon: "description",
        items: [
          // {route_name:'application:create',label:'New application',leftIcon:'label',rightIcon:'navigate_next'},
          {
            route_name: "ongoing-applications:read",
            label: "Ongoing Applications",
            leftIcon: "label",
            rightIcon: "navigate_next",
          },
          // {route_name:'application:incoming',label:'Incoming (online)',leftIcon:'label',rightIcon:'navigate_next'},
          {
            route_name: "application:archived",
            label: "Archived",
            leftIcon: "label",
            rightIcon: "navigate_next",
          },
        ],
      },
      {
        id: "admin",
        label: "Admin Control",
        icon: "settings_applications",
        items: [
          {
            route_name: "web:service",
            label: "Online Services",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "posting:read",
            label: "Staff postings",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "office:read",
            label: "Manage offices",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "staff:read",
            label: "Manage staffs",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "role:read",
            label: "Manage roles",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "district:read",
            label: "Master data",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
        ],
      },
      {
        id: "admin",
        label: "Web Management",
        icon: "public",
        items: [
          {
            route_name: "web:about",
            label: "About us",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "web:act",
            label: "Act & Rules",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "web:notification",
            label: "Notification",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
          {
            route_name: "web:other",
            label: "Other Information",
            leftIcon: "tag",
            rightIcon: "navigate_next",
          },
        ],
      },
    ]);

    const appCan = (p) => console.log(perms);

    onMounted(() => {
      api
        .get("super")
        .then((res) => {
          isSuper.value = res.data;

          if (!isSuper.value) {
            let menu = menus[1].items[0]; // Get Online service menu
            menus[2].items.unshift(menu) // move to web management
            menus.splice(1, 1); //remove admin control as it is not super admin
          }
        })
        .catch((err) => {
          console.log("some err", err);
          isSuper.value = false;
        });

      console.log("isSuper", isSuper.value);
    });

    return {
      perms,
      appCan,
      isSuper,
      menus,
    };
  },
};
</script>

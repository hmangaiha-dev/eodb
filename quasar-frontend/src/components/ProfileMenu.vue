<template>
  <q-list separator>
    <q-item exact :to="{ name: 'investor:profile' }" clickable>
      <q-item-section>
        <q-item-label>Profile</q-item-label>
      </q-item-section>
    </q-item>

    <q-item exact  :to="userType == 'staff' ? { name: 'staff:dashboard' } : { name: 'investor:dashboard' }" clickable>
    <!-- <q-item exact :to="{ name: 'investor:dashboard' }" clickable> -->
      <q-item-section>
        <q-item-label>Go to dashboard</q-item-label>
      </q-item-section>
    </q-item>

    <!--    <q-item :to="{name:'order-history:dashboard'}"  v-show="isAuthenticated"  clickable>-->
    <!--      <q-item-label></q-item-label>-->
    <!--    </q-item>-->
    <!--    <q-item :to="{name:'order-history:dashboard'}"  v-show="isAuthenticated"  clickable>-->
    <!--      <q-item-label>Order History</q-item-label>-->
    <!--    </q-item>-->
    <q-item @click="handleLogout" clickable>
      <q-item-section>
        <q-item-label>Sign out</q-item-label>
      </q-item-section>
    </q-item>
  </q-list>
</template>
<script>
import { reactive,computed } from "vue";
import { api } from "src/boot/axios";
import { useRouter } from "vue-router";
import { useStore } from "vuex";

// import {computed} from "vue";

export default {
  emits: ["onMenuItemClick"],
  setup(props, context) {
    const router = useRouter();
    const store = useStore();
    const menus = reactive({
      items: [
        { key: "profile", title: "Update profile" },
        { key: "password", title: "Change password" },
        { key: "logout", title: "logout" },
      ],
    });
    const handleMenuClick = (menuitem) => {
      context.emit("onMenuItemClick", menuitem);
    };
    return {
      menus,
      handleMenuClick,

      userType: computed(() => store.getters["authData/getUserType"]),

      handleLogout: (e) => {
        api
          .post("auth/logout")
          .then((res) => {
            store.dispatch("authData/setToken", null);
            store.dispatch("authData/setCurrentUser", null);
            router.push({ name: "home" });
          })
          .catch((err) => console.log(err));
      },
    };
  },
};
</script>

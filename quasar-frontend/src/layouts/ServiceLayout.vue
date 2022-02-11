<template>
    <div class="row">

      <div class="col-12">
        <p>Heading</p>
      </div>

      <div class="col-12 row justify-evenly">
        <div class="zcard">Left</div>
        <div class="zcard">Right</div>
      </div>

      <div class="col-12">
        <q-toolbar class="justify-center bg-white shadow-1">
          <q-item  clickable>
            <q-item-section>
              <q-item-label class="nav-item">Online Services</q-item-label>
            </q-item-section>
          </q-item>
          <q-item  clickable :to="$router.push({name:'web:about'})">
            <q-item-section>
              <q-item-label class="nav-item">About us</q-item-label>
            </q-item-section>
          </q-item>
          <q-item  clickable :to="$router.push({name:'web:act-rule'})">
            <q-item-section>
              <q-item-label class="nav-item">Act & Rules</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable :to="$router.push({name:'web:notification'})">
            <q-item-section>
              <q-item-label class="nav-item">Notifications</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable :to="$router.push({name:'web:other'})">
            <q-item-section>
              <q-item-label class="nav-item">Other Information</q-item-label>
            </q-item-section>
          </q-item>
        </q-toolbar>
      </div>

      <div class="col-12">
        <router-view/>
      </div>

    </div>
</template>

<script>
export default {
  setup() {
    return {};
  },
};
</script>

<style lang="scss" scoped></style>

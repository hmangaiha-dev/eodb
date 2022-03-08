<template>
  <q-page class="justify-center">
    <div
      style="max-width: 1400px; margin: 0 auto"
      class="row q-mt-md q-col-gutter-md q-pa-md"
    >
      <div class="col-12 ztitle text-start">Dashboard</div>

      <div class="col-sm-6 col-md-4">
        <q-card style="min-height: 150px;" bordered class="my-card">
          <q-card-section>
            <div class="text-h6 text-center text-green-7"> {{ countOngoing }} </div>
          </q-card-section>

          <q-separator dark inset />

          <q-card-section class="text-center zlabel">
            Ongoing Applications
          </q-card-section>
        </q-card>
      </div>

      <div class="col-sm-6 col-md-4">
        <q-card style="min-height: 150px;" bordered class="my-card">
          <q-card-section>
            <div class="text-h6 text-center text-orange-6">01</div>
          </q-card-section>

          <q-separator dark inset />

          <q-card-section class="text-center zlabel">
            Certificate Issued
          </q-card-section>
        </q-card>
      </div>

      <div class="col-sm-6 col-md-4">
        <q-card style="min-height: 150px;" bordered class="my-card">
          <q-card-section>
            <div class="text-h6 text-center text-red-6">01</div>
          </q-card-section>

          <q-separator dark inset />

          <q-card-section class="text-center zlabel">
            Declined Applications
          </q-card-section>
        </q-card>
      </div>
    </div>
  </q-page>
</template>
<script>
import { onMounted, ref,computed } from "vue";
import { useStore } from 'vuex'
import { api } from "src/boot/axios";
export default {
  setup(props, context) {
    const countOngoing = ref(0);
    const store = useStore();
    onMounted(() => {
    
    });

    return{
      countOngoing : computed(()=> store.state.globalData.applications?.length )
    }
  },
};
</script>

<template>
  <div class="row q-py-lg container justify-center q-col-gutter-lg">
    <div class="col-12 q-mt-lg">
      <div class="service-offer q-mb-lg">Track Application</div>
      <q-separator />
    </div>

    <div class="col-lg-6 col-xs-12 q-pr-md col-md-8 col-sm-10">
      <q-card flat class="my-card">
        <q-card-section>
          <div class="card-title text-center">Enter Tracking ID</div>
        </q-card-section>
        <q-card-section class="q-px-xl">
          <q-input
            v-model="formData.application_id"
            autocapitalize="on"
            dense
            outlined
            style="text-transform: uppercase"
            type="text"
            placeholder="e.g MZINC21000011"
          />
        </q-card-section>

        <q-card-section>
          <q-btn
            @click="handleTracking"
            flat
            :disable="formData.application_id.length < 4"
            size="md"
            class="q-px-xl btn-track text-capitalize"
            label="Track"
          />
        </q-card-section>
      </q-card>
      <!-- <q-dialog v-model="localData.openTracking">
          <Tracking :states="localData.states" :application_id="formData.application_id">
            <template v-slot:actions>
              <q-btn color="negative" outline @click="localData.openTracking=false" label="Close"/>
            </template>
          </Tracking>
        </q-dialog> -->
    </div>
  </div>
  <!-- </q-page> -->
  <!-- </q-layout> -->
</template>

<script>
import { useMeta, useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { api } from "boot/axios";
// import Tracking from "components/Tracking";
const metaData = {
  title: "Track Application",
};

export default {
  // components: {Tracking},
  setup() {
    useMeta(metaData);
    const q = useQuasar();
    const localData = reactive({
      openTracking: false,
    });
    const formData = reactive({
      application_id: "",
    });
    const handleTracking = () => {
      api
        .get(`application/${formData.application_id}/states`)
        .then((res) => {
          localData.states = res.data;
          localData.openTracking = true;
        })
        .catch((err) => {
          if (err?.response?.data?.errors)
            localData.errors = err.response.data?.errors;
          err?.response?.data?.message &&
            q.notify({
              type: "negative",
              message: err.response?.data?.message,
            });
        });
    };
    return {
      localData,
      formData,
      handleTracking,
    };
  },
};
</script>

<style scoped>
.btn-track {
  border-radius: 6px;
  background-color: #0ecb73;
  color: #fff;
  font-family: "Roboto";
  font-size: 18px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  /* text-align: left; */
  color: #fff;
}

.card-title {
  font-family: "Lato";
  font-size: 25px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #1a1a1a;
}
</style>

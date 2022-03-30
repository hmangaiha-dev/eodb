<template>
  <div class="row q-py-lg container justify-center q-col-gutter-lg">
    <div class="col-12 q-mt-lg">
      <div class="service-offer q-mb-lg">Track Application</div>
      <q-separator />
    </div>

    <q-dialog v-model="localData.dialogStatus">
      <div style="max-width: 800px" class="row">
        <q-card class="col-12 full-width">
          <q-card-section>
            <q-markup-table separator="cell" flat bordered>
              <tbody>
                <tr>
                  <td class="text-left text-weight-bold">Application Reference Number :</td>
                  <td class="text-center">{{ localData?.data.profile.id }}</td>
                </tr>
                <tr>
                  <td class="text-left text-weight-bold">Name of the Service :</td>
                  <td class="text-center">
                    {{ localData?.data?.profile.application_name }}
                  </td>
                </tr>
                <tr>
                  <td class="text-left text-weight-bold">Applied By :</td>
                  <td class="text-center">
                    {{ localData?.data?.profile.username }}
                  </td>
                </tr>
                <tr>
                  <td class="text-left text-weight-bold">Status</td>
                  <td class="text-center">{{ localData?.data.name }}</td>
                </tr>
                <tr>
                  <td class="text-left text-weight-bold">Submitted Application Form :</td>
                  <td class="text-center"> <q-btn :to="{ 
                    name: 'investor:show-applicant',
                    params: {
                      id: formData.application_id
                    }
                   }" color="primary" flat label="view" /> </td>
                </tr>
              </tbody>
            </q-markup-table>
          </q-card-section>
          <q-card-actions align="right">
            <q-btn
              size="md"
              padding="sm"
              label="Close"
              color="primary"
              v-close-popup
            />
          </q-card-actions>
        </q-card>
      </div>
    </q-dialog>

    <div class="col-lg-6 col-xs-12 q-pr-md col-md-8 col-sm-10">
      <q-form @submit="handleTracking" class="q-gutter-md">
        <q-card flat class="my-card">
          <q-card-section>
            <div class="card-title text-center">Enter Tracking ID</div>
          </q-card-section>
          <q-card-section class="q-px-xl">
            <q-input
             :rules="[(val) => (val && val.length > 0) || 'Please type something']"
              v-model="formData.application_id"
              autocapitalize="on"
              dense
              outlined
              style="text-transform: uppercase"
              type="text"
              placeholder="e.g MZINC21000011"
            />
          </q-card-section>
          <!-- :disable="formData.application_id.length < 4" -->

          <q-card-section>
            <q-btn
              :disable="formData.application_id.length < 1"
              @click="handleTracking"
              flat
              size="md"
              class="q-px-xl btn-track text-capitalize"
              label="Track"
            />
          </q-card-section>
        </q-card>
      </q-form>

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
      dialogStatus: false,
      data: {},
    });
    const formData = reactive({
      application_id: "",
    });
    const handleTracking = () => {
      api
        .get(`applications/${formData.application_id}/states`)
        .then((res) => {
          // return console.log("status", res.data);
          localData.data = res.data;
          localData.dialogStatus = true;
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

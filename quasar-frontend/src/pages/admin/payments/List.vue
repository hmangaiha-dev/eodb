<template>
  <div class="row q-py-lg container start q-col-gutter-lg">
    <div class="col-12 q-mt-lg">
      <div class="ztitle q-mb-lg">Payment    List</div>
      <q-separator />
    </div>

    <div class="col-xs-12">
      <q-markup-table wrap-cells separator="vertical" flat bordered>
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">Service applied</th>
            <th class="text-center">Department</th>
            <th class="text-center">Order ID</th>
            <th class="text-center">Txn ID</th>
            <th class="text-center">Txn ID</th>
            <th class="text-center">Mode</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Status</th>
          </tr>
        </thead>
        <tbody>
          <!-- {{ localData?.payments }} -->
          <tr v-for="(item,index) in localData?.payments" :key="item">
            
            <td class="text-center"> {{ index+1 }} </td>
            <td class="text-center"> {{ item?.services?.application_name }} </td>
            <td class="text-center"> {{ item.services?.department?.dept_name }} </td>
            <td class="text-center"> {{ item.order_id }} </td>
            <td class="text-center"> {{ item.txn_id }} </td>
            <td class="text-center"> {{ item.txn_date }} </td>
            <td class="text-center"> {{ item.payment_mode }} </td>
            <td class="text-center"> {{ item.amount }} </td>
            <td :class="item?.status == 'TXN_SUCCESS' ? 'text-green' : 'text-red'"  class="text-right"> {{ item.status }} </td>
          </tr>
          
        </tbody>
      </q-markup-table>
    </div>
  </div>
  <!-- </q-page> -->
  <!-- </q-layout> -->
</template>

<script>
import { useMeta, useQuasar } from "quasar";
import { reactive } from "@vue/reactivity";
import { api } from "boot/axios";
import { onMounted } from "vue";
// import { api } from "boot/axios";
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
     payments: []
    });
    const formData = reactive({
      application_id: "",
    });

    onMounted(async() => {
      await api
        .get('office/payments')
        .then((res) => {
        //    return console.log("payments", res.data);
          localData.payments = res.data
          //  console.log("payment", localData.payments[0].order_id);
          // localData.data = res.data;
          // localData.dialogStatus = true;
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

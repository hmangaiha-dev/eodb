<template>
  <div class="q-pa-md">
    <q-tabs v-model="tab" class="text-teal">
      <q-tab name="services" icon="mails" label="Online Servies" />
      <q-tab name="about" icon="alarm" label="About Us" />
      <q-tab name="actrules" icon="movie" label="Act & Rules" />
      <q-tab name="noti" icon="movie" label="Noftifications" />
      <q-tab name="other" icon="movie" label="Other Infomations" />
    </q-tabs>
    <div v-if="tab == 'services'" class="text-h5 q-my-md">Online services</div>
    <q-table
      v-if="tab == 'services'"
      :columns="columns"
      :rows="rows"
      row-key="name"
    >
      <template v-slot:body="props">
        <q-tr :props="props">
          <q-td key="name" :props="props">
            {{ props.row.name }}
          </q-td>
          <q-td key="calories" :props="props">
            <q-btn color="blue-6" flat label="View" />
          </q-td>
          <q-td key="fat" :props="props">
            <q-btn
              color="blue-6"
              flat
              label="View procedure"
             
            />
          </q-td>

           <q-td key="carbs" :props="props">
            <q-btn
              color="blue-6"
              flat
              label="View document"
             
            />
          </q-td>

           <q-td key="protein" :props="props">
            <q-btn
              color="blue-6"
              flat
              label="View"
             
            />
          </q-td>

           <q-td key="sodium" :props="props">
            <q-btn
              color="blue-6"
              flat
              label="View fees"
             
            />
          </q-td>

           <q-td key="form" :props="props">
            <q-btn
              color="blue-6"
              flat
              label="Download"
             
            />
          </q-td>

          <q-td key="apply" :props="props">
            <q-btn
              color="blue-6"
              flat
              label="Apply"
             
            />
          </q-td>

          
        </q-tr>
        <!-- <q-tr :props="props"> -->

        <!-- </q-tr> -->
      </template>
    </q-table>
    <div v-if="tab == 'about'">
      <AboutUs />
    </div>

    <div v-if="tab == 'actrules'">
      <ActRules />
    </div>

    <div v-if="tab == 'noti'">
      <Notifications />
    </div>

    <div v-if="tab == 'other'">
      <OtherInfo />
    </div>
  </div>
</template>

<script>
import AboutUs from "./AboutUs.vue";
import ActRules from "./ActRules.vue";
import ApplyService from "./ApplyService.vue";
import Notifications from "./Notifications.vue";
// import Notifications from "./Notifications.vue";
import { ref } from "vue";
import OtherInfo from "./OtherInfo.vue";
const columns = [
  {
    name: "name",
    required: true,
    label: "Name of service",
    align: "left",
    field: (row) => row.name,
    format: (val) => `${val}`,
    sortable: true,
  },
  {
    name: "calories",
    align: "center",
    label: "Who should apply?",
    field: "calories",
    sortable: true,
  },
  { name: "fat", align: "center", label: "How to apply?", field: "fat", sortable: true },
  { name: "carbs",  align: "center", label: "Documents to be submitted", field: "carbs" },
  { name: "protein",  align: "center", label: "Timeline", field: "protein" },
  { name: "sodium",  align: "center", label: "Fees", field: "sodium" },
  { name: "form",  align: "center", label: "Download Form", field: "form" },
  { name: "apply",  align: "center", label: "Apply Online", field: "apply" },
];
const rows = [
  {
    name: "Frozen Yogurt",
    calories: 159,
    fat: 6.0,
    carbs: 24,
    protein: 4.0,
    form: 87,
    apply: "14%",
    iron: "1%",
  },
  {
    name: "Ice cream sandwich",
    calories: 237,
    fat: 9.0,
    carbs: 37,
    protein: 4.3,
    form: 129,
    apply: "8%",
    iron: "1%",
  },
  {
    name: "Eclair",
    calories: 262,
    fat: 16.0,
    carbs: 23,
    protein: 6.0,
    form: 337,
    apply: "6%",
    iron: "7%",
  },
  {
    name: "Cupcake",
    calories: 305,
    fat: 3.7,
    carbs: 67,
    protein: 4.3,
    form: 413,
    apply: "3%",
    iron: "8%",
  },
  {
    name: "Gingerbread",
    calories: 356,
    fat: 16.0,
    carbs: 49,
    protein: 3.9,
    form: 327,
    apply: "7%",
    iron: "16%",
  },
  {
    name: "Jelly bean",
    calories: 375,
    fat: 0.0,
    carbs: 94,
    protein: 0.0,
    form: 50,
    apply: "0%",
    iron: "0%",
  },
  {
    name: "Lollipop",
    calories: 392,
    fat: 0.2,
    carbs: 98,
    protein: 0,
    form: 38,
    apply: "0%",
    iron: "2%",
  },
  {
    name: "Honeycomb",
    calories: 408,
    fat: 3.2,
    carbs: 87,
    protein: 6.5,
    form: 562,
    apply: "0%",
    iron: "45%",
  },
  {
    name: "Donut",
    calories: 452,
    fat: 25.0,
    carbs: 51,
    protein: 4.9,
    form: 326,
    apply: "2%",
    iron: "22%",
  },
  {
    name: "KitKat",
    calories: 518,
    fat: 26.0,
    carbs: 65,
    protein: 7,
    form: 54,
    apply: "12%",
    iron: "6%",
  },
];
export default {
  components: {
    AboutUs,
    ActRules,
    ApplyService,
    Notifications,
    Notifications,
    OtherInfo,
  },
  setup(props, context) {
    console.log("layouts is".Layouts);
    return {
      rows,
      columns,
      tab: ref("actrules"),
    };
  },
};
</script>

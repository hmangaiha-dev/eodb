<template>
  <div class="q-pa-md">
    <q-table
      title="Approved Applications"
      :columns="columns"
      :rows="rows"
      row-key="name"
      @row-click ="handleRowClick"
    >
      <!-- <template v-slot:body="props">
        <q-tr :props="props">
          <q-td key="name" :props="props">
            {{ props.row.name }}
          </q-td>
          <q-td key="calories" :props="props">
            <q-btn color="blue-6" flat label="View" />
          </q-td>
          <q-td key="fat" :props="props">
            <q-btn color="blue-6" flat label="View procedure" />
          </q-td>

          <q-td key="carbs" :props="props">
            <q-btn color="blue-6" flat label="View document" />
          </q-td>

          <q-td key="protein" :props="props">
            <q-btn color="blue-6" flat label="View" />
          </q-td>

          <q-td key="sodium" :props="props">
            <q-btn color="blue-6" flat label="View fees" />
          </q-td>

          <q-td key="form" :props="props">
            <q-btn color="blue-6" flat label="Download" />
          </q-td>

          <q-td key="apply" :props="props">
            <q-btn color="blue-6" flat label="Apply" />
          </q-td>
        </q-tr>
       
      </template> -->
    </q-table>


    <q-dialog v-model="dialog" :position="position">
     <q-card class="my-card">
        <q-img src="https://cdn.quasar.dev/img/chicken-salad.jpg" />

        <q-card-section>
          <q-btn
            fab
            color="primary"
            icon="place"
            class="absolute"
            style="top: 0; right: 12px; transform: translateY(-50%);"
          />

          <div class="row no-wrap items-center">
            <div class="col text-h6 ellipsis">
              Cafe Basilico
            </div>
            <div class="col-auto text-grey text-caption q-pt-md row no-wrap items-center">
              <q-icon name="place" />
              250 ft
            </div>
          </div>

       
        </q-card-section>

        <q-card-section class="q-pt-none">
          <div class="text-subtitle1">
            $・Italian, Cafe
          </div>
          <div class="text-caption text-grey">
            Small plates, salads & sandwiches in an intimate setting.
          </div>
        </q-card-section>

        <q-separator />

        <q-card-actions align="right">
          <q-btn v-close-popup flat color="primary" label="Reserve" />
          <q-btn v-close-popup flat color="primary" round icon="event" />
        </q-card-actions>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
// import AboutUs from "./AboutUs.vue";
import { useRoute } from "vue-router";

// import Notifications from "./Notifications.vue";
import { ref, onMounted } from "vue";

import routes from "src/router/routes";

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
    label: "Dept. name",
    field: "calories",
    sortable: true,
  },
  {
    name: "fat",
    align: "center",
    label: "Application id",
    field: "fat",
    sortable: true,
  },

  { name: "apply", align: "center", label: "Submitted at", field: "apply" },
];
const rows = [
  {
    name: "Frozen Yogurt",
    calories: 159,
    fat: 6.0,
    carbs: 24,
    protein: 4.0,
    form: 87,
    apply:  new Date().toLocaleDateString(),
    iron: "1%",
  },
  {
    name: "Ice cream sandwich",
    calories: 237,
    fat: 9.0,
    carbs: 37,
    protein: 4.3,
    form: 129,
    apply:  new Date().toLocaleDateString(),
    iron: "1%",
  },
  
];
export default {
  setup(props, context) {
    const route = useRoute();

    const dialog = ref(false)
    const position = ref('top')

    onMounted(() => {
      console.log("mounted hook");
    });

    console.log("layouts is".Layouts);


    function open (pos) {
        position.value = pos
        dialog.value = true
      }


    const handleRowClick = (evt, row, index) => {
        open('right');
        console.log('row clicked',row);
    }



    return {
      rows,
      columns,
      tab: ref("actrules"),
      handleRowClick,

       dialog,
      position,

      open
    };
  },
};
</script>

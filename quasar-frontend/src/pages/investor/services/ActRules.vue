<template>
  <!-- <div v-for="row in rows" :key="row">
    {{ data.name }}
  </div> -->

  <q-table
    flat
    title-class="text-uppercase"
    title="Act and Rules"
    :columns="columns"
    :rows="rows"
    row-key="name"
  >
    <template v-slot:body="props">
      <q-tr :props="props">
        <q-td key="name" :props="props">
          {{ props.row.name }}
        </q-td>

        <q-td key="description" :props="props">
          {{ props.row.description }}
        </q-td>

        <q-td key="attachment" :props="props">
          <q-btn
            @click="redirectUrl(props.row.attachment?.full_path)"
            color="primary"
            label="download"
          />
          <!-- {{ props.row.attachment?.full_path }} -->
        </q-td>
      </q-tr>
    </template>
  </q-table>
</template>

<script>
import { onMounted, reactive, ref } from "vue";
// import { useRoute } from "vue-router";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import { useRouter, useRoute } from "vue-router";

export default {
  setup(props, context) {
    const router = useRouter();
    const route = useRoute();
    const q = useQuasar();
    const columns = reactive([
      {
        name: "name",
        required: true,
        label: "Name",
        align: "left",
        field: "name",
        format: (val) => `${val}`,
        sortable: false,
      },
      {
        name: "description",
        required: true,
        label: "Description",
        align: "left",
        field: "description",
        format: (val) => `${val}`,
        sortable: false,
      },
      {
        name: "attachment",
        required: true,
        label: "Download",
        align: "left",
        field: "attachment",
        format: (val) => `${val}`,
        sortable: true,
      },
    ]);

    let rows = ref([
      {
        // name: "commerce",
        // description: "TEst",
      },
    ]);

    const localState = reactive({
      data: [],
    });
    onMounted(() => {
      const { deptname } = route.params;

      q.loading.show();
      api
        .get(`web/${deptname}/act-rule`)
        .then((res) => {
          // const {data} = res.data;
          console.log("data", res.data.list.data);
          localState.data = res.data.list.data;

          rows.value = res.data.list.data;

          console.log("rows", rows.value);
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
        })
        .finally(() => q.loading.hide());
    });
    return {
      localState,
      columns,
      rows,
      route,
      router,
      redirectUrl: (route) => {
        window.open(route, "_blank").focus();
      },
    };
  },
};
</script>

<style lang="scss" scoped></style>

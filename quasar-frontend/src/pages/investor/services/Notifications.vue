<template>
  <!-- <div v-for="row in rows" :key="row">
    {{ data.name }}
  </div> -->

  <q-table
    flat
    title-class="text-uppercase"
    title="Notifications"
    :columns="columns"
    :rows="rows"
    row-key="name"
  >
    <template v-slot:body="props">
      <q-tr :props="props">
        <q-td key="issued_at" :props="props">
          {{ props.row.issued_at }}
        </q-td>

        <q-td key="number" :props="props">
          {{ props.row.number }}
        </q-td>
        <q-td key="subject" :props="props">
          {{ props.row.subject }}
        </q-td>
        <q-td key="authority" :props="props">
          {{ props.row.authority }}
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
        name: "issued_at",
        required: true,
        label: "Date",
        align: "left",
        field: "issued_at",
        format: (val) => `${val}`,
        sortable: false,
      },
      {
        name: "number",
        required: true,
        label: "Notification number",
        align: "left",
        field: "number",
        format: (val) => `${val}`,
        sortable: false,
      },
      {
        name: "subject",
        required: true,
        label: "Subject",
        align: "left",
        field: "subject",
        format: (val) => `${val}`,
        sortable: true,
      },
      {
        name: "authority",
        required: true,
        label: "Issuing Authority",
        align: "left",
        field: "authority",
        format: (val) => `${val}`,
        sortable: true,
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
        .get(`web/${deptname}/notification`)
        .then((res) => {
      
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

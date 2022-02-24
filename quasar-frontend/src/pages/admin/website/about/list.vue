<template>
  <!-- <q-page class="container-lg q-my-md" padding> -->

  <q-item>
    <q-item-section avatar>
      <q-avatar
        class="cursor-pointer"
        @click="handleDownload(item)"
        icon="attachment"
      />
    </q-item-section>
    <q-item-section>
      <q-item-label>{{ localData.listData.name }}</q-item-label>
      <q-item-label caption>{{ localData.listData.code }}</q-item-label>
    </q-item-section>
    <q-item-section style="max-height: 200px" class="ellipsis">
      <q-item-label v-html="localData.listData.content" />
      <!-- <q-item-label caption>{{ item?.dept_code }}</q-item-label> -->
    </q-item-section>
    <q-item-section side>
      <div class="flex flex-inline q-gutter-sm">
        <q-btn
          @click="handleEdit(localData.listData)"
          size="12px"
          outline
          icon="edit"
        />

        <!--                  <q-btn @click="handleEdit(item)" size="12px" outline icon="edit"/>-->
        <q-btn
          @click="handleDelete(localData.listData)"
          size="12px"
          outline
          icon="delete"
        />
      </div>
    </q-item-section>
  </q-item>

  <q-dialog @hide="localData.openCreate = false" v-model="localData.openCreate">
    <act-create @onCreated="onCreated" />
  </q-dialog>
  <q-dialog
    class=""
    @hide="localData.openEdit = false"
    v-model="localData.openEdit"
  >
    <Edit @onUpdated="onUpdated" :dept="localData.dept" />
  </q-dialog>
  <!-- </q-list> -->
  <!-- </q-page> -->
</template>
<script>
import { computed, reactive, toRefs, toRef } from "vue";
import Create from "pages/admin/staff/Create";
import { onMounted } from "@vue/runtime-core";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import Edit from "pages/admin/website/about/Edit.vue";
// import ActCreate from "pages/admin/website/about/Create";
import axios from "axios";

export default {
  components: { Edit, Create },
  props: ["dept"],
  emits: ["updateAbout"],

  setup(props, context) {
    // const propsRef = toRef(props);
    console.log("props test", props.dept);
    const q = useQuasar();
    const localData = reactive({
      openCreate: false,
      openEdit: false,
      selectedStaff: null,
      search: "",
      listData: {
        // per_page: props.dept?.per_page,
        // data: props.dept.data,
        // current_page: props.dept.current_page,
        // total: props.dept.total,

        id: props.dept.id,
        name: props.dept.dept_name,
        code: props.dept.dept_code,
        content: props.dept?.about?.content,
      },
      dept: {},
    });
    const onCreated = (values) => {
      localData.openCreate = false;
      localData.listData = values;
    };
    const onUpdated = (values) => {
      // localData.openEdit = false;
      context.emit("updateAbout", values);

      // console.log('onUpdatesd',values);
      // localData.listData = values;
    };
    const onStaffUpdated = (values) => {
      localData.openEdit = false;
      localData.listData = values;
    };
    const deleteAct = (id) => {
      api
        .delete(`web/act-rule/${id}`)
        .then((res) => {
          const { current_page, total, per_page, data } = res.data.list;
          localData.listData.current_page = current_page;
          localData.listData.data = data;
          localData.listData.total = total;
          localData.listData.per_page = per_page;
          q.notify({ type: "positive", message: res.data?.message });
        })
        .catch((err) => {
          q.notify({ type: "negative", message: err?.response?.data?.message });
        });
    };

    const handleDownload = (item) => {
      api.get(`web/act-rule/${item.id}/download`).then((res) => {
        const { data } = res.data;
        let a = document.createElement("a");
        a.href = data?.full_path;
        a.target = "_blank";
        a.click();
      });
    };
    const handleEdit = (item) => {
      localData.dept = Object.assign(localData.dept, item);

      console.log("item", localData.dept);
      localData.openEdit = true;
    };

    const handleDelete = (item) => {
      q.dialog({
        title: "Confirm",
        message: "Would you like to delete?",
        cancel: true,
        persistent: true,
      })
        .onOk(() => {
          deleteAct(item.id);
        })
        .onCancel(() => {
          // console.log('>>>> Cancel')
        })
        .onDismiss(() => {
          // console.log('I am triggered on both OK and Cancel')
        });
    };

    const handleSearch = (e) => {
      localData.search = e.target.value;
      if (e.keyCode === 13) fetchActs(1);
    };
    const updatePagination = (value) => {
      fetchActs(value);
    };

    const fetchActs = (page) => {
      api
        .get(`web/act-rule?page=${page}`, {
          params: { search: localData.search },
        })
        .then((res) => {
          const { current_page, total, per_page, data } = res.data.list;
          localData.listData.current_page = current_page;
          localData.listData.data = data;
          localData.listData.total = total;
          localData.listData.per_page = per_page;
        })
        .catch((err) => {
          let message = !!err?.response
            ? err.response?.message
            : err.toString();
          q.notify({ type: "negative", message });
        });
    };
    onMounted(() => {
      console.log("props mounted", props.depts);
      // fetchActs(localData.listData.page);
    });
    return {
      updatePagination,
      pageCount: computed(() =>
        Math.ceil(localData.listData.total / localData.listData.per_page)
      ),
      localData,
      deleteAct,
      onCreated,
      onUpdated,
      onStaffUpdated,
      handleSearch,
      handleDownload,
      handleEdit,
      handleDelete,
    };
  },
};
</script>

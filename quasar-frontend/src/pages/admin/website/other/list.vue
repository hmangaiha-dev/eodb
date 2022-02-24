<template>
  <q-page class="container-lg q-my-md" padding>
    <div class="zcard">
      <p class="ztitle">Act & Rules</p>
      <div class="row q-col-gutter-md">
        <div class="flex justify-between flex-inline col-12">
          <q-btn
            @click="localData.openCreate = true"
            outline
            label="New Act & Rule"
            color="primary"
          />
          <q-input
            v-model="localData.search"
            placeholder="Search"
            @keyup="handleSearch"
            outlined
            dense
          >
            <template v-slot:append>
              <q-icon name="search" />
            </template>
          </q-input>
        </div>

        <div class="col-12">
          <q-separator />
        </div>
        <div class="col-12">
          <q-list separator>
            <q-item v-for="item in localData.listData.data" :key="item.id">
              <q-item-section avatar>
                <q-avatar
                  class="cursor-pointer"
                  @click="handleDownload(item)"
                  icon="attachment"
                />
              </q-item-section>
              <q-item-section>
                <q-item-label>{{ item?.title }}</q-item-label>
                <q-item-label caption>{{ item?.description }}</q-item-label>
              </q-item-section>
              <q-item-section side>
                <div class="flex flex-inline q-gutter-sm">
                  <q-btn
                    @click="handleEdit(item)"
                    size="12px"
                    outline
                    icon="edit"
                  />

                  <!--                  <q-btn @click="handleEdit(item)" size="12px" outline icon="edit"/>-->
                  <q-btn
                    @click="handleDelete(item)"
                    size="12px"
                    outline
                    icon="delete"
                  />
                </div>
              </q-item-section>
            </q-item>
          </q-list>
        </div>
        <div class="col-12">
          <q-pagination
            @update:model-value="updatePagination"
            v-model="localData.listData.current_page"
            :max="pageCount"
            input
          />
        </div>
      </div>
    </div>
    <q-dialog
      @hide="localData.openCreate = false"
      v-model="localData.openCreate"
    >
      <act-create @onCreated="onCreated" />
    </q-dialog>
    <q-dialog @hide="localData.openEdit = false" v-model="localData.openEdit">
      <Edit @onUpdated="onUpdated" :other="localData.other" />
    </q-dialog>
  </q-page>
</template>
<script>
import { computed, reactive } from "@vue/reactivity";
import Create from "pages/admin/staff/Create";
import { onMounted } from "@vue/runtime-core";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import Edit from "pages/admin/website/other/Edit.vue";
import ActCreate from "pages/admin/website/other/Create";
import axios from "axios";

export default {
  components: { ActCreate, Edit, Create },

  setup(props, context) {
    const q = useQuasar();
    const localData = reactive({
      openCreate: false,
      openEdit: false,
      selectedStaff: null,
      search: "",
      listData: {
        per_page: 15,
        data: [],
        current_page: 1,
        total: 1,
      },
      other: {},
    });
    const onCreated = (values) => {
      localData.openCreate = false;
      localData.listData = values;
    };
    const onUpdated = (values) => {
      localData.openEdit = false;
      localData.listData = values;
    };
    const onStaffUpdated = (values) => {
      localData.openEdit = false;
      localData.listData = values;
    };
    const deleteAct = (id) => {
      api
        .delete(`web/other/${id}`)
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
      api.get(`web/other/${item.id}/download`).then((res) => {
        const { data } = res.data;
        let a = document.createElement("a");
        a.href = data?.full_path;
        a.target = "_blank";
        a.click();
      });
    };
    const handleEdit = (item) => {
      localData.other = Object.assign(localData.other, item);

      // return console.log('item',localData.acts);
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
        .get(`web/other?page=${page}`, {
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
    onMounted(() => fetchActs(localData.listData.page));
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

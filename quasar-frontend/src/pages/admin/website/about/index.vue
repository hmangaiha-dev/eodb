<template>
  <q-page padding class="container-lg q-my-md">
    <p class="ztitle">About us</p>
    <!-- {{ isSuper }} -->

    <q-card v-if="loading">
      <q-item>
        <q-item-section avatar>
          <q-skeleton type="QAvatar" />
        </q-item-section>

        <q-item-section>
          <q-item-label>
            <q-skeleton type="text" />
          </q-item-label>
          <q-item-label caption>
            <q-skeleton type="text" />
          </q-item-label>
        </q-item-section>
      </q-item>

      <q-skeleton height="200px" square />

      <q-card-actions align="right" class="q-gutter-md">
        <q-skeleton type="QBtn" />
        <q-skeleton type="QBtn" />
      </q-card-actions>
    </q-card>
    

    <div v-else>
      <div v-if="!isSuper">
        <Edit @onUpdated="onUpdated" :dept="formData" />
      </div>
      <div v-else>
        <div class="zcard">
          <div class="row q-col-gutter-md">
            <div class="flex justify-between flex-inline col-12"></div>
            <div class="col-12">
              <q-list separator>
                <List
                  ref="listRef"
                  @updateAbout="updateAbout"
                  v-for="(dept, index) in localData.depts.data"
                  :key="dept"
                  :dept="dept"
                />
              </q-list>
            </div>
            <div class="col-12">
              <q-pagination
                @update:model-value="updatePagination"
                v-model="localData.current_page"
                :max="pageCount"
                input
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </q-page>
</template>
<script>
import { useRoute } from "vue-router";
import { useQuasar } from "quasar";
import { onMounted, reactive, ref, computed } from "vue";
import { api } from "boot/axios";
import List from "pages/admin/website/about/list.vue";
import Edit from "pages/admin/website/about/Edit.vue";

export default {
  components: {
    List,
    Edit,
  },
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const listRef = ref(null);
    const isSuper = ref(false);
    const loading = ref(true);
    // var depts = reactive();
    const localData = reactive({
      depts: [],
      per_page: 15,
      data: [],
      search: "",
      current_page: 1,
      total: 1,
    });
    let formData = reactive({
      id: "",
      name: "",
      code: "",
      content: "",
    });

    const detail = () => {
      api
        .get(`web/about`)
        .then((res) => {
          const { data, role } = res.data;
          const { current_page, total, per_page } = res.data.data;
          localData.current_page = current_page;
          localData.data = data;
          localData.total = total;
          localData.per_page = per_page;
          if (!role) {
            formData.content = data.data[0]?.about?.content || '';
            formData.id = data.data[0]?.id;
            formData.name = data.data[0]?.dept_name;
            formData.code = data.data[0]?.dept_code;
            console.log("content check", formData);
          } else {
            localData.depts = data;
            isSuper.value = true;
          }

          loading.value = false;
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
          loading.value = false;
        });
    };

    const onUpdated = (values) => updateAbout(values);

    const updatePagination = (value) => fetchAbout(value);
    
    const fetchAbout = (page) => {
      api
        .get(`web/about?page=${page}`, {
          params: { search: localData.search },
        })
        .then((res) => {
          const { data, role } = res.data;
          const { current_page, total, per_page } = res.data.data;
          localData.current_page = current_page;
          localData.data = data;
          localData.total = total;
          localData.per_page = per_page;
          if (!role) {
            formData.content = data.data[0]?.about.content;
            formData.id = data.data[0]?.id;
            formData.name = data.data[0]?.dept_name;
            formData.code = data.data[0]?.dept_code;
          } else {
            localData.depts = data;
            isSuper.value = true;
          }

          loading.value = false;
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
          loading.value = false;
        });
    };
    const updateAbout = (values) => {
      formData = Object.assign(formData, values);
      submit();
    };

    onMounted(() => detail());

    const submit = () => {
      api
        .put(`web/about`, formData)
        .then((res) => {
          q.notify({
            type: "positive",
            message: res.data?.message || "Success",
          });
          // listRef.value.localData.openEdit = false;
          detail();
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
        });
    };
    return {
      localData,
      formData,
      isSuper,
      loading,
      pageCount: computed(() =>
        Math.ceil(localData.total / localData.per_page)
      ),
      submit,
      updateAbout,
      updatePagination,
      listRef,
      onUpdated,
      fetchAbout,
    };
  },
};
</script>

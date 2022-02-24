<template>
  <q-page padding class="container-lg q-my-md">
    <p class="ztitle">About us</p>
    <!-- depts {{ localData?.depts?.data }} -->
    <q-form v-if="!isSuper" @submit="submit" class="row zcard">
      <div class="col-12">
        <q-editor
          v-model="formData.content"
          :dense="$q.screen.lt.md"
          :toolbar="[
            [
              {
                label: $q.lang.editor.align,
                icon: $q.iconSet.editor.align,
                fixedLabel: true,
                list: 'only-icons',
                options: ['left', 'center', 'right', 'justify'],
              },
              {
                label: $q.lang.editor.align,
                icon: $q.iconSet.editor.align,
                fixedLabel: true,
                options: ['left', 'center', 'right', 'justify'],
              },
            ],
            [
              'bold',
              'italic',
              'strike',
              'underline',
              'subscript',
              'superscript',
            ],
            ['token', 'hr', 'link', 'custom_btn'],
            ['print', 'fullscreen'],
            [
              {
                label: $q.lang.editor.formatting,
                icon: $q.iconSet.editor.formatting,
                list: 'no-icons',
                options: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'code'],
              },
              {
                label: $q.lang.editor.fontSize,
                icon: $q.iconSet.editor.fontSize,
                fixedLabel: true,
                fixedIcon: true,
                list: 'no-icons',
                options: [
                  'size-1',
                  'size-2',
                  'size-3',
                  'size-4',
                  'size-5',
                  'size-6',
                  'size-7',
                ],
              },
              {
                label: $q.lang.editor.defaultFont,
                icon: $q.iconSet.editor.font,
                fixedIcon: true,
                list: 'no-icons',
                options: [
                  'default_font',
                  'arial',
                  'arial_black',
                  'comic_sans',
                  'courier_new',
                  'impact',
                  'lucida_grande',
                  'times_new_roman',
                  'verdana',
                ],
              },
              'removeFormat',
            ],
            ['quote', 'unordered', 'ordered', 'outdent', 'indent'],

            ['undo', 'redo'],
            ['viewsource'],
          ]"
          :fonts="{
            arial: 'Arial',
            arial_black: 'Arial Black',
            comic_sans: 'Comic Sans MS',
            courier_new: 'Courier New',
            impact: 'Impact',
            lucida_grande: 'Lucida Grande',
            times_new_roman: 'Times New Roman',
            verdana: 'Verdana',
          }"
        />
      </div>
      <div class="col-12">
        <q-separator class="q-my-md" />
      </div>
      <div class="col-12">
        <q-btn
          :disable="formData.content === ''"
          type="submit"
          outline
          color="primary"
          label="Save"
        />
      </div>
    </q-form>
    <!-- depts{{ localData.depts }} -->
    <div v-if="isSuper && localData.depts">
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
            <!-- <q-pagination
            @update:model-value="updatePagination"
            v-model="localData.listData.current_page"
            :max="pageCount"
            input
          /> -->
          </div>
        </div>
      </div>
      <!-- <q-dialog
        @hide="localData.openCreate = false"
        v-model="localData.openCreate"
      >
        <act-create @onCreated="onCreated" />
      </q-dialog> -->
      <q-dialog
        class=""
        @hide="localData.openEdit = false"
        v-model="localData.openEdit"
      >
        <Edit @onUpdated="onUpdated" :dept="localData.dept" />
      </q-dialog>
    </div>
  </q-page>
</template>
<script>
import { useRoute } from "vue-router";
import { useQuasar } from "quasar";
import { onMounted, reactive, ref } from "vue";
import { api } from "boot/axios";
import List from "pages/admin/website/about/list.vue";

export default {
  components: {
    List,
  },
  setup(props, context) {
    const route = useRoute();
    const q = useQuasar();
    const listRef = ref(null);
    const isSuper = ref(false);
    // var depts = reactive();
    const localData = reactive({
      depts: [],
    });
    let formData = reactive({
      content: "",
    });

    const detail = () => {
      api
        .get(`web/about`)
        .then((res) => {
          const { data, role } = res.data;
          console.log("about fetch", role);

          if (!role) {
            formData.content = data.data[0]?.about.content;
            // console.log("content", data);
          } else {
            localData.depts = data;
            console.log("deptsddd", localData.depts);

            isSuper.value = true;
          }
          // !role ? formData.content = data[0]?.about.content : '';
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
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
          listRef.value.localData.openEdit = false;
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

      submit,
      updateAbout,
      listRef,
    };
  },
};
</script>

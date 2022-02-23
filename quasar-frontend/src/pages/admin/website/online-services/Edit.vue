<template>
  <q-page padding class="container-lg flex justify-center q-my-md">
    <q-form
      style="width: 750px"
      class="zcard"
      @submit="onSubmit"
      @reset="onReset"
    >
      @method('PUT')
      <p class="zsubtitle q-ma-none">
        Edit <span class="text-weight-light">{{ formData?.service_name }}</span>
      </p>
      <br />
      <q-input
        v-model="formData.service_name"
        outlined
        label="Service name"
        @blur="delete localData.errors['service_name']"
        :error="localData.errors.hasOwnProperty('service_name')"
        :error-message="localData.errors['service_name']?.toString()"
        :rules="[(val) => !!val || 'Service name is required']"
      />

      <q-select
        outlined
        label="Operational Type"
        v-model="formData.operational_type"
        @blur="delete localData.errors['service_name']"
        :error="localData.errors.hasOwnProperty('service_name')"
        :error-message="localData.errors['service_name']?.toString()"
        :rules="[(val) => !!val || 'Service name is required']"
        :options="operational_types"
      />

      <q-select
        outlined
        label="Department"
        v-model="formData.department"
        @blur="delete localData.errors['department']"
        :error="localData.errors.hasOwnProperty('department')"
        :error-message="localData.errors['department']?.toString()"
        :rules="[(val) => !!val || 'Department is required']"
        :options="departments"
      />

      <label class="zlabel">Who should apply</label>
      <q-editor
        v-model="formData.who_should_apply"
        :definitions="{
          bold: { label: 'Bold', icon: null, tip: '' },
        }"
      />
      <br />
      <label class="zlabel">How to apply</label>
      <q-editor
        v-model="formData.how_to_apply"
        :definitions="{
          bold: { label: 'Bold', icon: null, tip: '' },
        }"
      />
      <br />
      <label class="zlabel">Required Documents</label>
      <q-editor
        v-model="formData.document_to_submit"
        :definitions="{
          bold: { label: 'Bold', icon: null, tip: '' },
        }"
      />

      <br />
      <q-input
        v-model="formData.timeline"
        outlined
        label="Timeline"
        @blur="delete localData.errors['timeline']"
        :error="localData.errors.hasOwnProperty('timeline')"
        :error-message="localData.errors['timeline']?.toString()"
        :rules="[(val) => !!val || 'Timeline is required']"
      />

      <q-input
        v-model="formData.fees"
        outlined
        label="Fee"
        @blur="delete localData.errors['fees']"
        :error="localData.errors.hasOwnProperty('fees')"
        :error-message="localData.errors['fees']?.toString()"
        :rules="[(val) => !!val || 'Fee is required']"
      />

      <q-separator class="q-my-md" />

      <div class="flex-inline">
        <q-btn type="submit" flat color="primary">Update</q-btn>
        <q-btn type="reset" flat color="negative">Reset</q-btn>
      </div>
    </q-form>
  </q-page>
</template>
<script>
import { computed, reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { date, useQuasar } from "quasar";
import { onMounted, ref } from "vue";
import { useRoute, useRouter } from "vue-router";

export default {
  name: "notification-edit",
  emits: ["onCreated"],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const route = useRoute();
    const router = useRouter();
    const localData = reactive({
      showPassword: false,
      errors: {},
    });
    const formData = reactive({
      service_name: "",
      operational_type: "",
      department: "",
      who_should_apply: "",
      how_to_apply: "",
      document_to_submit: "",
      timeline: "",
      fees: "",
    });
    const operational_types = ref([
      "PRE-PROCESSING",
      "POST-PROCESSING",
      "PRE-ESTABLISHMENT",
      "POST-ESTABLISHMENT",
      "POST-COMMENCEMENT",
    ]);

    const onSubmit = (e) => {
      // return console.log('forms',formData);

      const id = formData.department.value;
      api
        .put(`web/${route.params.id}/online-service`, formData)
        .then((res) => {
          const { message, data, list } = res.data;
          q.notify({
            type: "positive",
            message,
          });

          e?.target?.reset();
          setTimeout(() => router.back(), 500);
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
        });
    };
    const onReset = (e) => {
      formData.service_name = "";
      formData.operational_type = "";
      formData.department = null;
      formData.document_to_submit = "";
      formData.who_should_apply = "";
      formData.how_to_apply = "";
      formData.fees = "";
      formData.timeline = "";
    };
    const departments = computed(() => store.state.staffData.departments);

    const fetchDetail = (id) => {
      q.loading.show();
      api
        .get(`web/online-services/${id}`)
        .then((res) => {
          // console.log('fetch id',res.data);
          const { data } = res.data;
          formData.service_name = data.service_name;
          formData.operational_type = data.operational_type;
          formData.department = departments.value.find(
            (d) => d.value === data.department_id
          );
          formData.document_to_submit = data.document_to_submit;
          formData.who_should_apply = data.who_should_apply;
          formData.how_to_apply = data.how_to_apply;
          formData.fees = data.fees;
          formData.timeline = data.timeline;
        })
        .catch((err) => {
          const message = err?.response?.data?.message || err.toString();
          q.notify({
            type: "negative",
            message,
          });
        })
        .finally(() => q.loading.hide());
    };
    onMounted(() => {
      const { id } = route.params;
      fetchDetail(id);
    });

    return {
      departments,
      formData,
      localData,
      onReset,
      onSubmit,
      operational_types,
    };
  },
};
</script>

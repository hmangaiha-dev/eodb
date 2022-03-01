<template>
  <q-page padding class="container-lg flex justify-center q-my-md">
    <q-form
      style="width: 750px"
      class="zcard"
      @submit="onSubmit"
      @reset="onReset"
    >
      <h1 class="ztitle q-ma-none">Online service</h1>

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
        emit-value
        map-options
        v-if="role"
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
        <q-btn type="submit" flat color="primary">Save</q-btn>
        <q-btn type="reset" flat color="negative">Reset</q-btn>
      </div>
    </q-form>
  </q-page>
</template>
<script>
import { computed, reactive } from "vue";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { date, useQuasar } from "quasar";
import { ref } from "vue";

export default {
  name: "notification-create",
  emits: ["onCreated"],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
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
      code: "",
    });
    const operational_types = ref([
      "PRE-PROCESSING",
      "POST-PROCESSING",
      "PRE-ESTABLISHMENT",
      "POST-ESTABLISHMENT",
      "POST-COMMENCEMENT",
    ]);

    const onSubmit = (e) => {
      const id = formData.department || 2;
      // return console.log('id',id);
      api
        .post(`web/${id}/online-service`, formData)
        .then((res) => {
          const { message, data, list } = res.data;
          q.notify({
            type: "positive",
            message,
          });

          e?.target?.reset();
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

    const role = computed(() => {
      return store.state.staffData.role.some((e) => e.name == "admin");
    });

    return {
      roles: computed(() => store.state.staffData.role),
      // role: computed(() => {
      //   let role = false;
      //   role = store.stateroles.forEach((role) => {
      //     if (role.label == "admin") return true;
      //     else return false;
      //   });
      //     console.log('role',role);
      //   return role;
      // }),
      role,
      departments: computed(() => store.state.staffData.departments),
      formData,
      localData,
      onReset,
      onSubmit,
      operational_types,
    };
  },
};
</script>

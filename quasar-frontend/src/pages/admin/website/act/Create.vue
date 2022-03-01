<template>
  <q-card style="width: 450px" class="q-pa-lg">
    <q-form @submit="onSubmit" @reset="onReset">
      <h1 class="zsubtitle q-py-md">New Act</h1>

      <q-input
        v-model="formData.name"
        outlined
        label="Name"
        @blur="delete localData.errors['name']"
        :error="localData.errors.hasOwnProperty('name')"
        :error-message="localData.errors['name']?.toString()"
        :rules="[(val) => !!val || 'Name is required']"
      />

      <q-select
        outlined
        :rules="[(val) => val.length || 'Please select department']"
        emit-value
        map-options
        v-model="formData.code"
        label="Select Department"
        v-if="$props.role"
        :options="depts"
      >
      </q-select>

      <q-input
        v-model="formData.description"
        type="textarea"
        outlined
        label="Description"
        @blur="delete localData.errors['description']"
        :error="localData.errors.hasOwnProperty('description')"
        :error-message="localData.errors['description']?.toString()"
      />
      <q-file
        :rules="[(val) => !!val || 'Attachment is required']"
        filled
        bottom-slots
        v-model="formData.attachment"
        label="Label"
        counter
        max-files="1"
      >
        <template v-slot:before>
          <q-icon name="folder_open" />
        </template>

        <template v-slot:hint> PDF must be less than 2mb of size </template>

        <template v-slot:append>
          <q-btn round dense flat icon="add" @click.stop />
        </template>
      </q-file>
      <q-separator class="q-my-md" />

      <div class="flex-inline">
        <q-btn type="submit" flat color="primary">Save</q-btn>
        <q-btn type="reset" flat color="negative">Reset</q-btn>
      </div>
    </q-form>
  </q-card>
</template>
<script>
import { computed, reactive, onMounted } from "vue";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { useQuasar } from "quasar";

export default {
  name: "act-create",
  emits: ["onCreated"],
  props: ["dept", "role"],
  setup(props, context) {
    console.log("props.dept", props.dept);
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      showPassword: false,
      errors: {},
    });
    const formData = reactive({
      name: "",
      description: "",
      attachment: "",
      id: "",
      code: "",
    });

    const depts = computed(() => {
      return props.dept.map((dept) => {
        return {
          label: dept.dept_name,
          value: dept.dept_code,
        };
        dept.dept_name;
      });
    });

    onMounted(() => {
      // console.log('map mounted');
      // let depts = props.dept.map(dept => {
      //   return dept.dept_name;
      // })
      // console.log('map',depts);
    });

    const onSubmit = (e) => {
      let data = new FormData();
      data.append("name", formData.name);
      data.append("description", formData.description);
      data.append("code", formData.code);
      data.append("attachment", formData.attachment);

      api
        .post("web/act-rule", data)
        .then((res) => {
          q.notify({
            type: "positive",
            message: res?.data?.message,
          });
          context.emit("onCreated", res.data.list);
        })
        .catch((err) => {
          q.notify({
            type: "negative",
            message: err.response?.data?.message || err.toString(),
          });
        });
    };
    const onReset = (e) => {
      formData.name = "";
      formData.description = "";
      formData.attachment = null;
    };

    return {
      roles: computed(() => store.state.staffData.roles),
      formData,
      localData,
      onReset,
      depts,
      onSubmit,
    };
  },
};
</script>

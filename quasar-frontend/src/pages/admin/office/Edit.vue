<template>
  <q-page class="container-lg">
    <div class="flex flex-inline items-center">
      <h1 class="ztitle">Edit Office</h1>
      <q-space />
      <q-breadcrumbs align="right" gutter="xs">
        <q-breadcrumbs-el :to="{ name: 'office:read' }" label="Offices" />
        <q-breadcrumbs-el label="Edit office" />
      </q-breadcrumbs>
    </div>
    

    <q-dialog v-model="localState.openImage">
      <q-img :src="localState.selectedAttachment"></q-img>
    </q-dialog>

    <q-form
      class="zcard q-pa-md"
      @reset="resetForm"
      @submit.prevent="handleSubmit"
    >
      <div class="row q-col-gutter-md">
        <div class="col-xs-12 zsubtitle">Office detail</div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="formData.code"
            class="q-mt-md"
            label="Code"
            outlined
            autofocus
            :error="localData.errors.hasOwnProperty('code')"
            :error-message="localData.errors?.name?.toString()"
            @blur="delete localData.errors['code']"
            :rules="[(val) => !!val || 'Code is required']"
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="formData.name"
            class="q-mt-md"
            label="Name"
            outlined
            :error="localData.errors.hasOwnProperty('name')"
            :error-message="localData.errors?.name?.toString()"
            @blur="delete localData.errors['name']"
            :rules="[(val) => !!val || 'Name is required']"
          />
        </div>

        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="formData.description"
            class="q-mt-md"
            label="Description"
            type="textarea"
            outlined
            :error="localData.errors.hasOwnProperty('description')"
            :error-message="localData.errors?.description?.toString()"
            @blur="delete localData.errors['description']"
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="formData.contact"
            class="q-mt-md"
            label="Contact"
            outlined
            :error="localData.errors.hasOwnProperty('contact')"
            :error-message="localData.errors?.description?.toString()"
            @blur="delete localData.errors['contacts']"
          />
        </div>

        <div class="col-xs-12">
          <q-separator />
        </div>
        <div class="col-xs-12 zsubtitle">Profile</div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="profile.hod_secratariat_name"
            class="q-mt-md"
            label="Secretariat HOD Name"
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="profile.hod_secratariat_designation"
            class="q-mt-md"
            label="Secretariat HOD Designation"
            outlined
          />
        </div>

        <div class="col-xs-12 col-md-6">
          <q-file
            filled
            accept=".jpg,image/*"
            class="col-xs-12"
            bottom-slots
            max-file-size="248000"
            v-model="profile.hod_secratariat_photo"
            label="Secretariat HOD Photo"
            counter
          >
            <template v-slot:hint> Maximum File Upload size 2mb </template>

            <template v-slot:append>
              <q-btn round dense flat icon="add" @click.stop />
            </template>
          </q-file>
          

          <q-btn
            @click="
              () => {
                localState.selectedAttachment = profile.sect_photo;
                localState.openImage = true;
              }
            "
            flat
            color="primary"
            icon="picture_as_pdf"
            label="view"
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="profile.hod_directorate_name"
            class="q-mt-md"
            label="Directorate HOD Name"
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="profile.hod_directorate_designation"
            class="q-mt-md"
            label="Directorate HOD Designation"
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-file
            filled
            accept=".jpg,image/*"
            class="col-xs-12"
            bottom-slots
            max-file-size="248000"
            v-model="profile.hod_directorate_photo"
            label="Directorate HOD Photo"
            counter
          >
            <template v-slot:hint> Maximum File Upload size 2mb </template>

            <template v-slot:append>
              <q-btn round dense flat icon="add" @click.stop />
            </template>
          </q-file>
          <q-btn
            @click="
              () => {
                localState.selectedAttachment = profile.dict_photo;
                localState.openImage = true;
              }
            "
            flat
            color="primary"
            icon="picture_as_pdf"
            label="view"
          />
        </div>

        <div class="col-xs-12">
          <q-separator />
        </div>
        <div class="col-xs-12 zsubtitle">Bank detail</div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="bankData.bank_name"
            class="q-mt-md"
            label="Name of bank"
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="bankData.ac_holder"
            class="q-mt-md"
            label="Ac Holder"
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="bankData.ac_no"
            class="q-mt-md"
            label="Ac no "
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="bankData.ifsc"
            class="q-mt-md"
            label="IFSC"
            outlined
          />
        </div>
        <div class="col-xs-12 col-md-6">
          <q-input
            v-model="bankData.remark"
            class="q-mt-md"
            label="Remark"
            outlined
          />
        </div>
      </div>

      <q-card-actions class="q-mt-md">
        <q-btn color="primary" flat type="submit" label="Save" />
        <q-btn color="negative" flat type="reset" label="Reset" />
      </q-card-actions>
    </q-form>
  </q-page>
</template>
<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { useQuasar } from "quasar";
import { ref } from "vue";
import { onMounted } from "@vue/runtime-core";
import { useRoute, useRouter } from "vue-router";
import { preFetch } from "quasar/wrappers";

export default {
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const route = useRoute();
    const router = useRouter();
    const localData = reactive({
      errors: {},
    });
    const localState = reactive({
      openImage: false,
      openPdf: false,
      selectedAttachment: null,
    });
    const tempRoles = ref([]);
    const bankData = reactive({
      bank_name: "",
      ac_holder: "",
      ac_no: "",
      // contact: "",
      ifsc: "",
      remark: "",
      // description: "",
    });

    const profile = reactive({
      hod_secratariat_name: "",
      hod_secratariat_designation: "",
      hod_secratariat_photo: null,
      sect_photo: null,
      hod_directorate_name: "",
      hod_directorate_designation: "",
      hod_directorate_photo: null,
      dict_photo: null,
    });
    let formData = reactive({
      id: null,
      code: "",
      name: "",
      description: "",
      contact: "",
      _method: "put",
    });

    onMounted(() => {
      const id = route.params.id;

      api
        .get(`office/${id}`)
        .then((res) => {
          console.log(res.data);
          const { id, code, name, description, contact, bank_detail } =
            res.data;
          formData.id = id;
          formData.code = code;
          formData.name = name;
          formData.description = description;
          formData.contact = contact;

          if (res.data.profile) {
            profile.hod_secratariat_name =
              res.data.profile.hod_secratariat_name;
            profile.hod_secratariat_designation =
              res.data.profile.hod_secratariat_designation;
            profile.hod_directorate_name =
              res.data.profile.hod_directorate_name;
            profile.hod_directorate_designation =
              res.data.profile.hod_directorate_designation;
            profile.sect_photo = res.data.profile.sect_photo;
            profile.dict_photo = res.data.profile.dict_photo;
            console.log("profile", res.data.profile.hod_secratariat_name);
          }

          if (bank_detail) {
            const { bank_name, ac_holder, ac_no, ifsc } = bank_detail;
            bankData.bank_name = bank_name;
            bankData.ifsc = ifsc;
            bankData.ac_holder = ac_holder;
            bankData.ac_no = ac_no;
          }
        })
        .catch((err) => {
          err?.response?.data?.message &&
            q.notify({
              type: "negative",
              message: err.response?.data?.message,
            });
        });
    });
    const handleSubmit = () => {
      const { id } = route.params;
      //  return console.log('all',formData);
      // formData.bank_detail = { ...bankData };

      // return console.log('all2',formData);

      const formDatas = new FormData();
      // formDatas.append("bank_detail", JSON.stringify(bankData));
      formData = Object.assign(formData, bankData, profile);
      // return console.log("all", formData);

      for (let data in formData) {
        //  console.log(data,'is',profile[data]);
        formDatas.append(`${data}`, formData[data]);
      }

      formDatas.append("bank_detail", JSON.stringify(bankData));

      // formDatas.append('hod_secratariat_photo',profile.hod_secratariat_photo)
      // formDatas.append('hod_directorate_photo',profile.hod_directorate_photo)

      api
        .post(`office/${id}`, formDatas)
        .then((res) => {
          return console.log("res data", res.data);
          q.notify({
            type: "positive",
            message: res?.data?.message,
          });
          setTimeout(() => {
            router.back();
          }, 1000);
        })
        .catch((err) => {
          console.log("error", err.response);
          if (err?.response?.data?.errors)
            localData.errors = err.response.data?.errors;
          err?.response?.data?.message &&
            q.notify({
              type: "negative",
              message: err.response?.data?.message,
            });
        });
    };
    const resetForm = (e) => {
      e?.target?.reset();
      formData.code = "";
      formData.name = "";
      formData.description = "";
      formData.contact = "";
      bankData.ac_no = "";
      bankData.ac_holder = "";
      bankData.ifsc = "";
      bankData.bank_name = "";
      bankData.description = "";
    };
    return {
      localData,
      bankData,
      profile,
      formData,
      resetForm,
      handleSubmit,
      tempRoles,
      localState,
    };
  },
};
</script>

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Name Of Establishment (if Any):
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_cert_reg_one"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 2 </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Postal Address
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Exact Location Of The Establishment
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_two_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >3. Situation Of Office, Store-room, Godown, Warehouse Or Work Place (if
        Any) Attached To The Establishment But Situated In Premises Different
        From Those Of The Establishment
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Situation Of Office
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_three_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Store-room
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_three_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Godown
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_three_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            D) Warehouse
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_three_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            E) Work Place
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_three_e"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        4. No. And Date Of Previous Certificate Of Registration (certificate To
        Be Surrendered With The App
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Certificate No. Of Previous Registration
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Date Of Previous Certificate Of Registration
            <span class="asterisk">*</span></label
          >
          <q-input
            type="date"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_four_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        5. Name Of Employer <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_cert_reg_five"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        6. Residential Address Of Employer
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_cert_reg_six"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel"> 7. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Name Of The Manager/Agent/Other Person Acting In The General
            Management (if Any)
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_seven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) His Address
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_seven_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 8. (if It Is A Partnership Concern) </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Name Of Partners
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_eight_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Their Residential Addresses
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_eight_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        9. (if It Is A Case Of Limited Company)
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Name Of Directors
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_nine_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Residential Addresses Of Directors
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_cert_reg_nine_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >10. Category Of Establishment I.e. Whether Shops, Commercial
        Establishments Hotel, Restaurant, Eating House Or Other Place Of
        Amusement Or Entertainment <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_cert_reg_ten"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >11. Nature Of Business: <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_cert_reg_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >12. Date Of Commencement Of Business
        <span class="asterisk">*</span></label
      >
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_cert_reg_twelve"
        dense
        outlined
      />
    </div>

 

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature of the applicant
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_cert_reg_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LABOUR_CERTIFICATE_REGISTRATION",
      department_id: 7,
      labour_cert_reg_one: "",
      labour_cert_reg_two: "",
      labour_cert_reg_two_a: "",
      labour_cert_reg_two_b: "",
      labour_cert_reg_three: "",
      labour_cert_reg_three_a: "",
      labour_cert_reg_three_b: "",
      labour_cert_reg_three_c: "",
      labour_cert_reg_three_d: "",
      labour_cert_reg_three_e: "",
      labour_cert_reg_four: "",
      labour_cert_reg_four_a: "",
      labour_cert_reg_four_b: "",
      labour_cert_reg_five: "",
      labour_cert_reg_six: "",
      labour_cert_reg_seven: "",
      labour_cert_reg_seven_a: "",
      labour_cert_reg_seven_b: "",
      labour_cert_reg_eight: "",
      labour_cert_reg_eight_a: "",
      labour_cert_reg_eight_b: "",
      labour_cert_reg_nine: "",
      labour_cert_reg_nine_a: "",
      labour_cert_reg_nine_b: "",
      labour_cert_reg_ten: "",
      labour_cert_reg_eleven: "",
      labour_cert_reg_twelve:"",
      labour_cert_reg_signature: null,
    });
    onMounted(() => {});
    return {
      group: ref([]),

      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<style>
.option-group > div {
  display: grid;
  grid-template-columns: 2fr 2fr;
}
</style>

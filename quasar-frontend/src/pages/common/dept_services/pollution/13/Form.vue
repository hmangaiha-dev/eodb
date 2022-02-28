<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (1) Name and Address of operator of the facility
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form13_one"
         :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (2) Name of officer in-charge of the facility (Telephone/Fax/Mobile/
        E-mail)
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form13_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (3) Capacity:
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form13_three" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (4) Technologies used for management of plastic waste:
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form13_four" />
    </div>

    <div class="col-sm-10 col-xs-12">
      <label class="zlabel" for="name">
        (5) Quantity of plastic waste received during the year being reported
        upon along with the source
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form13_five" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >6.Quantity of plastic waste processed (in tons):
        <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a)Plastic waste recycled(in tons)
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form13_six_a" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) Plastic waste processed (in tons)</label
          >
          <q-input
          
            dense
            outlined
            v-model="formData.pollution_form13_six_b"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (c) Used (in tons) </label>
          <q-input dense outlined v-model="formData.pollution_form13_six_c" />
        </div>
      </div>
    </div>

    <div class="col-sm-10 col-xs-12">
      <label class="zlabel" for="name">
        (7) Quantity of inert or rejects sent for final disposal to landfill
        sites:
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form13_seven" />
    </div>

    <div class="col-sm-10 col-xs-12">
      <label class="zlabel" for="name">
        (8) Details of land fill facility to which inert or rejects were sent
        for final disposal: - Address – Telephone
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form13_eight"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (9) Attach status of compliance to environmental conditions, if any
        specified during grant of Consent or registration
      </label>
      <q-file v-model="formData.pollution_form13_nine" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <!-- <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md"> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Signature of The Applicant </label>
      <q-file v-model="formData.pollution_form13_signature" outlined>
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

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_13",
      department_id: 11,
      pollution_form13_one: "",
      pollution_form13_two: "",
      pollution_form13_three: "",
      pollution_form13_four: "",
      pollution_form13_five: "",
      pollution_form13_six: "",
      pollution_form13_six_a: "",
      pollution_form13_six_b: "",
      pollution_form13_six_c: "",
      pollution_form13_seven: "",
      pollution_form13_eight: "",
      pollution_form13_nine: null, 
      pollution_form13_signature: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

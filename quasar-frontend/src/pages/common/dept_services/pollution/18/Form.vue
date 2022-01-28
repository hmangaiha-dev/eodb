<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        1. Name and address of the auctioneer
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form18_one"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2. Name of the Authorised person and full address with telephone and fax
        number
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form18_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3. Number of used batteries and total Tonnage (of MT) available during
        the period from October-March and AprilSeptember
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form18_three"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        4. Sources of the used battery scrap
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form18_four"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        5. Number of used batteries and total Tonnage (of MT) auctioned during
        the period from October-March and AprilSeptember
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form18_five"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        6. Number of used batteries and total Tonnage of (MT) sent to the
        registered recyclers *
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form18_six"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Enclose a list. </label>
      <q-file
        :rules="[(val) => val || 'Please type something']"
        v-model="formData.pollution_form18_enclose"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <!-- <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md"> -->

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
      application_code: "POLLUTION_FORM_18",
      department_id: 11,
      pollution_form18_one: "",
      pollution_form18_two: "",
      pollution_form18_three: "",
      pollution_form18_four: "",
      pollution_form18_five: "",
      pollution_form18_six: "",
      pollution_form18_enclose: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

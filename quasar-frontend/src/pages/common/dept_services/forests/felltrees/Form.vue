<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1. Name Of The Applicant <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.env_forest_fell_trees_one" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >2. Father's name <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.env_forest_fell_trees_two" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >3. Address (Village | Town | Station | District )
        <span class="asterisk"> *</span></label
      >
      <q-input  v-model="formData.env_forest_fell_trees_three" type="textarea" dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >4. Location of trees/tree plantation:
        <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A) Area<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.env_forest_fell_trees_four_a" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Boundaries
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.env_forest_fell_trees_four_b" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) Reference To Patta | License Of The Land
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.env_forest_fell_trees_four_c" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >5. Species of trees/tree plantation
        <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.env_forest_fell_trees_five" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >6. Year of raising the plantation
        <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.env_forest_fell_trees_six" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >7. Reference to registration of the trees/tree plantation (enclosed
        certifies) <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.env_forest_fell_trees_seven" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        8. Nature of felling (viz. thinning/final felling)
        <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.env_forest_fell_trees_eight" dense outlined />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >9. Purpose of felling <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A) For bona fide personal use<span class="asterisk">
              *</span
            ></label
          >
          <q-input dense outlined v-model="formData.env_forest_fell_trees_nine_a" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) For sale within Mizoram
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.env_forest_fell_trees_nine_b" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            C) For sale outside Mizoram
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.env_forest_fell_trees_nine_c" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >10. No. of trees purposed to be felled
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.env_forest_fell_trees_ten" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >11. The route by which the felled timber will be transported
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.env_forest_fell_trees_eleven" />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >12. Period of operation purposed (Not to exceed one year in any case)
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.env_forest_fell_trees_twelve" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Licence Of Land Copy <span class="asterisk"> *</span></label
      >
      <q-file
        :rules="[(val) => val || 'Please type something']"
        v-model="formData.env_forest_fell_trees_land_copy_cert"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Tree Plantation Certificate <span class="asterisk"> *</span></label
      >
      <q-file
        :rules="[(val) => val || 'Please type something']"
        v-model="formData.env_forest_fell_trees_plantation_cert"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel">
      I agreed to pay the necessary amount towards departmental charge/royalty.
      I also agreed to adobe by the guidelines laid down by the State Government
      in respect of felling of trees/tree plantation in non-forest areas
      including the mode of disposal and provisions of penalty. Necessary
      permission for felling of the trees/tree plantation may be granted.
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted,watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
  

    const formData = reactive({
      application_code: "ENV_FOREST_FELL_TREES",
      department_id: 3,
      env_forest_fell_trees_one: "",
      env_forest_fell_trees_two: "",
      env_forest_fell_trees_three: "",
      env_forest_fell_trees_four: "",
      env_forest_fell_trees_four_a: "",
      env_forest_fell_trees_four_b: "",
      env_forest_fell_trees_four_c: "",
      env_forest_fell_trees_five: "",
      env_forest_fell_trees_six: "",
      env_forest_fell_trees_seven: "",
      env_forest_fell_trees_eight: "",
      env_forest_fell_trees_nine: "",
      env_forest_fell_trees_nine_a: "",
      env_forest_fell_trees_nine_b: "",
      env_forest_fell_trees_nine_c: "",
      env_forest_fell_trees_ten: "",
      env_forest_fell_trees_eleven: "",
      env_forest_fell_trees_twelve: "",
      env_forest_fell_trees_land_copy_cert: null,
      env_forest_fell_trees_plantation_cert: null
    });

  watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const { applicant_name,city_town, postal_code,address, mobile_no,email} =
        store.state.globalData.common.partA;


      formData.env_forest_fell_trees_one = applicant_name;
      formData.env_forest_fell_trees_three  =city_town;

  
    };

    onMounted(() => {});
    return {
      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >1 Name of the Department Corporation, Boards etc<span class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >2 Address in full <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >3 Location of the land<span class="asterisk">*</span></label
      >
      <q-input
      type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >4 Specific purpose for which land is applied<span class="asterisk"
          >*</span
        ></label
      >
      <q-input
      type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >5 In case of statutory Bodies/ Central Government Undertakings etc.
        whether prior permission of Government of Mizoram is obtained<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >6 Whether land in question is already occupied or not<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_six"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >7 If so, state the authority permitting occupation of the terms and
        conditions of occupation<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_seven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >8 Whether the land is vacant and free from encumbrance<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >9 If not, whether the department/ Corporation etc. is willing to pay
        compensation in respect of the land which is being applied for Land
        Lease<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_nine"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >10 If the land applied for land lease is already acquired whether land
        documents (of the land) so acquired is submitted or not<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_ten"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >11 Remarks of the Secretary of the Department concerned/ organization
        concerned<span class="asterisk">*</span></label
      >
      <q-input
      type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_allot_govt_eleven"
        dense
        outlined
      />
    </div>

    

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted ,watch} from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LAND_REVENUE_ALLOTMENT_GOVERNMENT",
      department_id: 8,
      land_revenue_allot_govt_one: "",
      land_revenue_allot_govt_two: "",
      land_revenue_allot_govt_three: "",
      land_revenue_allot_govt_four: "",
      land_revenue_allot_govt_five: "",
      land_revenue_allot_govt_six: "",
      land_revenue_allot_govt_seven: "",
      land_revenue_allot_govt_eight: "",
      land_revenue_allot_govt_nine: "",
      land_revenue_allot_govt_ten: "",
      land_revenue_allot_govt_eleven: ""
    
    });

  watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const { address, } =
        store.state.globalData.common.partA;

      formData.land_revenue_allot_govt_two = address;


  
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

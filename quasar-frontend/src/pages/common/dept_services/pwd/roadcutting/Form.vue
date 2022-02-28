<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="gender">
        1. Name of applicant (in block letter)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pwd_road_cutting_one"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel"> 2. Contact address </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Landline No <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Mobile No <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_two_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) Email identity <span class="asterisk">*</span></label
          >
          <q-input
          
            v-model="formData.pwd_road_cutting_two_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">3. Resident Address</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) House No if any <span class="asterisk">*</span></label
          >
          <q-input
            
            v-model="formData.pwd_road_cutting_three_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Locality/Veng <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_three_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) City/Town/Village <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_three_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) District <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_three_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>



     <div class="col-12">
      <label for="" class="zlabel">4. Location of proposed land with respect to the road (specify landmark if any):</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) House No if any <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_four_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Locality/Veng <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_four_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) City/Town/Village <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_four_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) District <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pwd_road_cutting_four_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

  

  

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        > 5. Land pass no (copy of pass shall be produced at the time of spot verification)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pwd_road_cutting_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. Purpose of land applied for: <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pwd_road_cutting_six"
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
import { onMounted,watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";


export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "PWD_ROAD_CUTTING",
      department_id: 14,

      pwd_road_cutting_one: "",
      pwd_road_cutting_two: "",
      pwd_road_cutting_two_a: "",
      pwd_road_cutting_two_b: "",
      pwd_road_cutting_two_c: "",
      pwd_road_cutting_three: "",
      pwd_road_cutting_three_a: "",
      pwd_road_cutting_three_b: "",
      pwd_road_cutting_three_c: "",
      pwd_road_cutting_three_d: "",
      pwd_road_cutting_four: "",
      pwd_road_cutting_four_a: "",
      pwd_road_cutting_four_b: "",
      pwd_road_cutting_four_c: "",
      pwd_road_cutting_four_d: "",
      pwd_road_cutting_five: "",
      pwd_road_cutting_six: "",
      
    });

 watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const {
        applicant_name,
        city_town,
        postal_code,
        address,
        mobile_no,
        email,
        enterprise_name,
        enterprise_typ,
        company_reg_certe,
        tin_no,
      } = store.state.globalData.common.partA;

      formData.pwd_road_cutting_one = applicant_name  ;
      formData.pwd_road_cutting_two_b = mobile_no ;
      formData.pwd_road_cutting_two_c = email ;
      formData.pwd_road_cutting_three_c = city_town;

      

    };

    onMounted(() => {});
    return {
     
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

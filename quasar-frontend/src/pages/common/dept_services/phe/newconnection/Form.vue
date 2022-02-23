<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Applicant's Name (Diltu hming)*
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        2. Father's Name (Pa hming)* <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3. Occupation (Diltu hnathawh)* <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Occupant (In luahtu)* <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_four"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel">5. Address</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A). House No. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Locality (Veng) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Street/lane <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            D) City/Town <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            E) Landmark <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_e"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            F) Pin Code <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_f"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            G) Phone no
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phe_water_connection_five_g"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6. Email:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_six"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        7. Section*
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_seven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. Connection Type*
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9. Category
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_nine"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        10. Sub-Category*
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_ten"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11. No. of existing connection(s) (Dilna in-a connection awm tawh zat)*:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        12. No. of family (Dilna in-a chhungkaw cheng zat)*:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        13. LSC/Land Pass/Relevant document (Attested Photocopy)*:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.phe_water_connection_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        14. Pipe leh a zawmna bungrua*
        <span class="asterisk">*</span></label
      >
      <q-checkbox
        v-model="formData.phe_water_connection_fourteen_a"
        label="a)Department atanga lei"
      />
      <q-checkbox
        v-model="formData.phe_water_connection_fourteen_b"
        label="b)Mahni in tum"
      />
    </div>

    <div class="col-12 text-caption">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        15.Signature Of The Applicant
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.signature_phe_water_connection" outlined>
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
import { onMounted,watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "PHE_WATER_CONNECTION",
      department_id: 13,
      phe_water_connection_one: "",
      phe_water_connection_two: "",
      phe_water_connection_three: "",
      phe_water_connection_four: "",
      phe_water_connection_five: "",
      phe_water_connection_five_a: "",
      phe_water_connection_five_b: "",
      phe_water_connection_five_c: "",
      phe_water_connection_five_d: "",
      phe_water_connection_five_e: "",
      phe_water_connection_five_f: "",
      phe_water_connection_five_g: "",
      phe_water_connection_six: "",
      phe_water_connection_seven: "",
      phe_water_connection_eight: "",
      phe_water_connection_nine: "",
      phe_water_connection_ten: "",
      phe_water_connection_eleven: "",
      phe_water_connection_twelve: "",
      phe_water_connection_thirteen: "",
      phe_water_connection_fourteen: "",
      phe_water_connection_fourteen_a: true,
      phe_water_connection_fourteen_b: false,
      signature_phe_water_connection: null,
    });

    watch(store.state.globalData.common, () => {
      getA();
      getG();
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

      formData.phe_water_connection_one = applicant_name  ;
      formData.phe_water_connection_five_d = city_town ;
      formData.phe_water_connection_five_f = postal_code ;
      formData.phe_water_connection_five_g = mobile_no ;

      formData.phe_water_connection_six = email ;



    };
     const getG = () => {
      const {
        
       electric_regular_consumer_number,
       electric_temporary_existing_connection_file	
      } = store.state.globalData.common.partG;

      formData.power_change_name_two = electric_regular_consumer_number  ;

    };


    onMounted(() => {});
    return {
      group: ref([]),

      formData,
      getA,
      getG,
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

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        1. Full name of the factory with factory licence No, if already
        registered
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_lic_reg_one"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 2. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Full Postal address and situation of the factory
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b)Full address to which communication relating to the factory should
            be send
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_two_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        3. Nature Of Manufacturing Process/processes
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Carried On In The Factory During The Last Twelve Months (in The
            Case Of Factories Already In Existence)
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_three_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) To Be Carried On In The Factories During The Next Twelve Months
            (in Case Of All Factories)
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_three_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        4 Names and values of the principal products to be employed on anyone
        day during the year
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_lic_reg_four"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 5. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Maximum Number Of Workers Proposed To Be Employed On Anyone Day
            During The Year
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Maximum Number Of Workers Employed On Anyone Day During The Last
            12 Months
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_five_b"
            dense
            outlined
          />
        </div>
        

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Number Of Workers To Be Ordinarily Employed In The Factory
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_five_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 6 </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Nature And Total Amount Pf Power (H.P. Installed Or Proposed To
            Be Installed)
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_six_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Maximum Amount Of Power (H.P) Proposed To Be Used
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_six_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        7. Full Name And Residential Address Of The Person Who Shall Be The
        Manager Of The Factory For The Purposes Of The Act
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_lic_reg_seven"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >8. Full Name And Residential Address Of The Occupier
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) The Proprietor Of The Factory In Case Of Private Firm/proprietory
            Concern
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eight_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Directors In Case Of A Public Limited Liability Company/firm
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eight_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Where A Managing Agent Has Been Appointed The Name Of Managing
            Agents And Directors Thereof
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eight_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            D) Shareholders In Case Of A Private Company No Managing Agent Has
            Been Appointed

            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eight_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            E) The Chief Administrative Head In Case Of A Government Or Local
            Fund Factory

            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eight_e"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender">
        9. Full Name And Address Of The Owner Of The Premises Or Building
        (including The Precincts Thereof) Referred To In Section 93
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_lic_reg_nine"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >10. In Case Of Factory Constructed Or Extended After The Date Of The
        Commencement Of The Mizoram Factories Rules, 2012
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Reference Number And Date Of Approval Of The Plans Or
            Construction Or Extension Of Factory By The Chief Commissioner/Chief
            Inspector
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_ten_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Reference Number And Date Of Approval Of The Arrangements, If Any
            Made For The Disposal Of Trade Waste And Effluents And The Name Of
            The Authority Granting Such Approval
            <span class="asterisk">*</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_ten_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">11 </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A) Amount Of Fee Paid On Treasury
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eleven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B) Paid on
            <span class="asterisk">*</span></label
          >
          <q-input
            type="date"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eleven_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Challan No
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.labour_lic_reg_eleven_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature of the Occupter
        <span class="asterisk">*</span></label
      >

      <q-file v-model="formData.labour_lic_reg_eleven_signature" outlined>
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
      application_code: "LABOUR_LICENCE_REGISTRATION",
      department_id: 7,
      labour_lic_reg_one: "",
      labour_lic_reg_two: "",
      labour_lic_reg_two_a: "",
      labour_lic_reg_two_b: "",
      labour_lic_reg_three: "",
      labour_lic_reg_three_a: "",
      labour_lic_reg_three_b: "",
      labour_lic_reg_four: "",
      labour_lic_reg_five: "",
      labour_lic_reg_five_a: "",
      labour_lic_reg_five_b: "",
      labour_lic_reg_five_c: "",
      labour_lic_reg_six: "",
      labour_lic_reg_six_a: "",
      labour_lic_reg_six_b: "",
      labour_lic_reg_seven: "",
      labour_lic_reg_eight: "",
      labour_lic_reg_eight_a: "",
      labour_lic_reg_eight_b: "",
      labour_lic_reg_eight_c: "",
      labour_lic_reg_eight_d: "",
      labour_lic_reg_eight_e: "",
      labour_lic_reg_nine: "",
      labour_lic_reg_ten: "",
      labour_lic_reg_ten_a: "",
      labour_lic_reg_ten_b: "",
      labour_lic_reg_eleven: "",
      labour_lic_reg_eleven_a: "",
      labour_lic_reg_eleven_b: "",
      labour_lic_reg_eleven_c: "",
      labour_lic_reg_eleven_signature: null,
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

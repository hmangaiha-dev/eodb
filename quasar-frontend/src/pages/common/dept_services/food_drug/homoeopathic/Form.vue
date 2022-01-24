<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name">1. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I/We
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_one_i_we"
          />
        </div>
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            of
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_one_of"
          />
        </div>
        <div class="col-md-6 col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >Hereby Apply For License To Sell By(wholesale/retail)</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_one_apply_for"
          />
        </div>

        <div class="col-12 col-md-6 zlabel">
          <label for="sd" class="zlabel">
            Homoeopathic Medicines On The Premises Situated At
          </label>

          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_one_situated_at"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        2. +The Sale & Dispensing Of Drugs Will Be Made Under The Personal
        Supervision Of The Qualified Persons Namely:
      </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Name
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_two_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) Qualification</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_two_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        3. Names Of Drugs To Be Sold
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_19B_three"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        4. ++Particulars For Specified Storage Accommodation:
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_19B_four"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        5. A Fee Rs
        <span>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            style="display: table-cell"
            dense
            outlined
            v-model="formData.food_drug_19B_five"
          />
        </span>

        <span>
          has been credited to the Government under the head of account 104 (1).
        </span>
      </label>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Signature
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="file"
            :rules="[(val) => val || 'Please type something']"
            dense
            outlined
            v-model="formData.food_drug_19B_five_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Name
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_five_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            III) Full Address
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_five_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            IV) Phone
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_five_iv"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel">
      * Delete whichever is not applicable. <br />
      + To be deleted if drugs will be sold only by wholesale. <br />
      ++ Required only if products requiring special storage are to be sold
    </div>

    <div class="col-12 q-my-md">
      <hr />
    </div>

    <div class="col-12 zlabel text-center">
      ADDITIONAL INFORMATION TO BE FURNISHED BY THE APPLICANT
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">1. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Hming
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) Kum</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">III) Pa Hming</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">IV) Address</label>
          <q-input
            type="textarea"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">V) Telephone No</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_v"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">VI) Educational Qualification</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_vi"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VII) Damdawi lama thiamna/experience</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_one_vii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">2. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Registered Pharmacist i ruai dawn em?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_two_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Registered Pharmacist hming
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_two_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">III) Registration No. </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >3. Tunah eng hna nge i thawh/enge i tih thin?</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_19B_addl_three"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">4. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Nangmah ngeiin Drugs Store i siamin i enkawl thei dawn em?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_four_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Chu chu i ta nge i luah hawh tur?
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_four_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >III) Tunah i luah tawh nge i hauh mek?
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_four_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >IV) Eng ang building nge (Assam/Pucca)
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_four_iv"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> A zau zawng </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) A dung ft
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_zau_zawng_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) A vang ft</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_zau_zawng_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">III) Area sq ft</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_zau_zawng_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> 5. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Licence i dilna veng/khuaa khawsa i ni em?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_five_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Khawsa i nih chuan engtia rei nge i awm tawh?</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_five_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> 6. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I dilna khuaa in awm zat? (Thingtlang a chengte tan)
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_six_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) Mihring zat</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_19B_addl_six_ii"
          />
        </div>
      </div>
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
      application_code: "FOOD_DRUG_FORM19B",
      department_id: 6,
      food_drug_19B_one: "",
      food_drug_19B_one_i_we: "",
      food_drug_19B_one_of: "",
      food_drug_19B_one_apply_for: "",
      food_drug_19B_one_situated_at: "",
      food_drug_19B_two: "",
      food_drug_19B_two_i: "",
      food_drug_19B_two_ii: "",
      food_drug_19B_three: "",
      food_drug_19B_four: "",
      food_drug_19B_five: "",
      food_drug_19B_five_i: null,
      food_drug_19B_five_ii: "",
      food_drug_19B_five_iii: "",
      food_drug_19B_five_iv: "",
      food_drug_19B_addl: "",
      food_drug_19B_addl_one: "",
      food_drug_19B_addl_one_i: "",
      food_drug_19B_addl_one_ii: "",
      food_drug_19B_addl_one_iii: "",
      food_drug_19B_addl_one_iv: "",
      food_drug_19B_addl_one_v: "",
      food_drug_19B_addl_one_vi: "",
      food_drug_19B_addl_one_vii: "",
      food_drug_19B_addl_two: "",
      food_drug_19B_addl_two_i: "",
      food_drug_19B_addl_two_ii: "",
      food_drug_19B_addl_two_iii: "",
      food_drug_19B_addl_three: "",
      food_drug_19B_addl_four: "",
      food_drug_19B_addl_four_i: "",
      food_drug_19B_addl_four_ii: "",
      food_drug_19B_addl_four_iii: "",
      food_drug_19B_addl_four_iv: "",
      food_drug_19B_addl_zau_zawng: "",
      food_drug_19B_addl_zau_zawng_i: "",
      food_drug_19B_addl_zau_zawng_ii: "",
      food_drug_19B_addl_zau_zawng_iii: "",
      food_drug_19B_addl_five: "",
      food_drug_19B_addl_five_i: "",
      food_drug_19B_addl_five_ii: "",
      food_drug_19B_addl_six: "",
      food_drug_19B_addl_six_i: "",
      food_drug_19B_addl_six_ii: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

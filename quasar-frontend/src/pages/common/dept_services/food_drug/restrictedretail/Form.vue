<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name"
        >1. I/We
        <span>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            style="display: table-cell"
            dense
            outlined
            v-model="formData.food_drug_restricted_one_i_we"
        /></span>

        <label class="zlabel" for="name">
          Of
          <span>
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              style="display: table-cell"
              dense
              outlined
              v-model="formData.food_drug_restricted_one_of"
            />
          </span>

          <span> Hereby Apply For Licence To Sell By Retail </span>
        </label>
      </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-10 col-xs-12">
          <label class="zlabel" for="name">
            I) Drugs Other Than Those Specified In Schedules C, C (1) And X On
            The Premises Situated At
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_one_i"
          />
        </div>
        <div class="col-sm-12 col-md-10 col-xs-12">
          <label class="zlabel" for="name">
            II) Drugs Specified In [Schedule C (1)] On The Premises Situated At
            Or Drugs Specified In [Schedule C (1), As Vendor In The Area
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_one_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        2. Sales Shall Be Restricted To Such Drugs As Can Be Sold Without The
        Supervision Of A Qualified Person Under The Drugs & Cosmetics Rules.
        <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        3. Names Or Classes Of Drugs Proposed To Be Sold
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_restricted_three"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        4. Particulars Of The Storage Accommodation For The Storage Of [Schedule
        C (1)] Drugs On The Premises Referred To Above.
        <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        5. The drugs for sale will be purchased from the following dealers and
        such other dealers as may be endorsed on the licence by Licencing
        Authority from time to time.
      </label>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Name Of Dealers
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_five_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Lic. No
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_five_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel text-center">
      (Only for Iteration Vendor / Itinerant Vendor)
    </div>

    <div class="col-12 q-my-md">
      <hr />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        6. A Fee Rs ______ has been credited to the Government under the head of
        account 104 (1).
        <span>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            style="display: table-cell"
            dense
            outlined
            v-model="formData.food_drug_restricted_six"
          />
        </span>
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
            v-model="formData.food_drug_restricted_six_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Full Address
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_six_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            III) Phone
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_six_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel text-center">ADDITIONAL INFORMATION</div>

    <div class="col-12">
      <hr />
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
            v-model="formData.food_drug_restricted_addl_one_i"
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
            v-model="formData.food_drug_restricted_addl_one_ii"
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
            v-model="formData.food_drug_restricted_addl_one_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">IV) Address</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_one_iv"
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
            v-model="formData.food_drug_restricted_addl_one_v"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">2.</label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Educational Qualification
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_two_i"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> Experience </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Damdawi Pangai Zawrh Leh Enkawl
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_exp_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Homeo Damdawi Zawrh Leh Enkawl
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_exp_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        3. Tunah Eng Hna Nge I Thawh/enge I Tih Thin?
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_restricted_addl_three"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> 4. </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Nangmah Ngeiin Drugs Store I Siamin I Enkawl Thei Dawn Em?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_four_i"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            II) Chu Chu I Ta Nge I Luah Hawh Tur?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_four_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            III) Tunah I Luah Tawh Nge I Hauh Mek?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_four_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            IV) Eng Ang Building Nge (Assam/Pucca)
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_four_iv"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">A zau zawng </label>

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
            v-model="formData.food_drug_restricted_zau_zawng_i"
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
            v-model="formData.food_drug_restricted_zau_zawng_ii"
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
            v-model="formData.food_drug_restricted_zau_zawng_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">5.</label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Licence I Dilna Veng/khuaa Khawsa I Ni Em?
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_five_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Khawsa I Nih Chuan Engtia Rei Nge I Awm Tawh?</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_five_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">6.</label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) I Dilna Khuaa In Awm Zat? (Thingtlang A Chengte Tan)
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_six_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) Mihring Zat</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_restricted_addl_six_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12 q-my-md">
      <hr />
    </div>

    <div class="col-12 text-center zlabel">DOCUMENT ATTACHMENT</div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">1. Fee pekna challan copy 2.</label>
      <q-file v-model="formData.food_drug_restricted_doc_one" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >2. Educational qualification certificate.</label
      >
      <q-file v-model="formData.food_drug_restricted_doc_two" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >3. Venchhung mi ngei tih hriattirna LC/VC lehkha</label
      >
      <q-file v-model="formData.food_drug_restricted_doc_three" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >4. Supervision Agreement letter for Form 19</label
      >
      <q-file v-model="formData.food_drug_restricted_doc_four" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">5. Plan layout of drug store</label>
      <q-file v-model="formData.food_drug_restricted_doc_five" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >6. Mi dawr luah tur tan in neitu remtihna lehkha.</label
      >
      <q-file v-model="formData.food_drug_restricted_doc_six" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >7. Diltu passport thlalak (6 copies)</label
      >
      <q-file v-model="formData.food_drug_restricted_doc_seven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">8. Voter ID/Aadhar Card</label>
      <q-file v-model="formData.food_drug_restricted_doc_eight" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

     <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">9. Signature</label>
      <q-file v-model="formData.food_drug_restricted_doc_nine" outlined>
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
      application_code: "FOOD_DRUG_RESTRICTED_RETAIL",
      department_id: 6,
      food_drug_restricted_one: "",
      food_drug_restricted_one_i_we: "",
      food_drug_restricted_one_of: "",
      food_drug_restricted_one_i: "",
      food_drug_restricted_one_ii: "",
      food_drug_restricted_two: "",
      food_drug_restricted_three: "",
      food_drug_restricted_four: "",
      food_drug_restricted_five: "",
      food_drug_restricted_five_i: "",
      food_drug_restricted_five_ii: "",
      food_drug_restricted_six: "",
      food_drug_restricted_six_i: "",
      food_drug_restricted_six_ii: "",
      food_drug_restricted_six_iii: "",
      food_drug_restricted_addl: "",
      food_drug_restricted_addl_one: "",
      food_drug_restricted_addl_one_i: "",
      food_drug_restricted_addl_one_ii: "",
      food_drug_restricted_addl_one_iii: "",
      food_drug_restricted_addl_one_iv: "",
      food_drug_restricted_addl_one_v: "",
      food_drug_restricted_addl_two: "",
      food_drug_restricted_addl_two_i: "",
      food_drug_restricted_addl_exp: "",
      food_drug_restricted_addl_exp_i: "",
      food_drug_restricted_addl_exp_ii: "",
      food_drug_restricted_addl_three: "",
      food_drug_restricted_addl_four: "",
      food_drug_restricted_addl_four_i: "",
      food_drug_restricted_addl_four_ii: "",
      food_drug_restricted_addl_four_iii: "",
      food_drug_restricted_addl_four_iv: "",
      food_drug_restricted_zau_zawng: "",
      food_drug_restricted_zau_zawng_i: "",
      food_drug_restricted_zau_zawng_ii: "",
      food_drug_restricted_zau_zawng_iii: "",
      food_drug_restricted_addl_five: "",
      food_drug_restricted_addl_five_i: "",
      food_drug_restricted_addl_five_ii: "",
      food_drug_restricted_addl_six: "",
      food_drug_restricted_addl_six_i: "",
      food_drug_restricted_addl_six_ii: "",
      food_drug_restricted_doc_one: null,
      food_drug_restricted_doc_two: null,
      food_drug_restricted_doc_three: null,
      food_drug_restricted_doc_four: null,
      food_drug_restricted_doc_five: null,
      food_drug_restricted_doc_six: null,
      food_drug_restricted_doc_seven: null,
      food_drug_restricted_doc_eight: null,
      food_drug_restricted_doc_nine: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

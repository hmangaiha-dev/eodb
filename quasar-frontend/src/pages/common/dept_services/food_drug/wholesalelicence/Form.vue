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
            v-model="formData.food_drug_general_one_i_we"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >Hereby Apply For License To Sell By</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_one_apply_for"
          />
        </div>

        <div class="col-12 zlabel">
          drugs specified in Schedules C and C(1) excluding those specified in
          Schedule X and/or drugs other than those specified in Schedules C,C(1)
          and X to the Drugs and Cosmetics Rules, 1945 and also to operate a
          pharmacy on the premises situated at
        </div>

        <div class="col-sm-4">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_one_situated_at"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        2. The Sale & Dispensing Of Drugs Will Be Made Under The Personal
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
            v-model="formData.food_drug_general_two_i"
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
            v-model="formData.food_drug_general_two_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        3. Categories Of Drugs To Be Sold:
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_general_three"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        4. Particulars For Specified Storage Accommodation:
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_general_four"
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
            v-model="formData.food_drug_general_five"
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
          <q-file v-model="formData.food_drug_general_five_i" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
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
            v-model="formData.food_drug_general_five_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            III) Full Address
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_five_iii"
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
            v-model="formData.food_drug_general_five_iv"
          />
        </div>
      </div>
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
            v-model="formData.food_drug_general_addl_one_i"
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
            v-model="formData.food_drug_general_addl_one_ii"
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
            v-model="formData.food_drug_general_addl_one_iii"
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
            v-model="formData.food_drug_general_addl_one_iv"
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
            v-model="formData.food_drug_general_addl_one_v"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">VI) Eizawnna</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_addl_one_vi"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >2. Educational QualificationEizawnna</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_general_addl_two"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">Experience: </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Damdawi pangngai zawrh leh enkawl
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_addl_exp_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Homeo damdawi zawrh leh enkawl</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_addl_exp_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">3. Pharmacist rawih tur hming </label>

      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-12 col-xs-12">
          <label class="zlabel" for="name">
            I) Regn. No.: _
            <span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_addl_three_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">II) Phone</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_addl_three_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >III) Tuna thawh mek leh thawhna hmun</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.food_drug_general_addl_three_iii"
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
            v-model="formData.food_drug_general_addl_three_iv"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">4. Licence i dilna veng/khua</label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_general_addl_four"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >5.Dawr tur chu mahni ta nge luah hawh tur?
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_general_addl_five"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >6.Eng ang building nge (Assam/Pucca)
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.food_drug_general_addl_six"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">7. A zau zawng </label>

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
            v-model="formData.food_drug_general_addl_seven_i"
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
            v-model="formData.food_drug_general_addl_seven_ii"
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
            v-model="formData.food_drug_general_addl_seven_iii"
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
      <q-file v-model="formData.food_drug_general_doc_one" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >2. Educational qualification certificate.</label
      >
      <q-file v-model="formData.food_drug_general_doc_two" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >3. Venchhung mi ngei tih hriattirna LC/VC lehkha</label
      >
      <q-file v-model="formData.food_drug_general_doc_three" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >4. Supervision Agreement letter for Form 19</label
      >
      <q-file v-model="formData.food_drug_general_doc_four" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">5. Plan layout of drug store</label>
      <q-file v-model="formData.food_drug_general_doc_five" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >6. Mi dawr luah tur tan in neitu remtihna lehkha.</label
      >
      <q-file v-model="formData.food_drug_general_doc_six" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >7. Diltu passport thlalak (6 copies)</label
      >
      <q-file v-model="formData.food_drug_general_doc_seven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">8. Voter ID/Aadhar Card</label>
      <q-file v-model="formData.food_drug_general_doc_eight" outlined>
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
      application_code: "FOOD_DRUG_WHOLESALE",
      department_id: 6,
      food_drug_general_one: "",
      food_drug_general_one_i_we: "",
      food_drug_general_one_apply_for: "",
      food_drug_general_one_situated_at: "",
      food_drug_general_two: "",
      food_drug_general_two_i: "",
      food_drug_general_two_ii: "",
      food_drug_general_three: "",
      food_drug_general_four: "",
      food_drug_general_five: "",
      food_drug_general_five_i: "",
      food_drug_general_five_ii: "",
      food_drug_general_five_iii: "",
      food_drug_general_five_iv: "",
      food_drug_general_addl: "",
      food_drug_general_addl_one: "",
      food_drug_general_addl_one_i: "",
      food_drug_general_addl_one_ii: "",
      food_drug_general_addl_one_iii: "",
      food_drug_general_addl_one_iv: "",
      food_drug_general_addl_one_v: "",
      food_drug_general_addl_one_vi: "",
      food_drug_general_addl_two: "",
      food_drug_general_addl_exp: "",
      food_drug_general_addl_exp_i: "",
      food_drug_general_addl_exp_ii: "",
      food_drug_general_addl_three: "",
      food_drug_general_addl_three_i: "",
      food_drug_general_addl_three_ii: "",
      food_drug_general_addl_three_iii: "",
      food_drug_general_addl_three_iv: "",
      food_drug_general_addl_four: "",
      food_drug_general_addl_five: "",
      food_drug_general_addl_six: "",
      food_drug_general_addl_seven: "",
      food_drug_general_addl_seven_i: "",
      food_drug_general_addl_seven_ii: "",
      food_drug_general_addl_seven_iii: "",
      food_drug_general_doc_one: null,
      food_drug_general_doc_two: null,
      food_drug_general_doc_three: null,
      food_drug_general_doc_four: null,
      food_drug_general_doc_five: null,
      food_drug_general_doc_six: null,
      food_drug_general_doc_seven: null,
      food_drug_general_doc_eight: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

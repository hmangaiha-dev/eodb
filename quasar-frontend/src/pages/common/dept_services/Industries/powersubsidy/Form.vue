<template>
  <div class="zcard row items-center q-gutter-sm">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Name Of The Industrial Unit<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_one"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel">2. Address </span>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >a)Office<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_power_subsidy_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b) Factory <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_power_subsidy_two_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-sm-10 col-md-8">
      <label class="zlabel" for="name"
        >3. Constitution Proprietorship / Partnership / Co- Operative Society /
        Private. Limited <span class="asterisk"> *</span></label
      >
<<<<<<< HEAD
      <q-select
        dense
        v-model="formData.commerce_power_subsidy_three"
        :options="formData.constitution_types"
        outlined
      />
=======
      <q-select dense :options="formData.constitution_types" outlined />
>>>>>>> dev2
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Name And Address Of The Proprietor/ Partner / Chairman / Director
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        5. Regn. No. And Date Of The Unit
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6. Date Of Commencement Of Production / Taking Effective Steps.
        <span class="asterisk">*</span></label
      >
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_six"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        7. Items Of Manufacture/ To Be Manufacture
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_seven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. Investment (Existing/Proposed)
        <span class="asterisk">*</span></label
      >
<<<<<<< HEAD
      <q-select
        dense
        v-model="formData.commerce_power_subsidy_eight"
        :options="formData.investments"
        outlined
      />
=======
      <q-select dense :options="formData.investments" outlined />
>>>>>>> dev2
    </div>

    <div class="col-12">
      <span class="zlabel"> 9. Employment </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >a)Technical<span class="asterisk">*</span></label
          >
          <q-input
<<<<<<< HEAD
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_power_subsidy_nine_a"
=======
        
            v-model="formData.land_revenue_land_transfer_seven_a"
>>>>>>> dev2
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >b) Non-Technical<span class="asterisk">*</span></label
          >
          <q-input
<<<<<<< HEAD
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_power_subsidy_nine_b"
=======
           
            v-model="formData.land_revenue_land_transfer_seven_a"
>>>>>>> dev2
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">c) Total<span class="asterisk">*</span></label>
          <q-input
<<<<<<< HEAD
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_power_subsidy_nine_c"
=======
         
            v-model="formData.land_revenue_land_transfer_seven_a"
>>>>>>> dev2
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">
        10. Detail Of Machineries Indicating The Kilowatt (KW) Required
      </span>
      <div
        v-for="i in formData.machineries.length"
        :key="i"
        class="row justify q-col-gutter-sm q-ml-md"
      >
        <div class="col-md-4 col-xs-12">
          <q-input
            placeholder="Detail of Machinery"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.machineries[i - 1].detail"
            dense
            outlined
          />
        </div>

        <div class="col-md-4 col-xs-12">
          <q-input
            placeholder="Kilowatt (KW)"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.machineries[i - 1].kw"
            dense
            outlined
          />
        </div>
      </div>

      <div class="col-12">
        <q-btn
          color="primary"
          class="full-width"
          label="Add row"
          @click="addRow"
        />
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11. Total Connected Load In Kilowatt
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        12. Energy Actually Consumed By The Unit (To Be Supported By Original
        Voucher)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        13. Source Of Power
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        14. Rate Of Arrit Charge
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_fourteen"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.commerce_power_subsidy_agreement"
        :rules="[
          (val) =>
            formData.commerce_power_subsidy_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.commerce_power_subsidy_agreement"
            label="I do hereby affirm that the informations furnished above are true and the documents attached herewith are genuine."
          />
        </template>
      </q-field>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of the Applicant<span class="asterisk">*</span></label
      >
      <q-file
        dense
        v-model="formData.commerce_power_subsidy_signature"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 q-my-md text-h5 zlabel text-center">
      FORM OF CERTIFICATE OF DECLARATION
      <br />
      <hr />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Name & Address of the unit<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_1"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >2. Name of Proprietor/Partner Director
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_2"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3. Category of the Unit (Large/Medium/Small Scale Ancillary/Tiny)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_3"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Total connected Load in KW <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_4"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5. Total unit actually consumed during the period
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_5"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. Total amount of Bill paid during the period
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_6"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7. Amount of Subsidy recommended with percentage.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_subsidy_declr_7"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.commerce_power_subsidy_agreement2"
        :rules="[
          (val) =>
            formData.commerce_power_subsidy_agreement2 == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.commerce_power_subsidy_agreement2"
            label="I hereby declared that the power made available in my Factory utilized for the specific
proposed of the works for which it is intended and it is not utilized for other proposed
such as Domestic Lighting Cooking, etc. is at any time it is found that the energy
supply to my factory is used for other proposed. I shall be liable for any penalty with
respect there to as may be decided by government at my Unit and I considered such
decision in all the above matter shall be finally and binding on me"
          />
        </template>
      </q-field>
    </div>
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
      application_code: "C&E_POWER_SUBSIDY",
      department_id: 1,

      rows: 2,
      constitution_types: [
        "Proprietorship",
        "Partnership",
        "Co-Operative Society",
        "Private Limited",
      ],
      investments: ["Land & Building", "Plant & Machineries", "Others"],

      // machineries: [],
      machineries: [{ detail: "", kw: "" }],

      commerce_power_subsidy_constitution_type: "",
      commerce_power_subsidy_invesment: "",
      commerce_power_subsidy_one: "",
      commerce_power_subsidy_two_a: "",
      commerce_power_subsidy_two_b: "",
      commerce_power_subsidy_three: "",
      commerce_power_subsidy_four: "",
      commerce_power_subsidy_five: "",
      commerce_power_subsidy_six: "",
      commerce_power_subsidy_seven: "",
      commerce_power_subsidy_eight: "",
      commerce_power_subsidy_nine: "",
      commerce_power_subsidy_nine_a: "",
      commerce_power_subsidy_nine_b: "",
      commerce_power_subsidy_nine_c: "",
      commerce_power_subsidy_eleven: "",
      commerce_power_subsidy_twelve: "",
      commerce_power_subsidy_thirteen: "",
      commerce_power_subsidy_fourteen: "",
      commerce_power_subsidy_declr_1: "",
      commerce_power_subsidy_declr_2: "",
      commerce_power_subsidy_declr_3: "",
      commerce_power_subsidy_declr_4: "",
      commerce_power_subsidy_declr_5: "",
      commerce_power_subsidy_declr_6: "",
      commerce_power_subsidy_declr_7: "",

      commerce_power_subsidy_signature: null,
      commerce_power_subsidy_agreement: false,
      commerce_power_subsidy_agreement2: false,
    });
    onMounted(() => {});
    return {
      formData,
      addRow: () => {
        formData.machineries.push({
          detail: "",
          kw: "",
        });
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

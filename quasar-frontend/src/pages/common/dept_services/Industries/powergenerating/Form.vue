<template>
  <div class="zcard row items-center q-gutter-sm">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Name Of The Unit<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_two_a"
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
            v-model="formData.land_revenue_land_transfer_two_a"
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
            v-model="formData.land_revenue_land_transfer_two_b"
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
      <q-select
        dense
        v-model="model"
        :options="formData.constitution_types"
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Name And Address Of The Proprietor/ Partner / Chairman / Director
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. Investment (Existing/Proposed)
        <span class="asterisk">*</span></label
      >
      <q-select
        dense
        v-model="model"
        :options="formData.investments"
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9. Employment (Existing/Proposed)
        <span class="asterisk">*</span></label
      >
      <q-select
        dense
        v-model="model"
        :options="formData.investments"
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        10. Name/Brand of the Power Generating set with power output capacity
        <span class="asterisk">*</span></label
      >
      <q-select
        dense
        v-model="model"
        :options="formData.investments"
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11. Name of Supplier with complete Address:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_two_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        12. Total requirement of power of the Unit (in term of P/K.W)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_two_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        13. Name of the executing the installation of the set
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.land_revenue_land_transfer_agreement"
        :rules="[
          (val) =>
            formData.land_revenue_land_transfer_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.land_revenue_land_transfer_agreement"
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
        v-model="formData.land_revenue_land_transfer_holder_signature"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
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
        v-model="formData.land_revenue_land_transfer_two_b"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.land_revenue_land_transfer_agreement"
        :rules="[
          (val) =>
            formData.land_revenue_land_transfer_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.land_revenue_land_transfer_agreement"
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
      application_code: "LAND_REVENUE_LAND_TRANSFER",
      department_id: 8,

      rows: 2,
      constitution_types: [
        "Proprietorship",
        "Partnership",
        "Co-Operative Society",
        "Private Limited",
      ],
      investments: ["Land & Building", "Plant & Machineries", "Others"],

      land_revenue_land_transfer_one: "",
      land_revenue_land_transfer_one_a: false,
      land_revenue_land_transfer_one_b: false,
      land_revenue_land_transfer_one_c: false,
      land_revenue_land_transfer_one_d: false,
      land_revenue_land_transfer_one_e: true,
      land_revenue_land_transfer_one_f: false,
      land_revenue_land_transfer_one_number: "",
      land_revenue_land_transfer_one_kum: "",
      land_revenue_land_transfer_two: "",
      land_revenue_land_transfer_two_a: "",
      land_revenue_land_transfer_two_b: "",
      land_revenue_land_transfer_two_c: "",
      land_revenue_land_transfer_two_d: "",
      land_revenue_land_transfer_three: "",
      land_revenue_land_transfer_four: "",
      land_revenue_land_transfer_four_a: false,
      land_revenue_land_transfer_four_b: false,
      land_revenue_land_transfer_four_c: true,
      land_revenue_land_transfer_four_d: false,
      land_revenue_land_transfer_seven: "",
      land_revenue_land_transfer_seven_a: "",
      land_revenue_land_transfer_seven_b: "",
      land_revenue_land_transfer_eight: "",
      land_revenue_land_transfer_nine: "",
      land_revenue_land_transfer_nine_a: null,
      land_revenue_land_transfer_nine_b: null,
      land_revenue_land_transfer_nine_c: null,
      land_revenue_land_transfer_nine_d: null,
      land_revenue_land_transfer_nine_e: null,
      land_revenue_land_transfer_ten: "",
      land_revenue_land_transfer_eleven: "",
      land_revenue_land_transfer_eleven_a: "",
      land_revenue_land_transfer_eleven_b: "",
      land_revenue_land_transfer_eleven_c: "",
      land_revenue_land_transfer_eleven_d: "",
      land_revenue_land_transfer_eleven_e: "",
      land_revenue_land_transfer_eleven_f: "",
      land_revenue_land_transfer_hriatpui: "",
      land_revenue_land_transfer_hriatpui_one: "",
      land_revenue_land_transfer_hriatpui_one_a: null,
      land_revenue_land_transfer_hriatpui_one_b: "",
      land_revenue_land_transfer_hriatpui_two: "",
      land_revenue_land_transfer_hriatpui_two_a: null,
      land_revenue_land_transfer_hriatpui_two_b: "",
      land_revenue_land_transfer_holder_signature: null,
      land_revenue_land_transfer_tuna_address: "",
      land_revenue_land_transfer_phone: "",
      land_revenue_land_transfer_signature: null,
      land_revenue_land_transfer_agreement: false,
    });
    onMounted(() => {});
    return {
      formData,
      addRow: () => {
        formData.rows++;
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

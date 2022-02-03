<template>
  <div class="zcard row items-center q-col-gutter-sm">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Name Of The Unit<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_subsidy_cost_transportation_one"
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
            v-model="formData.commerce_subsidy_cost_transportation_two_a"
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
            v-model="formData.commerce_subsidy_cost_transportation_two_b"
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
        v-model="formData.commerce_subsidy_cost_transportation_three"
        :options="formData.constitution_types"
        outlined
      />
    </div>

    <div class="col-md-6 col-lg-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Name And Address Of The Proprietor/ Partner / Chairman / Director
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_subsidy_cost_transportation_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-lg-6 col-xs-10">
      <label class="zlabel" for="gender">
        5. Regn. No. And Date Of The Unit
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_subsidy_cost_transportation_five"
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
        v-model="formData.commerce_subsidy_cost_transportation_six"
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
        v-model="formData.commerce_subsidy_cost_transportation_seven"
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
        v-model="formData.commerce_subsidy_cost_transportation_eight"
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
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_subsidy_cost_transportation_nine"
        :options="formData.options"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel"
        >10. Particulars of Plants & Machineries Transported (Annexure-I)
      </span>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >a) Quantity/ Weight <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_subsidy_cost_transportation_ten_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b) Values <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_subsidy_cost_transportation_ten_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >c) Transportation charge (To be supported by original voucher)
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_subsidy_cost_transportation_ten_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11. Amount of Subsidy claimed with Percentage.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_subsidy_cost_transportation_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.commerce_subsidy_cost_transportation_agreement"
        :rules="[
          (val) =>
            formData.commerce_subsidy_cost_transportation_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.commerce_subsidy_cost_transportation_agreement"
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
        :rules="[(val) => val || 'Signature is required']"
        dense
        v-model="formData.commerce_subsidy_cost_transportation_signature"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
      application_code: "C&E_SUBSIDY_COST_TRANSPORTATION_MACHINERIES",
      department_id: 1,
      rows: 2,
      constitution_types: [
        "Proprietorship",
        "Partnership",
        "Co-Operative Society",
        "Private Limited",
      ],
      investments: ["Land & Building", "Plant & Machineries", "Others"],
      options: ["Technical","Non-technical"],
      commerce_subsidy_cost_transportation_one: "",
      commerce_subsidy_cost_transportation_two: "",
      commerce_subsidy_cost_transportation_two_a: "",
      commerce_subsidy_cost_transportation_two_b: "",
      commerce_subsidy_cost_transportation_three: "",
      commerce_subsidy_cost_transportation_four: "",
      commerce_subsidy_cost_transportation_five: "",
      commerce_subsidy_cost_transportation_six: "",
      commerce_subsidy_cost_transportation_seven: "",
      commerce_subsidy_cost_transportation_eight: "",
      commerce_subsidy_cost_transportation_eight_a: "",
      commerce_subsidy_cost_transportation_eight_b: "",
      commerce_subsidy_cost_transportation_eight_c: "",

      commerce_subsidy_cost_transportation_nine: "",
      commerce_subsidy_cost_transportation_nine_a: "",
      commerce_subsidy_cost_transportation_nine_b: "",

      commerce_subsidy_cost_transportation_ten: "",
      commerce_subsidy_cost_transportation_ten_a: "",
      commerce_subsidy_cost_transportation_ten_b: "",
      commerce_subsidy_cost_transportation_ten_c: "",

      commerce_subsidy_cost_transportation_eleven: "",

      commerce_subsidy_cost_transportation_signature: null,
      commerce_subsidy_cost_transportation_agreement: false,
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

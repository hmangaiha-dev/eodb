<template>
  <div class="zcard row items-center q-col-gutter-sm">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Name Of The Unit<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_one"
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
            v-model="formData.commerce_cost_project_two_a"
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
            v-model="formData.commerce_cost_project_two_b"
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
        v-model="formData.commerce_cost_project_three"
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
        v-model="formData.commerce_cost_project_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-lg-6 col-xs-10">
      <label class="zlabel" for="gender">
        5. Registration/License No. of the Unit
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6. Date of commencement of Production/ effective steps
        <span class="asterisk">*</span></label
      >
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_six"
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
        v-model="formData.commerce_cost_project_seven"
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
        v-model="formData.commerce_cost_project_eight"
        :options="formData.investments"
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9. Employment (Existing/Proposed)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_nine"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        10. Cost of Project Report (to be supported by original voucher
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_ten"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11. Name & Address of consultant/Agency
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        12. Amount of subsidy claimed with percentage
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_cost_project_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.commerce_cost_project_agreement"
        :rules="[
          (val) =>
            formData.commerce_cost_project_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.commerce_cost_project_agreement"
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
        v-model="formData.commerce_cost_project_signature"
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
      application_code: "C&E_COST_PROJECT",
      department_id: 1,
      rows: 2,
      constitution_types: [
        "Proprietorship",
        "Partnership",
        "Co-Operative Society",
        "Private Limited",
      ],
      investments: ["Land & Building", "Plant & Machineries", "Others"],
      commerce_cost_project_one: "",
      commerce_cost_project_two: "",
      commerce_cost_project_two_a: "",
      commerce_cost_project_two_b: "",
      commerce_cost_project_three: "",
      commerce_cost_project_four: "",
      commerce_cost_project_five: "",
      commerce_cost_project_six: "",
      commerce_cost_project_seven: "",
      commerce_cost_project_eight: "",
      commerce_cost_project_nine: "",
      commerce_cost_project_ten: "",
      commerce_cost_project_eleven: "",
      commerce_cost_project_twelve: "",
      commerce_cost_project_signature: null,
      commerce_cost_project_agreement: false,
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

<template>
  <div class="zcard row items-center q-col-gutter-sm">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Name Of The Unit<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_generating_one"
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
            v-model="formData.commerce_power_generating_two_a"
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
            v-model="formData.commerce_power_generating_two_b"
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
        v-model="formData.commerce_power_generating_three"
        :options="formData.constitution_types"
        outlined
                :rules="[(val) => (val && val.length > 0) || 'Please type something']"

      />
    </div>

    <div class="col-md-6 col-lg-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. Name And Address Of The Proprietor/ Partner / Chairman / Director
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_generating_four"
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
        v-model="formData.commerce_power_generating_five"
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
        v-model="formData.commerce_power_generating_six"
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
        v-model="formData.commerce_power_generating_seven"
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
        v-model="formData.commerce_power_generating_eight"
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
        v-model="formData.commerce_power_generating_nine"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        10. Name/Brand of the Power Generating set with power output capacity
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_generating_ten"
        dense
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
        v-model="formData.commerce_power_generating_eleven"
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
        v-model="formData.commerce_power_generating_twelve"
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
        v-model="formData.commerce_power_generating_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        14. Actual cost of the power generating se (to be supported by Original
        Voucher)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_generating_fourteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        15. Actual installation charge (to be supported by Original voucher)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_generating_fifteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        16. Amount of subsidy claimed with percentage.
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.commerce_power_generating_sixteen"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.commerce_power_generating_agreement"
        :rules="[
          (val) =>
            formData.commerce_power_generating_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.commerce_power_generating_agreement"
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
        v-model="formData.commerce_power_generating_signature"
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
      application_code: "C&E_POWER_GENERATING",
      department_id: 1,
      rows: 2,
      constitution_types: [
        "Proprietorship",
        "Partnership",
        "Co-Operative Society",
        "Private Limited",
      ],
      investments: ["Land & Building", "Plant & Machineries", "Others"],
      commerce_power_generating_one: "",
      commerce_power_generating_two: "",
      commerce_power_generating_two_a: "",
      commerce_power_generating_two_b: "",
      commerce_power_generating_three: "",
      commerce_power_generating_four: "",
      commerce_power_generating_five: "",
      commerce_power_generating_six: "",
      commerce_power_generating_seven: "",
      commerce_power_generating_eight: "",
      commerce_power_generating_nine: "",
      commerce_power_generating_ten: "",
      commerce_power_generating_eleven: "",
      commerce_power_generating_twelve: "",
      commerce_power_generating_thirteen: "",
      commerce_power_generating_fourteen: "",
      commerce_power_generating_fifteen: "",
      commerce_power_generating_sixteen: "",
      commerce_power_generating_signature: null,
      commerce_power_generating_agreement: false,
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

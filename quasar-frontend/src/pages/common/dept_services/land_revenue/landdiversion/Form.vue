<template>
  <div class="zcard row items-center q-gutter-sm">
    <div class="col-sm-10 col-md-8">
      <label class="zlabel" for="name"
        >1.Name of Applicant <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_one"
        dense
        outlined
      />
    </div>

    <div class="col-sm-10 col-md-8">
      <label class="zlabel" for="name"
        >2. Father's Name <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3.Present Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Permanent Address <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_four"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel"> 5. </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >a)Registration No. with Year<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_diversion_five_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b) Land holding No. with year<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_diversion_five_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      6. Location of land as per Land Certificate
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_six"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      7. Area of land in Sq.metre
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_seven"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      8. Purpose for which land was originally allotted
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_eight"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      9. Ground on which diversion of land is applied ( separate sheet may be
      attached if needed)
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_nine"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >10. Purpose for which use of land is to be diverted
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_ten"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11. Whether up to date receipt of payment of land revenue & taxes are
        enclosed <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.land_revenue_land_diversion_agreement"
        :rules="[
          (val) =>
            formData.land_revenue_land_diversion_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.land_revenue_land_diversion_agreement"
            label="I, Mr………………………… S/o.………………………. resident
of……………...........................................................................I, do hereby pledge that I
shall pay the required fees on land under land holding
number…………………………. measuring about………………… to return
revenue and other taxes payable on account of diversion of use of land to the
government. In case of failure to abide by the required conditions as above my land
shall be reverted back to the Government or cancelled my land holding."
          />
        </template>
      </q-field>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of the Applicant <span class="asterisk">*</span></label
      >
      <q-file
        :rules="[(val) => val || 'Please type something']"
        v-model="formData.land_revenue_land_diversion_signature"
        outlined
      >
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
      application_code: "LAND_REVENUE_LAND_DIVERSION",
      department_id: 8,
      land_revenue_land_diversion_one: "",
      land_revenue_land_diversion_two: "",
      land_revenue_land_diversion_three: "",
      land_revenue_land_diversion_four: "",
      land_revenue_land_diversion_five: "",
      land_revenue_land_diversion_five_a: "",
      land_revenue_land_diversion_five_b: "",
      land_revenue_land_diversion_six: "",
      land_revenue_land_diversion_seven: "",
      land_revenue_land_diversion_eight: "",
      land_revenue_land_diversion_nine: "",
      land_revenue_land_diversion_ten: "",
      land_revenue_land_diversion_eleven: "",
      land_revenue_land_diversion_agreement: false,
      land_revenue_land_diversion_signature: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

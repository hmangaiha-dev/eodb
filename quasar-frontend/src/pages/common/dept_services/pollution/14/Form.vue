<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (1) Name of the City or Town and State:
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_one"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (2) Population
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (3) Area in sq. kilometres
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form14_three" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >(4.) <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a)Name & Address of Local body
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form14_four_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(b) Telephone No.</label>
          <q-input dense outlined v-model="formData.pollution_form14_four_b" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (c) Fax No. </label>
          <q-input dense outlined v-model="formData.pollution_form14_four_c" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (d) E-mail: </label>
          <q-input dense outlined v-model="formData.pollution_form14_four_d" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (5) Total Numbers of the wards in the area under jurisdiction
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form14_five" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (6) Total Numbers of Households in the area under jurisdiction
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form14_six" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (7) Number of households covered by door to door collection
      </label>
      <q-input dense outlined v-model="formData.pollution_form14_seven" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >(8.) Total number of commercial establishments and Institutions in the
        area under jurisdiction <span class="asterisk"> *</span></label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a)Commercial establishments
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form14_eight_a" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">Institutions</label>
          <q-input dense outlined v-model="formData.pollution_form14_eight_b" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >(9) Number of commercial establishments and Institutions covered by
        door to door<span class="asterisk"> *</span></label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a)Commercial establishments
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form14_nine_a" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">Institutions</label>
          <q-input dense outlined v-model="formData.pollution_form14_nine_b" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (10) Summary of the mechanisms put in place for management of plastic
        waste in the area under jurisdiction along with the details of agencies
        involved in door to door collection
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_ten"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >(11) Attach details of infrastructure put in place for management of
        plastic waste generated in the area under jurisdiction</label
      >
      <q-file v-model="formData.pollution_form14_eleven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >(12) Attach details of infrastructure required, if any along with
        justification
      </label>
      <q-file v-model="formData.pollution_form14_twelve" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (13) Quantity of Plastic Waste generated during the year from area under
        jurisdiction (in tons)
      </label>
      <q-input dense outlined v-model="formData.pollution_form14_thirteen" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (14) Quantity of Plastic Waste collected during the year from area under
        jurisdiction (in tons)
      </label>
      <q-input dense outlined v-model="formData.pollution_form14_fourteen" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (15) Quantity of plastic waste channelized for recycling during the year
        (in tons)
      </label>
      <q-input dense outlined v-model="formData.pollution_form14_fifteen" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (16) Quantity of plastic waste channelized for use during the year (in
        tons)
      </label>
      <q-input dense outlined v-model="formData.pollution_form14_sixteen" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (17) Quantity of inert or rejects sent to landfill sites during the year
        (in tons)
      </label>
      <q-input dense outlined v-model="formData.pollution_form14_seventeen" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >(18) A)Details of each of facilities used for processing and disposal
        of plastic waste (Facility-I) <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            i) Name of operator
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form14_eighteenA_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >ii) Address with Telephone Number or Mobil</label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form14_eighteenA_ii"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> iii) Capacity </label>
          <q-input dense outlined v-model="formData.pollution_form14_eighteenA_iii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> iv) Technology Used </label>
          <q-input dense outlined v-model="formData.pollution_form14_eighteenA_iv" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> v) Registration Number </label>
          <q-input dense outlined v-model="formData.pollution_form14_eighteenA_v" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >vi) Validity of Registration (up to)</label
          >
          <q-input
            type="date"
            dense
            outlined
            v-model="formData.pollution_form14_eighteenA_vi"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >(18) B)Details of each of facilities used for processing and disposal
        of plastic waste (Facility-II) <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            i) Name of operator
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form14_eighteenB_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >ii) Address with Telephone Number or Mobil</label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form14_eighteenB_ii"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> iii) Capacity </label>
          <q-input dense outlined v-model="formData.pollution_form14_eighteenB_iii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> iv) Technology Used </label>
          <q-input dense outlined v-model="formData.pollution_form14_eighteenB_iv" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> v) Registration Number </label>
          <q-input dense outlined v-model="formData.pollution_form14_eighteenB_v" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >vi) Validity of Registration (up to)</label
          >
          <q-input
            type="date"
            dense
            outlined
            v-model="formData.pollution_form14_eighteenB_vi"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (19) Give details of: Local body's own manpower deployed for collection
        including street sweeping, secondary storage, transportation, processing
        and disposal of waste.
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_nineteen"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (20) Give details of: Contractor or concessionaire's manpower deployed
        for collection including street sweeping, secondary storage,
        transportation, processing and disposal of waste.
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_twenty"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (21) Mention briefly, the difficulties being experienced by the local
        body in complying with provisions of these rules including the financial
        constraints, if any
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_twenty_one"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        (22) Whether an Action Plan has been prepared for improving solid waste
        management practices in the city? If yes (attach copy)
      </label>
      <q-file v-model="formData.pollution_form14_twenty_two" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Date of revision: </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form14_revision"
      />
    </div>

    <!-- <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md"> -->

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
      application_code: "POLLUTION_FORM_14",
      department_id: 11,
      pollution_form14_one: "",
      pollution_form14_two: "",
      pollution_form14_three: "",
      pollution_form14_four: "",
      pollution_form14_four_a: "",
      pollution_form14_four_b: "",
      pollution_form14_four_c: "",
      pollution_form14_four_d: "",
      pollution_form14_five: "",
      pollution_form14_six: "",
      pollution_form14_seven: "",
      pollution_form14_eight: "",
      pollution_form14_eight_a: "",
      pollution_form14_eight_b: "",
      pollution_form14_nine: "",
      pollution_form14_nine_a: "",
      pollution_form14_nine_b: "",
      pollution_form14_ten: "",
      pollution_form14_eleven: null,
      pollution_form14_twelve: null,
      pollution_form14_thirteen: "",
      pollution_form14_fourteen: "",
      pollution_form14_fifteen: "",
      pollution_form14_sixteen: "",
      pollution_form14_seventeen: "",
      pollution_form14_eighteenA: "",
      pollution_form14_eighteenA_i: "",
      pollution_form14_eighteenA_ii: "",
      pollution_form14_eighteenA_iii: "",
      pollution_form14_eighteenA_iv: "",
      pollution_form14_eighteenA_v: "",
      pollution_form14_eighteenA_vi: "",
      pollution_form14_eighteenB: "",
      pollution_form14_eighteenB_i: "",
      pollution_form14_eighteenB_ii: "",
      pollution_form14_eighteenB_iii: "",
      pollution_form14_eighteenB_iv: "",
      pollution_form14_eighteenB_v: "",
      pollution_form14_eighteenB_vi: "",
      pollution_form14_nineteen: "",
      pollution_form14_twenty: "",
      pollution_form14_twenty_one: "",
      pollution_form14_twenty_two: null,
      pollution_form14_revision: "",

    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

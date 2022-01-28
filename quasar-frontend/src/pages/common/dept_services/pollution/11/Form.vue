<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        1 Name and Address of the unit

        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form11_one"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2 Contact person with designation, Tel./Fax /email

        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form11_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3 Date of commencement

        <span class="asterisk"> *</span></label
      >
      <q-input
        type="date"
        dense
        outlined
        v-model="formData.pollution_form11_three"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        4 No. of workers (including contract labour)

        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form11_four" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> 5 Consent Validity </label>
      <span class="asterisk"> *</span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            a. Water (Prevention & Control of Pollution) Act, 1974;
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form11_five_a" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >b. Air (Prevention & Control of Pollution) Act, 1981;Valid up
            to</label
          >
          <q-input
            type="date"
            dense
            outlined
            v-model="formData.pollution_form11_five_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            c. Authorization; valid up to …
          </label>
          <q-input
            type="date"
            dense
            outlined
            v-model="formData.pollution_form11_five_c"
          />
        </div>
      </div>
    </div>

    <div class="col-lg-10 col-xs-12">
      <label class="zlabel" for="name">
        6 Manufacturing Process Please attach a flow diagram of the
        manufacturing process flow diagram for each product
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_form11_six" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        7 Products and installed capacity of production (MTA)
      </label>

      <span class="asterisk"> *</span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Products
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form11_seven_a" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(b) Installed capacity</label>
          <q-input dense outlined v-model="formData.pollution_form11_seven_b" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        8. Waste Management: <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name">
            a. Waste generation in processing plastic-waste
            <span class="asterisk"> *</span></label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <label class="zlabel col-12" for=""> Sl.No 1 </label>
            <div class="col-md-4 q-py-none col-xs-10">
              <label class="zlabel" for="name">i) Type</label>
              <q-input
                dense
                outlined
                v-model="formData.pollution_form11_eight_a_sl1_i"
              />
            </div>

            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">ii) Category</label>
              <q-input
                dense
                outlined
                v-model="formData.pollution_form11_eight_a_sl1_ii"
              />
            </div>

            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">iii) Qty</label>
              <q-input
                dense
                outlined
                v-model="formData.pollution_form11_eight_a_sl1_iii"
              />
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-md">
            <label class="zlabel col-12" for=""> Sl.No 2 </label>
            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">i) Type</label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form11_eight_a_sl2_i"
              />
            </div>

            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">ii) Category</label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form11_eight_a_sl2_ii"
              />
            </div>

            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">iii) Qty</label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form11_eight_a_sl2_iii"
              />
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-xs-12">
          <label class="zlabel" for="name">
            b. Waste Collection and transportation (attac details)
            <span class="asterisk"> *</span></label
          >
          <q-file v-model="formData.pollution_form11_eight_b" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            c. Waste Disposal details
            <span class="asterisk"> *</span></label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <label class="zlabel col-12" for=""> Sl.No 1 </label>
            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">i) Type</label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form11_eight_c_sl1_i"
              />
            </div>

            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">ii) Category</label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form11_eight_c_sl1_ii"
              />
            </div>

            <div class="col-md-4 col-xs-10 q-py-none">
              <label class="zlabel" for="name">iii) Qty</label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form11_eight_c_sl1_iii"
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            d. Provide details of the disposal facility, whether the facility is
            authorized by SPCB or PCC
            <span class="asterisk"> *</span></label
          >
          <q-file v-model="formData.pollution_form11_eight_d" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            e. Please attach analysis report of characterization of waste
            generated (including leachate test if applicable)
            <span class="asterisk"> *</span></label
          >
          <q-file v-model="formData.pollution_form11_eight_e" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        9 Details of plastic waste proposed to be acquired through sale,
        auction, contract or import, as the case may be, for use as raw material
      </label>
      <span class="asterisk"> *</span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            i. Name
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form11_nine_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">ii. Quantity required /year</label>
          <q-input
            type="date"
            dense
            outlined
            v-model="formData.pollution_form11_nine_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        10 Occupational safety and health aspects Please provide details of
        facilities
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form11_ten"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> 11 Pollution Control Measures </label>
      <span class="asterisk"> *</span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            a)Whether the unit has adequate pollution control systems or
            equipment to meet the standards of emission or effluents. If Yes,
            please furnish details
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form11_eleven_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >b)Whether unit is in compliance with conditions laid down in the
            said rules. Yes/No</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form11_eleven_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            c.Whether conditions exist or are likely to exist of the material
            being handled or processed posing adverse immediate or delayed
            impacts on the environment Yes/No
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form11_eleven_c"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            d)Whether conditions exist (or are likely to exist) of the material
            being handled or processed by any means capable of yielding another
            material (e.g. leachate) which may possess eco-toxicity Yes/No
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form11_eleven_d"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        12 Any other relevant information including fire or accident mitigative
        measures
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form11_twelve" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        13 List of enclosures as per rule
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form11_thirteen"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">Signature</label>
      <q-file v-model="formData.pollution_form11_brand_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        Designation
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_form11_brand_designation"
      />
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
      application_code: "POLLUTION_FORM_11",
      department_id: 11,
      pollution_form11_one: "",
      pollution_form11_two: "",
      pollution_form11_three: "",
      pollution_form11_four: "",
      pollution_form11_five: "",
      pollution_form11_five_a: "",
      pollution_form11_five_b: "",
      pollution_form11_five_c: "",
      pollution_form11_six: null,
      pollution_form11_seven: "",
      pollution_form11_seven_a: "",
      pollution_form11_seven_b: "",
      pollution_form11_eight: "",
      pollution_form11_eight_a: "",
      pollution_form11_eight_a_sl1: "",
      pollution_form11_eight_a_sl1_i: "",
      pollution_form11_eight_a_sl1_ii: "",
      pollution_form11_eight_a_sl1_iii: "",
      pollution_form11_eight_a_sl2: "",
      pollution_form11_eight_a_sl2_i: "",
      pollution_form11_eight_a_sl2_ii: "",
      pollution_form11_eight_a_sl2_iii: "",
      pollution_form11_eight_b: null,
      pollution_form11_eight_c: "",
      pollution_form11_eight_c_sl1: "",
      pollution_form11_eight_c_sl1_i: "",
      pollution_form11_eight_c_sl1_ii: "",
      pollution_form11_eight_c_sl1_iii: "",
      pollution_form11_eight_d: null,
      pollution_form11_eight_e: null,
      pollution_form11_nine: "",
      pollution_form11_nine_i: "",
      pollution_form11_nine_ii: "",
      pollution_form11_ten: "",
      pollution_form11_eleven: "",
      pollution_form11_eleven_a: "",
      pollution_form11_eleven_b: "",
      pollution_form11_eleven_c: "",
      pollution_form11_eleven_d: "",
      pollution_form11_twelve: "",
      pollution_form11_thirteen: "",
      pollution_form11_brand_signature: null,
      pollution_form11_brand_designation: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

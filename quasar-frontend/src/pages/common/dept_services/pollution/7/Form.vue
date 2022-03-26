<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-12 col-lg-8 col-xs-12">
      <label class="zlabel" for="name">
        1.Name of the local body/agency appointed by them/operator of facility
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_authorise_solidwaste_one"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >2.Correspondence address<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >I) Telephone No<span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_i"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            II) Fax No
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_ii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >III) E-mail <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-12 col-lg-8 col-xs-10">
      <label class="zlabel" for="name">
        3. Nodal Officer & designation (Officer authorised b local body or
        agency responsible for operation of processing/ treatment or disposal
        facility)
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_authorise_solidwaste_three"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4. Authorisation required for setting up and operation of the
        facility(Please tick mark) <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-12 zlabel col-xs-12">
          <q-checkbox
            true-value="✓"
            false-value=""
            left-label
            v-model="formData.pollution_authorise_solidwaste_four_a"
            label="a)Waste processing"
          />
          <q-checkbox
            true-value="✓"
            false-value=""
            left-label
            v-model="formData.pollution_authorise_solidwaste_four_b"
            label="b) Recycling"
          />
          <q-checkbox
            true-value="✓"
            false-value=""
            left-label
            v-model="formData.pollution_authorise_solidwaste_four_c"
            label="c) Treatment"
          />
          <q-checkbox
            true-value="✓"
            false-value=""
            left-label
            v-model="formData.pollution_authorise_solidwaste_four_d"
            label="d) Disposal at landfill"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5 Attach copies of the Documents<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >a) Site clearance (local body)<span class="asterisk">
              *</span
            ></label
          >
          <q-file
            v-model="formData.pollution_authorise_solidwaste_five_a"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            b) Proof of Environmental Clearance
            <span class="asterisk"> *</span></label
          >
          <q-file
            v-model="formData.pollution_authorise_solidwaste_five_b"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >c) Consent for establishment
            <span class="asterisk"> *</span></label
          >
          <q-file
            v-model="formData.pollution_authorise_solidwaste_five_c"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >d) Agreement between municipal authority and operating agency
            <span class="asterisk"> *</span></label
          >
          <q-file
            v-model="formData.pollution_authorise_solidwaste_five_d"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >e) Investment on the project and expected return
            <span class="asterisk"> *</span></label
          >
          <q-file
            v-model="formData.pollution_authorise_solidwaste_five_e"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >6. Processing/recycling/treatment of solid waste<span class="asterisk">
          *</span
        ></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <label class="zlabel" for=""
          >(i) Total Quantity of waste to be processed per day</label
        >
        <div class="col-12">
          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                a)Quantity of waste to be recycled
              </label>
              <q-input
                v-model="formData.pollution_authorise_solidwaste_six_i_a"
                dense
                outlined
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                b)Quantity of waste to be treated
              </label>
              <q-input
                v-model="formData.pollution_authorise_solidwaste_six_i_b"
                dense
                outlined
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                c) Quantity of waste to be disposed into landfill
              </label>
              <q-input
                v-model="formData.pollution_authorise_solidwaste_six_i_c"
                dense
                outlined
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            ii)Utilisation programme for waste processed (Product utilisation)
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_ii"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iii)Methodology for disposal (attach details)
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_iii"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> Quantity of leachate </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_quantity"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            Treatment technology for leachate
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_treatment"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iv)Measures to be taken for prevention and control of environmental
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_iv"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (v)Measures to be taken for safety of workers working in the plant
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_v"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (vi)Details on solid waste processing/recycling/ treatment/disposal
            facility (to be attached)
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_six_vi"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 7. Disposal of solid waste </label>
      <div class="row justif q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >i) Number of sites identified
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_seven_i"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >ii) Quantity of waste to be disposed per day
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_seven_ii"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >iii)Details of methodology or criteria followed for site selection
            (attach)
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_seven_iii"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >iv) Details of existing site under operation
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_seven_iv"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >v) Methodology and operational details of landfilling
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_seven_v"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >vi) Measures taken to check environmental pollution
          </label>
          <q-input
            v-model="formData.pollution_authorise_solidwaste_seven_vi"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">8 Any other information. </label>
      <q-input
        v-model="formData.pollution_authorise_solidwaste_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"> Signature </label>
      <q-file
        v-model="formData.pollution_authorise_solidwaste_signature"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"> Designation </label>
      <q-input
        v-model="formData.pollution_authorise_solidwaste_designation"
        dense
        outlined
      />
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_AUTHORISE_SOLID_WASTE",
      department_id: 11,
      pollution_authorise_solidwaste_one: "",
      pollution_authorise_solidwaste_two: "",
      pollution_authorise_solidwaste_two_i: "",
      pollution_authorise_solidwaste_two_ii: "",
      pollution_authorise_solidwaste_two_iii: "",
      pollution_authorise_solidwaste_three: "",
      pollution_authorise_solidwaste_four: "",
      pollution_authorise_solidwaste_four_a: "",
      pollution_authorise_solidwaste_four_b: "",
      pollution_authorise_solidwaste_four_c: "",
      pollution_authorise_solidwaste_four_d: "",
      pollution_authorise_solidwaste_five: "",
      pollution_authorise_solidwaste_five_a: null,
      pollution_authorise_solidwaste_five_b: null,
      pollution_authorise_solidwaste_five_c: null,
      pollution_authorise_solidwaste_five_d: null,
      pollution_authorise_solidwaste_five_e: null,
      pollution_authorise_solidwaste_six: "",
      pollution_authorise_solidwaste_six_i: "",
      pollution_authorise_solidwaste_six_i_a: "",
      pollution_authorise_solidwaste_six_i_b: "",
      pollution_authorise_solidwaste_six_i_c: "",
      pollution_authorise_solidwaste_six_ii: "",
      pollution_authorise_solidwaste_six_iii: "",
      pollution_authorise_solidwaste_six_quantity: "",
      pollution_authorise_solidwaste_six_treatment: "",
      pollution_authorise_solidwaste_six_iv: "",
      pollution_authorise_solidwaste_six_v: "",
      pollution_authorise_solidwaste_six_vi: "",
      pollution_authorise_solidwaste_seven: "",
      pollution_authorise_solidwaste_seven_i: "",
      pollution_authorise_solidwaste_seven_ii: "",
      pollution_authorise_solidwaste_seven_iii: "",
      pollution_authorise_solidwaste_seven_iv: "",
      pollution_authorise_solidwaste_seven_v: "",
      pollution_authorise_solidwaste_seven_vi: "",
      pollution_authorise_solidwaste_eight: "",
      pollution_authorise_solidwaste_signature: null,
      pollution_authorise_solidwaste_designation: "",
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { phone_no, fax_no, email } =
        store.state.globalData.common?.partA || "";
      const { declaration_designation } =
        store.state.globalData.common?.selfDeclaration || "";

      formData.pollution_authorise_solidwaste_two_i = phone_no;
      formData.pollution_authorise_solidwaste_two_ii = fax_no;
      formData.pollution_authorise_solidwaste_two_iii = email;
      formData.pollution_authorise_solidwaste_designation =
        declaration_designation;
    };

    onMounted(async () => getA());
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

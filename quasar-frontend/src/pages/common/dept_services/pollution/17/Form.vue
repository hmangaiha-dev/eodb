<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 text-center zlabel">
      Part A: General (to be filled by all)
      <br />
      <hr />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >1. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-sm">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (a) Name and address of the unit and location of facility :
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form17_partA_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (b) Name of the occupier of the facility or operator of disposal
            facility with designation, Tel, Fax and e-mail:
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_b"
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (c) Authorisation required for (Please tick mark appropriate
            activity or activities: <span class="asterisk"> *</span>
          </label>

          <div class="row justify-start q-col-gutter-md q-ml-md">
            <div
              style="display: grid; justify-items: left"
              class="zlabel col-xs-12"
            >
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_i"
                label="(i) Generation"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_ii"
                label="(ii) Collection"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_iii"
                label="(iii) Storage"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_iv"
                label="(iv) Transportation"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_v"
                label="(v) Reception"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_vi"
                label="(vi) Reuse"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_vii"
                label="(vii) Recycling"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_viii"
                label="(viii) Recovery"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_ix"
                label="(ix) Pre-processing"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_x"
                label="(x) Co-processing"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_xi"
                label="(xi) Utilisation"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_xii"
                label="(xii) Treatment"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_xiii"
                label="(xiii) Disposal"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_one_c_xiv"
                label="(xiv) Incineration"
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (d) In case of renewal of authorisation previous authorisation
            numbers and dates and provide copies of annual returns of last three
            years including the compliance reports with respect to the
            conditions of Prior Environmental Clearance, wherever applicable:
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >2. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (a) Nature and quantity of waste handled per annum (in metric tonne
            or kilo litre):
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form17_partA_two_a"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (b) Nature and quantity of waste stored at any time (in metric tonne
            or kilo litre)
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partA_two_b"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (a) Year of commissioning and commencement of production:
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form17_partA_three_a"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (b) Whether the industry works: <span class="asterisk"> *</span>
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="zlabel col-md-6 col-xs-12">
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_three_b_i"
                label="(i) 01 Shift"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_three_b_ii"
                label="(ii) 02 Shifts"
              />
              <q-checkbox
                left-label
                v-model="formData.pollution_form17_partA_three_b_iii"
                label="(iii) Round the clock"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        4. Provide copy of the Emergency Response Plan (ERP) which should
        address proceduresfor dealing with emergency situations (viz. Spillage
        or release or fire) as specified in the guidelines of Central Pollution
        Control Board. Such ERP shall comprise the following but not limited to:
        <br />
        <div class="q-ml-md">
          * Containing and controlling incidents so as to minimize the effects
          and to limit danger to the persons, environment and property; <br />

          * Implementing the measures necessary to protect persons and the
          environment; <br />

          * Description of the actions which should be taken to control the
          conditions at events and to limit their consequences, including a
          description of the safety equipment and resources available; <br />

          * Arrangements for training staff in the duties which they are
          expected to perform; <br />

          *Arrangements for informing concerned authorities and emergency
          services; and Arrangements for providing assistance with off-site
          mitigatory action
        </div>
      </label>
      <q-file v-model="formData.pollution_form17_partA_four" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        5. Provide undertaking or declaration to comply with all provisions
        including the scope of submitting bank guarantee in the event of
        spillage, leakage or fire while handling the hazardous and other waste.
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partA_five"
      />
    </div>

    <div class="col-12 zlabel text-center">
      Part B: To be filled by hazardous waste generators
      <br />
      <hr />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >1. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (a) Products and by-products manufactured : (names and product wise
            quantity per annum)
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form17_partB_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (b) Process description including process flow sheet indicating
            inputs and outputs (raw materials, chemicals, products, by-products,
            wastes, emissions, waste water etc.) Please attach separate sheets:
          </label>
          <q-file v-model="formData.pollution_form17_partB_one_b" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (c) Characteristics (waste-wise) and Quantity of waste generation
            per annum:
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partB_one_c"
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (d) Mode of management of (c) above:
            <span class="asterisk"> *</span>
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                i. Capacity and mode of secured storage within the plant
                <span class="asterisk"> *</span></label
              >
              <q-input
                dense
                outlined
                v-model="formData.pollution_form17_partB_one_d_i"
              />
            </div>
            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                ii. Utilisation within the plant (provide details);
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form17_partB_one_d_ii"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                iii. If not utilised within the plant, please provide details of
                what is done with this
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form17_partB_one_d_iii"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                iv. Arrangement for transportation to actual users/ TSDF
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form17_partB_one_d_iv"
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (e) Details of the environmental safeguards and environmental
            facilities provided for safe handling of all the wastes at point (c)
            above;
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partB_one_e"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        2. Hazardous and other wastes generated as per these rules from storage
        of hazardous chemicals as defined under the Manufacture, Storage and
        Import of Hazardous Chemicals Rules, 1989
        <span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.pollution_form17_partB_two" />
    </div>

    <div class="col-12 zlabel text-center">
      Part C: To be filled by Treatment, storage and disposal facility operators
      <br />
      <hr />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >1. Provide details of the facility including:<span class="asterisk">
          *</span
        ></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (i) Location of site with layout map;
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_i"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(ii) Safe storage of the waste and storage capacity;</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_ii"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (iii) The treatment processes and their capacities;
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"> (iv) Secured landfills;</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"> (v) Incineration, if any;</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_v"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (vi) Leachate collection and treatment system;
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_vi"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">(vii) Fire fighting systems;</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_vii"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >(viii) Environmental management plan including monitoring; and
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_viii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            (ix) Arrangement for transportation of waste from generators.
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partC_one_ix"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        2. Provide details of any other activities undertaken at the Treatment,
        storage and disposal facility site.
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partC_two"
      />
    </div>

    <div class="col-sm-10 col-xs-12">
      <label class="zlabel" for="name">
        3. Attach a copy of prior Environmental Clearance.
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_form17_partC_three" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel text-center">
      Part D: To be filled by recyclers or pre-processors or co-processors or
      users of hazardous or other wastes
      <br />
      <hr />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        1 Nature and quantity of different wastes received per annum from
        domestic sources or imported or both:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_one"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        2. Installed capacity as per registration issued by the District
        Industries Centre or any other authorised Government agency. Provide
        copy:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_two"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        3. Provide details of secured storage of wastes including the storage
        capacity
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_three"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        4. Process description including process flow sheet indicating equipment
        details inputs and outputs (input wastes, chemicals, products,
        by-products, waste generated, emissions, waste water, etc.). Attach
        separate sheets:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_four"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        5. Provide details of end users of products or by-products:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partA_five"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        6. Provide details of pollution control systems such as Effluent
        Treatment Plant, scrubbers, etc. including mode of disposal of waste:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_six"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        7. Provide details of occupational health and safety measures:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_seven"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        8. Has the facility been set up as per Central Pollution Control Board
        guidelines? If yes, provide a report on the compliance with the
        guidelines:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_eight"
      />
    </div>

    <div class="col-sm-12 col-md-10 col-xs-12">
      <label class="zlabel" for="name">
        9. Arrangements for transportation of waste to the facility:
      </label>
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form17_partD_nine"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"> Signature of the Applicant </label>
      <q-file v-model="formData.pollution_form17_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"> Designation </label>
      <q-input
        dense
        outlined
        v-model="formData.pollution_form17_designation"
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
import { onMounted, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_17",
      department_id: 11,
      pollution_form17_partA: "",
      pollution_form17_partA_one: "",
      pollution_form17_partA_one_a: "",
      pollution_form17_partA_one_b: "",
      pollution_form17_partA_one_c: "",
      pollution_form17_partA_one_c_i: false,
      pollution_form17_partA_one_c_ii: false,
      pollution_form17_partA_one_c_iii: false,
      pollution_form17_partA_one_c_iv: false,
      pollution_form17_partA_one_c_v: false,
      pollution_form17_partA_one_c_vi: false,
      pollution_form17_partA_one_c_vii: false,
      pollution_form17_partA_one_c_viii: false,
      pollution_form17_partA_one_c_ix: false,
      pollution_form17_partA_one_c_x: false,
      pollution_form17_partA_one_c_xi: false,
      pollution_form17_partA_one_c_xii: false,
      pollution_form17_partA_one_c_xiii: false,
      pollution_form17_partA_one_c_xiv: false,
      pollution_form17_partA_one_d: "",
      pollution_form17_partA_two: "",
      pollution_form17_partA_two_a: "",
      pollution_form17_partA_two_b: "",
      pollution_form17_partA_three: "",
      pollution_form17_partA_three_a: "",
      pollution_form17_partA_three_b: "",
      pollution_form17_partA_three_b_i: false,
      pollution_form17_partA_three_b_ii: false,
      pollution_form17_partA_three_b_iii: false,
      pollution_form17_partA_four: null,
      pollution_form17_partA_five: "",
      pollution_form17_partB: "",
      pollution_form17_partB_one: "",
      pollution_form17_partB_one_a: "",
      pollution_form17_partB_one_b: null,
      pollution_form17_partB_one_c: "",
      pollution_form17_partB_one_d: "",
      pollution_form17_partB_one_d_i: "",
      pollution_form17_partB_one_d_ii: "",
      pollution_form17_partB_one_d_iii: "",
      pollution_form17_partB_one_d_iv: "",
      pollution_form17_partB_one_e: "",
      pollution_form17_partB_two: "",
      pollution_form17_partC: "",
      pollution_form17_partC_one: "",
      pollution_form17_partC_one_i: "",
      pollution_form17_partC_one_ii: "",
      pollution_form17_partC_one_iii: "",
      pollution_form17_partC_one_iv: "",
      pollution_form17_partC_one_v: "",
      pollution_form17_partC_one_vi: "",
      pollution_form17_partC_one_vii: "",
      pollution_form17_partC_one_viii: "",
      pollution_form17_partC_one_ix: "",
      pollution_form17_partC_two: "",
      pollution_form17_partC_three: null,
      pollution_form17_partD: "",
      pollution_form17_partD_one: "",
      pollution_form17_partD_two: "",
      pollution_form17_partD_three: "",
      pollution_form17_partD_four: "",
      pollution_form17_partD_five: "",
      pollution_form17_partD_six: "",
      pollution_form17_partD_seven: "",
      pollution_form17_partD_eight: "",
      pollution_form17_partD_nine: "",
      pollution_form17_signature: null,
      pollution_form17_designation: "",
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { declaration_designation } =
        store.state.globalData.common.selfDeclaration || "";

      formData.pollution_form17_designation = declaration_designation;
    };
    onMounted(async () => getA());

    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        1 Name of the City/Town and State
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_authorise_solidwaste_one"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        2 Population
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_authorise_solidwaste_one"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        3 Area in sq. kilometers
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
        >4.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >I) Name & Address of the local body<span class="asterisk">
              *</span
            ></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_i"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            II) Telephone No.
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
            >III) Fax No <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >E-mail: <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        5 Name and address of operator of the facility
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
        >6.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >I) Phone No<span class="asterisk"> *</span></label
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
            >III) E-mail: <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >7.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            I) Number of households in the city/town , Number of non-residential
            premises in the city Number of election/ administrative wards in the
            city/town<span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            II) Quantity of Solid waste
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >III) Estimated Quantity of solid waste generated in the local body
            area per day in metric tones (in tpd)
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >8.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            I) Quantity of solid waste collected per day in tpd<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            II) Per capita waste collected per day in gm/day
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >III) Quantity of solid waste processed in tpd
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >IV) Quantity of solid waste disposed at landfill in tpd
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >V) Status of Solid Waste Management (SWM) service
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >9.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            I) Status of Solid Waste Management (SWM) service<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            II) Segregation and storage of waste at source<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            III) Whether solid waste is stored at source in domestic/commercial/
            institutional bins If yes, Percentage of households practice storage
            of waste at source in domestic bins
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >IV) Percentage of non-residential premises practice storage of
            waste at source in commercial /institutional bins
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >V) Percentage of households dispose of throw solid waste on the
            streets % <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >VI)Percentage of non-residential premises dispose of throw solid
            waste on the streets <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >VII)Whether solid waste is stored at source in a segregated form If
            yes, Percentage of premises segregating the waste at source<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >VII)Door to Door Collection of solid waste<span class="asterisk">
              *</span
            ></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >IX)Whether door to door collection (D2D) of solid waste is being
            done in the city/town If Yes<span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            X) Number of wards covered in D2D collection of waste
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            11 No. of households covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            12 No. of non-residential premises including commercial
            establishments, hotels, restaurants educational institutions/
            offices etc covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            13 No. of non-residential premises including commercial
            establishments, hotels, restaurants educational institutions/
            offices etc covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for=""
            >Percentage of residential and non-residential premises covered in
            door to door collection through:</label
          >
          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-4 col-xs-10">
              <label class="zlabel" for="name">
                a)Motorized vehicle (%)
                <span class="asterisk"> *</span></label
              >
              <q-input
                dense
                outlined
                v-model="formData.pollution_authorise_solidwaste_two_iii"
              />
            </div>

            <div class="col-md-4 col-xs-10">
              <label class="zlabel" for="name">
                b) Containerized tricycle/handcart %
                <span class="asterisk"> *</span></label
              >
              <q-input
                dense
                outlined
                v-model="formData.pollution_authorise_solidwaste_two_iii"
              />
            </div>

            <div class="col-md-4 col-xs-10">
              <label class="zlabel" for="name">
                c) Other device %
                <span class="asterisk"> *</span></label
              >
              <q-input
                dense
                outlined
                v-model="formData.pollution_authorise_solidwaste_two_iii"
              />
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            14.If not, method of primary collection adopted
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            15. Sweeping of streets
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            16. Length of roads, streets, lanes, bye-lanes in the city that need
            to be cleaned km
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            17 Frequency of street sweepings and percentage of population
            covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            18 Tools used Manual sweeping Mechanical sweeping %
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            19 Whether long handle broom used by sanitation workers Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            20 Whether each sanitation worker is given handcart/tricycle for
            collection of waste Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            21 Whether handcart / tricycle is containerized Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            22. Whether the collection tool synchronizes with collection/ Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="zlabel col-12">Secondary Waste Storage facilities</div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            23.No. and type of waste storage depots in the city/town Open waste
            storage sites Masonry bins Cement concrete cylinder bins
            Dhalao/covered rooms/space Covered metal/plastic containers Upto 1.1
            m3 bins 2 to 5 m3 bins Above 5m3 containers Bin-less city
            (No.Capacity in m3)
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="zlabel col-12">Bin/ population ratio</div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            24.No. and type of waste storage depots in the city/town Open waste
            storage sites Masonry bins Cement concrete cylinder bins
            Dhalao/covered rooms/space Covered metal/plastic containers Upto 1.1
            m3 bins 2 to 5 m3 bins Above 5m3 containers Bin-less city
            (No.Capacity in m3)
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="zlabel col-12">
          Ward wise details of waste storage depots (attach):
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            Ward no
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            Area
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            Population
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            No. of bins placed
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            Total volume of bins placed
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            25. Total storage capacity of waste storage facilities in cubic
            meters
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name">
            26. Total waste actually stored at the waste storage depots daily
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_authorise_solidwaste_two_iii"
          />
        </div>
      </div>
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
      application_code: "POLLUTION_AUTHORISE_SOLID_WASTE",
      department_id: 11,
      pollution_authorise_solidwaste_one: "",
      pollution_authorise_solidwaste_two: "",
      pollution_authorise_solidwaste_two_i: "",
      pollution_authorise_solidwaste_two_ii: "",
      pollution_authorise_solidwaste_two_iii: "",
      pollution_authorise_solidwaste_three: "",
      pollution_authorise_solidwaste_four: "",
      pollution_authorise_solidwaste_four_a: false,
      pollution_authorise_solidwaste_four_b: false,
      pollution_authorise_solidwaste_four_c: false,
      pollution_authorise_solidwaste_four_d: false,
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
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

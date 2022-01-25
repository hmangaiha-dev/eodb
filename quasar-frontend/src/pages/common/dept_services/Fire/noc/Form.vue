<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label for="" class="zlabel"
        >1.Name And Address Of The Firm/company</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a)Name <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b)Address <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">2.Name And Contact Number Of Owner</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a)Name <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (b)Contact Number <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_two_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        3.Location Of Building And Type Of Construction
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        4.Type Of Business <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        5.Plot Area <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6.Covered Area <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_six"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        7.Height Of Building <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_seven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8.No. Of Floors/storeys <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_eight"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        9.Total covered area of the building
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_nine"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        10.Expected no of occupants <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_ten"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        11.Mode and type of production/type of occupancy
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        12.Electrical wiring system and sanctioned electrical load
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        13.List of raw material(applicable for commercial/business enterprise)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_thirteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        14.Name of finished products(applicable for commercial/business
        enterprise)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_fourteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        15.Detail of insurance, if any
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_fifteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        16.Distance from nearest Fire Station(approx)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_sixteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        17.Whether fresh NOC or Renewal
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_seventeen"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="">
        18. Details of First Aid Fire Fighting equipment/extinguishers already
        installed within the premises
      </label>
      <q-markup-table class="table">
        <colgroup>
          <col span="1" style="width: 1%" />
          <col span="1" style="width: 1%" />
          <col span="1" style="width: 10%" />
          <col span="2" style="width: 15%" />
          <col span="1" style="width: 40%" />
          <col span="2" style="width: 15%" />
          <col span="1" style="width: 30%" />
          <col span="1" style="width: 50%" />
          <col span="1" style="width: 15%" />
        </colgroup>
        <thead>
          <tr>
            <th>S.No</th>
            <th>Type of extinguishers e.g. CO2, DCP, Foam etc</th>
            <th>Capacity</th>
            <th>Qnty</th>
            <th>Make</th>
            <th>S/No & Explosive No</th>
            <th>Year of Mfg</th>
            <th>Date of purchase</th>
            <th>Remarks/Refilling Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>

            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
          </tr>

          <tr>
            <td>2.</td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>

            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
          </tr>

          <tr>
            <td>3.</td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>

            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
          </tr>

          <tr>
            <td>4.</td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>

            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
              />
            </td>
            <td>
              <q-input dense outlined />
            </td>
          </tr>

          <tr>
            <td>5.</td>
            <td>
              <q-input dense outlined />
            </td>
            <td>
              <q-input dense outlined />
            </td>
            <td>
              <q-input dense outlined />
            </td>
            <td>
              <q-input dense outlined />
            </td>
            <td>
              <q-input dense outlined />
            </td>

            <td>
              <q-input dense outlined />
            </td>
            <td>
              <q-input dense outlined />
            </td>
            <td>
              <q-input dense outlined />
            </td>
          </tr>
        </tbody>
      </q-markup-table>
    </div>

    <div class="col-12 option-group">
      <label for="" class="zlabel"
        >Fixed Fire Fighting Installation (Tick for whatever is installed with
        numbers):-</label
      >
      <q-option-group
        :options="options"
        type="checkbox"
        v-model="formData.fire_tick_any"
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">19 Water supply</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Under Ground Static Water Storage Tank with capacity.
            <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_nineteen_a" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Terrace Tank with capacity
            <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_nineteen_b" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) Water source <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_nineteen_c" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">20 Pump capacity in LPM.</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Pump House at Ground level
            <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twenty_a" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >a) Pump House at Ground level
            <span class="asterisk">*</span></label
          >
          <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twenty_b" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >21 Detail of safety equipments, if Suits, Entry Suit , B.A. Set etc
        <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twentyone" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >22 Whether the workers / other staff are well conversant with the
        operation of first aid fire fighting equipments installed in the
        premises. <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twentytwo" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >23 Detail of flammable and hazardous materials alongwith Types and
        Quantity <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twentythree" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >24 Whether P. A system is installed
        <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twentyfour" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >25 Compliance/ recommendation, if any, made in previous inspection
        <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twentyfive" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >26 Other information <span class="asterisk">*</span></label
      >
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" v-model="formData.fire_twentysix" dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >27.Attach approved drawings of the building from AMC/Others
        <span class="asterisk">*</span></label
      >
      <q-file v-model="formData.fire_twentyseven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <span class="text-caption">
        It is certified that the information provided in this form, is correct.
        No information has been concealed, misrepresented or falsified. I
        understand that in the event of any wrong information provided in this
        form the NOC is liable to be withdrawn / cancelled by the Fire &
        Emergency Services, Mizoram.
      </span>
    </div>
    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";


export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "FIRE_NOC",
      department_id: 5,

      fire_one: "",
      fire_one_a: "",
      fire_one_b: "",
      fire_two: "",
      fire_two_a: "",
      fire_two_b: "",
      fire_three: "",
      fire_four: "",
      fire_five: "",
      fire_six: "",
      fire_seven: "",
      fire_eight: "",
      fire_nine: "",
      fire_ten: "",
      fire_eleven: "",
      fire_twelve: "",
      fire_thirteen: "",
      fire_fourteen: "",
      fire_fifteen: "",
      fire_sixteen: "",
      fire_seventeen: "",
      fire_eighteen: "",
      fire_tick_any: [],
      fire_nineteen: "",
      fire_nineteen_a: "",
      fire_nineteen_b: "",
      fire_nineteen_c: "",
      fire_twenty: "",
      fire_twenty_a: "",
      fire_twenty_b: "",
      fire_twentyone: "",
      fire_twentytwo: "",
      fire_twentythree: "",
      fire_twentyfour: "",
      fire_twentyfive: "",
      fire_twentysix: "",
      fire_twentyseven: null,
    });
    onMounted(() => {});
    return {
      group: ref([]),
      options: [
        {
          label: "a) Yard Hydrants/Landing Valve",
          value: "a) Yard Hydrants/Landing Valve",
        },
        { label: "b) Riser", value: "b) Riser" },

        { label: "c) Down Comer", value: "c) Down Comer" },

        { label: "d) Hose Reel", value: "d) Hose Reel" },

        {
          label: "e) Automatic Sprinkler system",
          value: "e) Automatic Sprinkler system",
        },

        {
          label: "f) Automatic Detection and Alarm System",
          value: "f) Automatic Detection and Alarm System",
        },

        {
          label: "g) Manually Operated Electric Fire Alarm System",
          value: "g) Manually Operated Electric Fire Alarm System",
        },
        {
          label: "h) Deluge valves & Monitors etc.",
          value: "h) Deluge valves & Monitors etc.",
        },
        { label: "i) Delivery Hoses", value: "i) Delivery Hoses" },
        {
          label: "j) Emergency Branch etc.",
          value: "j) Emergency Branch etc.",
        },
      ],
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<style>
.option-group > div {
  display: grid;
  grid-template-columns: 2fr 2fr;
}
</style>

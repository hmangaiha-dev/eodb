<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1.Name of the Applicant/Organization
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2.Name of Father/ Husband/ Director/ Partner/ Trustee<span
          class="asterisk"
          >*</span
        >
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >3 Address for communication<span class="asterisk">*</span>
      </label>
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >4 Address where the new connection is applied for / existing connection
        is required to be shifted (Indicate landmarks to identify the location)
        <span class="asterisk">*</span>
      </label>
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_four"
        dense
        outlined
      />
    </div>

    <div class="col-lg-10 col-sm-12">
      <label class="zlabel" for="gender"
        >5 Voltage at which supply is required (kV) (Please tick the category
        applicable) <span class="asterisk">*</span></label
      >
      <br />
      <q-checkbox
        v-model="formData.power_new_conn2_five_a"
        label="a)11 kV"
        filled
      />
      <q-checkbox
        v-model="formData.power_new_conn2_five_b"
        label="b)33 kV"
        filled
      />
      <q-checkbox
        v-model="formData.power_new_conn2_five_c"
        label="c)66kV"
        filled
      />
      <q-checkbox
        v-model="formData.power_new_conn2_five_d"
        label="d)110 kV"
        filled
      />
      <q-checkbox
        v-model="formData.power_new_conn2_five_e"
        label="e)132 kV"
        filled
      />
      <q-checkbox
        v-model="formData.power_new_conn2_five_f"
        label="f)220 kV"
        filled
      />
    </div>

    <div class="col-md-10">
      <label class="zlabel" for="gender"
        >6 Type of Supply (Permanent / Temporary):
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_six"
        dense
        outlined
      />
    </div>

    <div class="col-10">
      <label class="zlabel" for="gender"
        >6(a) If Temporary supply, specify period of requirement:
        <span class="asterisk">*</span></label
      >

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >From (date) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_six_a_from"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >To (date) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_six_a_to"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >7. <span class="asterisk">*</span></label
      >
      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >a) Total Contract Demand applied for (in kW / kVA)
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_seven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b) Total Connected load (kW/kVA):
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_seven_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >8 Basis for projection of Contract Demand - Diversity Factor
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_eight"
        dense
        outlined
      />
      <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined /> -->
    </div>

    <div class="col-10">
      <label class="zlabel" for="gender"
        >9 Phasing of Contract Demand required (Yes/No)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_nine"
        dense
        outlined
      />

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-12 zlabel">
          If Yes, then provide the following details in the given format: CD
          required (kVA) along with remarks, if any Tentative Date from which
          required
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_nine_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_nine_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_nine_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >10 Purpose of Installation/Supply<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_ten"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11 Category of Tariff opted for<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_eleven"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12 Production capacity <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_twelve"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >13 Category of Industry:(Tick the applicable one)<span class="asterisk"
          >*</span
        ></label
      >
      <br />
      <q-checkbox
        left-label
        v-model="formData.power_new_conn2_thirteen_a"
        label="a)SSI"
      />
      <q-checkbox
        left-label
        v-model="formData.power_new_conn2_thirteen_b"
        label="b)MSI"
      />
      <q-checkbox
        left-label
        v-model="formData.power_new_conn2_thirteen_c"
        label="c)LSI"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Type of unit: (viz. Ownership/Partnership/Private Ltd./Public
        Ltd./Society/ Govt Dept./Govt<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_unit_type"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >14 Name of Institution developing Industrial Premises<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_fourteen"
        dense
        outlined
      />
    </div>

    <div class="col-10">
      <label class="zlabel" for="gender"
        >15 <span class="asterisk">*</span></label
      >

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) Possession Letter or No-Objection Certificate
            <span class="asterisk">*</span></label
          >
          <q-file v-model="formData.power_new_conn2_fifteen_a" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Issued by the Institution (attach a copy)
            <span class="asterisk">*</span></label
          >
          <q-file v-model="formData.power_new_conn2_fifteen_b" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >16 Whether supply is needed through an independent feeder
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_sixteen"
        dense
        outlined
      />
    </div>

    <div class="col-10">
      <label class="zlabel" for="gender"
        >17 Whether the above unit ever operated at some other place or applied
        for connection? <span class="asterisk">*</span>
        <q-checkbox left-label v-model="formData.power_new_conn2_seventeen"
      /></label>

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) Sanctioned Load: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_seventeen_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Service Connection No.: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_seventeen_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) Arrears of payment (if any):
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_seventeen_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-10">
      <label class="zlabel" for="gender"
        >18 If electricity connection for the premises wa requested in the past?
        (If Yes, please provide details)<span class="asterisk">*</span>
        <q-checkbox left-label v-model="formData.power_new_conn2_eighteen"
      /></label>

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) Name of unit: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_eighteen_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Service Connection No.: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_eighteen_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) Arrears of payment (if any):
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_conn2_eighteen_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >19 Status of land acquisition: <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_nineteen"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >20 Expected date by which finance will be available:
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_twenty"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >21 Whether the requisite consent / NOC (if applicable as per the list
        of Pollution Contro Board) has been obtained from ............ as per
        statutory <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_twenty"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >22 requir Any electricity dues outstanding in licensee's area of
        operation in consumer's name: ements (If yes, attach a copy): Yes/
        No<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_twentytwo"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >23 Any electricity dues outstanding for the premises for which
        connection applied for: Yes/ No<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_twentythree"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >24 Any electricity dues outstanding with the licensee against any firm
        with which the consumer is associated as an Owner, Partner, Director or
        Managing Director: Yes/ No<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_twentyfour"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >(For questions 22, 23 & 24 if the answer is 'Yes' in any case please
        provide details )<span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_conn2_for_questions"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      I/ We hereby declare that <br />
      (a) The information provided in this application is true to my knowledge.
      <br />
      (b) I/ We have read the Joint Electricity Regulatory Commission for
      Manipur and Mizoram (Electricity Supply Code) Regulations, 2013 and agree
      to abide by the conditions mentioned therein. (c) I/ We will deposit
      electricity dues, every month, as per the applicable electricity tariff
      and other charges. <br />
      (d) I/ We will own the responsibility of security and safety of the meter,
      cut-out and the installation thereafter.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of the consumer/ authorised signatory<span class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel text-center">
      Note: The following documents shall be attached with the application form:
    </div>

    <div class="col-12">
      <hr />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Proof of ownership of the premises<span class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_one" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >2. A map indicating the proposed location of the plant/office and the
        point where supply is required. The map should normally be of the scale
        of 1 cm representing 1200 cm.<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.power_new_conn2_doc_two" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3. Licence/NOC from statutory authority, if required or a declaration
        by the applicant that his connection does not fall under the requirement
        of NOC under any statute<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.power_new_conn2_doc_three" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4. In case of a proprietary firm, an affidavit to be submitted stating
        that the applicant is the sole proprietor of the firm.<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_four" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5. In case of partnership firm, partnership deed.<span class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_five" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6. In case of Limited Company, Memorandum and Articles of Association
        and Certificate of Incorporation.<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.power_new_conn2_doc_six" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7. Proof of permanent residential address of the consumer and PAN
        Number, if any. If there is any change at a later date, the same shall
        be intimated by the consumer to the licensee immediately<span
          class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_seven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >8. Letter of intent for production/ enhancement in production may be
        furnished<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.power_new_conn2_doc_eight" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >9. List of equipments proposed to be installed along with the expected
        load.<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.power_new_conn2_doc_nine" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >10. Resolution for authorised signatory.<span class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_ten" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >11. Registration from Industries Department<span class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_eleven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >12. Extract of project report relevant to power and process
        requirements (in case of industries)<span class="asterisk"
          >*</span
        ></label
      >
      <q-file v-model="formData.power_new_conn2_doc_twelve" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >13. Copy of the relevant section of the current tariff order that
        provides details of the tariff category opted by the consumer and duly
        signed by him. This will be appended with the agreement after completion
        of formalities.<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.power_new_conn2_doc_thirteen" outlined>
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
import { onMounted ,watch} from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_NEW_CONNECTION2",
      department_id: 12,
      power_new_conn2_one: "",
      power_new_conn2_two: "",
      power_new_conn2_three: "",
      power_new_conn2_four: "",
      power_new_conn2_five: "",
      power_new_conn2_five_a: false,
      power_new_conn2_five_b: false,
      power_new_conn2_five_c: false,
      power_new_conn2_five_d: false,
      power_new_conn2_five_e: false,
      power_new_conn2_five_f: false,
      power_new_conn2_six: "",
      power_new_conn2_six_a: "",
      power_new_conn2_six_a_from: "",
      power_new_conn2_six_a_to: "",
      power_new_conn2_seven: "",
      power_new_conn2_seven_a: "",
      power_new_conn2_seven_b: "",
      power_new_conn2_eight: "",
      power_new_conn2_nine: "",
      power_new_conn2_nine_a: "",
      power_new_conn2_nine_b: "",
      power_new_conn2_nine_c: "",
      power_new_conn2_ten: "",
      power_new_conn2_eleven: "",
      power_new_conn2_twelve: "",
      power_new_conn2_thirteen: "",
      power_new_conn2_thirteen_a: false,
      power_new_conn2_thirteen_b: false,
      power_new_conn2_thirteen_c: false,
      power_new_conn2_unit_type: "",
      power_new_conn2_fourteen: "",
      power_new_conn2_fifteen: "",
      power_new_conn2_fifteen_a: null,
      power_new_conn2_fifteen_b: null,
      power_new_conn2_sixteen: "",
      power_new_conn2_seventeen: false,
      power_new_conn2_seventeen_a: "",
      power_new_conn2_seventeen_b: "",
      power_new_conn2_seventeen_c: "",
      power_new_conn2_eighteen: false,
      power_new_conn2_eighteen_a: "",
      power_new_conn2_eighteen_b: "",
      power_new_conn2_eighteen_c: "",
      power_new_conn2_nineteen: "",
      power_new_conn2_twenty: "",
      power_new_conn2_twentyone: "",
      power_new_conn2_twentytwo: "",
      power_new_conn2_twentythree: "",
      power_new_conn2_twentyfour: "",
      power_new_conn2_for_questions: "",
      power_new_conn2_signature: null,
      power_new_conn2_doc_one: null,
      power_new_conn2_doc_two: null,
      power_new_conn2_doc_three: null,
      power_new_conn2_doc_four: null,
      power_new_conn2_doc_five: null,
      power_new_conn2_doc_six: null,
      power_new_conn2_doc_seven: null,
      power_new_conn2_doc_eight: null,
      power_new_conn2_doc_nine: null,
      power_new_conn2_doc_ten: null,
      power_new_conn2_doc_eleven: null,
      power_new_conn2_doc_twelve: null,
      power_new_conn2_doc_thirteen: null,
    });
   watch(store.state.globalData.common, () => {
      getA();
      getG();
    });

    const getA = () => {
      const {
        applicant_name,
        city_town,
        postal_code,
        address,
        mobile_no,
        email,
        enterprise_name,
        enterprise_typ,
        company_reg_certe,
        tin_no,
      } = store.state.globalData.common.partA;

      formData.power_new_conn2_one = applicant_name  ;
      formData.power_new_conn2_three = address ;
    
      

    };

    const getG = () => {
      const {
        applicant_name,
       electric_regular_new_load_demand_kva,

      } = store.state.globalData.common.partG;

      formData.power_new_conn2_seven_a = electric_regular_new_load_demand_kva  ;


      

    
      

    };




    onMounted(() => {});
    return {
      formData,
      getA,
      getG,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

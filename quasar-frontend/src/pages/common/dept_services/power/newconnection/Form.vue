<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1.Name of the Applicant/Organization
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_applicant_name"
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
        v-model="formData.power_new_connection_father_name"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel">Address for communication</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            House/Plot/Premise No. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_communication_house"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Street: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_communication_street"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Area/Colony: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_communication_area"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">District</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_communication_district"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">
        Address of where the new connection is applied for/existing connection
        is required to be shifted
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            House/Plot/Premise No. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_connection_house"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Street: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_connection_street"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >Area/Colony: <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_connection_area"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">District</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_connection_district"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Category of Supply <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_supply_category"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Purpose of Supply <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_supply_purpose"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6.Total Contracted Load applied for (in kW)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_total_load"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7.Type of Supply <span class="asterisk">*</span></label
      >
      <q-radio
        name="supply"
        v-model="formData.power_new_connection_supply_type"
        val="permanent"
        label="Permanent"
      />
      <q-radio
        name="supply"
        v-model="formData.power_new_connection_supply_type"
        val="temporary"
        label="Temporary"
      />
      <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined /> -->
    </div>

    <div class="col-10">
      <q-toggle
        v-model="formData.power_new_connection_is_temporary"
        label="8.If Temporary supply, specify period of requirement: From (date): To
        (date)"
      />

      <div class="row items-center q-ml-md q-col-gutter-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >From (date) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.power_new_connection_temporay_from"
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
            v-model="formData.power_new_connection_temporay_to"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-10">
      <q-toggle
        v-model="formData.power_new_connection_is_laying_service"
        label="9.Please indicate whether you want to carry out the works of laying service line and/or dedicated distribution facility
for the electricity supply requisitioned. "
      />
    </div>

    <div class="col-10">
      <q-toggle
        v-model="formData.power_new_connection_own_meter"
        label="10.Please indicate whether you want to install your own CEA approved meter. (Yes/No) "
      />
    </div>
    ;

    <div class="col-12">
      <label for="" class="zlabel">11.</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label for="" class="zlabel"
            >a)Photograph to be affixed on application form</label
          >
          <q-file v-model="formData.power_new_connection_photo" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined  v-model="formData.power_new_connection_photo" type="file" /> -->
        </div>

        <div class="col-12">
          <label for="" class="zlabel">
            (b) Identity Proof duly certified submitted along with this
            application form: <br />
            <q-radio
              v-model="formData.power_new_connection_for"
              val="person"
              label="For a Person"
            />
            <q-radio
              v-model="formData.power_new_connection_for"
              val="organization"
              label="For an Organization"
            />
          </label>

          <q-file
            v-model="formData.power_new_connection_identity_proof"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>

          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense v-model="formData.power_new_connection_identity_proof" type="file" /> -->
        </div>

        <div class="col-5 zlabel text-caption">
          <span>For a person </span> <br />
          <div class="q-ml-md">
            (i) Electoral identity card; <br />
            (ii) Passport; (iii) Driving license; <br />
            (iv) Ration card; <br />
            (v) Photo identity card issued by Government agency; <br />
            (vi) PAN card; <br />
            (viii) Certificate from village Pradhan/ Patwari/ Lekhpal/ village
            level worker/ village chowkidar/ Primary school teacher/ in-charge of
            primary health centre etc.
          </div>
        </div>

        <div class="col-5 zlabel text-caption">
          <span>For an organization </span> <br />
          <div class="q-ml-md">
            (i) Electoral identity card; <br />
            (ii) Passport; (iii) Driving license; <br />
            (iv) Ration card; <br />
            (v) Photo identity card issued by Government agency; <br />
            (vi) PAN card; <br />
            (viii) Certificate from village Pradhan/ Patwari/ Lekhpal/ village
            level worker/ village chowkidar/ Primary school teacher/ in-charge of
            primary health centre etc.
          </div>
        </div>

        <div class="col-12">
          <label for="" class="zlabel">
            (c) Proof of ownership/ occupancy of premises, duly certified for
            which electricity connection is required to be enclosed (Tick any
            one) <br />
            <div class="col-5 zlabel q-ml-md text-caption">
              (i) Copy of sale deed or lease deed or in the case of agricultural
              connections a copy of khasra / khatauni / khata nakal. <br />
              (iii) Municipal tax receipt or Demand notice or other related
              document;<br />
              (iv) Letter of allotment. <br />
              (v) Land Settlement Certificate (LSC)/Patta <br />
              (vi) Certificate/ Letter from village authority/panchayat stating
              that the property belongs to the applicant.<br />
              (vii) An applicant who is not an owner but an occupier of the
              premises shall along with any one of the documents listed at (i to
              (vi) above also furnish a no objection certificate from owne of
              the premises
            </div>
          </label>

          <q-file
            v-model="formData.power_new_connection_11c"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>

          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense v-model="formData.power_new_connection_identity_proof" type="file" /> -->
        </div>
        <div class="col-12">
          <label for="" class="zlabel">
            (d) Proof of current address, duly certified to be enclosed (Tick
            any one) <br />
            <div class="col-5 q-ml-md zlabel text-caption">
              (i) Electoral identity card; <br />
              (ii) Passport;<br />
              (iii) Driving license; <br />
              (iv) Ration card;<br />
              (v) Photo identity card issued by any Government agency;<br />
              (vi) Statement of running Bank Account; <br />
              (vii) Water / Telephone / Electricity / Gas connection Bill;
              (viii) Income Tax assessment order.
            </div>
          </label>

          <q-file
            v-model="formData.power_new_connection_11d"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>

          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense v-model="formData.power_new_connection_identity_proof" type="file" /> -->
        </div>
        <div class="col-12">
          <label for="" class="zlabel">
            (e) Any other document as applicable (Please specify)
          </label>

          <q-file
            v-model="formData.power_new_connection_11e"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>

          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense v-model="formData.power_new_connection_identity_proof" type="file" /> -->
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >12 Any electricity dues outstanding in licensee’s area of operation in
        consumer’s name: Yes/ No</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_12"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel"
        >13 Any electricity dues outstanding for the premises for which
        connection applied for: Yes/ No</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_13"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel"
        >14 Any electricity dues outstanding with the licensee against any firm
        with which the consumer is associated as an Owner, Partner, Director or
        Managing Director: Yes/ No</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_new_connection_14"
        dense
        outlined
      />
    </div>

    <div class="zlabel col-12">
      <span> I/ We hereby declare that </span>

      <div class="q-ml-md">
        (a) The information provided in this application is true to my
        knowledge. <br />
        (b) I / We have read the Joint Electricity Regulatory Commission for
        Manipur and Mizoram (Electricity Supply Code) Regulations, 2013 and
        agree to abide by the conditions mentioned therein. <br />
        (c) I/ We will deposit electricity dues, every month, as per the
        applicable electricity tariff and other charges. <br />
        (d) I/ We will own the responsibility of security and safety of the
        meter, cut-out and the installation thereafter.
      </div>
    </div>

    <div class="col-12 zlabel">
      Note: Apart from documents for identity proof, proof of
      ownership/occupancy of premises and proof of current address, the
      following documents shall be attached with the application form
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender">
        1. In case of a partnership firm - The applicant shall furnish the
        partnership deed and an authorization in the name of the applicant for
        signing the requisition form and agreement;
      </label>
       <q-file v-model="formData.power_new_connection_note1" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
    </div>
    <div class="col-12">
      <label class="zlabel" for="gender">
        2. In case of Public and/or Private limited Company - The applicant
        shall furnish a Memorandum and Articles of Association and Certificate
        of Incorporation along with an authorization in the name of the
        applicant for signing the requisition form and agreement;
      </label>
       <q-file v-model="formData.power_new_connection_note2" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
    </div>
    <div class="col-12">
      <label class="zlabel" for="gender">
        3. Other documents applicable only for select consumer categories:
        <br />
        <div class="q-ml-md">
          (a) Industrial consumers: Valid Industrial License, if applicable <br> (b)
          Agricultural consumers: No Objection Certificate from competent
          government authority for tube wells, if required <br> (c) Non-Domestic
          Khokhas and Temporary Structure: No Objection Certificate for khokha or
          temporary structure from the nagar nigam / nagar palika / nagar
          panchayat / gram sabha / gram panchayat / land development authority /
          land owning agency
        </div>
      </label>
        <q-file v-model="formData.power_new_connection_note3" outlined>
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
import { onMounted,watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_NEW_CONNECTION",
      department_id: 12,
      power_new_connection_applicant_name: "",
      power_new_connection_father_name: "",
      power_new_connection_communication_address: "",
      power_new_connection_communication_house: "",
      power_new_connection_communication_street: "",
      power_new_connection_communication_area: "",
      power_new_connection_communication_district: "",

      power_new_connection_connection_address: "",
      power_new_connection_connection_house: "",
      power_new_connection_connection_street: "",
      power_new_connection_connection_area: "",
      power_new_connection_connection_district: "",

      power_new_connection_supply_category: "",
      power_new_connection_supply_purpose: "",
      power_new_connection_total_load: "",

      power_new_connection_supply_type: "permanent",

      power_new_connection_is_temporary: false,
      power_new_connection_temporay_from: "",
      power_new_connection_temporay_to: "",

      power_new_connection_is_laying_service: true,

      power_new_connection_own_meter: true,

      power_new_connection_photo: null,

      power_new_connection_for: "person",

      power_new_connection_11c: null,
      power_new_connection_11d: null,
      power_new_connection_11e: null,
      power_new_connection_12: "",
      power_new_connection_13: "",
      power_new_connection_14: "",
      power_new_connection_note1: null,
      power_new_connection_note2: null,
      power_new_connection_note3: null,

      power_new_connection_identity_proof: null,
    });


       watch(store.state.globalData.common, () => {
      getA();
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

      formData.power_new_connection_applicant_name = applicant_name  ;
      formData.power_new_connection_communication_district = city_town
      formData.power_new_connection_communication_house = address;

    
      

    };

    onMounted(() => {});
    return {
      formData,
      getA,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name"
        >1. Particulars Of The Occupier <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Name Of The Authorised Person (occupier Or Operator Of
            Facility)s
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Address For Correspondence</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(iv) Address Of Facility</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(v)Tel. No, Fax. No</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(vi) E-mail ID</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(vii) URL Of Website</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(viii) GPS Coordinates Of HCF Or CBMWTF</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ix) Ownership Of HCF Or CBMWTF</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(x). Status Of Authorisation Under The Bio-Medical Waste
            (Management And Handling) Rules</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(xi). Status Of Consents Under Water Act And Air Act</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >2. Type Of Health Care Facility<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Bedded Hospital
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) Non-bedded Hospital(Clinic Or Blood Bank Or Clinical
            Laboratory Or Research Institute Or Veterinary Hospital Or Any
            Other)</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) License Number And Its Date Of Expiry</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. Details Of CBMWTF<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Healthcare Facilities Covered By CBMWTF
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) No Of Beds Covered By CBMWTF</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Installed Treatment And Disposal Capacity Of CBMWTF</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iv) Quantity Of Biomedical Waste Treated Or Disposed By
            CBMWTF</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4. Quantity Of Waste Generated Or Disposed In Kg Per Annum (on Monthly
        Average Basis)<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Yellow Category
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(ii) Red Category</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(iii) White</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(iv) Blue Category</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(v) General Solid Waste</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5. Details of the Storage, treatment, transportation, processing and
        Disposal Facility<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name">
            (i) Details of the on-site storage facility
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> (i)Size </label>
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">Capacity</label>
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                Provision of on-site storage (cold storage or any other
                provision)
              </label>
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (ii) Details of the treatment or disposal facilities
          </label>

          <div class="row justify q-mt-lg q-ml-md">
            <q-markup-table class="full-width">
              <thead>
                <tr>
                  <th>Type of treatment/equipment</th>
                  <th>No of Unit’s</th>
                  <th>Capacity Kg/day</th>
                  <th>Quantity Treated/disposed in kg/yr</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Incinerators</td>
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

                <tr>
                  <td>Plasma Pyrolysis</td>
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

                <tr>
                  <td>Autoclaves</td>
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

                <tr>
                  <td>Microwave</td>
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

                <tr>
                  <td>Hydroclave</td>
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

                <tr>
                  <td>Shredder</td>
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

                <tr>
                  <td>Needle tip cutter or destroyer</td>
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

                <tr>
                  <td>Sharps /encapsulation or concrete pit</td>
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

                <tr>
                  <td>Deep burial pits:</td>
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

                <tr>
                  <td>Chemical disinfection</td>
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

                <tr>
                  <td>Any other treatment /equipment</td>
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
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (iii) Quantity of recyclable wastes sold to authorized recyclers
            after treatment in kg per annum
          </label>

          <div class="row justify q-ml-md">
            <div class="col-12">
              <label for="" class="zlabel"
                >Red Category (like plastic, glass etc.)</label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (iv) No of vehicles used for collection and transportation of
            biomedical waste
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            <div class="col-12">
              <label class="zlabel" for="name">
                (v) Details of incineration ash and ETP sludge generated and
                disposed during the treatment of wastes in Kg per annum
              </label>

              <div class="row justify q-mt-lg q-ml-md">
                <q-markup-table class="full-width">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Quantity generated</th>
                      <th>Where disposed</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Incinerators</td>
                      <td>
                        <q-input dense outlined />
                      </td>
                      <td>
                        <q-input dense outlined />
                      </td>
                    </tr>

                    <tr>
                      <td>Ash</td>
                      <td>
                        <q-input dense outlined />
                      </td>
                      <td>
                        <q-input dense outlined />
                      </td>
                    </tr>

                    <tr>
                      <td>ETP Sludge</td>
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
            </div>
          </label>
        </div>

        <div class="col-md-7 col-xs-10">
          <label for="" class="zlabel"
            >(vi) Name of the Common BioMedical Waste Treatment FacilityOperator
            through which wastes are disposed of</label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-5 col-xs-10">
          <label for="" class="zlabel"
            >(vii) List of member HCF not handed over bio-medical waste.</label
          >
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >6.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Do You Have Bio-medical Waste Management Committee?
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) If Yes, Attach Minutes Of The Meetings Held During The
            Reporting Period</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >7. Details Trainings Conducted On BMW<span class="asterisk">
          *</span
        ></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Of Trainings Conducted OnBMW Management.
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) Number Of Personnel Trained</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Number Of Personnel Trained At The Time Of Induction</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iv) Number Of Personnel Not Undergone Any Training So Far</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(v) Whether Standard Manual For Training Is Available?</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(vi)( Any Other Information)</label>
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >8. Details Of The Accident Occurred During The Year<span
          class="asterisk"
        >
          *</span
        ></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Of Accidents Occurred
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) Number Of The Persons Affected</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Remedial Action Taken (Please Attach Details If Any)</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iv) Any Fatality Occurred, Details.</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">9.</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Are You Meeting The Standards Of Air Pollution From The
            Incinerator?
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) How Many Times In Last Year Could Not Met The
            Standards?</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Details Of Continuous Online Emission Monitoring Systems
            Installed</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >10. Liquid Waste Generated And Treatment Methods In Place. How Many
        Times You Have Not Met The Standards In A Year?</label
      >
      <q-input dense outlined />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">11.</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Is The Disinfection Method Or Sterilization Meeting The Log
            4standards?
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) How Many Times You Have Not Met The Standards In A
            Year?</label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>


    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">12. Any Other Relevant Information</label>
      <q-input  dense outlined />

    </div>

     <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">Certified That The Above Report Is For Theperiod From</label>
      <q-input  dense outlined />

    </div>

    <div class="col-12 text-center">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

    <q-space />

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Signature Of The Operator </label>
      <q-input type="file" dense outlined />
    </div>

    <div class="col-xs-12" />
  </div>



  <div class="zcard q-mt-md row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="">Date</label>
      <q-input type="date" dense outlined />
    </div>

     <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="">Place</label>
      <q-input dense outlined />
    </div>

     <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="">Name Of The Head Of The Institution</label>
      <q-input dense outlined />
    </div>


     <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="">Signature Of The Head Of The Institution</label>
      <q-input type="file" dense outlined />
    </div>
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];
    const localData = reactive({
      genders: [
        { value: "Male", label: "Male" },
        { value: "Female", label: "Female" },
        { value: "Other", label: "Other" },
      ],
      epic_relations: [
        { value: "Father", label: "Father" },
        { value: "Mother", label: "Mother" },
      ],
      relations: [
        { value: "Father", label: "Father" },
        { value: "Mother", label: "Mother" },
        { value: "Spouse", label: "Spouse" },
        { value: "Guardian", label: "Guardian" },
      ],
      adults: [
        { value: true, label: "Applicant is above 18 years" },
        { value: false, label: "Applicant is below 18 years" },
      ],
    });

    const formData = reactive({
      title: "Mr",
      name: "",
      dob: "",
      gender: "Male",
      father_name: "",
      mother_name: "",
      birth_place: "",
      phone_no: "",
      email: currentUser?.email,
      aadhaar_no: "",
      relation: "Father",
      relation_name: "",
      relation_title: "Mr",
      adult: true,
      epic_no: "",
      epic_relation: "Father",
      epic_holder: "",
      constituency: "",
    });
    onMounted(() => {
      if (draft?.applicant) {
        formData.title = draft?.applicant?.title;
        formData.name = draft?.applicant?.name;
        formData.dob = draft?.applicant?.dob;
        formData.gender = draft?.applicant?.gender;
        formData.father_name = draft?.applicant?.father_name;
        formData.mother_name = draft?.applicant?.mother_name;
        formData.birth_place = draft?.applicant?.birth_place;
        formData.phone_no = draft?.applicant?.phone_no;
        formData.email = draft?.applicant?.email;
        formData.aadhaar_no = draft?.applicant?.aadhaar_no;
        formData.relation = draft?.applicant?.relation;
        formData.relation_name = draft?.applicant?.relation_name;
        formData.relation_title = draft?.applicant?.title;
        formData.adult = draft?.applicant?.adult;
        formData.epic_no = draft?.applicant?.epic_no;
        formData.epic_relation = draft?.applicant?.epic_relation;
        formData.epic_holder = draft?.applicant?.epic_holder;
        formData.constituency = draft?.applicant?.constituency;
      }
    });
    return {
      onFathernameBlur: (e) => {
        if (!formData.adult) {
          formData.epic_relation?.toLowerCase() === "father" &&
            (formData.epic_holder = e?.target?.value);
        }
        if (formData.relation?.toLowerCase() === "father") {
          formData.relation_name = e?.target?.value;
          formData.relation_title = "Mr";
        }
      },
      onMothernameBlur: (e) => {
        if (!formData.adult) {
          formData.epic_relation?.value?.toLowerCase() === "father" &&
            (formData.epic_holder = e?.target?.value);
        }
        if (formData.relation?.value?.toLowerCase() === "mother") {
          formData.relation_name = e?.target?.value;
          formData.relation_title = "Mrs";
        }
      },
      handleAdult: (e) => {
        if (e.target?.checked) {
          formData.epic_relation?.toLowerCase() === "father" &&
            (formData.epic_holder = formData.father_name);
          formData.epic_relation?.toLowerCase() === "mother" &&
            (formData.epic_holder = formData.mother_name);
        }
      },
      handleEpicSelect: () => {
        if (formData.epic_relation?.value === "Father") {
          formData.epic_holder = formData.father_name;
        }
        if (formData.epic_relation?.value === "Mother") {
          formData.epic_holder = formData.mother_name;
        }
      },
      emailRegex,
      localData,
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

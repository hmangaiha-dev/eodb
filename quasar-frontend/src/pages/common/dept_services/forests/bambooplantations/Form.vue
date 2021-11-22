<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1. Name Of The Applicant <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >2. Father's name <span class="asterisk"> *</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >3. Address (Village | Town | Station | District )
        <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" dense outlined />
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >4. Particulars of land on which private bamboo plantation has been
        raised <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A) Location Of Land<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Name Of Village (VC Ram) Under Which Located
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) Area (in Ha) <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) Land Pass (ALSC/PP/VC Pass) No
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            E) Period Of Validity Of Pass (if Any)
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >5. Boundary of the plantation <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >North<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            East
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >South <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            West
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender"
        >3.Whether Married?If Married,name Of Husband Or Wife(In Capital
        Letters) <span class="asterisk">*</span></label
      >
      <div>
        <q-radio v-model="shape" val="line" label="Yes" />
        <q-radio v-model="shape" val="line" label="No" />
      </div>
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >4.Present Address <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-md-5 col-xs-10">
      <label class="zlabel" for="gender"
        >5.Permanent Address <span class="asterisk">*</span></label
      >
      <q-input dense outlined />
    </div>

    <div class="col-12">
      <label class="zlabel" for=""
        >6. Particulars of bamboo plantation raised:</label
      >
      <q-markup-table class="table">
        <thead>
          <tr>
            <th>Year of plantation/raising</th>
            <th>Species of bamboo raised or planted</th>
            <th>No. of bamboo raised or planted</th>
            <th>Approx. total no. of bamboo available during verification</th>
            <th>
              Approx. total no. of mature bamboo available during verification
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
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
          <tr>
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
          <tr>
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
          <tr>
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
          <tr>
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
        <tfoot>
          <tr>
            <th>TOTAL</th>
            <th>
              <q-input dense outlined />
            </th>
            <th>
              <q-input dense outlined />
            </th>
            <th>
              <q-input dense outlined />
            </th>
            <th>
              <q-input dense outlined />
            </th>
          </tr>
        </tfoot>
      </q-markup-table>
    </div>

    <div class="col-12">
      <label class="zlabel" for=""
        >7. Assistance received from Govt. if any for the bamboo
        plantation:</label
      >
      <q-markup-table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Year</th>
            <th>Amount</th>
            <th>Scheme</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
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
            <td>2</td>
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
            <td>3</td>
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
            <td>4</td>
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
            <td>5</td>
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
        <tfoot>
          <tr>
            <th>TOTAL</th>
            <th>
              <q-input dense outlined />
            </th>
            <th>
              <q-input dense outlined />
            </th>
            <th>
              <q-input dense outlined />
            </th>
            <th>
              <q-input dense outlined />
            </th>
          </tr>
        </tfoot>
      </q-markup-table>
    </div>

    <div class="col-10">
      <label class="zlabel" for="name"
        >Enclosures <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >A) Attested Copy Of Land Pass(LSC/Patta./VC Pass)<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            type="file"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Location Map Of The Plantation Showing Roads, Paths, Rivers, Etc
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="file"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) No Objection Certificate (NOC) From Village Council Concerned.
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="file"
            dense
            outlined
            v-model="formData.applicant_name"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) Any Other Doucments (if Any)
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>


    <div class="col-12">
      <span class="zlabel">
        I certified that the bamboo plantation as shown above is actually raised by me and that the information furnished above are ture to the best of my knowledge and belief and I also undertake to abide by the guidelines and instructions/conditions for registration, felling and transportation of bamboo from non-forest private land issued by the Government / Forest Department from time to time
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

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
            >A) North<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) East
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) South <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) West
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
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
        I certified that the bamboo plantation as shown above is actually raised
        by me and that the information furnished above are ture to the best of
        my knowledge and belief and I also undertake to abide by the guidelines
        and instructions/conditions for registration, felling and transportation
        of bamboo from non-forest private land issued by the Government / Forest
        Department from time to time
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


export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      one: '',
      two: '',
      three: '',
      four: '',
      four_a: '',
      four_b: '',
      four_c: '',
      four_d: '',
      four_e: '',
      five: '',
      five_a: '',
      five_b: '',
      five_c: '',
      five_d: '',


      six: '',
      // six


      
    });

    return {
   
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

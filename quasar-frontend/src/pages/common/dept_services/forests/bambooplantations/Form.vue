<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1. Name Of The Applicant <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.bamboo_1" outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >2. Father's name <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.bamboo_2" outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >3. Address (Village | Town | Station | District )
        <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.bamboo_3" type="textarea" outlined />
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
          <q-input outlined v-model="formData.bamboo_4A" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Name Of Village (VC Ram) Under Which Located
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_4B" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) Area (in Ha) <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_4C" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) Land Pass (ALSC/PP/VC Pass) No
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_4D" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            E) Period Of Validity Of Pass (if Any)
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_4E" />
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
          <q-input outlined v-model="formData.bamboo_5A" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) East
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_5B" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) South <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_5C" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) West
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_5D" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for=""
        >6. Particulars of bamboo plantation raised:</label
      >
      <q-markup-table flat bordered class="table">
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
          <tr v-for="i in rows" :key="i">
            <td>
              <q-input
                v-model="formData.bamboo_particulars[i - 1].year"
                outlined
              />
            </td>
            <td>
              <q-input
                v-model="formData.bamboo_particulars[i - 1].species"
                outlined
              />
            </td>
            <td>
              <q-input
                v-model="formData.bamboo_particulars[i - 1].nos"
                outlined
              />
            </td>
            <td>
              <q-input
                v-model="formData.bamboo_particulars[i - 1].total_bamboo"
                outlined
              />
            </td>
            <td>
              <q-input
                v-model="formData.bamboo_particulars[i - 1].total_mature"
                outlined
              />
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>TOTAL</th>
            <th>
              <q-input v-model="formData.bamboo_total_species" outlined />
            </th>
            <th>
              <q-input v-model="formData.bamboo_total_nos" outlined />
            </th>
            <th>
              <q-input v-model="formData.bamboo_total_total_bamboo" outlined />
            </th>
            <th>
              <q-input v-model="formData.bamboo_total_total_mature" outlined />
            </th>
          </tr>
        </tfoot>
      </q-markup-table>
    </div>

    <div class="col-12">
      <q-btn
        color="primary"
        class="full-width"
        label="Add row"
        @click="addRow"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for=""
        >7. Assistance received from Govt. if any for the bamboo
        plantation:</label
      >
      <q-markup-table flat bordered class="table">
        <thead>
          <tr>
            <th>Year</th>
            <th>Amount</th>
            <th>Scheme</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <q-input
                v-model="formData.bamboo_7year"
                placeholder="2012
2012..."
                type="textarea"
                outlined
              />
            </td>
            <td>
              <q-input
                v-model="formData.bamboo_7amt"
                placeholder="10000
20000..."
                type="textarea"
                outlined
              />
            </td>
            <td>
              <q-input
                v-model="formData.bamboo_7scheme"
                placeholder="Scheme1
Scheme2..."
                type="textarea"
                outlined
              />
            </td>
          </tr>
        </tbody>
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
          <q-file
            :rules="[(val) => val || 'Field is required']"
            v-model="formData.bamboo_landpass"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Location Map Of The Plantation Showing Roads, Paths, Rivers, Etc
            <span class="asterisk"> *</span></label
          >
          <q-file
            :rules="[(val) => val || 'Field is required']"
            v-model="formData.bamboo_map"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >C) No Objection Certificate (NOC) From Village Council Concerned.
            <span class="asterisk"> *</span></label
          >
          <q-file
            :rules="[(val) => val || 'Field is required']"
            v-model="formData.bamboo_noc"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) Any Other Doucments (if Any)
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.bamboo_other" />
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
import { onMounted, ref , watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const rows = ref(1);

    const formData = reactive({
      application_code: "ENV_FOREST_BAMBOO",
      department_id: 3,
      bamboo_1: "",
      bamboo_2: "",
      bamboo_3: "",
      bamboo_4A: "",
      bamboo_4B: "",
      bamboo_4C: "",
      bamboo_4D: "",
      bamboo_4E: "",
      bamboo_5A: "",
      bamboo_5B: "",
      bamboo_5C: "",
      bamboo_5D: "",
      bamboo_particulars: [
        {
          year: "",
          species: "",
          nos: "",
          total_bamboo: "",
          total_mature: "",
        },
      ],
      bamboo_total_species: "",
      bamboo_total_nos: "",
      bamboo_total_total_bamboo: "",
      bamboo_total_total_mature: "",
      bamboo_7year: "",
      bamboo_7amt: "",
      bamboo_7scheme: "",
      bamboo_landpass: null,
      bamboo_map: null,
      bamboo_noc: null,
      bamboo_other: null,

      // six
    });

    watch(store.state.globalData.common, () => {
      getA();
    });

    const getA = () => {
      const { applicant_name,city_town, postal_code,address, mobile_no,email} =
        store.state.globalData.common.partA;


      formData.bamboo_1 = applicant_name;
      formData.bamboo_3  =city_town;


  
    };

    return {
      formData,
      getA,
      rows,
      addRow: () => {
        formData.bamboo_particulars.push({
          year: "",
          species: "",
          nos: "",
          total_bamboo: "",
          total_mature: "",
        });
        rows.value = rows.value + 1;
        // console.log('rows',rows);
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

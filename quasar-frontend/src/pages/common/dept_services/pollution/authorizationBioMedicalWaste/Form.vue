<template>
  <div class="zcard row items-center q-col-gutter-md">
    <!-- <div class="col-12">
      <label for="" class="zlabel">1. </label>
      <div class="row justify q-col-gutter-md q-ml-md">
      

       
      </div>
    </div> -->
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        1.Authorization no:<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_bio_waste_one_1"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Authorization issue date
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_bio_waste_one_2"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >2.Occuppier/Operator <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_bio_waste_two_1"
        dense
        outlined
      />
    </div>
    <div class="col-lg-6 col-sm-10 col-xs-12">
      <label class="zlabel" for="gender"
        >Facility location <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.pollution_authorization_bio_waste_two_2"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >Acitivities for which authorization is required :</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_1
              "
              label="Generation, segregation "
            />
          </div>

          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_2
              "
              label="Collection "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_3
              "
              label="Storage"
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_4
              "
              label="Packaging "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_5
              "
              label="Reception "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_6
              "
              label="Transportation "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_7
              "
              label="  Treatment or processing or conversion "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_8
              "
              label="Recycling "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_9
              "
              label=" Disposal or destruction  "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_10
              "
              label="Use "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_11
              "
              label="Offering for sale, transfer "
            />
          </div>
          <div class="q-gutter-sm">
            <q-checkbox
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              v-model="
                formData.pollution_authorization_bio_waste_two_activity_12
              "
              label=" Any other form of handling  "
            />
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">3.Biomedical waste capacity </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Number of beds of HCF<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_three_1"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (ii) Number healthcare facilities covered by CBMWTF:<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_three_2"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iii) Installed treatment and disposal capacity<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_three_3"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (iv) Area or distance covered by CBMWTF<span class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_three_4"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (v) Quantity of Biomedical waste handled, treated or disposed:<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_three_5"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >Type of Waste Category Quantity permitted for Handling:
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Yellow<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_category_1"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Red<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_category_2"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            White (Translucent)<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_category_3"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Blue<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_category_4"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Puncture Proof, leak proof, tamper proof containers<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_category_5"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            Cardboard boxes with blue colored marking
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.pollution_authorization_bio_waste_category_6"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel">
      I hereby declare that the particulars given above are true to the best of
      my knowledge and belief.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature
        <span class="asterisk">*</span></label
      >

      <q-file
        v-model="
          formData.pollution_authorization_bio_waste_signature_designation
        "
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <!-- <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Date of receipt of application: <span class="asterisk">*</span>
      </label>
      <q-input
        type="date"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.labour_emp_contract_date"
        dense
        outlined
      />
    </div> -->

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

    const formData = reactive({
      application_code: "POLLUTION_AUTHORIZATION_BIO_WASTE",
      department_id: 11,
      pollution_authorization_bio_waste_one_1: "",
      pollution_authorization_bio_waste_one_2: "",
      pollution_authorization_bio_waste_two_1: "",
      pollution_authorization_bio_waste_two_2: "",
      pollution_authorization_bio_waste_two_activity_1: false,
      pollution_authorization_bio_waste_two_activity_2: false,
      pollution_authorization_bio_waste_two_activity_3: false,
      pollution_authorization_bio_waste_two_activity_4: false,
      pollution_authorization_bio_waste_two_activity_5: false,
      pollution_authorization_bio_waste_two_activity_6: false,
      pollution_authorization_bio_waste_two_activity_7: false,
      pollution_authorization_bio_waste_two_activity_8: false,
      pollution_authorization_bio_waste_two_activity_9: false,
      pollution_authorization_bio_waste_two_activity_10: true,
      pollution_authorization_bio_waste_two_activity_11: true,
      pollution_authorization_bio_waste_two_activity_12: true,

      pollution_authorization_bio_waste_three: "",
      pollution_authorization_bio_waste_three_1: "",
      pollution_authorization_bio_waste_three_2: "",
      pollution_authorization_bio_waste_three_3: "",
      pollution_authorization_bio_waste_three_4: "",
      pollution_authorization_bio_waste_three_5: "",

      pollution_authorization_bio_waste_category_1: "",
      pollution_authorization_bio_waste_category_2: "",
      pollution_authorization_bio_waste_category_3: "",
      pollution_authorization_bio_waste_category_4: "",
      pollution_authorization_bio_waste_category_5: "",
      pollution_authorization_bio_waste_category_6: "",

      pollution_authorization_bio_waste_signature_designation: null,
    });
    onMounted(() => {});
    return {
      group: ref([]),

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

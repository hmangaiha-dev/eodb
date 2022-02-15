<template>
  <div class="zcard row items-center q-col-gutter-md">
    <q-dialog class="print-hide" v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>
    <div class="col-xs-12 col-md-6">
      <label class="zsubtitle" for="name"
        >1.Applicant for <span class="asterisk"> *</span></label
      >
    </div>
    <div class="col-xs-12 col-md-6">
      <q-select
        v-model="formData.applicant_type"
        dropdown-icon="expand_more"
        outlined
        :options="application_types"
      />
    </div>

    <!-- type {{ formData.application_type }} -->
    <div class="col-xs-12 zsubtitle">2.Applicant details</div>

    <div class="row items-center q-col-gutter-sm q-ml-md col-12">
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="dob" type="date"
          >2.1 Applicant photo<span class="asterisk">*</span>
        </label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-file v-model="formData.applicant_photo" outlined>
          <template v-slot:prepend>
            <q-icon name="attach_file" />
          </template>
        </q-file>
        <!-- attach {{ formData.applicant_photo }} -->
        <!-- <router-link to="/"> </router-link> -->
        <q-btn
          flat
          color="primary"
          :label="formData.applicant_photo"
          @click="showAttachment(formData.applicant_photo)"
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="gender"
          >2.2 Applicant name <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          outlined
          v-model="formData.applicant_name"
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="pob">2.3 Applicant belongs to</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-select
          v-model="formData.applicant_caste"
          dropdown-icon="expand_more"
          outlined
          :options="castes"
        />
      </div>
    </div>

    <div class="col-12">
      <label class="zsubtitle" for="pob">3.Correspondance Addres</label>
    </div>

    <div class="row items-center col-12 q-ml-md">
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="fname"
          >3.1 Country<span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="fname"
          v-model="formData.country"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="mname">3.2 State</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="mname"
          v-model="formData.state"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="mname">3.3 City/Town*</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="mname"
          v-model="formData.city_town"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="email">3.4 Postal code/Zip code</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="email"
          v-model="formData.postal_code"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.5 Address</label>
      </div>
      <!--    hint="Adhaar no will be used to match the records of your Digilocker AC"-->
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          v-model="formData.address"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.6 Phone number</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.phone_no"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.7 Mobile number</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.mobile_no"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.8 Fax number</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.fax_no"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar">3.9 Email id</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.email"
          item-aligned
          outlined
        />
      </div>
      <div class="col-xs-12 col-md-6">
        <label class="zlabel" for="adar"> 3.10 Alternate Email ID</label>
      </div>
      <div class="col-xs-12 col-md-6">
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          id="adar"
          v-model="formData.alt_email"
          item-aligned
          outlined
        />
      </div>
    </div>
    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive, ref } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, computed, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const dialog = ref(false);
    const attachment = ref("");

    var formData = reactive({
      applicant_type: "",
      applicant_photo: null,
      applicant_name: "",
      applicant_caste: "",
      country: "",
      state: "",
      city_town: "",
      postal_code: "",
      address: "",
      phone_no: "",
      mobile_no: "",
      fax_no: "",
      email: "",
      alt_email: "",
    });
    onMounted(() => {
      getPersonalDetails();
    });

    const getPersonalDetails = () => {

      formData.applicant_type = store.state.globalData.common.partA?.applicant_type;
      formData.applicant_photo = store.state.globalData.common.partA?.applicant_photo;
      formData.applicant_name = store.state.globalData.common.partA?.applicant_name;
      formData.applicant_caste = store.state.globalData.common.partA?.applicant_caste;
      formData.country = store.state.globalData.common.partA?.country;
      formData.state = store.state.globalData.common.partA?.state;
      formData.city_town = store.state.globalData.common.partA?.city_town;
      formData.postal_code = store.state.globalData.common.partA?.postal_code;
      formData.address = store.state.globalData.common.partA?.address;
      formData.phone_no = store.state.globalData.common.partA?.phone_no;
      formData.mobile_no = store.state.globalData.common.partA?.mobile_no;
      formData.fax_no = store.state.globalData.common.partA?.fax_no;
      formData.email = store.state.globalData.common.partA?.email;
      formData.alt_email = store.state.globalData.common.partA?.alt_email;
    };

    watch(store.state.globalData.common, () => {
      getPersonalDetails();
    });
    return {
      application_types: [
        "New Enterprise",
        "Expansion of Enterprise",
        "Under Special Schemes",
      ],
      castes: [
        "General",
        "SC/ST",
        "OBC/MOBC",
        "Physically Challenged",
        "Women Entrepreneur",
      ],
      formData,
      dialog,
      attachment,
      showAttachment: (val) => {
        console.log("dialog attach", val);
        // return
        attachment.value = "http://localhost:8000/storage/" + val;
        dialog.value = true;
      },
      getPersonalDetails,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

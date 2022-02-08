<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >1.Land Settlement Certificate (LSC) neitu hming
        <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.land_rev_lsc_one" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >2 Pa/Pasal hming <span class="asterisk"> *</span></label
      >
      <q-input v-model="formData.two" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >3 Address <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" v-model="formData.birth_place" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >4 Land Settlement Certificate (LSC) No. Leh kum
        <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" v-model="formData.birth_place" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >5 Land Settlement Certificate awmna ram/veng
        <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" v-model="formData.birth_place" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >6 Land Settlement Certificate zau zawng(area)
        <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" v-model="formData.birth_place" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >7 Engvanga LSC area chu then duh nge?
        <span class="asterisk">*</span></label
      >
      <q-input type="textarea" v-model="formData.birth_place" dense outlined />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="gender"
        >8 LSC thentur cheibawl a ni em? <span class="asterisk">*</span></label
      >
      <q-input v-model="formData.birth_place" dense outlined />
    </div>

    <div class="col-12 zlabel">
      <label for="">9 A ram thenawm neitute hming leh address *</label>

      <!-- <div class="col-10"> -->

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >1) South <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >2) North<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >3) West<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >4) East<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
      <!-- </div> -->
    </div>

    <div class="col-12">
      <span class="zlabel">
        10.Heng a hnuaia mite hi Government Gazetted Officer attested copy thil
        tel tur
      </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel">1) Original Land Settlement Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_a" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">2) Land Valuation Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_b" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">3) No Objection Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_c" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">4) Non Encumbrance Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_d" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >5) Tax payment receipt/ Tax Clearance Certificate</label
          >
          <q-file v-model="formData.land_revenue_land_transfer_nine_e" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >6) LSC neitu leh a neichhawngtu tur te Voter I.D</label
          >
          <q-file v-model="formData.land_revenue_land_transfer_nine_e" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">11 </label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >Hmun a thlawna inpekna ( free gift).Gift Deed non-judicial stamp
            paper-a siam tur <span class="asterisk"> *</span></label
          >
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >Hmun hralh (transfer by sale/exchange).Non-judicial stamp paper-ah
            agreement siam tur<span class="asterisk"> *</span></label
          >
        </div>
      </div>
    </div>

    <div class="col-xs-12">
      <label class="zlabel" for=""
        >12. LSC neitu hian a LSC hi a dik ngei em tih Officer record atanga
        enfiah tir in, clearance certificate a thil tel tur a ni.</label
      >

      <q-file v-model="formData.land_revenue_land_transfer_nine_e" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <span class="zlabel"> 13. LSC nei chhawngtu tur:- </span>
      <div
        v-for="i in formData.rows"
        :key="i"
        class="row justify q-col-gutter-sm q-ml-md"
      >
      <!-- {{ i }} -->
        <div class="col-sm-3 col-xs-6">
          <q-input
            placeholder="Hming leh Pa/Pasal hming"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.lsc_details[i-1].hming"
            dense
            outlined
          />
        </div>

        <div class="col-sm-3 col-xs-6">
          <q-input
            placeholder="Address"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
             v-model="formData.lsc_details[i-1].address"
            dense
            outlined
          />
        </div>

        <div class="col-sm-3 col-xs-6">
          <q-input
            placeholder="Kum"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
             v-model="formData.lsc_details[i-1].kum"
            dense
            outlined
          />
        </div>

        <div class="col-sm-3 col-xs-6">
          <q-input
            placeholder="Tribal nge/Non-Tribal"
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
             v-model="formData.lsc_details[i-1].caste"
            dense
            outlined
          />
        </div>

        <div class="q-my-md q-py-none col-12">
          <hr />
        </div>
      </div>

      <div class="col-4">
        <q-btn
          color="primary"
          class="full-width"
          label="Add row"
          @click="addRow"
        />
      </div>
    </div>

    <div class="col-12 zlabel">
      A chunga ka ziak hi a dik vek a tih dik loh a awm anih chuan LSC hi ka dil
      angin siam mahse englai pawhin sut (cancel) theih a ni tih ka pawm a. Ram
      thenna hi Registration Act, 1908 dan hnuaiah thla 3 chhungin register
      turin ka intiam bawk a. Hei hi ka tih hlawhtlin loh chuan he ram thenna hi
      sut leh (cancel) tur a ni tih ka pawm bawk e.
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >Tuna Address<span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-5">
      <label class="zlabel" for="gender"
        >Diltu Signature<span class="asterisk">*</span></label
      >
      <q-file v-model="formData.signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"
        >Tuna Address<span class="asterisk"> *</span></label
      >
      <q-input dense outlined v-model="formData.applicant_name" />
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

import {ref} from 'vue'
 
export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LAND_REVENUE_LSC_PARTITION",
      department_id: 8,
      rows: 1,
      land_rev_lsc_one: '',
      lsc_details: [{
        hming: '',
        address: '',
        kum: '',
        caste: ''
      }],
      signature: null,
      land_rev_lsc_two: '',
    });
    onMounted(() => {
      console.log('rows',formData.rows);
    });
    return {
      formData,
      addRow: () => {
        formData?.lsc_details?.push({
          name: '',
          address: '',
          kum: '',
          caste: ''
        })

        console.log('push',formData.lsc_details);
        formData.rows++;
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

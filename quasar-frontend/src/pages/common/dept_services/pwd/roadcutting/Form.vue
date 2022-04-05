<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="gender">
        1. Name of applicant (in block letter)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.name"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel"> 2. Contact address </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) Mobile No <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.phone"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Email identity <span class="asterisk">*</span></label
          >
          <q-input v-model="formData.email" dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">3. Resident Address</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) House No if any <span class="asterisk">*</span></label
          >
          <q-input v-model="formData.rhouseno" dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Locality/Street/Veng <span class="asterisk">*</span></label
          >
          <q-select
            outlined
            emit-value
            option-label="name"
            option-value="name"
            v-model="formData.rlocalcouncil_name"
            :options="pwdData.councils"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) City/Town/Village <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.rcity"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) District <span class="asterisk">*</span></label
          >
          <q-select
            emit-value
            outlined
            option-label="name"
            option-value="name"
            v-model="formData.rdistrict"
            :options="pwdData.districts"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >4. Location of proposed land with respect to the road (specify landmark
        if any):</label
      >
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            a) House No if any <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.houseno"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            b) Locality/Street/Veng <span class="asterisk">*</span></label
          >
          <q-select
            emit-value
            outlined
            option-label="name"
            option-value="name"
            v-model="formData.localcouncil_name"
            :options="pwdData.councils"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            c) City/Town/Village <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.city"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            d) District <span class="asterisk">*</span></label
          >
          <q-select
            emit-value
            outlined
            option-label="name"
            option-value="name"
            v-model="formData.district"
            :options="pwdData.districts"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="gender">
        5. Land pass no (copy of pass shall be produced at the time of spot
        verification) <span class="asterisk">*</span></label
      >
    </div>

    <div class="col-md-6 col-xs-10 zlabel">
      <label class="zlabel" for="gender"
        >6. Purpose of cutting/Kawng laih duh chhan:
        <span class="asterisk">*</span></label
      >
      <br />
      <div style="display: grid">
        <q-radio
          v-model="formData.water_id"
          val="0"
          label="Tui Connection Thar (New)"
        />
        <q-radio
          v-model="formData.water_id"
          val="1"
          label="Tui Connection Thar (Old)"
        />
        <q-radio v-model="formData.water_id" val="2" label="Others" />
      </div>
    </div>
    <div class="col-md-6 col-xs-10 zlabel">
      <label class="zlabel" for="gender"
        >7. Type of Road/Pavement: <span class="asterisk">*</span></label
      >
      <br />
      <div style="display: grid">
        <q-radio
          v-model="formData.road_type"
          val="0"
          label="Flexible Pavement (Alkatra luan)"
        />
        <q-radio
          v-model="formData.road_type"
          val="1"
          label="Rigid Pavement (Concrete-a siam)"
        />
        <q-radio v-model="formData.road_type" val="2" label="Others" />
      </div>
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, watch } from "vue";
import { date } from "quasar";
import { ref } from "vue";
import { api2, api } from "src/boot/axios";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      user_id: 0,
      name: "",
      email: "",
      phone: 8258865517,
      rhouseno: "",
      rlocalcouncil_name: "",
      rcity: "",
      rdistrict: "",

      houseno: "",
      localcouncil_name: "",
      city: "",
      district: "",

      water_id: "",
      road_type: "",

      division_id: "",
    });

    const pwdData = reactive({
      councils: [],
      districts: [],
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

      formData.pwd_road_cutting_one = applicant_name;
      formData.pwd_road_cutting_two_b = mobile_no;
      formData.pwd_road_cutting_two_c = email;
      formData.pwd_road_cutting_three_c = city_town;
    };

    onMounted(() => {
      // let url = 'http://10.180.243.14:8000/api/auth/localcouncil';
      api.get("pwd").then((res) => {
        let { councils, districts } = res.data;
        pwdData.councils = councils;
        pwdData.districts = districts;
        return console.log("council", pwdData);
      });
    });
    return {
      formData,
      pwdData,
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

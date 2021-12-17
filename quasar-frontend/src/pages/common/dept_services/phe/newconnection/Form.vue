<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >1. Diltu Hming (hawrawppuiin) <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        2. Pa Hming <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3. In Luahtu <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>
    <div class="col-12">
      <label for="" class="zlabel">4. Address</label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            A). House No. <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            B). Hmun Bik (Street/lane) <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            C) Veng <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            D) Khua <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            E) Pin Code <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            F) Dilna Hmun Hriat Awlsamna Tur (Landmark):
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            G) Telephone No.
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            H) Email ID
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.fire_one_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        5. Diltu Hnathawh
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        6. Dilna In-a Connection Awm Tawh Zat
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        7. Dilna In-a Chhungkaw Cheng Zat
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        8. LSC/Land Pass/Relevant Document (Attested Photocopy).
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-caption">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        Signature Of The Applicant
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.fire_one_b"
        dense
        outlined
      />
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";
import { ref } from "vue";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "FIRE_NOC",
      department_id: 5,

      fire_one: "",
      fire_one_a: "",
      fire_one_b: "",
      fire_two: "",
      fire_two_a: "",
      fire_two_b: "",
      fire_three: "",
      fire_four: "",
      fire_five: "",
      fire_six: "",
      fire_seven: "",
      fire_eight: "",
      fire_nine: "",
      fire_ten: "",
      fire_eleven: "",
      fire_twelve: "",
      fire_thirteen: "",
      fire_fourteen: "",
      fire_fifteen: "",
      fire_sixteen: "",
      fire_seventeen: "",
      fire_eighteen: "",
      fire_tick_any: [],
      fire_nineteen: "",
      fire_nineteen_a: "",
      fire_nineteen_b: "",
      fire_nineteen_c: "",
      fire_twenty: "",
      fire_twenty_a: "",
      fire_twenty_b: "",
      fire_twentyone: "",
      fire_twentytwo: "",
      fire_twentythree: "",
      fire_twentyfour: "",
      fire_twentyfive: "",
      fire_twentysix: "",
      fire_twentyseven: null,
    });
    onMounted(() => {});
    return {
      group: ref([]),
      options: [
        {
          label: "a) Yard Hydrants/Landing Valve",
          value: "a) Yard Hydrants/Landing Valve",
        },
        { label: "b) Riser", value: "b) Riser" },

        { label: "c) Down Comer", value: "c) Down Comer" },

        { label: "d) Hose Reel", value: "d) Hose Reel" },

        {
          label: "e) Automatic Sprinkler system",
          value: "e) Automatic Sprinkler system",
        },

        {
          label: "f) Automatic Detection and Alarm System",
          value: "f) Automatic Detection and Alarm System",
        },

        {
          label: "g) Manually Operated Electric Fire Alarm System",
          value: "g) Manually Operated Electric Fire Alarm System",
        },
        {
          label: "h) Deluge valves & Monitors etc.",
          value: "h) Deluge valves & Monitors etc.",
        },
        { label: "i) Delivery Hoses", value: "i) Delivery Hoses" },
        {
          label: "j) Emergency Branch etc.",
          value: "j) Emergency Branch etc.",
        },
      ],
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

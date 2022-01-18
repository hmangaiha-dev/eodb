<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1 Service Connection No. <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_change_name_one"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="dob" type="date"
        >2 Consumer No.<span class="asterisk">*</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_change_name_two"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >3 Name of Registered Consumer (at present)
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_change_name_three"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >4 Consumer category <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_change_name_four"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >5 Contracted load <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_change_name_five"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >6 Address<span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_change_name_six"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >7 Telephone No.<span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_change_name_seven"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >8 Name of the person in whose name connection to be change (in CAPITAL
        LETTERS)<span class="asterisk">*</span></label
      >

      <q-input
        v-model="formData.power_change_name_eight"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
      />
    </div>

    <div class="col-12 zlabel">
      Note: The following documents duly certified are attached with the
      application form: (Tick whichever applicable)
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">1. Copy of latest bill duly paid</label>
      <q-file v-model="formData.power_change_name_latest_bill" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >2. Proof of ownership / legal occupancy of premises.</label
      >
      <q-file v-model="formData.power_change_name_owner_proof" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >3. No Objection Certificate from the existing consumer if
        available/possible.</label
      >
      <q-file v-model="formData.power_change_name_noc_" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >4. Registered deed/ Succession certificate/_ (if any other document,
        please specify)</label
      >
      <q-file v-model="formData.power_change_name_succession" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">Signature of the Consumer</label>
      <q-file v-model="formData.power_change_name_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_CHANGE_NAME",
      department_id: 12,
      power_change_name_one: "",
      power_change_name_two: "",
      power_change_name_three: "",
      power_change_name_four: "",
      power_change_name_five: "",
      power_change_name_six: "",
      power_change_name_seven: "",
      power_change_name_eight: "",
      power_change_name_latest_bill: null,
      power_change_name_owner_proof: null,
      power_change_name_noc_: null,
      power_change_name_succession: null,
      power_change_name_signature: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

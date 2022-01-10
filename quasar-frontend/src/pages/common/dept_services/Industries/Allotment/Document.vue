<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Attach Document</div>

    <div class="col-xs-12 col-md-5">
      <label class="zlabel" for="name">
        Signature of the applicant <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-file v-model="formData.applicant_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12 col-md-5">
      <label class="zlabel" for="name">
        Attested Photo Copy Of Memorandum/Registration Certificate
        <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-file v-model="formData.reg_certificate" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-xs-12 col-md-5">
      <label class="zlabel" for="name">
        Attested Photo Copy Of Voters ID Or Family Ration Card
        <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-4">
      <q-file v-model="formData.voters_id" outlined>
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

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      applicant_signature: null,
      reg_certificate: null,
      voters_id: null,
    });
    onMounted(() => {});
    return {
      emailRegex,

      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

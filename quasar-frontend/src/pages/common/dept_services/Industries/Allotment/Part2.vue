<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-12 text-h6 q-pb-none text-center">Part - II</div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name"
        >Name of the Enterprise <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.enterprise_name" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name"
        >Category Of Enterprise <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.enterprise_category" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Nature Of Activity <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.nature_activity" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Whether The Unit Is Ancillary <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.isAncillary" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Incase Of Others, Please Specify <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.incase_others" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        If Yes, Give Detail: <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.if_yes" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Type Of Organization <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.organization_type" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Product To Be Manufacture <span class="asterisk"> *</span></label
      >
    </div>


    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.product_manufacture" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
         Service To Be Provided<span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.service_provided" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Proposed Investment In Fixed Assets (Rs. In Lakhs) <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.proposed_investment" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Installed Capacity <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.installed_capacity" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Area In Plot Required <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.area_plot" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        No. Of Ready Build Shed Required <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.no_of_ready_build" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Requirement Of Electric Power <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.electric_power" />
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="name">
        Daily Requirement Of Water <span class="asterisk"> *</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']" dense outlined v-model="formData.daily_water" />
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



   

    const formData = reactive({
      enterprise_name: "",
      enterprise_category: "",
      nature_activity: "",
      incase_others: "",
      isAncillary: "",
      if_yes: "",
      organization_type: "",
      product_manufacture: "",
      service_provided: "",
      proposed_investment: "",
      installed_capacity: "",
      area_plot: "",
      no_of_ready_build: "",
      electric_power: "",
      daily_water: "",
     
    });
    onMounted(() => {
      
    });
    return {
     
      emailRegex,
    
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

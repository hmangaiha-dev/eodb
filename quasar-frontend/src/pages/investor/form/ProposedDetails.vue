<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-xs-12 zsubtitle">5.Proposed Site details</div>

    <div class="col-xs-12">
      <label class="zlabel" for="name">
        5.1 Plot Requirement in Industrial Area*
        <span class="asterisk"> *</span></label
      >
      <div class="col-xs-12 col-sm-10 zlabel">
        <q-radio
          v-model="formData.proposed_plot_requirement"
          val="applicable"
          label="Applicable"
        />
        <q-radio
          v-model="formData.proposed_plot_requirement"
          val="not applicable"
          label="Not Applicable"
        />
      </div>
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="dob" type="date"> 5.2 Industrial Area* </label>
      <q-select
        
        dropdown-icon="expand_more"
        outlined
        v-model="formData.proposed_industrial_area"
        :options="industrial_areas"
      />
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="gender"
        >5.3 Total Proposed Project Area(Sq. meter)*
        <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        
        outlined
        v-model="formData.proposed_total_proposed_area"
      />
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="pob"> 5.4 Total Built-up Area(Sq. meter)* </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        
        outlined
        v-model="formData.proposed_total_built_area"
      />
    </div>

    <div class="col-xs-12 col-md-6">
      <label class="zlabel" for="gender">
        5.5 City/Town* <span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        
        outlined
        v-model="formData.proposed_city_town"
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

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      proposed_plot_requirement: "",
      proposed_industrial_area: "",
      proposed_total_proposed_area: "",
      proposed_total_built_area: "",
      proposed_city_town: "",
    });
    onMounted(() => {});
    return {
      formData,
      industrial_areas: [
        "Industrial Growth Centre, Luangmual",
        "Industrial Estate, Zuangtui",
        "Export Promotion Industrial Park, Lengte",
      ],
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

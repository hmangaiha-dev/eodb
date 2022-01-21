	<template>
	  <div class="zcard row items-center q-col-gutter-md">
	    <div class="col-12 text-h6 q-pb-none text-center">Form – LM – 1</div>
	    <p class="col-12 text-caption q-py-none text-center">SCHEDULE – II “A”
	 [See rule 11 (1)]</p>
	    <div class="col-12 ztitle text-center">
	      Application form for licence as manufacturer of weights & measures under the Legal
	Metrology Act, 2009
	    </div>
	    <q-form @submit.prevent="" class="row">
	      <div class="row q-col-gutter-lg">
		<div class="col-xs-12">
		  <Form ref="applicantRef" />
		</div>
	      </div>

	      <div class="text-center q-mt-md col-12">
		<q-btn type="submit" color="green-5" label="Submit" />
		<q-btn class="q-mx-md" color="red-4" label="Reset" />
	      </div>
	    </q-form>
	  </div>
	</template>
	<script>
	import { reactive } from "@vue/reactivity";
	import { useStore } from "vuex";
	import { onMounted } from "vue";
	import { date } from "quasar";
	import { ref } from "vue";

	import Form from "./Form.vue";
	// import Part2 from "./Part2.vue";
	// import Document from "./Document.vue";


	export default {
	  components: {
	    Form,
	    // Part2,
	    // Document,
	  },
	  setup(props, context) {
	    const applicantRef = ref(null);
	    // const FirmRef = ref(null);
	    const store = useStore();
	    const localData = reactive({
	      genders: [
		{ value: "Male", label: "Male" },
		{ value: "Female", label: "Female" },
		{ value: "Other", label: "Other" },
	      ],
	      epic_relations: [
		{ value: "Father", label: "Father" },
		{ value: "Mother", label: "Mother" },
	      ],
	      relations: [
		{ value: "Father", label: "Father" },
		{ value: "Mother", label: "Mother" },
		{ value: "Spouse", label: "Spouse" },
		{ value: "Guardian", label: "Guardian" },
	      ],
	      adults: [
		{ value: true, label: "Applicant is above 18 years" },
		{ value: false, label: "Applicant is below 18 years" },
	      ],
	    });

	    const formData = reactive({
	      title: "Mr",
	      name: "",
	      dob: "",
	      gender: "Male",
	      father_name: "",
	      mother_name: "",
	      birth_place: "",
	      phone_no: "",
	      // email: currentUser?.email,
	      aadhaar_no: "",
	      relation: "Father",
	      relation_name: "",
	      relation_title: "Mr",
	      adult: true,
	      epic_no: "",
	      epic_relation: "Father",
	      epic_holder: "",
	      constituency: "",
	    });
	    onMounted(() => {});
	    return {
	      applicantRef,
	      formData,
	      options: ["Google", "Facebook", "Twitter", "Apple", "Oracle"],
	      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
	    };
	  },
	};
	</script>

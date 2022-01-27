<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12 zlabel text-center">I-PRODUCERS</div>

    <div class="col-12">
      <hr />
    </div>

    <div class="col-12 zlabel text-center">PART - A (GENERAL)</div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >1. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            a. Name and location of the unit
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">b. Address and Contact number</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            c. Registration required for manufacturing of: <br />
            (i) Carry bags; <br />
            <span class="q-ml-md">
              (a) petro- based, <br />
              (b) Compostable (ii) Multi-layered plastics <br />
            </span>
            (ii) Multi-layered plastics
          </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_one_c"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">d. Manufacturing capacity</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >e. In case of renewal, previous registration number and date of
            registration</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_one_e"
          />
        </div>
      </div>
    </div>

    <div class="col-lg-10 col-xs-12">
      <label class="zlabel" for="name">
        2 Is the unit registered with the District Industries Centre of the
        State Government or Union territory? If yes, attach a copy
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_producer_two" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Total capital invested on the project
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_three_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) Year of commencement of production</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_three_b"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) List and quantum of products and by-products
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_producer_four_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) List and quantum of raw materials used</label
          >
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_producer_four_b"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        5 Furnish a flow diagram of manufacturing process showing input and
        output in terms of products and waste generated including for captive
        power generation and water.
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_producer_five" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        6 Status of compliance with these rules- Thickness – fifty microns
        (Yes/No)
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_producer_six"
      />
    </div>

    <div class="col-12 text-center zlabel">
      PART - B (PERTAINING TO LIQUID EFFLUENT AND GASEOUS EMISSIONS)
      <br />
      <hr />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        7 Does the unit have a valid consent under the Water (Prevention and
        control of Pollution) Act, 1974? If yes, attach a copy
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_producer_seven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        8 Does the unit have a valid consent under the Air (Prevention and
        control of Pollution) Act, 1981? If yes, attach a copy
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_producer_eight" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel text-center">
      PART - C (PERTAINING TO WASTE)
      <br />
      <hr />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        9 Solid Wastes or rejects: <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            a) Total quantum of waste generated
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_nine_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >b) Mode of storage within the plant</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_nine_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >c) Provision made for disposal of wastes</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_producer_nine_c"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        10 Attach or Provide list of person supplying plastic to be used as raw
        material to manufacture carry bags or plastic sheet of like or
        multi-layered packaging
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_producer_ten"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        11 Attach or provide list of personnel or Brand Owners to whom the
        products will be supplied
        <span class="asterisk"> *</span></label
      >
      <q-input type="textarea" dense outlined v-model="formData.pollution_producer_eleven" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        12 Action plan on collecting back the plastic wastes
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_producer_twelve"
      />
    </div>

    <div class="col-12 zlabel text-center">
      II - BRAND OWNERS <br />
      <hr />
    </div>

    <div class="col-12 zlabel text-center">PART - A (GENERAL)</div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        1 Name, Address and Contact number
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_brand_one"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        2 In case of renewal, previous registration number and date of
        registration
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_brand_two"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3 Is the unit registered with the District Industries Centre of the
        State Government or Union territory? If yes, attach a copy
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_brand_three" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Total capital invested on the project.
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_four_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) Year of commencement of production</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_four_b"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) List and quantum of products by-products
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_five_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) List and quantum of raw materials used</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_five_b"
          />
        </div>
      </div>
    </div>

    <div class="col-12 zlabel text-center">
      PART - B (PERTAINING TO LIQUID EFFLUENT AND GASEOUS EMISSIONS)
      <br />
      <hr />
    </div>

    <div class="col-lg-10 col-xs-12">
      <label class="zlabel" for="name">
        6 Does the unit have a valid consent under the Water (Prevention and
        control of Pollution) Act, 1974? If yes, attach a copy.
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_brand_six" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-lg-10 col-xs-12">
      <label class="zlabel" for="name">
        7 Does the unit have a valid consent under the Air (Preventio and
        control of Pollution) Act, 1981? If yes, attach a copy.
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_brand_seven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12 zlabel text-center">
      PART - C (PERTAINING TO WASTE)
      <br />
      <hr />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"> 8 Solid Wastes or rejects: </label>
      <span class="asterisk"> *</span>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            a) Total quantum of waste generated
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_eight_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >b) Mode of storage within the plant</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_eight_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >c) Provision made for disposal of wastes</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_brand_eight_c"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        9 Attach or Provide list of person supplying plastic material
        <span class="asterisk"> *</span></label
      >
      <q-file v-model="formData.pollution_brand_nine" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        10 Action plan on collecting back the plastic wastes
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_brand_ten"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">Signature</label>
      <q-file v-model="formData.pollution_producer_brand_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        Designation
        <span class="asterisk"> *</span></label
      >
      <q-input
        dense
        outlined
        v-model="formData.pollution_producer_brand_designation"
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

    const formData = reactive({
      application_code: "POLLUTION_PRODUCER_BRAND",
      department_id: 11,
      pollution_producer_I: "",
      pollution_producer_partA: "",
      pollution_producer_one: "",
      pollution_producer_one_a: "",
      pollution_producer_one_b: "",
      pollution_producer_one_c: "",
      pollution_producer_one_d: "",
      pollution_producer_one_e: "",
      pollution_producer_two: null,
      pollution_producer_three: "",
      pollution_producer_three_a: "",
      pollution_producer_three_b: "",
      pollution_producer_four: "",
      pollution_producer_four_a: "",
      pollution_producer_four_b: "",
      pollution_producer_five: null,
      pollution_producer_six: "",
      pollution_producer_partB: "",
      pollution_producer_seven: null,
      pollution_producer_eight: null,
      pollution_producer_partC: "",
      pollution_producer_nine: "",
      pollution_producer_nine_a: "",
      pollution_producer_nine_b: "",
      pollution_producer_nine_c: "",
      pollution_producer_ten: "",
      pollution_producer_eleven: "",
      pollution_producer_twelve: "",
      pollution_brand_II: "",
      pollution_brand_partA: "",
      pollution_brand_one: "",
      pollution_brand_two: "",
      pollution_brand_three: null,
      pollution_brand_four: "",
      pollution_brand_four_a: "",
      pollution_brand_four_b: "",
      pollution_brand_five: "",
      pollution_brand_five_a: "",
      pollution_brand_five_b: "",
      pollution_brand_partB: "",
      pollution_brand_six: null,
      pollution_brand_seven: null,
      pollution_brand_partC: "",
      pollution_brand_eight: "",
      pollution_brand_eight_a: "",
      pollution_brand_eight_b: "",
      pollution_brand_eight_c: "",
      pollution_brand_nine: null,
      pollution_brand_ten: "",
      pollution_producer_brand_signature: null,
      pollution_producer_brand_designation: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

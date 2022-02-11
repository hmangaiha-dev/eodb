<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Name of applicant <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_connected_load_one"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Service Connection No. (for existing Connection):<span
          class="asterisk"
        >
          *</span
        ></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_connected_load_two"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Consumer No. (for existing connections)
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_connected_load_three"
        dense
        outlined
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >Address of applicant: <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.power_connected_load_four"
        dense
        outlined
      />
    </div>


    <div class="col-md-9 q-mx-auto">   
      
       <table cellspacing="30" cellpadding="50" style="table-layout: fixed" >
      <tr >
        <th>1.Item</th>
        <th>2.Load per Item</th>
        <th>3.No.</th>
        <th>4.Total load(Watts)</th>
      </tr>

      <tr>
        <td>CFL</td>
        <td>15</td>
        <td>
          <q-input v-model="formData.power_connected_load_t1" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t1, 15) }}</td>
      </tr>

<tr>
        <td>Bulb</td>
        <td>60</td>
        <td>
          <q-input v-model="formData.power_connected_load_t2" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t2, 60) }}</td>
      </tr>

      <tr>
        <td>Tube light</td>
        <td>40</td>
        <td>
          <q-input v-model="formData.power_connected_load_t3" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t3, 40) }}</td>
      </tr>
      <tr>
        <td>Fan</td>
        <td>60</td>
        <td>
          <q-input v-model="formData.power_connected_load_t4" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t4, 60) }}</td>
      </tr>
      <tr>
        <td>Tape-recorder/ Music system </td>
        <td>100</td>
        <td>
          <q-input v-model="formData.power_connected_load_t5" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t5, 100) }}</td>
      </tr>
      <tr>
        <td>Television</td>
        <td>90</td>
        <td>
          <q-input v-model="formData.power_connected_load_t6" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t6, 90) }}</td>
      </tr>
      <tr>
        <td>Mixie (If plugged in permanently)</td>
        <td>375</td>
        <td>
          <q-input v-model="formData.power_connected_load_t7" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t7, 375) }}</td>
      </tr>
      <tr>
        <td>Electric iron</td>
        <td>750</td>
        <td>
          <q-input v-model="formData.power_connected_load_t8" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t8, 750) }}</td>
      </tr>
      <tr>
        <td>Fridge</td>
        <td>150</td>
        <td>
          <q-input v-model="formData.power_connected_load_t9" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t9, 150) }}</td>
      </tr>
      <tr>
        <td>Cooler</td>
        <td>250</td>
        <td>
          <q-input v-model="formData.power_connected_load_t10" dense outlined type="number" />
        </td>
        <td>{{ multiply(formData.power_connected_load_t10, 250) }}</td>
      </tr>
      <tr>
        <td>Heater (for cooking /water
Heating/room heater) </td>
        <td>1000</td>
        <td>
          <q-input v-model="formData.power_connected_load_t11" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t11, 1000) }}</td>
      </tr>
      <tr>
        <td>Washing machine</td>
        <td>750</td>
        <td>
          <q-input v-model="formData.power_connected_load_t12" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t12, 750) }}</td>
      </tr>
      <tr>
        <td>Geyser</td>
        <td>2000</td>
        <td>
          <q-input v-model="formData.power_connected_load_t13" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t13, 2000) }}</td>
      </tr>
      <tr>
        <td>Microwave oven</td>
        <td>2000</td>
        <td>
          <q-input v-model="formData.power_connected_load_t14" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t14, 2000) }}</td>
      </tr>
      <tr>
        <td>Air Conditioner (1 ton)</td>
        <td>1500</td>
        <td>
          <q-input v-model="formData.power_connected_load_t15" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t15, 1500) }}</td>
      </tr>
      <tr>
        <td>Air Conditioner (1.5 Ton)</td>
        <td>2250</td>
        <td>
          <q-input v-model="formData.power_connected_load_t16" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t16, 2250) }}</td>
      </tr>
      <tr>
        <td>Computer</td>
        <td>100</td>
        <td>
          <q-input v-model="formData.power_connected_load_t17" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t17, 100) }}</td>
      </tr>
      <tr>
        <td>Printer</td>
        <td>150</td>
        <td>
          <q-input v-model="formData.power_connected_load_t18" dense outlined type="number"/>
        </td>
        <td>{{ multiply(formData.power_connected_load_t18, 150) }}</td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td>
          Total
        </td>
        <td> {{formData.power_connected_load_t_total}}   </td>
      </tr>










    </table>
    </div>



    <div class="col-12 zlabel">
      Note: The following documents are attached with the application form: (if
      applicable)
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">Signature of consumer/applicant </label>
      <q-file v-model="formData.power_connected_load_signature" outlined>
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
import { onMounted, watch,onUpdated } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];

    const formData = reactive({
      application_code: "POWER_CONNECTED_LOAD",
      department_id: 12,

   

      power_connected_load_one: "",
      power_connected_load_two: "",
      power_connected_load_three: "",
      power_connected_load_four: "",

      power_connected_load_t1: 0,
      power_connected_load_t2: 0,
      power_connected_load_t3: 0,
      power_connected_load_t4: 0,
      power_connected_load_t5: 0,
      power_connected_load_t6: 0,
      power_connected_load_t7: 0,
      power_connected_load_t8: 0,
      power_connected_load_t9: 0,
      power_connected_load_t10: 0,
      power_connected_load_t11: 0,
      power_connected_load_t12: 0,
      power_connected_load_t13: 0,
      power_connected_load_t14: 0,
      power_connected_load_t15: 0,
      power_connected_load_t16: 0,
      power_connected_load_t17: 0,
      power_connected_load_t18: 0,

      power_connected_load_t_total: 0,
      power_connected_load_signature: null,
    });

   

    onUpdated(() => {
      formData.power_connected_load_t_total=  
      parseInt(formData.power_connected_load_t1)*15 + parseInt(formData.power_connected_load_t2)*60	

      + parseInt(formData.power_connected_load_t3)*40 + parseInt(formData.power_connected_load_t4)*60 + parseInt(formData.power_connected_load_t5)*100 +
      parseInt(formData.power_connected_load_t6)*90 + parseInt(formData.power_connected_load_t7)*375 + parseInt(formData.power_connected_load_t8)*750 + 
      parseInt(formData.power_connected_load_t9)*150 + parseInt(formData.power_connected_load_t10)*250 +
      parseInt(formData.power_connected_load_t11)*1000 + parseInt(formData.power_connected_load_t12)*750 + 
      parseInt(formData.power_connected_load_t13)*2000 + parseInt(formData.power_connected_load_t14)*2000 + 
      parseInt(formData.power_connected_load_t15 )*1500+ parseInt(formData.power_connected_load_t16)*2250 +
      parseInt(formData.power_connected_load_t17)*100 + parseInt(formData.power_connected_load_t18)*150
      ;
      console.log(formData.power_connected_load_t_total);
    })

    


    onMounted(() => {});
    return {
      formData,

      multiply: (value, multiplier) => {
        value = value * multiplier;
        return value;
      },
   
      changing:(value,multiplier)=>{
        value = value * multiplier;

      },

      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };

  },
 
};
</script>

<style scoped>
th{
  text-align: left;
}
</style>
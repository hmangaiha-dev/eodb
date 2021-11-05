<template>
  <q-card style="width: 450px" class="q-pa-lg">
    <q-form @submit="onSubmit" @reset="onReset">
        <h1 class="zsubtitle q-py-md">Edit Staff</h1>
        <q-input v-model="formData.fullname"
                 outlined
                 autofocus
                 label="Full name *"
                 @blur="delete localData.errors['fullname']"
                 :error="localData.errors.hasOwnProperty('fullname')"
                 :error-message="localData.errors['fullname']?.toString()"
                 :rules="[ val => !!val || 'Fullname is required' ]"
        />
        <q-select
          outlined
          multiple
          v-model="formData.roles"
          use-chips
          label="Select role"
          @select="localData.errors['fullname']=false"
          :error="localData.errors.hasOwnProperty('roles')"
          :error-message="localData.errors['roles']?.toString()"
          :options="roles"
          :rules="[val=>!!val || 'Roles is required']"
        >
          <template v-slot:no-option>
            <q-item>
              <q-item-section class="text-grey">
                No results
              </q-item-section>
            </q-item>
          </template>
        </q-select>

        <q-input v-model="formData.email"
                 outlined
                 label="Email *"
                 @blur="delete localData.errors['email']"
                 :error="localData.errors.hasOwnProperty('email')"
                 :error-message="localData.errors['email']?.toString()"
                 :rules="[ val => !!val || 'Email is required' ]"
        />
        <q-input v-model="formData.mobile"
                 outlined
                 @blur="delete localData.errors['mobile']"
                 :error="localData.errors.hasOwnProperty('mobile')"
                 :error-message="localData.errors['mobile']?.toString()"
                 label="Mobile *"
                 :rules="[ val => !!val || 'Mobile is required' ]"
        />
        <q-input v-model="formData.designation"
                 outlined
                 @blur="delete localData.errors['designation']"
                 :error="localData.errors.hasOwnProperty('designation')"
                 :error-message="localData.errors['designation']?.toString()"
                 label="Designation"
        />
        <q-input v-model="formData.password"
                 :type="localData?.showPassword?'text':'password'"
                 outlined
                 label="Password *"
                 @blur="delete localData.errors['password']"
                 :error="localData.errors.hasOwnProperty('password')"
                 :error-message="localData.errors['password']?.toString()"
                 :rules="[ val => !!val || 'Password is required' ]"
        >
          <template v-slot:append>
            <q-icon
              :name="localData.showPassword ? 'visibility' : 'visibility_off'"
              class="cursor-pointer"
              @click="localData.showPassword = !localData.showPassword"
            />
          </template>
        </q-input>
        <q-input v-model="formData.password_confirmation"
                 outlined
                 :type="localData?.showPassword?'text':'password'"
                 label="Confirm password *"
                 :rules="[ val => val===formData.password || 'Password must match' ]"
        />
      <q-card-section>
        <q-btn type="submit" flat color="primary">Save</q-btn>
        <q-btn type="reset" flat color="negative">Reset</q-btn>
      </q-card-section>
    </q-form>
  </q-card>


</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {onMounted} from "@vue/runtime-core";
import {useRoute} from "vue-router";
import {ref, toRefs, watch} from "vue";

export default {
  emits: ['onStaffUpdated'],
  props: ['id'],
  setup(props,context){
    const id = ref(props.id);
    const store = useStore();
    const q = useQuasar();
    const localData=reactive({
      showPassword:false,
      errors:{}
    })
    const formData=reactive({
      id:null,
      fullname:'',
      designation: '',
      roles:[],
      email:'',
      mobile: '',
      password:'',
      password_confirmation:''
    })

    const onSubmit=e=>{
      let temp = Object.assign({}, formData);
      const roles=temp.roles.map(role=>role.value);
      temp['roles'] = roles;

      api.put(`staff/${formData.id}`,temp)
        .then(res=>{
          q.notify({
            type:'positive',
            message:res?.data?.message
          })
          context.emit('onStaffUpdated',res.data.list)

        })
        .catch(err=>{
          if (err?.response?.data?.errors)
            localData.errors= err.response.data?.errors
          err?.response?.data?.message &&  q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const fetchDetail=id=>{
      api.get(`staff/${id}`)
        .then(res=>{
          const {fullname, id,email, mobile, roles} = res.data.data;
          formData.id = id;
          formData.fullname = fullname;
          formData.mobile = mobile;
          formData.email = email;
          formData.roles = roles.map(r=>({value:r.id,label:r.name}));
        })
        .catch(err=>{
          err?.response?.data?.message && q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    onMounted(()=>{
      fetchDetail(id.value)
    })
    // watch(()=>id.value,(newval,old)=>{
    //
    //   (newval!==null || newval) && fetchDetail(newval);
    // })
    const onReset=e=>{
      formData.fullname = '';
      formData.email = '';
      formData.roles = [];
      formData.password_confirmation = '';
      formData.password=''
    }

    return{
      roles:computed(()=>store.state.masterData.roles),
      formData,
      localData,
      onReset,
      onSubmit
    }
  }
}
</script>

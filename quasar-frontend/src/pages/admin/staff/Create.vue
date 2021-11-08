<template>
    <q-card style="width: 450px" class="q-pa-lg">
      <q-form @submit="onSubmit" @reset="onReset">
        <h1 class="zsubtitle q-py-md">New Staff</h1>
        <q-input v-model="formData.full_name"
                 outlined
                 autofocus
                 label="Full name *"
                 @blur="delete localData.errors['full_name']"
                 :error="localData.errors.hasOwnProperty('full_name')"
                 :error-message="localData.errors['full_name']?.toString()"
                 :rules="[ val => !!val || 'Fullname is required' ]"
        />
          <q-select
            outlined
            multiple
            v-model="formData.roles"
            use-chips
            label="Select role"
            @select="localData.errors['roles']=false"
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
        <q-input v-model="formData.phone"
                 outlined
                 @blur="delete localData.errors['phone']"
                 :error="localData.errors.hasOwnProperty('phone')"
                 :error-message="localData.errors['phone']?.toString()"
                 label="Phone no *"
                 :rules="[ val => !!val || 'Phone no is required' ]"
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
        <div class="flex-inline">
          <q-btn type="submit" flat color="primary">Save</q-btn>
          <q-btn type="reset" flat color="negative">Reset</q-btn>
        </div>
      </q-form>
    </q-card>


</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";

export default {
  emits: ['onStaffCreated'],
  setup(props,context){
    const store = useStore();
    const q = useQuasar();
    const localData=reactive({
      showPassword:false,
      errors:{}
    })
    const formData=reactive({
      full_name:'',
      designation:'',
      roles:[],
      email:'',
      phone: '',
      password:'',
      password_confirmation:''
    })

    const onSubmit=e=>{
      let temp = Object.assign({}, formData);
      const roles=temp.roles.map(role=>role.value);
      temp['roles'] = roles;

      api.post('staff',temp)
      .then(res=>{
        q.notify({
          type:'positive',
          message:res?.data?.message
        })
        context.emit('onStaffCreated',res.data.list)

      })
      .catch(err=>{
        console.log('error',err.response)
        if (err?.response?.data?.errors)
          localData.errors= err.response.data?.errors
        err?.response?.data?.message &&  q.notify({
          type: 'negative',
          message: err.response?.data?.message
        })
      })
    }
    const onReset=e=>{
      formData.full_name = '';
      formData.designation = '';
      formData.email = '';
      formData.phone = '';
      formData.roles = [];
      formData.password_confirmation = '';
      formData.password=''
    }

    return{
      roles:computed(()=>store.state.staffData.roles),
      formData,
      localData,
      onReset,
      onSubmit
    }
  }
}
</script>

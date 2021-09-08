<template>
  <q-page class="container" padding>
    <q-form @submit="onSubmit" @reset="onReset">
      <h1 class="ztitle">New Staff</h1>
      <br/>
      <div class="zcard row q-col-gutter-md">
        <div class="col-xs-12">
          <h1 class="zsubtitle">Basic info</h1>
        </div>
        <div class="col-md-6">
          <q-input v-model="formData.full_name"
                   outlined
                   autofocus
                   label="Full name *"
                   @blur="delete localData.errors['full_name']"
                   :error="localData.errors.hasOwnProperty('full_name')"
                   :error-message="localData.errors['full_name']?.toString()"
                   :rules="[ val => !!val || 'Fullname is required' ]"
          />
        </div>
        <div class="col-md-6">
          <q-input v-model="formData.email"
                   outlined
                   label="Email *"
                   @blur="delete localData.errors['email']"
                   :error="localData.errors.hasOwnProperty('email')"
                   :error-message="localData.errors['email']?.toString()"
                   :rules="[ val => !!val || 'Email is required' ]"
          />
        </div>
        <div class="col-md-6">
          <q-input v-model="formData.phone"
                   outlined
                   @blur="delete localData.errors['phone']"
                   :error="localData.errors.hasOwnProperty('phone')"
                   :error-message="localData.errors['phone']?.toString()"
                   label="Phone *"
                   :rules="[ val => !!val || 'Phone no is required' ]"
          />
        </div>
        <div class="col-md-6">
          <q-input outlined
                   v-model="formData.joined_at"
                   @keydown="this.$refs.qDateProxy.show()"
                   mask="date"
                   label="Joining date"
                   :rules="['date']">
            <template v-slot:append>
              <q-icon name="event" class="cursor-pointer">
                <q-popup-proxy ref="qDateProxy" transition-show="scale" transition-hide="scale">
                  <q-date v-model="formData.joined_at">
                    <div class="row items-center justify-end">
                      <q-btn v-close-popup label="Close" color="primary" flat/>
                    </div>
                  </q-date>
                </q-popup-proxy>
              </q-icon>
            </template>
          </q-input>
        </div>
        <div class="col-md-6">
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
        </div>
        <div class="col-md-6">
          <q-input v-model="formData.password_confirmation"
                   outlined
                   :type="localData?.showPassword?'text':'password'"
                   label="Confirm password *"
                   :rules="[ val => val===formData.password || 'Password must match' ]"
          />
        </div>
        <div class="col-xs-12">
          <q-separator/>
        </div>
        <div class="col-xs-12">
          <h1 class="zsubtitle">Permanent address</h1>
        </div>

        <div class="col-md-6">
          <q-input v-model="formData.full_address"
                   outlined
                   label="Full address"
                   @blur="delete localData.errors['full_address']"
                   :error="localData.errors.hasOwnProperty('full_address')"
                   :error-message="localData.errors['full_address']?.toString()"
                   :rules="[ val => !!val || 'Full address is required' ]"
          />
        </div>
        <div class="col-md-6">
          <q-input v-model="formData.locality"
                   outlined
                   label="Locality *"
                   @blur="delete localData.errors['locality']"
                   :error="localData.errors.hasOwnProperty('locality')"
                   :error-message="localData.errors['locality']?.toString()"
                   :rules="[ val => !!val || 'Locality is required' ]"
          />
        </div>
        <div class="col-md-6">
          <q-select v-model="formData.district"
                    :options="districts"
                   option-value="value"
                    outlined
                   label="District"
                    dropdown-icon="arrow_drop_down"
                   @blur="delete localData.errors['district']"
                   :error="localData.errors.hasOwnProperty('district')"
                   :error-message="localData.errors['district']?.toString()"
                   :rules="[ val => !!val || 'District is required' ]"
          />
        </div>

        <div class="col-md-6">
          <q-input v-model="formData.pincode"
                   outlined
                   label="Pincode"
                   @blur="delete localData.errors['pincode']"
                   :error="localData.errors.hasOwnProperty('pincode')"
                   :error-message="localData.errors['pincode']?.toString()"
                   :rules="[ val => !!val || 'Pincode is required' ]"
          />
        </div>
        <div class="col-md-6">
          <q-input v-model="formData.ps"
                   outlined
                   label="Police station"
                   @blur="delete localData.errors['ps']"
                   :error="localData.errors.hasOwnProperty('ps')"
                   :error-message="localData.errors['ps']?.toString()"
                   :rules="[ val => !!val || 'PS is required' ]"
          />
        </div>

        <div class="flex-inline col-12">
          <q-btn type="submit" flat color="primary">Save</q-btn>
          <q-btn type="reset" flat color="negative">Reset</q-btn>
        </div>

      </div>

    </q-form>

  </q-page>
</template>
<script>
import {computed, reactive} from "@vue/reactivity";
import {useStore} from "vuex";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {ref} from "vue";

export default {
  emits: ['onStaffCreated'],
  setup(props, context) {
    const store = useStore();
    const q = useQuasar();
    const localData = reactive({
      showPassword: false,
      errors: {}
    })
    const selectedRoles = ref([])
    const formData = reactive({
      full_name: '',
      roles: [],
      email: '',
      phone: '',
      joined_at: new Date(),
      password: '',
      password_confirmation: '',
        full_address:'',
        district:'',
        locality:'',
        pincode:'',
        ps:''
    })

    const onSubmit = e => {
      const value=formData.district?.value
      formData['district'] = value;

      api.post('staff', formData)
        .then(res => {
          q.notify({
            type: 'positive',
            message: res?.data?.message
          })
          context.emit('onStaffCreated', res.data.list)

        })
        .catch(err => {
          console.log('error', err.response)
          if (err?.response?.data?.errors)
            localData.errors = err.response.data?.errors
          err?.response?.data?.message && q.notify({
            type: 'negative',
            message: err.response?.data?.message
          })
        })
    }
    const onReset = e => {
      formData.full_name = '';
      formData.email = '';
      formData.roles = [];
      formData.password_confirmation = '';
      formData.password = '';
    }

    return {
      roles: computed(() => store.state.globalData.roles),
      districts:computed(()=>store.state.globalData.districts),
      formData,
      localData,
      selectedRoles,
      onReset,
      onSubmit
    }
  }
}
</script>

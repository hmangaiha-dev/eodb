<template>
    <div class="row justify-center q-mt-lg">
      <div class="col-xs-12">
        <q-form class="q-col-gutter-md" @submit="handleSubmit" @reset="handleReset">
          <q-card flat>
            <q-card-section>
              <h6 class="text-h6 q-ma-none">Register as investor</h6>
            </q-card-section>
            <q-card-section>
              <q-input outlined
                       type="email"
                       v-model="formData.email"
                       label="Email"
                       :error="Boolean(errors?.email)"
                       :error-message="errors?.email?.toString()"
                      :rules="[
                        val=>!!val || 'Email is required'
                      ]"
              />
              <q-input outlined
                       v-model="formData.mobile"
                       label="Mobile no"
                       :error="Boolean(errors?.mobile)"
                       :error-message="errors?.mobile?.toString()"
                       :rules="[
                        val=>!!val || 'Mobile no is required'
                      ]"
              />
              <q-input outlined
                       :type="inputType"
                       v-model="formData.password"
                       label="Password"
                       :error="Boolean(errors?.password)"
                       :error-message="errors?.password?.toString()"
                       :rules="[
                        val=>!!val || 'Password is required'
                      ]"
              >
                <template v-slot:append>
                  <q-btn flat @click="inputType==='text'?inputType='password':inputType='text'"
                         :icon="inputType==='text'?'visibility':'visibility_off'"/>
                </template>
              </q-input>
              <q-input outlined
                       v-model="formData.password_confirmation"
                       :type="inputType"
                       label="Confirm Password"
                       :error="Boolean(errors?.password_confirmation)"
                       :error-message="errors?.password_confirmation?.toString()"
                       :rules="[
                        val=>!!val || 'Email is required',
                        val => formData.password === val || 'Password must match'
                      ]"
              />
              <q-input outlined
                       v-model="formData.regn_no"
                       label="Regn No"
                       :error="Boolean(errors?.regn_no)"
                       :error-message="errors?.regn_no?.toString()"/>

            </q-card-section>
<!--            <q-card-actions>-->
<!--              <q-btn type="submit" color="primary" label="Submit"/>-->
<!--              <q-btn type="reset" color="negative" label="Reset"/>-->
<!--            </q-card-actions>-->
          </q-card>
        </q-form>
      </div>
    </div>
</template>
<script>
import {reactive} from "@vue/reactivity";
import {ref} from "vue";
import {api} from "boot/axios";
import {processValidationError} from "src/utils";
import {useQuasar} from "quasar";

export default {
  setup(props, context) {
    const inputType = ref('text');
    let errors = reactive({});
    const q = useQuasar();
    const formData = reactive({
      fullname: '',
      email: '',
      password: '',
      password_confirmation: '',
      mobile: '',
      regn_no: '',
    })
    const handleSubmit = e => {
      context.emit('sendOtp', formData);
    }

    const handleReset = e => {
      formData.fullname='';
      formData.email='';
      formData.password='';
      formData.password_confirmation='';
      formData.mobile='';
      formData.regn_no='';
    }

    return {
      inputType,
      errors,
      formData,
      handleSubmit,
      handleReset
    }
  }
}
</script>

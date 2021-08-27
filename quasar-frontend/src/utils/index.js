import {useQuasar} from "quasar";

export const processValidationError=(err)=>{
  const q = useQuasar();
  err?.response?.data?.message && q.notify({
    type:'negative',
    message:err.response.data.message
  })
  if (!err?.response) {
    q.notify({
      type:'negative',
      message:err.toString()
    })
  }
  return err?.response?.data?.errors
}

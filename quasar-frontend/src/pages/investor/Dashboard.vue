<template>
  <q-page class="justify-center">
   <div style="max-width: 1400px;margin:0 auto" class="row q-mt-md q-gutter-md  q-pa-md ">
     <div class="col-12 ztitle text-start">
       Dashboard
     </div>
    
     <div class="col-md-2">
       <q-card  bordered class=" my-card">
      <q-card-section>
        <div class="text-h6 text-center text-green-7">01</div>
       
      </q-card-section>

      <q-separator dark inset />

      <q-card-section class="text-center zlabel">
       Ongoing Applications
      </q-card-section>
    </q-card>

     </div>

       <div class="col-md-2">
       <q-card  bordered class=" my-card">
      <q-card-section>
        <div class="text-h6 text-center text-orange-6">01</div>
       
      </q-card-section>

      <q-separator dark inset />

      <q-card-section class="text-center zlabel">
       Approved Applications
      </q-card-section>
    </q-card>

     </div>

       <div class="col-md-2">
       <q-card  bordered class=" my-card">
      <q-card-section>
        <div class="text-h6 text-center text-red-6">01</div>
       
      </q-card-section>

      <q-separator dark inset />

      <q-card-section class="text-center zlabel">
       Declined Applications
      </q-card-section>
    </q-card>

     </div>
   </div>
  </q-page>
</template>
<script>
export default {
  setup(props,context){

  }
}
</script>

<template>
  <q-page class="container">
    <div class="row">
      <div v-for="item in files" :key="item.fileno" class="col-xs-12 col-md-4">
        <FileCard :file="item"/>
      </div>
    </div>
  </q-page>
</template>
<script>
import FileCard from "components/FileCard";
const dummy=[
  {fileno:'L12333333',subject:'hello world dfasdf',remark:''},
  {fileno:'12323',subject:'Kim',remark: 'dfad'},
  {fileno:'1231231',subject:'ffaddffd',remark:'fadfadf'},
  {fileno:'123123',subject:'ffaddffd',remark:'fadfadf'},
  {fileno:'fadfad',subject:'ffaddffd',remark:'fadfadf'},
  {fileno:'fadf',subject:'ffaddffd',remark:'fadfadf'},
]
export default {
  components: {FileCard},
  setup(props,context){

    return{
      files:dummy
    }
  }
}
</script>

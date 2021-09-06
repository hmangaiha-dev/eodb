<template>
  <q-page padding>
    <div class="row">
      <div class="col-12">
        <div class="flex justify-between items-center">
          <h1 class="text-h6">Roles</h1>
          <q-input outlined
                   v-model="localData.search"
                   dense
                   @input="handleSearch"
          />
        </div>
        <q-separator/>

      </div>
      <div class="col-12">
        <q-list>
          <q-item>
            <q-item-section>
              <q-item-label>Single line item</q-item-label>
              <q-item-label caption>Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.
              </q-item-label>
            </q-item-section>

            <q-item-section side top>
              <div>
                <q-btn flat icon="edit"/>
                <q-btn flat icon="delete"/>
              </div>
            </q-item-section>
          </q-item>
        </q-list>
      </div>

    </div>
    <div class="col-12">
      <q-pagination
        class="absolute-bottom q-ma-md"
        v-model="paginationData.page"
        :max="5"
        direction-links
        boundary-links
        icon-first="skip_previous"
        icon-last="skip_next"
        icon-prev="fast_rewind"
        icon-next="fast_forward"
      />
    </div>

    <q-btn @click="localData.openCreate=!localData.openCreate" color="accent" style="bottom: 60px;right: 60px"
           class="absolute" fab icon="add"/>
  </q-page>
  <q-dialog style="min-width: 500px" v-model="localData.openCreate" no-backdrop-dismiss>
    <create @onCloseDialog="localData.openCreate=!localData.openCreate" @handleCreate="handleCreate"/>
  </q-dialog>
</template>
<script>
import {reactive} from "@vue/reactivity";
import Create from "pages/admin/role/Create";

export default {
  components: {Create},
  setup(props, context) {

    const paginationData = reactive({
      page: 3
    })
    const localData = reactive({
      openCreate: false,
      search: ''
    })
    const handleCreate = (values) => {

    }
    const handleSearch = e => {

    }

    return {
      localData,
      paginationData,
      handleCreate,
      handleSearch
    }
  }
}
</script>

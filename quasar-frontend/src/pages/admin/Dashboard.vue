<template>
  <q-page class="container">
    <h1 class="ztitle">My desk</h1>
    <div class="row q-col-gutter-md">
      <div v-for="item in localData.listData.data" :key="item.id" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <ApplicationCard @open="handleOpen" :application="item"/>
      </div>
    </div>
    <div>
      <q-pagination
        @update:model-value="updatePagination"
        v-model="localData.listData.current_page"
        :max="pageCount"
        input
      />
    </div>
  </q-page>
</template>
<script>
import FileCard from "components/FileCard";
import {onMounted} from "vue";
import {api} from "boot/axios";
import {useQuasar} from "quasar";
import {computed, reactive} from "@vue/reactivity";
import ApplicationCard from "components/admin/ApplicationCard";
import {useStore} from "vuex";
import {useRouter} from "vue-router";

export default {
  components: {ApplicationCard, FileCard},
  setup(props, context) {

    const q = useQuasar();
    const router = useRouter();
    const localData = reactive({
      search: '',
      listData: {
        per_page: 15,
        data: [],
        current_page: 1,
        total: 1
      }
    })


    const handleSearch = e => {
      localData.search = e.target.value;
      if (e.keyCode === 13)
        fetchData(1);
    }
    const updatePagination = (value) => {
      fetchData(value)
    }

    const handleOpen = application => {
      console.log(application)
      router.push({name:'application:detail',params:{id:application?.id}})
    }

    const fetchData = (page) => {
      api.get(`applications/me?page=${page}`, {params: {search: localData.search}})
        .then(res => {
          const {current_page, total, per_page, data} = res.data;
          localData.listData.current_page = current_page;
          localData.listData.data = data;
          localData.listData.total = total;
          localData.listData.per_page = per_page;
        })
        .catch(err => {
          let message = !!err?.response ? err.response?.message : err.toString()
          q.notify({type: 'negative', message})
        })
    }
    onMounted(() => fetchData(localData.listData.page))
    return {
      updatePagination,
      pageCount: computed(() => Math.ceil(localData.listData.total / localData.listData.per_page)),
      localData,
      handleOpen,
      handleSearch,
    }
  }
}
</script>

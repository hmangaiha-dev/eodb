<template>
  <q-page padding class="container-lg zcard">
    <p class="zsubtitle">Create flow</p>
    <div class="">
      <div class="zdetailcard flex items-center justify-between">
        <q-select
          style="min-width: 65%"
          outlined
          item-aligned
          option-value="code"
          option-label="title"
          dropdown-icon="arrow_drop_down"
          v-model="formData.application"
          :options="application_profiles"
          @filter="filterFn"
         
          use-input
          input-debounce="0"
         
          label="Select Application"
        >
          <template v-slot:option="scope">
            <q-item v-bind="scope.itemProps">
              <q-item-section avatar>
                <q-icon color="primary" name="send" />
              </q-item-section>
              <q-item-section>
                <q-item-label>{{ scope.opt.title }}</q-item-label>
                <q-item-label caption>{{ scope.opt.dept_name }}</q-item-label>
                <q-item-label caption> {{ scope.opt.code }} </q-item-label>
              </q-item-section>
            </q-item>
          </template>
        </q-select>
        <div class="text-center">
          <q-btn
            @click="localData.openDialog = true"
            label="Add step"
            color="primary"
            outline
            icon="add"
          />
        </div>
      </div>
      <br />
      <q-list separator>
        <q-item
          class="zdetailcard q-mt-sm"
          v-for="(item, i) in formData.flows"
          :key="i"
        >
          <q-item-section>
            <q-item-label
              >STEP: {{ i + 1 }} Dealing assistant :
              <span class="zvalue">{{ item?.staff?.label }}</span></q-item-label
            >
            <!--              <q-item-label caption>-->
            <!--                <q-chip v-for="action in item.actions" :key="action.id" :label="action.label" />-->
            <!--              </q-item-label>-->
          </q-item-section>
          <q-item-section side>
            <div class="flex flex-inline">
              <!--                <q-btn class="q-pa-sm" flat icon="settings"/>-->
              <q-btn
                round
                @click="removeFlow(i)"
                class="q-pa-sm"
                flat
                icon="delete"
              />
            </div>
          </q-item-section>
        </q-item>
      </q-list>

      <br />
      <div class="zdetailcard">
        <q-checkbox v-model="formData.published" label="Published ? " />
      </div>
      <q-separator class="q-my-md" />
      <q-btn
        @click="handleSubmit"
        class="q-mt-md"
        outline
        v-if="formData.flows.length > 0"
        color="primary"
        label="Save "
      />
    </div>
    <q-dialog v-model="localData.openDialog">
      <FlowDialog @save="handleSave" @close="localData.openDialog = false" />
    </q-dialog>
  </q-page>
</template>
<script>
import { reactive } from "@vue/reactivity";
import FlowDialog from "pages/admin/setting/process-flows/FlowDialog";
import { computed, ref, watch } from "vue";
import { useStore } from "vuex";
import { api } from "boot/axios";
import { onMounted } from "vue";
import { useQuasar } from "quasar";

export default {
  components: { FlowDialog },
  setup(props, context) {
    const list = ref([]);
    const store = useStore();
    const quasar = useQuasar();
    const formData = reactive({
      application: null,
      flows: [],
      published: false,
    });
    const localData = reactive({
      openDialog: false,
    });

    const application_profiles = ref();

    const getApplicationProfiles = () => {
      application_profiles.value = store.state.staffData.application_profiles;
    };

    watch(store.state.staffData, () => {
      getApplicationProfiles();
    });

    onMounted(() => {
      getApplicationProfiles();
    });

    const handleSave = ({ staff, duration, actions }) => {
      let temp = formData.flows;
      temp.push({ staff, duration, actions });

      formData.flows = temp;
      localData.openDialog = false;
    };
    const handleSubmit = () => {
      formData["application_id"] = formData.application?.id;
      api
        .post("process-flows/store", formData)
        .then((res) => {
          const { message } = res.data;
          quasar.notify({
            type: "positive",
            message,
          });
        })
        .catch((err) => {
          console.log(err);
        });
    };
    const removeFlow = (index) => {
      const temp = formData.flows.filter((val, i) => i !== index);
      formData.flows = temp;
    };
    return {
      removeFlow,
      list,
      formData,
      getApplicationProfiles,
      handleSave,
      localData,
      handleSubmit,
      application_profiles,
      filterFn(val, update) {
        if (val === "") {
          update(() => getApplicationProfiles());
          return;
        }

        update(() => {
          getApplicationProfiles();
          const needle = val.toLowerCase();
          application_profiles.value = application_profiles.value.filter(
            (v) => v.title.toLowerCase().indexOf(needle) > -1 || v.code.toLowerCase().indexOf(needle) > -1 || v.dept_name.toLowerCase().indexOf(needle) > -1
          );
        });
      },
    };
  },
};
</script>

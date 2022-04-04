<template>
  <q-dialog v-model="dialog">
    <div style="max-width: 900px" class="row">
      <q-card class="col-12 full-width">
        <q-card-section>
          <q-markup-table wrap-cells separator="cell" flat bordered>
            <tbody>
              <tr>
                <td class="text-left text-weight-bold">
                  Application Reference Number :
                </td>
                <td class="text-center">{{ data.profile.id }}</td>
              </tr>
              <tr>
                <td class="text-left text-weight-bold">
                  Name of the Service :
                </td>
                <td class="text-center">
                  {{ data?.profile.application_name }}
                </td>
              </tr>
              <tr>
                <td class="text-left text-weight-bold">Applied By :</td>
                <td class="text-center">
                  {{ data?.profile.username }}
                </td>
              </tr>
              <tr>
                <td class="text-left text-weight-bold">Status</td>
                <td class="text-center">{{ data.name }}</td>
              </tr>
              <tr>
                <td class="text-left text-weight-bold">Remark</td>
                <td class="text-center">{{ data.remark }}</td>
              </tr>
            
            </tbody>
          </q-markup-table>
        </q-card-section>
        <q-card-actions align="right">
          <q-btn
            size="md"
            padding="sm"
            label="Close"
            color="primary"
            @click="closePopup"
          />
        </q-card-actions>
      </q-card>
    </div>
  </q-dialog>
</template>

<script>
import { ref } from "vue";
export default {
  props: ["data"],
  emits: ['closeDialog'],
  setup(props, context) {
    // const { data } = props;
    console.log("props", props.data);
    return {
      dialog: ref(true),
      closePopup: () => {
        context.emit("closeDialog");
      },
    };
  },
};
</script>

<style lang="scss" scoped></style>

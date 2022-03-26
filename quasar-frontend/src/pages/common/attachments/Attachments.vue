<template>
  <div class="row">
    <div class="col-12 zsubtitle">Document upload</div>
    <div class="col-xs-12">
      <q-separator class="q-my-md" />
    </div>
    <div
      class="col-12 zdetailcard q-pa-none q-ma-none"
      v-for="attachment in $props.attachments"
      :key="attachment.key"
    >
      <q-item class="flex">
        <q-item-section avatar>
          <q-icon
            color="grey"
            v-if="attachment.mime === 'application/pdf'"
            name="picture_as_pdf"
          />
          <q-icon color="grey" v-else name="image" />
        </q-item-section>
        <q-item-label style="flex: 1">
          <p v-html="attachment?.label" class="zlabel q-ma-none q-pa-none"/>
          <p class="text-caption q-ma-none q-pa-none">
            {{ attachment?.original_name }}
          </p>
        </q-item-label>
        <q-item-section side>
          <q-btn label="Open" outline @click="openAttachment(attachment)" />
        </q-item-section>
      </q-item>
    </div>
  </div>
  <q-dialog v-model="localState.openImage">
    <q-img :src="localState.selectedAttachment.full_path"></q-img>
  </q-dialog>
  <q-dialog v-model="localState.openPdf">
    <!-- <embed :src="localState.selectedAttachment.full_path" /> -->
    <q-card>
      <embed
        :src="localState.selectedAttachment.full_path"
        width="900"
        height="900"
      />
    </q-card>
  </q-dialog>
</template>
<script>
import { reactive } from "vue";

export default {
  props: ["attachments"],
  setup(props, context) {
    const localState = reactive({
      openImage: false,
      openPdf: false,
      selectedAttachment: null,
    });
    const openAttachment = (attachment) => {
      console.log("atatxcg", attachment);
      localState.selectedAttachment = attachment;
      console.log(attachment);
      if (attachment?.mime === "application/pdf") {
        localState.openPdf = true;
      } else localState.openImage = true;
    };
    return {
      localState,
      openAttachment,
    };
  },
};
</script>

<template>
  <div class="row items-center q-col-gutter-md">
    <q-dialog v-model="dialog">
      <q-card>
        <embed :src="attachment" width="500" height="500" />
      </q-card>
    </q-dialog>
    <div>
      <ol>
        <li>
          I Alana Matthews, Proprietor/Partner/Director/Managing Director of M/S
          Nostrud laboriosam, hereby declare that the information given by my
          firm to Department of Commerce & Industries, Aizawl, Government of
          Mizoram in this Common Application Form (CAF) is true to the very best
          of my knowledge, belief and record.
        </li>
        <li>
          Management of my firm assumes complete responsibility related to
          liabilities of any nature that may arise due to the decision taken
          based on the information provided and contained in CAF which may be
          inadequate, inaccurate, erroneous etc.
        </li>
        <li>
          Further, my firm undertakes to provide any additional information or
          clarification as required by Department of Commerce & Industries,
          Aizawl or it agencies during and after processing our application.
        </li>

        <li>
          I, understand that, this single window approval facility through
          Department of Commerce & Industries is to assist my firm in obtaining
          approval expeditiously.
        </li>

        <li>
          I, the undersigned, hereby offer to take on lease the plot of land
          measuring as stated in the application on the terms and conditions set
          out by Department of Commerce & Industries in the designated
          Industrial Areas for a term of years. (Applicable only if applied for
          plot allotment in Industrial Area)
        </li>

        <li>
          <ol>
            <li>
              The lease will commence from the date from which plot allotment is
              made to my firm and the obligations and liabilities under the
              lease agreement will be deemed to have commenced from the date.
            </li>
            <li>
              I, hereby agree to pay the ground rent and service charges fixed
              by Department of Commerce & Industries within 90 (Ninety) days
              from the date of allotment letter and the ground rent and service
              charges as revised by the Department of Commerce & Industries from
              time to time every year in advance, before 30th April and 31st
              July respectively of that year.
            </li>
            <li>
              Payment: I, hereby agree to pay necessary payment towards amount
              of security deposit and development charges in favour of
              Department of Commerce & Industries for the performance of the
              terms and conditions herein.
            </li>
            <li>
              I, understand that no interest will be payable on the amount
              security deposit and development charges.
            </li>
            <li>
              Should the firm fail to execute and complete the lease agreement
              within 1 (One) week from the date of allotment letter or within
              such extended period the firm may be permitted, the Department of
              Commerce & Industries will be at liberty to forfeit the security
              deposit, cancel the allotment of plot without prejudice to all
              rights of the Department of Commerce & Industries.
            </li>
          </ol>
        </li>

        <li>
          I, undertake that the firm shall follow and comply, all statutory
          provisions under industrial laws.
        </li>
        <li>
          I , Proprietor/Partner/Director/Managing Director of my firm undertake
          to indemnify the Government Authority on any matter which is later
          deemed/declared incorrect or inappropriate and all further
          punitive/penalty acts shall be taken under the jurisdiction of Aizawl
          Administration, Government of Mizoram.
        </li>
      </ol>
    </div>

    <div class="col-12 zsubtitle">
      <div class="row justify-start q-ml-md">
        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> Application Date </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <div class="q-pa-md">
            <q-input
              filled
              v-model="formData.declaration_application_date"
              mask="date"
              :rules="['date']"
            >
              <template v-slot:append>
                <q-icon name="event" class="cursor-pointer">
                  <q-popup-proxy
                    ref="qDateProxy"
                    cover
                    transition-show="scale"
                    transition-hide="scale"
                  >
                    <q-date v-model="formData.declaration_application_date">
                      <div class="row items-center justify-end">
                        <q-btn
                          v-close-popup
                          label="Close"
                          color="primary"
                          flat
                        />
                      </div>
                    </q-date>
                  </q-popup-proxy>
                </q-icon>
              </template>
            </q-input>
          </div>
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> Applicant Name</label>
        </div>
        <div class="col-xs-12 col-md-5">
          <!-- <q-input :rules="[(val) => (val && val.length > 0) || 'Please type something']"  dense outlined v-model="formData.designation" type="text" /> -->
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.declaration_applicant_name"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> Designation </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.declaration_designation"
          />
        </div>

        <div class="col-xs-12 col-md-5">
          <label class="zlabel" for="gender"> Signature </label>
        </div>
        <div class="col-xs-12 col-md-5">
          <div class="col-xs-12 col-md-5">
            <q-uploader
              @removed="formData.declaration_signature = null"
              accept=".jpg, image/*"
              flat
              @added="
                (files) => {
                  formData.declaration_signature = files[0];
                }
              "
              hide-upload-btn
              ref="formData.applicant_photo"
              color="grey"
              url="http://localhost:4444/upload"
              style="max-width: 300px"
            />
            <q-img
              v-if="
                !Array.isArray(formData.declaration_signature) &&
                formData.declaration_signature
              "
              :src="`http://localhost:8000/storage/${formData.declaration_signature}`"
              style="max-width: 150px; margin-top: -54px"
              spinner-color="primary"
              spinner-size="82px"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-xs-12 col-md-5">
      <label class="zlabel" for="gender"> </label>
      <div class="q-gutter-sm">
        <q-checkbox
          v-model="formData.declaration_consent"
          label="I accept the terms and conditions"
          color="teal"
        />
      </div>
    </div> -->
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, watch, ref } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const dialog = ref(false);
    const attachment = ref("");

    let formData = reactive({
      declaration_signature: null,
      declaration_applicant_name: "",
      declaration_application_date: "",
      declaration_designation: "",
      declaration_consent: false,
      rows: 1,
      model: "declaration",
    });

    const getDeclaration = () =>
      (formData = Object.assign(
        formData,
        store.state.globalData.common?.selfDeclaration
      ));

    // const getDeclaration = () => {
    //   for (let data in store.state.globalData.common.selfDeclaration) {
    //     formData[data] = store.state.globalData.common?.selfDeclaration[data];
    //   }
    // };

    onMounted(() => getDeclaration());

    watch(store.state.globalData.common, () => {
      getDeclaration();
    });
    return {
      formData,
      getDeclaration,
      dialog,
      attachment,
      showAttachment: (val) => {
        // console.log("dialog attach", val);
        // return
        attachment.value = "http://localhost:8000/storage/" + val;
        dialog.value = true;
      },
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
      addRow: () => {
        // formData.lsc_details.push({
        //   name: "",
        //   address: "",
        //   kum: "",
        //   caste: "",
        // });
        formData.rows++;
      },
    };
  },
};
</script>

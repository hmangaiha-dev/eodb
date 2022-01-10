<template>
  <div class="zcard row items-center q-gutter-sm">
    <div class="col-sm-10 col-xs-12 col-md-8">
      <label class="zlabel" for="name"
        >1 STATUS OF LAND HOLDING <span class="asterisk"> *</span></label
      >
      <br />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_one_a"
        label="a)Residential LSC"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_one_b"
        label="b)Agriculture LSC"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_one_c"
        label="c)HP"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_one_d"
        label="d)SHOP PASS"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_one_e"
        label="e)PP"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_one_f"
        label="f)LL"
      />

      <q-input
        placeholder="Number"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_one_number"
        dense
        outlined
      />

      <q-input
        placeholder="Kum"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_one_kum"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel"> 2 LAND HOLDER hming leh Address </span>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >a)Hming<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_two_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b) Pa hming<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_two_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >c) Present Address<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_two_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >d) Permanent Address <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_two_d"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-sm-10 col-md-8">
      <label class="zlabel" for="name"
        >3 Detail Address of land holding and location(Ram neihna hmun
        kimchang): <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_three"
        dense
        outlined
      />
    </div>

    <div class="col-sm-10 col-xs-12 col-md-8">
      <label class="zlabel" for="name"
        >4. Ram inhlan chhawn tur chu engvang a in hlan chhawn tur nge anih? (
        Adik ber thai (tick) rawh). <span class="asterisk"> *</span></label
      >
      <br />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_four_a"
        label="a)Rochun (inheritance)"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_four_b"
        label="b)A thlawna pek ( free gift)"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_four_c"
        label="c)Halh/ leiba rulhna ( transfer by sale)"
      />
      <q-checkbox
        v-model="formData.land_revenue_land_transfer_four_c"
        label="d)Inthleng (mutual exchange)"
      />
    </div>

    <div class="col-12">
      <span class="zlabel"> 7. </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >(a) (Rochun anih chuan Heirship Certificate thil tur.)<span
              class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_seven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Hralh anih chuan a man zat leh inleina lehkha a hriatpuitute
            pahnih aia tlem lo leh Chairman Local Council/V.C te hriatpuina thil
            tel a ni em?<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_seven_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="zlabel col-md-6 col-xs-10">
      8. Neitu nihna leh ramri chungchangah buaina a awm em?
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_eight"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel">
        9. Heng a hnuaia Certificate te hi lakchhuah tawh anih chuan thil tel
        ngei tur a ni
      </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >(a) Land Settlement Certificate/P.Patta/Land Lease</label
          >
          <q-file v-model="formData.land_revenue_land_transfer_nine_a" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">(b) Land Valuation Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_b" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">(c) Non-Encumbrance Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_c" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >(d) Tax/Land Revenue Clearance Certificate</label
          >
          <q-file v-model="formData.land_revenue_land_transfer_nine_d" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel">(e) No-objection Certificate</label>
          <q-file v-model="formData.land_revenue_land_transfer_nine_e" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-xs-12">
      <label class="zlabel"
        >10. LAND SETTLEMENT CERTIFICATE/P.Patta/Land Lease neitu chu Tribal nge
        Non-tribal:………………(see subsection (16) & (45) of section 2 of the
        Act).</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_ten"
        dense
        outlined
      />
    </div>

    <div class="col-12">
      <span class="zlabel">
        11.Land Settlement/P.Patta/Land Lease transfer-na tur, neitu thar
      </span>
      <div class="row justify q-col-gutter-sm q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(a) Hming pum ( EPIC/PAN/UID a lan ang in)<span class="asterisk"
              >*</span
            ></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_eleven_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b)Pian kum<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_eleven_b"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >c) Pianna khua leh District<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_eleven_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(d) Pa hming <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_eleven_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(e) Nu hming <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_eleven_e"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(f) Hmingthlakna tur hi Sub-section (16) & sub-section (45),
            section 2 of The Mizoram (Land Revenue) Act, 2013 in a phal ang a ni
            em?<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_eleven_f"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12 text-caption">
      <q-field
        ref="toggle"
        :value="formData.land_revenue_land_transfer_agreement"
        :rules="[
          (val) =>
            formData.land_revenue_land_transfer_agreement == true ||
            'Please agree the declaration',
        ]"
        borderless
        dense
      >
        <template v-slot:control>
          <q-checkbox
            class="text-caption"
            v-model="formData.land_revenue_land_transfer_agreement"
            label="A chunga sawite khi a dik ani tih ka hriattir a. Ka LAND SETTLEMENT
CERTIFICATE ka hlan chhawn hi nakinah thil fello/diklo a lo awm anih pawhin
keiman a mawh ka phur ang a, Revenue Department-in mawh a phur lovang. Tin, he
hming thlakna/ ram neitu inthlakna document hi Registration Act, 1908 as adapted in
the State of Mizoram leh The Mizoram (Land Revenue) Act, 2013 zawmin thla 3
chhungin ka register ngei ang"
          />
        </template>
      </q-field>
    </div>

    <div class="col-12 zlabel text-center">
      Hriatpuitute:-
      <hr />
    </div>

    <div class="col-12">
      <span class="zlabel text-center"> 1. </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >a)Signature<span class="asterisk">*</span></label
          >
          <q-file
            v-model="formData.land_revenue_land_transfer_hriatpui_one_a"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b)Full Name<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_hriatpui_one_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel text-center"> 2. </span>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel"
            >a)Signature<span class="asterisk">*</span></label
          >
          <q-file
            v-model="formData.land_revenue_land_transfer_hriatpui_two_a"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >b)Full Name<span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.land_revenue_land_transfer_hriatpui_two_b"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <hr />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of Land holder<span class="asterisk">*</span></label
      >
      <q-file
        v-model="formData.land_revenue_land_transfer_holder_signature"
        outlined
      >
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Tuna Address<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_tuna_address"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Phone No<span class="asterisk">*</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        v-model="formData.land_revenue_land_transfer_phone"
        dense
        outlined
      />
    </div>

    <div class="col-12 text-body2">
      NB: LAND SETTLEMENT CERTIFICATE neitu leh neichhawngtu turin EPIC
      (Electoral Photo Identity Card) emaw PAN Xeroxed copy Government Officer
      attested an thil tel tur a ni a. LAND SETTLEMENT CERTIFICATE neitu leh a
      neichhawngtu tur te mahni ngei a mawhphur tur officer hnenah an inlan tur
      a ni.
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "LAND_REVENUE_LAND_TRANSFER",
      department_id: 8,
      land_revenue_land_transfer_one: "",
      land_revenue_land_transfer_one_a: false,
      land_revenue_land_transfer_one_b: false,
      land_revenue_land_transfer_one_c: false,
      land_revenue_land_transfer_one_d: false,
      land_revenue_land_transfer_one_e: true,
      land_revenue_land_transfer_one_f: false,
      land_revenue_land_transfer_one_number: "",
      land_revenue_land_transfer_one_kum: "",
      land_revenue_land_transfer_two: "",
      land_revenue_land_transfer_two_a: "",
      land_revenue_land_transfer_two_b: "",
      land_revenue_land_transfer_two_c: "",
      land_revenue_land_transfer_two_d: "",
      land_revenue_land_transfer_three: "",
      land_revenue_land_transfer_four: "",
      land_revenue_land_transfer_four_a: false,
      land_revenue_land_transfer_four_b: false,
      land_revenue_land_transfer_four_c: true,
      land_revenue_land_transfer_four_d: false,
      land_revenue_land_transfer_seven: "",
      land_revenue_land_transfer_seven_a: "",
      land_revenue_land_transfer_seven_b: "",
      land_revenue_land_transfer_eight: "",
      land_revenue_land_transfer_nine: "",
      land_revenue_land_transfer_nine_a: null,
      land_revenue_land_transfer_nine_b: null,
      land_revenue_land_transfer_nine_c: null,
      land_revenue_land_transfer_nine_d: null,
      land_revenue_land_transfer_nine_e: null,
      land_revenue_land_transfer_ten: "",
      land_revenue_land_transfer_eleven: "",
      land_revenue_land_transfer_eleven_a: "",
      land_revenue_land_transfer_eleven_b: "",
      land_revenue_land_transfer_eleven_c: "",
      land_revenue_land_transfer_eleven_d: "",
      land_revenue_land_transfer_eleven_e: "",
      land_revenue_land_transfer_eleven_f: "",
      land_revenue_land_transfer_hriatpui: "",
      land_revenue_land_transfer_hriatpui_one: "",
      land_revenue_land_transfer_hriatpui_one_a: null,
      land_revenue_land_transfer_hriatpui_one_b: "",
      land_revenue_land_transfer_hriatpui_two: "",
      land_revenue_land_transfer_hriatpui_two_a: null,
      land_revenue_land_transfer_hriatpui_two_b: "",
      land_revenue_land_transfer_holder_signature: null,
      land_revenue_land_transfer_tuna_address: "",
      land_revenue_land_transfer_phone: "",
      land_revenue_land_transfer_signature: null,
      land_revenue_land_transfer_agreement: false,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

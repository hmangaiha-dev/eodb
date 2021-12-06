<template>
 <div style="max-width: 1600px;margin:0 auto" class="row q-mt-md q-col-gutter-md q-pa-sm ">
  <div style="width:100%" class="q-pa-md">
    <q-tabs stretch v-model="tab" class="text-teal">
      <q-tab name="services" icon="mails" label="Online Services" />
      <q-tab name="about" icon="alarm" label="About Us" />
      <q-tab name="actrules" icon="movie" label="Act & Rules" />
      <q-tab name="noti" icon="movie" label="Noftifications" />
      <q-tab name="other" icon="movie" label="Other Infomations" />
    </q-tabs>
    <div v-if="tab == 'services'" class="text-h5 q-my-md">Online services</div>
    <q-table
      
      wrap-cells
      flat
      v-if="tab == 'services'"
      :columns="columns"
      :rows="rows"
      row-key="name"
    >
      <template v-slot:body="props">
        <q-tr :props="props">
          <q-td key="name" :props="props">
            {{ props.row.name }}
          </q-td>
          <q-td key="who" :props="props">
            <q-btn color="blue-6" flat label="View" />
          </q-td>
          <q-td key="how" :props="props">
            <q-btn color="blue-6" flat label="View procedure" />
          </q-td>

          <q-td key="document" :props="props">
            <q-btn color="blue-6" flat label="View" />
          </q-td>

          <q-td key="timeline" :props="props">
            <q-btn color="blue-6" flat label="View fees" />
          </q-td>

          <q-td key="fees" :props="props">
            <q-btn color="blue-6" flat label="Download" />
          </q-td>

          <q-td key="form" :props="props">
            <q-btn color="blue-6" flat label="Download" />
          </q-td>

          <q-td key="apply" :props="props">
            <q-btn
             :to="`/investor/${route.params.deptname}/${props.row.apply}`"
             
              color="blue-6"
              label="Apply"
            />
          </q-td>
        </q-tr>
        <!-- <q-tr :props="props"> -->

        <!-- </q-tr> -->
      </template>
    </q-table>

    <q-tab-panels class="full-width" v-model="tab" animated>
      <q-tab-panel name="about">
        <AboutUs />
      </q-tab-panel>
      <q-tab-panel name="actrules">
        <ActRules />
      </q-tab-panel>
      <q-tab-panel name="noti">
        <Notifications />
      </q-tab-panel>
      <q-tab-panel name="other">
        <OtherInfo />
      </q-tab-panel>
    </q-tab-panels>
   
  </div>
  </div>
</template>

<script>
import AboutUs from "./AboutUs.vue";
import { useRoute, useRouter } from "vue-router";
import ActRules from "./ActRules.vue";
import ApplyService from "./ApplyService.vue";
import Notifications from "./Notifications.vue";
// import Notifications from "./Notifications.vue";
import { ref, onMounted, toRefs, toRef, watch } from "vue";
import OtherInfo from "./OtherInfo.vue";
import routes from "src/router/routes";
import router from "src/router";

// import { ref } from "vue";

console.log("declare");
export default {
  components: {
    AboutUs,
    ActRules,
    ApplyService,
    Notifications,
    Notifications,
    OtherInfo,
  },
  setup(props, context) {
    const route = useRoute();

    const router = useRouter();

    watch(

      
      () => route.params.deptname,
      () => {

        if(route.name != "common:create")
          return

        console.log('route name',route.name);
        
        console.log("route changed investor");

        refresh()

      }
    );

    const refresh = () => {
      const result = deptServices.filter((dept) => {
        return dept.slug == route.params.deptname;
      });


      !result.length && router.push({ name:'invalid' })

      rows.value = result[0]?.services;
    };

    const columns = ref([
      {
        name: "name",
        align: "center",
        label: "Name of services",
        field: "name",
        sortable: true,
      },

      {
        name: "how",
        align: "center",
        label: "How to apply",
        field: "how",
      },
      {
        name: "who",
        align: "center",
        label: "Who should apply?",
        field: "who",
        sortable: true,
      },
      {
        name: "document",
        align: "center",
        label: "Document to be submitted",
        field: "document",
      },
      {
        name: "timeline",
        align: "center",
        label: "Timeline",
        field: "timeline",
      },
      { name: "fees", align: "center", label: "Fees", field: "fees" },
      { name: "form", align: "center", label: "Download Form", field: "form" },
      {
        name: "apply",
        required: true,
        label: "Apply Online",
        align: "center",
        field: "apply",
        
        sortable: true,
      },
    ]);

    const rows = ref([
      {
        name: "Application For Allotment Of Industrial Plot",
        who: 159,
        how: 6.0,
        document: 24,
        timeline: 4.0,
        fees: 87,
        form: "14%",
        apply: "1%",
      },
    ]);

    const deptServices = [
      {
        slug: "commerce-and-industries",
        services: [
          {
            name: "Application for Allotment of Industrial Plot",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "allotment-of-industrial-plot",
          },
          {
            name: "Application for Claiming Interest Subsidy",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "claiming-central-interest-subsidy-scheme",
          },
          {
            name: "Application form for Claiming Central Capital Investment Subsidy Scheme",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "claiming-central-capital-investment-subsidy-scheme",
          },

          {
            name: "Application for Claim Of Subsidy On Rent Of Factory Shed",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Claiming Power Subsidy",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Subsidy On Power Generating Set",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Subsidy On Power Line	",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Subsidy On Cost Of Project Report",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Claim Of Interest Subsidy",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For State Transportation Subsidy on Plant & Machineries",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Grant Of Land Subsidy",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },
      {
        slug: "land-revenue",
        services: [
          {
            name: "APPLICATION FOR PERIODIC PATTA (PERIODIC PATTA DILNA)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "periodic-patta",
          },
          {
            name: "APPLICATION FOR ALLOTMENT OF LAND FOR HOUSE SITE",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "APPLICATION FOR ALLOTMENT OF LAND FOR SHOP/STALL",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "APPLICATION FOR RESIDENTIAL LAND SETTLEMENT CERTIFICATE INHMUN/LAND SETTLEMENT CERTIFICATE TURA DILNA",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Diversion Of Land Use/Change Of Land",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "APPLICATION FOR TRANSFER OF OWNERSHIP OF LAND HOLDING",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "APPLICATION FOR PARTITION OF LSC",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For The Allotment Of Land To The Government Department/Corporation/Boards etc. On Land Lease/Limited Lease	",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },
      {
        slug: "environment-forest-and-climate-change",
        services: [
          {
            name: "Application for Bamboo plantation in Non-forest Area",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "bamboo-plantions",
          },
          {
            name: "Application for Permission to fell tress/ tree plantation in in non-forest area",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "permission-to-fell-trees",
          },
        ],
      },
      {
        slug: "pollution-control-board",
        services: [
          {
            name: "Application For Consent To Establishment Industries Etc.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "consent-to-establishment-industries",
          },
          {
            name: "Accident Reporting for Bio-Medical Wastes",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "accident-reporting-bio-medical-waste",
          },
          {
            name: "Submission of Annual report for Bio-Medical Wastes.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "submission-anual-report-bio-medical-wastes",
          },
          {
            name: "Accident Reporting for Bio-Medical Wastes",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Submission of Annual Report for Hazardous Waste.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Accident Report Due To Solid Waste",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Authorisation Under Solid Waste Management Rules For Processing/Recycling/Treatment And Disposal Of Solid Waste",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Format Of Annual Report To Be Submitted By The Operator Of Facility To The Local Body.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for renewal of authorisation under Solid Waste Management",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Registration As Producers Or Brand Owners Under Plastic Waste Management",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Registration of Units Engaged in Processing or Recycling of Plastic Waste.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Registration For Manufacturers Of Plastic Raw Materials",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Submission Of Annual Report By Operator Of Plastic Waste Processing Or Recycling Facility To The Local Body",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Submission For Annual Report On Plastic Waste Management To Be Submitted By The Local Body.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application Form For Registration Of Batteries Dealers",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Registration Of Importer Of New Lead Acid Batteries / Primary Lead Under Batteries Management & Handling Waste",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Obtaining Authorization Under Construction & Demolition Waste",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Form For Filing Returns By Auctioneer Of Used Batteries Under Batteries (Management & Handling) Waste.",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Obtaining Authorisation For Generation Or Storage Or Treatment Or Disposal Of E-Waste By Manufacturer Or Refurbisher Under e-Waste(Management) Rules",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Application For Authorisation Of Facilities Possessing Environmentally Sound Management Practice For Dismantling Or Recycling Of E-Waste",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Authorization (Bio Medical Waste).",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Authorization (e-Waste Management)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Approval & Notification of sites",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },
      {
        slug: "fire-and-emergency-services",
        services: [
          {
            name: "Fire NOC",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "noc-form",
          },
        ],
      },

      {
        slug: "taxation",
        services: [
          {
            name: "GST Registration",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Registration of A Society",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "public-work-department",
        services: [
          {
            name: "Issue of Road Cutting Permission on (Scheduled Roads Under PWD)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Issue of No Objection Certificate for Right of Way(Along scheduled Roads under PWD & PWD Land) [(Excluding NH)]",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "aizawl-municipal-corporation",
        services: [
          {
            name: "Approval - Inspection - Payments	",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Licensing",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },
      {
        slug: "law-and-judicial",
        services: [
          {
            name: "No data",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "legal-metrology",
        services: [
          {
            name: "Licensing of Manufacturer of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Renewal of Manufacturer of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Renewal of Dealer in Weight & Measures ",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Licence of Repairer of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Licence of Dealers in Weights & Measures	",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Registration of Manufacturer/Packer",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Registration of Importer/Packer ",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Renewal of Licence of Repairer of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Licence of Importers of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Verification of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Re-verification of Weights & Measures",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "excise-and-narcotics",
        services: [
          {
            name: "to be filled",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "to be filled",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "power-and-electricity",
        services: [
          {
            name: "Application form – New Connection (Low Tension Service)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "new-connection",
          },
          {
            name: "Application Form – New Connection (High Tension / Extra High-Tension Service)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application For Changing The Name of Registered Consumer",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Transfer of Ownership to Legal Heir",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Conversion of Services / Change of Consumer Category / Shifting of Connection",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Load Enhancement / Load Reduction",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },

          {
            name: "Procedure for Determination of Connected Load",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Meter Related Complaints / Request for Testing of Meter",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Request for Permanent Disconnection & Termination of Agreement",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "public-health-and-engineering",
        services: [
          {
            name: "Application for New Water Connection (Domestic)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for New Water Connection (Commercial)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Transfer Of House Water Connection",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Change of Ownership of Consumer",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Re-Connection of Temporary Disconnected Water Connection",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Disconnection of Water Connection",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },
      {
        slug: "geology-and-mineral-resource",
        services: [
          {
            name: "Mining lease/Composite License/ Non-exclusive Reconnaissance Permit",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "food-and-drug-administration",
        services: [
          {
            name: "Application for General (Retail) Licence Form 19",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Restricted (Retail) Licence Form 19A",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Wholesale Licence Form 19",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Licence to sell drugs by wholesale or distribute from motor vehicle Form 19AA",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Homoeopathic Retail Licence Form 19B",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "urban-development-and-proverty-alleviation",
        services: [
          {
            name: "Application for General (Retail) Licence Form 19",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },

      {
        slug: "labour-skill-development-and-enterprise",
        services: [
          {
            name: "Application for Certificate of Registration under Shops & Establishment",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for registration of license for the year and notice of occupation specified in section 6&7 of the Factories Act, 1948",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Licence for Engaging Contract Labour under The Mizoram Contract Labour (R & A) Rules 2004",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Registration of establishment Employing Migrant Workmen (Interstate Migrant Workers Principal Employer Registration)",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for permission to Construct, Extend or take into use any building as a factory under Factories Act, 1948",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Renewal of Licence for engaging Contract Labour under The Mizoram Contract Labour (R & A) Rules 2004",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
          {
            name: "Application for Registration of establishments employing building workers under The Mizoram Building & Other Construction Workers (RE&CS) Rules 2015",
            who: "link",
            how: "link",
            document: "link",
            timeline: "link",
            fees: "link",
            form: "link",
            apply: "link",
          },
        ],
      },
    ];

    onMounted(() => {
      refresh();

    });

    console.log("layouts is".Layouts);
    return {
      rows,
      columns,
      route,
      router,
      tab: ref("services"),
      deptServices,
      refresh,
    };
  },
};
</script>

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-10">
      <label class="zlabel" for="name"
        >1. General <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name">
            1.1 Name Of The Industry
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-12">
          <label class="zlabel" for="name"
            >1.2 Address For Correspondence<span class="asterisk">
              *</span
            ></label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-4 col-xs-10">
              <label class="zlabel" for="name"
                >I) Phone<span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-4 col-xs-10">
              <label class="zlabel" for="name">
                II) Fax
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-4 col-xs-10">
              <label class="zlabel" for="name"
                >III) E-mail <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >1.3 Name And Address Of Proponent
            <span class="asterisk"> *</span></label
          >

          <q-input dense outlined v-model="formData.applicant_name" />
        </div>

        <div class="col-md-4 col-xs-10">
          <label class="zlabel" for="name"
            >1.4 Name And Address Of Consultant Appointed (if Any):
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-10">
          <label class="zlabel" for="name"
            >1.5 Total Investment Of Proposed Industry:
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >2. PROCESS DETAIL <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name"> A. </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.1. List Of Main Products Proposed To Be Produced With Designed
                Daily Production Capacity
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.2. List Of By-products Produced With Design Daily Product
                Capacity
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.3. Time Phasing For Achieving Full Pro-duction Capacity
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"
            >2.2. RAW MATERIALS CONSUMPTIONS
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.2.1 List Of All Raw Materials With Daily Consumption At Full
                Production Capacity
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.2..2 List Of All Process Chemicals/materials Consumed With
                Appropriate Quantities
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.2.3. Is Any Recycled Material From The Waste Of Your Industry
                Of Any Other Industry Used In The Processed If So, Please
                Specify Quantities And Source
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.2.4 Is Any Material Salvaged From Your Waste Streams Reuseable
                Economically For Any Other Purpose? If So, Please Specify
                Details Of Quantities And Probable Use
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> 2.3. MANUFACTURING PROCESS </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.3.1. Source Of Process Knowhow (In-house/National
                Laboratory/Foreign/Other (specify))
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.3.2. Have You Considered Less Polluting Process Alternatives?
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.3.3. Give A Brief Description Of The Process Technology
                Utilized With A Flow Chart
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.3.4 Have You Any Foreign Collaboration
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> 2.4. ENERGY CONSUMPTION </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.4.1 a) Source Of Energy, In-plant Generation
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                2.4.1 b) Source Of Energy, Public Supply
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                2.4.2. If Energy Is Generated In Plant, Type And Quantity Of
                Fuel Daily Consumed
                <span class="asterisk"> *</span></label
              >

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    A) Daily Consumption In Tones/units , Coal
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    B) Daily Consumption In Tones/units , Fuel Oil
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    C) Daily Consumption In Tones/units , Diesel
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    D) Daily Consumption In Tones/units , Natural Gas
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    E) Daily Consumption In Tones/units , Wood
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    F) Daily Consumption In Tones/units , Electricity
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    G) Daily Consumption In Tones/units , Other (Specify)
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. GENERAL ENVIRONMENT (Site, Climate, Settlement)
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name"> 3.1. Site </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.1 Where Is The Plant Proposed To Be Sited?Attached Map
                Showing Topographical Features Of The Area
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.2 a) Attached Map Showing Topographical Features Of The Area
              </label>
              <q-input type="file" dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> 3.1.2 Area Of Land </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.3 Area Proposed To Be Built Up Or Developed
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.4. Present Use Of Land
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.5. Indicate The Nature Of Topography Near The Site
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.6 Specify Site Character
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.7 Is The Land Situated Within Any Municipal Or Corporation
                Jurisdiction? If Not, How Far From It (please Specify)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.8. Nature And Details About Other Industries Located Within
                5 Km From The Proposed Site
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.9 Is The Land Situated In An Approved Industrial Zone Or
                Estate? How Far From The Nearest Town Or Human Settlement?
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                3.1.10 Do Any Of The Following Features Exist Within 20 Kms. Of
                The Sites? If So, Please Specify In Appropriate Units.
              </label>
              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    1) Human Settlements (specify Number Of Houses)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    2) Agriculture land (specify crops):
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    3) Grazing Lad (specify Area)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    4) Fisheries (specify Annual Catch)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    5) Forest/sanctuary/natural Part
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    6) Ponds/lakes/Dams (specify Name)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    7) Streams/Rivers (specify Name)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    8) Archaeological/ Historic/ Cultural/ Scenic Sites/
                    Scientific/ Institutions/ Hospitals/ Sanctuaries/ Religious/
                    Tourist/ Defence Importance (specify Name And Significance)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    9) Other Industries, Specify (name, Major Industries, Number
                    Of Industrial Workers)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    10) Any Sensitive Industries Located Nearby Or Prohibited
                    Zone (limits Prescribed By Any Authority)
                  </label>
                  <q-input dense outlined />
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.11. Type Of Flora And Fauna, Especially Wildlife And
                Endangered Species (specify By Name And Importance)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.12. Present Employment Or Occupational Pattern
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.13 Prominent Endemic Diseases (Fluorosis, Malaria, Filaria,
                Malnutrition Etc.)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.1.14. Any Other Observation Regarding The State Of Environment
              </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">3.2 SETTLEMENT </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.2.1 Total Number Of Persons Proposed To Be Employed
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.2.1 a) Total Number Of Persons Proposed To Be Employed, During
                Construction
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.2.1 b) Total Number Of Persons Proposed To Be Employed, After
                Completion
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.2.2 Do You Proposed To Build A Township Housing Quarters For
                Your Employees?
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >3.2.3 Area Allocated For Above
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.2.4 Population To Be Accommodated
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                3.2.5 Distance From Township To Plant Site
              </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="">4. WATER REQUIREMENTS</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            4.1. What Treatment Is Given Before Use (if Any)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            4.2 Average Daily Quantities Of Water Consumed (In Liters)
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> I) Process And Wash </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> II) Cooling </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> III) Sanitary </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> IV) Total </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="">5. WASTE WATER DISCHARGES</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            5.1 Total Quantity Of Waste Water Discharged From The Industry Per
            Day
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            5.2 Wastewater Discharge Per Day From
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Process And Wash (with Break Up, If Possible)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> II) Cooling </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> III) Sanitary </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> IV) Total </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            5.3 How Do You Propose To Discharge The Wastewater?
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Separate Streams/combined
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >II) Continuous/intermittent
              </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            5.4 Type Of Treatment Proposed To Be Adopted. Give Details And Flow
            Chart
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            5.5 Mode Of Final Discharge (open Channel/pipeline/covered Drains)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            5.6. Point Of Final Discharge- Low Land/ Agricultural
            Land/sewer/river/lake. Details Of Outfall Design
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            5.7. Is Any Portion Of The Waste Water Pro-posed To Be Recycled?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            5.8. What Method Do You Propose To Adopt For Handling And Disposal
            Of Sludge For Treatment Plants
          </label>
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="">6. SOLID WASTES</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.1 Total Quantity Of Solid Waste In Tones Per Day
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.2. Nature Of Waste- Lump/Granules/Dust/ Slurry Sludge
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.3 Type Of Wastes (organic, Inorganic, Ash, Glass, Metal, Etc)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.4 Method Proposed For Disposal, Including Treatment Plant Sludge
            (please Give Details)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.5 If Landfill, Possibility Of Leaching Of Toxic Compounds Into
            Soil, Ground Water Or Surface Water
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.6 If Incinerated, Details Of Incineration Plant And Procedures
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.7 Do You Anticipate Any Problems Regarding Collection, Handling
            And Transport Of Solid Wastes? If Yes, Specify
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            6.8 Are There Any Problems Of Subsequent Pollution Of Air, Water Or
            Soil Likely At The Place Of Disposal Of Solid Wastes? (if Yes,
            Please Explain Indicating Method Proposed For Prevention Of Such
            Pollution)
          </label>
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="">7. ATMOSPHERIC EMISSIONS</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            7.1 Emission From Fuel Burning
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            7.2 Anticipated Quantity Of Stack Emissions
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> 7.3 Temperature Of Emission </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> 7.4 Composition Of Emission </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-12">
              <label class="zlabel" for="name">
                a) Particulates And Smoke, Nature And Quantity
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> b) Gases </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> i) Sulphur Dioxide </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> ii) Nitrogen Oxide </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> iii) Hydrocarbons </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> iv) Carbon Monoxide </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> v) Moisture </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> vi) Other Specify </label>
                  <q-input dense outlined />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 zlabel">
          7.2 EMISSION OF PROCESS
          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-12">
              <label class="zlabel" for="name">
                7.2.1 Anticipated emissions quantity:
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> 7.2.2 Temperature: </label>
              <q-input dense outlined />
            </div>
            <div class="col-12">
              <label class="zlabel" for="name">
                7.4 Composition Of Emission
              </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-12">
                  <label class="zlabel" for="name">
                    a) Particulates And Smoke, Nature And Quantity
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-12">
                  <label class="zlabel" for="name"> b) Gases </label>

                  <div class="row justify q-col-gutter-md q-ml-md">
                    <div class="col-md-6 col-xs-10">
                      <label class="zlabel" for="name">
                        i) Sulphur Dioxide
                      </label>
                      <q-input dense outlined />
                    </div>

                    <div class="col-md-6 col-xs-10">
                      <label class="zlabel" for="name">
                        ii) Nitrogen Oxide
                      </label>
                      <q-input dense outlined />
                    </div>

                    <div class="col-md-6 col-xs-10">
                      <label class="zlabel" for="name">
                        iii) Hydrocarbons
                      </label>
                      <q-input dense outlined />
                    </div>

                    <div class="col-md-6 col-xs-10">
                      <label class="zlabel" for="name">
                        iv) Carbon Monoxide
                      </label>
                      <q-input dense outlined />
                    </div>

                    <div class="col-md-6 col-xs-10">
                      <label class="zlabel" for="name"> v) Moisture </label>
                      <q-input dense outlined />
                    </div>

                    <div class="col-md-6 col-xs-10">
                      <label class="zlabel" for="name">
                        vi) Other Specify
                      </label>
                      <q-input dense outlined />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            7.3 Please Specify The Following
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >a) Name and type of stacks:</label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">b) Inter Stack Distance</label>
              <q-input dense outlined />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">c) Height Of Each Stack</label>
              <q-input dense outlined />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >d) Internal Diameter Of Each Stack At The Base And Top</label
              >
              <q-input dense outlined />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">e) Exist Gas Velocity</label>
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                f) Fine Gas Characteristics</label
              >

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> i) Volume </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">ii) Temperature </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> iii) Density </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    iv) Size Distributions Of Particulars
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> v) Gas Composition </label>
                  <q-input dense outlined />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> 7.4 </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >a) What Kind Of Stack Emission Monitoring Is Proposed?</label
              >
              <q-input dense outlined />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >b) What Equipment Is Proposed To Be Acquired For This
                Purpose?</label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >7.5 Give Details Of Air Pollution Control Equipment You Proposed To
            Install</label
          >
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for=""
            >7.6 Emission Rate Of Particulates And Sulphur Dioxide In Terms Of
            Weight/time Expected To Be Released When Control Equipment
            Is)</label
          >
          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> a) Function Normally </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> b) Not Functioning </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-md-7 col-xs-10">
          <label class="zlabel" for="name"
            >7.7 What Special Procedures Do You Propose To Lay Down For Air
            Pollution Control During Periods When Emission Exceeds Prescribed
            Limits For Any Reason Including Malfunctioning Of Equipment?</label
          >
          <q-input dense outlined />
        </div>

        <div class="col-md-5 col-xs-10">
          <label class="zlabel" for="name"
            >7.8 Are Any Standards Of Emission Prescribed For Or Adopt By Your
            Industry? If Yes, Please Specify</label
          >
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">8. OTHER TYPES OF POLLUTION</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            8.1 Is Your Industry Likely To Cause Noise Pollution?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            8.2 Is Your Industry Likely To Cause Odour Pollution?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            8.3 Is Your Industry Likely To Cause Any Thermal Pollution?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            8.4 Is Your Industry Likely Tp Cause Radio- Active Pollution?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label for="" class="zlabel"
            >8.5 WORK ENVIRONMENT HYGIENE AND HOUSEKEEPING</label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                8.5.1 What major health safety hazards are likely in the working
                environment in your factory?
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                8.5.2 Describe the industrial hygiene Measures you propose to
                adopt
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                8.3 Is Your Industry Likely To Cause Any Thermal Pollution?
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                8.5.3 What provision you have made to conform to health and safety requirements as per Factories Act.
              </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">9. MANAGEMENT OF POLLUTION CONTROL</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            9.1) Give Details Of The Organizational Set Up You Propose To Have For
            Pollution Control
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            9.2) What Is The Level Of Expertise Of The Person Incharge Of
            Pollution Control?
          </label>
          <q-input dense outlined />
        </div>

         <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
           9.3. Do you propose to monitor the pollution from your industry? If yes give details?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            9.4) What Laboratories Facilities You Propose To Have For The Above?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            9.5) Give Details Of Operation & Maintenance Facilities You Propose To
            Have Treatment Plants And Pollution Level Monitoring And Control
            Equipments
          </label>
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel">10. COST OF POLLUTION CONTROL</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            10.1) Total Expenditure Proposed For Pollution Monitoring And Control
          </label>
          <q-input dense outlined />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        11. Details Of Other Industries Approved For Location Or Under
        Consideration For Location Within 10 Kms Distance. (This Should Be
        Provided In Consultation With The Appropriate Central/state
        Authorities.)
      </label>
      <q-input dense outlined />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        12. Any Other Additional Information And Summary Statement About
        Environmental Impacts For Your Industry
      </label>
      <q-input dense outlined />
    </div>

    <div class="col-12 text-center">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

    <q-space />

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"> Signature Of The Operator </label>
      <q-input type="file" dense outlined />
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
      one: "",
      one_a: "",
      one_b: "",
      one_b_i: "",
      one_b_ii: "",
      one_b_iii: "",
      one_c: "",
      one_d: "",
      one_e: "",
      two: "",
      two_a: "",
      two_a_i: "",
      two_a_ii: "",
      two_a_iii: "",
      two_b: "",
      two_b_i: "",
      two_b_ii: "",
      two_b_iii: "",
      two_b_iv: "",
      two_c: "",
      two_c_i: "",
      two_c_ii: "",
      two_c_iii: "",
      two_c_iv: "",
      two_d: "",
      two_d_i: "",
      two_d_ii: "",
      two_d_iii: "",
      two_d_iii_a: "",
      two_d_iii_b: "",
      two_d_iii_c: "",
      two_d_iii_d: "",
      two_d_iii_e: "",
      two_d_iii_f: "",
      two_d_iii_g: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

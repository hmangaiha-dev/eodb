<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-10">
      <label class="zlabel" for="name"
        >1. General <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name">
            A) Name Of The Industry
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
        <div class="col-12">
          <label class="zlabel" for="name"
            >B) Address For Correspondence<span class="asterisk">
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

        <div class="col-12">
          <label class="zlabel" for="name"
            >C) Name And Address Of Proponent
            <span class="asterisk"> *</span></label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Name Of Proponent
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >II) Address Of Proponent<span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"
            >D) Name And Address Of Consultant Appointed (if Any):
            <span class="asterisk"> *</span></label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Name Of Consultant
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >II) Address Of Consultant<span class="asterisk">
                  *</span
                ></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
          </div>
        </div>

        <div class="col-md-10">
          <label class="zlabel" for="name"
            >E) Total Investment Of Proposed Industry:
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
                I) List Of Main Products Proposed To Be Produced With Designed
                Daily Production Capacity
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                II) List Of By-products Produced With Design Daily Product
                Capacity
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                III) Time Phasing For Achieving Full Pro-duction Capacity
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"
            >B. RAW MATERIALS CONSUMPTIONS
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) List Of All Raw Materials With Daily Consumption At Full
                Production Capacity
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                II) List Of All Process Chemicals/materials Consumed With
                Appropriate Quantities
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                III) Is Any Recycled Material From The Waste Of Your Industry Of
                Any Other Industry Used In The Processed If So, Please Specify
                Quantities And Source
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                IV) Is Any Material Salvaged From Your Waste Streams Reuseable
                Economically For Any Other Purpose? If So, Please Specify
                Details Of Quantities And Probable Use
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> C. MANUFACTURING PROCESS </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Source Of Process Knowhow (In-house/National
                Laboratory/Foreign/Other (specify))
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                II) Have You Considered Less Polluting Process Alternatives?
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                III) Give A Brief Description Of The Process Technology Utilized
                With A Flow Chart
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                IV) Have You Any Foreign Collaboration
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> D. ENERGY CONSUMPTION </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Source Of Energy, In-plant Generation
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                II) Source Of Energy, Public Supply
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                III) If Energy Is Generated In Plant, Type And Quantity Of Fuel
                Daily Consumed
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
          <label class="zlabel" for="name"> Site </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                A) Where Is The Plant Proposed To Be Sited?Attached Map Showing
                Topographical Features Of The Area
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                AA) Attached Map Showing Topographical Features Of The Area
              </label>
              <q-input type="file" dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> B) Area Of Land </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                C) Area Proposed To Be Built Up Or Developed
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> D) Present Use Of Land </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                E) Indicate The Nature Of Topography Near The Site
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                F) Specify Site Character
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                G) Is The Land Situated Within Any Municipal Or Corporation
                Jurisdiction? If Not, How Far From It (please Specify)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                H) Nature And Details About Other Industries Located Within 5 Km
                From The Proposed Site
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                I) Is The Land Situated In An Approved Industrial Zone Or
                Estate? How Far From The Nearest Town Or Human Settlement?
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                J) Do Any Of The Following Features Exist Within 20 Kms. Of The
                Sites? If So, Please Specify In Appropriate Units.
              </label>
              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    I) Human Settlements (specify Number Of Houses)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    III) Grazing Lad (specify Area)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    IV) Fisheries (specify Annual Catch)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    V) Forest/sanctuary/natural Part
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    VI) Ponds/lakes/Dams (specify Name)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    VII) Streams/Rivers (specify Name)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    VIII) Archaeological/ Historic/ Cultural/ Scenic Sites/
                    Scientific/ Institutions/ Hospitals/ Sanctuaries/ Religious/
                    Tourist/ Defence Importance (specify Name And Significance)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    IX) Other Industries, Specify (name, Major Industries,
                    Number Of Industrial Workers)
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    X) Any Sensitive Industries Located Nearby Or Prohibited
                    Zone (limits Prescribed By Any Authority)
                  </label>
                  <q-input dense outlined />
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                K) Type Of Flora And Fauna, Especially Wildlife And Endangered
                Species (specify By Name And Importance)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                L) Present Employment Or Occupational Pattern
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                M) Prominent Endemic Diseases (Fluorosis, Malaria, Filaria,
                Malnutrition Etc.)
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                N) Any Other Observation Regarding The State Of Environment
              </label>
              <q-input dense outlined />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> SETTLEMENT </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                A) Total Number Of Persons Proposed To Be Employed
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                B) Total Number Of Persons Proposed To Be Employed, During
                Construction
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                C) Total Number Of Persons Proposed To Be Employed, After
                Completion
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                D) Do You Proposed To Build A Township Housing Quarters For Your
                Employees?
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >E) Area Allocated For Above
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                F) Population To Be Accommodated
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                G) Distance From Township To Plant Site
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
            A) What Treatment Is Given Before Use (if Any)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            B) Average Daily Quantities Of Water Consumed (In Liters)
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
            A) Total Quantity Of Waste Water Discharged From The Industry Per
            Day
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            B) Wastewater Discharge Per Day From
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
            C) How Do You Propose To Discharge The Wastewater?
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
            D) Type Of Treatment Proposed To Be Adopted. Give Details And Flow
            Chart
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            E) Mode Of Final Discharge (open Channel/pipeline/covered Drains)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            F) Point Of Final Discharge- Low Land/ Agricultural
            Land/sewer/river/lake. Details Of Outfall Design
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            G) Is Any Portion Of The Waste Water Pro-posed To Be Recycled?
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            H) What Method Do You Propose To Adopt For Handling And Disposal Of
            Sludge For Treatment Plants
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
            A) Total Quantity Of Solid Waste In Tones Per Day
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Nature Of Waste- Lump/Granules/Dust/ Slurry Sludge
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            C) Type Of Wastes (organic, Inorganic, Ash, Glass, Metal, Etc)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            D) Method Proposed For Disposal, Including Treatment Plant Sludge
            (please Give Details)
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            E) If Landfill, Possibility Of Leaching Of Toxic Compounds Into
            Soil, Ground Water Or Surface Water
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            F) If Incinerated, Details Of Incineration Plant And Procedures
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            G) Do You Anticipate Any Problems Regarding Collection, Handling And
            Transport Of Solid Wastes? If Yes, Specify
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            H) Are There Any Problems Of Subsequent Pollution Of Air, Water Or
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
            A) Emission From Fuel Burning
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            B) Anticipated Quantity Of Stack Emissions
          </label>
          <q-input dense outlined />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> C) Temperature Of Emission </label>
          <q-input dense outlined />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"> D) Composition Of Emission </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-12">
              <label class="zlabel" for="name">
                I) Particulates And Smoke, Nature And Quantity
              </label>
              <q-input dense outlined />
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> II) Gases </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                  1) Sulphur Dioxide
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                2) Nitrogen Oxide
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                  3) Hydrocarbons
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                4) Carbon Monoxide
                  </label>
                  <q-input dense outlined />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                 5) Moisture
                  </label>
                  <q-input dense outlined />
                </div>
                

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                 6) Other Specify
                  </label>
                  <q-input dense outlined />
                </div>

               
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted } from "vue";
import { date } from "quasar";

const emailRegex =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];
    const currentUser = store.getters["auth/getCurrentUser"];
    const localData = reactive({
      genders: [
        { value: "Male", label: "Male" },
        { value: "Female", label: "Female" },
        { value: "Other", label: "Other" },
      ],
      epic_relations: [
        { value: "Father", label: "Father" },
        { value: "Mother", label: "Mother" },
      ],
      relations: [
        { value: "Father", label: "Father" },
        { value: "Mother", label: "Mother" },
        { value: "Spouse", label: "Spouse" },
        { value: "Guardian", label: "Guardian" },
      ],
      adults: [
        { value: true, label: "Applicant is above 18 years" },
        { value: false, label: "Applicant is below 18 years" },
      ],
    });

    const formData = reactive({
      title: "Mr",
      name: "",
      dob: "",
      gender: "Male",
      father_name: "",
      mother_name: "",
      birth_place: "",
      phone_no: "",
      email: currentUser?.email,
      aadhaar_no: "",
      relation: "Father",
      relation_name: "",
      relation_title: "Mr",
      adult: true,
      epic_no: "",
      epic_relation: "Father",
      epic_holder: "",
      constituency: "",
    });
    onMounted(() => {
      if (draft?.applicant) {
        formData.title = draft?.applicant?.title;
        formData.name = draft?.applicant?.name;
        formData.dob = draft?.applicant?.dob;
        formData.gender = draft?.applicant?.gender;
        formData.father_name = draft?.applicant?.father_name;
        formData.mother_name = draft?.applicant?.mother_name;
        formData.birth_place = draft?.applicant?.birth_place;
        formData.phone_no = draft?.applicant?.phone_no;
        formData.email = draft?.applicant?.email;
        formData.aadhaar_no = draft?.applicant?.aadhaar_no;
        formData.relation = draft?.applicant?.relation;
        formData.relation_name = draft?.applicant?.relation_name;
        formData.relation_title = draft?.applicant?.title;
        formData.adult = draft?.applicant?.adult;
        formData.epic_no = draft?.applicant?.epic_no;
        formData.epic_relation = draft?.applicant?.epic_relation;
        formData.epic_holder = draft?.applicant?.epic_holder;
        formData.constituency = draft?.applicant?.constituency;
      }
    });
    return {
      onFathernameBlur: (e) => {
        if (!formData.adult) {
          formData.epic_relation?.toLowerCase() === "father" &&
            (formData.epic_holder = e?.target?.value);
        }
        if (formData.relation?.toLowerCase() === "father") {
          formData.relation_name = e?.target?.value;
          formData.relation_title = "Mr";
        }
      },
      onMothernameBlur: (e) => {
        if (!formData.adult) {
          formData.epic_relation?.value?.toLowerCase() === "father" &&
            (formData.epic_holder = e?.target?.value);
        }
        if (formData.relation?.value?.toLowerCase() === "mother") {
          formData.relation_name = e?.target?.value;
          formData.relation_title = "Mrs";
        }
      },
      handleAdult: (e) => {
        if (e.target?.checked) {
          formData.epic_relation?.toLowerCase() === "father" &&
            (formData.epic_holder = formData.father_name);
          formData.epic_relation?.toLowerCase() === "mother" &&
            (formData.epic_holder = formData.mother_name);
        }
      },
      handleEpicSelect: () => {
        if (formData.epic_relation?.value === "Father") {
          formData.epic_holder = formData.father_name;
        }
        if (formData.epic_relation?.value === "Mother") {
          formData.epic_holder = formData.mother_name;
        }
      },
      emailRegex,
      localData,
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

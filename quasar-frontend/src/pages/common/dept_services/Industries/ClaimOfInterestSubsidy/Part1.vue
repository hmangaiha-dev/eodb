<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-12 zlabel">1.</div>
    <div class="row q-col-gutter-md q-ml-md">
      <div class="col-10">
        <label class="zlabel" for="name"
          >A) Name Of The Unit <span class="asterisk"> *</span></label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          dense
          outlined
          v-model="formData.cne_interest_subsidy_one"
        />
      </div>

      <div class="col-12 zlabel">
        <span class="zlabel">
          B) Office Address With Telephone / Mobile No. )
        </span>
        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >1) Office Address <span class="asterisk"> *</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              dense
              outlined
              v-model="formData.cne_interest_subsidy_oneB1"
            />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Mobile Number <span class="asterisk"> *</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              dense
              outlined
              v-model="formData.cne_interest_subsidy_oneB2"
            />
          </div>
        </div>
      </div>

      <div class="col-12 zlabel">
        <span class="zlabel"> C) Factory Address With Telephone No. ) </span>
        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >1) Factory Address <span class="asterisk"> *</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              dense
              outlined
              v-model="formData.cne_interest_subsidy_oneC1"
            />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Telephone No. <span class="asterisk"> *</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              dense
              outlined
              v-model="formData.cne_interest_subsidy_oneC2"
            />
          </div>
        </div>
      </div>

      <div class="col-12 zlabel">
        <span class="zlabel"
          >D) Indicate The Claim No ( Say 1st Claim, 2nd Claim Etc))
        </span>
        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >1) Factory Address <span class="asterisk"> *</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              dense
              outlined
              v-model="formData.cne_interest_subsidy_oneD1"
            />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Telephone No. <span class="asterisk"> *</span></label
            >
            <q-input
              :rules="[
                (val) => (val && val.length > 0) || 'Please type something',
              ]"
              dense
              outlined
              v-model="formData.cne_interest_subsidy_oneD2"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">2</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel"
            >A)Registration Number Under NEIIPP, 2007 Along With Date)</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Registration Number <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_towA1"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_twoA2"
              />
            </div>
          </div>
        </div>

        <div class="col-md-10 col-xs-10">
          <label class="zlabel" for="name"
            >B) Any Other Registration Number Required
            Statutorily/mandatorily<span class="asterisk"> *</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_twoB"
          />
        </div>
      </div>
    </div>

    <div class="col-md-12 col-xs-10">
      <span class="zlabel">
        3. Constitution Of The Unit Alongwith Date (Proprietorship / Partnership
        / Private Limited / Limited Company / Cooperative Society )
      </span>

      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">A) Constitution Of The Unit</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_threeA"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="dob" type="date"
            >B) Date<span class="asterisk">*</span>
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_threeB"
          />
        </div>
      </div>
    </div>

    <div class="col-md-12 col-xs-10">
      <span class="zlabel">
        4. Name/s , Address(es) Of The Proprietor/ Partners / Directors Of Board
        Of Directors / Secretary And President (as Applicable)
      </span>

      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob">A) Name</label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_fourA"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="dob" type="date"
            >B) Address<span class="asterisk">*</span>
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_fourB"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">5. Details Of Enterprise Registration</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel"
            >A) Acknowledgement Of Entrepreneur Memorandum(EM) Part-I, No &
            Date</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Acknowledgement EM Number
                <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_fiveA1"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_fiveA2"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >B) Acknowledgement Of Entrepreneur Memorandum(EM) Part-II, No &
            Date</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Acknowledgement EM Number
                <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_fiveB1"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_fiveB2"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >C) Acknowledgement Of Industrial Entrepreneur Memorandum (IEM) No &
            Date</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Acknowledgement EM Number
                <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_fiveC1"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_fiveC2"
              />
            </div>
          </div>
        </div>

        <div class="col-md-10 col-xs-10">
          <span class="zlabel"
            >D) Permanent Registration No In Case Of Existing Unit</span
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_fiveD"
          />
        </div>
      </div>
    </div>

    <div class="col-10">
      <label class="zlabel" for="pob"
        >6. Certificate Of The Unit Having Become Functional/operational (for
        Service Sector From Concerned Department)</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.cne_interest_subsidy_six"
      />
    </div>

    <div class="col-12 zlabel">
      <span class="zlabel">7.</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >1) Name Of The Product (for Manufacturing Sector )</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_seven1"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >2. Name Of The Activity (for Service Sector)</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_seven2"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel"
        >8. Whether The Unit Is New Or An Existing Unit Under Going Substantial
        Expansion</span
      >
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) In Case Of New Unit</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Date Of Commencement Of Production (Manufacturing Sector
                Units) <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_eightA1"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date Of Becoming Operational (Service Sector Units)
                <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_eightA2"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">B) In Case Of Existing Unit</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="zlabel col-12">
              Date Of Going Into Commercial Production/becoming Operational
            </div>

            <div class="col-12 q-ml-md zlabel">
              1) For Manufacturing Sector Units
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >1) Prior To Expansion
                    <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_eightBTitl11"
                  />
                </div>

                <div class="col-md-5 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_eightBTitl12"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md zlabel">
              2) For Service Sector Units
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >1) Prior To Expansion
                    <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_eightBTitle21"
                  />
                </div>

                <div class="col-md-5 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_eightBTitle22"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel"
        >9. Capital Investment [to Be Supported By CA Certificate As Per
        Form-1D(A)(i)/Form:1D(A)(ii)] For Existing Unit</span
      >
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) Land & Site Development</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-12">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-10">
                  <label class="zlabel" for="name"
                    >For New Unit (Amount In Rs.)
                    <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineAnewUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel"
                >For Existing Unit Undergoing Expansion (Amount In Rs.)</span
              >
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >1) Prior To Expansion
                    <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineAexist1"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineAexist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">B) Building</span>

          <div class="row q-ml-md">
            <span class="col-12 zlabel">1) Office Building</span>
            <div class="col-12">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineB1newUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineB1exist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineB1exist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="row q-ml-md">
            <span class="col-12 zlabel">2) Factory Building</span>
            <div class="col-12 q-ml-md">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineB2newUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineB2exist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineB2exist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >C) Plant And Machinery /components/essential Items</span
          >

          <div class="row q-ml-md">
            <div class="col-10 q-ml-md">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-12">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineCnewUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineCexist"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineCexist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">D) Accessories</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineDnewUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineDexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineDexist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">E) Miscellaneous Fixed Assets</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineEnewUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineEexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineEexist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">F) Preliminary And Preoperative Expanses</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineFnewUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineFexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_nineFexist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">Total</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_totalnewUnit"
                  />
                </div>
              </div>
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_totalexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    :rules="[
                      (val) =>
                        (val && val.length > 0) || 'Please type something',
                    ]"
                    dense
                    outlined
                    v-model="formData.cne_interest_subsidy_totalexist2"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-10">
      <label class="zlabel" for=""
        >10. Increase In Investment (in Case Of Existing Unit)</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.cne_interest_subsidy_ten"
      />
    </div>

    <div class="col-12">
      <span class="zlabel">11</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) Annual Turnover Of The Unit</span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-10">
              <label class="zlabel" for="">1) For New Unit (in Rs.) )</label>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_elevenA1"
              />
            </div>
          </div>
        </div>

        <div class="col-12 q-ml-md">
          <span class="zlabel">
            B) For Existing Unit Undergoing Expansion
          </span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-5">
              <label class="zlabel" for=""
                >1) Annual Turnover Before Expansion (in Rs)</label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_elevenB1"
              />
            </div>

            <div class="col-5">
              <label class="zlabel" for=""
                >2) Annual Turnover After Expansion (in Rs.)</label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_elevenB2"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">12</span>
      <div class="row q-ml-md q-col-gutter-md">
        <div class="col-5">
          <label for="" class="zlabel"
            >A) Names Of The Raw Materials Utilized With Quantity And Value
            During The Claim Period.</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_twelveA"
          />
        </div>
        <div class="col-5">
          <label for="" class="zlabel"
            >B) Name Of The Finished Product(s) Alongwith Quantity And Value
            During The Claim Period.</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_twelveB"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">13</span>
      <div class="row q-ml-md q-col-gutter-md">
        <div class="col-5">
          <label for="" class="zlabel"
            >A) Name Of The Bank Branch Providing Working Capital Loan</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_thirteenA"
          />
        </div>
        <div class="col-5">
          <label for="" class="zlabel"
            >B) Maximum Limit Of Working Capital Sanctioned Along With Rate Of
            Interest</label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            dense
            outlined
            v-model="formData.cne_interest_subsidy_thirteenB"
          />
        </div>

        <div class="col-12">
          <span class="zlabel">C) Sanction No. & Date</span>
          <div class="row q-col-gutter-md">
            <div class="q-ml-md col-5">
              <label class="zlabel" for="">1) Sanction No.</label>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_thirteenC1"
              />
            </div>

            <div class="q-ml-md col-5">
              <label class="zlabel" for="">2) Sanction Date</label>
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.cne_interest_subsidy_thirteenC2"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 q-mt-md">
        <label class="zlabel" for="">14. Remarks, If Any.</label>
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          dense
          outlined
          v-model="formData.cne_interest_subsidy_fourteen"
        />
      </div>

      <div class="col-12">
        <label class="zlabel" for=""
          >15. Employment Generation In Various Fields Of Work (Executive,
          Non-executive, Skilled, Un-skilled Etc.)</label
        >
        <q-input
          :rules="[(val) => (val && val.length > 0) || 'Please type something']"
          dense
          outlined
          v-model="formData.cne_interest_subsidy_fifteen"
        />
      </div>

      <div class="col-12">
        <div class="row q-col-gutter-md">
          <div class="col-9">
            <span class="zlabel">
              I /We ………………………….. hereby declare that information furnished in
              the application for the grant of interest under Central Interest
              Subsidy Scheme of NEIIPP, 2007 are correct and true to the best of
              my/our knowledge and belief. If any statement made therein in
              connection with this claim is found to be false or
              misrepresentation of facts, the amount of subsidy granted by the
              Government will be refunded by me/us. Further , it is also
              affirmed that the Working Capital sanctioned for the period was
              not diverted/ utilized for any other unit or towards any other
              activity and has been utilized only for the purpose for which it
              was sanctioned.
            </span>
          </div>

          <div class="col-3">
            <label class="zlabel" for=""> Signature of the Applicant </label>
            <q-file
              dense
              label="Secreatriat HOD Name"
              outlined
              v-model="formData.cne_interest_subsidy_applicant_signature"
            >
              <template v-slot:prepend>
                <q-icon name="attach_file" />
              </template>
            </q-file>
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

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];

    const formData = reactive({
      cne_interest_subsidy_one: "",
      cne_interest_subsidy_oneA: "",
      cne_interest_subsidy_oneB: "",
      cne_interest_subsidy_oneB1: "",
      cne_interest_subsidy_oneB2: "",
      cne_interest_subsidy_oneC: "",
      cne_interest_subsidy_oneC1: "",
      cne_interest_subsidy_oneC2: "",
      cne_interest_subsidy_oneD: "",
      cne_interest_subsidy_oneD1: "",
      cne_interest_subsidy_oneD2: "",

      cne_interest_subsidy_two: "",
      cne_interest_subsidy_twoA: "",
      cne_interest_subsidy_towA1: "",
      cne_interest_subsidy_twoA2: "",
      cne_interest_subsidy_twoB: "",

      cne_interest_subsidy_three: "",
      cne_interest_subsidy_threeA: "",
      cne_interest_subsidy_threeB: "",

      cne_interest_subsidy_four: "",
      cne_interest_subsidy_fourA: "",
      cne_interest_subsidy_fourB: "",

      cne_interest_subsidy_five: "",
      cne_interest_subsidy_fiveA: "",
      cne_interest_subsidy_fiveA1: "",
      cne_interest_subsidy_fiveA2: "",
      cne_interest_subsidy_fiveB: "",
      cne_interest_subsidy_fiveB1: "",
      cne_interest_subsidy_fiveB2: "",
      cne_interest_subsidy_fiveC: "",
      cne_interest_subsidy_fiveC1: "",
      cne_interest_subsidy_fiveC2: "",
      cne_interest_subsidy_fiveD: "",

      cne_interest_subsidy_six: "",

      cne_interest_subsidy_seven: "",
      cne_interest_subsidy_seven1: "",
      cne_interest_subsidy_seven2: "",
      cne_interest_subsidy_eight: "",
      cne_interest_subsidy_eightA: "",
      cne_interest_subsidy_eightA1: "",
      cne_interest_subsidy_eightA2: "",
      cne_interest_subsidy_eightB: "",
      cne_interest_subsidy_eightBTitle: "",
      cne_interest_subsidy_eightBTitle1: "",
      cne_interest_subsidy_eightBTitl11: "",
      cne_interest_subsidy_eightBTitl12: "",
      cne_interest_subsidy_eightBTitle2: "",
      cne_interest_subsidy_eightBTitle21: "",
      cne_interest_subsidy_eightBTitle22: "",

      cne_interest_subsidy_nine: "",
      cne_interest_subsidy_nineA: "",
      cne_interest_subsidy_nineAnewUnit: "",
      cne_interest_subsidy_nineAexist: "",
      cne_interest_subsidy_nineAexist1: "",
      cne_interest_subsidy_nineAexist2: "",

      cne_interest_subsidy_nineB: "",
      cne_interest_subsidy_nineB1: "",
      cne_interest_subsidy_nineB1newUnit: "",
      cne_interest_subsidy_nineB1exist: "",
      cne_interest_subsidy_nineB1exist1: "",
      cne_interest_subsidy_nineB1exist2: "",

      cne_interest_subsidy_nineB2: "",
      cne_interest_subsidy_nineB2newUnit: "",
      cne_interest_subsidy_nineB2exist: "",
      cne_interest_subsidy_nineB2exist1: "",
      cne_interest_subsidy_nineB2exist2: "",

      // cne_interest_subsidy_// nine: "",
      cne_interest_subsidy_nineC: "",
      cne_interest_subsidy_nineCnewUnit: "",
      cne_interest_subsidy_nineCexist: "",
      cne_interest_subsidy_nineCexist1: "",
      cne_interest_subsidy_nineCexist2: "",

      cne_interest_subsidy_nineD: "",
      cne_interest_subsidy_nineDnewUnit: "",
      cne_interest_subsidy_nineDexist: "",
      cne_interest_subsidy_nineDexist1: "",
      cne_interest_subsidy_nineDexist2: "",

      cne_interest_subsidy_nineE: "",
      cne_interest_subsidy_nineEnewUnit: "",
      cne_interest_subsidy_nineEexist: "",
      cne_interest_subsidy_nineEexist1: "",
      cne_interest_subsidy_nineEexist2: "",

      cne_interest_subsidy_nineF: "",
      cne_interest_subsidy_nineFnewUnit: "",
      cne_interest_subsidy_nineFexist: "",
      cne_interest_subsidy_nineFexist1: "",
      cne_interest_subsidy_nineFexist2: "",

      cne_interest_subsidy_total: "",
      cne_interest_subsidy_totalnewUnit: "",
      cne_interest_subsidy_totalexist: "",
      cne_interest_subsidy_totalexist1: "",
      cne_interest_subsidy_totalexist2: "",

      cne_interest_subsidy_ten: "",

      cne_interest_subsidy_eleven: "",
      cne_interest_subsidy_elevenA: "",
      cne_interest_subsidy_elevenA1: "",
      cne_interest_subsidy_elevenB: "",
      cne_interest_subsidy_elevenB1: "",
      cne_interest_subsidy_elevenB2: "",

      cne_interest_subsidy_twelve: "",
      cne_interest_subsidy_twelveA: "",
      cne_interest_subsidy_twelveB: "",

      cne_interest_subsidy_thirteen: "",
      cne_interest_subsidy_thirteenA: "",
      cne_interest_subsidy_thirteenB: "",

      cne_interest_subsidy_thirteenC: "",
      cne_interest_subsidy_thirteenC1: "",
      cne_interest_subsidy_thirteenC2: "",

      cne_interest_subsidy_fourteen: "",

      cne_interest_subsidy_fifteen: "",

      cne_interest_subsidy_applicant_signature: null,

      // eight
    });

    

    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

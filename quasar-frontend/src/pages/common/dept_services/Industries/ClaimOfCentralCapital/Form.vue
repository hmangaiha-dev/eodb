<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-12 zlabel">1.</div>
    <div class="row q-col-gutter-md q-ml-md">
      <div class="col-10">
        <label class="zlabel" for="name"
          >A)Name Of The Industrial Unit <span class="asterisk"> *</span></label
        >
        <q-input dense outlined v-model="formData.c_n_e_1A" />
      </div>

      <div class="col-12 zlabel">
        <span class="zlabel">
          B) Factory Address With Telephone No (if Any) )
        </span>
        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >1) Factory Address <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.c_n_e_1B1" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Telephone/mobile Number
              <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.c_n_e_1B2" />
          </div>
        </div>
      </div>

      <div class="col-12 zlabel">
        <span class="zlabel">
          C) Office Address With Telephone / Mobile No ( If Any)
        </span>
        <div class="row justify q-col-gutter-md q-ml-md">
          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >1) Office Address <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.c_n_e_C1" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Telephone No. <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.c_n_e_C2" />
          </div>
        </div>
      </div>

      <div class="col-12 zlabel">
        <span class="zlabel">D) Registered Office </span>
        <q-input dense outlined v-model="formData.c_n_e_D" />
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">2</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-md-8 col-xs-10">
          <label class="zlabel" for="name"
            >A) Constitution Of The Unit (Proprietorial / Partnership / Private
            Limited / Limited Company / Cooperative Society )<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input dense outlined v-model="formData.c_n_e_2A" />
        </div>
        <div class="col-12">
          <span class="zlabel"
            >B) Name(s) , Address(es) Of The Proprietor/ Partners / Directors/
            Secretary And President Of The Cooperative Society</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Name <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_2B1" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Address <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_2B2" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel"
        >3. Whether New Unit Or Existing Unit Undergoing Expansion</span
      >
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) In Case Of New Unit</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Date Of Commencement Of Commercial Production/operation
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_3A1" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >B) In Case Of Existing Unit Under Going Expansion</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Date Of Commencement Of Commercial Production/operation
                After Expansion <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_3B1" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">4. Details Of Registration</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) In Case Of New Unit</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) EM - part-II , No & date
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_4A1" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) IEM No & date<span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_4A2" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >B) In Case Of Existing Unit Under Going Expansion</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Permanent (PMT) Registration/ IEM/ EM-partII No.
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_4B1" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Permanent (PMT) Registration/ IEM/ EM-partII Date
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_4B2" />
            </div>
          </div>
        </div>

        <div class="col-10">
          <span class="zlabel"
            >C) Mandatory/Obligatory Certificate Of Registration/approval From
            The Concerned Department As Applicable (in Case Of Service Sector
            Units)</span
          >
          <q-file
            :rules="[(val) => val || 'Signature is required']"
            dense
            v-model="formData.c_n_e_4C"
            outlined
          >
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-10">
      <label class="zlabel" for="pob"
        >5. Registration No. Under NEIIPP, 2007 (Form:1A/1B)</label
      >
      <q-input dense outlined v-model="formData.c_n_e_5" />
    </div>

    <div class="col-12">
      <span class="zlabel"> 6. Fixed Capital Investment </span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) Land</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-12">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-10">
                  <label class="zlabel" for="name"
                    >1) Prior To Expansion
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_6Anew1" />
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
                  <q-input dense outlined v-model="formData.c_n_e_6Aexist1" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_6Aexist2" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >3. Total After Expansion
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_6Aexist3" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">B) Site Development</span>

          <div class="row q-ml-md">
            <span class="col-12 zlabel">For New Unit (Amount In Rs.)</span>
            <div class="col-12 q-ml-md">
              <span class="zlabel">1) Prior To Expansion</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Bnew1"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Bexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Bexist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Bexist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">C) Building</span>

          <div class="row q-ml-md">
            <div class="col-10 q-ml-md">
              <span class="zlabel">1) Office Building</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-12">
                  <label class="zlabel" for=""
                    >For New Unit (Amount In Rs.)</label
                  >
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6C2new1"
                  />
                </div>

                <div class="col-12">
                  <span class="zlabel">
                    For Existing Unit Undergoing Expansion (Amount In Rs.)
                  </span>
                  <div class="row q-ml-md q-col-gutter-md">
                    <div class="col-5">
                      <label class="zlabel" for="">1) Prior To Expansion</label>
                      <q-input
                        dense
                        outlined
                        v-model="formData.c_n_e_6C1exist1"
                      />
                    </div>

                    <div class="col-5">
                      <label class="zlabel" for="">2. During Expansion</label>
                      <q-input
                        dense
                        outlined
                        v-model="formData.c_n_e_6C1exist2"
                      />
                    </div>

                    <div class="col-5">
                      <label class="zlabel" for=""
                        >3. Total After Expansion</label
                      >
                      <q-input
                        dense
                        outlined
                        v-model="formData.c_n_e_6C1exist3"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 q-ml-md">
          <span class="zlabel">2) Factory Building</span>

          <div class="row q-ml-md">
            <div class="col-md-10 q-ml-md">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_6C2new1"
              />
            </div>

            <div class="col-12 q-ml-md">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6C2exist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6C2exist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6C2exist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 q-ml-lg">
      <span class="zlabel">D) Plant And Machinery /components/items</span>

      <div class="row q-ml-md">
        <div class="col-10 q-ml-md">
          <!-- <span class="zlabel">1) Office Building</span> -->
          <div class="row q-col-gutter-md">
            <div class="col-12">
              <label class="zlabel" for="">For New Unit (Amount In Rs.)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_6Dnew1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Dexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Dexist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Dexist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">E) Electrical Installation</span>

      <div class="row q-ml-md">
        <div class="col-10 q-ml-md">
          <!-- <span class="zlabel">1) Office Building</span> -->
          <div class="row q-col-gutter-md">
            <div class="col-12">
              <label class="zlabel" for="">For New Unit (Amount In Rs.)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_6Enew1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Eexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Eexist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Eexist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">F) Preliminary And Preoperative Expanses</span>

      <div class="row q-ml-md">
        <div class="col-10 q-ml-md">
          <!-- <span class="zlabel">1) Office Building</span> -->
          <div class="row q-col-gutter-md">
            <div class="col-12">
              <label class="zlabel" for="">For New Unit (Amount In Rs.)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_6Fnew1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Fexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Fexist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Fexist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">G) Miscellaneous Fixed Assets</span>

      <div class="row q-ml-md">
        <div class="col-10 q-ml-md">
          <!-- <span class="zlabel">1) Office Building</span> -->
          <div class="row q-col-gutter-md">
            <div class="col-12">
              <label class="zlabel" for="">For New Unit (Amount In Rs.)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_6Gnew1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Gexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Gexist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6Gexist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">Total</span>

      <div class="row q-ml-md">
        <div class="col-10 q-ml-md">
          <!-- <span class="zlabel">1) Office Building</span> -->
          <div class="row q-col-gutter-md">
            <div class="col-12">
              <label class="zlabel" for="">For New Unit (Amount In Rs.)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_6totalnew"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">
                For Existing Unit Undergoing Expansion (Amount In Rs.)
              </span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-5">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6totalexist1"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. During Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6totalexist2"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">3. Total After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_6totalexist3"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="text-red col-12">dsfjsk jj</div> -->

    <div class="col-12">
      <span class="zlabel">7.</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) Source Of Finance</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Promoters Contribution
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A1" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) Equity <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A2" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >3) Term Loan <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A3" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >4) Un Secured Loan <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A4" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >5) Internal Resources <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A5" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >6) Any Other Source (please Specify)
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A6" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >Total <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7A6total" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >B) Details Of Term /Working Capital Loan (if Any)</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Name Of Bank/Financial Institution
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7B1" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) Amount Of Term/working Capital Loan Sanctioned
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7B2" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >3) Sanction Letter No. <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7B3" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >4) Sanction Letter Date <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7B4" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >5) Amount Of Term/Working Capital Loan Disbursed
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7B5" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">C) Details Of Equity (if Any)</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Name <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7C1" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) Amount <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7C2" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >3) PAN No. <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7C3" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >4) Mode Of Payment <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7C4" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">D) Details Of Unsecured Loan (if Any)</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Name <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7D1" />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) Amount <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7D2" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >3) PAN No. <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7D3" />
            </div>

            <div class="col-md-5 col-xs-10">
              <label class="zlabel" for="name"
                >4) Mode Of Payment <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_7D4" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="zlabel">[Details As Per Form:1C(F)]</div>

    <div class="col-12">
      <span class="zlabel">8. Power</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) In Case Of New Units</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Sanctioned Load <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8A1" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) Connected Load<span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8A2" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >3) Capacity Of Captive Power Plant (if Any)<span
                  class="asterisk"
                >
                  *</span
                ></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8A3" />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel"
            >B) In Case Of Existing Units Undergoing Expansion</span
          >

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >1) Sanctioned Load Prior To Expansion
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8B1" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2) Connected Load Prior To Expansion<span class="asterisk">
                  *</span
                ></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8B2" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >3) Sanction Of Additional Load For Expansion<span
                  class="asterisk"
                >
                  *</span
                ></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8B3" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >4) Additional Connected Load For Expansion<span
                  class="asterisk"
                >
                  *</span
                ></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8B4" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >5) Capacity Of Captive Power Plant (if Any)<span
                  class="asterisk"
                >
                  *</span
                ></label
              >
              <q-input dense outlined v-model="formData.c_n_e_8B5" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">9. Details Of Land And Building</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) Land</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-12">
              <span class="zlabel">(a) Own Land</span>
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(i) Land Area <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aai" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(ii) Revenue Village
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aaii" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(iii) Dag No. <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aaiii" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(iv) Patta No <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aaiv" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(v) Date Of Purchase<span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aav" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(vi) Date Of Registration<span class="asterisk">
                      *</span
                    ></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aavi" />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel"
                >(b) Land Allotted By Government/Government Agency</span
              >
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(i) Date Of Allotment/agreement
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Abi" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(ii) Date Of Taking Over Possession
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Abii" />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel">(c) Lease Hold Land</span>
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(i) Date Of Lease Of Land<span class="asterisk">
                      *</span
                    ></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Aci" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >(ii) Period Of Lease
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.c_n_e_9Acii" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">B) Building</span>

          <div class="row q-ml-md">
            <!-- <span class="col-12 zlabel">1) Office Building</span> -->
            <div class="col-12">
              <!-- <span class="zlabel">For New Unit (Amount In Rs.)</span> -->
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for=""
                    >(i) Own Building/rented Building</label
                  >
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_9Abi"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for=""
                    >(ii) In Case Of Own Building, Built Up Area</label
                  >
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_9Abii"
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
        >10. Statement Of Investment In Plant & Machinery As Per
        Form:1C(A)</label
      >
      <q-input dense outlined v-model="formData.c_n_e_10" />
    </div>

    <div class="col-10">
      <hr />
    </div>

    <div class="col-12">
      <span class="zlabel">11. Details Of Production Of The Unit</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) For New Unit</span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="">1) Name (s) Of The Product(s)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_11A1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">2) Annual Installed Capacity</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11A21"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11A22"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel"
                >3) Actual Production During Last Year/ From The Date Of
                Commercial Production Till Date (if Any)</span
              >
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11A31"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11A32"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel">4) Remarks</span>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_11A4"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">B) For Existing Units Undergoing Expansion</span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="">1) Name (s) Of The Product(s)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_11B1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">2) Annual Installed Capacity</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11B21"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11B22"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel"
                >3) Actual Production During Last Year/ From The Date Of
                Commercial Production Till Date (if Any)</span
              >
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11B31"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_11B32"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel">4) Remarks</span>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_11B4"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel">12. Raw Materials</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="zlabel">A) For New Unit</span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="">1) Name (s) Of The Product(s)</label>
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_12A1"
              />
            </div>

            <div class="col-12">
              <span class="zlabel">2) Annual Requirement</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_12A21"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_12A22"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">B) For Existing Units Undergoing Expansion</span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for=""
                >(i) Name/s Of The Raw Materials</label
              >
              <q-input
                dense
                outlined
                v-model="formData.c_n_e_12Bi"
              />
            </div>

            <div class="col-12">
              <span class="zlabel"
                >(ii) Annual Requirement Prior To Expansion</span
              >
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_12Bii1"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_12Bii2"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <span class="zlabel"
                >(iii) Annual Requirement after Expansion</span
              >
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">1) Quantity</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_12Biii1"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="">2) Value (in Rs)</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.c_n_e_12Biii2"
                  />
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

export default {
  setup(props, context) {
    const store = useStore();
    const draft = store.getters["applicantData/getCurrentDraft"];

    const formData = reactive({
      application_code: "C&E_FORM_3",
      department_id: 1,
      c_n_e_1A: "",
      c_n_e_1B1: "",
      c_n_e_1B2: "",
      c_n_e_C1: "",
      c_n_e_C2: "",
      c_n_e_D: "",
      c_n_e_2A: "",
      c_n_e_2B: "",
      c_n_e_2B1: "",
      c_n_e_2B2: "",
      c_n_e_3A1: "",
      c_n_e_3B1: "",
      c_n_e_4A1: "",
      c_n_e_4A2: "",
      c_n_e_4B1: "",
      c_n_e_4B2: "",
      c_n_e_4C: null,
      c_n_e_5: "",
      c_n_e_6Anew1: "",
      c_n_e_6Aexist1: "",
      c_n_e_6Aexist2: "",
      c_n_e_6Aexist3: "",
      c_n_e_6Bnew1: "",
      c_n_e_6Bexist1: "",
      c_n_e_6Bexist2: "",
      c_n_e_6Bexist3: "",
      c_n_e_6Cnew1: "",
      c_n_e_6C1exist1: "",
      c_n_e_6C1exist2: "",
      c_n_e_6C1exist3: "",
      c_n_e_6C2new1: "",
      c_n_e_6C2exist1: "",
      c_n_e_6C2exist2: "",
      c_n_e_6C2exist3: "",
      c_n_e_6Dnew1: "",
      c_n_e_6Dexist1: "",
      c_n_e_6Dexist2: "",
      c_n_e_6Eexist3: "",
      c_n_e_6Enew1: "",
      c_n_e_6Eexist1: "",
      c_n_e_6Eexist2: "",
      c_n_e_6Eexist3: "",
      c_n_e_6Fnew1: "",
      c_n_e_6Fexist1: "",
      c_n_e_6Fexist2: "",
      c_n_e_6Fexist3: "",
      c_n_e_6Gnew1: "",
      c_n_e_6Gexist1: "",
      c_n_e_6Gexist2: "",
      c_n_e_6Gexist3: "",
      c_n_e_6totalnew: "",
      c_n_e_6totalexist1: "",
      c_n_e_6totalexist2: "",
      c_n_e_6totalexist3: "",
      c_n_e_7A1: "",
      c_n_e_7A2: "",
      c_n_e_7A3: "",
      c_n_e_7A4: "",
      c_n_e_7A5: "",
      c_n_e_7A6: "",
      c_n_e_7A6total: "",
      c_n_e_7B1: "",
      c_n_e_7B2: "",
      c_n_e_7B3: "",
      c_n_e_7B4: "",
      c_n_e_7B5: "",
      c_n_e_7C1: "",
      c_n_e_7C2: "",
      c_n_e_7C3: "",
      c_n_e_7C4: "",
      c_n_e_7D1: "",
      c_n_e_7D2: "",
      c_n_e_7D3: "",
      c_n_e_7D4: "",
      c_n_e_8A1: "",
      c_n_e_8A2: "",
      c_n_e_8A3: "",
      c_n_e_8A4: "",
      c_n_e_8B1: "",
      c_n_e_8B2: "",
      c_n_e_8B3: "",
      c_n_e_8B4: "",
      c_n_e_8B5: "",
      c_n_e_9Aai: "",
      c_n_e_9Aaii: "",
      c_n_e_9Aaiii: "",
      c_n_e_9Aaiv: "",
      c_n_e_9Aav: "",
      c_n_e_9Aavi: "",
      c_n_e_9Abi: "",
      c_n_e_9Abii: "",
      c_n_e_9Aci: "",
      c_n_e_9Acii: "",
      c_n_e_10: "",
      c_n_e_11A1: "",
      c_n_e_11A21: "",
      c_n_e_11A22: "",
      c_n_e_11A31: "",
      c_n_e_11A32: "",
      c_n_e_11A4: "",
      c_n_e_11B1: "",
      c_n_e_11B21: "",
      c_n_e_11B22: "",
      c_n_e_11B31: "",
      c_n_e_11B32: "",
      c_n_e_11B4: "",
      c_n_e_12A1: "",
      c_n_e_12A21: "",
      c_n_e_12A22: "",
      c_n_e_12Bi: "",
      c_n_e_12Bii1: "",
      c_n_e_12Bii2: "",
      c_n_e_12Biii1: "",
      c_n_e_12Biii2: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

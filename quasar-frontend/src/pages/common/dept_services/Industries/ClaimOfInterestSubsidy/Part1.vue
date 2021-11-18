<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-12 zlabel">1.</div>
    <div class="row q-col-gutter-md q-ml-md">
      <div class="col-10">
        <label class="zlabel" for="name"
          >A) Name Of The Unit <span class="asterisk"> *</span></label
        >
        <q-input dense outlined v-model="formData.industrial_location_name" />
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
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Mobile Number <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
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
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Telephone No. <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
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
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

          <div class="col-md-6 col-xs-10">
            <label class="zlabel" for="name"
              >2. Telephone No. <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
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
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
          </div>
        </div>

        <div class="col-md-10 col-xs-10">
          <label class="zlabel" for="name"
            >B) Any Other Registration Number Required
            Statutorily/mandatorily<span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.applicant_name" />
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
          <q-input dense outlined v-model="formData.communication_district" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="dob" type="date"
            >B) Date<span class="asterisk">*</span>
          </label>
          <q-input dense outlined v-model="formData.proposed_street" />
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
          <q-input dense outlined v-model="formData.communication_district" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="dob" type="date"
            >B) Address<span class="asterisk">*</span>
          </label>
          <q-input dense outlined v-model="formData.proposed_street" />
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
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
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
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
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
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>
          </div>
        </div>

        <div class="col-md-10 col-xs-10">
          <span class="zlabel"
            >D) Permanent Registration No In Case Of Existing Unit</span
          >
          <q-input dense outlined v-model="formData.applicant_name" />
        </div>
      </div>
    </div>

    <div class="col-10">
      <label class="zlabel" for="pob"
        >6. Certificate Of The Unit Having Become Functional/operational (for
        Service Sector From Concerned Department)</label
      >
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-12 zlabel">
      <span class="zlabel">7.</span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >1) Name Of The Product (for Manufacturing Sector )</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >2. Name Of The Activity (for Service Sector)</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
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
              <q-input dense outlined v-model="formData.applicant_name" />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >2. Date Of Becoming Operational (Service Sector Units)
                <span class="asterisk"> *</span></label
              >
              <q-input dense outlined v-model="formData.applicant_name" />
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
                  <q-input dense outlined v-model="formData.applicant_name" />
                </div>

                <div class="col-md-5 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.applicant_name" />
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
                  <q-input dense outlined v-model="formData.applicant_name" />
                </div>

                <div class="col-md-5 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.applicant_name" />
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
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-col-gutter-md q-ml-md">
                <div class="col-10">
                  <label class="zlabel" for="name"
                    >1) Prior To Expansion
                    <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.applicant_name" />
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
                  <q-input dense outlined v-model="formData.applicant_name" />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"
                    >2. After Expansion <span class="asterisk"> *</span></label
                  >
                  <q-input dense outlined v-model="formData.applicant_name" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class=" zlabel">B) Building</span>

          <div class="row q-ml-md">
            <span class="col-12 zlabel">1) Office Building</span>
            <div class="col-12 ">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class=" zlabel"
            >C) Plant And Machinery /components/essential Items</span
          >

          <div class="row q-ml-md">
            <div class="col-10 q-ml-md">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-12">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class=" zlabel">D) Accessories</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class=" zlabel">E) Miscellaneous Fixed Assets</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class=" zlabel"
            >F) Preliminary And Preoperative Expanses</span
          >

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class=" zlabel">Total</span>

          <div class="row q-ml-md">
            <div class="col-12 q-ml-md">
              <span class="zlabel">For New Unit (Amount In Rs.)</span>
              <div class="row q-ml-md q-col-gutter-md">
                <div class="col-10">
                  <label class="zlabel" for="">1) Prior To Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
                    dense
                    outlined
                    v-model="formData.communication_district"
                  />
                </div>

                <div class="col-5">
                  <label class="zlabel" for="">2. After Expansion</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.communication_district"
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
      <q-input dense outlined v-model="formData.communication_district" />
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
                dense
                outlined
                v-model="formData.communication_district"
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
                dense
                outlined
                v-model="formData.communication_district"
              />
            </div>

            <div class="col-5">
              <label class="zlabel" for=""
                >2) Annual Turnover After Expansion (in Rs.)</label
              >
              <q-input
                dense
                outlined
                v-model="formData.communication_district"
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
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-5">
          <label for="" class="zlabel"
            >B) Name Of The Finished Product(s) Alongwith Quantity And Value
            During The Claim Period.</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
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
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-5">
          <label for="" class="zlabel"
            >B) Maximum Limit Of Working Capital Sanctioned Along With Rate Of
            Interest</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
        </div>

        <div class="col-12">
          <span class="zlabel">C) Sanction No. & Date</span>
          <div class="row q-col-gutter-md">
            <div class="q-ml-md col-5">
              <label class="zlabel" for="">1) Sanction No.</label>
              <q-input
                dense
                outlined
                v-model="formData.communication_district"
              />
            </div>

            <div class="q-ml-md col-5">
              <label class="zlabel" for="">2) Sanction Date</label>
              <q-input
                dense
                outlined
                v-model="formData.communication_district"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 q-mt-md">
        <label class="zlabel" for="">14. Remarks, If Any.</label>
        <q-input dense outlined v-model="formData.communication_district" />
      </div>

      <div class="col-12">
        <label class="zlabel" for=""
          >15. Employment Generation In Various Fields Of Work (Executive,
          Non-executive, Skilled, Un-skilled Etc.)</label
        >
        <q-input dense outlined v-model="formData.communication_district" />
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
            <q-input dense outlined v-model="formData.communication_district" />
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

    const formData = reactive({
      industrial_location_name: "Mr",
      applicant_name: "",

      communication_street: "",
      communication_city: "",
      communication_pin_no: "Male",
      communication_house_no: "",
      communication_office_phn: "",
      communication_residence_phn: "",
      communication_mobile_phn: "",
      communication_email: "",
      communication_website: "",
      communication_district: "Father",

      proposed_street: "",
      proposed_city: "",
      proposed_pin_no: "Male",
      proposed_house_no: "",
      proposed_office_phn: "",
      proposed_residence_phn: "",
      proposed_mobile_phn: "",
    });
    onMounted(() => {});
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

      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

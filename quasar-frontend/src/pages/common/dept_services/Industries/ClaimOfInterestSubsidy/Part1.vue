<template>
  <div class="zcard row items-center q-gutter-md q-col-gutter-md">
    <div class="col-12 text-bold">1.</div>
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
          <div class="col-5">
            <label class="zsubtitle" for="name"
              >1) Office Address <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>

           <div class="col-5">
            <label class="zsubtitle" for="name"
              >2. Mobile Number <span class="asterisk"> *</span></label
            >
            <q-input dense outlined v-model="formData.applicant_name" />
          </div>
        </div>
      </div>
     
      <div class="col-12 text-bold">
        C) Factory Address With Telephone No. )
      </div>
      <div class="col-xs-12 col-md-2">
        <label class="zlabel" for="gender"
          >1) Factory Address <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-2">
        <q-input dense outlined v-model="formData.communication_city" />
      </div>
      <div class="col-xs-12 col-md-2">
        <label class="zlabel" for="gender"
          >2. Telephone No. <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-2">
        <q-input dense outlined v-model="formData.communication_pin_no" />
      </div>
      <div class="col-12 text-bold">
        D) Indicate The Claim No ( Say 1st Claim, 2nd Claim Etc))
      </div>
      <div class="col-xs-12 col-md-1">
        <label class="zlabel" for="gender"
          >1) Factory Address <span class="asterisk">*</span></label
        >
      </div>
      <div class="col-xs-12 col-md-2">
        <q-input dense outlined v-model="formData.communication_house_no" />
      </div>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >2. Telephone No. <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input
        label="Office"
        dense
        outlined
        v-model="formData.communication_office_phn"
      />
    </div>

    <div class="col-12 text-bold">2</div>

    <div class="col-12 text-bold">
      C) Registration Number Under NEIIPP, 2007 Along With Date)
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >1) Registration Number <span class="asterisk">*</span></label
      >
    </div>

    <div class="col-xs-12 col-md-3">
      <q-input
        label="Mobile"
        dense
        outlined
        v-model="formData.communication_mobile_phn"
      />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >2. Date <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_mobile_phn" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >B) Any Other Registration Number Required Statutorily/mandatorily
        <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_website" />
    </div>

    <div class="col-12 text-bold">
      3. Constitution Of The Unit Alongwith Date (Proprietorship / Partnership /
      Private Limited / Limited Company / Cooperative Society )
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob">A) Constitution Of The Unit</label>
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="dob" type="date"
        >B) Date<span class="asterisk">*</span>
      </label>
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.proposed_street" />
    </div>

    <div class="col-12 text-bold">
      4. Name/s , Address(es) Of The Proprietor/ Partners / Directors Of Board
      Of Directors / Secretary And President (as Applicable)
    </div>

    <div class="col-xs-12 col-md-2">
      <label class="zlabel" for="gender">
        A) Name <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.proposed_city" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="gender"
        >B) Address <span class="asterisk">*</span></label
      >
    </div>
    <div class="col-xs-12 col-md-3">
      <q-input dense outlined v-model="formData.proposed_house_no" />
    </div>

    <div class="col-12 text-bold">5. Details Of Enterprise Registration</div>

    <div class="q-ml-md">
      <div class="col-12 text-bold">
        A) Acknowledgement Of Entrepreneur Memorandum(EM) Part-I, No & Date
      </div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="gender"
            >1) Acknowledgement EM Number <span class="asterisk">*</span></label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="gender"
            >2. Date <span class="asterisk">*</span></label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
      </div>
    </div>

    <div class="q-ml-md">
      <div class="col-12 text-bold">
        B) Acknowledgement Of Entrepreneur Memorandum(EM) Part-II, No & Date
      </div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="gender"
            >1) Acknowledgement EM Number <span class="asterisk">*</span></label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="gender"
            >2. Date <span class="asterisk">*</span></label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
      </div>
    </div>

    <div class="q-ml-md">
      <div class="col-12 text-bold">
        C) Acknowledgement Of Industrial Entrepreneur Memorandum (IEM) No & Date
      </div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="gender"
            >1) Acknowledgement EM Number <span class="asterisk">*</span></label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="gender"
            >2. Date <span class="asterisk">*</span></label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
      </div>
    </div>

    <div class="q-ml-md">
      <div class="col-12 text-bold">
        D) Permanent Registration No In Case Of Existing Unit
      </div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.proposed_office_phn" />
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >6. Certificate Of The Unit Having Become Functional/operational (for
        Service Sector From Concerned Department)</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >6. Certificate Of The Unit Having Become Functional/operational (for
        Service Sector From Concerned Department)</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >6. Certificate Of The Unit Having Become Functional/operational (for
        Service Sector From Concerned Department)</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >6. Certificate Of The Unit Having Become Functional/operational (for
        Service Sector From Concerned Department)</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-12 text-bold">7.</div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >1) Name Of The Product (for Manufacturing Sector )</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-xs-12 col-md-1">
      <label class="zlabel" for="pob"
        >2. Name Of The Activity (for Service Sector)</label
      >
    </div>

    <div class="col-xs-12 col-md-2">
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-12 text-bold">
      8. Whether The Unit Is New Or An Existing Unit Under Going Substantial
      Expansion
    </div>

    <div class="q-ml-md">
      <div class="col-12 text-bold">A) In Case Of New Unit</div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob"
            >1) Date Of Commencement Of Production (Manufacturing Sector
            Units)</label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob"
            >2. Date Of Becoming Operational (Service Sector Units)</label
          >
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
      </div>

      <div class="col-12 text-bold">B) In Case Of Existing Unit</div>

      <div class="col-12 subtitle">
        Date Of Going Into Commercial Production/becoming Operational
      </div>

      <div class="col-12 subtitle">1) For Manufacturing Sector Units</div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">1) Prior To Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">2. After Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
      </div>

      <div class="col-12 subtitle">2) For Service Sector Units</div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">1) Prior To Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">2. After Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
      </div>

      <div class="col-12 text-bold">
        9. Capital Investment [to Be Supported By CA Certificate As Per
        Form-1D(A)(i)/Form:1D(A)(ii)] For Existing Uni
      </div>

      <div class="col-12 subtitle">A) Land & Site Development</div>

      <div class="col-12 subtitle">For New Unit (Amount In Rs.)</div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">1) Prior To Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">2. After Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
      </div>

      <div class="col-12 subtitle">
        For Existing Unit Undergoing Expansion (Amount In Rs.)
      </div>
      <div class="q-ml-md">
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">1) Prior To Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-xs-12 col-md-1">
          <label class="zlabel" for="pob">2. After Expansion</label>
        </div>
        <div class="col-xs-12 col-md-2">
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="q-ml-md text-bold">B) Building</span>

      <div class="row q-ml-md">
        <span class="col-12 text-bold">1) Office Building</span>
        <div class="col-12 q-ml-md">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
        <span class="col-12 text-bold">2) Factory Building</span>
        <div class="col-12 q-ml-md">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
      <span class="q-ml-md text-bold"
        >C) Plant And Machinery /components/essential Items</span
      >

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
      <span class="q-ml-md text-bold">D) Accessories</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
      <span class="q-ml-md text-bold">E) Miscellaneous Fixed Assets</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
      <span class="q-ml-md text-bold"
        >F) Preliminary And Preoperative Expanses</span
      >

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
      <span class="q-ml-md text-bold">Total</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="text-bold">For New Unit (Amount In Rs.)</span>
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
          <span class="text-bold">
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
      <label for=""
        >10. Increase In Investment (in Case Of Existing Unit)</label
      >
      <q-input dense outlined v-model="formData.communication_district" />
    </div>

    <div class="col-12">
      <span class="q-ml-md text-bold">11</span>

      <div class="row q-ml-md">
        <div class="col-12">
          <span class="text-bold">A) Annual Turnover Of The Unit</span>
          <div class="row q-ml-md q-col-gutter-md">
            <div class="col-12">
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
          <span class="text-bold">
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
      <span class="text-bold">12</span>
      <div class="row q-col-gutter-md">
        <div class="col-5">
          <label for=""
            >A) Names Of The Raw Materials Utilized With Quantity And Value
            During The Claim Period.</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-5">
          <label for=""
            >B) Name Of The Finished Product(s) Alongwith Quantity And Value
            During The Claim Period.</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="text-bold">13</span>
      <div class="row q-col-gutter-md">
        <div class="col-5">
          <label for=""
            >A) Name Of The Bank Branch Providing Working Capital Loan</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
        </div>
        <div class="col-5">
          <label for=""
            >B) Maximum Limit Of Working Capital Sanctioned Along With Rate Of
            Interest</label
          >
          <q-input dense outlined v-model="formData.communication_district" />
        </div>

        <div class="col-12">
          <span class="text-bold">C) Sanction No. & Date</span>
          <div class="row q-col-gutter-md">
            <div class="col-5">
              <label for="">1) Sanction No.</label>
              <q-input
                dense
                outlined
                v-model="formData.communication_district"
              />
            </div>

            <div class="col-5">
              <label for="">2) Sanction Date</label>
              <q-input
                dense
                outlined
                v-model="formData.communication_district"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="">14. Remarks, If Any.</label>
          <q-input dense outlined v-model="formData.communication_district" />
        </div>

        <div class="col-12">
          <label for=""
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
                Subsidy Scheme of NEIIPP, 2007 are correct and true to the best
                of my/our knowledge and belief. If any statement made therein in
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
              <label for=""> Signature of the Applicant </label>
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

<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >1 Name of the Industrial Unit <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_one"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name"
        >2 Office address with telephone No.
        <span class="asterisk"> *</span></label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_two"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        3 Factory address with telephone No.
        <span class="asterisk"> *</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_three"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        4 Constitution of the unit (whether proprietorship/partnership/private
        ltd./limited company/cooperative
        <span class="asterisk"> *</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_four"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        5 Name(s) & address(es) of the proprietor/partners/directors/secretary &
        president of the cooperative society.
        <span class="asterisk"> *</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_five"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        6 Date of registration under the Companies Act/the concerned Act
        including the Act.
        <span class="asterisk"> *</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_six"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        7 Registered Head Office of the Company
        <span class="asterisk"> *</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        type="textarea"
        outlined
        v-model="formData.commerce_factory_shed_seven"
      />
    </div>

    <div class="col-12 zlabel">
      <span class="zlabel">
        8 Details of the registration of the unit with the concerned Department:
      </span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-12 zlabe">
          A. If manufacturing sector, please indicate:
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >i) Acknowledgement No./date of Entrepreneur Memorandum (EM) -
            part-I (if any) of MSME</label
          >
          <q-input
            
            dense
            outlined
            v-model="formData.commerce_factory_shed_eightA_i"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >ii) Acknowledgement No./date of Industrial Entrepreneur Memorandum
            (IEM) (if any) of DIPP.</label
          >
          <q-input
            
            dense
            outlined
            v-model="formData.commerce_factory_shed_eightA_ii"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >B If Service sector, please indicate requisite Registration/License
            No. from the concerned Department.</label
          >
          <q-input
           
            dense
            outlined
            v-model="formData.commerce_factory_shed_eightB"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"
        >9 Date of commencement of Commercial Production ( for New unit.)</label
      >
      <q-input
        dense
        outlined
        v-model="formData.commerce_factory_shed_nine"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"
        >10 Whether the Unit was set up after 1.4.2007</label
      >
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.commerce_factory_shed_ten"
      />
    </div>

    <div class="col-12 zlabel">
      <span class="zlabel">
        11 If existing unit undergoing substantial expansion
      </span>
      <div class="row q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >(i) what is the percentage of investment up to 31.3.2007?</label
          >
          <q-input
            
            dense
            outlined
            v-model="formData.commerce_factory_shed_eleven_i"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="pob"
            >(ii) Date of commencement of commercial production after
            expansion.</label
          >
          <q-input
            
            dense
            outlined
            v-model="formData.commerce_factory_shed_eleven_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <span class="zlabel"
        >12. Actual Capital Investment (Capitalized Value)</span
      >
      <div class="row q-col-gutter-md q-ml-md">
        <label class="zlabel col-12" for=""> A) Land/site Development </label>
        <div class="col-12">
          <span class="zlabel">(a) Cost Of Land</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
              
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveAa_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
              
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveAa_ii"
              />
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="zlabel">(b) Cost Of Site Development</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveAb_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveAb_i"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">(c) Cost Of Boundary Wall</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveAc_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveAc_ii"
              />
            </div>
          </div>
        </div>

        <label class="zlabel col-12" for=""> B) Buildings </label>
        <div class="col-12">
          <span class="zlabel">(a) Office</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
             
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveBa_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
               
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveBa_ii"
              />
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="zlabel">(b)Factory</span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveBb_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveBb_ii"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">C) Plant and Machinery </span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveC_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveC_ii"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <span class="zlabel">D Accessories </span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveD_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveD_ii"
              />
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="zlabel">E Cost Of Electrical/ Installation </span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveE_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveE_ii"
              />
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="zlabel">F Cost of Erection/ Installation </span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveF_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveF_ii"
              />
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="zlabel">G Miscellaneous fixed assets. </span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveG_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveG_ii"
              />
            </div>
          </div>
        </div>
        <div class="col-12">
          <span class="zlabel">Total </span>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(i) Upto 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveTotal_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"
                >(ii) After 31.3.2007 <span class="asterisk"> *</span></label
              >
              <q-input
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
                dense
                outlined
                v-model="formData.commerce_factory_shed_twelveTotal_ii"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"
        >13 Whether a Certificate from a Registered Chartered Accountant (which
        needs to be Enclosed) on Capital Investment is attached
        [Form:1E(A)]</label
      >
      <q-input
        dense
        outlined
        v-model="formData.commerce_factory_shed_thirten"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob"> 14. Means of Finance </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.commerce_factory_shed_fourteen"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob">
        15 Whether availed Subsidy under Central Capital Investment Subsidy
        Scheme, 2007
      </label>
      <q-input
        dense
        outlined
        v-model="formData.commerce_factory_shed_fifteen"
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob">
        16. Whether subsidy availed on a new unit or Expanded unit
      </label>
      <q-input
        dense
        outlined
        v-model="formData.commerce_factory_shed_sixteen"
      />
    </div>
    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="pob">
        17. If Capital Subsidy is not availed/ granted specify the reason
        thereof
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        dense
        outlined
        v-model="formData.commerce_factory_shed_seventeen"
      />
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 18. Details of Power Utilization </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Date of sanction of power and load
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_eighteen_i"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(ii) Connected load and date of connection
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_eighteen_ii"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(iii) Details of production of the new unit
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_eighteen_iii"
            dense
            outlined
          />
        </div>
      </div>
    </div>
    <div class="col-12">
      <label for="" class="zlabel">
        19. Give Briefs Details Of Manufacturing Process Of The Unit (attach
        Separate Sheets, If Necessary)
      </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Name Of The Product(s)
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_nineteen_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Installed Annual Production Capacity
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_nineteen_b"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) Actual Annual Production (year-wise)
            <span class="asterisk">*</span></label
          >
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_nineteen_c"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"> 20. Fire Insurance for Fixed Assets </label>
      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (a) Name & Address of the Insured ( To whom the policy is issued)
            <span class="asterisk">*</span></label
          >
          <q-input
         
            type="textarea"
            v-model="formData.commerce_factory_shed_twenty_a"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(b) Date of commencement of first Fire Insurance on commission of
            the Unit

            <span class="asterisk">*</span></label
          >
          <q-input
           
            v-model="formData.commerce_factory_shed_twenty_b"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(c) Period of Insurance <span class="asterisk">*</span></label
          >
          <q-input
           
            v-model="formData.commerce_factory_shed_twenty_c"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(d) Fire Policy No (S). <span class="asterisk">*</span></label
          >
          <q-input
          
            v-model="formData.commerce_factory_shed_twenty_d"
            dense
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender"
            >(e) Basis of Sum-Insured ( Whether Book Value/ Market Value/ New
            Replacement Value) <span class="asterisk">*</span></label
          >
          <q-input
           
            v-model="formData.commerce_factory_shed_twenty_e"
            dense
            outlined
          />
        </div>

        <div class="row col-12">
          <label for="" class="zlabel"
            >(f) Total Sum-Insured Break-up of Sum Insured
          </label>

          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="gender"> (a) Boundary Wall </label>
              <q-input
              
                v-model="formData.commerce_factory_shed_twenty_f_a"
                dense
                outlined
              />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="gender"> (b) Buildings </label>
              <q-input
             
                v-model="formData.commerce_factory_shed_twenty_f_b"
                dense
                outlined
              />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="gender">
                (c ) Plant & Machinery
              </label>
              <q-input
              
                v-model="formData.commerce_factory_shed_twenty_f_c"
                dense
                outlined
              />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="gender">
                (d) Misc. fixed Assets
              </label>
              <q-input
               
                v-model="formData.commerce_factory_shed_twenty_f_d"
                dense
                outlined
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (g) Net Premium ( net of all refunds received / due) paid as per the
            Fire Policy
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_twenty_g"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (h) Amount of Refund, if any, after Insurance of the Policy
          </label>
          <q-input
            
            v-model="formData.commerce_factory_shed_twenty_h"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (i) Whether a certificate from the Policy issuing Office attached
            stating that the Policy was in force for the entire policy period
            and amount of refund availed/due [in the prescribed Format Form:
            1E(B)]
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_twenty_i"
            dense
            outlined
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="gender">
            (j) Reimbursement of Insurance Premium availed so far under the
            scheme and details thereof.
          </label>
          <q-input
            :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
            v-model="formData.commerce_factory_shed_twenty_j"
            dense
            outlined
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender">
        21. Give Bank Account No., Name of the Bank & Branch where the subsidy
        Amount, if reimbursed, is to be deposited
        <span class="asterisk">*</span></label
      >
      <q-input
        type="textarea"
        v-model="formData.commerce_factory_shed_twentyone"
        dense
        outlined
      />
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="gender"
        >Signature of the applicant (s) <span class="asterisk">*</span></label
      >
      <q-file v-model="formData.commerce_factory_shed_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>
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
      application_code: "C&E_FACTORY_SHED",
      department_id: 1,
      commerce_factory_shed_one: "",
      commerce_factory_shed_two: "",
      commerce_factory_shed_three: "",
      commerce_factory_shed_four: "",
      commerce_factory_shed_five: "",
      commerce_factory_shed_six: "",
      commerce_factory_shed_seven: "",
      commerce_factory_shed_eight: "",
      commerce_factory_shed_eightA: "",
      commerce_factory_shed_eightA_i: "",
      commerce_factory_shed_eightA_ii: "",
      commerce_factory_shed_eightB: "",
      commerce_factory_shed_nine: "",
      commerce_factory_shed_ten: "",
      commerce_factory_shed_eleven: "",
      commerce_factory_shed_eleven_i: "",
      commerce_factory_shed_eleven_ii: "",
      commerce_factory_shed_twelve: "",
      commerce_factory_shed_twelveA: "",
      commerce_factory_shed_twelveAa: "",
      commerce_factory_shed_twelveAa_i: "",
      commerce_factory_shed_twelveAa_ii: "",
      commerce_factory_shed_twelveAb: "",
      commerce_factory_shed_twelveAb_i: "",
      commerce_factory_shed_twelveAb_ii: "",
      commerce_factory_shed_twelveAc: "",
      commerce_factory_shed_twelveAc_i: "",
      commerce_factory_shed_twelveAc_ii: "",
      commerce_factory_shed_twelveB: "",
      commerce_factory_shed_twelveBa: "",
      commerce_factory_shed_twelveBa_i: "",
      commerce_factory_shed_twelveBa_ii: "",
      commerce_factory_shed_twelveBb: "",
      commerce_factory_shed_twelveBb_i: "",
      commerce_factory_shed_twelveBb_ii: "",
      commerce_factory_shed_twelveC: "",
      commerce_factory_shed_twelveC_i: "",
      commerce_factory_shed_twelveC_ii: "",
      commerce_factory_shed_twelveD: "",
      commerce_factory_shed_twelveD_i: "",
      commerce_factory_shed_twelveD_ii: "",
      commerce_factory_shed_twelveE: "",
      commerce_factory_shed_twelveE_i: "",
      commerce_factory_shed_twelveE_ii: "",
      commerce_factory_shed_twelveF: "",
      commerce_factory_shed_twelveF_i: "",
      commerce_factory_shed_twelveF_ii: "",
      commerce_factory_shed_twelveG: "",
      commerce_factory_shed_twelveG_i: "",
      commerce_factory_shed_twelveG_ii: "",
      commerce_factory_shed_twelveTotal: "",
      commerce_factory_shed_twelveTotal_i: "",
      commerce_factory_shed_twelveTotal_ii: "",
      commerce_factory_shed_thirten: "",
      commerce_factory_shed_fourteen: "",
      commerce_factory_shed_fifteen: "",
      commerce_factory_shed_sixteen: "",
      commerce_factory_shed_seventeen: "",
      commerce_factory_shed_eighteen: "",
      commerce_factory_shed_eighteen_i: "",
      commerce_factory_shed_eighteen_ii: "",
      commerce_factory_shed_eighteen_iii: "",
      commerce_factory_shed_nineteen: "",
      commerce_factory_shed_nineteen_a: "",
      commerce_factory_shed_nineteen_b: "",
      commerce_factory_shed_nineteen_c: "",
      commerce_factory_shed_twenty: "",
      commerce_factory_shed_twenty_a: "",
      commerce_factory_shed_twenty_b: "",
      commerce_factory_shed_twenty_c: "",
      commerce_factory_shed_twenty_d: "",
      commerce_factory_shed_twenty_e: "",
      commerce_factory_shed_twenty_f: "",
      commerce_factory_shed_twenty_f_a: "",
      commerce_factory_shed_twenty_f_b: "",
      commerce_factory_shed_twenty_f_c: "",
      commerce_factory_shed_twenty_f_d: "",
      commerce_factory_shed_twenty_g: "",
      commerce_factory_shed_twenty_h: "",
      commerce_factory_shed_twenty_i: "",
      commerce_factory_shed_twenty_j: "",
      commerce_factory_shed_twentyone: "",
      commerce_factory_shed_signature: null,
    
    });

    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

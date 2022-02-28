<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name">
        1. Particulars Of Applicant <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Name Of The Applicant
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_one_i"
              :rules="[
              (val) => (val && val.length > 0) || 'Please type something',
            ]"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ii) Name Of HCF Or CBMWTF </label>
          <q-input dense outlined v-model="formData.pollution_form19_one_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iii) Address For Correspondence
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_one_iii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (iv)Tel. No, Fax. No </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_one_iv"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (v) E-mail ID </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_one_v"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (vi) URL Of Website </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_one_vi"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        2. Activity For Which Authorisation Is Sought
        <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Activity
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_two_i"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ii) Generation, Segregation</label>
          <q-input dense outlined v-model="formData.pollution_form19_two_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (iii) Collection </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_iii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (iv)Storage </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_iv"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (v) Packaging </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_v"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (vi) Reception</label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_vi"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (vii) Transportation</label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_vii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (viii) Treatment Or Processing Or Conversion
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_viii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ix) Recycling </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_ix"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (x) Disposal Or Destruction </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_x"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (xi) Use </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_xi"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(xii) Offering For Sale, Transfer
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_xii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (xiii) Any Other Form Of Handling
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_two_xiii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Application For Fresh Or Renewal Of Authorisation:
            <span class="asterisk"> *</span></label
          >

          <q-select
            class="zlabel"
            v-model="formData.pollution_form19_three_i"
            :options="['fresh', 'renewal']"
            outlined
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (ii) Applied For CTO/CTE Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_three_ii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iii) In Case Of Renewal Previous Authorisation Number And Date
            <span class="asterisk"> *</span></label
          >
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form19_three_iii"
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (iv) Status Of Consents <span class="asterisk"> *</span>
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (a) Under The Water (Prevention And Control Of Pollution) Act,
                1974
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_three_iv_a"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (b) Under The Air (Prevention And Control Of Pollution) Act,
                1981:
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_three_iv_b"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4. <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Address Of The Health Care Facility (HCF) Or Common Bio-medical
            Waste Treatment Facility (CBWTF)
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_four_i"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (ii) GPS Coordinates Of Health Care Facility (HCF) Or Common
            Bio-medical Waste Treatment Facility (CBWTF)
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_four_ii"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5. Details of health care facility (HCF) or common bio-medical waste
        treatment facility (CBWTF): <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Of Beds Of HCF
            <span class="asterisk"> *</span>
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_i"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (ii) Number Of Patients Treated Per Month By HCF
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_ii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iii) Number Healthcare Facilities Covered By CBMWTF
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_iii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iv) No Of Beds Covered By CBMWTF
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_iv"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (v) Installed Treatment And Disposal Capacity Of CBMWTF: Kg Per Day
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_v"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (vi) Quantity Of Biomedical Waste Treated Or Disposed By CBMWTF: Kg/
            Day
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_vi"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (vii) Area Or Distance Covered By CBMWTF
          </label>
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_five_vii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            Attach Map A Map With GPS Locations Of CBMWTF And Area Of Coverage)
          </label>
          <q-file v-model="formData.pollution_form19_five_attach" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (viii) Quantity of Biomedical waste handled, treated or disposed:
            (Refer Schedule-I)<span class="asterisk"> *</span>
          </label>

          <div class="zlabel col-12 text-left">Category: Yellow</div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (a) Type Of Waste: Human Anatomical Waste
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_a_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_a_i"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (b) Type Of Waste: Animal Anatomical Waste
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_b_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_b_i"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(c) Type Of Waste: Soiled Waste</div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_c_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_c_ii"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (d) Type Of Waste: Expired Or Discarded Medicines
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_d_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_d_i"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (e) Type Of Waste: Chemical Solid Waste
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_e_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_e_i"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (f) Type Of Waste: Chemical Liquid Waste
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_f_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_f_i"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (g) Type Of Waste: Discarded Linen, Mattresses, Beddings
              Contaminated With Blood Or Body Fluid
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_g_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_g_i"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (h) Type Of Waste: Microbiology, Biotechnology And Other Clinical
              Laboratory Waste
            </div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_h_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_yellow_h_i"
                />
              </div>
            </div>
          </div>

          <div class="zlabel col-12 text-left">Category: Red</div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(a)Contaminated Waste (Recyclable)</div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_red_a_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_red_a_i"
                />
              </div>
            </div>
          </div>

          <div class="zlabel col-12 text-left">
            Category: White (Translucent)
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(a)Waste Sharps Including Metals</div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_white_a_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_white_a_ii"
                />
              </div>
            </div>
          </div>

          <div class="zlabel col-12 text-left">Category: Blue</div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(a) Glassware</div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_blue_a_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_blue_a_ii"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(b) Metallic Body Implants</div>

            <div class="row q-col-gutter-md col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_blue_b_i"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form19_five_viii_blue_b_i"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        6. Brief Description Of Arrangements For Handling Of Biomedical Waste
        (attach Details) <span class="asterisk"> *</span>
      </label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Mode Of Transportation (if Any) Of Bio-medical Waste
            <span class="asterisk"> *</span></label
          >

          <q-input dense outlined v-model="formData.pollution_form19_six_i" />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (ii) Details Of Treatment Equipment (please Give Details Such As The
            Number, Type & Capacity Of Each Unit) No Of Units Capacity Of Each
            Unit <span class="asterisk"> *</span>
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (a) Incinerators
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_a"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (b) Plasma Pyrolysis
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_b"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (c) Autoclaves
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_c"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (d) Microwave
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_d"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (e) Hydroclave
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_e"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (f) Hydroclave
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_f"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (g) Needle Tip Cutter Or Destroyer
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_g"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (h) Sharps Encapsulation Or Concrete Pit
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_h"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (i) Deep Burial Pits
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_i"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (j) Chemical Disinfection
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_j"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                (k) Any Other Treatment Equipment
                <span class="asterisk"> *</span>
              </label>
              <q-input
                type="textarea"
                dense
                outlined
                v-model="formData.pollution_form19_six_ii_k"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">
        7. Contingency Plan Of Common Bio-medical Waste Treatment Facility
        (CBWTF)(attach Documents) <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Plan
            <span class="asterisk"> *</span></label
          >
          <q-input
            dense
            type="textarea"
            outlined
            v-model="formData.pollution_form19_seven_i"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ii) Upload Documents </label>
          <q-file v-model="formData.pollution_form19_seven_ii" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        8. Details Of Directions Or Notices Or Legal Actions If Any During The
        Period Of Earlier Authorization
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form19_eight"
      />
    </div>

    <div class="col-12 zlabel">
      9. Declaration: I do hereby declare that the statements made and
      information given above are true to the best of my knowledge and belief
      and that I have not concealed any information. I do also hereby undertake
      to provide any further information sought by the prescribed authority in
      relation to these rules and to fulfill any conditions stipulated by the
      prescribed authority.
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        Signature of the Applicant
        <span class="asterisk"> *</span>
      </label>
      <q-file v-model="formData.pollution_form19_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-10">
      <label class="zlabel" for="name">
        Designation <span class="asterisk"> *</span>
      </label>
      <q-input
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
        type="textarea"
        dense
        outlined
        v-model="formData.pollution_form19_designation"
      />
    </div>

    <!-- <div class="col-lg-4 col-sm-6">
      <div class="row justify-end q-col-gutter-md"> -->

    <div class="col-xs-12" />
  </div>
</template>

<script>
import { reactive } from "@vue/reactivity";
import { useStore } from "vuex";
import { onMounted, watch } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_19",
      department_id: 11,
      pollution_form19_one: "",
      pollution_form19_one_i: "",
      pollution_form19_one_ii: "",
      pollution_form19_one_iii: "",
      pollution_form19_one_iv: "",
      pollution_form19_one_v: "",
      pollution_form19_one_vi: "",
      pollution_form19_two: "",
      pollution_form19_two_i: "",
      pollution_form19_two_ii: "",
      pollution_form19_two_iii: "",
      pollution_form19_two_iv: "",
      pollution_form19_two_v: "",
      pollution_form19_two_vi: "",
      pollution_form19_two_vii: "",
      pollution_form19_two_viii: "",
      pollution_form19_two_ix: "",
      pollution_form19_two_x: "",
      pollution_form19_two_xi: "",
      pollution_form19_two_xii: "",
      pollution_form19_two_xiii: "",
      pollution_form19_three: "",
      pollution_form19_three_i: "",
      pollution_form19_three_ii: "",
      pollution_form19_three_iii: "",
      pollution_form19_three_iv: "",
      pollution_form19_three_iv_a: "",
      pollution_form19_three_iv_b: "",
      pollution_form19_four: "",
      pollution_form19_four_i: "",
      pollution_form19_four_ii: "",
      pollution_form19_five: "",
      pollution_form19_five_i: "",
      pollution_form19_five_ii: "",
      pollution_form19_five_iii: "",
      pollution_form19_five_iv: "",
      pollution_form19_five_v: "",
      pollution_form19_five_vi: "",
      pollution_form19_five_vii: "",
      pollution_form19_five_attach: null,
      pollution_form19_five_viii: "",
      pollution_form19_five_viii_yellow: "",
      pollution_form19_five_viii_yellow_a: "",
      pollution_form19_five_viii_yellow_a_i: "",
      pollution_form19_five_viii_yellow_a_ii: "",
      pollution_form19_five_viii_yellow_b: "",
      pollution_form19_five_viii_yellow_b_i: "",
      pollution_form19_five_viii_yellow_b_ii: "",
      pollution_form19_five_viii_yellow_c: "",
      pollution_form19_five_viii_yellow_c_i: "",
      pollution_form19_five_viii_yellow_c_ii: "",
      pollution_form19_five_viii_yellow_d: "",
      pollution_form19_five_viii_yellow_d_i: "",
      pollution_form19_five_viii_yellow_d_ii: "",
      pollution_form19_five_viii_yellow_e: "",
      pollution_form19_five_viii_yellow_e_i: "",
      pollution_form19_five_viii_yellow_e_ii: "",
      pollution_form19_five_viii_yellow_f: "",
      pollution_form19_five_viii_yellow_f_i: "",
      pollution_form19_five_viii_yellow_f_ii: "",
      pollution_form19_five_viii_yellow_g: "",
      pollution_form19_five_viii_yellow_g_i: "",
      pollution_form19_five_viii_yellow_g_ii: "",
      pollution_form19_five_viii_yellow_h: "",
      pollution_form19_five_viii_yellow_h_i: "",
      pollution_form19_five_viii_yellow_h_ii: "",
      pollution_form19_five_viii_red: "",
      pollution_form19_five_viii_red_a: "",
      pollution_form19_five_viii_red_a_i: "",
      pollution_form19_five_viii_red_a_ii: "",
      pollution_form19_five_viii_white: "",
      pollution_form19_five_viii_white_a: "",
      pollution_form19_five_viii_white_a_i: "",
      pollution_form19_five_viii_white_a_ii: "",
      pollution_form19_five_viii_blue: "",
      pollution_form19_five_viii_blue_a: "",
      pollution_form19_five_viii_blue_a_i: "",
      pollution_form19_five_viii_blue_a_ii: "",
      pollution_form19_five_viii_blue_b: "",
      pollution_form19_five_viii_blue_b_i: "",
      pollution_form19_five_viii_blue_b_ii: "",
      pollution_form19_six: "",
      pollution_form19_six_i: "",
      pollution_form19_six_ii: "",
      pollution_form19_six_ii_a: "",
      pollution_form19_six_ii_b: "",
      pollution_form19_six_ii_c: "",
      pollution_form19_six_ii_d: "",
      pollution_form19_six_ii_e: "",
      pollution_form19_six_ii_f: "",
      pollution_form19_six_ii_g: "",
      pollution_form19_six_ii_h: "",
      pollution_form19_six_ii_i: "",
      pollution_form19_six_ii_j: "",
      pollution_form19_six_ii_k: "",
      pollution_form19_seven: "",
      pollution_form19_seven_i: "",
      pollution_form19_seven_ii: null,
      pollution_form19_eight: "",
      pollution_form19_signature: null,
      pollution_form19_designation: "",
    });
    watch(store.state.globalData.common, () => getA());

    const getA = () => {
      const { applicant_name, address, phone_no, mobile_no, fax_no, email } =
        store.state.globalData.common.partA || "";
      const { declaration_designation } =
        store.state.globalData.common.selfDeclaration || "";

      formData.pollution_form19_one_i = applicant_name;
      formData.pollution_form19_one_iv = `Telephone: ${phone_no}\nFaxno: ${fax_no}`;
      formData.pollution_form19_one_v = email;
      formData.pollution_form19_one_iii = address;
      formData.pollution_form19_designation = declaration_designation;
    };

    onMounted(async () => getA());

    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

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
            v-model="formData.pollution_form17_partA_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ii) Name Of HCF Or CBMWTF </label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (iii) Address For Correspondence
          </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (iv)Tel. No, Fax. No </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (v) E-mail ID </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (vi) URL Of Website </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partA_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ii) Generation, Segregation</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_b"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (iii) Collection </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (iv)Storage </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (v) Packaging </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (vi) Reception</label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (vii) Transportation</label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ix) Recycling </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (x) Disposal Or Destruction </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (xi) Use </label>
          <q-input
            type="textarea"
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partA_one_d"
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

          <q-select v-model="model" :options="['fresh', 'renewal']" outlined />
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
            v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5. <span class="asterisk"> *</span></label
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
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
            v-model="formData.pollution_form17_partB_one_a"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            Attach Map A Map With GPS Locations Of CBMWTF And Area Of Coverage)
          </label>
          <q-file v-model="formData.pollution_form14_eleven" outlined>
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

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (b) Type Of Waste: Animal Anatomical Waste
            </div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(c) Type Of Waste: Soiled Waste</div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (d) Type Of Waste: Expired Or Discarded Medicines
            </div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (e) Type Of Waste: Chemical Solid Waste
            </div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (f) Type Of Waste: Chemical Liquid Waste
            </div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (g) Type Of Waste: Discarded Linen, Mattresses, Beddings
              Contaminated With Blood Or Body Fluid
            </div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">
              (h) Type Of Waste: Microbiology, Biotechnology And Other Clinical
              Laboratory Waste
            </div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="zlabel col-12 text-left">Category: Red</div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">Contaminated Waste (Recyclable)</div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="zlabel col-12 text-left">
            Category: White (Translucent)
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">Waste Sharps Including Metals</div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="zlabel col-12 text-left">Category: Blue</div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(a) Glassware</div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
                />
              </div>
            </div>
          </div>

          <div class="row justify q-col-gutter-md q-ml-sm">
            <div class="col-12 zlabel">(b) Metallic Body Implants</div>

            <div class="col-12 q-ml-md">
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (i) QuantityGenerated Or Collected, Kg/day
                  <span class="asterisk"> *</span></label
                >
                <q-input
                  dense
                  type="textarea"
                  outlined
                  v-model="formData.pollution_form17_partA_one_a"
                />
              </div>
              <div class="col-md-6 col-xs-10">
                <label class="zlabel" for="name">
                  (ii) Method Of Treatment And Disposal
                </label>
                <q-input
                  dense
                  outlined
                  v-model="formData.pollution_form17_partA_one_b"
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

          <q-input
            dense
            outlined
            v-model="formData.pollution_form17_partA_one_d"
          />
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
                v-model="formData.pollution_form17_partA_one_d"
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
            v-model="formData.pollution_form17_partB_one_a"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"> (ii) Upload Documents </label>
          <q-file v-model="formData.pollution_form17_partB_one_b" outlined>
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
      <q-file v-model="formData.pollution_form14_eleven" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
        Signature of the Applican
        <span class="asterisk"> *</span>
      </label>
      <q-file v-model="formData.pollution_form14_eleven" outlined>
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
        v-model="formData.pollution_form15_two"
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
import { onMounted } from "vue";
import { date } from "quasar";

export default {
  setup(props, context) {
    const store = useStore();

    const formData = reactive({
      application_code: "POLLUTION_FORM_17",
      department_id: 11,
      pollution_form17_partA: "",
      pollution_form17_partA_one: "",
      pollution_form17_partA_one_a: "",
      pollution_form17_partA_one_b: "",
      pollution_form17_partA_one_c: "",
      pollution_form17_partA_one_c_i: false,
      pollution_form17_partA_one_c_ii: false,
      pollution_form17_partA_one_c_iii: false,
      pollution_form17_partA_one_c_iv: false,
      pollution_form17_partA_one_c_v: false,
      pollution_form17_partA_one_c_vi: false,
      pollution_form17_partA_one_c_vii: false,
      pollution_form17_partA_one_c_viii: false,
      pollution_form17_partA_one_c_ix: false,
      pollution_form17_partA_one_c_x: false,
      pollution_form17_partA_one_c_xi: false,
      pollution_form17_partA_one_c_xii: false,
      pollution_form17_partA_one_c_xiii: false,
      pollution_form17_partA_one_c_xiv: false,
      pollution_form17_partA_one_d: "",
      pollution_form17_partA_two: "",
      pollution_form17_partA_two_a: "",
      pollution_form17_partA_two_b: "",
      pollution_form17_partA_three: "",
      pollution_form17_partA_three_a: "",
      pollution_form17_partA_three_b: "",
      pollution_form17_partA_three_b_i: false,
      pollution_form17_partA_three_b_ii: false,
      pollution_form17_partA_three_b_iii: false,
      pollution_form17_partA_four: null,
      pollution_form17_partA_five: "",
      pollution_form17_partB: "",
      pollution_form17_partB_one: "",
      pollution_form17_partB_one_a: "",
      pollution_form17_partB_one_b: null,
      pollution_form17_partB_one_c: "",
      pollution_form17_partB_one_d: "",
      pollution_form17_partB_one_d_i: "",
      pollution_form17_partB_one_d_ii: "",
      pollution_form17_partB_one_d_iii: "",
      pollution_form17_partB_one_d_iv: "",
      pollution_form17_partB_one_e: "",
      pollution_form17_partB_two: "",
      pollution_form17_partC: "",
      pollution_form17_partC_one: "",
      pollution_form17_partC_one_i: "",
      pollution_form17_partC_one_ii: "",
      pollution_form17_partC_one_iii: "",
      pollution_form17_partC_one_iv: "",
      pollution_form17_partC_one_v: "",
      pollution_form17_partC_one_vi: "",
      pollution_form17_partC_one_vii: "",
      pollution_form17_partC_one_viii: "",
      pollution_form17_partC_one_ix: "",
      pollution_form17_partC_two: "",
      pollution_form17_partC_three: null,
      pollution_form17_partD: "",
      pollution_form17_partD_one: "",
      pollution_form17_partD_two: "",
      pollution_form17_partD_three: "",
      pollution_form17_partD_four: "",
      pollution_form17_partD_five: "",
      pollution_form17_partD_six: "",
      pollution_form17_partD_seven: "",
      pollution_form17_partD_eight: "",
      pollution_form17_partD_nine: "",
      pollution_form17_signature: null,
      pollution_form17_designation: "",
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

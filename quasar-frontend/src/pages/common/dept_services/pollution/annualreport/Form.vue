<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-12">
      <label class="zlabel" for="name"
        >1. Particulars Of The Occupier <span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Name Of The Authorised Person (occupier Or Operator Of
            Facility)s
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_one_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (ii) Name of HCF or CBMWTF
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_one_ii" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Address For Correspondence</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_one_iii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(iv) Address Of Facility</label>
          <q-input dense outlined v-model="formData.pollution_form_5_one_iv" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(v)Tel. No, Fax. No</label>
          <q-input dense outlined v-model="formData.pollution_form_5_one_v" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(vi) E-mail ID</label>
          <q-input dense outlined v-model="formData.pollution_form_5_one_vi" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(vii) URL Of Website</label>
          <q-input dense outlined v-model="formData.pollution_form_5_one_vii" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(viii) GPS Coordinates Of HCF Or CBMWTF</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_one_viii"
          />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ix) Ownership Of HCF Or CBMWTF</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_one_ix" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(x). Status Of Authorisation Under The Bio-Medical Waste
            (Management And Handling) Rules</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_one_x" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(xi). Status Of Consents Under Water Act And Air Act</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_one_xi" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >2. Type Of Health Care Facility<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Bedded Hospital
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_two_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) Non-bedded Hospital(Clinic Or Blood Bank Or Clinical
            Laboratory Or Research Institute Or Veterinary Hospital Or Any
            Other)</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_two_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) License Number And Its Date Of Expiry</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_two_iii" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >3. Details Of CBMWTF<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Healthcare Facilities Covered By CBMWTF
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_three_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) No Of Beds Covered By CBMWTF</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_three_ii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Installed Treatment And Disposal Capacity Of CBMWTF</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_three_iii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iv) Quantity Of Biomedical Waste Treated Or Disposed By
            CBMWTF</label
          >
          <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_three_iv"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4. Quantity Of Waste Generated Or Disposed In Kg Per Annum (on Monthly
        Average Basis)<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Yellow Category
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_four_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(ii) Red Category</label>
          <q-input dense outlined v-model="formData.pollution_form_5_four_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(iii) White</label>
          <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_four_iii"
          />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(iv) Blue Category</label>
          <q-input dense outlined v-model="formData.pollution_form_5_four_iv" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(v) General Solid Waste</label>
          <q-input dense outlined v-model="formData.pollution_form_5_four_v" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >5. Details of the Storage, treatment, transportation, processing and
        Disposal Facility<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-12">
          <label class="zlabel" for="name">
            (i) Details of the on-site storage facility
          </label>

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name"> (i)Size </label>
              <q-input
                dense
                outlined
                v-model="formData.pollution_form_5_five_i_size"
              />
            </div>
            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">Capacity</label>
              <q-input
                dense
                outlined
                v-model="formData.pollution_form_5_five_i_capacity"
              />
            </div>

            <div class="col-md-6 col-xs-10">
              <label class="zlabel" for="name">
                Provision of on-site storage (cold storage or any other
                provision)
              </label>
              <q-input
                dense
                outlined
                v-model="formData.pollution_form_5_five_i_provision"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (ii) Details of the treatment or disposal facilities
          </label>

          <div class="row col-12 justify q-ml-md">
            <div class="col-12">
              <label class="zlabel" for="name"> a)Incinerators </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_a_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_a_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_a_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_a_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> b)Incinerators </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_b_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_b_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_b_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_b_quantity"
                  />
                </div>
              </div>
            </div>
            <div class="col-12">
              <label class="zlabel" for="name"> c)Plasma Pyrolysis </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_c_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_c_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_c_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_c_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> d)Autoclaves </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_d_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_d_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_d_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_d_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> e)Microwave </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_e_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_e_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_e_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_e_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> f)Hydroclave </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_f_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_f_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_f_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_f_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> g)Shredder </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_g_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_g_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_g_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_g_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                h)Needle tip cutter or destroyer
              </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_h_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_g_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_h_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_h_quantity"
                  />
                </div>
              </div>
            </div>
            <div class="col-12">
              <label class="zlabel" for="name">
                i) Sharps /encapsulation or concrete pit
              </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_i_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_i_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_i_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_i_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name"> j) Deep burial pits: </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_j_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_j_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_j_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_j_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                k) Chemical disinfection
              </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_k_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_k_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_k_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_k_quantity"
                  />
                </div>
              </div>
            </div>

            <div class="col-12">
              <label class="zlabel" for="name">
                l) Any other treatment /equipment
              </label>

              <div class="row justify q-col-gutter-md q-ml-md">
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Type of treatment/ equipment
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_l_treatment"
                  />
                </div>
                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">No of Unit's</label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_l_units"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name"> Capacit y Kg/day </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_l_capactity"
                  />
                </div>

                <div class="col-md-6 col-xs-10">
                  <label class="zlabel" for="name">
                    Quantity Treated/disp osed in kg/yr
                  </label>
                  <q-input
                    dense
                    outlined
                    v-model="formData.pollution_form_5_five_ii_l_quantity"
                  />
                </div>
              </div>
            </div>

            <!-- <q-markup-table class="full-width">
              <thead>
                <tr>
                  <th>Type of treatment/equipment</th>
                  <th>No of Unit’s</th>
                  <th>Capacity Kg/day</th>
                  <th>Quantity Treated/disposed in kg/yr</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Incinerators</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Plasma Pyrolysis</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Autoclaves</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Microwave</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Hydroclave</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Shredder</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Needle tip cutter or destroyer</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Sharps /encapsulation or concrete pit</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                </tr>

                <tr>
                  <td>Deep burial pits:</td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                     <q-input
            dense
            outlined
            v-model="formData.pollution_form_5_five_iv"
          />
                  </td>
                  <td>
                    <q-input dense outlined />
                  </td>
                </tr>

                <tr>
                  <td>Chemical disinfection</td>
                  <td>
                    <q-input dense outlined />
                  </td>
                  <td>
                    <q-input dense outlined />
                  </td>
                  <td>
                    <q-input dense outlined />
                  </td>
                </tr>

                <tr>
                  <td>Any other treatment /equipment</td>
                  <td>
                    <q-input dense outlined />
                  </td>
                  <td>
                    <q-input dense outlined />
                  </td>
                  <td>
                    <q-input dense outlined />
                  </td>
                </tr>
              </tbody>
            </q-markup-table> -->
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (iii) Quantity of recyclable wastes sold to authorized recyclers
            after treatment in kg per annum
          </label>

          <div class="row justify q-ml-md">
            <div class="col-12">
              <label for="" class="zlabel"
                >Red Category (like plastic, glass etc.)</label
              >
              <q-input
                dense
                outlined
                v-model="formData.pollution_form_5_five_iii_red"
              />
            </div>
          </div>
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            (iv) No of vehicles used for collection and transportation of
            biomedical waste
          </label>
          <q-input dense outlined v-model="formData.pollution_form_5_five_iv" />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name">
            <div class="col-12">
              <label class="zlabel" for="name">
                (v) Details of incineration ash and ETP sludge generated and
                disposed during the treatment of wastes in Kg per annum
              </label>

              <div class="row justify q-mt-lg q-ml-md">
                <q-markup-table class="full-width">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Quantity generated</th>
                      <th>Where disposed</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>a)Incinerators</td>
                      <td>
                        <q-input
                          dense
                          outlined
                          v-model="formData.pollution_form_5_five_v_a_quantity"
                        />
                      </td>
                      <td>
                        <q-input
                          dense
                          outlined
                          v-model="formData.pollution_form_5_five_v_a_disposed"
                        />
                      </td>
                    </tr>

                    <tr>
                      <td>b)Ash</td>
                      <td>
                        <q-input
                          dense
                          outlined
                          v-model="formData.pollution_form_5_five_v_b_quantity"
                        />
                      </td>
                      <td>
                        <q-input
                          dense
                          outlined
                          v-model="formData.pollution_form_5_five_v_b_disposed"
                        />
                      </td>
                    </tr>

                    <tr>
                      <td>c)ETP Sludge</td>
                      <td>
                        <q-input
                          dense
                          outlined
                          v-model="formData.pollution_form_5_five_v_c_quantity"
                        />
                      </td>
                      <td>
                        <q-input
                          dense
                          outlined
                          v-model="formData.pollution_form_5_five_v_c_disposed"
                        />
                      </td>
                    </tr>
                  </tbody>
                </q-markup-table>
              </div>
            </div>
          </label>
        </div>

        <div class="col-md-7 col-xs-10">
          <label for="" class="zlabel"
            >(vi) Name of the Common BioMedical Waste Treatment FacilityOperator
            through which wastes are disposed of</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_five_vi" />
        </div>

        <div class="col-md-5 col-xs-10">
          <label for="" class="zlabel"
            >(vii) List of member HCF not handed over bio-medical waste.</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_five_vii" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >6.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (a) Do You Have Bio-medical Waste Management Committee?
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_six_a" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(b) If Yes, Attach Minutes Of The Meetings Held During The
            Reporting Period</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_six_b" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >7. Details Trainings Conducted On BMW<span class="asterisk">
          *</span
        ></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Of Trainings Conducted OnBMW Management.
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_seven_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) Number Of Personnel Trained</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_seven_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Number Of Personnel Trained At The Time Of Induction</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_seven_iii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iv) Number Of Personnel Not Undergone Any Training So Far</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_seven_iv" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(v) Whether Standard Manual For Training Is Available?</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_seven_v" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">(vi)( Any Other Information)</label>
          <q-input dense outlined v-model="formData.pollution_form_5_seven_vi" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >8. Details Of The Accident Occurred During The Year<span
          class="asterisk"
        >
          *</span
        ></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Number Of Accidents Occurred
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_eight_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) Number Of The Persons Affected</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_eight_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Remedial Action Taken (Please Attach Details If Any)</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_eight_iii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iv) Any Fatality Occurred, Details.</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_eight_iv" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">9.</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Are You Meeting The Standards Of Air Pollution From The
            Incinerator?
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_nine_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) How Many Times In Last Year Could Not Met The
            Standards?</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_nine_ii" />
        </div>

        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(iii) Details Of Continuous Online Emission Monitoring Systems
            Installed</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_nine_iii" />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label for="" class="zlabel"
        >10. Liquid Waste Generated And Treatment Methods In Place. How Many
        Times You Have Not Met The Standards In A Year?</label
      >
      <q-input dense outlined v-model="formData.pollution_form_5_ten" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">11.</label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name">
            (i) Is The Disinfection Method Or Sterilization Meeting The Log
            4standards?
            <span class="asterisk"> *</span></label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_eleven_i" />
        </div>
        <div class="col-md-6 col-xs-10">
          <label class="zlabel" for="name"
            >(ii) How Many Times You Have Not Met The Standards In A
            Year?</label
          >
          <q-input dense outlined v-model="formData.pollution_form_5_eleven_ii" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel">12. Any Other Relevant Information</label>
      <q-input dense outlined v-model="formData.pollution_form_5_twelve" />
    </div>

    <div class="col-md-6 col-xs-10">
      <label for="" class="zlabel"
        >Certified That The Above Report Is For Theperiod From</label
      >
      <q-input dense outlined v-model="formData.pollution_form_5_certified" />
    </div>

    <div class="col-12 zlabel text-center">
      I do hereby affirm that the informations furnished above are true and the
      documents attached herewith are genuine.
    </div>

    <q-space />

    <div class="col-xs-12" />
  </div>

  <div class="zcard q-mt-md row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="">Name Of The Head Of The Institution</label>
      <q-input dense outlined v-model="formData.pollution_form_5_head_name" />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for=""
        >Signature Of The Head Of The Institution</label
      >
      <q-file v-model="formData.pollution_form_5_signature" outlined>
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

    const formData = reactive({
      application_code: "POLLUTION_FORM_5",
      department_id: 11,
      pollution_form_5_one: "",
      pollution_form_5_one_i: "",
      pollution_form_5_one_ii: "",
      pollution_form_5_one_iii: "",
      pollution_form_5_one_iv: "",
      pollution_form_5_one_v: "",
      pollution_form_5_one_vi: "",
      pollution_form_5_one_vii: "",
      pollution_form_5_one_viii: "",
      pollution_form_5_one_ix: "",
      pollution_form_5_one_x: "",
      pollution_form_5_one_xi: "",
      pollution_form_5_two: "",
      pollution_form_5_two_i: "",
      pollution_form_5_two_ii: "",
      pollution_form_5_two_iii: "",
      pollution_form_5_three: "",
      pollution_form_5_three_i: "",
      pollution_form_5_three_ii: "",
      pollution_form_5_three_iii: "",
      pollution_form_5_three_iv: "",
      pollution_form_5_four: "",
      pollution_form_5_four_i: "",
      pollution_form_5_four_ii: "",
      pollution_form_5_four_iii: "",
      pollution_form_5_four_iv: "",
      pollution_form_5_four_v: "",
      pollution_form_5_five: "",
      pollution_form_5_five_i: "",
      pollution_form_5_five_i_size: "",
      pollution_form_5_five_i_capacity: "",
      pollution_form_5_five_i_provision: "",
      pollution_form_5_five_ii: "",
      pollution_form_5_five_ii_a: "",
      pollution_form_5_five_ii_a_treatment: "",
      pollution_form_5_five_ii_a_units: "",
      pollution_form_5_five_ii_a_capactity: "",
      pollution_form_5_five_ii_a_quantity: "",
      pollution_form_5_five_ii_b: "",
      pollution_form_5_five_ii_b_treatment: "",
      pollution_form_5_five_ii_b_units: "",
      pollution_form_5_five_ii_b_capactity: "",
      pollution_form_5_five_ii_b_quantity: "",
      pollution_form_5_five_ii_c: "",
      pollution_form_5_five_ii_c_treatment: "",
      pollution_form_5_five_ii_c_units: "",
      pollution_form_5_five_ii_c_capactity: "",
      pollution_form_5_five_ii_c_quantity: "",
      pollution_form_5_five_ii_d: "",
      pollution_form_5_five_ii_d_treatment: "",
      pollution_form_5_five_ii_d_units: "",
      pollution_form_5_five_ii_d_capactity: "",
      pollution_form_5_five_ii_d_quantity: "",
      pollution_form_5_five_ii_e: "",
      pollution_form_5_five_ii_e_treatment: "",
      pollution_form_5_five_ii_e_units: "",
      pollution_form_5_five_ii_e_capactity: "",
      pollution_form_5_five_ii_e_quantity: "",
      pollution_form_5_five_ii_f: "",
      pollution_form_5_five_ii_f_treatment: "",
      pollution_form_5_five_ii_f_units: "",
      pollution_form_5_five_ii_f_capactity: "",
      pollution_form_5_five_ii_f_quantity: "",
      pollution_form_5_five_ii_g: "",
      pollution_form_5_five_ii_g_treatment: "",
      pollution_form_5_five_ii_g_units: "",
      pollution_form_5_five_ii_g_capactity: "",
      pollution_form_5_five_ii_g_quantity: "",
      pollution_form_5_five_ii_h: "",
      pollution_form_5_five_ii_h_treatment: "",
      pollution_form_5_five_ii_h_units: "",
      pollution_form_5_five_ii_h_capactity: "",
      pollution_form_5_five_ii_h_quantity: "",
      pollution_form_5_five_ii_i: "",
      pollution_form_5_five_ii_i_treatment: "",
      pollution_form_5_five_ii_i_units: "",
      pollution_form_5_five_ii_i_capactity: "",
      pollution_form_5_five_ii_i_quantity: "",
      pollution_form_5_five_ii_j: "",
      pollution_form_5_five_ii_j_treatment: "",
      pollution_form_5_five_ii_j_units: "",
      pollution_form_5_five_ii_j_capactity: "",
      pollution_form_5_five_ii_j_quantity: "",
      pollution_form_5_five_ii_k: "",
      pollution_form_5_five_ii_k_treatment: "",
      pollution_form_5_five_ii_k_units: "",
      pollution_form_5_five_ii_k_capactity: "",
      pollution_form_5_five_ii_k_quantity: "",
      pollution_form_5_five_ii_l: "",
      pollution_form_5_five_ii_l_treatment: "",
      pollution_form_5_five_ii_l_units: "",
      pollution_form_5_five_ii_l_capactity: "",
      pollution_form_5_five_ii_l_quantity: "",
      pollution_form_5_five_iii: "",
      pollution_form_5_five_iii_red: "",
      pollution_form_5_five_iv: "",
      pollution_form_5_five_v: "",
      pollution_form_5_five_v_a: "",
      pollution_form_5_five_v_a_quantity: "",
      pollution_form_5_five_v_a_disposed: "",
      pollution_form_5_five_v_b: "",
      pollution_form_5_five_v_b_quantity: "",
      pollution_form_5_five_v_b_disposed: "",
      pollution_form_5_five_v_c: "",
      pollution_form_5_five_v_c_quantity: "",
      pollution_form_5_five_v_c_disposed: "",
      pollution_form_5_five_vi: "",
      pollution_form_5_five_vii: "",
      pollution_form_5_six: "",
      pollution_form_5_six_a: "",
      pollution_form_5_six_b: "",
      pollution_form_5_seven: "",
      pollution_form_5_seven_i: "",
      pollution_form_5_seven_ii: "",
      pollution_form_5_seven_iii: "",
      pollution_form_5_seven_iv: "",
      pollution_form_5_seven_v: "",
      pollution_form_5_seven_vi: "",
      pollution_form_5_eight: "",
      pollution_form_5_eight_i: "",
      pollution_form_5_eight_ii: "",
      pollution_form_5_eight_iii: "",
      pollution_form_5_eight_iv: "",
      pollution_form_5_nine: "",
      pollution_form_5_nine_i: "",
      pollution_form_5_nine_ii: "",
      pollution_form_5_nine_iii: "",
      pollution_form_5_ten: "",
      pollution_form_5_eleven: "",
      pollution_form_5_eleven_i: "",
      pollution_form_5_eleven_ii: "",
      pollution_form_5_twelve: "",
      pollution_form_5_certified: "",
      pollution_form_5_head_name: "",
      pollution_form_5_signature: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

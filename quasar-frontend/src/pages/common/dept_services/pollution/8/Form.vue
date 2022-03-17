<template>
  <div class="zcard row items-center q-col-gutter-md">
    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        1 Name of the City/Town and State
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        outlined
        v-model="formData.pollution_form_8_solidwaste_1"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        2 Population
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        outlined
        v-model="formData.pollution_form_8_solidwaste_2"
      />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        3 Area in sq. kilometers
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        outlined
        v-model="formData.pollution_form_8_solidwaste_3"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >4.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >I) Name & Address of the local body<span class="asterisk">
              *</span
            ></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_4i" />
        </div>
      

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            III) Telephone No.
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_4iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >IV) Fax No <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_4iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >V)E-mail: <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_4v" />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        5 Name and address of operator of the facility
        <span class="asterisk"> *</span></label
      >
      <q-input
        type="textarea"
        outlined
        v-model="formData.pollution_form_8_solidwaste_5"
      />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >6.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >I) Name & Address of the local body<span class="asterisk">
              *</span
            ></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_6i" />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Name & Address of the local body<span class="asterisk">
              *</span
            ></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_6ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            III) Telephone No.
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_6iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >IV) Fax No <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_6iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >V)E-mail: <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_6v" />
        </div>
      </div>
    </div>

    <div class="col-lg-10 col-xs-12">
      <label class="zlabel" for="name">
        7 Number of households in the city/town , Number of non-residential
        premises in the city Number of election/ administrative wards in the
        city/town
        <span class="asterisk"> *</span></label
      >
      <q-input outlined v-model="formData.pollution_form_8_solidwaste_7" />
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >8.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            I) Quantity of Solid waste
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_8i" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >II) Estimated Quantity of solid waste generated in the local body
            area per day in metric tones (in tpd)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_8ii"
          />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            III) Quantity of solid waste collected per day in tpd<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_8iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            IV) Per capita waste collected per day in gm/day
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_8iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >V) Quantity of solid waste processed in tpd
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_8v" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VI) Quantity of solid waste disposed at landfill in tpd
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_8vi"
          />
        </div>
      </div>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name"
        >9.<span class="asterisk"> *</span></label
      >

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            I) Status of Solid Waste Management (SWM) service<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_9i" />
        </div>
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            II) Segregation and storage of waste at source<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            III) Whether solid waste is stored at source in domestic/commercial/
            institutional bins If yes, Percentage of households practice storage
            of waste at source in domestic bins
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9iii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >IV) Percentage of non-residential premises practice storage of
            waste at source in commercial /institutional bins
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9iv"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >V) Percentage of households dispose of throw solid waste on the
            streets % <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_9v" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VI)Percentage of non-residential premises dispose of throw solid
            waste on the streets <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9vi"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VII)Whether solid waste is stored at source in a segregated form If
            yes, Percentage of premises segregating the waste at source<span
              class="asterisk"
            >
              *</span
            ></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9vii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >VIII)Door to Door Collection of solid waste<span class="asterisk">
              *</span
            ></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9viii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >IX)Whether door to door collection (D2D) of solid waste is being
            done in the city/town If Yes<span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_9ix"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            X) Number of wards covered in D2D collection of waste
            <span class="asterisk"> *</span></label
          >
          <q-input outlined v-model="formData.pollution_form_8_solidwaste_9x" />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            11 No. of households covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_911"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            12 No. of non-residential premises including commercial
            establishments, hotels, restaurants educational institutions/
            offices etc covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_912"
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for=""
            >13.Percentage of residential and non-residential premises covered
            in door to door collection through:</label
          >
          <div class="row q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                a)Motorized vehicle (%)
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_913a"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                b) Containerized tricycle/handcart %
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_913b"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                c) Other device %
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_913c"
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            14.If not, method of primary collection adopted
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_914"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            15. Sweeping of streets
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_915"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            16. Length of roads, streets, lanes, bye-lanes in the city that need
            to be cleaned km
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_916"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            17 Frequency of street sweepings and percentage of population
            covered
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_917"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            18 Tools used Manual sweeping Mechanical sweeping %
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_918"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            19 Whether long handle broom used by sanitation workers Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_919"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            20 Whether each sanitation worker is given handcart/tricycle for
            collection of waste Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_920"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            21 Whether handcart / tricycle is containerized Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_921"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            22. Whether the collection tool synchronizes with collection/ Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_922"
          />
        </div>

        <div class="zlabel col-12">Secondary Waste Storage facilities</div>

        <div class="col-sm-10 col-xs-12">
          <label class="zlabel" for="name">
            23.No. and type of waste storage depots in the city/town Open waste
            storage sites Masonry bins Cement concrete cylinder bins
            Dhalao/covered rooms/space Covered metal/plastic containers Upto 1.1
            m3 bins 2 to 5 m3 bins Above 5m3 containers Bin-less city
            (No.Capacity in m3)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_923"
          />
        </div>

        <div class="zlabel col-12">Bin/ population ratio</div>

  

        <div class="zlabel col-12">
          25.Ward wise details of waste storage depots (attach):
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            a)Ward no
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_925a"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            b)Area
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_925b"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            c)Population
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_925c"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            d)No. of bins placed
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_925d"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            e)Total volume of bins placed
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_925e"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            26. Total storage capacity of waste storage facilities in cubic
            meters
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_926"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            27. Total waste actually stored at the waste storage depots daily
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_927"
          />
        </div>

        <div class="col-12">
          <label class="zlabel" for="name"
            >28. Give frequency of collection of waste from the depots Number of
            bins cleared<span class="asterisk"> *</span></label
          >

          <div class="row justify q-col-gutter-md q-ml-md">
            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                a)No of bins daily<span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_928a"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name">
                b) No of bins daily alternate day
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_928b"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name"
                >c) No of bins twice a week
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_928c"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name"
                >d) No of bins once a week
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_928d"
              />
            </div>

            <div class="col-md-6 col-xs-12">
              <label class="zlabel" for="name"
                >e) No of bins Occasionally
                <span class="asterisk"> *</span></label
              >
              <q-input
                outlined
                v-model="formData.pollution_form_8_solidwaste_928e"
              />
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            29. Whether storage depots have facility for storage of segregated
            waste in green, blue and black bins Yes/ No (if yes, add details)
            No. of green bins: No of blue bins: No. of black bins:
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_929"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            30.Whether lifting of solid waste from storage depots is manual or
            mechanical. Give percentage
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_930"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            31.If mechanical - specify the method used front-end loaders/ Top
            loaders
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_931"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            32. Whether solid waste is lifted from door to door and transported
            to treatment plant directly in a segregated form Yes/ No (if yes,
            specify)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_932"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            33.Waste Transportation per day Type and Number of vehicles used (pl
            tick or add)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_933"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            34. Animal cart Tractors No. Trips made waste transported Non
            tipping Truck Tipping Truck Dumper Placers Refuse collectors
            Compactors Others JCB/loader
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_934"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            35. Frequency of transportation of waste (Frequency (%) of waste
            transported Daily Alternate day Twice a week Once a week
            Occasionally)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_935"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            36. Quantity of waste transported each day in tpd
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_936"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            37. Percentage of total waste transported daily %
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_937"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            38 Waste Treatment Technologies used
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_938"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            39 Whether solid waste is processed Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_939"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            40 If yes, Quantity of waste processed daily in tpd
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_940"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            41. Land(s) available with the local body for waste processing (in
            Hectares)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_941"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            42. Land currently utilized for waste processing
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_942"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            43. Solid waste processing facilities in operation
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_943"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            44 Solid waste processing facilities under construction
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_944"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            45. Distance of processing facilities from city/town boundary
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_945"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            46.Details of technologies adopted
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_946"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            47. Composting, Qty. raw material processed Qty. fina product
            produced Qty. sold Qty. of residual waste landfilled
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_947"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            48 Vermi composting Qty. raw material processed Qty. final product
            produced Qty. sold Quantity of residual waste landfilled
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_948"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            49 Bio-methanation Qty. raw material processed Qty. final product
            produced Qty. sold Quantity of residual waste landfilled
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_949"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            50. Refuse Derived Fuel Qty. raw material processed Qty. final
            product produced Qty. sold Quantity of residual waste landfilled
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_950"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            51. Waste to Energy technology such as incineration, gasification,
            pyrolysis or any other technology (give detail) Qty. raw material
            processed Qty. final product produced Qty. sold Quantity of residual
            waste landfilled
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_951"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            52. Co-processing Qty. raw material processed
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_952"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            53. Combustible waste supplied to cement plant
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_953"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            54. Combustible waste supplied to solid waste-based power plants
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_954"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            55. Others (Qty)
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_955"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            56.Solid waste disposal facilities
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_956"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            57. No. of dumpsites sites available with the local body
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_957"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            58. No. of sanitary landfill sites available with the local body
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_957"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            59. Area of each such sites available for waste disposal
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_958"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            60. Area of land currently used for waste disposal
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_960"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            61. Distance of dumpsite/landfill facility from city/town kms
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_961"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            62. Distance from the nearest habitation kms
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_962"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            63. Distance from water body kms
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_963"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            64. Distance from state/national highway kms
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_964"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            65. Distance from Airport kms
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_965"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            66. Distance from important religious places or historical monument
            kms
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_966"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            67. Whether it falls in flood prone area Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_967"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            68 Whether it falls in earthquake fault line area Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_968"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            69. Quantity of waste landfilled each day tpd
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_969"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            70.Whether landfill site is fenced Yes / No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_970"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            71. Whether Lighting facility is available on site Yes / No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_971"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            72. Whether Weigh bridge facility available Yes / No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_972"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            73. Vehicles and equipments used at landfill (specify) Bulldozer,
            Compacters etc. available <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_973"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            74. Manpower deployed at landfill site Y es/No (if yes, attach
            details) <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_974"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            75. Whether covering is done on daily basis Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_974"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            76. If not, Frequency of covering the waste deposited at the
            landfill
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_977"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            77. Cover material used
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_976"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            78. Whether adequate covering material is available Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_977"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            79. Provisions for gas venting provided Yes/No, (if yes, attach
            technical data sheet)
            <span class="asterisk"> *</span></label
          >
          <q-file v-model="formData.pollution_form_8_solidwaste_978" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            80. Provision for leachate collection Yes/No, (if yes, attach
            technical data sheet)
            <span class="asterisk"> *</span></label
          >
          <q-file v-model="formData.pollution_form_8_solidwaste_979" outlined>
            <template v-slot:prepend>
              <q-icon name="attach_file" />
            </template>
          </q-file>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        10 Whether an Action Plan has been prepared for improving solid waste
        management practices in the city Yes/No (if Yes attach Action Plan
        details)
      </label>
      <q-file v-model="formData.pollution_form_8_solidwaste_10" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-12">
      <label class="zlabel" for="name">11<span class="asterisk"> </span></label>

      <div class="row justify q-col-gutter-md q-ml-md">
        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            I) What separate provisions are made for: Dairy related activities:
            city/town<span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_11_i"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name">
            II) Slaughter houses waste: Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_11_ii"
          />
        </div>

        <div class="col-md-6 col-xs-12">
          <label class="zlabel" for="name"
            >III) C&D waste (construction debris): Yes/No
            <span class="asterisk"> *</span></label
          >
          <q-input
            outlined
            v-model="formData.pollution_form_8_solidwaste_11_iii"
          />
        </div>
      </div>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        12 Details of Post Closure Plan Attach Plan
      </label>
      <q-file v-model="formData.pollution_form_8_solidwaste_12" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        13.How many slums are identified and whether these are provided with
        Solid Waste Management facilities: Yes/ No(if Yes, attach details)
      </label>
      <q-file v-model="formData.pollution_form_8_solidwaste_13" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        14 Give details of manpower deployed for collection including street
        sweeping, secondary storage, transportation, processing and disposal of
        waste
      </label>
      <q-input outlined v-model="formData.pollution_form_8_solidwaste_14" />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        15 Mention briefly, the difficulties being experienced by the local body
        in complying with provisions of these rules
      </label>
      <q-input outlined v-model="formData.pollution_form_8_solidwaste_15" />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name">
        16 Mention briefly, if any innovative idea is implemented to tackle a
        problem related to solid waste, which could be replicated by other local
        bodies.
      </label>
      <q-input outlined v-model="formData.pollution_form_8_solidwaste_16" />
    </div>

    <div class="col-md-6 col-xs-12">
      <label class="zlabel" for="name"> Signature </label>
      <q-file v-model="formData.pollution_form_8_solidwaste_signature" outlined>
        <template v-slot:prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
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
      application_code: "POLLUTION_FORM_8",
      department_id: 11,
      pollution_form_8_solidwaste_1: "",
      pollution_form_8_solidwaste_2: "",
      pollution_form_8_solidwaste_3: "",
      pollution_form_8_solidwaste_4i: "",
      pollution_form_8_solidwaste_4ii: "",
      pollution_form_8_solidwaste_4iii: "",
      pollution_form_8_solidwaste_4iv: "",
      pollution_form_8_solidwaste_4v: "",
      pollution_form_8_solidwaste_5: "",
      pollution_form_8_solidwaste_6i: "",
      pollution_form_8_solidwaste_6ii: "",
      pollution_form_8_solidwaste_6iii: "",
      pollution_form_8_solidwaste_6iv: "",
      pollution_form_8_solidwaste_6v: "",
      pollution_form_8_solidwaste_7: "",
      pollution_form_8_solidwaste_8: "",
      pollution_form_8_solidwaste_8i: "",
      pollution_form_8_solidwaste_8ii: "",
      pollution_form_8_solidwaste_8iii: "",
      pollution_form_8_solidwaste_8iv: "",
      pollution_form_8_solidwaste_8v: "",
      pollution_form_8_solidwaste_8vi: "",
      pollution_form_8_solidwaste_9: "",
      pollution_form_8_solidwaste_9i: "",
      pollution_form_8_solidwaste_9ii: "",
      pollution_form_8_solidwaste_9iii: "",
      pollution_form_8_solidwaste_9iv: "",
      pollution_form_8_solidwaste_9v: "",
      pollution_form_8_solidwaste_9vi: "",
      pollution_form_8_solidwaste_9vii: "",
      pollution_form_8_solidwaste_9viii: "",
      pollution_form_8_solidwaste_9ix: "",
      pollution_form_8_solidwaste_9x: "",
      pollution_form_8_solidwaste_911: "",
      pollution_form_8_solidwaste_912: "",
      pollution_form_8_solidwaste_913a: "",
      pollution_form_8_solidwaste_913b: "",
      pollution_form_8_solidwaste_913c: "",
      pollution_form_8_solidwaste_914: "",
      pollution_form_8_solidwaste_915: "",
      pollution_form_8_solidwaste_916: "",
      pollution_form_8_solidwaste_917: "",
      pollution_form_8_solidwaste_918: "",
      pollution_form_8_solidwaste_919: "",
      pollution_form_8_solidwaste_920: "",
      pollution_form_8_solidwaste_921: "",
      pollution_form_8_solidwaste_922: "",
      pollution_form_8_solidwaste_923: "",
      pollution_form_8_solidwaste_924: "",
      pollution_form_8_solidwaste_925a: "",
      pollution_form_8_solidwaste_925b: "",
      pollution_form_8_solidwaste_925c: "",
      pollution_form_8_solidwaste_925d: "",
      pollution_form_8_solidwaste_925e: "",
      pollution_form_8_solidwaste_926: "",
      pollution_form_8_solidwaste_927: "",
      pollution_form_8_solidwaste_928a: "",
      pollution_form_8_solidwaste_928b: "",
      pollution_form_8_solidwaste_928c: "",
      pollution_form_8_solidwaste_928d: "",
      pollution_form_8_solidwaste_928e: "",
      pollution_form_8_solidwaste_929: "",
      pollution_form_8_solidwaste_930: "",
      pollution_form_8_solidwaste_931: "",
      pollution_form_8_solidwaste_932: "",
      pollution_form_8_solidwaste_933: "",
      pollution_form_8_solidwaste_934: "",
      pollution_form_8_solidwaste_935: "",
      pollution_form_8_solidwaste_936: "",
      pollution_form_8_solidwaste_937: "",
      pollution_form_8_solidwaste_938: "",
      pollution_form_8_solidwaste_939: "",
      pollution_form_8_solidwaste_940: "",
      pollution_form_8_solidwaste_941: "",
      pollution_form_8_solidwaste_942: "",
      pollution_form_8_solidwaste_944: "",
      pollution_form_8_solidwaste_943: "",
      pollution_form_8_solidwaste_944: "",
      pollution_form_8_solidwaste_945: "",
      pollution_form_8_solidwaste_946: "",
      pollution_form_8_solidwaste_947: "",
      pollution_form_8_solidwaste_948: "",
      pollution_form_8_solidwaste_949: "",
      pollution_form_8_solidwaste_950: "",
      pollution_form_8_solidwaste_951: "",
      pollution_form_8_solidwaste_952: "",
      pollution_form_8_solidwaste_954: "",
      pollution_form_8_solidwaste_953: "",
      pollution_form_8_solidwaste_954: "",
      pollution_form_8_solidwaste_955: "",
      pollution_form_8_solidwaste_956: "",
      pollution_form_8_solidwaste_957: "",
      pollution_form_8_solidwaste_958: "",
      pollution_form_8_solidwaste_959: "",
      pollution_form_8_solidwaste_960: "",
      pollution_form_8_solidwaste_961: "",
      pollution_form_8_solidwaste_962: "",
      pollution_form_8_solidwaste_964: "",
      pollution_form_8_solidwaste_963: "",
      pollution_form_8_solidwaste_964: "",
      pollution_form_8_solidwaste_965: "",
      pollution_form_8_solidwaste_966: "",
      pollution_form_8_solidwaste_967: "",
      pollution_form_8_solidwaste_968: "",
      pollution_form_8_solidwaste_969: "",
      pollution_form_8_solidwaste_970: "",
      pollution_form_8_solidwaste_971: "",
      pollution_form_8_solidwaste_972: "",
      pollution_form_8_solidwaste_973: "",
      pollution_form_8_solidwaste_974: "",
      pollution_form_8_solidwaste_973: "",
      pollution_form_8_solidwaste_974: "",
      pollution_form_8_solidwaste_975: "",
      pollution_form_8_solidwaste_976: "",
      pollution_form_8_solidwaste_977: "",
      pollution_form_8_solidwaste_978: "",
      pollution_form_8_solidwaste_979: null,
      pollution_form_8_solidwaste_980: "",
      pollution_form_8_solidwaste_10: null,
      pollution_form_8_solidwaste_11_i: "",
      pollution_form_8_solidwaste_11_ii: "",
      pollution_form_8_solidwaste_11_iii: "",
      pollution_form_8_solidwaste_12: null,
      pollution_form_8_solidwaste_13: null,
      pollution_form_8_solidwaste_14: "",
      pollution_form_8_solidwaste_15: "",
      pollution_form_8_solidwaste_16: "",
      pollution_form_8_solidwaste_signature: null,
    });
    onMounted(() => {});
    return {
      formData,
      maxDate: () => date.formatDate(Date.now(), "YYYY-MM-DD"),
    };
  },
};
</script>

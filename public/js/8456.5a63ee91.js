"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[8456],{8456:(e,t,a)=>{a.r(t),a.d(t,{default:()=>P});var i=a(3673),n=a(8880);const l={class:"zcard row items-center q-col-gutter-md"},o=(0,i.Wm)("div",{class:"col-12 text-h6 q-pb-none text-center"},"[ See Rule 7(1)]",-1),s=(0,i.Wm)("p",{class:"col-12 text-caption q-py-none text-center"},"SCHEDULE -7",-1),r=(0,i.Wm)("div",{class:"col-12 ztitle text-center"}," INFORMATION TO BE FURNISHED FOR THE NOTIFICATION OF SITES ",-1),c={class:"row q-col-gutter-lg"},m={class:"col-xs-12"},d={class:"text-center q-mt-md col-12"};function p(e,t,a,p,u,h){const f=(0,i.up)("Form"),g=(0,i.up)("q-btn"),_=(0,i.up)("q-form");return(0,i.wg)(),(0,i.j4)("div",l,[o,s,r,(0,i.Wm)(_,{onSubmit:(0,n.iM)(p.submit,["prevent"]),class:"row"},{default:(0,i.w5)((()=>[(0,i.Wm)("div",c,[(0,i.Wm)("div",m,[(0,i.Wm)(f,{ref:"applicantRef"},null,512)])]),(0,i.Wm)("div",d,[(0,i.Wm)(g,{type:"submit",color:"green-5",label:"Submit"}),(0,i.Wm)(g,{class:"q-mx-md",color:"red-4",label:"Reset"})])])),_:1},8,["onSubmit"])])}var u=a(1959),h=a(7874),f=a(5616),g=a(5474),_=a(8825),b=a(9582);const y={class:"zcard mx-auto q-mx-xl q-col-gutter-md"},v=(0,i.uE)('<div class=" " style="max-width:100rem;"><h3>PART -I</h3><p>Particulars to be included in a notification of a site</p><p>1. The name and address of the employer making the notification.</p><p>2. The full postal address of the site where the notifiable industrial activity will be carried on.</p><p>3. The area of the site covered by the notification and of any adjacent site which is required to be taken into account by virtue of b(ii) of schedule 2 and 3.</p><p>4. The date on which it is anticipated that the notifiable industrial activity will commence, or if it has already commenced a statement to that effect.</p><p>5. The name and maximum quantity liable to be on the site of each dangerous substance for which notification is being made.</p><p>6. Organisation structure namely organisation diagram for the proposed industrial activity and set up for ensuring safety and health.</p><p>7. Information relating to the potential for major accidents, namely-</p><ol class="q-ml-xl"><li>identification of major accident hazards ; </li><li>the conditions or the events which could be significant in brining one about;</li><li>a brief description of the measures taken.</li></ol><p>8. Information relating to the site namely-</p><ol class="q-ml-xl"><li> a map of the site and its surrounding area to a scale large enough to show any features that may be significant in the assessment of the hazard or risk associated with the site,- <ul class="q-ml-lg"><li>area likely to be affected by the major accident.</li><li>Population distribution in the vicinity</li></ul></li><li>a scale plan of the site showing the location and quantities of all significant inventories of the hazardous chemicals;</li><li>a description of the process or storage involving the hazardous chemicals and an indication of the conditions under which it is normally held;</li><li>the maximum number of persons likely to be present on site.</li></ol><p>9. The arrangement for training of workers and equipment necessary to ensure safety of such workers.</p><h3>PART II</h3><p>Particulars to be included regarding pipeline</p><ol><li>The names and address of the persons making the notification.</li><li> The full postal address of the place from which the pipeline activity is controlled, addresses of the places where the pipeline starts and finishes and a map showing the pipeline route drawn to a scale of not less than 1:400000. </li><li>The date on which it is anticipated that the notifiable activity will commence, or if it is already commenced a statement to that effect.</li><li>The total length of the pipeline, its diameter and normal operating pressure and the name and maximum quantity liable to be in the pipeline of each hazardous chemical for which notification is being made</li></ol></div><div class="col-xs-12"></div>',2);function w(e,t,a,n,l,o){return(0,i.wg)(),(0,i.j4)("div",y,[v])}const T={setup(e,t){(0,h.oR)();const a=(0,u.qj)({application_code:"POLLUTION_APPROVAL_NOTIFICATION",department_id:10,legal_name_manufcaturing:"",legal_address:"",legal_date_establishment:"",legal_father_husband_name:"",legal_current_registration_number:"",legal_nature_manufacturing:"",legal_type:"",legal_type_weight:"",legal_type_measures:"",legal_type_weighing_instrument:"",legal_type_measuring_instrument:"",legal_number_of_emp:"",legal_number_of_skilled_emp:"",legal_number_of_semiskilled_emp:"",legal_number_of_unskilled_emp:"",legal_number_of_specialist:"",legal_trademark:"",legal_machinery_details:"",legal_foundry_details:"",legal_steel_facilities:"",legal_electricity_availability:"",legal_loan_received:"",legal_bankers:"",legal_TAX_number:"",legal_previous_licence_application:"",legal_item_proposed_selling:"",legal_model_approved_details:"",legal_signature_designation:null});return(0,i.bv)((()=>{})),{group:(0,u.iH)([]),formData:a,maxDate:()=>f.ZP.formatDate(Date.now(),"YYYY-MM-DD")}}};var q=a(4689),x=a(4974),k=a(4554),I=a(7518),D=a.n(I);T.render=w;const O=T;D()(T,"components",{QInput:q.Z,QFile:x.Z,QIcon:k.Z});a(9696);const F={components:{Form:O},setup(e,t){const a=(0,u.iH)(null),i=(0,h.oR)(),n=(0,_.Z)(),l=(0,b.tv)(),o=(i.getters["applicantData/getCurrentDraft"],i.getters["auth/getCurrentUser"],()=>{var e=(0,u.qj)({});e=Object.assign(e,a.value.formData);var t=new FormData;for(let a in e)t.append(`${a}`,e[a]);g.api.post("/applications/submit",t).then((e=>{console.log("response value",e.data),n.notify({message:"Application submitted successfully",color:"green"}),l.push({name:"investor:ongoing"})})).catch((e=>console.log("error",e)))});return{applicantRef:a,submit:o,router:l,options:["Google","Facebook","Twitter","Apple","Oracle"],maxDate:()=>f.ZP.formatDate(Date.now(),"YYYY-MM-DD")}}};var R=a(5269),A=a(2165);F.render=p;const P=F;D()(F,"components",{QForm:R.Z,QBtn:A.Z})}}]);
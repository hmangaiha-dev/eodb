"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[4526],{4526:(e,a,o)=>{o.r(a),o.d(a,{default:()=>I});var t=o(3673);const l={class:"flex flex-inline items-center"},s=(0,t.Wm)("h1",{class:"ztitle"},"New post",-1),r={class:"zdetailcard"},n={class:"row q-col-gutter-md"},i={class:"col-xs-12 col-md-6"},d={class:"col-xs-12 col-md-6"},u={class:" col-xs-12 col-md-6"},m={class:"row items-center justify-end"},f={class:"col-xs-12 col-md-6 q-pa-md q-gutter-md"},c={class:" q-pa-sm rounded-borders"},p=(0,t.Uk)(" Status "),v={class:"col-xs-12 col-md-6"},g={class:"flex-inline col-md-12"};function W(e,a,o,W,_,b){const w=(0,t.up)("q-space"),D=(0,t.up)("q-breadcrumbs-el"),q=(0,t.up)("q-breadcrumbs"),y=(0,t.up)("q-select"),V=(0,t.up)("q-btn"),Z=(0,t.up)("q-date"),Q=(0,t.up)("q-popup-proxy"),h=(0,t.up)("q-icon"),x=(0,t.up)("q-input"),j=(0,t.up)("q-option-group"),k=(0,t.up)("q-form"),P=(0,t.up)("q-page"),S=(0,t.Q2)("close-popup");return(0,t.wg)(),(0,t.j4)(P,{padding:"",class:"container-lg"},{default:(0,t.w5)((()=>[(0,t.Wm)("div",l,[s,(0,t.Wm)(w),(0,t.Wm)(q,{align:"right",gutter:"xs"},{default:(0,t.w5)((()=>[(0,t.Wm)(D,{to:{name:"posting:read"},label:"Postings"}),(0,t.Wm)(D,{label:"New post"})])),_:1})]),(0,t.Wm)("div",r,[(0,t.Wm)(k,{ref:"formRef",onReset:W.reset,onSubmit:W.submit},{default:(0,t.w5)((()=>{var e,o,l;return[(0,t.Wm)("div",n,[(0,t.Wm)("div",i,[(0,t.Wm)(y,{"dropdown-icon":"arrow_drop_down",modelValue:W.formData.staff,"onUpdate:modelValue":a[1]||(a[1]=e=>W.formData.staff=e),outlined:"",options:W.staffs,rules:[e=>!!e||"Please select staff"],error:W.localData.errors.hasOwnProperty("staff_id"),"error-message":null===(e=W.localData.errors)||void 0===e?void 0:e.staff_id,label:"Select Staff"},null,8,["modelValue","options","rules","error","error-message"])]),(0,t.Wm)("div",d,[(0,t.Wm)(y,{"dropdown-icon":"arrow_drop_down",modelValue:W.formData.office,"onUpdate:modelValue":a[2]||(a[2]=e=>W.formData.office=e),outlined:"",options:W.offices,rules:[e=>!!e||"Please select offices"],error:W.localData.errors.hasOwnProperty("office_id"),"error-message":null===(o=W.localData.errors)||void 0===o||null===(l=o.office_id)||void 0===l?void 0:l.toString(),label:"Select Office"},null,8,["modelValue","options","rules","error","error-message"])]),(0,t.Wm)("div",u,[(0,t.Wm)(x,{outlined:"",modelValue:W.formData.joining_date,"onUpdate:modelValue":a[4]||(a[4]=e=>W.formData.joining_date=e),label:"Joining date",error:W.localData.errors.hasOwnProperty("joining_date"),mask:"date",rules:["date"]},{append:(0,t.w5)((()=>[(0,t.Wm)(h,{name:"event",class:"cursor-pointer"},{default:(0,t.w5)((()=>[(0,t.Wm)(Q,{ref:"qDateProxy","transition-show":"scale","transition-hide":"scale"},{default:(0,t.w5)((()=>[(0,t.Wm)(Z,{modelValue:W.formData.joining_date,"onUpdate:modelValue":a[3]||(a[3]=e=>W.formData.joining_date=e)},{default:(0,t.w5)((()=>[(0,t.Wm)("div",m,[(0,t.wy)((0,t.Wm)(V,{label:"Close",color:"primary",flat:""},null,512),[[S]])])])),_:1},8,["modelValue"])])),_:1},512)])),_:1})])),_:1},8,["modelValue","error"])]),(0,t.Wm)("div",f,[(0,t.Wm)("div",c,[p,(0,t.Wm)(j,{name:"status",modelValue:W.formData.status,"onUpdate:modelValue":a[5]||(a[5]=e=>W.formData.status=e),options:W.statuses,color:"primary",inline:""},null,8,["modelValue","options"])])]),(0,t.Wm)("div",v,[(0,t.Wm)(x,{outlined:"",label:"Remark",modelValue:W.formData.remark,"onUpdate:modelValue":a[6]||(a[6]=e=>W.formData.remark=e)},null,8,["modelValue"])]),(0,t.Wm)("div",g,[(0,t.Wm)(V,{type:"submit",flat:"",color:"primary",label:"Submit"}),(0,t.Wm)(V,{type:"reset",flat:"",color:"negative",label:"Reset"})])])]})),_:1},8,["onReset","onSubmit"])])])),_:1})}var _=o(515),b=o.n(_),w=o(1959),D=o(7874),q=o(5474),y=(o(52),o(8825));const V={setup(e,a){const o=(0,D.oR)(),t=(0,y.Z)(),l=(0,w.iH)(null),s=(0,w.qj)({errors:[]}),r=(0,w.qj)({staff:null,office:null,joining_date:"",status:"on-duty",remark:""}),n=()=>{const e=b()({staff_id:r.staff.value,office_id:r.office.value},r);q.api.post("posting",e).then((e=>{var a;t.notify({type:"positive",message:null===(a=e.data)||void 0===a?void 0:a.message}),i()})).catch((e=>{var a,o,l,r,n,i,d;null!==e&&void 0!==e&&null!==(a=e.response)&&void 0!==a&&null!==(o=a.data)&&void 0!==o&&o.errors&&(s.errors=null===(l=e.response.data)||void 0===l?void 0:l.errors),(null===e||void 0===e||null===(r=e.response)||void 0===r||null===(n=r.data)||void 0===n?void 0:n.message)&&t.notify({type:"negative",message:null===(i=e.response)||void 0===i||null===(d=i.data)||void 0===d?void 0:d.message})}))},i=()=>{r.staff=null,r.office=null,r.joining_date=null,r.status="on-duty",r.remark="",l.value.reset()};return{formData:r,formRef:l,reset:i,submit:n,localData:s,staffs:(0,w.Fl)((()=>o.state.staffData.staffs)),offices:(0,w.Fl)((()=>o.state.staffData.offices)),statuses:(0,w.Fl)((()=>o.state.staffData.postingStatuses)),roles:(0,w.Fl)((()=>o.state.staffData.roles))}}};var Z=o(4379),Q=o(2025),h=o(1481),x=o(5926),j=o(5269),k=o(3314),P=o(4689),S=o(4554),R=o(3944),U=o(6915),F=o(2165),O=o(5682),C=o(677),B=o(7518),z=o.n(B);V.render=W;const I=V;z()(V,"components",{QPage:Z.Z,QSpace:Q.Z,QBreadcrumbs:h.Z,QBreadcrumbsEl:x.Z,QForm:j.Z,QSelect:k.Z,QInput:P.Z,QIcon:S.Z,QPopupProxy:R.Z,QDate:U.Z,QBtn:F.Z,QOptionGroup:O.Z}),z()(V,"directives",{ClosePopup:C.Z})}}]);
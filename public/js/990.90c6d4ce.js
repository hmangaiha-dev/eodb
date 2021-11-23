"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[990],{3990:(e,a,l)=>{l.r(a),l.d(a,{default:()=>F});l(246);var o=l(3673);const r={class:"flex flex-inline items-center"},t=(0,o.Wm)("h1",{class:"ztitle"},"Edit Office",-1),s={class:"row q-col-gutter-md"},n=(0,o.Wm)("div",{class:"col-xs-12 zsubtitle"},"Office detail",-1),d={class:"col-xs-12 col-md-6"},c={class:"col-xs-12 col-md-6"},m={class:"col-xs-12 col-md-6"},i={class:"col-xs-12 col-md-6"},u={class:"col-xs-12"},p=(0,o.Wm)("div",{class:"col-xs-12 zsubtitle"},"Bank detail",-1),v={class:"col-xs-12 col-md-6"},b={class:"col-xs-12 col-md-6"},f={class:"col-xs-12 col-md-6"},g={class:"col-xs-12 col-md-6"},D={class:"col-xs-12 col-md-6"};function W(e,a,l,W,k,q){const V=(0,o.up)("q-space"),_=(0,o.up)("q-breadcrumbs-el"),h=(0,o.up)("q-breadcrumbs"),x=(0,o.up)("q-input"),y=(0,o.up)("q-separator"),w=(0,o.up)("q-btn"),S=(0,o.up)("q-card-actions"),Z=(0,o.up)("q-form"),Q=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(Q,{class:"container-lg"},{default:(0,o.w5)((()=>[(0,o.Wm)("div",r,[t,(0,o.Wm)(V),(0,o.Wm)(h,{align:"right",gutter:"xs"},{default:(0,o.w5)((()=>[(0,o.Wm)(_,{to:{name:"office:read"},label:"Offices"}),(0,o.Wm)(_,{label:"Edit office"})])),_:1})]),(0,o.Wm)(Z,{class:"zdetailcard q-pa-md",onReset:W.resetForm,onSubmit:W.handleSubmit},{default:(0,o.w5)((()=>{var e,l,r,t,k,q,V,_;return[(0,o.Wm)("div",s,[n,(0,o.Wm)("div",d,[(0,o.Wm)(x,{modelValue:W.formData.code,"onUpdate:modelValue":a[1]||(a[1]=e=>W.formData.code=e),class:"q-mt-md",label:"Code",outlined:"",autofocus:"",error:W.localData.errors.hasOwnProperty("code"),"error-message":null===(e=W.localData.errors)||void 0===e||null===(l=e.name)||void 0===l?void 0:l.toString(),onBlur:a[2]||(a[2]=e=>delete W.localData.errors["code"]),rules:[e=>!!e||"Code is required"]},null,8,["modelValue","error","error-message","rules"])]),(0,o.Wm)("div",c,[(0,o.Wm)(x,{modelValue:W.formData.name,"onUpdate:modelValue":a[3]||(a[3]=e=>W.formData.name=e),class:"q-mt-md",label:"Name",outlined:"",error:W.localData.errors.hasOwnProperty("name"),"error-message":null===(r=W.localData.errors)||void 0===r||null===(t=r.name)||void 0===t?void 0:t.toString(),onBlur:a[4]||(a[4]=e=>delete W.localData.errors["name"]),rules:[e=>!!e||"Name is required"]},null,8,["modelValue","error","error-message","rules"])]),(0,o.Wm)("div",m,[(0,o.Wm)(x,{modelValue:W.formData.description,"onUpdate:modelValue":a[5]||(a[5]=e=>W.formData.description=e),class:"q-mt-md",label:"Description",type:"textarea",outlined:"",error:W.localData.errors.hasOwnProperty("description"),"error-message":null===(k=W.localData.errors)||void 0===k||null===(q=k.description)||void 0===q?void 0:q.toString(),onBlur:a[6]||(a[6]=e=>delete W.localData.errors["description"])},null,8,["modelValue","error","error-message"])]),(0,o.Wm)("div",i,[(0,o.Wm)(x,{modelValue:W.formData.contact,"onUpdate:modelValue":a[7]||(a[7]=e=>W.formData.contact=e),class:"q-mt-md",label:"Contact",outlined:"",error:W.localData.errors.hasOwnProperty("contact"),"error-message":null===(V=W.localData.errors)||void 0===V||null===(_=V.description)||void 0===_?void 0:_.toString(),onBlur:a[8]||(a[8]=e=>delete W.localData.errors["contacts"])},null,8,["modelValue","error","error-message"])]),(0,o.Wm)("div",u,[(0,o.Wm)(y)]),p,(0,o.Wm)("div",v,[(0,o.Wm)(x,{modelValue:W.bankData.bank_name,"onUpdate:modelValue":a[9]||(a[9]=e=>W.bankData.bank_name=e),class:"q-mt-md",label:"Name of bank",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",b,[(0,o.Wm)(x,{modelValue:W.bankData.ac_holder,"onUpdate:modelValue":a[10]||(a[10]=e=>W.bankData.ac_holder=e),class:"q-mt-md",label:"Ac Holder",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",f,[(0,o.Wm)(x,{modelValue:W.bankData.ac_no,"onUpdate:modelValue":a[11]||(a[11]=e=>W.bankData.ac_no=e),class:"q-mt-md",label:"Ac no ",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",g,[(0,o.Wm)(x,{modelValue:W.bankData.ifsc,"onUpdate:modelValue":a[12]||(a[12]=e=>W.bankData.ifsc=e),class:"q-mt-md",label:"IFSC",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",D,[(0,o.Wm)(x,{modelValue:W.bankData.remark,"onUpdate:modelValue":a[13]||(a[13]=e=>W.bankData.remark=e),class:"q-mt-md",label:"Remark",outlined:""},null,8,["modelValue"])])]),(0,o.Wm)(S,{class:"q-mt-md"},{default:(0,o.w5)((()=>[(0,o.Wm)(w,{color:"primary",flat:"",type:"submit",label:"Save"}),(0,o.Wm)(w,{color:"negative",flat:"",type:"reset",label:"Reset"})])),_:1})]})),_:1},8,["onReset","onSubmit"])])),_:1})}var k=l(515),q=l.n(k),V=l(1959),_=l(7874),h=l(5474),x=l(8825),y=l(9582);const w={setup(e,a){(0,_.oR)();const l=(0,x.Z)(),r=(0,y.yj)(),t=(0,y.tv)(),s=(0,V.qj)({errors:{}}),n=(0,V.iH)([]),d=(0,V.qj)({bank_name:"",ac_holder:"",ac_no:"",contact:"",ifsc:"",description:""});let c=(0,V.qj)({id:null,code:"",name:"",description:"",contacts:""});(0,o.bv)((()=>{const e=r.params.id;h.api.get(`office/${e}`).then((e=>{console.log(e.data);const{id:a,code:l,name:o,description:r,contact:t,bank_detail:s}=e.data;if(c.id=a,c.code=l,c.name=o,c.description=r,c.contact=t,s){const{bank_name:e,ac_holder:a,ac_no:l,ifsc:o}=s;d.bank_name=e,d.ifsc=o,d.ac_holder=a,d.ac_no=l}})).catch((e=>{var a,o,r,t;(null===e||void 0===e||null===(a=e.response)||void 0===a||null===(o=a.data)||void 0===o?void 0:o.message)&&l.notify({type:"negative",message:null===(r=e.response)||void 0===r||null===(t=r.data)||void 0===t?void 0:t.message})}))}));const m=e=>{const{id:a}=r.params;c.bank_detail=q()({},d),h.api.put(`office/${a}`,c).then((e=>{var a;l.notify({type:"positive",message:null===e||void 0===e||null===(a=e.data)||void 0===a?void 0:a.message}),setTimeout((()=>{t.back()}),1e3)})).catch((e=>{var a,o,r,t,n,d,c;console.log("error",e.response),null!==e&&void 0!==e&&null!==(a=e.response)&&void 0!==a&&null!==(o=a.data)&&void 0!==o&&o.errors&&(s.errors=null===(r=e.response.data)||void 0===r?void 0:r.errors),(null===e||void 0===e||null===(t=e.response)||void 0===t||null===(n=t.data)||void 0===n?void 0:n.message)&&l.notify({type:"negative",message:null===(d=e.response)||void 0===d||null===(c=d.data)||void 0===c?void 0:c.message})}))},i=e=>{var a;null===e||void 0===e||null===(a=e.target)||void 0===a||a.reset(),c.code="",c.name="",c.description="",c.contact="",d.ac_no="",d.ac_holder="",d.ifsc="",d.bank_name="",d.description=""};return{localData:s,bankData:d,formData:c,resetForm:i,handleSubmit:m,tempRoles:n}}};var S=l(4379),Z=l(2025),Q=l(1481),U=l(5926),B=l(5269),C=l(4689),O=l(5869),R=l(9367),j=l(2165),P=l(7518),z=l.n(P);w.render=W;const F=w;z()(w,"components",{QPage:S.Z,QSpace:Z.Z,QBreadcrumbs:Q.Z,QBreadcrumbsEl:U.Z,QForm:B.Z,QInput:C.Z,QSeparator:O.Z,QCardActions:R.Z,QBtn:j.Z})}}]);
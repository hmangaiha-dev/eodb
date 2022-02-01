"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[4058],{4058:(e,a,l)=>{l.r(a),l.d(a,{default:()=>z});l(246);var o=l(3673);const r={class:"flex flex-inline items-center"},s=(0,o.Wm)("h1",{class:"ztitle"},"New Office",-1),t={class:"row q-col-gutter-md"},d=(0,o.Wm)("div",{class:"col-xs-12 zsubtitle"},"Office detail",-1),n={class:"col-xs-12 col-md-6"},m={class:"col-xs-12 col-md-6"},c={class:"col-xs-12 col-md-6"},i={class:"col-xs-12 col-md-6"},u={class:"col-xs-12"},p=(0,o.Wm)("div",{class:"col-xs-12 zsubtitle"},"Bank detail",-1),v={class:"col-xs-12 col-md-6"},b={class:"col-xs-12 col-md-6"},f={class:"col-xs-12 col-md-6"},D={class:"col-xs-12 col-md-6"},W={class:"col-xs-12 col-md-6"},V={class:"col-xs-12 col-md-6"};function q(e,a,l,q,g,k){const _=(0,o.up)("q-space"),h=(0,o.up)("q-breadcrumbs-el"),x=(0,o.up)("q-breadcrumbs"),w=(0,o.up)("q-input"),y=(0,o.up)("q-separator"),S=(0,o.up)("q-btn"),U=(0,o.up)("q-card-actions"),Z=(0,o.up)("q-form"),Q=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(Q,{class:"container-lg"},{default:(0,o.w5)((()=>[(0,o.Wm)("div",r,[s,(0,o.Wm)(_),(0,o.Wm)(x,{align:"right",gutter:"xs"},{default:(0,o.w5)((()=>[(0,o.Wm)(h,{to:{name:"office:read"},label:"Offices"}),(0,o.Wm)(h,{label:"New office"})])),_:1})]),(0,o.Wm)(Z,{class:"zcard q-pa-md",ref:"formRef",onReset:q.resetForm,onSubmit:q.handleSubmit},{default:(0,o.w5)((()=>{var e,l,r,s,g,k,_,h;return[(0,o.Wm)("div",t,[d,(0,o.Wm)("div",n,[(0,o.Wm)(w,{modelValue:q.formData.code,"onUpdate:modelValue":a[1]||(a[1]=e=>q.formData.code=e),class:"q-mt-md",label:"Code",outlined:"",error:q.localData.errors.hasOwnProperty("code"),"error-message":null===(e=q.localData.errors)||void 0===e||null===(l=e.name)||void 0===l?void 0:l.toString(),onBlur:a[2]||(a[2]=e=>delete q.localData.errors["code"]),rules:[e=>!!e||"Code is required"]},null,8,["modelValue","error","error-message","rules"])]),(0,o.Wm)("div",m,[(0,o.Wm)(w,{modelValue:q.formData.name,"onUpdate:modelValue":a[3]||(a[3]=e=>q.formData.name=e),class:"q-mt-md",label:"Name",outlined:"",error:q.localData.errors.hasOwnProperty("name"),"error-message":null===(r=q.localData.errors)||void 0===r||null===(s=r.name)||void 0===s?void 0:s.toString(),onBlur:a[4]||(a[4]=e=>delete q.localData.errors["name"]),rules:[e=>!!e||"Name is required"]},null,8,["modelValue","error","error-message","rules"])]),(0,o.Wm)("div",c,[(0,o.Wm)(w,{modelValue:q.formData.contacts,"onUpdate:modelValue":a[5]||(a[5]=e=>q.formData.contacts=e),class:"q-mt-md",label:"Contacts",outlined:"",error:q.localData.errors.hasOwnProperty("contacts"),"error-message":null===(g=q.localData.errors)||void 0===g||null===(k=g.description)||void 0===k?void 0:k.toString(),onBlur:a[6]||(a[6]=e=>delete q.localData.errors["contacts"])},null,8,["modelValue","error","error-message"])]),(0,o.Wm)("div",i,[(0,o.Wm)(w,{modelValue:q.formData.description,"onUpdate:modelValue":a[7]||(a[7]=e=>q.formData.description=e),class:"q-mt-md",label:"Description",type:"textarea",outlined:"",error:q.localData.errors.hasOwnProperty("description"),"error-message":null===(_=q.localData.errors)||void 0===_||null===(h=_.description)||void 0===h?void 0:h.toString(),onBlur:a[8]||(a[8]=e=>delete q.localData.errors["description"])},null,8,["modelValue","error","error-message"])]),(0,o.Wm)("div",u,[(0,o.Wm)(y)]),p,(0,o.Wm)("div",v,[(0,o.Wm)(w,{modelValue:q.bankData.mid,"onUpdate:modelValue":a[9]||(a[9]=e=>q.bankData.mid=e),class:"q-mt-md",label:"Merchant ID",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",b,[(0,o.Wm)(w,{modelValue:q.bankData.bank_name,"onUpdate:modelValue":a[10]||(a[10]=e=>q.bankData.bank_name=e),class:"q-mt-md",label:"Name of bank",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",f,[(0,o.Wm)(w,{modelValue:q.bankData.ac_holder,"onUpdate:modelValue":a[11]||(a[11]=e=>q.bankData.ac_holder=e),class:"q-mt-md",label:"Ac Holder",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",D,[(0,o.Wm)(w,{modelValue:q.bankData.ac_no,"onUpdate:modelValue":a[12]||(a[12]=e=>q.bankData.ac_no=e),class:"q-mt-md",label:"Ac no ",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",W,[(0,o.Wm)(w,{modelValue:q.bankData.ifsc,"onUpdate:modelValue":a[13]||(a[13]=e=>q.bankData.ifsc=e),class:"q-mt-md",label:"IFSC",outlined:""},null,8,["modelValue"])]),(0,o.Wm)("div",V,[(0,o.Wm)(w,{modelValue:q.bankData.remark,"onUpdate:modelValue":a[14]||(a[14]=e=>q.bankData.remark=e),class:"q-mt-md",label:"Remark",outlined:""},null,8,["modelValue"])])]),(0,o.Wm)(U,{class:"q-mt-md"},{default:(0,o.w5)((()=>[(0,o.Wm)(S,{color:"primary",flat:"",type:"submit",label:"Save"}),(0,o.Wm)(S,{color:"negative",flat:"",type:"reset",label:"Reset"})])),_:1})]})),_:1},8,["onReset","onSubmit"])])),_:1})}var g=l(515),k=l.n(g),_=l(1959),h=l(7874),x=l(5474),w=l(8825);const y={setup(e,a){(0,h.oR)();const l=(0,w.Z)(),o=(0,_.qj)({errors:{}}),r=(0,_.iH)(null),s=(0,_.iH)([]),t=(0,_.qj)({mid:"",bank_name:"",ac_holder:"",ac_no:"",ifsc:"",description:""}),d=(0,_.qj)({code:"",name:"",description:"",contact:""}),n=e=>{d.bank_detail=k()({},t),x.api.post("office",d).then((e=>{var a;l.notify({type:"positive",message:null===e||void 0===e||null===(a=e.data)||void 0===a?void 0:a.message}),m()})).catch((e=>{var a,r,s,t,d,n,m;console.log("error",e.response),null!==e&&void 0!==e&&null!==(a=e.response)&&void 0!==a&&null!==(r=a.data)&&void 0!==r&&r.errors&&(o.errors=null===(s=e.response.data)||void 0===s?void 0:s.errors),(null===e||void 0===e||null===(t=e.response)||void 0===t||null===(d=t.data)||void 0===d?void 0:d.message)&&l.notify({type:"negative",message:null===(n=e.response)||void 0===n||null===(m=n.data)||void 0===m?void 0:m.message})}))},m=e=>{d.code="",d.name="",d.description="",d.contact="",t.bank_name="",t.ac_holder="",t.ac_no="",t.ifsc="",t.description="",r.value.reset()};return{localData:o,bankData:t,formData:d,resetForm:m,handleSubmit:n,tempRoles:s,formRef:r}}};var S=l(4379),U=l(2025),Z=l(1481),Q=l(5926),B=l(5269),R=l(4689),C=l(5869),O=l(9367),N=l(2165),P=l(7518),j=l.n(P);y.render=q;const z=y;j()(y,"components",{QPage:S.Z,QSpace:U.Z,QBreadcrumbs:Z.Z,QBreadcrumbsEl:Q.Z,QForm:B.Z,QInput:R.Z,QSeparator:C.Z,QCardActions:O.Z,QBtn:N.Z})}}]);
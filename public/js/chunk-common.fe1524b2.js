"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[64],{867:(e,o,a)=>{a.d(o,{Z:()=>_});var r=a(3673),l=a(2323);const s=(0,r.HX)("data-v-07feeffb");(0,r.dD)("data-v-07feeffb");const t={class:"zsubtitle text-primary"},n={class:"text-primary"},i={class:"text-green-4 text-caption"};(0,r.Cn)();const d=s(((e,o,a,d,u,m)=>{const p=(0,r.up)("q-space"),c=(0,r.up)("q-icon"),f=(0,r.up)("q-card-section"),v=(0,r.up)("q-btn"),w=(0,r.up)("q-card-actions"),D=(0,r.up)("q-card");return(0,r.wg)(),(0,r.j4)(D,{style:{"min-height":"270px"},class:"zcard"},{default:s((()=>[(0,r.Wm)(f,{horizontal:""},{default:s((()=>[(0,r.Wm)("h1",t,(0,l.zw)(d.file.fileno),1),(0,r.Wm)(p),(0,r.Wm)(p),(0,r.Wm)(c,{name:"more_vert"})])),_:1}),(0,r.Wm)(f,null,{default:s((()=>[(0,r.Wm)("p",n,(0,l.zw)(d.file.subject),1)])),_:1}),(0,r.Wm)(f,null,{default:s((()=>[(0,r.Wm)("p",i,(0,l.zw)(d.file.remark),1)])),_:1}),(0,r.Wm)(w,null,{default:s((()=>[(0,r.Wm)(v,{flat:"",label:"open"}),(0,r.Wm)(v,{flat:"",label:"more ..."})])),_:1})])),_:1})}));var u=a(1959);const m={props:["file"],setup(e,o){const{file:a}=(0,u.BK)(e);return{file:a}}};var p=a(151),c=a(5589),f=a(2025),v=a(4554),w=a(9367),D=a(2165),g=a(7518),h=a.n(g);m.render=d,m.__scopeId="data-v-07feeffb";const _=m;h()(m,"components",{QCard:p.Z,QCardSection:c.Z,QSpace:f.Z,QIcon:v.Z,QCardActions:w.Z,QBtn:D.Z})},954:(e,o,a)=>{a.r(o),a.d(o,{default:()=>W});var r=a(3673);const l=(0,r.Wm)("h1",{class:"zsubtitle q-py-md"},"New Staff",-1),s=(0,r.Uk)(" No results "),t={class:"flex-inline"},n=(0,r.Uk)("Save"),i=(0,r.Uk)("Reset");function d(e,o,a,d,u,m){const p=(0,r.up)("q-input"),c=(0,r.up)("q-item-section"),f=(0,r.up)("q-item"),v=(0,r.up)("q-select"),w=(0,r.up)("q-icon"),D=(0,r.up)("q-btn"),g=(0,r.up)("q-form"),h=(0,r.up)("q-card");return(0,r.wg)(),(0,r.j4)(h,{style:{width:"450px"},class:"q-pa-lg"},{default:(0,r.w5)((()=>[(0,r.Wm)(g,{onSubmit:d.onSubmit,onReset:d.onReset},{default:(0,r.w5)((()=>{var e,a,u,m,g,h,_,y;return[l,(0,r.Wm)(p,{modelValue:d.formData.full_name,"onUpdate:modelValue":o[1]||(o[1]=e=>d.formData.full_name=e),outlined:"",autofocus:"",label:"Full name *",onBlur:o[2]||(o[2]=e=>delete d.localData.errors["full_name"]),error:d.localData.errors.hasOwnProperty("full_name"),"error-message":null===(e=d.localData.errors["full_name"])||void 0===e?void 0:e.toString(),rules:[e=>!!e||"Fullname is required"]},null,8,["modelValue","error","error-message","rules"]),(0,r.Wm)(v,{outlined:"",multiple:"",modelValue:d.formData.roles,"onUpdate:modelValue":o[3]||(o[3]=e=>d.formData.roles=e),"use-chips":"",label:"Select role",onSelect:o[4]||(o[4]=e=>d.localData.errors["roles"]=!1),error:d.localData.errors.hasOwnProperty("roles"),"error-message":null===(a=d.localData.errors["roles"])||void 0===a?void 0:a.toString(),options:d.roles,rules:[e=>!!e||"Roles is required"]},{"no-option":(0,r.w5)((()=>[(0,r.Wm)(f,null,{default:(0,r.w5)((()=>[(0,r.Wm)(c,{class:"text-grey"},{default:(0,r.w5)((()=>[s])),_:1})])),_:1})])),_:1},8,["modelValue","error","error-message","options","rules"]),(0,r.Wm)(p,{modelValue:d.formData.email,"onUpdate:modelValue":o[5]||(o[5]=e=>d.formData.email=e),outlined:"",label:"Email *",onBlur:o[6]||(o[6]=e=>delete d.localData.errors["email"]),error:d.localData.errors.hasOwnProperty("email"),"error-message":null===(u=d.localData.errors["email"])||void 0===u?void 0:u.toString(),rules:[e=>!!e||"Email is required"]},null,8,["modelValue","error","error-message","rules"]),(0,r.Wm)(p,{modelValue:d.formData.phone,"onUpdate:modelValue":o[7]||(o[7]=e=>d.formData.phone=e),outlined:"",onBlur:o[8]||(o[8]=e=>delete d.localData.errors["phone"]),error:d.localData.errors.hasOwnProperty("phone"),"error-message":null===(m=d.localData.errors["phone"])||void 0===m?void 0:m.toString(),label:"Phone no *",rules:[e=>!!e||"Phone no is required"]},null,8,["modelValue","error","error-message","rules"]),(0,r.Wm)(p,{modelValue:d.formData.designation,"onUpdate:modelValue":o[9]||(o[9]=e=>d.formData.designation=e),outlined:"",onBlur:o[10]||(o[10]=e=>delete d.localData.errors["designation"]),error:d.localData.errors.hasOwnProperty("designation"),"error-message":null===(g=d.localData.errors["designation"])||void 0===g?void 0:g.toString(),label:"Designation"},null,8,["modelValue","error","error-message"]),(0,r.Wm)(p,{modelValue:d.formData.password,"onUpdate:modelValue":o[12]||(o[12]=e=>d.formData.password=e),type:null!==(h=d.localData)&&void 0!==h&&h.showPassword?"text":"password",outlined:"",label:"Password *",onBlur:o[13]||(o[13]=e=>delete d.localData.errors["password"]),error:d.localData.errors.hasOwnProperty("password"),"error-message":null===(_=d.localData.errors["password"])||void 0===_?void 0:_.toString(),rules:[e=>!!e||"Password is required"]},{append:(0,r.w5)((()=>[(0,r.Wm)(w,{name:d.localData.showPassword?"visibility":"visibility_off",class:"cursor-pointer",onClick:o[11]||(o[11]=e=>d.localData.showPassword=!d.localData.showPassword)},null,8,["name"])])),_:1},8,["modelValue","type","error","error-message","rules"]),(0,r.Wm)(p,{modelValue:d.formData.password_confirmation,"onUpdate:modelValue":o[14]||(o[14]=e=>d.formData.password_confirmation=e),outlined:"",type:null!==(y=d.localData)&&void 0!==y&&y.showPassword?"text":"password",label:"Confirm password *",rules:[e=>e===d.formData.password||"Password must match"]},null,8,["modelValue","type","rules"]),(0,r.Wm)("div",t,[(0,r.Wm)(D,{type:"submit",flat:"",color:"primary"},{default:(0,r.w5)((()=>[n])),_:1}),(0,r.Wm)(D,{type:"reset",flat:"",color:"negative"},{default:(0,r.w5)((()=>[i])),_:1})])]})),_:1},8,["onSubmit","onReset"])])),_:1})}var u=a(1959),m=a(7874),p=a(5474),c=a(8825);const f={emits:["onStaffCreated"],setup(e,o){const a=(0,m.oR)(),r=(0,c.Z)(),l=(0,u.qj)({showPassword:!1,errors:{}}),s=(0,u.qj)({full_name:"",designation:"",roles:[],email:"",phone:"",password:"",password_confirmation:""}),t=e=>{let a=Object.assign({},s);const t=a.roles.map((e=>e.value));a["roles"]=t,p.api.post("staff",a).then((e=>{var a;r.notify({type:"positive",message:null===e||void 0===e||null===(a=e.data)||void 0===a?void 0:a.message}),o.emit("onStaffCreated",e.data.list)})).catch((e=>{var o,a,s,t,n,i,d;console.log("error",e.response),null!==e&&void 0!==e&&null!==(o=e.response)&&void 0!==o&&null!==(a=o.data)&&void 0!==a&&a.errors&&(l.errors=null===(s=e.response.data)||void 0===s?void 0:s.errors),(null===e||void 0===e||null===(t=e.response)||void 0===t||null===(n=t.data)||void 0===n?void 0:n.message)&&r.notify({type:"negative",message:null===(i=e.response)||void 0===i||null===(d=i.data)||void 0===d?void 0:d.message})}))},n=e=>{s.full_name="",s.designation="",s.email="",s.phone="",s.roles=[],s.password_confirmation="",s.password=""};return{roles:(0,u.Fl)((()=>a.state.staffData.roles)),formData:s,localData:l,onReset:n,onSubmit:t}}};var v=a(151),w=a(5269),D=a(4689),g=a(3314),h=a(3414),_=a(2035),y=a(4554),b=a(2165),q=a(7518),V=a.n(q);f.render=d;const W=f;V()(f,"components",{QCard:v.Z,QForm:w.Z,QInput:D.Z,QSelect:g.Z,QItem:h.Z,QItemSection:_.Z,QIcon:y.Z,QBtn:b.Z})},4224:(e,o,a)=>{a.r(o),a.d(o,{default:()=>W});var r=a(3673);const l=(0,r.Wm)("h1",{class:"zsubtitle q-py-md"},"Edit Staff",-1),s=(0,r.Uk)(" No results "),t=(0,r.Uk)("Save"),n=(0,r.Uk)("Reset");function i(e,o,a,i,d,u){const m=(0,r.up)("q-input"),p=(0,r.up)("q-item-section"),c=(0,r.up)("q-item"),f=(0,r.up)("q-select"),v=(0,r.up)("q-icon"),w=(0,r.up)("q-btn"),D=(0,r.up)("q-card-section"),g=(0,r.up)("q-form"),h=(0,r.up)("q-card");return(0,r.wg)(),(0,r.j4)(h,{style:{width:"450px"},class:"q-pa-lg"},{default:(0,r.w5)((()=>[(0,r.Wm)(g,{onSubmit:i.onSubmit,onReset:i.onReset},{default:(0,r.w5)((()=>{var e,a,d,u,g,h,_,y;return[l,(0,r.Wm)(m,{modelValue:i.formData.full_name,"onUpdate:modelValue":o[1]||(o[1]=e=>i.formData.full_name=e),outlined:"",autofocus:"",label:"Full name *",onBlur:o[2]||(o[2]=e=>delete i.localData.errors["full_name"]),error:i.localData.errors.hasOwnProperty("full_name"),"error-message":null===(e=i.localData.errors["full_name"])||void 0===e?void 0:e.toString(),rules:[e=>!!e||"full_name is required"]},null,8,["modelValue","error","error-message","rules"]),(0,r.Wm)(f,{outlined:"",multiple:"",modelValue:i.formData.roles,"onUpdate:modelValue":o[3]||(o[3]=e=>i.formData.roles=e),"use-chips":"",label:"Select role",onSelect:o[4]||(o[4]=e=>i.localData.errors["roles"]=!1),error:i.localData.errors.hasOwnProperty("roles"),"error-message":null===(a=i.localData.errors["roles"])||void 0===a?void 0:a.toString(),options:i.roles,rules:[e=>!!e||"Roles is required"]},{"no-option":(0,r.w5)((()=>[(0,r.Wm)(c,null,{default:(0,r.w5)((()=>[(0,r.Wm)(p,{class:"text-grey"},{default:(0,r.w5)((()=>[s])),_:1})])),_:1})])),_:1},8,["modelValue","error","error-message","options","rules"]),(0,r.Wm)(m,{modelValue:i.formData.email,"onUpdate:modelValue":o[5]||(o[5]=e=>i.formData.email=e),outlined:"",label:"Email *",onBlur:o[6]||(o[6]=e=>delete i.localData.errors["email"]),error:i.localData.errors.hasOwnProperty("email"),"error-message":null===(d=i.localData.errors["email"])||void 0===d?void 0:d.toString(),rules:[e=>!!e||"Email is required"]},null,8,["modelValue","error","error-message","rules"]),(0,r.Wm)(m,{modelValue:i.formData.phone,"onUpdate:modelValue":o[7]||(o[7]=e=>i.formData.phone=e),outlined:"",onBlur:o[8]||(o[8]=e=>delete i.localData.errors["phone"]),error:i.localData.errors.hasOwnProperty("phone"),"error-message":null===(u=i.localData.errors["phone"])||void 0===u?void 0:u.toString(),label:"Phone no *",rules:[e=>!!e||"Phone no is required"]},null,8,["modelValue","error","error-message","rules"]),(0,r.Wm)(m,{modelValue:i.formData.designation,"onUpdate:modelValue":o[9]||(o[9]=e=>i.formData.designation=e),outlined:"",onBlur:o[10]||(o[10]=e=>delete i.localData.errors["designation"]),error:i.localData.errors.hasOwnProperty("designation"),"error-message":null===(g=i.localData.errors["designation"])||void 0===g?void 0:g.toString(),label:"Designation"},null,8,["modelValue","error","error-message"]),(0,r.Wm)(m,{modelValue:i.formData.password,"onUpdate:modelValue":o[12]||(o[12]=e=>i.formData.password=e),type:null!==(h=i.localData)&&void 0!==h&&h.showPassword?"text":"password",outlined:"",label:"Password *",onBlur:o[13]||(o[13]=e=>delete i.localData.errors["password"]),error:i.localData.errors.hasOwnProperty("password"),"error-message":null===(_=i.localData.errors["password"])||void 0===_?void 0:_.toString(),rules:[e=>!!e||"Password is required"]},{append:(0,r.w5)((()=>[(0,r.Wm)(v,{name:i.localData.showPassword?"visibility":"visibility_off",class:"cursor-pointer",onClick:o[11]||(o[11]=e=>i.localData.showPassword=!i.localData.showPassword)},null,8,["name"])])),_:1},8,["modelValue","type","error","error-message","rules"]),(0,r.Wm)(m,{modelValue:i.formData.password_confirmation,"onUpdate:modelValue":o[14]||(o[14]=e=>i.formData.password_confirmation=e),outlined:"",type:null!==(y=i.localData)&&void 0!==y&&y.showPassword?"text":"password",label:"Confirm password *",rules:[e=>e===i.formData.password||"Password must match"]},null,8,["modelValue","type","rules"]),(0,r.Wm)(D,null,{default:(0,r.w5)((()=>[(0,r.Wm)(w,{type:"submit",flat:"",color:"primary"},{default:(0,r.w5)((()=>[t])),_:1}),(0,r.Wm)(w,{type:"reset",flat:"",color:"negative"},{default:(0,r.w5)((()=>[n])),_:1})])),_:1})]})),_:1},8,["onSubmit","onReset"])])),_:1})}var d=a(1959),u=a(7874),m=a(5474),p=a(8825);const c={emits:["onStaffUpdated"],props:["id"],setup(e,o){const a=(0,d.iH)(e.id),l=(0,u.oR)(),s=(0,p.Z)(),t=(0,d.qj)({showPassword:!1,errors:{}}),n=(0,d.qj)({id:null,full_name:"",designation:"",roles:[],email:"",phone:"",password:"",password_confirmation:""}),i=e=>{let a=Object.assign({},n);const r=a.roles.map((e=>e.value));a["roles"]=r,m.api.put(`staff/${n.id}`,a).then((e=>{var a;s.notify({type:"positive",message:null===e||void 0===e||null===(a=e.data)||void 0===a?void 0:a.message}),o.emit("onStaffUpdated",e.data.list)})).catch((e=>{var o,a,r,l,n,i,d;null!==e&&void 0!==e&&null!==(o=e.response)&&void 0!==o&&null!==(a=o.data)&&void 0!==a&&a.errors&&(t.errors=null===(r=e.response.data)||void 0===r?void 0:r.errors),(null===e||void 0===e||null===(l=e.response)||void 0===l||null===(n=l.data)||void 0===n?void 0:n.message)&&s.notify({type:"negative",message:null===(i=e.response)||void 0===i||null===(d=i.data)||void 0===d?void 0:d.message})}))},c=e=>{m.api.get(`staff/${e}`).then((e=>{const{full_name:o,id:a,email:r,designation:l,phone:s,roles:t}=e.data.data;n.id=a,n.full_name=o,n.phone=s,n.designation=l,n.email=r,n.roles=t.map((e=>({value:e.id,label:e.name})))})).catch((e=>{var o,a,r,l;(null===e||void 0===e||null===(o=e.response)||void 0===o||null===(a=o.data)||void 0===a?void 0:a.message)&&s.notify({type:"negative",message:null===(r=e.response)||void 0===r||null===(l=r.data)||void 0===l?void 0:l.message})}))};(0,r.bv)((()=>{c(a.value)}));const f=e=>{n.full_name="",n.email="",n.phone="",n.roles=[],n.password_confirmation="",n.password=""};return{roles:(0,d.Fl)((()=>l.state.staffData.roles)),formData:n,localData:t,onReset:f,onSubmit:i}}};var f=a(151),v=a(5269),w=a(4689),D=a(3314),g=a(3414),h=a(2035),_=a(4554),y=a(5589),b=a(2165),q=a(7518),V=a.n(q);c.render=i;const W=c;V()(c,"components",{QCard:f.Z,QForm:v.Z,QInput:w.Z,QSelect:D.Z,QItem:g.Z,QItemSection:h.Z,QIcon:_.Z,QCardSection:y.Z,QBtn:b.Z})}}]);
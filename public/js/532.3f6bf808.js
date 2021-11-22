"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[532],{4532:(e,r,o)=>{o.r(r),o.d(r,{default:()=>_});var l=o(3673);const a={class:"row justify-center q-mt-lg"},n={class:"col-6"},s=(0,l.Wm)("h6",{class:"text-h6 q-ma-none"},"Register as investor",-1);function t(e,r,o,t,i,d){const u=(0,l.up)("q-card-section"),m=(0,l.up)("q-input"),p=(0,l.up)("q-btn"),f=(0,l.up)("q-card"),c=(0,l.up)("q-form");return(0,l.wg)(),(0,l.j4)("div",a,[(0,l.Wm)("div",n,[(0,l.Wm)(c,{class:"q-col-gutter-md",onSubmit:t.handleSubmit,onReset:t.handleReset},{default:(0,l.w5)((()=>[(0,l.Wm)(f,{flat:""},{default:(0,l.w5)((()=>[(0,l.Wm)(u,null,{default:(0,l.w5)((()=>[s])),_:1}),(0,l.Wm)(u,null,{default:(0,l.w5)((()=>{var e,o,a,n,s,i,d,u,f,c,v,g,b;return[(0,l.Wm)(m,{outlined:"",type:"email",modelValue:t.formData.email,"onUpdate:modelValue":r[1]||(r[1]=e=>t.formData.email=e),label:"Email",error:Boolean(null===(e=t.errors)||void 0===e?void 0:e.email),"error-message":null===(o=t.errors)||void 0===o||null===(a=o.email)||void 0===a?void 0:a.toString(),rules:[e=>!!e||"Email is required"]},null,8,["modelValue","error","error-message","rules"]),(0,l.Wm)(m,{outlined:"",modelValue:t.formData.mobile,"onUpdate:modelValue":r[2]||(r[2]=e=>t.formData.mobile=e),label:"Mobile no",mask:"##########",error:Boolean(null===(n=t.errors)||void 0===n?void 0:n.mobile),"error-message":t.formData.mobile.toString().length<11?"Mobile number should be 10 digit":"Mobile number is required",rules:[e=>10==e.length||"Mobile no is required"]},null,8,["modelValue","error","error-message","rules"]),(0,l.Wm)(m,{outlined:"",type:t.inputType,modelValue:t.formData.password,"onUpdate:modelValue":r[4]||(r[4]=e=>t.formData.password=e),label:"Password",error:Boolean(null===(s=t.errors)||void 0===s?void 0:s.password),"error-message":null===(i=t.errors)||void 0===i||null===(d=i.password)||void 0===d?void 0:d.toString(),rules:[e=>!!e||"Password is required"]},{append:(0,l.w5)((()=>[(0,l.Wm)(p,{flat:"",onClick:r[3]||(r[3]=e=>"text"===t.inputType?t.inputType="password":t.inputType="text"),icon:"text"===t.inputType?"visibility":"visibility_off"},null,8,["icon"])])),_:1},8,["type","modelValue","error","error-message","rules"]),(0,l.Wm)(m,{outlined:"",modelValue:t.formData.password_confirmation,"onUpdate:modelValue":r[5]||(r[5]=e=>t.formData.password_confirmation=e),type:t.inputType,label:"Confirm Password",error:Boolean(null===(u=t.errors)||void 0===u?void 0:u.password_confirmation),"error-message":null===(f=t.errors)||void 0===f||null===(c=f.password_confirmation)||void 0===c?void 0:c.toString(),rules:[e=>!!e||"Email is required",e=>t.formData.password===e||"Password must match"]},null,8,["modelValue","type","error","error-message","rules"]),(0,l.Wm)(m,{outlined:"",modelValue:t.formData.regn_no,"onUpdate:modelValue":r[6]||(r[6]=e=>t.formData.regn_no=e),label:"Regn No",error:Boolean(null===(v=t.errors)||void 0===v?void 0:v.regn_no),"error-message":null===(g=t.errors)||void 0===g||null===(b=g.regn_no)||void 0===b?void 0:b.toString()},null,8,["modelValue","error","error-message"])]})),_:1})])),_:1})])),_:1},8,["onSubmit","onReset"])])])}var i=o(1959),d=(o(5474),o(8825));const u={setup(e,r){const o=(0,i.iH)("text");let l=(0,i.qj)({});(0,d.Z)();const a=(0,i.qj)({fullname:"",email:"",password:"",password_confirmation:"",mobile:"",regn_no:""}),n=e=>{r.emit("sendOtp",a)},s=e=>{a.fullname="",a.email="",a.password="",a.password_confirmation="",a.mobile="",a.regn_no=""};return{inputType:o,errors:l,formData:a,handleSubmit:n,handleReset:s}}};var m=o(5269),p=o(151),f=o(5589),c=o(4689),v=o(2165),g=o(9367),b=o(7518),w=o.n(b);u.render=t;const _=u;w()(u,"components",{QForm:m.Z,QCard:p.Z,QCardSection:f.Z,QInput:c.Z,QBtn:v.Z,QCardActions:g.Z})}}]);
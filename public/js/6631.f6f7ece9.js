"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[6631],{6631:(a,e,s)=>{s.r(e),s.d(e,{default:()=>z});var t=s(3673);const l={style:{"max-width":"450px"},class:"zdetailcard row q-col-gutter-sm"},o=(0,t.Wm)("div",{class:"col-xs-12"},[(0,t.Wm)("h1",{class:"ztitle"},"Login")],-1),r=(0,t.Wm)("div",{class:"col-xs-12"},[(0,t.Wm)("p",{class:"text-caption"},"Please enter your staff credential")],-1),i=(0,t.Wm)("div",{class:"col-xs-12"},[(0,t.Wm)("label",{class:"zlabel",for:"email"},"Email")],-1),n={class:"col-xs-12"},d=(0,t.Wm)("div",{class:"col-xs-12"},[(0,t.Wm)("label",{class:"zlabel",for:"password"},"Password")],-1),u={class:"col-xs-12"},m={class:"col-xs-12"};function c(a,e,s,c,p,v){const f=(0,t.up)("q-input"),w=(0,t.up)("q-icon"),g=(0,t.up)("q-btn"),b=(0,t.up)("q-form"),h=(0,t.up)("q-page");return(0,t.wg)(),(0,t.j4)(h,{padding:"",class:"container-lg"},{default:(0,t.w5)((()=>[(0,t.Wm)(b,{class:"q-mt-lg flex justify-center",onSubmit:c.submit,onReset:c.reset},{default:(0,t.w5)((()=>[(0,t.Wm)("div",l,[o,r,i,(0,t.Wm)("div",n,[(0,t.Wm)(f,{dense:"",id:"email",outlined:"",modelValue:c.formData.email,"onUpdate:modelValue":e[1]||(e[1]=a=>c.formData.email=a),error:[a=>!!a||"Email is required",a=>c.emailRegex.test(a)||"Invalid email address"]},null,8,["modelValue","error"])]),d,(0,t.Wm)("div",u,[(0,t.Wm)(f,{dense:"",type:c.localData.type,id:"password",outlined:"",modelValue:c.formData.password,"onUpdate:modelValue":e[2]||(e[2]=a=>c.formData.password=a),error:[a=>!!a||"Password is required"]},{append:(0,t.w5)((()=>[(0,t.Wm)(w,{name:"password"===c.localData.type?"visibility_off":"visibility",class:"cursor-pointer",onClick:c.togglePassword},null,8,["name","onClick"])])),_:1},8,["type","modelValue","error"])]),(0,t.Wm)("div",m,[(0,t.Wm)(g,{type:"submit",label:"login","no-caps":"","no-wrap":"",color:"primary"})])])])),_:1},8,["onSubmit","onReset"])])),_:1})}var p=s(1959),v=s(5474),f=s(8825),w=s(7874),g=s(9582);const b=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,h={setup(a,e){const s=(0,f.Z)(),l=(0,w.oR)(),o=(0,g.tv)(),r=(0,p.qj)({type:"password"}),i=(0,p.qj)({email:"",password:""}),n=()=>{"password"===r.type?r.type="text":r.type="password"},d=()=>{v.api.post("auth/staff-login",i).then((a=>{const{token:e,user:s}=a.data;l.dispatch("authData/setToken",e),l.dispatch("authData/setCurrentUser",s),o.push({name:"staff:dashboard"})})).catch((a=>{var e,t,l,o,i,n,d;null!==a&&void 0!==a&&null!==(e=a.response)&&void 0!==e&&null!==(t=e.data)&&void 0!==t&&t.errors&&(r.errors=null===(l=a.response.data)||void 0===l?void 0:l.errors),(null===a||void 0===a||null===(o=a.response)||void 0===o||null===(i=o.data)||void 0===i?void 0:i.message)&&s.notify({type:"negative",message:null===(n=a.response)||void 0===n||null===(d=n.data)||void 0===d?void 0:d.message})}))},u=(0,t.Fl)((()=>l.getters["authData/isAuthenticated"])),m=()=>{};return(0,t.bv)((()=>{})),{isAuthenticated:u,formData:i,localData:r,emailRegex:b,togglePassword:n,submit:d,reset:m}}};var y=s(4379),W=s(5269),x=s(4689),q=s(4554),D=s(2165),k=s(7518),Z=s.n(k);h.render=c;const z=h;Z()(h,"components",{QPage:y.Z,QForm:W.Z,QInput:x.Z,QIcon:q.Z,QBtn:D.Z})}}]);
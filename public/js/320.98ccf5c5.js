"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[320],{2320:(e,a,l)=>{l.r(a),l.d(a,{default:()=>K});l(7280);var t=l(3673),o=l(2323);const r={class:"row q-col-gutter-md"},s=(0,t.Wm)("div",{class:"col-xs-12"},[(0,t.Wm)("h1",{class:"zsubtitle"},"Schedule castes")],-1),n={class:"flex justify-between flex-inline col-12"},d={class:"col-12"},i={class:"col-12"},u={class:"flex flex-inline q-gutter-sm"},p={class:"col-12"};function c(e,a,l,c,m,v){const g=(0,t.up)("q-btn"),f=(0,t.up)("q-icon"),D=(0,t.up)("q-input"),b=(0,t.up)("q-separator"),y=(0,t.up)("q-item-label"),h=(0,t.up)("q-item-section"),W=(0,t.up)("q-item"),q=(0,t.up)("q-list"),w=(0,t.up)("q-pagination"),C=(0,t.up)("Create"),S=(0,t.up)("q-dialog"),V=(0,t.up)("Edit");return(0,t.wg)(),(0,t.j4)("div",r,[s,(0,t.Wm)("div",n,[(0,t.Wm)(g,{outline:"",onClick:a[1]||(a[1]=e=>c.localData.openCreate=!0),label:"Add new",color:"primary"}),(0,t.Wm)(D,{modelValue:c.localData.search,"onUpdate:modelValue":a[2]||(a[2]=e=>c.localData.search=e),onKeyup:c.handleSearch,placeholder:"Type here",outlined:"",dense:""},{append:(0,t.w5)((()=>[(0,t.Wm)(f,{name:"search"})])),_:1},8,["modelValue","onKeyup"])]),(0,t.Wm)("div",d,[(0,t.Wm)(b)]),(0,t.Wm)("div",i,[(0,t.Wm)(q,{separator:""},{default:(0,t.w5)((()=>[((0,t.wg)(!0),(0,t.j4)(t.HY,null,(0,t.Ko)(c.localData.listData.data,(e=>((0,t.wg)(),(0,t.j4)(W,{key:e.id},{default:(0,t.w5)((()=>[(0,t.Wm)(h,null,{default:(0,t.w5)((()=>[(0,t.Wm)(y,null,{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(null===e||void 0===e?void 0:e.label),1)])),_:2},1024),(0,t.Wm)(y,{caption:""},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(null===e||void 0===e?void 0:e.value),1)])),_:2},1024)])),_:2},1024),(0,t.Wm)(h,{side:""},{default:(0,t.w5)((()=>[(0,t.Wm)("div",u,[(0,t.Wm)(g,{size:"12px",onClick:a=>c.handleEdit(e.id),outline:"",icon:"edit"},null,8,["onClick"]),(0,t.Wm)(g,{size:"12px",onClick:a=>c.deleteData(e.id),outline:"",icon:"delete"},null,8,["onClick"])])])),_:2},1024)])),_:2},1024)))),128))])),_:1})]),(0,t.Wm)("div",p,[(0,t.Wm)(w,{"onUpdate:modelValue":[c.updatePagination,a[3]||(a[3]=e=>c.localData.listData.current_page=e)],modelValue:c.localData.listData.current_page,max:c.pageCount,input:""},null,8,["onUpdate:modelValue","modelValue","max"])]),(0,t.Wm)(S,{onHide:a[4]||(a[4]=e=>c.localData.openCreate=!1),modelValue:c.localData.openCreate,"onUpdate:modelValue":a[5]||(a[5]=e=>c.localData.openCreate=e)},{default:(0,t.w5)((()=>[(0,t.Wm)(C,{class:"zcard",title:"New Caste",type:"sc",onOnCreated:c.onCreated},null,8,["onOnCreated"])])),_:1},8,["modelValue"]),(0,t.Wm)(S,{onHide:a[6]||(a[6]=e=>c.localData.openEdit=!1),modelValue:c.localData.openEdit,"onUpdate:modelValue":a[7]||(a[7]=e=>c.localData.openEdit=e)},{default:(0,t.w5)((()=>[Boolean(c.selectedId)?((0,t.wg)(),(0,t.j4)(V,{key:0,id:c.selectedId,class:"zcard",title:"Edit Caste",onOnUpdated:c.onUpdated},null,8,["id","onOnUpdated"])):(0,t.kq)("",!0)])),_:1},8,["modelValue"])])}var m=l(1959),v=l(5474),g=l(8825),f=(l(246),l(8880));const D={class:"zsubtitle q-py-md"},b={class:"col-xs-12"},y={class:"col-xs-12"};function h(e,a,l,r,s,n){const d=(0,t.up)("q-input"),i=(0,t.up)("q-separator"),u=(0,t.up)("q-btn"),p=(0,t.up)("q-form"),c=(0,t.up)("q-card");return(0,t.wg)(),(0,t.j4)(c,{style:{"min-width":"450px"},class:"q-pa-lg"},{default:(0,t.w5)((()=>[(0,t.Wm)(p,{ref:"formRef",onReset:(0,f.iM)(r.resetForm,["prevent"]),onSubmit:(0,f.iM)(r.handleSubmit,["prevent"])},{default:(0,t.w5)((()=>{var e,s,n,p;return[(0,t.Wm)("h1",D,(0,o.zw)(l.title),1),(0,t.Wm)(d,{modelValue:r.formData.value,"onUpdate:modelValue":a[1]||(a[1]=e=>r.formData.value=e),class:"col-xs-12",outlined:"",autofocus:"",label:"Slug",error:r.localData.errors.hasOwnProperty("value"),"error-message":null===(e=r.localData.errors)||void 0===e||null===(s=e.name)||void 0===s?void 0:s.toString(),onBlur:a[2]||(a[2]=e=>delete r.localData.errors["value"]),rules:[e=>!!e||"Slug is required"]},null,8,["modelValue","error","error-message","rules"]),(0,t.Wm)(d,{modelValue:r.formData.label,"onUpdate:modelValue":a[3]||(a[3]=e=>r.formData.label=e),class:"col-xs-12",outlined:"",label:"Label",error:r.localData.errors.hasOwnProperty("label"),"error-message":null===(n=r.localData.errors)||void 0===n||null===(p=n.description)||void 0===p?void 0:p.toString(),rules:[e=>!!e||"Label is required"],onBlur:a[4]||(a[4]=e=>delete r.localData.errors["label"])},null,8,["modelValue","error","error-message","rules"]),(0,t.Wm)("div",b,[(0,t.Wm)(i)]),(0,t.Wm)("div",y,[(0,t.Wm)(u,{flat:"",color:"primary",type:"submit",label:"Save"}),(0,t.Wm)(u,{flat:"",color:"negative",type:"reset",label:"Reset"})])]})),_:1},8,["onReset","onSubmit"])])),_:1})}var W=l(7874);const q={emits:["onCreated"],props:["title","type"],setup(e,a){(0,W.oR)();const l=(0,g.Z)(),{type:t}=(0,m.BK)(e),o=(0,m.iH)(null),r=(0,m.qj)({errors:{}}),s=(0,m.qj)({label:"",type:t,value:""}),n=e=>{v.api.post("resources/store",s).then((e=>{var t;l.notify({type:"positive",message:null===e||void 0===e||null===(t=e.data)||void 0===t?void 0:t.message}),a.emit("onCreated",e.data.list),o.value.resetForm()})).catch((e=>{var a,t,o,s,n,d,i;null!==e&&void 0!==e&&null!==(a=e.response)&&void 0!==a&&null!==(t=a.data)&&void 0!==t&&t.errors&&(r.errors=null===(o=e.response.data)||void 0===o?void 0:o.errors),(null===e||void 0===e||null===(s=e.response)||void 0===s||null===(n=s.data)||void 0===n?void 0:n.message)&&l.notify({type:"negative",message:null===(d=e.response)||void 0===d||null===(i=d.data)||void 0===i?void 0:i.message})}))},d=e=>{s.type="dt",s.value="",s.label=""};return{localData:r,formData:s,resetForm:d,handleSubmit:n}}};var w=l(151),C=l(5269),S=l(4689),V=l(5869),_=l(2165),Z=l(7518),x=l.n(Z);q.render=h;const Q=q;x()(q,"components",{QCard:w.Z,QForm:C.Z,QInput:S.Z,QSeparator:V.Z,QBtn:_.Z});const k={class:"zsubtitle q-py-md"},U={class:"col-xs-12"},j={class:"col-xs-12"};function z(e,a,l,r,s,n){const d=(0,t.up)("q-input"),i=(0,t.up)("q-separator"),u=(0,t.up)("q-btn"),p=(0,t.up)("q-form"),c=(0,t.up)("q-card");return(0,t.wg)(),(0,t.j4)(c,{style:{"min-width":"450px"},class:"q-pa-lg"},{default:(0,t.w5)((()=>[(0,t.Wm)(p,{ref:"formRef",onReset:(0,f.iM)(r.resetForm,["prevent"]),onSubmit:(0,f.iM)(r.handleSubmit,["prevent"])},{default:(0,t.w5)((()=>{var e,s,n,p;return[(0,t.Wm)("h1",k,(0,o.zw)(l.title),1),(0,t.Wm)(d,{modelValue:r.formData.value,"onUpdate:modelValue":a[1]||(a[1]=e=>r.formData.value=e),class:"col-xs-12",outlined:"",autofocus:"",label:"Slug",error:r.localData.errors.hasOwnProperty("value"),"error-message":null===(e=r.localData.errors)||void 0===e||null===(s=e.name)||void 0===s?void 0:s.toString(),onBlur:a[2]||(a[2]=e=>delete r.localData.errors["value"]),rules:[e=>!!e||"Slug is required"]},null,8,["modelValue","error","error-message","rules"]),(0,t.Wm)(d,{modelValue:r.formData.label,"onUpdate:modelValue":a[3]||(a[3]=e=>r.formData.label=e),class:"col-xs-12",outlined:"",label:"Label",error:r.localData.errors.hasOwnProperty("label"),"error-message":null===(n=r.localData.errors)||void 0===n||null===(p=n.description)||void 0===p?void 0:p.toString(),rules:[e=>!!e||"Label is required"],onBlur:a[4]||(a[4]=e=>delete r.localData.errors["label"])},null,8,["modelValue","error","error-message","rules"]),(0,t.Wm)("div",U,[(0,t.Wm)(i)]),(0,t.Wm)("div",j,[(0,t.Wm)(u,{flat:"",color:"primary",type:"submit",label:"Save"}),(0,t.Wm)(u,{flat:"",color:"negative",type:"reset",label:"Reset"})])]})),_:1},8,["onReset","onSubmit"])])),_:1})}const E={emits:["onCreated"],props:["title","id"],setup(e,a){(0,W.oR)();const l=(0,g.Z)(),o=(0,m.iH)(null),r=((0,m.iH)(e.id),(0,m.qj)({errors:{}})),s=(0,m.qj)({id:"",label:"",type:"",value:""}),n=e=>{v.api.put("resources/"+s.id,s).then((e=>{var t;l.notify({type:"positive",message:null===e||void 0===e||null===(t=e.data)||void 0===t?void 0:t.message}),a.emit("onUpdated",e.data.list),o.value.resetForm()})).catch((e=>{var a,t,o,s,n,d,i;null!==e&&void 0!==e&&null!==(a=e.response)&&void 0!==a&&null!==(t=a.data)&&void 0!==t&&t.errors&&(r.errors=null===(o=e.response.data)||void 0===o?void 0:o.errors),(null===e||void 0===e||null===(s=e.response)||void 0===s||null===(n=s.data)||void 0===n?void 0:n.message)&&l.notify({type:"negative",message:null===(d=e.response)||void 0===d||null===(i=d.data)||void 0===i?void 0:i.message})}))};(0,t.bv)((()=>{v.api.get(`resources/${e.id}`).then((e=>{s.id=e.data.id,s.value=e.data.value,s.label=e.data.label,s.type=e.data.type})).catch((e=>{var a,t,o,s,n,d,i;null!==e&&void 0!==e&&null!==(a=e.response)&&void 0!==a&&null!==(t=a.data)&&void 0!==t&&t.errors&&(r.errors=null===(o=e.response.data)||void 0===o?void 0:o.errors),(null===e||void 0===e||null===(s=e.response)||void 0===s||null===(n=s.data)||void 0===n?void 0:n.message)&&l.notify({type:"negative",message:null===(d=e.response)||void 0===d||null===(i=d.data)||void 0===i?void 0:i.message})}))}));const d=e=>{s.type=type,s.value="",s.label=""};return{localData:r,formData:s,resetForm:d,handleSubmit:n}}};E.render=z;const I=E;x()(E,"components",{QCard:w.Z,QForm:C.Z,QInput:S.Z,QSeparator:V.Z,QBtn:_.Z});const O={components:{Edit:I,Create:Q},setup(e,a){const l=(0,g.Z)(),o=(0,m.iH)(null),r=(0,m.qj)({openCreate:!1,openEdit:!1,search:"",listData:{per_page:15,data:[],current_page:1,total:1}}),s=e=>{r.openCreate=!1,r.listData=e},n=e=>{r.openEdit=!1,r.listData=e},d=e=>{v.api.delete(`resources/${e}/destroy`,{params:{type:"sc"}}).then((e=>{var a;r.listData=e.data.list,l.notify({type:"positive",message:null===(a=e.data)||void 0===a?void 0:a.message})})).catch((e=>{var a;let t=null!==e&&void 0!==e&&e.response?null===(a=e.response)||void 0===a?void 0:a.message:e.toString();l.notify({type:"negative",message:t})}))},i=e=>{l.dialog({title:"Confirm",message:"Would you like to delete?",cancel:!0,persistent:!0}).onOk((()=>{d(e)})).onOk((()=>{})).onCancel((()=>{})).onDismiss((()=>{}))},u=e=>{f(e)},p=e=>{o.value=e,r.openEdit=!0},c=e=>{13===e.keyCode&&f(1)},f=e=>{v.api.get(`resources/sc/index?page=${e}`,{params:{search:r.search}}).then((e=>{console.log(e.data);const{current_page:a,total:l,per_page:t,data:o}=e.data;r.listData.current_page=a,r.listData.data=o,r.listData.total=l,r.listData.per_page=t})).catch((e=>{var a;let t=null!==e&&void 0!==e&&e.response?null===(a=e.response)||void 0===a?void 0:a.message:e.toString();l.notify({type:"negative",message:t})}))};return(0,t.bv)((()=>{var e;return f(null===(e=r.listData)||void 0===e?void 0:e.page)})),{updatePagination:u,pageCount:(0,m.Fl)((()=>Math.ceil(r.listData.total/r.listData.per_page))),deleteData:i,localData:r,handleEdit:p,selectedId:o,onCreated:s,onUpdated:n,handleSearch:c}}};var R=l(4554),B=l(7011),F=l(3414),H=l(2035),P=l(2350),L=l(7300),M=l(6778);O.render=c;const K=O;x()(O,"components",{QBtn:_.Z,QInput:S.Z,QIcon:R.Z,QSeparator:V.Z,QList:B.Z,QItem:F.Z,QItemSection:H.Z,QItemLabel:P.Z,QPagination:L.Z,QDialog:M.Z})}}]);
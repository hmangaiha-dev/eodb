"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[242],{3242:(e,a,l)=>{l.r(a),l.d(a,{default:()=>j});l(7280),l(246);var t=l(3673),o=l(2323);const n=(0,t.Wm)("h1",{class:"ztitle"},"List of roles",-1),s={class:"zdetailcard"},i={class:"row q-col-gutter-md"},d={class:"flex justify-between flex-inline col-12"},r={class:"col-12"},u={class:"col-12"},c={class:"flex flex-inline q-gutter-sm"};function m(e,a,l,m,p,v){const f=(0,t.up)("q-btn"),h=(0,t.up)("q-icon"),w=(0,t.up)("q-input"),W=(0,t.up)("q-separator"),g=(0,t.up)("q-item-label"),q=(0,t.up)("q-item-section"),k=(0,t.up)("q-item"),Z=(0,t.up)("q-list"),_=(0,t.up)("q-page");return(0,t.wg)(),(0,t.j4)(_,{class:"container-lg",padding:""},{default:(0,t.w5)((()=>[n,(0,t.Wm)("div",s,[(0,t.Wm)("div",i,[(0,t.Wm)("div",d,[(0,t.Wm)(f,{to:{name:"role:create"},outline:"",label:"New role",color:"primary"}),(0,t.Wm)(w,{modelValue:m.localData.search,"onUpdate:modelValue":a[1]||(a[1]=e=>m.localData.search=e),placeholder:"Search",onKeyup:m.handleSearch,outlined:"",dense:""},{append:(0,t.w5)((()=>[(0,t.Wm)(h,{name:"search"})])),_:1},8,["modelValue","onKeyup"])]),(0,t.Wm)("div",r,[(0,t.Wm)(W)]),(0,t.Wm)("div",u,[(0,t.Wm)(Z,{separator:""},{default:(0,t.w5)((()=>{var e,a;return[((0,t.wg)(!0),(0,t.j4)(t.HY,null,(0,t.Ko)(null===(e=m.localData)||void 0===e||null===(a=e.listData)||void 0===a?void 0:a.data,(e=>((0,t.wg)(),(0,t.j4)(k,{key:e.id},{default:(0,t.w5)((()=>[(0,t.Wm)(q,null,{default:(0,t.w5)((()=>[(0,t.Wm)(g,null,{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(null===e||void 0===e?void 0:e.name),1)])),_:2},1024),(0,t.Wm)(g,{caption:""},{default:(0,t.w5)((()=>[(0,t.Uk)((0,o.zw)(null===e||void 0===e?void 0:e.description),1)])),_:2},1024)])),_:2},1024),(0,t.Wm)(q,{side:""},{default:(0,t.w5)((()=>[(0,t.Wm)("div",c,[(0,t.Wm)(f,{size:"12px",to:{name:"role:edit",params:{id:e.id}},outline:"",icon:"edit"},null,8,["to"])])])),_:2},1024)])),_:2},1024)))),128))]})),_:1})])])])])),_:1})}var p=l(1959),v=l(8825),f=l(5474);const h={setup(e,a){const l=(0,v.Z)(),o=(0,p.qj)({search:"",listData:{data:[]}}),n=()=>{l.dialog({title:"Confirm",message:"Would you like to delete?",cancel:!0,persistent:!0}).onOk((()=>{})).onOk((()=>{})).onCancel((()=>{})).onDismiss((()=>{}))},s=e=>{13===e.keyCode&&i()},i=()=>{f.api.get("roles",{params:{search:o.search}}).then((e=>{o.listData=e.data})).catch((e=>{var a,t,o,n;(null===e||void 0===e||null===(a=e.response)||void 0===a||null===(t=a.data)||void 0===t?void 0:t.message)&&l.notify({type:"negative",message:null===(o=e.response)||void 0===o||null===(n=o.data)||void 0===n?void 0:n.message})}))};return(0,t.bv)((()=>{i()})),{localData:o,deleteRole:n,handleSearch:s}}};var w=l(4379),W=l(2165),g=l(4689),q=l(4554),k=l(5869),Z=l(7011),_=l(3414),y=l(2035),Q=l(2350),b=l(7518),D=l.n(b);h.render=m;const j=h;D()(h,"components",{QPage:w.Z,QBtn:W.Z,QInput:g.Z,QIcon:q.Z,QSeparator:k.Z,QList:Z.Z,QItem:_.Z,QItemSection:y.Z,QItemLabel:Q.Z})}}]);
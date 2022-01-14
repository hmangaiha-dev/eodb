"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[4611],{4611:(e,a,t)=>{t.r(a),t.d(a,{default:()=>j});t(7280);var l=t(3673),n=t(2323);const i={class:"row q-col-gutter-md"},o={class:"flex justify-between items-baseline flex-inline col-12"},s=(0,l.Wm)("p",{class:"zsubtitle"},"Application profiles",-1),p={class:"col-12"},d={class:"col-12"},u={class:"flex flex-inline q-gutter-sm"},c={class:"col-12"};function r(e,a,t,r,m,g){const v=(0,l.up)("q-icon"),f=(0,l.up)("q-input"),h=(0,l.up)("q-separator"),D=(0,l.up)("q-item-label"),W=(0,l.up)("q-item-section"),_=(0,l.up)("q-btn"),w=(0,l.up)("q-item"),y=(0,l.up)("q-list"),q=(0,l.up)("q-pagination"),k=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(k,{class:"container-lg",padding:""},{default:(0,l.w5)((()=>[(0,l.Wm)("div",null,[(0,l.Wm)("div",i,[(0,l.Wm)("div",o,[s,(0,l.Wm)(f,{modelValue:r.localData.search,"onUpdate:modelValue":a[1]||(a[1]=e=>r.localData.search=e),placeholder:"Search",onKeyup:r.handleSearch,outlined:"",dense:""},{append:(0,l.w5)((()=>[(0,l.Wm)(v,{name:"search"})])),_:1},8,["modelValue","onKeyup"])]),(0,l.Wm)("div",p,[(0,l.Wm)(h)]),(0,l.Wm)("div",d,[(0,l.Wm)(y,{separator:""},{default:(0,l.w5)((()=>[((0,l.wg)(!0),(0,l.j4)(l.HY,null,(0,l.Ko)(r.localData.listData.data,(e=>((0,l.wg)(),(0,l.j4)(w,{key:e.id},{default:(0,l.w5)((()=>[(0,l.Wm)(W,null,{default:(0,l.w5)((()=>[(0,l.Wm)(D,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.title),1)])),_:2},1024),(0,l.Wm)(D,{caption:""},{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.code),1)])),_:2},1024)])),_:2},1024),(0,l.Wm)(W,{side:""},{default:(0,l.w5)((()=>[(0,l.Wm)("div",u,[(0,l.Wm)(_,{onClick:a=>r.handleDelete(e),size:"12px",outline:"",icon:"delete"},null,8,["onClick"])])])),_:2},1024)])),_:2},1024)))),128))])),_:1})]),(0,l.Wm)("div",c,[(0,l.Wm)(q,{"onUpdate:modelValue":[r.updatePagination,a[2]||(a[2]=e=>r.localData.listData.current_page=e)],modelValue:r.localData.listData.current_page,max:r.pageCount,input:""},null,8,["onUpdate:modelValue","modelValue","max"])])])])])),_:1})}var m=t(1959),g=t(954),v=t(5474),f=t(8825),h=t(4224);const D={components:{Edit:h.default,Create:g.default},setup(e,a){const t=(0,f.Z)(),n=(0,m.qj)({openCreate:!1,openEdit:!1,selectedStaff:null,search:"",listData:{per_page:15,data:[],current_page:1,total:1}}),i=e=>{v.api.delete(`application-profiles/${e}`).then((e=>{var a;n.listData=e.data.list,t.notify({type:"positive",message:null===(a=e.data)||void 0===a?void 0:a.message})})).catch((e=>{var a,l;t.notify({type:"negative",message:null===e||void 0===e||null===(a=e.response)||void 0===a||null===(l=a.data)||void 0===l?void 0:l.message})}))},o=e=>{n.selectedStaff=e,n.openEdit=!0},s=e=>{t.dialog({title:"Confirm",message:"Would you like to delete?",cancel:!0,persistent:!0}).onOk((()=>{i(e.id)})).onCancel((()=>{})).onDismiss((()=>{}))},p=e=>{n.search=e.target.value,13===e.keyCode&&c(1)},d=e=>{c(e)},u=e=>{v.api.put(`application-profiles/${e.id}/toggle`).then((e=>{var a;t.notify({type:"positive",message:null===(a=e.data)||void 0===a?void 0:a.message})})).catch((e=>{var a;let l=null!==e&&void 0!==e&&e.response?null===(a=e.response)||void 0===a?void 0:a.message:e.toString();t.notify({type:"negative",message:l})}))},c=e=>{v.api.get(`application-profiles/index?page=${e}`,{params:{search:n.search}}).then((e=>{const{current_page:a,total:t,per_page:l,data:i}=e.data.list;n.listData.current_page=a,n.listData.data=i,n.listData.total=t,n.listData.per_page=l})).catch((e=>{var a;let l=null!==e&&void 0!==e&&e.response?null===(a=e.response)||void 0===a?void 0:a.message:e.toString();t.notify({type:"negative",message:l})}))};return(0,l.bv)((()=>c(n.listData.page))),{updatePagination:d,pageCount:(0,m.Fl)((()=>Math.ceil(n.listData.total/n.listData.per_page))),deleteProfile:i,localData:n,handleSearch:p,handleEdit:o,publish:u,handleDelete:s}}};var W=t(4379),_=t(4689),w=t(4554),y=t(5869),q=t(7011),k=t(3414),Z=t(2035),C=t(2350),Q=t(8886),b=t(2165),S=t(7300),x=t(7518),V=t.n(x);D.render=r;const j=D;V()(D,"components",{QPage:W.Z,QInput:_.Z,QIcon:w.Z,QSeparator:y.Z,QList:q.Z,QItem:k.Z,QItemSection:Z.Z,QItemLabel:C.Z,QToggle:Q.Z,QBtn:b.Z,QPagination:S.Z})}}]);
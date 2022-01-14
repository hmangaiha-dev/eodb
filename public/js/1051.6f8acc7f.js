"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[1051],{1051:(a,e,t)=>{t.r(e),t.d(e,{default:()=>z});t(7280);var l=t(3673),n=t(2323);const o=(0,l.Wm)("h1",{class:"ztitle"},"Staffs",-1),d={class:"zdetailcard"},i={class:"row q-col-gutter-md"},s={class:"flex justify-between flex-inline col-12"},u={class:"col-12"},p={class:"col-12"},c={class:"text-caption"},r={class:"flex flex-inline q-gutter-sm"},m={class:"col-12"};function f(a,e,t,f,g,v){const D=(0,l.up)("q-btn"),h=(0,l.up)("q-icon"),W=(0,l.up)("q-input"),C=(0,l.up)("q-separator"),w=(0,l.up)("q-item-label"),_=(0,l.up)("q-item-section"),S=(0,l.up)("q-item"),k=(0,l.up)("q-list"),q=(0,l.up)("q-pagination"),y=(0,l.up)("Create"),V=(0,l.up)("q-dialog"),Z=(0,l.up)("Edit"),Q=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(Q,{class:"container-lg",padding:""},{default:(0,l.w5)((()=>[o,(0,l.Wm)("div",d,[(0,l.Wm)("div",i,[(0,l.Wm)("div",s,[(0,l.Wm)(D,{onClick:e[1]||(e[1]=a=>f.localData.openCreate=!0),outline:"",label:"New staff",color:"primary"}),(0,l.Wm)(W,{modelValue:f.localData.search,"onUpdate:modelValue":e[2]||(e[2]=a=>f.localData.search=a),placeholder:"Search",onKeyup:f.handleSearch,outlined:"",dense:""},{append:(0,l.w5)((()=>[(0,l.Wm)(h,{name:"search"})])),_:1},8,["modelValue","onKeyup"])]),(0,l.Wm)("div",u,[(0,l.Wm)(C)]),(0,l.Wm)("div",p,[(0,l.Wm)(k,{separator:""},{default:(0,l.w5)((()=>[((0,l.wg)(!0),(0,l.j4)(l.HY,null,(0,l.Ko)(f.localData.listData.data,(a=>((0,l.wg)(),(0,l.j4)(S,{key:a.id},{default:(0,l.w5)((()=>[(0,l.Wm)(_,null,{default:(0,l.w5)((()=>[(0,l.Wm)(w,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(a.full_name)+" : ",1),(0,l.Wm)("span",c,(0,n.zw)(null===a||void 0===a?void 0:a.email),1)])),_:2},1024),(0,l.Wm)(w,{caption:""},{default:(0,l.w5)((()=>{var e;return[(0,l.Uk)((0,n.zw)(null===a||void 0===a||null===(e=a.rolesName)||void 0===e?void 0:e.toString()),1)]})),_:2},1024)])),_:2},1024),(0,l.Wm)(_,{side:""},{default:(0,l.w5)((()=>[(0,l.Wm)("div",r,[(0,l.Wm)(D,{onClick:e=>f.handleEdit(a),size:"12px",outline:"",icon:"edit"},null,8,["onClick"]),(0,l.Wm)(D,{onClick:e=>f.handleDelete(a),size:"12px",outline:"",icon:"delete"},null,8,["onClick"])])])),_:2},1024)])),_:2},1024)))),128))])),_:1})]),(0,l.Wm)("div",m,[(0,l.Wm)(q,{"onUpdate:modelValue":[f.updatePagination,e[3]||(e[3]=a=>f.localData.listData.current_page=a)],modelValue:f.localData.listData.current_page,max:f.pageCount,input:""},null,8,["onUpdate:modelValue","modelValue","max"])])])]),(0,l.Wm)(V,{onHide:e[4]||(e[4]=a=>f.localData.openCreate=!1),modelValue:f.localData.openCreate,"onUpdate:modelValue":e[5]||(e[5]=a=>f.localData.openCreate=a)},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{onOnStaffCreated:f.onStaffCreated},null,8,["onOnStaffCreated"])])),_:1},8,["modelValue"]),(0,l.Wm)(V,{onHide:e[6]||(e[6]=a=>f.localData.openEdit=!1),modelValue:f.localData.openEdit,"onUpdate:modelValue":e[7]||(e[7]=a=>f.localData.openEdit=a)},{default:(0,l.w5)((()=>{var a;return[f.localData.selectedStaff?((0,l.wg)(),(0,l.j4)(Z,{key:0,onOnStaffUpdated:f.onStaffUpdated,id:null===(a=f.localData.selectedStaff)||void 0===a?void 0:a.id},null,8,["onOnStaffUpdated","id"])):(0,l.kq)("",!0)]})),_:1},8,["modelValue"])])),_:1})}var g=t(1959),v=t(954),D=t(5474),h=t(8825),W=t(4224);const C={components:{Edit:W.default,Create:v.default},setup(a,e){const t=(0,h.Z)(),n=(0,g.qj)({openCreate:!1,openEdit:!1,selectedStaff:null,search:"",listData:{per_page:15,data:[],current_page:1,total:1}}),o=a=>{n.openCreate=!1,n.listData=a},d=a=>{n.openEdit=!1,n.listData=a},i=a=>{D.api.delete(`staff/${a}`).then((a=>{var e;n.listData=a.data.list,t.notify({type:"positive",message:null===(e=a.data)||void 0===e?void 0:e.message})})).catch((a=>{var e,l;t.notify({type:"negative",message:null===a||void 0===a||null===(e=a.response)||void 0===e||null===(l=e.data)||void 0===l?void 0:l.message})}))},s=a=>{n.selectedStaff=a,n.openEdit=!0},u=a=>{t.dialog({title:"Confirm",message:"Would you like to delete?",cancel:!0,persistent:!0}).onOk((()=>{i(a.id)})).onCancel((()=>{})).onDismiss((()=>{}))},p=a=>{n.search=a.target.value,13===a.keyCode&&r(1)},c=a=>{r(a)},r=a=>{D.api.get(`staff/index?page=${a}`,{params:{search:n.search}}).then((a=>{console.log(a.data);const{current_page:e,total:t,per_page:l,data:o}=a.data.data;n.listData.current_page=e,n.listData.data=o,n.listData.total=t,n.listData.per_page=l})).catch((a=>{var e;let l=null!==a&&void 0!==a&&a.response?null===(e=a.response)||void 0===e?void 0:e.message:a.toString();t.notify({type:"negative",message:l})}))};return(0,l.bv)((()=>r(n.listData.page))),{updatePagination:c,pageCount:(0,g.Fl)((()=>Math.ceil(n.listData.total/n.listData.per_page))),deleteStaff:i,localData:n,onStaffCreated:o,onStaffUpdated:d,handleSearch:p,handleEdit:s,handleDelete:u}}};var w=t(4379),_=t(2165),S=t(4689),k=t(4554),q=t(5869),y=t(7011),V=t(3414),Z=t(2035),Q=t(2350),U=t(7300),x=t(6778),E=t(7518),b=t.n(E);C.render=f;const z=C;b()(C,"components",{QPage:w.Z,QBtn:_.Z,QInput:S.Z,QIcon:k.Z,QSeparator:q.Z,QList:y.Z,QItem:V.Z,QItemSection:Z.Z,QItemLabel:Q.Z,QPagination:U.Z,QDialog:x.Z})}}]);
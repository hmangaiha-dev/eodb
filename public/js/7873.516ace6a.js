"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[7873],{7873:(a,e,n)=>{n.r(e),n.d(e,{default:()=>P});n(7280);var o=n(3673);const l=(0,o.Wm)("h1",{class:"ztitle"},"Ongoing Applications",-1),t={class:"row zdetailcard"},s={class:"col-xs-12"};function i(a,e,n,i,r,d){const g=(0,o.up)("q-icon"),c=(0,o.up)("q-input"),p=(0,o.up)("q-table"),u=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(u,{class:"container-lg",padding:""},{default:(0,o.w5)((()=>[l,(0,o.Wm)("div",t,[(0,o.Wm)("div",s,[(0,o.Wm)(p,{pagination:i.tableData.pagination,"onUpdate:pagination":e[2]||(e[2]=a=>i.tableData.pagination=a),loading:i.localData.loading,onRequest:i.onRequest,flat:"",rows:i.tableData.data,columns:i.columns,"row-key":"fullname","binary-state-sort":"","rows-per-page-options":[7,15,30,50]},{top:(0,o.w5)((()=>[(0,o.Wm)(c,{outlined:"",dense:"",modelValue:i.localData.search,"onUpdate:modelValue":e[1]||(e[1]=a=>i.localData.search=a),onChange:i.handleSearch,placeholder:"Search"},{append:(0,o.w5)((()=>[(0,o.Wm)(g,{name:"search"})])),_:1},8,["modelValue","onChange"])])),_:1},8,["pagination","loading","onRequest","rows","columns"])])])])),_:1})}n(9544);var r=n(5474),d=n(1959),g=n(8825);const c=[{name:"fullname",align:"left",label:"Fullname",field:"full_name",sortable:!0},{name:"email",align:"left",label:"Email",field:"email",sortable:!0},{name:"roles",align:"left",label:"Roles",field:"roles"},{name:"current_post",align:"center",label:"Post",field:"current_post"}],p={setup(){const a=(0,g.Z)(),e=(0,d.qj)({loading:!1,search:""}),n=(0,d.qj)({data:[],pagination:{sortBy:"id",descending:!1,page:1,rowsPerPage:5,rowsNumber:0}}),l=a=>{t(n)},t=o=>{const{page:l,rowsPerPage:t,sortBy:s,descending:i}=o.pagination;e.loading=!0,r.api.get("office/applications/ongoing",{params:{page:l,rowsPerPage:t,sortBy:s,descending:i,search:e.search}}).then((a=>{const{current_page:e,per_page:o,data:l,to:t,total:s}=a.data;n.data=l,n.pagination.rowsNumber=s,n.pagination.page=e,n.pagination.rowsPerPage=o,console.log(a.data)})).catch((e=>{var n,o,l,t;(null===e||void 0===e||null===(n=e.response)||void 0===n||null===(o=n.data)||void 0===o?void 0:o.message)&&a.notify({type:"negative",message:null===(l=e.response)||void 0===l||null===(t=l.data)||void 0===t?void 0:t.message})})).finally((()=>e.loading=!1))};return(0,o.bv)((()=>{t({pagination:n.pagination,filter:void 0})})),{onRequest:t,columns:c,tableData:n,localData:e,handleSearch:l}}};var u=n(4379),m=n(6023),f=n(4689),h=n(4554),b=n(3884),w=n(9721),v=n(7518),q=n.n(v);p.render=i;const P=p;q()(p,"components",{QPage:u.Z,QTable:m.Z,QInput:f.Z,QIcon:h.Z,QTd:b.Z,QBadge:w.Z})}}]);
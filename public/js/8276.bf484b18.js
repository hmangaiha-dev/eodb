"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[8276],{8276:(a,e,n)=>{n.r(e),n.d(e,{default:()=>Z});n(7280);var o=n(3673),l=n(2323);const t=(0,o.Wm)("h1",{class:"ztitle"},"Staff postings",-1),s={class:"row zdetailcard"},i={class:"col-xs-12"},r={class:"zlabel"};function d(a,e,n,d,p,c){const u=(0,o.up)("q-btn"),g=(0,o.up)("q-space"),m=(0,o.up)("q-icon"),f=(0,o.up)("q-input"),w=(0,o.up)("q-td"),b=(0,o.up)("q-badge"),v=(0,o.up)("q-table"),h=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(h,{class:"container-lg",padding:""},{default:(0,o.w5)((()=>[t,(0,o.Wm)("div",s,[(0,o.Wm)("div",i,[(0,o.Wm)(v,{pagination:d.tableData.pagination,"onUpdate:pagination":e[2]||(e[2]=a=>d.tableData.pagination=a),loading:d.localData.loading,onRequest:d.onRequest,flat:"",rows:d.tableData.data,columns:d.columns,"row-key":"fullname","binary-state-sort":"","rows-per-page-options":[7,15,30,50]},{top:(0,o.w5)((()=>[(0,o.Wm)(u,{to:{name:"posting:create"},outline:"",color:"primary",label:"New Posting"}),(0,o.Wm)(g),(0,o.Wm)(f,{outlined:"",dense:"",modelValue:d.localData.search,"onUpdate:modelValue":e[1]||(e[1]=a=>d.localData.search=a),onChange:d.handleSearch,placeholder:"Search"},{append:(0,o.w5)((()=>[(0,o.Wm)(m,{name:"search"})])),_:1},8,["modelValue","onChange"])])),"body-cell-current_post":(0,o.w5)((a=>[(0,o.Wm)(w,{props:a},{default:(0,o.w5)((()=>{var e,n;return[(0,o.Wm)("p",r,(0,l.zw)(null===(e=a.row.current_post)||void 0===e?void 0:e.code)+" : "+(0,l.zw)(null===(n=a.row.current_post)||void 0===n?void 0:n.name),1)]})),_:2},1032,["props"])])),"body-cell-roles":(0,o.w5)((a=>[(0,o.Wm)(w,{props:a},{default:(0,o.w5)((()=>[((0,o.wg)(!0),(0,o.j4)(o.HY,null,(0,o.Ko)(a.row.roles,(a=>((0,o.wg)(),(0,o.j4)(b,{key:a.id,label:a.name},null,8,["label"])))),128))])),_:2},1032,["props"])])),_:1},8,["pagination","loading","onRequest","rows","columns"])])])])),_:1})}n(9544);var p=n(1959),c=n(5474),u=n(8825);const g=[{name:"fullname",align:"left",label:"Fullname",field:"full_name",sortable:!0},{name:"email",align:"left",label:"Email",field:"email",sortable:!0},{name:"roles",align:"left",label:"Roles",field:"roles"},{name:"current_post",align:"center",label:"Post",field:"current_post"}],m={setup(){const a=(0,u.Z)(),e=(0,p.qj)({loading:!1,search:""}),n=(0,p.qj)({data:[],pagination:{sortBy:"id",descending:!1,page:1,rowsPerPage:5,rowsNumber:0}}),l=a=>{t(n)},t=o=>{const{page:l,rowsPerPage:t,sortBy:s,descending:i}=o.pagination;e.loading=!0,c.api.get("posting/index",{params:{page:l,rowsPerPage:t,sortBy:s,descending:i,search:e.search}}).then((a=>{const{current_page:e,per_page:o,data:l,to:t,total:s}=a.data.data;n.data=l,n.pagination.rowsNumber=s,n.pagination.page=e,n.pagination.rowsPerPage=o,console.log(a.data)})).catch((e=>{var n,o,l,t;(null===e||void 0===e||null===(n=e.response)||void 0===n||null===(o=n.data)||void 0===o?void 0:o.message)&&a.notify({type:"negative",message:null===(l=e.response)||void 0===l||null===(t=l.data)||void 0===t?void 0:t.message})})).finally((()=>e.loading=!1))};return(0,o.bv)((()=>{t({pagination:n.pagination,filter:void 0})})),{onRequest:t,visibleColumns:(0,p.iH)(["staff","office","designation","role","joined_at","status"]),columns:g,tableData:n,localData:e,handleSearch:l}}};var f=n(4379),w=n(6023),b=n(2165),v=n(2025),h=n(4689),q=n(4554),_=n(3884),y=n(9721),P=n(7518),W=n.n(P);m.render=d;const Z=m;W()(m,"components",{QPage:f.Z,QTable:w.Z,QBtn:b.Z,QSpace:v.Z,QInput:h.Z,QIcon:q.Z,QTd:_.Z,QBadge:y.Z})}}]);
"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[5679],{5679:(a,l,e)=>{e.r(l),e.d(l,{default:()=>j});var t=e(3673),o=e(2323);const n={class:"row"},s={class:"col-xs-12 ztitle"},i={class:"row q-col-gutter-xs q-ma-lg"},c={class:"col-6 zvalue"},d=(0,t.Wm)("div",{class:"ztitle"},"Attachments",-1),p={class:"zlabel col-4"},r={class:"zlabel col-4"};function u(a,l,e,u,m,g){const v=(0,t.up)("q-card"),h=(0,t.up)("q-dialog"),w=(0,t.up)("q-btn"),f=(0,t.up)("q-separator"),_=(0,t.up)("q-page");return(0,t.wg)(),(0,t.j4)(_,{padding:""},{default:(0,t.w5)((()=>{var a;return[(0,t.Wm)(h,{modelValue:u.dialog,"onUpdate:modelValue":l[1]||(l[1]=a=>u.dialog=a)},{default:(0,t.w5)((()=>[(0,t.Wm)(v,null,{default:(0,t.w5)((()=>[(0,t.Wm)("embed",{src:u.attachment,width:"500",height:"500"},null,8,["src"])])),_:1})])),_:1},8,["modelValue"]),(0,t.Wm)("div",n,[(0,t.Wm)("div",s,(0,o.zw)(null===(a=u.localData.application)||void 0===a?void 0:a.application_name),1)]),(0,t.Wm)("div",i,[((0,t.wg)(!0),(0,t.j4)(t.HY,null,(0,t.Ko)(u.localData.fields,((a,l)=>((0,t.wg)(),(0,t.j4)("div",{class:[[null!=a.field_value?"q-ml-md":""],"col-12 row"],key:l},[(0,t.Wm)("div",{class:[null==a.field_value?"col-12 nofield":"col-6 zlabel"]},(0,o.zw)(a.field_label),3),(0,t.Wm)("div",c,(0,o.zw)(a.field_value),1)],2)))),128))]),d,((0,t.wg)(!0),(0,t.j4)(t.HY,null,(0,t.Ko)(u.localData.attachments,((a,l)=>((0,t.wg)(),(0,t.j4)("div",{key:l,class:"row"},[(0,t.Wm)("div",p,(0,o.zw)(a.label),1),(0,t.Wm)("div",r,[(0,t.Wm)(w,{flat:"",color:"primary",label:"view",onClick:l=>u.getFile(a.path)},null,8,["onClick"])])])))),128)),(0,t.Wm)(f,{class:"q-my-md"})]})),_:1})}var m=e(5474),g=e(8825),v=e(1959),h=e(9582);const w={setup(a,l){const e=(0,h.yj)(),o=(0,h.tv)(),n=(0,g.Z)(),s=(0,v.iH)(!1),i=(0,v.iH)(""),c=(0,v.qj)({application:{},fields:[],attachments:[]});return(0,t.bv)((()=>{const a=e.params.id;m.api.get(`investor/applications/${a}`).then((a=>{const{application_code:l,application_values:e,application_name:t,regn_no:o,attachments:n}=a.data.data;c.application.regn_no=o,c.application.application_code=l,c.application.application_name=t,c.fields=e,c.attachments=n})).catch((a=>{console.log("permission message",a.response.data.message),o.push({name:"unauthorised"}),n.notify({type:"negative",icon:"warnings",message:a.response.data.message})}))})),{localData:c,dialog:s,route:e,router:o,attachment:i,getFile:a=>{i.value="http://localhost:8000/storage/"+a,s.value=!0,console.log("attachment",i.value)}}}};var f=e(4379),_=e(6778),W=e(151),q=e(2165),b=e(5869),z=e(7518),k=e.n(z);w.render=u;const j=w;k()(w,"components",{QPage:f.Z,QDialog:_.Z,QCard:W.Z,QBtn:q.Z,QSeparator:b.Z})}}]);
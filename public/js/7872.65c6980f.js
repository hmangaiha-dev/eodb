"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[7872],{7872:(a,l,e)=>{e.r(l),e.d(l,{default:()=>y});var t=e(3673),n=e(2323);const o={class:"row"},s={class:"col-xs-12 ztitle"},i={class:"row q-col-gutter-xs q-ma-lg"},c={style:{"align-self":"flex-end"},class:"col-6 zvalue"},d=(0,t.Wm)("div",{class:"ztitle"},"Attachments",-1),p={class:"zlabel col-4"},r={class:"zlabel col-4"};function u(a,l,e,u,m,g){const v=(0,t.up)("q-card"),f=(0,t.up)("q-dialog"),h=(0,t.up)("q-btn"),w=(0,t.up)("q-separator"),_=(0,t.up)("q-page");return(0,t.wg)(),(0,t.j4)(_,{padding:""},{default:(0,t.w5)((()=>{var a;return[(0,t.Wm)(f,{modelValue:u.dialog,"onUpdate:modelValue":l[1]||(l[1]=a=>u.dialog=a)},{default:(0,t.w5)((()=>[(0,t.Wm)(v,null,{default:(0,t.w5)((()=>[(0,t.Wm)("embed",{src:u.attachment,width:"500",height:"500"},null,8,["src"])])),_:1})])),_:1},8,["modelValue"]),(0,t.Wm)("div",o,[(0,t.Wm)("div",s,(0,n.zw)(null===(a=u.localData.application)||void 0===a?void 0:a.application_name),1)]),(0,t.Wm)("div",i,[((0,t.wg)(!0),(0,t.j4)(t.HY,null,(0,t.Ko)(u.localData.fields,((a,l)=>((0,t.wg)(),(0,t.j4)("div",{class:[[null!=a.field_value?"q-ml-md":""],"col-12 row"],key:l},[(0,t.Wm)("div",{innerHTML:a.field_label,class:[null==a.field_value?"col-12 nofield":"col-6 zlabel"]},null,10,["innerHTML"]),(0,t.Wm)("div",c,(0,n.zw)(a.field_value),1)],2)))),128))]),d,((0,t.wg)(!0),(0,t.j4)(t.HY,null,(0,t.Ko)(u.localData.attachments,((a,l)=>((0,t.wg)(),(0,t.j4)("div",{key:l,class:"row"},[(0,t.Wm)("div",p,(0,n.zw)(a.label),1),(0,t.Wm)("div",r,[(0,t.Wm)(h,{flat:"",color:"primary",label:"view",onClick:l=>u.getFile(a.path)},null,8,["onClick"])])])))),128)),(0,t.Wm)(w,{class:"q-my-md"})]})),_:1})}var m=e(5474),g=e(8825),v=e(1959),f=e(9582);const h={setup(a,l){const e=(0,f.yj)(),n=(0,f.tv)(),o=(0,g.Z)(),s=(0,v.iH)(!1),i=(0,v.iH)(""),c=(0,v.qj)({application:{},fields:[],attachments:[]});return(0,t.bv)((()=>{const a=e.params.id;m.api.get(`investor/applications/${a}`).then((a=>{const{application_code:l,application_values:e,application_name:t,regn_no:n,attachments:o}=a.data.data;c.application.regn_no=n,c.application.application_code=l,c.application.application_name=t,c.fields=e,c.attachments=o})).catch((a=>{console.log("permission message",a.response.data.message),n.push({name:"unauthorised"}),o.notify({type:"negative",icon:"warnings",message:a.response.data.message})}))})),{localData:c,dialog:s,route:e,router:n,attachment:i,getFile:a=>{i.value="http://localhost:8000/storage/"+a,s.value=!0,console.log("attachment",i.value)}}}};var w=e(4379),_=e(6778),W=e(151),q=e(2165),b=e(5869),z=e(7518),k=e.n(z);h.render=u;const y=h;k()(h,"components",{QPage:w.Z,QDialog:_.Z,QCard:W.Z,QBtn:q.Z,QSeparator:b.Z})}}]);
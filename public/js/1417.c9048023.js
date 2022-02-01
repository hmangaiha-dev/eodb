"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[1417],{6064:(e,t,a)=>{a.r(t),a.d(t,{default:()=>D});var l=a(3673),n=a(2323);const o={class:"zsubtitle"},c=(0,l.Wm)("br",null,null,-1),i=(0,l.Wm)("br",null,null,-1),m={class:"col-12"};function p(e,t,a,p,s,u){const d=(0,l.up)("q-card"),r=(0,l.up)("q-dialog"),g=(0,l.up)("Attachments"),h=(0,l.up)("q-btn"),v=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(v,{padding:"",class:"container-lg"},{default:(0,l.w5)((()=>{var e;return[(0,l.Wm)(r,{modelValue:p.dialog,"onUpdate:modelValue":t[1]||(t[1]=e=>p.dialog=e)},{default:(0,l.w5)((()=>[(0,l.Wm)(d,null,{default:(0,l.w5)((()=>[(0,l.Wm)("embed",{src:p.attachment,width:"500",height:"500"},null,8,["src"])])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)("h6",o,(0,n.zw)((null===(e=p.localData.application)||void 0===e?void 0:e.application_name)||""),1),c,i,(0,l.Wm)("div",{innerHTML:p.localData.template},null,8,["innerHTML"]),(0,l.Wm)(g,{attachments:p.localData.attachments},null,8,["attachments"]),(0,l.Wm)("div",m,[(0,l.Wm)(h,{onClick:p.printApplication,label:"Print"},null,8,["onClick"])])]})),_:1})}var s=a(1959),u=a(5474),d=a(8825),r=a(9582);const g={class:"row"},h=(0,l.Wm)("div",{class:"col-12 zsubtitle"},"Document upload",-1),v={class:"zlabel q-ma-none q-pa-none"},f={class:"text-caption q-ma-none q-pa-none"};function w(e,t,a,o,c,i){const m=(0,l.up)("q-icon"),p=(0,l.up)("q-item-section"),s=(0,l.up)("q-item-label"),u=(0,l.up)("q-btn"),d=(0,l.up)("q-item"),r=(0,l.up)("q-img"),w=(0,l.up)("q-dialog");return(0,l.wg)(),(0,l.j4)(l.HY,null,[(0,l.Wm)("div",g,[h,((0,l.wg)(!0),(0,l.j4)(l.HY,null,(0,l.Ko)(e.$props.attachments,(e=>((0,l.wg)(),(0,l.j4)("div",{class:"col-12 zdetailcard q-pa-md q-ma-md",key:e.key},[(0,l.Wm)(d,{class:"flex"},{default:(0,l.w5)((()=>[(0,l.Wm)(p,{avatar:""},{default:(0,l.w5)((()=>["application/pdf"===e.mime?((0,l.wg)(),(0,l.j4)(m,{key:0,color:"grey",name:"picture_as_pdf"})):((0,l.wg)(),(0,l.j4)(m,{key:1,color:"grey",name:"image"}))])),_:2},1024),(0,l.Wm)(s,{style:{flex:"1"}},{default:(0,l.w5)((()=>[(0,l.Wm)("p",v,(0,n.zw)(null===e||void 0===e?void 0:e.label),1),(0,l.Wm)("p",f,(0,n.zw)(null===e||void 0===e?void 0:e.original_name),1)])),_:2},1024),(0,l.Wm)(p,{side:""},{default:(0,l.w5)((()=>[(0,l.Wm)(u,{label:"Open",outline:"",onClick:t=>o.openAttachment(e)},null,8,["onClick"])])),_:2},1024)])),_:2},1024)])))),128))]),(0,l.Wm)(w,{modelValue:o.localState.openImage,"onUpdate:modelValue":t[1]||(t[1]=e=>o.localState.openImage=e)},{default:(0,l.w5)((()=>[(0,l.Wm)(r,{src:o.localState.selectedAttachment.full_path},null,8,["src"])])),_:1},8,["modelValue"]),(0,l.Wm)(w,{modelValue:o.localState.openPdf,"onUpdate:modelValue":t[2]||(t[2]=e=>o.localState.openPdf=e)},null,8,["modelValue"])],64)}const W={props:["attachments"],setup(e,t){const a=(0,s.qj)({openImage:!1,openPdf:!1,selectedAttachment:null}),l=e=>{a.selectedAttachment=e,console.log(e),"application/pdf"===(null===e||void 0===e?void 0:e.mime)?a.openPdf=!0:a.openImage=!0};return{localState:a,openAttachment:l}}};var q=a(3414),b=a(2035),_=a(4554),k=a(2350),Z=a(2165),Q=a(6778),y=a(4027),j=a(7518),A=a.n(j);W.render=w;const I=W;A()(W,"components",{QItem:q.Z,QItemSection:b.Z,QIcon:_.Z,QItemLabel:k.Z,QBtn:Z.Z,QDialog:Q.Z,QImg:y.Z});const V={components:{Attachments:I},setup(e,t){const a=(0,r.yj)(),n=(0,d.Z)(),o=(0,s.iH)(!1),c=(0,s.iH)(""),i=(0,s.qj)({application:{},template:"test",attachments:[]}),m=e=>{u.api.get(`applications/${e}/print`).then((e=>{const{template:t,application:a}=e.data;i.template=t,i.application=a})).catch((e=>{var t;return n.notify({type:"negative",message:(null===(t=e.response)||void 0===t?void 0:t.message)||""})}))};return(0,l.bv)((()=>{const e=a.params.id;m(e)})),{localData:i,dialog:o,attachment:c,printApplication:()=>window.print(),getFile:e=>{c.value="http://localhost:8000/storage/"+e,o.value=!0,console.log("attachment",c.value)}}}};var z=a(4379),C=a(151);V.render=p;const D=V;A()(V,"components",{QPage:z.Z,QDialog:Q.Z,QCard:C.Z,QBtn:Z.Z})}}]);
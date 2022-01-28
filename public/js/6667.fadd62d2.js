"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[6667],{6667:(e,l,a)=>{a.r(l),a.d(l,{default:()=>L});var o=a(3673),t=a(2323);const n=(0,o.Wm)("p",{class:"zsubtitle"},"Create flow",-1),i={class:""},s={class:"zdetailcard flex items-center justify-between"},r={class:"text-center"},d=(0,o.Wm)("br",null,null,-1),u={class:"zvalue"},m={class:"flex flex-inline"},c=(0,o.Wm)("br",null,null,-1),p={class:"zdetailcard"};function f(e,l,a,f,v,w){const b=(0,o.up)("q-select"),g=(0,o.up)("q-btn"),D=(0,o.up)("q-item-label"),h=(0,o.up)("q-item-section"),W=(0,o.up)("q-item"),q=(0,o.up)("q-list"),S=(0,o.up)("q-checkbox"),V=(0,o.up)("q-separator"),_=(0,o.up)("FlowDialog"),k=(0,o.up)("q-dialog"),Z=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(Z,{padding:"",class:"container-lg"},{default:(0,o.w5)((()=>[n,(0,o.Wm)("div",i,[(0,o.Wm)("div",s,[(0,o.Wm)(b,{style:{"min-width":"250px"},outlined:"","item-aligned":"","option-value":"code","option-label":"title","dropdown-icon":"arrow_drop_down",modelValue:f.formData.application,"onUpdate:modelValue":l[1]||(l[1]=e=>f.formData.application=e),options:f.application_profiles,"use-chips":"",label:"Select Application"},null,8,["modelValue","options"]),(0,o.Wm)("div",r,[(0,o.Wm)(g,{onClick:l[2]||(l[2]=e=>f.localData.openDialog=!0),label:"Add step",color:"primary",outline:"",icon:"add"})])]),d,(0,o.Wm)(q,{separator:""},{default:(0,o.w5)((()=>[((0,o.wg)(!0),(0,o.j4)(o.HY,null,(0,o.Ko)(f.formData.flows,((e,l)=>((0,o.wg)(),(0,o.j4)(W,{class:"zdetailcard q-mt-sm",key:l},{default:(0,o.w5)((()=>[(0,o.Wm)(h,null,{default:(0,o.w5)((()=>[(0,o.Wm)(D,null,{default:(0,o.w5)((()=>{var a;return[(0,o.Uk)("STEP: "+(0,t.zw)(l+1)+" Dealing assistant : ",1),(0,o.Wm)("span",u,(0,t.zw)(null===e||void 0===e||null===(a=e.staff)||void 0===a?void 0:a.label),1)]})),_:2},1024)])),_:2},1024),(0,o.Wm)(h,{side:""},{default:(0,o.w5)((()=>[(0,o.Wm)("div",m,[(0,o.Wm)(g,{round:"",onClick:e=>f.removeFlow(l),class:"q-pa-sm",flat:"",icon:"delete"},null,8,["onClick"])])])),_:2},1024)])),_:2},1024)))),128))])),_:1}),c,(0,o.Wm)("div",p,[(0,o.Wm)(S,{modelValue:f.formData.published,"onUpdate:modelValue":l[3]||(l[3]=e=>f.formData.published=e),label:"Published ? "},null,8,["modelValue"])]),(0,o.Wm)(V,{class:"q-my-md"}),f.formData.flows.length>0?((0,o.wg)(),(0,o.j4)(g,{key:0,onClick:f.handleSubmit,class:"q-mt-md",outline:"",color:"primary",label:"Save "},null,8,["onClick"])):(0,o.kq)("",!0)]),(0,o.Wm)(k,{modelValue:f.localData.openDialog,"onUpdate:modelValue":l[5]||(l[5]=e=>f.localData.openDialog=e)},{default:(0,o.w5)((()=>[(0,o.Wm)(_,{onSave:f.handleSave,onClose:l[4]||(l[4]=e=>f.localData.openDialog=!1)},null,8,["onSave"])])),_:1},8,["modelValue"])])),_:1})}var v=a(1959);const w=(0,o.Wm)("p",{class:"zsubtitle"},"Select staff",-1);function b(e,l,a,t,n,i){const s=(0,o.up)("q-select"),r=(0,o.up)("q-input"),d=(0,o.up)("q-btn"),u=(0,o.up)("q-card-actions"),m=(0,o.up)("q-form"),c=(0,o.up)("q-card");return(0,o.wg)(),(0,o.j4)(c,{style:{width:"550px"},flat:"",class:"q-pa-md"},{default:(0,o.w5)((()=>[(0,o.Wm)(m,{class:"column",ref:"formRef",onReset:t.resetForm,onSubmit:t.handleSubmit},{default:(0,o.w5)((()=>{var e,a;return[w,(0,o.Wm)(s,{outlined:"","item-aligned":"","dropdown-icon":"arrow_drop_down",modelValue:t.formData.staff,"onUpdate:modelValue":l[1]||(l[1]=e=>t.formData.staff=e),options:t.staffs,"use-chips":"",label:"Select staff"},null,8,["modelValue","options"]),(0,o.Wm)(r,{modelValue:t.formData.duration,"onUpdate:modelValue":l[2]||(l[2]=e=>t.formData.duration=e),label:"Duration in Hrs","item-aligned":"",outlined:"",error:t.errors.hasOwnProperty("duration"),"error-message":null===(e=t.errors)||void 0===e||null===(a=e.duration)||void 0===a?void 0:a.toString(),onBlur:l[3]||(l[3]=e=>delete t.errors["duration"])},null,8,["modelValue","error","error-message"]),(0,o.Wm)(s,{outlined:"","item-aligned":"",multiple:"","dropdown-icon":"arrow_drop_down",modelValue:t.formData.actions,"onUpdate:modelValue":l[4]||(l[4]=e=>t.formData.actions=e),options:t.actions,"use-chips":"",label:"Select actions"},null,8,["modelValue","options"]),(0,o.Wm)(r,{outlined:"","item-aligned":"",modelValue:t.formData.remark,"onUpdate:modelValue":l[5]||(l[5]=e=>t.formData.remark=e),label:"Remark"},null,8,["modelValue"]),(0,o.Wm)(u,null,{default:(0,o.w5)((()=>[(0,o.Wm)(d,{flat:"",color:"primary",type:"submit",label:"Save"}),(0,o.Wm)(d,{flat:"",color:"negative",type:"reset",label:"Reset"})])),_:1})]})),_:1},8,["onReset","onSubmit"])])),_:1})}var g=a(7874);const D=[{value:"verified",label:"Verified"},{value:"approved",label:"Approve"},{value:"cancelled",label:"Cancel"},{value:"rejected",label:"Rejected"},{value:"archived",label:"Archived"}],h={emits:["save","close"],setup(e,l){const a=(0,v.qj)({}),t=(0,v.qj)({staff:null,actions:[],duration:0,remark:""}),n=(0,g.oR)(),i=e=>{var a;null===e||void 0===e||null===(a=e.target)||void 0===a||a.resetForm(),l.emit("close",!0)},s=e=>{l.emit("save",t)};return{resetForm:i,errors:a,formData:t,handleSubmit:s,actions:D,staffs:(0,o.Fl)((()=>n.state.staffData.staffs))}}};var W=a(151),q=a(5269),S=a(2448),V=a(4689),_=a(9367),k=a(2165),Z=a(7518),Q=a.n(Z);h.render=b;const y=h;Q()(h,"components",{QCard:W.Z,QForm:q.Z,QSelect:S.Z,QInput:V.Z,QCardActions:_.Z,QBtn:k.Z});var C=a(5474),j=a(8825);const F={components:{FlowDialog:y},setup(e,l){const a=(0,v.iH)([]),t=(0,g.oR)(),n=(0,j.Z)(),i=(0,v.qj)({application:null,flows:[],published:!1}),s=(0,v.qj)({openDialog:!1});(0,o.bv)((()=>{console.log("dispatching actions")}));const r=({staff:e,duration:l,actions:a})=>{let o=i.flows;o.push({staff:e,duration:l,actions:a}),i.flows=o,s.openDialog=!1},d=()=>{var e;i["application_id"]=null===(e=i.application)||void 0===e?void 0:e.id,C.api.post("process-flows/store",i).then((e=>{const{message:l}=e.data;n.notify({type:"positive",message:l})})).catch((e=>{console.log(e)}))},u=e=>{const l=i.flows.filter(((l,a)=>a!==e));i.flows=l};return{removeFlow:u,list:a,formData:i,handleSave:r,localData:s,handleSubmit:d,application_profiles:(0,o.Fl)((()=>t.state.staffData.application_profiles))}}};var x=a(4379),z=a(7011),R=a(3414),U=a(2035),A=a(2350),I=a(7030),P=a(5735),B=a(5869),H=a(6778);F.render=f;const L=F;Q()(F,"components",{QPage:x.Z,QSelect:S.Z,QBtn:k.Z,QList:z.Z,QItem:R.Z,QItemSection:U.Z,QItemLabel:A.Z,QChip:I.Z,QCheckbox:P.Z,QSeparator:B.Z,QDialog:H.Z})}}]);
"use strict";(self["webpackChunkquasar_frontend"]=self["webpackChunkquasar_frontend"]||[]).push([[8207],{8207:(t,e,o)=>{o.r(e),o.d(e,{default:()=>h});var a=o(3673);const l=(0,a.Wm)("p",{class:"ztitle"},"New note",-1),n=(0,a.Wm)("p",{class:"zlabel"},"Title",-1),s=(0,a.Wm)("p",{class:"zlabel"},"Body",-1),r={class:"q-pa-md"};function i(t,e,o,i,m,d){const u=(0,a.up)("q-input"),c=(0,a.up)("q-editor"),p=(0,a.up)("q-btn"),b=(0,a.up)("q-form");return(0,a.wg)(),(0,a.j4)(b,{onSubmit:i.submit,class:"q-ma-md zdetailcard column q-pa-md q-gutter-sm"},{default:(0,a.w5)((()=>[l,n,(0,a.Wm)(u,{outlined:"",dense:"",modelValue:i.formData.title,"onUpdate:modelValue":e[1]||(e[1]=t=>i.formData.title=t)},null,8,["modelValue"]),s,(0,a.Wm)(c,{modelValue:i.formData.body,"onUpdate:modelValue":e[2]||(e[2]=t=>i.formData.body=t),flat:"","content-class":"bg-amber-3","toolbar-text-color":"white","toolbar-toggle-color":"yellow-8","toolbar-bg":"primary",toolbar:[["bold","italic","underline"],[{label:t.$q.lang.editor.formatting,icon:t.$q.iconSet.editor.formatting,list:"no-icons",options:["p","h3","h4","h5","h6","code"]}]]},null,8,["modelValue","toolbar"]),(0,a.Wm)("div",r,[(0,a.Wm)(p,{type:"submit",color:"primary",label:"Save",outline:""}),(0,a.Wm)(p,{type:"reset",class:"q-ml-lg",color:"negative",outline:"",label:"clear"})])])),_:1},8,["onSubmit"])}o(7280),o(5363);var m=o(1959),d=o(5474),u=o(9582),c=o(8825);const p={emits:["notes"],setup(t,e){const o=(0,u.yj)(),a=(0,u.tv)(),l=(0,c.Z)(),n=(0,m.qj)({title:"",body:""}),s=t=>{const s=o.params.id;d.api.post(`applications/${s}/notes/create`,n).then((t=>{const{message:o,list:n,data:s}=t.data;l.notify({type:"positive",message:o}),e.emit("notes",n),a.replace({name:"note:detail",params:{note:s.id}})})).catch((t=>{var e;let o=(null===(e=t.response)||void 0===e?void 0:e.message)||"Something wrong";l.notify({type:"negative",message:o})}))};return{formData:n,submit:s}}};var b=o(5269),f=o(4689),g=o(239),q=o(2165),y=o(7518),v=o.n(y);p.render=i;const h=p;v()(p,"components",{QForm:b.Z,QInput:f.Z,QEditor:g.Z,QBtn:q.Z})}}]);
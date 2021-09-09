import {api} from "boot/axios";

const actions={
  setLoading:(context,loading)=> context.commit('setLoading',loading),
  fetchGlobalData:(context)=>{
    api.get('public-data')
      .then(res=>{
        const {permissions,roles,districts,staffs,offices}=res.data
        context.commit('setPermissions', permissions);
        context.commit('setRoles', roles);
        context.commit('setDistricts', districts);
        context.commit('setStaffs', staffs);
        context.commit('setOffices', offices);
      })
      .catch(err=>{
        console.error('Error on fetching public data',err)
      })
  }
}
const mutations={
  setLoading:(state,loading)=>state.loading=loading,
  setPermissions:(state,perms)=>state.permissions=perms,
  setRoles:(state,roles)=>state.roles=roles,
  setDistricts:(state,districts)=>state.districts=districts,
  setStaffs:(state,staffs)=>state.staffs=staffs,
  setOffices:(state,offices)=>state.offices=offices,
}
const state=()=>{
  return{
    loading:false,
    permissions:[],
    roles:[],
    districts:[],
    staffs:[],
    offices:[],
    statuses:[
      {value:'on-duty',label:'On duty'},
      {value:'on-leave',label:'On leave'},
      {value:'on-retired',label:'On Retired/Pension'},
    ]
  }
}
const getters={

}
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}

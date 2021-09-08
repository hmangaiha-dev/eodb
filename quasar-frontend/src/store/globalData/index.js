import {api} from "boot/axios";

const actions={
  setLoading:(context,loading)=> context.commit('setLoading',loading),
  fetchGlobalData:(context)=>{
    api.get('public-data')
      .then(res=>{
        const {permissions,roles,districts}=res.data
        context.commit('setPermissions', permissions);
        context.commit('setRoles', roles);
        context.commit('setDistricts', districts);
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
}
const state=()=>{
  return{
    loading:false,
    permissions:[],
    roles:[],
    districts:[]
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

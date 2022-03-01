// import state from './state'
import {api} from "boot/axios";
import Quasar from "quasar";
// import * as getters from './getters'
// import * as mutations from './mutations'
// import * as actions from './actions'

const state = () => {
  return {
    departments: [],
    permissions: [],
    roles: [],
    role: [],
    districts: [],
    staffs: [],
    offices: [],
    file_types: [],
    application_types: [],
    application_profiles: [],
    postingStatuses: [
      {value: "on-duty", label: "On duty"},
      {value: "on-leave", label: "On leave"},
      {value: "on-retired", label: "Retired"},
    ],
  };
};
const getters={}

const mutations = {
  setPermissions: (state, permissions) => (state.permissions = permissions),
  setRoles: (state, roles) => (state.roles = roles),
  setRole: (state, role) => (state.role = role),
  setDistricts: (state, districts) => (state.districts = districts),
  setStaffs: (state, staffs) => (state.staffs = staffs),
  setPostingStatuses: (state, stats) => (state.postingStatuses = stats),
  setOffices: (state, offices) => (state.offices = offices),
  setOccupations: (state, occupations) => (state.occupations = occupations),
  setFileType: (state, types) => (state.file_types = types),
  setApplicationTypes: (state, types) => (state.application_types = types),
  setApplicationProfiles: (state, types) => (state.application_profiles = types),
  setDepartments: (state, data) => (state.departments = data),
};

const actions = {
  fetchData: (context) => {
    context.dispatch('globalData/setGlobalLoading', true,{root:true});
    api.get("staff-data")
      .then((res) => {
        const {
          roles,
          role,
          districts,
          permissions,
          offices,
          staffs,
          file_types,
          application_types,
          application_profiles,
          departments
        } = res.data;
        context.commit("setPermissions", permissions);
        context.commit("setRoles", roles);
        context.commit("setRole", role);
        context.commit("setDistricts", districts);
        context.commit("setStaffs", staffs);
        context.commit("setOffices", offices);
        context.commit("setFileType", file_types);
        context.commit("setApplicationTypes", application_types);
        context.commit("setApplicationProfiles", application_profiles);
        context.commit("setDepartments", departments);
        // console.log('current role',departments);


        // console.log('services api data',services[0].items);
      })
      .catch((err) => {
        // const q = useQuasar();
        // q.notify({
        //   type: "negative",
        //   message: err.toString(),
        // });
        // console.error(err);
      })
      .finally(err => {
        setTimeout(()=>{
          context.dispatch('globalData/setGlobalLoading', false,{root:true})
        },2000)
      })
  },

  setServices: (context) => {
    // api.get('/master-data')
    // context.commit("setServices", services[0].items);
  },
};
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
};

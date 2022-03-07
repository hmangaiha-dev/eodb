 // import state from './state'
// import * as getters from './getters'
// import * as mutations from './mutations'
// import * as actions from './actions'

import { LocalStorage } from "quasar";
import { api } from "boot/axios";

const state = () => {
  return {
    globalLoading: false,
    deptServices: [],
    common: {
      partA: {},
      partB: {},
      partC: {},
      partD: {},
      partE: {},
      partF: {},
      partG: {},

    },
  };
};
const getters = {
  isGlobalLoading: (state) => state.globalLoading,
  getPartF: (state) => state.common.partF,
};




const mutations = {
  setGlobalLoading: (state, val) => {
    state.globalLoading = val;
  },

  setPart: (state,val) => {
    state.common.partA = val.part_a
    state.common.partB = val.part_b
    state.common.partC = val.part_c
    state.common.partD = val.part_d
    state.common.partE = val.part_e
    state.common.partF = val.part_f
    state.common.partG = val.part_g
    state.common.selfDeclaration = val.self_declaration
    // console.log('setA',state.common.partA);

  },

  setDeptServices: (state, data) => {
    state.deptServices = data;
    console.log("from store", state.deptServices);
  },
};
const actions = {
  setGlobalLoading: (context, val) => {
    context.commit("setGlobalLoading", val);
  },

  fetchCommonData: (context) => {
    // context.dispatch("globalData/setGlobalLoading", true, { root: true });
    api
      .get("/investor/common-applications")
      .then((res) => {
        // const {
        //   part_a,part_b
        // } = res.data;

        // console.log('fetch res',res.data.part_a);

        context.commit("setPart", res.data)

        // console.log('services api data',services[0].items);
      })
      .catch((err) => {
        // const q = useQuasar();
        // q.notify({
        //   type: "negative",
        //   message: err.toString(),
        // });
        // console.error(err);
      });
  },

  fetchDeptServices: async (context) => {
    // context.dispatch('globalData/setGlobalLoading', true,{root:true});
    await api
      .get("department/services")
      .then((res) => {
        context.commit("setDeptServices", res.data);

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
      .finally((err) => {
        setTimeout(() => {
          context.dispatch("globalData/setGlobalLoading", false, {
            root: true,
          });
        }, 2000);
      });
  },
};
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
};

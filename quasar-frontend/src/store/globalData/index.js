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
    },
  };
};
const getters = {
  isGlobalLoading: (state) => state.globalLoading,
};
const mutations = {
  setGlobalLoading: (state, val) => {
    state.globalLoading = val;
  },

  setPartA: (state,val) => {
    state.common.partA = val
    console.log('setA',state.common.partA);

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
        const {
          part_a
        } = res.data;

        console.log('fetch res',res.data.part_a);

        context.commit("setPartA", part_a)

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

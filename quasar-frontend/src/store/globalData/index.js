// import state from './state'
// import * as getters from './getters'
// import * as mutations from './mutations'
// import * as actions from './actions'

import {LocalStorage} from 'quasar'
import {api} from "boot/axios";

const state = () => {
  return {
    globalLoading:false
  }
}
const getters = {
  isGlobalLoading:state=>state.globalLoading
}
const mutations = {
  setGlobalLoading: (state, val) => {
    state.globalLoading=val
  }
}
const actions = {
  setGlobalLoading: (context, val) => {
    context.commit('setGlobalLoading',val)
  }
}
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}

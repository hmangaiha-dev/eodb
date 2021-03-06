// import state from './state'
// import * as getters from './getters'
// import * as mutations from './mutations'
// import * as actions from './actions'

import {LocalStorage} from 'quasar'
import {api} from "boot/axios";

const state = () => {
  return {
    currentUser: LocalStorage.getItem('user'),
    token: LocalStorage.getItem('token'),
    permissions: [],
    csrfToken: ''
  }
}
const getters = {
  isAuthenticated: (state) => Boolean(state.currentUser) && Boolean(state.token),
  getUserType: (state) => state.currentUser?.type,
  getCurrentUser: (state) => state.currentUser,
  getToken: (state) => state.token,
  getPermissions: (state) => state.permissions,

}
const mutations = {
  setToken: (state, token) => state.token = token,
  setCurrentUser: (state, user) => state.currentUser = user,
  setCsrfToken: (state, token) => state.csrfToken = token,
  setPermissions: (state, perms) => state.permissions = perms,
}
const actions = {
  setToken: (context, token) => {
    if (Boolean(token)) {
      LocalStorage.set('token', token);
      context.commit('setToken', token);
      api.defaults.headers['Authorization'] = `Bearer ${token}`;
    } else {
      LocalStorage.remove('token');
      context.commit('setToken', null);
      api.defaults.headers['Authorization'] = ``;
    }
  },
  setCsrfToken: (context, token) => {
    context.commit('setCsrfToken', token);
  },
  setCurrentUser: (context, data) => {
    if (Boolean(data)) {
      LocalStorage.set('user', (data));
      context.commit('setCurrentUser', data);
    }else{
      LocalStorage.remove('user');
      context.commit('setCurrentUser', null);
    }
  },
  setPermissions:(context,data)=>context.commit('setPermissions',data),
}
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}

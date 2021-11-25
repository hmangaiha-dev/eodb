// import state from './state'
// import * as getters from './getters'
// import * as mutations from './mutations'
// import * as actions from './actions'

import {LocalStorage} from 'quasar'
import {api} from "boot/axios";

const state = () => {
  return {
    currentUser: localStorage.getItem('user'),
    token: localStorage.getItem('token'),
    csrfToken: ''
  }
}
const getters = {
  isAuthenticated: (state) => Boolean(state.currentUser) && Boolean(state.token),
  getUserType: (state) => state.currentUser?.userType,
  getCurrentUser: (state) => state.currentUser
}
const mutations = {
  setToken: (state, token) => state.token = token,
  setCurrentUser: (state, user) => state.currentUser = user,
  setCsrfToken: (state, token) => state.csrfToken = token,
}
const actions = {
  setToken: (context, token) => {
    if (Boolean(token)) {
      console.log('token value',token);
      localStorage.setItem('token',token)
      context.commit('setToken', token);
      api.defaults.headers['Authorization'] = `Bearer ${token}`;
    } else {
      console.log('else token');
      localStorage.removeItem('token');
      localStorage.removeItem('user');
      context.commit('setCurrentUser', null);
      context.commit('setToken', null);
      api.defaults.headers['Authorization'] = ``;
    }
  },

  


  setCsrfToken: (context, token) => {
    context.commit('setCsrfToken', token);
  },
  setCurrentUser: (context, data) => {
    console.log('store data',data);
    localStorage.clear()
    localStorage.setItem('user', JSON.stringify(data));
    // LocalStorage.set('user', JSON.stringify(data));
    context.commit('setCurrentUser', data);
  }
}
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}

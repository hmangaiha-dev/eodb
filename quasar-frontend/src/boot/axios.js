import { boot } from "quasar/wrappers";
import axios from "axios";
import { LocalStorage, Notify, Quasar } from "quasar";

// Be careful when using SSR for cross-request state pollution
// due to creating a Singleton instance here;
// If any client changes this (global) instance, it might be a
// good idea to move this instance creation inside of the
// "export default () => {}" function below (which runs individually
// for each client)
const BASE_URL = "http://164.100.124.152/api";
const LOCAL_BASE_URL = "http://localhost:8000/api";
const api = axios.create({
  // baseURL: process.env.DEV ? LOCAL_BASE_URL : BASE_URL,
  baseURL:  LOCAL_BASE_URL,
  // withCredentials: false,
  headers: {
    'Access-Control-Allow-Origin' : '*',
    'Access-Control-Allow-Credentials':true,
    'Access-Control-Allow-Methods':'GET,PUT,POST,DELETE,PATCH,OPTIONS',
    // 'Content-Type': 'application/json',
    // 'Content-Type': 'application/x-www-form-urlencoded'
    
    }
});

api.defaults.headers.common['Access-Control-Allow-Origin'] = '*';

// api.defaults.withCredentials =

export default boot(({ app, router, store }) => {
  // for use inside Vue files (Options API) through this.$axios and this.$api
  // api.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  api.interceptors.response.use(
    (response) => {
      // if(response?.status === 401) {
      //   LocalStorage.remove('user');
      //   LocalStorage.remove('token');
      //   store.dispatch('authData/setCurrentUser', null);
      //   store.dispatch('authData/setToken', null);
      //   router.replace({name:'home'})
      //   Notify.create({
      //     message: "Session/Token expired",
      //     position: "top",
      //     icon: "warnings",
      //   });
      // }
      if (response?.status === 500) {
      }
      return response;
    },
    (error) => {
      if (error?.response?.status === 401) {
        LocalStorage.remove("user");
        LocalStorage.remove("token");
        store.dispatch("authData/setCurrentUser", null);
        store.dispatch("authData/setToken", null);
        // router.replace({name:"home"});
      }

      return Promise.reject(error);
    }
  );
  api.interceptors.request.use(
    function (config) {
      let token = store.getters["authData/getToken"];
      config.headers["Authorization"] = `Bearer ${token}`;
      return config;
    },
    function (error) {
      return Promise.reject(error);
    }
  );
  app.config.globalProperties.$axios = axios;
  // ^ ^ ^ this will allow you to use this.$axios (for Vue Options API form)
  //       so you won't necessarily have to import axios in each vue file

  app.config.globalProperties.$api = api;
  // ^ ^ ^ this will allow you to use this.$api (for Vue Options API form)
  //       so you can easily perform requests against your app's API
});

export { api };

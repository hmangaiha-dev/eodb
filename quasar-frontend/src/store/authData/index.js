// import state from './state'
// import * as getters from './getters'
// import * as mutations from './mutations'
// import * as actions from './actions'
import {useRouter} from "vue-router";
import {api} from "boot/axios";
import {useQuasar} from "quasar";

const q = useQuasar();
const router = useRouter();
const state=()=>({
  token:null,
  currentUser:null
})
const mutations={
  setToken:(state,token)=>state.token=token,
  setCurrentUser:(state,user)=>state.currentUser=user
}
const actions={
  //credential: email password
  logout:(context,credential)=>{
    api.post('logout',{...credential})
      .then(res=>{
        context.commit('setToken',null)
        context.commit('setCurrentUser',null)
        localStorage.removeItem('token')
        router.push('/')
      })
      .catch(err=>{
        q.notify({type:'negative', message:err.toString()})
      })
  },
  login:(context)=>{
    api.post('login')
      .then(res=>{
        const {user, token} = res.data;
        context.commit('setToken',token)
        context.commit('setCurrentUser',user)
        localStorage.setItem('token', token);
        router.push('/admin')
      })
      .catch(err=>{
        q.notify({type:'negative', message:err.toString()})
      })
  }
}

const getters={}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}

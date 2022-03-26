import {useStore} from "vuex";

export default function usePermissions(perm){

  const store = useStore();
  const perms = store.getters['authData/getPermissions'];

  return{
    appCan: p => perms.find(item => item === p)
  }
}


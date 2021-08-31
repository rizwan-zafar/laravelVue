import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
// import Admin from './components/Admin.vue';
// import Role from  './components/Role.vue';
// import Practice from './components/Practice.vue';
import axios from 'axios';
Vue.use(axios);
 
 
Vue.use(VueRouter);
const routes=[
{path:'/',redirect:'/home'},
 
 {path:'/home',component:Home,name:'Home'}

]
 
const router=new VueRouter({routes});
  // router.beforeEach((to, from, next) => {
  // const token=localStorage.getItem('token') ||null
  // window.axios.defaults.headers['Authorization'] = "Bearer " + token;
  // next();})
export default  router;
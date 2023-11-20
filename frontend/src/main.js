window.axios = require("axios");
window.axios.defaults.baseURL = "https://api.coldeyefitness.com/api/v1";
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.axios.defaults.headers.common["Authorization"] = `Bearer ${window.localStorage?.token}`;

import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import 'bootstrap'

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')

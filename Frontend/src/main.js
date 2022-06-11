import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import VueCookies from 'vue-cookies';

import store from './store'
import VueSweetalert2 from 'vue-sweetalert2';
// App.use(VueCookies);
createApp(App).use(store).use(router).use(VueCookies).mount('#app')

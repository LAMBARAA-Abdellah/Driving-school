import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import VueCookies from 'vue-cookies';

import store from './store'
import VueSweetalert2 from 'vue-sweetalert2';
// App.use(VueCookies);

import TawkMessengerVue from '@tawk.to/tawk-messenger-vue-3';


createApp(App).use(store).use(TawkMessengerVue,{ propertyId : '62a85d347b967b11799472b9',
widgetId : ' '}).use(router).use(VueCookies).mount('#app')

//lof


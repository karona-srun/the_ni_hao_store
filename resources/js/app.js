require('./bootstrap');

import {createApp} from 'vue'
import router from './router';
import App from './views/App';

const app = createApp(App)
app.config.globalProperties.$axios = axios;
app.config.productionTip = false;
app.use(router);
app.use(router);
app.mount('#app');
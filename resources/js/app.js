require('./bootstrap');
import 'alpinejs';

import { createApp } from 'vue'
import HelloWorld from './components/HelloWorld.vue';

const app = createApp({});
// registers our HelloWorld component globally
app.component('hello-world', HelloWorld);

// mount the app to the DOM
app.mount('#app');


// import Alpine from 'alpinejs'
 
// window.Alpine = Alpine
 
// Alpine.start()
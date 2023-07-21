import Vue from 'vue';
import TestComponent from './TestComponent.vue';

Vue.component('test-component', TestComponent);

const app = new Vue({
  el: '#app',
});

require('./bootstrap');
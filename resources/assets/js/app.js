
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Vue = require('vue')

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

window.moment = require('moment');
require('cornerstone-event-components/dist/commons');
require('cornerstone-event-components/dist/dates.component');

var writeToDiv = new Vue({
  el: '#writeToDiv',
  data: {
    msg: 'Hello Vue you beautiful thing you!'
  }
})

var testCounter = new Vue({
  el: '#test3',
  data: {
    counter: 0
  }
})

var writeToDiv2 = new Vue({
  el: '#writeToDiv2',
  data: {
    msg: 'OMFGulp!'
  }
})

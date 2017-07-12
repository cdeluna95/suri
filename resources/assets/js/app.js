
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./functions');
import Router from './routes.js';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('reminders', require('./components/Reminders.vue'));
Vue.component('note', require('./components/Note.vue'));
Vue.component('add', require('./components/Add.vue'));

const app = new Vue({
    // Use #suri-app element
    el: '#suri-app',
    
    router: Router,
    
    data: function() {
      // Initialize notes array
      return {
        notes: []
      };
    },
    
    created: function() {
      // Call getNotes()
      this.fetchNotes();
    },
    
    methods: {
      // Get notes from the Notes API
      fetchNotes: function() {
        window.axios.get('/notes')
          .then(response => {
            console.log(response);
            this.notes = response.data;
          })
          .catch(error => {
            console.log(error.response.data);
            this.notes = error.response.data;
            this.data = [];
          });
      },
      
      // Push note to notes array
      pushNote: function(note) {
        window.axios.post('/notes', note)
          .then(response => {
            console.log(response);
            this.notes.push(note);
          });
      }
    }
});

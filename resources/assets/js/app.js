
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('./functions');

import Vue from 'vue';
import VueRouter from 'vue-router';
import Routes from './routes';

window.Vue = require('vue');
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('reminders', require('./components/Reminders.vue'));
Vue.component('note', require('./components/Note.vue'));
Vue.component('add-note', require('./components/AddNote.vue'));
Vue.component('sets', require('./components/Sets.vue'));
Vue.component('set', require('./components/Set.vue'));
Vue.component('add-set', require('./components/AddSet.vue'));
Vue.component('flashcards', require('./components/Flashcards.vue'));
Vue.component('flashleft', require('./components/Flashleft.vue'));
Vue.component('flashright', require('./components/Flashright.vue'));

const router = new VueRouter({
  routes: Routes
});

const app = new Vue({
    // Use #suri-app element
    el: '#suri-app',
    
    // Define vue-router
    router: router,
    
    data: function() {
      // Initialize notes and sets array
      return {
        notes: [],
        sets: []
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

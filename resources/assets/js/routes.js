import Vue from 'vue';
import VueRouter from 'vue-router';
import Reminders from './components/Reminders.vue';
import Flashcards from './components/Flashcards.vue';
import Quizzes from './components/Quizzes.vue';

Vue.use(VueRouter);

const routes = [
  { path: '/reminders', component: Reminders },
  { path: '/flashcards', component: Flashcards },
  { path: '/quizzes', component: Quizzes }
];

const router = new VueRouter({
  routes: routes
});

export default router;

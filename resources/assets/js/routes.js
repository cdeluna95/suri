
/**
 * Here, we'll use this as a dedicated file to set up our routing here.
 */
export default [
  { path: '/reminders', component: require('./components/Reminders.vue') },
  { path: '/flashcards', component: require('./components/Flashcards.vue') },
  { path: '/about', component: require('./components/About.vue') },
  { path: '/help', component: require('./components/Help.vue') }
];

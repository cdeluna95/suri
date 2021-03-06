
/**
 * Here, we'll use this as a dedicated file to set up our routing here.
 */
export default [
  { path: '/reminders', component: require('./components/Reminders.vue') },
  { path: '/sets', component: require('./components/Sets.vue') },
  { path: '/sets/:set_id/flashcards/:flashcard_id', component: require('./components/Flashcards.vue') }
];

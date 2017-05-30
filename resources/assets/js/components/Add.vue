<template>
  <div class="reminders-add">
    <button class="btn-plus" @click="createNote">
      <i class="fa fa-plus" aria-hidden="true"></i>
      <span class="note-plus">Create new note</span>
    </button>
  </div>
</template>

<script>
  export default {
    methods: {
      // Emit event listener note-created
      createNote: function() {
        this.$emit('note-created', {
          id: 1,
          note: 'Enter note here...'
        });
      }
    }
  };
</script>

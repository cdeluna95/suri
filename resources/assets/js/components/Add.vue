<template>
  <button class="btn-plus" @click="createNote">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span class="note-plus">Create note</span>
  </button><!-- btn-plus -->
</template>

<script>
  export default {
    
    data: function() {
      // Set noteText to some text
      return {
        noteText: 'Enter note here...'
      };
    },
    
    methods: {
      // Emit event listener note-created
      createNote: function() {
        var text = this.noteText;
        this.$emit('note-created', {
          note: text
        });
      }
    }
    
  };
</script>

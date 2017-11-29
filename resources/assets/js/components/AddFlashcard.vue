<template>
  <button class="btn-plus" @click="createFlashcard">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span class="flashcard-plus">Add term</span>
  </button><!-- btn-plus -->
</template>

<script>
  export default {
    
    data: function() {
      // Set setTitle to some title
      return {
        setTerm: 'Enter term or definition here...'
      };
    },
    
    methods: {
      // Emit event listener flashcard-created
      createFlashcard: function() {
        var term = this.setTerm;
        this.$emit('flashcard-created', { flashcard: term });
      }
    }
    
  };
</script>

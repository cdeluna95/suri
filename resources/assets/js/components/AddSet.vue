<template>
  <button class="btn-plus" @click="createSet">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span class="set-plus">Create set</span>
  </button><!-- btn-plus -->
</template>

<script>
  export default {
    
    data: function() {
      // Set setTitle to some title
      return {
        setTitle: 'Untitled Set'
      };
    },
    
    methods: {
      // Emit event listener set-created
      createSet: function() {
        var title = this.setTitle;
        this.$emit('set-created', { set: title });
      }
    }
    
  };
</script>

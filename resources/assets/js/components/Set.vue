<template>
  <div class="set" @dblclick="editSet(set.id, set.set)">
    
    <!------------------------
      Show in non-editing mode
      ------------------------->
    <div class="set-wrapper" v-show="!isEditing">
      <router-link class="set-h3" :class="{ 'active': isActive }" :to="'/sets/' + setObj.set_id + '/flashcards/' + flashcardObj.flashcard_id" exact>
        {{ set.set }}
      </router-link>
      <div class="set-icons">
        <button class="btn-edit" @click="editSet(set.id, set.set)">
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteSet(set)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div>
    </div><!-- set-wrapper -->
    
    <!------------------------
      Show in editing mode
      ------------------------->
    <div class="set-wrapper" v-show="isEditing">
      <textarea
        class="set-textarea"
        rows="8"
        cols="25"
        placeholder="Enter set title here..."
        maxlength="120"
        v-model="set.set"
        @keydown.enter="saveSet(set.id, set.set)"
        @keydown.esc="saveSet(set.id, set.set)"
        @blur="saveSet(set.id, set.set)"
        autofocus
        required>
      </textarea><!-- set-textarea -->
      <div class="btn-save-wrapper">
        <button class="btn-save" @click="saveSet(set.id, set.set)">
          <i class="fa fa-floppy-o" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteSet(set)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div><!-- btn-save-wrapper -->
    </div><!-- set-wrapper -->
    
  </div><!-- set -->
</template>

<script>
  export default {
    
    // Call set property
    props: ['set'],
    
    data: function() {
      // Initialize editing mode as false
      return {
        isEditing: false,
        set_id: this.$route.params.set_id,
        setObj: {},
        flashcard_id: this.$route.params.flashcard_id,
        flashcardObj: {}
      };
    },
    
    methods: {
      // Enter editing mode
      editSet: function(id) {
        this.isEditing = true;
      },
      
      // Exit editing mode
      saveSet: function(id) {
        this.isEditing = false;
      },
      
      // Emit event listener set-deleted
      deleteSet: function(set) {
        this.$emit('set-deleted', set);
      }
    },
    
    computed: {
      isActive() {
        return this.$route.name === 'sets' || this.$route.name === 'flashcards';
      },
    }
    
  };
</script>

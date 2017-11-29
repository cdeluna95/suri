<template>
  <div class="flashcard" @dblclick="editFlashcard(flashcard.id, flashcard.flashcard)">
    
    <!------------------------
      Show in non-editing mode
      ------------------------->
    <div class="flashcard-wrapper" v-show="!isEditing">
      <div class="well well-md">
        <div class="flashcard-p">
          {{ flashcard.flashcard }}
        </div>
      </div>
      <div class="flashcard-icons">
        <button class="btn-edit" @click="editFlashcard(flashcard.id, flashcard.flashcard)">
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteFlashcard(flashcard)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div>
    </div><!-- flashcard-wrapper -->
    
    <!------------------------
      Show in editing mode
      ------------------------->
    <div class="flashcard-wrapper" v-show="isEditing">
      <div class="well well-md">
        <textarea
          class="flashcard-textarea"
          rows="8"
          cols="25"
          placeholder="Enter flashcard here..."
          maxlength="120"
          v-model="flashcard.flashcard"
          @keydown.enter="saveFlashcard(flashcard.id, flashcard.flashcard)"
          @keydown.esc="saveFlashcard(flashcard.id, flashcard.flashcard)"
          @blur="saveFlashcard(flashcard.id, flashcard.flashcard)"
          autofocus
          required>
        </textarea><!-- flashcard-textarea -->
      </div>
      <div class="btn-save-wrapper">
        <button class="btn-save" @click="saveFlashcard(flashcard.id, flashcard.flashcard)">
          <i class="fa fa-floppy-o" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteFlashcard(flashcard)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div><!-- btn-save-wrapper -->
    </div><!-- flashcard-wrapper -->
    
  </div><!-- flashcard -->
</template>

<script>
  export default {
    
    // Call note property
    props: ['flashcard'],
    
    data: function() {
      // Initialize editing mode as false
      return {
        isEditing: false
      };
    },
    
    methods: {
      // Enter editing mode
      editFlashcard: function(id) {
        this.isEditing = true;
      },
      
      // Exit editing mode
      saveFlashcard: function(id) {
        this.isEditing = false;
      },
      
      // Emit event listener flashcard-deleted
      deleteFlashcard: function(flashcard) {
        this.$emit('flashcard-deleted', flashcard);
      }
    }
    
  };
</script>

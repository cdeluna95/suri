<template>
  <div class="note" @dblclick="editNote">
    
    <!------------------------
      Show in non-editing mode
      ------------------------->
    <div class="note-wrapper" v-show="!isEditing">
      <p class="note-p">
        {{ note.note }}
      </p>
      <div class="note-icons">
        <button class="btn-edit" @click="editNote">
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteNote(note)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div>
    </div><!-- note-wrapper -->
    
    <!------------------------
      Show in editing mode
      ------------------------->
    <div class="note-wrapper" v-show="isEditing">
      <textarea
        class="note-textarea"
        rows="8"
        cols="25"
        placeholder="Enter note here..."
        v-model="note.note"
        @keydown.enter="saveNote"
        @keydown.esc="saveNote"
        @blur="saveNote"
        autofocus>
      </textarea><!-- note-textarea -->
      <div class="btn-save-wrapper">
        <button class="btn-save" @click="saveNote">
          <i class="fa fa-floppy-o" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteNote(note)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div><!-- btn-save-wrapper -->
    </div><!-- note-wrapper -->
    
  </div><!-- note -->
</template>

<script>
  export default {
    
    // Call note property
    props: ['note'],
    
    data: function() {
      // Initialize editing mode as false
      return {
        isEditing: false
      };
    },
    
    methods: {
      // Enter editing mode
      editNote: function() {
        this.isEditing = true;
      },
      
      // Exit editing mode
      saveNote: function() {
        this.isEditing = false;
      },
      
      // Emit event listener note-deleted
      deleteNote: function(note) {
        this.$emit('note-deleted', note);
      }
    }
    
  };
</script>

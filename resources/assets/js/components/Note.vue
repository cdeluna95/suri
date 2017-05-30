<template>
  <div class="note">
    <!------------------------
      Show in non-editing mode
      ------------------------->
    <div class="note-wrapper" v-show="!isEditing">
      <!-- note-p-->
      <p class="note-p">
        {{ note.note }}
      </p>
      <!-- note-icons -->
      <div class="note-icons">
        <button class="btn-edit" @click="editNote">
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        <button class="btn-delete" @click="deleteNote(note)">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div>
      <!-- note-small -->
      <small class="note-small">
        {{ note.id }}
      </small>
    </div>
    
    <!------------------------
      Show in editing mode
      ------------------------->
    <div class="note-wrapper" v-show="isEditing">
      <!-- note-textarea -->
      <textarea
        class="note-textarea"
        rows="8"
        cols="25"
        v-model="note.note"
        @keydown.enter="saveNote">
      </textarea>
      <!-- btn-save-wrapper -->
      <div class="btn-save-wrapper">
        <button class="btn-save" @click="saveNote">
          <i class="fa fa-floppy-o" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div><!-- note -->
</template>

<script>
  export default {
    // Call note property
    props: ['note'],
    
    data() {
      // Define editing mode as false
      return {
        isEditing: false
      };
    },
    
    methods: {
      // Enter editing mode
      editNote: function() {
        this.isEditing = true;
      },
      
      // Emit event listener note-deleted
      deleteNote: function(note) {
        this.$emit('note-deleted', note);
      },
      
      // Exit editing mode
      saveNote: function() {
        this.isEditing = false;
      }
    }
  };
</script>

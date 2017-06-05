<template>
  <div class="reminders">
    
    <!------------------------
      If notes are empty
      ------------------------->
    <div class="reminders-empty" v-show="notes.length === 0">
      <h2 class="reminders-empty-h2">
        You're all good!
      </h2>
      <p class="reminders-empty-p">
        Have any assignment? Add a note!
      </p>
      <div class="reminders-add">
        <add @note-created="pushNote"></add>
      </div>
      <div class="reminders-img-wrapper">
        <img class="reminders-img img-auto" src="images/sticky.png">
      </div>
    </div><!-- reminders-empty -->
    
    <!------------------------
      If notes exists
      ------------------------->
    <note
      v-for="(note, index) in notes"
      :note="note"
      :index="index"
      :key="note.id"
      @note-deleted="spliceNote">
    </note> <!-- note -->
    
  </div><!-- reminders -->
</template>

<script>
  export default {
    // Call notes property
    props: ['notes'],
    
    methods: {
      // Push note to notes array
      pushNote: function(note) {
        this.notes.push(note);
      },
      
      // Remove note from array
      spliceNote: function(note) {
        var index = this.notes.indexOf(note);
        this.notes.splice(index, 1);
      }
    }
  };
</script>

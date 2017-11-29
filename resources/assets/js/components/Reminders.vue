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
        Have any assignments? Add a note!
      </p>
      <div class="reminders-add">
        <add-note @note-created="pushNote"></add-note>
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
      @note-deleted="spliceNote(note.id)">
    </note><!-- note -->
    
  </div><!-- reminders -->
</template>

<script>
  export default {
    
    // Call notes property
    props: ['notes'],
    
    methods: {
      // Push note to notes array
      pushNote: function(note) {
        window.axios.post('/notes', note)
          .then(response => {
            console.log(response);
            this.notes.push(note);
          });
      },
      
      // Remove note from array
      spliceNote: function(id) {
        var confirmBox = confirm("Are you sure you want to delete this note?");
        
        if(confirmBox === true) {
          window.axios.delete('/notes/' + id)
            .then(response => {
              console.log(response);
              var index = this.notes.indexOf(id);
              this.notes.splice(index, 1);
            });
        }
      }
    }
    
  };
</script>

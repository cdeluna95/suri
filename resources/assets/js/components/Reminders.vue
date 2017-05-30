<template>
  <div class="reminders">
    <note 
      v-for="(note, index) in notes"
      :note="note"
      :index="index"
      :key="note.id"
      @note-deleted="spliceNote">
    </note>
  </div>
</template>

<script>
  export default {
    // Call notes property
    props: ['notes'],
    
    methods: {
      // Remove note from array
      spliceNote: function(note) {
        var index = this.notes.indexOf(note);
        this.notes.splice(index, 1);
      }
    }
  };
</script>

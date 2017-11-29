<template>
  <div class="flashcards">
    
    <!------------------------
      If flashcards are empty
      ------------------------->
    <div class="flashcards-empty" v-show="flashcards.length === 0">
      <h2 class="flashcards-empty-h2">
        No terms here!
      </h2>
      <p class="flashcards-empty-p">
        Have anything to study? Add some terms!
      </p>
      <div class="flashcards-add">
        <add-flashcard @flashcard-created="pushFlashcard"></add-flashcard>
      </div>
      <div class="flashcards-img-wrapper">
        <img class="flashcards-img img-auto" src="images/set.png">
      </div>
    </div><!-- flashcards-empty -->
    
    <!------------------------
      If flashcards exists
      ------------------------->
    <flashcard
      v-for="(flashcard, index) in flashcards"
      :flashcard="flashcard"
      :index="index"
      :key="flashcard.id"
      @flashcard-deleted="spliceFlashcard(flashcard.id)">
    </flashcard> <!-- flashcard -->
    
  </div><!-- flashcards -->
</template>

<script>
  export default {
    
    // Call flashcards property
    props: ['flashcards'],
    
    methods: {
      // Push flashcard to flashcards array
      pushFlashcard: function(flashcard) {
        this.flashcards.push(flashcard);
      },
      
      // Remove flashcard from array
      spliceFlashcard: function(id) {
        var index = this.flashcards.indexOf(id);
        this.flashcards.splice(index, 1);
      }
    }
    
  };
</script>

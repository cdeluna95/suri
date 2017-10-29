<template>
  <div class="sets">
    
    <!------------------------
      If sets are empty
      ------------------------->
    <div class="sets-empty" v-show="sets.length === 0">
      <h2 class="sets-empty-h2">
        You're all good!
      </h2>
      <p class="sets-empty-p">
        Have anything to study? Add a set!
      </p>
      <div class="sets-add">
        <add-set @set-created="pushSet"></add-set>
      </div>
      <div class="sets-img-wrapper">
        <img class="sets-img img-auto" src="images/set.png">
      </div>
    </div><!-- sets-empty -->
    
    <!------------------------
      If sets exists
      ------------------------->
    <set
      v-for="(set, index) in sets"
      :set="set"
      :index="index"
      :key="set.id">
    </set> <!-- set -->
    
  </div><!-- sets -->
</template>

<script>
  export default {
    
    // Call sets property
    props: ['sets'],
    
    methods: {
      // Push set to sets array
      pushSet: function(set) {
        this.sets.push(set);
      }
    }
    
  };
</script>

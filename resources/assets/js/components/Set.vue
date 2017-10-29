<template>
  <div class="set">
    
    <!------------------------
      Show in non-editing mode
      ------------------------->
    <div class="set-wrapper">
      <p class="set-h3">
        {{ set.set }}
      </p>
      <div class="set-icons">
        <button class="btn-edit">
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        <button class="btn-delete">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
      </div>
    </div><!-- set-wrapper -->
    
  </div><!-- set -->
</template>

<script>
  export default {
    
    // Call set property
    props: ['set']
    
  };
</script>

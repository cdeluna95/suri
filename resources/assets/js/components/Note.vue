<template>
  <div class="note">
    <p class="note-text">
      {{ text.text }}
    </p>
  </div>
</template>

<script>
  export default {
    props: ['text']
  };
</script>

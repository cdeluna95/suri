<template>
  <div class="reminders">
    <note v-for="text in notes" :text="text"></note>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        notes: [
          { text: "Walk dogs" },
          { text: "Do stuff" },
          { text: "Finish homework" },
          { text: "Do groceries" },
          { text: "Go to gym" },
          { text: "Sleep" },
          { text: "Eat food" },
          { text: "Listen to music" }
        ]
      };
    }
  };
</script>

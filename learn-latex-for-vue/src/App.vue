<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import PDF from "pdf-vue3";
</script>

<template>
  <div class="div">
    <PDF src="api/latex/main.pdf"></PDF>
  </div>

</template>

<style scoped>

.div {
  width: 300px;
  height: 300px;
}
</style>


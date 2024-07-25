<script setup>
  import { useToast } from "vue-toastification";
  const toast = useToast();

  toast.success('Welcome to app')
</script>

<template>
  <div id="home-view">
    <h1>Vue</h1>
  </div>
</template>

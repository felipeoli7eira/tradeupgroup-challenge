<script setup>
import { RouterLink } from "vue-router";
import { ArrowRightIcon } from "@heroicons/vue/24/solid";
</script>

<template>
  <div class="h-screen w-screen dark:bg-neutral-900 flex gap-10 flex-col items-center justify-center p-5">
    <img class="img-home-app block mx-auto" src="./../assets/img/svg/map.svg" alt="Icone de um rapaz segurando um map point" />

    <p class="dark:text-white text-lg lg:text-2xl text-center">Bem-vindo(a) ao VueMaps, seu app de informações de CEP.</p>

    <RouterLink :to="{name: 'buscarCep'}" class="flex items-center justify-center gap-3 bg-emerald-500 rounded-full hover:bg-emerald-600 text-white uppercase text-sm p-3 transition">
      <arrow-right-icon class="size-6" />
    </RouterLink>
  </div>
</template>


<style scoped>
.img-home-app {
  max-width: 300px;
}
</style>

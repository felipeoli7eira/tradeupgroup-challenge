<script setup>
import { ArrowLeftIcon, ArrowRightIcon } from "@heroicons/vue/24/solid";
import { RouterLink } from "vue-router";
import useCep from "@/hooks/useCep"

const {
  cep,
  requestIsRunning,
  cepResponse,
  handleSubmit
} = useCep()

</script>

<template>
  <div id="get-cep-screen" class="h-screen w-screen bg-slate-200 dark:bg-neutral-900">
    <div class="get-cep-screen-container h-screen mx-auto p-4 flex flex-col justify-between dark:bg-neutral-900">
      <header class="flex">
        <RouterLink :to="{ name: 'home' }" class="block p-2 rounded-full text-white bg-emerald-600 hover:bg-emerald-700 transition ease-in-out duration-300">
          <arrow-left-icon class="size-6" />
        </RouterLink>
      </header>

      <p v-if="requestIsRunning" class="text-center text-sm dark:text-white">Carregando...</p>

      <div v-if="!requestIsRunning && cepResponse !== undefined" class="text-center text-start dark:text-white md:w-3/5 mx-auto">
        <div v-if="('erro' in cepResponse)" class="flex flex-col gap-12">
          <img class="img-home-app block mx-auto" src="./../assets/img/svg/notfound.svg" width="300" alt="Não encontrado" />
          <p class="text-center text-base text-black dark:text-white">Nenhuma informação retornada para o CEP informado...</p>
        </div>

        <p v-else class="text-center text-md text-black dark:text-white">{{ cepResponse.logradouro }}, {{ cepResponse.bairro }} {{ cepResponse.localidade }} - {{ cepResponse.uf }}</p>
      </div>

      <div class="flex flex-col items-center justify-center">
        <div class="flex bg-zinc-300 dark:bg-neutral-800 input-container rounded-full p-3 border-2 border-zinc-400">
          <input
            @keydown.enter="handleSubmit"
            inputmode="numeric"
            autofocus
            type="text"
            v-model="cep"
            class="py-2 px-3 focus:outline-none w-full rounded-full bg-zinc-300 dark:bg-neutral-800 placeholder-zinc-900 dark:placeholder-neutral-500 text-zinc-900 dark:text-white font-thin"
            placeholder="00000000"
            :maxLength="8"
            :minLength="8"
          />

          <button @click="handleSubmit" type="button" class="dark:hover:bg-emerald-700 transition text-white p-2 rounded-full bg-emerald-600 hover:bg-emerald-700 dark:bg-neutral-700">
            <arrow-right-icon class="size-6" />
          </button>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
.get-cep-screen-container {
  max-width: 1200px;
}

.input-container {
  max-width: 800px;
  width: 100%;
}
</style>

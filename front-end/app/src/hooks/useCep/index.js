import { useToast } from "vue-toastification";
import { ref } from "vue";
import { getCep } from "@/services/cep.js";
import { validateCep } from "@/utils/validates.js";

const toast = useToast();

export default function useCep() {
    const cep = ref('');
    const requestIsRunning = ref(false);
    const cepResponse = ref(undefined);

    async function handleSubmit() {
        if (requestIsRunning.value) {
          return;
        }

        if (!validateCep(cep.value)) {
          toast.error("Oops! digite um cep de 8 digitos");
          return;
        }

        requestIsRunning.value = true
        const cepInfo = await getCep(cep.value)
        requestIsRunning.value = false

        if (!cepInfo.success) {
          toast.error('Erro ao buscar as informações do CEP informado...')
          return
        }

        cepResponse.value = cepInfo.data
    }

    return {
        cep,
        requestIsRunning,
        cepResponse,
        handleSubmit
    }
}

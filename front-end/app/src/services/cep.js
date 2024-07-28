import http from './http.js'

export async function getCep(cep) {
    try {
        const request = await http.get('/cep', {
            params: {
                cep
            }
        })

        return {
            success: true,
            data: request.data.data,
        }
    } catch (error) {
        return {
            success: false,
            message: 'Erro ao buscar as informações do cep informado'
        }
    }
}

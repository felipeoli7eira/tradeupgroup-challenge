/**
 * Método responsável por validar se a string de CEP é composta apenas de 8 números de 0 a 9
 *
 * @param {string} strCep
 * @return  {boolean}
*/
export function validateCep(strCep) {
    const cepRegex = /^[0-9]{8}$/;

    return cepRegex.test(strCep);
}

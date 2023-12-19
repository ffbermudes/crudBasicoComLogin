class ValidacoesInputsCriarUsuario {
    #inputMail = {
        elemento: null,
        valido: null
    }
    #inputPass = {
        elemento: null,
        valido: null
    }
    #inputRepass = {
        elemento: null,
        valido: null
    }

    constructor() {
        this.#inputMail.elemento = document.querySelector("input[name='usuario']")
        this.#inputPass.elemento = document.querySelector("input[name='pass']")
        this.#inputRepass.elemento = document.querySelector("input[name='re_pass']")
        this.#validacaoCampoEmail()
        this.#validacaoPass()
    }
 
    #validacaoCampoEmail() {
        const { elemento, valido } = this.#inputMail
        const regexEMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/g

        elemento.addEventListener('input', e => {
            const { target } = e
            const { value } = target

            if(regexEMail.test(value)) {
                target.style.border = 'solid 1px green'
                this.#inputMail.valido = true
            }
            else{
                target.style.border = 'solid 1px red'
                this.#inputMail.valido = false
            }

        })
    }

    #validacaoPass() {
        const re_senha = this.#inputRepass.elemento

        re_senha.addEventListener('input', e => {
            const {target} = e
            const {value} = target

            const senha = this.#inputPass.elemento.value

            if(senha === value){
                this.#inputPass.elemento.style.border = 'solid 1px green'
                this.#inputRepass.elemento.style.border = 'solid 1px green'
            }
            else {
                this.#inputPass.elemento.style.border = 'solid 1px red'
                this.#inputRepass.elemento.style.border = 'solid 1px red'
            }


        })
    }

}

export default ValidacoesInputsCriarUsuario
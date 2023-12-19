class CriarUsuario {
    inputMail
    inputPass
    inputRepass

    static init() {
        this.inputMail = document.querySelector('#usuario')
        this.inputPass = document.querySelector('#password')
        this.inputRepass = document.querySelector("input[name='re_pass']")
        this.validacaoCampoEmail()
        this.validacaoPass()
        this.validacaoRePass()
    }
 
    static validacaoCampoEmail() {
        const email = this.inputMail
        console.log(email)
    }

    static validacaoPass() {
        const senha = this.inputPass
        console.log(senha)
    }

    static validacaoRePass() {
        const re_senha = this.inputRepass
        console.log(re_senha)
    }

}

export default CriarUsuario
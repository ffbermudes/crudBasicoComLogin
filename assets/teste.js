const checkHowPageIs = ()=>{
    const url = window.location.href
    const rota = new URL(url).searchParams.get('rota');

    console.log(rota)

    const pages = {
        'criar_usuario': 'teste'
    }

    if('criar_usuario' in pages) {
        console.log('oi')
        return
    }

    console.log('teste')
}

export default checkHowPageIs
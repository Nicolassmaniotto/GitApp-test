/*faz uma requisição fetch a um servidor 
por meio do protocolo http (GET)  */

// (url, id do item, funcao a ser chamada)
function json_fetch(url,pos,func) {
    fetch(url,{
        // mode:'no-cors'
    })    
    .then((resp) => resp.json())
    .then(function(data) {
        //chamada de funcao(valor retornado,id do item a ser prenchido)
    func(data,pos);
    })

}
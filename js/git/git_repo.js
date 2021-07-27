function git_repo(data,pos){
    //percorre ate o item comic do json

    //limpa o o component a ser prenchido
    document.getElementById(pos).innerHTML = '';
    // console.log(data)
    //percorre o json
    data.forEach(element => {
        
        //constroe os items encontrados
        document.getElementById(pos).innerHTML +=`
        <div id='${element}'>
        <a href='${element.html_url}' class='conteudo_elemento_link conteudo_box'><h1>Github:  ${element.name}</h1></a>
        <div class='conteudo_elemento conteudo_box'>
        <h2>${ptbr.description}</h2>
        <p>${element.description}</p>
        </div>
            <div class='conteudo_elemento conteudo_box conteudo_readme'>
            <a onclick="chamada_readme('${element.name}','${element.id}')"><h2>> Readme:</h2></a>
                <div id='conteudo_${element.id}' class='conteudo_2tab'>

                </div>
            </div>
        </div>
        <hr>
        `;
                                                    
    });
}
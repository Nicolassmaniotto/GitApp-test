function git_since(data,pos){

    document.getElementById(pos).innerHTML = "<table id='table_git'> </table>" ;
    data.data.forEach(element => {
        document.getElementById('table_git').innerHTML += `
        <tr>
        <td>
            <h2>
            <a onclick="dataUser('${element.login}')" href='#data_${element.login}'>
                Name: ${element.login}
            </a>
            </h2>
        </td>
        <td>
         Id: ${element.id} <br>
        </td>
        </tr>
        `;
    });
    // document.getElementById(pos).innerHTML = content;
    document.getElementById('linkcontent').innerHTML += `<a href="">1</a>`;
}
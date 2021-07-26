function git_user(data,pos){
        console.log(data);
        document.getElementById(pos).innerHTML =  `
        <h1>Name:
         ${data.login}
        </h1>
        <h2>
        Id:
         ${data.id}
        </h2>
        <a href='${data.html_url}'><h2>
        Profile: 
        ${data.html_url}
        </h2>
        </a>
        <h2>Create Profile Data:
        ${data.created_at}
        </h2>


        `;
}
const searchBar = document.querySelector(".users .search input"),
      searchBtn = document.querySelector(".users .search button"),
      usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=> {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
}

searchBar.onkeyup = ()=> {
    let searchTerm = searchBar.value;
    if(searchTerm != "") {
        searchBar.classList.add("active");
    }
    else {
        searchBar.classList.remove("active");
    }
    //Commençons ajax
    let xhr = new XMLHttpRequest(); //création de l'objet XML
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}
      
setInterval(()=>{
    //Commençons ajax
    let xhr = new XMLHttpRequest(); //création de l'objet XML
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(!searchBar.classList.contains("active")) { //si active active n'est pas contenue dans la barre de recherche, alors ajouter cette donnée
                    usersList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500); //Cette fonction s'exécutera fréquemment après 500ms
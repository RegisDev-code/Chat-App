const form = document.querySelector(".signup form"),
      continueBtn = form.querySelector(".button input"),
      errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=> {
    e.preventDefault(); //pour prévenir à la soumission du formulaire 
}

continueBtn.onclick = ()=> {
    //Commençons ajax
    let xhr = new XMLHttpRequest(); //création de l'objet XML
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if(data == "Opération réussie !") {
                    location.href = "login.php";
                    // window.open('users.php','_self');
                }
                else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    //Nous enverrons les données du formulaire en PHP à travers ajax
    let formData = new FormData(form); //création d'un nouvel objet formData
    xhr.send(formData); //envoi des données du formulaire à PHP
}
const form = document.querySelector(".typing-area"),
      inputField = form.querySelector(".input-field"),
      sendBtn = form.querySelector("button"),
      chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=> {
    e.preventDefault(); //pour prévenir la soumission du formulaire 
}

sendBtn.onclick = ()=> {
    //Commençons ajax
    let xhr = new XMLHttpRequest(); //création de l'objet XML
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                inputField.value = ""; //une fois le message envoyé dans la base de données, vidons le champ du input 
                scrollToBottom();
            }
        }
    }

    //Nous enverrons les données du formulaire en PHP à travers ajax
    let formData = new FormData(form); //création d'un nouvel objet formData
    xhr.send(formData); //envoi des données du formulaire à PHP
}

chatBox.onmouseenter = ()=> {
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=> {
    chatBox.classList.remove("active");
}

setInterval(()=>{
    //Commençons ajax
    let xhr = new XMLHttpRequest(); //création de l'objet XML
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")) { //si la classe "active" n'est pas contenue dans le chatbox, le scroll vient en bas
                    scrollToBottom();
                }
            }
        }
    }

    //Nous enverrons les données du formulaire en PHP à travers ajax
    let formData = new FormData(form); //création d'un nouvel objet formData
    xhr.send(formData); //envoi des données du formulaire à PHP
}, 500); //Cette fonction s'exécutera fréquemment après 500ms

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}
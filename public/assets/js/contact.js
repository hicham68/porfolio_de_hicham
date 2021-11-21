console.log("Chargé");

// Fonction qui 
// permet de rajouter une balise après une autre
function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}


  const submitHandler = () =>{
    // if (!(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(v)) && typeof v ==='string' && v.length >4)
    // {
    //   setUsernameError("")
    //   return true
    // }
   
    
    let contactMessage = {
      nom: document.getElementById('contact__nom').value,
      email: document.getElementById('contact__email').value,
      projet: document.getElementById('contact__projet').value,
      message: document.getElementById('contact__message').value
    }
    console.log(contactMessage);

    ///// VERIFICATION NOM :
    let namRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]+/
    console.log(namRegex.test(contactMessage.nom))
    if( contactMessage.nom === ""  && 
        !document.getElementById("contact__nom__error") ||
        namRegex.test(contactMessage.nom)
        && 
        !document.getElementById("contact__nom__error")
        ){
      var divError = document.createElement("div"); // creer une 
      divError.setAttribute("id","contact__nom__error"); // on ajoute un id sur la div
      divError.innerHTML = ` <p type="text" name="name"  class="error__form" > <i class="fas fa-exclamation-triangle"></i> Votre nom n'est pas valide </p>`;
      var divInput = document.getElementById("div__contact__nom");
      insertAfter(divInput, divError);
    }
    else if(contactMessage.nom !== "" && document.getElementById("contact__nom__error") ){
      var divError = document.getElementById("contact__nom__error")
      divError.parentNode.removeChild(divError)
      // divError.remove()
    } 

    ///// VERIFICATION EMAIL :

    let emailRe = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if( 
      contactMessage.email.length <5 && 
      emailRe.test(contactMessage.email) === false &&
      !document.getElementById("contact__email__error") ||

      contactMessage.email.length > 5 && 
      emailRe.test(contactMessage.email) === false &&
      !document.getElementById("contact__email__error") 

      ){
      var divError = document.createElement("div"); // creer une 
      divError.setAttribute("id","contact__email__error"); // on ajoute un id sur la div
      divError.innerHTML = ` <p type="text" name="name"  class="error__form" > <i class="fas fa-exclamation-triangle"></i> Votre email n'est pas valide </p>`;
      var divInput = document.getElementById("div__contact__email");
      insertAfter(divInput, divError);
    }
    else if(document.getElementById("contact__email__error") &&
    contactMessage.email.length >5 && 
    emailRe.test(contactMessage.email) === true &&
    document.getElementById("contact__email__error")
    ){
      let divError = document.getElementById("contact__email__error")
      divError.parentNode.removeChild(divError)
      // divError.remove()
    } 

    //// VERIFICATION PROJET :
    if(contactMessage.projet ==="" && !document.getElementById("contact__projet__error")){
      var divError = document.createElement("div"); // creer une 
      divError.setAttribute("id","contact__projet__error"); // on ajoute un id sur la div
      divError.innerHTML = ` <p type="text" name="name"  class="error__form" > <i class="fas fa-exclamation-triangle"></i> Votre projet n'est pas valide </p>`;
      var divInput = document.getElementById("div__contact__projet");
      insertAfter(divInput, divError);
    }
    else if(document.getElementById("contact__projet__error") && contactMessage.projet !=="") {
      let divError = document.getElementById("contact__projet__error")
      divError.parentNode.removeChild(divError)
      // divError.remove()
    } 

    //// VERIFICATION MESSAGE :

    if( contactMessage.message.length < 50 && !document.getElementById("contact__message__error") 
    ){
      var divError = document.createElement("div"); // creer une 
      divError.setAttribute("id","contact__message__error"); // on ajoute un id sur la div
      divError.innerHTML = ` <p type="text" name="name"  class="error__form" > <i class="fas fa-exclamation-triangle"></i> Votre message n'est pas valide, il doit faire plus de 50 caractères </p>`;
      var divInput = document.getElementById("div__contact__message");
      insertAfter(divInput, divError);
    }
    else if(document.getElementById("contact__message__error") && contactMessage.message !=="" && contactMessage.message.length > 50 ) {
      let divError = document.getElementById("contact__message__error")
      divError.parentNode.removeChild(divError)
      // divError.remove()
    } 


  
    // event.preventDefault();
    // console.log('ENVOI EN PLACE ', event);
   
    
    // if( !formdata.name ){
    //   setError(true);
    //   setMessage('Le nom est requis');
    // } else if( !formdata.email ){
    //   setError(true);
    //   setMessage('Email requis');
      
    // } else if( !(re.test(formdata.email) && formdata.email.length >4)){
    //   setError(true);
    //   setMessage('Le format de votre email est invalide');
    // }else if( !formdata.subject ){
    //   setError(true);
    //   setMessage('Le sujet est requis');
    // } else if( !formdata.message ){
    //   setError(true);
    //   setMessage('le message est requis');
    // } else{
    //   setError(false);
    //   messageGmail.from = formdata.message;
    //   messageGmail.subject = formdata.subject;
    //   setLoading(true);
    //   sendEmailConfirm(formdata.email, formdata.name,formdata.message, formdata.subject);
    // }
  }
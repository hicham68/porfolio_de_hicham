console.log("Chargé");

  const submitHandler = (event) =>{
    event.preventDefault();
    console.log('ENVOI EN PLACE ', event);
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if( !formdata.name ){
      setError(true);
      setMessage('Le nom est requis');
    } else if( !formdata.email ){
      setError(true);
      setMessage('Email requis');
      
    } else if( !(re.test(formdata.email) && formdata.email.length >4)){
      setError(true);
      setMessage('Le format de votre email est invalide');
    }else if( !formdata.subject ){
      setError(true);
      setMessage('Le sujet est requis');
    } else if( !formdata.message ){
      setError(true);
      setMessage('le message est requis');
    } else{
      setError(false);
      messageGmail.from = formdata.message;
      messageGmail.subject = formdata.subject;
      setLoading(true);
      sendEmailConfirm(formdata.email, formdata.name,formdata.message, formdata.subject);
    }
  }
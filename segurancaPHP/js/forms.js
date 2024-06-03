// este formulário lidará com: (formhash()) and registration (regformhash()):

function formhash(form,password)
{
    //cria um elemento input, onde sera campo o para a senha com hash
    var p = document.createElement("input");

    //adicione um novo elemento ao nosso formulário
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    password.value = "";

    //finalmente, envie o form
    form.submit();
}

function regformhash(form, uid, email, password, conf)
{
    if 
    (
        uid.value == '' ||
        email.value == '' ||
        password.value == '' ||   
        conf.value == ''
    )
    {
        alert('You must provide all the requested details. Please try again');
        return false;
    }

    //verifique o nome do usuario
    re = /^\w+$/; 

    if(!re.test(form.username.value))
    {
        alert("Username must contain only letters, numbers and underscores. Please try again");         
        form.username.focus();
        return false; 
    }

    if(password.value.length < 6)
    {
        alert('Passwords must be at least 6 characters long.  Please try again');        
        form.password.focus();
        return false;
    }    
    // Pelo menos um número, uma letra minúscula e outra maiúscula pelo menos 6 caracteres 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    
    if (!re.test(password.value)) 
    {        
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;    
    }

    //verificar se a senha é a mesma
    if(password.value != conf.value)
    {
        alert('Your password and confirmation do not match. Please try again');        
        form.password.focus();
        return false;
    }

    //cria um elemento input, onde sera campo o para a senha com hash
    var p = document.createElement("input");

    //adicione um novo elemento ao nosso formulário
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    //senha simples nao enviar
    password.value = "";    
    conf.value = "";
    
    //finalmente, envie o form
    form.submit();
    return true;
}
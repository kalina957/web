document.addEventListener("DOMContentLoaded", function(event) { 

    
    var pass = document.getElementById("passwordInput")
    pass.addEventListener('keyup', function () {
        checkPassword(pass.value)
    })
    function checkPassword(password) {
        var strengthBar = document.getElementById("strength")
        var strength = 0;
        if (password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
            strength += 1
        }
        if (password.match(/[~<>?]+/)) {
            strength += 1
        }
        if (password.match(/[!@£$%^*()]+/)) {
            strength += 1
        }
        if (password.length > 5) {
            strength += 1
        }
        switch (strength) {
            case 0:
                strengthBar.value = 20;
                break;
            case 1:
                strengthBar.value = 40;
                break;
            case 2:
                strengthBar.value = 60;
                break;
            case 3:
                strengthBar.value = 80;
                break;
            case 4:
                strengthBar.value = 100;
                break;
        }

        if(strength >=4 ) 
        {
                return true;
        } 
        return false;

    }
    //do work
  });
    function checkEmail()
    {
    var email = document.getElementById("emailInput").value;
    console.log(email);
    var regExpr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/gm;
    if(regExpr.test(email))
    {
        document.getElementById("wrongEmail").style.display = "none";

    }
    else
    {
        document.getElementById("wrongEmail").style.display = "inline-block";
        return (false)
    }
    return true;
    }

    function checkFirstName()
    {

    var firstName = document.getElementById("firstName").value;

    var regExpr = /^[A-Za-z .'-]+$/gm;
    if(regExpr.test(firstName))
    {
      
        document.getElementById("wrongfName").style.display = "none";
    }
    else
    {
       
        document.getElementById("wrongfName").style.display = "inline-block";
        return false;
    }
    return true;
    }
    function checkLastName()
    {
    var lastName = document.getElementById("lastName").value;
 
    var regExpr = /^[A-Za-z .'-]+$/gm;
   if(regExpr.test(lastName))
    {
       
        document.getElementById("wronglName").style.display = "none";
    }
    else
    {
    
        document.getElementById("wronglName").style.display = "inline-block";
        return false;
    }
    return true;
    }

    function formCheck(){
     //note that && operant in Javascript is short-circuit conditional -- one false return will stop evaluation for other methods
        if(checkEmail() && checkFirstName() && checkLastName() && checkPassword()) {
            alert('success');
        } else {
            alert("bad");
        }
        
    }
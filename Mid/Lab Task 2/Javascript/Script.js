console.log("JS Connected");

let Attempt = 0;

function Login()
    {

        let IsValidUsername = ValidateUsername();

        let IsValidPassword = ValidatePassword();

        if(IsValidUsername == false || IsValidPassword == false)
            
        {
            return false;
        }

        CheckLogin();

        return false;
    }

function ValidateUsername()

    {
        let Username = document.getElementById("username").value;

        if(Username == "" )
        {
            document.getElementById("UsernameError").innerHTML="Username Can Not Be Empty";

            return false;
        }

        document.getElementById("UsernameError").innerHTML = "";

        return true;
    }

function ValidatePassword()
    {
        let Password = document.getElementById("password").value;

        if(Password == "")
        {
            document.getElementById("PasswordError").innerHTML= "Password Can Not Be Empty";

            return false;
        }

        document.getElementById("PasswordError").innerHTML ="";

        return true;
    }

function CheckLogin()

    {

        let Username = document.getElementById("username").value;

        let Password = document.getElementById("password").value;

        if(Attempt>=3)

        {
            document.getElementById("LoginMessage").innerHTML = " You are locked for 5 minutes ";

            return false;
        }

        if(Username == "AIUB" && Password == "$_student")

        {
            document.getElementById("LoginMessage").innerHTML="Successfully Logged In" ;

            Attempt= 0 ;

            return true;
        }

        Attempt++ ;

        if(Attempt == 1)

        {
            document.getElementById("LoginMessage").innerHTML="You have 3 attempts left ";
        }

        else if(Attempt == 2)

        {
            document.getElementById("LoginMessage").innerHTML="You have 2 attempts left";
        }

        else if(Attempt ==3)

        {
            document.getElementById("LoginMessage").innerHTML=" You have 1 attempt left. You are locked for 5 minutes";
        }

        return false;

    }
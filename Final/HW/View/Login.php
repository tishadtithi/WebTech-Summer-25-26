<?php

include "../Controller/LoginValidation.php";

?>

<!DOCTYPE html>
<html>

<head>

    <title> PHP form validation</title>

    <script>

        function collect_data()
        {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();

            let valid = true;
            let message = "";

            if(name.length < 5)
            {
                message = "Name Should be 5 Char";
                valid = false;
            }

            if(email == "")
            {
                message += " Email is Required";
                valid = false;
            }

            if(!valid)
            {
                alert(message);
            }

            return valid;
        }

    </script>

</head>

<body>

    <h3>PHP form validation</h3>

    <?php

    if($message != "")
    {
        echo "<p style='color:green;'>$message</p>";
    }

    ?>

    <p style="color:red;">* Required field</p>


    <form method="post" onsubmit="return collect_data();">


        Name:

        <input type="text"
               id="name"
               name="name"
               value="<?php echo $name; ?>">

        <?php

        if($name != "")
        {
            echo "<span style='margin-left:185px;'>* $name</span>";
        }

        ?>

        <br><br>


        Email:

        <input type="text"
               id="email"
               name="email"
               value="<?php echo $email; ?>">

        <?php

        if($email != "")
        {
            echo "<span style='margin-left:185px;'>* $email</span>";
        }

        ?>

        <br><br>


        Website:

        <input type="text"
               id="website"
               name="website"
               value="<?php echo $website; ?>">

        <?php

        if($website != "")
        {
            echo "<span style='margin-left:185px;'>$website</span>";
        }

        ?>

        <br><br>


        Comment:

        <textarea id="comment"
                  name="comment"
                  rows="6"
                  cols="40"><?php echo $comment; ?></textarea>

        <?php

        if($comment != "")
        {
            echo "<span style='margin-left:0px;'>$comment</span>";
        }

        ?>

        <br><br>


        Gender:

        <input type="radio"
               name="gender"
               value="Male"
               <?php if($gender == "Male") echo "checked"; ?>>

        Male


        <input type="radio"
               name="gender"
               value="Female"
               <?php if($gender == "Female") echo "checked"; ?>>

        Female


        <?php

        if($gender != "")
        {
            echo "<span style='margin-left:145px;'>* $gender</span>";
        }

        ?>

        <br><br>


        <input type="checkbox" name="remember">

        Remember Me

        <br><br>


        <input type="submit" value="Login">

        <input type="reset" value="Reset">


    </form>

</body>

</html>
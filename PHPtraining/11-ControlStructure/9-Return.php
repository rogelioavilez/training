<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return</title>
</head>
<body>
    <h1>Return</h1>
    <pre>
        * Return will help exclude the next lines if added a condition.
    </pre>
    <hr>
    <h3>Return Parameters if input is empty</h3>
    <pre><code>
        function checkUserRoles ($userRoles){

            if(empty($userRoles)){
                echo "Roles cannot be empty";
                return;
            }

            switch($userRoles){

                //Do not excecute when user role is empty
                case "Admin";
                    echo "Hello Admin";
                    break;
                case "Editor";
                    echo "Hello Editor";
                    break;
                default;
                    echo "Rol is empty"; //This will be excuded using return if empty
            }
            
        }

        checkUserRoles("Admin");
        checkUserRoles("");
        checkUserRoles("Editor");
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        function checkUserRoles ($userRoles){

            if(empty($userRoles)){
                echo "Roles cannot be empty";
                return;
            }

            switch($userRoles){

                //Do not excecute when user role is empty
                case "Admin";
                    echo "Hello Admin";
                    break;
                case "Editor";
                    echo "Hello Editor";
                    break;
                default;
                    echo "Rol is empty"; //This will be excuded using return if empty
            }
        }

        checkUserRoles("Admin");
        checkUserRoles("");
        checkUserRoles("Editor");
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raise and Catch Exceptions</title>
</head>
<body>
    <h1>Raise and Cathc Exceptions</h1>
    <pre>
        * example of syntax:

            try{
                //This is an Error

            } catch (){

                //Jumps to this block

            }
    </pre>

    <!-- Raise-Catch a divide by Zero Error -->
    <hr>
    <div>
        <h3>Raise-Catch a divide by Zero Error</h3>
        <pre><code>
            function divide($x, $y):int{
                if($y <=0){
                    throw new Exception("Divide by Zero Exception might happen");
                }

                $result = $x/$y;
                return $result;
            }            

            try{
                //This is the Error
                $result = divide(1,0);

            } catch (Exception $e){

                //Jumps to this block
                echo 'Caught Exception: ' . $e->getMessage();

            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            function divide($x, $y):int{
                if($y <=0){
                    throw new Exception("Divide by Zero Exception might happen");
                }

                $result = $x/$y;
                return $result;
            }            

            try{
                //This is the Error
                $result = divide(1,0);

            } catch (Exception $e){

                //Jumps to this block
                echo 'Caught Exception: ' . $e->getMessage();

            }
        ?>
    </div>

</body>
</html>
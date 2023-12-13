<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to read function from PHP Manual</title>
</head>
<body>
    <h1>Anonymous Function</h1>
    <pre>
        * Anonymous Function does not have a function name
        * they are also called Closures

        example->

        *define the function:

            $function_variable = function (parameters_here){
                return: Something;
            }

        * to call function:

            echo $function_variable(parameters_here);
    </pre>
    <!-- Example 1 -->
    <hr>
    <div>
        <h3>Example 1:</h3>
        <pre><code>
            $Anon_function = function ($a, $b){
                $addNumbers = $a + $b;
                return $addNumbers;
            };

            echo $Anon_function(4,7);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $Anon_function = function ($a, $b){
                $addNumbers = $a + $b;
                return $addNumbers;
            };

            echo $Anon_function(4,7);
        ?>
    </div>

    <!-- Example 2 -->
    <hr>
    <div>
        <h3>Example 2: Use External Content inside function</h3>
        <pre><code>
            $content = "This is a String Message";

        //Call out Variable $content with use()
            $print_content = function () use($content){
                
                echo $content;
            };

            $print_content();
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $content = "This is a String Message";

            //Call out Variable $content with use()
            $print_content = function () use($content){
                
                echo $content;
            };

            $print_content();
        ?>
    </div>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    </head>
    <style>

    </style> 
    <script>
        function clicktest(obj,e)
        {
         alert("test");//
		}    
    </script>
    <body>
        <div> 
            <!--how to use button action in yajan -->
            <?php
                $btn= new Button("test");// declares the button and the first parameter assign id and name of the html element
                $btn->setValue("PrintReport");//assign the text to the button
	            $btn->addJsEvent("onClick","clicktest");//first parameter contains the listener your are support to use and second parameter defines the function name. 
	            $btn->rander();//this shows the html element on the screen

            ?>
        </div>
    </body>   
</html>

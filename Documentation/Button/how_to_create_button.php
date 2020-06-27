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
     
    <body>
        <div> 
            <!--how to create button in yajan -->
            <?php
                $btn= new Button("test");//declare the html element button
                $btn->setValue("button");//assign the value to the button 
	        $btn->rander();//this function is used to show the yajan object as html element on the screen

            ?>
        </div>
    </body>   
</html>

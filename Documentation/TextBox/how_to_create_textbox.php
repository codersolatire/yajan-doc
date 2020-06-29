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
       function calcAmount(obj,e)
       {
           alert("test");
       }
    </script>
     
    <body>
        <div> 
            <!--How to use TextBox method in yajan -->
            <?php
                
           
                $txt = new TextBox("subsQty");
                $txt->setValue(1);
                $txt->addJsEvent("onBlur","calcAmount");
                $txt->rander();
            
            ?>
          

           

        </div>
    </body>   
</html>
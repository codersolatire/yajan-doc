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
                $btn= new Button("test");//
                $btn->setValue("PrintReport");//show is button text 
	            $btn->addJsEvent("onClick","clicktest");//this function use do_action by use js 
	            $btn->rander();//this function use show front web page this function is not use that is not show webpage

            ?>
        </div>
    </body>   
</html>
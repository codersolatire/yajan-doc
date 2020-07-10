<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script type="text/javascript">
		var jsLibPath="/yajan/lib/11.0/js/default";
		</script>
    <script type="text/javascript" language="javascript" src="/yajan/lib/11.0/js/default/jquery-1.9.1.js"></script>
    <script type="text/javascript" language="javascript" src="/yajan/lib/11.0/js/default/jquery.pl.js"></script>
    <script type="text/javascript" language="javascript" src="/yajan/lib/11.0/js/default/jquery.ui.js"></script>
    <script type="text/javascript" language="javascript" src="/yajan/lib/11.0/js/default/yajan.js"></script>
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
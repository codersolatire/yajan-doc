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
     
    <body>
        <div> 
            <!--how to use css in button -->
            <?php
                $btn= new Button("test");//
                $btn->setValue("button");//show is button text
                $btn->addCss("property","value");// ex-$btn->addCss("color","red");
	            $btn->rander();//this function use show front web page this function is not use that is not show webpage
            ?>
        </div>
    </body>   
</html>
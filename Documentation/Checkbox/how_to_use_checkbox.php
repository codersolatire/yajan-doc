


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
            <!--How to use CheckBox method in yajan -->
            <?php
                
                //  create CheckBox using Normal Method
                $t=new CheckBox("test");   // test is checkbox id
                $t->rander();

                //  set CheckBox default
                $t=new CheckBox("test");
                $t->setChecked($val);
                $t->rander();

                //  create CheckBox using Profile Method
                $t=$member->getObject("attrib.TEST","CheckBox");  // getObject is a method of Profile Class
                $t->rander();

                 
            ?>
        </div>
    </body>   
</html>
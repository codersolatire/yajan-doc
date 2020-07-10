


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
        function changeRole(obj,e)
            { 
                alert(resp);
            }
    </script>
     
    <body>
        <div> 
            <!--How to use comboBox method in yajan -->
            <?php
                
                $query = "select * from user where enrollment_number = '1234' ";
				
				$info = $db->execute($query);
                        $type = new ComboBox("userType");
						$type->addClass("type");
                        $type->add("Select Type","");
                        $type->add("Student","ST");
                        $type->setValue($info->get("type"));
                        $type->rander();
            ?>
            <!--How to use comboBox Recordset method in yajan -->

            <?php
                $query = "select * from user where enrollment_number = '1234' ";

                 $cb = new ComboBox("map_level"); 
                 $cb->addJsEvent("onChange","changeRole");
                 $cb->setRecordset($res);
            ?>

        </div>
    </body>   
</html>
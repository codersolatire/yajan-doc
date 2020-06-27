


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
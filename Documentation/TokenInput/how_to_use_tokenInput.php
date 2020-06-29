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
        <?php
            $q = "select code, name from country order by name";
                    //echo $q;
                    $r = $db->execute($q);
                    $txt = new TokenInput("contactCountry");
                    $txt->setRecordset($r);
                    if($contactCountry=="" && $contactCountry==NULL)
                    {
                        $txt->setValue('INDA');
                    }
                    else
                    {
                        $txt->setValue($contactCountry);
                    }
                    $txt->setTokenLimit(1);
					$txt->addJsEvent("onChange","onChangeCountry");
                    $txt->rander();
            ?>

        </div>
    </body>   
</html>
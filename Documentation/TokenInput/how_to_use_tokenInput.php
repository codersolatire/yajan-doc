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
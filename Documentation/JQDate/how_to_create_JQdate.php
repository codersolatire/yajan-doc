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
            <!--How to use JQDate method in yajan -->
            <?php
                
                $txt = new JQDate("pay_date");
                $txt->setYearRange("2000:2030");//start year to end year
                $txt->yearSelection(true);//recent year selection
                $txt->rander();
            ?>
          

           

        </div>
    </body>   
</html>
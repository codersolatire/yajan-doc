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
       <script>
        function onClickGetDetail(obj,e)
        {
            alert("test");
        }
</script>
        <div> 
       
           
                    <?
                    $db = new Connection("test");
                     $q = "select code, name from country order by name";

					$table = new Table("outputData");
                    $table->setQuery($q,$db);
                    $table->addClass("whightTable");
                    $table->showSummery(true);
                    $table->setColumnValueFormat("amount",$f);
                    $table->addSummeryColumn("amount","sum",$f);
                    $b = new Button("sub");
                    $b->addJsEvent("onClick","onClickGetDetail");
                    $table->setColumnClass("detail",$b);
                    $table->bindWith("on_date","detail","on_date");
                    $table->bindWith("mode_of_payment","detail","mode_of_payment");
                    $table->bindWith("id","detail","userid");
                    $table->addColumnCss("amount","text-align","right");
                    $table->showDistinctGroup(true);
                    $table->setColumnDistinctSelection("name",true);
                    $table->rander();
                    ?>
				
			
            </div>
    </body>   
</html>
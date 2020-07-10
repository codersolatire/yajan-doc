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

       <?       $db = new Connection("profile");
                $form=new Form("editForm");
                $form->setUrl("/ashram/yuva_mandal/edit");
                $form->ajax(true);
                $form->ajaxCallback("postEditComplite");
                if($form->submited())
                {
                    echo"form submited";
                }
                else{

                
                ?>
                <?
                $form->begin();?>
                <table width="100%">
                    <tr>
                        <td width="30%">Profile</td>
                        <td>
                            <?php
                                $txt=new TextBox("profileId");
                                $txt->setPlaceHolder("profileId/MemberCode");
                                $txt->rander();
                            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td width="70%"><?php
                            $b=new Button("clickbt");
                            $b->setValue("Search on Name/mobile");
                            $b->addJsEvent("onClick","onclickAnotherSearch");
                            $b->rander();
                            ?>
                        </td>
                    </tr>
                </table>
               <? $form->submit();
                $form->end();
                }   
                ?>
            </div>
    </body>   
</html>
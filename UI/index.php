<?php
  $CURRENT_PATH = './artshu_stage/UI/';
if(true) {
require_once $CURRENT_PATH . "data/HTMLData.php";
require_once $CURRENT_PATH . "util/UIUtil.php";

} else {
require_once $CURRENT_PATH . "data/HTMLData.php";
require_once $CURRENT_PATH . "util/UIUtil.php";
}   

 $header = UIUtil::getHeaderHTML();
    $nav_menu = UIUtil::getMenuHTML($nav_menu);
    $office_hour = UIUtil::getOperationHourHTML();
    $direction = UIUtil::getDirectionHTML();
    $header = UIUtil::getHeaderHTML();
    $poster = UIUtil::getPosterHTML($posterUrl,  true);
    
    $add_event = UIUtil::getEventHTML($event_list, 'add');
    $add1_event = UIUtil::getEventHTML($event_list, 'add1');  
      //$add2_event = UIUtil::getEventHTML($event_list, 'add2');   
      $add2_event = "";
//  $add1_event = "";
    $current_event=UIUtil::getEventHTML($event_list, 'future');
    $coming_event=UIUtil::getEventHTML($event_list, 'coming');

    
    $focus = UIUtil::getLogoHTML();
    
    $future = UIUtil::getFutureHTML();
    $report = UIUtil::getReportHTML();
    $qingshu = UIUtil::getQingshu();
?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="Hannah Zhao">
<meta http-equiv="Reply-to" content="@.com">
<meta name="description" content="<?=$html_description?>">
<meta name="keywords" content="<?=$html_keywords?>">
<meta name="creation-date" content="01/01/2009">
<meta name="revisit-after" content="15 days">
<title><?=$html_title?></title>

<link rel="stylesheet" type="text/css" href="<?=$CURRENT_PATH?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?=$CURRENT_PATH?>css/main.css">
<link rel="stylesheet" type="text/css" href="<?=$CURRENT_PATH?>css/effects.css"> 
<script src="<?=$CURRENT_PATH?>js/jquery-1.6.4.min.js"></script>
<script src="<?=$CURRENT_PATH?>js/menu.js"></script>
<style type="text/css">
 .alert {
background: url(http://artshu.com/artshu_stage/UI/icons/icon.priority.critical.png) 4% 38% no-repeat #efefef;
position: relative;
padding-top: 5px;
padding-bottom: 3px;
margin-top: 13px;
width: 488px;
margin-bottom: 14px;
border: 1px solid #bababa;
}
</style>
</head>
<body>
    <?=$header?>  
    
    <div id="content">
        
        
        <div id="side_left">
            <div id="nav_menu">
                <?=$nav_menu?>
                
            </div>
            <div id="operation">
                <?=$direction?>
                <?=$office_hour?>
            </div>
        </div>
        <div id="middle">
        <div id="inner_middle">
        <div class='alert' style="display:none">We will close in January 1st, 2014.</div>
                               
            <?=$current_event?>
            <?=$add1_event?>  

            <?=$add_event?>
            <?=$add2_event?>  
              
            <?=$report?>
            
            <?=$coming_event?> 
            
            <!--<?=$future?> -->
             <?=$qingshu?>  
            <?=$future?>     
                            <div style="clear:both"/>
          </div>  
        </div> 
        <div id="side_right">
            <div style="width:100% height:100%">
            <?=$poster?>
            </div>
            <div id="putFuture">
                <div>
                <div style="width:100%; "><?=$focus?></div>
               <!--<div  style="width:39%; float:left"><a href="http://www.artshu.com/art2.0/events/110811122012/orig/invitation.jpg"><img width=200 src="http://localhost/remote_artshu/art2.0/events/110811122012/thumbnails/invitation.jpg"></a></div>
                <div style="width:60%; float:right"><?=$focus?></div>
               --> </div>
                
            </div>  
        </div>
        
    </div>
    <div style="clear:both"></div>

</body>
</html>


<?php
  $CURRENT_PATH = './artshu_stage/UI/';
if(true) {
require_once $CURRENT_PATH . "data/HTMLData.php";
require_once $CURRENT_PATH . "util/UIUtil.php";

} else {
require_once $CURRENT_PATH . "data/HTMLData.php";
require_once $CURRENT_PATH . "util/UIUtil.php";
}    $header = UIUtil::getHeaderHTML();
    $nav_menu = UIUtil::getMenuHTML($nav_menu);
    $office_hour = UIUtil::getOperationHourHTML();
    $direction = UIUtil::getDirectionHTML();
    $header = UIUtil::getHeaderHTML();
    $poster = UIUtil::getPosterHTML($posterUrl,  true);
    $current_event=UIUtil::getEventHTML($event_list, 'current');
    $focus = UIUtil::getLogoHTML();
    $coming_event=UIUtil::getEventHTML($event_list, 'coming');
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
            <?=$current_event?>
            
            <?=$focus?>  
            <?=$coming_event?>
            <?=$qingshu?>
          </div>  
        </div> 
        <div id="side_right">
            <div style="width:100% height:100%">
            <?=$poster?>
            </div>
        </div>
        
    </div>
    <div style="clear:both"></div>

</body>
</html>


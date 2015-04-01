<?php
    
  class UIUtil {
    
    /**
    * Generate menu up to two level, menu/sub menu
    * 
    * @param mixed $nav
    * @return mixed
    */
    public static function getMenuHTML($nav) {
        if(count($nav)==0) return ''; 
        $html = '<ul class="menu noaccordion">';
        foreach($nav as $key => $value) {
            if(count($value, COUNT_RECURSIVE) == 2) { //one level menu
                $html .=  '<li><a href="'. $value['link']. '" target="_blank">'. $value['title'] .'</a></li>';
            }  else {
                $html .= '<li><a href="http://www.artshu.com">'. $value['title'] . '</a>';
                $html .= '<ul class="acitem">';

                foreach($value['link'] as $subKey => $subValue) {
                    $html .= '<li><a href="'. $subValue['link'] . '" target="_blank">'. $subValue['title'] .'</a></li>';
                }
                $html .= '</ul>';
                $html .= '</li>';
            }
        }
        $html .= '</ul>'; 
        return $html;
    }
    
    public static function getOperationHourHTML() { 
        $html = '<div class="t1">Phone</div>';
        $html .= '<p><span class="info1">510-579-8951 (Mobile)</span><br/><span class="info1">408-248-2698 (Office)</span></p>';
        $html .= '<div class="t1">Hours</div>';
       // $html .= '<p>'; 
        $html .= '<p><span class="info1">Wednesday - Sunday:</span></p><p><span class="info2">11:00 a.m. - 6:00 p.m.</span></p>';
        
        $html .= '<p><span class="info1">Monday, Tuesday:</span></p> <p><span class="infoCap">BY APPOINTMENT ONLY</span></p>';
      //  $html .= '</p>';
        $html .= '<div class="t1">Curator</div>';
        $html .= '<p><span class="info1">Shu Jianhua</span><br/><span class="info1">shujh1969@yahoo.com</span></p>';
        return $html;
    }
        
    public static function getDirectionHTML() { 
        $html = '<div class="t1 free_text">Free Admission</div>';
        $html .= '<div class="t1">Free Parking</div>';
        $html .= '<p class="info1">'; 
        $html .= 'in the rear of the Central Computer Building, 4<sup>th</sup> floor</p>';
        $html .= '<div class="italic">Wheelchair Accessible</div>';

        $html .= '<div class="t1">Address</div>';
        $html .= '<p><span class="info1">3777 Stevens Creek Blvd</span><br/> <span class="info1">Santa Clara, CA 95051</span></p>';
        $html .= '<div class="t1">Direction</div>';
        $html .= '<p class="info1">Coming from Hwy 280, Saratoga Ave exit, towards Stevens Creek Blvd, 4th floor on Central Computer Building</p>';
        
        return $html;
    }
    
    public static function getHeaderHTML() {
        $html = '<div id="header">Silicon Valley Asian Art Center & Narx Gallery</div>';
        return $html;
    }
    
    public static function getPosterHTML($posterUrl, $isIFrame=false) {
        if($isIFrame) {
           return '<iframe id="iframeShow" src="http://www.artshu.com/previewshow/poster080808192012.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>
';
        }
        $html = '<img src="' . $posterUrl . '" width="100%"/>';
        return $html;
    }
    
    public static function getAwayNotice($lang) {
        
        $html = "<div class='t1'> Notice </div>";
        $html .= "<p class='noticeContent'>During Feb.15—29, we open:</p>";
        $html .= "<p class='noticeContent'>1pm --- 4:30 pm, Thursday</p>";
        $html .= "<p class='noticeContent'>11am --- 6:00pm, Saturday</p>";
        $html .= "<p class='noticeContent'>Sorry for the inconvenience</p>";
        $html .= "<p class='noticeContent'> Curator’s cell phone in China: 13706899356</p>";
        
        $html_cn = "<div class='t1'> Notice </div>";
        $html_cn .= "<p class='noticeContent'>在2012年2月15日到2月29日間， 本館開放時間調整為：</p>";
        $html_cn .= "<p class='noticeContent'>週四： 下午1點到4點半。</p>";
        $html_cn .= "<p class='noticeContent'>周日：上午11點到下午6點。</p>";
        $html_cn .= "<p class='noticeContent'>不便之處，敬請原諒。</p>";
        $html_cn .= "<p class='noticeContent'>手机: 13706899356</p>";
        
        if($lang=='en') 
            return $html; 
        else
            return $html_cn;       
    }
    
    public static function getQingShu() {
        $html = "<br/>";
        $html .="<div style='width:100%'>";
        $html .= "<div style='margin-left:2%; width:96%'><a href='http://www.artshu.com/art2.0/images/qingshu/lampresize.png'><img style='width:100%'   src='http://www.artshu.com/art2.0/images/qingshu/lampthumb.png'></a></div>";

        $html .="</div>";
       // $html .="<div style='clear:both'></div>";
        return $html;
    }
    
    public static function getEventHTML($event_list, $event_index) {
       
 
        $html = ""; 
          date_default_timezone_set('America/Los_Angeles');
        if($event_index == 'current') {
            if(time()<strtotime("august 8 2012")) {
                $header = "Coming Exhibition";
            } else if (time() > strtotime ("august 19, 2012")){
                $header = "Past Exhibition";
                
            }  else {
                $header = "Current Exhibition";
            }
            //$header = "Current Exhibition";
           // return $html;
        } else {
         //   return $html_cn;
            $header = "Coming Exhibition";
        }
        
        $event = $event_list[$event_index];
        if($event) {
             $html .="<div class='event_box t2 event_header'>$header</div>";  
            if($event['link']) {
               
                $html .= "<div class='event_box t2'><a href='". $event['link']. "' target='_blank'><span class='event_title'>" . $event['title'] . '</span></a></div>';
            }  else {
                $html .= "<div class='event_box t2'>" . $event['title'] . "</div>";
            }
            

            
            if(isset($event['date']) && $event['date'] != null) {
                $html .= "<div class='event_date'>";
                $html .= $event['date'];
                
                $html .= "</div>";
                
               
                    
            }
            
                        if($event['multilink']) {
                $html .= "<div class='event_box t2' style='width:100%;'>";
                foreach($event['multilink'] as $index=>$value) {
                   if($value['poster'] == '0')  {
                       $html .= "<a href='" . $value['link'] . "' >" . $value['title'] . "</a>";
                   } else {
                    $html .= "<a href='" . $value['link'] ."' ><img src='". $value['poster'] ."' style='margin:1px;width:90%'></a>";
                       
                   }
                    
                    
                   
                }
                $html .="</div>";
                
            }
            if(isset($event['reports']) && $event['reports'] != null) {
                $html .= "<div class='event_box'>Reports</div>";
                foreach($event['reports'] as $index=>$value) {
                      $html .= "<div class='event_box'><a href='". $value['link']. "' target='_blank'>". $value['title']."</a></div>";
                }
            }
            
            if(isset($event['poster']) && $event['poster']) {
                $html .="<div  class='plain_image'><div class='frame_image'>";
                $html .= "<a href='" . $event['poster'] . "' target='_blank'><img style='width:100%'  src='" . $event['poster'] . "'></a>";
                $html .="</div></div>";
            }
        }
        return $html;
    }
    
    public static function  getLogoHTML() {
        
        $html = "";
        $html .="<div id='focus_wrapper' ><div style='width:100%'>";
        $html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/events/080808192012/web600x800/1.JPG'><img style='width:100%'  class='stamp_postcard_new' src='http://www.artshu.com/art2.0/events/080808192012/thumbnails/1.JPG'></div>";
        $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/080808192012/web600x800/2.JPG'><img  class='stamp_collect_new' style='width:100%'  src='http://www.artshu.com/art2.0/events/080808192012/thumbnails/2.JPG'></div>";
        $html .="</div></div>";
        $html .="<div style='clear:both'></div>";
        return $html;
        
        //$html .= '<div class="event_box"><a href="http://www.artshu.com/postcard.JPG" target="_blank"><span class="logo_text">We are the leading fine arts gallery in Silicon Valley</span></a></div>';
        return $html;
    }
    
}

?>

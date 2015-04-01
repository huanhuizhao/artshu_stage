<?php

    class UIUtil {

        /**
        * Generate menu up to two level, menu/sub menu
        * 
        * @param mixed $nav
        * @return mixed
        */                 
        
        public static function getDateHTML($data)
        {
            $html = "<div class='event_date'>";
            $html .= $data;
            $html .= "</div>";
        }
        
        public static function getPostersInOneRowHTML()
        {
            
        }
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
            $html .= '<p><span class="info1">Wednesday - Friday:</span></p><p><span class="info2">11:00 a.m. - 4:30 p.m.</span></p>';
            $html .= '<p><span class="info1">Saturday - Sunday:</span></p><p><span class="info2">11:00 a.m. - 6:00 p.m.</span></p>';

            $html .= '<p><span class="info1">Monday, Tuesday:</span></p> <p><span class="infoCap">BY APPOINTMENT ONLY</span></p>';
            //  $html .= '</p>';
            $html .= '<div class="t1">Curator</div>';
            $html .= '<p><span class="info1">Shu Jianhua</span><br/><span class="info1">shujh1969@gmail.com</span></p>';
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
         return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/032815040815/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
           return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/031415032515/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
           return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/022115030415/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';

           return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/011015012815/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
            if(true) {

            return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/122014123014/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
               return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/120614121414/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
               return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/100314120314/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
                return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/080214081014/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
                return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/071914072914/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
                return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/070514071614/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>';
                return '<iframe id="iframeShow" src="http://www.artshu.com/art2.0/events/061414070814/poster.php" width="100%" height="800px" frameborder=0 border=0 scrolling=no align=left marginwidth=0 marginheight=0></iframe>
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
            $html ="<div style='width:100%' class='event_box t2'></div><div>";
            $html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/events/012614021614/orig/horse_poster.jpg'><img style='width:100%'   src='http://www.artshu.com/art2.0/events/012614021614/web600x800/horse_poster.jpg'></a></div>";
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/012614021614/orig/5.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/012614021614/web600x800/5.jpg'></a></div>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            return $html;
            
            $html ="<div style='width:100%' class='event_box t2'></div><div>";
            $html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/events/102611202013/web600x800/12.jpg'><img style='width:100%'   src='http://www.artshu.com/art2.0/events/102611202013/thumbnails/12.jpg'></a></div>";
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/102611202013/orig/47.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/102611202013/web600x800/47.jpg'></a></div>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            return $html;

            $html = "";     
            $html .="<div style='margin-left:2%; width:96%'><br/><div style='width:100%'>";
            $html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/events/022403242013/web600x800/poster1.jpg'><img style='width:100%'   src='http://www.artshu.com/art2.0/events/022403242013/thumbnails/poster1.jpg'></a></div>";
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/022403242013/web600x800/poster2.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/022403242013/thumbnails/poster2.jpg'></a></div>";
            $html .="</div>";
            $html .="<div style='clear:both'></div>";
            return $html;  
            // return "";
            $html ="<div style='width:100%' class='event_box t2'></div><div>";
            $html .= "<a href='http://www.artshu.com/art2.0/events/101210202013/orig/poster.jpg'><img src='http://www.artshu.com/art2.0/events/101210202013/thumbnails/poster.jpg' width='330'/></a>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            return $html;
            //$html .= "<div style='margin-left:2%; width:96%'>";
            /*<a href='http://www.artshu.com/art2.0/events/011201222013/web600x800/preface.jpg'><img src='http://www.artshu.com/art2.0/events/011201222013/thumbnails/preface.jpg' width='330'/></a>
            <br/><br/>
            */
            /* $html .= "Future Exhibit: The Moment for Ink: Three Masters<br/><br/> Feb.24--Mar. 24</div>";

            <a href='http://www.artshu.com/art2.0/events/120112192012/orig/invi-1.jpg'><img src='http://www.artshu.com/art2.0/events/120112192012/thumbnails/invi-1.jpg' width='330'/></a></div>";

            $html .="</div>";
            $html .= "<div style='margin-left:2%; width:96%'>
            <a href='http://www.artshu.com/art2.0/events/022403242013/orig/poster.jpg'><img src='http://www.artshu.com/art2.0/events/022403242013/web600x800/poster.jpg' width='330'/></a></div>";

            $html .="</div>"; 



            $html .="<div ><div style='width:100%'>";
            $html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/events/022403242013/web600x800/poster1.jpg'><img style='width:100%'   src='http://www.artshu.com/art2.0/events/022403242013/thumbnails/poster1.jpg'></a></div>";
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/022403242013/web600x800/poster2.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/022403242013/thumbnails/poster2.jpg'></a></div>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            $html .="<div ><div style='width:100%'>";    */
            //   $html .= "<div style='width:100%'><a href='http://www.artshu.com/art2.0/events/083109262013/web600x800/invitation.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/083109262013/invitation.jpg' /></a></div>";
            /*        $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/022403242013/web600x800/poster4.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/022403242013/thumbnails/poster4.jpg'></a></div>";*/
            $html .="</div></div>";
            /*$html .="<div style='clear:both'></div>";*/
            return $html;
            // $html .="<div style='clear:both'></div>";
            return $html;
        }

        public static function getEventHTML($event_list, $event_index) {
            
            if ($event_index == 'future' || $event_index == 'add' || $event_index == 'add1' || $event_index == 'add2') 
            {
                $html = "";
                
                //dynanic add event here
                /*
                $html = "<div class='event_box t2 '><span class='event_title'>Spring Festival Party and  celebration couplets writing in brush by local noted artists</span><span class='event_date'>Feb. 1 (Sat.) 2pm - 5pm </span></div>";
                $html .= "<div class='event_box t2 '><span class='event_title'>Closing lecture and special exhibition of by Paul Hau Pei-Jen's grand hand scroll paintings which will be donated to Liao Ning Museum</span><span class='event_date'>Feb. 16 (Sun.) 2pm - 5pm </span></div>";
                */// it is list of events
                $eventarr = $event_list[$event_index];
                foreach($eventarr as $key => $event) {
                    $html .= UIUtil::getEachEventContent($event, " ");
                }
                return $html;
            } else
            {
                date_default_timezone_set('America/Los_Angeles');
                if($event_index == 'current') {
                    if( time()>strtotime("June. 11, 2013")) {
                        $header = "Coming Exhibition";
                    } else if (time() > strtotime ("June 11, 2013")){
                            $header = "Past Exhibition";
                        }  else {
                            $header = "Current Exhibition";
                    }
                } else {

                    $header = "Coming Lecture";
                    $header = "";
                }

            }

            $event = $event_list[$event_index];
            return UIUtil::getEachEventContent($event, $header);
        }

        public static function getEachEventContent($event, $header) {
            $html = "";
            if($event) {
                $html .="<div class='event_box t2 event_header'>$header</div>";  
                if($event['link']) {

                    $html .= "<div class='event_box t2'><a href='". $event['link']. "' target='_blank'><span class='event_title'>" . $event['title'] . '</span></a></div>';
                }  else {
                    $html .= "<div class='event_box t2'>" . $event['title'] . "</div>";
                }

                if(isset($event['date']) && $event['date'] != null) {
                    if ( $header != '')
                    {
                        $html .= "<div class='event_date'>";
                        $html .= $event['date'];
                        $html .= "</div>";
                    }
                }

                if($event['multilink']) {
                    $html .= "<div class='event_box t2' style='width:100%;'>";
                    
                  
                    foreach($event['multilink'] as $index=>$value) {
                    
                        if ($value['poster'] == 'head' )
                        {
                             $html .= "<div style='margin-bottom:5px'>Coming Exhibit</div>"; 
                              $html .= "<a href='". $value['link'] . "'>". $value['title']."</a>";
                            $html .= "<div class='event_date' style='margin-top:5px'>";
                            
                            $html .= $value['date'];
                            $html .= "</div>";
                        }    
                        if($value['poster'] == '0')  {
                            $html .= "<a href='" . $value['link'] . "' >" . $value['title'] . "</a><br/>";
                        } else if ($value['poster'] == '1'){
                            $html .= "<a href='" . $value['link'] ."' ><img src='". $value['poster'] ."' style='margin:1px;width:90%'></a>";

                        }  else if ($value['poster'] == '2') {
                            /*$html .= "<div style='margin-bottom:5px'>Coming Exhibit</div>";*/    
                            $html .= "<a href='". $value['link'] . "'>". $value['title']."</a>";
                            $html .= "<div class='event_date' style='margin-top:5px'>";
                            
                            $html .= $value['date'];
                            $html .= "</div>";
                        }   else if ($value['poster'] == '1_2')
                        {
                            
                            $html .= "<div>";
                            $html .= "<div style='float:left;margin-right:5px;'><a href='". $value['link1']. "'><img src='" . $value['img1'] . "'/></a></div>";
                            $html .= "<div style='float:left;'><a href='". $value['link2']. "'><img src='" . $value['img2']. "'/></a></div>";
                            $html .= "<div style='clear:both'></div>";      
                            $html .= "</div>";
                        }   else if ($value['poster'] == '1_3')
                        {
                            $html .= "<div>";
                            $html .= "<div style='float:left; margin-right:5px;'><a href='". $value['link1']. "'><img src='" . $value['img1'] . "'/></a></div>";
                            $html .= "<div style='float:left;margin-right:5px;'><a href='". $value['link2']. "'><img src='" . $value['img2']. "'/></a></div>";
                            $html .= "<div style='float:left;'><a href='". $value['link3']. "'><img src='" . $value['img3'] . "'/></a></div>";


                            $html .= "<div style='clear:both'></div>";      
                            $html .= "</div>";
                        }   else if ($value['poster'] == '1_4')
                        {
                            $html .= "<div>";
                            $html .= "<div style='float:left; margin-right:5px;'><a href='". $value['link1']. "'><img src='" . $value['img1'] . "'/></a></div>";
                            $html .= "<div style='float:left;margin-right:5px;'><a href='". $value['link2']. "'><img src='" . $value['img2']. "'/></a></div>";
                            $html .= "<div style='float:left;margin-right:5px;'><a href='". $value['link3']. "'><img src='" . $value['img3']. "'/></a></div>";
                            $html .= "<div style='float:left;'><a href='". $value['link4']. "'><img src='" . $value['img4'] . "'/></a></div>";


                            $html .= "<div style='clear:both'></div>";      
                            $html .= "</div>";

                        }     else if ($value['poster'] == '1_1')
                        {
                            $html .= "<div>";
                            $html .= "<a href='". $value['link']. "'><img src='" . $value['img'] . "'/></a>";
                            $html .= "</div>";
                        }
                        $html .="<br/>";

                    }
                    $html .="</div>";

                }
                if(isset($event['reports']) && $event['reports'] != null) {
                    /*                $html .= "<div class='event_box'>Reports</div>";*/

                    //add catalog
                    // $html .= "<div class='event_box'><a href='http://www.artshu.com/art2.0/events/083109262013/catalog.pdf'>Catalogue</a></div>";

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

        public static function getReportHTML() {

            $html = "<div class='event_box'></div>";
           // $html .= "<div class='event_box'><a href='http://www.artshu.com/art2.0/events/102611202013/briefnewworld.pdf'>A Brave New World of Ink Catalog</a></div>";
            $html .= "<div class='event_box'><a href='http://www.artshu.com/art2.0/events/102611202013/westlake2013.pdf'>2103 Westlake Art Fair Catalog</a></div>";
            return $html;
        }

        public static function  getFutureHTML() {
             return "";
            $html = "";
            $html .="<div id='future_wrapper' ><div style='width:100%'>";
            /*$html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/events/120112192012/orig/intro.pdf'><img style='width:100%'  class='stamp_collect' src='http://www.artshu.com/art2.0/events/120112192012/thumbnails/51x66cmC.jpg'></a></div>";
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/120112192012/orig/invitation-2.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/events/120112192012/thumbnails/invitation-2.jpg'></a></div>";*/

            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/012602062013/orig/invitation.pdf'>Coming Exhibit: Solo Exhibitions of Shen E-Cheng and Lo Fong</a></div>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            return $html;

            //$html .= '<div class="event_box"><a href="http://www.artshu.com/postcard.JPG" target="_blank"><span class="logo_text">We are the leading fine arts gallery in Silicon Valley</span></a></div>';
            return $html;
        }

        public static function  getLogoHTML() {

            $html = "";
            $html .="<div id='focus_wrapper' ><div style='width:100%'>";
            $html .= "<div style='float:left; width:48%'><a href='http://www.artshu.com/art2.0/images/postcard.jpg'><img style='width:100%'  class='stamp_postcard' src='http://www.artshu.com/art2.0/images/thumbnails/postcard.jpg'></a></div>";
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/images/collect.jpg'><img  class='stamp_collect' style='width:100%'  src='http://www.artshu.com/art2.0/images/thumbnails/collect.jpg'></a></div>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            return $html;

            //$html .= '<div class="event_box"><a href="http://www.artshu.com/postcard.JPG" target="_blank"><span class="logo_text">We are the leading fine arts gallery in Silicon Valley</span></a></div>';
            return $html;
        }

        
        public static function getDynamicEvent() {
            $html = "";
            $html .="<div id='future_wrapper' ><div style='width:100%'>";
            
            $html .= "<div style='float:right; width:48%'><a href='http://www.artshu.com/art2.0/events/012602062013/orig/invitation.pdf'>Coming Exhibit: Solo Exhibitions of Shen E-Cheng and Lo Fong</a></div>";
            $html .="</div></div>";
            $html .="<div style='clear:both'></div>";
            return $html;
        }
    }

?>

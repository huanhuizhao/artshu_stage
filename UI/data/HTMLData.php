<?php
    $html_description = "Silicon valley asian art center features information on upcoming art events, special exhibitions, the art collection and galleries online.";
    $html_keywords = "artshu, art gallery, exhibitions, niu kesi, stone carving, narx gallery, painting, shen yaochu, zhang daqian, C.C. wang, xiling yinshe, hangzhou, stoneseal, snuff bottle, lishouxun, calligraphy, shanghai antique store";
    $html_title = "Silicon Valley Asian Art Center";

    $DEV = 0;
    if ($DEV) {
        $WEB_HOST_PATH = "http://localhost/";
    }  else {
        $WEB_HOST_PATH = "http://www.artshu.com/";
    }

    
    
    $event_list = array( 
      "add1" => array(
            array(
            "title" => "<p>In momerial of Professor Hu Hung-Shu</p>",
            "date" => "",
            "link" => "http://mp.weixin.qq.com/s?__biz=MjM5NjE5MjMwOQ==&mid=202802550&idx=1&sn=5b565e766f15ed87e7e986dca52598a4&scene=1&from=groupmessage&isappinstalled=0#rd",
            "multilink" => array(
/*            array(
               "poster"=>"0",
               "title"=>"Hu Hung-Shu momerial",
               "link"=>"http://mp.weixin.qq.com/s?__biz=MjM5NjE5MjMwOQ==&mid=202802550&idx=1&sn=5b565e766f15ed87e7e986dca52598a4&scene=1&from=groupmessage&isappinstalled=0#rd",
               
            ),
*/            

            ),
            
         ),
      ),
          
                /*
      "add2" => array(
            array(
            "title" => "<p>Calligraphy of Exhibition of Mei-Ju Chang</p>",
            "date" => "Feb. 21 (Sat.) -- Mar. 4 (Wed.)",
            "link" => "",
            "multilink" => array(
               array(
               "poster"=>"0",
               "title" => "Invitation",
                "link" => $WEB_HOST_PATH . 'art2.0/events/022115030415/interview.PNG',
                ),
                array(
               "poster"=>"0",
               "title" => "Interview",
                "link" => 'http://www.dingding.tv/bencandy.php?fid=60&id=7673',
                ),  
            ),
         ),
      ),
                  */
          
      "add" => array(
            array(
            "title" => "<p>Grand Celebration of Chinese Lunar New Year of Goat</p>",
            "date" => "Jan. 30 (Sat.) -- Feb. 18 (Wed.)",
            "link" => "",
            "multilink" => array(
/*                 array(
                  "poster"=>"0",
                  "title" => "Front Cover",
                   "link" => $WEB_HOST_PATH . 'art2.0/events/011015012815/cover.pdf',
                    ),
                 array(
                  "poster"=>"0",
                  "title" => "Catalog",
                   "link" => $WEB_HOST_PATH . 'art2.0/events/011015012815/catalog.pdf',
                   ), */
                array(
                 "poster"=>"0",
                 "title" => "Interview",
                 "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7675"
            ),
            ),
            
         ),
      ),
      
      "future" => array(
        /*array(
            "title" => "<p>Fortune Fong Oil Painting Exhibition</p>",
            "date" => "Mar. 14 (Sat.) -- Mar. 25 (Wed.)",
            "link" => "",
            "multilink" => array(
               array(
               "poster"=>"0",
               "title" => "Invitation",
                "link" => $WEB_HOST_PATH . 'art2.0/events/031415032515/web600x800/3-14-invitation.jpg',
                ),
                array(
               "poster"=>"0",
               "title" => "Preface",
                "link" => $WEB_HOST_PATH . 'art2.0/events/031415032515/web600x800/3-14-poster.jpg',    
                ),  
               
            ),
         ),
         */
           array(
            "title" => "<p>Susan Chan Panting Exhibition</p>",
            "date" => "Mar. 28 (Sat.) -- April 8 (Wed.)",
            "link" => "",
            "multilink" => array(
               array(
               "poster"=>"0",
               "title" => "Invitation",
                "link" => $WEB_HOST_PATH . 'art2.0/events/032815040815/invitation.jpg',
                ),
                array(
               "poster"=>"0",
               "title" => "Preface",
                "link" => $WEB_HOST_PATH . 'art2.0/events/032815040815/preface.jpg',
                ),  
               array(
               "poster"=>"0",
               "title" => "Interview I",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7799",
               ), 
               array(
               "poster"=>"0",
               "title" => "Interview II",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7795",
               ),
               array(
               "poster"=>"0",
               "title" => "Interview III",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7797",
               ),               
            ),
         ),
         
      
            array(
            "title" => "<p>In momerial of Professor Hu Hung-Shu</p>",
            "date" => "",
            "link" => "http://mp.weixin.qq.com/s?__biz=MjM5NjE5MjMwOQ==&mid=202802550&idx=1&sn=5b565e766f15ed87e7e986dca52598a4&scene=1&from=groupmessage&isappinstalled=0#rd",
            "multilink" => array(
/*            array(
               "poster"=>"0",
               "title"=>"Hu Hung-Shu momerial",
               "link"=>"http://mp.weixin.qq.com/s?__biz=MjM5NjE5MjMwOQ==&mid=202802550&idx=1&sn=5b565e766f15ed87e7e986dca52598a4&scene=1&from=groupmessage&isappinstalled=0#rd",
               
            ),
*/            ),
            
         ),
      
            array(
            "title" => "<p>Exhibitions for 10<sup>th</sup> Anniversary Celebration</p>",
            "date" => "Oct. 3 (Fri.) -- Dec. 3 (Wed)",
            "link" => "",
            "multilink" => array(
                        array(
               "poster"=>"0",
               "title" => "Ten Years of Art Venture in Silicon Valley",
                "link" => $WEB_HOST_PATH . 'art2.0/events/100314120314/artventure.pdf',
            ),
            
            array(
               "poster"=>"0",
               "title" => "Invitation",
                "link" => $WEB_HOST_PATH . 'art2.0/events/100314120314/InvitationWang.pdf',
            ),
            array(
               "poster"=>"0",
               "title" => "Celebration",
                "link" => $WEB_HOST_PATH . 'art2.0/events/100314120314/tenAniversary.pdf',
            ),

            
            array(
               "poster"=>"0",
               "title" => "Celebration Interview I",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7454"
            ),
       
            array(
               "poster"=>"0",
               "title" => "Celebration Interview II",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7456",
            ),
            array(
               "poster"=>"0",
               "title"=>"Interview",
               "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7397"
            ),
                 array (
               "poster" => "1_1",
                "img" => $WEB_HOST_PATH . 'art2.0/events/100314120314/preface300x300.JPG',
                "link" => $WEB_HOST_PATH . 'art2.0/events/100314120314/preface.JPG', 
                     
               
            ),
/*
            array (
               "poster" => "1_3",
                "img1" => $WEB_HOST_PATH . 'art2.0/events/100314120314/thumbnails/posteraniv.jpg',
                "link1" => $WEB_HOST_PATH . 'art2.0/events/100314120314/web600x800/posteraniv.jpg', 
                
                "img3" => $WEB_HOST_PATH . 'art2.0/events/100314120314/thumbnails/photo%203.JPG',
                "link3" => $WEB_HOST_PATH . 'art2.0/events/100314120314/web600x800/photo%203.JPG',
                
                "img2" => $WEB_HOST_PATH . 'art2.0/events/100314120314/thumbnails/photo%204.JPG',
                "link2" => $WEB_HOST_PATH . 'art2.0/events/100314120314/web600x800/photo%204.JPG', 
               
            ),  */
            
            array  (
                "poster"=>"1_3",            // poster with 2 images
                "img1" => $WEB_HOST_PATH . 'art2.0/events/100314120314/thumbnails/photo%201.JPG',
                "link1" => $WEB_HOST_PATH . 'art2.0/events/100314120314/web600x800/photo%201.JPG', 
                
                "img2" => $WEB_HOST_PATH . 'art2.0/events/100314120314/thumbnails/photo%202.JPG',
                "link2" => $WEB_HOST_PATH . 'art2.0/events/100314120314/web600x800/photo%202.JPG', 
      

                "img3" => $WEB_HOST_PATH . 'art2.0/events/100314120314/thumbnails/photo%205.JPG',
                "link3" => $WEB_HOST_PATH . 'art2.0/events/100314120314/web600x800/photo%205.JPG', 
                ),
            ),
            
         ),
      ),
      "0801410081014"=>array(
       array(
        "title" => "CAASF Annual Exhibition",
            'date' =>  "Aug. 2 (Sat.) -- Aug. 10 (Sun.)",   
            'link' =>"",
            'multilink' => array(
                array  (
                "poster"=>"0",            // wording with link
                "title" => "回顧七月份兩個展覽",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7069"
                ),
  
                  array  (
                "poster"=>"0",            // wording with link
                "title" => "舊金山中華藝術學會聯展",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7071"
                ),
                                array  (
                "poster"=>"0",            // wording with link
                "title" => "美國中華藝術學會書畫聯展《大地斑斕》",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7073"
                ),
              
            ),

            'reports'=>array(
            
            ),
        ),
       array(
            "title" => "<div>Coming Exhibition</div><br/>ASACA Annual Exhibition: August 22-30",
            'link' =>"",
            'multilink' => array(
               
            ),
            'date' =>  'Aug. 22 (Fri.) -- Aug. 30( Sun.)',  
            'reports'=>array(

                                 array(
                        "title" => "《天发神骏》 喜迎新春 闭幕--硅谷亚洲艺术中心",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6532",
            ),
            array(
                        "title" => "候北人捐赠故乡辽宁博物馆巨幅作品展",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6534",
            ),
                    array(
                        "title" => "KTSF 26 News",
                        "link" => "http://www.ktsf.com/an-exhibition-for-the-year-of-horse/",
                    ),
                    array(
                        "title" => "Santa Clara Weekly",
                        "link" => "http://www.santaclaraweekly.com/2014/Issue-6/lunar_year_of_the_horse_exhibit_showcases_acclaimed_art_depicting_horses.html",
                    ),
                    array(
                    "title" => "Dingding TV Interview I",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6418"
                    ),
                    array(
                    "title" => "Dingding TV Interview II",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6420",
                    ),

            ),
        ),
      
       
       

    ),
  
    "070514071614"=>array(
        array(
        "title" => "Boundary Beyond: Recent Ink Paintings by Ruyi, July 5-16",
            'date' =>  'July 5 (Sat.) -- Jun. 16 (Wed.)',  
            'link' =>$WEB_HOST_PATH . 'art2.0/events/070514071614/catelog.pdf',
            'multilink' => array(
                 
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Catalog",
                "link" => $WEB_HOST_PATH . 'art2.0/events/070514071614/catalog.pdf',
                ),
                
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Ding Ding TV Interview",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6993"
                ),
                
                array  (
                "poster"=>"1_2",            // poster with 2 images
                "img1" => $WEB_HOST_PATH . 'art2.0/events/070514071614/thumbnails/poster.jpg',
                "link1" =>$WEB_HOST_PATH . 'art2.0/events/070514071614/web600x800/poster.jpg',
                "img2" => $WEB_HOST_PATH . 'art2.0/events/070514071614/thumbnails/preface.jpg', 
                "link2" => $WEB_HOST_PATH . 'art2.0/events/070514071614/web600x800/preface.jpg',
               
                ),
                
                array  (
                "poster"=>"head",            // poster with images
                "date" => "July 19 (Sat.) -- July. 29 (Tue.)",
                "title" => "Monk-painter Ming Jian's Solo Exhibition",
                "link" => ""
                ),

                array  (
                "poster"=>"1_2",            // poster with 2 images
                "img1" => $WEB_HOST_PATH . 'art2.0/events/071914072914/thumbnails/poster1.jpg', 
                "link1" => $WEB_HOST_PATH . 'art2.0/events/071914072914/orig/poster1.jpg',
                "img2" => $WEB_HOST_PATH . 'art2.0/events/071914072914/thumbnails/poster2.jpg', 
                "link2" => $WEB_HOST_PATH . 'art2.0/events/071914072914/web600x800/poster2.jpg',
                ),


                array  (
                "poster"=>"1_2",            // poster with 2 images
                "img1" => $WEB_HOST_PATH . 'art2.0/events/071914072914/thumbnails/poster3.jpg',
                "link1" => $WEB_HOST_PATH . 'art2.0/events/071914072914/web600x800/poster3.jpg', 
                "img2" => $WEB_HOST_PATH . 'art2.0/events/071914072914/thumbnails/preface.jpg', 
                "link2" => $WEB_HOST_PATH . 'art2.0/events/071914072914/web600x800/preface.jpg',

                ),
              
            ),

            'reports'=>array(
            array(
                        "title" => "《天发神骏》 喜迎新春 闭幕--硅谷亚洲艺术中心",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6532",
            ),
            array(
                        "title" => "候北人捐赠故乡辽宁博物馆巨幅作品展",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6534",
            ),
                    array(
                        "title" => "KTSF 26 News",
                        "link" => "http://www.ktsf.com/an-exhibition-for-the-year-of-horse/",
                    ),
                    array(
                        "title" => "Santa Clara Weekly",
                        "link" => "http://www.santaclaraweekly.com/2014/Issue-6/lunar_year_of_the_horse_exhibit_showcases_acclaimed_art_depicting_horses.html",
                    ),
                    array(
                    "title" => "Dingding TV Interview I",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6418"
                    ),
                    array(
                    "title" => "Dingding TV Interview II",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6420",
                    ),
            ),
        ),
        array(
            "title" => "Chinese Calligraphy and Painting Sale",
            'link' =>$WEB_HOST_PATH . 'art2.0/events/012614021614/orig/5.jpg',
            'multilink' => array(
               
            ),
            'date' =>  'Jan. 26 (Sun.) -- Feb. 16( Sun.)',  
            'reports'=>array(

                    array(
                    "title" => "Dingding TV Interview",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6233",
                    ),
            ),
        ),
      

    ),
    "052414061114"=>array(
        array(
            "title" => "Lui Tai's Calligraphy Exhibition",
            'date' =>  'May 24 (Sat.) -- Jun. 11 (Wed.)',  
            'link' =>$WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster.pdf',
            'multilink' => array(
               
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Opening Ceremony I",
                "link" => "https://www.youtube.com/watch?v=iBFpWjlYQZs"
                ),
                               
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Opening Ceremony II",
                "link" => "https://www.youtube.com/watch?v=DrmtTOkp3i0"
                ),
                               
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Opening Ceremony III",
                "link" => "https://www.youtube.com/watch?v=fKKWf4SK3Jo"
                ),
                               
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Opening Ceremony IV",
                "link" => "https://www.youtube.com/watch?v=uQMd1RpAJqk"
                ),
                       
               
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Catalog",
                "link" => $WEB_HOST_PATH . 'art2.0/events/052414061114/catalog.pdf',
                ),
                
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Ding Ding TV Interview",
                "link" => "http://m.youtube.com/watch?v=EHPTS7gxjSQ"
                ),
                
                array  (
                "poster"=>"1_3",            // poster with 2 images
                "img1" => $WEB_HOST_PATH . 'art2.0/events/052414061114/thumbnails/poster1.jpg',
                "link1" =>$WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster1.jpg',
                "img2" => $WEB_HOST_PATH . 'art2.0/events/052414061114/thumbnails/poster2.jpg', 
                "link2" => $WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster2.jpg',
                "img3" => $WEB_HOST_PATH . 'art2.0/events/052414061114/thumbnails/Invitation.jpg',
                "link3" => $WEB_HOST_PATH . 'art2.0/events/052414061114/web600x800/Invitation.jpg', 

                ),
                
                array  (
                "poster"=>"head",            // poster with images
                "date" => "June 14 (Sat.) -- July. 8 (Tue.)",
                "title" => "Modern Chinese Calligraphy Exhibition",
                "link" => ""
                ),
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Ding Ding TV Interview",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6863"
                ),
                
            ),

            'reports'=>array(
            array(
                        "title" => "《天发神骏》 喜迎新春 闭幕--硅谷亚洲艺术中心",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6532",
            ),
            array(
                        "title" => "候北人捐赠故乡辽宁博物馆巨幅作品展",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6534",
            ),
                    array(
                        "title" => "KTSF 26 News",
                        "link" => "http://www.ktsf.com/an-exhibition-for-the-year-of-horse/",
                    ),
                    array(
                        "title" => "Santa Clara Weekly",
                        "link" => "http://www.santaclaraweekly.com/2014/Issue-6/lunar_year_of_the_horse_exhibit_showcases_acclaimed_art_depicting_horses.html",
                    ),
                    array(
                    "title" => "Dingding TV Interview I",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6418"
                    ),
                    array(
                    "title" => "Dingding TV Interview II",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6420",
                    ),
            ),
        ),
        array(
            "title" => "Chinese Calligraphy and Painting Sale",
            'link' =>$WEB_HOST_PATH . 'art2.0/events/012614021614/orig/5.jpg',
            'multilink' => array(
               
            ),
            'date' =>  'Jan. 26 (Sun.) -- Feb. 16( Sun.)',  
            'reports'=>array(

                    array(
                    "title" => "Dingding TV Interview",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6233",
                    ),
            ),
        ),
      

    ),

    "050314052114"=>array(
        array(
            "title" => "Dancing Myriad : Painting by Glenn Yang",
            'date' =>  'May. 3 (Sat.) -- May 21( Wed.)',  
            'link' =>"",
            'multilink' => array(
               
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Ding Ding TV Interview",
                "link" => "http://m.youtube.com/watch?v=60nXB0wxHRg"
                ),
                       
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Catalog: Dancing Myriad: Painting of Glenn Yang",
                "link" => $WEB_HOST_PATH . 'art2.0/events/050314050314/catalog.pdf',
                ),
                 array  (
                "poster"=>"2",            // poster with images
                "date" => "May 24 (Sat.) -- Jun. 11 (Wed.)",
                "title" => "Lui Tai's Calligraphy Exhibition",
                "link" => $WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster.pdf',
                ),
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Catalog",
                "link" => $WEB_HOST_PATH . 'art2.0/events/052414061114/catalog.pdf',
                ),
                
                array  (
                "poster"=>"0",            // wording with link
                "title" => "Ding Ding TV Interview",
                "link" => "http://m.youtube.com/watch?v=EHPTS7gxjSQ"
                ),
                
                array  (
                "poster"=>"1_3",            // poster with 2 images
                "img1" => $WEB_HOST_PATH . 'art2.0/events/052414061114/thumbnails/poster1.jpg',
                "link1" =>$WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster1.jpg',
                "img2" => $WEB_HOST_PATH . 'art2.0/events/052414061114/thumbnails/poster2.jpg', 
                "link2" => $WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster2.jpg',
                "img3" => $WEB_HOST_PATH . 'art2.0/events/052414061114/thumbnails/Invitation.jpg',
                "link3" => $WEB_HOST_PATH . 'art2.0/events/052414061114/web600x800/Invitation.jpg', 

                ),
            ),

            'reports'=>array(
            array(
                        "title" => "《天发神骏》 喜迎新春 闭幕--硅谷亚洲艺术中心",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6532",
            ),
            array(
                        "title" => "候北人捐赠故乡辽宁博物馆巨幅作品展",
                        "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6534",
            ),
                    array(
                        "title" => "KTSF 26 News",
                        "link" => "http://www.ktsf.com/an-exhibition-for-the-year-of-horse/",
                    ),
                    array(
                        "title" => "Santa Clara Weekly",
                        "link" => "http://www.santaclaraweekly.com/2014/Issue-6/lunar_year_of_the_horse_exhibit_showcases_acclaimed_art_depicting_horses.html",
                    ),
                    array(
                    "title" => "Dingding TV Interview I",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6418"
                    ),
                    array(
                    "title" => "Dingding TV Interview II",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6420",
                    ),
            ),
        ),
        array(
            "title" => "Chinese Calligraphy and Painting Sale",
            'link' =>$WEB_HOST_PATH . 'art2.0/events/012614021614/orig/5.jpg',
            'multilink' => array(
               
            ),
            'date' =>  'Jan. 26 (Sun.) -- Feb. 16( Sun.)',  
            'reports'=>array(

                    array(
                    "title" => "Dingding TV Interview",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6233",
                    ),
            ),
        ),
      

    ),

    "012614021614"=>array(
        array(
            "title" => "Galloping: An Exhibition for the Year of Horse",
            'link' =>$WEB_HOST_PATH . 'art2.0/events/012614021614/orig/17.jpg',
            'multilink' => array(
               
            ),
            'date' =>  'Jan. 26 (Sun.) -- Feb. 16( Sun.)',  
            'reports'=>array(
                    array(
                        "title" => "KTSF 26 News",
                        "link" => "http://www.ktsf.com/an-exhibition-for-the-year-of-horse/",
                    ),
                    array(
                        "title" => "Santa Clara Weekly",
                        "link" => "http://www.santaclaraweekly.com/2014/Issue-6/lunar_year_of_the_horse_exhibit_showcases_acclaimed_art_depicting_horses.html",
                    ),
                                array(
                    "title" => "Dingding TV Interview I",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6418"
                    ),
                    array(
                    "title" => "Dingding TV Interview II",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6420",
                    ),
            ),
        ),
        array(
            "title" => "Chinese Calligraphy and Painting Sale",
            'link' =>$WEB_HOST_PATH . 'art2.0/events/012614021614/orig/5.jpg',
            'multilink' => array(
               
            ),
            'date' =>  'Jan. 26 (Sun.) -- Feb. 16( Sun.)',  
            'reports'=>array(

                    array(
                    "title" => "Dingding TV Interview",
                    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6233",
                    ),
            ),
        ),
      

    ),

    "121412222013"=>array(
    array(
    "title" => "ASACA Exhibition",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/121412222013/new-e-invite-us.jpg',
    'multilink' => array(
    array  (
    "poster"=>"0",
    "title" => "Ding Ding TV Interview",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&aid=6233"
    ),
    ),
    //Jan.25- Feb.16, 2014
    'date' =>  'Jan. 25 (Sat.) -- Feb. 16( Sun.)',  
    'reports'=>array(

    ),
    ),
    array(
    "title" => "The Rebirth of Classic: Porcelain Art of Wang wenbin",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/122413011214/invitation.pdf',
    'multilink' => array(
    array (
    "poster" => "0",
    "title" => "Catalog",
    "link" => $WEB_HOST_PATH . 'art2.0/events/122413011214/catalog.pdf',
    )
    ),
    'date' =>  'Dec. 24 (Tue.) -- Jan. 12( Sun.)',  
    'reports'=>array(


    ),
    ),
    ),

    "102611202013"=>array(
    array(
    "title" => " The Brave New World: Ink Painting by Hau Pei-Jen, Fong Chung-ray, Hu Hung-shu, Zheng Chong-bin & Zhong Yue-ying",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/101210202013/web600x800/preface.jpg',
    'multilink' => array(
    ),
    'date' =>  'Oct. 26 (Sat.) -- Nov. 20( Sun.)',  
    'reports'=>array(
    array  (
    "title" => "Interview",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6198"
    ),
    array(
    "title" => "Memorial on Michael Sullivan",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&aid=6191",
    ),

    ),
    ),
    ),

    "101210202013"=>array(
    array(
    "title" => "The Art of One Big Family: Paintings from Mainland China, Taiwan, Hongkong & S.F.Bay Area",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/101210202013/web600x800/preface.jpg',
    'multilink' => array(
    ),
    'date' =>  'Oct. 12 (Sat.) -- Oct. 20( Sun.)',  
    'reports'=>array(
    array  (
    "title" => "Interview",
    "link" => "http://video.sinovision.net/?id=14840"
    ),
    array(
    "title" => "Dingding TV I",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6082",
    ),
    array(
    "title" => "Dingding TV II",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6086",
    ),
    ),
    ),
    ),
    "092810062013"=>array(
    array(
    "title" => "Grand Exhibition of Canton Painting School: Four Generations",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/092810062013/Poster.pdf',
    'multilink' => array(
    ),
    'date' =>  'Sept. 28 (Sat.) -- Oct. 6( Sun.)',  
    'reports'=>array(
    array(
    "title" => "Singtao",
    "link" => "http://dailynews.sina.com/gb/news/usa/uslocal/singtao/20130925/10005008834.html",
    ),

    array(
    "title" => "Dingding TV I",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6082",
    ),
    array(
    "title" => "Dingding TV II",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6086",
    ),
    ),
    ),
    ),
    "092810062013"=>array(
    array(
    "title" => "Grand Exhibition of Canton Painting School: Four Generations",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/092810062013/Poster.pdf',
    'multilink' => array(
    ),
    'date' =>  'Sept. 28 (Sat.) -- Oct. 6( Sun.)',  
    'reports'=>array(
    array(
    "title" => "Singtao",
    "link" => "http://dailynews.sina.com/gb/news/usa/uslocal/singtao/20130925/10005008834.html",
    ),

    array(
    "title" => "Dingding TV I",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=6082",
    ),
    array(
    "title" => "Dingding TV II",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6086",
    ),
    ),
    ),
    ),


    "081008182013"=>array(
    /*
    array(
    "title" => "Painting Exhibition by Art Professors of Anqing Normal College, China",
    'link' => '',
    'multilink' => array(
    ),
    'date' =>  'Aug. 10 (Sat.) -- Aug. 18 ( Sun.)',  
    'reports'=>array(
    ),
    ),
    array(
    "title" => "Painting exhibition by Art Professors of Taiwan Art Academy",
    'link' =>'',
    'multilink' => array(
    ),
    'date' =>  'Aug. 17 (Sat.) -- Aug. 25 ( Sun.)',  
    'reports'=>array(
    ),
    ),*/
    array(
    "title" => "Fong Chung-ray, A Retrospective",
    'link' =>$WEB_HOST_PATH . 'art2.0/events/083109262013/web600x800/invitation.jpg',
    'multilink' => array(
    ),
    'date' =>  'Aug. 31 (Sat.) -- Sept. 26( Thur.)',  
    'reports'=>array(
    array(
    "title" => "World Journal",
    "link" => "http://sf.worldjournal.com/view/full_sf/23498854/article-%E9%A6%AE%E9%8D%BE%E7%9D%BF%E5%9B%9E%E9%A1%A7%E7%95%AB%E5%B1%95-%E5%8D%97%E7%81%A3%E7%99%BB%E5%A0%B4?instance=sf1",
    ),

    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&aid=6008",
    ),
    ),
    ),
    ),




    "062207032013"=>array(
    array(
    "title" => " Annual Exhibition of Members from San Francisco Chinese Art Association",
    'link' => '',
    'multilink' => array(
    ),
    'date' =>  'Jun. 22 (Sat.) -- Jul. 3 ( Wed.)',  
    'reports'=>array(
    ),
    ),
    array(
    "title" => "Calligraphy Exhibition of Liu Yuan Society from China",
    'link' => $WEB_HOST_PATH . 'art2.0/events/071307242013/orig/poster.pdf',
    'multilink' => array(
    ),
    'date' =>  'Jul. 14 (Sat.) -- Jul. 24 ( Wed.)',  
    'reports'=>array(
    ),
    ),
    array(
    "title" => " Ink Pacific: the innovation of Chinese ink painting in U.S.
    <br/>Zhejiang Art Museum, Hangzhou",
    'link' =>'',
    'multilink' => array(
    ),
    'date' =>  'Jul. 5 (Fri.) -- Jul. 28( Sun.)',  
    'reports'=>array(
    ),
    ),
    ),

    "050405222013"=>array(
    "title" => "Internalized Landscape: Painting of Ruyi",
    'link' => 'http://www.artshu.com/art2.0/events/050405222013/orig/poster.jpg',
    'multilink' => array(
    array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/050405222013/orig/catalog.pdf',
    "poster"=>"0",

    ),  
    ),
    'date' =>  'May 4 (Sat.) -- May 22( Wed.)',  
    'reports'=>array(
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=108&id=5429",
    ),
    array(
    "title" => "YouTube",
    "link" => "https://www.youtube.com/watch?feature=player_embedded&v=LgyOT09Vjn8",
    ),

    ),

    /*    "title" => "Special Exhibition to Celebrate Chinese Lunar New Year",
    'link' => 'http://www.artshu.com/art2.0/events/020902202013/orig/poster.jpg',
    'multilink' => array(
    ),
    'date' =>  'Feb. 9 (Sat.) -- Feb. 20 (Wed.)',  
    'reports'=>array(                                                                

    ),
    */                        
    ),
    "022403242013"=>array(
    "title" => "The Moment for Ink: Three Masters",
    'link' => 'http://www.artshu.com/art2.0/events/022403242013/orig/poster.jpg',
    'multilink' => array(

    ),
    'date' =>  'Feb. 24 (Sun.) -- March. 24( Sun.)',  
    'reports'=>array(
    array(
    "title" => "World Journal",
    "link" => "http://sf.worldjournal.com/view/full_sf/21788034/article-%E6%B0%B4%E5%A2%A8%E6%99%82%E5%88%BB%E8%81%AF%E5%B1%95-%E9%87%91%E5%B1%B1%E9%A1%9B%E8%A6%86%E5%82%B3%E7%B5%B1?instance=sfnews",
    ),
    array(
    "title" => "YouTube",
    "link" => "http://www.youtube.com/watch?v=dUqbYC4RiUQ&feature=youtu.be",
    ),
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencand y.php?fid=60&mid=108&id=5290",
    ),
    ),

    /*    "title" => "Special Exhibition to Celebrate Chinese Lunar New Year",
    'link' => 'http://www.artshu.com/art2.0/events/020902202013/orig/poster.jpg',
    'multilink' => array(
    ),
    'date' =>  'Feb. 9 (Sat.) -- Feb. 20 (Wed.)',  
    'reports'=>array(                                                                

    ),
    */                        
    ),
    "020902202013"=>array(
    "title" => "Special Exhibition to Celebrate Chinese Lunar New Year",
    'link' => 'http://www.artshu.com/art2.0/events/020902202013/orig/poster.jpg',
    'multilink' => array(
    ),
    'date' =>  'Feb. 9 (Sat.) -- Feb. 20 (Wed.)',  
    'reports'=>array(                                                                

    ),

    ),
    "012602062013"=>array(
    "title" => "Solo Exhibitions of Shen E-Cheng & Lo Fong",
    'link' => 'http://www.artshu.com/art2.0/events/012602062013/orig/poster1.jpg',
    'multilink' => array(
    ),
    'date' =>  'Jan. 26 (Sat.) -- Feb. 6 (Wed.)',  
    'reports'=>array(                                                                
    array(
    "title" => "Catalog",
    "link" => "http://www.artshu.com/art2.0/events/012602062013/orig/intro.pdf",
    ),
    array(
    "title" => "Remarks",
    "link" => "http://www.artshu.com/art2.0/events/012602062013/orig/poster2.jpg",
    ),
    array(
    "title" => "Preface",
    "link" => "http://www.artshu.com/art2.0/events/012602062013/orig/poster3.jpg",
    ),
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=5196",
    ),

    ),

    ),


    "011201222013"=>array(
    "title" => "A Dialogue to Nature: Painting Exhibition of Zhuang Zhongliang",
    'link' => 'http://www.artshu.com/art2.0/events/011201222013/web600x800/preface.jpg',
    'multilink' => array(
    ),
    'date' =>  'Jan. 11 (Fri.) -- Jan. 22 (Tue.)',  
    'reports'=>array(                                                                
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=5022",
    ),

    ),

    ),


    "122201092013"=>array(
    "title" => "A Rebirth of Classics",
    'link' => 'http://www.artshu.com/art2.0/events/122201092012/web600x800/invitation.jpg',
    'multilink' => array(
    /*
    array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/120112192012/orig/catalog.pdf',
    "poster"=>"0",

    ),

    array("title"=>'Introduction in English',
    "link"=>'http://www.artshu.com/art2.0/events/120112192012/web600x800/poster.jpg',
    "poster"=>"0",

    ),

    array("title"=>'Introduction in Chinese',
    "link"=>'http://www.artshu.com/art2.0/events/120112192012/web600x800/poster_cn.jpg',
    "poster"=>"0",

    ),  */


    ),
    'date' =>  'Dec. 22 (Sat.) -- Jan. 9 (Wed.)',  
    'reports'=>array(
    array(
    "title" => "World Joural",
    "link" => "http://sf.worldjournal.com/view/full_sfnews/21188868/article-%E6%98%93%E5%BD%AC%E6%96%87%E8%BE%A6%E7%95%AB%E5%B1%95-%E6%89%93%E9%80%A0%E8%97%9D%E8%A1%93%E6%96%B0%E9%A2%A8%E5%91%B3?instance=sfbull_left",
    ),
    array(
    "title" => "Singtao Daily",
    "link" => "http://dailynews.sina.com/gb/news/usa/uslocal/singtao/20121221/09094082586.html",
    ),
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=5020",
    ),

    ),

    ),

    "120112192012"=>array(
    "title" => "The Spirited Landscape: Hu Hung-shu's Painting Exhibition",
    'link' => 'http://www.artshu.com/art2.0/events/120112192012/orig/invitation-2.jpg',
    'multilink' => array(

    array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/120112192012/orig/catalog.pdf',
    "poster"=>"0",

    ),

    array("title"=>'Introduction in English',
    "link"=>'http://www.artshu.com/art2.0/events/120112192012/web600x800/poster.jpg',
    "poster"=>"0",

    ),

    array("title"=>'Introduction in Chinese',
    "link"=>'http://www.artshu.com/art2.0/events/120112192012/web600x800/poster_cn.jpg',
    "poster"=>"0",

    ),


    ),
    'date' =>  'Dec. 1 (Sat.) -- Dec. 19 (Wed.)',  
    'reports'=>array(
    array(
    "title" => "World Joural I",
    "link" => "http://sf.worldjournal.com/view/full_sf/20969042/article-%E8%83%A1%E5%AE%8F%E8%BF%B0%EF%BC%9A%E8%97%9D%E8%A1%93%E5%92%8C%E6%AD%A6%E5%99%A8%E4%B8%80%E6%A8%A3%E6%92%BC%E4%BA%BA%E5%BF%83?instance=sf3",
    ),
    array(
    "title" => "World Joural II",
    "link" => "http://www.worldjournal.com/view/full_news/21054800/article-3%E6%B0%B4%E5%A2%A8%E7%95%AB%E5%AE%B6-%E5%88%87%E7%A3%8B%E7%95%AB%E8%97%9D?instance=news_pics",
    ),
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=4893",
    ),
    array(
    "title" => "Youtube",
    "link" => "http://www.youtube.com/watch?feature=player_embedded&v=AFEHSEKFqQY",
    ),

    ),

    ),
    "110811112012"=>array(
    "title" => "2012 West Lake Art Fair",
    'link' => 'http://www.artshu.com/art2.0/events/110811122012/orig/invitation.jpg',
    'multilink' => array(
    array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/110811122012/orig/artfair.pdf',
    "poster"=>"0",

    ),
    array("title"=>'Map of the Exhibition 展区示意图  ',
    "link"=>'http://www.artshu.com/art2.0/events/110811122012/orig/map.jpg',
    "poster"=>"0",

    ),
    ),
    'date' =>  'Nov. 8 (Thur.) -- Nov. 11( Sun.)',  
    'reports'=>array(
    array(
    "title" => "Dingding TV 水墨新世界",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=4754",
    ),
    array(
    "title" => "Youtube 水墨新世界",
    "link" => "http://www.youtube.com/watch?v=AiM-4PhBS8A",
    ),

    ),

    ),

    "101410232012" => array(
    "title" => "Lecture on C.C.Wang's legacy",
    'link' => 'http://www.artshu.com/art2.0/events/101410232012/web600x800/1.jpg',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Oct. 6(Sat.) -- Oct. 7( Sun.)',  
    'reports'=>array(
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&aid=4590",
    ),
    array(
    "title" => "YouTube",
    "link" => "http://www.youtube.com/watch?feature=player_embedded&list=UUGAPRqTrys-yUua_a1Bthdg&v=s_vL8NAH7eI",
    ),
    ),

    ),
    "092009302012" => array(
    "title" => "ASACA  Annual Exhibition",
    'link' => 'http://www.artshu.com/art2.0/events/092009302012/orig/ASACA2012Poster.pdf',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Sept. 22 (Sat.) -- Sept. 30( Sun.)',  
    'reports'=>array(
    ),

    ),                    
    "091509192012" => array(
    "title" => "Image of Suzhou River: Yangtze Delta Art Association's exhibit<br/> 
    <span style='line-height:20px'>News Letter: <a href='http://www.artshu.com/art2.0/events/091509192012/orig/newsletter.doc'>English</a>
    &nbsp&nbsp
    <a href='http://www.artshu.com/art2.0/events/091509192012/orig/shuzhouriver.doc'>Chinese</a></span>",
    'link' => '',
    'multilink' => array(

    ),
    'date' =>  'Sep. 15 (Sat.) -- Sept. 19( Wed.)',  
    'reports'=>array(
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=4446",
    ),
    array(
    "title" => "YouTube",
    "link" => "http://www.youtube.com/watch?feature=player_embedded&v=GWZmIlQIIu0",
    ),

    ),

    ),


    "082509022012" => array(
    "title" => "The Image and Story of Chinese Labor in City<br/>
    <a href='http://www.wjsart.com/?p=6'>paintings by James Su</a>, and <a href='http://www.eatingbitterness.com/'>Lecture by Michelle D. Loyalka</a>",
    'link' => 'http://www.artshu.com/art2.0/events/082509022012/orig/citylabor_orig.jpg',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Aug. 25 (Sat.) -- Sept. 2( Sun.)',  
    'reports'=>array(
    /*array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=4000",
    ),
    */
    ),

    ),
    "060206102012" => array(
    "title" => "Yu, Chun-hui  Poetic Sentiment, Zen Spirit",
    'link' => 'http://www.artshu.com/art2.0/events/060206102012/orig/YuChunHui_Brochure.pdf',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Jun. 2 (Sat.) -- Jun. 10( Sun.)',  
    'reports'=>array(
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=4000",
    ),

    ),

    ),
    "051905282012" => array(
    "title" => "Beauty of City & Countryside,by members of  CAADF",
    'link' => '',
    'multilink' => array(
    array("title"=>'Opening & Reception',
    "link"=>'http://www.artshu.com/art2.0/events/051905282012/orig/show.pdf',
    "poster"=>"0",

    ),
    ),
    'date' =>  'May 19 (Sat.) -- May 28( Mon.)',  
    'reports'=>array(
    array(
    "title"=>'Beauty of City & Countryside',
    "link"=>'http://eyp.worldjournal.com/bookmark/18658056-%E7%BE%8E%E8%8F%AF%E8%97%9D%E8%A1%93%E5%AD%B8%E6%9C%83%E8%97%9D%E5%B1%95-%E7%9C%8B%E8%A6%8B%E5%9F%8E%E9%84%89%E4%B9%8B%E7%BE%8E
    ',
    ),


    ),

    ),    
    "050505152012" => array(
    "title" => "Exhibition of Fong Yu-chu & Fong Chung-ray",
    'link' => 'http://www.artshu.com/art2.0/events/050505152012/orig/poster.jpg',
    'multilink' => array(
    array("title"=>'Fong Zhongrui\'s Catalogue 展览图录' ,
    "link"=>'http://www.artshu.com/art2.0/events/050505152012/orig/FongZhongrui-2.pdf',
    "poster"=>"0",

    ),
    ),
    'date' =>  'May 5 (Sat.) -- May 15( Tue.)',  
    'reports'=>array(
    array(
    "title"=>'五月話題: 藝術與收藏 -- 硅谷亞洲藝術中心',
    "link"=>'http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=3846',
    ),
    array(
    "title"=>'五月話題: 藝術與收藏 -- 硅谷亞洲藝術中心YouTube',
    "link"=>'http://www.youtube.com/watch?feature=player_embedded&v=R3i9V_am1_Q',
    ),

    ),

    ),
    "033104182012" => array(
    "title" => "Memorial Exhibit of Fu Chuanfu",
    'link' => 'http://www.artshu.com/art2.0/events/033104182012/orig/poster.jpg',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Mar.31 (Sat.) -- Apr. 18( Wed.)',  
    'reports'=>array(
    array(
    "title"=>'藝術收藏面面觀--硅谷亞洲藝術中心 on Dingding TV',
    "link"=>'http://www.dingding.tv/bencandy.php?fid=33&id=1656',
    ),
    array(
    "title"=>'藝術收藏面面觀--硅谷亞洲藝術中心 on Youtube',
    "link"=>'http://www.youtube.com/watch?v=2NxR-1RHZio',
    ),

    ),

    ),

    "030303172012" => array(
    "title" => "To Iris: Wang Haiying's Oil Painting Exhibit",
    'link' => 'http://www.artshu.com/art2.0/events/030303172012/orig/intro_new.pdf',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Mar. 3 (Sat.) -- Mar. 17 (Sat.)',  
    'reports'=>array(
    array(
    "title"=>'World Journal',
    "link"=>'http://www.worldjournal.com/view/full_news/17736476/article-%E7%8E%8B%E6%B5%B7%E5%AC%B0%E7%95%AB%E4%BD%9C%E6%8D%90%E5%BC%B5%E7%B4%94%E5%A6%82%E5%9F%BA%E9%87%91%E6%9C%83?instance=news_pics',
    ),
    array(
    "title"=>'Singtao Daily',
    "link"=>'http://dailynews.sina.com/gb/news/usa/uslocal/singtao/20120304/09293199659.html',
    ),

    ),

    ),

    "012802122012" => array(
    "title" => "Zhang Shuqi in California",
    'link' => 'http://www.artshu.com/art2.0/events/012802122012/artshu_zhang.jpg',
    'multilink' => array(
    array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),
    ),
    'date' =>  'Jan. 28 (Sat.) -- Feb. 12 (Sun.)',  
    'reports'=>array(
    array(
    'title' => 'Grand Opening',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=38&aid=1591
    ',
    ),
    array(
    'title' => 'Dingding interview',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=46&id=1578',
    ),
    array(
    'title' => '硅谷亞洲藝術中心開春藝展--舒建華',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&aid=1546',
    ),
    array(
    'title' => '硅谷亞洲藝術中心開春藝展--舒建華(youtube)',
    'link' => 'http://www.youtube.com/watch?v=NM1IACPkm5o',
    ),                            
    array(
    'title'=>'中国艺术收藏热会降温吗？',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&id=1504',
    ),
    array(
    'title' => 'DingDingTV 中國藝術收藏藝術熱會降溫嗎？ 1',
    'link' => 'http://www.youtube.com/user/DianaAmazing#p/u/27/2CTpQMTENO4',
    ),
    array(
    'title'=>'DingDingTV 中國藝術收藏藝術熱會降溫嗎？ 2',
    'link' => 'http://www.youtube.com/user/DianaAmazing#p/u/25/Oe6yPnQEVEk',
    ), 
    ),

    ),
    "011101262012" => array(
    "title" => "Grand Painting & Caliigraphy exhibit to Celebrate coming Chinese new year of Dragon",
    'link' => '',
    'multilink' => '',
    'date' =>  'Jan. 11 (Wed.) -- Jan. 26 (Thur.)',  
    'reports'=>array(
    array(
    'title' => '硅谷亞洲藝術中心開春藝展--舒建華',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&aid=1546',
    ),
    array(
    'title' => '硅谷亞洲藝術中心開春藝展--舒建華(youtube)',
    'link' => 'http://www.youtube.com/watch?v=NM1IACPkm5o',
    ),                            
    array(
    'title'=>'中国艺术收藏热会降温吗？',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&id=1504',
    ),
    array(
    'title' => 'DingDingTV 中國藝術收藏藝術熱會降溫嗎？ 1',
    'link' => 'http://www.youtube.com/user/DianaAmazing#p/u/27/2CTpQMTENO4',
    ),
    array(
    'title'=>'DingDingTV 中國藝術收藏藝術熱會降溫嗎？ 2',
    'link' => 'http://www.youtube.com/user/DianaAmazing#p/u/25/Oe6yPnQEVEk',
    ), 
    ),

    ),
    "121012202011" => array(
    "title" => "Oil Painting Exhibition of Chi-chun Liao",
    'link' => '',
    'date' =>  'Dec. 10 (Sat.) -- Dec. 20 (Tue.)',  
    'reports'=>array(
    array(
    'title'=>'中国艺术收藏热会降温吗？',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&id=1504',
    ),
    array(
    'title' => 'DingDingTV 中國藝術收藏藝術熱會降溫嗎？ 1',
    'link' => 'http://www.youtube.com/user/DianaAmazing#p/u/27/2CTpQMTENO4',
    ),
    array(
    'title'=>'DingDingTV 中國藝術收藏藝術熱會降溫嗎？ 2',
    'link' => 'http://www.youtube.com/user/DianaAmazing#p/u/25/Oe6yPnQEVEk',
    ), 
    ),

    ),
    "111812092011" => array(
    "title" => "Painting & Calligraphy by noted artists of Modern Shanghai and Peking School
    ",
    'link' => $WEB_HOST_PATH . 'art2.0/events/111812092011/intro.doc',
    'date' =>  'Nov. 18 (Fri.) -- Dec. 5 (Mon.)',  
    'reports'=>array(

    ),

    ),
    "102911152011" => array(
    "title" => "Pei-Jen Hau’s Creation in his Ninety Five",
    'link' => $WEB_HOST_PATH . 'events/102911152011/h2.jpg',
    'date' =>  'Oct. 29 (Sat.) -- Nov. 15 (Tue.) <br/> Opening at 3pm Oct. 29.',  
    'reports'=>array(
    array(
    'title'=>'World Journal Report I',
    'link' => 'http://gb.worldjournal.com/view/full_news/16231712/article--ifbase4-base148-JUU0JUJFJUFGJUU1JThDJTk3JUU0JUJBJUJBJUU3JTk1JUFCJUU1JUIxJTk1JUU5JTk2JThCJUU1JUI5JTk1LSVFNSVBRSVCNiVFNCVCQSVCQSVFNSU4NSVBOCVFNSU4OCVCMCVFOSVCRCU4QS0~?instance=news_pics',
    ),
    array(
    'title' => 'World Journal Report II',
    'link' => 'http://www.worldjournal.com/view/full_news/16305570/article-%E7%A0%94%E7%A9%B6%E5%BC%B5%E5%A4%A7%E5%8D%83%E5%B0%88%E5%AE%B6-%E5%8F%83%E8%A7%80%E4%BE%AF%E5%8C%97%E4%BA%BA%E7%95%AB%E5%B1%95?instance=news_pics',
    ),
    array(
    'title'=>'Pei-Jen Hau,95,  talking about his art and life',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&id=1472',
    ),
    ),

    ),

    "coming" => array(
    "title" => "Michael Sullivan on Chinese Ink Painting made in US",
    'link' => 'http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=5377 ',
    'multilink' => array(
    /* array("title"=>'Sullivan and the Moment for Ink',
    "link"=>'http://www.artshu.com/art2.0/events/032203222013/page.html',
    "poster"=>"0",

    ),  */
    ),
    'date' =>  'Mar. 22 (Fri.)  3pm - 5pm',  
    'reports'=>array(
    ),

    ),

    "coming_past_fuchuanfu" => array(
    "title" => "Memorial Exhibit of Fu Chuanfu",
    'link' => 'http://www.artshu.com/art2.0/events/033104182012/orig/poster.jpg',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Mar.31 (Sat.) -- Apr. 18( Wed.)',  
    'reports'=>array(


    ),

    ),

    "coming_past_iris" => array(
    "title" => "To Iris: Wang Haiying's Oil Painting Exhibit",
    'link' => 'http://www.artshu.com/art2.0/events/030303172012/orig/intro_new.pdf',
    'multilink' => array(
    /* array("title"=>'Catalogue 展览图录',
    "link"=>'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    "poster"=>"0",

    ),*/
    ),
    'date' =>  'Mar. 3 (Sat.) -- Mar. 17 (Sat.)',  
    'reports'=>array(

    ),

    ),
    "coming_past2" => array(
    "title" => "Lecture on Zhang Shuqi's Art",
    'link' =>'',
    "multilink"=>array(
    array("link" => $WEB_HOST_PATH . "art2.0/events/012802122012/13.jpg",
    "poster" => $WEB_HOST_PATH . "art2.0/events/012802122012/thumbnails/13.jpg",
    ),
    array("link" => $WEB_HOST_PATH . "art2.0/events/012802122012/14.jpg",
    "poster" => $WEB_HOST_PATH . "art2.0/events/012802122012/thumbnails/14.jpg",
    ),
    ),

    ),
    "coming_past_1" => array(
    "title" => "A Solo Exhibition of Chi-Chun Liao",
    "link" => $WEB_HOST_PATH . "art2.0/events/111812092011/6.jpg",
    //  "date" => "Dec. 10 (Sat.) -- Dec. 20 (Tue.) <br/>Grand Opening 2-4pm Dec. 10",
    "poster" => $WEB_HOST_PATH . "art2.0/events/111812092011/6.jpg",
    ),
    "past" => array(
    ),
    );

    
    
    
    $nav_menu = array(
    array(
    "title" => "About Us",
    "link"  => $WEB_HOST_PATH . "slide800woauto/index.html",
    ),
    array(
    "title" => "Narx Gallery",
    "link" => $WEB_HOST_PATH . "niukesi/niukesiIndex.html",
    ),
    array(
    "title" => "Zhang Shuqi",
    "link" => array(
    array(
    'title' => 'Lecture I',
    'link' => 'http://www.youtube.com/watch?v=osYruy92TME&feature=related',
    ),
    array(
    'title'=>'Lecture II',
    'link' => 'http://www.youtube.com/watch?v=KF5YQWjeDB0',
    ),
    array(
    'title'=>'Catalog',
    'link' => 'http://www.artshu.com/art2.0/events/012802122012/catalog.pdf',
    ),

    ),
    // "link" => "http://www.artshu.com/events/0711072609/imageLink.php",
    ),                    
    array(
    "title" => "Paul Pei-Jen Hau",
    "link" => array(
        array(
        'title'=>'World Journal Report I',
        'link' => 'http://www.worldjournal.com/view/full_news/16231712/article--ifbase4-base148-JUU0JUJFJUFGJUU1JThDJTk3JUU0JUJBJUJBJUU3JTk1JUFCJUU1JUIxJTk1JUU5JTk2JThCJUU1JUI5JTk1LSVFNSVBRSVCNiVFNCVCQSVCQSVFNSU4NSVBOCVFNSU4OCVCMCVFOSVCRCU4QS0~?instance=news_pics',
        ),
        array(
        'title' => 'World Journal Report II',
        'link' => 'http://www.worldjournal.com/view/full_news/16305570/article-%E7%A0%94%E7%A9%B6%E5%BC%B5%E5%A4%A7%E5%8D%83%E5%B0%88%E5%AE%B6-%E5%8F%83%E8%A7%80%E4%BE%AF%E5%8C%97%E4%BA%BA%E7%95%AB%E5%B1%95?instance=news_pics',
        ),

        array(

        "title" => "Santa Clara Weekly",
        "link" => "http://www.santaclaraweekly.com/2013/Issue-49/chinese_splash_ink_painting_exhibit_opens_december_14_at_the_silicon_valley_asian_art_center.html",
        ),
        array(
        "title" => "Shanghai Daily",
        "link" => "http://www.shanghaidaily.com/hangzhou/Exhibition-features-works-of-96yearold-master/"
        ),
        array(
        "title" => "Catalog",
        "link" => "http://www.artshu.com/artshu_stage/UI/data/PaulPeiJenHau.pdf"
        ),
                /*
    array(
    'title'=>'Pei-Jen Hau,95,  talking about his art and life',
    'link' => 'http://www.dingding.tv/bencandy.php?fid=33&id=1472',
    ),          */

    ),
    // "link" => "http://www.artshu.com/events/0711072609/imageLink.php",
    ),
    
    array(
    "title" => "Shen Yao-Chu",
    "link" => $WEB_HOST_PATH . "shenyaochu.html",
    ),
    array(
    "title" => "Sun Chia-Chin",
    "link" => array(
    array(
    "title" => "《 精丽写神》图录",
    "link" => $WEB_HOST_PATH . "events/051505302010/s3.pdf",
    ),
    array(
    "title" => "孙家勤演讲《八德园岁月》",
    "link" =>"http://www.dingding.tv/bencandy.php?fid=33&id=189",
    ),
    array(
    "title" => "Dingding TV",
    "link" =>"http://www.dingding.tv/bencandy.php?fid=33&id=154",
    ),                                
    array(
    "title" => "In memory of Sun Chia-Chin I",
    "link" => "http://www.dingding.tv/bencandy.php?fid=38&id=716",
    ),
    array(
    "title" => "In memory of Sun Chia-Chin II",
    "link" => "http://www.dingding.tv/bencandy.php?fid=38&id=717",
    ),                                
    ),
    ),

    array(
    "title" => "Soul of China",
    "link" => array(   
    array("title" => "元老遗墨图录",
    "link" => $WEB_HOST_PATH . "events/093010232011/chinaSoul.pdf",),
    array("title" => "中国国际广播电台",
    "link" => "http://gb.cri.cn/1321/2011/10/28/5792s3417966.htm
    ",
    ),                    
    array("title" => "中新社报道",
    "link" => "http://roll.sohu.com/20111001/n321173136.shtml",
    ),
    array("title" => "世界日报",
    "link" => "http://www.worldjournal.com/view/full_news/15858146/article-%E8%BE%9B%E4%BA%A5%E7%99%BE%E5%B9%B4%E8%97%9D%E5%B1%95-%E5%85%88%E8%B3%A2%E5%A2%A8%E5%AF%B6%E5%90%B8%E7%9D%9B?instance=news_pics",
    ),
    array(
    "title" => "侨报",
    "link" => "http://epaper.uschinapress.com:81/qiaobao/html/2011-11/05/content_554779.htm"
    ),
    array(
    "title" => "开幕现场录像 I",
    "link" => "http://www.youtube.com/watch?v=RDsBRvUUcPg",
    ),
    array(
    "title" => "开幕现场录像 II",
    "link" => "http://www.dingding.tv/bencandy.php?fid=33&id=1420",
    ),   
    array(
    "title" => "敢死队队长后人演讲",
    "link" => "http://www.youtube.com/watch?v=JbxeRzHmH9U&feature=related",
    ),
    array(
    "title" => "邱振中教授闭幕演讲",
    "link" => "http://www.dingding.tv/bencandy.php?fid=33&id=1466",
    ), 
    array(
    "title" => "Curator's word",
    "link" => $WEB_HOST_PATH . "events/093010232011/motivation.jpg",
    ),                                    

    array(
    "title" => "Notice",
    "link" => $WEB_HOST_PATH . "events/093010232011/collect.jpg",
    ),                                    
    ),
    ),     
    array(
    "title" => "Hu Hung-shu",
    "link" => array(
    array(
    "title" => "Catalogue",      
    "link" => " http://www.artshu.com/art2.0/events/120112192012/orig/catalog.pdf",
    ),
    array(
    "title" => "World Joural I",
    "link" => "http://sf.worldjournal.com/view/full_sf/20969042/article-%E8%83%A1%E5%AE%8F%E8%BF%B0%EF%BC%9A%E8%97%9D%E8%A1%93%E5%92%8C%E6%AD%A6%E5%99%A8%E4%B8%80%E6%A8%A3%E6%92%BC%E4%BA%BA%E5%BF%83?instance=sf3",
    ),
    array(
    "title" => "World Joural II",
    "link" =>"http://www.worldjournal.com/view/full_news/21054800/article-3%E6%B0%B4%E5%A2%A8%E7%95%AB%E5%AE%B6-%E5%88%87%E7%A3%8B%E7%95%AB%E8%97%9D?instance=news_pics",
    ),
    array(
    "title" => "Dingding TV",
    "link" =>"http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=4893",
    ),                                
    array(
    "title" => "Youtube",
    "link" => "http://www.youtube.com/watch?feature=player_embedded&v=AFEHSEKFqQY",
    ),
    array(
    "title" => "Dingding TV",
    "link" => "http://www.dingding.tv/bencandy.php?fid=60&mid=102&id=5018"
    ),
    ),
    ),

    array(
    "title" => "Zheng Chongbin",
    "link" => array(
    array(
    "title" => "《白墨》图录",
    "link" => $WEB_HOST_PATH . "events/061807172011/tulu.pdf",
    ),
    array(
    "title" => "Art in America Review",
    "link" => "http://www.artinamericamagazine.com/reviews/zheng-chongbin/",
    ),
    array(
    "title" => " 世界日报",
    "link" =>"http://www.worldjournal.com/view/full_news/14356300/article-%E9%84%AD%E9%87%8D%E8%B3%93%E6%B0%B4%E5%A2%A8%E7%95%AB%E5%B1%95-%E5%90%B8%E7%9D%9B?instance=news_pics",
    ),
    array(
    "title" => "CNNGO",
    "link" =>"http://www.cnngo.com/hong-kong/play/rebirth-chinese-ink-painting-043589",
    ),                                
    array(
    "title" => " 时代杂志亚洲版",
    "link" => "http://www.time.com/time/magazine/article/0,9171,2094434,00.html?artId=2094434?contType=article?chn=arts",
    ),
    ),
    ),

    array(
    "title" => "Shen E-Cheng & Lo Fong",
    "link" => "http://www.artshu.com/art2.0/events/012602062013/orig/intro.pdf",
    ),

    array(
    "title" => "Ink Painting Made in US",
    "link" => "http://www.artshu.com/art2.0/events/110811122012/orig/artfair.pdf",
    ),  

    array(
    "title"=>"Chinese Painting Innovated in US",
    "link"=>"http://www.artshu.com/art2.0/events/070507282013/cpaintingus.pdf"
    ),
    array(
    "title" => "Fong Chung-ray, A Retrospective",
    "link" => "http://www.artshu.com/art2.0/events/083109262013/catalog.pdf",
    ),  
    
    array(
    "title" => "Wang Chang-Chieh",
    "link" => array(
                array(
                'title' => 'Catalog Cover',
                'link' => 'http://www.artshu.com/art2.0/events/100314120314/wangchangchiehcover.pdf',
                ),
                array(
                'title'=>'Catalog Content',
                'link' => 'http://www.artshu.com/art2.0/events/100314120314/wangchangchiehcontent.pdf',
                ),

                ),
    ),     
    array(
        "title" => "Wang Wenbin",
        "link" => array(
                array (
                "title" => "Catalog",
                "link" => $WEB_HOST_PATH . 'art2.0/events/122413011214/catalog.pdf',
                ),
                array  (
                "title" => "Ding Ding TV Interview",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6345"
                )
        ),
    ),
    array(
        "title" => "Lu Tai",
        "link" => array(
            array(
                "title" => "Catalog",
                "link" => $WEB_HOST_PATH . 'art2.0/events/052414061114/orig/poster.pdf',
            ),
        ),
    ),
       array(
        "title" => "Ruyi",
        "link" => array(
                array (
                "title" => "Catalog",
                "link" => $WEB_HOST_PATH . 'art2.0/events/070514071614/catalog.pdf',
                ),
                array  (
                "title" => "Ding Ding TV Interview",
                "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=6993"
                )
        ),
    ),
    array(
        "title" => "Ming Jian",
        "link" => array(
                array (
                "title" => "Ding Ding TV Interview 《硅谷看世界》畫家到畫僧--釋明鑒來硅谷",
                "link" => "http://www.dingding.tv/bencandy.php?fid=48&id=7038",
                ),
                
        ),
    ),
    
    array(
    "title" => "QiaoFu",
    "link"=> array(
     array(
      "title" => "Catalog",
    "link" => $WEB_HOST_PATH . 'art2.0/events/120614121414/invitation.pdf',  
     ),
     
    ),
    
    ),
               
    
    array(
      "title" => "Charles Liu",
      "link"=> array(
         array(
             "title" => "Catalog",
             "link" => $WEB_HOST_PATH . 'art2.0/events/011015012815/catalog.pdf',
         ),
         array(
          "title" => "Front Cover",
          "link" => $WEB_HOST_PATH . 'art2.0/events/011015012815/cover.pdf',
         ),
         array(
          "title" => "Interview",
          "link" => "http://www.dingding.tv/bencandy.php?fid=60&id=7587"
         ),
      ),
    ),
    array(
    "title" => "Imperial Furniture",
    "link" => $WEB_HOST_PATH . "events/0711072609/furnitureLink.php",
    ),
    );

    $posterUrl = $WEB_HOST_PATH . "art2.0/events/111812092011/6.jpg";
    $posterUrl = $WEB_HOST_PATH . "previewshow/poster050505152012.php";  
    $posterUrl = $WEB_HOST_PATH . "previewshow/poster060206102012.php";
    $posterUrl = $WEB_HOST_PATH . "previewshow/poster091509192012.php";
    $posterUrl = $WEB_HOST_PATH . "previewshow/poster092209302012.php";
    $posterUrl = $WEB_HOST_PATH . "previewshow/poster011101222013.php";   

?>

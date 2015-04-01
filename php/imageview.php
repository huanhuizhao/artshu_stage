<?php
  class ImageView {
      public static function GetDirList($directory) {
             // create an array to hold directory list
            $results = array();

            // create a handler for the directory
            $handler = opendir($directory);

            // open directory and walk through the filenames
            while ($file = readdir($handler)) {

              // if file isn't this directory or its parent, add it to the results
              if ($file != "." && $file != "..") {
                $results[] = $file;
              }

            }

            // tidy up: close the handler
            closedir($handler);

            // done!
            return $results;
      }
      
      public static function ResizeImage($path, $imageList)
      {
          
          $thumb = new Imagick();
    //      $thumb->readImage("16.jpg");
          return;
          
         // $path = "http://localhost/art2.0/events/062207032013/orig/";
          foreach ($imageList as $i => $image) {
              echo $i . " " . $image . "<br/>";
              $inFile = $path . $image;
              $handle = fopen($inFile, 'rb');
              $outFile = $path . "thumb". $image;
              echo $inFile . "<br/>";
              echo $outFile . "<br/>";
             $image = new Imagick();
             $image->readImageFile($handle);
              //$image->thumbnailImage(150, 150);
             // $image->writeImage($outFile);
          }
      }
      
      
  }
    
  $path = "c:/wamp/www/" . "art2.0/events/062207032013/orig/";
  $result = ImageView::GetDirList($_SERVER['DOCUMENT_ROOT'] . "art2.0/events/062207032013/orig");
  
  foreach($result as $i =>$value)
  {
      echo '"' . $value .  '"' . "," . " ";
  }
  
//  ImageView::ResizeImage($path, array("23.jpg")) ;
?>

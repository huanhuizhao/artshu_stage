<?php

class ImageUtil {
    
    static function  thumbNail($imagePath='./', $imageList='test.jpg') {
    $imageList = array("poster1.jpg", "poster2.jpg", "preface.jpg");
    $imagePath = "../../art2.0/events/030303172012/";
    $thumbnailsPath = $imagePath . 'web600x800/';
    
    
    $bodyWidth = 1000;
    $rowWidth = 600;
    $colsCount = 4;
    $cellWidth = 600;
    $cellHeight = 800;
    
    
    $imageHandler = new Imagick();

    
    foreach($imageList as $image) {
        $imageHandler->readimage($imagePath.$image);
        
        $width = $imageHandler->getimagewidth();
        $height = $imageHandler->getimageheight();
        if($width > $height) {
            $ratio = $cellWidth/$width;
        } else {
            $ratio = $cellHeight/$height;
        }
        $ratio = $cellHeight/$height;
            $imageHandler->resizeimage($width*$ratio, $height*$ratio, Imagick::FILTER_LANCZOS, 1);
         //   $imageHandler->cropThumbnailImage($width*$ratio, $height*$ratio);
            $imageHandler->writeimage($thumbnailsPath.$image);    
    }
        
    }

    
    
}
	
    echo "ImageUtil: generate thumbnail images, i.e. params ";
    echo "<br/>";
    echo "path=events/mmddmmddyyyy/images&fileList=h1,h4,h5,h6&size=300x400";
    if(isset($_GET['fileList']) && $_GET['fileList']) {
        $fileList = array();
        
    }
    ImageUtil::thumbNail();
?>
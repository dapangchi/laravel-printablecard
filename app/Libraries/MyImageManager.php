<?php 
namespace App\Libraries;
use Anakadote\ImageManager\ImageManager;

// Uncomment bellow line, if you like to use "Simple Pagination"
// use Landish\Pagination\Simple\SemanticUI;

class MyImageManager extends ImageManager {
    protected function getFolder($from_root = false) 
    {                      
        $foldername = $this->width . "-" . $this->height . "/" . $this->mode; // Then make mode folder
        if(! file_exists('cache/' . $this->file_path . "/" . $foldername)){ 
                                                                                          
            if(! mkpath('cache/' . $this->file_path . "/" . $foldername, 0777)){
                throw new \Exception('Error creating directory');
            }
        }
        
        if($from_root){
            return "cache/" . $this->file_path . '/' . $this->width . "-" . $this->height . "/" . $this->mode;
        
        } else {
            return "cache/" . $this->url_path . '/' . $this->width . "-" . $this->height . "/" . $this->mode;
        }
    }
    
    static function imageCache($file, $width, $height, $mode, $quality = 90) 
    {
        $instance = new MyImageManager;
        return $instance->getImagePath($file, $width, $height, $mode, $quality);    
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Models\CardImage;
use App\Models\CardTemplateImage;

class ImageController extends FrontController {

    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function card($imgId)
    {
        $image = CardImage::find($imgId);
        
        $product_title = $image->card->name;
        $product_description = $image->card->description;
        $image_url = asset($image->image);
        $product_url = $image->card->getUrl();
        return $this->view('image.view', compact('product_title', 'product_description', 'image_url', 'product_url'));     
    }

    public function template($imgId)
    {
        $image = CardTemplateImage::find($imgId);
        
        $product_title = $image->template->name;
        $product_description = $image->template->description;
        $image_url = asset($image->image);
        return $this->view('image.view', compact('product_title', 'product_description', 'image_url'));     
    }
    
    public function showcase($imgId)
    {
    }
}
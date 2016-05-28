<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Libraries\MyCart;
use App\Models\Region;
use App\Models\TempFile;
use Input;

class UploadController extends Controller 
{
    public function slide()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/slides/');
        
        echo json_encode($result);
        exit;
    }
    
    public function category()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/category/');
        
        echo json_encode($result);
        exit;
    }
    
    public function card()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/card/');
        
        echo json_encode($result);
        exit;
    }
    
    public function template()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/template/');
        
        echo json_encode($result);
        exit;
    }
    
    public function showcase()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/showcase/');
        
        echo json_encode($result);
        exit;
    }
    
    public function design()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/design/');
        
        echo json_encode($result);
        exit;
    }
    
    public function homeslider()
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/tmp/homeslider/');
        
        echo json_encode($result);
        exit;
    }
    
    public function icon() 
    {
        $result = $this->_upload_file(UPLOADS_BASE . '/icon/');
        
        echo json_encode($result);
        exit;
    } 
    
    public function design_file()
    {
        $result = array();
        if($key = MyCart::getUploadingKey())
        {
            //check if upload limited;
            //limit: 75M
            $totalSize = TempFile::where('key', $key)->sum('size');
            if($totalSize >= 75)             
            {
                $result = ['msg' => 'Readed to upload limit'];
            }
            else
            {        
                $result = $this->_upload_file(UPLOADS_BASE . '/tmp/files/', 'file', array('eps', 'ai', 'pdf', 'jpg', 'jpeg', 'bmp', 'png', 'svg', 'xls', 'psd', 'sdv'));
                
                if($result['msg'] == '')
                {
                    $row = new TempFile;
                    $row->key = $key;
                    $row->name = $result['name'];
                    $row->path = $result['src'];
                    $row->size = $result['size'] / 1024 / 1024;
                    $row->target = Input::get('_target');
                    $row->save();
                }
            }
        }
        
        echo json_encode($result);
        exit;
    }
    
    private function _upload_file($uriPath, $field='Filedata', $fileTypes = array('jpg','jpeg','gif','png'))
    {
        $tempFile = $_FILES[$field]['tmp_name'];
        $fileSize = $_FILES[$field]['size'];
        //$uriPath = 'upload/tmp/slides/';
        
        $fileName = strtolower($_FILES[$field]['name']);
        //$uriPath .= substr($fileName, 0, 1) . '/' . substr($fileName, 1, 1) . '/';
        $uriPath .= strtolower(str_random(1) . '/' . str_random(1) . '/');
        $targetPath = rtrim(public_path($uriPath), '/');
        
        $targetFile = $targetPath . '/' . $fileName;
        if(!mkpath($targetPath)) 
        {
            $result = array('msg' => 'Invalid file path', 'path' => '');
            echo json_encode($result);
            exit;
        }
        
        // Validate the file type
        $fileParts = pathinfo($fileName);
         
        $result = array('status' => true, 'msg' => '', 'path' => '', 'src' => '', 'size' => $fileSize, 'name' => $fileName);  
        if (in_array($fileParts['extension'], $fileTypes)) 
        {
            move_uploaded_file($tempFile, $targetFile);
            $result['path'] = url($uriPath . $fileName);
            $result['src'] = $uriPath . $fileName;
        } 
        else 
        {
            $result['status'] = true;
            $result['msg'] = 'Invalid file type.';
        }
        
        return $result;
    } 
}
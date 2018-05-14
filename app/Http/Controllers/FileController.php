<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function showUploadForm()
    {
    	return view('upload.file');
    }

    public function storeFile(Request $request)
    {
    	if($request->hasFile('anh')) {
    		//lay ten cua anh
    		$fileName = $request->anh->getClientOriginalName();
    		$fileSize = $request->anh->getClientSize();
    		//luu anh vao thu muc public/upload
    		// return $request->anh->store('public/upload');

    		$request->anh->storeAs('public/upload', $fileName);
    		$file = new File;
    		$file->name = $fileName;
    		$file->size = $fileSize;
    		$file->save();
    		return 'yes';
    	} else {
    		return 'no file selected';
    	}
    }

    public function showMultiForm()
    {
    	return view('upload.multiUpload');
    }

    public function storeMultiFile(Request $request)
    {
    	if($request->hasFile('anh')) {
    		foreach($request->anh as $anh)
    		{
    			$fileName = $anh->getClientOriginalName();
    			$fileSize = $anh->getClientSize();
    			$anh->storeAs('public/upload', $fileName);
	    		$file = new File;
	    		$file->name = $fileName;
	    		$file->size = $fileSize;
	    		$file->save();
    		}
    		// $request->anh->storeAs('public/upload', $fileName);
    		// $file = new File;
    		// $file->name = $fileName;
    		// $file->size = $fileSize;
    		// $file->save();
    		return 'yes';
    	} else {
    		return 'no file selected';
    	}
    }
}

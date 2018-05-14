<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    public function index()
    {
    	return view('upload.upload');
    }

    public function store(Request $request)
    {
    	if($request->hasFile('anh')) {
    		// return $request->file('anh');
    		//store public nay la se luu vao folder public trong muc storage
    		// return $request->anh->store('public');
    		//lay duong dan anh.
    		// return $request->anh->path();
    		//lay phan duoi cua anh 
    		// return $request->anh->extension();
    		//luu anh vao storage/public
    		// return Storage::putFile('public/new', $request->file('anh'));
    		//luu anh voi ten duoc config.
    		return $request->anh->storeAs('public', 'tienduong.png');
    		
    	} else {
    		return 'has no file';
    	}
    	
    }

    public function show()
    {
    	//cau lenh nay se tra ve cho ta 1 mang cac files chua trong thu muc storage/public
    	// return Storage::files('public');
    	// khi su dung ham allFiles thi no se tra ve tat cac cac file o public va nhung file nam trong thu muc khac cua public/ vd: public/new/filename
    	// return Storage::allFiles('public');
    	//lanh nay dung de tao mot foler trong storage.
    	// return Storage::makeDirectory('public/make');
    	//delete 1 foler der
    	// return Storage::deleteDirectory('public/tienduong.png');
    	//lay duong url cua anh. ket qua : /storage/tienduong.png. vi khong co duong dan nao nhu the nay.
    	//chi lay duong dan cua nhung file nao nam trogn thu muc storage/public
    	// $url =  Storage::url('tienduong.png');
    	// return "<img src='".$url."'/>";
    	//chung ta phai connect giau public trong astoage va folder public
    	//lay kich thuoc cua anh
    	// return Storage::size('public/tienduong.png');
    	//lan cuoi thay doi
    	// return Storage::lastModified('public/tienduong.png');
    	// copy file sang mot thi muc khac
    	// return Storage::copy('public/tienduong.png', 'tienduong.png');
    	// return Storage::move('tienduong.png', 'public');

    	//lay raw data cua file anh
    	// $rawContent = Storage::get('tienduong.png');
    	//tao 1 file tu raw data
    	// if(Storage::put('public/newImage.png', $rawContent)) {
    	// 	return 'File 2 is created';
    	// }
    	//delete file
    	if(Storage::delete('public/newImage.png')) {
    		return 'File 2 is deleted';
    	}
    }
}

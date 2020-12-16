<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
class AdminController extends Controller
{
    public function Upload(Request $request){
//
        $file_type=$request->file_type;
        $imageName = time().'.'.$request->file->extension();
        $request->file->move(public_path('media'), $imageName);
        $data=array(
            'img_url'=>$imageName,
            'type'=>$file_type
        );
        $result = DB::table('upload')->insert($data);
        if($result!=""){
            return redirect('/home/files')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function Delete(Request $request){
        $id = $request->delete;
        $type = $request->del_type;
        if($type=="files"){
        $result = DB::table('upload')->where('id', $id)->delete();
        if($result!=""){
                return redirect('/home/files');
            }
        }
    }
    public function sendSlider(Request $request){
        $gallery="";
        $check=1;
            foreach ($request->gal['id'] as $val){
                if($check!=count($request->gal['id'])){
                    $gallery .= $val . ",";
                }else{
                    $gallery .= $val;
                }
                $check++;
            }
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz'],
            'short_uz'=>$request->short['uz'],
            'short_en'=>$request->short['en'],
            'short_ru'=>$request->short['ru'],
            'full_ru'=>$request->full['ru'],
            'full_en'=>$request->full['en'],
            'full_uz'=>$request->full['uz'],
            'gallery'=>$gallery,
        );
        $infoId = DB::table('info')->insertGetId($data);
        $blogs=array(
            'type'=>'slider',
            'disabled'=>'none',
            'info_id'=>$infoId,
        );
        $result = DB::table('blogs')->insertGetId($blogs);
        if($result!=""){
            return redirect('/home/slider')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function sendProduct(Request $request){
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz'],
            'short_uz'=>$request->short['uz'],
            'short_en'=>$request->short['en'],
            'short_ru'=>$request->short['ru'],
            'full_ru'=>$request->full['ru'],
            'full_en'=>$request->full['en'],
            'full_uz'=>$request->full['uz'],
            'gallery'=>$gallery,
        );
        $infoId = DB::table('info')->insertGetId($data);
        $blogs=array(
            'type'=>'product',
            'disabled'=>'none',
            'info_id'=>$infoId,
        );
        $result = DB::table('blogs')->insertGetId($blogs);
        if($result!=""){
            return redirect('/home/product')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function sendCollegs(Request $request){
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz'],
            'short_uz'=>$request->short['uz'],
            'short_en'=>$request->short['en'],
            'short_ru'=>$request->short['ru'],
            'full_ru'=>$request->full['ru'],
            'full_en'=>$request->full['en'],
            'full_uz'=>$request->full['uz'],
            'gallery'=>$gallery,
        );
        $infoId = DB::table('info')->insertGetId($data);
        $blogs=array(
            'type'=>'collegs',
            'disabled'=>'none',
            'info_id'=>$infoId,
        );
        $result = DB::table('blogs')->insertGetId($blogs);
        if($result!=""){
            return redirect('/home/collegs')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function sendCollegsHeader(Request $request){
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz']
        );
        $infoId = DB::table('info')->where('id','26')->update($data);
            return redirect('/home/collegs')->with('status', 'Ma`lumotlar kiritildi!');
    }
    public function sendClients(Request $request){
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>"none",
            'head_en'=>"none",
            'head_uz'=>"none",
            'short_uz'=>"none",
            'short_en'=>"none",
            'short_ru'=>"none",
            'full_ru'=>"none",
            'full_en'=>"none",
            'full_uz'=>"none",
            'gallery'=>$gallery,
        );
        $infoId = DB::table('info')->insertGetId($data);
        $blogs=array(
            'type'=>'clients',
            'disabled'=>'none',
            'info_id'=>$infoId,
        );
        $result = DB::table('blogs')->insertGetId($blogs);
        if($result!=""){
            return redirect('/home/clients')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function updateVideo(Request $request){
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>"none",
            'head_en'=>"none",
            'head_uz'=>"none",
            'short_uz'=>"none",
            'short_en'=>"none",
            'short_ru'=>"none",
            'full_ru'=>"none",
            'full_en'=>"none",
            'full_uz'=>"none",
            'gallery'=>$gallery,
        );
        $result = DB::table('info')->where('id',$request->id)->update($data);
        if($result!=""){
            return redirect()->route('video');
        }else{
            return redirect()->route('video');
        }
    }
    public function updateClient(Request $request){
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>"none",
            'head_en'=>"none",
            'head_uz'=>"none",
            'short_uz'=>"none",
            'short_en'=>"none",
            'short_ru'=>"none",
            'full_ru'=>"none",
            'full_en'=>"none",
            'full_uz'=>"none",
            'gallery'=>$gallery,
        );
        $result = DB::table('info')->where('id',$request->id)->update($data);
        if($result!=""){
            return redirect()->route('clients');
        }else{
            return redirect()->route('clients');
        }
    }
    public function updateSlider(Request $request){
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz'],
            'short_uz'=>$request->short['uz'],
            'short_en'=>$request->short['en'],
            'short_ru'=>$request->short['ru'],
            'full_ru'=>$request->full['ru'],
            'full_en'=>$request->full['en'],
            'full_uz'=>$request->full['uz'],
            'gallery'=>$gallery,
        );
        $result = DB::table('info')->where('id',$request->id)->update($data);
            return redirect()->back();
    }
    public function sendAbout(Request $request){
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz']
        );
        $infoId = DB::table('info')->where('id','15')->update($data);
        if($infoId!=""){
            return redirect('/home/about')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function sendVideo(Request $request){
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz']
        );
        $infoId = DB::table('info')->where('id','25')->update($data);
        if($infoId!=""){
            return redirect('/home/video')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function sendService(Request $request){
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz']
        );
        $infoId = DB::table('info')->where('id','19')->update($data);
        if($infoId!=""){
            return redirect('/home/service')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function footerSlider(Request $request){
        $blog_id = DB::table('blogs')->where('id',$request->id)->first();
        $gallery="";
        $check=1;
        foreach ($request->gal['id'] as $val){
            if($check!=count($request->gal['id'])){
                $gallery .= $val . ",";
            }else{
                $gallery .= $val;
            }
            $check++;
        }
        $data=array(
            'head_ru'=>$request->header['ru'],
            'head_en'=>$request->header['en'],
            'head_uz'=>$request->header['uz'],
            'short_uz'=>$request->short['uz'],
            'short_en'=>$request->short['en'],
            'short_ru'=>$request->short['ru'],
            'full_ru'=>$request->full['ru'],
            'full_en'=>$request->full['en'],
            'full_uz'=>$request->full['uz'],
            'gallery'=>$gallery,
        );
        $infoId = DB::table('info')->where('id',$blog_id)->update($data);
        if($infoId!=""){
            return redirect('/home/slider')->with('status', 'Ma`lumotlar kiritildi!');
        }
    }
    public function add_file(Request $request){
        $file_type="image";
        $time = time();
//        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $imageName = $time.'.'.$request->file->extension();
//        echo $imageName;
        $request->file->move(public_path('media'), $imageName);
        $data=array(
            'img_url'=>$imageName,
            'type'=>$file_type
        );
        DB::table('upload')->insert($data);
            echo "$time";
    }
    public function onlineTrans(Request $request){
//        echo "<br/>header_ru: ".$request->header_ru;
//        echo "<br/>short_ru: ".$request->short_ru;
//        echo "<br/>full_ru: ".$request->full_ru;
        echo GoogleTranslate::trans($request->header_ru, 'uz', 'ru')."=>".GoogleTranslate::trans($request->short_ru, 'uz', 'ru')."=>".GoogleTranslate::trans($request->full_ru, 'uz', 'ru')."<>".GoogleTranslate::trans($request->header_ru, 'en', 'ru')."=>".GoogleTranslate::trans($request->short_ru, 'en', 'ru')."=>".GoogleTranslate::trans($request->full_ru, 'en', 'ru');
    }
}

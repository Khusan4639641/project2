<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function form(Request $request){
        $data=array(
            'name'=>$request['name'],
            'tell'=>$request['tell'],
            'text'=>$request['text'],
        );
        $result = DB::table('income')->insertGetId($data);
        $botToken = "1443723344:AAEDtoPn37ZEfBoT02l9HCZ-j7RHu1ETeU8";
        $chat_id = "@uzdenimGroup";
        $message = "So`rov nomeri: ".$result."\n"."Hariydor Ismi: ".$request['name']."\n"."Hariydor Tell: ".$request['tell']."\n"."Xabar text: ".$request['text'];
        $bot_url    = "https://api.telegram.org/bot$botToken/";
        $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
        file_get_contents($url);
        if($result!=""){
            return redirect()->route("home1");
        }
    }
    public function one_prod($lang,$id){
        $local = DB::table('fronted')->get();
        $infos = DB::table('info')->where('id',$id)->first();
        $infos->img = explode(",",$infos->gallery);
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }
        if($lang=='ru'){
            $infos->head = $infos->head_ru;
            $infos->short= $infos->short_ru;
            $infos->full= $infos->full_ru;
        }elseif($lang=='uz'){
            $infos->head = $infos->head_uz;
            $infos->short= $infos->short_uz;
            $infos->full= $infos->full_uz;
        }elseif($lang=='en'){
            $infos->head = $infos->head_en;
            $infos->short= $infos->short_en;
            $infos->full= $infos->full_en;
        }
//        dd($infos);
        return view('one_prod')
            ->with('infos',$infos)
            ->with('loc',$locals);
    }

    public function index($lang='ru'){

        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }

///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        slider
        $sliders = DB::table('blogs')->where('disabled','none')->where('type','slider')->get();
        $sendSliders = [];
        foreach($sliders as $val) {
            $info = DB::table('info')->where('id', $val->info_id)->first();
                if($lang=='ru'){
                    $info->head = $info->head_ru;
                    $info->short = $info->short_ru;
                    $info->full = $info->full_ru;
                }elseif($lang=='uz'){
                    $info->head = $info->head_uz;
                    $info->short = $info->short_uz;
                    $info->full = $info->full_uz;
                }elseif($lang=='en'){
                    $info->head = $info->head_en;
                    $info->short = $info->short_en;
                    $info->full = $info->full_en;
                }
                $img = explode(",",$info->gallery);
                $info->img = $img[0];
                array_push($sendSliders, $info);
        }
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        slider footer
        $sliders_footer = DB::table('blogs')->where('disabled','none')->where('type','slider_footer')->get();
        $slidersFooter = [];
        foreach($sliders_footer as $val) {
            $info = DB::table('info')->where('id', $val->info_id)->first();
            if($lang=='ru'){
                $info->head = $info->head_ru;
                $info->short = $info->short_ru;
                $info->full = $info->full_ru;
            }elseif($lang=='uz'){
                $info->head = $info->head_uz;
                $info->short = $info->short_uz;
                $info->full = $info->full_uz;
            }elseif($lang=='en'){
                $info->head = $info->head_en;
                $info->short = $info->short_en;
                $info->full = $info->full_en;
            }
            $img = explode(",",$info->gallery);
            $info->img = $img[0];
            array_push($slidersFooter, $info);
        }
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        Service
        $service = DB::table('blogs')->where('disabled','none')->where('type','service')->get();
        $service_header_id = DB::table('blogs')->where('disabled','none')->where('type','service_header')->first();
        $service_header = DB::table('info')->where('id',$service_header_id->info_id)->first();
        if($lang=='ru'){
            $service_header->head = $service_header->head_ru;
        }elseif($lang=='uz'){
            $service_header->head = $service_header->head_uz;
        }elseif($lang=='en'){
            $service_header->head = $service_header->head_en;
        }
        $sendService = [];
        foreach($service as $val){
            $info = DB::table('info')->where('id', $val->info_id)->first();
            if($lang=='ru'){
                $info->head = $info->head_ru;
                $info->short = $info->short_ru;
                $info->full = $info->full_ru;
            }elseif($lang=='uz'){
                $info->head = $info->head_uz;
                $info->short = $info->short_uz;
                $info->full = $info->full_uz;
            }elseif($lang=='en'){
                $info->head = $info->head_en;
                $info->short = $info->short_en;
                $info->full = $info->full_en;
            }
            $img = explode(",",$info->gallery);
            $info->img = $img[0];
            array_push($sendService, $info);
        }
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        About
        $about = DB::table('blogs')->where('disabled','none')->where('type','about')->get();
        $about_header_id = DB::table('blogs')->where('disabled','none')->where('type','about_header')->first();
        $about_header = DB::table('info')->where('id',$about_header_id->info_id)->first();
        if($lang=='ru'){
            $about_header->head = $about_header->head_ru;
        }elseif($lang=='uz'){
            $about_header->head = $about_header->head_uz;
        }elseif($lang=='en'){
            $about_header->head = $about_header->head_en;
        }
        $sendAbout = [];
        foreach($about as $val){
            $info = DB::table('info')->where('id', $val->info_id)->first();
            if($lang=='ru'){
                $info->head = $info->head_ru;
                $info->short = $info->short_ru;
                $info->full = $info->full_ru;
            }elseif($lang=='uz'){
                $info->head = $info->head_uz;
                $info->short = $info->short_uz;
                $info->full = $info->full_uz;
            }elseif($lang=='en'){
                $info->head = $info->head_en;
                $info->short = $info->short_en;
                $info->full = $info->full_en;
            }
            $img = explode(",",$info->gallery);
            $info->img = $img[0];
            array_push($sendAbout, $info);
        }
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        product
        $product = DB::table('blogs')->where('disabled','none')->where('type','product')->get();
        $sendProduct = [];
        foreach($product as $val){
            $info = DB::table('info')->where('id', $val->info_id)->first();
            if($lang=='ru'){
                $info->head = $info->head_ru;
                $info->short = $info->short_ru;
                $info->full = $info->full_ru;
            }elseif($lang=='uz'){
                $info->head = $info->head_uz;
                $info->short = $info->short_uz;
                $info->full = $info->full_uz;
            }elseif($lang=='en'){
                $info->head = $info->head_en;
                $info->short = $info->short_en;
                $info->full = $info->full_en;
            }
            $img = explode(",",$info->gallery);
            $info->img = $img[0];
            array_push($sendProduct, $info);
        }
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        Client
        $client = DB::table('blogs')->where('disabled','none')->where('type','clients')->get();
        $sendClient = [];
        foreach($client as $val){
            $info = DB::table('info')->where('id', $val->info_id)->first();
            $info->img = explode(",",$info->gallery);
            for($i=0;$i<count($info->img);$i++){
                array_push($sendClient, $info->img[$i]);
            }
        }
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        Video
        $video = DB::table('blogs')->where('disabled','none')->where('type','video')->get();
        $video_header_id = DB::table('blogs')->where('disabled','none')->where('type','video_header')->first();
        $video_header = DB::table('info')->where('id',$video_header_id->info_id)->first();
        $sendVideo = [];
        if($lang=='ru'){
            $video_header->head = $video_header->head_ru;
        }elseif($lang=='uz'){
            $video_header->head = $video_header->head_uz;
        }elseif($lang=='en'){
            $video_header->head = $video_header->head_en;
        }
        foreach($video as $val){
            $info = DB::table('info')->where('id', $val->info_id)->first();
            $info->img = explode(",",$info->gallery);
            $info->img = $info->img[0];
            array_push($sendVideo, $info->img);
        }
//        dd($sendVideo);
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
//        Collegs
        $collegs = DB::table('blogs')->where('disabled','none')->where('type','collegs')->get();
        $colleg_header_id = DB::table('blogs')->where('disabled','none')->where('type','colleg_header')->first();
        $colleg_header = DB::table('info')->where('id',$colleg_header_id->info_id)->first();
        if($lang=='ru'){
            $colleg_header->head = $colleg_header->head_ru;
        }elseif($lang=='uz'){
            $colleg_header->head = $colleg_header->head_uz;
        }elseif($lang=='en'){
            $colleg_header->head = $colleg_header->head_en;
        }
        $sendCollegs = [];
        foreach($collegs as $val){
            $info = DB::table('info')->where('id', $val->info_id)->first();
            if($lang=='ru'){
                $info->head = $info->head_ru;
                $info->short = $info->short_ru;
                $info->full = $info->full_ru;
            }elseif($lang=='uz'){
                $info->head = $info->head_uz;
                $info->short = $info->short_uz;
                $info->full = $info->full_uz;
            }elseif($lang=='en'){
                $info->head = $info->head_en;
                $info->short = $info->short_en;
                $info->full = $info->full_en;
            }
            $img = explode(",",$info->gallery);
            $info->img = $img[0];
            array_push($sendCollegs, $info);
        }
//        dd($sendClient);
        return view('welcome')
            ->with('loc',$locals)
            ->with("sliders",$sendSliders)
            ->with('lang',$lang)
            ->with('slidersFooter',$slidersFooter)
            ->with('sendService',$sendService)
            ->with('sendAbout',$sendAbout)
            ->with('video_header',$video_header)
            ->with('sendVideo',$sendVideo)
            ->with('sendClient',$sendClient)
            ->with('colleg_header',$colleg_header)
            ->with('sendCollegs',$sendCollegs)
            ->with('sendProduct',$sendProduct)
            ->with('about_header',$about_header)
            ->with("service_header",$service_header);
    }
    public function uploadFile(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
//
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('media'), $imageName);
    }
}

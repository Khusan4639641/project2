<?php
///https://www.olx.uz/obyavlenie/middle-senior-php-programmist-vysokonagruzhennye-platformy-ID26krL.html#d38559e3a9
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
    public function index($lang='ru')
    {
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $count = $count_image+$count_video;
        return view('admin.index')->with('image',$count_image)->with('video',$count_video)->with('count',$count)->with("count_income",$count_income);
    }
    public function about($lang='ru')
    {
        $file_image = DB::table('upload')->where('type','image')->get();

        $sliders_footer_1 = DB::table('info')->where('id','12')->first();
        $sliders_footer_2 = DB::table('info')->where('id','13')->first();
        $sliders_footer_3 = DB::table('info')->where('id','14')->first();
        $sliders_header = DB::table('info')->where('id','15')->first();

        $sliders_footer_1->media = explode(",",$sliders_footer_1->gallery);
        $sliders_footer_2->media = explode(",",$sliders_footer_2->gallery);
        $sliders_footer_3->media = explode(",",$sliders_footer_3->gallery);

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $count = $count_image+$count_video;
        return view('admin.about')->with('image',$count_image)->with('video',$count_video)->with('count',$count)->with('sliders_footer_1',$sliders_footer_1)->with('sliders_footer_2',$sliders_footer_2)->with('sliders_footer_3',$sliders_footer_3)->with("file_image",$file_image)->with("sliders_header",$sliders_header)->with("count_income",$count_income);
    }
    public function video($lang='ru'){
        $file_image = DB::table('upload')->where('type','video')->get();

        $sliders_footer_1 = DB::table('info')->where('id','22')->first();
        $sliders_footer_2 = DB::table('info')->where('id','23')->first();
        $sliders_footer_3 = DB::table('info')->where('id','24')->first();
        $sliders_header = DB::table('info')->where('id','25')->first();

        $sliders_footer_1->media = explode(",",$sliders_footer_1->gallery);
        $sliders_footer_2->media = explode(",",$sliders_footer_2->gallery);
        $sliders_footer_3->media = explode(",",$sliders_footer_3->gallery);

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $count = $count_image+$count_video;
        return view('admin.video')->with('image',$count_image)->with('video',$count_video)->with('count',$count)->with('sliders_footer_1',$sliders_footer_1)->with('sliders_footer_2',$sliders_footer_2)->with('sliders_footer_3',$sliders_footer_3)->with("file_image",$file_image)->with("sliders_header",$sliders_header)->with('count_income',$count_income);
    }
    public function service($lang='ru')
    {
        $file_image = DB::table('upload')->where('type','image')->get();

        $sliders_footer_1 = DB::table('info')->where('id','16')->first();
        $sliders_footer_2 = DB::table('info')->where('id','17')->first();
        $sliders_footer_3 = DB::table('info')->where('id','18')->first();
        $sliders_header = DB::table('info')->where('id','19')->first();

        $sliders_footer_1->media = explode(",",$sliders_footer_1->gallery);
        $sliders_footer_2->media = explode(",",$sliders_footer_2->gallery);
        $sliders_footer_3->media = explode(",",$sliders_footer_3->gallery);

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $count = $count_image+$count_video;
        return view('admin.service')->with('image',$count_image)->with('video',$count_video)->with('count',$count)->with('sliders_footer_1',$sliders_footer_1)->with('sliders_footer_2',$sliders_footer_2)->with('sliders_footer_3',$sliders_footer_3)->with("file_image",$file_image)->with("sliders_header",$sliders_header)->with("count_income",$count_income);
    }
    public function files($lang='ru'){
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $count = $count_image+$count_video;

        $file_image = DB::table('upload')->where('type','image')->get();
        $file_video = DB::table('upload')->where('type','video')->get();

        return view('admin.files')->with('file_image',$file_image)->with('file_video',$file_video)->with('count',$count)->with("count_income",$count_income);
    }
    public function file_slider($lang='ru'){
        $file_image = DB::table('upload')->where('type','image')->get();

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $count = $count_image+$count_video;

        $media = [];
        $sliders = DB::table('blogs')->where('disabled','none')->where('type','slider')->get();
        $sliders_dis = DB::table('blogs')->where('disabled','yes')->where('type','slider')->get();

        $sliders_footer_1 = DB::table('info')->where('id','8')->first();
        $sliders_footer_2 = DB::table('info')->where('id','9')->first();
        $sliders_footer_3 = DB::table('info')->where('id','10')->first();
        $sliders_footer_1->media = explode(",",$sliders_footer_1->gallery);
        $sliders_footer_2->media = explode(",",$sliders_footer_2->gallery);
        $sliders_footer_3->media = explode(",",$sliders_footer_3->gallery);


        $sendSlider = [];
        $sendSliderDis = [];
        foreach($sliders_dis as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            $media = explode(",",$info->gallery);
            if(count($media)>0){
                $info->media = $media;
            }else{
                $info->media=[];
            }
            array_push($sendSliderDis,$info);
        }

        foreach($sliders as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            $media = explode(",",$info->gallery);
            if(count($media)>0){
                $info->media = $media;
            }else{
                $info->media=[];
            }
            array_push($sendSlider,$info);
        }
        return view('admin.slider')->with('file_image',$file_image)->with('count',$count)->with('sliders',$sendSlider)->with('sliders_dis',$sendSliderDis)->with('sliders_footer_1',$sliders_footer_1)->with('sliders_footer_2',$sliders_footer_2)->with('sliders_footer_3',$sliders_footer_3)->with("count_income",$count_income);
    }
    public function clients($lang='ru'){
        $file_image = DB::table('upload')->where('type','image')->get();

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;

        $count_income = DB::table('income')->where('disabled','yes')->count();

        $sliders = DB::table('blogs')->where('disabled','none')->where('type','clients')->get();
        $sliders_dis = DB::table('blogs')->where('disabled','yes')->where('type','clients')->get();

        $sendSlider = [];
        $sendSliderDis = [];
        foreach($sliders_dis as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            $media = explode(",",$info->gallery);
            if(count($media)>0){
                $info->media = $media;//denis
            }else{
                $info->media=[];
            }
            array_push($sendSliderDis,$info);
        }

        foreach($sliders as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            $media = explode(",",$info->gallery);
            if(count($media)>0){
                $info->media = $media;
            }else{
                $info->media=[];
            }
            array_push($sendSlider,$info);
        }
        return view('admin.clients')->with('file_image',$file_image)->with('count',$count)->with('sliders',$sendSlider)->with('sliders_dis',$sendSliderDis)->with("count_income",$count_income);
    }
    public function product($lang='ru'){
        $file_image = DB::table('upload')->where('type','image')->get();

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;
        $count_income = DB::table('income')->where('disabled','yes')->count();

        $sliders = DB::table('blogs')->where('disabled','none')->where('type','product')->get();
        $sliders_dis = DB::table('blogs')->where('disabled','yes')->where('type','product')->get();

        $sendSlider = [];
        $sendSliderDis = [];
        foreach($sliders_dis as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            $media = explode(",",$info->gallery);
            if(count($media)>0){
                $info->media = $media;
            }else{
                $info->media=[];
            }
            array_push($sendSliderDis,$info);
        }

        foreach($sliders as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            $media = explode(",",$info->gallery);
            if(count($media)>0){
                $info->media = $media;
            }else{
                $info->media=[];
            }
            array_push($sendSlider,$info);
        }
        return view('admin.product')->with('file_image',$file_image)->with('count',$count)->with('sliders',$sendSlider)->with('sliders_dis',$sendSliderDis)->with("count_income",$count_income);
    }
    public function income($lang='ru'){
        $file_image = DB::table('upload')->where('type','image')->get();

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;
        $count_income = DB::table('income')->where('disabled','yes')->count();

        $sliders = DB::table('income')->where('disabled','yes')->get();
        $sliders_dis = DB::table('income')->where('disabled','none')->get();

        return view('admin.income')->with('file_image',$file_image)->with('count',$count)->with('sliders',$sliders)->with('sliders_dis',$sliders_dis)->with("count_income",$count_income);
    }
    public function collegs($lang='ru'){
        $file_image = DB::table('upload')->where('type','image')->get();
        $sliders_header = DB::table('info')->where('id','26')->first();
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;
        $count_income = DB::table('income')->where('disabled','yes')->count();

        $sliders = DB::table('blogs')->where('disabled','none')->where('type','collegs')->get();
        $sliders_dis = DB::table('blogs')->where('disabled','yes')->where('type','collegs')->get();
//        dd($sliders_dis);
        $sendSlider = [];
        $sendSliderDis = [];
        foreach($sliders_dis as $val) {
            $info = DB::table('info')->where('id', $val->info_id)->first();
//            dd($info->gallery);
        if(isset($info->id) && !empty($info->id)){
            $media = explode(",", $info->gallery);
//            dd($media);
            if (count($media) > 0) {
                $info->media = $media;
            } else {
                $info->media = [];
            }
                array_push($sendSliderDis, $info);
            }
        }

        foreach($sliders as $val){
            $info = DB::table('info')->where('id',$val->info_id)->first();
            if(isset($info->id) && !empty($info->id)){
                $media = explode(",",$info->gallery);
                if(count($media)>0){
                    $info->media = $media;
                }else{
                    $info->media=[];
                }
                array_push($sendSlider,$info);
            }
        }
        return view('admin.collegs')->with('file_image',$file_image)->with('count',$count)->with('sliders',$sendSlider)->with('sliders_dis',$sendSliderDis)->with('sliders_header',$sliders_header)->with("count_income",$count_income);
    }
    public function slider_dis($id){
        $data=array(
            'disabled'=>'yes'
        );
//        $info_id = DB::table('info')->where('id',$id)->first();
        $result = DB::table('blogs')->where('info_id',$id)->update($data);
        if($result!=""){
//            return redirect()->route('file_slider');
            return redirect()->back();
        }
    }
    public function income_vis($id){
        $data=array(
            'disabled'=>'none'
        );
//        $info_id = DB::table('info')->where('id',$id)->first();
        $result = DB::table('income')->where('id',$id)->update($data);
        if($result!=""){
//            return redirect()->route('file_slider');
            return redirect()->back();
        }
    }
    public function income_re_vis($id){
        $data=array(
            'disabled'=>'yes'
        );
//        $info_id = DB::table('info')->where('id',$id)->first();
        $result = DB::table('income')->where('id',$id)->update($data);
        if($result!=""){
//            return redirect()->route('file_slider');
            return redirect()->back();
        }
    }
    public function slider_active($id){
        $data=array(
            'disabled'=>'none'
        );
        $result = DB::table('blogs')->where('info_id',$id)->update($data);
        if($result!=""){
//            return redirect()->route('file_slider');
            return redirect()->back();
        }
    }
    public function slider_del($id){
        $info = DB::table('blogs')->where('id',$id)->first();
        DB::table('blogs')->where('info_id', $id)->delete();
        $result = DB::table('info')->where('id', $info->id)->delete();
        if($result!=""){
//            return redirect()->route('file_slider');
            return redirect()->back();
        }
    }
    public function income_del($id){
        $result = DB::table('income')->where('id', $id)->delete();
        if($result!=""){
            return redirect()->back();
        }
    }
    public function slider_show($id){
        $info_id = DB::table('blogs')->where('id',$id)->first();
        $info = DB::table('info')->where('id',$info_id->id)->first();
        $file_image = DB::table('upload')->where('type','image')->get();
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;
        $count_income = DB::table('income')->where('disabled','yes')->count();
        $info->media = explode(",",$info->gallery);

        if($info!=""){
            return view('admin.slider_edit')->with('info',$info)->with('file_image',$file_image)->with('count',$count)->with("count_income",$count_income);
        }
    }
    public function video_show($id){
//        $info_id = DB::table('blogs')->where('id',$id)->first();
        $info = DB::table('info')->where('id',$id)->first();
        $file_image = DB::table('upload')->where('type','video')->get();
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;

        $count_income = DB::table('income')->where('disabled','yes')->count();

        $info->media = explode(",",$info->gallery);

        if($info!=""){
            return view('admin.video_edit')->with('info',$info)->with('file_image',$file_image)->with('count',$count)->with("count_income",$count_income);
        }
    }
    public function client_show($id){
//        $info_id = DB::table('blogs')->where('id',$id)->first();
        $info = DB::table('info')->where('id',$id)->first();
        $file_image = DB::table('upload')->where('type','image')->get();
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;

        $count_income = DB::table('income')->where('disabled','yes')->count();
        $info->media = explode(",",$info->gallery);

        if($info!=""){
            return view('admin.client_edit')->with('info',$info)->with('file_image',$file_image)->with('count',$count)->with("count_income",$count_income);
        }
    }

//  local
    public function localiz(){
        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;
        $count_income = DB::table('income')->where('disabled','yes')->count();

        $local = DB::table('fronted')->get();
        return view('admin.local')->with('count',$count)->with("count_income",$count_income)->with('local',$local);
    }
    public function changeLoc(Request $request){
        $result = DB::table('fronted')->where('id',$request['id'])->update([$request['type']=>$request['val']]);
    }
    public function addLoc(Request $request){
        $data=array(
            'var'=>$request['add_var'],
            'en'=>$request['add_en'],
            'ru'=>$request['add_ru'],
            'uz'=>$request['add_uz']
        );
        $id = DB::table('fronted')->insertGetId($data);

        echo $id;


    }
    public function loc_del($id){
        $result = DB::table('fronted')->where('id', $id)->delete();

        $count_image = DB::table('upload')->where('type','image')->count();
        $count_video = DB::table('upload')->where('type','video')->count();
        $count = $count_image+$count_video;
        $count_income = DB::table('income')->where('disabled','yes')->count();

        $local = DB::table('fronted')->get();
        if($result!=""){
            return redirect()->route("localiz");
        }
    }
}

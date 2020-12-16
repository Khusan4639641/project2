@extends("admin.org.org")
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Slider</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Sliders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-home-tab1" data-toggle="pill" href="#custom-tabs-four-home1" role="tab" aria-controls="custom-tabs-four-home1" aria-selected="false">Disable Sliders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-home-tab2" data-toggle="pill" href="#custom-tabs-four-home2" role="tab" aria-controls="custom-tabs-four-home2" aria-selected="false">Slider footer text</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Add slider</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <? $num = 1; ?>
                            @foreach($sliders as $val)
                                <div class="slider" id="sliderId_{{ $num }}">
                                    <div class="headers" onclick="sliderShow({{ $num }})">
                                       <p class="slide_p"><strong>{{ $num }} )</strong>&nbsp;&nbsp;{{ $val->head_ru }}
                                           <a style="float: right;margin-top: -5px;color: white" href="/home/dis/slider/{{ $val->id }}" class="btn btn-danger">Disable</a>
                                       </p>
                                    </div>
                                    <div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#UZ_{{ $num }}" role="tab" aria-controls="UZ_{{ $num }}" aria-selected="true">Uzbek</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#RU_{{ $num }}" role="tab" aria-controls="RU_{{ $num }}" aria-selected="false">Russkiy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#EN_{{ $num }}" role="tab" aria-controls="EN_{{ $num }}" aria-selected="false">English</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="UZ_{{ $num }}" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h4>Header UZ</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->head_uz }}</textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4>Short UZ</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->short_uz }}</textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4>Full UZ</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->full_uz }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="RU_{{ $num }}" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h4>Header RU</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->head_ru }}</textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4>Short RU</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->short_ru }}</textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4>Full RU</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->full_ru }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="EN_{{ $num }}" role="tabpanel" aria-labelledby="contact-tab">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h4>Header EN</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->head_en }}</textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4>Short EN</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->short_en }}</textarea>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4>Full EN</h4>
                                                        <textarea name="" id="" class="form-control" readonly>{{ $val->full_en }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4>Galery</h4>
                                        <div style="border:1px #ccc solid;min-height: 100px;width: 100%;border-radius: 5px;" class="flexs">
                                        @for($i=0;$i<count($val->media);$i++)
                                                @if($val->media[$i]!="")
                                                <a data-toggle="modal" onclick="innerIMG('{{$val->media[$i]}}')" data-target="#modal-xl1">
                                                    <div class="gal">
                                                        <img  id="modal_img_{{$val->media[$i]}}" src="{{ URL::to('/') }}/media/{{$val->media[$i]}}" alt="">
                                                        <p>{{$val->media[$i]}}</p>
                                                    </div>
                                                </a>
                                                @endif
                                            @endfor
                                        </div>
                                        <br/>
                                        <a href="/home/edit_show/slider/{{ $val->id }}" class="btn btn-info" style="width: 100%;color: white;">Edit</a>
                                    </div>
                                </div>
                                <? $num++; ?>
                            @endforeach
                            </div>
                            <div class="tab-pane fade show" id="custom-tabs-four-home1" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab1">
                                <? $num1 = 1; ?>
                                @foreach($sliders_dis as $val)
                                    <div class="slider" id="sliderId1_{{ $num1 }}">
                                        <div class="headers" onclick="sliderShow1({{ $num1 }})">
                                            <p class="slide_p"><strong>{{ $num1 }} )</strong>&nbsp;&nbsp;{{ $val->head_ru }} <a style="float: right;margin-top: -5px;color: white" href="/home/active/slider/{{ $val->id }}" class="btn btn-info">Active</a></p>
                                        </div>
                                        <div>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#UZ1_{{ $num1 }}" role="tab" aria-controls="UZ1_{{ $num1 }}" aria-selected="true">Uzbek</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#RU1_{{ $num1 }}" role="tab" aria-controls="RU1_{{ $num1 }}" aria-selected="false">Russkiy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#EN1_{{ $num1 }}" role="tab" aria-controls="EN1_{{ $num1 }}" aria-selected="false">English</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent1">
                                                <div class="tab-pane fade show active" id="UZ1_{{ $num1 }}" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <h4>Header UZ</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->head_uz }}</textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4>Short UZ</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->short_uz }}</textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4>Full UZ</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->full_uz }}</textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="RU1_{{ $num1 }}" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <h4>Header RU</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->head_ru }}</textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4>Short RU</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->short_ru }}</textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4>Full RU</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->full_ru }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="EN1_{{ $num1 }}" role="tabpanel" aria-labelledby="contact-tab">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <h4>Header EN</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->head_en }}</textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4>Short EN</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->short_en }}</textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4>Full EN</h4>
                                                            <textarea name="" id="" class="form-control" readonly>{{ $val->full_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4>Galery</h4>
                                            <div style="border:1px #ccc solid;min-height: 100px;width: 100%;border-radius: 5px;" class="flexs">
                                                @for($i=0;$i<count($val->media);$i++)
                                                    @if($val->media[$i]!=0)
                                                    <a data-toggle="modal" onclick="innerIMG1('{{$val->media[$i]}}')" data-target="#modal-xl1">
                                                        <div class="gal">
                                                            <img  id="modal_img1_{{$val->media[$i]}}" src="{{ URL::to('/') }}/media/{{$val->media[$i]}}" alt="">
                                                            <p>{{$val->media[$i]}}</p>
                                                        </div>
                                                    </a>
                                                    @endif
                                                @endfor
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="/home/del/slider/{{ $val->id }}" class="btn btn-success" style="width: 100%;color: white;">Delete</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="/home/edit_show/slider/{{ $val->id }}" class="btn btn-info" style="width: 100%;color: white;">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <? $num1++; ?>
                                @endforeach
                            </div>
                            <div class="tab-pane fade show" id="custom-tabs-four-home2" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab2">

                                <div class="slider" id="sliderId3">
                                    <div class="headers" onclick="sliderShow2('3')">
                                        <p class="slide_p"><strong>1 )</strong>&nbsp;&nbsp;Footer text 1</p>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div style="width: 100%;padding:0px 10px;">
                                                <ul class="nav nav-tabs" id="myTab_1" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab_1" data-toggle="tab" href="#UZ_f_1" role="tab" aria-controls="UZ_f_1" aria-selected="true">Uzbek</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab_1" data-toggle="tab" href="#RU_f_1" role="tab" aria-controls="RU_f_1" aria-selected="false">Russkiy</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="contact-tab_1" data-toggle="tab" href="#EN_f_1" role="tab" aria-controls="EN_f_1" aria-selected="false">English</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent_f_1">
                                                    <div class="tab-pane fade show active" id="UZ_f_1" role="tabpanel" aria-labelledby="home-tab_1">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h4>Header UZ</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->head_uz }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Short UZ</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->short_uz }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Full UZ</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->full_uz }}</textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade" id="RU_f_1" role="tabpanel" aria-labelledby="profile-tab_1">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h4>Header RU</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->head_ru }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Short RU</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->short_ru }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Full RU</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->full_ru }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="EN_f_1" role="tabpanel" aria-labelledby="contact-tab_1">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h4>Header EN</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->head_en }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Short EN</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->short_en }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Full EN</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_1->full_en }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Galery</h4>
                                                <div style="border:1px #ccc solid;min-height: 100px;width: 100%;border-radius: 5px;" class="flexs">
                                                    @for($i=0;$i<count($sliders_footer_1->media);$i++)
                                                        @if($sliders_footer_1->media[$i]!="")
                                                            <a data-toggle="modal" onclick="innerIMG('{{$sliders_footer_1->media[$i]}}')" data-target="#modal-xl1">
                                                                <div class="gal">
                                                                    <img  id="modal_img_{{$sliders_footer_1->media[$i]}}" src="{{ URL::to('/') }}/media/{{$sliders_footer_1->media[$i]}}" alt="">
                                                                    <p>{{$sliders_footer_1->media[$i]}}</p>
                                                                </div>
                                                            </a>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <br/>
                                                <a href="/home/edit_show/slider/{{ $sliders_footer_1->id }}" class="btn btn-info" style="width: 100%;color: white;">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider" id="sliderId4">
                                    <div class="headers" onclick="sliderShow2('4')">
                                        <p class="slide_p"><strong>2 )</strong>&nbsp;&nbsp;Footer text 2</p>
                                    </div>
                                    <div>
                                        <div class="row">

                                            <div style="width: 100%;padding:0px 10px;">
                                                <ul class="nav nav-tabs" id="myTab_2" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab_2" data-toggle="tab" href="#UZ_f_2" role="tab" aria-controls="UZ_f_2" aria-selected="true">Uzbek</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab_2" data-toggle="tab" href="#RU_f_2" role="tab" aria-controls="RU_f_2" aria-selected="false">Russkiy</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="contact-tab_2" data-toggle="tab" href="#EN_f_2" role="tab" aria-controls="EN_f_2" aria-selected="false">English</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent_f_2">
                                                    <div class="tab-pane fade show active" id="UZ_f_2" role="tabpanel" aria-labelledby="home-tab_2">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h4>Header UZ</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->head_uz }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Short UZ</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->short_uz }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Full UZ</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->full_uz }}</textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade" id="RU_f_2" role="tabpanel" aria-labelledby="profile-tab_2">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h4>Header RU</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->head_ru }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Short RU</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->short_ru }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Full RU</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->full_ru }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="EN_f_2" role="tabpanel" aria-labelledby="contact-tab_2">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <h4>Header EN</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->head_en }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Short EN</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->short_en }}</textarea>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4>Full EN</h4>
                                                                <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_2->full_en }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>Galery</h4>
                                                <div style="border:1px #ccc solid;min-height: 100px;width: 100%;border-radius: 5px;" class="flexs">
                                                    @for($i=0;$i<count($sliders_footer_2->media);$i++)
                                                        @if($sliders_footer_2->media[$i]!="")
                                                            <a data-toggle="modal" onclick="innerIMG('{{$sliders_footer_2->media[$i]}}')" data-target="#modal-xl1">
                                                                <div class="gal">
                                                                    <img  id="modal_img_{{$sliders_footer_2->media[$i]}}" src="{{ URL::to('/') }}/media/{{$sliders_footer_2->media[$i]}}" alt="">
                                                                    <p>{{$sliders_footer_2->media[$i]}}</p>
                                                                </div>
                                                            </a>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <br/>
                                                <a href="/home/edit_show/slider/{{ $sliders_footer_2->id }}" class="btn btn-info" style="width: 100%;color: white;">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider" id="sliderId5">
                                    <div class="headers" onclick="sliderShow2('5')">
                                        <p class="slide_p"><strong>3 )</strong>&nbsp;&nbsp;Footer text 3</p>
                                    </div>
                                    <div>
                                                <div class="row">
                                                    <div style="width: 100%;padding:0px 10px;">
                                                        <ul class="nav nav-tabs" id="myTab_3" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="home-tab_3" data-toggle="tab" href="#UZ_f_3" role="tab" aria-controls="UZ_f_3" aria-selected="true">Uzbek</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="profile-tab_3" data-toggle="tab" href="#RU_f_3" role="tab" aria-controls="RU_f_3" aria-selected="false">Russkiy</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="contact-tab_3" data-toggle="tab" href="#EN_f_3" role="tab" aria-controls="EN_f_3" aria-selected="false">English</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content" id="myTabContent_f_3">
                                                            <div class="tab-pane fade show active" id="UZ_f_3" role="tabpanel" aria-labelledby="home-tab_3">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <h4>Header UZ</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->head_uz }}</textarea>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <h4>Short UZ</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->short_uz }}</textarea>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <h4>Full UZ</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->full_uz }}</textarea>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="tab-pane fade" id="RU_f_3" role="tabpanel" aria-labelledby="profile-tab_3">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <h4>Header RU</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->head_ru }}</textarea>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <h4>Short RU</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->short_ru }}</textarea>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <h4>Full RU</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->full_ru }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="EN_f_3" role="tabpanel" aria-labelledby="contact-tab_3">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <h4>Header EN</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->head_en }}</textarea>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <h4>Short EN</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->short_en }}</textarea>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <h4>Full EN</h4>
                                                                        <textarea name="" id="" class="form-control" readonly>{{ $sliders_footer_3->full_en }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4>Galery</h4>
                                                        <div style="border:1px #ccc solid;min-height: 100px;width: 100%;border-radius: 5px;" class="flexs">
                                                            @for($i=0;$i<count($sliders_footer_3->media);$i++)
                                                                @if($sliders_footer_3->media[$i]!="")
                                                                    <a data-toggle="modal" onclick="innerIMG('{{$sliders_footer_3->media[$i]}}')" data-target="#modal-xl1">
                                                                        <div class="gal">
                                                                            <img  id="modal_img_{{$sliders_footer_3->media[$i]}}" src="{{ URL::to('/') }}/media/{{$sliders_footer_3->media[$i]}}" alt="">
                                                                            <p>{{$sliders_footer_3->media[$i]}}</p>
                                                                        </div>
                                                                    </a>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <br/>
                                                        <a href="/home/edit_show/slider/{{ $sliders_footer_3->id }}" class="btn btn-info" style="width: 100%;color: white;">Edit</a>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                <form method="post" action="{{ route('sendSlider') }}" id="updateProfileForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="type" value="slider" class="form-control col-sm-3"/>
                                        <div class="col-sm-12">
                                            <a type="submit" onclick="AjaxOnline()" class="btn btn-info">
                                                Translate
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                                <strong> Header in russian</strong>
                                                <textarea onclick='spaceDel(id)' id="header_ru" name="header[ru]" maxlength="255" class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Header in Uzbek</strong>
                                                <textarea id="header_uz" onclick='spaceDel(id)' name="header[uz]" maxlength="255" class="form-control"></textarea>

                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Header in English</strong>
                                                <textarea id="header_en" name="header[en]" onclick='spaceDel(id)' maxlength="255" class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Short text in russian</strong>
                                                <textarea id="short_ru" name="short[ru]" onclick='spaceDel(id)' maxlength="255" class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Short text in Uzbek</strong>
                                                <textarea id="short_uz" name="short[uz]" onclick='spaceDel(id)' maxlength="255" class="form-control"></textarea>

                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Short text in English</strong>
                                                <textarea id="short_en" name="short[en]" onclick='spaceDel(id)' maxlength="255" class="form-control"></textarea>
                                        </div>

                                        <div class="col-sm-4">
                                            <strong> Full text in russian</strong>
                                            <textarea onclick='spaceDel(id)' id="full_ru" name="full[ru]" class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Full text in Uzbek</strong>
                                            <textarea id="full_uz" name="full[uz]" onclick='spaceDel(id)' class="form-control"></textarea>

                                        </div>
                                        <div class="col-sm-4">
                                            <strong> Full text in English</strong>
                                            <textarea onclick='spaceDel(id)' id="full_en" name="full[en]" class="form-control"></textarea>
                                        </div>

                                        <div class="col-sm-12" style="margin-top: 10px;">
                                            <h4>Galereya
                                                <button type="button"  class="btn btn-info" data-toggle="modal" data-target="#modal-xl">
                                                    Add Gallery
                                                </button>
                                            </h4>
                                            <div style="border:1px #ccc solid;min-height: 100px;width: 100%" id="gal_div_org" class="flexs">

                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 10px;">
                                        <button type="submit" class="btn btn-success">
                                            Add slider
                                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </div><!--/. container-fluid -->
    <input type="hidden" id="token" value="{{ csrf_token() }}"/>
    <script>
        function innerIMG(img){
            var imgInner = document.getElementById("modal_img_"+img).src;
            document.getElementById("modalImg").src=imgInner;
            document.getElementById("modalText").innerHTML=img;
        }
        function innerIMG1(img){
            var imgInner = document.getElementById("modal_img1_"+img).src;
            document.getElementById("modalImg").src=imgInner;
            document.getElementById("modalText").innerHTML=img;
        }
        function AjaxOnline(){
            alert("Waiting for translate");
                var header_ru = document.getElementById("header_ru").value;
                var short_ru = document.getElementById("short_ru").value;
                var full_ru = document.getElementById("full_ru").value;
                var token = $("#token").val();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('onlineTrans') }}",
                    data: {_token: token, header_ru: header_ru, short_ru: short_ru, full_ru: full_ru},
                    success: function (data) {
//                        alert(data);
                        var Langs = data.split("<>");
                        var uzbek = Langs[0];
                        uzbek = uzbek.split("=>");

                        var header_uz = uzbek[0];
                        var short_uz = uzbek[1];
                        var full_uz = uzbek[2];

                        var english = Langs[1];
                        english = english.split("=>");

                        var header_en = english[0];
                        var short_en = english[1];
                        var full_en = english[2];

                        document.getElementById("header_en").value = header_en;
                        document.getElementById("header_uz").value = header_uz;

                        document.getElementById("short_en").value = short_en;
                        document.getElementById("short_uz").value = short_uz;

                        document.getElementById("full_en").value = full_en;
                        document.getElementById("full_uz").value = full_uz;
                    }
                });
            }
        function AjaxOnline1(id){
            alert("Waiting for translate");
            var header_ru = document.getElementById("header"+id+"_ru").value;
            var short_ru = document.getElementById("short"+id+"_ru").value;
            var full_ru = document.getElementById("full"+id+"_ru").value;
            var token = $("#token").val();
            $.ajax({
                type: 'POST',
                url: "{{ route('onlineTrans') }}",
                data: {_token: token, header_ru: header_ru, short_ru: short_ru, full_ru: full_ru},
                success: function (data) {
                    var Langs = data.split("<>");
                    var uzbek = Langs[0];
                    uzbek = uzbek.split("=>");

                    var header_uz = uzbek[0];
                    var short_uz = uzbek[1];
                    var full_uz = uzbek[2];

                    var english = Langs[1];
                    english = english.split("=>");

                    var header_en = english[0];
                    var short_en = english[1];
                    var full_en = english[2];

                    document.getElementById("header"+id+"_en").value = header_en;
                    document.getElementById("header"+id+"_uz").value = header_uz;

                    document.getElementById("short"+id+"_en").value = short_en;
                    document.getElementById("short"+id+"_uz").value = short_uz;

                    document.getElementById("full"+id+"_en").value = full_en;
                    document.getElementById("full"+id+"_uz").value = full_uz;
                }
            });
        }
    </script>
</section>
<div class="modal fade" id="modal-xl" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Gallery modal</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body flexing" id="exist_image">
                @foreach($file_image as $val)
                    <div class="gal" onclick="choise(id)" id="gal_{{ $val->img_url }}">
                        <img id="img_gal_{{ $val->img_url }}" src="{{ URL::to('/') }}/media/{{ $val->img_url }}" alt=""/>
                        <p id="p_gal_{{ $val->img_url }}">{{ $val->img_url }}</p>
                        <input type="hidden" id="input_gal_{{ $val->img_url }}" value="{{ $val->img_url }}">
                    </div>
                @endforeach
            </div>
            <div style="display: none;">
                <form id="user_save_profile_form"  enctype="multipart/form-data" method="post">
                    <input type="file"  name="file" onchange="doAfterSelectImage(this)" id="select_file">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="fileClick()">Add New Image</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-xl1" style="display: none;width: 500px;left: calc(50% - 250px);" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">IMAGE</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body flexing" id="exist_image">

                    <div class="gal" style="width: 300px;height: 300px;">
                        <img id="modalImg" src="{{ URL::to('/') }}/media/1605262073.jpeg" alt="" style="width: 100%;height: 95%;" />
                        <p id="modalText">1605262073.jpeg</p>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    function sliderShow(id){
        if(document.getElementById("sliderId_"+id).style.height!='100%'){
            document.getElementById("sliderId_"+id).style.height = "100%";
        }else{
            document.getElementById("sliderId_"+id).style.height = "50px";
        }
    }
    function sliderShow1(id){
        if(document.getElementById("sliderId1_"+id).style.height!='100%'){
            document.getElementById("sliderId1_"+id).style.height = "100%";
        }else{
            document.getElementById("sliderId1_"+id).style.height = "50px";
        }
    }
    function sliderShow2(id){
        if(document.getElementById("sliderId"+id).style.height!='100%'){
            document.getElementById("sliderId"+id).style.height = "100%";
        }else{
            document.getElementById("sliderId"+id).style.height = "50px";
        }
//        alert(id);
    }
    {{----}}
    var file_type = "";
    function fileClick(){
        document.getElementById("select_file").click();
    }
    function doAfterSelectImage(input){
            readUrl(input);
            uploadUserProfileImage();
    }
    function readUrl(input){
             file_type = input.files[0].type;
            file_type = file_type.split("/");
            file_type = file_type[1];
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function uploadUserProfileImage(){
        let myForm = document.getElementById('user_save_profile_form');
        let formData = new FormData(myForm);
        $.ajax({
            type:"POST",
            data:formData,
            dataType:"JSON",
            contentType:false,
            cache:false,
            processData:false,
            url:"{{ route('add_file') }}",
            success:function(response){
            var file_name = response.toString()+"."+file_type;

                var div = document.createElement("div");
                div.setAttribute("class","gal");
                div.setAttribute("id","gal_"+file_name);
                div.setAttribute("onclick","choise(id)");

                var input = document.createElement('input');
                input.setAttribute('type','hidden');
                input.setAttribute('value',file_name);
                input.setAttribute('id',"input_gal_"+file_name);

                var img=document.createElement("img");
                img.setAttribute('src',window.location.origin+"/media/"+file_name);
                img.setAttribute('id',"img_gal_"+file_name);
                var text = document.createTextNode(file_name);
                var p = document.createElement("p");
                p.setAttribute("id","p_gal_"+file_name);
                p.appendChild(text);
                div.appendChild(img);
                div.appendChild(p);
                div.appendChild(input);
                document.getElementById("exist_image").appendChild(div);
            }
        });
    }
        var num=0;
    function choise(id){
        var get_image = document.getElementById('img_'+id).src;
        var names = document.getElementById("p_"+id).textContent;
        var text = document.createTextNode(names);
        var img_input = document.getElementById('input_'+id).value;
        var div = document.createElement("div");
            div.setAttribute("class","gal");
            div.setAttribute("onclick","relbacks(this,\'"+id+"\')");
        var input = document.createElement('input');
            input.setAttribute('type','hidden');
            input.setAttribute('value',img_input);
            input.setAttribute('name',"gal[id]["+num+"]");
        var img=document.createElement("img");
            img.setAttribute('src',get_image);
        var p = document.createElement("p");
            p.appendChild(text);
            div.appendChild(img);
            div.appendChild(p);
            div.appendChild(input);
            document.getElementById("gal_div_org").appendChild(div);
            document.getElementById(id).style.display="none";
            num++;
    }
    function relbacks(elm,id){
        $(elm).remove();
        document.getElementById(id).style.display="block";
    }
        function spaceDel(id){
            var output = document.getElementById(id).value;
            output = output.replace(/\s/g, "");
            document.getElementById(id).innerHTML = output;
        }
</script>
<style>
    .headers{
        cursor: pointer;
    }
    .slider a{
        color: black;
        text-overline: none;
    }
    .slider{
        border: 1px #cccccc solid;
        transition: 0.2s;
        border-radius: 10px;
        height: 50px;
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom:10px;
        overflow: hidden;
        padding-bottom: 10px;
    }
    .slider:hover{
        border: 1px #000 solid;
        background: #ffffff;
    }
    .slider p:first-child{
        margin-top: 10px;
        padding-bottom:15px;
        border-bottom: 1px black solid;
    }
    textarea{
        padding: 0px;
    }
    .flexing{
        cursor: pointer;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .flexs{
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
    }
    div.gal{
        cursor: pointer;
        border-radius: 10px;
        margin: 5px;
        padding: 15px;
        border: 1px #ccc solid;
        text-align: center;
        transition: .2s;
    }
    div.gal:hover{
        box-shadow: 7px 7px 7px #000;
        border: 1px black solid;
    }
    div.gal img{
        width: 100px;
        height: 100px;
    }
    * {
        box-sizing: border-box;
    }

    #myInput,#myInput1 {
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable,#myTable1 {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
    }

    #myTable th, #myTable td ,#myTable1 th, #myTable1 td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr ,#myTable1 tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header, #myTable tr:hover ,#myTable1 tr.header, #myTable1 tr:hover {
        background-color: #f1f1f1;
    }
</style>

<!-- /.content -->
@endsection
@extends("admin.org.org")
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Client</h1>
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
                    <div class="alert" id="message" style="display: none;">  </div>
                    <form method="post" action="{{ route('updateClient') }}" id="updateProfileForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="type" value="slider" class="form-control col-sm-3"/>
                            <div class="col-sm-12" style="margin-top: 10px;">
                                <h4>Galereya
                                    <button type="button"  class="btn btn-info" data-toggle="modal" data-target="#modal-xl">
                                        Add Gallery
                                    </button>
                                </h4>
                                <div style="border:1px #ccc solid;min-height: 100px;width: 100%" id="gal_div_org" class="flexs">

                                    @for($i=0;$i<count($info->media);$i++)
                                        @if($info->media[$i]!="")
                                        <a data-toggle="modal" onclick="relbacksExist(this)">
                                            <div class="gal">
                                                <img  id="modal_img1_{{$info->media[$i]}}" src="{{ URL::to('/') }}/media/{{$info->media[$i]}}" alt="" controls>
                                                <p>{{$info->media[$i]}}</p>
                                                <input type="hidden" value="{{$info->media[$i]}}" name="gal[id][{{ $i }}]">
                                            </div>
                                        </a>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-top: 10px;">
                                <input type="hidden" name="id" value="{{ $info->id }}">
                                <button type="submit" class="btn btn-success">
                                    Edit information
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </div><!--/. container-fluid -->
    <input type="hidden" id="token" value="{{ csrf_token() }}"/>
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
                        <img id="img_gal_{{ $val->img_url }}" src="{{ URL::to('/') }}/media/{{ $val->img_url }}" alt="">
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
    div.gal img,div.gal video{
        width:100px;
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
<input type="hidden" id="token" value="{{ csrf_token() }}"/>
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
    var num=Number(document.getElementsByClassName("gal").length-14);
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
    function spaceDel1(id){
        var output = document.getElementById(id).value;
        output = output.replace(/\s/g, "");
        document.getElementById(id).innerHTML = output;
    }
    function relbacksExist(elm){
        $(elm).remove();
    }
</script>
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

<!-- /.content -->
@endsection
@extends("admin.org.org")
@section('content')
<section class="content">
    <div class="container-fluid">
        <h3 style="padding-top:10px;">Add new Localization <button class="btn btn-info" style="margin-left:10px;" onclick="AjaxOnline()">Translate</button></h3>
        <div class="row">
            <div class="col-sm-3">
                <strong>Var Name</strong>
                <input style="width:100%;" id="add_var" class='form-control'/>
            </div>
            <div class="col-sm-3">
                <strong>Localization RU</strong>
                <textarea id="add_ru" style="width:100%;min-height:50px;" class='form-control'></textarea>
            </div>
            <div class="col-sm-3">
                <strong>Localization UZ</strong>
                <textarea id="add_uz" style="width:100%;min-height:50px;" class='form-control'></textarea>
            </div>
            <div class="col-sm-3">
                <strong>Localization EN</strong>
                <textarea id="add_en" style="width:100%;min-height:50px;" class='form-control'></textarea>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-success" style="width:100%;margin-top:20px;" onclick="add_ajax()">Adding</button>
            </div>
        </div>
        <div class="row">
            <div style="padding:20px;width:100%;">
                <table id="dtBasicExample" class="table" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID
                        </th>
                        <th class="th-sm">VAR NAME
                        </th>
                        <th class="th-sm">EN
                        </th>
                        <th class="th-sm">RU
                        </th>
                        <th class="th-sm">UZ
                        </th>
                        <th class="th-sm">DELETE
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? $num=1 ?>
                    @foreach($local as $val)
                        <tr>
                            <td>{{ $num }}
                                <input type="hidden" value="{{ $val->id }}" id="loc_id_{{ $num }}"/>
                            </td>
                            <td> <input readonly class="form-control" id="id_var_{{ $num }}" onchange="change_var(id,{{ $num }})" value="{{ $val->var }}"> </td>
                            <td> <input class="form-control" id="id_en_{{ $num }}" onchange="change_en(id,{{ $num }})" value="{{ $val->en }}"> </td>
                            <td> <input class="form-control" id="id_ru_{{ $num }}" onchange="change_ru(id,{{ $num }})" value="{{ $val->ru }}"> </td>
                            <td> <input class="form-control" id="id_uz_{{ $num }}" onchange="change_uz(id,{{ $num }})" value="{{ $val->uz }}"> </td>
                            <td>
                                <a href="/home/loc_del/{{ $val->id }}" class="btn btn-danger"> Delete </a>
                            </td>
                        </tr>
                        <? $num++ ?>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">VAR NAME</th>
                        <th class="th-sm">EN</th>
                        <th class="th-sm">RU</th>
                        <th class="th-sm">UZ</th>
                        <th class="th-sm">DELETE</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</section>
<input type="hidden" id="token" value="{{ csrf_token() }}"/>
<script>
    function change_var(id,lac){
        var token = $("#token").val();
        var input_id = document.getElementById("loc_id_"+lac).value;
        var val = document.getElementById(id).value;

        $.ajax({
            type:'POST',
            url:"{{ route('changeLoc') }}",
            data:{val:val, _token:token, id:input_id,type:"var"},
            success:function(data){

            }
        });
    }
    function change_en(id,lac){
        var token = $("#token").val();
        var input_id = document.getElementById("loc_id_"+lac).value;
        var val = document.getElementById(id).value;

        $.ajax({
            type:'POST',
            url:"{{ route('changeLoc') }}",
            data:{val:val, _token:token, id:input_id,type:"en"},
            success:function(data){

            }
        });
    }
    function change_ru(id,lac){
        var token = $("#token").val();
        var input_id = document.getElementById("loc_id_"+lac).value;
        var val = document.getElementById(id).value;

        $.ajax({
            type:'POST',
            url:"{{ route('changeLoc') }}",
            data:{val:val, _token:token, id:input_id,type:"ru"},
            success:function(data){

            }
        });
    }
    function change_uz(id,lac){
        var token = $("#token").val();
        var input_id = document.getElementById("loc_id_"+lac).value;
        var val = document.getElementById(id).value;
        $.ajax({
            type:'POST',
            url:"{{ route('changeLoc') }}",
            data:{val:val, _token:token, id:input_id,type:"uz"},
            success:function(data){

            }
        });
    }
</script>
<script>
    function add_ajax(){
        var token = $("#token").val();
        var add_var = document.getElementById("add_var").value;
        var add_uz = document.getElementById("add_uz").value;
        var add_en = document.getElementById("add_en").value;
        var add_ru = document.getElementById("add_ru").value;
        $.ajax({
            type:'POST',
            url:"{{ route('addLoc') }}",
            data:{ _token:token,add_var:add_var,add_en:add_en,add_ru:add_ru,add_uz:add_uz},
            success:function(data){
                var tableBody = $("table#dtBasicExample tbody");
                var newRow = "<tr><td>"+data+"<input type='hidden' value='"+data+"' id='loc_id_"+data+"'/></td><td><input class='form-control' id='id_var_"+data+"' onchange='change_var(id,"+data+")' value='"+add_var+"'> </td><td><input class='form-control' id='id_en_"+data+"' onchange='change_en(id,"+data+")' value='"+add_en+"'></td><td><input class='form-control' id='id_ru_"+data+"' onchange='change_ru(id,"+data+")' value='"+add_ru+"'> </td><td><input class='form-control' id='id_uz_"+data+"' onchange='change_uz(id,"+data+")' value='"+add_uz+"'> </td><td><a href='/home/loc_del/"+data+"' class='btn btn-danger'> Delete </a></td></tr>";
                tableBody.append(newRow);
                document.getElementById("add_var").value="";
                document.getElementById("add_uz").value="";
                document.getElementById("add_en").value="";
                document.getElementById("add_ru").value="";
                alert("Ma`lumot qushildi");
            }
        });
    }
    function AjaxOnline(){
        alert("Waiting for translate");
        var header_ru = document.getElementById("add_ru").value;

        var token = $("#token").val();
        $.ajax({
            type: 'POST',
            url: "{{ route('onlineTrans') }}",
            data: {_token: token, header_ru: header_ru, short_ru: "1", full_ru: "1"},
            success: function (data){
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

                document.getElementById("add_en").value = header_en;
                document.getElementById("add_uz").value = header_uz;

            }
        });
    }
</script>
@endsection
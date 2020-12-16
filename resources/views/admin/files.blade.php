@extends("admin.org.org")
@section('content')
    <style>
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

    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h6 class="m-0">Galeries</h6>
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
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Images</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Upload Files</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

                                <table id="myTable">
                                    <tr class="header">
                                        <th style="width:10px;">ID</th>
                                        <th>IMAGE</th>
                                        <th>URL</th>
                                        <th>DATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                    <? $num_image=1; ?>
                                    @foreach($file_image as $val)
                                        <tr>
                                            <td>{{ $num_image }}</td>
                                            <td><a href="{{ URL::to('/') }}/media/{{ $val->img_url }}" target="_blank"><img src="{{ URL::to('/') }}/media/{{ $val->img_url }}" alt="" style="width: 70px;height: 70px;" /></a></td>
                                            <td>{{ $val->img_url }}</td>
                                            <td>{{ $val->reg_date }}</td>
                                            <td>
                                                <form action="{{ URL::to('/') }}/home/delete" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="del_type" value="files"/>
                                                    <button type="submit" name="delete" value="{{ $val->id }}" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <? $num_image++; ?>
                                    @endforeach
                                </table>

                                <script>
                                    function myFunction() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("myInput");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("myTable");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[2];
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }
                                        }
                                    }
                                </script>

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for names.." title="Type in a name">

                                <table id="myTable1">
                                    <tr class="header">
                                        <th style="width:10px;">ID</th>
                                        <th>IMAGE</th>
                                        <th>URL</th>
                                        <th>DATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                    <? $num_video=1; ?>
                                    @foreach($file_video as $val)
                                        <tr>
                                            <td>{{ $num_video }}</td>
                                            <td><a href="{{ URL::to('/') }}/media/{{ $val->img_url }}" target="_blank"><video src="{{ URL::to('/') }}/media/{{ $val->img_url }}" style="width: 50px;height: 50px;"></video></a></td>
                                            <td>{{ $val->img_url }}</td>
                                            <td>{{ $val->reg_date }}</td>
                                            <td>
                                                <form action="{{ URL::to('/') }}/home/delete" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="del_type" value="files"/>
                                                    <button type="submit" name="delete" value="{{ $val->id }}" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <? $num_video++; ?>
                                    @endforeach
                                </table>

                                <script>
                                    function myFunction1() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("myInput1");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("myTable1");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[1];
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }
                                        }
                                    }
                                </script>

                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                <div class="alert" id="message" style="display: none;">  </div>
                                <form method="post" action="{{ route('upload') }}" id="updateProfileForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <select name="file_type" id="" class="form-control col-sm-3">
                                        <option value="image"> Image </option>
                                        <option value="video"> Video </option>
                                    </select>
                                    <input type="file" name="file" class="form-control col-sm-3"/>
                                    <button type="submit" class="btn btn-success">
                                        Upload File
                                    </button>
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
    <script>
    </script>
</section>
<!-- /.content -->
@endsection
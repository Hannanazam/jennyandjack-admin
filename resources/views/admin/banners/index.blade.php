@extends('admin.layout')
@section('content')

<style>
    .dropify-wrapper{
        height: 100px;
    }
</style>

        <div class="page-wrapper">
            <div class="container-fluid">
                @if (Session::has('success'))

                <div class="alert alert-success">{{Session('success')}}</div>
                @endif
                @if (Session::has('errors'))
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
            <div class="container-fluid">
                <div class="row page-titles flex-nowrap-sm">
                    <div class="col-md-5 align-self-center px-0">
                        {{-- <h3 class="text-themecolor">Banner Image</h3> --}}
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Banner Image</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-md-block">
                        <div class="button-box">
                            <button type="button" class="btn btn-outline-success modal_on" data-actor="add" data-route="{{route('bannerimages')}}" ><i class="fa fa-plus-circle"></i> Add New</button>
                            {{-- <button type="button" class="btn btn-success modal_on" data-actor="add" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle"></i> Add New</button> --}}
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body border_main border_main_r">
                    <h4 class="card-title">Banner Images</h4>
                    <div class="table-responsive m-t-10">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th style="width:100px">Banner Image</th>
                                    <th style="width:100px">Mobile Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $key = 1;
                                @endphp
                                @foreach ($banners as $banner)

                                <tr>
                                    <td>{{$key;}}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td class="text-center">
                                       <img src="{{asset('/admin/images/product/'.$banner->banner_img)}}" style="max-height:60px;"  alt="" class="img-fluid">
                                    </td>
                                    <td class="text-center">
                                       <img src="{{asset('/admin/images/product/'.$banner->mobile_img)}}" style="max-height:60px;"  alt="" class="img-fluid">
                                    </td>
                                    <td> <input type="checkbox" checked class="js-switch" data-color="#040619" data-size="small" /></td>
                                    <td>
                                        <button type="button" data-id="{{$banner->id}}" data-title="{{ $banner->title }}" data-img="{{asset('/admin/images/product/'.$banner->banner_img)}}" data-route="{{route('updatebanner')}}"  data-actor="edit" class="btn btn-danger shadow-none modal_on">
                                            <i class="fa fa-edit vm"></i>
                                        </button>
                                       <a href="/click_delete/{{$banner->id}}">
                                        <button type="button" class="btn btn-success shadow-none modal_on">
                                            <i class="fa fa-trash-o vm"></i>
                                        </button>
                                       </a>
                                    </td>
                                </tr>
                                @php
                                $key++;
                            @endphp
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            </div>
            </div>

        </div>


        <div class="modal fade" id="modal">
                            <form action="" id="form_data" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="banner_id">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Add Banner</h4>
                                        <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="form-group text-left">
                                                <label for="recipient-name" class="control-label">Banner Title</label>
                                                <input type="text"  class="form-control shadow-none" id="title" name="bannertitle">
                                            </div>

                                            <div class="form-group text-left">
                                                        <h4 class="card-title">Banner Image</h4>
                                                        <input type="file" id="img" class="dropify" name="banner_image" data-allowed-file-extensions="jpg jpeg png" data-show-remove="false" data-errors-position="outside" />
                                            </div>

                                            <div class="form-group text-left">
                                                        <h4 class="card-title">Mobile Image</h4>
                                                        <input type="file" id="img" class="dropify" name="mobile_image" data-allowed-file-extensions="jpg jpeg png" data-show-remove="false" data-errors-position="outside"  />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success change_btn">Add Banner</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
@endsection
@section('js')


<script>

    $('.dropify').dropify();
     $('#myTable').DataTable();
     $(".select2").select2();
     var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

$(document).on('click', ".modal_on", function () {
    var actor = $(this).data('actor');
    if (actor == 'add') {
        var route = $(this).data('route');
        $('.dropify-preview').hide();
        $('#title').val('');
        $('.change_btn').text("Add Banner");
        $('#form_data').attr("action" , route);
        $("#modal").modal('show');
    }
     else if (actor == 'edit') {
        var id = $(this).data('id');
        var title = $(this).data('title');
        var image = $(this).data('img');
        var route = $(this).data('route');

        $('#banner_id').val(id);
        $('.dropify-render').html('<img src="" />');
        var image1 = $('.dropify-render img').attr('src', image);
        $('.dropify-preview').show();
        // image1 == image;
        $('.change_btn').text("Update Banner");
        $('#title').val(title);
        $('#form_data').attr("action" , route);
        $("#modal").modal('show');
    }
});


// $('close_btn').click(function() {
//     $('.dropify-preview').hide();
//     $('.title').text('');
// });

</script>

@endsection

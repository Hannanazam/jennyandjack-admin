@extends('admin.layout')
@section('content')

{{-- <style>
    .dropdown-toggle::after{
        display: none;
    }
</style> --}}

        <div class="page-wrapper">
            <div class="container-fluid">
                @if (Session::has('errors'))
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
            <div class="container-fluid">
                <div class="row page-titles flex-nowrap-sm">
                    <div class="col-md-5 align-self-center px-0">
                        {{-- <h3 class="text-themecolor">Subscriber</h3> --}}
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Subscriber</li>
                        </ol>
                    </div>
                    {{-- <div class="col-md-7 align-self-center text-right d-md-block">
                        <div class="button-box">
                            <button type="button" class="btn btn-success modal_on" data-actor="add" data-route="{{route('bannerimages')}}" ><i class="fa fa-plus-circle"></i> Add New</button>
                        </div>

                    </div> --}}
                </div>
            </div>

            <div class="card">
                <div class="card-body border_main border_main_r">
                    <h4 class="card-title">Subscribers</h4>
                    <div class="table-responsive m-t-10">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $key=>$subscriber)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$subscriber->subscriber_email}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success px-3 py-1 dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{-- <i class="fa fa-ellipsis-v"></i> --}}
                                                Active
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Active</a>
                                                <a class="dropdown-item" href="#">Not Active</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            </div>
            </div>

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

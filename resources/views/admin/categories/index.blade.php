@extends('admin.layout')
@section('content')

<style>
    .modal.show .modal-dialog{
        transform: translate(0,30%);
    }
</style>

        <div class="page-wrapper">
            <div class="container-fluid">
            <div class="container-fluid">
                <div class="row page-titles flex-nowrap-sm">
                    <div class="col-md-5 align-self-center px-0">
                        {{-- <h3 class="text-themecolor">Products Edit</h3> --}}
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Products Edit</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-md-block">
                        <div class="button-box">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle"></i> Add New</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Add Category</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group text-left">
                                                <label for="recipient-name" class="control-label">Product Title</label>
                                                <input type="text" class="form-control shadow-none" id="recipient-name1">
                                            </div>
                                            <div class="form-group text-left">
                                                <label for="message-text" class="control-label">Product Category</label>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:46px;">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Add Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body border_main">
                    <h4 class="card-title">Edit Product</h4>
                    <div class="table-responsive m-t-10">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Parent Category</th>
                                    <th>Child Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Chiffon</td>
                                    <td>
                                        <span class="badge badge-info">Qadir</span>
                                    </td>
                                    <td> <input type="checkbox" checked class="js-switch" data-color="#040619" data-size="small" /></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success shadow-none">
                                            <i class="fa fa-edit vm"></i>
                                        </button>
                                    </td>
                                </tr>


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
     $('#myTable').DataTable();
     $(".select2").select2();
     var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

</script>

@endsection

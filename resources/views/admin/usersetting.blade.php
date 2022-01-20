@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center px-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Admins Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info-theme">
                            <h4 class="m-b-0 text-white">Edit Admins</h4>
                        </div>
                        <div class="card-body border_main">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-body">

                                    <div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Admins Name</label>
                                                <input type="text" id="name" class="form-control shadow-none" name="Admins Name" value="admin">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Admins Email</label>
                                                <input type="email" id="email" class="form-control shadow-none" name="email" value="admin@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Admins Password</label>
                                                <input type="text" id="password" class="form-control shadow-none" name="password" value="123">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-actions float-right">
                                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Update</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')


@endsection

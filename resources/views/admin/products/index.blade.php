@extends('admin.layout')
@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center px-0">
                        {{-- <h3 class="text-themecolor">Products Edit</h3> --}}
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Products Edit</li>
                        </ol>
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
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Sizes</th>
                                    <th>Price</th>
                                    <th>Discounted Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=>$product)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        <img class="card_img_top" style="width: 60%" src="{{asset('/admin/images/products/'.$product->featured_image)}}" data-org="{{asset('/admin/images/products/'.$product->hover_image)}}" data-img="{{asset('/admin/images/products/'.$product->featured_image)}}"
                                        alt="">
                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td><span class="badge badge-info">Chiffon</span></td>
                                    <td><span class="badge badge-info">S</span></td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discounted_price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                        {{-- <div class="switchery-demo m-b-30">
                                            <input type="checkbox" checked class="js-switch" data-color="#040619" data-size="small" />
                                        </div> --}}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Active
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Active</a>
                                                <a class="dropdown-item" href="#">Deactive</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle shadow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
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
     $('#myTable').DataTable();
     var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        // $('.js-switch').each(function() {
        //     new Switchery($(this)[0], $(this).data());
        // });




</script>

@endsection

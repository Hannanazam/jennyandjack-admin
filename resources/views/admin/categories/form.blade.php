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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">{{$title}} Add</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-info-theme">
                            <h4 class="m-b-0 text-white">Add {{$title}}</h4>
                        </div>
                        <div class="card-body border_main">
                            <form method="POST" id="productform" action="{{route('product.add.submit')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Title</label>
                                                <input type="text" id="title" class="form-control shadow-none" name="title" placeholder="Enter Heading...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> SKU</label>
                                                <input type="text" id="sku" class="form-control shadow-none" name="sku" placeholder="Enter SKU">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Price</label>
                                                <input type="number" id="price" class="form-control shadow-none" name="price" placeholder="Enter SKU">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Discounted Price</label>
                                                <input type="number" id="dprice" class="form-control shadow-none" name="discounted_price" placeholder="Enter SKU">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Select Size Variation</label>
                                                <select class="select2 m-b-10 select2-multiple select-variation" style="width: 100%" multiple="multiple" name="variations[]" data-placeholder="Choose">
                                                    <optgroup>
                                                        @foreach (App\Models\Variation::get() as $variation)
                                                            <option value="{{$variation->id}}">{{$variation->name}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="variationsection">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>VARIATION</th>
                                                    <th>SKU</th>
                                                    <th>QUANTITY</th>
                                                </thead>
                                                <tbody id="variationarea">

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <h4 class="card-title">Select Categories</h4>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Parent Category</label>
                                                        <select class="select2 m-b-10 select2-multiple select-category" name="categories[]" style="width: 100%" multiple="multiple" data-placeholder="Select Parent Category">
                                                            <optgroup>
                                                            @foreach (App\Models\Category::where('parent_id',NULL)->get() as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="categorysection">
                                            </div>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card p-0">
                                                <div class="card-body">
                                                    <h4 class="card-title">Upload Feature Image</h4>
                                                    <input type="file" id="input-file-now" class="dropify" name="featured_image" data-allowed-file-extensions="jpg jpeg png" data-show-remove="false" data-errors-position="outside"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card p-0">
                                                <div class="card-body">
                                                    <h4 class="card-title">Upload Hover Image</h4>
                                                    <input type="file" id="input-file-now" class="dropify" name="hover_image" data-allowed-file-extensions="jpg jpeg png" data-show-remove="false" data-errors-position="outside"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card p-0">
                                                <div class="card-body">
                                                    <h4 class="card-title">Size Chart Image</h4>
                                                    <input type="file" id="input-file-now" class="dropify" name="size_chart" data-allowed-file-extensions="jpg jpeg png" data-show-remove="false" data-errors-position="outside"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="form-label">Gallery Images</label><br>
                                                        <div class="input-images"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <h4 class="card-title mb-4">Description</h4>
                                                        <textarea name="description" id="ckeditor" class="form-control" placeholder="Enter Description.." required cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-actions float-right">
                                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Create</button>
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

<script>

    $("#variationsection").hide();
    $("#categorysection").hide();

    $(".select-variation").change(function(){
        $.ajax({
    		   type:"POST",
    		   url:'{{ route('product.variations.submit') }}',
    		   data:$('#productform').serialize(),
    		   success: function(data){
    			$("#variationarea").html(data);
                $("#variationsection").show();
    		   }
    	    });
    });
    $(".select-category").change(function(){
        $.ajax({
    		   type:"POST",
    		   url:'{{ route('product.categories.submit') }}',
    		   data:$('#productform').serialize(),
    		   success: function(data){
    			$("#categorysection").html(data);
                $("#categorysection").show();
    		   }
    	    });
    });

    $(".hidden").hide();
    $(".trigger").change(function() {
        var hiddenId = $(this).attr("data-trigger");
        if ($(this).is(':checked')) {
        $("#" + hiddenId).show();
        } else {
            $("#" + hiddenId).hide();
        }
    });

    $(".select2").select2();
    $('.selectpicker').selectpicker();
    $('.dropify').dropify();
    $('.input-images').imageUploader({
    label: 'Drag & Drop files here or click to browse',
    imagesInputName: 'galleryimages',
    });
</script>

@endsection

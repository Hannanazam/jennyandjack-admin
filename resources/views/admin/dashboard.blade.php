@extends('admin.layout')
@section('content')

<div class="page-wrapper">
<div class="container-fluid">
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

<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex p-10 no-block">
                    <div class="align-slef-center">
                        <h2 class="m-b-0">234</h2>
                        <h6 class="text-muted m-b-0">Products</h6>
                    </div>
                    <div class="align-self-center display-6 ml-auto"><i class="text-success fa fa-product-hunt"></i></div>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex p-10 no-block">
                    <div class="align-slef-center">
                        <h2 class="m-b-0">33</h2>
                        <h6 class="text-muted m-b-0">Categories</h6>
                    </div>
                    <div class="align-self-center display-6 ml-auto"><i class="text-danger fa fa-columns"></i></div>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex p-10 no-block">
                    <div class="align-slef-center">
                        <h2 class="m-b-0">12</h2>
                        <h6 class="text-muted m-b-0">Orders</h6>
                    </div>
                    <div class="align-self-center display-6 ml-auto"><i class="text-primary icon-Shopping-Cart"></i></div>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex p-10 no-block">
                    <div class="align-slef-center">
                        <h2 class="m-b-0">38</h2>
                        <h6 class="text-muted m-b-0">Customers</h6>
                    </div>
                    <div class="align-self-center display-6 ml-auto"><i class="text-info icon-User"></i></div>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
</div>

<div class="card">
        <div class="col-lg-12">
            <div class="card-body calender-sidebar">
                <div id="calendar2"></div>
            </div>
        </div>
</div>

</div>
</div>


@endsection
@section('js')
<script>
    $('#calendar2').fullCalendar({
        defaultDate: new Date(),
    });
    var calendar = new FullCalendar.Calendar(calendarEl, {
      themeSystem: 'standstone',
      timeZone: 'UTC',
    });

    </script>
@endsection

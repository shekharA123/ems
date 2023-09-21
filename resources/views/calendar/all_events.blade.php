@extends('admin_dashboard')
@section('admin')

<head>
    <!-- Other head elements -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">




                </div>
            </div>
        </div>
        <!-- end page title -->

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<center>
    <h1 class="card-title">EVENT ALL DATA </h1>


    <table id="datatable"  class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 50%;">
        <thead>
        <tr>
            <th class="btn btn-info btn-block btn-custom">Sl</th>
            <th >Event Name</th>
            <th >Start Date</th>
            <th >End Date</th>
            <th >Actions</th>
        </tr>

        </thead>


        <tbody>
            @php($i = 1)
            @foreach($event as $item)
        <tr>

            <td> {{ $i++}} </td>
            <td> {{ $item->title }} </td>
            <td> {{ $item->start }} </td>
            <td> {{ $item->end }} </td>

            <td>
                <a href="{{ route('event.edit',['id'=>$item->id]) }}"><button  class="btn btn-info btn-block btn-custom">Edit</button></a>
                <a href="{{ route('deleteEvent',$item->id) }}" ><button  class="btn btn-info btn-block btn-custom"> deletet</button></a>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
    <br>
    <br>
    <a href="{{ route('getevent') }}"><button   class="btn btn-info btn-block btn-custom">return Calander</button></a>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div> <!-- container-fluid -->
</div>

</center>

@endsection

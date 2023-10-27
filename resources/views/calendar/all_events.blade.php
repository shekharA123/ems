@extends('admin_dashboard')
@section('admin')

<head>
    <!-- Other head elements -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
</head>
<div class="page-content mt-2">
<div class="container-fluid">

        <!-- start page title -->
    
        <!-- end page title -->
        <!-- id="basic-datatable" -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<center>
    <h1 class="card-title">EVENT ALL DATA </h1>
    <table  class=" table-striped">
        <thead>
        <tr>
    <th class="btn btn-info btn-block btn-custom">Sl</th>
    <th>Event Name</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Interview Link</th>
    <th>Candidate Profile</th>
    <th>Candidate Name</th>
    <th>Interpersonal Skills</th>
    <th>Communication Skills</th>
    <th>Problem Solving</th>
    <th>HR Profile</th>
    <th>HR Name</th>
    <th>HR EmailID</th>
    <th>Instruction</th>
    <th>Actions</th>
</tr>
</thead>
<hr>

<tbody>
    @php($i = 1)
    @foreach($event as $item)
    <tr >
        <td>{{ $i++ }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->start }}</td>
        <td>{{ $item->end }}</td>
        <td>{{ $item->link_url }}</td>
        <!-- <td><a href="$item->link_url"></a></td> -->
        <td> <img src="{{ asset($item->candidate_profile) }}" style="width:50px; height: 40px;"> </td>
        <td>{{ $item->candidate_name }}</td>
        <td>{{ $item->interpersonal_skill }}</td>
        <td>{{ $item->communication_skill }}</td>
        <td>{{ $item->problem_sovling }}</td>
        <td> <img src="{{ asset($item->hr_profile) }}" style="width:50px; height: 40px;"> </td>
        <td>{{ $item->hr_name }}</td>
        <td>{{ $item->hr_email }}</td>
        <td>{{ $item->instruction }}</td>
        <td>
            <a href="{{ route('event.edit',['id'=>$item->id]) }}">
                <button class="btn btn-info btn-block btn-custom">Edit</button>
            </a>
            <br>
            <a href="{{ route('deleteEvent', $item->id) }}">
                <button class="btn btn-info btn-block btn-custom">Delete</button>
            </a>
        </td>
    </tr>
    @endforeach
</tbody>


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

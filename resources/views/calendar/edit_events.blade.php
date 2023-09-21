@extends('layouts.app')

@section('content')
<center>
<div class="page-content">
    <div class="container-fluid">
        <div class="row justify-content-center"> <!-- Center content -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Edit Event</h4>

                        <form method="post" action="{{ route('event.update', $event->id) }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Event Name</label>
                                <input name="event" class="form-control" type="text" value="{{ $event->title }}" id="example-text-input">
                      
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Start Date</label>
                                <input name="start" class="form-control" type="datetime-local" value="{{ $event->start }}" id="example-start-input">


                            </div>

                            <div class="mb-3">
                                <label class="form-label">End Date</label>
                                <input name="end" class="form-control" type="datetime-local" value="{{ $event->end }}" id="example-end-input">

                            </div><br>

                            <div class="d-grid gap-2">
                                <input type="submit" class="btn btn-info btn-block" style="background-color: #337ab7;color: white; border-color: #337ab7;"value="Update"> <!-- Styling for Update button -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection

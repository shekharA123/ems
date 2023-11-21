@extends('admin_dashboard')
@section('admin')

<center>
<div class="page-content">
    <div class="container-fluid">
        <div class="row justify-content-center"> <!-- Center content -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Edit Event</h4>

                        <form method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Appointment Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $event->title }}">
                    @error('title')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Start Event</label>
                    <input type="text" name="start" class="form-control @error('start') is-invalid @enderror" value="{{ $event->start }}">
                    @error('start')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">End Event</label>
                    <input type="text" name="end" class="form-control @error('end') is-invalid @enderror" value="{{ $event->end }}">
                    @error('end')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Interview Call Link</label>
                    <input name="link_url" class="form-control @error('link_url') is-invalid @enderror" type="url" value="{{ $event->link_url }}">
                    @error('link_url')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Candidate Profile</label>
                    <input name="candidate_profile"
                      class="form-control @error('candidate_profile') is-invalid @enderror" type="file" id="image" value="{{ $event->candidate_profile }}">
                    @error('candidate_profile')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="example-fileinput" class="form-label"> </label>
                      <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle"
                        style="width:100px" alt="profile-image">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Candidate Name</label>
                    <input name="candidate_name" class="form-control @error('candidate_name') is-invalid @enderror"
                      type="text" value="{{ $event->candidate_name }}">
                    @error('candidate_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <div class="card">
                      <div class="card-body">
                        <p>Score Card</p>
                        <hr>
                        <h5>Interpesronal Skills</h5>
                        <div class="mb-3">
                          <input name="interpersonal_skill"
                            class="form-control @error('interpersonal_skill') is-invalid @enderror" type="text"
                            id="example-text-input" style="border:none" value="{{ $event->interpersonal_skill }}">
                          @error('interpersonal_skill')
                          <span class="text-danger"> {{ $message }} </span>
                          @enderror
                        </div>
                        <hr>
                        <h5>Communication Skills</h5>
                        <div class="mb-3">
                          <input name="communication_skill"
                            class="form-control @error('communication_skill') is-invalid @enderror" type="text"
                            id="example-text-input" style="border:none" value="{{ $event->communication_skill }}">
                          @error('communication_skill')
                          <span class="text-danger"> {{ $message }} </span>
                          @enderror
                        </div>
                        <hr>
                        <h5>Problem solving</h5>
                        <div class="mb-3">
                          <input name="problem_sovling"
                            class="form-control @error('problem_sovling') is-invalid @enderror" type="text"
                            id="example-text-input" style="border:none" value="{{ $event->problem_sovling }}">
                          @error('problem_sovling')
                          <span class="text-danger"> {{ $message }} </span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">HR Profile</label>
                    <input name="hr_profile" class="form-control @error('hr_profile') is-invalid @enderror" type="file"
                      id="image2" value="{{ $event->hr_profile }}">
                    @error('hr_profile')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="example-fileinput" class="form-label"> </label>
                    <img id="showImage2" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle"
                      style="width:100px" alt="profile-image">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">HR Name</label>
                  <input name="hr_name" class="form-control @error('hr_name') is-invalid @enderror" type="text" value="{{ $event->hr_name }}">
                  @error('hr_name')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label"> HR Email ID</label>
                  <input name="hr_email" class="form-control @error('hr_email') is-invalid @enderror" type="email" value="{{ $event->hr_email }}">
                  @error('hr_email')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <hr>
                <div class="mb-3">
                  <label class="form-label">Instruction</label>
                  <input name="instruction" class="form-control @error('instruction') is-invalid @enderror" type="text"
                    id="example-text-input" value="{{ $event->instruction }}">
                  @error('instruction')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <button type="submit"  class="btn btn-info waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>Update</button>
              </div>
            </div>
          </div>



                    

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection

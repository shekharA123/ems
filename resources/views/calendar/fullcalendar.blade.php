<!-- Other head elements -->

<title>Laravel 9 Fullcalandar Jquery Ajax Create and Delete Event </title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<!-- bootstrap css and js -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
<link href="{{ asset('vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />


<style>
  .recruitment {
    color: #9099AD;
    font-family: Inter;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }
</style>

</head>
<center>
  <div style="text-align: right;">
    <button class="btn btn-red" onclick="goToAllEvents()">
      <i class="ri-account-circle-line"></i>
      <span>All events</span>
    </button>
  </div>
</center>
<script>
  function goToAllEvents() {
    // Replace 'route-url' with the actual URL of the 'allevents' route
    var routeURL = 'allevent';
    window.location.href = routeURL;
  }
</script>

<body>
  <form method="post" action="{{ route('calendar.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <h2>Calendar</h2>
          <div id="calendar">
          </div>
          <!-- Modal -->
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
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Start Event</label>
                    <input type="text" name="start" class="form-control @error('start') is-invalid @enderror">
                    @error('start')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">End Event</label>
                    <input type="text" name="end" class="form-control @error('end') is-invalid @enderror">
                    @error('end')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Interview Call Link</label>
                    <input name="link_url" class="form-control @error('link_url') is-invalid @enderror" type="url">
                    @error('link_url')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Candidate Profile</label>
                    <input name="candidate_profile"
                      class="form-control @error('candidate_profile') is-invalid @enderror" type="file" id="image">
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
                      type="text">
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
                            id="example-text-input" style="border:none">
                          @error('interpersonal_skill')
                          <span class="text-danger"> {{ $message }} </span>
                          @enderror
                        </div>
                        <hr>
                        <h5>Communication Skills</h5>
                        <div class="mb-3">
                          <input name="communication_skill"
                            class="form-control @error('communication_skill') is-invalid @enderror" type="text"
                            id="example-text-input" style="border:none">
                          @error('communication_skill')
                          <span class="text-danger"> {{ $message }} </span>
                          @enderror
                        </div>
                        <hr>
                        <h5>Problem solving</h5>
                        <div class="mb-3">
                          <input name="problem_sovling"
                            class="form-control @error('problem_sovling') is-invalid @enderror" type="text"
                            id="example-text-input" style="border:none">
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
                      id="image2">
                    @error('hr_profile')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="example-fileinput" class="form-label"> </label>
                    <img id="showImage2" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle"
                      style="width:100px" alt="profile-image">
                  </div>
               
                <div class="mb-3">
                  <label class="form-label">HR Name</label>
                  <input name="hr_name" class="form-control @error('hr_name') is-invalid @enderror" type="text">
                  @error('hr_name')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label"> HR Email ID</label>
                  <input name="hr_email" class="form-control @error('hr_email') is-invalid @enderror" type="email">
                  @error('hr_email')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <hr>
                <div class="mb-3">
                  <label class="form-label">Instruction</label>
                  <input name="instruction" class="form-control @error('instruction') is-invalid @enderror" type="text"
                    id="example-text-input" value="">
                  @error('instruction')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <button type="submit" id="showAlertButton" class="btn btn-success waves-effect waves-light mt-2"><i
                    class="mdi mdi-content-save"></i> Save</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>

<script type="text/javascript">

  $(document).ready(function () {
    $('#image').change(function (e) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
  $(document).ready(function () {
    $('#image2').change(function (e) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#showImage2').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
<script>
   $(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      navLinks: true,
      editable: true,
      events: "getevent",
      displayEventTime: false,
      eventRender: function (event, element, view,link_url) {
        var formattedStart = moment(event.start);
        var formattedEnd = moment(event.end);
        if (event.allDay === 'true') {
          event.allDay = true;
        } else {
          event.allDay = false;
        }
      },
      selectable: true,
      selectHelper: true,
      select: function () {
        $('#basicExampleModal').modal('toggle');
      }
    });
  });
</script>
<script>
$(document).ready(function () {
  $('#showAlertButton').on('click', function () {
    alert('You want to Insert Appointment Details');
  });
});
</script>
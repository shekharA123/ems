<!-- Other head elements -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
    View Demo
  </button>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Calendar</h2>
        <div id="calendar"></div>
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
                  <input name="title" class="form-control" type="text" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label">Start Event</label>
                  <input name="link_url" class="form-control" type="text" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label">End Event</label>
                  <input name="link_url" class="form-control" type="text" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label">Interview Call Link</label>
                  <input name="link_url" class="form-control" type="url" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label">Candidate Profile</label>
                  <input name="link_url" class="form-control" type="file" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label">Candidate Name</label>
                  <input name="link_url" class="form-control" type="text" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <div class="card">
                    <div class="card-body">
                      <p>Score Card</p>
                      <hr>
                      <h5>Interpesronal Skills</h5>
                      <div class="mb-3">
                        <input name="link_url" class="form-control" type="text" value=" onle temporiely"
                          id="example-text-input" style="border:none">
                      </div>
                      <hr>
                      <h5>Communication Skills</h5>
                      <div class="mb-3">
                        <input name="link_url" class="form-control" type="text" value=" onle temporiely"
                          id="example-text-input" style="border:none">
                      </div>
                      <hr>
                      <h5>Problem solving</h5>
                      <div class="mb-3">
                        <input name="link_url" class="form-control" type="text" value=" onle temporiely"
                          id="example-text-input" style="border:none">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">HR Profile</label>
                  <input name="link_url" class="form-control" type="file" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label">HR Name</label>
                  <input name="link_url" class="form-control" type="url" value="" id="example-text-input">
                </div>
                <div class="mb-3">
                  <label class="form-label"> HR Email ID</label>
                  <input name="link_url" class="form-control" type="email" value="" id="example-text-input">
                </div>
                <hr>
                <div class="mb-3">
                  <label class="form-label">Instruction</label>
                  <input name="link_url" class="form-control" type="url" value="" id="example-text-input">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Details</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>

  // $('#calendar').fullCalendar({
  //     header: {
  //         left: 'prev,next today',
  //         center: 'title',
  //         right: 'month,agendaWeek,agendaDay,listWeek'
  //     },
  //     defaultDate: '2018-11-16',
  //     navLinks: true,
  //     eventLimit: true,
  //     events: [{
  //             title: 'Front-End Conference',
  //             start: '2018-11-16',
  //             end: '2018-11-18'
  //         },
  //         {
  //             title: 'Hair stylist with Mike',
  //             start: '2018-11-20',
  //             allDay: true
  //         },
  //         {
  //             title: 'Car mechanic',
  //             start: '2018-11-14T09:00:00',
  //             end: '2018-11-14T11:00:00'
  //         },
  //         {
  //             title: 'Dinner with Mike',
  //             start: '2018-11-21T19:00:00',
  //             end: '2018-11-21T22:00:00'
  //         },
  //         {
  //             title: 'Chillout',
  //             start: '2018-11-15',
  //             allDay: true
  //         },
  //         {
  //             title: 'Vacation',
  //             start: '2018-11-23',
  //             end: '2018-11-29'
  //         },
  //     ]
  // });

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
      eventRender: function (event, element, view) {
        if (event.allDay === 'true') {
          event.allDay = true;
        } else {
          event.allDay = false;
        }
      },
      selectable: true,
      selectHelper: true,
      select: function (start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD');
          var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD');
          $.ajax({
            url: "{{ URL::to('createevent') }}",
            data: 'title=' + title + '&start=' + start + '&end=' + end + '&_token=' + "{{ csrf_token() }}",
            type: "post",
            success: function (data) {
              alert("Added Successfully");
              $('#calendar').fullCalendar('refetchEvents');
            }
          });
        }
      },

    });
  });
</script>
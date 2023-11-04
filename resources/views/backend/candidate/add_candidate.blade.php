@extends('admin_dashboard')
@section('admin')
<html>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
<head>
    <style>
*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0px;
    flex-shrink: 0;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}



    </style>
</head>
 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ad Employee</a></li>
                                            
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">Add Candidate</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

<div class="row">
    

  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">
                                    
                                      
                                         
                                           

    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
        <form method="post" action="{{ route('store.candidate') }}" enctype="multipart/form-data">
        	@csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Candidate</h5>

            <div class="row">

 
    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Candidate Name</label>
            <input type="text" name="candidate_name" class="form-control @error('candidate_name') is-invalid @enderror"   >
              @error('candidate_name')
      <span class="text-danger"> {{ $message }} </span>
            @enderror 
        </div>
    </div>


               <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Candidate Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"   >
             @error('email')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div> 




              <!-- <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employee Phone    </label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"   >
             @error('phone')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div> -->


    
   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label">Candidate Image</label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
          @error('image')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
    </div>
 </div>   <!--end col -->


    <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label"> </label>
        <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    </div>
 </div>   <!--end col -->

    
    <!-- <label for="rating">Rate this candidate:</label><br>
 <div class="star-rating"> 
    <input type="radio" id="rating1" name="rating" value="1">
    <label for="rating1"></label>
    <input type="radio" id="rating2" name="rating" value="2">
    <label for="rating2"></label>
    <input type="radio" id="rating3" name="rating" value="3">
    <label for="rating3"></label>
    <input type="radio" id="rating4" name="rating" value="4">
    <label for="rating4"></label>
    <input type="radio" id="rating5" name="rating" value="5">
    <label for="rating5"></label>
</div> -->

<div class="col-md-6">
        <div class="mb-3">
<label for="rate">Rate this candidate:</label><br>
<div class="rate">
    <input type="radio" id="star5" name="rating" value="5.0" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4.0" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3.0" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2.0" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1.0" />
    <label for="star1" title="text">1 star</label>
  </div>
</div>
</div>
      <!-- <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employee Address    </label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"   >
             @error('address')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div> -->



      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Candidate stage    </label>
           <select name="stages" class="form-select @error('stages') is-invalid @enderror" id="example-select">
                    <option selected disabled >Select stage </option>
                    <option value="New Applied" name="stages">New Applied</option>
                    <option value="Screening" name="stages">Screening</option>
                    <option value="Design challenge" name="stages">Design challenge</option>
                    <option value="Interview" name="stages">Interview</option>
                    <option value="Test" name="stages">Test</option>
                    <option value="Hired" name="stages">Hired</option>
                </select>
                 @error('stages')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
         
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Applied Date</label>
            <input type="date" name="applied_date" class="form-control @error('applied_date') is-invalid @enderror" >  
              @error('applied_date')
      <span class="text-danger"> {{ $message }} </span>
            @enderror 
        </div>
    </div>


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Add Owner</label>
            <input type="text" name="owner" class="form-control @error('owner') is-invalid @enderror"   >
              @error('owner')
      <span class="text-danger"> {{ $message }} </span>
            @enderror 
        </div>
    </div>
 <!-- <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employee Salary    </label>
            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror"   >
             @error('salary')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div> -->

     <!-- <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employee Vacation    </label>
            <input type="text" name="vacation" class="form-control @error('vacation') is-invalid @enderror"   >
             @error('vacation')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div> -->


     <!-- <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employee City    </label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"   >
             @error('city')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div> -->




   <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label">Owner Image</label>
        <input type="file" name="owner_image" id="image2" class="form-control @error('owner_image') is-invalid @enderror">
          @error('owner_image')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
    </div>
 </div>   <!--end col -->


    <div class="col-md-12">
<div class="mb-3">
        <label for="example-fileinput" class="form-label"> </label>
        <img id="showImage2" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    </div>
 </div>   <!--end col -->



            </div> <!-- end row -->
 
        
            
            <div class="text-start">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
            </div>
        </form>
    </div>
    <!-- end settings content-->

   
                   
                                       
                                    </div>
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->



<script type="text/javascript">
	
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

    $(document).ready(function(){
		$('#image2').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage2').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

</script>




</html>


@endsection
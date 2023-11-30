@extends('admin_dashboard')
@section('admin')

<head>
<script src= 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'> </script>  
   <script src= 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'> </script>
    
    <style>
       .nav-link{
        width: 70px;
        height: 19px;
        flex-shrink: 0;
        color: #000;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        text-transform: uppercase;
    
} 
     .ms-2{
      color: #000;
      
}
.card-bodyyy{
    color: #000;
    width: 1199.661px;
height: 277.056px;
flex-shrink: 0;
border: 1px solid rgba(0, 0, 0, 0.30);
}
#card-details{
    color: #000;
    text-align: left; 
    
}
.card-bodyyy-2{
    color: #000;
    width: 1199.661px;
height: 277.056px;
flex-shrink: 0;
border: 1px solid rgba(0, 0, 0, 0.30);
}
#card-notes{
    color: #000;
    text-align: left; 
}
.heading{
    color: #000;
font-family: Inter;
font-size: 16px;
font-style: normal;
font-weight: 700;
line-height: normal;
width: 54.003px;
height: 17px;
flex-shrink: 0;
}
#form { 
	text-align: center; 
	position: relative; 
	margin-top: 20px
} 

#form fieldset { 
	background: white; 
	border: 0 none; 
	border-radius: 0.5rem; 
	box-sizing: border-box; 
	width: 100%; 
	margin: 0; 
	padding-bottom: 20px; 
	position: relative
} 

.finish { 
	text-align: center
} 

#form fieldset:not(:first-of-type) { 
	display: none
} 

#form .previous-step, .next-step { 
	width: 100px; 
	font-weight: bold; 
	color: white; 
	border: 1px solid #688F8C; 
	border-radius: 0px; 
	cursor: pointer; 
	padding: 10px 5px; 
	margin: 10px 5px 10px 0px; 
	float: left
    
} 

.form, .previous-step { 
	background: #616161; 
} 

.form, .next-step { 
	background: #688F8C; 
    border: 1px solid #688F8C;
    display: flex;
width: 111.382px;
height: 38.051px;
padding: 10px;
justify-content: center;
align-items: center;
gap: 10px;
flex-shrink: 0;
} 

#form .previous-step:hover, 
#form .previous-step:focus { 
	background-color: #000000
} 

#form .next-step:hover, 
#form .next-step:focus { 
	background-color: #00000
} 

.text { 
	color: #2F8D46; 
	font-weight: normal
} 

#progressbar { 
	margin-bottom: 30px; 
	overflow: hidden; 
	color: lightgrey 
} 

#progressbar .active { 
	color: #FEC37E
} 

#progressbar li { 
	list-style-type: none; 
	font-size: 15px; 
	width: 18%; 
	float: left; 
	position: relative; 
	font-weight: 400
} 

#progressbar #step1:before { 
	content: "Screening"
} 

#progressbar #step2:before { 
	content: "Design Challenge"
} 

#progressbar #step3:before { 
	content: "Interview"
} 

#progressbar #step4:before { 
	content: "Test"
} #progressbar #step5:before { 
	content: "Hired"
} 

#progressbar li:before { 
	 width: 200px; /*  width: 118px; */
    height: 50px;  /*  height: 38.969px; */
	 flex-shrink: 0; 
	line-height: 45px; 
	display: block; 
	font-size: 20px; 
	color: #ffffff; 
	background: lightgray; 
	border-radius: 50%; 
	margin: 0 auto 10px auto; 
	padding: 2px
} 

#progressbar li:after { 
	content: ''; 
	width: 100%; 
	height: 2px; 
	background: lightgray; 
	position: absolute; 
	left: 0; 
	top: 25px; 
	z-index: -1
} 

#progressbar li.active:before{
    background: #FEC37E
}
#progressbar li.active:after { 
	background:#FF8E00
} 

        
    
    </style>
</head>
@foreach($candidate as $key=> $item)
<div class="row" ><div class="col-lg-8 col-xl-12">
<div class="col-lg-4" style="width: 1500px; height: 166px; flex-shrink: 0; background-color: #E6EDED;">
                                <div class="card m-b-30 bg-light"  >
                                    <div class="card-body bg-light">

                                        <div class="d-flex align-items-center" style="width:450px;">
                                            <img  class="d-flex me-3 rounded-circle img-thumbnail avatar-lg" src="{{ asset($item->image) }}"  alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                 <!-- <h5 class="mt-0 font-size-18 mb-1">Pauline </h5>  -->
                                                <!-- <p class="text-muted font-size-14">UI Designer</p>  -->
                                                
                                                <div class="text-start mt-3" >
                    
                     
                    <p class=" mb-2 font-13"><strong> Name :</strong> <span class="ms-2" style="color: #000;">{{ $item->candidate_name }}</span></p>
                
                    <!-- <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ms-2">{{ $item->phone }}</span></p> -->
                
                    <p class=" mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $item->email }}</span></p>
                
                 
                </div> 
                                              <!-- <ul class="social-links list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a role="button" class="text-reset" title="" data-bs-placement="top" data-bs-toggle="tooltip" href="" data-bs-original-title="Facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a role="button" class="text-reset" title="" data-bs-placement="top" data-bs-toggle="tooltip" href="" data-bs-original-title="Twitter" aria-label="Twitter"><i class=" fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a role="button" class="text-reset" title="" data-bs-placement="top" data-bs-toggle="tooltip" href="" data-bs-original-title="1234567890" aria-label="1234567890"><i class="fas fa-phone-alt"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a role="button" class="text-reset" title="" data-bs-placement="top" data-bs-toggle="tooltip" href="" data-bs-original-title="@skypename" aria-label="@skypename"><i class="fab fa-skype"></i></a>
                                                    </li>  
                                                </ul>  -->
                                                <button type="button" class="btn btn-outline-success waves-effect waves-light" style="margin-left:8px;">Active</button> 
                                                   <button type="button" class="btn btn- btn-xs waves-effect mb-2 waves-light" style="background: #FFF;" >
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M2.2 6.5125H6.50375V5.7625H2.2V6.5125ZM2.2 4.8875H8.8V4.1375H2.2V4.8875ZM2.2 3.2625H8.8V2.5125H2.2V3.2625ZM0 10.5V1.25C0 1.05 0.0825 0.875 0.2475 0.725C0.4125 0.575 0.605 0.5 0.825 0.5H10.175C10.395 0.5 10.5875 0.575 10.7525 0.725C10.9175 0.875 11 1.05 11 1.25V7.75C11 7.95 10.9175 8.125 10.7525 8.275C10.5875 8.425 10.395 8.5 10.175 8.5H2.2L0 10.5ZM1.8425 7.75H10.175V1.25H0.825V8.75L1.8425 7.75Z" fill="black"/>
                                                     </svg>Send Message</button>
                                                   <button type="button" class="btn btn- btn-xs waves-effect mb-2 waves-light" style="background: #FFF;">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none"><path d="M1.48442 9.68579C1.26442 9.68579 1.07192 9.60142 0.906924 9.43267C0.741924 9.26392 0.659424 9.06704 0.659424 8.84204V1.52954C0.659424 1.30454 0.741924 1.10767 0.906924 0.938916C1.07192 0.770166 1.26442 0.685791 1.48442 0.685791H10.8344C11.0544 0.685791 11.2469 0.770166 11.4119 0.938916C11.5769 1.10767 11.6594 1.30454 11.6594 1.52954V8.84204C11.6594 9.06704 11.5769 9.26392 11.4119 9.43267C11.2469 9.60142 11.0544 9.68579 10.8344 9.68579H1.48442ZM6.15942 5.43892L1.48442 2.30298V8.84204H10.8344V2.30298L6.15942 5.43892ZM6.15942 4.59517L10.7794 1.52954H1.55317L6.15942 4.59517ZM1.48442 2.30298V1.52954V8.84204V2.30298Z" fill="black"/>
                                                     </svg>Send Email</button>
               
                                        </div>
                                            </div> 

                                    </div>
                                </div>
                            </div>
</div>     
</div>

<!-- second card of hiring pipeline -->

                    <div class="card">
                                    <div class="card-body" style="width: 1440px; height: 1024px;">
                                       
                    
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist" id="mytabs">
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="false">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block"  style=" color: #000;">DETAILS</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block" style=" color: #000; ">RESUME</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item" id="hire">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#messages1" role="tab" aria-selected="true" >
                                                    <span class="d-block d-sm-none" ><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block" style="font-weight:700; width: 142px; height: 19px; flex-shrink: 0; color: #000;">HIRING PIPELINE</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block" style=" color: #000; width: 103px; height: 19px; flex-shrink: 0;">INTERVIEWS</span>    
                                                </a>
                                            </li>
                                        </ul>
                                 <div class="tab-content">

                                 
                                        <!-- Tab panes -->
                                        <div class="tab-content p-3" id="hire">
                                        
                                           
	<div class="container2"> 
		<!-- <div class="row justify-content-center">  -->
			<!-- <div class="col-11 col-sm-9 col-md-7  -->
				<!-- col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">  -->
				<!-- <div class="px-0 pt-4 pb-0 mt-3 mb-3">  -->
					<form id="form"> 
						<ul id="progressbar"> 
							 <li class="active" id="step1"> <!--<svg xmlns="http://www.w3.org/2000/svg" width="118" height="39" viewBox="0 0 118 39" fill="none">
                                                              <path d="M0 0H106.739L118 19.4844L106.739 38.9688H0L8.32365 19.4844L0 0Z" fill="#FEC37E"/>
                                                           </svg> -->
								<!-- <strong>Screen</strong>  -->
							</li> 
							<li id="step2">
                                <!-- <strong>Design Challenge</strong -->
                            </li> 
							<li id="step3">
                                <!-- <strong>Interview</strong -->
                           </li> 
							<li id="step4">
                                <!-- <strong>Test</strong> -->
                            </li> 
                            <li id="step5">
                                <!-- <strong>Hired</strong> -->
                            </li> 
						</ul> 
						<!-- <div class="progress"> 
							<div class="progress-bar"></div> 
						</div> <br>  -->
                        
    <div class="card-bodyyy" id="card-details">
        <div class="heading"> Details <hr width="1200px;" color="black" size="3" ></div>
                           <br><br>   <br>        
         Stage : <span class="ms-2">{{ $item->stages }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Owner : <span class="ms-2"><img src="{{ asset($item->owner_image) }}" style="width: 20.359px; height: 21.121px; flex-shrink: 0;">{{ $item->owner }}
                 <br><br>
         Date : <span class="ms-2">{{ $item->applied_date }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  <br>
           <!-- <div class="text-start"><button type="button" class="btn btn-outline-success waves-effect waves-light">Move Next Status</button></div> -->
   

						<fieldset> 
							
							<input type="button" name="next-step"
								class="next-step" value="Move Next Status" /> 
						</fieldset> 
						<fieldset> 
							
							<input type="button" name="next-step"
								class="next-step" value="Move Next Status" /> 
							<!-- <input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />  -->
						</fieldset> 
						<fieldset> 
							
							<input type="button" name="next-step"
								class="next-step" value="Move Next Status" /> 
							<!-- <input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />  -->
						</fieldset> 

                        <fieldset> 
							
							<input type="button" name="next-step"
								class="next-step" value="Move Next Status" /> 
							<!-- <input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />  -->
						</fieldset> 

						<fieldset> 
							<div class="finish"> 
								<!-- <h2 class="text text-center"> 
									<strong>FINISHED</strong> 
								</h2>  -->
							</div> 
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" /> 
                                </fieldset> </div>
					</form> 
				</div> 
			<!-- </div>  -->
		<!-- </div>  -->
	</div> 

	
	<div class="card-bodyyy-2" id="card-notes">
	     <div class="heading"> Notes <hr width="1200px;" color="black" size="3" ></div>
                           <!-- <br><br> -->
						   <div class="card-body p-4">
              <div class="form-outline mb-4">
                <input type="text" id="addANote" class="form-control" placeholder="Type comment...">
                <label class="form-label" for="addANote">+ Add a note</label>
              </div>

              <div class="card mb-4">
                <div class="card-body">
                  <!-- <p>Type your note, and hit enter to add it</p> -->

                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <img src="{{ asset($item->owner_image) }}" alt="avatar" width="25" height="25">
                      <!-- <p class="small mb-0 ms-2">Martha</p> -->
					  {{ $item->owner }}
                    </div>
                    
                  </div>
                </div>
              </div>

        
            </div>
	</div>

	
<!-- <script src="script.js"></script>  -->
<script>
    $(document).ready(function () { 
	var currentGfgStep, nextGfgStep, previousGfgStep; 
	var opacity; 
	var current = 1; 
	var steps = $("fieldset").length; 

	setProgressBar(current); 

	$(".next-step").click(function () { 

		currentGfgStep = $(this).parent(); 
		nextGfgStep = $(this).parent().next(); 

		$("#progressbar li").eq($("fieldset") 
			.index(nextGfgStep)).addClass("active"); 

		nextGfgStep.show(); 
		currentGfgStep.animate({ opacity: 0 }, { 
			step: function (now) { 
				opacity = 1 - now; 

				currentGfgStep.css({ 
					'display': 'none', 
					'position': 'relative'
				}); 
				nextGfgStep.css({ 'opacity': opacity }); 
			}, 
			duration: 500
		}); 
		setProgressBar(++current); 
	}); 

	$(".previous-step").click(function () { 

		currentGfgStep = $(this).parent(); 
		previousGfgStep = $(this).parent().prev(); 

		$("#progressbar li").eq($("fieldset") 
			.index(currentGfgStep)).removeClass("active"); 

		previousGfgStep.show(); 

		currentGfgStep.animate({ opacity: 0 }, { 
			step: function (now) { 
				opacity = 1 - now; 

				currentGfgStep.css({ 
					'display': 'none', 
					'position': 'relative'
				}); 
				previousGfgStep.css({ 'opacity': opacity }); 
			}, 
			duration: 500 
		}); 
		setProgressBar(--current); 
	}); 

	function setProgressBar(currentStep) { 
		var percent = parseFloat(100 / steps) * current; 
		percent = percent.toFixed(); 
		$(".progress-bar") 
			.css("width", percent + "%") 
	} 

	$(".submit").click(function () { 
		return false; 
	}) 
}); 

</script>

                            
                                           
                                           
                                        </div>
                                    </div>
        
                                        
                                    </div>
                                </div>


 





                                @endforeach

@endsection

                                    
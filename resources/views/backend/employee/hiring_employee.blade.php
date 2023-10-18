@extends('admin_dashboard')
@section('admin')
<head>
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
    </style>
</head>
<div class="row" >
<div class="col-lg-4" style="width: 1500px; height: 166px; flex-shrink: 0; background-color: #E6EDED;">
                                <div class="card m-b-30 bg-light"  >
                                    <div class="card-body bg-light">

                                        <div class="d-flex align-items-center" style="width:450px;">
                                            <img  class="d-flex me-3 rounded-circle img-thumbnail avatar-lg" src="backend/assets/images/user1.jpg"  alt="Generic placeholder image">
                                            <div class="flex-grow-1">
                                                 <h5 class="mt-0 font-size-18 mb-1">Pauline </h5> 
                                                <p class="text-muted font-size-14">UI Designer</p> 

                                              <ul class="social-links list-inline mb-0">
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
                                                </ul> 
                                                <button type="button" class="btn btn-outline-success waves-effect waves-light" style="margin-left:8px;">Active</button> 
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
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
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
                                            <li class="nav-item">
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
        
                                        <!-- Tab panes -->
                                        <div class="tab-content p-3 text-muted">
                                            
                                            
                                           
                                           
                                        </div>
        
                                        
                                    </div>
                                </div>





@endsection

                                    
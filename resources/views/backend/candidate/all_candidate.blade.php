@extends('admin_dashboard')
@section('admin')
<style>
    .dropdown-item{
        color: #000;
/* font-family: Inter; */
/* font-size: 8px; */
/* font-style: normal; */
/* font-weight: 700; */
/* line-height: normal; */
    }
</style>
 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                       <!-- <div class="row">
                            <div class="col-12">
                             <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="basic-datatable_length">
                                        <label class="form-label">Show <select name="basic-datatable_length" aria-controls="basic-datatable" class="form-select form-select-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="basic-datatable_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatable"></label>
                                </div>
                            </div>
                        </div> -->


                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
       <a href="{{ route('add.candidate') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Candidate </a>   
                                        </ol>
                                    </div>
                                   
                                    <h4 class="page-title">Candidates</h4> 
                            
                                    <!-- <div class="col-sm-12 col-md-6">
                                        <div class="dt-buttons btn-group flex-wrap">     
                                        <div class="dropdown sub-dropdown"> 
                                             <button type="button" class="btn btn-outline-light waves-effect">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                     <path d="M7.15893 15.1334C6.87614 15.1334 6.63781 15.0364 6.44394 14.8426C6.25009 14.6487 6.15316 14.4104 6.15316 14.1276V8.92467L0.956401 2.28419C0.717366 1.99093 0.682096 1.68135 0.850592 1.35544C1.0191 1.02953 1.28438 0.866577 1.64643 0.866577H14.4214C14.7835 0.866577 15.0488 1.02953 15.2173 1.35544C15.3858 1.68135 15.3522 1.99093 15.1167 2.28419L9.91995 8.92467V14.1694C9.91995 14.4453 9.82737 14.6749 9.64222 14.8583C9.45707 15.0417 9.22659 15.1334 8.95077 15.1334H7.15893ZM8.03393 8.88663L13.1845 2.36217H2.88855L8.03393 8.88663Z" fill="black"/>
                                                </svg> &nbsp; Filter</button>
                                                 <div class="btn-group dropend"> 
                                                   
                                            </div> 
                                            </div>
                                         </div>
                                    </div> -->
                                          <!-- <div id="basic-datatable_filter" class="dataTables_filter">
                                          <label>Filter:<input type="filter" class="form-control form-control-sm" placeholder="filter" aria-controls="basic-datatable"></label>
                                         </div> -->
                                         <div class="d-flex gap-2 flex-wrap">
                                            <!-- Default dropright button -->
                                            <div class="btn-group dropend">
                                                <button type="button" class="btn btn-outline-light waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                     <path d="M7.15893 15.1334C6.87614 15.1334 6.63781 15.0364 6.44394 14.8426C6.25009 14.6487 6.15316 14.4104 6.15316 14.1276V8.92467L0.956401 2.28419C0.717366 1.99093 0.682096 1.68135 0.850592 1.35544C1.0191 1.02953 1.28438 0.866577 1.64643 0.866577H14.4214C14.7835 0.866577 15.0488 1.02953 15.2173 1.35544C15.3858 1.68135 15.3522 1.99093 15.1167 2.28419L9.91995 8.92467V14.1694C9.91995 14.4453 9.82737 14.6749 9.64222 14.8583C9.45707 15.0417 9.22659 15.1334 8.95077 15.1334H7.15893ZM8.03393 8.88663L13.1845 2.36217H2.88855L8.03393 8.88663Z" fill="black"/>
                                                </svg> &nbsp; Filter
                                                </button>
                                                <div class="dropdown-menu" style="width: 300px;">
                                                    <a class="dropdown-item" href="">stage</a>
                                                  <!-- <form>  <div class="col-md-10">
        <div class="mb-3">
            <label for="firstname" class="form-label">Candidate stage    </label>
           <select name="stages" class="form-select @error('stages') is-invalid @enderror" id="example-select">
                    <option selected disabled >Select stage </option>
                    <option value="New applied" name="stages">New applied</option>
                    <option value="Screening"name="stages">Screening</option>
                    <option value="Design challenge"name="stages">Design challenge</option>
                    <option value="Interview"name="stages">Interview</option>
                    <option value="Test"name="stages">Test</option>
                    <option value="Hired"name="stages">Hired</option>
                </select>
                 @error('stages')
      <span class="text-danger"> {{ $message }} </span>
            @enderror
         
        </div>
    </div>
    <div class="text-start">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
            </div></form> -->
           
            <form action='' method="GET">
    <h3>Filters</h3>
   <div class="row">
    <div class="col-md-8">
        <label > filter by status</label>
        <select name="stages" class="form-select">
                    <option selected disabled >Select stage </option>
                    <option value="New applied" name="stages">New applied</option>
                    <option value="Screening"name="stages">Screening</option>
                    <option value="Design challenge"name="stages">Design challenge</option>
                    <option value="Interview"name="stages">Interview</option>
                    <option value="Test"name="stages">Test</option>
                    <option value="Hired"name="stages">Hired</option>
                </select>
    </div>
    <div> 
        <button type="submit" class="btn-btn-primary">filter it</button>
    </div>
   </div>
     <!-- <div>
        <label>stage :</label>
        <input type='text' value='' class='filter' data-column-index='1'>
        
    </div> -->
     <!-- <div>
        <label>Office :</label>
        <input type='text' value='' class='filter' data-column-index='2'>
    </div> -->
    <!-- <button type="button" class="filter-button">
    search
    </button> -->
</form>
                                                    
                                                </div>
                                            </div>
        
                                            
        
                                        </div>
                            </div>
                                </div> 
                               
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                    
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                            <th><input class="form-check-input" type="checkbox"></th>
                                <th>Sl</th>
                                
                                <th>Candidate Name</th>
                                <th>Rating</th>
                                <th>Stages</th>
                                <th>Applied date</th>
                                <th>Owner</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
    
        <tbody>
        @foreach($candidate as $key=> $item)
            <tr>
            <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>{{ $key+1 }}</td>
                 <td> <img src="{{ asset($item->image) }}" style="width: 20.359px; height: 21.121px; flex-shrink: 0;"> {{ $item->candidate_name }}</td>
                <td><svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 14" fill="none">
                       <path d="M7.64551 0.789795L9.21711 5.62668H14.3029L10.1884 8.61603L11.76 13.4529L7.64551 10.4636L3.53101 13.4529L5.10261 8.61603L0.988112 5.62668H6.07391L7.64551 0.789795Z" fill="#FFD600"/>
                    </svg>{{ $item->rating }} </td>
                <td>{{ $item->stages }}</td>
                <td>{{ $item->applied_date }}</td>
                <td><img src="{{ asset($item->owner_image) }}" style="width: 20.359px; height: 21.121px; flex-shrink: 0;">{{ $item->owner }}</td>
                <td> 
                <div class="dropdown sub-dropdown">
                         <button class="btn btn-link text-muted dropdown-toggle show" type="button" id="dd1" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="35" height="9" viewBox="0 0 35 9" fill="none">
                                         <circle cx="4" cy="4.61523" r="4" fill="#9A9A9A"/>
                                         <circle cx="17" cy="4.61523" r="4" fill="#9A9A9A"/>
                                         <circle cx="31" cy="4.61523" r="4" fill="#9A9A9A"/>
                                </svg>
                        </button>
                    <div class="dropdown-menu dropdown-menu-right show" aria-labelledby="dd1" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 40.8px, 0px); width: 114px; height: 107px; background: #FFF; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);" data-popper-placement="bottom-end">
                             <!-- <a class="dropdown-item" href="#">Insert</a> -->
                             <a class="dropdown-item" href="{{ route('edit.candidate',$item->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                                    <path d="M8.24234 6.52742L11.318 2.15398V10.8509L8.24234 6.52742ZM4.27918 7.26805L5.35922 8.80252C5.52873 9.03821 5.74974 9.18061 5.99125 9.18061H5.99975H6.00625C6.24826 9.18061 6.46927 9.03739 6.64078 8.80006L6.63928 8.8017L7.71932 7.26723L11.0025 11.8821H0.997541L4.27918 7.26805ZM0.993041 1.11709H11.0085L6.19776 7.95549C6.14367 8.02551 6.07671 8.06358 6.00775 8.06352H6.00075H5.99425C5.92504 8.06366 5.85786 8.02528 5.80374 7.95467L5.80424 7.95549L0.993041 1.11709ZM0.682528 2.15316L3.75766 6.5266L0.682528 10.8477V2.15316ZM11.483 0.155493C11.363 0.0572868 11.222 0 11.0725 0H0.929539C0.784613 5.66607e-05 0.641679 0.0552495 0.512021 0.161221L0.517522 0.157129C0.362302 0.282433 0.231584 0.476281 0.140133 0.716776C0.0486823 0.957271 0.00014368 1.23483 0 1.5181L0 11.4794C0.000264713 11.8826 0.0982303 12.2691 0.272401 12.5542C0.446573 12.8392 0.682724 12.9996 0.929039 13H11.071C11.3173 12.9996 11.5534 12.8392 11.7276 12.5542C11.9018 12.2691 11.9997 11.8826 12 11.4794V1.5181C12 0.923135 11.7905 0.407554 11.4855 0.159585L11.48 0.155493H11.483Z" fill="black"/>
                                </svg> &nbsp; Edit Candidate
                             </a>
                            <a class="dropdown-item" href="{{ route('delete.candidate',$item->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                                      <path d="M4.95842 2.5C4.95842 2.16848 5.10767 1.85054 5.37335 1.61612C5.63902 1.3817 5.99936 1.25 6.37508 1.25H10.6251C11.0008 1.25 11.3611 1.3817 11.6268 1.61612C11.8925 1.85054 12.0417 2.16848 12.0417 2.5V3.75H14.8751C15.0629 3.75 15.2431 3.81585 15.3759 3.93306C15.5088 4.05027 15.5834 4.20924 15.5834 4.375C15.5834 4.54076 15.5088 4.69973 15.3759 4.81694C15.2431 4.93415 15.0629 5 14.8751 5H14.1179L13.5037 12.5887C13.4783 12.9041 13.3184 13.1993 13.0562 13.4147C12.794 13.6302 12.4489 13.75 12.0906 13.75H4.90883C4.55051 13.75 4.2055 13.6302 3.94329 13.4147C3.68108 13.1993 3.52115 12.9041 3.49571 12.5887L2.883 5H2.12508C1.93722 5 1.75705 4.93415 1.62421 4.81694C1.49138 4.69973 1.41675 4.54076 1.41675 4.375C1.41675 4.20924 1.49138 4.05027 1.62421 3.93306C1.75705 3.81585 1.93722 3.75 2.12508 3.75H4.95842V2.5ZM6.37508 3.75H10.6251V2.5H6.37508V3.75ZM4.3025 5L4.90954 12.5H12.0913L12.6984 5H4.3025ZM7.08342 6.25C7.27128 6.25 7.45144 6.31585 7.58428 6.43306C7.71712 6.55027 7.79175 6.70924 7.79175 6.875V10.625C7.79175 10.7908 7.71712 10.9497 7.58428 11.0669C7.45144 11.1842 7.27128 11.25 7.08342 11.25C6.89555 11.25 6.71539 11.1842 6.58255 11.0669C6.44971 10.9497 6.37508 10.7908 6.37508 10.625V6.875C6.37508 6.70924 6.44971 6.55027 6.58255 6.43306C6.71539 6.31585 6.89555 6.25 7.08342 6.25ZM9.91675 6.25C10.1046 6.25 10.2848 6.31585 10.4176 6.43306C10.5505 6.55027 10.6251 6.70924 10.6251 6.875V10.625C10.6251 10.7908 10.5505 10.9497 10.4176 11.0669C10.2848 11.1842 10.1046 11.25 9.91675 11.25C9.72889 11.25 9.54872 11.1842 9.41588 11.0669C9.28304 10.9497 9.20842 10.7908 9.20842 10.625V6.875C9.20842 6.70924 9.28304 6.55027 9.41588 6.43306C9.54872 6.31585 9.72889 6.25 9.91675 6.25Z" fill="black"/>
                                </svg>&nbsp; Delete Candidate</a>
                    </div>
                 </div>
                <!-- <a href="{{ route('edit.employee',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a> -->
       <!-- <a href="{{ route('delete.employee',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a> -->

                </td>
            </tr>
            @endforeach
        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


                      
                        
                    </div> <!-- container -->

                </div> <!-- content -->



<script>
                $(document).ready(function () {

// DataTable
var dtable = $('#basic-datatable').DataTable();

$('.filter-button').on('click', function () {
    //clear global search values
    dtable.search('');
    $('.filter').each(function(){ 
    if(this.value.length){
      dtable.column($(this).data('columnIndex')).search(this.value);
    }
    });
    dtable.draw();
});

$( ".dataTables_filter input" ).on( 'keyup change',function() {
   //clear column search values
    dtable.columns().search('');
   //clear input values
   $('.filter').val('');
});	

});
</script>
@endsection 
@extends('admin_dashboard')
@section('admin')
<head>
    <style>

    </style>
</head>
<div class="content">

<!-- Start Content-->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-3">
                <a href="" class="active"><h4>RECRUITMENT INBOX</h4></a>
                <main class="content mt-2 mb-3">

    <div class="container p-0">
        <div class="card" style="width: 19rem;">
            <div class="row g-0">
                <div class="border-right">
                    <div class="input-group my-4">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                        <!-- <input type="text" class="form-control w-25 mx-2" id="myInput" placeholder="Search"> -->
                        <input id="myInput" type="text" placeholder="Search..">
                    </div>

                    <div id="candidateList">
                        @foreach($allCandidate as $key => $item)
                            <div class="d-flex align-items-start candidate-item">
                                <img src="{{ asset($item->candidate_profile) }}" class="rounded-circle my-2" alt="Vanessa Tucker" width="55" height="62.614" style="margin-left:20px;">
                                <div class="flex-grow-1 ml-3" style="margin-left:20px;">
                                    <p>{{$item->candidate_name}}</p>
                                    <div class="small"><span>Skill : </span>{{$item->interpersonal_skill}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr class="d-block d-lg-none mt-1 mb-0">
                </div>
            </div>
        </div>
    </div>
</main>
            </div>
           
            <div class="col-2">
                <a href=""><h4>WORK INBOX</h4></a>

            </div>

        </div>


    </div>
<!-- End Start Content-->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   $(document).ready(function() {
    $("a").hover(
        function() {
            $(this).css({
                "text-decoration": "underline",
                "text-decoration-thickness": "3px",
                "text-underline-offset":"10px"
            });
            $(this).css("color", "rgba(246, 152, 41, 0.60)");
        },
        function() {
            $(this).css({
                "text-decoration": "none",
            });
        });
    $("h4").hover(
        function() {
            $(this).css({
                "color": "black",  
            });
        },
        function() {
            $(this).css("color", "#B6B6B6");
        });
$("h4").css({
    "margin-left":"40px",
});
});
</script>
<script>
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".candidate-item").each(function() {
            var candidateName = $(this).find("p").text().toLowerCase();
            if (candidateName.indexOf(value) > -1) {
                $(this).show(); // Show the item if it matches the search
            } else {
                $(this).hide(); // Hide the item if it doesn't match the search
            }
        });
    });
});

</script>

@endsection
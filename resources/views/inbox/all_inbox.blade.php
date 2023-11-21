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
                <a href="{{ route('all.recruitment')}}"><h4>RECRUITMENT INBOX</h4></a>
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
@endsection
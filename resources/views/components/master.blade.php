<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> {{$title}}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">        
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/summernote-lite.min.css') }}">

    <!-- dropify -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dropify/css/dropify.min.css') }}">

    <!-- tags -->
    <link rel="stylesheet" href="{{ asset('assets/admin/tags/bootstrap-tagsinput.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/ready.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
</head>

<body>
    <div class="wrapper">
        <x-partials.header />
        <!--  -->


        <x-partials.sideber />

        <!-- body -->
        {{$slot}}
        <!-- end content body -->
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>






<script src="{{ asset('assets/admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

<!-- summernote -->
@if(session('message'))
<script>
   
  swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yess!",
    });
  
</script>
@endif

<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<!-- custom them -->
<script src="{{ asset('assets/admin/js/ready.min.js') }}"></script>

</html>
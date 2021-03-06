<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ResQ 24/7 | First Responder Rescue Team Sign Up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('front/img/favicon.png')}}">    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
   
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link href="{{asset('front/css/select2.min.css')}}" rel="stylesheet" />


</head>

<body>
   

    <!-- header-start -->
@include('layouts.header')
 

    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div style="background-color: #3d2e2e;" class="bradcam_area">
    <!-- <div class="bradcam_area breadcam_bgRoad "> -->
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <h4 style="font-size: 40px; color: #fff;"><strong>SAVE THE DAY</strong></h4>
                        <h2 style="font-size: 70px; color: gold;"><strong>BECOME A FIRST RESPONDER RESCUER</strong></h2>
                        <p>Earn cash and help people near you by becoming the first responder to any emergency case arising around your custom area selected.</p>
                         <div class="info_button">
                           <a class="boxed-btn3-white" title="Sign Up As A Rescuer" data-toggle="modal" data-target="#firstTeamModal"  href="">Sign Up As A Rescuer <i class="fa fa-hand-pointer-o"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

 
    <div>
        <br><br>
       <div class="container">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a >Rescue Teams</a></li>
    <li class="breadcrumb-item"><a href="{{url('/rescue_teams/emergency_medical_team')}}">Medical Rescue Team</a></li>
    <li class="breadcrumb-item"><a href="{{url('/rescue_teams/emergency_road_team')}}">Roadside Rescue Team</a></li>
    <li class="breadcrumb-item"><a href="{{url('/rescue_teams/emergency_fire_team')}}">Fire Rescue Team</a></li>
     @if (Auth::guest())
     @else
    <li class="breadcrumb-item"><a href="{{url('/')}}">My Dashboard</a></li>
    @endif
    <li class="breadcrumb-item active" aria-current="page">First Responder Rescue Team</li>
  </ol>
</nav>
           <div  class="row">

                <div style=" background-color: #FFD700;" class="col-md-4 ">
                  <div class="text-center"> 
                    <i style="color: red; font-size: 40px; margin-top: 30px;" class="fa fa-money text-center"></i>
                    <br><br>
                    <h2 style="color: #fff;"><strong>EARN EXTRA CASH</strong></h2>
                  </div>
                    <p style="color: #fff; font-size: 20px;"><i style="color: #4169E1;" class="fa fa-circle"></i> Do you have a 24 hours operational medical facility? Do you have a BLS or ALS fully equipped and functional ambulance attached to your medical facility? Can you have a paramedic team that can work around the clock?</p> 
                     <p style="color: #fff; font-size: 20px;"><i style="color: #4169E1;" class="fa fa-circle"></i> Then this is a perfect opportunity for your medical facility. Make some extra cash by responding to Medical Emergency rescues around your area!</p> 
                  
                </div>
                             


                <div  style="background-color: #4169E1; " class="col-md-4">
                  <div class="text-center"> 
                   <i style="color: red; font-size: 40px; margin-top: 30px;" class="fa fa-group"></i>
                   <br><br>
                   <h2 style="color: #fff;"><strong>EMERGENCY VICTIMS</strong></h2>
                 </div>
                   <p style="color: #fff; font-size: 20px;"><i style="color: #fff;" class="fa fa-circle"></i> It’s every paramedics dream and desire to save a live, thousands of people die due to delayed response or being attended to by non-professionals at the scene.</p>
                   <p style="color: #fff; font-size: 20px;"><i style="color: #fff;" class="fa fa-circle"></i> Join the larger family of on demand paramedic service providers across the country. Nothing is fulfilling as having a life saved through your efforts, <a style="color: #FFD700;" href="" data-toggle="modal" data-target="#firstTeamModal">get started</a> today.</p>
                  
                </div>


                <div style=" background-color: #FFD700;" class="col-md-4">
                  <div class="text-center"> 
                   <i style="color: red; font-size: 40px; margin-top: 30px;" class="fa fa-briefcase"></i>
                   <br><br>
                   <h2 style="color: #fff; font-size: 30px;"><strong>BE YOUR OWN BOSS</strong></h2>
                 </div>
                   <p style="color: #fff; font-size: 20px; "><i style="color: #4169E1;" class="fa fa-circle"></i> The freedom to work when you want</p> 
                </div>
            </div>
            
       
        
    </div>

 </div>
  


<!-- Testimonials Here -->


<!-- End Testimonials -->


<br><br>

<div class="container">
    <div class="col-12 text-center">
    <h2 align="left" class="contact-title" style="color: #0000fb;">A DAY IN THE LIFE OF A RESQ247 PARAMEDIC SERVICE PROVIDER</h2>
    </div>

    <div class="col-md-12">
        <div class="row">
        <div class="col-md-8" style="margin-bottom: 30px;">
         <div id="accordion">

    <div class="card">
        <div class="card-header" id="signapp">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#signA" aria-expanded="true" aria-controls="signA">
              <i class="fa fa-circle"></i>DOWNLOAD & SIGN IN OUR RESQ247 EMS  
            </button>
          </h5>
        </div>

        <div id="signA" class="collapse show" aria-labelledby="signapp" data-parent="#accordion">
          <div class="card-body">
         This is our first line of engagement, its part of knowing our team.
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="getA">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#getcoll" aria-expanded="true" aria-controls="getcoll">
              <i class="fa fa-circle"></i> WE CALL TO INSPECT YOUR AMBULANCE & TEAM
            </button>
          </h5>
        </div>
        <div id="getcoll" class="collapse show" aria-labelledby="getA" data-parent="#accordion">
          <div class="card-body">
        We follow up top know your capacity, it’s necessary to know if your facility and staffs have the necessary statutory documents before approving the engagement. 
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="motoA">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#motocoll" aria-expanded="true" aria-controls="motocoll">
              <i class="fa fa-circle"></i> SCHEDULE A BASIC OPERATIONS TRAINING 
            </button>
          </h5>
        </div>
        <div id="motocoll" class="collapse show" aria-labelledby="motoA" data-parent="#accordion">
          <div class="card-body">
           Saving lives is our forte, we have a standard operating way across board, and any new team coming on board must go through some training to have uniformity in operations.
          </div>
        </div>
    </div>

          <div class="card">
        <div class="card-header" id="paidA">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#paidcoll" aria-expanded="true" aria-controls="paidcoll">
              <i class="fa fa-circle"></i> GET RESCUE REQUESTS
            </button>
          </h5>
        </div>
        <div id="paidcoll" class="collapse show" aria-labelledby="paidA" data-parent="#accordion">
          <div class="card-body">
     Upon successful sign up, we let you choose when your team can start working. Any requests made within your area will come to your team. If you team is available, they accept the request. It’s that simple! Google Maps calculates your estimated time of arrival.  Most requests are 3-10 minutes away.  
          </div>
        </div>
    </div>


 </div>
          
        </div>

        <div class="col-md-4">
             <img style="width: 301px; height: 512px;" src="{{url('front/img/rescue_screenshot.jpg')}}">
        </div>
        </div>
    </div>




</div>


<br><br>

<div class="container">
    <div class="col-12 text-center">
    <h2 class="contact-title" style="color: #0000fb;">HOW TO SIGN UP
</h2>
    </div>

    <div class="col-md-12">
        <div class="row">
        <div class="col-md-8" style="margin-bottom: 30px;">
            <h3 style="color: #0000fb;">Requirements:</h3>
            <ul>
                 <li><i class="fa fa-circle"></i> Own a smart phone (Android or iOS) dedicated to each Ambulance. </li>
                <li><i class="fa fa-circle"></i> Own a medical facility operating 24hrs (having a casualty  wing an added advantage) </li>
                <li><i class="fa fa-circle"></i> Own an Ambulance class BLS or ALS , fully equipped and Not older than 5 years from DOM</li>
                <li><i class="fa fa-circle"></i> Operating staffs to undergo vetting </li>
                <li><i class="fa fa-circle"></i> NB:  Staffs MUST be 22 years and above with relevant certification by Medical Practitioner body  and other relevant recognized  Institutions.</li>
            </ul>
          
        </div>

        <div class="col-md-4">
              <div class="info_button">
              <a class="boxed-btn3-login" title="Sign Up As A Rescuer" data-toggle="modal" data-target="#firstTeamModal"  href="">Sign Up As A Rescuer <i class="fa fa-hand-pointer-o"></i></a> 
            </div>
        </div>
        </div>
    </div>


 <div id="accordion">
<h3 style="color: #0000fb;">Quick Sign Up Steps Into Becoming an EMS Rescuer:</h3>
    <div class="card">
        <div class="card-header" id="submitapp">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#submitA" aria-expanded="true" aria-controls="submitA">
              <i class="fa fa-circle"></i> Step 1
            </button>
          </h5>
        </div>

        <div id="submitA" class="collapse show" aria-labelledby="submitapp" data-parent="#accordion">
          <div class="card-body">
           SUBMIT AN
APPLICATION
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="recrhead">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#recr" aria-expanded="true" aria-controls="recr">
              <i class="fa fa-circle"></i> Step 2
            </button>
          </h5>
        </div>
        <div id="recr" class="collapse show" aria-labelledby="recrhead" data-parent="#accordion">
          <div class="card-body">
            TALK TO A
RECRUITER
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="druglabel">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#drugcoll" aria-expanded="true" aria-controls="drugcoll">
              <i class="fa fa-circle"></i> Step 3
            </button>
          </h5>
        </div>
        <div id="drugcoll" class="collapse show" aria-labelledby="druglabel" data-parent="#accordion">
          <div class="card-body">
           MEET THE TEAM AND SHOW THEM MEDICAL FACILITY AND AMBULANCES
          </div>
        </div>
    </div>


        <div class="card">
        <div class="card-header" id="teamhead">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#teamcoll" aria-expanded="true" aria-controls="teamcoll">
              <i class="fa fa-circle"></i> Step 4
            </button>
          </h5>
        </div>
        <div id="teamcoll" class="collapse show" aria-labelledby="teamhead" data-parent="#accordion">
          <div class="card-body">
      UNDERGO VETTING
          </div>
        </div>
    </div>

        <div class="card">
        <div class="card-header" id="starthead">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#startcoll" aria-expanded="true" aria-controls="startcoll">
              <i class="fa fa-circle"></i> Step 5
            </button>
          </h5>
        </div>
        <div id="startcoll" class="collapse show" aria-labelledby="starthead" data-parent="#accordion">
          <div class="card-body">
        START
WORKING!
          </div>
        </div>
    </div>


 </div>



</div>

<br><br>
<!-- footer start -->
@include('layouts.footer')
 
<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->

    <!-- form itself end -->

        <!-- form itself end-->

    <!-- form itself end -->




    <!-- JS here -->
  <script src="{{asset('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/jquery-1.12.4.min.js')}} "></script>
    <script src="{{asset('front/js/popper.min.js')}} "></script>
    <script src="{{asset('front/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}} "></script>
    <script src="{{asset('front/js/isotope.pkgd.min.js')}} "></script>
    <script src="{{asset('front/js/ajax-form.js')}} "></script>
    <script src="{{asset('front/js/waypoints.min.js')}} "></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}} "></script>
    <script src="{{asset('front/js/imagesloaded.pkgd.min.js')}} "></script>
    <script src="{{asset('front/js/scrollIt.js')}} "></script>
    <script src="{{asset('front/js/jquery.scrollUp.min.js')}} "></script>
    <script src="{{asset('front/js/wow.min.js')}} "></script>
    <script src="{{asset('front/js/nice-select.min.js')}} "></script>
    <script src="{{asset('front/js/jquery.slicknav.min.js')}} "></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{asset('front/js/plugins.js')}} "></script>
 <script src="{{asset('front/js/gijgo.min.js')}} "></script>
 <!--contact js-->
 <script src="{{asset('front/js/contact.js')}} "></script>
 <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}} "></script>
 <script src="{{asset('front/js/jquery.form.js')}} "></script>
 <script src="{{asset('front/js/jquery.validate.min.js')}} "></script>
 <script src="{{asset('front/js/mail-script.js')}} "></script>
 <script src="{{asset('front/js/main.js')}} "></script>

@include('layouts.selects')
 

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>


</body>

</html>

 
 

      <div style="background-color: #FFEC8B;" class="modal fade vertical-align-center" data-backdrop="false" id="firstTeamModal" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Apply As A First Responder Rescuer</h5>
                    <button title="Close Modal" style="color: red;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                          <!-- Form Here -->

      <form method="POST" action="{{route('storeFirstRescue')}}"   enctype="multipart/form-data">
                      {{csrf_field()}}

                       
            <div class="popup_inner">
                  <input required="" class="form-control" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id"   type="text" hidden=""  placeholder="Applicant User ID">     
                           

                      <div class="col-lg-12 form-group">
                            <div class="row">
                            <div class="col-lg-6">
                            <input required="" class="form-control" type="text" name="first_name"  placeholder="First Name">
                          </div>
                            <div class="col-lg-6">
                            <input required="" class="form-control" type="text" name="last_name"  placeholder="Last Name">
                          </div>
                        </div>
                      </div>


                        <div class="col-lg-12 form-group">
                            <div class="row">
                            <div class="col-lg-6">
                            <input required="" class="form-control" type="text" name="company_name"  placeholder="Company Name(If Any)">
                          </div>
                            <div class="col-lg-6">
                            <input required="" class="form-control" type="email" name="email"  placeholder="Email">
                          </div>
                        </div>
                      </div>


                     <div class="col-lg-12 form-group">
                      <div class="row">
                      <div class="col-lg-6">
                      <input required="" class="form-control" type="text" name="phone" placeholder="Enter Phone">
                      </div>
                        <div class="col-lg-6">
                         <input required="" class="form-control" type="text" name="address" placeholder="Enter Adress">
                      </div>
                      </div>
                    </div>


                     <div class="col-lg-12 form-group">
                      <div class="row">
                      <div class="col-lg-6">
                      <input required="" class="form-control" type="text" name="postal_code" placeholder="Enter Postal Code">
                      </div>
                        <div class="col-lg-6">
                           <select style="display:block; width:100%;padding:0;border-width:0" required="" id="city" multiple="" name="city"></select>                        
                      </div>
                      </div>
                    </div> 


             <div class="col-lg-12 form-group">
                      <div class="row">
                      
                        <div class="col-lg-6">
                          
                       
            <select style="display:block; width:100%;padding:0;border-width:0" required="" id="town" multiple="" name="town"></select>
                      </div>

                              <div class="col-lg-6">
        

                        <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="service" multiple="" name="service"></select> 

                      </div>

                      </div>
                    </div> 
 

                      <div class="col-lg-12 form-group">
                      <div class="row">
              

                     <div class="col-lg-6">           

                       
                        <select style="display:block; width:100%;padding:0;border-width:0; border-color: red!important;" required="" id="vehicles" multiple="" name="vehicle_model"></select> 
                   
                      </div>

                        <div class="col-lg-6">
                    

                            <input required="" class="form-control" type="text" name="vehicle_reg" placeholder="Enter Vehicle Reg No.(if any)">
                       </div>
                      </div>
                     </div> 
                       

                         <div class="col-lg-12 form-group">
                        <div class="row">

                       <div class="col-lg-6">

                            <label>Upload Vehicle Photo</label>
                            <input required="" class="form-control" type="file" name="vehicle_photo" title="Upload Vehicle Photo(if any)">
                          </div>
                          <div class="col-lg-6">
                          <label>Upload Passport Photo</label>

                            <input required="" class="form-control" type="file" name="passport_photo" title="Upload Passport Photo">
                          </div>
                        </div>
                        </div>  

                      
                      
                        <div class="col-lg-12 form-group">
                            <button type="submit" class="boxed-btn3-login">Finish Sign Up</button>
                        </div>
         
            </div>
    </form>
 <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
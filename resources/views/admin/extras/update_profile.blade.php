<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ResQ 247 | Update Profile </title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('admin/images/resq247logocircle.png')}}" type="image/x-icon">
 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/css/bootstrap.css')}}">
  

    <!-- Waves Effect Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/node-waves/waves.css')}}">
  

    <!-- Animation Css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/animate-css/animate.css')}}">
 

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
 

    <!--   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      
    <link rel="stylesheet" href="{{asset('admin/css/themes/all-themes.css')}}">
  

    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->



 
@include('admin.layout.topbar')

    <section>


        <!-- Left Sidebar -->
 

@include('admin.layout.sidebar')
        <!-- #END# Left Sidebar -->


        <!-- Right Sidebar -->
 

@include('admin.layout.right_sidebar')
        <!-- #END# Right Sidebar -->
    </section>

        <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Update Profile</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    
                        <div class="body">
                            <h2 class="card-inside-title">Update Profile</h2>
                            <div class="row clearfix">

                    <!---- POPUP ---->
     
                       @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                        <strong>Great News! Profile Updated Successfully.</strong>  </div>
                         @endif
                        
                                <form action="{{route('storeProfile')}}" method="POST" enctype="multipart/form-data">
                                	{{csrf_field()}}

                                    <input  type="hidden" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" class="form-control" placeholder="Enter ID" />

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input required="" type="text" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" name="name" class="form-control" placeholder="Enter Name" />
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input required="" type="text" name="email" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" class="form-control" placeholder="Enter Email"/>
                                        </div>
                                    </div>

                                           <div class="form-group">
                                        <div class="form-line">
                                            <input required="" type="text" name="password" class="form-control" placeholder="Enter New Password" />
                                        </div>
                                    </div>
                                 
                                    <!-- submit -->
                                      <div class="form-group">
                                       
                                            <input type="submit" class="btn btn-primary" value="Update Profile" />
                                        </div>
                                    </div>
                                </form>
                                    <!-- end submit -->
                                </div>
                            </div>

                      
                        </div>


                        <!-- End Card -->

                        <!-- Card 2 -->

                    <div class="card">
                    
                        <div class="body">
                            <h2 class="card-inside-title">Create Admin</h2>
                            <div class="row clearfix">

                    <!---- POPUP ---->
     
                       @if(session()->has('adminsuccess'))
                        <div class="alert alert-success" role="alert">
                        <strong>Great News! Admin Added Successfully.</strong>  </div>
                         @endif
                        
                                <form action="{{route('storeAdmin')}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}} 

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Admin Name" />
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" placeholder="Enter Admin Email"/>
                                        </div>
                                    </div>

                                           <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" class="form-control" placeholder="Enter Admin Password" />
                                        </div>
                                    </div>
                                 
                                    <!-- submit -->
                                      <div class="form-group">                                       
                                            <input type="submit" class="btn btn-primary" value="Add Admin" />
                                        </div>
                                    </div>
                                </form>
                                    <!-- end submit -->
                                </div>
                            </div>

                      
                        </div>


                        <!-- End Card 2 -->

                    </div>
                </div>
            </div>
            <!-- #END# Input -->       
            
       
        </div>
    </section>


      <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Available Admins
                    <small>Explore All Available Admins</a></small>
                </h2>
            </div>   
       
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 Available Admins
                            </h2>
                       
                        </div>
                       
                           @if(session()->has('deletesuccess'))
                        <div class="alert alert-danger" role="alert">
                        <strong>Oh Snap! Admin Deleted Successfully.</strong>  </div>
                         @endif
                      
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>

                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>                                      
                                            <th>Created At</th>                                        
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>                                      
                                            <th>Created At</th>                                        
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                                
                                @forelse($admins as $admin)
                                        <tr>
                                            <td>{{$admin->id}}</td>
                                            <td> {{$admin->name}}</td>
                                            <td>{{$admin->email}} </td>                                          
                                            <td>{{$admin->created_at}} </td>
 
                                             <td>
                                                <form action="{{route('deleteAdmin',$admin->id)}}" method="post">
                                                    {{csrf_field()}}
                                                 <button style="border-style: none;"  type="submit"  title="Delete Fire Team Member Forever"> <i style="color: red;" class="fa fa-trash"></i>

                                                </button>&nbsp&nbsp
                                            </form>
                                          
                                             </td>
                                         
                                        </tr>

                                        @empty
 

                                         @endforelse
                              
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
 <script src="{{asset('admin/plugins/jquery/jquery.min.js')}} "></script>

 
    <!-- Bootstrap Core Js -->
 <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.js')}} "></script>
    

    <!-- Select Plugin Js -->
 <script src="{{asset('admin/plugins/bootstrap-select/js/bootstrap-select.js')}} "></script>
   

    <!-- Slimscroll Plugin Js -->
 <script src="{{asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}} "></script>
     

    <!-- Waves Effect Plugin Js -->
  <script src="{{asset('admin/plugins/node-waves/waves.js')}} "></script>

    <!-- Jquery DataTable Plugin Js -->
 

    <script src="{{asset('admin/plugins/jquery-datatable/jquery.dataTables.js')}} "></script>

    <script src="{{asset('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}} "></script>
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}} "></script>
     

    
     

    <script src="{{asset('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}} "></script>

    <!-- Custom Js -->
 <script src="{{asset('admin/js/admin.js')}} "></script>
     
 
<script src="{{asset('admin/js/pages/tables/jquery-datatable.js')}} "></script>
    <!-- Demo Js -->
    <script src="{{asset('admin/js/demo.js')}} "></script>
</body>

</html>
 
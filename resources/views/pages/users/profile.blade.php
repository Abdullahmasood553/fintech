@extends('layouts.master')


@section('content')



        <div class="page-wrapper">


            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                              
                                <h4 class="page-title">Profile</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="{{ asset('public/assets/images/users/user-10.jpg') }}" alt="" class="rounded-circle">
                                                        <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">Steven Meyers</h5>                                                        
                                                        <p class="mb-0 met-user-name-post">UI/UX Designer</p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                                </ul>
                                                <div class="button-list btn-social-icon">                                                
                                                    <button type="button" class="btn btn-blue btn-round">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-secondary btn-round ml-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-pink btn-round  ml-2">
                                                        <i class="fab fa-dribbble"></i>
                                                    </button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
    
                    <div class="row">                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <h4 class="mt-0 mb-3 header-title">User Details</h4>
                                        <div class="form-group">
                                            <label for="setFullName">Full Name</label>
                                            <input type="text" class="form-control" id="setFullName" placeholder="Full Name">
                                        </div><!--end form-group-->                                        
                                        <div class="form-group">
                                            <label for="setEmail">Email address</label>
                                            <input type="email" class="form-control" id="setEmail" placeholder="Enter email">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="setPassword">Password</label>
                                            <input type="password" class="form-control" id="setPassword" placeholder="Password">
                                        </div><!--end form-group-->
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="setLinkAc">Linked Account</label>
                                            <select class="form-control" id="setLinkAc">
                                                <option>PayPal</option>
                                                <option>VISA</option>
                                                <option>ICICI</option>
                                                <option>HDFC</option>
                                            </select>
                                        </div><!--end form-group-->      
                                        <div class="form-group">
                                            <label for="setCurrency">Collect Currency</label>
                                            <select class="form-control" id="setCurrency">
                                                <option>US Dollar</option>
                                                <option>Pounds</option>
                                                <option>Euro</option>
                                                <option>Yen</option>
                                            </select>
                                        </div>  <!--end form-group-->                                                       
                                        <div class="form-group">
                                            <label for="setChangePassword">Change Wallet Password</label>
                                            <input type="password" class="form-control" id="setChangePassword" placeholder="Password">
                                        </div> <!--end form-group-->                                                   
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
            </div>
@endsection
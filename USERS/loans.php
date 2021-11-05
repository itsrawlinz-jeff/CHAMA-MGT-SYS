<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>home</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="shortcut icon" href="http://localhost/MERRY/assets/images/favicon.png" />
				<meta name="theme-color" content="#000000" />
			<meta name="author" content="" />
			<meta name="keyword" content="" />
			<meta name="description" content="" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/font-awesome.min.css" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/animate.css" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/blueimp-gallery.css" />
							<link rel="stylesheet" href="http://localhost/MERRY/assets/css/bootstrap-default.css" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/bootstrap-theme-sunset.css" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/custom-style.css" />
					<link rel="stylesheet" href="http://localhost/MERRY/assets/css/flatpickr.min.css" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/summernote.min.css" />
			<link rel="stylesheet" href="http://localhost/MERRY/assets/css/bootstrap-editable.css" />
			<script type="text/javascript" src="http://localhost/MERRY/assets/js/jquery-3.3.1.min.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/chartjs-2.3.0.js"></script>
			</head>
		<body id="main" class="with-login home-index">
		<div id="page-wrapper">
			<!-- Show progress bar when ajax upload-->
			<div class="progress ajax-progress-bar">
				<div class="progress-bar"></div>
			</div>
			<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/MERRY/Home">
            <img class="img-responsive" src="http://localhost/MERRY/assets/images/logo.png" /> MERRY-GO ROUND SYSTEM            </a>
                        <button type="button" id="sidebarCollapse" class="btn btn-success">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="avatar-icon"><i class="fa fa-user"></i></span> 
                            <span><?php echo $_SESSION['name']?> !</span>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="http://localhost/MERRY/account"><i class="fa fa-user"></i> My Account</a>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </ul>
                    </li>
                </ul>
            </div>
                    </div>
    </div>
        <nav id="sidebar" class="navbar-dark bg-success">
        <ul class="nav navbar-nav w-100 flex-column align-self-start">
            <li class="menu-profile text-center nav-item">
                <a class="avatar" href="http://localhost/MERRY/account">
                    <span class="avatar-icon"><i class="fa fa-user"></i></span>
                </a>
                <h5 class="user-name"><?php echo $_SESSION['name'] ?></h5>
                <div class="dropdown menu-dropdown">
                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="http://localhost/MERRY/account"><i class="fa fa-user"></i> My Account</a>
                        <a class="dropdown-item" href="http://localhost/MERRY/index/logout?csrf_token=56bbf99d1b1e68ce7ab0d222670f95f7"><i class="fa fa-sign-out"></i> Logout</a>
                    </ul>
                </div>
            </li>
        </ul>
        			<ul id="menu-rbf56akvwums" class="nav navbar-nav w-100 flex-column align-self-start">
											<li class="nav-item">
								<a class="nav-link active" href="../USERS/dashboard.php">
									<i class="fa fa-tachometer "></i>									<span class="menu-label">Home</span>
								</a>
							</li>
											<li class="nav-item">
								<a class="nav-link " href="../USERS/complaints.php">
									<i class="fa fa-arrow-circle-left "></i>									<span class="menu-label">Complaints</span>
								</a>
							</li>
              <li class="nav-item">
								<a class="nav-link " href="../USERS/profile.php">
									<i class="fa fa-arrow-circle-left "></i>									<span class="menu-label">Profile</span>
								</a>
							</li>
              <li class="nav-item">
								<a class="nav-link " href="../USERS/events.php">
									<i class="fa fa-level-down "></i>									<span class="menu-label">Events</span>
								</a>
							</li>
											<li class="nav-item">
								<a class="nav-link " href="../USERS/loans.php">
									<i class="fa fa-money "></i>									<span class="menu-label">Loan</span>
								</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link " href="../USERS/loanstatus.php">
									<i class="fa fa-level-down "></i>									<span class="menu-label">Loan Status</span>
								</a>
							</li>
											
											<li class="nav-item">
								<a class="nav-link " href="../USERS/bankinfo.php">
									<i class="fa fa-bars fa-4x"></i>									<span class="menu-label">Bank Info</span>
								</a>
							</li>
							</ul>
		    </nav>
    			


<!-- content -->
<div id="main-content">
	<!-- Page Main Content Start -->
		<div id="page-content">
			


.
<div class="container">


<form class="form page-form form-horizontal needs-validation" action="../USERS/applyloan.php" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="applicant_name">Applicant Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input value="<?php echo $_SESSION['name']?>" type="text" placeholder="Enter Applicant Name"  required="" name="applicant_name"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="identification">Identification <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-identification"  value="" type="text" placeholder="Enter Identification"  required="" name="identification"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="birthday">Birthday <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <input id="ctrl-birthday" class="form-control datepicker  datepicker" required="" value="2021-10-30" type="datetime"  name="birthday" placeholder="Enter Birthday" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="gender">Gender <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                    <select required=""  name="gender"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">select Gender</option>
                                                                                                                                                                <option  value="male">
                                                                                    Male                                                                                </option>                                   
                                                                                                                                                                <option  value="female">
                                                                                    Female                                                                                </option>                                   
                                                    </select>
                                                        </div>
                                                    </div>
                                            </div>

                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="address">Address <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-address"  value="" type="text" placeholder="Enter Address"  required="" name="address"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="town">Town <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-town"  value="" type="text" placeholder="Enter Town"  required="" name="town"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="street">Street <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-street"  value="" type="text" placeholder="Enter Street"  required="" name="street"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="house">House <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-house" name="house"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select House Type ...</option>
                                                                                                                                                                <option  value="own">
                                                                                    Own                                                                                </option>                                   
                                                                                                                                                                <option  value="rented">
                                                                                    Rented                                                                                </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="marital_status">Marital Status <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-marital_status" name="marital_status"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select Marital Status ...</option>
                                                                                                                                                                <option  value="married">
                                                                                    Married                                                                                </option>                                   
                                                                                                                                                                <option  value="single">
                                                                                    Single                                                                                </option>                                   
                                                                                                                                                                <option  value="widowed">
                                                                                    Widowed                                                                                </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="employment_terms">Employment Terms <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="employment_terms"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select Employment Terms ...</option>
                                                                                                                                                                <option  value="permanent">
                                                                                    Permanent                                                                                </option>                                   
                                                                                                                                                                <option  value="casual">
                                                                                    Casual                                                                                </option>                                   
                                                                                                                                                                <option  value="contract">
                                                                                    Contract                                                                                </option>                                   
                                                                                                                                                                <option  value="others">
                                                                                    Others                                                                                </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>






                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="value">Loan Type <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="employment_terms"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select Loan Type ...</option>
                                                                                                                                                                <option  value="Bussiness">
                                                                                    Bussiness                                                                                </option>                                   
                                                                                                                                                                <option  value="School_Fee">
                                                                                    School Fee                                                                               </option>                                   
                                                                                                                                                                <option  value="Family_Upkeep">
                                                                                    Family Upkeep                                                                                </option>                                   
                                                                                                                                                                <option  value="others">
                                                                                    Others                                                                                </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>





                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="security details">security_details <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="security_details"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select security_details ...</option>
                                                                                                                                                                <option  value="Salary ">
                                                                                                                                                                Salary                                                                               </option>                                   
                                                                                                                                                                <option  value="Savings">
                                                                                                                                                                Savings                                                                              </option>                                   
                                                                                                                                                                <option  value="Gruarantors">
                                                                                                                                                                Gruarantors                                                                                </option>                                   
                                                                                                                                                                <option  value="others">
                                                                                    Others                                                                                </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>









                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="employment_terms">Conditions <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select condition ...</option>
                                                                                                                                                                <option  value="Provide A Minimum Of 4 Guarantors(For A Loan Above Two Milion Provide Minimun 6 Eligible Guarantors ">
                                                                                                                                                                Provide A Minimum Of 4 Guarantors(For A Loan Above Two Milion Provide Minimun 6 Eligible Guarantors                                                                              </option>                                   
                                                                                                                                                                <option  value="Savings">
                                                                                                                                                                After Fill This Form Get Official Loan Application Form From Our Office                                                                             </option>                                   
                                                                                                                                                                <option  value="After Fill This Form Get Official Loan Application Form From Our Office">           
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="employment_terms">Approval <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="approval"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Make Approval ...</option>
                                                                                                                                                                <option  value=" Ksh 10000 ">
                                                                                                                                                                Ksh 10000                                                                                </option>                                   
                                                                                                                                                                <option  value="Ksh15000 ">
                                                                                                                                                                Ksh15000                                                                              </option>                                   
                                                                                                                                                                <option  value="  Ksh20000 ">
                                                                                                                                                                Ksh20000                                                                               </option>                                   
                                                                                                                                                                <option  value=" Ksh25000 ">
                                                                                                                                                                Ksh25000                                                                               </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="employment_terms">Payment Period <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-employment_terms" name="payment_period"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Payment Period ...</option>
                                                                                                                                                                <option  value=" 2Weeks ">
                                                                                                                                                                2Weeks                                                                               </option>                                   
                                                                                                                                                                <option  value=" 1 Month ">
                                                                                                                                                                1 Month                                                                              </option>                                   
                                                                                                                                                                <option  value=" 6Month ">
                                                                                                                                                                6Month                                                                             </option>                                   
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>






                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="date">Date </label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="input-group">
                                                                                                    <input class="form-control datepicker  datepicker" value="2021-10-29" type="datetime"  name="date" placeholder="Enter Date" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="Y-m-d" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                                                        <div class="input-group-append">
                                                                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group form-submit-btn-holder text-center mt-3">
                                                                                        <div class="form-ajax-status"></div>
                                                                                        <button class="btn btn-primary" type="submit">
                                                                                            Submit
                                                                                            <i class="fa fa-send"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </form>    

</div>



        </div>
            



				<!-- Page Main Content [End] -->
				<!-- Page Footer Start -->
					<footer class="footer border-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="copyright">All Rights Reserved | &copy; MERRY-GO ROUND SYSTEM - 2021</div>
			</div>
			<div class="col">
				<div class="footer-links text-right">
					<a href="http://localhost/MERRY/info/about">About us</a> | 
					<a href="http://localhost/MERRY/info/help">Help and FAQ</a> |
					<a href="http://localhost/MERRY/info/contact">Contact us</a>  |
					<a href="http://localhost/MERRY/info/privacy_policy">Privacy Policy</a> |
					<a href="http://localhost/MERRY/info/terms_and_conditions">Terms and Conditions</a>
				</div>
			</div>
			
		</div>
	</div>
</footer>				<!-- Page Footer Ends -->
				<div class="flash-msg-container"></div>
				<!-- Modal page for displaying ajax page -->
				<div id="main-page-modal" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body p-0 reset-grids inline-page">
							</div>
							<div style="top: 5px; right:5px; z-index: 999;" class="position-absolute">
								<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&times;</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal page for displaying record delete prompt -->
				<div class="modal fade" id="delete-record-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="delete-record-modal-confirm" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Delete record</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
									<span aria-hidden="true">&times;</span> 
								</button>
							</div>
							<div id="delete-record-modal-msg" class="modal-body"></div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<a href="" id="delete-record-modal-btn" class="btn btn-primary">Delete</a> 
							</div>
						</div>
					</div>
				</div>
				<!-- Image Preview Component [Start] -->
				<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
					<div class="slides"></div>
					<h3 class="title"></h3>
					<a class="prev">‹</a>
					<a class="next">›</a>
					<a class="close">×</a>
					<a class="play-pause"></a>
					<ol class="indicator"></ol>
				</div>
				<!-- Image Preview Component [End] -->
				<template id="page-loading-indicator">
					<div class="p-2 text-center m-2 text-muted m-auto">
						<div class="ajax-loader"></div>
						<h4 class="p-3 mt-2 font-weight-light">Loading...</h4>
					</div>
				</template>
				<template id="page-saving-indicator">
					<div class="p-2 text-center m-2 text-muted">
						<div class="lds-dual-ring"></div>
						<h4 class="p-3 mt-2 font-weight-light">Saving...</h4>
					</div>
				</template>
				<template id="inline-loading-indicator">
					<div class="p-2 text-center d-flex justify-content-center">
						<span class="loader mr-3"></span>
						<span class="font-weight-bold">Loading...</span>
					</div>
				</template>
			</div>
		</div>
		<script>
			var siteAddr = 'http://localhost/MERRY/';
			var defaultPageLimit = 20;
			var csrfToken = '56bbf99d1b1e68ce7ab0d222670f95f7';
		</script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/popper.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/bootstrap-4.3.1.min.js"></script>
						<script type="text/javascript" src="http://localhost/MERRY/assets/js/flatpickr.min.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/summernote.min.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/bootstrap-editable.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/plugins.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/plugins-init.js"></script>
				<script type="text/javascript" src="http://localhost/MERRY/assets/js/page-scripts.js"></script>
			</body>
</html>































<!DOCTYPE html>
<html>
	<head>
		<title>Add New Users</title>
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
		<body id="index" class="with-login index-register">
		<div id="page-wrapper">
			<!-- Show progress bar when ajax upload-->
			<div class="progress ajax-progress-bar">
				<div class="progress-bar"></div>
			</div>
			<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/MERRY/Home">
            <img class="img-responsive" src="http://localhost/MERRY/assets/images/logo.png" /> MERRY-GO ROUND SYSTEM            </a>
                    </div>
    </div>
    			<div id="main-content">
				<!-- Page Main Content Start -->
					<div id="page-content">
						<section class="page" id="add-page-wbi8gdve7j5p" data-page-type="add"  data-display-type="" data-page-url="http://localhost/MERRY/index/register">
        <div  class="border-top">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col comp-grid">
                    <h4 class="record-title ">USER REGISTRATION</h4>
                </div>
                <div class="col-sm-6 comp-grid">
                    <div class="">
                        <div class="text-center">
                            Already have an account?  <a class="btn btn-primary" href="http://localhost/MERRY/"> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div  class="">
        <div class="container-fluid">
            <div class="row md-gutters">
                <div class="col-md-4">
                                        <div  class=" animated bounceInRight page-content">
                                        <form  action="reg.php"  method="post">
    <div class="input-group form-group">
        
            <label>ENTER YOUR NAME</label>
        
            <input placeholder="enter name" name="name"  required="required" class="form-control" type="text"  />
            <div class="input-group-append">
                <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
            </div>
        </div>
        <div class="input-group form-group">
        <label>ENTER YOUR EMAIL</label>
            <input type="email" placeholder="Enter Email" name="email" class="form-control" required>
            <div class="input-group-append">
                <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
            </div>
        </div>

        <div class="input-group form-group">
        <label>ENTER PASSWORD</label>
            <input  placeholder="Password" required="required"  name="password" class="form-control " type="password" />
            <div class="input-group-append">
                <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
            </div>
            <div class="password-strength-msg">
                                                                    <small class="font-weight-bold">Should contain</small>
                                                                    <small class="length chip">6 Characters minimum</small>
                                                                    <small class="caps chip">Capital Letter</small>
                                                                    <small class="number chip">Number</small>
                                                                    <small class="special chip">Symbol</small>
                                                                </div>
        </div>

        <div class="input-group form-group">
        <label>CONFIRM PASSWORD</label>
            <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control " required>
            <div class="input-group-append">
                <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
            </div>
        </div>

        <div class="form-group text-center">
            <button class="btn btn-primary btn-block btn-md" type="submit"> 
                <i class="load-indicator">
                    <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                </i>
                Register <i class="fa fa-key"></i>
            </button>
        </div>
        <hr />
    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
			var csrfToken = '7278189cdbd71e0161d6cabb4df5ac70';
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
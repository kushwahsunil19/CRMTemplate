<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light"  data-sidebar-size="lg" data-sidebar-image="none">
	

<?php include("includes/head.php"); ?>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<?php include("includes/header.php"); ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
				<?php include("includes/sidebar.php"); ?>
			
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
					<div class="page-wrapper">
				<div class="content container-fluid">
					<div class="card mb-0">
						<div class="card-body">
							<!-- Page Header -->
							<div class="page-header">
								<div class="content-page-header">
									<h5>Add Customer</h5>
								</div>	
							</div>
							<!-- /Page Header -->				
							<div class="row">
								<div class="col-md-12">
		<form id="customer-form"  enctype="multipart/form-data">
    <div class="form-group-item">
        <h5 class="form-title">Basic Details</h5>
        <div class="profile-picture">
            <div class="upload-profile">
                <div class="profile-img">
                    <img id="blah" class="avatar" src="assets/img/profiles/avatar-14.jpg" alt="profile-img">
                </div>
                <div class="add-profile">
                    <h5>Upload a New Photo</h5>
                    <span>Profile-pic.jpg</span>
                </div>
            </div>
         <div class="img-upload">
    <label class="btn btn-upload">
        Upload  <input type="file" id="profile-pic" name="profile-pic" value="" required>

    </label>
    <a class="btn btn-remove">Remove</a>
</div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                </div>
            </div>
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="input-block mb-3">
        <label for="mobile">Mobile <span class="text-danger">*</span></label>
        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number">
        <!-- The 'pattern' attribute with value '[0-9]*' ensures that only numeric input is allowed -->
        <small id="mobileError" class="text-danger"></small>
    </div>
</div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" class="form-control" placeholder="Enter Website Address">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="notes">Notes</label>
                    <input type="text" id="notes" name="notes" class="form-control" placeholder="Enter Your Notes">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group-item">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="billing-btn mb-2">
                    <h5 class="form-title">Billing Address</h5>
                </div>
                <div class="input-block mb-3">
                    <label for="billing_name">Name</label>
                    <input type="text" id="billing_name" name="billing_name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="input-block mb-3">
                    <label for="billing_address1">Address Line 1</label>
                    <input type="text" id="billing_address1" name="billing_address1" class="form-control" placeholder="Enter Address 1">
                </div>
                <div class="input-block mb-3">
                    <label for="billing_address2">Address Line 2</label>
                    <input type="text" id="billing_address2" name="billing_address2" class="form-control" placeholder="Enter Address 2">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="input-block mb-3">
                            <label for="billing_country">Country</label>
                            <input type="text" id="billing_country" name="billing_country" class="form-control" placeholder="Enter Country">
                        </div>
                        <div class="input-block mb-3">
                            <label for="billing_city">City</label>
                            <input type="text" id="billing_city" name="billing_city" class="form-control" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="input-block mb-3">
                            <label for="billing_state">State</label>
                            <input type="text" id="billing_state" name="billing_state" class="form-control" placeholder="Enter State">
                        </div>
                        <div class="input-block mb-3">
                            <label for="billing_pincode">Pincode</label>
                            <input type="text" id="billing_pincode" name="billing_pincode" class="form-control" placeholder="Enter Pincode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="billing-btn">
                    <h5 class="form-title mb-0">Shipping Address</h5>
                 <a href="#" id="copyBillingBtn" class="btn btn-primary">Copy from Billing</a> <!-- Add id attribute -->
                </div>
                <div class="input-block mb-3">
                    <label for="shipping_name">Name</label>
                    <input type="text" id="shipping_name" name="shipping_name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="input-block mb-3">
                    <label for="shipping_address1">Address Line 1</label>
                    <input type="text" id="shipping_address1" name="shipping_address1" class="form-control" placeholder="Enter Address 1">
                </div>
                <div class="input-block mb-3">
                    <label for="shipping_address2">Address Line 2</label>
                    <input type="text" id="shipping_address2" name="shipping_address2" class="form-control" placeholder="Enter Address 2">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="input-block mb-3">
                            <label for="shipping_country">Country</label>
                            <input type="text" id="shipping_country" name="shipping_country" class="form-control" placeholder="Enter Country">
                        </div>
                        <div class="input-block mb-3">
                            <label for="shipping_city">City</label>
                            <input type="text" id="shipping_city" name="shipping_city" class="form-control" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="input-block mb-3">
                            <label for="shipping_state">State</label>
                            <input type="text" id="shipping_state" name="shipping_state" class="form-control" placeholder="Enter State">
                        </div>
                        <div class="input-block mb-3">
                            <label for="shipping_pincode">Pincode</label>
                            <input type="text" id="shipping_pincode" name="shipping_pincode" class="form-control" placeholder="Enter Pincode">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group-customer customer-additional-form">
        <div class="row">
            <h5 class="form-title">Bank Details</h5>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="bank_name">Bank Name</label>
                    <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Enter Bank Name">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="branch">Branch</label>
                    <input type="text" id="branch" name="branch" class="form-control" placeholder="Enter Branch Name">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="input-block mb-3">
                    <label for="account_holder_name">Account Holder Name</label>
                    <input type="text" id="account_holder_name" name="account_holder_name" class="form-control" placeholder="Enter Account Holder Name">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="input-block mb-3">
                    <label for="account_number">Account Number</label>
                    <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Enter Account Number">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="input-block mb-3">
                    <label for="ifsc">IFSC</label>
                    <input type="text" id="ifsc" name="ifsc" class="form-control" placeholder="Enter IFSC Code">
                </div>
            </div>
        </div>
    </div>
    <div class="add-customer-btns text-end">
  <button type="submit" class="btn customer-btn-save">Save Changes</button>
    <button type="button" class="btn customer-btn-cancel">Cancel</button>
    </div>
</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->

		<!--Theme Setting -->
		<div class="settings-icon"> 
			<span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><img src="assets/img/icons/siderbar-icon2.svg" class="feather-five" alt="layout"></span> 
		</div> 
		<div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas"> 
			<div class="sidebar-headerset">
				<div class="sidebar-headersets">
					<h2>Customizer</h2>
					<h3>Customize your overview Page layout</h3>
				</div>
				<div class="sidebar-headerclose">
					<a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="img"></a>
				</div>
			</div>
			<div class="offcanvas-body p-0"> 
				<div data-simplebar class="h-100"> 
					<div class="settings-mains"> 
						<div class="layout-head">
							<h5>Layout</h5>
							<h6>Choose your layout</h6>
						</div>
						<div class="row"> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
									<input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input"> 
									<label class="form-check-label avatar-md w-100" for="customizer-layout01"> 
										<img src="assets/img/vertical.png" alt="img">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Vertical</h5> 
							</div> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
								<input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input"> 
									<label class="form-check-label  avatar-md w-100" for="customizer-layout02"> 
										<img src="assets/img/horizontal.png" alt="img">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Horizontal</h5> 
							</div> 
							<div class="col-4 d-none"> 
								<div class="form-check card-radio p-0"> 
									<input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input"> 
									<label class="form-check-label  avatar-md w-100" for="customizer-layout03"> 
										<img src="assets/img/two-col.png" alt="img">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Two Column</h5> 
								</div> 
							</div> 
							<div class="d-flex align-items-center justify-content-between pt-3">
								<div class="layout-head mb-0">
									<h5>RTL Mode</h5>
									<h6>Change Language Direction.</h6>
								</div>
								<div class="active-switch">
									<div class="status-toggle">
										<input id="rtl" class="check" type="checkbox">
										<label for="rtl" class="checktoggle checkbox-bg">checkbox</label>
									</div>
								</div>
							</div>
							<div class="layout-head pt-3">
								<h5>Color Scheme</h5>
								<h6>Choose Light or Dark Scheme.</h6>
							</div>
							<div class="colorscheme-cardradio"> 
								<div class="row"> 
									<div class="col-4">
										<div class="form-check card-radio blue  p-0 "> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue"> 
											<label class="form-check-label  avatar-md w-100" for="layout-mode-blue"> 
												<img src="assets/img/vertical.png" alt="img">
											</label> 
										</div> 
										<h5 class="fs-13 text-center mt-2 mb-2">Blue</h5> 
									</div>
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light"> 
										<label class="form-check-label  avatar-md w-100" for="layout-mode-light"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2 mb-2">Light</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio dark  p-0 "> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark"> 
										<label class="form-check-label avatar-md w-100 " for="layout-mode-dark"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2 mb-2">Dark</h5> 
								</div> 
								<div class="col-4 d-none"> 
									<div class="form-check card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange"> 
										<label class="form-check-label  avatar-md w-100 " for="layout-mode-orange"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2 mb-2">Orange</h5> 
								</div> 
								<div class="col-4 d-none"> 
									<div class="form-check card-radio maroon p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon"> 
										<label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2 mb-2">Brink Pink</h5> 
								</div> 
								<div class="col-4 d-none"> 
									<div class="form-check card-radio purple p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple"> 
										<label class="form-check-label  avatar-md w-100 " for="layout-mode-purple"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2 mb-2">Green</h5> 
								</div> 
							</div> 
						</div> 

						<div id="layout-width"> 
							<div class="layout-head pt-3">
								<h5>Layout Width</h5>
								<h6>Choose Fluid or Boxed layout.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid"> 
										<label class="form-check-label avatar-md w-100" for="layout-width-fluid"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Fluid</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0 "> 
										<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed"> 
										<label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed"> 
											<img src="assets/img/boxed.png" alt="img"> 
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Boxed</h5> 
								</div> 
							</div> 
						</div> 

						<div id="layout-position" class="d-none"> 
							<div class="layout-head pt-3">
								<h5>Layout Position</h5>
								<h6>Choose Fixed or Scrollable Layout Position.</h6>
							</div>
							<div class="btn-group bor-rad-50 overflow-hidden radio" role="group"> 
								<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed"> 
								<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label> 

								<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable"> 
								<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label> 
							</div> 
						</div> 
						<div class="layout-head pt-3">
							<h5>Topbar Color</h5>
							<h6>Choose Light or Dark Topbar Color.</h6>
						</div>
						<div class="row"> 
							<div class="col-4"> 
								<div class="form-check card-radio  p-0"> 
									<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light"> 
									<label class="form-check-label avatar-md w-100" for="topbar-color-light"> 
										<img src="assets/img/vertical.png" alt="img">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Light</h5> 
							</div> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
									<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark"> 
									<label class="form-check-label  avatar-md w-100" for="topbar-color-dark"> 
										<img src="assets/img/dark.png" alt="img">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Dark</h5> 
							</div> 
						</div> 

						<div id="sidebar-size"> 
							<div class="layout-head pt-3">
								<h5>Sidebar Size</h5>
								<h6>Choose a size of Sidebar.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio  p-0 "> 
										<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg" > 
										<label class="form-check-label avatar-md w-100" for="sidebar-size-default"> 
											<img src="assets/img/vertical.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Default</h5> 
								</div> 

								<div class="col-4 d-none"> 
									<div class="form-check sidebar-setting card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-size-compact"> 
											<img src="assets/img/compact.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Compact</h5> 
								</div> 

								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0 "> 
										<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover" > 
										<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover"> 
											<img src="assets/img/small-hover.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Small Sidebar</h5> 
								</div> 
							</div> 
						</div> 

						<div id="sidebar-view"> 
							<div class="layout-head pt-3">
								<h5>Sidebar View</h5>
								<h6>Choose Default or Detached Sidebar view.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio  p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default"> 
										<label class="form-check-label avatar-md w-100" for="sidebar-view-default"> 
											<img src="assets/img/compact.png" alt="img">
										</label>
										</div> 
									<h5 class="fs-13 text-center mt-2">Default</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached"> 
											<img src="assets/img/detached.png" alt="img">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Detached</h5> 
								</div> 
							</div> 
						</div> 
						<div id="sidebar-color"> 
							<div class="layout-head pt-3">
								<h5>Sidebar Color</h5>
								<h6>Choose a color of Sidebar.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-color-light"> 
											<span class="bg-light bg-sidebarcolor"></span>
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Light</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark"> 
											<span class="bg-darks bg-sidebarcolor"></span>
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Dark</h5> 
								</div> 
								<div class="col-4 d-none"> 
									<div class="form-check sidebar-setting card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient"> 
										<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient"> 
											<span class="bg-gradients bg-sidebarcolor"></span>
										</label>  
									</div> 
									<h5 class="fs-13 text-center mt-2">Gradient</h5> 
								</div>
								<div class="col-4 d-none"> 
									<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false"> 
										<span class="d-flex gap-1 h-100"> 
											<span class="flex-shrink-0"> 
												<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"> 
													<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span> 
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
													</span> 
												</span> 
												<span class="flex-grow-1"> 
													<span class="d-flex h-100 flex-column"> 
														<span class="bg-light d-block p-1"></span> 
														<span class="bg-light d-block p-1 mt-auto"></span> 
													</span> 
												</span> 
											</span> 
										</button> 
										<h5 class="fs-13 text-center mt-2">Gradient</h5> 
								</div> 
							</div>
							
						</div> 
					</div> 
				</div> 

			</div> 
			<div class="offcanvas-footer border-top p-3 text-center"> 
				<div class="row"> 
					<div class="col-6"> 
						<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button> 
					</div> 
					<div class="col-6"> 
						<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a> 
					</div> 
				</div> 
			</div> 
		</div>
		<!-- /Theme Setting -->		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Intl Tell Input js -->
		<script src="assets/plugins/intlTelInput/js/intlTelInput-jquery.min.js"></script>

		<!-- Theme Settings JS -->
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
			<script src="assets/plugins/toastr/toastr.min.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		<script>
		    $(document).ready(function() {
  $('#customer-form').submit(function(e) {
    e.preventDefault(); // Prevent form submission

    // Validate file size
    var fileSize = $('#profile-pic')[0].files[0].size;
    if (fileSize > 2 * 1024 * 1024) { // 2 MB in bytes
        // Display warning Toastr notification for file size exceeding limit
        toastr.warning('File size exceeds 2 MB limit.');
        return;
    }

    // Validate file type
    var fileInput = $('#profile-pic');
    var fileType = fileInput[0].files[0].type;
    var validExtensions = ['image/jpeg', 'image/png']; // Valid image file types
    if (!validExtensions.includes(fileType)) {
        // Display warning Toastr notification for unsupported file type
        toastr.warning('Unsupported file type. Please upload a JPEG or PNG image.');
        return;
    }

    // Serialize form data
   var formData = new FormData(this);
   

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'insert_customer.php',
            data: formData,
            processData: false, // Prevent jQuery from automatically processing the data
            contentType: false, // Prevent jQuery from automatically setting the content type
            success: function(response) {
                console.log('formData',formData);
            // Parse JSON response
            var data = JSON.parse(response);
            if (data.success) {
                // Display success Toastr notification
                toastr.success(data.message);
            } else {
                // Display error Toastr notification
                toastr.error(data.message);
            }
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(xhr.responseText);
            // Display error Toastr notification
            toastr.error('Error: Unable to execute query.');
        }
    });
});

    

    // Handle click event of "Copy from Billing" button
    $('#copyBillingBtn').click(function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        
        // Copy values from billing address fields to shipping address fields
        $('#shipping_name').val($('#billing_name').val());
        $('#shipping_address_line1').val($('#billing_address_line1').val());
        $('#shipping_address_line2').val($('#billing_address_line2').val());
        $('#shipping_country').val($('#billing_country').val());
        $('#shipping_city').val($('#billing_city').val());
        $('#shipping_state').val($('#billing_state').val());
        $('#shipping_pincode').val($('#billing_pincode').val());
    });
    


document.getElementById('mobile').addEventListener('input', function() {
    // Get the mobile input value
    var mobileValue = this.value;

    // Validate the input
    if (!/^\d{10,12}$/.test(mobileValue)) {
        document.getElementById('mobileError').textContent = 'Mobile number must be between 10 and 12 digits.';
    } else {
        document.getElementById('mobileError').textContent = '';
    }
});

 // Add change event listener to the file input
    $('#profile-pic').change(function() {
        // Get the selected file name
        var fileName = $(this).val().split('\\').pop(); // Extract only the file name from the file path

        // Update the text of the <span> element with the selected file name
        $('.add-profile span').text(fileName);
        // $('#profile-pic').val(fileName);
        
    });

});

		</script>

	</body>


</html>
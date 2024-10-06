<?php   require("includes/session.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
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
									<h5>Add Leads</h5>
								</div>	
							</div>
							<!-- /Page Header -->				
							<div class="row">
								<div class="col-md-12">
		<form id="lead-form" enctype="multipart/form-data">
    <div class="form-group-item">
        <h5 class="form-title">Lead Details</h5>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="full_name">Full Name <span class="text-danger">*</span></label>
                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter Full Name" required>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Enter Phone Number">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="lead_source">Lead Source <span class="text-danger">*</span></label>
                    <select id="lead_source" name="lead_source" class="form-control" required>
                        <option value="">Select Lead Source</option>
                        <option value="Website Form">Website Form</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Referral">Referral</option>
                        <option value="Other">Other</option>
                        <option value="Lead Tracking">Lead Tracking</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="lead_status">Lead Status</label>
                    <select id="lead_status" name="lead_status" class="form-control">
                        <option value="New">New</option>
                        <option value="Contacted">Contacted</option>
                        <option value="Qualified">Qualified</option>
                        <option value="Proposal Sent">Proposal Sent</option>
                        <option value="Won">Won</option>
                        <option value="Lost">Lost</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="lead_stage">Lead Stage</label>
                    <select id="lead_stage" name="lead_stage" class="form-control">
                        <option value="Initial Contact">Initial Contact</option>
                        <option value="Follow-Up">Follow-Up</option>
                        <option value="Negotiation">Negotiation</option>
                        <option value="Final Decision">Final Decision</option>
                    </select>
                </div>
            </div>
            <div class="row">
                


<style>
.select2-container {
  min-width: 400px;
}

.select2-results__option {
  padding-right: 20px;
  vertical-align: middle;
}
.select2-results__option:before {
  content: "";
  display: inline-block;
  position: relative;
  height: 20px;
  width: 20px;
  border: 2px solid #e9e9e9;
  border-radius: 4px;
  background-color: #fff;
  margin-right: 20px;
  vertical-align: middle;
}
.select2-results__option[aria-selected=true]:before {
  font-family:fontAwesome;
  content: "\f00c";
  color: #fff;
  background-color: #f77750;
  border: 0;
  display: inline-block;
  padding-left: 3px;
}
.select2-container--default .select2-results__option[aria-selected=true] {
	background-color: #fff;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
	background-color: #eaeaeb;
	color: #272727;
}
.select2-container--default .select2-selection--multiple {
	margin-bottom: 10px;
}
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
	border-radius: 4px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
	border-color: #f77750;
	border-width: 2px;
}
.select2-container--default .select2-selection--multiple {
	border-width: 2px;
}
.select2-container--open .select2-dropdown--below {
	
	border-radius: 6px;
	box-shadow: 0 0 10px rgba(0,0,0,0.5);

}
.select2-selection .select2-selection--multiple:after {
	content: 'hhghgh';
}
/* select with icons badges single*/
.select-icon .select2-selection__placeholder .badge {
	display: none;
}
.select-icon .placeholder {
/* 	display: none; */
}
.select-icon .select2-results__option:before,
.select-icon .select2-results__option[aria-selected=true]:before {
	display: none !important;
	/* content: "" !important; */
}
.select-icon  .select2-search--dropdown {
	display: none;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>


			<div class="col-lg-12">
    <div class="input-block mb-3">
        <label for="product_select">Select Products</label>
        <select id="product_select" class="js-select2" multiple="multiple">
            <!-- Options will be dynamically populated here -->
        </select>
    </div>
</div>

	



    <div class="col-lg-12 custom-requirement-details" style="display: none;">
        <div class="input-block mb-3">
            <label for="custom_requirement_details">Custom Requirement Details</label>
            <textarea id="custom_requirement_details" name="custom_requirement_details[]" class="form-control" placeholder="Enter Custom Requirement Details"></textarea>
        </div>
    </div>
</div>
        </div>
    </div>
    <div class="add-lead-btns text-end">
        <button type="submit" class="btn lead-btn-save">Save Lead</button>
        <button type="button" class="btn lead-btn-cancel">Cancel</button>
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
		<!--<div class="settings-icon"> -->
		<!--	<span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><img src="assets/img/icons/siderbar-icon2.svg" class="feather-five" alt="layout"></span> -->
		<!--</div> -->
		<!--<div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas"> -->
		<!--	<div class="sidebar-headerset">-->
		<!--		<div class="sidebar-headersets">-->
		<!--			<h2>Customizer</h2>-->
		<!--			<h3>Customize your overview Page layout</h3>-->
		<!--		</div>-->
		<!--		<div class="sidebar-headerclose">-->
		<!--			<a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="img"></a>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--	<div class="offcanvas-body p-0"> -->
		<!--		<div data-simplebar class="h-100"> -->
		<!--			<div class="settings-mains"> -->
		<!--				<div class="layout-head">-->
		<!--					<h5>Layout</h5>-->
		<!--					<h6>Choose your layout</h6>-->
		<!--				</div>-->
		<!--				<div class="row"> -->
		<!--					<div class="col-4"> -->
		<!--						<div class="form-check card-radio p-0"> -->
		<!--							<input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input"> -->
		<!--							<label class="form-check-label avatar-md w-100" for="customizer-layout01"> -->
		<!--								<img src="assets/img/vertical.png" alt="img">-->
		<!--							</label> -->
		<!--						</div> -->
		<!--						<h5 class="fs-13 text-center mt-2">Vertical</h5> -->
		<!--					</div> -->
		<!--					<div class="col-4"> -->
		<!--						<div class="form-check card-radio p-0"> -->
		<!--						<input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input"> -->
		<!--							<label class="form-check-label  avatar-md w-100" for="customizer-layout02"> -->
		<!--								<img src="assets/img/horizontal.png" alt="img">-->
		<!--							</label> -->
		<!--						</div> -->
		<!--						<h5 class="fs-13 text-center mt-2">Horizontal</h5> -->
		<!--					</div> -->
		<!--					<div class="col-4 d-none"> -->
		<!--						<div class="form-check card-radio p-0"> -->
		<!--							<input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input"> -->
		<!--							<label class="form-check-label  avatar-md w-100" for="customizer-layout03"> -->
		<!--								<img src="assets/img/two-col.png" alt="img">-->
		<!--							</label> -->
		<!--						</div> -->
		<!--						<h5 class="fs-13 text-center mt-2">Two Column</h5> -->
		<!--						</div> -->
		<!--					</div> -->
		<!--					<div class="d-flex align-items-center justify-content-between pt-3">-->
		<!--						<div class="layout-head mb-0">-->
		<!--							<h5>RTL Mode</h5>-->
		<!--							<h6>Change Language Direction.</h6>-->
		<!--						</div>-->
		<!--						<div class="active-switch">-->
		<!--							<div class="status-toggle">-->
		<!--								<input id="rtl" class="check" type="checkbox">-->
		<!--								<label for="rtl" class="checktoggle checkbox-bg">checkbox</label>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--					<div class="layout-head pt-3">-->
		<!--						<h5>Color Scheme</h5>-->
		<!--						<h6>Choose Light or Dark Scheme.</h6>-->
		<!--					</div>-->
		<!--					<div class="colorscheme-cardradio"> -->
		<!--						<div class="row"> -->
		<!--							<div class="col-4">-->
		<!--								<div class="form-check card-radio blue  p-0 "> -->
		<!--									<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue"> -->
		<!--									<label class="form-check-label  avatar-md w-100" for="layout-mode-blue"> -->
		<!--										<img src="assets/img/vertical.png" alt="img">-->
		<!--									</label> -->
		<!--								</div> -->
		<!--								<h5 class="fs-13 text-center mt-2 mb-2">Blue</h5> -->
		<!--							</div>-->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check card-radio p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light"> -->
		<!--								<label class="form-check-label  avatar-md w-100" for="layout-mode-light"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2 mb-2">Light</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check card-radio dark  p-0 "> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark"> -->
		<!--								<label class="form-check-label avatar-md w-100 " for="layout-mode-dark"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2 mb-2">Dark</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4 d-none"> -->
		<!--							<div class="form-check card-radio p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange"> -->
		<!--								<label class="form-check-label  avatar-md w-100 " for="layout-mode-orange"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2 mb-2">Orange</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4 d-none"> -->
		<!--							<div class="form-check card-radio maroon p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon"> -->
		<!--								<label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2 mb-2">Brink Pink</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4 d-none"> -->
		<!--							<div class="form-check card-radio purple p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple"> -->
		<!--								<label class="form-check-label  avatar-md w-100 " for="layout-mode-purple"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2 mb-2">Green</h5> -->
		<!--						</div> -->
		<!--					</div> -->
		<!--				</div> -->

		<!--				<div id="layout-width"> -->
		<!--					<div class="layout-head pt-3">-->
		<!--						<h5>Layout Width</h5>-->
		<!--						<h6>Choose Fluid or Boxed layout.</h6>-->
		<!--					</div>-->
		<!--					<div class="row"> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check card-radio p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid"> -->
		<!--								<label class="form-check-label avatar-md w-100" for="layout-width-fluid"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Fluid</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check card-radio p-0 "> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed"> -->
		<!--								<label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed"> -->
		<!--									<img src="assets/img/boxed.png" alt="img"> -->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Boxed</h5> -->
		<!--						</div> -->
		<!--					</div> -->
		<!--				</div> -->

		<!--				<div id="layout-position" class="d-none"> -->
		<!--					<div class="layout-head pt-3">-->
		<!--						<h5>Layout Position</h5>-->
		<!--						<h6>Choose Fixed or Scrollable Layout Position.</h6>-->
		<!--					</div>-->
		<!--					<div class="btn-group bor-rad-50 overflow-hidden radio" role="group"> -->
		<!--						<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed"> -->
		<!--						<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label> -->

		<!--						<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable"> -->
		<!--						<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label> -->
		<!--					</div> -->
		<!--				</div> -->
		<!--				<div class="layout-head pt-3">-->
		<!--					<h5>Topbar Color</h5>-->
		<!--					<h6>Choose Light or Dark Topbar Color.</h6>-->
		<!--				</div>-->
		<!--				<div class="row"> -->
		<!--					<div class="col-4"> -->
		<!--						<div class="form-check card-radio  p-0"> -->
		<!--							<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light"> -->
		<!--							<label class="form-check-label avatar-md w-100" for="topbar-color-light"> -->
		<!--								<img src="assets/img/vertical.png" alt="img">-->
		<!--							</label> -->
		<!--						</div> -->
		<!--						<h5 class="fs-13 text-center mt-2">Light</h5> -->
		<!--					</div> -->
		<!--					<div class="col-4"> -->
		<!--						<div class="form-check card-radio p-0"> -->
		<!--							<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark"> -->
		<!--							<label class="form-check-label  avatar-md w-100" for="topbar-color-dark"> -->
		<!--								<img src="assets/img/dark.png" alt="img">-->
		<!--							</label> -->
		<!--						</div> -->
		<!--						<h5 class="fs-13 text-center mt-2">Dark</h5> -->
		<!--					</div> -->
		<!--				</div> -->

		<!--				<div id="sidebar-size"> -->
		<!--					<div class="layout-head pt-3">-->
		<!--						<h5>Sidebar Size</h5>-->
		<!--						<h6>Choose a size of Sidebar.</h6>-->
		<!--					</div>-->
		<!--					<div class="row"> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check sidebar-setting card-radio  p-0 "> -->
		<!--								<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg" > -->
		<!--								<label class="form-check-label avatar-md w-100" for="sidebar-size-default"> -->
		<!--									<img src="assets/img/vertical.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Default</h5> -->
		<!--						</div> -->

		<!--						<div class="col-4 d-none"> -->
		<!--							<div class="form-check sidebar-setting card-radio p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md"> -->
		<!--								<label class="form-check-label  avatar-md w-100" for="sidebar-size-compact"> -->
		<!--									<img src="assets/img/compact.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Compact</h5> -->
		<!--						</div> -->

		<!--						<div class="col-4"> -->
		<!--							<div class="form-check sidebar-setting card-radio p-0 "> -->
		<!--								<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover" > -->
		<!--								<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover"> -->
		<!--									<img src="assets/img/small-hover.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Small Sidebar</h5> -->
		<!--						</div> -->
		<!--					</div> -->
		<!--				</div> -->

		<!--				<div id="sidebar-view"> -->
		<!--					<div class="layout-head pt-3">-->
		<!--						<h5>Sidebar View</h5>-->
		<!--						<h6>Choose Default or Detached Sidebar view.</h6>-->
		<!--					</div>-->
		<!--					<div class="row"> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check sidebar-setting card-radio  p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default"> -->
		<!--								<label class="form-check-label avatar-md w-100" for="sidebar-view-default"> -->
		<!--									<img src="assets/img/compact.png" alt="img">-->
		<!--								</label>-->
		<!--								</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Default</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check sidebar-setting card-radio p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached"> -->
		<!--								<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached"> -->
		<!--									<img src="assets/img/detached.png" alt="img">-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Detached</h5> -->
		<!--						</div> -->
		<!--					</div> -->
		<!--				</div> -->
		<!--				<div id="sidebar-color"> -->
		<!--					<div class="layout-head pt-3">-->
		<!--						<h5>Sidebar Color</h5>-->
		<!--						<h6>Choose a color of Sidebar.</h6>-->
		<!--					</div>-->
		<!--					<div class="row"> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> -->
		<!--								<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light"> -->
		<!--								<label class="form-check-label  avatar-md w-100" for="sidebar-color-light"> -->
		<!--									<span class="bg-light bg-sidebarcolor"></span>-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Light</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4"> -->
		<!--							<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> -->
		<!--								<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark"> -->
		<!--								<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark"> -->
		<!--									<span class="bg-darks bg-sidebarcolor"></span>-->
		<!--								</label> -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Dark</h5> -->
		<!--						</div> -->
		<!--						<div class="col-4 d-none"> -->
		<!--							<div class="form-check sidebar-setting card-radio p-0"> -->
		<!--								<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient"> -->
		<!--								<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient"> -->
		<!--									<span class="bg-gradients bg-sidebarcolor"></span>-->
		<!--								</label>  -->
		<!--							</div> -->
		<!--							<h5 class="fs-13 text-center mt-2">Gradient</h5> -->
		<!--						</div>-->
		<!--						<div class="col-4 d-none"> -->
		<!--							<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false"> -->
		<!--								<span class="d-flex gap-1 h-100"> -->
		<!--									<span class="flex-shrink-0"> -->
		<!--										<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"> -->
		<!--											<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span> -->
		<!--											<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> -->
		<!--											<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> -->
		<!--											<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> -->
		<!--											</span> -->
		<!--										</span> -->
		<!--										<span class="flex-grow-1"> -->
		<!--											<span class="d-flex h-100 flex-column"> -->
		<!--												<span class="bg-light d-block p-1"></span> -->
		<!--												<span class="bg-light d-block p-1 mt-auto"></span> -->
		<!--											</span> -->
		<!--										</span> -->
		<!--									</span> -->
		<!--								</button> -->
		<!--								<h5 class="fs-13 text-center mt-2">Gradient</h5> -->
		<!--						</div> -->
		<!--					</div>-->
							
		<!--				</div> -->
		<!--			</div> -->
		<!--		</div> -->

		<!--	</div> -->
		<!--	<div class="offcanvas-footer border-top p-3 text-center"> -->
		<!--		<div class="row"> -->
		<!--			<div class="col-6"> -->
		<!--				<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button> -->
		<!--			</div> -->
		<!--			<div class="col-6"> -->
		<!--				<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a> -->
		<!--			</div> -->
		<!--		</div> -->
		<!--	</div> -->
		<!--</div>-->
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

		<script>
$(document).ready(function() {
    $('#lead-form').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        // Serialize form data
        var formData = new FormData(this);

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'insert_lead.php',
            data: formData,
            processData: false, // Prevent jQuery from automatically processing the data
            contentType: false, // Prevent jQuery from automatically setting the content type
            success: function(response) {
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
    
  
     $.ajax({
        url: 'fetch_allproducts.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var select = $('#product_select');
            // Clear any existing options
            select.empty();
            // Populate dropdown with options
            response.forEach(function(product) {
                select.append($('<option>', {
                    value: product.id,
                    text: product.name,
                    'data-badge': '' // Optionally add badge data here
                }));
            });
            // Add Custom Requirement option
            select.append($('<option>', {
                value: 'custom',
                text: 'Custom Requirement',
                'data-badge': ''
            }));
            // Initialize the Select2 plugin after populating options
            select.select2({
                placeholder: 'Choose Products'
            });

            // Event listener for change
            select.on('change', function() {
                var selectedOptions = $(this).val();
                if (selectedOptions && selectedOptions.includes('custom')) {
                    $('.custom-requirement-details').show();
                } else {
                    $('.custom-requirement-details').hide();
                }
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching products: ' + error);
        }
    });


$(".js-select2").select2({
			closeOnSelect : false,
			placeholder : "Placeholder",
			// allowHtml: true,
			allowClear: true,
			tags: true // создает новые опции на лету
		});

    
});


		</script>




	</body>


</html>
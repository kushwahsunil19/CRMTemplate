<?php  require("includes/session.php");


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light"  data-sidebar-size="lg" data-sidebar-image="none">
	
<?php include("includes/head.php"); ?>
<style>
    .card-table .card-body .table td {
    color: #1F0066;
    font-weight: 400;
    border-top: 0;
    font-size: 14px;
    height: 40px;
    border-bottom: 1px solid #f5f5f5;
    padding: 10px 10px;
    white-space: nowrap;
    box-shadow: none;
    vertical-align: middle;
}
</style>
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
			<form id="quotation-form" method="post" >
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="page-header">
                        <div class="content-page-header">
                            <h5>Create Quotations</h5>
                        </div>
                    </div>
<div class="row">
    <div class="col-md-12">
        <div class="quotation-card">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="input-block mb-3">
                        <div class="mb-2">
                            <label for="document_title">Document Title</label>
                        </div>
                        <label class="custom_check me-3 mb-0">
                            <input type="checkbox" id="quotation" name="document_title" value="quotation">
                            <span class="checkmark"></span> Quotation
                        </label>
                        <label class="custom_check mb-0">
                            <input type="checkbox" id="estimate" name="document_title" value="estimate">
                            <span class="checkmark"></span> Estimate
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group-item border-0 mb-0">
              <div class="row align-item-center">
                <div class="col-lg-4 col-md-6 col-sm-12">                                            
    <div class="input-block mb-3">
        <label>Select Leads</label>
        <select class="select" name="lead_id">
            <option value="">Choose Leads</option>
            <?php
        // Include your database connection file here
        include_once('includes/db.php');

        try {
            // Fetch all leads from the database
            $stmt = $conn->query("SELECT lead_id, full_name FROM leads ORDER BY full_name");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Output lead names and IDs as options
                echo '<option value="' . $row['lead_id'] . '">' . htmlspecialchars($row['full_name']) . '</option>';
            }
        } catch (PDOException $e) {
            // Handle database error
            echo '<option value="">Database Error: Unable to fetch leads</option>';
        }

        // Close database connection
        $conn = null;
        ?>
        </select>
    </div>                                      
</div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="quotation_date">Quotation Date</label>
                    <input type="text" id="quotation_date" name="quotation_date" class="datetimepicker form-control" placeholder="Select Date">
                </div>                                          
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="due_date">Due Date</label>
                    <input type="text" id="due_date" name="due_date" class="datetimepicker form-control" placeholder="Select Date">
                </div>                                          
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-block mb-3">
                    <label for="reference_no">Reference No</label>
                    <input type="text" id="reference_no" name="reference_no" class="form-control" placeholder="Enter Reference Number">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-block mb-3">
            <label for="product_id">Products</label>
            <ul class="form-group-plus css-equal-heights">
                <li>
            <select id="product_id" name="product_id" class="select">
            <option>Select Product</option>
            <?php
            // Include your database connection file here
            include('includes/db.php');
            
            try {
            // Fetch all products from the database
            $stmt = $conn->query("SELECT product_id, product_name FROM tbl_products ORDER BY product_name");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Output product names and IDs as options
            echo '<option value="' . $row['product_id'] . '">' . htmlspecialchars($row['product_name']) . '</option>';
            }
            } catch (PDOException $e) {
            // Handle database error
            echo '<option value="">Database Error: Unable to fetch products</option>';
            }
            
            // Close database connection
            $conn = null;
            ?>
            
            </select>
            </li>
            <li>    
            <a class="btn btn-primary form-plus-btn" href="add_products.php"><i class="fas fa-plus-circle"></i></a>
            </li>
            </ul>                                                
            </div>      
            </div>
            </div>
          
            </div>
            <div class="form-group-item">
            <div class="card-table">
            <div class="card-body">
            <div class="table-responsive no-pagination">
            <table id="product_table" class="table table-center table-hover datatable">
            <thead class="thead-light">
            <tr>
                <th>Product / Service</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Discount %</th>
                <th>Tax %</th>
                <th>Amount</th>
                <th class="no-sort">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                
            </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
 
    <div class="form-group-item border-0 p-0">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="form-group-bank">
                    <div class="row align-items-center">
                        <div class="col-md-8">
    <div class="input-block mb-3">
        <label for="bank_id">Select Bank</label>
        <select id="bank_id" name="bank_id" class="select">
            <option value="">Select Bank</option>
            <?php
            // Include your database connection file here
            include('includes/db.php');

            try {
                // Fetch all banks from the database
                $stmt = $conn->query("SELECT bank_id, bank_name FROM banks ORDER BY bank_name");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // Output bank names and IDs as options
                    echo '<option value="' . $row['bank_id'] . '">' . htmlspecialchars($row['bank_name']) . '</option>';
                }
            } catch (PDOException $e) {
                // Handle database error
                echo '<option value="">Database Error: Unable to fetch banks</option>';
            }

            // Close database connection
            $conn = null;
            ?>
        </select>
    </div>
</div>

                        <div class="col-md-4">
                            <div class="form-groups">
                                <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#bank_details">Add Bank</a>
                            </div>
                        </div>
                    </div>
                    <div class="input-block mb-3 notes-form-group-info">
                        <label for="notes">Notes</label>
                        <textarea id="notes" name="notes" class="form-control" placeholder="Enter Notes"></textarea>
                    </div>
                    <div class="input-block mb-3 notes-form-group-info mb-0">
                        <label for="terms_and_conditions">Terms and Conditions</label>
                        <textarea id="terms_and_conditions" name="terms_and_conditions" class="form-control" placeholder="Enter Terms and Conditions"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="form-group-bank">
                   <div class="invoice-total-box">
    <div class="invoice-total-inner">
        <div class="status-toggle justify-content-between">
            <div class="d-flex align-center">
                <p>Round Off </p>
                <input id="round_off" class="check" type="checkbox" checked="">
                <label for="round_off" class="checktoggle checkbox-bg">checkbox</label>
            </div>
            <span id="round_off_amount">0.00</span>
        </div>                                                                
    </div>
    <div class="invoice-total-footer">
        <h4>Total Amount <span id="total_amount">0.00</span></h4>
    </div>
</div
                    <div class="input-block mb-3">
                        <label for="signature_name">Signature Name</label>
                        <input type="text" id="signature_name" name="signature_name" class="form-control" placeholder="Enter Signature Name">
                    </div>
                    <div class="input-block mb-0">
                        <label for="signature_image">Signature Image</label>
                        <div class="input-block service-upload service-upload-info mb-0">
                            <span><i class="fe fe-upload-cloud me-1"></i>Upload Signature</span>
                            <input type="file" id="signature_image" name="signature_image" multiple="">
                            <div id="frames"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>                          
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</form>
			<!-- /Page Wrapper -->

	

			<!-- Delete Items Modal -->
			<div class="modal custom-modal fade" id="delete_discount" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Products</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Delete</a>
									</div>
									<div class="col-6">
										<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Items Modal -->

			<!-- Add Bank Details Modal -->
		<div class="modal custom-modal fade" id="bank_details" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="form-header modal-header-title text-start mb-0">
                    <h4 class="mb-0">Add Bank Details</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addBankForm">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label for="bank_name">Bank Name <span class="text-danger">*</span></label>
                                <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Enter Bank Name" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label for="account_number">Account Number <span class="text-danger">*</span></label>
                                <input type="number" id="account_number" name="account_number" class="form-control" placeholder="Enter Account Number" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label for="branch_name">Branch Name <span class="text-danger">*</span></label>
                                <input type="text" id="branch_name" name="branch_name" class="form-control" placeholder="Enter Branch Name" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-0">
                                <label for="ifsc_code">IFSC Code <span class="text-danger">*</span></label>
                                <input type="text" id="ifsc_code" name="ifsc_code" class="form-control" placeholder="Enter IFSC Code" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

			<!-- /Add Bank Details Modal -->
			
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

						<div id="layout-position d-none"> 
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

		<!-- Datatable JS -->
		<script src="assets/plugins/datatables/datatables.min.js"></script>

		<!-- select CSS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datepicker Core JS -->
		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- multiselect JS -->
		<script src="assets/js/jquery-ui.min.js"></script>

		<!-- Theme Settings JS -->
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		
			<script src="assets/plugins/toastr/toastr.min.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script>
$(document).ready(function() {
    $('#product_id').change(function() {
        console.log("its working");
        var productId = $(this).val();
        console.log("productId", productId);
        // Send AJAX request to fetch product details
        $.ajax({
            url: 'get_product_details.php',
            type: 'POST',
            data: { product_id: productId },
            dataType: 'json',
            success: function(response) {
                console.log('response', response);
                // Update table with product details
                $('#product_table tbody').append('<tr>' +
                   '<td>' + response.product_name + '<input type="hidden" name="product_id[]" class="form-control product_id" value="' + response.product_id + '"></td>' +
               
                    '<td><input type="number" name="quantity[]" class="form-control quantity" placeholder="0"></td>' +
                    '<td><input type="number" name="rate[]" class="form-control rate" placeholder="0"></td>' +
                    '<td><input type="number" name="discount[]" class="form-control discount" placeholder="0"></td>' +
                    '<td><input type="number" name="tax[]" class="form-control tax" placeholder="0"></td>' +
                    '<td><input type="number" id="amount" name="amount[]" class="form-control amount" placeholder="0" readonly></td>' +
                    '<td class="d-flex align-items-center">' +
                   
                    '<a href="#" class="btn-action-icon" data-bs-toggle="modal" data-bs-target="#delete_discount"><span><i class="fe fe-trash-2"></i></span></a>' +
                    '</td>' +
                    '</tr>');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching product details: ' + error);
            }
        });
    });

    // Function to calculate total amount, total discount, and total tax
    function calculateOverallAmount() {
        console.log('calculateOverallAmount is calling');
        var totalAmount = 0;
        var totalDiscount = 0;
        var totalTax = 0;

        // Iterate through each row in the table
        $('#product_table tbody tr').each(function() {
            var quantity = parseFloat($(this).find('.quantity').val()) || 0;
            var rate = parseFloat($(this).find('.rate').val()) || 0;
            var discount = parseFloat($(this).find('.discount').val()) || 0;
            var tax = parseFloat($(this).find('.tax').val()) || 0;
            // console.log('quantity', quantity);
            // console.log('rate', rate);
            // console.log('discount', discount);
            // console.log('tax', tax);
            
            // Calculate amount before discount
            var amountBeforeDiscount = quantity * rate;
            console.log('amountBeforeDiscount', amountBeforeDiscount);
            
            // Calculate discounted amount
            var discountedAmount = amountBeforeDiscount - (amountBeforeDiscount * (discount / 100));
            // console.log('discountedAmount', discountedAmount);
            
            // Calculate tax amount
            var taxAmount = discountedAmount * (tax / 100);
            // console.log('taxAmount', taxAmount);
            
            // Calculate the total amount for the row
            var rowAmount = discountedAmount + taxAmount;
            // console.log('rowAmount', rowAmount);

            // Add discounted amount to total amount
            totalAmount += rowAmount;
            // console.log('totalAmount', totalAmount);

            // Add discount to total discount
            totalDiscount += amountBeforeDiscount - discountedAmount;
            // console.log('totalDiscount', totalDiscount);
        });

        // Update the HTML elements with the calculated totals
        $('.invoice-total-box p span:nth-child(1)').eq(0).text('₹' + totalAmount.toFixed(2));
        $('.invoice-total-box p span:nth-child(1)').eq(1).text('₹' + totalDiscount.toFixed(2));
        $('.invoice-total-box p span:nth-child(1)').eq(2).text('₹' + totalTax.toFixed(2));

        // Update the total amount in the footer
        $('.invoice-total-footer span').text('₹' + totalAmount.toFixed(2));
    }

    // Event listener for changes in quantity, rate, discount, and tax
    $('#product_table tbody').on('input', 'input', function() {
    // Get the parent row of the input field
    var row = $(this).closest('tr');

    // Retrieve values from input fields
    var quantity = parseFloat(row.find('input[name="quantity[]"]').val()) || 0;
    var rate = parseFloat(row.find('input[name="rate[]"]').val()) || 0;
    var discount = parseFloat(row.find('input[name="discount[]"]').val()) || 0;
    var tax = parseFloat(row.find('input[name="tax[]"]').val()) || 0;

    // Calculate the amount before discount
    var amountBeforeDiscount = quantity * rate;

    // Calculate the discounted amount
    var discountedAmount = amountBeforeDiscount - (amountBeforeDiscount * discount / 100);

    // Calculate the tax amount
    var taxAmount = discountedAmount * (tax / 100);

    // Calculate the total amount
    var totalAmount = discountedAmount + taxAmount;

    // Update the amount field with the calculated total
    row.find('input[name="amount[]"]').val(totalAmount.toFixed(2));

    calculateOverallAmount();
});


    // Call the function initially if needed




        
       
// for insertion the bank details
     $('#addBankForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'add_bank.php', // URL to the PHP file that will handle the insertion
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    if (data.success) {
                        toastr.success(data.message);
                        $('#bank_details').modal('hide');
                        $('#addBankForm')[0].reset(); // Clear the form
                    } else {
                        toastr.error(data.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while adding bank details.');
                }
            });
        });
        
function updateTotalAmount() {
    let totalAmount = parseFloat($('#total_amount').text().replace('₹', '').replace(',', ''));
    const roundOff = $('#round_off').is(':checked');
    
    if (roundOff) {
        totalAmount = Math.round(totalAmount);
    }

    $('#total_amount').text('₹' + totalAmount.toFixed(2));
    $('#round_off_amount').text('₹' + (totalAmount - parseFloat($('#total_amount').text().replace('₹', '').replace(',', ''))).toFixed(2));
}

// Event listener for round off checkbox
$('#round_off').on('change', function() {
    updateTotalAmount();
});

// Initial update
updateTotalAmount();
        
 $('#quotation-form').on('submit', function(e) {
    e.preventDefault();
    
    // Calculate the total amount before sending the data
    updateTotalAmount();

    const totalAmount = parseFloat($('#total_amount').text().replace('₹', '').replace(',', ''));

    // Include total amount in form data
    const formData = $(this).serializeArray();
    formData.push({ name: 'total_amount', value: totalAmount });

    $.ajax({
        url: 'insert_quotation.php', // URL to the PHP file that will handle the insertion
        type: 'POST',
        data: formData, // Send updated form data including total amount
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                toastr.success(data.message);
                $('#quotation-form')[0].reset(); // Clear the form
            } else {
                toastr.error(data.message);
            }
        },
        error: function() {
            toastr.error('An error occurred while saving the quotation.');
        }
    });
});



        
    });
</script>

	</body>


</html>
<?php  require("includes/session.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>
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
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Quotations</h5>
							<div class="list-btn">
								<ul class="filter-list">
									<li>
										<a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Filter"><span class="me-2"><img src="assets/img/icons/filter-icon.svg" alt="Filter"></span>Filter </a>
									</li>
									<li>
										<a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Settings"><span><i class="fe fe-settings"></i></span> </a>
									</li>
									<li>
										<a class="btn btn-primary" href="add_quotations.php"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Create Quotation</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						
					<!-- Search Filter -->
					<div id="filter_inputs" class="card filter-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="input-block mb-3">
										<label>Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="input-block mb-3">
										<label>Email</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="input-block mb-3">
										<label>Phone</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Search Filter -->

					<!-- Table -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card-table"> 
								<div class="card-body">
									<div class="table-responsive">
<table class="table table-stripped table-hover datatable">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Quotation ID</th>
            <th>Customer</th>
            <th>Quote Amount</th>
            <th>Quote Date</th>
            <th>Valid Till</th>
            <th>Created On</th>
            <th>Status</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'fetch_quotation.php';

        if (!empty($quotations)): ?>
            <?php foreach ($quotations as $index => $quotation): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($quotation['quote_id']) ?></td>
                    <td><?= htmlspecialchars($quotation['lead_full_name']) ?></td>
                    <td><?= htmlspecialchars($quotation['quote_amount']) ?></td>
                    <td><?= htmlspecialchars($quotation['quote_date']) ?></td>
                    <td><?= htmlspecialchars($quotation['valid_until']) ?></td>
                    <td><?= htmlspecialchars(date("d M Y, h:i A", strtotime($quotation['created_at']))) ?></td>
                    <td>
                        <span class="badge 
                            <?= $quotation['status'] == 'Accepted' ? 'bg-success-light' : 
                               ($quotation['status'] == 'Declined' ? 'bg-danger-light' : 
                               ($quotation['status'] == 'Expired' ? 'bg-light-gray text-secondary' : 'bg-primary-light')) ?>">
                            <?= htmlspecialchars($quotation['status']) ?>
                        </span>
                    </td>
                    <td class="d-flex align-items-center">
                        <div class="dropdown dropdown-action">
                            <a href="#" class="btn-action-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right quatation-dropdown">
                                <ul>
                                    <li>
                                        <a class="dropdown-item" href="edit-quotations.html?id=<?= htmlspecialchars($quotation['quote_id']) ?>">
                                            <i class="far fa-edit me-2"></i>Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal" data-id="<?= htmlspecialchars($quotation['quote_id']) ?>">
                                            <i class="far fa-trash-alt me-2"></i>Delete
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="view-quotation.html?id=<?= htmlspecialchars($quotation['quote_id']) ?>">
                                            <i class="fe fe-eye me-2"></i>View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="add-invoice.html?quote_id=<?= htmlspecialchars($quotation['quote_id']) ?>">
                                            <i class="fe fe-file-text me-2"></i>Convert to Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="markAsSent(<?= htmlspecialchars($quotation['quote_id']) ?>)">
                                            <i class="fe fe-arrow-right-circle me-2"></i>Mark as Sent
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="sendQuotation(<?= htmlspecialchars($quotation['quote_id']) ?>)">
                                            <i class="fe fe-send me-2"></i>Send
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="clone-as-invoice.html?quote_id=<?= htmlspecialchars($quotation['quote_id']) ?>">
                                            <i class="fe fe-copy me-2"></i>Clone as Invoice
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="download-quotation.php?id=<?= htmlspecialchars($quotation['quote_id']) ?>">
                                            <i class="fe fe-download me-2"></i>Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No quotations found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Table -->

				</div>
			</div>
			<!-- /Page Wrapper -->

			<!-- Add Asset -->
			<div class="toggle-sidebar">
				<div class="sidebar-layout-filter">
					<div class="sidebar-header">
						<h5>Filter</h5>
						<a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
					</div>
					<div class="sidebar-body">						
						<form action="#" autocomplete="off">
							<!-- Customer -->
							<div class="accordion" id="accordionMain1">
								<div class="card-header-new" id="headingOne">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Customer	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"  data-bs-parent="#accordionExample1">
									<div class="card-body-chat">
										<div class="row">
											<div class="col-md-12">
												<div id="checkBoxes1">
													<div class="form-custom">														
														<input type="text" class="form-control" id="member_search1" placeholder="Search here">
														<span><img src="assets/img/icons/search.svg" alt="img"></span>
													</div>
													<div class="selectBox-cont">
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> John Smith
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Johnny
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Robert
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Sharonda
														</label>
														<!-- View All -->
														<div class="view-content">
															<div class="viewall-One">	
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Pricilla
																</label>
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Randall
																</label>
															</div>
															<div class="view-all">
																<a href="javascript:void(0);" class="viewall-button-One"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
															</div>
														</div>
														<!-- /View All -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Customer -->

							<!-- Select Date -->
							<div class="accordion" id="accordionMain2">
								<div class="card-header-new" id="headingTwo">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100 collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										Select Date	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"  data-bs-parent="#accordionExample2">
									<div class="card-body-chat">
										<div class="input-block mb-3">
											<label class="form-control-label">From</label>
											<div class="cal-icon">
												<input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
											</div>
										</div>
										<div class="input-block mb-3">
											<label class="form-control-label">To</label>
											<div class="cal-icon">
												<input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Select Date -->

							<!-- Quotation Id -->
							<div class="accordion" id="accordionMain4">
								<div class="card-header-new" id="headingFour">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100 collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
										Quotation Id	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour"  data-bs-parent="#accordionExample4">
									<div class="card-body-chat">
										<div id="checkBoxes3">
											<div class="selectBox-cont">
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span> 4905681
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span>  4905682
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span>  4905683
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span> 4905684
												</label>
												<!-- View All -->
												<div class="view-content">
													<div class="viewall-Two">	
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> 4905685
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> 4905686
														</label>
													</div>
													<div class="view-all">
														<a href="javascript:void(0);" class="viewall-button-Two"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
													</div>
												</div>
												<!-- /View All -->
											</div>
										</div>	
									</div>
								</div>
							</div>
							<!-- /Quotation Id -->

							<!-- By Status -->
							<div class="accordion accordion-last" id="accordionMain3">
								<div class="card-header-new" id="headingThree">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100 collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										By Status	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree"  data-bs-parent="#accordionExample3">
									<div class="card-body-chat">
										<div id="checkBoxes2">
											<div class="form-custom">														
												<input type="text" class="form-control" id="member_search2" placeholder="Search here">
												<span><img src="assets/img/icons/search.svg" alt="img"></span>
											</div>
											<div class="selectBox-cont">
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Sent
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span>  Accepted
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span>  Declined
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Expired
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Sent
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Accepted
												</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<!-- /By Status -->

							
							<div class="filter-buttons">
								<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
									Apply
								</button>
								<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
									Reset
								</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>	
			<!--/Add Asset -->
			
			<!-- Delete Items Modal -->
			<div class="modal custom-modal fade" id="delete_modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Quotations</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<a href="#" class="btn btn-primary paid-continue-btn">Delete</a>
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

							<div class="col-4 "> 
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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	<script>
    function markAsSent(id) {
        // AJAX call to mark the quotation as sent
    }

    function sendQuotation(id) {
        // AJAX call to send the quotation
    }
</script>

	</body>


</html>
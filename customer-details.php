<?php require_once("includes/session.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/db.php';

if (!isset($_GET['id'])) {
    echo "No customer ID provided.";
    exit();
}

$customer_id = intval($_GET['id']);

$sql = "SELECT * FROM customers WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $customer_id, PDO::PARAM_INT);
$stmt->execute();

$customer = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$customer) {
    echo "Customer not found.";
    exit();
}

$conn = null;
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
							<h5>Customer Details</h5>
						</div>
					</div>
					<!-- /Page Header -->

				<div class="container mt-5">
    <div class="card customer-details-group">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="customer-details">
                        <div class="d-flex align-items-center">
                            <span class="customer-widget-img d-inline-flex">
                                <img class="rounded-circle" src="assets/img/profiles/avatar-14.jpg" alt="profile-img">
                            </span>
                            <div class="customer-details-cont">
                                <h6><?= htmlspecialchars($customer['name']) ?></h6>
                                <p><?= 'Cl-' . htmlspecialchars($customer['id']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="customer-details">
                        <div class="d-flex align-items-center">
                            <span class="customer-widget-icon d-inline-flex">
                                <i class="fe fe-mail"></i>
                            </span>
                            <div class="customer-details-cont">
                                <h6>Email Address</h6>
                                <p><?= htmlspecialchars($customer['email']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="customer-details">
                        <div class="d-flex align-items-center">
                            <span class="customer-widget-icon d-inline-flex">
                                <i class="fe fe-phone"></i>
                            </span>
                            <div class="customer-details-cont">
                                <h6>Phone Number</h6>
                                <p><?= htmlspecialchars($customer['mobile']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="customer-details">
                        <div class="d-flex align-items-center">
                            <span class="customer-widget-icon d-inline-flex">
                                <i class="fe fe-airplay"></i>
                            </span>
                            <div class="customer-details-cont">
                                <h6>Company Name</h6>
                                <p><?= htmlspecialchars($customer['website']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="customer-details">
                        <div class="d-flex align-items-center">
                            <span class="customer-widget-icon d-inline-flex">
                                <i class="fe fe-globe"></i>
                            </span>
                            <div class="customer-details-cont">
                                <h6>Website</h6>
                                <p class="customer-mail"><?= htmlspecialchars($customer['website']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="customer-details">
                        <div class="d-flex align-items-center">
                            <span class="customer-widget-icon d-inline-flex">
                                <i class="fe fe-briefcase"></i>
                            </span>
                            <div class="customer-details-cont">
                                <h6>Company Address</h6>
                                <p>
                                    <?= htmlspecialchars($customer['billing_address_line1']) ?><br>
                                    <?= htmlspecialchars($customer['billing_address_line2']) ?><br>
                                    <?= htmlspecialchars($customer['billing_city']) ?>, <?= htmlspecialchars($customer['billing_state']) ?>, <?= htmlspecialchars($customer['billing_country']) ?> - <?= htmlspecialchars($customer['billing_pincode']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
						
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
					
					<!-- Inovices card -->
					<div class="row">
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
							<div class="card inovices-card w-100">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="inovices-widget-icon bg-info-light">
											<img src="assets/img/icons/receipt-item.svg" alt="img">
										</span>
										<div class="dash-count">
											<div class="dash-title">Total Invoice</div>
											<div class="dash-counts">
												<p>$298</p>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">02</span></p>
										<p class="inovice-trending text-success-light">02 <span class="ms-2"><i class="fe fe-trending-up"></i></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
							<div class="card inovices-card w-100">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="inovices-widget-icon bg-primary-light">
											<img src="assets/img/icons/transaction-minus.svg" alt="img">
										</span>
										<div class="dash-count">
											<div class="dash-title">Outstanding</div>
											<div class="dash-counts">
												<p>$325,215</p>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">03</span></p>
										<p class="inovice-trending text-success-light">04 <span class="ms-2"><i class="fe fe-trending-up"></i></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
							<div class="card inovices-card w-100">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="inovices-widget-icon bg-warning-light">
											<img src="assets/img/icons/archive-book.svg" alt="img">
										</span>
										<div class="dash-count">
											<div class="dash-title">Total Overdue</div>
											<div class="dash-counts">
												<p>$7825</p>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">01</span></p>
										<p class="inovice-trending text-danger-light">03 <span class="ms-2"><i class="fe fe-trending-down"></i></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
							<div class="card inovices-card w-100">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="inovices-widget-icon bg-primary-light">
											<img src="assets/img/icons/clipboard-close.svg" alt="img">
										</span>
										<div class="dash-count">
											<div class="dash-title">Cancelled</div>
											<div class="dash-counts">
												<p>100</p>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">04</span></p>
										<p class="inovice-trending text-danger-light">05 <span class="ms-2"><i class="fe fe-trending-down"></i></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
							<div class="card inovices-card w-100">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="inovices-widget-icon bg-green-light">
											<img src="assets/img/icons/message-edit.svg" alt="img">
										</span>
										<div class="dash-count">
											<div class="dash-title">Draft</div>
											<div class="dash-counts">
												<p>$125,586</p>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">06</span></p>
										<p class="inovice-trending text-danger-light">02 <span class="ms-2"><i class="fe fe-trending-down"></i></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12 d-flex">
							<div class="card inovices-card w-100">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="inovices-widget-icon bg-danger-light">
											<img src="assets/img/icons/3d-rotate.svg" alt="img">
										</span>
										<div class="dash-count">
											<div class="dash-title">Recurring</div>
											<div class="dash-counts">
												<p>$86,892</p>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between align-items-center">
										<p class="inovices-all">No of Invoice <span class="rounded-circle bg-light-gray">03</span></p>
										<p class="inovice-trending text-success-light">02 <span class="ms-2"><i class="fe fe-trending-up"></i></span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Inovices card -->

					<!-- Table -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card-table"> 
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-stripped table-hover datatable">
											<thead class="thead-light">
												<tr>
												   <th>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>Invoice No
													</th>
												   <th>Category</th>
												   <th>Created On</th>
												   <th>Total Amount</th>												   
												   <th>Paid Amount</th>
												   <th>Payment Mode</th>
												   <th>Balance</th>
												   <th>Due Date</th>
												   <th>Status</th>
												   <th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="invoice-details.html" class="invoice-link">#4987</a>
													</td>
													<td>Food</td>
													<td>23 Mar 2023</td>
													<td>$1,54,220</td>
													<td>$1,50,000</td>													
													<td>Cash</td>
													<td>$2,54,00</td>
													<td>25 Mar 2023</td>
													<td><span class="badge bg-success-light">Paid</span></td>
													<td>
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end customer-dropdown">
																<ul>
																	<li>
																		<a class="dropdown-item" href="edit-customer.html"><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="customer-details.html"><i class="far fa-eye me-2"></i>View</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-send me-2"></i>Send</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>Download</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="add-credit-notes.html"><i class="fe fe-file-text me-2"></i>Convert to Sales Return</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-copy me-2"></i>Clone as Invoice</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="invoice-details.html" class="invoice-link">#4988</a>
													</td>
													<td>Advertising</td>
													<td>16 Mar 2023</td>
													<td>$3,54,220</td>
													<td>$2,50,000</td>													
													<td>Cheque</td>
													<td>$4,220</td>
													<td>16 Jan 2023</td>
													<td><span class="badge bg-warning-light text-warning">Overdue</span></td>
													<td>
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end customer-dropdown">
																<ul>
																	<li>
																		<a class="dropdown-item" href="edit-customer.html"><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="customer-details.html"><i class="far fa-eye me-2"></i>View</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-send me-2"></i>Send</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>Download</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="add-credit-notes.html"><i class="fe fe-file-text me-2"></i>Convert to Sales Return</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-copy me-2"></i>Clone as Invoice</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="invoice-details.html" class="invoice-link">#4989</a>
													</td>
													<td>Marketing</td>
													<td>25 Feb 2023</td>
													<td>$1,54,220</td>
													<td>$1,50,000</td>													
													<td>Cash</td>
													<td>$4,220</td>
													<td>16 Jan 2023</td>
													<td><span class="badge bg-danger-light text-danger">Cancelled</span></td>
													<td>
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end customer-dropdown">
																<ul>
																	<li>
																		<a class="dropdown-item" href="edit-customer.html"><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="customer-details.html"><i class="far fa-eye me-2"></i>View</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-send me-2"></i>Send</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>Download</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="add-credit-notes.html"><i class="fe fe-file-text me-2"></i>Convert to Sales Return</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-copy me-2"></i>Clone as Invoice</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="invoice-details.html" class="invoice-link">#4990</a>
													</td>
													<td>Repairs</td>
													<td>25 Mar 2023</td>													
													<td>$1,54,220</td>
													<td>$1,50,000</td>													
													<td>Cash</td>
													<td>$4,220</td>
													<td>12 May 2023</td>
													<td><span class="badge bg-primary-light">Partially Paid</span></td>
													<td>
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end customer-dropdown">
																<ul>
																	<li>
																		<a class="dropdown-item" href="edit-customer.html"><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="customer-details.html"><i class="far fa-eye me-2"></i>View</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-send me-2"></i>Send</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>Download</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="add-credit-notes.html"><i class="fe fe-file-text me-2"></i>Convert to Sales Return</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-copy me-2"></i>Clone as Invoice</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="invoice-details.html" class="invoice-link">#4991</a>
													</td>
													<td>Software</td>
													<td>12 May 2022</td>												
													<td>$5,54,220</td>
													<td>$3,50,000</td>													
													<td>Cheque</td>
													<td>$4,220</td>
													<td>18 May 2022</td>
													<td><span class="badge bg-light-gray text-secondary">Unpaid</span></td>
													<td>
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end customer-dropdown">
																<ul>
																	<li>
																		<a class="dropdown-item" href="edit-customer.html"><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="customer-details.html"><i class="far fa-eye me-2"></i>View</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-send me-2"></i>Send</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>Download</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="add-credit-notes.html"><i class="fe fe-file-text me-2"></i>Convert to Sales Return</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-copy me-2"></i>Clone as Invoice</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="invoice-details.html" class="invoice-link">#4992</a>
													</td>
													<td>Stationary</td>
													<td>16 Nov 2022</td>													
													<td>$5,54,220</td>
													<td>$6,50,000</td>													
													<td>Cash</td>
													<td>$4,220</td>
													<td>25 Feb 2022</td>
													<td><span class="badge bg-light-gray text-primary">Draft</span></td>
													<td>
														<div class="dropdown dropdown-action">
															<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
															<div class="dropdown-menu dropdown-menu-end customer-dropdown">
																<ul>
																	<li>
																		<a class="dropdown-item" href="edit-customer.html"><i class="far fa-edit me-2"></i>Edit</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="customer-details.html"><i class="far fa-eye me-2"></i>View</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-send me-2"></i>Send</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>Download</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="add-credit-notes.html"><i class="fe fe-file-text me-2"></i>Convert to Sales Return</a>
																	</li>
																	<li>
																		<a class="dropdown-item" href="#"><i class="fe fe-copy me-2"></i>Clone as Invoice</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Table -->

					<!-- Delete Items Modal -->
					<div class="modal custom-modal fade" id="delete_modal" role="dialog">
						<div class="modal-dialog modal-dialog-centered modal-md">
							<div class="modal-content">
								<div class="modal-body">
									<div class="form-header">
										<h3>Delete Customer Details</h3>
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
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
		
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

	</body>


</html>
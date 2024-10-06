<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light"  data-sidebar-size="lg" data-sidebar-image="none">
	
<!-- Mirrored from kanakku.dreamstechnologies.com/html/template/add-purchases.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 11:50:44 GMT -->
<?php include("includes/head.php"); ?>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<!-- Header -->
			<div class="header header-one">

				<a href="index.html"  class="d-inline-flex d-sm-inline-flex align-items-center d-md-inline-flex d-lg-none align-items-center device-logo">
					<img src="assets/img/logo.png" class="img-fluid logo2" alt="Logo">
			   </a>
			   <div class="main-logo d-inline float-start d-lg-flex align-items-center d-none d-sm-none d-md-none">
				   <div class="logo-white">
					   <a href="index.html">
						   <img src="assets/img/logo-full-white.png" class="img-fluid logo-blue" alt="Logo">
					   </a>
					   <a href="index.html">
						   <img src="assets/img/logo-small-white.png" class="img-fluid logo-small" alt="Logo">
					   </a>
				   </div>
				   <div class="logo-color">
					   <a href="index.html">
						   <img src="assets/img/logo.png" class="img-fluid logo-blue" alt="Logo">
					   </a>
					   <a href="index.html">
						   <img src="assets/img/logo-small.png" class="img-fluid logo-small" alt="Logo">
					   </a>
				   </div>
			   </div>
			
				<!-- Sidebar Toggle -->
				<a href="javascript:void(0);" id="toggle_btn">
					<span class="toggle-bars">
						<span class="bar-icons"></span>
						<span class="bar-icons"></span>
						<span class="bar-icons"></span>
						<span class="bar-icons"></span>
					</span>
				</a>
				<!-- /Sidebar Toggle -->
				
				<!-- Search -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><img src="assets/img/icons/search.svg" alt="img"></button>
					</form>
				</div>
				<!-- /Search -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Menu -->
				<ul class="nav nav-tabs user-menu">
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us1.png" alt="flag" ><span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="flag" ><span>English</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="flag" ><span>French</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="flag" ><span>Spanish</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="flag" ><span>German</span>
							</a>
						</div>
					</li>
					<!-- /Flag -->
					
					
					<li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="toggle-switch">
                            <i class="fe fe-moon"></i>
                        </a>
                    </li>
					<li class="nav-item dropdown  flag-nav dropdown-heads">
						<a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
							<i class="fe fe-bell"></i> <span class="badge rounded-pill"></span>
						</a>
                        <div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<div class="notification-title">Notifications <a href="notifications.html">View all</a></div>
								<a href="javascript:void(0)" class="clear-noti d-flex align-items-center">Mark all as read <i class="fe fe-check-circle"></i></a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="profile.html">
											<div class="d-flex">
												<span class="avatar avatar-md active">
													<img class="avatar-img rounded-circle" alt="avatar-img" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Lex Murphy</span> requested access to <span class="noti-title">UNIX directory tree hierarchy</span></p>
													<div class="notification-btn">
														<span class="btn btn-primary">Accept</span>
														<span class="btn btn-outline-primary">Reject</span>
													</div>
													<p class="noti-time"><span class="notification-time">Today at 9:42 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="profile.html">
											<div class="d-flex">
												<span class="avatar avatar-md active">
													<img class="avatar-img rounded-circle" alt="avatar-img" src="assets/img/profiles/avatar-10.jpg">
												</span>
												<div class="media-body"> 
													<p class="noti-details"><span class="noti-title">Ray Arnold</span> left 6 comments <span class="noti-title">on Isla Nublar SOC2 compliance report</span></p>
													<p class="noti-time"><span class="notification-time">Yesterday at 11:42 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="profile.html">
											<div class="d-flex">
												<span class="avatar avatar-md">
													<img class="avatar-img rounded-circle" alt="avatar-img" src="assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">   
													<p class="noti-details"><span class="noti-title">Dennis Nedry</span> commented on <span class="noti-title"> Isla Nublar SOC2 compliance report</span></p>
													<blockquote>
														“Oh, I finished de-bugging the phones, but the system's compiling for eighteen minutes, or twenty.  So, some minor systems may go on and off for a while.”
													</blockquote>
													<p class="noti-time"><span class="notification-time">Yesterday at 5:42 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="profile.html">
											<div class="d-flex">
												<span class="avatar avatar-md">
													<img class="avatar-img rounded-circle" alt="avatar-img" src="assets/img/profiles/avatar-05.jpg">
												</span>
												<div class="media-body">  
													<p class="noti-details"><span class="noti-title">John Hammond</span> created <span class="noti-title">Isla Nublar SOC2 compliance report</span></p>
													<p class="noti-time"><span class="notification-time">Last Wednesday at 11:15 AM</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">Clear All</a>
							</div>
						</div>
					</li>
					<li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="win-maximize">
                            <i class="fe fe-maximize"></i>
                        </a>
                    </li>
					<!-- User Menu -->
					<li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="assets/img/profiles/avatar-07.jpg" alt="img" class="profilesidebar">
                                <span class="animate-circle"></span>
                            </span>
                            <span class="user-content">
                                <span class="user-details">Admin</span>
								<span class="user-name">John Smith</span>
                            </span>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilemenu">
                                <div class="subscription-menu">
                                    <ul>
                                        <li>
                                            <a class="dropdown-item" href="profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="settings.html">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="subscription-logout">
                                    <ul>
                                        <li class="pb-0">
											<a class="dropdown-item" href="login.html">Log Out</a>
										</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </li>
					<!-- /User Menu -->
					
				</ul>
				
				<!-- /Header Menu -->
				
			</div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<nav class="greedys sidebar-horizantal">
							<ul class="list-inline-item list-unstyled links">
								<li class="menu-title"><span>Main</span></li>
								<li class="submenu">
									<a href="#"><i class="fe fe-home"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="index.html">Admin Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-grid"></i> <span> Applications</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="inbox.html">Email</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-user"></i> <span> Super Admin</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="companies.html">Companies</a></li>
										<li><a href="subscription.html">Subscription</a></li>
										<li><a href="packages.html">Packages</a></li>
		                                <li><a href="domain-request.html">Domain Request</a></li>
		                                <li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</li>
							
								<li class="submenu">
									<a href="#"><i class="fe fe-users"></i><span>Customers</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="customers.html"><i class="fe fe-users"></i> <span>Customers</span></a></li>
										<li>
											<a href="customer-details.html"><i class="fe fe-file"></i> <span>Customer Details</span></a>
										</li>
										<li>
											<a href="vendors.html"><i class="fe fe-user"></i> <span>Vendors</span></a>
										</li>
									</ul>
								</li>
							
								<li class="menu-title"><span>Inventory</span></li>
								<li class="submenu">
									<a href="#"><i class="fe fe-package"></i> <span> Products / Services</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="product-list.html">Product List</a></li>
										<li><a href="category.html">Category</a></li>									
										<li><a href="units.html">Units</a></li>
									</ul>
								</li>
								<li>
									<a href="inventory.html"><i class="fe fe-user"></i> <span>Inventory</span></a>
								</li>

								<li class="submenu">
									<a href="#"><i class="fe fe-file-plus"></i><span>Signature</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a  href="signature-list.html"><i class="fe fe-clipboard"></i> <span>List of Signature</span></a></li>
										<li><a  href="signature-invoice.html"><i class="fe fe-box"></i> <span>Signature Invoice</span></a></li>
									
									</ul>
								</li>
							
								<li class="menu-title"><span>Sales</span></li>							
								<li class="submenu">
									<a href="invoices.html"><i class="fe fe-file"></i> <span>Invoices</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="invoices.html">Invoices List</a></li>
										<li><a href="invoice-details-admin.html">Invoice Details (Admin)</a></li>
										<li><a href="invoice-details.html">Invoice Details (Customer)</a></li>
										<li><a href="invoice-template.html">Invoice Templates</a></li>
									</ul>
								</li>
							</ul>
							<button class="viewmoremenu">More Menu</button>
							<ul class="hidden-links hidden">
								<li>
									<a href="recurring-invoices.html"><i class="fe fe-clipboard"></i> <span>Recurring Invoices</span></a>
								</li>			
								<li>
									<a href="credit-notes.html"><i class="fe fe-edit"></i> <span>Credit Notes</span></a>
								</li>
								<li class="menu-title"><span>Purchases</span></li>							
								<li>
									<a href="purchases.html" class="active"><i class="fe fe-shopping-cart"></i> <span>Purchases</span></a>
								</li>
								<li>
									<a href="purchase-orders.html"><i class="fe fe-shopping-bag"></i> <span>Purchase Orders</span></a>
								</li>
								<li>
									<a href="debit-notes.html"><i class="fe fe-file-text"></i> <span>Debit Notes</span></a>
								</li>
							
								<li class="menu-title"><span>Finance & Accounts</span></li>								
								<li>
									<a href="expenses.html"><i class="fe fe-file-plus"></i> <span>Expenses</span></a>
								</li>
								<li>
									<a href="payments.html"><i class="fe fe-credit-card"></i> <span>Payments</span></a>
								</li>
							
								<li class="menu-title"><span>Quotations</span></li>									
								<li>
									<a href="quotations.html"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
								</li>
								<li>
									<a href="delivery-challans.html"><i class="fe fe-file-text"></i> <span>Delivery Challans</span></a>
								</li>
							
								<li class="menu-title"><span>Reports</span></li>								
								<li>
									<a href="payment-summary.html"><i class="fe fe-credit-card"></i> <span>Payment Summary</span></a>
								</li>
								<li class="menu-title"><span>Reports</span></li>
								<li class="submenu">
									<a href="#"><i class="fe fe-box"></i><span>Reports</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-report.html">Expense Report</a></li>
									   <li><a href="purchase-report.html">Purchase Report</a></li>
									   <li><a href="purchase-return.html">Purchase Return Report</a></li>
									   <li><a href="sales-report.html">Sales Report</a></li>
									   <li><a href="sales-return-report.html">Sales Return Report</a></li>
									   <li><a href="quotation-report.html">Quotation Report</a></li>
									   <li><a href="payment-report-2.html">Payment Report</a></li>
									   <li><a href="stock-report.html">Stock Report</a></li>
									   <li><a href="low-stock-report.html">Low Stock Report</a></li>
									   <li><a href="income-report.html">Income Report</a></li>
									   <li><a href="tax-purchase.html">Tax Report</a></li>
									   <li><a href="profit-loss-list.html">Profit & Loss</a></li>
									</ul>
								</li>							
								<li class="menu-title"><span>User Management</span></li>
								<li>
									<a href="users.html"><i class="fe fe-user"></i> <span>Users</span></a>
								</li>
								<li>
									<a href="roles-permission.html"><i class="fe fe-clipboard"></i> <span>Roles & Permission</span></a>
								</li>
								<li>
									<a href="delete-account-request.html"><i class="fe fe-trash-2"></i> <span>Delete Account Request</span></a>
								</li>
							
								<li class="menu-title"><span>Membership</span></li>
								<li class="submenu">
									<a href="#"><i class="fe fe-book"></i> <span> Membership</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="membership-plans.html">Membership Plans</a></li>
										<li><a href="membership-addons.html">Membership Addons</a></li>
										<li><a href="subscribers.html">Subscribers</a></li>
										<li><a href="transactions.html">Transactions</a></li>
									</ul>
								</li>
							
								<li class="menu-title"><span>Content (CMS)</span></li>
								<li>
									<a href="pages.html"><i class="fe fe-folder"></i> <span>Pages</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-book"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="all-blogs.html">All Blogs</a></li>
										<li><a href="categories.html">Categories</a></li>
										<li><a href="blog-comments.html">Blog Comments</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-map-pin"></i> <span> Location</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="countries.html">Countries</a></li>
										<li><a href="states.html">States</a></li>
										<li><a href="cities.html">Cities</a></li>
									</ul>
								</li>
								<li>
									<a href="testimonials.html"><i class="fe fe-message-square"></i> <span>Testimonials</span></a>
								</li>
								<li>
									<a href="faq.html"><i class="fe fe-alert-circle"></i> <span>FAQ</span></a>
								</li>
							
								<li class="menu-title"><span>Support</span></li>							
								<li>
									<a href="contact-messages.html"><i class="fe fe-printer"></i> <span>Contact Messages</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-save"></i> <span> Tickets</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tickets.html">Tickets</a></li>
										<li><a href="tickets-list.html">Tickets List</a></li>
										<li><a href="tickets-kanban.html">Tickets Kanban</a></li>
										<li><a href="ticket-details.html">Ticket Overview</a></li>
									</ul>
								</li>
							
								<li class="menu-title"><span>Pages</span></li>							
								<li>
									<a href="profile.html"><i class="fe fe-user"></i> <span>Profile</span></a>
								</li>
	                            <li class="submenu">
	                                <a href="#"><i class="fe fe-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
	                                <ul>
	                                    <li><a href="login.html"> Login </a></li>
	                                    <li><a href="register.html"> Register </a></li>
	                                    <li><a href="forgot-password.html"> Forgot Password </a></li>
	                                    <li><a href="lock-screen.html"> Lock Screen </a></li>
	                                </ul>
	                            </li>
								<li>
									<a href="error-404.html"><i class="fe fe-x-square"></i> <span>Error Pages</span></a>
								</li>
								<li>
									<a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
								</li>
								<li>
									<a href="maps-vector.html"><i class="fe fe-image"></i> <span>Vector Maps</span></a>
								</li>
							
								<li class="menu-title"> 
									<span>UI Interface</span>
								</li>
								<li class="submenu">
									<a href="#" ><i class="fe fe-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="alerts.html">Alerts</a></li>                                    
										<li><a href="accordions.html">Accordions</a></li>
										<li><a href="avatar.html">Avatar</a></li> 
										<li><a href="badges.html">Badges</a></li>
										<li><a href="buttons.html">Buttons</a></li>   
										<li><a href="buttongroup.html">Button Group</a></li>                                  
										<li><a href="breadcrumbs.html">Breadcrumb</a></li>
										<li><a href="cards.html">Cards</a></li>
										<li><a href="carousel.html">Carousel</a></li>                                   
										<li><a href="dropdowns.html">Dropdowns</a></li>
										<li><a href="grid.html">Grid</a></li>
										<li><a href="images.html">Images</a></li>
										<li><a href="lightbox.html">Lightbox</a></li>
										<li><a href="media.html">Media</a></li>                              
										<li><a href="modal.html">Modals</a></li>
										<li><a href="offcanvas.html">Offcanvas</a></li>
										<li><a href="pagination.html">Pagination</a></li>
										<li><a href="popover.html">Popover</a></li>                                    
										<li><a href="progress.html">Progress Bars</a></li>
										<li><a href="placeholders.html">Placeholders</a></li>
										<li><a href="rangeslider.html">Range Slider</a></li>                                    
										<li><a href="spinners.html">Spinner</a></li>
										<li><a href="sweetalerts.html">Sweet Alerts</a></li>
										<li><a href="tab.html">Tabs</a></li>
										<li><a href="toastr.html">Toasts</a></li>
										<li><a href="tooltip.html">Tooltip</a></li>
										<li><a href="typography.html">Typography</a></li>
										<li><a href="video.html">Video</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="ribbon.html">Ribbon</a></li>
										<li><a href="clipboard.html">Clipboard</a></li>
										<li><a href="drag-drop.html">Drag & Drop</a></li>
										<li><a href="rating.html">Rating</a></li>
										<li><a href="text-editor.html">Text Editor</a></li>
										<li><a href="counter.html">Counter</a></li>
										<li><a href="scrollbar.html">Scrollbar</a></li>
										<li><a href="notification.html">Notification</a></li>
										<li><a href="stickynote.html">Sticky Note</a></li>
										<li><a href="timeline.html">Timeline</a></li>
										<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
										<li><a href="form-wizard.html">Form Wizard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-bar-chart"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.html">Apex Charts</a></li>
										<li><a href="chart-js.html">Chart Js</a></li>
										<li><a href="chart-morris.html">Morris Charts</a></li>
										<li><a href="chart-flot.html">Flot Charts</a></li>
										<li><a href="chart-peity.html">Peity Charts</a></li>
										<li><a href="chart-c3.html">C3 Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
										<li><a href="icon-feather.html">Feather Icons</a></li>
										<li><a href="icon-ionic.html">Ionic Icons</a></li>
										<li><a href="icon-material.html">Material Icons</a></li>
										<li><a href="icon-pe7.html">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
										<li><a href="icon-themify.html">Themify Icons</a></li>
										<li><a href="icon-weather.html">Weather Icons</a></li>
										<li><a href="icon-typicon.html">Typicon Icons</a></li>
										<li><a href="icon-flag.html">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-sidebar"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
										<li><a href="form-input-groups.html">Input Groups </a></li>
										<li><a href="form-horizontal.html">Horizontal Form </a></li>
										<li><a href="form-vertical.html"> Vertical Form </a></li>
										<li><a href="form-mask.html">Form Mask </a></li>
										<li><a href="form-validation.html">Form Validation </a></li>
										<li><a href="form-select2.html">Form Select2 </a></li>
										<li><a href="form-fileupload.html">File Upload </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.html">Basic Tables </a></li>
										<li><a href="data-tables.html">Data Table </a></li>
									</ul>
								</li>
							
								<li class="menu-title"><span>Settings</span></li>							
								<li>
									<a href="settings.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
								</li>
								<li class="menu-title"> 
									<span>Extras</span>
								</li>
								<li> 
									<a href="#"><i class="fe fe-file-text"></i> <span>Documentation</span></a>
								</li>
								<li> 
									<a href="javascript:void(0);"><i class="fe fe-lock"></i> <span>Change Log</span> <span class="badge badge-primary ms-auto">v2.0</span></a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="fa fa-list"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li class="submenu">
											<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
											<ul style="display: none;" class="level2">
												<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
												<li class="submenu">
													<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
													<ul style="display: none;" class="level3">
														<li><a href="javascript:void(0);">Level 3</a></li>
														<li><a href="javascript:void(0);">Level 3</a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0);"> <span>Level 1</span></a>
										</li>
									</ul>
								</li>
								<li>
									<a href="login.html"><i class="fe fe-power"></i> <span>Logout</span></a>
								</li>
							</ul>
							<!-- /Settings -->
					</nav>
						<ul class="sidebar-vertical">
							<!-- Main -->
							<li class="menu-title"><span>Main</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-home"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a  href="index.html">Admin Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-grid"></i> <span> Applications</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="chat.html">Chat</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="inbox.html">Email</a></li>
								</ul>
							</li>
							<!-- /Main -->

							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Super Admin</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="companies.html">Companies</a></li>
									<li><a href="subscription.html">Subscription</a></li>
									<li><a href="packages.html">Packages</a></li>
	                                <li><a href="domain-request.html">Domain Request</a></li>
	                                <li><a href="domain.html">Domain</a></li>
									<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
								</ul>
							</li>

							<!-- Customers -->
							<li class="menu-title" ><span>Customers</span></li>
							<li>
								<a href="customers.html" ><i class="fe fe-users"></i> <span>Customers</span></a>
							</li>
							<li>
								<a href="customer-details.html"><i class="fe fe-file"></i> <span>Customer Details</span></a>
							</li>
							<li>
								<a href="vendors.html"><i class="fe fe-user"></i> <span>Vendors</span></a>
							</li>
							<!-- /Customers -->

							<!-- Inventory -->
							<li class="menu-title"><span>Inventory</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-package"></i> <span> Products / Services</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="product-list.html">Product List</a></li>
									<li><a href="category.html">Category</a></li>
									
									<li><a href="units.html">Units</a></li>
								</ul>
							</li>
							<li>
								<a href="inventory.html"><i class="fe fe-user"></i> <span>Inventory</span></a>
							</li>
							<!-- /Inventory -->

					    	<!-- Signature -->
							<li class="menu-title"> <span>Signature</span></li>
							<li>
								<a  href="signature-list.html"><i class="fe fe-clipboard"></i> <span>List of Signature</span></a>
								<a  href="signature-invoice.html"><i class="fe fe-box"></i> <span>Signature Invoice</span></a>
							</li>
							<!-- /Signature -->

							<!-- Sales -->
							<li class="menu-title"><span>Sales</span></li>							
							<li class="submenu"> 
								
								<a  href="#"><i class="fe fe-file"></i> <span>Invoices</span><span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="invoices.html">Invoices List</a></li>
									<li><a href="invoice-details-admin.html">Invoice Details (Admin)</a></li>
									<li><a href="invoice-details.html">Invoice Details (Customer)</a></li>
									<li><a href="invoice-template.html">Invoice Templates</a></li>
								</ul>
							</li>
							<li>
								<a href="recurring-invoices.html"><i class="fe fe-clipboard"></i> <span>Recurring Invoices</span></a>
							</li>
							<li>
								<a href="credit-notes.html"><i class="fe fe-edit"></i> <span>Credit Notes</span></a>
							</li>
							<!-- /Sales -->

							<!-- Purchases -->
							<li class="menu-title"><span>Purchases</span></li>							
							<li>
								<a href="purchases.html" class="active"><i class="fe fe-shopping-cart"></i> <span>Purchases</span></a>
							</li>
							<li>
								<a href="purchase-orders.html"><i class="fe fe-shopping-bag"></i> <span>Purchase Orders</span></a>
							</li>
							<li>
								<a href="debit-notes.html"><i class="fe fe-file-text"></i> <span>Debit Notes</span></a>
							</li>
							<!-- /Purchases -->

							<!-- Finance & Accounts -->
							<li class="menu-title"><span>Finance & Accounts</span></li>								
							<li>
								<a href="expenses.html"><i class="fe fe-file-plus"></i> <span>Expenses</span></a>
							</li>
							<li>
								<a href="payments.html"><i class="fe fe-credit-card"></i> <span>Payments</span></a>
							</li>
							<!-- /Finance & Accounts -->

							<!-- Quotations -->
							<li class="menu-title"><span>Quotations</span></li>									
							<li>
								<a href="quotations.html"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
							</li>
							<li>
								<a href="delivery-challans.html"><i class="fe fe-file-text"></i> <span>Delivery Challans</span></a>
							</li>
							<!-- /Quotations -->

							<!-- Reports -->
							<li class="menu-title"><span>Reports</span></li>								
							<li>
								<a href="payment-summary.html"><i class="fe fe-credit-card"></i> <span>Payment Summary</span></a>
							</li>
								<li class="submenu">
									<a href="#"><i class="fe fe-box"></i><span>Reports</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-report.html">Expense Report</a></li>
									   <li><a href="purchase-report.html">Purchase Report</a></li>
									   <li><a href="purchase-return.html">Purchase Return Report</a></li>
									   <li><a href="sales-report.html">Sales Report</a></li>
									   <li><a href="sales-return-report.html">Sales Return Report</a></li>
									   <li><a href="quotation-report.html">Quotation Report</a></li>
									   <li><a href="payment-report-2.html">Payment Report</a></li>
									   <li><a href="stock-report.html">Stock Report</a></li>
									   <li><a href="low-stock-report.html">Low Stock Report</a></li>
									   <li><a href="income-report.html">Income Report</a></li>
									   <li><a href="tax-purchase.html">Tax Report</a></li>
									   <li><a href="profit-loss-list.html">Profit & Loss</a></li>
									</ul>
								</li>	
							<!-- /Reports -->

							<!-- User Management -->
							<li class="menu-title"><span>User Management</span></li>
							<li>
								<a href="users.html"><i class="fe fe-user"></i> <span>Users</span></a>
							</li>
							<li>
								<a href="roles-permission.html"><i class="fe fe-clipboard"></i> <span>Roles & Permission</span></a>
							</li>
							<li>
								<a href="delete-account-request.html"><i class="fe fe-trash-2"></i> <span>Delete Account Request</span></a>
							</li>
							<!-- /User Management -->

							<!-- Membership) -->
							<li class="menu-title"><span>Membership</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-book"></i> <span> Membership</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="membership-plans.html">Membership Plans</a></li>
									<li><a href="membership-addons.html">Membership Addons</a></li>
									<li><a href="subscribers.html">Subscribers</a></li>
									<li><a href="transactions.html">Transactions</a></li>
								</ul>
							</li>
							<!-- /Membership) -->

							<!-- Content (CMS) -->
							<li class="menu-title"><span>Content (CMS)</span></li>
							<li>
								<a href="pages.html"><i class="fe fe-folder"></i> <span>Pages</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-book"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="all-blogs.html">All Blogs</a></li>
									<li><a href="categories.html">Categories</a></li>
									<li><a href="blog-comments.html">Blog Comments</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map-pin"></i> <span> Location</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="countries.html">Countries</a></li>
									<li><a href="states.html">States</a></li>
									<li><a href="cities.html">Cities</a></li>
								</ul>
							</li>
							<li>
								<a href="testimonials.html"><i class="fe fe-message-square"></i> <span>Testimonials</span></a>
							</li>
							<li>
								<a href="faq.html"><i class="fe fe-alert-circle"></i> <span>FAQ</span></a>
							</li>
							<!-- /Content (CMS) -->

							<!-- Support -->
							<li class="menu-title"><span>Support</span></li>							
							<li>
								<a href="contact-messages.html"><i class="fe fe-printer"></i> <span>Contact Messages</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-save"></i> <span> Tickets</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tickets.html">Tickets</a></li>
									<li><a href="tickets-list.html">Tickets List</a></li>
									<li><a href="tickets-kanban.html">Tickets Kanban</a></li>
									<li><a href="ticket-details.html">Ticket Overview</a></li>
								</ul>
							</li>
							<!-- /Support -->

						

							<!-- Pages -->
							<li class="menu-title"><span>Pages</span></li>							
							<li>
								<a href="profile.html"><i class="fe fe-user"></i> <span>Profile</span></a>
							</li>
					        <li class="submenu">
					            <a href="#"><i class="fe fe-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
					            <ul style="display: none;">
					                <li><a href="login.html"> Login </a></li>
					                <li><a href="register.html"> Register </a></li>
					                <li><a href="forgot-password.html"> Forgot Password </a></li>
					                <li><a href="lock-screen.html"> Lock Screen </a></li>
					            </ul>
					        </li>
							<li>
								<a href="error-404.html"><i class="fe fe-x-square"></i> <span>Error Pages</span></a>
							</li>
							<li>
								<a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
							</li>
							<li>
								<a href="maps-vector.html"><i class="fe fe-image"></i> <span>Vector Maps</span></a>
							</li>
							<!-- /Pages -->

							<!-- UI Interface -->
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="alerts.html">Alerts</a></li>                                    
									<li><a href="accordions.html" >Accordions</a></li>
									<li><a href="avatar.html">Avatar</a></li> 
									<li><a href="badges.html">Badges</a></li>
									<li><a href="buttons.html">Buttons</a></li>   
									<li><a href="buttongroup.html">Button Group</a></li>                                  
									<li><a href="breadcrumbs.html">Breadcrumb</a></li>
									<li><a href="cards.html">Cards</a></li>
									<li><a href="carousel.html">Carousel</a></li>                                   
									<li><a href="dropdowns.html">Dropdowns</a></li>
									<li><a href="grid.html">Grid</a></li>
									<li><a href="images.html">Images</a></li>
									<li><a href="lightbox.html">Lightbox</a></li>
									<li><a href="media.html">Media</a></li>                              
									<li><a href="modal.html">Modals</a></li>
									<li><a href="offcanvas.html">Offcanvas</a></li>
									<li><a href="pagination.html">Pagination</a></li>
									<li><a href="popover.html">Popover</a></li>                                    
									<li><a href="progress.html">Progress Bars</a></li>
									<li><a href="placeholders.html">Placeholders</a></li>
									<li><a href="rangeslider.html">Range Slider</a></li>                                    
									<li><a href="spinners.html">Spinner</a></li>
									<li><a href="sweetalerts.html">Sweet Alerts</a></li>
									<li><a href="tab.html">Tabs</a></li>
									<li><a href="toastr.html">Toasts</a></li>
									<li><a href="tooltip.html">Tooltip</a></li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="video.html">Video</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="ribbon.html">Ribbon</a></li>
									<li><a href="clipboard.html">Clipboard</a></li>
									<li><a href="drag-drop.html">Drag & Drop</a></li>
									<li><a href="rating.html">Rating</a></li>
									<li><a href="text-editor.html">Text Editor</a></li>
									<li><a href="counter.html">Counter</a></li>
									<li><a href="scrollbar.html">Scrollbar</a></li>
									<li><a href="notification.html">Notification</a></li>
									<li><a href="stickynote.html">Sticky Note</a></li>
									<li><a href="timeline.html">Timeline</a></li>
									<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
									<li><a href="form-wizard.html">Form Wizard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-bar-chart"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="chart-apex.html">Apex Charts</a></li>
									<li><a href="chart-js.html">Chart Js</a></li>
									<li><a href="chart-morris.html">Morris Charts</a></li>
									<li><a href="chart-flot.html">Flot Charts</a></li>
									<li><a href="chart-peity.html">Peity Charts</a></li>
									<li><a href="chart-c3.html">C3 Charts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
									<li><a href="icon-feather.html">Feather Icons</a></li>
									<li><a href="icon-ionic.html">Ionic Icons</a></li>
									<li><a href="icon-material.html">Material Icons</a></li>
									<li><a href="icon-pe7.html">Pe7 Icons</a></li>
									<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
									<li><a href="icon-themify.html">Themify Icons</a></li>
									<li><a href="icon-weather.html">Weather Icons</a></li>
									<li><a href="icon-typicon.html">Typicon Icons</a></li>
									<li><a href="icon-flag.html">Flag Icons</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-sidebar"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html">Form Mask </a></li>
									<li><a href="form-validation.html">Form Validation </a></li>
									<li><a href="form-select2.html">Form Select2 </a></li>
									<li><a href="form-fileupload.html">File Upload </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
							<!-- /UI Interface -->

							<!-- Settings -->
							<li class="menu-title"><span>Settings</span></li>							
							<li>
								<a href="settings.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
							</li>
							<li>
								<a href="login.html"><i class="fe fe-power"></i> <span>Logout</span></a>
							</li>

							<!-- Extras -->
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							<li> 
								<a href="#"><i class="fe fe-file-text"></i> <span>Documentation</span></a>
							</li>
							<li> 
								<a href="javascript:void(0);"><i class="fe fe-lock"></i> <span>Change Log</span> <span class="badge badge-primary ms-auto">v2.0</span></a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fa fa-list"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;" class="level2">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;" class="level3">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
							<!-- Extras -->


						</ul>
					</div>
					
				</div>
			</div>
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
					<div class="card mb-0">
						<div class="card-body">
							<div class="content-page-header">
								<h5>Add Purchases</h5>
							</div>					
							<div class="row">
								<div class="col-md-12">
									<div class="form-group-item border-0 mb-0">
										<div class="row align-item-center">
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-block mb-3">
													<label>Purchases Id</label>
													<input type="text" class="form-control" placeholder="Enter Purchases Id">
												</div>
											</div>										
											<div class="col-lg-4 col-md-6 col-sm-12">											
												<div class="input-block mb-3">
													<label>Select Vendor</label>
													<ul class="form-group-plus css-equal-heights">
														<li>
															<select class="select">
																<option>Choose Vendor</option>
																<option>Vendor 1</option>
																<option>vendor 2</option>
																<option>vendor 3</option>
															</select>
														</li>
														<li>    
															<a class="btn btn-primary form-plus-btn" href="add-customer.html"><i class="fas fa-plus-circle"></i></a>
														</li>
													</ul>												
												</div>									
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-block mb-3">
													<label>Purchases Date</label>
													<input type="text" class="datetimepicker form-control" placeholder="Select Date">
												</div>											
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-block mb-3">
													<label>Due Date</label>
													<input type="text" class="datetimepicker form-control" placeholder="Select Date">
												</div>											
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-block mb-3">
													<label>Reference No</label>
													<input type="text" class="form-control" placeholder="Enter Reference Number">
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-block mb-3">
													<label>Supplier Invoice Serial No</label>
													<input type="text" class="form-control" placeholder="Enter Supplier Invoice Serial No">
												</div>
											</div>
											<div class="col-lg-12">											
												<div class="input-block mb-3">
													<label>Products</label>
													<ul class="form-group-plus css-equal-heights">
														<li>
															<select class="select">
																<option>Select Product</option>
																<option>Product 1</option>
																<option>Product 2</option>
																<option>Product 3</option>
															</select>
														</li>
														<li>    
															<a class="btn btn-primary form-plus-btn" href="add-products.html"><i class="fas fa-plus-circle"></i></a>
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
													<table class="table table-center table-hover datatable">
														<thead class="thead-light">
															<tr>
																<th>Product / Service</th>
																<th>Quantity</th>
																<th>Unit</th>
																<th>Rate</th>
																<th>Discount</th>
																<th>Tax</th>
																<th>Amount</th>
																<th class="no-sort">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Nike Jordan</td>
																<td>1</td>
																<td>Pcs</td>
																<td>$1360.00</td>
																<td>0</td>
																<td>0</td>
																<td>$1360.00</td>
																<td class="d-flex align-items-center">
																	<a href="#" class="btn-action-icon me-2" data-bs-toggle="modal" data-bs-target="#add_discount"><span><i class="fe fe-edit"></i></span></a>
																	<a href="#" class="btn-action-icon" data-bs-toggle="modal" data-bs-target="#delete_discount"><span><i class="fe fe-trash-2"></i></span></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="row">
												<div class="col-lg-7">
													<div class="input-block mb-3">
														<label>Discount Type</label>
														<select class="select">
															<option>Percentage(%)</option>
															<option>Fixed</option>
														</select>
													</div>
												</div>
												<div class="col-lg-5">
													<div class="input-block mb-3">
														<label>Discount(%)</label>
														<input type="text" class="form-control" placeholder="10">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="input-block mb-3">
												<label>Tax</label>
												<select class="select">
													<option>No Tax</option>
													<option>IVA - (21%)</option>
													<option>IRPF - (-15%)</option>
													<option>PDV - (20%)</option>
												</select>
											</div>
										</div>
										<div class="col-md-4"></div>
									</div>
									<div class="form-group-item border-0 p-0">
										<div class="row">
											<div class="col-xl-6 col-lg-12">
												<div class="form-group-bank">
													<div class="row align-items-center">
														<div class="col-md-8">
															<div class="input-block mb-3">
																<label>Select Bank</label>
																<select class="select">
																	<option>Select Bank</option>
																	<option>SBI</option>
																	<option>IOB</option>
																	<option>Canara</option>
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
														<label>Notes</label>
														<textarea class="form-control" placeholder="Enter Notes"></textarea>
													</div>
													<div class="input-block notes-form-group-info mb-0">
														<label>Terms and Conditions</label>
														<textarea class="form-control" placeholder="Enter Terms and Conditions"></textarea>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-12">
												<div class="form-group-bank">
													<div class="invoice-total-box">
														<div class="invoice-total-inner">
															<p>Taxable Amount <span>$1360.00</span></p>
															<p>Discount <span>$136.00</span></p>
															<p>Vat <span>$0.00</span></p>
															<div class="status-toggle justify-content-between">
																<div class="d-flex align-center">
																	<p>Round Off </p>
																	<input id="rating_1" class="check" type="checkbox" checked="">
																	<label for="rating_1" class="checktoggle checkbox-bg">checkbox</label>
																</div>
																<span>$0.00</span>
															</div>																
														</div>
														<div class="invoice-total-footer">
															<h4>Total Amount <span>$1224.00</span></h4>
														</div>
													</div>
													<div class="input-block mb-3">
														<label>Signature Name</label>
														<input type="text" class="form-control" placeholder="Enter Signature Name">
													</div>
													<div class="input-block mb-0">
														<label>Signature Image</label>
														<div class="input-block service-upload service-upload-info mb-0">
															<span><i class="fe fe-upload-cloud me-1"></i>Upload Signature</span>
															<input type="file" multiple="" id="image_sign">
															<div id="frames"></div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>								
									<form action="https://kanakku.dreamstechnologies.com/html/template/purchases.html" class="text-end">
										<button type="reset" class="btn btn-primary cancel me-2">Cancel</button>
										<button type="submit" class="btn btn-primary">Save</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->

			<!-- Add Tax & Discount Modal -->
			<div class="modal custom-modal fade" id="add_discount" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header border-0 pb-0">
							<div class="form-header modal-header-title text-start mb-0">
								<h4 class="mb-0">Add Tax & Discount</h4>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-3">
										<label>Rate</label>
										<input type="number" class="form-control" placeholder="120">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-3">
										<label>Discount Amount</label>
										<input type="number" class="form-control" placeholder="0">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-0">
										<label>Tax</label>
										<select class="select">
											<option>N/A</option>
											<option>5%</option>
											<option>10%</option>
											<option>15%</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Back</a>
							<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Tax & Discount Modal -->

			<!-- Delete Items Modal -->
			<div class="modal custom-modal fade" id="delete_discount" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Product / Services</h3>
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

			<!-- Add Bank Details Modal -->
			<div class="modal custom-modal fade" id="bank_details" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header border-0 pb-0">
							<div class="form-header modal-header-title text-start mb-0">
								<h4 class="mb-0">Add Bank Details</h4>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-3">
										<label>Bank Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Enter Bank Name">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-3">
										<label>Account Number <span class="text-danger">*</span></label>
										<input type="number" class="form-control" placeholder="Enter Account Number">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-3">
										<label>Branch Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Enter Branch Name">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="input-block mb-0">
										<label>IFSC Code <span class="text-danger">*</span></label>
										<input type="number" class="form-control" placeholder="Enter IFSC COde">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Back</a>
							<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save</a>
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

<!-- Mirrored from kanakku.dreamstechnologies.com/html/template/add-purchases.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 11:50:44 GMT -->
</html>
@extends('mailbox::layouts.master')

@section('styles')

		<!-- Internal Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ mail</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pe-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pe-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pe-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row row-sm main-content-mail">

                       @include('mailbox::layouts.component.sidebar')

						<div class="col-lg-8 col-xl-9 col-md-12">
							<div class="card">
								<div class="main-content-body main-content-body-mail card-body">
									<div class="main-mail-header">
										<div>
											<h4 class="main-content-title mg-b-5">Snoozed</h4>
											<p>You have 2 unread messages</p>
										</div>
										<div>
											<span>1-50 of 1200</span>
											<div class="btn-group" role="group">
												<button class="btn btn-outline-secondary disabled" type="button"><i class="icon ion-ios-arrow-back"></i></button> <button class="btn btn-outline-secondary" type="button"><i class="icon ion-ios-arrow-forward"></i></button>
											</div>
										</div>
									</div><!-- main-mail-list-header -->
									<div class="main-mail-options">
										<label class="ckbox"><input id="checkAll" type="checkbox"> <span></span></label>
										<div class="btn-group">
											<button class="btn btn-light"><i class="bx bx-refresh"></i></button> <button class="btn btn-light disabled"><i class="bx bx-archive"></i></button> <button class="btn btn-light disabled"><i class="bx bx-info-circle"></i></button> <button class="btn btn-light disabled"><i class="bx bx-trash"></i></button> <button class="btn btn-light disabled"><i class="bx bx-folder-open"></i></button> <button class="btn btn-light disabled"><i class="bx bx-purchase-tag-alt"></i></button>
										</div><!-- btn-group -->
									</div><!-- main-mail-options -->
									<div class="main-mail-list" style="height:485px; overflow-y:scroll">
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/5.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Adrian Monino
												</div>
												<div class="main-mail-subject">
													<strong>Someone who believes in you</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												11:30am
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/2.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Albert Ansing
												</div>
												<div class="main-mail-subject">
													<strong>Here's What You Missed This Week</strong> <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
												</div>
											</div>
											<div class="main-mail-date">
												06:50am
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/9.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Carla Guden
												</div>
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-attachment">
												<i class="typcn typcn-attachment"></i>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item unread">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Reven Galeon
												</div>
												<div class="main-mail-subject">
													<strong>We're Giving a Macbook for Free</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Yesterday
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/12.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Elisse Tan
												</div>
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/14.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Marianne Audrey
												</div>
												<div class="main-mail-subject">
													<strong>We've Made Some Changes</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 13
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-avatar bg-gray-800">
												J
											</div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Jane Phoebe
												</div>
												<div class="main-mail-subject">
													<strong>Grab Our Holiday Deals</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 12
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/15.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Raffy Godinez
												</div>
												<div class="main-mail-subject">
													<strong>Just a Few Steps Away</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 05
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star active">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/7.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Allan Cadungog
												</div>
												<div class="main-mail-subject">
													<strong>Credit Card Promos</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 04
											</div>
										</div>
										<div class="main-mail-item">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/10.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Alfie Salinas
												</div>
												<div class="main-mail-subject">
													<strong>4 Ways to Optimize Your Search</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
										<div class="main-mail-item border-bottom-0">
											<div class="main-mail-checkbox">
												<label class="ckbox"><input type="checkbox"> <span></span></label>
											</div>
											<div class="main-mail-star">
												<i class="typcn typcn-star"></i>
											</div>
											<div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/1.jpg')}}"></div>
											<div class="main-mail-body">
												<div class="main-mail-from">
													Jove Guden
												</div>
												<div class="main-mail-subject">
													<strong>Keep Your Personal Data Safe</strong> <span>viva mus elemen tum semper nisi enean vulputat enean commodo li gula eget dolor cum socia eget dolor</span>
												</div>
											</div>
											<div class="main-mail-date">
												Oct 02
											</div>
										</div>
									</div>
									<div class="mg-lg-b-30"></div>
								</div>
							</div>
						</div>
                        @include('mailbox::layouts.component.compose')
					</div>
					<!-- /row -->

@endsection('content')

@section('scripts')

		<!--- Internal Check-all-mail js --->
		<script src="{{asset('assets/js/check-all-mail.js')}}"></script>

		<!--Internal Apexchart js-->
		<script src="{{asset('assets/js/apexcharts.js')}}"></script>

		<!--Internal Sparkline js -->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

@endsection

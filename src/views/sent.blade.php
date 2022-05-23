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
											<h4 class="main-content-title mg-b-5">Sent Items</h4>
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
									<div class="main-mail-list same">

                                        @forelse ( $mails as $mail )
                                        <a href="{{route('mails.show',$mail->id)}}">
                                            <div class="main-mail-item {{$mail->read == 0 ? 'unread':''}}">
                                                <div class="main-mail-checkbox">
                                                    <label class="ckbox"><input type="checkbox"> <span></span></label>
                                                </div>
                                                <div class="main-mail-star">
                                                    <i class="typcn typcn-star"></i>
                                                </div>
                                                <div class="main-img-user"><img alt="" src="{{asset('assets/img/faces/5.jpg')}}"></div>
                                                <div class="main-mail-body">
                                                    <div class="main-mail-from">
                                                        {{$mail->sender}}
                                                    </div>
                                                    <div class="main-mail-subject">
                                                        {{-- <strong>  {{$mail->subject}}</strong> --}}
                                                        <span>  {{$mail->subject}}</span>
                                                    </div>
                                                </div>
                                                <div class="main-mail-attachment">
                                                    <i class="typcn typcn-attachment"></i>
                                                </div>
                                                <div class="main-mail-date">
                                                    11:30am
                                                </div>
                                            </div>
                                        </a>
                                        @empty
                                        <div class="row">`
                                            <div class="col-md-12 text-center">
                                                <p>Your Inbox is empty</p>
                                            </div>
                                        </div>
                                        @endforelse


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

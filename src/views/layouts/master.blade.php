<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Valex – Laravel Admin & Dashboard Template">
		<meta name="Author" content="SPRUKO™">
		<meta name="Keywords" content="laravel admin panel, laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel ui, laravel dashboard, laravel dashboard template, admin, admin template, bootstrap dashboard, bootstrap 5 admin template, laravel blade, laravel blade template bootstrap, php laravel, laravel mix"/>

		<!-- Title -->
		<title> Mailbox </title>

        @include('mailbox::layouts.component.styles')
        <style>
            .same{
                height: 410px;
                overflow-y: scroll;
            }
        </style>

    </head>

    <body class="main-body app sidebar-mini">

        <!-- Loader -->
		<div id="global-loader">
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

        <!-- main-sidebar -->
        {{-- @if (request()->is('mails*'))
        @else
        @include('mailbox::layouts.component.app-sidebar')
        @endif --}}

        <!-- main-sidebar -->

        <!-- main-content -->
        <div class='main-content app-content'>

            <!-- main-header -->
            @include('mailbox::layouts.component.main-header')
            <!--/main-header -->

            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->

        {{-- @include('mailbox::layouts.sidebar-right') --}}

        @include('mailbox::layouts.component.footer')

        @yield('modal')

        </div>

        @include('mailbox::layouts.component.scripts')

    </body>
</html>

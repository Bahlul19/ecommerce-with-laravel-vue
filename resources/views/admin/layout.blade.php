<!doctype html>
<html lang="en">

<x-admin-header-css></x-admin-header-css>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--sidebar wrapper -->
		<x-admin-side-bar></x-admin-side-bar>
		<!--end sidebar wrapper -->

		<!--start header -->
		<x-admin-header></x-admin-header>
		<!--end header -->

        @yield('content')

        <!--start switcher-->
        <x-admin-switch-wrapper></x-admin-switch-wrapper>        
        <!--end switcher-->

        <!-- Bootstrap JS -->
	
	    <x-admin-footer-js></x-admin-footer-js>
</body>

</html>
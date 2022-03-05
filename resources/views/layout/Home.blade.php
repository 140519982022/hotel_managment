
<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
        <head>
            <!--begin::Page Custom Styles(used by this page)-->
            
            @include('include.head')            
            <!--end::Page Custom Styles-->
           
        </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body>    
        <!-- side bar  -->
        <!-- header of page -->
        @include('include.navbar')
        @include('include.head')
        <!-- start of content -->
        <div class="main-panel">

            @yield('content')
            <!-- footer of page -->
            @include('include.footer')            
        </div>
        <!-- end of content -->
    </body>
   
        <!-- page specific scripts -->
            @yield('pagespecificscripts')
    <!--end::Body-->
</html>
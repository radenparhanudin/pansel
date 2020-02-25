<!DOCTYPE html>
<html>

@include('layouts.backend.head')

<body class="theme-purple">
    <!-- Page Loader -->
    @include('layouts.backend.page-loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    @include('layouts.backend.top-bar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('layouts.backend.left-sidebar')
        <!-- #END# Left Sidebar -->
    </section>

    @yield('backend')

    @include('layouts.backend.foot')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>EMP MANAGE</title>
    @include('inc.head')
    @include('inc.favicon')
</head>

<body class="app aside-menu-fixed sidebar-lg-show">
    <div id="main-header">
        @include('inc.main_header')
    </div>
    <div class="app-body" id="main-body">

        @include('inc.sidebar')

        <main class="main pt-2">
            <div class="container-fluid animated fadeIn">
                @yield('content')
            </div>

        </main>

    </div><!-- ./app-body -->
    <footer class="app-footer">
        @include('inc.footer')
    </footer>

    @include('inc.scripts')

</body>

</html>

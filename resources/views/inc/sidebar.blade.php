    <!-- Left side column. contains the sidebar -->
    <div class="sidebar sidebar-pills bg-white">
        <!-- sidebar: style can be found in sidebar.less -->
        <nav class="sidebar-nav overflow-hidden">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="nav">
                @include('inc.sidebar_content')
            </ul>
        </nav>
        <!-- /.sidebar -->
    </div>

    @push('before_scripts')
        <script type="text/javascript">
            /* Recover sidebar state */
            if (Boolean(sessionStorage.getItem('sidebar-collapsed'))) {
                var body = document.getElementsByTagName('body')[0];
                body.className = body.className.replace('sidebar-lg-show', '');
            }

            /* Store sidebar state */
            var navbarToggler = document.getElementsByClassName("navbar-toggler");
            for (var i = 0; i < navbarToggler.length; i++) {
                navbarToggler[i].addEventListener('click', function(event) {
                    event.preventDefault();
                    if (Boolean(sessionStorage.getItem('sidebar-collapsed'))) {
                        sessionStorage.setItem('sidebar-collapsed', '');
                    } else {
                        sessionStorage.setItem('sidebar-collapsed', '1');
                    }
                });
            }
        </script>
    @endpush

    @push('after_scripts')
        <script>
            // Set active state on menu element

            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            })

            var full_url = "{{ Request::fullUrl() }}";
            var $navLinks = $(".sidebar-nav li a");

            // First look for an exact match including the search string
            var $curentPageLink = $navLinks.filter(
                function() {
                    return $(this).attr('href') === full_url;
                }
            );

            // If not found, look for the link that starts with the url
            if (!$curentPageLink.length > 0) {
                $curentPageLink = $navLinks.filter(function() {
                    if ($(this).attr('href').startsWith(full_url)) {
                        return true;
                    }

                    if (full_url.startsWith($(this).attr('href'))) {
                        return true;
                    }

                    return false;
                });
            }

            // for the found links that can be considered current, make sure 
            // - the parent item is open
            $curentPageLink.parents('li').addClass('open');
            // - the actual element is active
            $curentPageLink.each(function() {
                $(this).addClass('active');
            });
        </script>
    @endpush

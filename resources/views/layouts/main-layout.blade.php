<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>N10 | Fitness</title>
    <meta charset="utf-8" />
    <meta name="description"
    content="The most Fitness App." />
    <meta name="keywords"
    content="N10 Fitness" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta property="og:title"
    content="N10 Fitness" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <meta property="og:url" content="https://n10fitness.com" />
    <meta property="og:site_name" content="N10fitness " />
    <link rel="canonical" href="https://preview.n10fitness.com" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->

    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
    type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <style>
        .error-area ul{
            list-style: none
        }
        .setAllInfo{
            list-style: none

        }

        .error-area ul li{
            color:red
        }


        ul.setAllInfo li {
            padding: 10px;
            font-size: medium;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-sidebar-secondary-collapse="on" data-kt-app-header-fixed-mobile="true"
data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true"
data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true"
data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
            if (localStorage.getItem("data-theme") !== null) {
                themeMode = localStorage.getItem("data-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->


<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header d-flex d-lg-none" data-kt-sticky="true"
        data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
        data-kt-sticky-offset="{default: false, lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-xxl d-flex align-items-center justify-content-between"
        id="kt_app_header_container">
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="/">
                <img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}"
                class="h-30px" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Header mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-color-white bg-white bg-opacity-0 bg-hover-opacity-10 w-35px h-35px"
            id="kt_app_sidebar_mobile_toggle">
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
            <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                fill="currentColor" />
                <path opacity="0.3"
                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
</div>
<!--end::Header mobile toggle-->
</div>
<!--end::Header container-->
</div>
<!--end::Header-->
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            @include('includes.toolbar')
            <!--begin::Content-->
            @yield('content')
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    @include('includes.footer')
</div>
<!--end:::Main-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->

@include('includes.sidebar')
@include('includes.drawers')

<!--begin::Engage toolbar-->
<div
class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">

<!--end::Help drawer toggle-->
</div>
<!--end::Engage toolbar-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
        transform="rotate(90 13 6)" fill="currentColor" />
        <path
        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
        fill="currentColor" />
    </svg>
</span>
<!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
@include('includes.modals')
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<!-- Datatables JS CDN -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

@yield('page_scripts')
@yield('sub_page_scripts')
<!--end::Vendors Javascript-->
<!--end::Javascript-->
@yield('scripts')

<script>

    $(function(){
        var current = location.pathname;
        if(current!='/'){
            $('.menu-link').removeClass('active');
            $('.menu-link').parent().parent().parent().removeClass('here');
        }
        else{
            $('#main_dashboard_menu').addClass('here');
            $('#main_dashboard_menu_item').addClass('active');
        }
        $('.menu-link').each(function(){
            var $this = $(this);
            if(current!='/'){

                if($this.attr('href')){
                    if($this.attr('href').indexOf(current) !== -1){
                        $this.addClass('active');
                        $this.parent().parent().parent().addClass('here');
                    }
                }

            }
        })
    })

    function closemodal(){

        $("#kt_modal_add_user").modal('hide');
    }
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
    $('#kt_modal_add_user').on('shown.bs.modal', function (e) {
        // do something...
        $(this)
        .find("input,textarea,select")
        .val('')
        .end()
        .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
        .end();
        $('input[name=_token]').val("{{csrf_token()}}");
    })
</script>

</body>
<!--end::Body-->

</html>

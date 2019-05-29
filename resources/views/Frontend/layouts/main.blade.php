
<!DOCTYPE html>
<html lang="en-AU">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('pageTitle')</title>
        <link rel='stylesheet' id='wp-block-library-css'  href="{{asset(ASSET.'css/frontend/style.min5560.css?ver=5.0.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'  href="{{asset(ASSET.'css/frontend/styles1748.css?ver=5.0.5')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='crp-main-front-style-css'  href="{{asset(ASSET.'css/frontend/crp-main-front5560.css?ver=5.0.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='crp-tc-buttons-css'  href="{{asset(ASSET.'css/frontend/crp-tc-buttons5560.css?ver=5.0.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='crp-tiled-layer-css'  href="{{asset(ASSET.'css/frontend/crp-tiled-layer5560.css?ver=5.0.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='crp-font-awesome-css'  href="{{asset(ASSET.'css/frontend/fontawesome/font-awesome5560.css?ver=5.0.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='photozoom-style-css'  href="{{asset(ASSET.'css/frontend/style5560.css?ver=5.0.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css'  href="{{asset(ASSET.'css/frontend/font-awesome.min1849.css?ver=4.7.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='photozoom-webfonts-css'  href='http://fonts.googleapis.com/css?family=Noto%20Serif%3A400%2C400i%2C700%2C700i%7COld%20Standard%20TT%3A400%2C700&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='photozoom-webfonts-css'  href="{{asset(ASSET.'css/frontend/custome.css')}}" type='text/css' media='all' />
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/custome.js')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/jquery/jqueryb8ff.js?ver=1.12.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/portfolio-wp/js/crp-main-front5560.js?ver=5.0.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/portfolio-wp/js/crp-helper5560.js?ver=5.0.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/portfolio-wp/js/jquery/jquery.modernizr.min5560.js?ver=5.0.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/portfolio-wp/js/crp-tiled-layer5560.js?ver=5.0.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/portfolio-wp/js/crp-fs-viewer5560.js?ver=5.0.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/photozoom/js/jquery.slicknav.min68b3.js?ver=1')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/photozoom/js/superfish.min68b3.js?ver=1')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'js/frontend/photozoom/js/jquery.flexslider-min68b3.js?ver=1')}}"></script>
        
        @yield('headLink')
        <script type="text/javascript">
                    var frontend = {};
                    var FRONTEND = {};
                    var BASE_URL = "{{ url('/') }}";
        </script>
    </head>



    <body class="home blog wp-custom-logo theme-color-light page-header-centered">

        <div id="container">

            <div class="site-wrapper-all site-wrapper-boxed">
                <input type="hidden" value="{{ csrf_token() }}" name='csrf-token' id='csrf-token'>
                @include('Frontend.layouts.header')
                @include('Frontend.layouts.slider')
                <main id="site-main">
                    @yield('content')
                </main>


            @include('Frontend.layouts.footer')


            </div><!-- #primary -->
        </div><!-- #content -->
        
<script type='text/javascript' src="{{asset(ASSET.'js/frontend/contact-form-7/js/scripts1748.js?ver=5.0.5')}}"></script>
<script type='text/javascript'>
    
/* <![CDATA[ */
var photozoomStrings = {"slicknav_menu_home":"Click for Menu"};
/* ]]> */
</script>
<script type='text/javascript' src="{{asset(ASSET.'js/frontend/photozoom/js/photozoomdc27.js?ver=20180914')}}"></script>
<script type='text/javascript' src="{{asset(ASSET.'js/frontend/wp-embed.min5560.js?ver=5.0.4')}}"></script>
<script>

</script>
    </body>
</html>
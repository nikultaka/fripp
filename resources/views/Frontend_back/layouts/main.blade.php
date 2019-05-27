
<!DOCTYPE html>
<html lang="en-AU" prefix="og: http://ogp.me/ns#">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle')</title>

        
        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel='dns-prefetch' href='http://s.w.org/' />
        <link rel="alternate" type="application/rss+xml" title="Dr Evelyn Gasparillo &raquo; Feed" href="feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Dr Evelyn Gasparillo &raquo; Comments Feed" href="comments/feed/index.html" />
        
       
        <link rel='stylesheet' id='astra-theme-css-css'  href="{{asset(ASSET.'frontend/wp-content/themes/astra/assets/css/minified/style.min330a.css?ver=1.4.1')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='astra-theme-css-css'  href="{{asset(ASSET.'frontend/css/custom.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='astra-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato%3A300%2C400&amp;ver=1.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='astra-addon-css-css'  href="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b6124593789e7-482594922fca.css')}}" type='text/css' media='all' />
        
        <link rel='stylesheet' id='elementor-icons-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minaf6c.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-animations-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/animations/animations.min6b25.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/css/frontend.min6b25.css')}}" type='text/css' media='all' />
        
        <link rel='stylesheet' id='elementor-pro-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/elementor-pro/assets/css/frontend.min9c6b.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='uael-frontend-css'  href="{{asset(ASSET.'frontend/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min91ce.css?ver=1.5.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='evelyn-g-theme-css-css'  href="{{asset(ASSET.'frontend/wp-content/themes/evelyn-g/style8a54.css?ver=1.0.0')}}" type='text/css' media='all' />
       
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset(ASSET.'frontend/wp-includes/wlwmanifest.xml')}}" /> 
        @yield('headLink')
        	
        <link rel="icon" href="{{asset(ASSET.'frontend/wp-content/uploads/2018/06/Evelyn-G-Favicon-150x150.jpg')}}" sizes="32x32" />
        <link rel="icon" href="{{asset(ASSET.'frontend/wp-content/uploads/2018/06/Evelyn-G-Favicon-300x300.jpg')}}" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="{{asset(ASSET.'frontend/wp-content/uploads/2018/06/Evelyn-G-Favicon-300x300.jpg')}}" />
        
        <script type="text/javascript">
            var frontend = {};
            var FRONTEND = {};
            var BASE_URL = "{{ url('/') }}";
        </script>
    </head>


    <body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="home page-template-default page page-id-6 wp-custom-logo ast-page-builder-template ast-no-sidebar astra-1.4.1 ast-header-custom-item-outside ast-single-post ast-full-width-header ast-inherit-site-logo-sticky elementor-default elementor-page elementor-page-6 astra-addon-1.4.0">

        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <input type="hidden" value="{{ csrf_token() }}" name='csrf-token' id='csrf-token'>
            @include('Frontend.layouts.header')

            <div id="content" class="site-content">

                <div class="ast-container">



                    <div id="primary" class="content-area primary">


                        <main id="main" class="site-main" role="main">





                            <article itemtype="https://schema.org/CreativeWork" itemscope="itemscope" id="post-6" class="post-6 page type-page status-publish ast-article-single">


                                <header class="entry-header ast-header-without-markup">


                                </header><!-- .entry-header -->

                                <div class="entry-content clear" itemprop="text">


                                    <div class="elementor elementor-6">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">

                                                @include('Frontend.layouts.slider')
                                                 @yield('content')
                                            </div>
                                        </div>
                                    </div>



                                </div><!-- .entry-content .clear -->



                            </article><!-- #post-## -->





                        </main><!-- #main -->


                    </div><!-- #primary -->



                </div> <!-- ast-container -->

            </div><!-- #content -->



             @include('Frontend.layouts.footer')
            


        </div><!-- #page -->


        <a id="ast-scroll-top" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both">
            <span class="screen-reader-text">Scroll to Top</span>
        </a>
        <script type='text/javascript' src="{{asset(ASSET.'bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!--<script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/themes/astra/assets/js/minified/style.min330a.js?ver=1.4.1')}}"></script>-->

        <!--<script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/uploads/astra-addon/astra-addon-5b61245937ee21-882302582fca.js?ver=1.4.0')}}"></script>-->
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-includes/js/wp-embed.min8e83.js?ver=4.9.10')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/slick/slick.minc245.js?ver=1.8.1')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor-pro/assets/lib/sticky-kit/jquery.sticky-kit.mincfa9.js?ver=1.1.2')}}"></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var ElementorProFrontendConfig = {};
            /* ]]> */
        </script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor-pro/assets/js/frontend.min9c6b.js?ver=2.0.16')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/dialog/dialog.mina94e.js?ver=4.4.1')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}"></script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/lib/swiper/swiper.jquery.mincb20.js?ver=4.4.3')}}"></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var elementorFrontendConfig = {};
            /* ]]> */
        </script>
        <script type='text/javascript' src="{{asset(ASSET.'frontend/wp-content/plugins/elementor/assets/js/frontend.min6b25.js?ver=2.1.4')}}"></script>
   <script src="{{asset(ASSET.'js/frontend/common.js')}}"></script>
        
   <script type="text/javascript">
    $(document).ready(function () {
        frontend.common.initialize();
    });
</script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </body>
</html>


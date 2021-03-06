<!-- Start : Footer Section -->
<footer id="colophon" class="site-footer">
    <div id="backtotop"><i class="fa fa-chevron-up"></i></div>
    <!-- Start : Fotter Bottom Widgets -->
    <div id="main-footer">
        <div class="container">
            <div id="footer-widget" class="row three-column eight-col">
                <ul>
                    <li class="column column-38 widget warrior_site_info_posts"
                        id="footer-widget-warrior_site_info_posts-2">
                        <div id="widget-warrior_site_info_posts-2" class="widget warrior_site_info_posts">
                            <div class="footer-widget-item site-info">
                                <a href="../hospitalplus.html" class="footer-logo"><img
                                            src="{{ asset('images/logo.png') }}" alt=""/></a>
                                <br>
                                <p>Nous nous occuper du mieux que nous pouvons de vos proche</p>
                                <br><br>
                                <address>
                                    <strong>Paradise Valley</strong><br>
                                    <div class="contact-info">
                                    </div>
                                </address>
                            </div>
                        
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- End : Footer Bottom Widgets -->
    
    <!-- Start : Main Footer Section -->
    <div id="footer-bottom">
        <div class="container">
            <span class="copyright">&copy; 2018 Paradise Valley.</span>
        </div>
    </div>
    <!-- End : Main Footer Section -->
</footer>
<!-- End : Footer Section -->
</div>
<div id="preloader"></div>

<!-- Start : Back to Top Section -->
<a id="scroll-top" href="#top" title="Back to Top"><span class="fa fa-angle-up"></span></a>
<!-- End : Back to Top Section -->

<script type="text/javascript">(function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        }
        /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link rel='stylesheet' id='vc_google_fonts_montserratregular700-css'
      href='http://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700&amp;ver=4.9.3' type='text/css'
      media='all'/>
<link rel='stylesheet' id='animate-css-css'
      href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min-ver=5.0.1.css' type='text/css'
      media=''/>
<link rel='stylesheet' id='vc_linecons-css'
      href='wp-content/plugins/js_composer/assets/css/lib/vc-linecons/vc_linecons_icons.min-ver=5.0.1.css'
      type='text/css' media='all'/>
<link rel='stylesheet' id='vc_tta_style-css'
      href='wp-content/plugins/js_composer/assets/css/js_composer_tta.min-ver=5.0.1.css' type='text/css' media='all'/>
<link rel='stylesheet' id='vc_google_fonts_lato100100italic300300italicregularitalic700700italic900900italic-css'
      href='http://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=4.9.3'
      type='text/css' media='all'/>
<link rel='stylesheet' id='vc_google_fonts_open_sans300300italicregularitalic600600italic700700italic800800italic-css'
      href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;ver=4.9.3'
      type='text/css' media='all'/>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/demo2.themewarrior.com\/hospitalplus\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}, "cached": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts-ver=4.9.2.js'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min-ver=4.9.3.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.flexslider-ver=2.6.0.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.mobilemenu-ver=1.1.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/bootstrap-datepicker-ver=2.0.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.swipebox.min-ver=1.4.1.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.mixitup.min-ver=1.5.4.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.jpanelmenu.min-ver=1.1.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jrespond.min-ver=1.1.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.fitvids-ver=1.1.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/select2.full-ver=4.0.1.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/grid-ver=1.0.0.js'></script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/jquery.backstretch.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _warrior = {
        "bg_header": "http:\/\/demo2.themewarrior.com\/hospitalplus\/wp-content\/themes\/hospitalplus\/images\/header\/header.jpg",
        "backstretch_status": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/hospitalplus/js/functions.js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min-ver=4.9.3.js'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min-ver=5.0.1.js'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min-ver=5.0.1.js'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min-ver=5.0.1.js'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min-ver=5.0.1.js'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min-ver=5.0.1.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min-ver=4.1.14.js'></script>
<!--[if lte IE 9]>
<script type='text/javascript'
        src='http://demo2.themewarrior.com/hospitalplus/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.14'></script>
<![endif]-->
</body>
</html>
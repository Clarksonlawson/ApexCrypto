
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
     <title>@yield('title', config('app.name'))</title>

    <meta name="author" content="clarksonxdev.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/animate.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/styles.css')}}">
     <!-- Toastify CSS and JS -->

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@12.0.2/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.3/build/css/intlTelInput.css">  
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.3.0/dist/turbo.es2017-umd.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('auth/font/fonts.css')}}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('auth/icon/style.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

</head>

<body>

    
    <div id="wrapper">
      @yield('content')
    </div>
    
    <script src="{{ asset('auth/js/jquery.min.js')}} "></script>
    <script src="{{asset('auth/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('auth/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('auth/js/main.js')}}"></script>
    <script>
    // ✅ Simple reusable toast helper with solid colors
    function toast(message, type = "info") {
        if (!window.Toastify) {
            console.error("Toastify is not loaded");
            alert(message);
            return;
        }

        // Define solid background colors for different types
        const colors = {
            success: "#16a34a", // green-600
            error: "#dc2626",   // red-600
            warning: "#f59e0b", // amber-500
            info: "#2563eb"     // blue-600
        };

        Toastify({
            text: message,
            duration: 4000,
            gravity: "top",          // top or bottom
            position: "right",       // left, center, or right
            stopOnFocus: true,
            close: true,
            style: {
                background: colors[type] || colors.info,
                color: "#fff",
                fontWeight: "500",
                borderRadius: "6px",
                boxShadow: "0 2px 6px rgba(0,0,0,0.2)",
                padding: "10px 18px"
            }
        }).showToast();
    }
</script>

</body>


</html>
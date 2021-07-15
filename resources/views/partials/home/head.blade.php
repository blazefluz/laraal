<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- Favicons -->
    <link href="{{asset('favicon.png')}}" rel="icon">
    <link href="{{asset('favicon.png')}}" rel="apple-touch-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/ld+json">
      {
      "logo":"https://cmpetas.com/logo.png", "@context":"http://schema.org","url":"https://www.cmpetas.com", "name":"cmpetas.com",
      "sameAs" : ["https://www.facebook.com/cmpetas", "https://www.twitter.com/cmpetas", "https://instagram.com/cmpetas"], "@type":"Organization"}
   
      {
          "name":"cmpetas.com", "alternateName":"cmpetas", "@context": "https://schema.org","@type": "WebSite", "url": "https://www.cmpetas.com", "potentialAction": { "@type": "SearchAction", "target": "https://www.cmpetas.com/filter?location={search_term_string}","query-input": "required name=search_term_string"}
      }
      </script>
      <script type="application/ld+json">
        [
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Rent",
                "url": "https://www.cmpetas.com/rent"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for Sale",
                "url": "https://www.cmpetas.com/sale"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Properties for ShortLet",
                "url": "https://www.cmpetas.com/shortlet"
            },
            {
                "@context": "https://schema.org",
                "@type": "SiteNavigationElement",
                "name": "Real Estate Agents",
                "url": "https://www.cmpetas.com/agents"
            },
           
           
        ]
        </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/owl.carousel/assets/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  
  
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/pgwslideshow.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/vendor/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174989651-1"></script>

  
  </head>
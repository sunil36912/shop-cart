<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>App Name - @yield('title')</title>
    @yield('css')

    
</head>
<body>
    <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
            @yield('navbar')
      
    
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
       
              
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        @yield('topnav')
     
        @yield('topnotification')
          

        </nav>
        </div>
                <div class="row  border-bottom white-bg dashboard-header">
                        @yield('content')
                 
                         

            </div>
     

        </div>
    </div>
    @yield('script')
    <!-- Mainly scripts -->
  
</body>
</html>
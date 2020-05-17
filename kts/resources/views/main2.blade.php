<!doctype html>
    <html lang="en">
    <head>
        @include('partials._head2')
    </head>
      <body>
          <!--Bootstrap navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky" >
             @include('partials._nav')
          </nav>
          <br/>
              <div class="container">
                  @include('partials._messages')
                  @yield('content')
          @include('partials._footer')
           </div> <!--end of container row-->
           <br/><br/>        
          @include('partials._javascript')
              <!--incase you want to add javascript-->
              @yield('scripts')
      </body>
</html>

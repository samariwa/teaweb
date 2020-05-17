<a class="navbar-brand" href="/"><img src="{{url('images/logo-1.png')}}" height="55" width="70"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
&emsp;&emsp;
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="{{ Request::is('/') ? "nav-item active" : ""}}">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
  </li>
  &emsp;
  <li class="{{ Request::is('blog') ? "nav-item active" : ""}}">
    <a class="nav-link" href="/blog">Blogs <span class="sr-only">(current)</span></a>
  </li>
  &emsp;
  <li class="nav-item">
    <li class="{{ Request::is('about') ? "nav-item active" : ""}}">  
    <a class="nav-link" href="/about"><i class="fa fa-info-circle"></i> About<span class="sr-only">(current)</span></a>
  </li>   
  &emsp;
  <li class="nav-item">
    <li class="{{ Request::is('contact') ? "nav-item active" : ""}}">  
    <a class="nav-link" href="/contact"><i class="fa fa-envelope"></i> Contact Us<span class="sr-only">(current)</span></a>
  </li> 
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <link rel="stylesheet" href="/css/materialize.min.css">
   <style>
       body{
           background: url("../../images.jpg"); 
       }
       .kek{
           margin-top: 200px;
       }
    </style>
</head>
<body>
    
  <nav>
    <div class="nav-wrapper teal darken-3">
      <a href="#" class="brand-logo ">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @yield('links')
      </ul>
    </div>
  </nav>
  
  <div class="container">
      @yield('body')
  </div>
  
  
  
  <footer class="page-footer teal darken-3 kek">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
            
</body>
</html>
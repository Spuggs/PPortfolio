<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>438</title>
        <link rel="stylesheet" href={{ url('css/app.css') }}>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

    <!--ADDED-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
   

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #000000;
}

.navbar {
  overflow: ;
  background-color: #000000;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: ;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #333;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
}

.dropdown-content a:hover {
  background-color: blue;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  <nav class="navbar navbar-expand-md fixed-top shadow-sm">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="/" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link link-dark px-2">About</a></li>
        <li class="nav-item"><a href="/skill" class="nav-link link-dark px-2">Skills</a></li>
        
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="/contact" class="nav-link link-dark px-2">Contact</a></li>
        
      </ul>
    </div>
  </nav>
  
<body class="text-white">
  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="images/black.png" class="d-block mx-lg-auto img-fluid"  width="450" height="200" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">A Developer who keeps on Developing</h1>
          <p class="lead"><ul>
            <li>Software development in Visual Basic C#, C++, and Java </li>
            <li>Web Site development in Laravel Javascript, HTML, and PHP</li>
            <li>Excellent problem-solving skills</li>
            <li>Good time management skills</li>
            <li>Excellent verbal and written communication skills</li>
            <li>Ability to prioritize and meet deadlines </li>
            <li>Excellent team player</li>
            <li>Trained Teacher of Information Technology</li>
          </ul> </p>
      </div>
    </div>
  </div>

  <div class="px-4 pt-5 my-5 text-center">
    <h1 class="display-4 fw-bold">My Eccomerce Website</h1>
      <p class="lead mb-4">Still Under Development....</p>
  
      <div class="card-group">
      <div class="col">
        <div class="card">
          <img src="images/es3.jpg" class="card-img-top" width="350" height="250">
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="images/es1.jpg" class="card-img-top" width="350" height="250">
        </div>
      </div>  
      <div class="col">
        <div class="card">
          <img src="images/es2.jpg" class="card-img-top" width="350" height="250">
        </div>
      </div>
  </div>
  
  <!--jhs-->
  <div class="b-example-divider"></div>

  <div class="px-4 pt-5 my-5 text-center">
    <h1 class="display-4 fw-bold">Jamaican Historical Society</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Worked on the Jamaican Historical Society Website with a Utech Sapna Team. Click the button below to access the Website</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <form action="https://jamaicanhistoricalsociety.org/" method="get" target="_blank">
          <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2">JHS</button>
       </form>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="images/jhs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="800" loading="lazy">
      </div>
    </div>
  </div>

<br>

  <footer>
 
    <div class="b-example-divider"></div>
    <div class="text-secondary px-4 py-5 text-center border-top">
      <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Ramoi Perrin</h1>
        <p class="fs-5 mb-4">B. ED in Business and Computer Studies.</p>
        <div class="col-lg-6 mx-auto">
          <p class="fs-5 mb-4">Never underestimate the difference you can make as an individual.</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
    
     

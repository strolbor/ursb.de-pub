<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>
    <title>Urs Webseite</title>

    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Eigene Einstellunfen -->
    <style>
    body {
      padding-bottom: 20px;
    }
    
    .navbar {
      margin-bottom: 20px;
    }
	.b-example-divider {
	  height: 3rem;
	  background-color: rgba(0, 0, 0, .1);
	  border: solid rgba(0, 0, 0, .15);
	  border-width: 1px 0;
	  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}

	.bi {
	  vertical-align: -.125em;
	  fill: currentColor;
	}
    </style>
    <!-- Favicon -->
    <link href="img/ico/favicon.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<!-- PHP Bereich -->
  <?php 
    $site = $_GET['site'];
   ?>
<!-- Ende -->
<body>
<!-- Navigationsleiste -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Navigation">
    <div class="container">
      <a class="navbar-brand" href="/">Urs Webseite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarU" aria-controls="navbarU" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarU">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">               
          
          <!-- Zweite -->
          <?php if ($site == 'about'):  ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/?site=about">&Uuml;ber mich</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/?site=about">&Uuml;ber mich</a>
                </li>
            <?php endif ?>
                
                
          <!-- Dropdown Menü -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownU" data-bs-toggle="dropdown" aria-expanded="false">Rechtliche Angaben</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownU">
              <li><a class="dropdown-item" href="?site=imprint">Impressum</a></li>
              <li><a class="dropdown-item" href="?site=policy">Datenschutz</a></li>
            </ul>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  
  <div class="container">
  <!-- Body mit dem eigentlichen Inhalt-->
  <?php 
    if (isset($site)){
       if ($site == 'about'){
           include 'sites/about.php';
       }
       else if ($site == 'imprint'){
           include 'sites/imprint.php';
       }
       else if ($site == 'policy'){
           include 'sites/policy.php';
       }

    }else{
        include 'sites/home.php';
    }
  
   ?>
   
 
  <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Urs-Benedict Braun</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="?site=imprint" class="nav-link px-2 text-muted">Impressum</a></li>
      <li class="nav-item"><a href="?site=policy" class="nav-link px-2 text-muted">Datenschutz</a></li>
    </ul>
  </footer>
</div>  

</body>
</html>
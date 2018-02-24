<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="bootstrap/bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="cols.css" type="text/css">
</head>
<body>

<div class="container">

<header>
   <h2>Project Map</h2>
</header>
  
<nav>
 
</nav>

<article>
   <form>
        <div class="form-group">
				<label for="crit">User Criteria</label>
				<br><br>
                  <select class="form-control" name="criteria" placeholder="Criteria" id="crit">
				  <option>Museums</option>
				  <option>Theatres</option>
				  <option>Malls</option>
				  <option>Beaches</option>
				  <option>Temples</option>
				  </select>
        </div>
              <div class="form-group">
				<label for="item">
					Selected Place
				</label>
					
				</input>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" name="pwd" placeholder="Password">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="contact" placeholder="Contact">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="city" placeholder="City">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="add" placeholder="Address">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
</article>

<footer>Copyright &copy; Project</footer>

</div>

</body>
</html>
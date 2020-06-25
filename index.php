<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Insurance Form</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light p-3">
      <span class="navbar-brand mb-0 h1 text-center">Navbar</span>
    </nav>

    <div class="container center mt-5 w-50">
      <div class="row align-items-center">
        <form action="second.php" method="post" class="col">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control form-control-lg" required="" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg" required="" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="date">Date of birth</label>
            <input type="date" id="date" name="date" class="form-control form-control-lg" required="" max="1994-12-31">
          </div>
          <div class="form-group">
            <div class="switch-field">
                <input type="radio" id="radio-one" name="gender" value="Male" checked/>
                <label for="radio-one">Male</label>
                <input type="radio" id="radio-two" name="gender" value="Female" />
                <label for="radio-two">Female</label>
            </div>
          </div>
          <div class="form-group">
            <div class="switch-field">
                <input type="radio" id="radio-three" name="smoke" value="Smoker"/>
                <label for="radio-three">Smoker</label>
                <input type="radio" id="radio-four" name="smoke" value="Non-Smoker" checked="" />
                <label for="radio-four">Non-Smoker</label>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary form-control">See Quotes</button>
        </form> 
      </div>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
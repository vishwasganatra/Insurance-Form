<?php
    $mysqli = new mysqli("localhost","root",'','insurance_form');
    if (isset($_POST['submit'])) 
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $date=$_POST['date'];
        $gen=$_POST['gender'];
        $smoke=$_POST['smoke'];
        $sql1="insert into user values(null, '$name', '$email', '$date', '$gen', '$smoke', null)";
        $result=mysqli_query($mysqli,$sql1);
        $result1=mysqli_query($mysqli,"select * from user order by id desc");
        $row1=mysqli_fetch_row($result1);
        session_start();
        $_SESSION['user']=$row1[0];

    $bday = new DateTime($date);
    $today = new Datetime(date('m.d.y'));
    $diff = $today->diff($bday);
    $age=$diff->y;
    $term=10;
    $sql="SELECT * FROM table_1 WHERE Coverage_Term=10 AND Gender='$gen' AND Smoker_Status='$smoke' AND Age=$age";
    $result=mysqli_query($mysqli,$sql);
?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>Insurance Form</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light p-3">
      <span class="navbar-brand mb-0 h1 text-center">Navbar</span>
    </nav>

    <div class="container-fluid mt-5 pl-5 pr-5">
        <div class="row w-100 center">
            <h2 class="h2 text-primary">Apply through PolicyMe in only 4 minutes!</h2>
        </div>
        <div class="row w-100 mt-3">
            <div class="col text-center">
                <p><span class="h3 mr-1" id="range">$25,000</span> Coverage Amount</p>
                <div class="">
                    <div class="range-slider">
                      <!-- <span id="rs-bullet" class="rs-label">0</span> -->
                      <input id="rs-range-line" class="rs-range" type="range" value="25000" min="25000" max="500000" step="25000">
                    </div>
                    <div class="box-minmax">
                      <span>$25000</span><span>$500000</span>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <p><span class="h3 mr-1" id="year">10 years</span>Policy Length</p>
                <div class="switch-field">
                    <input type="radio" id="radio-three" name="year" onclick="year1(this)" value="10" checked=""/>
                    <label for="radio-three" style="width: 50%;">10 Year</label>
                    <input type="radio" id="radio-four" name="year" onclick="year1(this)" value="20"/>
                    <label for="radio-four" style="width: 50%;" >20 Year</label>
                    <input type="radio" id="radio-five" name="year" onclick="year1(this)" value="65"/>
                    <label for="radio-five" style="width: 50%;" >To age 65</label>
                </div>
            </div>
        </div>
        <div id="result">
        <?php
            while($row=mysqli_fetch_row($result))
            {
        ?>
        
                        <!--div class="col">
                            <span class="badge badge-pill badge-primary pl-3 pr-3 pt-2 pb-2">Lowest price</span>
                            <span class="badge badge-pill badge-success pl-3 pr-3 pt-2 pb-2">express process</span>
                            <span class="badge badge-pill badge-danger pl-3 pr-3 pt-2 pb-2">expire</span>
                        </div-->
                  
                            <!--img src="data:image/png;base64,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" alt="" height="40vh"-->
                        
        <?php 
            }
        ?>        
    </div>
    </div>    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- custome -->
    <script src="./scripts/scripts.js"></script>
  </body>
</html>
<?php
    }
    else
    {
        header('location:index.php');
    }
?>
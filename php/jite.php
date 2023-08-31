
 <?php
  if (isset($_POST['submit'])) {
      $check_in = $_POST['check_in'];
      $check_out = $_POST['check_out'];

      echo "<p style='margin-top:25px; margin-left:100px; color:#232d57; font-size:30px' > Your arrival date is:<strong style='font-weight:700 color:#232d57; font-size:30px'> $check_in </strong> and your depature date is: <strong style='font-weight:700 color:#232d57; font-size:30px'> $check_out</strong> </p>";
    
  }
  ?> 

  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>


    <!-- <form action="jite.php" method="POST">
        <div class="row mt-4  mx-1 ps-4 ms-2  d-none d-lg-flex">
            <div class=" col-2 ps-2 px-1">
                <label class="mb-1  select-font" for="birthday">Check In</label>
                <input class="datepicker" type="date" id="check_in" name="check_in">
              
            </div>
            <div class="col-2  px-4">
                <p class="mb-1 ps-1 select-font">Night(s)</p>
                <select class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
                    <option selected>1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="4">6</option>
                    <option value="4">7</option>
                    <option value="4">8</option>
                    <option value="4">9</option>
                    <option value="4">10</option>

                </select>

            </div>
            <div class="col-2 ps-2 px-1">
                <label class="mb-1 ps-1 select-font" for="birthday">Check Out</label>
                <input class="datepicker" type="date" id="check_out" name="check_out">


            </div>
            <div class="col-2  px-4">
                <p class="mb-1 ps-1 select-font">Adult(s)</p>
                <select class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
                    <option selected>1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="4">6</option>
                    <option value="4">7</option>
                    <option value="4">8</option>
                    <option value="4">9</option>
                    <option value="4">10</option>
                </select>

            </div>
            <div class="col-2  px-4">
                <p class="mb-1 ps-1 select-font">children</p>
                <select class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
                    <option selected>1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="4">6</option>
                    <option value="4">7</option>
                    <option value="4">8</option>
                    <option value="4">9</option>
                    <option value="4">10</option>
                </select>

            </div>
            <div class="col-2 ps-2  ">
                <button name="submit" type="submit" class="text-white second-btn  btn mt-4 btn-primary">
                    Check
                </button>
            </div>
        </div>
    </form> -->


</body>

</html>     
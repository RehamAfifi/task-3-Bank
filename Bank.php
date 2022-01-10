<?php
if($_POST){
$table="<table class=\"table\" w-100><thead class=\"thead-primary\"><tr><th>interest rate</th><th> loan after interest</th><th>monthly</th></tr></thead>";
$name= $_POST['name'];
if($_POST['lyears']<3){
  $aloan=($_POST['lamount']*0.1)*($_POST['lyears']);
  $after=($aloan+$_POST['lamount']);
  $amonthly=$after/($_POST['lyears']*12);
  $table.="<tbody><tr><td>$name</td><td>$after</td><td>$amonthly</td></tr></tbody></table>";
}
elseif($_POST['lyears']>3){
$aloan=($_POST['lamount']*0.15)*($_POST['lyears']);
$after=($aloan+$_POST['lamount']);
$amonthly=$after/($_POST['lyears']*12);
$table.="<tbody><tr><td>$name</td><td>$after</td><td>$amonthly</td></tr></tbody></table>";
}


}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body >

      <div class="container">
          <div class="row offset-2">
              <div class="col-12 mt-5">
                  <h1 class="text-danger text-center"> Bank   </h1>
  
              </div>
              <div class="offset-3 col-6">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="name" >User Name</label>
                          <input type="text " name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="lamount">Loan amount</label>
                          <input type="number" name="lamount" id="lamount" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="lyears">loan Years</label>
                          <input type="number" name="lyears" id="lyears" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group ">
                            <button name="calc"  class="btn btn-danger rounded w-100">Calculate</button>
                        
                        </div>
                    </form>
                <?php    if(isset($table) ){
                  echo $table;
                }
                ?>
</div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
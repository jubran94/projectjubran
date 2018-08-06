<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/favicon.ico">

    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Css/dashboard.css" rel="stylesheet">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

  </head>


  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <div class="navbar-brand col-sm-3 col-md-2 mr-0" >Hello User</div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="archive"></span>
                  Inventory management<span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Add a product</h1>
                 <!-- <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
      <button type="button" id="unitsField" class="btn btn-primary" aria-haspopup="true" aria-expanded="false"> Submit </button>
                    </div>
                  </div> -->
                </div>

                <!-- <div>
                  <p> This page is to add a add the quantity of an existing products</p>
                </div> -->


        <form action="AddProduct.php" method="POST">
        <div class="row">

          <div class="col">
            <div class="form-group">
              <label for="idField">Product ID</label>
              <input name="idField" type="number" class="form-control" aria-describedby="emailHelp" placeholder="Enter product ID">
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="quantityField">Quantity</label>
              <input name="quantityField" type="number" class="form-control" placeholder="How many units?">
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="expirationDate">Expiration Date</label>
              <input type="date" class="form-control" name="expirationDate" placeholder="Expiration date">
            </div>
          </div>

         <div class="col">
  <select id="unitsField" name="unitsField" class="jubranstyle">
    <option value="0">select unit</option>
    <option value="Kilograms">Kilograms</option>
    <option value="Units">Units</option>
    <option value="Litters">Litters</option>
  </select>

</div>
</div>


<div class="row">
  <div class="col">
<select id="fromField" name="fromField" class="selectpicker jubranstyle2">
<option value="0">Select source</option>
<option value="Customer">Customer</option>
<option value="Supplier">Supplier</option>
<option value="Warehouse1">Warehouse1</option>
<option value="Warehouse2">Warehouse2</option>
</select>

</div>

<div class="col">
<select id="toField" name="toField" class="selectpicker jubranstyle2">
<option value="0">Select source</option>
<option value="Customer">Customer</option>
<option value="Supplier">Supplier</option>
<option value="Warehouse1">Warehouse1</option>
<option value="Warehouse2">Warehouse2</option>
</select>

</div>

<div class="col">
<input type="submit" name="submit" class="jubranstyle">
</div>
</div>
</form>
</main>

          <!-- <div class="btn-group">

    <button name="unitsField" id="unitsField" class="btn dropdown-toggle" data-toggle="dropdown">סיג יחידה</button>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu units" role="menu" aria-labelledby="dropdownMenu">
      <li><a class="dropdown-item" href="#">Kilograms</a><li>
      <li><a class="dropdown-item" href="#">Units</a><li>
      <li><a class="dropdown-item" href="#">Liters</a><li>
      <div class="dropdown-divider"></div>
      <li><a class="dropdown-item" href="#">Separated link</a><li>
    </ul>
</div> -->

<!--


        <div class="row">
          <div class="col">
            <br>
          <div class="btn-group">
    <button name="fromField" class="btn dropdown-toggle" data-toggle="dropdown">מקור</button>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu from" role="menu" aria-labelledby="dropdownMenu">
      <li><a class="dropdown-item" href="#">Customer</a><li>
      <li><a class="dropdown-item" href="#">Supplier</a><li>
        <div class="dropdown-divider"></div>
      <li><a class="dropdown-item" href="#">Warehouse1</a><li>
        <li><a class="dropdown-item" href="#">Warehouse2</a><li>
          <li><a class="dropdown-item" href="#">Warehouse3</a><li>
    </ul>
</div>
</div>

<div class="col">
  <br>
<div class="btn-group">
<button name="toField" class="btn dropdown-toggle" data-toggle="dropdown">מקור</button>
<span class="caret"></span>
</button>
<ul class="dropdown-menu to" role="menu" aria-labelledby="dropdownMenu">
<li><a class="dropdown-item" href="#">Customer</a><li>
<li><a class="dropdown-item" href="#">Supplier</a><li>
<div class="dropdown-divider"></div>
<li><a class="dropdown-item" href="#">Warehouse1</a><li>
<li><a class="dropdown-item" href="#">Warehouse2</a><li>
<li><a class="dropdown-item" href="#">Warehouse3</a><li>
</ul>
</div>
</div>

<div class="col">
  <br>
<div class="btn-group">
<button type="submit">Submit</button>
</div>
</div>
</form> -->
          <!--<div class="btn-group">
    <button class="btn dropdown-toggle" data-toggle="dropdown">סיג יחידה</button>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
      <li><a class="dropdown-item" href="#">Kilograms</a><li>
      <li><a class="dropdown-item" href="#">Units</a><li>
      <li><a class="dropdown-item" href="#">Liters</a><li>
      <div class="dropdown-divider"></div>
      <li><a class="dropdown-item" href="#">Separated link</a><li>
    </ul>
</div>-->
      <!--      <br>
            <div class="form-group">
              <button type="button" id="unitsField" onclick="myFunction()" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                From
              </button>
              <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Customer</a>
              <a class="dropdown-item" href="#">Supplier</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Warehouse1</a>
              <a class="dropdown-item" href="#">Warehouse2</a>
              <a class="dropdown-item" href="#">Warehouse3</a>
              </div>
            </div>
          </div>
          <div class="col">
            <br>
            <div class="form-group">
              <button type="button" id="unitsField" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                To
              </button>
              <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Customer</a>
              <a class="dropdown-item" href="#">Supplier</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Warehouse1</a>
              <a class="dropdown-item" href="#">Warehouse2</a>
              <a class="dropdown-item" href="#">Warehouse3</a>
              </div>
            </div>
          </div>

        </div> -->


                <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#responsiveTable').DataTable();

} );
    </script>

    <script>
    $(function(){


   $(".units li a").click(function(){

     $("#unitsField.btn:first-child").text($(this).text());
     $("#unitsField.btn:first-child").val($(this).text());

  });

  $(".from li a").click(function(){

    $("#fromField.btn:first-child").text($(this).text());
    $("#fromField.btn:first-child").val($(this).text());

 });

 $(".to li a").click(function(){

   $("#toField.btn:first-child").text($(this).text());
   $("#toField.btn:first-child").val($(this).text());

});


});
</script>



  </body>
  </html>

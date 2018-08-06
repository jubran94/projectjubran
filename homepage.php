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
    <link href="./css/dashboard.css" rel="stylesheet">


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

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add a product</h1>
           <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
<button type="button" id="unitsField" class="btn btn-primary" aria-haspopup="true" aria-expanded="false"> Submit </button>
              </div>
              <!-- <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button> -->
            </div>
          </div>

          <!-- <div>
            <p> This page is to add a add the quantity of an existing products</p>
          </div> -->


  <form name="newForm">
  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="idField">Product ID</label>
        <input type="number" class="form-control" id="idField" aria-describedby="emailHelp" placeholder="Enter product ID">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="quantityField">Quantity</label>
        <input type="number" class="form-control" id="quantityField" placeholder="How many units?">
      </div>
    </div>

    <div class="col">
      <div class="form-group">
        <label for="quantityField">Expiration Date</label>
        <input type="date" class="form-control" id="expirationDate" placeholder="Expiration date">
      </div>
    </div>

    <div class="col">
      <label for="unitField">יחידת מדידה</label>
      <div class="form-group">
        <!-- <button type="button" id="unitsField" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          סוג יחידה
        </button>
        <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Kilograms</a>
    <a class="dropdown-item" href="#">Units</a>
    <a class="dropdown-item" href="#">Liters</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div> -->
  <select required>
  <option value="">None</option>
  <option value="volvo">Units</option>
  <option value="saab">Kilo</option>
  <option value="mercedes">Liters</option>
</select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <br>
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

  </div>


          <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
        </main>
      </div>
    </div>

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
});
</script>
  </body>
</html>

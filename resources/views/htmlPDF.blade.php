<!DOCTYPE html>
<html>

<head>
  <title>Laravel 5.8 HTML to PDF</title>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>


  <div class="container mt-5">

    <div class="row">

      <div class="border border-dark col-md-4">
        <div class="pt-2 pb-3">
          <h4><b>Remit To:</b></h4>
        </div>
        <div class="">

          <h4 class="">Avalon Retail Consulting, Inc.</h4>
          <h4 class="">625 Short Street</h4>
          <h4 class="">New Orleans, LA 70118</h4>

        </div>
      </div>

      <div class="col-md-5">

      </div>
      <div class="border border-dark col-md-3 h-50">
        <div class="pt-2 pb-3">
          <h4><b>Date: Invoice No:</b></h4>
        </div>
        <div class="">

          <h4 class="">DATE INV #</h4>



        </div>
      </div>
    </div>
    <br>
    <br>

    <div class="row">
      <div class="border border-dark col-md-3">
        <div class="pt-2 pb-3">
          <h4><b>Bill To:</b></h4>
        </div>
        <div class="">

          <h4 class="">NAME</h4>
          <h4 class="">ADDRESS</h4>
          <h4 class="">CITY/STATE/ZIP</h4>

        </div>
      </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="row">
      <div class="border border-dark col-md-9">
        <div class="pt-2 pb-3">
          <h4><b>Item</b></h4>
        </div>
        <div class="">

          <h4 class="">Desc</h4>


        </div>
      </div>

      <div class="border border-dark col-md-3">
        <div class="pt-2 pb-3">
          <h4> <b>Amount</b></h4>
        </div>
        <div class="">

          <h4 class="">$$$$</h4>

        </div>
      </div>

    </div>

  </div>




  <!-- <form method="GET" action="/generatePDF58" enctype="multipart/form-data">
      <div class="form-group">

        <div class="control">

          <button type="submit" class="btn btn-primary">Generate PDF File</button>

        </div>

      </div>

    </form> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</body>
<footer>
  <div class="container justify-right">
    <div class="bottom-footer">
      <div class="row">
        <div class="col-md-9"></div>

        <div class="border border-dark col-md-3">
          <div class="pt-2 pb-3">
            <h4> <b>Payment due in month date of invoice</b>
          </div>
          <div class="">

            <h4 class="">Total: $$$$</h4>

          </div>
        </div>
      </div>
    </div>
  </div>

</footer>

</html>
<?php include 'assets/templates/header.php' ?>


<head>
  <title>Sign up - Progressus Bootstrap template</title>
</head>

<!-- container -->
<div class="container">

  <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li class="active">Registration</li>
  </ol>

  <div class="row">

    <!-- Article main content -->
    <article class="col-xs-12 maincontent">
      <header class="page-header">
        <h1 class="page-title">Registration</h1>
      </header>

      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 class="thin text-center">Register a new account</h3>
            <p class="text-center text-muted"><a href="signin.php">Log in</a></p>
            <hr>

            <form>
              <div class="top-margin">
                <label>First Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="top-margin">
                <label>Last Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="top-margin">
                <label>Email Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control">
              </div>

              <div class="row top-margin">
                <div class="col-sm-6">
                  <label>Password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control">
                </div>
                <div class="col-sm-6">
                  <label>Confirm Password <span class="text-danger">*</span></label>
                  <input type="text" class="form-control">
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-lg-8">
                  <label class="checkbox">
                    <input type="checkbox">
                    I've read the <a href="page_terms.html">Terms and Conditions</a>
                  </label>
                </div>
                <div class="col-lg-4 text-right">
                  <button class="btn btn-action" type="submit">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>

    </article>
    <!-- /Article -->

  </div>
</div> <!-- /container -->
<?php include 'assets/templates/footer.php' ?>
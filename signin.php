<?php include 'assets/templates/header.php' ?>

<head>
	<title>Sign in - Progressus Bootstrap template</title>
</head>

<!-- container -->
<div class="container">

	<ol class="breadcrumb">
		<li><a href="index.html">Home</a></li>
		<li class="active">User access</li>
	</ol>

	<div class="row">

		<!-- Article main content -->
		<article class="col-xs-12 maincontent">
			<header class="page-header">
				<h1 class="page-title">Sign in</h1>
			</header>

			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="thin text-center">Sign in to your account</h3>
						<p class="text-center text-muted"><a href="signup.php">Register</a> </p>
						<hr>

						<form>
							<div class="top-margin">
								<label>Username/Email <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="top-margin">
								<label>Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
							</div>

							<hr>

							<div class="row">
								<div class="col-lg-8">
									<b><a href="">Forgot password?</a></b>
								</div>
								<div class="col-lg-4 text-right">
									<button class="btn btn-action" type="submit">Sign in</button>
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
</body>

</html>
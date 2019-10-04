<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

   <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-12 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
    					<div class="tab-pane active" id="login">
                <center>
               		    <img width="30%" src="images/logo2.png"
                    alt=""></center>
               			<form class="form-signin" action="member_login_proses.php" method="POST">
               				<input type="text" name="nama" class="form-control" placeholder="Username" required autofocus>
               				<input type="password" name="password" class="form-control" placeholder="Password" required>
               				<input type="submit" class="btn btn-lg btn-default btn-block" value="Login" />
               			</form>
               			<div id="tabs" data-tabs="tabs">
              				</div>
                      <p style="position: right"><a href="admin/index.php">login as administrator</a></p>
						</div>
					</div>
            </div>
        </div>
    </div>
</div>

  </body>

</html>

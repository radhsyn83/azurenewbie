<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Azure App Service - Sample Static HTML Site</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">
          <h1>Azure App Service - Sample Static HTML Site</h1>
          <hr/>
      </div>
    </div>

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
        <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>This is a simpleRegister Form made using Boostrap.</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="jumbotron">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name*" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>First Name</th> 
                                        <th>Last Name</th> 
                                        <th>Date Add</th> 
                                    </tr> 
                                </thead> 
                            </table>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

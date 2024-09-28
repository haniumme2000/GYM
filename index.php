<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <style>
    body {
      background: url('images/4.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .container {
      margin-top: 60px;
      margin-bottom: 60px;
      color: #34495E;
    }
    .card {
      border: none;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }
    .card-img-top {
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px);
    }
    .form-group {
      margin-bottom: 0;
    }
    #inputbtn:hover {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <img src="images/cardback.jpg" class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Admin Login</h5>
            <form class="form-group" method="POST" action="admin-panel.php">
              <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Username:</label>
                <div class="col-sm-8">
                  <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Password:</label>
                <div class="col-sm-8">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>
              </div>
              <div class="form-group text-center">
                <input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>

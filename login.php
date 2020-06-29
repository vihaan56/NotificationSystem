<!DOCTYPE html>
<html>

<head>
    <title>Webslesson Tutorial | Facebook Style Header Notification using PHP Ajax Bootstrap</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br /><br />
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">vihaan</a>
                </div>
               
            </div>
        </nav>
        <br />
        <br />
        <form method="post" action="login_auth.php" id="login_form">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" id="password" class="form-control">

            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>

    </div>
   
</body>

</html>



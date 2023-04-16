<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class ="container">
        <div class="login-wrapper">
            <a href="login.php">Back to login form</a>
                <?php if ($_POST['nama'] == '' && $_POST['email'] == ''): ?>
                    <div class="alert alert-danger" role="alert" style="margin-top: 1rem">please enter your email and name</div>    
                <?php elseif($_POST['nama'] == ''): ?>
                    <div class="alert alert-danger" role="alert" style="margin-top: 1rem">please enter your name</div>
                <?php elseif($_POST['email'] == ''): ?>
                    <div class="alert alert-danger" role="alert" style="margin-top: 1rem">please enter your email</div>
                <?php endif; ?>
            <h1 class="text-center">Result</h1>  
            <div class="form-wrapper">
                <form class="form-content" action="proses.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="name" class="form-control" name="nama" value="<?php  echo $_POST['nama'];?>"> <br>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control input-email" name="email" value="<?php echo $_POST['email'] ?>"> <br>
                    </div>
                    <h5>You login at </h5>
                    <b>Day : </b><?php date_default_timezone_set('Asia/Jakarta'); echo date("l");?>
                    <p><b>Date : </b><?php date_default_timezone_set('Asia/Jakarta'); echo date("d-m-Y");?></p>
                    <p style="margin-top: -15px"><b>Time : </b><?php date_default_timezone_set('Asia/Jakarta'); echo date("H:i:s A");?></p>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
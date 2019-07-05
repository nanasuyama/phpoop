<?php

    require_once "classes/User.php";

    //create an instance
    $user = new User;
    $id = $_GET['user_id'];
    $get_user = $user->selectOne($id);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container"><br>
        <form action="user_action.php?action=update" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'];?>">
            <div class="form-group">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="" class="form-control" value="<?php echo $get_user['username'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="" class="form-control" value="<?php echo $get_user['email'];?>">
            </div>
            <div class="form-group">
                <label for="firstname">Firstname</label><br>
                <input type="text" name="firstname" id="" class="form-control" value="<?php echo $get_user['firstname'];?>">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label><br>
                <input type="text" name="lastname" id="" class="form-control" value="<?php echo $get_user['lastname'];?>">
            </div>
           
            <input type="submit" value="Save" name="add" class="btn btn-primary float-right">

        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $connection = mysqli_connect('localhost', 'root', '', 'tugaspbo');
  if($connection){
    echo "sukses";
  } else{
   die("Database not know"); 
  }

  $query = "INSERT INTO users(username,password) ";
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);
  if(!$result){
    die('Query is not run');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/css.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info ">
          <a class="navbar-brand text-light bg-info" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn badge-pill btn-outline-dark btn my-2 my-sm-0" type="submit">Search</button>
          </form>

          <div class="collapse navbar-collapse" id="navbar-list-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active ml-8">
              <a class="nav-link ml-10" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ml-8">
              <a class="nav-link ml-10" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ml-8">
              <a class="nav-link ml-10" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
            <ul class="navbar-nav">
                <li class="nav-item dropdown ml-auto mr-4">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src = "image/daily.png" class="mr-0 mt-0 rounded-circle" style="width:45px;">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <a class="dropdown-item" href="#">Log Out <img src="image/icon logout.svg" style="width:20px;"></a>
                  </div>
              </li>
            </ul>
          </div>
        </nav>
    </header>

      <div class = "container-fluid">
        <div class = "row">
          <div class="col-sm-3 mt-3 section">
              <img src = "image/daily.png" class = "image text-center" alt = "" style = "max-width : 200px">
          </div>
          <div class="col-sm-6 mt-3 rounded-lg content">
              <div class = "article">
                <div class = "thinks rounded-lg">
                  <h4>Apa yang anda pikirkan</h3>
                  <textarea id = "main"></textarea>
                    <div class = "custom-file">
                      <label for = "file-input">
                        <img src = "image/Icon/camera.png" class = "icon">
                      </label>
                      <input type = "file" id = "file-input">
                    <button type="button" class="btn btn-primary posting ml-4 float-md-right">Posting</button>
                    </div>
                </div>
              </div>
              <div class = "article">
                <div class = "thinks rounded-lg">
                  <div class="media">
                    <img class="mr-3 img-thumbnail img-fluid" src="image/daily.png" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </div>
                </div>
              </div>
              <div class = "article">
                <div class = "thinks rounded-lg">
                  <div class="media">
                    <img class="mr-3 img-thumbnail img-fluid" src="image/daily.png" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
</body>
</html>
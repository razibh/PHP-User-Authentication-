<?php
session_start();
require 'db.php';
if(isset($_POST['signup'])){
$fristname=$_POST['fristnaem'];
$lastname =$_POST['lastname'];
$emai=$_POST['email'];
$password=$_POST['pass'];
$gander=$_POST['gender'];
$divison=$_POST['divison'];
$img=$_POST['img'];
$data= "INSERT INTO signup(id,fristname,lastname,email,password,gander,division,img) VALUES('','$fristname','$lastname','$emai','$password','$gander','$divison','$img')"; 
$value =mysqli_query($sql,$data);
if($value) {
    echo '<script>alert("Account has been Registered Successfully")</script>';
}

}
$sql ->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
h2{
    margin-top: 3rem;
    text-align: center;
    margin-bottom: 1.5rem;
}
.signup{
    margin: auto;
    padding: 10px;
    width: 400px;
    height: 500px;
    background-color: gainsboro;
    border-radius: 12px;
}
    </style>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Task2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Freture</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Gallary</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 6.615 6.615" id="profile"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width=".265" d="M3.308 1.862c.36 0 .65.294.65.66 0 .364-.29.658-.65.658a.653.653 0 0 1-.65-.659c0-.365.29-.66.65-.66z" paint-order="markers stroke fill"></path><path fill="#81bcf3" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" d="M29.766.672c-1.44 0-2.602 1.178-2.602 2.635 0 1.457 1.162 2.636 2.602 2.636s2.601-1.18 2.601-2.636c0-1.457-1.162-2.635-2.601-2.635z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="markers stroke fill" transform="translate(-26.458)"></path><path fill="#ecebf1" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" d="M29.766 1.73a.788.788 0 0 0-.784.791c0 .436.351.791.784.791a.789.789 0 0 0 .783-.79.788.788 0 0 0-.783-.791zm.004 1.984c-.331 0-.629.09-.89.226a2.79 2.79 0 0 0-.667.497c-.271.269-.38.433-.455.553.477.58 1.203.953 2.008.953.805 0 1.548-.366 2.004-.954a2.709 2.709 0 0 0-.448-.552 2.766 2.766 0 0 0-.664-.497 1.91 1.91 0 0 0-.888-.226Z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="markers stroke fill" transform="translate(-26.458)"></path><path fill="#6ea9e3" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" d="M112.5 2.54c-5.442 0-9.832 4.451-9.832 9.958a9.98 9.98 0 0 0 4.004 8.018 10.002 10.002 0 0 1-2.004-6.018c0-5.507 4.39-9.959 9.832-9.959a9.7 9.7 0 0 1 5.83 1.947c-1.793-2.395-4.624-3.947-7.83-3.947Z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="markers stroke fill" transform="translate(-26.458) scale(.26458)"></path><path fill="#d9d7e4" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" d="M112.5 6.541c-1.633 0-2.96 1.343-2.96 2.988 0 1.356.906 2.494 2.138 2.858a2.976 2.976 0 0 1-.139-.858c0-1.645 1.328-2.988 2.961-2.988.287 0 .56.055.822.133-.367-1.228-1.486-2.133-2.822-2.133Zm.016 7.496c-1.25 0-2.376.341-3.362.854-.986.512-1.832 1.196-2.521 1.879-1.025 1.015-1.438 1.637-1.719 2.091a9.932 9.932 0 0 0 2.08 1.883c.281-.445.685-1.03 1.639-1.974.69-.683 1.535-1.367 2.521-1.88.986-.512 2.112-.853 3.362-.853s2.374.341 3.357.854c.56.292 1.07.642 1.535 1.013-.252-.316-.57-.68-1.025-1.134-.686-.683-1.527-1.367-2.51-1.88a8.023 8.023 0 0 0-.957-.413c-.137.02-.273.043-.416.043-.57 0-1.097-.17-1.549-.454-.145-.009-.286-.029-.435-.029z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" paint-order="markers stroke fill" transform="translate(-26.458) scale(.26458)"></path><path style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" d="M112.5 2.54c-5.442 0-9.832 4.451-9.832 9.958 0 5.507 4.39 9.965 9.832 9.965 5.442 0 9.832-4.458 9.832-9.965s-4.39-9.959-9.832-9.959zm0 .995c4.898 0 8.828 3.985 8.828 8.963a9.05 9.05 0 0 1-1.537 5.074c-.36-.636-2.482-4.033-7.275-4.033-4.796 0-6.942 3.402-7.305 4.035a9.05 9.05 0 0 1-1.54-5.076c0-4.978 3.931-8.963 8.829-8.963zm0 3.006c-1.633 0-2.96 1.343-2.96 2.988s1.327 2.99 2.96 2.99 2.96-1.345 2.96-2.99c0-1.645-1.327-2.988-2.96-2.988zm0 .996c1.09 0 1.957.877 1.957 1.992 0 1.116-.868 1.994-1.957 1.994-1.09 0-1.957-.878-1.957-1.994 0-1.115.868-1.992 1.957-1.992zm.016 6.998c4.733 0 6.525 3.72 6.525 3.72a.502.502 0 0 0 .11.147 8.736 8.736 0 0 1-6.651 3.065 8.736 8.736 0 0 1-6.652-3.067.5.5 0 0 0 .105-.138s1.83-3.727 6.563-3.727z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" transform="translate(-26.458) scale(.26458)"></path></svg>
    </div>
  </div>
</nav>
<div class="signup">
    <h2>SignUp From</h2>
    <form action="" method="post">
    <label for="fristname">Frist Name</label>
    <input type="text" name="fristnaem" require><br><br>
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" require><br><br>
    <label for="email">Email</label>
    <input type="email" name="email" require><br><br>
    <label for="pass">Password</label>
    <input type="password" name="pass" require><br><br>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="female"> Coustome <br><br>
<label for="divison">Division</label>
<select name="divison" > 
<option>Select Division</option>
                        <option >Dhaka</option>
                        <option >Chittagong</option>
                        <option >khulna</option>
                        <option >Barishal</option>
                        <option>Rangpur</option>
                        <option >Rajshahi</option>
</select><br><br>
<label for="img">Image</label>
<input type="file" name="img"><br><br>
    <button name="signup">SignUp</button>
    </form>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php 
include_once '../dbcon.php';
session_start();

if(isset($_SESSION["username"])){
  header("location: index.php");
}


if(isset($_POST["submit"])){
$email = $_POST["email"];
$password = $_POST["password"];

    $query = "SELECT * FROM login WHERE email='$email'";
    $data=mysqli_query($connectDB,$query) or die("error");
    if(mysqli_num_rows($data)>0){
      while($row=mysqli_fetch_assoc($data)){
        if($email === $row['email'] && $password === $row['password']){
              session_start();
              $_SESSION["emails"] = $row['email'];
              $_SESSION["roles"] = $row['role'];


                header("location: index.php");

            }else{
          echo "<div>Username or Password is incorrect</div>";
        }
        }
    }else{
      echo "<div>Username or Password is incorrect</div>";
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <style>
      .container {
        width: 300px;
        height: 150px;
        padding: 10px;
        border: 1px solid black;
      }

      /* Style all input fields */
      input {
        width: 55%;
        padding: 6px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
      }
    </style>
  </head>

  <body>
    <p style="text-align: center; width: 300px; height: 5px; font-size: 20px">
      <strong> Login</strong>
    </p>

    <div class="container">
      <form action="login.php" method="POST">
        <label for="usrname">Username: &nbsp;</label>
        <input type="text" id="usrname" name="email" required /><br />

        <label for="psw">Password: &nbsp;</label>
        <input type="password" id="psw" name="password" required />
        <br /><br />
        <button type="submit" name="submit">Login</button>
      </form>
    </div>
  </body>
</html>

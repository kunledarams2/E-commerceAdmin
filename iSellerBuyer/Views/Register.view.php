
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div class="mainContainer">
        <form action="Register.php" method="Post">
          <div class="imageContainer">

          </div>
          <div>
              First Name: <input type="text" name="fName" require > <br>
              Last Name: <input type="text" name="lName" require ><br>
              Employee Id: <input type="text" name="eId" require ><br>
              Username: <input type="text" name="uName" require ><br>
              Password: <input type="text" name="password" require ><br>
              Confirmed Password: <input type="text" name="confirmedPassword" require >

          </div>
          <div class="but">
              <input type="submit" value="Submit" btn>
          </div>
        </form>
        

    </div>
</body>
</html>
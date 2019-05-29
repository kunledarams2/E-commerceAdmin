

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../logStyle.css">
    <title>Login</title>
</head>
<body>
    <div class="body-container">
        <div class="module">
            <h1>iSellerBuyer</h1>
            <form action="Login.php" method="post" >
                <div class="form_content"> 
                    <div>
                        <label for="" >Username</label>
                        <input type="text" name="name">

                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password">
                    </div>
              
                </div> 
                <input type="submit" value="LOG IN" class ="btn btn-primary btn-block"> <br>
                <div class="regLinklabel">
                <label for=""> <a href="Register.php">New User? Create Account</a></label>
                </div>
            
                
            </form>
            
        </div>
    
    </form>
    </div>
</body>
</html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\styleregistration.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fe8d7ff981.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Registration Form</h2>
        </div>
        <form class="form" id="form">
            <div class="form-control">
                <label for="username">Name</label>
                <input type="text" placeholder="Input your name" id="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="address">Address</label>
                <input id="address""
              type=" text" placeholder="Input your address" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="email">E-mail Address</label>
                <input id="mail" type="email" placeholder="Input your E-mail address" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="pass">Password</label>
                <input id="pass" type="password" placeholder="Input your password" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="phone">Phone Number</label>
                <input id="phone" type="number" placeholder="Input your phone number" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="course">Select your course</label><br>
                <select id="options">
                    <option></option>
                    <option>BTECH</option>
                    <option>BBA</option>
                    <option>BCA</option>
                    <option>B.COM</option>
                    <option>GEEKFORGEEKS</option>
                </select>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
            </div>

            <div class="form-control">
                <label for="zipcode">Zip Code</label>
                <input id="zipcode" type="text" placeholder="Input your zip code" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <input type="reset" class="btn" value="Reset" />
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="js\prak2app.js"></script>
</body>

</html>

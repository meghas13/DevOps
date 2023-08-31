<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3fe7ec1 (new changes)

<!DOCTYPE html>


<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="../css/style.css">
  
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
  <title>Login</title>
</head>
<body>
      
  <nav class="sidebar close">
      <header>
          <div class="image-text">
              <span class="image">
                  <!--<img src="logo.png" alt="">-->
              </span>

              <div class="text logo-text">
                  <span class="name">More</span>
                  <span class="profession">Menu</span>
              </div>
          </div>

          <i class='bx bx-chevron-right toggle'></i>
      </header>

      <div class="menu-bar">
          <div class="menu">

              <li class="search-box">
                  <i class='bx bx-search icon'></i>
                  <input type="text" placeholder="Search...">
              </li>

              <ul class="menu-links">
                  <li class="nav-link">
                      <a href="Index.php">
                          <i class='bx bx-home-alt icon' ></i>
                          <span class="tooltiptext">Home</span>
                      </a>
                  </li>

                  <li class="nav-link">
                  
                      <a href="upload_recipe.php">
                          <i class='bx bx-add-to-queue icon'></i>
                          <span class="tooltiptext">Add recipe</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="continental.php">
                          <i class='bx bx-bowl-hot icon'></i>
                          <span class="tooltiptext">Continental</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="indian.php">
                          <i class='bx bx-bowl-rice icon' ></i>
                          <span class="tooltiptext">Indian</span>
                      </a>
                  </li>

                
              </ul>
          </div>

          <div class="bottom-content">
              <li class="">
                  <a href="Logout.php">
                      <i class='bx bx-log-out icon' ></i>
                      <span class="tooltiptext">LogOut</span>
                  </a>
              </li>

              <li class="mode">
                  <div class="sun-moon">
                      <i class='bx bx-moon icon moon'></i>
                      <i class='bx bx-sun icon sun'></i>
                  </div>
                  <span class="mode-text text">Dark mode</span>

                  <div class="toggle-switch">
                      <span class="switch"></span>
                  </div>
              </li>
              
          </div>
      </div>
  </nav>

  <div class="container" id="container">
  
      <div class="form-container sign-up-container">
      </div>
      <div class="form-container sign-in-container">
      <form action="login_process.php" method="POST">
      <h1> LOGIN </h1>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>

      </div>
      
  </div>
  
  <script>

const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
  sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
  sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
  body.classList.toggle("dark");
  
  if(body.classList.contains("dark")){
      modeText.innerText = "Light mode";
  }else{
      modeText.innerText = "Dark mode";
      
  }
});
  </script>
>>>>>>> 692c9d0 (intial commit)
=======
>>>>>>> 3fe7ec1 (new changes)
</html>
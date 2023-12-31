<?php
// Establish database connection
$servername = "mysql_db";
$username = "root";
$password = "root";
$dbname = "recipebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
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
    
    <title>Indian</title>
</head>
<body>
    
    <nav class="sidebar close">
        <header>
            <div class="image_id-text">
                <span class="image_id">
                    <!--<img src="../logo.png" alt="">-->
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
                    <input type="text" placeholder="Search..."  id="searchbar" onkeyup="search_recipe">
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

=======

<?php
// Establish database connection
$servername = "mysql_db";
$username = "root";
$password = "root";
$dbname = "recipebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
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
    
    <title>Indian</title>
</head>
<body>
    
    <nav class="sidebar close">
        <header>
            <div class="image_id-text">
                <span class="image_id">
                    <!--<img src="../logo.png" alt="">-->
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
                    <input type="text" placeholder="Search..."  id="searchbar" onkeyup="search_recipe">
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

    <section class="home" id="myUL">
        <div class="text"><b>Indian Recipes</b></div>
        <div class="text">Punjabi</div>
        <div class="totalbox">
            <?php
            // Retrieve the recipes from the database for the Punjabi category
            $category = "Punjabi";
            $sql = "SELECT * FROM recipes WHERE category = '$category'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="multibox"><a href="recipe.php?id=' . $row['recipe_id'] . '"><img src="../' . $row['image_id'] . '">' . $row['title'] . '</a></div>';

                }
            }
            ?>
            <div class="totalbox" id="punjabiBox"><div class="multibox"><a href="cbcc.html"><img src="../img/cbt.jpg">Chole Bhature</a></div><div class="multibox"><img src="../img/lassi.jpg">Lassi</div><div class="multibox"><img src="../img/akc.jpg">Amritsati Naan</div><div class="multibox"><img src="../img/dmk.jpg">Dal Makhani</div><div class="multibox"><img src="../img/cbc.jpg">Chicken Butter Masala</div><div class="multibox"><img src="../img/ptikka.jpg">Paneer Tikka</div></div>
        <br>
        </div>
        <br>
        <div class="text">Marathi</div>
        <div class="totalbox">
            <?php
            // Retrieve the recipes from the database for the Punjabi category
            $category = "Marathi";
            $sql = "SELECT * FROM recipes WHERE category = '$category'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="multibox"><a href="recipe.php?id=' . $row['recipe_id'] . '"><img src="../' . $row['image_id'] . '">' . $row['title'] . '</a></div>';
                }
            }
            ?>
            <div class="totalbox" id="marathiBox"><div class="multibox"><img src="../img/pbj.jpg">Pav Bhaji</div><div class="multibox"><img src="../img/pp.jpg">Puran Poli</div><div class="multibox"><img src="../img/nkvd.jpg">Bhakarwadi</div><div class="multibox"><img src="../img/msps.jpg">Misal Pav</div><div class="multibox"><img src="../img/vadapav.jpg">Vada Pav</div><div class="multibox"><img src="../img/modak.jpg">Modak</div></div>
        <br>
        </div>
        
        <br>
        <div class="text">South Indian</div>
        <div class="totalbox">
            <?php
            // Retrieve the recipes from the database for the Punjabi category
            $category = "South-Indian";
            $sql = "SELECT * FROM recipes WHERE category = '$category'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="multibox"><a href="recipe.php?id=' . $row['recipe_id'] . '"><img src="../' . $row['image_id'] . '">' . $row['title'] . '</a></div>';
                }
            }
            ?>
            <div class="totalbox" id="southindianBox"><div class="multibox"><img src="../img/biryani.jpg">Biryani</div><div class="multibox"><img src="../img/idli.jpg">Idli</div><div class="multibox"><img src="../img/dosa.jpg">Dosa</div><div class="multibox"><img src="../img/vada.jpg">Vada</div><div class="multibox"><img src="../img/upm.jpg">Utapam</div><div class="multibox"><img src="../img/cdrice.jpg">Curd Rice</div><div class="multibox"><img src="../img/rasam.jpg">Rasam</div></div>
        <br>
        </div>
        <br>
        <div class="text">Nepali</div>
        <div class="totalbox">
            <?php
            // Retrieve the recipes from the database for the Punjabi category
            $category = "Nepali";
            $sql = "SELECT * FROM recipes WHERE category = '$category'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="multibox"><a href="recipe.php?id=' . $row['recipe_id'] . '"><img src="../' . $row['image_id'] . '">' . $row['title'] . '</a></div>';
                }
            }
            ?>
            <div class="totalbox" id="nepaliBox"><div class="multibox"><img src="../img/momo.jpg">Momo</div><div class="multibox"><img src="../img/thukpa.jpg">Thukpa</div><div class="multibox"><img src="../img/thakali.jpg">Thakali</div><div class="multibox"><img src="../img/chowmein.jpg">Chowmein</div><div class="multibox"><img src="../img/sel.jpg">Selroti</div><div class="multibox"><img src="../img/yomari.jpg">Yomari</div><div class="multibox"><img src="../img/chatpate.jpg">Chatpate</div></div>
        <br>
        </div>
        <br>
        <div class="text">Gujarati</div>
        <div class="totalbox">
            <?php
            // Retrieve the recipes from the database for the Punjabi category
            $category = "Gujarati";
            $sql = "SELECT * FROM recipes WHERE category = '$category'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="multibox"><a href="recipe.php?id=' . $row['recipe_id'] . '"><img src="../' . $row['image_id'] . '">' . $row['title'] . '</a></div>';
                }
            }
            ?>
            <div class="totalbox" id="gujratiBox"><div class="multibox"><img src="../img/dkl.jpg">Dhokala</div><div class="multibox"><img src="../img/thepla.jpg">Thepla</div><div class="multibox"><img src="../img/khandvi.jpg">Khandvi</div><div class="multibox"><img src="../img/fafda.jpg">Fafda</div></div>
    
        </div>
        <br>
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


</body>
</html>


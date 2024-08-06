<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav bar</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <header>
        <div class="logo">
            <span>🏠</span>
        </div>
        <div class="lg-menu hide-menu" id="lg-menu">
            <div>
                <a href="#">Home</a>
            </div>
            <div>
                <a href="about.php">About</a>
            </div>
            <div>
                <a href="foods.php">Dishes</a>
            </div>
            <div>
                <a href="#">Order</a>
            </div>
            <div>
                <a href="#">contact</a>
            </div>
        </div>
        <div class="sm-menu hide-menu" id="sm-menu">
            <div>
                <button id="close-menu-btn" onclick="closeMenu()">
                    close
                </button>
            </div>
            <div>
                <a href="#">Home</a>
            </div>
            <div>
                <a href="about.php">About</a>
            </div>
            <div>
                <a href="foods.php">Dishes</a>
            </div>
            <div>
                <a href="#">Order</a>
            </div>
            <div>
                <a href="#">contact</a>
            </div>
        </div>
        <div id="menu-container">
            <div>
                <button id="menu-btn" class="" onclick="openMenu()">
                    MENU
                </button>
            </div>
        </div>
    </header>
    <script>
        console.log("File is connected");

const harmbMenu=document.getElementById("menu-btn");
const closeMenuBtn=document.getElementById("sm-menu");

//function to open harmburger menu
function openMenu(){
    harmbMenu.classList.add("hide-menu")
    closeMenuBtn.classList.remove("hide-menu")
    console.log("button opened!");
}

//function to close harmburger menu
function closeMenu(){
    harmbMenu.classList.remove("hide-menu")
    closeMenuBtn.classList.add("hide-menu")
    console.log("button closed!");
}
    </script>
</body>
</html>
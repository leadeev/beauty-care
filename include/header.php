<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu burger seulement en HTML et CSS</title>
</head>

<body>

    <nav>
        <label for="toggle">☰</label>
        <input type="checkbox" id="toggle">
        <div class="main_pages">
            <a href="index.php"><IMG class="logo" src="view/images/llogo.png"></IMG></a>
            <!-- <a href="login.php">Connexion</a> -->
            <a href="cnx-user/index.php">Connexion</a>
            <a href="about.php">A propos</a>
            <a href="services.php">Nos services</a>
            <a href="prestations.php">Nos prestations</a>
            <a href="contact.php">Contact</a>
        </div>
    </nav>
</body>

</html>


<style>
.logo {
    width: 10em;
    height: 7em;
    border-radius: 50%;
}

nav {
    /* margin: 100px auto; */
    width: 100%;
    height: 100px;
    background: #e3f2fd;
}

nav .main_pages {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav .main_pages a {
    width: 20%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100px;
    text-decoration: none;
    font-family: Arial, sans-serif;
    color: #223068;
}

nav a:hover {
    background: #edcdc0
}


label {
    display: none;
}

label,
#toggle {
    display: none;
}

@media all and (max-width: 991px) {
    nav {
        height: 60px;
    }

    nav .main_pages {
        display: none;
        flex-direction: column;
        background: #e3f2fd;
        height: 220px;
    }

    nav .main_pages a {
        width: 50%;
    }

    label {
        width: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        font-size: 40px;
        color: white;
        cursor: pointer;
    }

    #toggle:checked+.main_pages {
        display: flex;
    }
}
</style>
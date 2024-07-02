<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttertype</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
        body {
           background-color: black;
        }
       .navbar-own {
    position: relative;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    background-color: rgba(48, 42, 42, 0.356);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 100px rgba(40, 37, 37, 0.494);
    }
        .navbar-padding-logo {
            position: relative;
            left: -250px;
        }
        .rainbow-text {
        text-align: center;
        font-size: 24px;
        font-family: monospace;
        letter-spacing: 4px;
        background: linear-gradient(to right, #6666ff, #0099ff, #00ff00, #ff3399, #6666ff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: rainbow-animation 6s ease-in-out infinite;
        background-size: 400% 100%;
    }

    @keyframes rainbow-animation {
        0%, 100% {
            background-position: 0 0;
        }
        50% {
            background-position: 100% 0;
        }
    }

    .nb-options-play {
        position: relative;
        left: -1200px;
    }
    .nb-options-list {
        position: relative;
        left: -1000px;
    }
    .wrapper {
    position: relative;
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: #fff;
    border-radius: 10px;
    padding-top: 100px;
    top: 230px;
    left: 700px;
}
.wrapper h1 {
    position: absolute;
    top: 30px;
    left: 40%;
}
.wrapper-text {
    position: absolute;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Buttertype</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
    </nav>
    <nav class="navbar  navbar-own">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./buttertype_logo.png" alt="Bootstrap" width="40" height="34" class="navbar-padding-logo">
          </a>
          <div>
            <a href="./play.html" class="rainbow-text nb-options-play">Play</a>
            <a href="./list.html" class="rainbow-text nb-options-list">Records</a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo $_SESSION['profile_image']; ?>" alt="User Image" style="width: 30px; height: 30px; border-radius: 50%;"> <?php echo $_SESSION['username']; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Ausloggen</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Registrieren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Einloggen</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
      </nav>

    <div class="container">
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

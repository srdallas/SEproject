<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Oakland Towers| Reservations</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Oakland</span> Towers</h1>
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="current"><a href="login.php">Reservations</a></li>
          <li><a href="cs.html">Customer Service</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="newsletter">
    <div class="container">
      <h1>Save now and see our lower rates.</h1>
      <form>
        <input type="email" placeholder="Enter Email...">
        <button type="submit" class="button_1">SEE LOWER RATES</button>
      </form>
    </div>
  </section>
  <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
  <section id="main">
    <div class="container">
      <aside id="sidebar">
        <div class="dark">
          <h3>Make Reservations</h3>
          <form class="quote">
            <div>
              <label>Name</label><br>
              <input type="text" placeholder="Name">
            </div>
            <div>
              <label>Email</label><br>
              <input type="email" placeholder="Emial Address">
            </div>
            <div>
              <label>Message</label><br>
              <textarea placeholder="Message"></textarea>
            </div>
            <button class="button_1" type="submit">Send</button>
        </form>
        </div>
      </aside>
    </div>
  </section>
</body>
  <footer>
    <p>Oakland Towers, Copyright &copy; 2019</p>






    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</footer>
</html>

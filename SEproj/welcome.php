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
          <form action="insert1.php" method="post" class="quote">
            <div>
              <label>Name</label><br>
              <input type="text" name="name">
            </div>
            <div>
              <label>Email</label><br>
              <input type="email" name="email">
            </div>
            <div>
  							<label>Check IN</label><br>
  							<input type="date" name ="cidate">
  					</div>
            <div>
  							<label>Check Out</label><br>
                <input type="date" name ="codate">
            </div>

            <div>
  							<label>Number Of Adult People</label><br>
                <input type="number" name ="guest" min="1" max="6">
  					</div>
            <div>
                <label>Number Of Children</label><br>
                <input type="number" name ="children" min="0" max="6">
            </div>
            <div>
  							<label>Bed Size</label><br>
                    <select name="bed">
                            <option value="Villa">Villa [$200]</option>
                            <option value="King Sweet">King Sweet [$150]</option>
                            <option value="Quen Sweet">Quen Sweet [$130]</option>
                            <option value="Full Sweet">Full Sweet [$100]</option>
                    </select>
  					</div>
            <div>
                <label>Breakfast</label><br>
                    <select name="breakfast">
                      <option value="Yes">Yes[+$10]</option>
                      <option value="No">No</option>
                    </select>
            </div>

            <div>
              <label>Message</label><br>
              <textarea name="message"></textarea>
            </div>
            <button class="button_1" type="submit">Send</button>
        </div>
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

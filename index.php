<?php
$launchDate = '2025-12-31 23:59:59';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Coming Soon</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <h1>Coming Soon</h1>
    <p>We're launching on <?= date("F j, Y", strtotime($launchDate)); ?></p>

    <div id="countdown"></div>

    <form method="POST" action="save_email.php" class="email-form">
      <input type="email" name="email" placeholder="Your email..." required />
      <button type="submit">Notify Me</button>
    </form>
  </div>

</body>
</html>

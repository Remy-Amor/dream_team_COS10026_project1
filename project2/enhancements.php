<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Remy Amor, William Anthony, Amanuial Ashagrie">
    <meta name="description" content="Enhancements page for WAR website (dream_team_COS10026)">
    <meta name="keywords" content="Enhancements made for 2nd part of project">
    <title>Dream Team IT Solutions - Enhancements</title>
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/enhancements.css">
</head>
<body>

<?php include 'header.inc'; ?>

<main>
     <div id="enhancements">
    <!-- image generated by chatgpt 4 -->
    <img src="styles/images/enhancements_icon.png" alt="enhancements icon">
    <h1>Project Enhancements</h1>
  </div>
    <section class="enhancement-card">
        <h2>1. Manager Registration</h2>
        <p>Signup configured at <code>manager_signup.php</code>, and new manager details are added to the manager_details_tb table (password is hashed). Username's cannot be duplicate</p>
    </section>

    <section class="enhancement-card">
        <h2>2. Manager Login</h2>
        <p><code>manager_login.php</code> page allows for managers to login with details configured from the signup page. On unsuccessful login a message is displayed. <code>manage.php</code> and pages associated with processing results are locked unless user is logged in</p>
    </section>

    <section class="enhancement-card">
        <h2>3. Login Locking</h2>
        <p>After 3 unsuccessful login attempts, the user is unable to login for 30 seconds, and a message is displayed to inform them of so. After the 30 seconds, user can refresh the page to see the login button again and attempt login.</p>
    </section>

    <section class="enhancement-card">
        <h2>4. Sorting Records</h2>
        <p>For each record display of eoi, the user has the dropdown option to sort records by fields such as firstname, lastname and skills</p>
    </section>
</main>

<?php include 'footer.inc'; ?>

</body>
</html>
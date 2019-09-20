<?php
// Init + Start session

session_start();

// Handle AJAX request
switch ($_POST['req']) {
  // Invalid request
  default:
    echo "ERR";
    break;

  // Sign In
  case "in":
    // Already signed in
    if (is_array($_SESSION['user'])) {
      die("OK");
    }

    // Email => Password
//    stored usernames
    $users = [
      "john@doe.com" => "123456",
      "jane@doe.com" => "654321",
      "mslee@hng.com" => "456789",
    ];

    // Check given email & password
    if ($_POST['password'] == $users[$_POST['email']]) {
      $_SESSION['user'] = [
        "email" => $_POST['email']
      ];
      echo "OK";
    } else {
      echo "ERR";
    }
    break;

  // Sign out
  case "out":
    unset ($_SESSION['user']);
    echo "OK";
    break;
}
?>
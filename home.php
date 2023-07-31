<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Phonebook</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Hello Pugeng Lameg</h1>
				<a href="Profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>QWERTY</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>










<!DOCTYPE html>
<html>
<head>
  <title>Phonebook</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Custom CSS */
    .contact-table {
      border: 1px solid #ddd;
      border-radius: 0.25rem;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .contact-table thead th {
      border-right: 1px solid #ddd;
      background-color: #0062cc;
      color: white;
      padding: 10px;
    }

    .contact-table tbody td {
      border-right: 1px solid #ddd;
      padding: 10px;
    }

    .contact-table tbody tr {
      border-bottom: 1px solid #ddd;
    }

    .contact-table thead th:last-child,
    .contact-table tbody td:last-child {
      border-right: none;
    }

    .form-control {
    margin: 2%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center" style="
    color: chocolate;
">Phonebook</h1>
    <div class="row">
      <div class="col-md-6">
        <form id="contactForm">
          <input type="hidden" id="contactId">
          <div class="form-group" style = "width: 300px;">
            <label for="firstName" style="
             color: chocolate;
            ">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="middleName">Middle Mame:</label>
            <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group" style = "width: 300px;>
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="col-md-6">
        <h2 class="text-center" style="
        color: chocolate;
        ">Contact List</h2>
        <input type="text" class="form-control" id="searchInput" placeholder="Search">
        <ul id="contactList" class="list-group" style="display: -ms-flexbox;
        
        display: flex;
        -ms-flex-direction: column;
        flex-direction: row-reverse;
        padding-left: 0;
        margin-bottom: 0;
        color: white;
        border-radius: 0.25rem;
        flex-wrap: nowrap;
        justify-content: center; margin-right: 69px;"></ul>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="script.js"></script>

  
</body>
</html>

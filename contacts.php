<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Phonebook</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container my-5">
            <h2>List of Contacts</h2>
            <a class="btn btn-primary" href="create.php" role="button"> New Contacts</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
            <?php
            $servername = "localhost";
            $username = "id21003677_test1";
            $password = "Test@321";
            $database = "id21003677_test1";

            //Create Connection
            $connection = new mysqli($servername, $username, $password, $database);

            //Check Connection
            if ($connection->connect_error){
                die("Connection failed: " . $connection->$connect_error);
            }
            
            //read all row from database table
            $sql = "SELECT * FROM Clients";
            $result = $connection->query($sql);

            if ($result) {
                die("Invalid query: " . $connection->error);
            }

            //read data of eachh row
            while($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>$row [id]</td>
                    <td>$row [name]</td>
                    <td>$row [email]</td>
                    <td>$row [phone]</td>
                    <td>$row [address]</td>
                    <td>$row [created_at]</td>
                    <td>
                        <a class = 'btn btn-primary btn-sm' href='edit.php?id=$row [id]'>Edit</a>
                        <a class = 'btn btn-danger btn-sm' href='delete.php?id=$row [id]'>Delete</a>
                    </td>
                </tr>
                ";
             }

             ?>
             </tbody>
            </table>
        </div>            
    </body>
</html>
<?php include "db.php"; ?>
<?php



function CreateRows(){
    if(isset($_POST['submit'])){
        global  $connection;
        $username = $_POST['username'];
        $pass = $_POST['password'];


        //Sql Injection
        $username = mysqli_real_escape_string($connection,$username);
        $pass = mysqli_real_escape_string($connection,$pass);


        //password encyption
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashFormat_and_salt = $hashFormat . $salt;
        $pass = crypt($pass, $hashFormat_and_salt);

        $query = "INSERT INTO users(username,password) "; // query insert to user table
        $query .= "VALUES ('$username','$pass')"; // Extend to Query

        $result = mysqli_query($connection, $query); // DO Query

        if(!$result){ // Check Query
            die('Query Faild!' . mysqli_error());
        }else{
            echo "Record Created";
        }
    }
}


function showAllData(){
    global  $connection;
    $query = "SELECT * FROM users "; // query select all data form users table
    $result = mysqli_query($connection, $query); // DO Query
    if(!$result){ // Check Query
        die('Query Faild!' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo  "<option value='$id'>$id</option>";
    }
}

function ReadRows(){
    global  $connection;
    $query = "SELECT * FROM users "; // query select all data form users table
    $result = mysqli_query($connection, $query); // DO Query
    if(!$result){ // Check Query
        die('Query Faild!' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){// mysqli_fetch_row: Get a result row as an enumerated array
        print_r($row);
    }
}

function UpdateTable(){
    if(isset($_POST['submit'])){
        global  $connection;
        $username =  $_POST['username'];
        $pass =  $_POST['password'];
        $id = $_POST['id'];
//    var_dump($id);
        $query = "UPDATE users SET  ";
        $query .= "username = '$username' ,";
        $query .= "password = '$pass' ";
        $query .= "WHERE id =$id ";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILD!" . mysqli_error($connection));
        }else{
            echo "Record Updated!";
        }
    }
}


function DeleteRows(){
    if(isset($_POST['submit'])){
        global  $connection;
        $username =  $_POST['username'];
        $pass =  $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE From users  ";
        $query .= "WHERE id =$id ";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILD!" . mysqli_error($connection));
        }else{
            echo "Record Deleted!";
        }
    }
}




?>
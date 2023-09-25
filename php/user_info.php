<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 

    $con = mysqli_connect("localhost", "root");

    mysqli_select_db($con, 'dnblood');

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];  
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];   
    $address = $_POST['address'];
    $bgroup = $_POST['bloodgroup'];
    $occupation = $_POST['occupation'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zipcode'];


    $query = "insert into reg_user (First_Name,Last_Name,Email, Phone_no, Gender, DOB, Address, Blood_Group, Occupation, State, City, ZIP)
    values ('$fname', '$lname', '$email', '$phoneno', '$gender', '$dob', '$address', '$bgroup', '$occupation', '$state', '$city', '$zip')";
     
    echo "$query";

    // mysqli_query($con, $query);

    // header('location:../index.html');

    ?>
</body>
</html>

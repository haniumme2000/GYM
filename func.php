<?php
$con = mysqli_connect("localhost", "root", "", "loginsystem");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Login form submission
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM logintb WHERE username=? AND password=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        header("Location: admin-panel.php");
        exit();
    } else {
        echo "<script>alert('Error: Incorrect login credentials.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    }
}

// Add patient form submission
if (isset($_POST['pat_submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $docapp = $_POST['docapp'];

    $query = "INSERT INTO doctorapp (fname, lname, email, contact, docapp) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $contact, $docapp);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    } else {
        echo "<script>alert('Error: Unable to add member.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    }
}

// Add trainer form submission
if (isset($_POST['tra_submit'])) {
    $Trainer_id = $_POST['Trainer_id'];
    $Name = $_POST['Name'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO Trainer (Trainer_id, Name, phone) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sss", $Trainer_id, $Name, $phone);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('Trainer added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    } else {
        echo "<script>alert('Error: Unable to add trainer.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    }
}

// Add payment form submission
if (isset($_POST['pay_submit'])) {
    $Payment_id = $_POST['Payment_id'];
    $Amount = $_POST['Amount'];
    $customer_id = $_POST['customer_id'];
    $payment_type = $_POST['payment_type'];
    
    // Check if 'customer_name' is set in $_POST before accessing it
    $customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : '';

    $query = "INSERT INTO Payment (Payment_id, Amount, customer_id, payment_type, customer_name) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $Payment_id, $Amount, $customer_id, $payment_type, $customer_name);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('Payment successful.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    } else {
        echo "<script>alert('Error: Unable to process payment.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
        exit();
    }
}

// Function to get patient details
function get_patient_details()
{
    global $con;
    $query = "SELECT * FROM doctorapp";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $docapp = $row['docapp'];

        echo "<tr>
          <td>$fname</td>
          <td>$lname</td>
          <td>$email</td>
          <td>$contact</td>
          <td>$docapp</td>
        </tr>";
    }
}

// Function to get package details
function get_package()
{
    global $con;
    $query = "SELECT * FROM Package";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        $Package_id = $row['Package_id'];
        $Package_name = $row['Package_name'];
        $Amount = $row['Amount'];

        echo "<tr>
          <td>$Package_id</td>
          <td>$Package_name</td>
          <td>$Amount</td>
        </tr>";
    }
}

// Function to get trainer details
function get_trainer()
{
    global $con;
    $query = "SELECT * FROM Trainer";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        $Trainer_id = $row['Trainer_id'];
        $Name = $row['Name'];
        $phone = $row['phone'];

        echo "<tr>
          <td>$Trainer_id</td>
          <td>$Name</td>
          <td>$phone</td>
        </tr>";
    }
}

// Function to get payment details
function get_payment()
{
    global $con;
    $query = "SELECT * FROM Payment";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        $Payment_id = $row['Payment_id'];
        $Amount = $row['Amount'];
        $payment_type = $row['payment_type'];
        $customer_id = $row['customer_id'];
        
        // Check if 'customer_name' key exists in the array
        $customer_name = isset($row['customer_name']) ? $row['customer_name'] : '';

        echo "<tr>
          <td>$Payment_id</td>
          <td>$Amount</td>
          <td>$payment_type</td>
          <td>$customer_id</td>
          <td>$customer_name</td>
        </tr>";
    }
}

?>

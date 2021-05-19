
<?php
$new_date = date('Y-m-d', strtotime($_POST['bday']));

$conn = mysqli_connect("localhost", "root", "", "workbucket");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
//$sql = "INSERT INTO userdatas (Birthday,gender,phone,address,motto) VALUES (1212-12-22,'a','a','a','a')";
/*
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  */
if (isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['motto'])) {
    $sql = "INSERT INTO userdatas (Birthday,gender,phone,address,motto) VALUES ('".$new_date."','".$_POST['gender']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['motto']."')";
    //$conn->query($sql);
    header(url('/'));
    if (mysqli_query($conn, $sql)) {
      
        header('Location: /');
        exit();
        //return redirect('/');
      } else {
        header('Location: /register2');
        exit();
        //return redirect('/register2');
    }
} else {
  header('Location: /register2');
        exit();
    //return redirect('/register2');
}
//redirect(url('/'));

mysqli_close($conn);

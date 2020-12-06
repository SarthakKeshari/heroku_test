<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    if (!empty($name) && !empty($pass)) {
        // $host = "localhost";
        // $dbusername = "root";
        // $dbpass = "";
        // $dbname = "test";


        $host = "remotemysql.com";
        $dbusername = "lFRAvJZ37f";
        $dbpass = "aTUN52EImh";
        $dbname = "lFRAvJZ37f";

        //create connection
        $conn = new mysqli($host, $dbusername, $dbpass, $dbname);
    if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else
    {
        $query = "INSERT Into test (name, pass) values('$name','$pass')";
    $res=mysqli_query($conn,$query);
    if($res)
    {
        $last_id = mysqli_insert_id($conn);
        echo $last_id;
    }
    else
    {
        echo "lol";
        echo mysqli_error($conn);
    }
    }
} else {
echo "All field are required";
die();
}
}
?>

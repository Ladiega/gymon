

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_form";
$tablename = "MyGest";

$codigo = $_POST["codigo"];
$name = $_POST["name"];
$lanstname = $_POST["lanstname"];
$academy = $_POST["academy"];
$idDocument = $_POST["idDocument"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$plan = $_POST["plan"];
$paymentMethod = $_POST["paymentMethod"];
$amount = $_POST["amount"];
$expirationDate = $_POST["expirationDate"];

$conn = mysqli_connect ($servername, $username, $password, $dbname);
    $sql = "INSERT INTO $tablename 
    (id, firstname, lastname, academy, idNumber, email, phone, plan, paymentMethod, amount, expirationDate) 
    VALUES ('$codigo', '$name', '$lanstname', '$academy', '$idDocument', '$email', '$phone', '$plan', '$paymentMethod', '$amount', '$expirationDate')";
    $resultado = mysqli_query($conn,$sql);


if($resultado){
    echo "Se ingreso el codigo";
    echo "</br>";
    echo $expirationDate;
}else{
    echo "La cagamos" .$conn->error;
}


kjhgjhkgjlhljhb





?>
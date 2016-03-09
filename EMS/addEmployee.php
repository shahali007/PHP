<?php
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['add']))
{
	$Id = $_POST['id'];
	$Name = $_POST['name'];
    $Email = $_POST['email'];
    $Pass = $_POST['password'];
	
    $sql = "INSERT INTO ";
    $data = $dbcon->query($sql);
    

     if ()
    {
        echo("<script>location.href='user_data.php'</script>");
    }
    else {
        $string = ' Sorry! Try again.\n';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='login.php'</script>");
    }
}
?>

<html>
<head>
    <title>Add New Employee</title>
</head>
<body>
<center>
<table>
    <tr>
        <th></th>
        <th style="font-size: larger;">New Employee</th>
    </tr>
    <form action="" method="post">
        <tr>
            <td>ID: </td>
            <td><input type="text" name="id"></td>
        </tr>
		<tr>
            <td>Name: </td>
            <td><input type="text" name="name"></td>
        </tr>
		<tr>
            <td>E-mail: </td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>

            <td><input type="submit" name="add" value="Create">
        </tr>
    </form>
</table>
</center>
</body>
</html>

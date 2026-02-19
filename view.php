<?php
include 'db.php';
$result = $conn->query("SELECT * FROM applications");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Applications</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f6f9;
    margin:0;
    padding:20px;
}

h2{
    text-align:center;
    background:#2c3e50;
    color:white;
    padding:15px;
    border-radius:6px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:20px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

th{
    background:#3498db;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

tr:hover{
    background:#e6f2ff;
}

a{
    text-decoration:none;
    padding:6px 10px;
    border-radius:4px;
    font-size:14px;
}

.download{
    background:#27ae60;
    color:white;
}

.edit{
    background:#f39c12;
    color:white;
}

.delete{
    background:#e74c3c;
    color:white;
}

a:hover{
    opacity:0.8;
}

.back{
    display:inline-block;
    margin-top:15px;
    padding:8px 15px;
    background:#2c3e50;
    color:white;
    border-radius:4px;
}
</style>

</head>
<body>

<h2>Internship Applications</h2>

<table>
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Domain</th>
<th>Mobile</th>
<th>Mode</th>
<th>Resume</th>
<th>Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['fullname']."</td>
<td>".$row['email']."</td>
<td>".$row['domain']."</td>
<td>".$row['mobile']."</td>
<td>".$row['mode']."</td>
<td><a class='download' href='".$row['resume']."' target='_blank'>Download</a></td>
<td>
<a class='edit' href='edit.php?id=".$row['id']."'>Edit</a>
<a class='delete' href='delete.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?')\">Delete</a>
</td>
</tr>";
}
?>

</table>

<br>
<a class="back" href="index.html">Back to Form</a>

</body>
</html>
<?php
include 'db.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM applications WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Application</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f6f9;
    padding:20px;
}

form{
    width:70%;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
    text-align:center;
    background:#2c3e50;
    color:white;
    padding:10px;
    border-radius:5px;
}

input, select, textarea{
    width:100%;
    padding:8px;
    margin-top:5px;
    margin-bottom:15px;
    border-radius:4px;
    border:1px solid #ccc;
}

input[type="submit"]{
    background:#27ae60;
    color:white;
    border:none;
    cursor:pointer;
}

input[type="submit"]:hover{
    background:#219150;
}
</style>
</head>

<body>

<h2>Edit Internship Application</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<h3>Basic Information</h3>

Full Name:
<input type="text" name="fullname" value="<?php echo $data['fullname']; ?>">

Date of Birth:
<input type="date" name="dob" value="<?php echo $data['dob']; ?>">

Gender:
<select name="gender">
<option <?php if($data['gender']=="Male") echo "selected"; ?>>Male</option>
<option <?php if($data['gender']=="Female") echo "selected"; ?>>Female</option>
<option <?php if($data['gender']=="Other") echo "selected"; ?>>Other</option>
</select>

Mobile:
<input type="text" name="mobile" value="<?php echo $data['mobile']; ?>">

Email:
<input type="email" name="email" value="<?php echo $data['email']; ?>">

Address:
<textarea name="address"><?php echo $data['address']; ?></textarea>

Nationality:
<input type="text" name="nationality" value="<?php echo $data['nationality']; ?>">

<h3>Education</h3>

Qualification:
<input type="text" name="qualification" value="<?php echo $data['qualification']; ?>">

Course:
<input type="text" name="course" value="<?php echo $data['course']; ?>">

College:
<input type="text" name="college" value="<?php echo $data['college']; ?>">

Year:
<input type="text" name="year" value="<?php echo $data['year']; ?>">

CGPA:
<input type="text" name="cgpa" value="<?php echo $data['cgpa']; ?>">

<h3>Internship Details</h3>

Domain:
<input type="text" name="domain" value="<?php echo $data['domain']; ?>">

Duration:
<input type="text" name="duration" value="<?php echo $data['duration']; ?>">

Start Date:
<input type="date" name="start_date" value="<?php echo $data['start_date']; ?>">

Mode:
<input type="text" name="mode" value="<?php echo $data['mode']; ?>">

Location:
<input type="text" name="location" value="<?php echo $data['location']; ?>">

<h3>Skills</h3>

Technical Skills:
<textarea name="technical"><?php echo $data['technical']; ?></textarea>

Soft Skills:
<textarea name="softskills"><?php echo $data['softskills']; ?></textarea>

Experience:
<textarea name="experience"><?php echo $data['experience']; ?></textarea>

Certifications:
<textarea name="certifications"><?php echo $data['certifications']; ?></textarea>

<h3>Update Resume (Optional)</h3>
<input type="file" name="resume">

<input type="submit" value="Update Application">

</form>

</body>
</html>
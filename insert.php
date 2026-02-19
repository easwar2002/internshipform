<?php
include 'db.php';

$resume = "uploads/".time()."_".$_FILES['resume']['name'];
move_uploaded_file($_FILES['resume']['tmp_name'],$resume);

$college_id = "uploads/".time()."_".$_FILES['college_id']['name'];
move_uploaded_file($_FILES['college_id']['tmp_name'],$college_id);

$sql="INSERT INTO applications 
(fullname,dob,gender,mobile,email,address,nationality,qualification,course,college,year,cgpa,domain,duration,start_date,mode,location,technical,softskills,experience,certifications,resume,college_id)
VALUES
('$_POST[fullname]','$_POST[dob]','$_POST[gender]','$_POST[mobile]','$_POST[email]','$_POST[address]','$_POST[nationality]','$_POST[qualification]','$_POST[course]','$_POST[college]','$_POST[year]','$_POST[cgpa]','$_POST[domain]','$_POST[duration]','$_POST[start_date]','$_POST[mode]','$_POST[location]','$_POST[technical]','$_POST[softskills]','$_POST[experience]','$_POST[certifications]','$resume','$college_id')";

$conn->query($sql);
header("Location:view.php");
?>
<?php
include 'db.php';

$id = $_POST['id'];

// File Upload
if (!empty($_FILES['resume']['name'])) {

    $resumePath = "uploads/" . time() . "_" . $_FILES['resume']['name'];
    move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath);

    $sql = "UPDATE applications SET
        fullname='{$_POST['fullname']}',
        dob='{$_POST['dob']}',
        gender='{$_POST['gender']}',
        mobile='{$_POST['mobile']}',
        email='{$_POST['email']}',
        address='{$_POST['address']}',
        nationality='{$_POST['nationality']}',
        qualification='{$_POST['qualification']}',
        course='{$_POST['course']}',
        college='{$_POST['college']}',
        year='{$_POST['year']}',
        cgpa='{$_POST['cgpa']}',
        domain='{$_POST['domain']}',
        duration='{$_POST['duration']}',
        start_date='{$_POST['start_date']}',
        mode='{$_POST['mode']}',
        location='{$_POST['location']}',
        technical='{$_POST['technical']}',
        softskills='{$_POST['softskills']}',
        experience='{$_POST['experience']}',
        certifications='{$_POST['certifications']}',
        resume='$resumePath'
        WHERE id=$id";

} else {

    $sql = "UPDATE applications SET
        fullname='{$_POST['fullname']}',
        dob='{$_POST['dob']}',
        gender='{$_POST['gender']}',
        mobile='{$_POST['mobile']}',
        email='{$_POST['email']}',
        address='{$_POST['address']}',
        nationality='{$_POST['nationality']}',
        qualification='{$_POST['qualification']}',
        course='{$_POST['course']}',
        college='{$_POST['college']}',
        year='{$_POST['year']}',
        cgpa='{$_POST['cgpa']}',
        domain='{$_POST['domain']}',
        duration='{$_POST['duration']}',
        start_date='{$_POST['start_date']}',
        mode='{$_POST['mode']}',
        location='{$_POST['location']}',
        technical='{$_POST['technical']}',
        softskills='{$_POST['softskills']}',
        experience='{$_POST['experience']}',
        certifications='{$_POST['certifications']}'
        WHERE id=$id";
}

$conn->query($sql);

header("Location: view.php");
exit();
?>
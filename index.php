<!DOCTYPE html>
<html>
<head>
<title>Internship Application</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Internship Application Form</h2>

<form action="insert.php" method="POST" enctype="multipart/form-data">

<h3>Basic Information</h3>
Full Name: <input type="text" name="fullname" required><br><br>
Date of Birth: <input type="date" name="dob"><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other<br><br>

Mobile: <input type="text" name="mobile"><br><br>
Email: <input type="email" name="email"><br><br>
Address: <textarea name="address"></textarea><br><br>
Nationality: <input type="text" name="nationality"><br><br>

<h3>Educational Details</h3>
Qualification:
<select name="qualification">
<option>Diploma</option>
<option>UG</option>
<option>PG</option>
</select><br><br>

Course: <input type="text" name="course"><br><br>
College: <input type="text" name="college"><br><br>

Year:
<select name="year">
<option>1st Year</option>
<option>2nd Year</option>
<option>Final Year</option>
</select><br><br>

CGPA: <input type="text" name="cgpa"><br><br>

<h3>Internship Details</h3>
Domain: <input type="text" name="domain"><br><br>
Duration:
<select name="duration">
<option>1 Month</option>
<option>3 Months</option>
<option>6 Months</option>
</select><br><br>

Start Date: <input type="date" name="start_date"><br><br>

Mode:
<select name="mode">
<option>Online</option>
<option>Offline</option>
<option>Hybrid</option>
</select><br><br>

Location: <input type="text" name="location"><br><br>

<h3>Skills & Experience</h3>
Technical Skills:<br>
<textarea name="technical"></textarea><br><br>

Soft Skills:<br>
<textarea name="softskills"></textarea><br><br>

Experience:<br>
<textarea name="experience"></textarea><br><br>

Certifications:<br>
<textarea name="certifications"></textarea><br><br>

<h3>Documents</h3>
Resume (PDF): <input type="file" name="resume"><br><br>
College ID: <input type="file" name="college_id"><br><br>

<input type="submit" value="Submit">

</form>

<br>
<a href="view.php">View Applications</a>

</body>
</html>
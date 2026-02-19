# internshipform
# Internship Application Management System

A simple Internship Application Form built using **HTML, CSS, PHP, and MySQL**.  
This project performs full **CRUD Operations (Create, Read, Update, Delete)** with file upload support.

---



- Internship Application Form
- Store Data in MySQL Database
- Upload Resume (PDF)
- View All Applications
- Edit Applications
- Update Records
- Delete Records
- Professional UI Design
- File Upload Handling
- XAMPP Compatible

---

Technologies Used

- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Server: XAMPP

---

Project Structure

---

Database Setup

Step 1: Start XAMPP

- Open XAMPP Control Panel
- Start **Apache**
- Start **MySQL**
 Step 2: Open phpMyAdmin
http://localhost/phpmyadmin


### Step 3: Run This SQL Query

```sql
CREATE DATABASE internship_db;

USE internship_db;

CREATE TABLE applications (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(20) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    qualification VARCHAR(50) NOT NULL,
    course VARCHAR(100) NOT NULL,
    college VARCHAR(150) NOT NULL,
    year VARCHAR(20) NOT NULL,
    cgpa VARCHAR(20),
    domain VARCHAR(100) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    start_date DATE NOT NULL,
    mode VARCHAR(50) NOT NULL,
    location VARCHAR(100),
    technical TEXT NOT NULL,
    softskills TEXT NOT NULL,
    experience TEXT,
    certifications TEXT,
    resume VARCHAR(255) NOT NULL,
    college_id VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

How To Run This Project

Install XAMPP

Copy project folder into:

C:\xampp\htdocs\

Create a folder named:

Paste all project files inside that folder.

Start Apache & MySQL

Open browser and visit:


http://localhost/internship/index.html

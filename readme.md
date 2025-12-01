# Job Spark – Online Job Portal System

Job Spark is a **production-style PHP & MySQL based Online Job Portal Application** designed to bridge the gap between **job seekers and recruiters** through a centralized digital platform. The system supports complete job lifecycle management — from job posting to application tracking.

This project is developed with **academic standards + real-world usability** in mind, making it suitable for final-year diploma and B.Tech level submissions as well as portfolio demonstration.

---

## 🚀 Core Features

### 👤 Job Seeker Module
- Secure User Registration & Authentication
- Profile Creation & Management
- Resume Upload (PDF Format)
- Advanced Job Search & Filtering
- Job Application System
- Application Status Tracking

### 🏢 Recruiter / Company Module
- Recruiter Registration & Secure Login
- Job Posting & Editing
- Applicant Management System
- Resume Download Facility
- Job Listing Control Panel

### 🛠 Administrative Capabilities
- Database Operations
- User & Recruiter Management
- Job & Application Monitoring
- File Upload & Storage Handling

---

## 🧑‍💻 Technology Stack

| Layer | Tools Used |
|------|------------|
| Frontend | HTML, CSS, JavaScript |
| Backend | Core PHP |
| Database | MySQL |
| Server | Apache (XAMPP) |
| File Handling | PHP Upload System |

---

## 📁 Project Architecture

```
job-spark/
│
├── dnlib/
│   ├── class/               # Database, Actions, Helpers, Business Logic
│   ├── pages/               # All User & Admin Web Pages
│   │   ├── uploads/
│   │   │   ├── pictures/    # Uploaded Images
│   │   │   └── resumes/     # Uploaded Resumes (PDF)
│
├── README.md
```

---

## ⚙️ Local Setup Instructions

### 1️⃣ Install XAMPP
Download from:
```
https://www.apachefriends.org
```

### 2️⃣ Place Project Folder
Move project into:
```
C:/xampp/htdocs/job-spark/
```

### 3️⃣ Start Services
Start the following in XAMPP:
- Apache
- MySQL

### 4️⃣ Create Database
Go to:
```
http://localhost/phpmyadmin
```
Create database:
```
jobspark
```
Import the provided SQL file.

### 5️⃣ Configure Database
Edit:
```
dnlib/class/database.class.php
```
Update credentials:

```php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "jobspark";
```

### 6️⃣ Run the Application
Visit:
```
http://localhost/job-spark/
```

---

## 🔐 Security Overview
- Session-based authentication
- File-type restricted uploads
- Modular database class

⚠️ Recommended improvements for production:
- Password hashing
- Input sanitization
- CSRF protection

---

## 📊 Project Classification

✅ **Project Type:** Full-Stack Web Application  
✅ **Architecture:** Modular PHP (MVC Style)  
✅ **Database Driven:** Yes  
✅ **File Upload System:** Yes  
✅ **Multi-User System:** Yes

---

## 🎯 Future Scope
- Admin analytics dashboard
- Email notifications
- Resume parsing
- REST API integration
- React frontend

---

## 🎓 Academic Usage
Suitable for:
- Diploma Final Project
- B.Tech Mini/Major Project
- PHP-MySQL Portfolio Project

---

## 👨‍💻 Author

Developed by: **Sai**  
Domain: Web Development (PHP & MySQL)

---

## 📜 License

Educational Use License  
Free to modify and enhance

---

⭐ If you find this project useful, feel free to give it a star on GitHub!


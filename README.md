# Registration-Form

# 📝 User Registration Form with PHP, MariaDB, and Nginx

This project is a basic user registration system built using HTML and PHP, running on an Nginx web server with MariaDB as the backend database. It allows users to enter their details in a form, which are then stored in the database.

---

## 📁 Project Structure

/usr/share/nginx/html/ 
├── registration.html # Frontend form for user registration
├── submit.php # PHP script to handle form submission and store data in DB


---

## 💡 Features

- Full user registration form
- Data stored in a secure MariaDB database
- Nginx web server hosted on an EC2 instance
- Modular and easy to extend

---

## 🧩 Technologies Used

- **Frontend:** HTML  
- **Backend:** PHP  
- **Database:** MariaDB  
- **Web Server:** Nginx  
- **Operating System:** Amazon Linux 2 (EC2)  

---

## 🚀 Setup Instructions

### 1️⃣ Start Required Services


sudo service nginx start
sudo service mariadb start

now start mysql and create database users and table user
CREATE DATABASE users;
USE users;

CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  fullname VARCHAR(100),
  email VARCHAR(50),
  password VARCHAR(255),
  phone VARCHAR(20),
  dob DATE,
  gender VARCHAR(10),
  address TEXT,
  country VARCHAR(50)
);




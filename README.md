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



## 🚀 Setup Instructions

### 🔑 Step 0: Launch EC2 and Connect via SSH

1. Go to the [AWS EC2 Console](https://console.aws.amazon.com/ec2/)
2. Launch an instance with **Amazon Linux 2** AMI
3. Allow ports 22 (SSH), 80 (HTTP) in the **security group**
4. Once instance is running, connect via SSH:

```bash
ssh -i your-key.pem ec2-user@<your-ec2-public-ip>

sudo service nginx start
sudo service mariadb start
sudo mysql -u root -p

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

```

![Screenshot (11)](https://github.com/user-attachments/assets/4c4e62a3-2c87-4d0c-9144-b17c2f56f74a)

![Screenshot (10)](https://github.com/user-attachments/assets/c690a864-9265-4f64-b365-df5a573a8cb6)



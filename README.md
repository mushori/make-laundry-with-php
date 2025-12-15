# 🧺 Simple Laundry Management System

A robust and lightweight web-based application to manage daily laundry operations. This project was built using **Native PHP** and **MySQL** with **Bootstrap 5** for a responsive user interface.

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📸 Screenshots

| Login Page | Dashboard |
|Data Layanan | Transaction Input |
|:--:|:--:|
| ![Login Page](screenshots/login.png) | ![Dashboard](screenshots/dashboard.png) |
| ![Data Layanan](screenshots/layanan.png) | ![Transaction](screenshots/transaksi.png) |

*(Note: Please upload your screenshots to a folder named `screenshots` in this repository)*

## ✨ Features

* **Secure Authentication**: Admin login system with MD5 password encryption.
* **Dashboard**: Overview of the system status.
* **Service Management (CRUD)**: Add, edit, and delete laundry services (e.g., Dry Clean, Ironing).
* **Customer Management (CRUD)**: Manage customer data efficiently.
* **Transaction Processing**:
    * Dynamic selection of customers and services.
    * Automatic total price calculation based on quantity/weight.
    * Payment status tracking (Lunas/Belum Lunas).
* **Responsive Design**: Optimized for desktop and mobile devices using Bootstrap 5.

## 🛠️ Tech Stack

* **Backend**: Native PHP (No Framework)
* **Frontend**: HTML5, CSS3, Bootstrap 5
* **Database**: MySQL
* **Server**: Apache (via XAMPP)

## 🚀 How to Run

1.  **Clone the Repository**
    ```bash
    git clone [https://github.com/yourusername/laundry-management.git](https://github.com/yourusername/laundry-management.git)
    ```
2.  **Move to HTDOCS**
    Copy the project folder into your local server directory (e.g., `C:\xampp\htdocs\laundry`).

3.  **Setup Database**
    * Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
    * Create a new database named **`laundry_db`**.
    * Import the `database.sql` file provided in this repository (or copy the SQL script from the documentation).

4.  **Configure Connection**
    Ensure `koneksi.php` matches your local database settings:
    ```php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "laundry_db";
    ```

5.  **Launch**
    Open your browser and visit:
    `http://localhost/laundry`

6.  **Default Credentials**
    * **Username**: `admin`
    * **Password**: `admin123`

## 🗄️ Database Schema

The system relies on 4 main tables:
* `admin` - Stores admin credentials.
* `pelanggan` - Stores customer details.
* `layanan` - List of services and prices.
* `transaksi` - Records transactions (linked to customers and services).

## 👨‍💻 Author

**Muhammad Sholihuddin Rizky**
* Student at Institut Teknologi Sepuluh Nopember (ITS)
* Department of Informatics Engineering

---
*Made with ❤️ for Web Programming Assignment*

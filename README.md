
# Campus Management System

A simple web-based system for managing student data at a private campus. This project is developed using **PHP, HTML, CSS**, and MySQL, and runs on a **WAMP Server**.

## Features

- **Login Page**: Basic login functionality for access control.
- **Student Registration**: Add new students with details such as NIC, Name, Address, Tel. No, and Course.
- **Search Students**: Search for students by NIC and view their details.
- **Update Student Details**: Update existing student details using their NIC.
- **Delete Students**: Remove students from the system.
- **Database Management System**: Stores and manages student data.

## Prerequisites

- **WAMP/ xaamp Server** installed on your system.
- Basic knowledge of PHP, MySQL, and web development.

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/campus-management-system.git
   cd campus-management-system
   ```

2. **Create the Database**
   - Open `phpMyAdmin` from your WAMP Server.
   - Log in with the following default credentials (if not modified):
     - **Server**: `localhost`
     - **Username**: `root`
     - **Password**: *(leave it blank)*
   - Create a new database named `campus_db`.

3. **Import the Database Structure**
   - Navigate to the **Import** tab in `phpMyAdmin`.
   - Import the provided SQL file (`campus_db.sql`) from the project directory.

   **Alternatively**, manually create the database structure by running the following SQL commands:
   ```sql
   CREATE DATABASE campus_db;

   USE campus_db;

   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nic VARCHAR(12) NOT NULL UNIQUE,
       name VARCHAR(255) NOT NULL,
       address VARCHAR(255) NOT NULL,
       tel_no VARCHAR(15) NOT NULL,
       course VARCHAR(255) NOT NULL
   );
   ```

4. **Configure the Database Connection**
   - Open the `connection.php` file in a text editor.
   - Update the database connection details as per your setup:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "campus_db";
     ```

5. **Run the Application**
   - Move the project folder into the `www` directory of your WAMP Server installation (e.g., `C:\wamp64\www\campus-management-system`).
   - Start WAMP Server and navigate to:
     ```
     http://localhost/campus-management-system/
     ```

## File Structure

```
campus-management-system/
│
├── index.php          // Login Page
├── register.php       // Student Registration Page
├── search.php         // Search Student Page
├── update.php         // Update Student Details Page
├── delete.php         // Delete Student Page
├── connection.php     // Database Connection
├── styles.css         // CSS File
```


## Additional Features (Optional)

- **Authentication**: Add role-based login for admin and users.
- **Data Export**: Export student data as CSV or Excel.
- **Responsive Design**: Make the UI mobile-friendly.

## Contributing

Contributions are welcome! If you’d like to contribute, please fork the repository and submit a pull request.

---

Developed for academic purposes as a simple campus management system.

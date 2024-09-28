# Gym Management System

The **Gym Management System** is a web application designed to provide an easy-to-use interface for gym users and a centralized database for administrators to maintain records of gym members, trainers, packages, and payments. It streamlines gym operations and helps manage memberships, trainer assignments, and payment tracking efficiently.

## Features

- **Member Registration**: Allows admins to register new members with essential details like name, email, and member ID.
- **Trainer Management**: Admins can assign trainers to members and manage trainer details.
- **Package Management**: View and manage gym packages offered to members.
- **Payment Tracking**: Track payments made by members for gym packages.
- **User-Friendly Interface**: A simple and responsive design for easy navigation.

## Technologies Used

- **HTML5**: For the structure and layout of the web pages.
- **CSS**: Styling the front end for a clean, modern look.
- **Bootstrap**: Used for responsive design and layout.
- **JavaScript**: Enhancing user interactivity.
- **PHP**: Backend logic to handle requests and data.
- **MySQL**: Storing and managing the gym data.

## Database

The database contains tables to store:
- **Members**: Information about the gym members.
- **Trainers**: Trainer details and their assignment to members.
- **Packages**: Gym packages available for members.
- **Payments**: Tracking member payments.

### Database Setup

1. Create a database named `loginsystem` in MySQL.
2. Import the `loginsystem.sql` file included in the repository to set up the required tables.

## Installation and Setup

### Prerequisites
- **XAMPP** or another PHP and MySQL environment.
- Web browser.

### Steps

1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/gym-management.git
2. Move the project files to your web server's root directory (e.g., C:/xampp/htdocs/ for XAMPP).
3. Create the loginsystem database and import the loginsystem.sql file using phpMyAdmin.
4. Start Apache and MySQL from XAMPP control panel.
5. Open your web browser and go to:
   ```bash
    http://localhost/gym-management/admin-panel.php
### Usage
Admin Panel: Access the admin panel to register new members, manage trainers, and track payments.
Member Functions: The system provides an intuitive interface for managing member details.
Contributing
Contributions are welcome! Feel free to fork this repository, create a new branch, and submit a pull request.

### License
This project is licensed under the MIT License - see the LICENSE file for details.

### Acknowledgments
### Bootstrap: For providing responsive front-end components.
### XAMPP: For local development environment.


This `README.md` gives a clear overview of your project, its features, setup instruction

## Screenshots
### Login Page
![login page](/images/login.png)
### Members registration page
![Members registration page](/images/member.png)

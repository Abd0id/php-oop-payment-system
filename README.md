# PHP OOP Payment System

A **PHP console application** for managing clients, orders, and different payment methods (Credit Card, Paypal, Bank Transfer) using **Object-Oriented Programming**, **PDO**, and **MySQL**.  

The project demonstrates clean architecture, UML modeling, and best practices in PHP 8.1+ development.

---

## Features

- Manage clients (create, view)
- Manage orders (create, associate with clients)
- Process payments polymorphically (independent of type)
- Data persistence with **PDO** in MySQL
- Strict OOP principles:
  - Classes & objects
  - Inheritance & polymorphism
  - Abstract classes & interfaces
  - Encapsulation with validation
  - Custom exceptions
- Clear separation of concerns (Entity / Service / Repository)
- Optional: interactive console menu and action logging (PSR-3)

---

## Project Structure
```
src/
├── Entity/
│   ├── Client.php
│   ├── Order.php
│   ├── Payment.php (abstract)
│   ├── CreditCard.php
│   ├── Paypal.php
│   └── BankTransfer.php
├── Interface/
│   └── PaymentInterface.php
├── Repository/
│   ├── ClientRepository.php
│   ├── OrderRepository.php
│   └── PaymentRepository.php
├── Service/
│   ├── OrderService.php
│   └── PaymentService.php
├── Exception/
│   ├── ValidationException.php
│   └── PaymentException.php
├── Database/
│   └── DatabaseConnection.php
├── Config/
│   └── database.php
└── index.php

docs/
├── class-diagram.png
└── use-case-diagram.png

sql/
└── schema.sql
```
---

## Requirements

- PHP 8.1+  
- MySQL or MariaDB  
- PDO enabled  
- Git (for version control)

---


## Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/Abd0id/php-oop-payment-system.git
   cd php-oop-payment-system

2. Configure the database in `src/Config/database.php` with your MySQL credentials.

3. Run the SQL script to create the database and tables:

   ```bash
   mysql -u your_username -p < sql/schema.sql
   ```

4. Run the application:

   ```bash
   php src/index.php
   ```


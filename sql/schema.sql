CREATE DATABASE payment_system;
USE payment_system;

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    total_amount DECIMAL(10,2) NOT NULL,
    status VARCHAR(50) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES clients(id)
);

CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    status VARCHAR(50) NOT NULL,
    payment_date DATETIME NOT NULL,
    type VARCHAR(50) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id)
);
CREATE TABLE credit_cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id INT NOT NULL,
    card_number VARCHAR(20) NOT NULL,
    FOREIGN KEY (payment_id) REFERENCES payments(id)
);

CREATE TABLE bank_transfers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id INT NOT NULL,
    bank_account VARCHAR(50) NOT NULL,
    FOREIGN KEY (payment_id) REFERENCES payments(id)
);

CREATE TABLE paypal_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    FOREIGN KEY (payment_id) REFERENCES payments(id)
);

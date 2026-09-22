CREATE DATABASE IF NOT EXISTS pos_system;
USE pos_system;

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Maria Santos', 'maria.santos@example.com', '0917-555-0101', NOW()),
('James Cruz', 'james.cruz@example.com', '0917-555-0102', NOW()),
('Angela Reyes', 'angela.reyes@example.com', '0917-555-0103', NOW()),
('Mark Dela Cruz', 'mark.delacruz@example.com', '0917-555-0104', NOW()),
('Sofia Garcia', 'sofia.garcia@example.com', '0917-555-0105', NOW());

INSERT INTO users (username, full_name, role, created_at) VALUES
('admin', 'Alex Rivera', 'Administrator', NOW()),
('cashier01', 'Jamie Santos', 'Cashier', NOW()),
('cashier02', 'Morgan Cruz', 'Cashier', NOW()),
('manager', 'Taylor Reyes', 'Manager', NOW()),
('staff01', 'Jordan Garcia', 'Staff', NOW());

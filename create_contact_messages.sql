-- SQL script to create a table for contact form submissions for PupWeb
CREATE DATABASE IF NOT EXISTS pupweb_payments;
USE pupweb_payments;

CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    email VARCHAR(80) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

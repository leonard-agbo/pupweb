-- SQL script to create a table for BTC payment billing info for PupWeb
CREATE DATABASE IF NOT EXISTS pupweb_payments;
USE pupweb_payments;

CREATE TABLE IF NOT EXISTS btc_payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(60) NOT NULL,
    address VARCHAR(120) NOT NULL,
    city VARCHAR(40) NOT NULL,
    state VARCHAR(40) NOT NULL,
    zip VARCHAR(12) NOT NULL,
    country VARCHAR(40) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

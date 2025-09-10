-- Create database
CREATE DATABASE IF NOT EXISTS inventory_sales_tracker;
USE inventory_sales_tracker;

-- Create products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barcode VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL
);

-- Create sales table
CREATE TABLE IF NOT EXISTS sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_barcode VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    sale_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_barcode) REFERENCES products(barcode) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Insert sample products
INSERT INTO products (barcode, name, price, quantity) VALUES
('123456789012', 'Sample Product A', 10.00, 50),
('987654321098', 'Sample Product B', 15.50, 30);

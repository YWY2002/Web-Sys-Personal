CREATE DATABASE IF NOT EXISTS inf1005_proj;
USE inf1005_proj;

-- List of Users 1..*
CREATE TABLE IF NOT EXISTS users (
	user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(45),
    lname VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    pwd VARCHAR(255) NOT NULL,
    hp_no INT(8),
    membership BOOLEAN NOT NULL DEFAULT 0,
    authority BOOLEAN NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- List of Products 1..1
CREATE TABLE IF NOT EXISTS products (
	product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(45) NOT NULL,
    product_desc VARCHAR(255) NOT NULL,
    category VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT UNSIGNED NOT NULL,
    available BOOLEAN NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- List of Bookings 1..*
CREATE TABLE IF NOT EXISTS bookings (
	booking_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    booking_status ENUM('pending', 'completed', 'cancelled') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Shopping Cart 1..*
CREATE TABLE IF NOT EXISTS cart_items (
    cart_items_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking_id INT UNSIGNED NOT NULL,
    product_id INT UNSIGNED NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT UNSIGNED NOT NULL DEFAULT 1,
    FOREIGN KEY (booking_id) REFERENCES bookings(booking_id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

-- Booking/Payment etc 1..1
CREATE TABLE IF NOT EXISTS booking_details (
    booking_details_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking_id INT UNSIGNED NOT NULL,
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    payment_mode ENUM('cash', 'debit', 'credit') NOT NULL,
    promocode VARCHAR(10),
    comments VARCHAR(45),
    FOREIGN KEY (booking_id) REFERENCES bookings(booking_id) ON DELETE CASCADE
);

-- Customer Reviews 1..1
CREATE TABLE IF NOT EXISTS reviews (
    review_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking_id INT UNSIGNED NOT NULL,
    review_title VARCHAR(45) NOT NULL,
    review_rating INT UNSIGNED NOT NULL CHECK (review_rating BETWEEN 1 AND 5),
    review_msg TEXT NOT NULL,
    reviewed BOOLEAN NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (booking_id) REFERENCES bookings(booking_id)
);
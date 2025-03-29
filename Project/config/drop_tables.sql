USE inf1005_proj;

-- Drop tables in the correct order to handle foreign key constraints
DROP TABLE IF EXISTS reviews;
DROP TABLE IF EXISTS booking_details;
DROP TABLE IF EXISTS cart_items;
DROP TABLE IF EXISTS bookings;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS users;
-- Create a database
CREATE DATABASE IF NOT EXISTS mydatabase;

-- Use the database
USE mydatabase;

-- Create a table for storing data
CREATE TABLE IF NOT EXISTS userdata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    user_id VARCHAR(50),
    file_path VARCHAR(255),
    image_path VARCHAR(255)
);

-- Create a table for storing feedback
CREATE TABLE IF NOT EXISTS feedback1 (
    feedback_id INT AUTO_INCREMENT PRIMARY KEY,
    feedname VARCHAR(50),
    feedback VARCHAR(255)
);


-- user registration




CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);



CREATE TABLE users1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);



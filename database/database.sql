-- Create the database
CREATE DATABASE bp24;

-- Switch to the database
USE bp24;

-- Create the Users table
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Create the Todo table
CREATE TABLE Todo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userId INT NOT NULL,
    todolist LONGTEXT,
    FOREIGN KEY (userId) REFERENCES Users(id)
);
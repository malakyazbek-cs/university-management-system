CREATE DATABASE IF NOT EXISTS uni
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE uni;

CREATE TABLE IF NOT EXISTS a_dmin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    passwd VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS st_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(255) NOT NULL,
    passwd VARCHAR(255) NOT NULL,
    Addres VARCHAR(255),
    gender VARCHAR(50),
    email VARCHAR(255),
    phone VARCHAR(50),
    major VARCHAR(255),
    filename VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS faculty (
    id INT AUTO_INCREMENT PRIMARY KEY,
    FacultyName VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO a_dmin (username, passwd) VALUES
('admin', 'admin123'),
('university_admin', 'uni123');

INSERT INTO st_info
(FullName, passwd, Addres, gender, email, phone, major, filename)
VALUES
('Malak Yazbek', 'malak123', 'Zahle, Bekaa', 'Female', 'malak.yazbek@example.com', '+96170123456', 'Computer Science', 'malak.jpg'),
('Omar Khoury', 'omar123', 'Beirut', 'Male', 'omar.khoury@example.com', '+96171234567', 'Computer Engineering', 'omar.jpg'),
('Maya Haddad', 'maya123', 'Tripoli', 'Female', 'maya.haddad@example.com', '+96176345678', 'Business Administration', 'maya.jpg'),
('Karim Nassar', 'karim123', 'Sidon', 'Male', 'karim.nassar@example.com', '+96103456789', 'Civil Engineering', 'karim.jpg'),
('Nour Khalil', 'nour123', 'Jounieh', 'Female', 'nour.khalil@example.com', '+96181567890', 'Graphic Design', 'nour.jpg'),
('Rami Saad', 'rami123', 'Baalbek', 'Male', 'rami.saad@example.com', '+96170678901', 'Information Technology', 'rami.jpg'),
('Layla Mansour', 'layla123', 'Aley', 'Female', 'layla.mansour@example.com', '+96171789012', 'Accounting', 'layla.jpg'),
('Hassan Ibrahim', 'hassan123', 'Tyre', 'Male', 'hassan.ibrahim@example.com', '+96176890123', 'Mechanical Engineering', 'hassan.jpg'),
('Rita Fares', 'rita123', 'Batroun', 'Female', 'rita.fares@example.com', '+96170987654', 'Nursing', 'rita.jpg'),
('Joseph Saliba', 'joseph123', 'Zahle, Bekaa', 'Male', 'joseph.saliba@example.com', '+96171987654', 'Architecture', 'joseph.jpg'),
('Dima Chahine', 'dima123', 'Beirut', 'Female', 'dima.chahine@example.com', '+96176987654', 'Pharmacy', 'dima.jpg'),
('Ali Hamdan', 'ali123', 'Nabatieh', 'Male', 'ali.hamdan@example.com', '+96103876543', 'Electrical Engineering', 'ali.jpg'),
('Sara Younes', 'sara123', 'Jbeil', 'Female', 'sara.younes@example.com', '+96181876543', 'Biology', 'sara.jpg'),
('Fadi Rahme', 'fadi123', 'Baabda', 'Male', 'fadi.rahme@example.com', '+96170876543', 'Business Management', 'fadi.jpg'),
('Mira Nasr', 'mira123', 'Chouf', 'Female', 'mira.nasr@example.com', '+96171876543', 'Psychology', 'mira.jpg');

INSERT INTO faculty (FacultyName, username, password) VALUES
('Faculty of Engineering', 'engineering', 'faculty123'),
('Faculty of Computer Science and Information Technology', 'computer_science', 'faculty123'),
('Faculty of Business Administration and Management', 'business', 'faculty123'),
('Faculty of Law and Political Science', 'law', 'faculty123'),
('Faculty of Arts and Humanities', 'arts', 'faculty123'),
('Faculty of Sciences', 'sciences', 'faculty123'),
('Faculty of Education', 'education', 'faculty123'),
('Faculty of Public Health', 'public_health', 'faculty123'),
('Faculty of Medicine', 'medicine', 'faculty123'),
('Faculty of Dentistry', 'dentistry', 'faculty123'),
('Faculty of Pharmacy', 'pharmacy', 'faculty123'),
('Faculty of Nursing', 'nursing', 'faculty123'),
('Faculty of Architecture and Design', 'architecture', 'faculty123'),
('Faculty of Agricultural Engineering', 'agriculture', 'faculty123'),
('Faculty of Fine Arts', 'fine_arts', 'faculty123'),
('Faculty of Tourism and Hospitality Management', 'tourism', 'faculty123'),
('Faculty of Media and Communication', 'media', 'faculty123'),
('Faculty of Social Sciences', 'social_sciences', 'faculty123'),
('Faculty of Economics', 'economics', 'faculty123'),
('Faculty of Information and Communication Technology', 'ict', 'faculty123');

SELECT * FROM a_dmin;
SELECT * FROM st_info;
SELECT * FROM faculty;

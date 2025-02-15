CREATE DATABASE victory_school;
USE victory_school;

-- Students Table
CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    admission_number VARCHAR(20) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    class VARCHAR(5) NOT NULL -- e.g., 2E, 3N
);

-- Clubs Table
CREATE TABLE clubs (
    club_id INT AUTO_INCREMENT PRIMARY KEY,
    club_name VARCHAR(100) UNIQUE NOT NULL,
    patron VARCHAR(100) NOT NULL,
    registration_fee DECIMAL(10,2) NOT NULL
);

-- Memberships Table
CREATE TABLE memberships (
    membership_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    club_id INT,
    role ENUM('General', 'Executive') NOT NULL,
    date_joined DATE NOT NULL,
    date_exited DATE DEFAULT NULL,
    FOREIGN KEY (student_id) REFERENCES students(student_id) ON DELETE CASCADE,
    FOREIGN KEY (club_id) REFERENCES clubs(club_id) ON DELETE CASCADE
);

-- Club Activities Table
CREATE TABLE club_activities (
    activity_id INT AUTO_INCREMENT PRIMARY KEY,
    club_id INT,
    activity_name VARCHAR(255) NOT NULL,
    activity_date DATE NOT NULL,
    amount_collected DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (club_id) REFERENCES clubs(club_id) ON DELETE CASCADE
);

-- Financial Records Table
CREATE TABLE club_finances (
    finance_id INT AUTO_INCREMENT PRIMARY KEY,
    club_id INT,
    total_revenue DECIMAL(10,2) NOT NULL,
    activity_budget DECIMAL(10,2) NOT NULL, -- 50% of total revenue
    party_budget DECIMAL(10,2) NOT NULL, -- 30% of total revenue
    school_contribution DECIMAL(10,2) NOT NULL, -- 70% of party budget
    savings DECIMAL(10,2) NOT NULL, -- Remaining 20%
    FOREIGN KEY (club_id) REFERENCES clubs(club_id) ON DELETE CASCADE
);

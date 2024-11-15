CREATE DATABASE placement_db;

use placement_db;

CREATE TABLE Students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    graduation_year INT,
    major VARCHAR(50)
);

CREATE TABLE Companies (
    company_id INT PRIMARY KEY AUTO_INCREMENT,
    company_name VARCHAR(100) NOT NULL,
    contact_person VARCHAR(50),
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    website VARCHAR(100)
);

CREATE TABLE Job_Postings (
    job_id INT PRIMARY KEY AUTO_INCREMENT,
    company_id INT,
    job_title VARCHAR(100) NOT NULL,
    job_description TEXT,
    requirements TEXT,
    salary DECIMAL(10, 2),
    date_posted DATE,
    FOREIGN KEY (company_id) REFERENCES Companies(company_id)
);

CREATE TABLE Applications (
    application_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    job_id INT,
    application_date DATE,
    status ENUM('Applied', 'Interview', 'Rejected', 'Accepted') DEFAULT 'Applied',
    FOREIGN KEY (student_id) REFERENCES Students(student_id),
    FOREIGN KEY (job_id) REFERENCES Job_Postings(job_id)
);

CREATE TABLE Interviews (
    interview_id INT PRIMARY KEY AUTO_INCREMENT,
    application_id INT,
    interview_date DATE,
    interview_time TIME,
    interview_location VARCHAR(100),
    feedback TEXT,
    FOREIGN KEY (application_id) REFERENCES Applications(application_id)
);

CREATE TABLE Placements (
    placement_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    job_id INT,
    placement_date DATE,
    FOREIGN KEY (student_id) REFERENCES Students(student_id),
    FOREIGN KEY (job_id) REFERENCES Job_Postings(job_id)
);

CREATE TABLE Skills (
    skill_id INT PRIMARY KEY AUTO_INCREMENT,
    skill_name VARCHAR(50) NOT NULL
);

CREATE TABLE Student_Skills (
    student_id INT,
    skill_id INT,
    PRIMARY KEY (student_id, skill_id),
    FOREIGN KEY (student_id) REFERENCES Students(student_id),
    FOREIGN KEY (skill_id) REFERENCES Skills(skill_id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

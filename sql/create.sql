--DROP TABLE Members

CREATE TABLE Members (
    MemberID int(10) unsigned NOT NULL AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(100) NOT NULL,
    first_name varchar(100) NOT NULL,
    last_name varchar(100) NOT NULL,
    business_name varchar(100) NOT NULL,
    creation_date TIMESTAMP DEFAULT now(),
    PRIMARY KEY (MemberID),
    UNIQUE KEY username (username)
); 

CREATE TABLE Businesses 
(
businessID int(10) NOT NULL AUTO_INCREMENT, 
name varchar(25) NOT NULL, 
memberID int(10) references Members, 
websiteID int(10) references Websites 
);

CREATE TABLE Websites 
(
websiteID int(10) NOT NULL AUTO_INCREMENT,
URL varchar(500) NOT NULL, 
memberID int(10) references Members, 
businessID references Businesses

);

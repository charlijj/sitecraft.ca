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
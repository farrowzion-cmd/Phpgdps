CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(32) UNIQUE,
    password VARCHAR(255),
    stars INT DEFAULT 0,
    diamonds INT DEFAULT 0,
    coins INT DEFAULT 0,
    demons INT DEFAULT 0
);

CREATE TABLE levels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    creator VARCHAR(32),
    difficulty VARCHAR(32) DEFAULT 'Unrated',
    downloads INT DEFAULT 0,
    likes INT DEFAULT 0,
    data LONGTEXT
);

INSERT INTO levels (name, creator, difficulty)
VALUES ('Abyssal Core', 'Server', 'Extreme Demon');
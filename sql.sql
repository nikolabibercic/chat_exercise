CREATE TABLE users(
	user_id int AUTO_INCREMENT PRIMARY KEY,
	username varchar(50) character set utf8 not null unique
);

CREATE TABLE messages(
	message_id int AUTO_INCREMENT PRIMARY KEY,
	user_id int not null,
    message varchar(250) character set utf8,
    timestamp int,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
CREATE TABLE qCategory (`id` INTEGER PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(100) NOT NULL);
INSERT INTO qCategory(name) VALUES ('main');

CREATE TABLE questions (`id` INT(11) PRIMARY KEY AUTO_INCREMENT, `question` VARCHAR(100) NOT NULL, `category` INT(11) NOT NULL, `sort_order` INT(11) NOT NULL, FOREIGN KEY(category) REFERENCES qCategory(id));
INSERT INTO questions (question, category, sort_order) VALUES ('I stand up for what I believe in.', 1, 1);
INSERT INTO questions (question, category, sort_order) VALUES ('I feel in control of my life and future.', 1, 2);
INSERT INTO questions (question, category, sort_order) VALUES ('I feel good about myself.', 1, 3);
INSERT INTO questions (question, category, sort_order) VALUES ('I avoid things that are dangerous or unhealthy.', 1, 4);
INSERT INTO questions (question, category, sort_order) VALUES ('I enjoy reading or being read to.', 1, 5);

CREATE DATABASE IF NOT EXISTS Survey;
USE Survey;
DROP TABLE IF EXISTS Users;

CREATE TABLE Users(UserID INT NOT NULL AUTO_INCREMENT, SchoolName VARCHAR(200),GradeLevel VARCHAR(20), Age VARCHAR(10), Gender VARCHAR(8), CONSTRAINT PRIMARY KEY(UserID));

ALTER TABLE Users AUTO_INCREMENT=1111;


DROP TABLE IF EXISTS Questions;

CREATE TABLE Questions(QuestionID VARCHAR(5), Description VARCHAR(150), CONSTRAINT PRIMARY KEY(QuestionID));


INSERT INTO Questions VALUES("q1","I am developing a sense of purpose");
INSERT INTO Questions VALUES("q2","I believe that my personal decisions can affect my health as well as the health of others");
INSERT INTO Questions VALUES("q3","I have a good sense of who I am, body image and self-esteem");
INSERT INTO Questions VALUES("q4","I feel good about and have a positive view of my personal future");
INSERT INTO Questions VALUES("q5","I feel good about myself");
INSERT INTO Questions VALUES("q6","I am involved in helping to make my community a better place");
INSERT INTO Questions VALUES("q7","I am encouraged to help others");
INSERT INTO Questions VALUES("q8","I feel that negative emotions can get me into trouble, at school, home, work and in the community");
INSERT INTO Questions VALUES("q9","I stand up for what I believe in");
INSERT INTO Questions VALUES("q10","I resist bad influences, and stay away from tobacco, alcohol, and other drugs");
INSERT INTO Questions VALUES("q11","I take responsibility for what I do");
INSERT INTO Questions VALUES("q12","I am eager to do well in school and other activities");
INSERT INTO Questions VALUES("q13"," I can improve my academic success if I have assistance with homework or other related issues");
INSERT INTO Questions VALUES("q14","I set goals that will help me to improve my academic success");
INSERT INTO Questions VALUES("q15","I feel understood at school");
INSERT INTO Questions VALUES("q16","I feel academically and socially challenged at school");
INSERT INTO Questions VALUES("q17","I enjoy learning, I do my homework, I care about school");
INSERT INTO Questions VALUES("q18","I feel understood at home");
INSERT INTO Questions VALUES("q19","I seek help in identifying the right choices to make in my life");
INSERT INTO Questions VALUES("q20","I have family support and adults who are good role models for me");
INSERT INTO Questions VALUES("q21","I seek advice from my parents");
INSERT INTO Questions VALUES("q22","I feel valued and appreciated by others");
INSERT INTO Questions VALUES("q23","I feel safe and secure at home");
INSERT INTO Questions VALUES("q24","I am encouraged to try things that might be good for me");
INSERT INTO Questions VALUES("q25","I am included in family responsibilities and decisions");
INSERT INTO Questions VALUES("q26","I usually have problems at home");
INSERT INTO Questions VALUES("q27","I am involved in creative things such as music, theater, or art");
INSERT INTO Questions VALUES("q28","I deal with frustration and overcome challenges in positive ways");
INSERT INTO Questions VALUES("q29","I plan ahead and make good choices");
INSERT INTO Questions VALUES("q30","I resolve conflicts without anyone getting hurt");
INSERT INTO Questions VALUES("q31","I avoid things that are dangerous and unhealthy");
INSERT INTO Questions VALUES("q32","I express feelings in proper ways");
INSERT INTO Questions VALUES("q33","I know how to avoid negative peer pressure and influences from best friends and acquaintances");
INSERT INTO Questions VALUES("q34","I feel that I am in control of my emotions, and rarely feel violent or angry towards others");
INSERT INTO Questions VALUES("q35","I have friends who set good examples for me");
INSERT INTO Questions VALUES("q36","I know how to resolve conflict with my peers");
INSERT INTO Questions VALUES("q37","I stand up against bullying, peer pressure, and negative influences from peers and others");


DROP TABLE IF EXISTS PostTest;

CREATE TABLE PostTest(UserID INT, QuestionID VARCHAR(5), Answers VARCHAR(100), CONSTRAINT FOREIGN KEY(UserID) REFERENCES Users(UserID), CONSTRAINT FOREIGN KEY(QuestionID) REFERENCES Questions(QuestionID));


DROP TABLE IF EXISTS PreTest;

CREATE TABLE PreTest(UserID INT, QuestionID VARCHAR(5), Answers VARCHAR(100), CONSTRAINT FOREIGN KEY(UserID) REFERENCES Users(UserID), CONSTRAINT FOREIGN KEY(QuestionID) REFERENCES Questions(QuestionID));




CREATE TABLE album (id INTEGER PRIMARY KEY AUTOINCREMENT, artist varchar(100) NOT NULL, title varchar(100) NOT NULL);
INSERT INTO album (artist, title) VALUES ('The Military Wives', 'In My Dreams');
INSERT INTO album (artist, title) VALUES ('Adele', '21');
INSERT INTO album (artist, title) VALUES ('Bruce Springsteen', 'Wrecking Ball (Deluxe)');
INSERT INTO album (artist, title) VALUES ('Lana Del Rey', 'Born To Die');
INSERT INTO album (artist, title) VALUES ('Gotye', 'Making Mirrors');


CREATE TABLE evaluation_answers (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  surveyby_u_id varchar(45) DEFAULT NULL,
  surveyfor_u_id varchar(45) DEFAULT NULL,
  sur_type varchar(45) DEFAULT NULL,
  answers text,
  date_taken date DEFAULT NULL
);

INSERT INTO evaluation_answers VALUES (1,'1','1','USER','3,4,5,4,4,4,5,5,5,3,5,5,5,3,3,5,5,5,5,5,5,4,3,5,5,3,3,4,4,4,5,5,5,5,5,5,3,5,5,4,4,5,5,5,4,5,4,4,5,4,4,4,4,4,4,4,4,5,4,5,5,5,5,5,,,,,,,,,,,,','2015-05-26'),(2,'2','1','ADMIN','4,3,3,2,5,5,4,3,4,2,5,2,2,2,1,4,3,3,4,2,4,4,4,4,3,2,2,5,5,4,4,4,4,3,2,3,3,1,3,3,2,2,3,3,3,4,4,4,5,2,2,3,3,3,3,3,2,2,2,5,5,4,4,5,,,,,,,,,,,,','2015-05-26'),(3,'1','1','USER','3,3,3,4,3,4,3,3,4,3,3,3,3,3,3,2,3,3,3,4,3,4,4,3,3,3,3,3,4,3,4,3,4,4,3,4,3,4,4,4,3,2,2,3,4,4,3,3,4,4,4,3,4,3,3,3,4,3,3,4,4,4,4,4,,,,,,,,,,,,this is a comment','2015-06-04'),(4,'2','1','ADMIN','5,4,4,5,4,4,4,4,4,4,5,4,4,4,4,3,3,3,3,3,3,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3,4,4,4,4,4,4,4,4,4,4,3,3,3,3,3,4,4,4,4,4,,,,,,,,,,,,','2015-06-05');

CREATE TABLE evaluation_categories (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name varchar(45) DEFAULT NULL
);

INSERT INTO evaluation_categories VALUES (1,'Communications'),(2,'Cooperation'),(3,'Cost Consciousness'),(4,'Dependability'),(5,'Initiative'),(6,'Job Knowledge'),(7,'Judgement'),(8,'Planning & Organization'),(9,'Problem Solving'),(10,'Quality'),(11,'Quantity'),(12,'Use of Technology');

CREATE TABLE evaluation_questions (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  category_id varchar(45) DEFAULT NULL,
  text varchar(150) DEFAULT NULL
);

INSERT INTO evaluation_questions VALUES (1,'1','Expresses ideas and thoughts verbally'),(2,'1','Expresses ideas and thoughts in written form'),(3,'1','Exhibits good listening and comprehension'),(4,'1','Keeps others adequately informed'),(5,'1','Uses appropriate communication methods'),(6,'2','Establishes and maintians effective relations'),(36,'2','Exhibits tact and consideration'),(37,'2','Displays positive outlook and pleasant manner'),(38,'2','Offers assistance and support to coworkers'),(39,'2','Works actively to resolve conflicts'),(40,'2','Works cooperatively in group situations'),(41,'3','Works within approved budget'),(42,'3','Conserves organizational resources'),(43,'3','Develops and implements cost-saving measures'),(44,'3','Contributes to profits and revenue'),(45,'4','Follows instructions, responds to management'),(46,'4','Takes responsibility for own actions'),(47,'4','Commits to doing best job possible'),(48,'4','Keeps commitments'),(49,'4','Meets attendance and punctuality guidelines'),(56,'5','Volunteers readily'),(57,'5','Undertakes self-development activities'),(58,'5','Seeks increased responsibilities'),(59,'5','Takes independent actions and calculated risk'),(60,'5','Asks for help when needed'),(62,'6','Exhibits ability to learn and apply new skill'),(70,'5','Looks for and takes advantage of opportunity '),(72,'4','Responds to requests for service and help'),(73,'6','Competent in required job skills'),(74,'6','Keeps abreast of current developments'),(75,'6','Requires minimal supervision'),(76,'6','Displays understanding of how job relates '),(77,'6','Uses resources effectively'),(78,'7','Displays willingness to make decisions'),(79,'7','Makes timely decisions'),(80,'7','Exhibits sound and accurate judgment'),(81,'7','Supports and explains reasoning for decisions'),(82,'7','Includes appropriate people in decision-makin'),(83,'8','Prioritizes and plans work activities'),(84,'8','Uses time efficiently'),(85,'8','Plans for additional resources'),(86,'8','Integrates changes smoothly'),(87,'8','Sets goals and objectives'),(88,'8','Works in an organized manner'),(89,'9','Identifies problems in a timely manner'),(90,'9','Gathers and analyzes information skillfully'),(91,'9','Develops alternative solutions'),(92,'9','Resolves problems in early stages'),(93,'9','Works well in group problem-solving situation'),(94,'10','Demonstrates accuracy and thoroughness'),(95,'10','Displays commitment to excellence'),(96,'10','Looks for ways to improve and promote quality'),(97,'10','Applies feedback to improve performance'),(98,'10','Monitors own work to ensure quality'),(99,'11','Meets productivity standards'),(100,'11','Completes work in timely manner'),(101,'11','Strives to increase productivity'),(102,'11','Works quickly'),(103,'11','Achieves established goals'),(104,'12','Demonstrates required skills'),(105,'12','Adapts to new technologies'),(106,'12','Troubleshoots problems'),(107,'12','Uses technology to increase productivity'),(108,'12','Keeps technical skills up to date');

CREATE TABLE evaluation_users (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  username varchar(124) DEFAULT NULL,
  key varchar(524) DEFAULT NULL,
  role    CHAR(5)       NOT NULL DEFAULT ('user') REFERENCES evaluation_role_type(role_type),
  userSurvey int(11) DEFAULT NULL,
  adminSurvey int(11) DEFAULT NULL
);

CREATE TABLE evaluation_role_type (
  role_type TEXT PRIMARY KEY NOT NULL,
  role_id INTEGER
);

INSERT INTO evaluation_role_type(role_type, role_id) VALUES ('reserved',1);
INSERT INTO evaluation_role_type(role_type, role_id) VALUES ('admin',2);
INSERT INTO evaluation_role_type(role_type, role_id) VALUES ('user',3);

INSERT INTO evaluation_users VALUES (1,'test','5adafb7d60ef4c9d0d83b973d309b4dff1e0a5474badb1c16362f2002745839f6e407a2a69daaa63e4a41a74bbf490e03bc367a22030fdbe9474fa13d81f4396','user',3,4),(2,'admin','ba6c064dfdb1b7b4938bf82585a8332c89270303b6d75007f0b25feffe33b90bd34d3732acf4be708c85708c39ff6c28b87235663238b8fbfe2c4439258cc883','admin',0,4),(75,'cheitlage','05012a95088fefbccc18a6740ee3ec620dc5731e2beba043748b65308623ab8c1d096a5a2f2188e4a1ec683a1e9a77a681de6882cfa61918bbfed56fb95a72b6','user',0,0),(76,'rlawrence','4678e7f7175c3854f5e11c2ef115541104c239f27874c5599d09c66d29980554b58c6c5e220d86637b6c073202fcb054405974ff6fcb3558637da6bd46311f82','user',0,0);

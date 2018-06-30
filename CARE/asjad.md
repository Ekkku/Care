mysql -u root -p care
kasutaja 
TRUNCATE TABLE

UPDATE questions SET checkbox=0 WHERE checkbox=1;

parool hoolimine

CREATE DATABASE IF NOT EXISTS care CHARACTER SET = 'utf8';

CREATE TABLE IF NOT EXISTS player(
    first_name VARCHAR(30) NOT NULL,
    password INT(6),
    points INT,
    player_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);
    
INSERT INTO player VALUE('Egle', '878123',  NULL);
  
  
    
CREATE TABLE IF NOT EXISTS answers(
    choice VARCHAR(255),
    TrueOrFalse ENUM('T', 'F'),
    question_id INT UNSIGNED NOT NULL,
    answers_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);
    
CREATE TABLE IF NOT EXISTS result(
    player_id INT UNSIGNED NOT NULL,
    answer_id INT UNSIGNED NOT NULL,
    result_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);    
    
INSERT INTO answers VALUE('Õnnetu', 'T', '1',NULL);

INSERT INTO answers VALUES
    ('Uudishimulikuna', 'T', '10',NULL), 
    ('Igatsevalt', 'F', '10',NULL),
    ('Üksildasena', 'F', '10',NULL),
    ('Rõõmsalt', 'T', '10',NULL);
    
CREATE TABLE IF NOT EXISTS questions(
    TheQuestion VARCHAR(255) NOT NULL,
    questions_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);

    
INSERT INTO questions VALUE
    ('Sinu peale karjuti terve klassi ees. Kuidas sa ennast tundsid?', NULL);
    
UPDATE Customers
    SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
    WHERE CustomerID = 1;
    
UPDATE questions
    SET TheQuestion = 'Sa õppisid kontrolltööks, aga said ikkagi halva hinde. Kuidas sa ennast tundsid?'
    WHERE questions_id=2;
    
ALTER TABLE questions
    ADD COLUMN checkbox
    SET ('+');  
    
CREATE TABLE `care`.`login_attempts` (
    `player_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB    

hoohoohool1minemineminemine


           function chkcontrol(j) {
              var total=0;
              for(var i=0; i < document.form1.ckb.length; i++){
              if(document.form1.ckb[i].checked){
              total =total +1;
              }
              if(total > 9){
              alert("Valige üheksa!")
              document.form1.ckb[j].checked = false ;
              return false;
        }
    }
} 
    
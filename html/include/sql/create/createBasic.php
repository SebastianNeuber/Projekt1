<!-- Einmal ausführen sonst wird das nix! -->
<?php
require('dbcon.php');

$createTable = $connection->query(
    'CREATE TABLE teacher( 
teacher_id INT AUTO_INCREMENT,
name VARCHAR(255),
PRIMARY KEY(teacher_id))
ENGINE = INNODB'
);

$createTable = $connection->query(
    'CREATE TABLE note( 
note_id INT AUTO_INCREMENT,
note VARCHAR(255),
PRIMARY KEY(note_id))
ENGINE = INNODB'
);

$createTable = $connection->query(
    'CREATE TABLE questions( 
question_id INT AUTO_INCREMENT,
question VARCHAR(255),
PRIMARY KEY(question_id))
ENGINE = INNODB'
);

$createTable = $connection->query(
    'CREATE TABLE results( 
result_id INT AUTO_INCREMENT PRIMARY KEY,
question_id INT(255),
teacher_id INT(255),
note_id INT(255),
FOREIGN KEY (question_id)
REFERENCES questions(question_id),
FOREIGN KEY (teacher_id)
REFERENCES teacher(teacher_id),
FOREIGN KEY (note_id)
REFERENCES note(note_id)
)
ENGINE = INNODB'
);


$insert = $connection->query(
    "INSERT INTO teacher(name)
    VALUES 
    ('Alex');"
);
$insert = $connection->query(
    "INSERT INTO teacher(name)
    VALUES 
    ('Jochen');"
);
$insert = $connection->query(
    "INSERT INTO teacher(name)
    VALUES 
    ('Oli');"
);
$insert = $connection->query(
    "INSERT INTO teacher(name)
    VALUES 
    ('Dennis');"
);
$insert = $connection->query(
    "INSERT INTO teacher(name)
    VALUES 
    ('Mike');"
);
$insert = $connection->query(
    "INSERT INTO note(note)
    VALUES 
    ('1');"
);
$insert = $connection->query(
    "INSERT INTO note(note)
    VALUES 
    ('2');"
);
$insert = $connection->query(
    "INSERT INTO note(note)
    VALUES 
    ('3');"
);
$insert = $connection->query(
    "INSERT INTO note(note)
    VALUES 
    ('4');"
);
$insert = $connection->query(
    "INSERT INTO note(note)
    VALUES 
    ('5');"
);
$insert = $connection->query(
    "INSERT INTO note(note)
    VALUES 
    ('6');"
);
$insert = $connection->query(
    "INSERT INTO questions(question)
    VALUES 
    ('Notenvergabe');"
);

$insert = $connection->query(
    "INSERT INTO questions(question)
    VALUES 
    ('Pünktlichkeit');"
);

$insert = $connection->query(
    "INSERT INTO questions(question)
    VALUES 
    ('Vorbereitung');"
);

$insert = $connection->query(
    "INSERT INTO questions(question)
    VALUES 
    ('Unterricht');"
);

$insert = $connection->query(
    "INSERT INTO questions(question)
    VALUES 
    ('Fragenverständnis');"
);

$insert = $connection->query(
    "INSERT INTO questions(question)
    VALUES 
    ('Beantwortung');"
);



$connection = null;

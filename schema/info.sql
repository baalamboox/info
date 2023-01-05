CREATE DATABASE IF NOT EXISTS info;
USE info;
CREATE TABLE IF NOT EXISTS person(
    person_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    person_names VARCHAR(32) NOT NULL,
    person_first_surname VARCHAR(32) NOT NULL,
    person_second_surname VARCHAR(32) NOT NULL,
    person_sex VARCHAR(16),
    person_email VARCHAR(64),
    person_phone_number VARCHAR(16)
) ENGINE = InnoDB;
INSERT INTO person(person_names, person_first_surname, person_second_surname, person_sex, person_email, person_phone_number) VALUES (
    "Guillermo", "Jiménez", "Montes", "Masculino", "jmg201098@gmail.com", "5532982057"
),
(
    "Karol Rubi", "Alvarado", "Castro", "Femenino", "karol20@gmail.com", "5598693654"
),
(
    "David", "Medina", "Sanchéz", "Masculino", "david_medina@gmail.com", "5598623658"
),
(
    "Flor Tulia", "Valle", "Castañeda", "Femenino", "flor@gmail.com", "5598419650"
),
(
    "Ismael", "Jiménez", "Valle", "Masculino", "ismael_jimenez@gmail.com", "5598693654"
);
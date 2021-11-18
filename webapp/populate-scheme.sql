INSERT INTO department(id,name)
VALUES  
    ('1','Engineering'),
    ('2','Natural Sciences'),
    ('3','Social Sciences, Humanities and Arts');

INSERT INTO advisor(id, name, email, d_code)
VALUES  
    ('1001','Luz Sandoval Manjarrez', 'lsandoval5@ucmerced.edu','1'),
    ('1002','Cristina Mayo-Hessler', 'cmayo@ucmerced.edu','2'),
    ('1003','Phung Colvin', 'pcolvin@ucmerced.edu','3');

INSERT INTO professor(id, name, email, d_code)
VALUES  
    ('2001','John Abatzoglou', 'jabatzoglou@ucmerced.edu','3'),
    ('2002','Mariana Abuan', 'mabuan@ucmerced.edu','3'),
    ('2003','Virginia Adan-Lifante', 'vadan-lifante@ucmerced.edu','3'),
    ('2004','Alberto Aguilera', 'aaguilera@ucmerced.edu','3'),
    ('2005','Keith Alley', 'kalley@ucmerced.edu','3'),
    ('2006','Paul Almeida', 'palmeida@ucmerced.edu','3'),
    ('2007','Marisol Alonso', 'malsonso4@ucmerced.edu','3'),
    ('2008','Meaghan Altman', 'maltman2@ucmerced.edu','3'),
    ('2009','Lorena Alvarado', 'lalvarado10@ucmerced.edu','3'),
    ('2010','Alberto Cerpa', 'acerpa@ucmerced.edu','2'),
    ('2011','Erica Rutter', 'erutter2@ucmerced.edu','2'),
    ('2012','Karl Ryavec', 'kryavec@ucmerced.edu','2'),
    ('2013','Rachel Ryskin', 'rryskin@ucmerced.edu','2'),
    ('2014','Michael Scheibner', 'mscheibner@ucmerced.edu','2'),
    ('2015','Rose Scott', 'rscott@ucmerced.edu','2'),
    ('2016','Steven Seltzer', 'sseltzer@ucmerced.edu','2'),
    ('2017','Mukesh Singhal', 'msinghal@ucmerced.edu','2'),
    ('2018','Joel Spencer', 'joel.spencer@ucmerced.edu','2'),
    ('2019','Yang Lor', 'ylor2@ucmerced.edu','2'),
    ('2020','Wan Du', 'wdu3@ucmerced.edu','2'),
    ('2021','Christian Fons-Rosen', 'cfons-rosen@ucmerced.edu','2'),
    ('2022','Humberto Garcia', 'hgarcia22@ucmerced.edu','2'),
    ('2023','Glynis Gawn', 'ggawn@ucmerced.edu','2'),
    ('2024','Paul Gibbons', 'pgibbons@ucmerced.edu','1'),
    ('2025','Hanna Gunn', 'hgunn@ucmerced.edu','1'),
    ('2026','Sandie Ha', 'sha55@ucmerced.edu','1'),
    ('2027','Martin Hagger', 'mhagger@ucmerced.edu','1'),
    ('2028','Mark Harris', 'mharris4@ucmerced.edu','1'),
    ('2029','Evan Heit', 'eheit@ucmerced.edu','1'),
    ('2030','Justin Hicks', 'jhicks2@ucmerced.edu','1');

INSERT INTO clubs(id, name, advisor, president)
VALUES  
    ('3001','Chess Club', 'John Abatzoglou', 'Justin Au'),
    ('3002','Go-Kart Racing', 'Alberto Cerpa', 'Angel Alvarez'),
    ('3003','Radio Club', null, null),
    ('3004','Anthropology Society Club', null, null);

INSERT INTO student(id, name, email)
VALUES  
    ('4001','Angel Alvarez', 'aalvarez@ucmerced.edu'),
    ('4002','Justin Au', 'jau1@ucmerced.edu'),
    ('4003','Hunter Bailey', 'hbailey34@ucmerced.edu'),
    ('4004','Scott Garcia', 'sgarcia12@ucmerced.edu');

    INSERT INTO courses(number, name, p_name, d_code)
    VALUES  
        ('ANTH-003', 'Anthropological Archeaology', 'Evan Heit', '3'),
        ('ANTH-010', 'Quantitative Methods', 'Martin Hagger', '3'),
        ('CRES-001', 'Intro Crit Race & Ethn Studies', 'Sandie Ha', '3'),
        ('CRES-052', 'Power in Film', 'Hanna Gunn', '3'),
        ('CRES-100', 'Race and the Media', 'Sandie Ha', '3'),
        ('ECON-005', 'Intro to Business & Finance', 'Erica Rutter', '3'),
        ('ECON-010', 'Statistical Inference', 'Justin Hicks', '3'),
        ('ECON-100', 'Interm Microeconomics Theory', 'Humberto Garcia', '3'),
        ('BIO-001', 'Contemporary Biology', 'Christian Fons-Rosen', '2'),
        ('BIO-002', 'Introduction Molecular Biology', 'Wan Du', '2'),
        ('BIO-060', 'Nutrition', 'Yang Lor', '2'),
        ('BIO-101', 'Biochemistry 1', 'Christian Fons-Rosen', '2'),
        ('CHEM-001', 'Preparatory Chemistry', 'Rose Scott', '2'),
        ('CHEM-002', 'General Chemistry 1', 'Wan Du', '2'),
        ('CHEM-100', 'Organic Synth and Mechanism', 'Rose Scott', '2'),
        ('CHEM-122', 'Biochemistry 2', 'Wan Du', '2'),
        ('CHEM-130', 'Org Spectrosc and Computation', 'Christian Fons-Rosen', '2'),
        ('CSE-022', 'Intro to Progamming', 'Alberto Cerpa', '1'),
        ('CSE-024', 'Advance Programming', 'Alberto Cerpa', '1'),
        ('CSE-100', 'Algorithm Design and Analysis', 'Lorena Alvarado', '1'),
        ('CSE-120', 'Software Engineering', 'Meaghan Altman', '1'),
        ('CSE-140', 'Computer Architecture', 'Michael Scheibner', '1'),
        ('ENGR-045', 'Introduction to Materials', 'Mukesh Singhal', '1'),
        ('ENGR-057', 'Statics and Dynamics', 'Rachel Ryskin', '1'),
        ('ENGR-065', 'Circuit Theory', 'Mukesh Singhal', '1'),
        ('ENGR-120', 'Fluid Mechanics', 'Karl Ryavec', '1'),
        ('ENGR-135', 'Heat Transfer', 'Marisol Alonso', '1'),
        ('ENGR-151', 'Strength of Materials', 'Rachel Ryskin', '1'),
        ('ENGR-170', 'Intro to Electron Micro', 'Mukesh Singha', '1'),
        ('ME-021', 'Engineering Computing', 'Paul Almeida', '1'),
        ('ME-120', 'Component Design', 'Keith Alley', '1'),
        ('ME-135', 'Finite Element Analysis', 'Paul Almeida', '1'),
        ('ME-140', 'Vibration and Control', 'Alberto Aguilera', '1');

    INSERT INTO members(s_id, cb_id, cb_name, s_name)
    VALUES  
        ('4001','3001','Chess Club','Angel Alvarez'),
        ('4002','3001','Chess Club','Justin Au'),
        ('4003','3001','Chess Club','Hunter Bailey'),
        ('4004','3001','Chess Club','Scott Garcia'),
        ('4006','3001','Chess Club','Levi Beck'),
        ('4005','3001','Chess Club','Erik Gonalez'),
        ('4007','3002','Go-Kart Racing','Marc Martinez'),
        ('4008','3002','Go-Kart Racing','Luis Ruiz'),
        ('4010','3002','Go-Kart Racing','Mau Rosas'),
        ('4009','3002','Go-Kart Racing','Hamza Nure'),
        ('4012','3003','Radio Club','Gustavo Valdez'),
        ('4024','3003','Radio Club','Stephanie Gamino'),
        ('4018','3004','Anthropology Society Club','Jose Rivera'),
        ('4002','3004','Anthropology Society Club','Justin Au'),
        ('4010','3004','Anthropology Society Club','Mau Rosas');

INSERT INTO studies(s_id, major, minor)
VALUES  
    ('4001','Engineering', 'Social Sciences'),
    ('4002','Engineering', 'Natural Sciences');

INSERT INTO studies(s_id, major, minor)
VALUES 
    ('4003','Natural Sciences', null),
    ('4004','Social Sciences', null);


INSERT INTO takes(s_id, c_number, grade)
VALUES
    ('4001','ENGR-045', 'B'),
    ('4001','CRES-052', 'A'),
    ('4001','ENGR-065', 'A'),
    ('4002','BIO-001', 'B'),
    ('4002','ENGR-057', 'A'),
    ('4002','ENGR-065', 'A'),
    ('4003','BIO-001', 'B'),
    ('4003','BIO-060', 'A'),
    ('4003','CHEM-100', 'A'),
    ('4004','CRES-052', 'B'),
    ('4004','ANTH-010', 'A'),
    ('4004','ANTH-003', 'A');

INSERT INTO login(id, username, password, role)
VALUES
    ('4001', 'aalvarez@ucmerced.edu', 'angel4001', 'student'),
    ('4002', 'jau1@ucmerced.edu', 'justin4002', 'student'),
    ('4003', 'hbailey34@ucmerced.edu', 'hunter4003', 'sudent'),
    ('1001','lsandoval5@ucmerced.edu', 'sandoval1001', 'advisor'),
    ('1002','cmayo@ucmerced.edu', 'mayo1002', 'advisor'),
    ('1003','pcolvin@ucmerced.edu', 'colvin1003', 'advisor'),
    ('2001','jabatzoglou@ucmerced.edu', 'abatzog2001', 'professor'),
    ('2002','mabuan@ucmerced.edu', 'abuan2002', 'professor'),
    ('2003','vadan-lifante@ucmerced.edu', 'lifante2003', 'professor'),
    ('1000', 'cniles@ucmerced.edu', 'niles1000', 'admin');

-- DROP TABLE department;
-- DROP TABLE advisor;
-- DROP TABLE professor;
-- DROP TABLE clubs;
-- DROP TABLE student;
-- DROP TABLE courses;
-- DROP TABLE members;
-- DROP TABLE studies;
-- DROP TABLE takes;
-- DROP TABLE login;
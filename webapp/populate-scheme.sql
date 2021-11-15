INSERT INTO department(name)
VALUES  
    ('Engineering'),
    ('Natural Sciences'),
    ('Social Sciences, Humanities and Arts');

INSERT INTO advisor(id, name, email)
VALUES  
    ('1001','Luz Sandoval Manjarrez', 'lsandoval5@ucmerced.edu'),
    ('1002','Cristina Mayo-Hessler', 'cmayo@ucmerced.edu'),
    ('1003','Phung Colvin', 'pcolvin@ucmerced.edu'),
    ('1004','Pa Vang', 'pvang48@ucmerced.edu'),
    ('1005','Erica Robbins', 'erobins2@ucmerced.edu'),
    ('1006','Jenn Souza', 'jsouza5@ucmerced.edu'),
    ('1007','Jose Martinez', 'jmartinez343@ucmerced.edu'),
    ('1008','Maricela Melendrez', 'mmelendrez2@ucmerced.edu'),
    ('1009','Lauren Brackett', 'ibrackett@ucmerced.edu'),
    ('1010','Kitsya Macias', 'kmacias9@ucmerced.edu'),
    ('1011','Carolyn Barranco', 'cbarranco@ucmerced.edu'),
    ('1012','Amandip Singh', 'asingh99@ucmerced.edu');

INSERT INTO professor(id, name, email)
VALUES  
    ('2001','John Abatzoglou', 'jabatzoglou@ucmerced.edu'),
    ('2002','Mariana Abuan', 'mabuan@ucmerced.edu'),
    ('2003','Virginia Adan-Lifante', 'vadan-lifante@ucmerced.edu'),
    ('2004','Alberto Aguilera', 'aaguilera@ucmerced.edu'),
    ('2005','Keith Alley', 'kalley@ucmerced.edu'),
    ('2006','Paul Almeida', 'palmeida@ucmerced.edu'),
    ('2007','Marisol Alonso', 'malsonso4@ucmerced.edu'),
    ('2008','Meaghan Altman', 'maltman2@ucmerced.edu'),
    ('2009','Lorena Alvarado', 'lalvarado10@ucmerced.edu'),
    ('2010','Alberto Cerpa', 'acerpa@ucmerced.edu'),
    ('2011','Erica Rutter', 'erutter2@ucmerced.edu'),
    ('2012','Karl Ryavec', 'kryavec@ucmerced.edu'),
    ('2013','Rachel Ryskin', 'rryskin@ucmerced.edu'),
    ('2014','Michael Scheibner', 'mscheibner@ucmerced.edu'),
    ('2015','Rose Scott', 'rscott@ucmerced.edu'),
    ('2016','Steven Seltzer', 'sseltzer@ucmerced.edu'),
    ('2017','Mukesh Singhal', 'msinghal@ucmerced.edu'),
    ('2018','Joel Spencer', 'joel.spencer@ucmerced.edu'),
    ('2019','Yang Lor', 'ylor2@ucmerced.edu'),
    ('2020','Wan Du', 'wdu3@ucmerced.edu'),
    ('2021','Christian Fons-Rosen', 'cfons-rosen@ucmerced.edu'),
    ('2022','Humberto Garcia', 'hgarcia22@ucmerced.edu'),
    ('2023','Glynis Gawn', 'ggawn@ucmerced.edu'),
    ('2024','Paul Gibbons', 'pgibbons@ucmerced.edu'),
    ('2025','Hanna Gunn', 'hgunn@ucmerced.edu'),
    ('2026','Sandie Ha', 'sha55@ucmerced.edu'),
    ('2027','Martin Hagger', 'mhagger@ucmerced.edu'),
    ('2028','Mark Harris', 'mharris4@ucmerced.edu'),
    ('2029','Evan Heit', 'eheit@ucmerced.edu'),
    ('2030','Justin Hicks', 'jhicks2@ucmerced.edu');

INSERT INTO clubs(id, name, advisor, president)
VALUES  
    ('3001','Chess Club', 'John Abatzoglou', 'Justin Au'),
    ('3002','Go-Kart Racing', 'Alberto Cerpa', 'Hamza Nure'),
    ('3003','Radio Club', 'Yang Lor', 'Stephanie Gamino'),
    ('3004','Anthropology Society Club', 'Sandie Ha', 'Jose Rivera'),
    ('3005','Pi Kappa Phi', 'palmeida@ucmerced.edu', 'Mario Perez'),
    ('3006','Pi Lamda Phi','jhicks2@ucmerced.edu' ,'Jaylen Brown'),
    ('3007','Sigma Chi','kalley@ucmerced.edu' ,'Levi Beck'),
    ('3008','Kappa Sigma', 'pgibbons@ucmerced.edu', 'Adan Snitches'),
    ('3009','Delta Gamma','malsonso4@ucmerced.edu','Sofia Ruz'),
    ('3010','Tri Delta', 'jhicks2@ucmerced.edu', 'Zaida Smith'),
    ('3011','Phi Mu','ggawn@ucmerced.edu', 'Citlali Perez'),
    ('3012','Kappa Kappa Kappa','mabuan@ucmerced.edu', 'Bella Griffin');

INSERT INTO student(id, name, email)
VALUES  
    ('4001','Angel Alvarez', 'aalvarez@ucmerced.edu'),
    ('4002','Justin Au', 'jau1@ucmerced.edu'),
    ('4003','Hunter Bailey', 'hbailey34@ucmerced.edu'),
    ('4004','Scott Garcia', 'sgarcia12@ucmerced.edu'),
    ('4005','Erik Gonalez', 'egonalez84@ucmerced.edu'),
    ('4006','Levi Beck', 'lbeck5@ucmerced.edu'),
    ('4007','Marc Martinez', 'mmartinez65@ucmerced.edu'),
    ('4008','Luis Ruiz', 'lruiz21@ucmerced.edu'),
    ('4009','Hamza Nure', 'hnure2@ucmerced.edu'),
    ('4010','Mau Rosas', 'mrosas5@ucmerced.edu'),
    ('4011','Spencer Tang', 'stang@ucmerced.edu'),
    ('4012','Gustavo Valdez', 'gvaldez34@ucmerced.edu'),
    ('4013','Enrique Valencia', 'evalencia67@ucmerced.edu'),
    ('4014','Mario Perez', 'mperez34@ucmerced.edu'),
    ('4015','Erik Aguilar', 'eaguilar88@ucmerced.edu'),
    ('4016','Jose Arrieta', 'jarrieta3@ucmerced.edu'),
    ('4017','Jaylen Brown', 'jbrown@ucmerced.edu'),
    ('4018','Jose Rivera', 'jrivera4@ucmerced.edu'),
    ('4019','Adan Snitches', 'dbernabe@ucmerced.edu'),
    ('4020','Andy Alvarenga', 'aalvarenga@ucmerced.edu'),
    ('4021','Eric Angel', 'eangel23@ucmerced.edu'),
    ('4022','Luis Chavez', 'lchavez39@ucmerced.edu'),
    ('4023','Tommy Jefferson', 'tjefferson234@ucmerced.edu'),
    ('4024','Stephanie Gamino', 'sgamino5@ucmerced.edu'),
    ('4025','Freshta Halimi', 'fhalaimi83@ucmerced.edu'),
    ('4026','Zaida Smith', 'zsmith32@ucmerced.edu'),
    ('4027','Citlali Perez', 'cperez241@ucmerced.edu'),
    ('4028','Bella Griffin', 'bgriffin821@ucmerced.edu'),
    ('4029','Jackie Gallegos', 'jgallegos@ucmerced.edu'),
    ('4030','Amy Prememto', 'aprememto@ucmerced.edu'),
    ('4031','Daisy Lee', 'dlee25@ucmerced.edu'),
    ('4032','Alexis Preito', 'apreito83@ucmerced.edu'),
    ('4033','Sonya Nawabi', 'snawabi83@ucmerced.edu'),
    ('4034','Rosa Park', 'rpark28@ucmerced.edu'),
    ('4035','Sheila Aletica', 'saletica@ucmerced.edu'),
    ('4036','Dianna Liakos', 'dliakos@ucmerced.edu'),
    ('4037','Carol Woo', 'cwoo434@ucmerced.edu'),
    ('4038','Stacy Thao', 'sthao73@ucmerced.edu'),
    ('4039','Jalen Carey', 'jcarey62@ucmerced.edu'),
    ('4040','Sofia Ruz', 'sruz393@ucmerced.edu');

    INSERT INTO courses(number, name, p_name)
    VALUES  
        ('ANTH-003', 'Anthropological Archeaology', 'Evan Heit'),
        ('ANTH-010', 'Quantitative Methods', 'Martin Hagger'),
        ('CRES-001', 'Intro Crit Race & Ethn Studies', 'Sandie Ha'),
        ('CRES-052', 'Power in Film', 'Hanna Gunn'),
        ('CRES-100', 'Race and the Media', 'Sandie Ha'),
        ('CRES-119', 'Black Women Theatre & Activism', 'Glynis Gawn'),
        ('CRES-120', 'Race, Law and Civil Rights', 'Paul Gibbons'),
        ('ECON-001', 'Intro to Economics', 'Justin Hicks'),
        ('ECON-005', 'Intro to Business & Finance', 'Erica Rutter'),
        ('ECON-010', 'Statistical Inference', 'Justin Hicks'),
        ('ECON-100', 'Interm Microeconomics Theory', 'Humberto Garcia'),
        ('ECON-108', 'Marketing & Consumer Behavior', 'Steven Seltzer'),
        ('ECON-115', 'Industrial Organization', 'Steven Seltzer'),
        ('BIO-001', 'Contemporary Biology', 'Christian Fons-Rosen'),
        ('BIO-002', 'Introduction Molecular Biology', 'Wan Du'),
        ('BIO-060', 'Nutrition', 'Yang Lor'),
        ('BIO-101', 'Biochemistry 1', 'Christian Fons-Rosen'),
        ('BIO-110', 'General Microbiology', 'Martin Hagger'),
        ('BIO-140', 'Genetics', 'Joel Spencer'),
        ('CHEM-001', 'Preparatory Chemistry', 'Rose Scott'),
        ('CHEM-002', 'General Chemistry 1', 'Wan Du'),
        ('CHEM-100', 'Organic Synth and Mechanism', 'Rose Scott'),
        ('CHEM-122', 'Biochemistry 2', 'Wan Du'),
        ('CHEM-130', 'Org Spectrosc and Computation', 'Christian Fons-Rosen'),
        ('CSE-022', 'Intro to Progamming', 'Alberto Cerpa'),
        ('CSE-024', 'Advance Programming', 'Alberto Cerpa'),
        ('CSE-100', 'Algorithm Design and Analysis', 'Lorena Alvarado'),
        ('CSE-120', 'Software Engineering', 'Meaghan Altman'),
        ('CSE-140', 'Computer Architecture', 'Michael Scheibner'),
        ('ENGR-045', 'Introduction to Materials', 'Mukesh Singhal'),
        ('ENGR-057', 'Statics and Dynamics', 'Rachel Ryskin'),
        ('ENGR-065', 'Circuit Theory', 'Mukesh Singhal'),
        ('ENGR-120', 'Fluid Mechanics', 'Karl Ryavec'),
        ('ENGR-135', 'Heat Transfer', 'Marisol Alonso'),
        ('ENGR-151', 'Strength of Materials', 'Rachel Ryskin'),
        ('ENGR-170', 'Intro to Electron Micro', 'Mukesh Singha'),
        ('ME-021', 'Engineering Computing', 'Paul Almeida'),
        ('ME-120', 'Component Design', 'Keith Alley'),
        ('ME-135', 'Finite Element Analysis', 'Paul Almeida'),
        ('ME-140', 'Vibration and Control', 'Alberto Aguilera'),
        ('ME-142', 'Mechatronics', 'Virginia Adan-Lifante'),
        ('ME-143', 'Unmanned Aircraft Systems', 'Keith Alley'),
        ('MSE-110', 'Solid State Materials Prop', 'Mariana Abuan'),
        ('MSE-112', 'Materials Selection & Perfor', 'John Abatzoglou'),
        ('MSE-113', 'Materials Characterization', 'Mariana Abuan');

    INSERT INTO members(s_id, c_id, cb_name, s_name)
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
        ('4010','3004','Anthropology Society Club','Mau Rosas'),
        ('4011','3005','Pi Kappa Phi','Spencer Tang'),
        ('4010','3005','Pi Kappa Phi','Mau Rosas'),
        ('4014','3005','Pi Kappa Phi','Mario Perez'),
        ('4007','3005','Pi Kappa Phi','Marc Martinez'),
        ('4008','3005','Pi Kappa Phi','Luis Ruiz'),
        ('4017','3006','Pi Lamda Phi','Jaylen Brown'),
        ('4013','3006','Pi Lamda Phi','Enrique Valencia'),
        ('4012','3006','Pi Lamda Phi','Gustavo Valdez'),
        ('4019','3008','Kappa Sigma','Adan Snitches'),
        ('4020','3008','Kappa Sigma','Andy Alvarenga'),
        ('4033','3009','Delta Gamma','Sonya Nawabi'),
        ('4040','3009','Delta Gamma','Sofia Ruz'),
        ('4039','3009','Delta Gamma','Jalen Carey'),
        ('4036','3009','Delta Gamma','Dianna Liakos'),
        ('4006','3007','Sigma Chi','Levi Beck'),
        ('4016','3007','Sigma Chi','Jose Arrieta'),
        ('4009','3007','Sigma Chi','Hamza Nure'),
        ('4037','3010','Tri Delta','Carol Woo'),
        ('4038','3010','Tri Delta','Stacy Thao'),
        ('4026','3010','Tri Delta','Zaida Smith'),
        ('4030','3011','Phi Mu','Amy Prememto'),
        ('4024','3011','Phi Mu','Stephanie Gamino'),
        ('4027','3011','Phi Mu','Citlali Perez'),
        ('4025','3012','Kappa Kappa Gamma','Sheila Aletica'),
        ('4029','3012','Kappa Kappa Gamma','Jackie Gallegos'),
        ('4028','3012','Kappa Kappa Gamma','Bella Griffin');

INSERT INTO studies(s_id, d_name, major, minor)
VALUES  
    ('4001','Engineering', 'Mechanical Engineering', 'Psychology'),
    ('4002','Engineering', 'Mechanical Engineering', 'Psychology'),
    ('4003','Engineering', 'Materials Engineering', 'Sociology'),
    ('4004','Engineering', 'Mechanical Engineering', 'Physics'),
    ('4010','Engineering', 'Mechanical Engineering', 'Economics'),
    ('4011','Engineering', 'Computer Science and Engineering', 'Economics'),
    ('4012','Engineering', 'Materials Engineering', 'Psychology'),
    ('4013','Engineering', 'Mechanical Engineering', 'Sociology'),
    ('4014','Natural Sciences', 'Biological Sciences', 'Economics'),
    ('4015','Natural Sciences', 'Chemistry', 'Chemistry'),
    ('4016','Natural Sciences', 'Human Biology', 'Economics'),
    ('4017','Natural Sciences', 'Physics', 'Sociology'),
    ('4022','Natural Sciences', 'Human Biology', 'Sociology'),
    ('4029','Natural Sciences', 'Chemistry', 'Physics'),
    ('4033','Social Sciences, Humanities and Arts', 'Economics', 'Sociology'),
    ('4034','Social Sciences, Humanities and Arts', 'Psychology', 'Sociology'),
    ('4035','Social Sciences, Humanities and Arts', 'Economics', 'Psychology'),
    ('4040','Social Sciences, Humanities and Arts', 'Sociology', 'Psychology');

INSERT INTO studies(s_id, d_name, major, minor)
VALUES 
    ('4005','Engineering', 'Computer Science and Engineering', null),
    ('4006','Engineering', 'Computer Science and Engineering', null),
    ('4007','Engineering', 'Mechanical Engineering', null),
    ('4008','Engineering', 'Mechanical Engineering', null),
    ('4009','Engineering', 'Computer Science and Engineering', null),
    ('4023','Natural Sciences', 'Chemistry', null),
    ('4024','Natural Sciences', 'Chemistry', null),
    ('4025','Natural Sciences', 'Chemistry', null),
    ('4026','Natural Sciences', 'Human Biology', null),
    ('4027','Natural Sciences', 'Biological Sciences', null),
    ('4028','Natural Sciences', 'Human Biology', null),
    ('4039','Social Sciences, Humanities and Arts', 'Psychology', null),
    ('4040','Social Sciences, Humanities and Arts', 'Sociology', null),
    ('4030','Social Sciences, Humanities and Arts', 'Psychology', null),
    ('4031','Social Sciences, Humanities and Arts', 'Economics', null),
    ('4032','Social Sciences, Humanities and Arts', 'Sociology', null),
    ('4018','Natural Sciences', 'Biological Sciences', null),
    ('4019','Natural Sciences', 'Biological Sciences', null),
    ('4020','Natural Sciences', 'Human Biology', null),
    ('4021','Natural Sciences', 'Human Biology', null),
    ('4036','Social Sciences, Humanities and Arts', 'Sociology', null),
    ('4037','Social Sciences, Humanities and Arts', 'Economics', null),
    ('4038','Social Sciences, Humanities and Arts', 'Sociology', null),
    ('4039','Social Sciences, Humanities and Arts', 'Psychology', null);


INSERT INTO takes(s_id, c_number, grade)
VALUES
    ('4001','ENGR-045', 'B'),
    ('4001','CRES-052', 'A'),
    ('4001','ENGR-065', 'A'),
    ('4002','CRES-052', 'B'),
    ('4002','ENGR-057', 'A'),
    ('4002','ENGR-065', 'A'),
    ('4003','ANTH-003', 'B'),
    ('4003','ECON-001', 'A'),
    ('4003','ANTH-010', 'A'),
    ('4004','ECON-001', 'B'),
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
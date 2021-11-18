-- shows student that are in the same department and takes engr65
SELECT DISTINCT s.name
FROM student s, courses c, department d, studies st, takes t
WHERE d.name = 'Engineering'
    AND d.name = st.major
    AND c.number = 'ENGR-065'
    AND t.c_number = c.number
    AND s.id = t.s_id;

-- show advisor based on major
SELECT a.id, a.name, a.email
FROM advisor a, student s, studies st, department d
WHERE s.id = '4001'
    AND st.s_id = s.id
    AND st.major = d.name
    AND a.d_code = d.id;

-- who is in their class with grade by professor
SELECT s.id, s.name, c.number 
FROM courses c, professor p, takes t, student s
WHERE p.id='2017' 
    AND p.name = c.p_name
    AND c.number = t.c_number
    AND t.s_id = s.id;

-- to display student in their class with grade by search from professor
SELECT s.id, s.name, c.number, t.grade
FROM courses c, professor p, takes t, student s
WHERE p.id='2017' 
    AND p.name = c.p_name
    AND c.number = t.c_number
    AND t.s_id = s.id
    AND s.name LIKE '%angel%';

-- when adding advisor to existing club by professor
UPDATE clubs
SET advisor='Mukesh'
WHERE id='2017';

-- search all student in single class by admin
SELECT * FROM  takes WHERE s_id = (SELECT id
                                    FROM student
                                    WHERE name LIKE '%angel%');

-- students that advisor advise
SELECT s.id, s.name, s.email 
FROM student s, advisor a, studies st, department d
WHERE a.d_code = d.id
    AND s.id = st.s_id
    AND a.id = '1001'
    AND st.major = d.name;

-- student in club that advisor advise
SELECT m.s_id, m.cb_id, m.cb_name, m.s_name 
FROM student s, advisor a, studies st, department d, members m
WHERE a.d_code = d.id
    AND s.id = st.s_id
    AND a.id = '1001'
    AND st.major = d.name
    AND s.id = m.s_id;

-- for adding advisor from admin
INSERT INTO advisor(id,name,email) 
    VALUES ('1005', 'Erica Robbins', 'erobins2@ucmerced.edu');

-- for adding courses from admin
INSERT INTO courses(number, name, p_name, d_code) 
    VALUES ('CSE-020', 'Intro to Programming', 'Paul Almeida', '1');

-- for adding clubs from admin
INSERT INTO clubs(id, name, advisor, president) 
    VALUES ('3013','Kappa Kappa Kappa','mabuan@ucmerced.edu', 'Bella Griffin');

-- for adding professor from admin
INSERT INTO professors(id, name, email) 
    VALUES ('2006','Jeol Spencer', 'mmartinez65@ucmerced.edu');

-- for adding students from admin
INSERT INTO students(id, name, email) 
    VALUES ('4007', 'Mar Martinez', 'mmartinez65@ucmerced.edu');

-- dropping class from student
DELETE FROM takes WHERE s_id='4001' and c_number='ENGR-065';

--dropping club from student
DELETE FROM members WHERE cb_id ='3001' and s_id = '4001';

-- removing course fro admin
DELETE FROM courses WHERE number='ANTH-003' and name='Anthropological Archeaology';

-- searching for advisor based on name or id
SELECT * FROM  advisor WHERE name LIKE '%Luz%' OR id = '1001';

-- search club members by club name or student name by admin/advisor
SELECT * FROM  members WHERE cb_name LIKE '%chess%' OR s_name = '%angel%';

-- search courses by class number
SELECT * FROM  courses WHERE number LIKE '%ENGR%';

-- search clubs by name or id by student
SELECT * FROM  clubs WHERE name LIKE '%chess%' OR id = '4001';


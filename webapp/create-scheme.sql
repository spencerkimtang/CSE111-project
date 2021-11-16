CREATE TABLE advisor (
    id decimal(10,0) not null,
    name varchar(50) not null,
    email varchar(50) not null
);

CREATE TABLE student (
    id decimal(10,0) not null,
    name varchar(50) not null,
    email varchar(50) not null
);

CREATE TABLE professor (
    id decimal(10,0) not null,
    name varchar(50) not null,
    email varchar(50) not null
);

CREATE TABLE clubs (
    id decimal(10,0) not null,
    name varchar(50) not null,
    advisor varchar(50) not null,
    president varchar(50) not null
);

CREATE TABLE department (
    id decimal(10,0) not null,
    name varchar(50) not null
);

CREATE TABLE courses (
    number varchar(50) not null,
    name varchar(50) not null,
    p_name varchar(50) not null,
    d_code decimal(10,0) not null
);

CREATE TABLE takes (
    s_id decimal(10,0) not null,
    c_number decimal(10,0) not null,
    grade char(2)
);

CREATE TABLE studies (
    s_id decimal(10,0) not null,
    d_name varchar(50) not null,
    major varchar(20) not null,
    minor varchar(20)
);

CREATE TABLE members (
    s_id decimal(10,0) not null,
    c_id decimal(10,0) not null,
    cb_name varchar(20) not null,
    s_name varchar(50) not null
);

CREATE TABLE login(
    id decimal(10,0) not null,
    username varchar(50) not null,
    password varchar(50) not null,
    role varchar(10) not null
);

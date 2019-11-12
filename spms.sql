CREATE DATABASE spms;

USE spms;

CREATE TABLE admin( 
    admin_id int AUTO_INCREMENT, 
    firstname varchar (50), 
    lastname varchar(50),
    email varchar(75),
    pssword varchar(150),
    acc_no numeric(20),
    PRIMARY KEY(admin_id) 
);


CREATE TABLE client( 
    client_id int AUTO_INCREMENT,
    firstname varchar(50),
    lastname varchar(50),
    email varchar(75),
    pssword varchar(150),
    contact_no numeric(15),
    address varchar(300),
    acc_no numeric(20),
    PRIMARY KEY(client_id)
);


CREATE TABLE employee( 
    employee_id int AUTO_INCREMENT, 
    firstname varchar(50),
    lastname varchar(50),
    email varchar(75),
    contact_no numeric(15),
    pssword varchar(150),
    acc_no numeric(20),
    PRIMARY KEY(employee_id)
);


CREATE TABLE project( 
    project_id int AUTO_INCREMENT,
    title varchar(75),
    pro_status varchar(20),
    progress numeric(3),
    category varchar(75),
    keywords varchar(200),
    link varchar(200),
    due_date date,
    PRIMARY KEY(project_id)
);


CREATE TABLE developer( 
    developer_id int,
    PRIMARY KEY(developer_id),
    FOREIGN KEY(developer_id) REFERENCES employee(employee_id) ON DELETE CASCADE
);


CREATE TABLE pro_mangr( 
    pm_id int,
    PRIMARY KEY(pm_id),
    FOREIGN KEY(pm_id) REFERENCES employee(employee_id) ON DELETE CASCADE
);


CREATE TABLE owns( 
    client_id int,
    project_id int,
    start_date date,
    PRIMARY KEY(client_id,project_id),
    FOREIGN KEY(client_id) REFERENCES client(client_id) ON DELETE CASCADE,
    FOREIGN KEY(project_id) REFERENCES project(project_id) ON DELETE CASCADE
);


CREATE TABLE manages( 
    pm_id int,
    project_id int,
    PRIMARY KEY(pm_id,project_id),
    FOREIGN KEY(pm_id) REFERENCES pro_mangr(pm_id),
    FOREIGN KEY(project_id) REFERENCES project(project_id) ON DELETE CASCADE
);

CREATE TABLE develops( 
    developer_id int,
    project_id int,
    PRIMARY KEY(developer_id,project_id),
    FOREIGN KEY(developer_id) REFERENCES developer(developer_id),
    FOREIGN KEY(project_id) REFERENCES project(project_id) ON DELETE CASCADE
);

CREATE TABLE project_feedback(
    project_id int,
    rating tinyint(1),
    feedback varchar(300),
    PRIMARY KEY (project_id),
    FOREIGN KEY (project_id) REFERENCES project(project_id) ON DELETE CASCADE 

);
 
CREATE TABLE developer_feedback(
    developer_id int,
    project_id int,
    rating tinyint(1),
    feedback varchar(300),
    PRIMARY KEY (project_id,developer_id),
    FOREIGN KEY (project_id) REFERENCES project(project_id) ON DELETE CASCADE,
    FOREIGN KEY (developer_id) REFERENCES developer(developer_id) ON DELETE CASCADE

);

/*CREATE TABLE project_link(
    project_id int,
    link varchar(150),
    PRIMARY KEY (project_id),
    FOREIGN KEY (project_id) REFERENCES project(project_id) ON DELETE CASCADE
);*/
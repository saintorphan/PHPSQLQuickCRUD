A simple CRUD app written in PHP+MySQL and utilizing Bootstrap stylization.

MySQL db table:

CREATE TABLE students (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(191) NOT NULL,
    email VARCHAR(191) NOT NULL,
    phone VARCHAR(191) NOT NULL,
    position VARCHAR(191) NOT NULL
)

TODO:

Decrease AUTO_INC value of employee_id upon deleting an employee

Y/N confirmation dialog for employee_delete

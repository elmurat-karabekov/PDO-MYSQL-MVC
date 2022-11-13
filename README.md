# PDO-MYSQL-MVC

This project was created while following these tutorials:
  https://www.youtube.com/watch?v=T41SMNgyRrc&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=17
  https://www.youtube.com/watch?v=Fg0CP-ri87U&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=18

In order for project to work:
1. Create the database called "oopphp16" in phpmyadmin;

2. Inside it create a table called "users". In MySQL cli run following command:
    "CREATE TABLE users(users_id int NOT NULL AUTO_INCREMENT, 
    users_firstname varchar(25),
    users_lastname varchar(255), 
    users_dateofbirth DATE)"; 
    
3. Insert data into the table:
   "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES("JOSH", "Peck", "1998-09-02");
   "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES("Drake", "Bell", "1996-05-22");
   ...
   
   
  This project was created while following these tutorials:
  https://www.youtube.com/watch?v=T41SMNgyRrc&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=17
  https://www.youtube.com/watch?v=Fg0CP-ri87U&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=18


Чтобы проект заработал:
1. Создайте базу данных под названием "oopphp16" в phpmyadmin;

2. Внутри него создайте таблицу с именем "users". В MySQL cli выполните следующую команду:
    "CREATE TABLE users(users_id int NOT NULL AUTO_INCREMENT, 
    users_firstname varchar(25),
    users_lastname varchar(255), 
    users_dateofbirth DATE)"; 
    
3. Внесите данные в таблицу:
   "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES("JOSH", "Peck", "1998-09-02");
   "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES("Drake", "Bell", "1996-05-22");
   ...
  

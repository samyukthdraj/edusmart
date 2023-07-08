This project is an E-learning platform developed by Samyukth Dharmarajan, Lloyd Michael, Eirene Nikky, Ankith Issac Dominic and as a summer project .
We used for the front end : html , css , javascript and bootstrap (a framework) .
for the back end we used : php and databases .

In order for this website to work properly you need to  ( we will run it locally ): 
1) Install a software that will run the php code : we propose WAMP or XAMPP 

2)Run WAMP or XAMPP

3) Set the database necessary for the sign in / sign up system to work properly and to be able to change the profile picture within this website : 
	a/Open your browser ( we recommand opera for minimum bugs that you may face )
	b/Type localhost/phpmyadmin/ then for the username : root 
				                  password : (leave it empty )
then click on "go" 

 4)click on "Databases" ( Bases de données )  then write inside the Database Name : "loginsystemtut" then click on "create"

5)click on the "SQL" tab up top and then write this SQL code to create the first table :
  CREATE TABLE users (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);

6) click "go" or "execute" 

7) Now we need to create the second table :
	a)click on "loginsystemtut" (which is the name of our database )
	b)click on the SQL tab up top and then write this SQL code to create the second table : 
	CREATE TABLE imgupload (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	status int(11) NOT NULL
	);

8) click "go" or "execute" 

9)Everything is set up inside the database , now copy the folder named "e-learning" and go inside the installation folder of the software "wamp" then the folder "www" then paste it there .

10)Now open any browser you want and write "localhost/EDUSMART2/Edusmartt" and click enter to use it .

Note : 
The steps above are only followed when you try to use the website for the first time  ( because we need to set the database ) otherwise you ignore them and do these two steps : 

1)Run the software "WAMP" or "XAMPP"

2)open any browser you want and write "localhost/EDUSMART2/Edusmartt" and click enter to use the website 


11) NOW WE'RE CREATING A QUIZ USING DATABASE FOR THIS WE CREATE A DATABASE WITH NAME AS "quiz(subject_name)" then 3 tables for each subject namely 
"questions" with qid(int 250)primary,question(varchar 250),ans_id(int 250),
"answers" with aid(int 250)primary, answer(varchar 250),ans_id(int 250), 
"user" with uid(int 250)primary, username(varchar 250), total(int 250),answers(int 250).

						OR THIS

- create table questions(qid int(250) auto_increment not null primary key, question varchar(250),ans_id int(250));
- create table answers(aid int(250) auto_increment not null primary key, answer varchar(250),ans_id int(250));
- create table user(uid int(250) primary key auto_increment not null, username varchar(250), total int(250), answers int(250));


12)Now in questions, we gotta input questions: insert into questions values(1,"What is java?",1);
						insert into questions values(2,"What is java used for?",5);

13)Now in answers, we gotta input answers : insert into answers values(1,"Java is this",1);
						insert into answers values(2,"Java is that",1);
						insert into answers values(3,"Java was this",1);	
						insert into answers values(4,"Java is not this",1)
	
					here the answer is "java is this" ie: ans_id 1	

14)

insert into questions values(1,"",4);
insert into questions values(2,"",7);
insert into questions values(3,"",10);
insert into questions values(4,"",16);
insert into questions values(5,"",19);


insert into answers values(1,"",1);
insert into answers values(2,"",1);
insert into answers values(3,"",1);
insert into answers values(4,"",1);
insert into answers values(5," ",2);
insert into answers values(6,"",2);
insert into answers values(7,"",2);
insert into answers values(8,"",2);
insert into answers values(9,"",3);
insert into answers values(10,"",3);
insert into answers values(11,"",3);
insert into answers values(12,"",3);
insert into answers values(13,"",4);
insert into answers values(14,"",4);
insert into answers values(15,"",4);
insert into answers values(16,"",4);
insert into answers values(17,"",5);
insert into answers values(18,"",5);
insert into answers values(19,"",5);
insert into answers values(20,"",5);



15)
insert into answers values(1,"Guido van Rossum",1);
insert into answers values(2,"James Gosling",1);
insert into answers values(3,"Dennis Ritchie",1);
insert into answers values(4,"Bjarne Stroustrup",1);
insert into answers values(5," Java is a sequence-dependent programming language",2);
insert into answers values(6,"Java is a code dependent programming language",2);
insert into answers values(7,"Java is a platform-dependent programming language",2);
insert into answers values(8," Java is a platform-independent programming language",2);
insert into answers values(9,"JRE",3);
insert into answers values(10,"JIT",3);
insert into answers values(11,"JDK",3);
insert into answers values(12,"JVM",3);
insert into answers values(13,"Object-oriented",4);
insert into answers values(14,"Use of pointers",4);
insert into answers values(15,"Portable",4);
insert into answers values(16,"Dynamic and Extensible",4);
insert into answers values(17,"identifier & keyword",5);
insert into answers values(18,"identifier",5);
insert into answers values(19,"keyword",5);
insert into answers values(20,"none of the mentioned",5);
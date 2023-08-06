# Web_development-Supermarket

In this project we have developed online supermarket website. Food stuffs with various categories are mentioned over here.
We have used the following tools for the project :
1) Brackets (for html,php code) 
2) xampp (for databse and apache server)

USING Xampp :- 
Download and install xampp application. Open it and turn on the apache server and mysql.
Using xampp apache server we can activate localhost and run the html code on localhost server.
Mysql server should be turned on for using mysql database in it.
Save all your files/folders of your project in C:---> xampp----> htdocs
Now when you run, go to chrome and type http://localhost/HMI/WDL1.html. Here in C--->xampp---> htdocs, HMI folder name was created and all files were saved into it. WDL1.html is the first html file which needs to be run and all other files will be runned as you go on navigating into the website.


**You can see the functions of all buttons and the GUI part in the OUTPUT file which is uploaded here.**

phpMyAdmin (Database server in xampp):-
For creating the database follow these steps:
1) Go to http://localhost/phpmyadmin/
2) click on New to create a new database. we have given 'project' as database name and hence mentioned the same name in the code too.
3) Now after creating databse name click on it and click on 'New' in order to provide table name in that databse. We have given 'market' name to the table and mentioned the same in the code.
4) Create 4 column name 'username', 'phone', 'address', 'password' and put VarChar datatype for all.
5) click on Go button to save this table.

Now the html code as well as database is runnable by localhost.
you can manually put sql commands and create new user data or else use sign up button in the project GUI.

SIGN UP button -
 Here as u click on sign up button a form will be loaded asking your username, phone, address and password. Then the data is entered automatically in database server.
 You can sign up and go in the phpMyAdmin site and check for the same.
 
 FUTURE SCOPE for this sign up button-
  We can add email id and provide the verification code for the same.
  Also one user per phone number should be registered so as to avoid duplicate users for one particular phone number(This is actually implemented but the function in the code is currently not working).
 
Login button-
 You can login using username and password.
 
 FUTURE SCOPE for this login button -
  Right now the system logins as you enter the username, user verification with his/her password doesn't work properly in the function.
  
Log out button- After logging in press log out button to log out your account.
FUTURE SCOPE for this log out button - As we log out we go to the main page of sign up and log in, but the variables are not destroyed which contains the username password value of the previous login user.

Change address and change password button - This changes the address/password by providing the new one.

Future Task: Search button is available in this project for searching the products but it is not yet implemented.

About code and files-
 There are html files php files and the images of the product.
 constants.php defines the database.
 db.php contains the connection with mysql.
 controller,controller1,controller2 contains code for the event as the buttons like signup,login etc are clicked.
 Other files contains html and php codes for the GUIs.
 



 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

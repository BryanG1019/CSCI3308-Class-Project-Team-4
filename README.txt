Starting out the program needs to be loaded to your /var/www/html file. 
(use the display build folder in the repo and extract its contents to your html directory)

In order to get the program up and running you will need to follow the instructions.txt file. Running the .sql files inside mysql on your computer will only build the table if you have a database set up. You will need to 'create database jot;' and then 'use jot;'.

In order to connect the the database you will need to modify the global.php file to use your username and password.

To run the tests inside the site you will need to manualy run the php file that is labeled create test.php and sql test.php. You will find these files in the repo under the unit test folder. After moving those files to the var/www/html folder you need to dial them in the web browser much like you would dial any link. When you dial them it will return with the tests and how they were excuted. Properly will be descrpbed in () after the sets is run. The output will be in your browser. 

Starting out the program needs to be loaded to your /var/www/html file. 
(use the display build folder in the repo and extract its contents to your html directory)

In order to get the program up and running you will need to follow the instructions.txt file. Running the .sql files inside mysql on your computer will only build the table if you have a database set up. You will need to 'create database jot;' and then 'use jot;'.

In order to connect the the database you will need to modify the global.php file to use your username and password.

To run the tests inside the site you will need to manualy run the php file that is labeled create test.php and sql test.php. You will find these files in the repo under the unit test folder. After moving those files to the var/www/html folder you need to dial them in the web browser much like you would dial any link. When you dial them it will return with the tests and how they were excuted. Properly will be descrpbed in () after the sets is run. The output will be in your browser. 

We set up our repo as a set of builds. When working with branches we found some difficulty working with merging so most of our builds became their own folder. This was mainly because when we were implementing new functions in order for some debugging we needed to look at the old code before we committed any changes. As someone would change or implement a feature using the old code provided us with a base that we could use for finding problems with how we wrote things. If we were to merge all the changes all the time we would have needed to revert to a previous build in order to find out what happened. Using the build folder allowed us to avoid unnecessary issues during the development process.

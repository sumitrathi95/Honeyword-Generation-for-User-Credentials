# Honeyword Generation for User Credential Security
Honeyword Generation for User Credential Security using HTML,  PHP, SQL Database

Password breach is a frequent and common phenomenon in software applications. These breaches are sometimes undiscovered for years. Many times, the users as well as companies are unaware of these unhandled breaches and they are not much interested in reporting or building up against them. Hence, there is a requirement for a robust system that could detect these breaches efficiently. Honeyword generation is one such technique to mitigate the risk of password breaches. Honeywords are fake, hashed character strings that are stored in databases which makes it difficult for the attacker to predict the correct password. As it is essential for a system to withstand brute force attack and provide better security, we propose honeyword generation approach using EBCDIC values which will randomly generate numbers to form sweet words, which is a file or database with all the honeywords and valid passwords altogether.

## Install
 [Xampp server](https://www.apachefriends.org/index.html)
 keep all the html,css,php file in windows 
 C:\xampp\htdocs\your_folder

## How to run
```
* Run the Xampp server then
* Create Database in sql database of XAMPP server with name "final" and table name "accounts" having fields : id, username,PhNo,email,password,password1,password2,password3,password4
* go to your_folder in htdocs and go to Register on localhost and Register the account you will get to see the original password and honeywords generated for understanding purpose.   Also one string is with EBCDIC converted line. If you go to database you will see the encrypted passwords.

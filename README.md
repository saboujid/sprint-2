# SE-Sprint-02-Team-17
The application is hosted on Clamv. It can be accessed via: [Corona Archive](https://clabsql.clamv.jacobs-university.de/~sgiri/sprint-2/) or copy and paste the following link into your browser.

    https://clabsql.clamv.jacobs-university.de/~sgiri/sprint-2/

## Contributors (Sprint 2):
    * Suraj Giri
    * Saad Aboujid

## Built with:
    - HTML
    - CSS
    - JavaScript
    - PHP
    - MySQL

## About the Project:
Corona Archive is an application that aims to track COVID (Corona) Infections via contact tracing. In this appliation we have tried to track when a visitor enters any business (new place) by the help of a QR Code available at the place taht would be scanned by the visitor. Also, if any visitor who is in tge database is infected by COVID, then s/he would be marked infected by a hospital and if s/he is not Infected with COVID, then would be marked Not Infected. All hte analytics of the application is to be observed by the admin/agent.

## Prerequisites
- Mysql
- html5

## Installation Guide:
To run this application locally, you will have to follow the following steps:

First of all, clone the repository. <br>
    ``` git clone https://github.com/Magrawal17/se-02-team-17.git ```

Aftet that go (cd) to the project folder. <br>
    ``` cd se-02-team-17 ```

You will also need a MYSQL database for this project. To create one:

    # Open MYSQL
    $ mysql -u {Enter your username or ROOT} -p

    # Once you are in your MYSQL terminal, run this command for creating the db.
    mysql> create database seteam17;
    mysql> use seteam17; 
    mysql> source se_database.sql
    mysql> exit


## File Structure
	\se-print-02-team-17 	# github's branch
    |
    |---\connect.php
    |
    |---\imprint.php
    |
    |---\index.php
    |
    |---\learn_more.php
    |
    |---\login.php
    |
    |---\register.php
    |
    |---\se_database.sql
    |
    |---\agency
    |   |
    |   |--- # All the Files Related to the Agent 
    |---\css
	|	|
    |   |--- # All the CSS Files
	|---\hospital
    |   |
    |   |--- # All the Files Related to the Hospital
    |---\images
    |   |
    |   |--- # All the images used.
    |---\places
    |   |
    |   |--- # All the Files Related to the Places
    |---|visitor
    |   |
    |   |--- # All the Files Related to the Visitors
    
   

## Sprint 2 Changes Done:
- [x] Restructured the databse structure as Database missed many columns in various tables. 
- [x] Updated database entries to easier values for testing.
- [x] Updated the whole frontend.
- [x] **Places Login** page was created as Places could only register and genereate QR code once, which would create problems if the place lost QR code.
- [x] QR generation (encoded with the registration data) for Places was Added.
- [x] Added the feature to see the information and generate the QR code again after Logging In for Places.
- [x] **Hospital Adding** feature was added to the **Agent** as Agents could not add Hospitals.
- [x] Added hospital analytics observation to agent.
- [x] Added Visitor Log In functionality.
- [x] Added QR Scan Result showing functionality after Visitor Login.
- [x] Separated all the **Log In** and **Registration** pages.
- [x] Added the **Imprint**.
- [x] Used **SESSION** keys to redirect Visitor Registration to **Scanning Pages**.
- [x] Used **SESSION** keys to redirect Places Registration to **QR Generation Pages**.

## Dummy Login Credentials (Sprint 2):

### Agent:
    username: agent1
    password: agent_password

### Visitors: 
    First Visitor:
        email: visitor1@gmail.com
        password: password
    Second Visitor:
        email: visitor2@gmail.com
        password: password
    Third Visitor:
        email: visitor3@gmail.com
        password: password

### Places:
    First Place:
        email: place1@gmail.com
        password: password
    Second Place:
        email: place2@gmail.com
        password: password
    Third Place:
        email: place3@gmail.com
        password: password 

### Hospital:
    First Hospital:
        username: hospital1
        password: password
    Second HOspital:
        username: hospital2
        password: password
    Third HOspital:
        username: hospital3
        password: password 

#
#
# SE-Sprint01-Team17

Link to the application: http://clabsql.clamv.jacobs-university.de/~ftasellari/Corona/main_page.html

Corona Archive: a web service for Corona disease management which enables digital tracking of citizens which enter certain places and keeps the records in case of a 
Covid infection spread.

## Contributors (Sprint 1):
    - Flavia Tasellari
    - Ankel Lazaj


## Built with:
    - HTML
    - CSS
    - JavaScript
    - PHP
    - MySQL

## Implementation (Done by Sprint 1):

    - Created database of Corona Archive
    - Build the main page 
    - Inserted redirection links from main page to the registration/login forms
    - Created login form for agent
    - Created login form for hospital
    - Created registration for visitors
    - Created registration for places
    - Inserted data to the database
    - Passed Device ID as hidden field
    - Generated and displayed QR code
    - Camera feature was enabled
    - Displayed visitors tables in the Hospital page
    - Displayed visitors tables in the Agent page
    - Displayed places tables in the Agent page
    - Implemented test cases
    - Used CSS and JavaScript to make the pages more interactive
    - Created 'Go Back' buttons
    - Linked the pages together
    - Implemented Search button in the Agent page which is yet to be functional
    - Connected the client side with server side/database

## Tests (Sprint 1): 
    test.html which redirects to 4 different pages to try different test cases for login/registration validation for Visitors, Places, Agent, Hospital

The only instance accepted in Agent login is:

username: agent1234,
password: corona_statistics1

Hospital login :

    username: 
    1. Johns_Hopkins_Hospital
    2. Alpha_Health_Hospital
    3. 24hr_Service_Clinic

    password:
    1. hospital_hopkins1
    2. alphahealth777
    3. service_clinic!


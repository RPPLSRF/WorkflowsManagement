My Linkedin: https://www.linkedin.com/in/rith-panhapich/

My Portfolio: https://rith-panhapich.w3spaces.com/

# Workflows management
<details>
<summary>  EXPAND & COLLAPSE  </summary>

Web Developer with Laravel\
Assignment\
A workflow is a series of interconnected activities that are executed in a specific order to achieve a desired result. Activities are individual tasks or pieces of logic that are executed as part of a workflow.
As a Laravel developer candidate, you must create a demo that shows how to manage workflows for the following tasks:
1. As a user, she can submit leave or mission requests.
2. As a user, she can check on the status of her leave or mission requests.
3. As a leave or mission approver, she has the authority to approve or reject the request.
4. As a department administrator, she can develop workflows and apply for leave or mission for her department.
5. As a system administrator, she can create users with specified roles.
6. As a system administrator, she can allocate users to many departments.
Please be aware that every department has its own workflows, such as:\
⚫ IT Department:\
  -Leave needs to be approved by Team Leader 2. HR Manager o Mission needs to be approved by 1. Team Leader 2. CEO\
⚫ Sales Department:\
  -Leave needs to be approved by 1. Team Leader 2. CFO 2. HR Manager\
  -Mission needs to be approved by 1. Team Leader, 2. CFO, 3. HR Manager, 4. CEO
   
### Duration:
7 Days
### Languages:
Laravel, MySQL, HTML, JavaScript, CSS
### Repository:
Demo source code need to be put in Git repository
</details>

_________________________________________________________________________________________________________
# How to Clone and Run the project
## Requirements
```bash
  Composer
  Mysql
  php
  extension=fileinfo in php.ini
  extension=pdomysql in php.ini
```
Install dependencies:

```bash
  npm install
  npm run dev
  composer install
```
Database Migration:

1. startup mysql server
2. Create database "workflows_management"
3. Rename ".env.example" to ".env"

->run the commands as follows:
  ```bash
    php artisan migrate:refresh
    php artisan db:seed --class=PermissionTableSeeder
    php artisan db:seed --class=CreateAdminUserSeeder
  ```
Start the server:

```bash
  php artisan serve
```
Enter by using link below:
http://127.0.0.1:8000/home

http://127.0.0.1:8000 will only show an incompleted|unlinked UI I had in mind to add the Backend later If I were to finish this project

Login Presets:
```text
admin@gmail.com | 123456
ceo@gmail.com | 123456
hrmanager@gmail.com | 123456
cfo@gmail.com | 123456
teamleader@gmail.com | 123456
departmentadministrator@gmail.com | 123456
employee@gmail.com | 123456
```
Features:
```diff
## Completed Features
+ User CRUD
+ Role CRUD
+ Role Assignment
+ Mission CRUD
+ Leave CRUD

## Incompleted Features
- Department CRUD
- Department Assignment
- Approval Workflow
- Rejection Workflow
- Notifiction System
```

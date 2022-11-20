# DateBase_docker_lamp

## Docker Desktop  
---------------------------------------------------------------
Download and install [Docker Desktop](https://www.docker.com/products/docker-desktop/)  

## Clone the Project
---------------------------------------------------------------
Then clone the github project by command, if not download the zip file and install 
>git clone https://github.com/harrycwa127/DateBase_docker_lamp.git  

## Sematext (Database Activity Monitoring Tool)
----------------------------------------------------------------
Open [Sematext](https://sematext.com/) and sign up a account  
Sign in Sematext with the registered account  
Go to Apps in the left navigation bar  
Click + New App ⬇ in the top right corner  
Choose Monitoring ⮕ MySQL
Enter the name of the Monitering App and Click Create App  
select as Docker as the Containter  
Follow the step of the instruction to set out the mointoring tool

## Run Container
------------------------------------------------------------------------------------
Open Terminal and change the the directory of DateBase_docker_lamp  
> cd /path/to/DateBase_docker_lamp  
> docker-compose up

## Check database
-----------------------------------------------------
Open the phpmyadmin at http://localhost:8000

## Check website
---------------------------------------------------------------
Open website(index.php) at http://localhost:8001

## Demonstrate
----------------------------------------------------------------
https://drive.google.com/file/d/1PtLJ9y6AaqklMGt8GIHaDwj0vurJWBdM/view?usp=sharing
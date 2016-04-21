## Lab Course: Cloud Architectures and Management, Summer '16
#### IAAS, University of Stuttgart
#### Part 1
The files in this repository are necessary for Task 1.8
Kindly follow these steps to execute:
1.  Copy the file "wp-init.sh" to your desired EC2 instance

2.  Make the script file "wp-init.sh" executable by running the following command:
        `chmod +x wp-init.sh`

3.  Execute the script by using:
        `./wp-init.sh`

4.  The script runs the necessary setup

5.  Wordpress has to now be configured to point to the database installation. This is done by modifying the file "wp-config.php" located     in /var/www/html directory

6.  Add the necessary details in the resective define statements. Save and close the file

7.  The wordpress installation can now be accessed using the public IP of your EC2 instance

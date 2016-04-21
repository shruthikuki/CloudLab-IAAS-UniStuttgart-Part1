sudo yum update -y
sudo yum install -y httpd24 php56 php56-mysqlnd
sudo service httpd start
sudo chkconfig httpd on
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
mv wp-config.php wordpress/
sudo mv wordpress/* /var/www/html/

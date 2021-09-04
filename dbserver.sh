  # Update Ubuntu software packages.
  apt-get update
  
  # We create a shell variable MYSQL_PWD that contains the MySQL root password
  #ROOT PASSWORD
  export MYSQL_PWD='password123'
  
  echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
  echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections
  
  # Install the MySQL database server.
  apt-get -y install mysql-server
  
  # Run some setup commands to get the database ready to use.
  # First create a database.
  echo "CREATE DATABASE bookings;" | mysql
 
  # Create a database user "user1" with the given password.
  echo "CREATE USER 'user1'@'%' IDENTIFIED BY 'password1234';" | mysql
  
  # Grant all permissions to the database user "user1".
  echo "GRANT ALL PRIVILEGES ON bookings.* TO 'user1'@'%'" | mysql
  
  export MYSQL_PWD='password1234'
  
  # Connects user and database
  cat /vagrant/setup-database.sql | mysql -u webuser fvision

  # By default, MySQL only listens for local network requests,
      # i.e., that originate from within the dbserver VM. We need to
      # change this so that the webserver VM can connect to the
      # database on the dbserver VM. Use of `sed` is pretty obscure,
      # but the net effect of the command is to find the line
      # containing "bind-address" within the given `mysqld.cnf`
      # configuration file and then to change "127.0.0.1" (meaning
      # local only) to "0.0.0.0" (meaning accept connections from any
      # network interface).
  sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
  
  # Restart the MySQL server to pickup configuration changes.
  service mysql restart
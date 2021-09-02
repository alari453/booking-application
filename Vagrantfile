# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile to set up 3 VMs, two webservers and a database server,
Vagrant.configure("2") do |config|
  # All servers run Ubuntu
  config.vm.box = "ubuntu/xenial64"

  # Define a named VM
  config.vm.define "webserver" do |webserver|
    # Options for the webserver VM
    webserver.vm.hostname = "webserver"

    # So that our host computer can connect to IP address 127.0.0.1 port 8080, and that network
    # request will reach our webserver VM's port 80.
    webserver.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
   
    # Private network that our VMs will use to communicate
    webserver.vm.network "private_network", ip: "192.168.2.11"
    
    # Necessary in the CS Labs
    webserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    # For ease of editing as shell commands are in different file
    webserver.vm.provision "shell", path: "webserver.sh"

  # End webserver
  end

  # Define a named VM
  config.vm.define "adminserver" do |adminserver|
    webserver.vm.hostname = "adminserver"

    # So that our host computer can connect to IP address 127.0.0.1 port 8080, and that network
    # request will reach our webserver VM's port 80.
    webserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"
   
    # Private network that our VMs will use to communicate
    webserver.vm.network "private_network", ip: "192.168.2.12"
    
    # Necessary in the CS Labs
    webserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    # For ease of editing as shell commands are in different file
    webserver.vm.provision "shell", path: "adminserver.sh"

  # End webserver
  end

  # Defining the database server
  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.hostname = "dbserver"
    
    # IP address is different from the webserver due to it being a private_network
    dbserver.vm.network "private_network", ip: "192.168.2.13"
    
    # Necessary in the CS Labs
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    # For ease of editing as shell commands are in different file
    dbserver.vm.provision "shell", path: "dbserver.sh"
  
  # End dbserver
  end

# End Vagrantfile
end

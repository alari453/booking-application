# booking-application

COSC349 Assignment 1 - Mars Reservation Booking Application

INTRODUCTION:
This application is a booking system that utilizes three virtual machines that interact with one another. 
The first VM hosts a booking form for a user’s input, the second displays the current bookings, and the third VM runs a database.

HOW TO USE APPLICATION:
Assuming the user has the latest version of Vagrant and VirtualBox, running this application is fairly easy. First, the repository will need to be downloaded or cloned. To clone the repository in the terminal, use the command: 

https://github.com/alari453/booking-application.git

Once this is complete, you can then navigate through the terminal into the directory (folder) that the repository/Vagrant file is in. In the terminal, you can then use the following command to start the virtual machines: 
	
vagrant up --provider virtualbox

When the virtual machines are running, you can then open the web pages hosted by the appropriate VM’s by the following URLs:

Clientserver can be accessed via localhost:8080/

The initial website, hosted by webserver, shows a booking form where you can input your specific information for your booking. Once done, there is a ‘submit’ button which after being clicked indicates whether or not your data has been added successfully. You’re then given two link options to either make another booking or view the current bookings in the database.

adminserver can be accessed via localhost:8080/

The second web page, hosted by adminserver, is a simple table that displays the current bookings in the database. It shows you the results of the inserted data, as well as some preloaded bookings that have been added to the database when the VM is started.

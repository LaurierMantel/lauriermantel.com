# lauriermantel.com

I made a single page web application using jQuery to control views of each section.  I used a BootStrap theme called Freelancer
http://startbootstrap.com/template-overviews/freelancer/

I kept all my scripting and style changes on this page.

email.php
I used this to control my contact form with an HTTP get request so that the user doesn't have to refresh their page.

execute.php, location.php
Server side code is mostly executed in these two files here
I have another repository where I built a PHP tool which captures the client IP address and looks up the location.  I connected it to 
my website and then wrote some PHP to interface with a MySQL database.  It keeps a tally of each IP address's views, location, and a datetime
of the most recent view.  

There is a file called private.php which stores my database credentials, which for obvious reasons I did not commit to GitHub. 

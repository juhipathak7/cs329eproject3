***********************************
To access database:
***********************************


Make sure mysql is installed
Then in terminal type:

mysql -h chalkboard.cg6puotpoieo.us-west-2.rds.amazonaws.com -P 3306 -u master -p

When prompted for password type:

abc12345

Once you’re in type:
USE chalkboard;

This makes sure that the chalkboard database is what you’re viewing and editing

Type in:

SHOW tables;

To show what tables are in here.

For other mysql commands, just google it. Cause that’s what the internet is for. 


***********************************
SSH into server:
***********************************

I will have sent you a key called key-pair.pem
Save this key-pair in your DESKTOP
Then in the terminal type: 

Cd desktop

Then type:

ssh -i "key-pair.pem" ec2-user@ec2-54-200-163-169.us-west-2.compute.amazonaws.com

 You’ll be prompted that it may not be secure and if you wanna access but YOLO and just type yes.

Now you’re in! But wait there’s more.

Type all this ish in your terminal once you’re in:

sudo yum update –y

sudo yum install -y httpd24 php56 php56-mysqlnd

sudo service httpd start

sudo chkconfig httpd on

sudo groupadd www

sudo usermod -a -G www ec2-user

exit

Log back in/ ssh back in again and verify that the www group exists with the groups command:

groups

And it should show up with this:
ec2-user wheel www

Now keep typing! :

sudo chown -R root:www /var/www

sudo chmod 2775 /var/www

find /var/www -type d -exec sudo chmod 2775 {} +

find /var/www -type f -exec sudo chmod 0664 {} +

Now on to the next stuff




***********************************
How the hell do I edit my files?? :
***********************************

Well you could do it through the terminal but that is a literalll pain.
SO instead download this handy dandy tool called FILEZILLA:

Download it here:
https://filezilla-project.org/

Download the one for all clients!

Now follow this tutorial:

https://www.youtube.com/watch?v=e9BDvg42-JI

But make sure your key is the key-pair.pem in your desktop

And the host is 54.200.163.169

And DON’T set a password on there, leave that field empty just like in the video.


Once you’re able to connect there should be a bunch of confusing and random files on the right side of the application and the files from your computer on the left.



To find the files we are editing on the application look to the files on the right


Double click on the “/“ folder

Then double click on the “var” folder

Then double click on the “www” folder

Once you’re in the “www” folder you’ll see folders such as “no index”, “inc”, and “html”

“noindex ” is the root file on our website, it’s essentially the page that is displayed when you first search the website

“Inc” is where all our database info is stored. When we write php files, we must import this file.
A sample php file titled “SamplePage.php” is provided under the folder “html”, it shows you how to connect to the database so that stuff like registration can get saved in our tables.

“Html” this is where literally all our html css and php files will be saved.

There should already be the files that I’ve saved in there.

To add new files or replace them pull up the “cs329eproject3” folder from the folders on the LEFT side of the screen. Here’s where all our files from git are saved, so you can drag the new file into the right side folder of html to edit. Or add new files etc.


Happy web siting!!! 


                
                
                
              

                
                
                
                
                
                



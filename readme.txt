{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf600
{\fonttbl\f0\fswiss\fcharset0 Helvetica;\f1\fnil\fcharset0 HelveticaNeue;\f2\fnil\fcharset0 Menlo-Regular;
}
{\colortbl;\red255\green255\blue255;\red53\green53\blue53;\red0\green0\blue0;\red255\green255\blue255;
\red220\green161\blue13;\red85\green142\blue40;\red0\green0\blue0;\red255\green255\blue255;\red52\green52\blue52;
\red255\green0\blue0;}
{\*\expandedcolortbl;\csgray\c100000;\cssrgb\c27059\c27059\c27059;\csgray\c0;\csgray\c100000;
\cssrgb\c89412\c68627\c3922;\csgenericrgb\c33333\c55686\c15686;\csgenericrgb\c0\c0\c0;\cssrgb\c100000\c100000\c100000;\cssrgb\c26667\c26667\c26667;
\csgenericrgb\c100000\c0\c0;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 \

\b\fs28 To access database:
\b0\fs24 \
\
Make sure mysql is installed\
Then in terminal type:\
\
\pard\pardeftab560\slleading20\partightenfactor0

\f1 \cf2 mysql -h chalkboard.cg6puotpoieo.us-west-2.rds.amazonaws.com -P 3306 -u master -p\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0 \cf0 When prompted for password type:\
\
\pard\pardeftab560\slleading20\partightenfactor0

\f1 \cf2 abc12345\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0 \cf0 Once you\'92re in type:\
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0

\f2\fs22 \cf3 \cb4 \CocoaLigature0 USE chalkboard;\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 \cb1 \CocoaLigature1 This makes sure that the chalkboard database is what you\'92re viewing and editing\
\
Type in:\
\
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0

\f2\fs22 \cf3 \cb4 \CocoaLigature0 SHOW tables;\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 \cb1 \CocoaLigature1 To show what tables are in here.\
\
For other mysql commands, just google it. Cause that\'92s what the internet is for. 
\f2\fs22 \cf3 \cb4 \CocoaLigature0 \

\f1\fs24 \cf2 \cb1 \CocoaLigature1 \
\pard\pardeftab560\slleading20\partightenfactor0
\cf2 \
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\b\fs28 \cf0 SSH into server:\
\

\b0\fs24 I will have sent you a key called key-pair.pem\
Save this key-pair in your DESKTOP\
Then in the terminal type: \
\
\pard\pardeftab560\slleading20\partightenfactor0

\f1 \cf2 Cd desktop\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0 \cf0 Then type:\
\
\pard\pardeftab560\slleading20\partightenfactor0

\f1 \cf2 ssh -i "key-pair.pem" {\field{\*\fldinst{HYPERLINK "mailto:ec2-user@ec2-54-200-163-169.us-west-2.compute.amazonaws.com"}}{\fldrslt \cf5 ec2-user@ec2-54-200-163-169.us-west-2.compute.amazonaws.com}}\cf5 \
\

\f0 \cf0  You\'92ll be prompted that it may not be secure and if you wanna access but YOLO and just type yes.\
\
Now you\'92re in! But wait there\'92s more.\
\
Type all this ish in your terminal once you\'92re in:\
\
\cf6 sudo yum update \'96y\
\
sudo yum install -y httpd24 php56 php56-mysqlnd\
\
sudo service httpd start\
\
sudo chkconfig httpd on\
\
sudo groupadd www\
\
sudo usermod -a -G www ec2-user\
\
exit\
\
\pard\pardeftab720\sl360\partightenfactor0

\f1 \cf7 \cb8 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec9 Log back in/ ssh back in again and verify that the\'a0www\'a0group exists with the\'a0groups\'a0command:\
\cf6 groups\
\cf7 \
And it should show up with this:\
ec2-user wheel www\
\
\cf6 sudo chown -R root:www /var/www\
\
sudo chmod 2775 /var/www\
\
find /var/www -type d -exec sudo chmod 2775 \{\} +\
\
find /var/www -type f -exec sudo chmod 0664 \{\} +\
\
\cf7 Now on to the next stuff\cf6 \
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\b\fs28 \cf0 \cb1 \kerning1\expnd0\expndtw0 \outl0\strokewidth0 How the hell do I edit my files?? :\
\

\b0\fs24 Well you could do it through the terminal but that is a literalll pain.\
SO instead download this handy dandy tool called 
\b\fs28 FILEZILLA:\
\

\fs24 Download it here:
\fs28 \
{\field{\*\fldinst{HYPERLINK "https://filezilla-project.org/"}}{\fldrslt https://filezilla-project.org/}}\
\

\b0\fs24 Download the one for all clients!
\b\fs28 \
\
Now follow this tutorial:\
\
\cf6 But make sure your key is the key-pair.pem in your desktop\
\
And the host is 54.200.163.169\
\
And DON\'92T set a password on there, leave that field empty just like in the video.\cf0 \
\
{\field{\*\fldinst{HYPERLINK "https://www.youtube.com/watch?v=e9BDvg42-JI"}}{\fldrslt https://www.youtube.com/watch?v=e9BDvg42-JI}}\
\

\b0\fs24 Once you\'92re able to connect there should be a bunch of confusing and random files on the right side of the application and the files from your computer on the left.\
\
To find the files we are editing on the application look to the files on the right\
\
\
Double click on the \'93\cf10 /\cf0 \'93 folder\
\
Then double click on the \'93\cf10 var\cf0 \'94 folder\
\
Then double click on the \'93\cf10 www\cf0 \'94 folder\
\
Once you\'92re in the \'93\cf10 www\cf0 \'94 folder you\'92ll see folders such as \'93\cf10 no index\cf0 \'94, \'93\cf10 inc\cf0 \'94, and \'93\cf10 html\cf0 \'94\
\
\'93\cf10 noindex\cf0  \'94 is the root file on our website, it\'92s essentially the page that is displayed when you first search the website\
\
\'93\cf10 Inc\cf0 \'94 is where all our database info is stored. When we write php files, we must import this file.\
A sample php file titled \'93
\i SamplePage.php
\i0 \'94 is provided under the folder \'93\cf10 html\cf0 \'94, it shows you how to connect to the database so that stuff like registration can get saved in our tables.\
\
\'93\cf10 Html\cf0 \'94 this is where literally all our html css and php files will be saved.\
\
There should already be the files that I\'92ve saved in there.\
\
To add new files or replace them pull up the \'93cs329eproject3\'94 folder from the folders on the LEFT side of the screen. Here\'92s where all our files from git are saved, so you can drag the new file into the right side folder of html to edit. Or add new files etc.\
\
\
Happy web siting!!! 
\b\fs28 \
\

\f1\b0\fs24 \cf7 \cb8 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec9 \
\pard\pardeftab720\sl360\partightenfactor0
\cf7                 \
                \
                \
              \

\f0 \cf6 \cb1 \kerning1\expnd0\expndtw0 \outl0\strokewidth0 \
\pard\pardeftab560\slleading20\partightenfactor0
\cf6                 \
                \
                \
                \
                \cf0 \
                \
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0
\cf0 \
}
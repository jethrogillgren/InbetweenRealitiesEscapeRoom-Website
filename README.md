# InbetweenRealitiesEscapeRoom-Website
Website code for both the static EC2 page and the Wordpress blog.

##EC2 Static Website
EC2 page can be uploaded by uploading the contents (incl folders) of everything inside Titan-master, including the symlinked assets folders contents.  It used to accept a zip but I cant find how I did that...
The assets folder needs to be named assets, not common-assets.  Easiest is to rename the common-assets folder before uploading.

##S3 Wordpress nginx blog
Backup of wordpress config is on googledrive from UpdraftPlus - Backup/Restore.  AWS EC2 snapshot exists for linux config.
The theme code is partly shared with the EC2 website.
To update, do a git pull and then make sure that sueve-child/footer.php and header.php are updated with any changes.  The header will be different
Upload any images used in the footer
The main css file also needs copying, i

Blog code is really just the theme - everything can be installed using the wordpress site backup in google drive, the then git used to push new changes to the theme.

### Manual upload of Media to Wordpress
File uploader couldnt be configured to accept larger files than 1.something Mb.  Instead files can be put in the year/month folder at /usr/share/nginx/html/blog/wp-content/upload/YEAR/MONTH
		scp  -i ~/.ssh/wordpress-aws.pem filename ec2-user@blog.inbetweenrealitiesescaperoom.com:~

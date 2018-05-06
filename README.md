# InbetweenRealitiesEscapeRoom-Website
Website code for both the static EC2 page and the Wordpress blog.

EC2 page can be uploaded by zipping Titan-master and uploading to the EC2 bucket.

Blog code is really just the theme - everything can be installed using the wordpress site backup in google drive, the then git used to push new changes to the theme.

## Manual upload of Media to Wordpress
File uploader couldnt be configured to accept larger files than 1.something Mb.  Instead files can be put in the year/month folder at /usr/share/nginx/html/blog/wp-content/upload/YEAR/MONTH
		scp  -i ~/.ssh/wordpress-aws.pem filename ec2-user@blog.inbetweenrealitiesescaperoom.com:~

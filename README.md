papa-website-old
================

This website is running on Fly.io 
(the website should be within free limits).

Account - Linked with Github Account with 2FA

App Name - sinharakesh

The code in gallery(php) is very old and does not run on newer php 7.x onwards, 
Since this migrated to "container" deployment for heroku, we continue to use the
same for fly.io deployment. 

##### Steps to make changes

1. make changes to the code and push to github
2. login to fly.io and deploy the app again
OR use `flyctl` utility to connect to fly.io and manage

papa-website-old
================

This website is running on Heroku (free dyno).

Account - trustnit@gmail.com

Heroku App Name - rakeshsinha

The Nameservers of Godaddy (sinharakesh.com) are added in the DNS settings in order to use a domain to reach this site.


The code in gallery(php) is very old and does not run on newer php 7.x onwards, 
we are using "container" deployment in heroku as opposed to using standard Heroku buildbacks.

Since this is now a container deployment, automatic deployment from GitHub branch is disabled.


##### Steps to make changes

```
heroku auth:login

heroku container:login

heroku labs:enable --app=rakeshsinha runtime-new-layer-extract

heroku container:push web -a rakeshsinha

heroku container:release web -a rakeshsinha
```
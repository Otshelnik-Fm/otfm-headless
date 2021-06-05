=== OTFM Headless ===
Contributors: otshelnik-fm
Requires at least: 5.5.0
Tested up to: 5.7
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

For headless WordPress (rest-api only)

== Description ==

The frontend part of the site will be closed, but you can visit the login page (https://your-site.com/wp-login.php) and admin panel and https://your-site.com/wp-json/.
Registration and password reset will be prohibited.

== Installation ==

Installing your theme is pretty easy! After downloading you should have a otfm-headless.zip file.  
This is a compressed file containing all of the required templates and images required for the theme to function properly.  

Upload Theme:

Go to Appearance -> Themes in the WordPress Dashboard  
Click on the Add New button  
Click on the Upload link  
Select the otfm-headless.zip file  
Click on Install Now button  

Activate the theme:

Go to Appearance > Themes in the WordPress Dashboard.  
Now, hover over the theme thumbnail and press the Activate button 

== Requirements ==

PHP 7, 7.1 or 7.2 recommended for better performance, WordPress 5.5

== Additional settings ==

Enter the file in the root of the site .htaccess:

```
<files wp-config.php>
 order allow,deny
 deny from all
</files>

<Files xmlrpc.php>
 order deny,allow
 deny from all
</Files>

<files readme.html>
 order allow,deny
 deny from all
</files>

<files license.txt>
 order allow,deny
 deny from all
</files>
```


== Changelog ==
**2021-06-05**  
v1.2
- remove rss feed
- adding localization
- add description in readme.txt


**2020-02-19**  
v1.1  
- closed the registration of new users (and removed the link to this tab)  
- closed the password recovery tab  
- deleted the link to the main page of the site from the login form  
- removed seo headline: "WordPress" - on login page  
- removed css & js and customized login page  


**2020-01-31**  
v1.0  
- Release  

------------------------------

## Author  

**Wladimir Druzhaev** [Otshelnik-Fm](https://otshelnik-fm.ru)  

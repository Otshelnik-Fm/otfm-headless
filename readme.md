## Description:  

For headless WordPress (rest-api only)  

The frontend part of the site will be closed, but you can visit the login page (https://your-site.com/wp-login.php)
 and admin panel and https://your-site.com/wp-json/.  
Registration and password reset will be prohibited.  

Enter the file in the root of the site .htaccess:  

```
&lt;files wp-config.php&gt;
 order allow,deny
 deny from all
&lt;/files&gt;

&lt;Files xmlrpc.php&gt;
 order deny,allow
 deny from all
&lt;/Files&gt;

&lt;files readme.html&gt;
 order allow,deny
 deny from all
&lt;/files&gt;

&lt;files license.txt&gt;
 order allow,deny
 deny from all
&lt;/files&gt;
```

------------------------------

## Installation  

Installing your theme is pretty easy! After downloading you should have a otfm-headless.zip file.  
This is a compressed file containing all of the required templates and images required for the theme to function properly.  

### Upload Theme  

Go to Appearance -> Themes in the WordPress Dashboard  
Click on the Add New button  
Click on the Upload link  
Select the otfm-headless.zip file  
Click on Install Now button  

### Activate the theme  

Go to Appearance > Themes in the WordPress Dashboard.  
Now, hover over the theme thumbnail and press the Activate button  

------------------------------

## Changelog:  

**2020-02-19**  
v1.1  
- [x] closed the registration of new users (and removed the link to this tab)  
- [x] closed the password recovery tab  
- [x] deleted the link to the main page of the site from the login form  
- [x] removed seo headline: "WordPress" - on login page  
- [x] removed css & js and customized login page  


**2020-01-31**  
v1.0  
- [x] Release  

------------------------------

## Author  

**Wladimir Druzhaev** [Otshelnik-Fm](https://otshelnik-fm.ru)  

# Wordpress Restaurant Theme

A responsive WordPress restaurant theme that features an elegant full-width layout with color customization, custom fields, and offers online reservations.

## View Project

[View Project](http://www.wprestaurant.us/ "WordPress Restaurant Theme")

[![wp-restaurant](https://github.com/thaitwo/wordpress-restaurant/blob/master/assets/screenshot-wp.png?raw=true)](http://www.wprestaurant.us/)

# Install WordPress Locally
### STEP 1. DOWNLOAD WORDPRESS

Download latest version of WordPress as zip file

Create new folder in directory and place zip file in it


### STEP 2. INSTALL & LAUNCH MAMP ON COMPUTER

Download free version of MAMP (must run Mac OS X 10.6.6 or later)

Install and launch MAMP (go to Applications folder)

### STEP 3. SET THE PORTS

A window should appear. Click on "Preferences".

Select the "Ports" tab. Default should have Apache as 8888 and MySQL as 8889. Go ahead click ok and leave as is.

![MAMP Ports](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-2.png)

### STEP 4. CONFIGURE WEB SERVE & DOCUMENT ROOT

Select "Web Server" tab.

Make sure the web server is "Apache".

Change document root to the folder that you created earlier with the WordPress zip file in it. (You're specifying where MAMP will be looking for all your files)

### STEP 5. START SERVERS

Click "Start Servers"

A window should open with info indicating your setup and other MAMP info.

![MAMP Welcome](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-3.png)

### STEP 6. CREATE A MYSQL DATABASE

You need to go to phpMyAdmin by either clicking on the phpMyAdmin link on the MAMP start page or visiting http://localhost:888/phpMyAdmin

![MySQL Page](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-4.png)

You should see these databases on the side panel:

* information_schema
* mysql
* performance_schema

Click on the "databases" tab in the top navigation.

Name your database (ie. "website_db").

![MySQL Database](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-5.png)

Click the "create" button.

### STEP 7. UNZIP WORDPRESS INSTALL

Head back over to foot folder you set up in step one.

Upzip the WordPress zip file.

Rename new folder to something relevant to site.

Open the folder.

### STEP 8. CONFIGURE WP-CONFIG.PHP FILE

Find and open the "wp-config-sample.php" file with text editor.

Replace 'database__name__here' with name of your database (ie. 'website_db')

Replace 'username_here' and 'password_here' with 'root' (which is the default for the database your created before in phpMyAdmin.

Save file and exit out of it.

IMPORTANT: Rename the file from wp-config-sample.php to wp-config.php (remove the word sample)

### STEP 9. INSTALL WORDPRESS

Open browser and type in the url pointing to your site folder.

**localhost:8888/name-of-root-folder**

If done correctly, you should see this screen.

![WP Install Screen](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-1.png)

Select English and click continue. You will be prompted to fill out a few field along with your username and password. You will need your username and password to log into the Wordpress dashboard later.

![WP Info](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-6.png)

The "Privacy" checkbox can be left unchecked but it doesn't really matter as the site is running locally, not online.

After all the information has been filled out, click the "Install Wordpress" button.

You should immediately see a success screen.

![WP Success](https://raw.githubusercontent.com/thaitwo/wordpress-restaurant/master/assets/wp-7.png)

### STEP. 10 LOG INTO THE WORDPRESS DASHBOARD

Log into the local site by visting:

**http://localhost:8888/site-directory/wp-admin**

You should see a login screen. Input your username and password to login.

Once inputted, the WordPress dashboard should appear.

WordPress has been set up locally! Yeeee!!!

### STEP 11. USING MAMP IN THE FUTURE

What happens when you want to take a break or restart your computer? It's quite simple.

**1.** Open the MAMP application.

**2.** Click "Start Servers" and wait for the two litte boxes in the upper right corner to turn green, indicating that MAMP is up and running.

**3.** Visit the url: **localhost:8888/name-of-root-folder**

**4.** To login, add **"/my-admin"** behind the folder name (localhost:8888/name-of-root-folder/my-admin)
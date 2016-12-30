# Install WordPress Locally
#### STEP 1. INSTALL WORDPRESS

Download latest version of WordPress as zip file

Create new folder in directory and place zip file in it


#### STEP 2. INSTALL & LAUNCH MAMP ON COMPUTER

Download free version of MAMP (must run Mac OS X 10.6.6 or later)

Install and launch MAMP (go to Applications folder)

#### STEP 3. SET THE PORTS

A window should appear. Click on "Preferences".

Select the "Ports" tab. Default should have Apache as 8888 and MySQL as 8889. Go ahead a leave as is.

#### STEP 4. CONFIGURE WEB SERVE & DOCUMENT ROOT

Select "Web Server" tab.

Change document root to the folder that you created earlier with the WordPress zip file in it. (You're specifying where MAMP will be looking for all your files)

#### STEP 5. START SERVERS

Click "Start Servers"

A window should open with info indicating your setup and other MAMP info.

#### STEP 6. CREATE A MYSQL DATABASE

You need to go to phpMyAdmin by either clicking on the phpMyAdmin link on the MAMP start page or visiting http://localhost:888/phpMyAdmin

You should see these databases on the side panel:

* information_schema
* mysql
* performance_schema

Click on the "databases" tab in the top navigation.

Name your database (ie. "website_db").

Click the "create" button.

#### STEP 7. UNZIP WORDPRESS INSTALL

Head back over to foot folder you set up in step one.

Upzip the WordPress zip file.

Rename new folder to something relevant to site.

Open the folder.

#### STEP 8. CONFIGURE WP-CONFIG.PHP FILE

Find and open the "wp-config-sample.php" file with text editor.

Replace 'database__name__here' with name of your database (ie. 'website_db')


[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `_s` from GitHub. The first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `megatherium`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in style.css.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

* Search for: `'_s'` and replace with: `'megatherium'`
* Search for: `_s_` and replace with: `megatherium_`
* Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium` in style.css.
* Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `_s-` and replace with: `megatherium-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!

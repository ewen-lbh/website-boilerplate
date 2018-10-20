#Mx3's Custom Boilerplate

This boilerplate is what I start with when I begin a new website project. It uses SCSS and PHP

##Presentation

Remember to replace all "{\_\_NAME\_\_}" occurrences in the project with your website's name.

The file 'home.php' is filled with a template that should be used by all pages.

the `<html>` tags have a lang attribute set to "fr" since most of my websites are made for French people. The Self-XSS warning js file is also in French, but that's it.

By default, a set of colors, fonts, and media breakpoints are set but commented. See it in the variables.scss file.

From now on, the notation "{something}" is used to mean that *something* needs to be replaced by what it represents, eg. {title} means that *title* should be replaced with the title.

##Structure

The boilerplate consists of three main directories:

* Resources
* Pages
* Components
  
The resources contain styles, scripts, classes, images, fonts, audio and external (eg. Mediaelement, bootstrap, etc) files.


The pages contain folders for each page that will be **viewed** by the user. Each folder contains a sass file and PHP file, for specific styling of each page.


The components contain code and styling that should be **included** in pages. Eg navbar, footer, head. (The three components included by default)

##Variables

###PHP

A notation is used for PHP variables that are available across each page.
* These variables start with one underscore. eg `$_title`.
* They're set a the beginning of the head file.

###Utility & Style Classes

* Utility classes are defined in style-classes.scss.
* They may be used to style an element, regardless of where the file is.
* Utility classes start with an underscore, eg. `class="_center"`

###Page-specific styling

* Class names begin with *two* underscores. eg `.__home {}`
* They're automatically set on the body tag with the variable `$_filename` defined in head.php.
* Each sass file that styles a particular page has all its styles wrapped in a `.__{name}`, to avoid styling other pages.

##.htaccess & index.php
To allow for cleaner URLs, a .htaccess file is included at the root of the project, with a RewriteRule that simply remove the */page/* and .php parts, and allow for an optional closing slash at the end of the URL.

It also contains an ErrorDocument rule that simply redirects to error/404.php for 404 errors. You may add other error codes like 403.

There's also an index.php at the root of the project, that starts a session (`session\_start()`) and redirects to */home/* using `header()`. 
You may define default values here for `$_SESSION` variables.

##Self-XSS

In head.php, a `warning-self-xss.js` file is imported. This file contains styled console logs for Self-XSS prevention, tho the text is in French.

##Contributing

You may contribute to this project, but remember that the main branch will stay like what I used **MYSELF** for my projects. Issues that tell me that the project should contain x library is useless. Just add them yourself!

##.code-snippets file

This shouldn't be included in the boilerplate, but rather used by VSCode, to allow quick and easy templates insertion.

It contains :

* Page template
* Error page template
* Page-specific style template (.scss file)
* More generic but useful little snippets, like require\_once wrapped in PHP tags with a document\_root added, or another that allows to `echo` easily in HTML content

##The end

Thanks for reading all the way down! 

For other projects, check out my [personnal website](https://mx3.thedevlab.co/), which is both in French & English
# cooked

This is a lightweight recipe website that can be hosted on any LAMP server. See http://teamhokies.com/recipes for a working instance example. This is developed for my personal use. I'm an electrical engineer, not a software developer, so don't expect some kind of professional branching and merging and versioning. I'll update code to suit my own needs and update this as I go. If you have something to contribute please let me know, maybe it should be added to the respository.

## Getting Started

Place the entire contents of the 'cooked' folder in a publicly accessible area of your web server (this document assumes you chose yourdomain.com/cooked).

Edit the creds.php file with the username and password for your mysql database.

Go to http://yourdomain.com/cooked/initdb.php which will blow away everything in the database and repopulate it from scratch. Then go to http://yourdomain.com/cooked to view the recipe list.

All recipes are stored under cooked/recipes. Each of these php files are executed during the database load so only put trusted files in this directory. To add, edit, or remove a recipe, add, edit or remove files in the recipes/ directory. Look at this files for exmaples on how to add your own recipes to the database.

### Prerequisites

Linux/Apache/MySQL/PHP

## Versioning

I haven't been versioning, let's call my initial upload 1.0 :)

## License

Public domain, nothing special here.

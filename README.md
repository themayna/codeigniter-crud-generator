Crud generator
======

This is a module that will create a crud for your table in Codeigniter hmvc.

All you need to do is:

    - Setup your database(config/databse.php),
    - Set an encryption key(config/config.php)->['encryption_key'] ='Whatever';


This script will work only in HMVC CODEIGNITER 
	It will create a module with the following structure and populate the files with the required code based on you sql table selection.

		tablename
			controllers
				tablename.php
			models
				tablename_model.php
			views
				add.php
				edit.php
				index.php
				view.php

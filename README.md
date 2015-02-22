{\rtf1\ansi\ansicpg1252\cocoartf1344\cocoasubrtf720
{\fonttbl\f0\fmodern\fcharset0 Courier;\f1\fnil\fcharset0 Menlo-Regular;\f2\fnil\fcharset0 Menlo-Bold;
}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;\red102\green0\blue0;\red255\green228\blue255;
\red247\green250\blue255;\red0\green128\blue0;}
\margl1440\margr1440\vieww13960\viewh8400\viewkind0
\deftab720
\pard\pardeftab720

\f0\fs24 \cf2 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 Crud generator\
======\
\
This is a modules that will create a crud for your table in Codeigniter hmvc.\
All you need to do is:\
	- Setup your database(config/databse.php),\
	- Set an encryption key(config/config.php)->
\f1 \cf3 \cb4 \kerning1\expnd0\expndtw0 \outl0\strokewidth0 $config\cf0 \cb5 [
\f2\b \cf6 \cb5 'encryption_key'
\f1\b0 \cf0 \cb5 ] = 
\f2\b \cf6 \cb5 \'91Whatever\'92
\f1\b0 \cf0 \cb5 ;\

\f0 \cf2 \cb1 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 \
This script will work only in HMVC CODEIGNITER \
	It will create a module with the following structure \cf0 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 and populate the files with the 			required code based on you sql table selection.\
\cf2 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 	\
		tablename\
			controllers\
				tablename.php\
			models\
				tablename_model.php\
			views\
				add.php\
				edit.php\
				index.php\
				view.php\
}
# Pearson PHP MVC Framework

## Reading the README :

Commands that should be run in a terminal should be marked with ```>``` , the arrow itself should not be typed in the terminal. 

This project is dependent on Composers' autoloader, and thus requires us to composer install our application. Even if we don't require any depenacies.

## Steps to get up and running :

1. Install PHP Locally on your computer

2. Check that PHP is installed by running : ```> php -V```

3. Install Composer. Composer's Documentation can be found at https://getcomposer.org/doc/

4. Check that composer is installed by running : ```> composer```. This should give you a list of composer commands.

5. Clone the repo for the Pearson PHP MVC Framework.

6. Change Directories into the Project folder : ```> cd path/to/your/project/folder```

   1. At the root you should see the following folders

      ​	App

      		- Controllers
      		- Core
      		- Models
      		- Views
      		- Route.php

        Cache

      ​	 Public 

	        - assets
	        - css
	        - js
	        - Index.php

        composer.json

      ​	 .gitignore
      
        README.md (Which is this readme doc).
   
    If this is what you find, you are in the right place! 
   
7. run ```> composer install``` 

   1. This should create a vendor folder at the root directory as well as a composer.json file.
   2. The application should now be working!

## The MVC (Model / View / Controller) Design Pattern

### app\Models
A Model in a MVC framework represents a single record in a database, or a single object/array.

### app\Views
The view is also known as our Visual Layer. 

### app\Controllers
This is also known as the logic layer of our application. 
In a MVC framework, all of our logic is handled in a controller -- the controller talks to our models and sends the data to our view.

**Required :** Controllers will need to include the word 'Controller' in the file name. Your controller name should be based on the name of the model it will be interacting with in it's plural form.

For example: 'ContactsController.php'

#### Method names for Controllers

```index()``` is generally a GET request used for a complete list of all of a specific model. For example, if you were outputing a list of employees that would link to profiles.

```create()``` is generally a GET request used for returning the view of a form to create a given resource. This is usually passed to the ```store()``` method (shown below).

```store()``` is generally a POST request for creating a new resource for the specified model. For example, If you wanted to create a new employees's profile.

```show($id)``` is generally a GET request use for a specific instance of the specified model. For example, the exact employee's profile.

```edit()``` is generally a GET request used to show a form to request an edit of a specific resource.

```destroy()``` is generally a DELETE request to delete a specific resource.
   
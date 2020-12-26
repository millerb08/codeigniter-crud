# codeigniter
test framework

# VIEWS
The views are in *app/Views*

# CONTROLLERS
The controllers are in *app/Controllers*

# MODELS
The models are in *app/Models*

# ROUTES
The routes are in *app/Config*

# PUBLIC
This folder for images and css, js in *public*

# DATABASE
The file for the conection on the database is in *app/Config/Database.php*

# CREATING NEW CONTROLLER
The name of the file needs to be the same as the class, like *HelloWord.php*

<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Helloworld extends Controller
{
    public function index()
    {
        echo 'Hello World!';
    }
}

# CONNECTION TO DB
The file is in app/Config/Database.php
- 'username' => 'root' 
- 'database' => 'blog',
Change the user and the name of the database

# MODELS

<?php namespace App\Models;

use CodeIgniter\Model;

class CategoriasModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = "id_categoria"

}

- The file name has to be the same as the class *CategoriasModel.php*, also change the primaryKey if is not the default value

To use the model in the Controller simply type

- use App\Models\CategoriasModel; 

# Controller with show

- http://localhost/users/show/1

# API KEY
        $request = \Config\Services::request();
        $headers = $request->getHeaders();

        if(array_key_exists("Authorization", $headers) && !empty($headers["Authorization"])){
            /* make the key authorization */
            if($request->getHeader("Authorization") == "Authorization: 12345abd");
            /** should take status 500 if not valid*/
        }
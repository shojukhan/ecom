<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Cretate_user;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class cretateuserController extends Controller
{
    public function user_create()
    {
        return view('user-info.user_registration');
    }
    public function createuser(Request $request)
    {
        // Validation and password hashing
        $this->validate($request, [
            'username' => 'required|unique:cretate_users',
            'password' => 'required|min:8',
        ]);

        $data = new Cretate_user();
        $data->uname = $request->fullname;
        $data->username = $request->username;
        $data->uemail = $request->email;
        $data->mobile = $request->Mobile;
        $data->upass = $request->password;
        $data->shopname = $request->shopname;
        // Generate a unique URL for the user
        $uniqueURL = 'http//:localhost/' . $data->username;

        // Create a new database for the user
        $userDatabaseName = Str::slug($data->username);
        Schema::create($userDatabaseName, function ($table) {
            // Define the schema for the user's database tables
            $table->increments('id');
            $table->string('data'); //Add more columns as needed
        });
        //store the $uniqueURL in the user's record if needed
        $data->unique_url = $uniqueURL;
        $data->database_name = $userDatabaseName;
        // You can store the $userDatabaseName in the user's record if needed
        $data->database_name = $userDatabaseName;
        $data->unique_url = $uniqueURL;
        $data->save();

        // Create a separate database connection for the user
        config([
            'database.connections.' . $userDatabaseName => [
                'driver' => 'mysql',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', '3306'),
                'database' => $userDatabaseName,
                'username' => env('DB_USERNAME', 'shojibkhan'),
                'password' => env('DB_PASSWORD', 'Shojibkhan123'),
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
            ],
        ]);

        DB::purge($userDatabaseName);
        // Switch to the user's database connection
        $userDB = DB::connection($userDatabaseName);

        // Perform database operations specific to this user

        // Close the user's database connection
        $userDB->disconnect();
        return redirect()->route('setting')->with('massage', 'user successfully add');
        return back();
    }

    // login form start here
    public function userlogin (){
        return view('user-info.user_login');

    }
}

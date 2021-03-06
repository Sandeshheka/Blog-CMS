<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        $admin = new Role;
        $admin->name = "admin";
        $admin->display_name ="admin";
        $admin->save();


        //create editor role
        $editor = new Role;
        $editor->name = "editor";
        $editor->display_name ="Editor";
        $editor->save();
        
        //create author role
       $author = new Role;
       $author->name = "author";
       $author->display_name ="Author";
       $author->save();

        //Attach the role
        //first user as admin
       $user1 = User::find(1);
       $user1->detachRole($admin);
       $user1->attachRole($admin);

       //second user as editor
       $user2 = User::find(2);
       $user2->detachRole($editor);
       $user2->attachRole($editor);

       //third user as author
       $user3 = User::find(3);
       $user3->detachRole($author);
       $user3->attachRole($author);
    }
}

<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $createCar = new Permission();
        $createCar->name         = 'cadastrar-carros';
        $createCar->display_name = 'Criar carro'; // optional
        // Allow a user to...
        $createCar->description  = 'create new car'; // optional
        $createCar->save();

        $editUser = new Permission();
        $editUser->name         = 'editar-usuario';
        $editUser->display_name = 'Editar usuário'; // optional
        // Allow a user to...
        $editUser->description  = 'editar usuário existente'; // optional
        $editUser->save();
        

        $alugarCarro = new Permission();
        $alugarCarro->name         = 'alugar-carro';
        $alugarCarro->display_name = 'Alugar carro'; // optional
        // Allow a user to...
        $alugarCarro->description  = 'alugar carro existente'; // optional
        $alugarCarro->save();
        */

        $owner->attachPermission($alugarCarro);
        // equivalent to $admin->perms()->sync(array($createPost->id));

        $admin->attachPermissions(array($createCar, $editUser));
        // equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));
    }
}

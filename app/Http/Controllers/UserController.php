<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function getAdmin(){
        $admins = User::role('admin')->get();
        return $admins;
    }

    public function getModerator(){
        $moderators = User::role('moderator')->get();
        return $moderators;
    }

    public function promoteToModerator(User $user){
        $roles = $user->getRoleNames();

       foreach ($roles as $role) {
            $user->removeRole($role);
        }

        $user->assignRole('moderator');

        return response()->json(['message' => 'moderator added successfully']);
    }

    public function promoteToAdmin(User $user){
        $roles = $user->getRoleNames();

        foreach ($roles as $role) {
            $user->removeRole($role);
        }

        $user->assignRole('admin');

        return response()->json(['message' => 'administrator added successfully']);
    }

    public function revokeModerator(User $user){
        $roles = $user->getRoleNames();

        foreach ($roles as $exist) {
            if($exist == 'moderator'){
                foreach ($roles as $role) {
                    $user->removeRole($role);
                }
                $user->assignRole('user');
                return response()->json(['message' => 'moderator revoked']);
            }
        }
        return response()->json(['message' => 'user is not moderator']);
    }

    public function revokeAdmin(User $user){
        $roles = $user->getRoleNames();

        foreach ($roles as $exist) {
            if($exist == 'admin'){
                foreach ($roles as $role) {
                    $user->removeRole($role);
                }
                $user->assignRole('moderator');
                return response()->json(['message' => 'admin revoked']);
            }
        }
        return response()->json(['message' => 'user is not moderator']);
    }

    public function getAllUser(){
        $user = User::all();
        return response()->json(['success' => $user], 200);
    }
}

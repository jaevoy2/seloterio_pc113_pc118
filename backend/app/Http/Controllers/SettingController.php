<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\User;
use App\Models\Role;

class SettingController extends Controller
{
    public function showAll() {
        return response()->json([
            'permissions' => Permission::all(),
            'roles' => Role::all()
        ]);
    }

    public function showSpecific(Request $request) {
        $roleId = Role::with('permissions')->where('id', $request->role_id)->first();
        $permissions = Permission::all();
        return response()->json([
            'role' => $roleId,
            'permissions' => $permissions
        ]);
    }

    public function saveRole(Request $request) {
        try {
            $validate = $request->validate([
                'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'permissions' => 'required'
            ]);

            $role = Role::create($validate);

            if($request->permissions) {
                $role->permissions()->sync($request->permissions);
            }

            return response()->json([
                'message' => 'Role created successfully',
                'permissions' => $request->permissions
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function saveEditRole(Request $request) {
        try {
            $role = Role::find($request->id);
            $validate = $request->validate([
                'name' => ['nullable', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'permissions' => 'nullable'
            ]);
            $validate['name'] = ucwords(strtolower($validate['name']));
            $role->update($validate);

            if($request->permissions) {
                $role->permissions()->sync($request->permissions);
            }

            return response()->json([
                'message' => 'Role updated successfully',
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function deleteRole(Request $request) {
        DB::beginTransaction();
        try {
            $role = Role::find($request->id);
            $default = Role::where('name', 'Unassigned')->first();
            $users = User::where('role_id', $role->id)->get();

            User::where('role_id', $role->id)->update(['role_id' => $default->id]);
            foreach($users as $user) {
                $user->permissions()->detach();
            }
            $role->delete();
            DB::commit();
            return response()->json([
                'message' => 'Role deleted successfully'
            ]);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }





    // menus
    public function menus() {
        return response()->json([
            'menus' => Menu::with('permissions')->get()
        ]);
    }

    public function access(){
        $menus = Menu::with('permissions')->get();
        $permissions = Permission::all();
        return response()->json([
            'menus' => $menus,
            'permissions' => $permissions
        ]);
    }

    public function saveMenuPerm(Request $request) {
        try{
            $menuPerm = Menu::with('permissions')->get();
            foreach($menuPerm as $removePerm) {
                $removePerm->permissions()->detach();
            }

            foreach($request->menus as $menuData) {
                $menu = Menu::find($menuData['id']);
                $menu->permissions()->sync($menuData['permissions']);
            }

            return response()->json([
                'message' => 'Saved',
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }




}

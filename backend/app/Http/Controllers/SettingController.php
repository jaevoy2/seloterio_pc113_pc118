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

    public function saveRole(Request $request) {
        try {
            $validate = $request->validate([
                'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/']
            ]);
            $validate['name'] = ucwords(strtolower($validate['name']));
            $role = Role::create($validate);
            return response()->json([
                'message' => 'Role created successfully',
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
                'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/']
            ]);
            $validate['name'] = ucwords(strtolower($validate['name']));
            $role->update($validate);

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
                'message' => 'Role deleted successfully, user reassigned successfully'
            ]);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function savePermission(Request $request) {
        try {
            $validate = $request->validate([
                'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/']
            ]);
            $validate['name'] = ucwords(strtolower($validate['name']));
            $permission = Permission::create($validate);
            return response()->json([
                'message' => 'Permission added successfuly'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function editPermission(Request $request) {
        try {
            $permission = Permission::find($request->id);
            $validate = $request->validate([
                'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/']
            ]);
            $validate['name'] = ucwords(strtolower($validate['name']));
            $permission->update($validate);
            return response()->json([
                'message' => 'Permission updated successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function removePermisison(Request $request) {
        try {
            $permission = Permission::find($request->id);
            $permission->delete();

            return response()->json([
                'message' => 'Permission deleted successfully'
            ]);
        }catch(Exception $e) {
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

    public function storeMenu(Request $request) {
        $validate = $request->validate([
            'name' => 'array',
            'menus.*.name'
        ]);
        foreach ($request->menus as $menu) {
            Menu::create([
                'name' => $menu['name']
            ]);
        }
        return response()->json([
            'message' => 'Inserted'
        ]);
    }

    public function storeMenuPermission(Request $request) {
        try {
            $validate = $request->validate([
                'menu_id' => 'required',
                'permission_id' => 'required'
            ]);
            $menu = Menu::find($request->menu_id);
            $menu->permissions()->syncWithoutDetaching($request->permission_id);
            return response()->json([
                'message' => 'Added successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function removePermission(Request $request) {
        try {
            $menu = Menu::find($request->menu_id);
            $hasPermission = $menu->permissions()
            ->wherePivot('permission_id', $request->permission_id)
            ->exists();

            if($hasPermission) {
                $menu->permissions()->detach($request->permission_id);
            }
            return response()->json([
                'message' => 'Permission removed'
            ]);
        }catch(Exception $e) {
            return respons()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}

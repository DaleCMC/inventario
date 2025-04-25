<?php


namespace App\Tablar\Filters;


use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;


class RoleFilter
{
    public function transform($item)
    {
        $user = Auth::user();


        // Verificar si tiene roles definidos
        if (isset($item['hasAnyRole']) && !$user?->hasAnyRole($item['hasAnyRole'])) {
            return false; // No mostrar el ítem
        }


        if (isset($item['hasAllRoles']) && !$user?->hasAllRoles($item['hasAllRoles'])) {
            return false;
        }


        if (isset($item['hasAnyPermission']) && !$user?->hasAnyPermission($item['hasAnyPermission'])) {
            return false;
        }


        if (isset($item['hasAllPermissions']) && !$user?->hasAllPermissions($item['hasAllPermissions'])) {
            return false;
        }


        return $item;
    }
}

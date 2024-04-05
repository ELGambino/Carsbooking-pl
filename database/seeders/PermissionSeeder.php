<?php
namespace Database\Seeders;
 
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $actions = [
            'BookingStatus',
            'AddBooking',
            'CancelBooking',
            'ConfirmBooking',
            'AddCar',
            'EditCar',
            'DeleteCar',
            'CarList',
        ];
 
        $resources = [
            'Client',
            'CarRental',
        ];
 
        collect($resources)
            ->crossJoin($actions)
            ->map(function ($set) {
                return implode('.', $set);
            })->each(function ($permission) {
                Permission::create(['name' => $permission]);
            });
    }
}
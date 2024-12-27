<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserWarehouse;
use App\Models\Warehouse;
use App\Models\User;
use App\Models\Role;
class UsersTableWithRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        DB::table('users')->delete();
        DB::table('user_details')->delete();
        DB::table('role_user')->delete();
        DB::table('user_warehouse')->delete();

        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE user_details AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE role_user AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE user_warehouse AUTO_INCREMENT = 1');

        $Warehouses = Warehouse::get();

        foreach ($Warehouses as $warehouse) {
            // Admin User
            $adminRole = Role::where('name', 'admin')
                ->where('company_id', $warehouse->company_id)->first();
            $admin = new User();
            $admin->name = $warehouse->name . ' Admin';
            $admin->company_id = $warehouse->company_id;
            $admin->email = $warehouse->email;
            $admin->password = '12345678';
            $admin->warehouse_id = $warehouse->id;
            $admin->role_id = $adminRole->id;
            $admin->user_type = "staff_members";
            $admin->save();
            $admin->attachRole($adminRole->id);

            $company = Company::find($warehouse->company_id);
            $company->admin_id = $admin->id;
            $company->save();
            // Salesman
            // $salesmanRole = Role::where('name', 'salesman')->first();
            // $salesman = new User();
            // $salesman->name = $warehouse->name . ' Salesman';
            // $salesman->email = 'salesman@example.com';
            // $salesman->password = '12345678';
            // $salesman->warehouse_id = $electroniflyWarehouse->id;
            // $salesman->role_id = $salesmanRole->id;
            // $salesman->user_type = "staff_members";
            // $salesman->save();
            // $salesman->attachRole($salesmanRole->id);

            // $userWarehouse = new UserWarehouse();
            // $userWarehouse->user_id = $salesman->id;
            // $userWarehouse->warehouse_id = $electroniflyWarehouse->id;
            // $userWarehouse->save();

            // Stock Manager
            // $stockManagerRole = Role::where('name', 'stock_manager')->first();
            // $stockManager = new User();
            // $stockManager->name = 'Stock Manager';
            // $stockManager->email = 'stockmanager@example.com';
            // $stockManager->password = '12345678';
            // $stockManager->warehouse_id = $electroniflyWarehouse->id;
            // $stockManager->role_id = $stockManagerRole->id;
            // $stockManager->user_type = "staff_members";
            // $stockManager->save();
            // $stockManager->attachRole($stockManagerRole->id);

            // $userWarehouse = new UserWarehouse();
            // $userWarehouse->user_id = $stockManager->id;
            // $userWarehouse->warehouse_id = $electroniflyWarehouse->id;
            // $userWarehouse->save();
        }
    }
}

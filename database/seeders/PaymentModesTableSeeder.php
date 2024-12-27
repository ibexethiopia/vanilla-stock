<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\PaymentMode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentModesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Model::unguard();

        DB::table('payment_modes')->delete();

        DB::statement('ALTER TABLE payment_modes AUTO_INCREMENT = 1');
        $company = Company::get();
        foreach ($company as $comp) {
            $paymentMode = new PaymentMode();
            $paymentMode->name = "Cash";
            $paymentMode->mode_type = "cash";
            $paymentMode->company_id = $comp->id;
            $paymentMode->save();

            $paymentMode = new PaymentMode();
            $paymentMode->name = "Stripe";
            $paymentMode->company_id = $comp->id;
            $paymentMode->save();

            $paymentMode = new PaymentMode();
            $paymentMode->name = "Paypal";
            $paymentMode->company_id = $comp->id;
            $paymentMode->save();
        }
    }
}

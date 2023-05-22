<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'account_name' => "Water Test Company 1",
            'business_tin' => "123124125215",
            'name_of_owner' => "Juna Dela Cruz",
            'type_of_ownership' => "sole",
            'name_of_authorized_person' => "Juna Dela Cruz",
            'unit_no_floor_bldg_name' => "13123",
            'street_name_or_subdivision' => "palmera",
            'barangay_name' => "176",
            'municipality_or_city' => "caloocan",
            'zip_code' => "1428",
            'province' => "ncr",
            'phone' => "099744214122",
            'mobile' => "099744214122",
            'email' => "water@gmail.com",
            'preferred_model_of_contract' => "phone",
            'fsr_assigned' => "12312424",
            'market_segment' => "test",
            'no_of_microbiology_samples' => "4",
            'sample_collection_frequency_micro' => "4",
            'no_of_physico_chemical_samples' => "3",
            'sample_collection_frequency_pchem' => "3",
            'assigned_week' => "2",
            'type' => 'Walk-In',
        ]);

        Client::create([
            'account_name' => "Water Test Company 1",
            'business_tin' => "123124125215",
            'name_of_owner' => "Juna Dela Cruz",
            'type_of_ownership' => "sole",
            'name_of_authorized_person' => "Juna Dela Cruz",
            'unit_no_floor_bldg_name' => "13123",
            'street_name_or_subdivision' => "palmera",
            'barangay_name' => "176",
            'municipality_or_city' => "caloocan",
            'zip_code' => "1428",
            'province' => "ncr",
            'phone' => "099744214122",
            'mobile' => "099744214122",
            'email' => "water@gmail.com",
            'preferred_model_of_contract' => "phone",
            'fsr_assigned' => "12312424",
            'market_segment' => "test",
            'no_of_microbiology_samples' => "4",
            'sample_collection_frequency_micro' => "4",
            'no_of_physico_chemical_samples' => "3",
            'sample_collection_frequency_pchem' => "3",
            'assigned_week' => "2",
            'type' => 'Regular',
        ]);
    }
}

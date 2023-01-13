<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            'name' => 'Contact',
            'email' => 'contact@example.com',
            'message' => 'This is my contact message',
        ];
        Contact::create($contact);

    }
}

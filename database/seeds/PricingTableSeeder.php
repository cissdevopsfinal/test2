<?php

use Illuminate\Database\Seeder;

class PricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\pricing::create([
            'id'=>'1',
            'optone' => 'Black Coffee',
            'opttwo' => 'Standing',
            'optthree' => 'none',
            'price' => '1500',
        ]);
        \App\pricing::create([
            'id'=>'2',
            'optone' => 'Black Coffee',
            'opttwo' => 'VIP',
            'optthree' => 'none',
            'price' => '2500',
        ]);
        \App\pricing::create([
            'id'=>'3',
            'optone' => 'Black Coffee',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'none',
            'price' => '3500',
        ]);
        ////////////////////////////END OF BLACK COFFEE////////////////////////////
        \App\pricing::create([
            'id'=>'4',
            'optone' => 'Rodge',
            'opttwo' => 'Standing',
            'optthree' => 'none',
            'price' => '1000',
        ]);
        \App\pricing::create([
            'id'=>'5',
            'optone' => 'Rodge',
            'opttwo' => 'Seated',
            'optthree' => 'Lounge',
            'price' => '0',
        ]);
        \App\pricing::create([
            'id'=>'6',
            'optone' => 'Rodge',
            'opttwo' => 'Seated',
            'optthree' => 'High-Table',
            'price' => '0',
        ]);
        ////////////////////////////END OF RODGE////////////////////////////
        \App\pricing::create([
            'id'=>'7',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'Standing',
            'optthree' => 'none',
            'price' => '2000',
        ]);
        \App\pricing::create([
            'id'=>'8',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'Standing',
            'optthree' => 'Lounge',
            'price' => '2000',
        ]);
        \App\pricing::create([
            'id'=>'9',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'Standing',
            'optthree' => 'High-Table',
            'price' => '2000',
        ]);
        \App\pricing::create([
            'id'=>'10',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'VIP',
            'optthree' => 'none',
            'price' => '3000',
        ]);

        \App\pricing::create([
            'id'=>'11',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'VIP',
            'optthree' => 'Lounge',
            'price' => '3000',
        ]);
        \App\pricing::create([
            'id'=>'12',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'VIP',
            'optthree' => 'High-Table',
            'price' => '3000',
        ]);
        \App\pricing::create([
            'id'=>'13',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'none',
            'price' => '4000',
        ]);
        \App\pricing::create([
            'id'=>'14',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'Lounge',
            'price' => '4000',
        ]);
        \App\pricing::create([
            'id'=>'15',
            'optone' => 'Black Coffee & Rodge',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'High-Table',
            'price' => '4000',
        ]);
        ////////////////////////////END OF Black Coffee & Rodge////////////////////////////
        \App\pricing::create([
            'id'=>'16',
            'optone' => 'Black Coffee & Rodge & Arura',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'none',
            'price' => '4500',
        ]);
        \App\pricing::create([
            'id'=>'17',
            'optone' => 'Black Coffee & Rodge & Arura',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'Lounge',
            'price' => '4500',
        ]);
        \App\pricing::create([
            'id'=>'18',
            'optone' => 'Black Coffee & Rodge & Arura',
            'opttwo' => 'BACKSTAGE',
            'optthree' => 'High-Table',
            'price' => '4500',
        ]);
    }
}

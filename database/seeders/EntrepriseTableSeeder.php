<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Entrep;

class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //This resets the table, deleting all the data everytime the function is called.
       // Entrep::truncate();
Entrep::create([
            'nom' => 'MSM',
           
            'email' => 'fathi@gmail.com',
         
            'adr' => 'route Sousse',
            'contenu' => 'route Sousse ggggg',
        ]);

}
}
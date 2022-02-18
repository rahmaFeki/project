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
           
            'email' => 'hajjajifethi2@gmail.com',
         
            'adr' => '100 Av .Jaafer Ariana 2083 - Tunis',
            'contenu' => 'MSM est une entreprise spécialisée en montage des usines de polystyrène, pré expender machine, 
            molding blocks, chaudière, silos de stockage, tours de refroidissement, déménagement, aménagement des usines et leurs montage et soudure des pipes line different schedules suivant classes de pressions dans le domaine du gaz et pétrole.'
        ]);

}
}
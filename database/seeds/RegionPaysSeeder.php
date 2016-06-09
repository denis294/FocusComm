<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;
use App\Models\Region;
use App\Models\Role;
use App\Models\Pays;
use App\Models\ServiceApplicatif;
use App\Models\Categorie;
use App\Models\Actualite;
use App\Models\Badge;
use App\Models\Quizz;
use App\Models\Question;
use App\Models\Reponse;

class RegionPaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/**
    	*	Seeding Pays
    	*/
        $suisse = Pays::create([
        	'nom' => 'Suisse',
        	'abreviation' => 'CH',
        ]);

        $france = Pays::create([
        	'nom' => 'France',
        	'abreviation' => 'FR'
        ]);
      $cantonVaud = new Region([
                'nom' => "Vaud",
            ]);
        // Save Regions in Pays
        $suisse->regions()->saveMany([
            $cantonVaud, new Region([
            	'nom' => "Neuchatel",
            ]),
        ]);
        /**
        *	Seeding Group
        */
        $groupeAdmin = Group::create([
        	'nom' => 'admin',
        ]);
         /**
		 * Seeding User
         */
        $admin = User::create([
            'pseudo' => 'admin',
            'email' => 'admin@example.com',
            'motDePasse' => bcrypt('admin'),
            'age' => '45',
            'sexe' => 'M',
            'region_id' => $cantonVaud->id,
        ]);
         /**
		 * Seeding ServiceApplicatif
         */

        $actualite = ServiceApplicatif::create([
        	'nom' => 'actualites',
        ]);
         /**
		 * Seeding Roles
         */
      
         /**
		 * Save User into Groups
         */
        $groupeAdmin->users()->save($admin);


        // Attach Region in User
       // $admin->regions()->save($cantonVaud);

        // Define Role of a Group for a ServiceApplicatif
        $groupeAdmin->servicesapplicatifs()->save($actualite, ['nom' => Role::CREATE]);


        /**
        *	Seeding Categories
        */

        $sante = Categorie::create([
        	'nom' => 'sante',
        	'icone' => 'sante.jpg',
        	'description' => 'Comment mieux vivre plus sainement.',
        ]);

        $manger = Categorie::create([
        	'nom' => 'manger',
        	'icone' => 'manger.jpg',
        	'description' => 'Manger est important, bouger aussi.',
        ]);
        // Sida sous-catégorie de Santé
        $sida = Categorie::create([
        	'nom' => 'sida',
        	'categorieParente_id' => $sante->id,
        ]);

        $actu1 = new Actualite([
        	'titre' => 'Le sida en régression',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Blablablbllalalalbllblalalallbllalallalaalllblblallalalalallalala',
        	'image' => 'none.jpg',
        	'categorie_id' => $sida->id,
        ]);

        $admin->actualites()->save($actu1);
        $actu2 = new Actualite([
        	'titre' => 'Le sida en Afrique',
        	'dateCreation' => date('Y-m-d'),
        	'texte' => 'Le sida africain lunaire',
        	'image' => 'none.jpg',
        	'actualiteLiee_id' => $actu1->id,
        	'categorie_id' => $sida->id,
        ]);
        $admin->actualites()->save($actu2);

        /**
		* Seeding Quizz + Badge
        */
        $badge = Badge::create([
        	'titre' => 'Quizz sida',
        	'image' => 'badgeSida.png',
        ]);
		$quizz = new Quizz([
			'titre' => 'Quizz sur le sida',
			'date' => date('Y-m-d'),
			'etat' => 'cache',
			'badge_id' => $badge->id,
			'categorie_id' => $sida->id,
		]);
		$admin->quizzs()->save($quizz);

		$question = Question::create([
			'texte' => 'Le sida est-il contagieux ?',
			'illustration' => 'none.jpg',
			'quizz_id' => $quizz->id,
		]);

		$reponse1 = Reponse::create([
			'texte' => 'Oui',
			'estJuste' => true,
			'question_id' => $question->id,
		]);
		$reponse2 = Reponse::create([
			'texte' => 'Non',
			'estJuste' => false,
			'question_id' => $question->id,
		]);

		$reponse3 = Reponse::create([
			'texte' => 'Ne sais pas',
			'estJuste' => false,
			'question_id' => $question->id,
		]);
		$admin->quizzsParticipations()->save($quizz);
		$admin->reponses()->save($reponse2, ['estJuste' => false]);
    }
}

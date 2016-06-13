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

        $groupeUser = Group::create([
            'nom' => 'user',
        ]);
         /**
		 * Seeding User
         */
        $admin = User::create([
            'pseudo' => 'admin',
            'email' => 'admin@example.com',
            'motDePasse' => bcrypt('admin'),
            'dateNaissance' => '1985-06-04',
            'sexe' => 'M',
            'region_id' => $cantonVaud->id,
        ]);
        $user = User::create([
            'pseudo' => 'user',
            'email' => 'user@example.com',
            'motDePasse' => bcrypt('user'),
            'dateNaissance' => '1997-04-09',
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
        $groupeUser->users()->save($user);


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
        	'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim odio, tincidunt et faucibus vel, faucibus a velit. Donec dapibus, tortor dignissim bibendum ultrices, odio purus bibendum felis, in mollis felis nisl vitae dolor. Mauris vehicula lorem et purus faucibus, et tempus purus congue. Suspendisse potenti. Vivamus et elit vitae diam finibus tempor nec et justo. Duis sagittis, nulla at facilisis efficitur, massa libero efficitur neque, at consectetur elit leo a mi.',
        	'image' => 'media1.png',
        	'categorie_id' => $sida->id,
        ]);

        $admin->actualites()->save($actu1);
        $actu2 = new Actualite([
        	'titre' => 'Le sida en Afrique',
        	'dateCreation' => date('Y-m-d'),
        	'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim odio, tincidunt et faucibus vel, faucibus a velit. Donec dapibus, tortor dignissim bibendum ultrices, odio purus bibendum felis, in mollis felis nisl vitae dolor. Mauris vehicula lorem et purus faucibus, et tempus purus congue. Suspendisse potenti. Vivamus et elit vitae diam finibus tempor nec et justo. Duis sagittis, nulla at facilisis efficitur, massa libero efficitur neque, at consectetur elit leo a mi. ',
        	'image' => 'none.jpg',
        	'actualiteLiee_id' => $actu1->id,
        	'categorie_id' => $sida->id,
        ]);
        $admin->actualites()->save($actu2);
        
        $actu3 = new Actualite([
        	'titre' => 'Le sida en Europe',
        	'dateCreation' => date('Y-m-d'),
        	'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim odio, tincidunt et faucibus vel, faucibus a velit. Donec dapibus, tortor dignissim bibendum ultrices, odio purus bibendum felis, in mollis felis nisl vitae dolor. Mauris vehicula lorem et purus faucibus, et tempus purus congue. Suspendisse potenti. Vivamus et elit vitae diam finibus tempor nec et justo. Duis sagittis, nulla at facilisis efficitur, massa libero efficitur neque, at consectetur elit leo a mi. ',
        	'image' => 'none.jpg',
        	'actualiteLiee_id' => $actu1->id,
        	'categorie_id' => $sida->id,
        ]);
        $admin->actualites()->save($actu3);
        
        $actu4 = new Actualite([
        	'titre' => 'Le sida au Canada',
        	'dateCreation' => date('Y-m-d'),
        	'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim odio, tincidunt et faucibus vel, faucibus a velit. Donec dapibus, tortor dignissim bibendum ultrices, odio purus bibendum felis, in mollis felis nisl vitae dolor. Mauris vehicula lorem et purus faucibus, et tempus purus congue. Suspendisse potenti. Vivamus et elit vitae diam finibus tempor nec et justo. Duis sagittis, nulla at facilisis efficitur, massa libero efficitur neque, at consectetur elit leo a mi. ',
        	'image' => 'none.jpg',
        	'actualiteLiee_id' => $actu1->id,
        	'categorie_id' => $sida->id,
        ]);
        $admin->actualites()->save($actu4);

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

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
use App\Models\Page;

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
        $groupeParticipant = Group::create([
            'nom' => 'participant',
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
           $partner = User::create([
            'pseudo' => 'partner',
            'email' => 'partner@example.com',
            'motDePasse' => bcrypt('partner'),
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
        $groupeParticipant->users()->save($partner);


        // Attach Region in User
       // $admin->regions()->save($cantonVaud);

        // Define Role of a Group for a ServiceApplicatif
        $groupeAdmin->servicesapplicatifs()->save($actualite, ['nom' => Role::CREATE]);


        /**
        *	Seeding Categories
        */

        $stress = Categorie::create([
        	'nom' => 'Stress',
        	'icone' => 'stress.png',
        ]);
        
        $estime = Categorie::create([
        	'nom' => 'Estime de soi',
        	'icone' => 'estime.png',
        ]);
        
        $sexualite = Categorie::create([
        	'nom' => 'Sexualité',
        	'icone' => 'sexualite.png',
        ]);
        
        $bfsd = Categorie::create([
        	'nom' => 'Boire, fumer, se droguer',
        	'icone' => 'bfsd.png',
        ]);
        
        $sante = Categorie::create([
        	'nom' => 'Santé',
        	'icone' => 'sante.png',
        ]);
        
        $mangerBouger = Categorie::create([
        	'nom' => 'Manger-bouger',
        	'icone' => 'mangerBouger.png',
        ]);
        
        $mtla = Categorie::create([
        	'nom' => 'Moi, toi et les autres',
        	'icone' => 'mtla.png',
        ]);
        
        $violences = Categorie::create([
        	'nom' => 'Violences',
        	'icone' => 'violences.png',
        ]);
        
        $formationTravail = Categorie::create([
        	'nom' => 'Formation et travail',
        	'icone' => 'formationTravail.png',
        ]);
        
        $argent = Categorie::create([
        	'nom' => 'Argent',
        	'icone' => 'argent.png',
        ]);
        
        $religionCroyance = Categorie::create([
        	'nom' => 'Religion et croyance',
        	'icone' => 'religionCroyance.png',
        ]);
        
        $discriminationRacisme = Categorie::create([
        	'nom' => 'Discrimination et racisme',
        	'icone' => 'discriminationRacisme.png',
        ]);

        // Sous-catégories de Sante
        $sida = Categorie::create([
        	'nom' => 'Sida',
        	'categorieParente_id' => $sante->id,
        ]);

        // Sous-catégories de Argent
        $budget = Categorie::create([
        	'nom' => 'Budget',
        	'categorieParente_id' => $argent->id,
        ]);
        
        $consommation = Categorie::create([
        	'nom' => 'Consommation',
        	'categorieParente_id' => $argent->id,
        ]);
        
        $dette = Categorie::create([
        	'nom' => 'Dettes',
        	'categorieParente_id' => $argent->id,
        ]);
        
        $poursuites = Categorie::create([
        	'nom' => 'Poursuites',
        	'categorieParente_id' => $argent->id,
        ]);
        
        // Sous-catégories de Budget
        $pourquoi = Categorie::create([
        	'nom' => 'Pourquoi ?',
        	'categorieParente_id' => $budget->id,
        ]);
        
        $charges = Categorie::create([
        	'nom' => 'Les charges',
        	'categorieParente_id' => $budget->id,
        ]);
        
        $revenus = Categorie::create([
        	'nom' => 'Les revenus',
        	'categorieParente_id' => $budget->id,
        ]);
         
         /**
		 * Seeding Page
         */
        $page = Page::create([
            'titre' => 'Piercing sans risque, possible?',
            'contenu' => 'Contenu HTML',
            'categorie_id' => $sante->id,
        ]);
        
		// Actualités
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
        	'titre' => 'Quizz sur les revenus',
        	'image' => 'badgeArgent.png',
        ]);
		$quizz = new Quizz([
			'titre' => 'Quizz sur les revenus',
			'date' => date('Y-m-d'),
			'etat' => 'publie',
			'badge_id' => $badge->id,
			'categorie_id' => $revenus->id,
		]);
		$admin->quizzs()->save($quizz);

		$question = Question::create([
			'texte' => 'Une allocation familiale c\'est quoi ?',
			'illustration' => 'quizzRevenus.jpg',
			'texteJuste' => 'Effectivement, cette allocation est versée à tes parents. ',
			'texteFaux' => 'Malheureusement ce n\' est pas toi qui recevra directement cette allocation ',
			'quizz_id' => $quizz->id,
		]);

		$reponse1 = Reponse::create([
			'texte' => 'Donner un argent de poche aux jeunes.',
			'estJuste' => false,
			'question_id' => $question->id,
		]);
		$reponse2 = Reponse::create([
			'texte' => 'Aider les parents financièrement pour ton entretien.',
			'estJuste' => true,
			'question_id' => $question->id,
		]);

		$reponse3 = Reponse::create([
			'texte' => 'Une taxe imposée à toutes les familles suisses.',
			'estJuste' => false,
			'question_id' => $question->id,
		]);
		$admin->quizzsParticipations()->save($quizz);
		$admin->reponses()->save($reponse2, ['estJuste' => false]);
    }
}

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

        $quizz = ServiceApplicatif::create([
            'nom' => 'quizzs',
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
        $groupeParticipant->users()->save($admin);


        // Attach Region in User
       // $admin->regions()->save($cantonVaud);

        // Define Role of a Group for a ServiceApplicatif
        $groupeAdmin->servicesapplicatifs()->save($actualite, ['nom' => Role::CREATE]);
        $groupeAdmin->servicesapplicatifs()->save($actualite, ['nom' => Role::UPDATE]);
        $groupeAdmin->servicesapplicatifs()->save($actualite, ['nom' => Role::READ]);
        $groupeAdmin->servicesapplicatifs()->save($actualite, ['nom' => Role::DELETE]);

        $groupeUser->servicesapplicatifs()->save($actualite, ['nom' => Role::READ]);

        $groupeParticipant->servicesapplicatifs()->save($actualite, ['nom' => Role::READ]);

        $groupeAdmin->servicesapplicatifs()->save($quizz, ['nom' => Role::CREATE]);
        $groupeAdmin->servicesapplicatifs()->save($quizz, ['nom' => Role::UPDATE]);
        $groupeAdmin->servicesapplicatifs()->save($quizz, ['nom' => Role::READ]);
        $groupeAdmin->servicesapplicatifs()->save($quizz, ['nom' => Role::DELETE]);

        $groupeUser->servicesapplicatifs()->save($quizz,['nom' => Role::READ]);

        $groupeParticipant->servicesapplicatifs()->save($quizz,['nom' => Role::READ]);
        $groupeParticipant->servicesapplicatifs()->save($quizz,['nom' => Role::UPDATE]);
        $groupeParticipant->servicesapplicatifs()->save($quizz,['nom' => Role::DELETE]);
        $groupeParticipant->servicesapplicatifs()->save($quizz,['nom' => Role::UPDATE]);


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
        	'titre' => 'Journée nationale sur les problèmes liés à l\'alcool',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Le 19 mai 2016 c’est la journée nationale sur les problèmes liés à l’alcool !

Cette année la question porte sur les problèmes d’alcool et le soutien familial : comment gères-tu l’alcool ? Peux-tu parler d’alcool avec ta famille ? Comment réagissent-ils ?

Environ un demi-million de personnes en Suisse ont un membre de leur famille qui a des problèmes d’alcool. Une personne qui boit beaucoup se fait souffrir et fait souffrir ses proches. Malgré une souffrance psychologique très lourde qui accompagne, les proches font très peu appel aux services d’aide disponibles. Pourquoi ? L’une des raisons peut être la honte ou des exigences très grandes envers soi. Pour cette raison, cette journée a pour but de motiver les proches à parler :).

Alors n’hésite pas à t’exprimer sur le sujet et à échanger avec tes potes ou des proches !

Plus d’infos sur ciao.ch ou sur le site d’Addiction Suisse.',
        	'image' => 'actu1.jpg',
        	'categorie_id' => $bfsd->id,
        ]);
        $admin->actualites()->save($actu1);
        
        $actu2 = new Actualite([
        	'titre' => 'Journée internationale de lutte contre l’homophobie et la transphobie',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Le 17 mai correspond à la Journée internationale de lutte contre l’homophobie et la transphobie. L’homophobie, c’est l’hostilité manifestée envers les gays et les lesbiennes, soit par des injures, des violences et/ou du rejet alors que la transphobie est l’hostilité manifestée envers les personnes transsexuelles ou transgenres.',
        	'image' => 'actu2.jpg',
        	'categorie_id' => $discriminationRacisme->id,
        ]);
        $admin->actualites()->save($actu2);
        
        $actu3 = new Actualite([
        	'titre' => 'Les 3 faux effets du citron',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Le citron pour blanchir les dents.
Tu utilises le citron pour blanchir tes dents ? Malgré son goût amer, tu fais ça plusieurs fois par jour ? Tu espères voir des effets tout bientôt.
Stop !
Le citron a l’effet contraire, il agresse l’émail qui protège les dents et il facilite le dépôt de couleur. Pour rendre plus blanches tes dents, rends-toi plutôt chez ton dentiste ;).
Plus d’infos: les dents blanches
Le citron pour maigrir.
Tu bois du citron tous les matins pour qu’à l’arrivée de beaux jours tu sois au top de ta forme ? Tu espères que l’acidité contenue dans le citron fasse fondre les graisses de ton corps.
Faux !
Aucun aliment ne fait maigrir. Adopte plutôt une alimentation équilibrée qui te fait plaisir et éclate-toi aussi en faisant du sport =D.
Le citron comme pilule.
Tu te laves le sexe avec du citron après un rapport sexuel ? Tu penses que l’acidité contenue dans le citron peut tuer les spermatozoïdes ?
Non, certainement pas !
La contraception (pilule, implant, etc.) et le préservatif sont les deux seules manières d’éviter une grossesse. D’ailleurs, l’acidité du citron n’annule pas non plus l’effet de la pilule. Alors protège-toi bien !',
        	'image' => 'actu3.jpg',
        	'categorie_id' => $sante->id,
        ]);
        $admin->actualites()->save($actu3);
        
        $actu4 = new Actualite([
        	'titre' => 'Semaine contre la discrimination',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Cette semaine a lieu la Semaine contre le racisme. Beaucoup d’actions sont organisées en Suisse-romande pour lutter contre cette forme de discrimination. On vous fait un petit topo pour comprendre l’origine de la journée (qui est devenue «semaine») et comment combattre le racisme.

La journée internationale pour lutter contre le racisme commémore le jour où la police sud-africaine a tué 69 personnes lors d’une manifestation pacifique contre certaines lois imposées par l’apartheid. Le racisme ou encore la discrimination sont des phénomènes qui ont lieu partout dans le monde et tous les jours.',
        	'image' => 'actu4.jpg',
        	'categorie_id' => $discriminationRacisme->id,
            'actualiteLiee_id' => $actu2->id,
        ]);
        $admin->actualites()->save($actu4);
        
        $actu5 = new Actualite([
        	'titre' => 'Qu’est-ce que le cancer? ',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Le cancer est une maladie causée par une multiplication trop importante de cellules dans un tissu tout à fait normal de l’organisme. On appelle cette prolifération une tumeur.

Ce processus part d’une seule cellule qui, pour différentes raisons, se met à se «cloner» créant ainsi d’autres cellules qui le feront à leur tour, etc.

Risques/Causes :

Les causes du cancer peuvent être extérieures à l’organisme – on dit que ces causes sont exogènes – ou alors elles peuvent venir de l’organisme lui-même – on dit qu’elles sont endogènes.

Les risques internes sont d’ordre génétique. Certains cancers comme celui du sein peuvent, par exemple, avoir une composante héréditaire (transmis dans la famille). D’autres peuvent être dus à une mutation génétique, sans vraiment qu’on sache d’où vient cette mutation.

Les risques externes sont aussi appelés «risques environnementaux». On y trouve des choses comme l’alimentation, le tabac ou encore les virus et les bactéries.

Prévention :

Comme la maladie peut être due à une cause génétique sur laquelle on ne peut pas agir, la prévention du cancer consiste à prévenir l’apparition de la maladie en agissant sur les risques environnementaux. Il s’agit donc de lutter contre le tabagisme, de diminuer l’exposition aux polluants et aux produits chimiques cancérigènes, d’éviter la surexposition au soleil, etc.

La lutte contre le cancer s’appuie aussi sur rôle «protecteur» de certains aliments. On sait par exemple que les fibres, les antioxydants ou encore les vitamines ont des effets positifs sur l’apparition du cancer.

Dépistage :

Le dépistage vise à repérer le plus tôt possible un cancer ou des lésions précancéreuses chez des personnes qui ne présentent pas encore de symptômes évidents. Le fait de dépister le cancer avant qu’il soit visible est important, car une fois les symptômes apparus – et donc la maladie installée – le traitement à envisager est beaucoup plus lourd.

Si ce thème t’interpelle, n’hésite pas à en parler à ton entourage: tes parents mais aussi l’infirmière scolaire ou encore directement sur le site!',
        	'image' => 'actu5.jpg',
        	'categorie_id' => $sante->id,
        ]);
        $admin->actualites()->save($actu5);
        
        $actu6 = new Actualite([
        	'titre' => '5 conseils pour un surf plus sûr',
        	'dateCreation' => date('Y-m-d H:i:s'),
        	'texte' => 'Internet est un outil merveilleux, mais comme avec tout outil, il y a quelques précautions à prendre lorsqu’on l’utilise. On vous propose cinq conseils pour surfer en toute sécurité.
        	
        	Sur internet, vous consultez des pages, mais vous publiez aussi du contenu. Que ça soit des textes, des statuts, que vous likiez des pages ou que vous commentiez un lien, tout reste sur la toile. Faites donc attention à ne rien publier de sensible. Une fois sur la toile il est difficile de savoir où peuvent se retrouver ces éléments.
        	
        	Certains sites permettent de contrôler l’accessibilité de votre contenu et d’autre non. Un blog, par exemple, sera visible par tout le monde et dans la grande majorité des cas il est possible de le trouver par une recherche sur le net. Au contraire, le contenu des réseaux sociaux peut être protégé ou limité. Grâce à ces fonctions vous pouvez choisir vous-même de rendre ce contenu visible uniquement pour vos amis.
        	',
        	'image' => 'actu6.jpg',
        	'categorie_id' => $mtla->id,
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
			'categorie_id' => $argent->id,
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
         $badge2 = Badge::create([
            'titre' => "Quizz sur le cannabis",
            'image' => 'badgeSante.png',
        ]);
        $quizz2 = new Quizz([
            'titre' => "Quizz sur le cannabis",
            'date' => date('Y-m-d'),
            'etat' => 'publie',
            'badge_id' => $badge2->id,
            'categorie_id' => $bfsd->id,
        ]);
        $admin->quizzs()->save($quizz2);
        $q1 = Question::create([
            'texte' => "La substance active du cannabis est le...",
            'illustration' => 'none.jpeg',
            'texteJuste' => "Juste!

Le THC est la substance qui perturbe le fonctionnement du cerveau quand on consomme du cannabis.",
            'texteFaux' => "Eh bien dis donc... il vaut mieux pour toi ne pas fumer! La substance qui agit sur le cerveau est le THC et c'est cette substance que l'on peut déceler dans ton sang et tes urines jusqu'à un mois après ta consommation." ,
            'quizz_id' => $quizz2->id,
        ]);

        $r1 = Reponse::create([
            'texte' => 'THC',
            'estJuste' => true,
            'question_id' => $q1->id,
        ]);
        $r2 = Reponse::create([
            'texte' => 'PVC',
            'estJuste' => false,
            'question_id' => $q1->id,
        ]);
         $r3 = Reponse::create([
            'texte' => 'TPV',
            'estJuste' => false,
            'question_id' => $q1->id,
        ]);

        $q2 = Question::create([
            'texte' => "La loi autorise désormais la consommation de cannabis",
            'illustration' => 'none.jpeg',
            'texteJuste' => "Tout juste.Même si des débats ont lieu, le cannabis est toujours soumis à la loi sur les stupéfiants. Depuis octobre 2013, les adultes en possession de 10 grammes ou moins de cannabis ne sont plus poursuivis pénalement mais doivent payer une amende de 100 francs.",
            'texteFaux' => "Erreur! Même si des débats ont lieu, la loi interdit toujours la consommation, la culture et la vente de cannabis." ,
            'quizz_id' => $quizz2->id,
        ]);
         $r3 = Reponse::create([
            'texte' => 'Vrai',
            'estJuste' => false,
            'question_id' => $q2->id,
        ]);
         $r4 = Reponse::create([
            'texte' => 'Faux',
            'estJuste' => true,
            'question_id' => $q2->id,
        ]);
          $q3 = Question::create([
            'texte' => "A partir de 15-16 ans tous les jeunes ont déjà essayé au moins une fois de fumer un joint...",
            'illustration' => 'none.jpeg',
            'texteJuste' => "Et tu as raison. Même si beaucoup de jeunes sont tentés de fumer pour voir ce que c'est, ils sont une minorité à consommer du cannabis régulièrement.

L'enquête sur les comportements de santé des écoliers menées en 2002 montre en effet que 41,7% des garçons et 34,1% des filles de 15-16 ans ont fumé du cannabis durant l'année précédente - ce qui ne veut pas dire qu'ils en consomment régulièrement!",
            'texteFaux' => "Eh non, c'est une fausse perception de la réalité.

Tous les jeunes n'ont pas essayé de fumer et c'est une minorité de jeunes de 15-16 ans qui fument des joints... En effet, les chiffres 2002 montrent que seulement 49,9% des garçons et 39,1% des filles ont essayé au moins une fois dans leur vie de fumer des joints.

Alors si tu n'as pas essayé, tu n'es de loin pas le seul ou la seule!" ,
            'quizz_id' => $quizz2->id,
        ]);
            $r5 = Reponse::create([
            'texte' => 'Vrai',
            'estJuste' => false,
            'question_id' => $q3->id,
        ]);
         $r6 = Reponse::create([
            'texte' => 'Faux',
            'estJuste' => true,
            'question_id' => $q3->id,
        ]);
		$admin->quizzsParticipations()->save($quizz);
		$admin->reponses()->save($reponse2, ['estJuste' => false]);
    }
}

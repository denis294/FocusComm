<?php
header("Content-type: application/javascript");
/*
|--------------------------------------------------------------------------
| Merge files
|--------------------------------------------------------------------------
|
*/
    $files = [
        // LIBRARIES
        'lib/jquery.js',
        'lib/underscore.js',
        'lib/backbone.js',
        'lib/backbone.pclia.js',
        'lib/handlebars.js',
        'lib/handlebars.pclia.js',
        // MODELS
        'models/categorie.js',
        'models/categories.js',
        'models/contenu.js',
        'models/contenus.js',
        'models/actualite.js',
        'models/actualites.js',

        'models/quiz.js',
        'models/quizs.js',
        'models/question.js',
        'models/questions.js',

        'models/badge.js',
        'models/badges.js',

        'models/actualiteAdm.js',
        'models/actualitesAdm.js',


        // VIEWS
        'views/categorie.js',
        'views/categories.js',
        'views/contenu.js',
        'views/contenus.js',
        'views/actualite.js',
        'views/actualites.js',

        'views/quiz.js',
        'views/quizs.js',

        'views/question.js',
        'views/questions.js',

        'views/badge.js',
        'views/badges.js',

        'views/actualiteAdm.js',
        'views/actualitesAdm.js',

        // TP
        //'tp/mainActu.js',
        //'tp/main.js',
        //'tp/mainAdm.js',
        //'tp/actionActu.js',
        //'tp/mainQuiz.js',
        //'tp/mainQuestion.js',

        // AUTRES
        'contents/categories.js',
        'contents/contenus.js',
        'contents/actualites.js',

        'contents/actualitesAdm.js',
        'contents/quiz.js',
        'contents/questions.js'
    ];

    $js = '';
    foreach ($files as $file) {
        $js = $js . file_get_contents($file) . "\n";
    }

/*
|--------------------------------------------------------------------------
| Regroupe toutes les templates en une seule varaiable Js global
|--------------------------------------------------------------------------
|
*/
    $templates = [];
    $dirTemplate = 'templates/';
    foreach (glob($dirTemplate . '*.html') as $filename) {
        $viewName = str_ireplace('.html', '', $filename);
        $viewName = substr($viewName, strlen($dirTemplate));
        $content = file_get_contents($filename);
        $templates[$viewName] = preg_replace('/\s+/u', ' ', $content);
    }
    $jsonTemplate = json_encode($templates);


    header("Content-type: application/javascript");
    echo "var JST = {$jsonTemplate};\n";
    echo $js;
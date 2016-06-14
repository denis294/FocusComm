@extends('layouts.masterPartner')
@section('title', 'Formulaire Quiz')

@section('content')
<main class="main">
<section class="FormulaireQuiz">

    <form>
        <h5>
        <div class="NomQuiz">
            <p><label><h5>Titre du quiz</h5></label> </br> <input class="titreQuiz" type="text" name="titre"></p>
             <label class="categorieLegende"><h5>Catégorie</h5></label>
                  <select class="browser-default quizCategorie" name="categorie_id">
                    <option value="" disabled selected></option>
                    <option value="">Sexualité</option>
                    <option value="">Manger/Bouger</option>
                    <option value="">Autres</option>
                  </select>
        </div>
        <div class="qList">
        <div class="question">
            <h5 class="titleQuestion" id="tq1">Question</h5>
            <p><h5><input class="text_Question" type="text" name="question[0][texte]"></h5>
            <p><label><h5>Illustrations </label><input class="illustration_Question" type="file" name="question[0][illustration]"></h5>
            <p><label><h5>Réponse  juste  </label><input class="inputForm reponse1" type="text" name="question[0][reponse][0][texte]"></h5>
            <input class="reponse1Juste" type="hidden" name="question[0][reponse][0][estJuste]"value="true">
            <div class="rep"><label><h5>Réponse fausse  </label><input class="tmpl inputForm reponse2" type="text" name="question[0][reponse][1][texte]"></h5>
            <input class="cachetmpl reponse2Fausse" type="hidden" name="question[0][reponse][1][estJuste]" value="false"></div>
            <div class="EspaceDispo1" id="espace"></div>
            <a class="btn-floating btn-large waves-effect waves-light green BoutonAjtR boutonAjouterReponse" id="boutonAjouterReponse1" data-cmptTitre="1" ><i class="material-icons">add</i></a>
            </br></br>
            <div class="row">
                <label class="label_txtSi">Texte si réponse juste</label>
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea class="txtJuste" name="question[0][texteJuste]" id="icon_prefix2" class="materialize-textarea"></textarea>
                      <label for="icon_prefix2"></label>
                    </div>
                  </div>
                </form>
              </div>
            <div class="row">
                <label class="label_txtSi">Texte si réponse fausse</label>
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea class="txtFaux" name="question[0][texteFaux]" id="icon_prefix2" class="materialize-textarea"></textarea>
                      <label for="icon_prefix2"></label>
                    </div>
                  </div>
                </form>
            </div>
            </div>
        </div>
        <span class="option">

            <a class="waves-effect waves-light btn" id="boutonAjouterQuestion"><i class="material-icons left" type="submit">done</i>ajouer une question</a>
            <a class="waves-effect waves-light btn BoutonSaveQuiz"><i class="material-icons left" type="submit">done</i>Sauver</a>
            <a class="waves-effect waves-light btn BtnBackQuiz"><i class="material-icons left">call_missed</i>retour</a>

        </span>
        
   </h5>
    </form>
</section>
<section>
</br>
</br>
</section>
<section>



</section>
</main>

@endsection
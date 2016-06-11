<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
       <div class="row">
    <form class="col s12" method="POST" action="{{url('quizzs')}}">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="texte" type="text" class="validate" name="titre">
          <label for="texte">Texte</label>
        </div>
        <div class="input-field col s6">
          <input id="categorie" type="text" class="validate" name="categorie_id">
          <label for="categorie">categorie</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="date" type="text" class="validate" name="date">
          <label for="date">date</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="etat" type="text" class="validate" name="etat">
          <label for="etat">etat</label>
        </div>
      </div>
        <div class="row">
         <div class="input-field col s6">
          <input id="badge" type="text" class="validate" name="badge_id">
          <label for="badge">badge</label>
        </div>
        <div class="input-field col s6">
          <input id="question" type="text" class="validate" name="question[0][texte]">
          <label for="question">Question text</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="reponse" type="text" class="validate" name="question[0][illustration]">
          <label for="reponse">Question illustration</label>
        </div>
      </div>
       <div class="row">
      <div class="input-field col s6">
          <input id="question" type="text" class="validate" name="question[0][reponse][0][texte]">
          <label for="question">rep1</label>
        </div>
        <div class="input-field col s6">
          <input id="reponse" type="text" class="validate" name="question[0][reponse][0][estJuste]">
          <label for="reponse">estJuste</label>
        </div>
      </div>
      <div class="input-field col s6">
          <input id="question" type="text" class="validate" name="question[0][reponse][1][texte]">
          <label for="question">rep1</label>
        </div>
        <div class="input-field col s6">
          <input id="reponse" type="text" class="validate" name="question[0][reponse][1][estJuste]">
          <label for="reponse">rep2</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  </body>
</html>
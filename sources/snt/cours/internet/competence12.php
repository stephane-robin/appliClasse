<h2>Quizz</h2>

<p>Testez vos connaissances sur Internet avec les questions suivantes :</p>

<?php
$nbrePoints = 0;

if(isset($_POST['validerFractions'])){
  
  for ($i=1; $i<16; $i++){
    if(isset($_POST['q'.$i])){
      if($_POST['q'.$i] == True){
        $nbrePoints += 1;
      }
    }
    else{
      $_POST['q'.$i] = False;
    }
  }

  // results
  $pourcentage = round(100 * $nbrePoints / 10);
  echo "<p style='margin-left:3%; color:green;'>".$pourcentage." % de réponses justes.</p>"; 

  if ($pourcentage < 30){
    echo "<p>Vous devriez bien relire le cours avant de ré-essayer le quizz. &#128163;</p>";
  }
  else if ($pourcentage >= 30 and $pourcentage < 60){
    echo "<p>Continuez vos efforts et essayez d'obtenir un meilleur score... &#127916;</p>";
  }
  else if ($pourcentage >= 60 and $pourcentage < 80){
    echo "<p>Bien joué... Vous pouvez encore améliorer votre score. &#127937;</p>";
  }
  else {
    echo "<p>Félicitations &#127881;</p>";
  }
}
?>

<!-----------------
     QUESTIONS 
------------------->

<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="" method="post">

<!-- Question 1 -->
<label for="q1"><em>Question 1 :</em> </label><br/>
<input style="margin-top:2%;" type="radio" id="q1r1" name="q1" value="False">
<label style="margin-left:1%;" for="q1r1">Internet et le Web sont deux appelations pour désigner la même chose</label><br/>
<input style="margin-top:2%;"type="radio" id="q1r2" name="q1" value="False">
<label style="margin-left:1%;" for="q1r2">Internet est une partie du Web</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q1r3" name="q1" value="True">
<label style="margin-left:1%;" for="q1r3">le Web est un service d'Internet</label><br/>

<!-- Question 2 -->
<label for="q2" style="margin-top:5%;"><em>Question 2 :</em> </label><br/>
<input style="margin-top:2%;" type="radio" id="q2r1" name="q2" value="True">
<label style="margin-left:1%;" for="q2r1">la fibre optique a un plus gros débit que les réseaux câblés</label><br/>
<input  style="margin-top:2%;" type="radio" id="q2r2" name="q2" value="False">
<label style="margin-left:1%;" for="q2r2">l'ADSL a un plus gros débit que la fibre optique</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q2r3" name="q2" value="False">
<label style="margin-left:1%;" for="q2r3">le réseau satellite a un plus gros débit que la 4G</label><br/>

<!-- Question 3 -->
<label for="q3" style="margin-top:5%;"><em>Question 3 :</em> la plus grande partie du trafic mondial sur Internet est occupée par :</label><br/>
<input style="margin-top:2%;" type="radio" id="q3r1" name="q3" value="True">
<label style="margin-left:1%;" for="q3r1">le streaming et médias</label><br/>
<input style="margin-top:2%;" type="radio" id="q3r2" name="q3" value="False">
<label style="margin-left:1%;" for="q3r2">les emails et pièces jointes</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q3r3" name="q3" value="False">
<label style="margin-left:1%;" for="q3r3">les échanges de documents entre entreprises</label><br/>

<!-- Question 4 -->
<label for="q4"><em>Question 4 :</em> </label><br/>
<input style="margin-top:2%;" type="radio" id="q4r1" name="q4" value="True">
<label style="margin-left:1%;" for="q4r1">un paquet est composé de plusieurs octets</label><br/>
<input style="margin-top:2%;" type="radio" id="q4r2" name="q4" value="False">
<label style="margin-left:1%;" for="q4r2">un octet est composé de plusieurs paquets</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q4r3" name="q4" value="False">
<label style="margin-left:1%;" for="q4r3">les deux notions n'ont rien à voir</label><br/>

<!-- Question 5 -->
<label for="q5"><em>Question 5 :</em> pour qu'une information puisse circuler dans un réseau informatique composé de systèmes différents, on utilise :</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r1" name="q5" value="False">
<label style="margin-left:1%;" for="q5r1">des processus</label><br/>
<input style="margin-top:2%;" type="radio" id="q5r2" name="q5" value="True">
<label style="margin-left:1%;" for="q5r2">des protocoles</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q5r3" name="q5" value="False">
<label style="margin-left:1%;" for="q5r3">des programmes</label><br/>

<!-- Question 6 -->
<label for="q6" style="margin-top:2%;"><em>Question 6 :</em> une adresse IPv4 est composée de :</label><br/>
<input style="margin-top:2%;" type="radio" id="q6r1" name="q6" value="False">
<label style="margin-left:1%;" for="q6r1">4 adresses Internet</label><br/>
<input style="margin-top:2%;" type="radio" id="q6r2" name="q6" value="False">
<label style="margin-left:1%;" for="q6r2">4 bits</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q6r3" name="q6" value="True">
<label style="margin-left:1%;" for="q6r3">4 octets</label><br/>

<!-- Question 7 -->
<label for="q7"><em>Question 7 :</em> une URL est traduite en adrese IP</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r1" name="q7" value="False">
<label style="margin-left:1%;" for="q7r1">grâce qu protocole IP</label><br/>
<input style="margin-top:2%;" type="radio" id="q7r2" name="q7" value="False">
<label style="margin-left:1%;" for="q7r2">grâce au protocole HTTP</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q7r3" name="q7" value="True">
<label style="margin-left:1%;" for="q7r3">grâce au DNS</label><br/>

<!-- Question 8 -->
<label for="q8"><em>Question 8 :</em> peer-to-peer est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r1" name="q8" value="False">
<label style="margin-left:1%;" for="q8r1">un réseau centralisé</label><br/>
<input style="margin-top:2%;" type="radio" id="q8r2" name="q8" value="False">
<label style="margin-left:1%;" for="q8r2">un réseau plus sûr</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q8r3" name="q8" value="True">
<label style="margin-left:1%;" for="q8r3">un réseau dont les ressources sont partagées</label><br/>

<!-- Question 9 -->
<label for="q9" style="margin-top:5%;"><em>Question 9 :</em> le Bitcoin est :</label><br/>
<input style="margin-top:2%;" type="radio" id="q9r1" name="q9" value="False">
<label style="margin-left:1%;" for="q9r1">une monnaie qui n'existe que dans les jeux vidéos</label><br/>
<input style="margin-top:2%;" type="radio" id="q9r2" name="q9" value="True">
<label style="margin-left:1%;" for="q9r2">une monnaie virtuelle échangeable</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q9r3" name="q9" value="False">
<label style="margin-left:1%;" for="q9r3">une monnaie qui n'accepte qu'un seul type d'application pour payer</label><br/>

<!-- Question 10 -->
<label for="q10"><em>Question 10 :</em> </label><br/>
<input style="margin-top:2%;" type="radio" id="q10r1" name="q10" value="False">
<label style="margin-left:1%;" for="q10r1">le botnet consiste à cliquer sur un lien frauduleux</label><br/>
<input style="margin-top:2%;" type="radio" id="q10r2" name="q10" value="False">
<label style="margin-left:1%;" for="q10r2">les supports amovibles (clé USB, ...) sont moins dangereux que les emails en terme de virus</label><br/>
<input style="margin-top:2%; margin-bottom:4%;" type="radio" id="q10r3" name="q10" value="True">
<label style="margin-left:1%;" for="q10r3">les worms utilisent un carnet d'adresse pour se propager</label><br/>

<button class='bouton' name="validerFractions" style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

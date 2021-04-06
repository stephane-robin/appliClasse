<!-- HTML -->
<!DOCTYPE HTML>
<html>

<head>
  <title> Improve your skills </title>
  <link rel="stylesheet" href="../../style/style.css">
  <link rel="stylesheet" href="../../style/prism.css">
    <link rel="icon"
          type="image/png"
          href="../../images/general/symbole.png">
  <meta charset="utf-8">
</head>

<!-- JavaScript de gestion des couleurs de code -->
<script defer src="../../style/prism.js"></script>

<!-- script de gestion de l'apparition du contenu d'une section
     utile comme exemple dans le paragraphe traitant ce sujet -->
<script type="text/javascript">
function affichageConditionnel(bouton, id) {
    var div = document.getElementById(id);
    if(div.style.display=="none") { // si le div est masqué, on l'affiche et on change le contenu du bouton
        div.style.display = "block";
        bouton.innerHTML = "-";
    } else { // s'il est visible, on le masque et on change le contenu du bouton
        div.style.display = "none";
        bouton.innerHTML = "+";
    }
}</script>

<body>

<header>
    <h1> ToKen </h1>
    <nav id="bandeau">
        <div class="contour_a">
            <a class="element" href="html.html">HTML</a>
        </div>
        <div class="contour_a">
            <a class="element" href="css.html">CSS</a>
        </div>
        <div class="contour_a">
            <a class="element" href="javascript.html">JAVASCRIPT</a>
        </div>
        <div class="contour_a">
            <a class="element" href="php.html">PHP</a>
        </div>
    </nav>
</header>

<section id="principal">

<aside id="table_matieres">
    <nav>
        <a href="#structure">Structure d'une page HTML</a>
        <a href="#balise">Les balises</a>
        <a href="#flexbox">Flexbox</a>
        <a href="#lien">Les liens</a>
        <a href="#menu">Les menus</a>
        <a href="#image">Les images</a>
        <a href="#video">Les vidéos</a>
        <a href="#formulaire">Les formulaires</a>
        <a href="#tableau">Les tableaux</a>
        <a href="#cachee">Sections cachées</a>
        <a href="#responsive">Responsive design</a>
        <a href="#queries">Media queries</a>
        <a href="#ecrireCode">Ecrire du code</a>
        <a href="#miseValeur">Mise valeur</a>
        <a href="#verification">Validité HTML5 d'un site</a>
    </nav>
</aside>

<section id="grandContenu">

  <h2>HTML</h2>

    <div id="bandeau_sousTitre">
      <p>S. Robin (mis à jour le 01 Mar. 2021)</p>
    </div>

  <div id="bandeau_contenu">
    <p>L'essentiel du savoir-faire</p>
  </div>

  <section id="contenu">

    <div class="bloc">
        <div class="gauche">
            <img src="../../images/web/html.png" width="80" height="80">
        </div>

        <div class="droite">
            <p>HTML signifie <em>HyperText Markup Language</em>. Il s'agit d'un langage de description permettant d'écrire de l'hypertexte et construit à partir de balises pour représenter les pages Web. Il s'insprire en ce sens du XML.</p>
        </div>
    </div>




    <!-- ====================
    STRUCTURE D'UNE PAGE HTML
    ========================= -->

<h3 id="structure"> Structure d'une page HTML </h3>

    <p> Le langage HTML sert à gérer et organiser le contenu des pages Web. C'est donc en HTML qu'on écrit le texte, les liens hypertexte, les images et vidéos. L'information apparaît de manière brute sans mise en forme autre que structurelle.</p>

  <pre><code class="language-html">&lt!DOCTYPE HTML&gt
&lthtml&gt
&lthead&gt
  &lttitle&gt Titre qui apparaît dans l'onglet &lt/title&gt
  &ltlink rel="stylesheet" href="style.css"&gt
  &ltmeta charset="utf-8"&gt
&lt/head&gt

&ltbody&gt
  &ltheader&gt
    &lt!-- en-tête --&gt
  &lt/header&gt

    &lt!-- corps du document --&gt

  &ltfooter&gt
    &lt!-- pied de page --&gt
  &lt/footer&gt
&lt/body&gt
&lt/html&gt</code></pre><footer class="legendeCode">HTML</footer>

  <p>Le <strong>doctype</strong> indique qu'il s'agit d'une page Web écrite en HTML.</p>
  <p>La balise <strong>&lthtml&gt</strong> englobe tout le contenu de la page Web. </p>
  <p>La balise <strong>&lthead&gt</strong> fournit des informations générales n'apparaissant pas sur la page que lit l'utilisateur. Ces informations sont à destination de l'ordinateur exclusivement. Par exemple l'instruction <strong>charset="utf-8"</strong> dans la balise de métadonnées <strong>&ltmeta&gt</strong> fournit l'information nécessaire à l'encodage des caractères. La balise <strong>&ltlink&gt</strong> permet de créer un lien de structure avec une autre page.</p>
  <p>La balise <strong>&ltbody&gt</strong> encadre le corps d'une page Web, qui est généralement structuré en sections, articles indépendants, informations latérales ainsi qu'un menu. Chacune de ces parties est elle-même composée de blocs séparés ou imbriqués qui auront des attributs différents.</p>
  <p>Les commentaires en HTML sont entourés des symboles <strong>&lt!--</strong> et <strong>--&gt</strong>. Cela signifie que ce qui se trouve à l'intérieur de ces symboles ne sera pas interprété. Ces commentaires peuvent être écrits sur une ou plusieurs lignes.</p>

  <p> Les commentaires sont visibles par tout utilisateur qui fait apparaître le code source HTML de la page qu'il consulte. Il ne faut donc en aucun cas faire apparaître de mot de passe dans les commentaires. </p>

    <p>Il ne semble pas y avoir de caractère d'échappement en HTML. Il faut changer les caractères par un équivalent. Par exemple la balise &lt &gt doit s'écrire &amplt et &ampgt . En HTML le caractère & sert dans le code. De ce fait, lorsqu'on veut simplement afficher un &, on doit l'écrire &ampamp. </p>


    <!-- ======
    HELLO WORLD
    ======= -->

    <h4 id="hello">Hello World</h4>

  <p>Commençons par le traditionnel "Hello world". Contrairement à beaucoup de langages, HTML n'utilise pas de <strong>;</strong> à la fin des instructions, car celles-ci sont regroupées à l'intérieur de balises.</p>
  <pre><code class="language-html">&lt!DOCTYPE HTML&gt
&lthtml&gt
&ltbody&gt
  &ltp&gt Hello world &lt/p&gt
&lt/body&gt
&lt/html&gt</code></pre><footer class="legendeCode">HTML</footer>
  


<!-- ======
LES BALISES
======= -->

<h3 id="balise"> Les balises </h3>

  <p> Les balises permettent de donner des instructions à l'ordinateur, pour différencier langage et texte. Elles sont entourées de chevrons <strong><</strong> et <strong>></strong>. On distingue au niveau de la sémantique les balises en paires qui sont constituées d'une balise ouvrante et d'une balise fermante entourant du texte, et les balises isolées. Par exemple, <strong>&lth1&gt mon titre &lt/h1&gt</strong> est une balise en paires et <strong>&ltbr/&gt</strong> est une balise isolée.</p>
    <p> On peut définir l'affichage spécifique de chacune de ses balises dans un script CSS.</p>
    <p> On distingue également au niveau du comportement les balises de type bloc qui créent automatiquement un retour à la ligne avant et après le bloc, des balises de type <em>inline</em> qui restent à l'intérieur d'un bloc sans créer de retour à la ligne.

    <p> Il est important de ne pas croiser les balises. En HTML les erreurs sont d'autant plus difficiles à détecter que le compilateur en autorise énormément avant de bloquer. Il part du principe que ce qu'il ne comprend pas, il ne l'affiche pas, mais n'interrompt pas pour autant l'exécution du code. Par exemple le code suivant est incohérent :</p>
    <pre><code class="language-html">&lth1&gt mon titre &ltp&gt ici se trouve un paragraphe &lt/h1&gt &lt/p&gt</code></pre>


    <!-- Les attributs -->

    <h4> Les attributs </h4>

    <p>Il s'agit des options des balises qui fournissent des informations supplémentaires et peuvent localement décrire comment une partie de la page doit s'afficher. Par exemple, l'attribut <strong>id</strong> sert à donner un nom unique à une balise afin de lui appliquer un traitement particulier.</p>
    <pre><code class="language-html">&lth2 id="titreSpecial"&gt mon titre &lt/h2&gt</code></pre><footer class="legendeCode">HTML</footer>

    <p>L'attribut <strong>class</strong> fonctionne suivant le même principe, mais place une balise dans une classe particulière.</p>
    <pre><code class="language-html">&ltpre&gt &ltcode class="language-python"&gt mon code &lt/code&gt &lt/pre&gt</code></pre>


    <h4> Principales balises</h4>
  <table>
    <tr> <th> Objectif </th> <th> Balises </th> </tr>
    <tr> <td> section </td> <td> <pre>&ltsection&gt section &lt/section&gt</pre></td> </tr>
    <tr> <td> article </td> <td> <pre>&ltarticle&gt article &lt/article&gt</pre></td> </tr>
    <tr> <td> informations latérales </td> <td> <pre>&ltaside&gt contenu &lt/aside&gt</pre></td> </tr>
    <tr> <td> pied de page </td> <td> <pre>&ltfooter&gt contenu &lt/footer&gt</pre></td> </tr>
    <tr> <td> bloc indépendant </td> <td> <pre>&ltdiv&gt bloc &lt/div&gt </pre></td> </tr>
    <tr> <td> contenu <em>inline</em> </td> <td> <pre>&ltspan&gt contenu inline &lt/span&gt </pre></td> </tr>
    <tr> <td> paragraphe </td> <td> <pre>&ltp&gt texte &lt/p&gt</pre></td> </tr>
    <tr> <td> titres </td> <td> <pre>&lth1&gt titre &lt/h1&gt
&lth2&gt titre &lt/h2&gt
&lth3&gt titre &lt/h3&gt
&lth4&gt titre &lt/h4&gt
&lth5&gt titre &lt/h5&gt
&lth6&gt titre &lt/h6&gt</pre></td> </tr>
    <tr> <td> mise en valeur </td> <td> <pre>&ltem&gt texte &ltem&gt</pre></td> </tr>
    <tr> <td> mise en valeur forte </td> <td> <pre>&ltstrong&gt texte &lt/strong&gt</pre></td> </tr>
    <tr> <td> saut à la ligne </td> <td> <pre>&ltbr/&gt </pre></td> </tr>
    <tr> <td> ligne de séparation horizontale </td> <td> <pre>&lthr&gt</pre> </td> </tr>
    <tr> <td> lien </td> <td> <pre>&lta&gt nom du lien &lt/a&gt</pre></td> </tr>
    <tr> <td> image </td> <td> <pre>&ltimg adresse de l'image /&gt</pre></td> </tr>
    <tr> <td> adresse de contact </td> <td> <pre>&ltaddress&gt email@gmail.com &lt/address&gt</pre></td> </tr>
    <tr> <td> date, heure </td> <td> <pre>&lttime&gt 20:30 &lt/time&gt</pre></td> </tr>
    <tr> <td> affichage formaté de code source </td> <td> <pre>&ltpre&gt code &lt/pre&gt</pre></td> </tr>
    <tr> <td> barre de progression </td> <td> <pre>&ltprogress&gt texte &lt/progress&gt</pre></td> </tr>
  </table>

  <p> Notons que par défaut la balise <strong>&ltem&gt</strong> affiche le texte concerné en italique et la balise <strong>&ltstrong&gt</strong> affiche le texte concerné en gras.</p>





    <!-- =====
   LES LISTES
   ====== -->

    <h4> Les listes </h4>

    <p> Les listes non ordonnées se définissent grâce aux balises :</P>

    <pre><code class="language-html">&ltul&gt
  &ltli&gt un élément de la liste &lt/li&gt
  &ltli&gt un autre élément de la liste &lt/li&gt
&lt/ul&gt</code></pre><footer class="legendeCode">HTML</footer>


    <p>qui affiche le résultat suivant</p>

    <ul class="ulExemple">
        <li>un élément de la liste</li>
        <li>un autre élément de la liste</li>
    </ul>


    <p>Les listes ordonnées se définissent à l'aide de la balise <strong>&ltol&gt</strong> à la place de la balise <strong>&ltul&gt</strong></p>


    <!-- ===== INSERER UNE CITATION ===== -->

    <h4> Insérer une citation </h4>

    <div class="bloc">

        <div class="gauche">
      <pre><code class="language-html">&ltq&gt "La vérité pour l'homme,
  c'est ce qui fait de lui un homme."
  &ltfooter&gt Terre des hommes
    &ltcite&gt A. de Saint Exupéry &lt/cite&gt
  &lt/footer&gt
&lt/q&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
            <q> La vérité pour l'homme, c'est ce qui fait de lui un homme.
            </q><footer> Terre des hommes <cite> A. de Saint Exupéry</cite></footer>
            <footer class="legendeCode">Affichage</footer>
        </div>

    </div>


    <!-- =========================
    GESTION DES BLOCS AVEC FLEXBOX
    ========================== -->

<h3 id="flexbox"> Gestion des blocs avec Flexbox </h3>

  <!-- La notion de bloc -->

  <h4>La notion de bloc </h4>

  <p> Chaque élément de code HTML est inclus dans une balise, qui est incluse dans un bloc auquel on attribue certaines propriétés que l'on définit.</p>
  <p>Ces blocs sont construits grâce à la balise <strong>&ltdiv&gt</strong> lorsqu'il s'agit de blocs indépendants (qui entraînent un saut à la ligne), ou avec la balise <strong>&ltspan&gt</strong> lorsqu'il s'agit de blocs <em>inline</em>.</p>

  <div class="bloc">

    <div class="gauche">
      <pre><code class="language-html">&ltdiv&gt
  &ltspan&gt Span 1 &lt/span&gt &ltspan&gt Span 2 &lt/span&gt
  &ltdiv&gt
    Bloc indépendant
  &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
</div>

    <div class="droite">
      <div>
        <p><span id="span1"> Span 1 </span> <span id="span2"> Span 2 </span></p>
        <div id="blocIndependant">
          <p>Bloc indépendant</p>
        </div><footer class="legendeCode">Affichage</footer>
      </div>
    </div>

  </div>

  <p>Il est nécessaire d'identifier chacun de ces blocs par un nom unique ou une classe afin de pouvoir en modifier la valeur des attributs dans la feuille CSS. Ainsi, lorsqu'on retrouve plusieurs fois le même type de bloc on utilise l'attribut <strong>class</strong> comme identifiant de la classe, et lorsqu'un bloc est unique on utilise l'attribut <strong>id</strong> comme identifiant unique.</p>
  <pre><code class="language-html">&ltdiv class="nomBloc"&gt
      &ltdiv id="principal"&gt</code></pre><footer class="legendeCode">HTML</footer>

  <!-- La mise en page avec Flexbox -->

  <h4> La mise en page avec Flexbox</h4>

    <p> Flexbox permet de structurer un document en utilisant principalement la balise <strong>div</strong> à laquelle on attribut certaines propriétés d'alignement. Ceci permet notamment d'aligner horizontalement des blocs indépendants et donc de se passer de la balise <strong>span</strong>. Toutefois, dans certains cas particuliers, le recours à la balise <strong>span</strong> peut s'avérer utile car plus simple.</p>
    <p> Pour mettre en page un document avec Flexbox, il faut définir en HTML un conteneur sous forme de balise et placer des blocs à l'intérieur de ce conteneur, puis définir en CSS l'alignement souhaité. Ainsi l'attribut <strong>flex-direction</strong> permet de définir la direction principale dans laquelle sera effectué le premier alignement. Notons que par défaut sans Flexbox, les blocs indépendants s'affichent les uns en dessous des autres.</p>

    <p><em> Pour obtenir des blocs en ligne : </em></p>

    <div class="bloc">

      <div class="gauche">
        <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
      </div>

      <div class="droite">
        <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
}</code></pre><footer class="legendeCode">CSS</footer>
      </div>

    </div>

    <p>qui produit l'affichage suivant</p>

    <div id="exempleConteneur1">
      <div class="exempleBloc">Bloc 1</div>
      <div class="exempleBloc">Bloc 2</div>
      <div class="exempleBloc">Bloc 3</div>
    </div>
<br/>

    <p><em> Pour obtenir des blocs en ligne, justifiés en fin de ligne : </em></p>
    <p>L'ajout de l'attribut <strong>justify-content</strong> permet de justifier les blocs dans le conteneur par rapport à la direction principale choisie.</p>

    <div class="bloc">

      <div class="gauche">
        <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
      </div>

      <div class="droite">
        <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
}</code></pre><footer class="legendeCode">CSS</footer>
      </div>

    </div>

    <p>qui produit l'affichage suivant</p>
    <div id="exempleConteneur2">
      <div class="exempleBloc">Bloc 1</div>
      <div class="exempleBloc">Bloc 2</div>
      <div class="exempleBloc">Bloc 3</div>
    </div>
<br/>

    <p><em> Pour obtenir des blocs en ligne, centrés sur la ligne : </em></p>

    <div class="bloc">

      <div class="gauche">
        <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
      </div>

      <div class="droite">
        <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
  justify-content: center;
}</code></pre><footer class="legendeCode">CSS</footer>
      </div>
    </div>
<p>qui produit l'affichage suivant</p>

    <div id="exempleConteneur3">
      <div class="exempleBloc">Bloc 1</div>
      <div class="exempleBloc">Bloc 2</div>
      <div class="exempleBloc">Bloc 3</div>
    </div>
    <br/>

    <p><em> Pour obtenir des blocs en ligne, avec un espace automatique entre eux : </em></p>

    <div class="bloc">

      <div class="gauche">
        <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
      </div>

      <div class="droite">
        <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}</code></pre><footer class="legendeCode">CSS</footer>
      </div>

      </div>
<p>qui produit l'affichage suivant</p>

      <div id="exempleConteneur4">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
     <br/>

      <p><em> Pour obtenir des blocs en ligne avec un espace automatique autour : </em></p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>

      <div id="exempleConteneur5">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
     <br/>

      <p>On peut forcer les blocs à rester sur une même ligne avec l'attribut <strong>flex-wrap: wrap</strong>. Dans ce cas les blocs se reserrent pour épouser la largeur de la page. On peut a contrario forcer le saut à la ligne avec l'attribut <strong>flex-wrap: wrap</strong>.</p>
<br/>

      <p><em> Pour obtenir des blocs en ligne inversée : </em></p>
      <p>Il est possible d'inverser les blocs. Dans ce cas, l'attribut <strong>justify-content</strong> permet également d'obtenir les mêmes effets de justification que précédemment.</p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row-reverse;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>
      <div id="exempleConteneur6">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
      <br/>

      <p><em> Pour obtenir des blocs en colonne : </em></p>
      <p>Si on définit la direction principale comme étant les colonnes, on peut reproduire les résultats précédents et justifier verticalement l'alignement des blocs. Il faut dans ce cas rajouter l'attribut <strong>height</strong> pour laisser de l'espace aux blocs.</p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: column;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>
      </div>
<p>qui produit l'affichage suivant</p>
      <div id="exempleConteneur7">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
      <br/>


      <p><em> Pour obtenir des blocs en colonne, avec un espace automatique entre eux : </em></p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100px;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>
      <div id="exempleConteneur8">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
      <br/>


      <p><em> Pour obtenir des blocs en colonne inversée : </em></p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: column-reverse;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>

      <div id="exempleConteneur9">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
      <br/>


      <p><em> pour obtenir des blocs centrés horizontalement et verticalement : </em></p>
      <p>Il est possible de justifier verticalement et horizontalement à la fois en rajoutant l'attribut <strong>align-items</strong>. Dans ce cas <strong>flex-direction: row</strong> définit comme direction principale les lignes. En conséquence, <strong>justify-content: space-around</strong> justifie le contenu par rapport à la direction principale (les lignes) et <strong>align-items: center</strong> justifie le contenu par rapport à la direction secondaire (les colonnes). On pourrait bien évidemment choisir comme direction principale les colonnes.</p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
  height: 100px;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>
      <div class="exempleConteneur10">
        <div class="exempleBloc">Bloc 1</div>
        <div class="exempleBloc">Bloc 2</div>
        <div class="exempleBloc">Bloc 3</div>
      </div>
      <br/>


      <p><em> Pour obtenir des blocs centrés horizontalement et verticalement sauf le dernier bloc : </em></p>
      <p> Il est possible d'aligner tous les blocs sauf un bloc qu'on choisit avec l'attribut <strong>nth-child(?)</strong> qui compte le ?-ième bloc dans l'ordre d'apparition dans le code. On peut ensuite utiliser l'attribut <strong>align-self</strong> qui permet de choisir l'alignement personnalisé. On peut en fait entièrement personnaliser le bloc choisi.</p>
      <p><em>Attention</em> il est important d'écrire <strong>.bloc:nth-child(?)</strong> sans espace avant et aprés les <strong>:</strong>, sinon l'interpréteur se trompe et comprend que <strong>nth-child(?)</strong> est la valeur de l'attribut <strong>.bloc</strong>.</p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
  height: 100px;
}

.bloc:nth-child(4){
    align-self: flex-end;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>
      <div class="exempleConteneur10">
        <div id="exempleBloc10-1">Bloc 1</div>
        <div id="exempleBloc10-2">Bloc 2</div>
        <div id="exempleBloc10-3">Bloc 3</div>
      </div>
      <br/>

      <p>Dans l'exemple ci-dessus <strong>flex-direction: row</strong> définit comme direction principale la ligne, <strong>justify-content</strong> aligne donc les blocs naturellement par rapport aux lignes, et en conséquence <strong>align-items: center</strong> aligne les blocs par rapport aux colonnes qui représentent la direction secondaire.</p>
      <p>Notons que si on avait choisi pour direction principale un alignement en colonne (<strong>flex-direction: column</strong>), alors <strong>align-self: flex-end</strong> aurait pour effet d'aligner le Bloc 3 par rapport à la fin de ligne.</p>
<br/>

      <p><em>Pour obtenir des Blocs alignés suivant un ordre donné :</em></p>
      <p>On peut modifier l'ordre des blocs à l'intérieur du code CSS sans changer le code HTML.</p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
}

.bloc:nth-child(1){
  order: 2;
}

.bloc:nth-child(2){
  order: 1;
}

.bloc:nth-child(3){
  order: 3;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>
      <div class="exempleConteneur12">
        <div id="exempleBloc11-1">Bloc 1</div>
        <div id="exempleBloc11-2">Bloc 2</div>
        <div id="exempleBloc11-3">Bloc 3</div>
      </div>
      <br/>


      <p><em>Pour agrandir certains blocs :</em></p>
      <p>On peut agrandir certains blocs pour occuper tout l'espace défini par le conteneur.</p>

      <div class="bloc">

        <div class="gauche">
          <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
        </div>

        <div class="droite">
          <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
}

.bloc:nth-child(1){
  flex: 1;
}</code></pre><footer class="legendeCode">CSS</footer>
        </div>

      </div>
<p>qui produit l'affichage suivant</p>
      <div class="exempleConteneur12">
        <div id="exempleBloc12-1">Bloc 1</div>
        <div id="exempleBloc12-2">Bloc 2</div>
        <div id="exempleBloc12-3">Bloc 3</div>
      </div>
      <br/>

      <p><em>Agrandir certains blocs :</em></p>
      <p>On peut par exemple s'assurer que le Bloc 1 est deux fois plus grand que le Bloc 2.</p>

        <div class="bloc">

          <div class="gauche">
            <pre><code class="language-html">&ltdiv id="conteneur"&gt
  &ltdiv class="bloc"&gt Bloc 1 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 2 &lt/div&gt
  &ltdiv class="bloc"&gt Bloc 3 &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
          </div>

          <div class="droite">
            <pre><code class="language-css">#conteneur{
  display: flex;
  flex-direction: row;
}

.bloc:nth-child(1){
  flex: 2;
}

.bloc:nth-child(2){
  flex: 1;
}</code></pre><footer class="legendeCode">CSS</footer>
          </div>

        </div>

        <div class="exempleConteneur12">
          <div id="exempleBloc13-1">Bloc 1</div>
          <div id="exempleBloc13-2">Bloc 2</div>
          <div id="exempleBloc13-3">Bloc 3</div>
        </div>
        <footer class="legendeCode">Affichage</footer>





<!-- ===== LES LIENS ===== -->

<h3 id="lien"> Les liens </h3>

  <p>Les liens hypertextes ont grandement participé au succès du Web. Il existe plusieurs types de liens, qui possèdent une structure commune. Les principaux types de liens sont les suivants :</p>

  <table>
    <tr> <th> Objectif </th> <th> Balises </th> </tr>
    <tr> <td> lien vers une page </td> <td> <pre>&lta href="http:adresseDeLaPage"&gt nom de la page &lt/a&gt</pre></td> </tr>
    <tr> <td> lien vers une ancre </td> <td> <pre>&lth2 id="monAncre"&gt Titre &lt/h2&gt
&lta href="#monAncre"&gt texte indiquant l'ancre &lt/a&gt</pre></td> </tr>
    <tr> <td> lien d'envoi d'un email </td> <td> <pre>&lta href="mailto:monAdresseMail@domaine.com"&gt
Message d'envoi d'e-mail &lt/a&gt</pre></td> </tr>
    <tr> <td> lien pour télécharger un fichier </td> <td> <pre>&lta href="monFichier.zip"&gt
Message de téléchargement &lt/a&gt </pre></td> </tr>
    <tr> <td> afficher une infobulle au survol d'un lien </td> <td> <pre>&lta title="Description"&gt nom de la page &lt/a&gt </pre></td> </tr>
    <tr> <td> ouvrir une nouvelle fenêtre dans un lien </td> <td> <pre>&lta href="http:adresseDeLaPage" target="_blank"&gt
nom de la page &lt/a&gt</pre></td> </tr>
  </table>

  <!-- Lien vers une page -->

  <h4> Lien vers une page </h4>

    <p>Le nom de la page apparaît souligné dans le texte et, lorsqu'on clique dessus, on accède à la page dont l'adresse a été enregistrée dans l'attribut <strong>href</strong>.</p>

    <p>Lorsque vous copiez l'adresse d'une page contenant le caractère <strong>&amp</strong>, il faut remplacer ce dernier par <strong>&ampamp</strong> pour assurer une bonne construction de la page.</p>


    <p>  Il existe deux types d'adresse :
      <ul>
        <li>l'adresse absolue qui correspond à l'adresse du site enregistrée sur le Web. Elle est de la forme https://www.rogerfederer.com/</li>
        <li>l'adresse relative qui correspond à une adresse par rapport au répertoire courant. Dans le cas d'un site internet cette adresse peut pointer vers un même dossier et être de la forme autrePage.html ou pointer vers un autre dossier du site et être de la forme dossierCible/autrePage.html. </li>
      </ul>
    </p>

  <!-- Lien vers une ancre -->

  <h4> Lien vers une ancre </h4>

    <p>Une ancre est un point de repère qu'on peut positionner dans une page HTML afin que l'utilisateur accède plus rapide à cet emplacement. Le lien se développe en deux étapes. On commence par créer une ancre à l'emplacement souhaité, puis on crée ensuite un lien contenant le caractère <strong>#</strong> dans l'attribut <strong>href</strong>.</p>

  <!-- Lien d'envoi d'un email -->

  <h4> Lien d'envoi d'un e-mail </h4>

    <p> Pour ouvrir automatiquement un gestionnaire d'e-mails en cliquant sur un lien, il faut définir l'adresse de destination du mail dans l'attribut <strong>href</strong>.</p>

  <!-- Lien pour télécharger un fichier -->

  <h4> Lien pour télécharger un fichier </h4>

    <p> Pour télécharger automatiquement un fichier en cliquant sur un lien, il faut indiquer le nom du fichier à télécharger. Cela suppose que ce fichier se trouve dans le répertoire courant.</p>



<!-- ====
LES MENUS
===== -->

<h3 id="menu"> Les menus </h3>

  <p> On crée un menu à l'aide de la balise <strong>&ltnav&gt</strong>.</p>
  <pre><code class="language-html">&ltnav id="menu"&gt
 &ltdiv class="element"&gt &lta href="index.html"&gt NOTRE ETABLISSEMENT &lt/a&gt &lt/div&gt
 &ltdiv class="element"&gt &lta href="lieu.html"&gt NOUS TROUVER &lt/a&gt &lt/div&gt
 &ltdiv class="element"&gt &lta href="contact.html"&gt CONTACT &lt/a&gt &lt/div&gt
&lt/nav&gt</code></pre><footer class="legendeCode">HTML</footer>



<!-- ============
INSERER UNE IMAGE
============= -->

<h3 id="image"> Insérer une image </h3>

  <p>Le format d'une image (png, jpg, tif, gif, bmp,...) définit à la fois son poids et sa qualité. Il convient de choisir ce format au moment de l'enregistrement avec discernement car il peut fortement influencer le temps de chargement de cette image lors de la consultation du site Web.
    <ul>
      <li>JPG : adapté aux photographies dont il réduit le poids. Il comporte plus de 16 millions de couleurs différentes et détériore la qualité de l'image sans que cela soit perceptible. La compression d'une photographie au format jpg étant plus puissante que d'autres formats, le chargement d'une photographie au format jpg sera plus rapide</li>
      <li>PNG : adapté à une image qui n'est pas une photographie. Il n'altère pas la qualité de l'image et peut être rendu transparent. Il comporte également plusieurs millions de couleurs</li>
      <li>GIF : limité à 256 couleurs, il accepte l'animation des images</li>
    </ul>
  </p>
  <p> Pour insérer une image, celle-ci doit se trouver dans le répertoire courant et il faut alors utiliser les instructions :</p>
    <pre><code class="language-html">&ltimg src="images/monImage.png" alt="description de l'image" width=30%&gt</code></pre><footer class="legendeCode">HTML</footer>

  <p><strong>src</strong> permet de définir le chemin pour accéder à l'image et <strong>alt</strong> permet de définir un descriptif au cas où l'image ne s'afficherait pas.</p>

    <p><em>Remarque,</em> pour faire déborder une image entre deux conteneurs, il est possible d'utiliser par exemple un <string>margin-bottom</string> négatif.</p>

    <!-- Insérer une figure -->

    <h4 id="figure"> Insérer une figure </h4>

    <p> Les figures jouent un rôle similaire aux images, à ceci près qu'elle disposent d'une légende.</p>
    <pre><code class="language-html">&ltfigure&gt
  &ltimg src="maFigure.png" alt="descriptif"/&gt
  &ltfigcaption&gt Légende de maFigure &lt/figcaption&gt
&lt/figure&gt</code></pre><footer class="legendeCode">HTML</footer>



<!-- =========================
INSERER UNE IMAGE TEXTE CENTRE
========================== -->

<h4> Insérer une image contenant un texte centré </h4>

  <p>Pour créer une image défilante avec du texte centré à l'intérieur, on peut utiliser deux blocs heroImage et heroTexte auquel on attribue la forme suivante dans le fichier style.css associé :</p>

  <div class="bloc">

    <div class="gauche">
      <pre><code class="language-html">&ltdiv class="heroImage"&gt
  &ltdiv class="heroTexte"&gt
    &lth1&gt Texte centré &lt/h1&gt
  &lt/div&gt
&lt/div&gt</code></pre><footer class="legendeCode">HTML</footer>
    </div>

    <div class="droite">
      <pre><code class="language-css">.heroImage{
  /* image dans laquelle on veut insérer des
  propriétés de texte */
  background-image: url("fondTitre.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  height: 500px;
}

.heroTexte{
  /* affiche le texte au milieu, horizontalement
  et verticalement */
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}</code></pre><footer class="legendeCode">CSS</footer>
    </div>

  </div>

<!-- INSERER UN FAVICON -->

    <h4>Insérer un favicon</h4>

    <p>Pour insérer un petit symbole dans l'onglet de la page Web à côté du titre </p>

    <pre><code class="language-html">&ltlink rel="icon" type="image/png" href="adresse_image"></code></pre>


    <!-- INSERER UN SYMBOLE -->

    <h4>Insérer un symbole</h4>

    <p>Pour rajouter un symbole, il faut fournir son code HTML qui est universel. Voici une liste de quelques symboles utiles :</p>

    <table>
        <tr> <th>symbole</th> <th>code HTML</th> </tr>
        <tr> <td>&#128526;</td> <td>&amp#128526;</td></tr>
        <tr> <td>&#8594;</td> <td>&amp#8594;</td></tr>
        <tr> <td>&#8593;</td> <td>&amp#8593;</td></tr>
        <tr> <td>&#127966;</td> <td>&amp#127966;</td></tr>
        <tr> <td>&#128204;</td> <td>&amp#128204;</td></tr>
        <tr> <td>&#127922;</td> <td>&amp#127922;</td></tr>
        <tr> <td>&#128193;</td> <td>&amp#128193;</td></tr>
        <tr> <td>&#128194;</td> <td>&amp#128194;</td></tr>
        <tr> <td>&#128213;</td> <td>&amp#128213;</td></tr>
        <tr> <td>&#128215;</td> <td>&amp#128215;</td></tr>
        <tr> <td>&#128216;</td> <td>&amp#128216;</td></tr>
        <tr> <td>&#128217;</td> <td>&amp#128217;</td></tr>
        <tr> <td>&#128231;</td> <td>&amp#128231;</td></tr>
        <tr> <td>&#128233;</td> <td>&amp#128233;</td></tr>
        <tr> <td>&#128241;</td> <td>&amp#128241;</td></tr>
        <tr> <td>&#128263;</td> <td>&amp#128263;</td></tr>
        <tr> <td>&#128266;</td> <td>&amp#128266;</td></tr>
        <tr> <td>&#128274;</td> <td>&amp#128274;</td></tr>
        <tr> <td>&#128275;</td> <td>&amp#128275;</td></tr>
        <tr> <td>&#128269;</td> <td>&amp#128269;</td></tr>
        <tr> <td>&#128281;</td> <td>&amp#128281;</td></tr>
        <tr> <td>&#128285;</td> <td>&amp#128285;</td></tr>
        <tr> <td>&#128308;</td> <td>&amp#128308;</td></tr>
        <tr> <td>&#128309;</td> <td>&amp#128309;</td></tr>
        <tr> <td>&#128314;</td> <td>&amp#128314;</td></tr>
        <tr> <td>&#128315;</td> <td>&amp#128315;</td></tr>
    </table>

<!-- ============
INSERER UNE VIDEO
============= -->

<h3 id="video"> Insérer une video </h3>

  <p> Le format d'une vidéo (h.264, webm, ogg,...) définit à la fois son poids et sa qualité.
    <ul>
      <li>H.264 : format le plus utilisé à l'heure actuelle, mais pas entièrement gratuit. Sa version gratuite ne permet pas l'utilisation à des fins commerciales</li>
      <li>WebN : codec libre et gratuit, concurrent de H.264</li>
      <li>Ogg : codec libre et gratuit, moins puissant que H.264 mais mal reconnu sous Windows, il fonctionne essentiellement sous Linux</li>
    </ul>
  </p>
  <p> Lorsque la vidéo est hébergée en dehors du site : </p>
  <pre><code class="language-html">&ltcenter&gt
  &ltfigure&gt
    &ltiframe width="560" height="315" src="https://www.adresseVideo"
    frameborder="0" allow="accelerometer; autoplay; encrypted-media;
    gyroscope; picture-in-picture" allowfullscreen&gt &lt/iframe&gt
    &ltfigcaption&gt Titre de la vidéo, &ltem&gt source YouTube &lt/em&gt &lt/figcaption&gt
  &lt/figure&gt
&lt/center&gt</code></pre><footer class="legendeCode">HTML</footer>

  <p> Lorsque la vidéo se trouve dans le répertoire courant, il faut la convertir en différents formats qu'on place également dans le répertoire courant afin que chaque navigateur puisse lire un format qu'il reconnaît. </p>
  <pre><code class="language-html">&ltvideo controls poster="sintel.jpg" width="600"&gt
  &ltsource src="nomVideo.mp4"&gt
  &ltsource src="nomVideo.webm"&gt
  &ltsource src="nomVideo.ogv"&gt
&lt/video&gt</code></pre><footer class="legendeCode">HTML</footer>

  <p> Les différents attributs qu'il est possible d'utiliser sont les suivants : </p>
  <table>
    <tr><th> Attribut </th> <th> Effet obtenu </th></tr>
    <tr><td> poster </td> <td> Par défaut le navigateur affiche la 1ère image de la vidéo. Dans certains cas, cette image est un écran noir. Pour éviter cet inconvénient, <strong>poster</strong> définit l'image à afficher à la place de la vidéo tant que celle-ci n'est pas chargée. </td></tr>
    <tr><td> controls </td><td> ajoute les boutons de lecture de la piste vidéo. Cette fonctionnalité peut également être contrôlée par JavaScript </td></tr>
    <tr><td> width </td> <td> largeur de la vidéo en pixels </td></tr>
    <tr><td> height </td> <td> hauteur de la vidéo en pixels </td></tr>
  </table>

  <p>On ne peut pas forcer le préchargement des vidéos, c'est le navigateur qui décide pour économiser la bande passante.</p>




    <!-- ===== CREATION D'UN FORMULAIRE ===== -->

    <h3 id="formulaire"> Créer un formulaire </h3>

    <p> Un formulaire est une zone interactive dans laquelle les utilisateurs peuvent saisir des informations. Il s'agit donc d'un élément fondamental constituant une page HTML. </p>
    <p>Dans le cas d'un champ acceptant une réponse sur une seule ligne :</p>

    <pre><code class="language-html">&ltform method="post" action="pageDestination.py"&gt
  &ltp&gt Veuillez remplir les informations suivantes : &lt/p&gt
  &ltlabel for="identifiant"&gtidentifiant&lt/label&gt :
  &ltinput type="text" name="identifiant" id="identifiant"/&gt
&lt/form&gt</code></pre><footer class="legendeCode">HTML</footer>

    <p>qui affiche le résultat suivant :</p>

    <form method="post" action="">
        <p> Veuillez remplir les informations suivantes : </p>
        <label for="">identifiant</label> : <input type="text" name="identifiant" class="identifiant"/>
    </form>


    <p> Dans le cas d'un champ acceptant une réponse sur plusieurs lignes :</p>


    <pre><code class="language-html">&ltform method="post" action="pageDestination.py"&gt
  &ltp&gt Veuillez remplir le formulaire ci-dessous : &lt/p&gt
  &ltlabel for="identifiant"&gtVos commentaires&lt/label&gt :
  &lttextarea name="identifiant" id="identifiant"
  rows="6" cols="30"&gt&lt/textarea&gt
&lt/form&gt</code></pre><footer class="legendeCode">HTML</footer>

    <p>qui affiche le résultat suivant</p>

    <form method="post" action="">
        <p> Veuillez remplir le formulaire ci-dessous : </p>
        <label for="">Vos commentaires</label> :
        <textarea name="identifiant" class="identifiant" rows="6" cols="30"></textarea>
    </form>


    <p> Les différents attributs d'un formulaire sont les suivants :</p>
    <table>
        <tr><th> Objectif </th> <th> Balises </th></tr>
        <tr><td> champ texte </td> <td> <pre>type="text"</pre> </td></tr>
        <tr><td> champ email </td> <td> <pre>type="email"</pre> </td></tr>
        <tr><td> champ url </td> <td> <pre>type="url"</pre> </td></tr>
        <tr><td> champ nombre entier </td> <td> <pre>type="number" min="0" max="10" step="1"</pre> </td></tr>
        <tr><td> champ nombre sous forme de curseur </td> <td> <pre>type="range" min="0" max="10" step="1"</pre> </td></tr>
        <tr><td> champ couleur </td> <td> <pre>type="color"</pre> </td></tr>
        <tr><td> champ date </td> <td> <pre>type="date"</pre> </td></tr>
        <tr><td> champ heure </td> <td> <pre>type="time"</pre> </td></tr>
        <tr><td> champ mois </td> <td> <pre>type="month"</pre> </td></tr>
        <tr><td> champ semaine </td> <td> <pre>type="week"</pre> </td></tr>
        <tr><td> champ date-heure </td> <td> <pre>type="datetime"</pre> </td></tr>
        <tr><td> champ numéro de téléphone </td> <td> <pre>type="tel"</pre> </td></tr>
        <tr><td> champ pour mot de passe où les caractères tapés restent invisibles </td> <td> <pre>type="password"</pre> </td></tr>
        <tr><td> modifier la taille du champ monoligne</td> <td> <pre>size="30"</pre> </td></tr>
        <tr><td> contrôler la taille d'un champ multilignes</td> <td> <pre>rows="10" cols="60"</pre> </td></tr>
        <tr><td> limiter le nombre de caractères à saisir </td><td> <pre>maxlength="12"</pre> </td></tr>
        <tr><td> préremplir avec une valeur par défaut pour un champ sur une ligne</td><td> <pre>value="identifiant"</pre> </td></tr>
        <tr><td> préremplir avec une valeur par défaut pour un champ sur plusieurs lignes</td><td> <pre>&lttextarea name="identifiant" id="identifiant"&gt
       identifiant &lt/textarea&gt</pre> </td></tr>
        <tr><td> donner une indication sur le contenu du champ </td> <td> <pre>placeholder="que des caractères"</pre> </td></tr>
        <tr><td> champ case à cocher (plusieurs choix possibles)</td> <td> <pre>type="checkbox"</pre> </td></tr>
        <tr><td> champ case à cocher avec case cochée par défaut </td> <td> <pre>type="checkbox" name="identifiant" checked</pre> </td></tr>
        <tr><td> champ zone d'option (une seule case possible) </td> <td> <pre>type="radio"</pre> </td></tr>
        <tr><td> rendre un champ obligatoire </td> <td> <pre> &ltinput type="text" name="nom" id="nom" required/&gt</pre> </td></tr>
    </table>

    <!-- Les zones d'option -->

    <h4> Les zones d'option </h4>

    <p> En particulier, dans le cas d'une zone d'option, l'attribut <strong>name</strong> doit être identique pour toute la zone d'option, seul l'attribut <strong>id</strong> varie pour chaque champ :</p>


    <pre><code class="language-html">&ltform method="post" action="pageDestination.py"&gt
  &ltp&gt Question &ltp/&gt
  &ltinput type="radio" name="identite" id="nom"/&gt &ltlabel for="nom"&gt
  nom &lt/label&gt &ltbr/&gt
  &ltinput type="radio" name="identite" id="prenom"/&gt &ltlabel for="prenom"&gt
  prenom &lt/label&gt

  &ltp&gt Question &ltp/&gt
  &ltinput type="radio" name="adherent" id="contrat"/&gt &ltlabel for="contrat"&gt
  contrat &lt/label&gt &ltbr/&gt
  &ltinput type="radio" name="adherent" id="type"/&gt &ltlabel for="type"&gt
  type &lt/label&gt
&lt/form&gt</code></pre><footer class="legendeCode"> HTML </footer>

    <p>qui affiche le résultat suivant</p>
    <form method="post" action="pageDestination.py">
        <p> Question </p>
        <input type="radio" name="identite" id="nom"/> <label for="nom"> nom </label><br/>
        <input type="radio" name="identite" id="prenom"/> <label for="prenom"> prenom </label>

        <p> Question </p>
        <input type="radio" name="adherent" id="contrat"/> <label for="contrat"> contrat </label><br/>
        <input type="radio" name="adherent" id="type"/> <label for="type"> type </label>
    </form>

    <!-- Les listes déroulantes -->

    <h4> Les listes déroulantes </h4>

    <p> Les listes déroulantes sont construites différemment :</p>


    <pre><code class="language-html">&ltform method="post" action="pageDestination.py"&gt
  &ltp&gt Question&lt/p&gt
  &ltselect name="choix" id="choix">
    &ltoption value="rouge"&gtrouge&lt/option&gt
    &ltoption value="vert"&gtvert&lt/option&gt
    &ltoption value="bleu"&gtbleu&lt/option&gt
  &lt/select&gt
&lt/form&gt</code></pre><footer class="legendeCode">HTML</footer>


    <p>qui produit l'affichage suivant</p>
    <form method="post" action="">
        <p> Question </p>
        <select name="choix">
            <option value="rouge">rouge</option>
            <option value="vert">vert</option>
            <option value="bleu">bleu</option>
        </select>
    </form>

    <p> Il est possible de grouper les options affichées en utilisant la balise <strong>&ltoptgroup&gt</strong>. Dans ce cas, les noms de groupes offrent une indication mais ne peuvent pas être sélectionnés : </p>


    <pre><code class="language-html">&ltform method="post" action="pageDestination.py"&gt
  &ltp&gt Question&lt/p&gt
  &ltselect name="choix" id="choix">
    &ltoptgroup label="couleurs"&gt
      &ltoption value="rouge"&gtrouge&lt/option&gt
      &ltoption value="vert"&gtvert&lt/option&gt
      &ltoption value="bleu"&gtbleu&lt/option&gt
    &lt/optgroup&gt
  &lt/select&gt
&lt/form&gt</code></pre><footer class="legendeCode">HTML</footer>

    <p>qui produit l'affichage suivant</p>

    <form method="post" action="">
        <p> Question </p>
        <select name="choix" id="">
            <optgroup label="couleurs">
                <option value="rouge">rouge</option>
                <option value="vert">vert</option>
                <option value="bleu">bleu</option>
            </optgroup>
        </select>
    </form>

    <!-- Regrouper les champs d'un formulaire -->

    <h4> Regrouper les champs d'un formulaire </h4>

    <p> Il est possible de grouper les questions affichées en utilisant les balises <strong>&ltfieldset&gt</strong> pour délimiter l'encadrement et <strong>&ltlegend&gt</strong> pour donner un titre au cadre.</p>


    <pre><code class="language-html">&ltform method="post" action="pageDestination.py"&gt
  &ltfieldset&gt
    &ltlegend&gt sujet &lt/legend&gt
      &ltp&gt Question&lt/p&gt
      &ltselect name="choix" id="choix">
        &ltoption value="rouge"&gtrouge&lt/option&gt
        &ltoption value="vert"&gtvert&lt/option&gt
        &ltoption value="bleu"&gtbleu&lt/option&gt
      &lt/select&gt
  &lt/fieldset&gt
&lt/form&gt</code></pre><footer class="legendeCode">HTML</footer>
    <p>qui produit l'affichage suivant</p>


    <form method="post" action="">
        <fieldset>
            <legend> sujet </legend>
            <p> Question </p>
            <select name="choix" id="choix">
                <option value="rouge">rouge</option>
                <option value="vert">vert</option>
                <option value="bleu">bleu</option>
            </select>
        </fieldset>
    </form>

    <!-- bouton validation -->

    <h4> Le bouton de validation </h4>

    <p> A la fin d'un formulaire, on doit utiliser un bouton de validation pour récupérer les réponses saisies par l'utilisateur afin de les exploiter et se rendre sur la page indiquée dans l'attribut <strong> action </strong>. On atteint ici les limites du langage HTML car ce traitement de l'information est réalisé par un autre langage, par exemple PHP, JavaScript, Java, Python, ...</p>


    <pre><code class="language-html">&ltinput type="submit" value="Valider"/&gt</code></pre><footer class="legendeCode">HTML</footer>

    <p>qui produit l'affichage suivant</p>

    <input type="submit" value="Valider"/>

    <p>Il existe également un bouton de remise à zéro :</p>

    <pre><code class="language-html">&ltinput type="reset" value="Remise à zéro"/&gt</code></pre><footer class="legendeCode">HTML</footer>

    <p>qui produit l'affichage suivant</p>

    <input type="reset" value="Remise à zéro"/>









    <!-- ===== CREATION D'UN TABLEAU ===== -->

<h3 id="tableau"> Insérer un tableau </h3>

      <pre><code class="language-html">&lttable&gt
  &lttr&gt &ltth&gt TitreColonne1 &lt/th&gt
  &ltth&gt TitreColonne2 &lt/th&gt &lt/tr&gt
  &lttr&gt &lttd&gt texte &lt/td&gt &lttd&gt texte &lt/td&gt &lt/tr&gt
  &lttr&gt &lttd&gt texte &lt/td&gt &lttd&gt texte &lt/td&gt &lt/tr&gt
  &lttr&gt &lttd&gt texte &lt/td&gt &lttd&gt texte &lt/td&gt &lt/tr&gt
&lt/table&gt</code></pre><footer class="legendeCode">HTML</footer>


      <p>qui affiche le résultat suivant</p>

      <table>
        <tr> <th> TitreColonne1 </th> <th> TitreColonne2 </th> </tr>
        <tr> <td> texte </td> <td> texte </td> </tr>
        <tr> <td> texte </td> <td> texte </td> </tr>
        <tr> <td> texte </td> <td> texte </td> </tr>
      </table>


  <p> Les différents éléments d'un tableau sont les suivants :</p>
  <table>
    <tr><th> Objectif </th> <th> Balises </th></tr>
    <tr><td> définir un tableau </td> <td> <pre>&lttable&gt maTable &lt/table&gt</pre> </td></tr>
    <tr><td> titre </td><td> <pre>&ltcaption&gt titre &lt/caption&gt</pre> </td></tr>
    <tr><td> ligne </td><td> <pre>&lttr&gt uneLigne &lt/tr&gt</pre> </td></tr>
    <tr><td> colonne en-tête </td> <td> <pre>&ltth&gt en-tête &lt/th&gt</pre> </td></tr>
    <tr><td> colonne texte </td> <td> <pre>&ltth&gt texte &lt/th&gt</pre> </td></tr>
  </table>





    <!-- ===== LES SECTIONS CACHEES ====== -->

    <h3 id="cachee">Les sections cachées</h3>

    <p>Dans le code HTML, entre les sections <em>head</em> et <em>body</em>, il faut rajouter le script suivant</p>

    <pre><code class="language-html">&lt!-- script de gestion de l'apparition du contenu d'une section --&gt
&ltscript type="text/javascript"&gt
    function affichageConditionnel(bouton, id) {
        var div = document.getElementById(id);
        // si le div est masqué, on l'affiche et on change le contenu du bouton
        if(div.style.display=="none") {
            div.style.display = "block";
            bouton.innerHTML = "-";
        // s'il est visible, on le masque et on change le contenu du bouton
        } else {
            div.style.display = "none";
            bouton.innerHTML = "+";
        }
}&lt/script&gt</code></pre>

    <p>Il faut ensuite rajouter dans le code HTML au début de la section à cacher le contenu suivant </p>

    <pre><code class="language-html">&lth2 id="nomIdentite"&gtTitre de ma section&ltbutton type="submit" onclick="affichageConditionnel(this,'nomIdentite_cache');"&gt + &lt/button&gt&lt/h2&gt

    &ltdiv id="nomIdentite_cache" style="display:none;"&gt
        &ltp&gtle contenu de la section cachée se trouve ici.&lt/p&gt
    &lt/div&gt
    </code></pre>

    <p>La section apparaît lorsque l'utilisateur clique sur le bouton <strong>+</strong></p>

    <p>L'affichage produit est le suivant :</p>

    <h4 id="nomIdentite">Titre de ma section<button type="submit" onclick="affichageConditionnel(this,'nomIdentite_cache');"> + </button></h4>

    <div id="nomIdentite_cache" style="display:none;">
        <p>Voici le contenu de la section cachée.</p>
    </div>





    <!-- ===== RESPONSIVE DESIGN ===== -->

    <h3 id="responsive"> Responsive design </h3>


    <!-- ===== LES MEDIA QUERIES ===== -->

<h3 id="queries"> Les media queries </h3>





    <!-- RAJOUT DE BOITE -->

    <h3 id="miseValeur">Mise en valeur d'un paragraphe par une boite</h3>

    <p>Pour mettre en valeur un texte en utilisant une boîte arrondie avec un effet d'ombre et une image dans le pourtour :</p>

    <pre><code class="language-html">&ltfieldset&gt
  &ltlegend&gt &ltimg src="chemin_image" width="80" height="80"&gt &lt/legend&gt
  &ltp&gt Contenu du paragraphe à encadrer. &lt/p&gt
&lt/fieldset&gt </code> </pre><footer class="legendeCode">HTML</footer>

    <pre><code class="language-css">fieldset{
  width: 70%;
  margin: auto;
  border: 2px rgb(153,102,102) solid;
  border-radius: 10px;
  box-shadow: 1px 8px 12px #555;
  margin-bottom:30px;
}</code></pre></pre><footer class="legendeCode">CSS</footer>

  <p>On obtient alors le résultat suivant :</p>

    <fieldset><legend><img src="../../images/general/symbole.png" width="80" height="80"> </legend>
        <p>Contenu du paragraphe à encadrer.</p>
    </fieldset>


    <!-- ECRIRE DU CODE -->

    <h3 id="ecrireCode">Ecrire du code</h3>


    <!-- ======= VERIFIER LA VALIDITE HTML DU SITE ======= -->

    <h3 id="verification"> Vérifier la validité HTML5 d'un site </h3>

    <p> W3C propose sur son <a href="https://validator.w3.org/">site</a> un outil appelé <em>Validator</em> permettant de valider en ligne des codes sources afin de s'assurer qu'ils sont conformes au standard HTML5. Les erreurs de structure ainsi que les bugs les plus classiques sont systématiquement signalés. Notons que contrairement à beaucoup de langages, HTML ne va pas arrêter son exécution si il rencontre une erreur, mais va tout simplement l'ignorer. Si cela est pratique pour pouvoir continuer d'avancer dans la rédaction du programme, cette approche cache les bugs et les rend plus difficiles à détecter.</p>
    <p> Les erreurs les plus classiques sont les suivantes :</p>
    <ul>
        <li>tous les textes doivent se trouver entre des balises <strong> p</strong></li>
        <li>toutes les images doivent comporter une description avec l'attribut <strong>alt</strong></li>
        <li>toutes les balises ouvertes doivent être fermées et les balises ne doivent pas s'entrecroiser</li>
        <li>tous les liens contenant des <strong>&amp</strong> doient être remplacés par des <strong>&ampamp</strong></li>
    </ul>

    <a href="#titreSite" style="margin-left:30%;">&#128314; Haut de page &#128314;</a>

</section> <!-- fin contenu -->
          </section>  <!-- fin grandContenu -->

<aside id="chapitres">
  <nav>
    <fieldset2>
        <a title="accueil du site" href="../index.html"><img class="logo" src="../../images/general/logoAccueil.png" alt="Accueil" /></a>
        <a title="accueil de la partie Web" href="web.html"><img class="logo" src="../../images/general/logoWeb.png" alt="Web" /></a>
        <a title="accueil de la partie Appli" href="../appli/appli.html"><img class="logo" src="../../images/general/logoAppli.png" alt="Appli" /></a>
    </fieldset2>
  </nav>
</aside>

</section> <!-- fin principal -->

<!-- footer -->



<footer class="piedPage">
    <div class="footerColumn">
        <p class="piedPageTitre">Liens utiles</p>
        <nav>
            <a class="footerNav" href="https://www.w3schools.com/" target="_blank">W3school</a>
            <a class="footerNav" href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">Color picker</a>
        </nav>
    </div>

    <div class="footerColumn">
        <p class="piedPageTitre">Liens utiles</p>
        <nav>
            <a class="footerNav" href="https://realpython.com/" target="_blank">Real python</a>
            <a class="footerNav" href="https://docs.python.org/3/" target="_blank">Doc python</a>
        </nav>
    </div>

    <div class="LargeFooterColumn">
        <p class="piedPageTitre">Mentions légales</p>

        <nav>
            <a class="footerNav" href="" target="_blank">Politique de confidentialité</a>
            <a class="footerNav" href="" target="_blank">Conditions d'utilisation</a>
            <p class="piedPageParagraphe">&copy 2021 ToKen</p>

        </nav>
    </div>

    <div class="largeFooterColumn">
        <p class="piedPageTitre">Au sujet de l'auteur</p>
        <p class="piedPageParagraphe"><strong>S. Robin :</strong><br/>
            Professeur d'informatique et développeur passionné par les possibiltés incroyables des langages informatiques.</p>

    </div>

</footer>



</body>
</html>
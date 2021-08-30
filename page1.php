<?php
	$auth = 0;
  include "bd.php"; 
  include "form.php";
  include "auth.php"; 
?>
<!DOCTYPE html>
<html>
		<head>
			<title>MON SITE</title>
			<link rel = "stylesheet" href="page1.css" />
			<meta charset = "utf-8" /> 
			<meta name = "viewport" content = "width=device-width, initiale-scale=1.0" />
		</head>
	<body>
		<header>
			<div id = "logo">
				<img src = "logo.jpg" alt = "logo" id="logo" />
				<a href = "http://facebook.com"><img src ="facebook.png" id ="fb" /></a>
				<a href = "http://alexmods.com/down/gbwhatsapp-pro."><img src ="whatsapp.png" id ="wh" /></a>
				<a href = "237690232120"><img src ="telephone.png" id ="tel" /></a>
				<div id = "nom1">N<spam id="arc1">o</spam><spam id="arc2">u</spam><spam id="arc3">b</spam><spam id="arc4">i</spam><spam id="arc5">s</spam><spam id="arc6">s</spam><spam id="arc7">i</spam><spam id="arc8">e</spam></div>
				<div id = "nom2">W<spam id="arc9">i</spam><spam id="arc10">l</spam><spam id="arc11">f</spam><spam id="arc12">r</spam><spam id="arc13">i</spam><spam id="arc14">e</spam><spam id="arc15">d</spam></div>
				<span>noubissiekamgawilfried2017@gmail.com</span>
				<span id = "contact">Contactez-Moi !</span>
			</div>
		</header>
		
		<nav>
			<div class= "table">
				<ul>
					<li class="bio"><a href = "#bio">Biographie</a></li>
					<li class ="loi"><a href = "#loi">Loisirs</a></li>
					<li class = "com"><a href = "#">Commentaires</a></li>
				</ul>
			</div>
	   </nav>
	  <p> <blockquote><blockquote>
		<?php
			echo "<br/><br/><br/>";
				if((date('H') >= 0 ) && (date('H') < 12)){
					echo "Bonjour et bienvenue à vous dans ma Page Web; sentez vous libre et surtout n'hésitez pas à me contacter en cas de besoin ou de question(s) !";
				}elseif((date('H')>=12) && (date('H')<18)){
					echo "Bonne après midi et bienvenue à vous dans ma Page Web ; sentez nous libre et surtout n'hésitez pas à me contacter en cas de besoin ou de question(s) !";
				}elseif((date('H')>=18) && (date('H')<0)){
					echo "Bonsoir et bienvenue à vous dans ma Page Web ; sentez nous libre et surtout n'hésitez pas à me contacter en cas de besoin ou de question(s) !";
				}
				
		?>
		 
		</blockquote></blockquote>
		</p>
		
		<p>
			<ul><br/><br/>
				<li id = "bio"> Biographie</li><br/>
					<p>
						<blockquote>
							Je me nomme <strong>Noubissie Kamga Wilfried</strong>; Originaire du Cameroun, j'ai vu le jour 
							à l'hostpital de Biem-Assi situé à Yaoundé(Cameroun).</blockquote>
							Jusqu'à l'âge de 09 ans, je vivais avec mes parents
							(Papa Yossa Isidore et Maman Nguefack Mireille) dans le quartier Damas. puis, suite à un problème qu'ils ont
							eu, ils se sont séparé et je suis venu vivre avec ma mère et ma petite soeur (Sandra) dans le quartier melen 
							jusqu'à ce jours ( <?php echo date('d/m/Y');?>). La séparation eut lieu en plein milieu scolaire; j'ai donc 
							subit un changement d'établissement scolaire quittant de l'école primaire "Les Colibris" pour l'école primaire de la 
							GP(Garde Présidentielle), où je faisais le CM1 et par la grasse de Dieu, je réussi pour passer en classe suppérieur (le CM2). 
							Malheuresement, au terme de cette année ( en 2010), j'ai réussi mon premier examen (le CEP) mais j'ai pas pu réussir le concours d'entré en 6<sup>ème</sup>, et
							pour des problèmes finenciers, ma place n'a pas pu être payé afin que je puisse intégrer le Lycée Général Leclerc qui est était le Lycée où j'ai 
							composé. Ainsi, l'année qui suivait (en 2011) fut donc une année blanche pour moi car je l'ai passé au quartier(comme on le dit souvent).
							L'année d'apres, ma place fut payé au Lycée de Ngoa-Ekelle afin que je puisse intégrer l'établissement et continuer mes études. 
							C'est donc en (2012) que j'eus intégré un établissement d'enseignement secondaire. <br/>
							Une fois dans l'établissement, entouré de mauvaise compagnie, je n'ai pas toujours été un élève modèle jusqu'à la classe de 3<sup>ème</sup> , où j'ai échoué
							et l'entré en seconde et le Brevet d'Etude du Premier Cycle(BEPC). La, nous somme en 2016. Cette échec à été pour moi un "atout", car cela m'a permis d'ouvrir les
							yeux et de prendre conscience sur beaucoup de faits! Ainsi, l'année qui suivait,( en 2017) je réussis Le BEPC avec la mention ASSEZ BIEN, puis le PROBATOIRE et enfin
							le BACCALAUREAT en 2020 avec la mention BIEN. La même année, je fus baptisé, communié et confirmé à l'Eglise Catholique de NDZONG-MELEN. Par la suite, j'eus intégré l'UY1(Université de Yaoundé 1)
							où je continue encore mes études à la filière Informatique.
							A la fin de ma première année universitaire (en 2021), je fus accepté dans une Entreprise de Développement Web en tant que Stagiaire, où, j'ai beaucoup appris, et d'où j'ai pu créer Cette Page Web.
						
					</p><br/><br/>
				<li id = "loi">Loisirs</li>
					<p>
						<blockquote>En cequi concer ne mes Loisirs, je suis un grand passionné de musique, de séries/films.</blockquote>
					</p>
						<ol>
							<li id = "musique">La musique</li>
								<div = id ="divmus">
									<blockquote>En cequi concerne la musique, je suis un grand passionné de Rap français. l'un des premier artiste Francais m'ayant fait decouvrir le Rap fut <strong>Maitre Gims</strong>, avec
									son tout premier song solo "J'me tire".</blockquote> Apres lui, j'ai decouvert <strong>Black M</strong>, puis leurs groupe de musique la <strong>Sexion D'assaut</strong>, et dans la Sexion d'assaut,
									j'ai decouvert mon aritste préféré jusqu'à présent qui est <strong>Lefa</strong>.<br/>
									Cequi fait de moi un aussi grand fane de Lefa est son style de Rap, cette façon qu'il a de rapper comme il parle, sa façon d'agencer les rimes, bref c'est 
									l'un des rappeur français m'ayant marqué au plus profond. La plus part du temps, quand je m'ennuie, et que je decide d'écouter un peu de musique pour passer du temps,
									il s'agit donc dans la pluspart du temps soit de Gims, soit de Black M, soit de la sexion, soit de Lefa !<br> Voila quelques images les representants :
									<br/><img src = "lefa.jpg" id="lefa"><img src = "gims.jpg" id="gims"><img src = "blackm.jpg" id="blackm"><img src = "sexion.jpg" id="sexion">
								</div>
						</ol>
				
			</ul>
		</p>

	   <footer>
			<p>Email: noubissiekamgawifried2017@gmail.com</p>
			<p>Contact: +237 690 232 120</p>
			
	   </footer>
  </body>
</html>
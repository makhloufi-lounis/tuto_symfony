<?php

namespace Sdz1\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Sdz1\BlogBundle\Entity\Article;
use Sdz1\BlogBundle\Entity\Image;
use Sdz1\BlogBundle\Entity\Commentaire;
use Sdz1\BlogBundle\Form\ArticleType;

class myBlogController extends Controller{
	  
	public function indexAction(){
		
		//return  $this->render('Sdz1BlogBundle:Blog:index.html.twig', array('message'=>'Bonjour tous le monde'));
		                      
	   /*$id = 5;
	   
	   $url = $this->generateUrl('sdzblog_voir', array('id'=> $id), true);
	   
	   return $this->redirect($url);
	   
	   // un autre exemple de redirection
	   // return $this->redirect( $this->generateUrl('sdzblog_accueil', array('page' => 2)) );*/
	   
		
		// le fonctionnement finale
		
		
		
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('Sdz1BlogBundle:Article')->findAll();
		if ($articles === null) {
			throw $this->createNotFoundException('Au c\'un article trouvé .');
		}
				
		return  $this->render('Sdz1BlogBundle:Blog:index.html.twig', array('articles'=>$articles));
		
	   
	}
	
	/**
	 *      /* utilisation de tamplating /
		 *      Récupération du service
				$templating = $this->get('templating');
				// On récupère le contenu de notre template
				$contenu = $templating->render('SdzBlogBundle:Blog:voir.html.twig');
				// On crée une réponse avec ce contenu et on la retourne
				return new Response($contenu);
	 */
	
	public function voirAction($id){
    
		
		$em = $this->getDoctrine()->getManager();
        
		$repository = $this->getDoctrine()->getManager()->getRepository('Sdz1BlogBundle:Article');
		
		//autre methode 
		//$article = $this->getDoctrine()->getManager()->find('SdzBlogBundle:Article', $id);
		
		// On récupère l'entité correspondant à l'id $id
		$article2 = $repository->find($id);
		
         
		// $article est donc une instance de Sdz\BlogBundle\Entity\Article
		// Ou null si aucun article n'a été trouvé avec l'id $id
		if($article2 === null){
			throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
		}
		
		return $this->render('Sdz1BlogBundle:Blog:voir.html.twig', array( 'article' => $article2 ));
	}
	
	public function voirSlugAction($annee, $slug, $format ){
		
		$_format = $this->get('request')->getRequestFormat();
		
		return new Response('On pourrait afficher l\'article correspondant au slug '.$slug.', créé en '.$annee.' et au format '.$format.' et le format de fichier :'.$_format.'.');
	}
	
	/**
	 * // Exemple d'utilisation de session et d'utilisation des variable des session
	 * public function voirAction($id)
		{
		// Récupération du service
			$session = $this->get('session');
		// On récupère le contenu de la variable user_id
			$user_id = $session->get('user_id');
		// On définit une nouvelle valeur pour cette variable user_id
			$session->set('user_id', 91);
		// On n'oublie pas de renvoyer une réponse
			return new Response('Désolé je suis une page de test, je n\'ai 	rien à dire');
		}
	 */
	
	public function ajouterAction(){
		
		// On crée un objet Article
		$article = new Article();
		$form = $this->createForm(new ArticleType, $article);
		$request = $this->get('request');
		
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) {
				// On l'enregistre notre objet $article dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($article);
				$em->flush();
				// On redirige vers la page de visualisation de l'article nouvellement créé
				return $this->redirect($this->generateUrl('sdz1blog_voir', array('id' => $article->getId())));
			 }
		}
		
		// À ce stade : // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
       // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		return $this->render('Sdz1BlogBundle:Blog:ajouter.html.twig', array( 'form' => $form->createView(), ));
				
	/*	//Creation de l'entité
		$article1 = new Article();
		$article1->setTitre('Mon dernier semaine');
		$article1->setAuteur('lolo');
		$article1->setContenu("la semaine été dificile mais sava.");

		$image = new Image();
		$image = new Image();
		$image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
		$image->setAlt('Logo Symfony2');
		
		$article1->setImage($image);
		
		// Création d'un premier commentaire
		$commentaire1 = new Commentaire();
		$commentaire1->setAuteur('winzou');
		$commentaire1->setContenu('On veut les photos !');
		// Création d'un deuxième commentaire, par exemple
		$commentaire2 = new Commentaire();
		$commentaire2->setAuteur('Choupy');
		$commentaire2->setContenu('Les photos arrivent !');
		// On lie les commentaires à l'article
		$commentaire1->setArticle($article1);
		$commentaire2->setArticle($article1);
		
		// On peut ne pas définir ni la date ni la publication,
		// car ces attributs sont définis automatiquement dans le 		constructeur
		// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
		
		
		//$em->clear();
		//var_dump($em->contains($article));
		// met à jour l'entité donnée en argument dans l'état où elle est en base de données
		//$em->refresh($article);
		//supprime l'entité donnée en argument de la base de données
		//$em->remove($article);
         // $em->flush(); // Exécute un DELETE sur $article
		
		
		// Étape 1 : On « persiste » l'entité
		$em->persist($article1);
		
		// Étape 2 : On « flush » tout ce qui a été persisté avant
		$em->flush();
		
		// Reste de la méthode qu'on avait déjà écrit
		if($this->getRequest()->getMethod() == 'POST'){
			$request = $this->getRequest();
			$session = $request->getSession();
			$session->getFlashBag()->add('info', 'Article bien enregistré');
			return $this->redirect( $this->generateUrl('sdzblog_voir', 	array('id' => $article1->getId())) );
		}
		
		
		return $this->render('Sdz1BlogBundle:Blog:ajouter.html.twig');*/
    }
    
    public function modifierAction($id){
    	
    	// On récupère l'EntityManager
    	$em = $this->getDoctrine()->getManager();
    	// On récupère l'entité correspondant à l'id $id
    	$article = $em->getRepository('Sdz1BlogBundle:Article')->find($id);
    	if ($article === null) {
    		throw $this->createNotFoundException('Article[id='.$id.']inexistant.');
    	}
    	// On récupère toutes les catégories :
    	$liste_categories = $em->getRepository('Sdz1BlogBundle:Categorie')->findAll();
    	// On boucle sur les catégories pour les lier à l'article
    	foreach($liste_categories as $categorie)
    	{
    		$article->addCategorie($categorie);
    	}
    	// Inutile de persister l'article, on l'a récupéré avec Doctrine
    	// Étape 2 : On déclenche l'enregistrement
    	$em->flush();
    	
    	// Ici, on récupérera l'article correspondant à $id
		// Ici, on s'occupera de la création et de la gestion du formulaire
		$article = array(
			'id' => 1,
			'titre' => 'Mon weekend a Phi Phi Island !',
			'auteur' => 'winzou',
			'contenu' => 'Ce weekend était trop bien. Blabla…',
			'date' => new \Datetime()
		);
		// Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
		return $this->render('Sdz1BlogBundle:Blog:modifier.html.twig', array( 'article' => $article ));
    }
    
    public function supprimerAction($id)
    {
    	// On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository('Sdz1BlogBundle:Article')->find($id);
		if ($article === null) {
			throw $this->createNotFoundException('Article[id='.$id.']	inexistant.');
		}
		// On récupère toutes les catégories :
		$liste_categories = $em->getRepository('Sdz1BlogBundle:Categorie')->findAll();
		// On enlève toutes ces catégories de l'article
		foreach($liste_categories as $categorie)
		{
		// On fait appel à la méthode removeCategorie() dont on a parlé plus haut
		// Attention ici, $categorie est bien une instance de categorie, et pas seulement un id
			$article->removeCategorie($categorie);
		}
		// On n'a pas modifié les catégories : inutile de les persister
		// On a modifié la relation Article - Categorie
		// Il faudrait persister l'entité propriétaire pour persister la relation
		// Or l'article a été récupéré depuis Doctrine, inutile de le persister
		// On déclenche la modification
		$em->flush();
		return new Response('OK');
    } 
    
    public function menuAction ($nombre) // Ici, nouvel argument
//$nombre, on l'a transmis via le render() depuis la vue
    {
    	// On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    	// On pourra récupérer $nombre articles depuis la BDD,
    	// avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    	$liste = array(
	    	array('id' => 2, 'titre' => 'Mon dernier weekend !'),
	    	array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
	    	array('id' => 9, 'titre' => 'Petit test')
    	);
    	return $this->render('Sdz1BlogBundle:Blog:menu.html.twig', array(
    			'liste_articles' => $liste // C'est ici tout l'intérêt : le	contrôleur passe les variables nécessaires au template !
    	));
    }
    
    // Dans un contrôleur, celui que vous voulez
    public function modifierImageAction($id_article)
    {
    	$em = $this->getDoctrine()->getManager();
    	// On récupère l'article
    	$article = $em->getRepository('Sdz1BlogBundle:Article')->find($id_article);
    	// On modifie l'URL de l'image par exemple
    	$article->getImage()->setUrl('test.png');
    	// On n'a pas besoin de persister notre article (si vous le faites, aucune erreur n'est déclenchée, Doctrine l'ignore)
    	// Rappelez-vous, il l'est automatiquement car on l'a récupéré depuis Doctrine
    	// Pas non plus besoin de persister l'image ici, car elle est également récupérée par Doctrine
    	// On déclenche la modification
    	$em->flush();
    	return new Response('OK');
    }
	
}
 
?>
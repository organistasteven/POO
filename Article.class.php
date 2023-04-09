<?php

/*étape 1.0 = définition de la class Article*/

/*La class article définis la stucture interne de nos articles (ses composants):
1er le titre de l'article = $articleTitle
2ème la date de publication = $publicationDate
3ème le contenu de l'article = $articleContent
4ème l'auteur de l'article = $articleAutor
5ème le liens en fin d'article vers les meta données = $metaDataLink
*/
/*étape 1.1 = création de la class Article*/

class Article{

    /*étape 1.2 = création des compansant de la class Article*/
    
    public $articleTitle;
    public $publicationDate;
    public $articleContent;
    public $articleAutor;
    public $articleCategory;

    /*étape 1.3 = création du constructeur de la class Article */
    
    public function __construct($parametre_articleTitle,$parametre_publicationDate,$parametre_articleContent,
    $parametre_articleAutor,$parametre_articleCategory){
         
        /*étape 1.4 = définition des paramètres du constructeur*/

        $this->articleTitle = $parametre_articleTitle;
        $this->publicationDate = $parametre_publicationDate;
        $this->articleContent = $parametre_articleContent;
        $this->articleAutor = $parametre_articleAutor;
        $this->articleCategory = $parametre_articleCategory;
        
    }
     /*étape 1.5 = créer une méthode getdatefr pour convertir le format de la date*/
    public function getDateFr(){

      //2017-07-04 => 04/07/2017//

      return date('d/m/Y',strtotime($this->publicationDate));

    }
}
?>
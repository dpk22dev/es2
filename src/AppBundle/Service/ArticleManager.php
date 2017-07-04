<?php
namespace AppBundle\Service;

use Exception;
use JMS\DiExtraBundle\Annotation as DI;

use AppBundle\Service\Iface\ArticleManagerIface;

/**
 * @DI\Service("article.manager")
 */
class ArticleManager implements ArticleManagerIface{

    public function getArtIdFromMDocId( $mdocId ){
        return $mdocId;
    }
}
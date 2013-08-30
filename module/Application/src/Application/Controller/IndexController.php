<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Initializer\EntityManagerAware;
use Application\Initializer\ElasticsearchAware;
use Application\Entity\User;


class IndexController extends AbstractActionController implements EntityManagerAware, ElasticsearchAware
{
    private $em;
    private $es;

    public function indexAction()
    {
        /*
         * Example: Use a custom finder
         * $result = $this->em->getRepository('Application\Entity\User')->myCustomFinder();
         */

        /* Example: Add new user to Elasticsearch and search for it
         * $type = $this->es->getIndex('user')->getType('user');
         * $user = new User();
         * $user->setId(1);
         * $user->setUsername('testuser');
         * $user->setEmail('testuser@example.com');
         * $user->setPassword('test123');

         * $doc = new \Elastica\Document(
         *     $user->getId(),
         *     array(
         *         'id' => $user->getId(),
         *         'username' => $user->getUsername(),
         *         'email' => $user->getEmail()
         *     )
         * );
         * $this->es->getIndex('user')->getType('user')->addDocument($doc);
         * $this->es->getIndex('user')->refresh();
         *
         * $result = $this->es->getIndex('user')->getType('user')->search('*');
         */

        return new ViewModel();
    }

    public function getEm()
    {
        return $this->em;
    }

    public function setEm($em)
    {
        $this->em = $em;
    }

    public function setEs($es)
    {
        $this->es = $es;
    }

    public function getEs()
    {
        return $this->es;
    }
}

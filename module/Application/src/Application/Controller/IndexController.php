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


class IndexController extends AbstractActionController implements EntityManagerAware, ElasticsearchAware
{
    private $em;
    private $es;

    public function indexAction()
    {
        // $result = $this->em->getRepository('Application\Entity\User')->myCustomFinder();
        // $result = $this->es->getIndex('user')->getType('user')->search('*'));
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

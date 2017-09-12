<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $textos = [
          [
            'id' => 1,
            'name' => 'Cosmografía',
            'autor' => 'Andres Bello',
            'urlEpub' => 'https://www.gitbook.com/download/epub/book/omerta/cosmografia',
            'urlPdf' => 'https://www.gitbook.com/download/pdf/book/omerta/cosmografia',
            'urlHtml' => 'https://omerta.gitbooks.io/cosmografia/content/'
          ],
          [
            'id' => 2,
            'name' => 'La Doctrine Liberal',
            'autor' => 'Antonio Leocadio Guzmán',
            'urlEpub' => 'https://www.gitbook.com/download/epub/book/omerta/antonio-leocadio-guzman-obras',
            'urlPdf' => 'https://www.gitbook.com/download/pdf/book/omerta/antonio-leocadio-guzman-obras',
            'urlHtml' => 'https://www.gitbook.com/read/book/omerta/antonio-leocadio-guzman-obras'
          ],
          [
            'id' => 3,
            'name' => 'Obras Completas Cecilio Acosta',
            'autor' => 'Cecilio Acosta',
            'urlEpub' => 'https://www.gitbook.com/download/epub/book/omerta/cecilio-acosta-obras-completas-i',
            'urlPdf' => 'https://www.gitbook.com/download/pdf/book/omerta/cecilio-acosta-obras-completas-i',
            'urlHtml' => 'https://www.gitbook.com/read/book/omerta/cecilio-acosta-obras-completas-i'
          ],
          [
            'id' => 4,
            'name' => 'La Propiedad Intelectual en la Legislación Venezolana y ante el Derecho Internacional',
            'autor' => 'Diego Bautista Urbaneja',
            'urlEpub' => 'https://www.gitbook.com/download/epub/book/omerta/la-propiedad-intelectual-en-la-legislacion-venezo',
            'urlPdf' => 'https://www.gitbook.com/download/pdf/book/omerta/la-propiedad-intelectual-en-la-legislacion-venezo',
            'urlHtml' => 'https://www.gitbook.com/read/book/omerta/la-propiedad-intelectual-en-la-legislacion-venezo'
          ]
        ];

        return new ViewModel(['textos' => $textos]);
    }
}

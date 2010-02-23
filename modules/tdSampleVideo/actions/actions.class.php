<?php

/**
 * tdSampleVideo actions.
 *
 * @package    tdVideoPlugin
 * @subpackage frontend
 * @author     Tomasz Ducin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tdSampleVideoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->videos = Doctrine::getTable('tdVideo')
      ->getActiveVideosQuery()
      ->fetchArray();

    $this->forward404Unless(count($this->videos) > 0);

    // ading default td_video layout
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/td_video');
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->forward404Unless($collection = Doctrine::getTable('tdVideo')
      ->getActiveVideoByFileQuery($request->getParameter('file'))
      ->fetchArray());
    
    $this->video = $collection[0];

    // adding js flash embedding script
    $this->getResponse()->addJavascript('/tdVideoPlugin/js/flowplayer-3.1.4.min.js');
    // ading default td_video layout
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/td_video');
    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/flowplayer');
  }
}

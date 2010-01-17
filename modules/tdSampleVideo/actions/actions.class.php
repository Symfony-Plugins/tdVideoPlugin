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
    // ading default td_video layout
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/td_video');

    $this->videos = Doctrine::getTable('tdVideo')->getActiveVideosQuery()->fetchArray();
  }

  public function executeShow(sfWebRequest $request)
  {
    // ading default td_video layout
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/td_video');

    $results = Doctrine::getTable('tdVideo')->getActiveVideoByFileQuery($request->getParameter('file'))->fetchArray();
    $this->video = $results[0];

    // adding js flash embedding script
    $this->getResponse()->addJavascript('/tdVideoPlugin/js/flowplayer-3.1.4.min.js');

    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/flowplayer');
  }
}

<?php

require_once dirname(__FILE__).'/../lib/td_videoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/td_videoGeneratorHelper.class.php';

/**
 * td_video actions.
 *
 * @package    tdVideoPlugin
 * @subpackage backend
 * @author     Tomasz Ducin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class td_videoActions extends autoTd_videoActions
{
  public function executeEdit(sfWebRequest $request)
  {
    // adding js flash embedding script
    $this->getResponse()->addJavascript('/tdVideoPlugin/js/flowplayer-3.1.4.min.js');

    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/tdVideoPlugin/css/flowplayer');

    $this->td_video = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->td_video);
  }

    /**
     * Activates selected video files.
     *
     * @param sfWebRequest $request
     */
    public function executeBatchActivate(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');
        $query = Doctrine::getTable('tdVideo')->getSelectedVideosQuery($ids);

        foreach ($query->execute() as $video)
        {
          $video->activate(true);
        }

        $this->getUser()->setFlash('notice', 'The selected video files have been activated successfully.');

        $this->redirect('@td_video');
    }

    /**
     * Deactivates selected video files.
     *
     * @param sfWebRequest $request
     */
    public function executeBatchDeactivate(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');
        $query = Doctrine::getTable('tdVideo')->getSelectedVideosQuery($ids);

        foreach ($query->execute() as $video)
        {
          $video->deactivate(true);
        }

        $this->getUser()->setFlash('notice', 'The selected video files have been deactivated successfully.');

        $this->redirect('@td_video');
    }

    /**
     * Activates selected video file.
     *
     * @param sfWebRequest $request
     */
    public function executeListActivate(sfWebRequest $request)
    {
        $video = $this->getRoute()->getObject();
        $video->activate();

        $this->getUser()->setFlash('notice', 'The selected video file has been activated successfully.');

        $this->redirect('@td_video');
    }

    /**
     * Deactivates selected video file.
     *
     * @param sfWebRequest $request
     */
    public function executeListDeactivate(sfWebRequest $request)
    {
        $video = $this->getRoute()->getObject();
        $video->deactivate();

        $this->getUser()->setFlash('notice', 'The selected video file has been deactivated successfully.');

        $this->redirect('@td_video');
    }
}

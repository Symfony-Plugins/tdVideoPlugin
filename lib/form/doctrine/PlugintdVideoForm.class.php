<?php

/**
 * PlugintdVideo form.
 *
 * @package    tdVideoPlugin
 * @subpackage form
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PlugintdVideoForm extends BasetdVideoForm
{
  public function setup()
  {
    parent::setup();

    $this->removeFields();

    $this->manageWidgets();

    $this->manageValidators();
  }

  protected function removeFields()
  {
    unset($this['created_at'], $this['updated_at']);
  }

  protected function manageWidgets()
  {
    $this->setWidget('file', new sfWidgetFormInputFileEditable(array(
      'with_delete' => false,
      'delete_label' => 'usuń plik video',
      'label'     => 'Plik video',
      'file_src'  => '/tdVideoPlugin/flv/'.$this->getObject()->getFile(),
      'edit_mode' => !$this->isNew(),
      'template'  => '%file%<br />%input%<br />%delete% %delete_label%',
    )));
  }

  protected function manageValidators()
  {
    $this->setValidator('name',
      new sfValidatorString(array(), array('required' => 'Musisz podać nazwę pliku video.')));

    $this->setValidator('file', new sfValidatorFile(array(
      'required'   => true,
      'path'       => sfConfig::get('td_video_image_dir'),
    ), array(
      'required' => 'Musisz wybrać plik',
    )));
  }
}

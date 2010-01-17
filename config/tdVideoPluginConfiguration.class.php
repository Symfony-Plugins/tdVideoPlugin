<?php
/**
 * tdVideoPluginConfiguration.class
 */

/**
 * tdVideoPluginConfiguration
 *
 * @package    tdVideoPlugin
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class tdVideoPluginConfiguration extends sfPluginConfiguration
{
  /**
   * Initialize
   */
  public function initialize()
  {
    // video files upload dir
    sfConfig::set('td_video_image_dir', sfConfig::get('sf_web_dir').'/tdVideoPlugin/flv');

    // blog short text sign count
    sfConfig::set('td_video_short_text_sign_count', 200);
  }
}
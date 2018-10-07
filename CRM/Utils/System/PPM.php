<?php
/**
 * Created by PhpStorm.
 * User: klaas
 * Date: 31-8-18
 * Time: 15:50
 */

class CRM_Utils_System_PPM  extends CRM_Utils_System_Base {

  public function getLoginURL($destination = '') {
    throw new Exception('Not implemented');
  }

  public function getDefaultFileStorage(){

    $config = CRM_Core_Config::singleton();
    $baseURL = CRM_Utils_System::languageNegotiationURL($config->userFrameworkBaseURL, FALSE, TRUE);
    $filesURL = $baseURL . "sites/default/files/civicrm/";

    return array(
      'url' => $filesURL,
      'path' => CRM_Utils_File::baseFilePath(),
    );

  }

}
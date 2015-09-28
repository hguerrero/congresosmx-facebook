<?php
  include 'Mobile_Detect.php';
  $detect = new Mobile_Detect();

  if ($detect->isMobile() || $detect->isTablet()) {//check if the browser is mobile
      //redirect the page to our mobile app in this case was http://myapp.com/app/mobile
      header( 'Location: http://cmxfacebook-arkingsoft.rhcloud.com/' ) ;
  }
  else{
      header( 'Location: https://www.facebook.com/pages/CongresosMX/173702662734118?sk=app_509270909247919' ) ;
     //redirect to our canvas page or page tab:
     //to redirect the user to the canvas app https://apps.facebook.com/NAMESPACE_APP
     //to redirect the user to the page tab https://www.facebook.com/PAGE_NAME or PAGE_ID/?sk=app_APP_ID
  }
?>

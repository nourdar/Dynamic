<?php

/**
* function To Get Tempalte Page ;
* @var pageName;
* @return bool;
*/

  function getTemplate(string $pageName){
  include('config.php');

    if( file_exists($temp.$pageName.'.php') ){
      include($temp.$pageName.".php");
      return true;
    } else {
      $_SESSION['404Error'] = "This Page [ ' $pageName'.php ] Not Found <br /><br /> هذه الصفحة غير موجودة <hr />";
      include($error404);
      return true;
    }
  }

/**
* function To Get stylesheet file ;
* @var pageName;
* @return bool;
*/
  function getCss(string $pageName){
    global $css,$error404;

    if( file_exists($css.$pageName.".css") ){
      echo '<link href="'.$css.$pageName.'.css"  rel="stylesheet" />';
      return true;
    } else {
      $_SESSION['404Error'] = " This stylesheet  file [ ' $pageName'.css ] Not Found <br /><br /> هذه الصفحة غير موجودة <hr />";
      include($error404);
      return true;
    }
  }

/**
* function To Get FavIcon ;
* @var iconName;
* @return bool;
*/
  function getFavIcon(string $iconName){
    global $img,$error404;

    if( file_exists($img.$iconName.".ico") ){
      echo '<link href="'.$img.$iconName.'.ico" rel="icon" />';
      return true;
    } else {
      $_SESSION['404Error'] = " This stylesheet  file [ ' $pageName'.css ] Not Found <br /><br /> هذه الصفحة غير موجودة <hr />";
      include($error404);
      return true;
    }
  }


/**
* function To Get script file ;
* @var pageName;
* @return bool;
*/
  function getJs(string $pageName){
    global $js,$error404;

    if( file_exists($js.$pageName.".js") ){
    echo '<script src="'.$js.$pageName.'.js"></script><br />';
    return true;
    } else {
      $_SESSION['404Error'] = " This javaScript file [ ' $pageName'.js ] Not Found <br /><br /> هذه الصفحة غير موجودة <hr />";
      include($error404);
      return true;
    }
  }

/**
* function To Get PageTitle ;
* @var pageName;
* @return bool;
*/
  function pageTitle($title = null){
    if(!empty($title)){
      echo  $title;
      return true;
    } else {
      echo "Dynamic WebSite";
      return true;
    }
  }

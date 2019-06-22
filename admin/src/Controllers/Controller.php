<?php

  Namespace CapeCraft\Controllers;

  abstract class Controller {

    private static $app;

    public static function makeInstance($app) {
      self::$app = $app;
    }

    public static function getView() {      
      return self::$app->getContainer()->view;
    }
  }
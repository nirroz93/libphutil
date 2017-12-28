<?php

/**
 * The hebrew locale.
 */
final class PhutilHebrewLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'he_IL';
  }

  public function getLocaleName() {
    return pht('Hebrew');
  }

  public function isRTLLocale() {
    return true;
  }
}

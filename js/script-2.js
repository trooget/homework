(function ($) {
  'use strict';

  Drupal.behaviors.testScript2 = {
    attach: function (context, settings) {
      alert(42);
    }
  };
}(jQuery));

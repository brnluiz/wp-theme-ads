(function() {
  var $ = require('jquery');
  var Freewall = require('freewall').Freewall;

  $('#freewall').html($('#freewall').html());

  var wall = new Freewall('#freewall');
  wall.reset({
    selector: '.brick',
    animate: true,
    cellW: 150,
    cellH: 'auto',
    gutterX: 3,
    gutterY: 3,
    onResize: function() {
      wall.fitWidth();
    }
  });
  var images = wall.container.find('.brick');
  images.find('img').load(function() {
    wall.fitWidth();
  });
  wall.fitWidth();
  $(window).trigger("resize");
})();
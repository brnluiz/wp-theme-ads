(function() {
  var $ = require('jquery');
  var Freewall = require('freewall').Freewall;

  $('#freewall').html($('#freewall').html());

  var wall = new Freewall('#freewall');
  wall.reset({
    fixSize: false,
    selector: '.brick',
    animate: true,
    cellW: function(container) {
      console.log(container);
      return container/5;
    },
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
})();
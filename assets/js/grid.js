(function() {
  var $ = require('jquery');
  var Freewall = require('freewall').Freewall;

  var temp = "<div class='brick' style='width:{width}px;'><img src='http://localhost:8000/example/i/photo/{index}.jpg' width='100%'></div>";
  var w = 1, h = 1, html = '', limitItem = 20;
  for (var i = 0; i < limitItem; ++i) {
    w = 1 + 2.5 * Math.random() << 0;
    html += temp.replace(/\{width\}/g, w*175).replace('{index}', i + 1);
  }
  $('#freewall').html($('#freewall').html());

  var wall = new Freewall('#freewall');
  wall.reset({
    selector: '.brick',
    animate: true,
    cellW: 150,
    cellH: 'auto',
    // gutterX: 0,
    // gutterY: 0,
    onResize: function() {
      wall.fitWidth();
    }
  });
  var images = wall.container.find('.brick');
  images.find('img').load(function() {
    wall.fitWidth();
  });
})();
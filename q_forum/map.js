// tiles
var map1_tile = new Array();
map1_tile[0] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[1] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[2] = new Array("herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[3] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[4] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[5] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[6] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[7] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[8] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[9] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[10] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[11] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[12] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[13] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[14] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");
map1_tile[15] = new Array("herbe.png", "herbe.png", "rocher.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png", "herbe.png");

// zones interdites de la map
var map1_zone_interdite = new Array();
map1_zone_interdite[0] = '0,2';
map1_zone_interdite[1] = '1,2';
map1_zone_interdite[2] = '3,2';
map1_zone_interdite[3] = '4,2';
map1_zone_interdite[4] = '5,2';
map1_zone_interdite[5] = '6,2';

// fonction de generation de la map
function map1_genere() {
  for (i = 0; i != map_width / tile_width; i++) {
    for (j = 0; j != map_height / tile_height; j++) {
      if (map1_tile[i] != undefined) {
        var img = new Image();
        img.src = map1_tile[i][j];
        context.drawImage(img, tile_width * i, tile_height * j, tile_width, tile_height);
      }
    }
  }
}

// fonction de test des zones interdites
function map1_zone_ok(zone) {
  for (var i = 0; i < map1_zone_interdite.length; i++) {
    if (map1_zone_interdite[i] == zone) {
      return false;
    }
  }
  return true;
}
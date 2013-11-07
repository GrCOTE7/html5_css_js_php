/*
 * x = <>
*/
 
var canvas;
var context;
// taille de la map
var map_width = 512;
var map_height = 512;
// taille des tiles
var tile_width = 64;
var tile_height = 64;
// perso
var perso_x = 0; // coordonee x
var perso_y = 0; // coordonee y
var perso_last_x = 0; // coordonee x avant deplacement
var perso_last_y = 0; // coordonee y avant deplacement
var perso_px_dep = 64; // nombre de pixel par deplacement
var perso_zone = 0; // zone du personage (tile)
 
// main
window.addEventListener('load', function(){
    var canvas = document.getElementById('canvasElem');
    context = canvas.getContext('2d');
    boucle_jeu = setInterval(refresh_jeu, 1);
    window.document.onkeydown = check_clavier;
}, false);
 
// fonction de rafraichissement principal
function refresh_jeu(){
    // recuperation de la zone dans laquelle se trouve le perso
    perso_zone = get_tile(perso_x, perso_y);
    // test : la zone est-elle autorisee ?
    if(map1_zone_ok(perso_zone)){
        // mise a zero
        clear_context(context, 0, map_width, 0, map_height);
        // generation de la map
        map1_genere();
        // generation du perso
        context.fillStyle = "#333333";
        context.fillRect(perso_x, perso_y, tile_width, tile_height);
    }
    // si ce n'est pas la position du perso est la precedente
    else{
        perso_x = perso_last_x;
        perso_y = perso_last_y;
    }
}
 
// fonction de detection des evenements clavier
function check_clavier(e){
    if(e.keyCode == 39){
        perso_last_x = perso_x;
        perso_x += perso_px_dep;
    }
    else if(e.keyCode == 37){
        perso_last_x = perso_x;
        perso_x -= perso_px_dep;
    }
    else if(e.keyCode == 40){
        perso_last_y = perso_y;
        perso_y += perso_px_dep;
    }
    else if(e.keyCode == 38){
        perso_last_y = perso_y;
        perso_y -= perso_px_dep;
    }
}
 
// fonction qui renvoi la zone par rapport a des coordonees
function get_tile(x, y){
    var retour;
    var zone_x = 0;
    for(i = 0; i < map_width; i+= 64){
        if(x <= i){
            retour = zone_x;
            break;
        }
        zone_x++;
    }
    var zone_y = 0;
    for(i = 0; i < map_height; i+= 64){
        if(y <= i){
            retour += ','+zone_y;
            break;
        }
        zone_y++;
    }
    return retour;
}
 
// fonction de remise a zero du contexte
function clear_context(ctx, startwidth, ctxwidth, startheight, ctxheight){
    ctx.clearRect(startwidth, startheight, ctxwidth, ctxheight);
}
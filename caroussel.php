<!DOCTYPE html>
<html>
<head>
<title>TP4 - Carrousel</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
var $img = $('#carrousel img');
var max = $img.length;
var i = 0; // compteur
$img.css('margin-left','0').css('display', 'none'); //on cache les images
$img.eq(i).css('display', 'inline'); //on affiche l'image courante
$img.eq(i+1).css('margin-left','200px').css('display', 'inline');
$img.eq(i+2).css('margin-left','400px').css('display', 'inline');
$img.eq(i+3).css('margin-left','600px').css('display', 'inline');
//si on clique sur « next » ou « > »
$('.next').click(function () { // image suivante
 i+=4; // on incrémente le compteur
 if (i < max-4) {
 i = i+4;
 $img.css('margin-left','0').css('display', 'none'); //on cache
 $img.eq(i).css('display', 'inline'); //on affiche l'image courante
 $img.eq(i+1).css('margin-left','200px').css('display', 'inline');
 $img.eq(i+2).css('margin-left','400px').css('display', 'inline');
 $img.eq(i+3).css('margin-left','600px').css('display', 'inline');
 } else {
 i = 0;
 }
 });
//si on clique sur « prev » ou « < »
 $('.prev').click(function () { // groupe des images précédentes
 i-=4; // on décrémente le compteur
 if (i >= 0) {
 $img.css('margin-left','0').css('display', 'none'); //on cache
 $img.eq(i).css('display', 'inline'); //on affiche l'image courante
 $img.eq(i+1).css('margin-left','200px').css('display', 'inline');
 $img.eq(i+2).css('margin-left','400px').css('display', 'inline');
 $img.eq(i+3).css('margin-left','600px').css('display', 'inline');
 } else {
 i = 0;
 }
 });
function slideImg() {
 setTimeout(function() {
 $img.eq(i).css('display', 'inline').css('transition-delay','0.25s');
 $img.eq(i + 1).css('margin-left','200px').css('display', 
 'inline').css('transition-delay','0.5s');
 $img.eq(i + 2).css('margin-left','400px').css('display', 
 'inline').css('transition-delay','0.75s');
 $img.eq(i + 3).css('margin-left','600px').css('display', 
 'inline').css('transition-delay','1s');
 if (i < max-4) {
i = i+4;
 } else {
i = 0;
 }
 $img.css('margin-left','0').css('display', 'none');
 $img.eq(i).css('display', 'inline').css('transition-delay','1.25s');
 $img.eq(i + 1).css('margin-left','200px').css('display', 
 'inline').css('transition-delay','1.5s');
 $img.eq(i + 2).css('margin-left','400px').css('display', 
 'inline').css('transition-delay','1.75s');
 $img.eq(i + 3).css('margin-left','600px').css('display', 
 'inline').css('transition-delay','2s');
slideImg();
}, 4000);
}
slideImg();
});
</script>
<style type="text/css">


#carrousel {

width: 750px;
height: 150px;
list-style: none;
justify-items: <start | left | self-start>;
margin-bottom: 0;
position: absolute;
}
#carrousel ul {
position: relative;
}
ul > li {
list-style-type: none;
position: absolute;
top: 30%;
transition: 1s opacity; 
}


img { 
height: 100px; 
border-radius: 8px;
}


</style>
</head>
<body>

                <div id="carrousel">
                <ul>
                            <li><img src="covid.jpg" width="120" height="100"></li>
                            <li><img src="dermato.png" width="120" height="100"></li>
                            <li><img src="routine.png" width="120" height="100"></li>
                            <li><img src="bodyfond.png" width="120" height="100"></li>
                            <li><img src="chirurgien.png" width="120" height="100"></li>
                            <li><img src="mg1.png" width="120" height="100"></li>
                            <li><img src="ms2.png" width="120" height="100"></li>
                            <li><img src="ms8.png" width="120" height="100"></li>
                            <li><img src="ms9.png" width="120" height="100"></li>
                            <li><img src="mg2.png" width="120" height="100"></li>
                            <li><img src="ms6.png" width="120" height="100"></li>
                            <li><img src="ms5.png" width="120" height="100"></li>
                </ul>

            
</body>
</html>


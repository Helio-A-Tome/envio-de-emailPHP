<?php

$arquivo = "img.jpg";

$largura=200;
$altura=200;

list($larguraOriginal,$alturaOriginal)=getimagesize($arquivo);

$ratio =$larguraOriginal / $alturaOriginal ;
//echo $ratio;

if($largura / $altura > $ratio){
    
    $altura = $largura * $ratio;
    
}else{

    $altura = $largura / $ratio;
}
$imageFinal = imagecreatetruecolor($largura,$altura);

    $imagemOriginal = imagecreatefromjpeg($arquivo);
    
    imagecopyresampled($imageFinal,$imagemOriginal,0,0,0,0,$largura,$altura,$larguraOriginal,$alturaOriginal);
    imagejpeg($imageFinal,null,100);
    
    imagejpeg( $imageFinal,"mini-imagem.jpg");
    
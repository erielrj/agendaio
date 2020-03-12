<?php


// Verifica se a página está ativa para aplicar o css no texto do menu:
function checkActive($currentPage){
    echo $_GET['p']==$currentPage ? 'active' : '';
}
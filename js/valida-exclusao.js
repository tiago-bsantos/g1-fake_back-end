'use strict';

var i, linkRemover, url, id, resposta;
linkRemover = document.getElementsByClassName('remover');

function adicionaListeners(i) {
    return function(){
        url = linkRemover[i].dataset.href;
        id = linkRemover[i].dataset.id;
        
        resposta = confirm("Tem certeza que deseja apagar este registro?");
        if(resposta){ 
            location.href=url+id;
            e.preventDefault();
        }else{
            return false;
            e.preventDefault();
        }
    }
}    

for(i = 0 ; i < linkRemover.length; i++){
    linkRemover[i].addEventListener('click', adicionaListeners(i))
}    

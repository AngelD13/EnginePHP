// Для работы с формами, элементами и прочим

function clickAdd() {
    var element=document.getElementById('agesText');

    if(!element){
        family.insertAdjacentHTML('beforeend', '<input type="text" name="ages" value="" ID="agesText">');
    }

    
}

function clickRemove() {
    var element=document.getElementById('agesText');

    if(element){
        element.parentNode.removeChild(element);
    }
    
}
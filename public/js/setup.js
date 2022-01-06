const buttons = document.querySelectorAll('.buttons');
buttons.forEach(element => {
    element.addEventListener('click',(e) => {
       if(!confirm('Do you want to delete this item'))
       e.preventDefault();
            
    });

});
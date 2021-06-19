var incrementButton = document.getElementsByClassName('btn2');
var decrementButton = document.getElementsByClassName('btn');

for(var i = 0; i < incrementButton.length; i++){
    var button = incrementButton[i];
    
    button.addEventListener('click', function(event){

        var buttonClicked = event.target;
        var input = buttonClicked.parentElement.children[1];
        var inputValue = input.value;
        var newVal = parseInt(inputValue) + 1;
        
        input.value = newVal;
    })
}
for(var i = 0; i < decrementButton.length; i++){
    var button = decrementButton[i];
    
    button.addEventListener('click', function(event){

        var buttonClicked = event.target;
        var input = buttonClicked.parentElement.children[1];
        var inputValue = input.value;
        var newVal = parseInt(inputValue) - 1;
        
        if(newVal >= 0){
            input.value = newVal;
        }
    })
}
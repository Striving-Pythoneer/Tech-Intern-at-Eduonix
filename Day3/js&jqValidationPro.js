function validationForm(){
    for(var i=0; i<myform.elements.length; i++){

        //In the HTML DOM, the Element object represents
        // an HTML element, like P, DIV, A, TABLE, or any other HTML element.
        if(myform.elements[i].className == "req" && myform.elements[i].value.length == 0){
            // if class req field is empty alert a message
            alert('Please fill in all mandatory fields');
            return false;
        }
    }
}


 $('.form__row__label').on((click),function() { });
 function checkbox () {
     var check = document.getElementById(".form__row__label").checked;
     var box = document.getElementById("form__row__label")

     if (check == true) {
         box.checked = false;
     }
     else if (check == false) {
         box.checked = true;
     }
 }
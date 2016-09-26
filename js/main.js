

 $('.form__row__label').click(function() {
     .form__row__label = $(this).attr('for');
     $('.'+ form__row__label).trigger('click');
 });
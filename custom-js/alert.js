(function($){
    $('.addPanier').click(function(event){
        event.preventDefault();
        $.get($(this).attr('href'),{},function(data){
            if(data.error){
                alert(data.message);
            }else{
                confirm(data.message + ' voulez vous consulter votre panier');
            }
            },'json');
            return false;
		});
})(jQuery);		



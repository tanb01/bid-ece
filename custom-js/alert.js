(function($){
    $('.ajoutPanier').click(function(event){
        //annuler le lien 
        event.preventDefault();
        //on appele le lien du panier pour aller le consulter
        $.get($(this).attr('href'),{},function(data){
            //construction à partir de levement une alerte pour aller dans le panier ou rester sur la page de prosuits
            if(data.error){
                //on reste sur la page des produits
                alert(data.message);
            }else{
                if(confirm(data.message + ' voulez vous consulter votre panier ?')){
                    location.href = '../panier/panier.php';
                }
                    
                    
                }
            },'json');
            return false;
        });        
})(jQuery);		



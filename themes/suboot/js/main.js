/**
 * Created by brianpunzalan on 02/08/2017.
 */
(function($){

    var navbar_background_color = { 'background-color':'rgba(0,0,0,0.7)' };

    $("#navbar button[data-toggle=\'collapse\']").click(function(){
        if($("#navbar").hasClass('darken') && $('#navbar button').attr('aria-expanded')){
            $("#navbar").removeClass('darken');
        }
        else{
            $("#navbar").addClass('darken');
        }
    });

})(jQuery);
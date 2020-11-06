$(function(){
    $("#menuMain #input .fndInp").focus(function(){
        $("#menuMain #input").css({'background': '#f3f0f0', 'width': '300px'});
        $("#menuMain #input span.icon").addClass('fcs');
        $(this).addClass('fcs');
    }).blur(function(){
        $("#menuMain #input").css({'background': '#752680', 'width': '250px'});
        $("#menuMain #input span.icon").removeClass('fcs');
        $(this).removeClass('fcs');

        var val = $(this).val();

        if(val.length === 0 || !val.trim()){
            $(this).val('');
        }
    });
});

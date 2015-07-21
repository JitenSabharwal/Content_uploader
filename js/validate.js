$(document).ready(function(){
    $("#submit").attr("disabled","disabled");
    //Username at login
    $("#login").keyup(function(){
        var ival=$(this).val();
        var regex=/^[A-Za-z][A-Za-z0-9]+$/;
        if(!regex.test(ival))
        {
            $.fn.report('#uerror','Not a valid username. Must start with an alphabet.','red');
        }
        else
        {
            $.fn.report('#uerror','Looks Cool','green');
        }
    });

    //First name
    $("#firstName").keyup(function(){
        var ival=$(this).val();
        var regex=/^[A-Za-z]+$/;
        if(!regex.test(ival))
        {
            $.fn.report('#ferror','Enter only first name.','red');
        }
        else
        {
            $.fn.report('#ferror','Welcome '+ival.toUpperCase(),'green');
        }
    });

    //Last Name
    $("#lastName").keyup(function(){
        var ival=$(this).val();
        var regex=/^[A-Za-z]+$/;
        if(!regex.test(ival))
        {
            $.fn.report('#lerror','Enter only last name.','red');
        }
        else
        {
            $.fn.report('#lerror','','green');
        }
    });

    //Username at regsister
    $("#username").keyup(function(){
        var ival=$(this).val();
        var regex=/^[A-Za-z][A-Za-z0-9]+$/;
        if(!regex.test(ival))
        {
            $.fn.report('#uererror','Not a valid username. Must start with an alphabet.','red');
        }
        else
        {
            $.fn.report('#usererror','Looks Cool','green');
        }
    });

    $.fn.report=function(location,msg,color){
        
        $(location).html(msg).css({'color':color});
        $(location).slideDown(400);
    }

    $('form .grid_5 > input').keyup(function() {
        var empty = false;
        $('form .grid_5 > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#submit').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
            $('#submit').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
    });

});


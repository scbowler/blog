$(document).ready(function(){
    
    $("#new-account").on('click', 'button', function(){
        
        var form = $(this).parent();
        
        var formData = {
            penName: form.find('input[name=penName]').val(),
            email: form.find('input[name=email]').val(),
            firstName: form.find('input[name=firstName]').val(),
            lastName: form.find('input[name=lastName]').val(),
            password: form.find('input[name=password]').val(),
            confPass: form.find('input[name=confPass]').val()
        }
        
        $.ajax({
            url: 'actions/newUser.php',
            method: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            success: function(data){
                console.log(data);
                var msgs = data.msgs;
                $("#register-errors").html('');
                if(data.success){
                    var newDiv = $("<h2>" + msgs + "</h2>");
                    
                    newDiv.appendTo("#register-errors").hide().slideDown();
                }else{
                    var header = $("<h2>Registartion Failed:</h2>");
                    header.appendTo("#register-errors").hide().slideDown();
                    //var errors = $("<p />");
                    for(var i=0; i<msgs.length; i++){
                        //console.log(msgs);
                        var pTag = "<p>-" + msgs[i] + "</p>";
                        $(pTag).appendTo("#register-errors").hide().slideDown();
                    }
                }
            }
        });
    });
    
});
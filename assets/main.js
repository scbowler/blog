var onlineUsers = {};

$(document).ready(function(){
    
    getOnlineUsers();
    //var userRefresh = setInterval(getOnlineUsers, 5000);
    
    $("body").on("click", "#close-form", function(){
        $("#newPost-form").remove();
    });
    
    $(".blog-list").on("click", ".edit-post", function(ele){
        postForm($(this).val(), $(this));
    });
    
    $("#user-actions").on("click", "#new-post", function(ele){
        postForm(ele.currentTarget.value);
    });
    
    $("body").on("click", "#add-post", function(){
        submitPost($(this).parent());
        loadBlogs();
    });
    
    $("#update-pic").on("click", function(){
        uploadForm();
    });
    
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
                    var link = $("<h3><a href='splash.php'>Go to login page</a></h3>");
                    
                    newDiv.appendTo("#register-errors").hide().slideDown();
                    link.appendTo("#register-errors").hide().slideDown();
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

function getOnlineUsers(){
      
    $.ajax({
        url: 'includes/online.php',
        method: 'post',
        dataType: 'json',
        cache: false,
        success: function(data){
            
            onlineUsers = data;
            $("#users-online > ul").html('');
            for(var user in data){
                var userLi = "<li>" + data[user] + "</li>";
                $(userLi).appendTo("#users-online > ul");
            }
        }
    });
}

function postForm(type, element){
    
    if(element != undefined){
        var blogPost = element.parent();
        var title = blogPost.find(".blog-title").text();
        var body = blogPost.find(".blog-body").text();
        var blogID = blogPost.find(".blog-id").text();
    }
    
    var formData = {
        'type': type,
        'title': title,
        'body': body,
        'blogID': blogID
    }
    
    $.ajax({
        url: 'includes/addForm.php',
        data: formData,
        method: 'post',
        dataType: 'json',
        cache: false,
        success: function(data){
            
            var backDrop = $("<div id='backdrop'><div id='form-container'></div></div>");
            backDrop.html(data);
            backDrop.appendTo('body');
            console.log(data);
        }
    });
    
}

function submitPost(form){
    
    var formData = {
        blogID: form.find("input[name=blogID]").val(),
        title: form.find("input[name=title]").val(),
        body: form.find("textarea[name=body]").val(),
        status: form.find("input[name=status]:checked").val()
    }
    
    $.ajax({
        url: 'actions/createPost.php',
        data: formData,
        method: 'post',
        dataType: 'json',
        cache: false,
        success: function(data){
            console.log(data);
        }
    })
}

function loadBlogs(){
    $.ajax({
        url: 'actions/getAll.php',
        method: 'post',
        dataType: 'json',
        cache: false,
        success: function(data){
            var blogs = data.blogs;
            for(var key in blogs){
                var post = $(blogs[key]);
                post.appendTo(".blog-list");
            }
            
        }
    });
}

function uploadForm(){
    $.ajax({
        url: 'includes/uploadForm.php',
        method: 'post',
        dataType: 'json',
        cache: false,
        success: function(data){
            var backDrop = $("<div id='backdrop'><div id='form-container'></div></div>");
            backDrop.html(data);
            backDrop.appendTo('body');
        }
    });
}

function uploadPic(ele){
    
    var form = ele.parent();
    var pic = form.find("input[name=fileToUpload]").val();
    
    $.ajax({
        url: 'actions/uploadPic.php',
        type: 'POST',
        data: {"Upload File": pic},
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
            console.log("data: ", data);
            $("#uploadedImg").attr("src", data['filepath']);
        }
    });
}
$(document).ready(function(){
var dataCallBack = $(".data-callback");
dataCallBack.hide();

    $("button.site-btn").click(function(){
    
    var websiteClicked = $(this).attr("data-site");
    var websiteName = $(this).attr("data-name");
    
    dataCallBack.fadeIn("medium");

        $.post("./screenapi.php",
        { 
            website: websiteClicked,
            websitename: websiteName,
        },
            function(data,status) 
            {
                dataCallBack.html(data)
            } 
        );
    });  

});

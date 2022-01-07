$(document).ready(function(){
    $(".message-icon").click(function(){
        $(".message-details").show();

    $(document).mouseup(function(event){
        let hideout = $(".message-details");
        if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
            hideout.hide();
        };
    });
    });
    $(".notification-icon").click(function(){
        $(".notification-details").show();
        
    $(document).mouseup(function(event){
        let hideout = $(".notification-details");
        if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
            hideout.hide();
        };
    });
    });
    $(".message-box").click(function(){
        $(this).addClass("bg-for-nav-icon");

    $(document).mouseup(function(event){
        let hideout = $(".message-box");
        if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
            hideout.removeClass("bg-for-nav-icon");
        } else(hideout.removeClass("bg-for-nav-icon"));
    });
        
    })
    $(".contact-box").click(function(){
        $(".contact-details").show();

        $(document).mouseup(function(event){
            let hideout = $(".contact-details");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    // calander
    $(".status").click(function(){
        $(".more-days").toggle();

        $(document).mouseup(function(event){
            let hideout = $(".more-days");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });

    $("th .fa-ellipsis-h").click(function(){
        $(".click-one").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-one");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    
    $(".two .fa-ellipsis-h").click(function(){
        $(".click-two").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-two");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
        
    });

    $(".three .fa-ellipsis-h").click(function(){
        $(".click-three").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-three");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".four .fa-ellipsis-h").click(function(){
        $(".click-four").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-four");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".five .fa-ellipsis-h").click(function(){
        $(".click-five").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-five");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".six .fa-ellipsis-h").click(function(){
        $(".click-six").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-six");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".seven .fa-ellipsis-h").click(function(){
        $(".click-seven").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-seven");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".eight .fa-ellipsis-h").click(function(){
        $(".click-eight").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-eight");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".nine .fa-ellipsis-h").click(function(){
        $(".click-nine").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-nine");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });
    $(".ten .fa-ellipsis-h").click(function(){
        $(".click-ten").toggle();
        $(document).mouseup(function(event){
            let hideout = $(".click-ten");
            if(!hideout.is(event.target) && hideout.has(event.target).length === 0){
                hideout.hide();
            };
        });
    });



});
jQuery( document ).ready( function( jQuery ) {
  //mainSlider();
  //killMainSlider();
  //idle();
  accordion();
  pickSlider();
  killSlider();
  returnSlider()
} );
let getSlider;

function killSlider(){
  jQuery('.kill').on('click',function(){
    jQuery(".slider."+getSlider).cycle('destroy');
    console.log(".slider."+getSlider);
    jQuery('body').removeClass('slider-actif');
    jQuery('body').removeClass('accordion-actif');
    jQuery('.action-active').removeClass('action-active');
    jQuery('.accordion-show').removeClass('accordion-show');
     jQuery('dd').removeClass('active').hide();
     jQuery('.accordion >dt').show();
  })
}
function returnSlider(){
  jQuery('.return').on('click',function(){
    jQuery(".slider."+getSlider).cycle('destroy');
    console.log(".slider."+getSlider);
    jQuery('body').removeClass('slider-actif');
  })
}

function pickSlider(){
  jQuery('.action').on('click',function(){
    jQuery('body').addClass('slider-actif');
    getSlider=jQuery(this).attr("data-slider");
    jQuery('.action-active').removeClass('action-active');
    jQuery(this).addClass('action-active');
    jQuery(".slider."+getSlider+" > span").each(function () { 
      getUrl=jQuery(this).attr("data-url");
      jQuery(this).css('background-image', 'url(' + getUrl + ')');
    });
    var $Slider = jQuery(".slider."+getSlider);
    $Slider.cycle({
      //speed: 500,
    timeout: 0,
    slides: '> span',
    loop:0,
    swipe:true,
swipeFx:'scrollHorz',
    //pauseOnHover:true,
    next:'.next',
    prev:'.prev',
    //pager:'.arrow_nav',
    pagerActiveClass: 'active',
    //pagerTemplate :'<span></span>',
    //pagerActiveClass: 'active',
  });
  })
}

function accordion(){
 var allPanels = jQuery('.accordion > dd').hide();

 jQuery('.accordion > dt > a').click(function() {
  jQuerythis = jQuery(this);
  jQueryparent =  jQuerythis.parent();
  jQuerygrandparent =  jQuerythis.parents(".accordion");
  jQuerytarget =  jQuerythis.parent().next();


  if(jQuerytarget.hasClass('active')){
    jQuery('body').removeClass('accordion-actif');
    jQuerytarget.removeClass('active').hide(); 
    jQueryparent.removeClass('actif');
    jQuery('.accordion >dt').show();
    jQuerygrandparent.removeClass('accordion-show');
  }else{
    jQuery('body').addClass('accordion-actif');
    allPanels.removeClass('active').slideUp();
    jQueryparent.addClass('actif');
    jQuerygrandparent.addClass('accordion-show');
    jQuerytarget.addClass('active').slideDown();
    jQuery('.accordion >dt').hide();
  }
  return false;
});
}

function idle(){
  idleTimer = null;
  idleState = false;
  idleWait = 10;
  jQuery('*').bind('mousemove keydown scroll', function () {

    clearTimeout(idleTimer);

    if (idleState == true) { 

                // Reactivated event
                //jQuery("body").append("<p>Welcome Back.</p>");            
              }

              idleState = false;

              idleTimer = setTimeout(function () { 

                // Idle Event
                //mainSlider();
                if ( !jQuery( ".cycle-slide" ).length ) {
                  mainSlider();
                }
                idleState = true; }, idleWait);
            });

  jQuery("body").trigger("mousemove");
}

function mainSlider(){
if ( jQuery( ".mainSlider" ).length ) {
  console.log('main_slider');
  jQuery('body').addClass('slider-actif');
  getSlider=("mainSlider");
  jQuery(".slider."+getSlider+" > span").each(function () { 
    getUrl=jQuery(this).attr("data-url");
    jQuery(this).css('background-image', 'url(' + getUrl + ')');
  });
  var $Slider = jQuery(".slider."+getSlider);
  $Slider.cycle({
    speed: 10000,
    timeout: 1,
    slides: '> span',
    loop:0,
    //pauseOnHover:true,
    //next:'.next',
    //prev:'.prev',
    pagerActiveClass: 'active',
    //pagerTemplate :'<span></span>',
    //pagerActiveClass: 'active',
  });
  }
}
function killMainSlider(){
  jQuery('.mainSlider').on({
    'touchmove': function(e) { 
      jQuery('.mainSlider').cycle('destroy');
    },
    'mousemove': function(e) { 
      jQuery('.mainSlider').cycle('destroy');
    }
  });
}


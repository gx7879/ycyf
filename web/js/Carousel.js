function checkIEVersion(version, operand){
	var operands	=	{
		"<":	"lt ",
		"<=":	"lte ",
		">":	"gt ",
		">=":	"gte ",
		"!=":	"!"
	};

	var div			=	document.createElement("div");
	div.innerHTML	=	"<!--[if "+(operands[operand] || "")+"IE "+version+"]><i></i><![endif]-->";
	return div.getElementsByTagName("i").length == 1;
}


/**
 * Ascertains a browser's support for a CSS property.
 * 
 * @param {string} CSS property name, supplied in sentence case (e.g., "Transition")
 * @return {boolean} TRUE if the browser supports the property in either prefixed or unprefixed form. 
 */
function cssSupport(s){
	if(s.toLowerCase() in document.documentElement.style) return true;
	for(var p = "Webkit Moz Ms O Khtml", p = (p.toLowerCase() + p).split(" "), i = 0; i < p.length; ++i)
		if(p[i]+s in document.documentElement.style) return true;
	return false;
}



var Rotator  =  {
  activeSlideClass:      "current",
  activePageClass:       "current",
  transitionDuration:    1000,
  startingSlide:         0,
  wrap:                  true,
  autoplay:              4000,
  autoplayTimer:         null,
  reverse:               false,
  resetAutoplayOnClick:  true,

  currentSlide:          NaN,
  setSlide:              function(input){
    
    /** Abort if we're attempting to select an already active slide. */
    if(input == this.currentSlide)
      return;


    this.currentSlide  =  input;
    this.slideNodes.removeClass(this.activeSlideClass);
    this.pagerLinks.removeClass(this.activePageClass).eq(input).addClass(this.activePageClass);

    var activeSlide  =  this.slideNodes.eq(input).addClass(this.activeSlideClass);
    if(!this.cssTransitions){

      /** IE8 and under have major "issues" applying opacity to child elements.
       * See: http://www.jacklmoore.com/notes/ie-opacity-inheritance/ */
      if(this.ltIE9){
        this.slideNodes.not(activeSlide).hide();
        activeSlide.show();
      }

      else{
        this.slideNodes.not(activeSlide).animate({opacity: 0}, this.transitionDuration);
        activeSlide.animate({opacity: 1}, this.transitionDuration);
      }
    }
  },
  
  
  /**  Playback methods */
  next:  function(){
    if(this.currentSlide >= this.slideNodes.length-1){
      if(this.wrap)
        this.setSlide(0);
    }
    else
      this.setSlide(this.currentSlide+1);
  },
  
  prev:  function(){
    if(this.currentSlide <= 0){
      if(this.wrap)
        this.setSlide(this.slideNodes.length-1);
    }
    else
      this.setSlide(this.currentSlide-1);
  },
  
  pause:  function(){
    if(this.autoplay > 0 && this.autoplayTimer){
      clearTimeout(this.autoplayTimer);
      this.autoplayPaused  =  true;
    }
  },

  resume:  function(){
    if(this.autoplay > 0 && this.autoplayPaused){
      this.autoplayTimer   =  setInterval(this.onAutoplay, this.autoplay);
      this.autoplayPaused  =  false;
    }
  },


  onPageClick:  function(){
    var r  =  Rotator;
    
    r.setSlide($(this).data("index"));
    if(r.autoplay > 0 && r.resetAutoplayOnClick){
      clearTimeout(r.autoplayTimer);
      r.autoplayTimer  =  setInterval(r.onAutoplay, r.autoplay);
    }
    return false;
  },

  onAutoplay:  function(){
    if(Rotator.reverse)  Rotator.prev();
    else                 Rotator.next();
  },


  init:  function(args){
    for(var i in args)
       this[i]  =  args[i];

    this.node       =  $("#rotator");
    this.slides     =  $("#slides");
    this.pager      =  $("#pager");

    this.slideNodes =  this.slides.children();
    for(var i = 0; i < this.slideNodes.length; ++i)
      this.pager.append($('<a href="#" data-index="'+i+'"></a>').click(this.onPageClick));
    this.pagerLinks  =  this.pager.children();


    this.cssTransitions  =  cssSupport("transition");
    this.ltIE9           =  checkIEVersion(9, "<");

    /* Set the first slide and start the show */
    this.setSlide(parseInt(this.startingSlide));
    this.node.addClass("active");


    /* Start autoplay if it was requested */
    if(this.autoplay > 0)
       this.autoplayTimer  =  setInterval(this.onAutoplay, this.autoplay);
    
    
    if(this.cssTransitions){
      var currentDuration  =  this.slideNodes.eq(0).css("transitionDuration");
      if(currentDuration && (parseFloat(currentDuration) * 1000 != this.transitionDuration))
         this.slideNodes.css("transitionDuration", (this.transitionDuration / 1000) + "s"); 
    }
  }
};


Rotator.init({
  transitionDuration: 1000
});


$("#rot-prev").click(function(){Rotator.prev(); return false});
$("#rot-next").click(function(){Rotator.next(); return false});

$("#rot-pause").click(function(){
  Rotator.pause();
  return false;
});

$("#rot-resume").click(function(){
  Rotator.resume();
  return false;
});
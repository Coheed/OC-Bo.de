/*
 * @author		Stefan Gandlau
 * @copyright	Stefan Gandlau <stefan@gandlau.net>
 * @package		CSlide 
 */

var CSlide = new Class({
    
    Implements: Options,
    
    elementIndex: 0,
    elementCount: 0,
    items: [],
    bubbles: [],
    activeItem: false,
    inProgress: false,
    autoplayTimer: false,
    
    options: {
        duration: 2000,
        transition: Fx.Transitions.Quad.easeOut,
        addNavigation: true,
        addIndicator: true,
        width: 400,
        height: 240,
        autoplay: false,
        delay: 0,
        slideLeft: 'l',
        slideRight: 'r',
        autoplayRandom: false
    },
    
    initialize: function(objContainer, options) {
        if(!objContainer) return;
        this.setOptions(options);
        
        /* check size parameters */
        if(this.options.width.substr(-1, 1) == '%') {
        	var p = this.options.width.substr(0, this.options.width.length -1) / 100;
        	this.options.width = objContainer.getParent().getStyle('width').toInt() * p;
        }
        
        
        this.elementCount = objContainer.getElements('.cslide_elem').length;
        
        if(this.options.addNavigation == false) {
            objContainer.getElements('.cslide_nav_left').setStyles({'display': 'none'});
            objContainer.getElements('.cslide_nav_right').setStyles({'display': 'none'});
        } else {
            objContainer.getElements('.cslide_nav_left')[0].addEvent('click', function() {
                if(this.autoplayTimer)
                    clearTimeout(this.autoplayTimer);
                this.slidePrev();
            }.bind(this));
            objContainer.getElements('.cslide_nav_right')[0].addEvent('click', function() {
                if(this.autoplayTimer)
                    clearTimeout(this.autoplayTimer);
                this.slideNext();
            }.bind(this));
            objContainer.getElements('.cslide_nav_left')[0].addClass('disabled');
        }
        
        /* setup the main container */
        objContainer.getElements('.cslide_container').setStyles({
            'width': this.options.width + 'px',
            'height': this.options.height + 'px',
            'position': 'relative',
            'overflow': 'hidden'
        });
        
        /* create indicator if enabled */
        if(this.options.addIndicator) {
            var bubbleContainer = new Element('ul');
            bubbleContainer.addClass('cslide_bubbles');
        }
        
        /* prepare elements */
        objContainer.getElements('.cslide_elem').each(function(item, index) {
            this.items.push(item);
            item.setStyles({
                'width': this.options.width + 'px',
                'height': this.options.height + 'px',
                'position': 'absolute',
                'z-index': 1
            });
            if(index == 0) {
                this.activeElement = item;
                item.setStyles({
                    'left': '0px',
                    'top': '0px',
                    'z-index': 100
                });
            } else {
                item.setStyle('display', 'none');
            }
            
            /* create bubbles if indicator enabled */
            if(this.options.addIndicator) {
                var bubble = new Element('li');
                bubble.addClass('cslide_bubble');
                if(index == 0) {
                    bubble.addClass('active');
                }
                bubble.addEvent('click', function() {
                    if(this.autoplayTimer)
                        clearTimeout(this.autoplayTimer);
                    if(index < this.elementIndex) {
                        this.slideTo(index, this.options.slideLeft);
                    } else {
                        this.slideTo(index, this.options.slideRight);
                    }
                }.bind(this));
                this.bubbles.push(bubble);
                bubble.inject(bubbleContainer);
            }
        }.bind(this));

        
        /* add indicator to dom if enabled */
        if(this.options.addIndicator) {
            objContainer.appendChild(bubbleContainer);
        }
        
        /* start autoplay if enabled */
        if(this.options.autoplay) {
            this.autoplayTimer = this.slideNext.periodical(this.options.delay, this);
        }
        
    },
    
    slideNext: function() {
        if(this.inProgress) return;
        index = this.elementIndex + 1;
        if(index > this.elementCount - 1) {
            index = 0;
        }
        if(this.autoplayTimer) {
            if(this.options.autoplayRandom) {
                d = Math.floor(Math.random() * 7);
                if(d == 0) this.slideTo(index, 'l');
                if(d == 1) this.slideTo(index, 'r');
                if(d == 2) this.slideTo(index, 'b');
                if(d == 3) this.slideTo(index, 't');
                if(d == 4) this.slideTo(index, 'lb');
                if(d == 5) this.slideTo(index, 'lt');
                if(d == 6) this.slideTo(index, 'rb');
                if(d == 7) this.slideTo(index, 'rt');
            } else {
                this.slideTo(index, this.options.slideRight);
            }
        } else {
            this.slideTo(index, this.options.slideRight);   
        }
        
    },
    
    slidePrev: function() {
        if(this.inProgress) return;
        index = this.elementIndex  -1;
        if(index < 0) {
            index = this.elementCount -1;
        }
        this.slideTo(index, this.options.slideLeft);
    },
    
    slideTo: function(index, direction) {
        if(this.inProgress) return;
        if(index == this.elementIndex) return;
        
        
        if(this.options.addIndicator) {
            this.bubbles[this.elementIndex].removeClass('active');
        }
        this.prevIndex = this.elementIndex;
        this.elementIndex = index;
        switch(direction) {
            case 'l': {
                posLeft = this.options.width * -1;
                posTop = 0;
            } break;
            case 'r': {
                posLeft = this.options.width;
                posTop = 0;
            } break;
            case 't': {
                posLeft = 0;
                posTop = this.options.height * -1;
            } break;
            case 'b': {
                posLeft = 0;
                posTop = this.options.height;
            } break;
            case 'lt': {
                posLeft = this.options.width * -1;
                posTop = this.options.height * -1;
            } break;
            case 'rt': {
                posLeft = this.options.width;
                posTop = this.options.height * -1;
            } break;
            case 'lb': {
                posLeft = this.options.width * -1;
                posTop = this.options.height;
            } break;
            case 'rb': {
                posLeft = this.options.width;
                posTop = this.options.height;
            } break;
        }
        
        this.items[index].setStyles({
            'left': posLeft +'px',
            'top': posTop +'px',
            'display': 'block',
            'z-index': 100
        });
        effect = new Fx.Morph(this.items[index], {
            duration: this.options.duration,
            transition: this.options.transition,
            onComplete: function() {
                this.inProgress = false;
                this.items[this.prevIndex].setStyles({
                    'display': 'none',
                    'z-index': 1
                });
                this.items[this.elementIndex].setStyle('z-index', 1);
            }.bind(this)
        });
        
        effect.start({
            'left': '0px',
            'top': '0px'
        });

        this.activeItem = this.items[index];
        this.inProgress = true;
        if(this.options.addIndicator) {
            this.bubbles[index].addClass('active');
        }
    }
    
});

CSlide.implement(new Events, new Options);
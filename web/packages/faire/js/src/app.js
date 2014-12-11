/* global TweenLite */
/* global Modernizr */

/**
 * Simple jquery plugin whipped together for the faders/scrollers on the page.
 * @author Focus43
 */
(function( $, Tween ){

    /**
     * Takes a dom node, looks at any data-* attributes, and converts to {key:value}
     * javascript object; ie. data-speed="0.6" -> {speed:0.6}
     * @param element
     * @returns {{}}
     */
    function attributesToObject( element ){
        var settings = {};
        for( var i = 0, attrs = element.attributes, n = attrs.length; i < n; i++ ){
            if(attrs[i].nodeName.indexOf('data-') !== -1){
                var key = attrs[i].nodeName.replace('data-', '');
                settings[key] = attrs[i].value;
            }
        }
        return settings;
    }

    function CustomSlider( $selector, settings ){

        // Final merged configs: settings first, and attributes can override
        var element     = $selector.get(0),
            configs     = $.extend(true, (settings || {}), attributesToObject(element)),
            nodes       = element.querySelectorAll('.node'),
            nodeCount   = nodes.length - 1,
            delay       = +(configs.delay),
            speed       = +(configs.speed);


        if( $selector.hasClass('fade') ){
            Tween.set(nodes, {autoAlpha:0});
            Tween.set(nodes[0], {autoAlpha:1});
            // Iterator
            (function loop(pause, index){
                setTimeout(function(){
                    var node1 = (index === nodeCount) ? nodeCount : index,
                        node2 = (index === nodeCount) ? 0 : index + 1;
                    Tween.fromTo(nodes[node1], speed, {autoAlpha:1},{autoAlpha:0});
                    Tween.fromTo(nodes[node2], speed, {autoAlpha:0}, {autoAlpha:1, onComplete:function(){
                        loop(pause, (index === nodeCount ? 0 : index + 1));
                    }});
                }, pause);
            })(delay, 0);
        }

        if( $selector.hasClass('circular-slide') ){
            Tween.set(nodes[0], {x:'-100%'});
            // Iterator
//            (function loop(pause, index){
//                setTimeout(function(){
//                    var node1 = (index === nodeCount) ? nodeCount : index,
//                        node2 = (index === nodeCount) ? 0 : index + 1;
//                    Tween.to(nodes[node1], speed, {x:'-200%'});
//                    Tween.to(nodes[node2], speed, {x:'-100%', onComplete:function(){
//                        Tween.set(nodes[node1], {clearProps:'all'});
//                        loop(pause, (index === nodeCount ? 0 : index + 1));
//                    }});
//                }, pause);
//            })(delay, 0);

            var _current = 0;
            $(configs.controls).on('click', function(){
                var $clicked  = $(this),
                    next;
                if($clicked.hasClass('left')){
                    next = (_current > 0) ? _current - 1 : nodeCount;
                    console.log(_current, next);
                    Tween.set(nodes[next], {x:'-200%'});
                    Tween.to(nodes[_current], speed, {x:'0%'});
                    Tween.to(nodes[next], speed, {x:'-100%'});
                }else{
                    next = (_current < nodeCount) ? _current + 1 : 0;
                    Tween.set(nodes[next], {clearProps:'all'});
                    Tween.to(nodes[_current], speed, {x:'-200%'});
                    Tween.to(nodes[next], speed, {x:'-100%'});
                }
                _current = next;
            });
        }

        if( $selector.hasClass('linear-slide') ){
            var frag  = document.createDocumentFragment(),
                inner = document.createElement('div');
            inner.className = 'inner';
            inner.style.width = nodes.length * 100 + '%';
            Array.prototype.forEach.call(nodes, function( _node ){
                _node.style.width = 100 / nodes.length + '%';
                inner.appendChild(_node);
            });
            frag.appendChild(inner);
            element.appendChild(frag);

            var _active = 0;
            $(configs.controls).on('click', function(){
                var $clicked = $(this);
                if($clicked.hasClass('left')){
                    _active = (_active > 0) ? _active - 1 : 0;
                }else{
                    _active = (_active < nodeCount) ? _active + 1 : nodeCount;
                }

                Tween.to(inner, 1, {x:'-' + (100 / nodes.length) * _active + '%'});
            });
        }
    }

    $.fn.customSlider = function( settings ){
        return this.each(function(idx, element){
            var $selector = $(element);
            if( ! $selector.data('customSlider') ){
                $selector.data('customSlider', new CustomSlider($selector, settings));
            }
        });
    };

})( jQuery, TweenLite );

/**
 * Basic page stuff
 */
$(function( Tween ){

    /** requestAnimationFrame shim - use native/prefixed first, backup to setTimeout */
    window.requestAnimFrame = Modernizr.prefixed('requestAnimationFrame', window) || function(callback){
        window.setTimeout(callback, 1000/ 60);
    };

    // Init sliders
    $('.custom-slider').customSlider();

    // If contact form element exists
    var $contactForm = $('.contact-form');
    $contactForm.on('submit', function( event ){
        event.preventDefault();
        $.post(this.getAttribute('action'), $contactForm.serialize(), function( resp ){
            if( resp.ok ){
                $contactForm.empty().append('<h3>Thanks, we will be in touch shortly!</h3>');
            }
        }, 'json');
    });

    var $headerElement       = $('header'),
        navCollapseThreshold = 100,
        navCollapseState     = false,
        navCollapseLastState = (window.pageYOffset > navCollapseThreshold),
        $parallaxElement     = $('.history'),
        parallaxPositionY    = 0,
        $markers             = $('.markers'),
        markerPositionY      = $markers.offset().top,
        windowHeight         = $(window).height(),
        markersBeenAnimated  = false;

    Tween.set($('a',$markers), {top:100});

    (function _draw( lastScroll ){
        if( lastScroll !== window.pageYOffset ){
            // Parallax BEFORE adjusting lastScroll
            parallaxPositionY = (lastScroll < window.pageYOffset) ? parallaxPositionY - 20 : parallaxPositionY + 20;
            Tween.set($parallaxElement, {backgroundPosition:'50% ' + parallaxPositionY + 'px'});

            // Set last scroll position
            lastScroll = window.pageYOffset;

            // Collapse navigation?
            navCollapseState = (lastScroll > navCollapseThreshold);
            if( navCollapseState !== navCollapseLastState ){
                navCollapseLastState = navCollapseState;
                $headerElement.toggleClass('collapse', navCollapseState);
            }

            // Markers?
            if( ! markersBeenAnimated ){
                if( (lastScroll >= (markerPositionY - windowHeight + 50)) ){
                    markersBeenAnimated = true;
                    $('a', $markers).each(function(index, el){
                        Tween.to(el, 1, {top:0, delay:(index * 0.25)});
                    });
                }
            }
        }
        window.requestAnimFrame(_draw.bind(null, lastScroll));
    })( window.pageYOffset );


    // Product descriptions
    $('a', '.markers').on('click', function(){
        var $this = $(this),
            index = $this.index();
        $('.product-desc', '.products').hide().eq(index).show();
        $this.siblings('a').removeClass('active');
        $this.addClass('active');
    });


    // Smooth scrolling
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    Tween.to(window, 0.65, {scrollTo:{y:target.offset().top - 140}});
                    return false;
                }
            }
        });
    });

}( TweenLite ));
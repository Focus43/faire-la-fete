$(function( Tween ){

    var slider       = document.querySelector('.mast-slide'),
        $contactForm = $('.contact-form');

    // If slider elements exists, run it
    if( slider ){
        var sliderNodes = slider.querySelectorAll('.node'),
            nodeCount   = sliderNodes.length - 1,
            sliderDelay = +(slider.getAttribute('data-delay')),
            sliderSpeed = +(slider.getAttribute('data-speed'));

        Tween.set(sliderNodes, {autoAlpha:0});
        Tween.set(sliderNodes[0], {autoAlpha:1});

        (function loop(pause, index){
            setTimeout(function(){
                var node1 = (index === nodeCount) ? nodeCount : index,
                    node2 = (index === nodeCount) ? 0 : index + 1;
                Tween.fromTo(sliderNodes[node1], sliderSpeed, {autoAlpha:1},{autoAlpha:0});
                Tween.fromTo(sliderNodes[node2], sliderSpeed, {autoAlpha:0}, {autoAlpha:1, onComplete:function(){
                    //Tween.set(sliderNodes[node1], {clearProps:'all'});
                    loop(pause, (index === nodeCount ? 0 : index + 1));
                }});
            }, pause);
        })(sliderDelay, 0);

//        Tween.set(slider.querySelectorAll('.node')[0], {x:'-100%'});
//
//        (function loop(pause, index){
//            setTimeout(function(){
//                var node1 = (index === nodeCount) ? nodeCount : index,
//                    node2 = (index === nodeCount) ? 0 : index + 1;
//                Tween.to(sliderNodes[node1], sliderSpeed, {x:'-200%'});
//                Tween.to(sliderNodes[node2], sliderSpeed, {x:'-100%', onComplete:function(){
//                    Tween.set(sliderNodes[node1], {clearProps:'all'});
//                    loop(pause, (index === nodeCount ? 0 : index + 1));
//                }});
//            }, pause);
//        })(sliderDelay, 0);
    }

    // If contact form element exists
    if( $contactForm ){
        $contactForm.on('submit', function( event ){
            event.preventDefault();
            $.post(this.getAttribute('action'), $contactForm.serialize(), function( resp ){
                if( resp.ok ){
                    $contactForm.empty().append('<h3>Thanks, we will be in touch shortly!</h3>');
                }
            }, 'json');
        });
    }

    // Navigation collapse on scroll
    var collapseState = false;
    (function _draw( scrollY, lastState ){
        if( (scrollY !== window.pageYOffset) ){
            scrollY        = window.pageYOffset;
            collapseState  = (scrollY > 100) ? true : false;
            if( lastState !== collapseState ){
                lastState = collapseState;
                document.querySelector('header').classList.toggle('collapse');
            }
        }
        // Repeat the loop
        requestAnimationFrame(_draw.bind(null, scrollY, lastState));
    })( window.pageYOffset, collapseState );

    // Product descriptions
//    document.querySelector('.markers').addEventListener('click', function( ev ){
//        console.log('clicked', this, ev);
//    }, false);
    $('a', '.markers').on('click', function(){
        var $this = $(this),
            index = $this.index();
        $('.product-desc', '.products').hide().eq(index).show();
        $this.siblings('a').removeClass('active');
        $this.addClass('active');
    });

}( TweenLite ));
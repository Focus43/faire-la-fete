$(function( Tween ){

    var slider       = document.querySelector('.mast-slide'),
        $contactForm = $('.contact-form');

    // If slider elements exists, run it
    if( slider ){
        var sliderNodes = slider.querySelectorAll('.node'),
            nodeCount   = sliderNodes.length - 1,
            sliderDelay = +(slider.getAttribute('data-delay')),
            sliderSpeed = +(slider.getAttribute('data-speed'));

        Tween.set(slider.querySelectorAll('.node')[0], {x:'-100%'});

        (function loop(pause, index){
            setTimeout(function(){
                var node1 = (index === nodeCount) ? nodeCount : index,
                    node2 = (index === nodeCount) ? 0 : index + 1;
                Tween.to(sliderNodes[node1], sliderSpeed, {x:'-200%'});
                Tween.to(sliderNodes[node2], sliderSpeed, {x:'-100%', onComplete:function(){
                    Tween.set(sliderNodes[node1], {clearProps:'all'});
                    loop(pause, (index === nodeCount ? 0 : index + 1));
                }});
            }, pause);
        })(sliderDelay, 0);
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


}( TweenLite ));
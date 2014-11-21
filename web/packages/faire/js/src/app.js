$(function( Tween ){

    var sliderEl    = document.querySelector('.mast-slide'),
        sliderNodes = sliderEl.querySelectorAll('.node'),
        nodeCount   = sliderNodes.length - 1,
        sliderDelay = +(sliderEl.getAttribute('data-delay')),
        sliderSpeed = +(sliderEl.getAttribute('data-speed'));

    Tween.set(sliderEl.querySelectorAll('.node')[0], {x:'-100%'});

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

}( TweenLite ));
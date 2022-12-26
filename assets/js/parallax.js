let main = document.querySelector('.main__layer');

if (main) {

    let layer1 = document.querySelector('.main__layer > img:first-child');
    let layer2 = document.querySelector('.main__layer > img:last-child');

    function move(layer, value) {
        main.addEventListener('mousemove', (event) => {
            let valueX = (event.pageX * -1 / value);
            let valueY = (event.pageY * -1 / value);

            layer.style.transform = 'translate3d(' + valueX + 'px, ' + valueY + 'px, 0 )';
        })
    }

    move(layer1, 30);
    move(layer2, 50);
}
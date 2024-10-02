import Bricks from 'bricks.js';

document.addEventListener('DOMContentLoaded', function () {
    const Masonry = document.querySelector('.frame-type-gallery');

    if (Masonry) {
        const sizes = [
            { columns: 1, gutter: 5 },
            { mq: '455px', columns: 1, gutter: 10 },
            { mq: '870px', columns: 2, gutter: 25 },
            { mq: '1300px', columns: 3, gutter: 25 },
            { mq: '1600px', columns: 4, gutter: 25 },
            { mq: '2000px', columns: 5, gutter: 25 },
            { mq: '2400px', columns: 6, gutter: 25 },
            { mq: '3000px', columns: 7, gutter: 25 },

            ];

        const instance = Bricks({
            container: '.gallery-row',
            packed: 'data-packed',
            position: true,
            sizes: sizes
        });

        instance.resize(true);
        instance.pack();
        instance.update();

    }
});
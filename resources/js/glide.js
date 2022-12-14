import Glide from '@glidejs/glide';

if (document.getElementById('banner')) {
    new Glide('#banner', {
        type: 'carousel',
        animationDuration: 600,
        autoplay: 4000,
        dragThreshold: true,
        hoverpause: true,
        focusAt: '1',
        perView: 1,
        gap: 0,
    }).mount();
}

if (document.getElementById('ratings')) {
    new Glide('#ratings', {
        type: 'carousel',
        animationDuration: 600,
        autoplay: 4000,
        dragThreshold: true,
        hoverpause: true,
        focusAt: '1',
        perView: 4,
        gap: 0,
        breakpoints: {
            1024: {
                perView: 3,
            },
            768: {
                perView: 2,
            },
            620: {
                perView: 1,
            },
        },
    }).mount();
}

if (document.getElementById('itemDesktop')) {
    new Glide('#itemDesktop', {
        type: 'carousel',
        animationDuration: 600,
        autoplay: 4000,
        dragThreshold: true,
        hoverpause: true,
        focusAt: '1',
        perView: 1,
        gap: 0,
    }).mount();
    new Glide('#itemMobile', {
        type: 'carousel',
        animationDuration: 600,
        autoplay: 4000,
        dragThreshold: true,
        hoverpause: true,
        focusAt: '1',
        perView: 1,
        gap: 0,
    }).mount();
}

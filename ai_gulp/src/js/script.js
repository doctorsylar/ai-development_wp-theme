
$(function () {
    // preloader hiding
    $('.preloader').fadeOut(0);

//    HOME
    fillSkills();

    let windowVar = $(window);
    let jsWindow = windowVar[0];
    let windowHeight = windowVar[0].innerHeight;
    let servicesPos = $('#services').offset().top;
    let portfolioPos = $('#portfolio').offset().top;
    let skillsPos = $('#skills').offset().top;
    let aboutPos = $('#about').offset().top;
    let contactPos = $('#contact').offset().top;
    let prevScrollPos = 0;


    windowVar.one('scroll', function () {
        windowHeight = jsWindow.innerHeight;
        servicesPos = $('#services').offset().top;
        portfolioPos = $('#portfolio').offset().top;
        skillsPos = $('#skills').offset().top;
        aboutPos = $('#about').offset().top;
        contactPos = $('#contact').offset().top;
    });

    windowVar.resize(function () {
        windowHeight = windowVar[0].innerHeight;
        servicesPos = $('#services').offset().top;
        portfolioPos = $('#portfolio').offset().top;
        skillsPos = $('#skills').offset().top;
        aboutPos = $('#about').offset().top;
        contactPos = $('#contact').offset().top;
    });

    // anchor links slow scroll
    $('.anchor').click(function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        let top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 600);
    });
    // scroll events:
    // 1. Home background smooth scrolling
    windowVar.scroll(function () {
        let scrollPos = jsWindow.scrollY;
        if (scrollPos < windowHeight && jsWindow.innerWidth > 360) {
            $('#home').css('background-position-y', scrollPos / -5);
        }
        if (scrollPos > prevScrollPos + 50 || scrollPos < prevScrollPos - 50) {
            prevScrollPos = scrollPos;
            //  Menu items highlighting
            let underHeaderScroll = scrollPos + 77;
            if (underHeaderScroll < servicesPos) {
                $('.link-home').addClass('active');
                $('.link-home').siblings().removeClass('active');
            }
            else if (underHeaderScroll < portfolioPos) {
                $('.link-services').addClass('active');
                $('.link-services').siblings().removeClass('active');
            }
            else if (underHeaderScroll < skillsPos) {
                $('.link-portfolio').addClass('active');
                $('.link-portfolio').siblings().removeClass('active');
            }
            else if (underHeaderScroll < aboutPos) {
                $('.link-skills').addClass('active');
                $('.link-skills').siblings().removeClass('active');
            }
            else if (underHeaderScroll < contactPos)  {
                $('.link-about').addClass('active');
                $('.link-about').siblings().removeClass('active');
            }
            else {
                $('.link-contact').addClass('active');
                $('.link-contact').siblings().removeClass('active');
            }
        }
        revealBlocks (scrollPos);

    });
    // Menu toggler
    $('.menu-toggler > i').click(function () {
        let button = $('.menu-toggler > i');
        $('.vertical-menu').slideToggle();
        button.addClass('spinning');
        button.toggleClass('fa-times');
        button.toggleClass('fa-bars');
        // console.log($('.menu-toggler > i'));
        setTimeout(function () {
            button.removeClass('spinning');
        }, 500);
    });
    // easy pie chart
    $('.chart').easyPieChart({
        size:140,
        lineCap:'butt',
        scaleColor: false,
        barColor: '#FF5252',
        trackColor: 'transparent',
        lineWidth: 10
    });

    $('.overlay').click(function () {
        $('.overlay').fadeOut(0);
    });

//    Portfolio full images
    $('.portfolio-item-inner').click(function () {
        $('.overlay, .close-modal').show(0);
        let clicked = $(this.children[1]);
        makeBackground(clicked);
        clicked.fadeIn(300, () => {
            if ($('body').width() >= 992) {
                setTimeout(() => {
                    $(this.children[1].children[1]).css('opacity', 0);
                }, 500);
            }
        });
        $('body').css('overflow', 'hidden');
    });
    $('.overlay, .close-modal').click(function () {
        $('.fullscreen-picture').removeClass('shown');
        $('.fullscreen-picture').fadeOut(50);
        $('.overlay, .close-modal').fadeOut(100);
        $('.fullscreen-picture .picture-text').css('opacity', '');
        $('body').css('overflow', 'auto');
    });

    $('.contact-form').submit(function (event) {
        event.preventDefault();
        let form = $(this);
        let values = {};
        let fieldsArray = $(this).serializeArray();
        for (let input of fieldsArray) {
            values[input['name']] = input['value'];
        }
        form.find('button[type=submit]').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: window.wp_data.ajax_url,
            data: {
                action: form.attr('action'),
                item: values
            },
            success: function (response) {
                $('.contact-form').fadeOut(1000, function () {
                    $('.success-form-sending').slideDown(300);
                });
            }
        });
    });
    $(document).keydown(function(event) {
        if( event.keyCode === 27 ) {
            if ($('.overlay').css('display') !== 'none') {
                $('.overlay').click();
            }
        }
    });
    //    meh
    // function for revealing blocks
    function revealBlocks (screenPos) {
        let animatedArray = $('.animatedIn');
        if (animatedArray.length > 0) {
            for (let i = 0; i < animatedArray.length; i++) {
                let animatedItem = $(animatedArray[i]);
                if (animatedItem.offset().top < screenPos + windowHeight - 100) {
                    if (animatedItem.hasClass('toFadeInLeft')) {
                        animatedItem.addClass('fadeInLeft');
                        animatedItem.removeClass('toFadeInLeft');
                        setTimeout(function () {
                            animatedItem.removeClass('fadeInLeft');
                            animatedItem.css('opacity', '1');
                        }, 1000);
                    }
                    else if (animatedItem.hasClass('toFadeInRight')) {
                        animatedItem.addClass('fadeInRight');
                        animatedItem.removeClass('toFadeInRight');
                        setTimeout(function () {
                            animatedItem.removeClass('fadeInRight');
                            animatedItem.css('opacity', '1');
                        }, 1000);
                    }
                    else {
                        animatedItem.addClass('fadeInBottom');
                        animatedItem.removeClass('toFadeInBottom');
                        setTimeout(function () {
                            animatedItem.removeClass('fadeInBottom');
                            animatedItem.css('opacity', '1');
                        }, 1000);
                    }
                    animatedItem.removeClass('animatedIn');
                }
                else {
                    break;
                }
            }
        }
    }
    // Place to make script for showing divs after loading page
    revealBlocks (jsWindow.scrollY);

//    BLOG
    $('.mobile-nav-toggler').click(function () {
        $('.blog-sidebar').toggleClass('show');
    });
});

// script for filling skills section
function fillSkills() {
    let skillsContainer = $('.skills-container');
    let tempDir = skillsContainer.data('dir');
    let skillsList = [
        { name: 'HTML 5',
            pictureUrl: tempDir + '/img/svg/html5.svg',
            level: ['95'],
            description: 'Стандартизированный язык разметки документов в интернете'
        },
        { name: 'CSS 3',
            pictureUrl: tempDir + '/img/svg/css-logo.svg',
            level: ['90'],
            description: 'Язык описания внешнего вида документа'
        },
        { name: 'JavaScript ES6+',
            pictureUrl: 'https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg',
            level: ['95'],
            description: 'Язык программирования высокого уровня, использующийся для придания интерактивности веб-страницам'
        },
        { name: 'jQuery',
            pictureUrl: tempDir + '/img/svg/jquery.svg',
            level: ['85'],
            description: 'Библиотека JavaScript, делающая взаимодействие с визуальными составляющими страницы более удобным'
        },
        { name: 'Bootstrap 4',
            pictureUrl: tempDir + '/img/svg/bootstrap.svg',
            level: ['80'],
            description: 'Библиотека, содержащая значительное количество готовых решений как для визуального оформления элементов веб-страницы, так и для создания интерактивности'
        },
        { name: 'React',
            pictureUrl: 'https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg',
            level: ['70'],
            description: 'JavaScript-библиотека с открытым исходным кодом для разработки пользовательских интерфейсов'
        },
        { name: 'VueJS',
            pictureUrl: 'https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg',
            level: ['60'],
            description: 'JavaScript-фреймворк с открытым исходным кодом для создания пользовательских интерфейсов'
        },
        { name: 'PHP7',
            pictureUrl: tempDir + '/img/svg/php.svg',
            level: ['70'],
            description: 'Наиболее часто применяемый язык программирования для разработки серверной части веб-сайтов и веб-приложений'
        },
        { name: 'NodeJS',
            pictureUrl: 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg',
            level: ['55'],
            description: 'Программная платформа, позволяющая использовать JavaScript как язык общего назначения вне окна браузера'
        },
        { name: 'Webpack',
            pictureUrl: tempDir + '/img/svg/webpack.svg',
            level: ['70'],
            description: 'Наиболее мощный инструмент для проведения \"сборки\" frontend\'а веб-сайтов'
        },
        { name: 'Babel',
            pictureUrl: 'https://upload.wikimedia.org/wikipedia/commons/0/02/Babel_Logo.svg',
            level: ['90'],
            description: 'Компилятор JavaScript с открытым исходным кодом и настраиваемый транспилятор, используемый в веб-разработке'
        },
        { name: 'Wordpress',
            pictureUrl: 'https://upload.wikimedia.org/wikipedia/commons/0/09/Wordpress-Logo.svg',
            level: ['60'],
            description: 'Самая популярная система управления контентом для веб-сайтов'
        },
    ];
    for (let skill of skillsList) {
        let code = `
            <div class="skill-item animatedIn">
                <img src="${skill.pictureUrl}" alt="${skill.name}">
                <div class="skill-description">
                    <h3>${skill.name}</h3>
                    <p>${skill.description}</p>
                    <span class="underlined">Уровень владения:</span>
                    <div class="skill-level">
                        <span data-percent="${skill.level}" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">${skill.level}</span>
                        </span>
                    </div>
                </div>
            </div>
            `;
        skillsContainer.append(code);
    }
}
//    JS fullscreen pictures code
function makeBackground(image) {
    image = image[0];
    let picture = image.children[0];
    if (picture.getAttribute('src') === '') {
        picture.setAttribute('src', picture.getAttribute('data-src'));
        picture.removeAttribute('data-src');
        let string = "url('" + picture.getAttribute('src') + "') no-repeat top center";
        image.style.background = string;
    }
}
//Abrir e Fechar o Menu Lateral
$(document).ready(function() {
    var isMobile = window.matchMedia("(max-width: 1023px)");
    if( !isMobile.matches ) {
        var MenuFechado = localStorage['MenuFechado'];
        console.log(MenuFechado);
        if( MenuFechado === 's' ) {
            $('.menu-lateral, .produtos-tela').toggleClass('menu-closed');
            $('.menu-text').toggleClass('is-closed');
            $('.menu-icon-admin').toggleClass('col-12 my-3 w-75');
            $('.menu-icon').toggleClass('col-12 my-3 pr-0 text-right');
            $('.admin-icon').toggleClass('is-closed');
        }
        $('#menu-icon').on('click', function() {
            $('.menu-lateral, .produtos-tela').toggleClass('menu-closed');
            $('.menu-text').toggleClass('is-closed')
            $('.menu-icon-admin').toggleClass('col-12 my-3 w-75')
            $('.menu-icon').toggleClass('col-12 my-3 pr-0 text-right')
            $('.admin-icon').toggleClass('is-closed')
            localStorage['MenuFechado'] = $('#menu-icon').hasClass('is-closed') ? 's' : 'n';
            console.log(MenuFechado);
        });
    }
    else {
        $('#menu-icon-mobile, #menu-close-mobile').on('click', function() {
            $('body').toggleClass('no-scroll');
            $('.menu-lateral-mobile').toggleClass('d-none');
            $('.menu-overlay').toggleClass('d-none');
            $('.add-button').fadeToggle('300');
        });
    }
    //Ativar Link Atual 
    $currentUrl = window.location.href;
    $('.menu-lateral-link').each(function() {
        let $linkUrl = $(this).prop("href");
        if( $currentUrl.replace('#', '') == $linkUrl.replace('#', '') ) {
            $(this).children('.row').addClass('link-active');
        }
    });

    //Passar dados para Modal
    $('.passContent').on('click', function() {
        let target = $('div' + $(this).data('target') );
        let data = '';
        // let id = $(this).parents('.product-parent').data('produto-id');
        if( $(this).parents('.row[data-product-id]').hasClass('product-parent') ) {
            data = $(this).parents('.product-parent').find('[data-modalInputName]');
        }
        else {
            data = $('.row.product-parent[data-product-id]').find('[data-modalInputName]');
        }

        data.each( function() {
            let inputName = $(this).attr('data-modalInputName');
            let formInputName = target.find(`input[name*=${inputName}], select[name*=${inputName}]`);
            if( formInputName.attr('type') == 'number' ) {
                formInputName.val($(this).text().replace(/\D/g,''));
            }
            else {
                formInputName.val($(this).text())
            }
        });
    });
});
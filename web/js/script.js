/* Preloader */
$(window).on("load", function() {
// $(document).on("ready", function() {

	/*preload*/
	var preload = $('.preloader');
	preload.find('.spinner').fadeOut(function(){
		preload.fadeOut(500);
	});

});

$(function() {
	// tin
	$('.pro-head').on('click', function(){
		$(this).toggleClass('active');
		$('.profile-body').slideToggle();
	});
	$('.header .h-profile .profile-body .add-admin button').on('click', function(){
        $('.overlay').fadeIn(250, function(){
            $('#admin-popup').animate({'top': $(window).scrollTop() + 100}, 500);
        });
        return false;
	});
    $('.overlay, #admin-popup .cancel-btn, #admin-popup .close').click(function(){
        $('#admin-popup').animate({'top': '-3000px'}, 500, function(){
            $('.overlay').fadeOut(250);
        });
        return false;
    });

    $('#add-admin-form button').on('click', function () {
        var $yiiform = $(this).parents('form');
        $yiiform.append('<input type="hidden" name="identSubmit" value="submit"/>');
        var dataForm = $yiiform.serializeArray();
        $yiiform.children('input[name=identSubmit]').remove();
        // отправляем данные на сервер
        console.log($yiiform.serializeArray());
        $.ajax({
			type: $yiiform.attr('method'),
			url: $yiiform.attr('action'),
			data: dataForm,
            success: function(msg){
				console.log(msg);
                $yiiform.find('input.form-control').val('');
                $yiiform.find('.mess').text(msg);
            }
		});

        return false; // отменяем отправку данных формы
    });
	// ENDtin

	var width = $(window).width();
	var height = $(window).height();
    
    /* Main carousel 
	var owl_slider = $(".main-started .owl-carousel");
    
	owl_slider.owlCarousel({
		margin: 0,
		items: 1,
		autoplay: false,
		loop: false,
        rewind: true,
		nav: true,
		dots: true
	});*/
    
	/* Mobile Menu 
	$('.header').on('click', '.menu-btn', function(){
		if($('.header').hasClass('opened')) {
            $('.header').removeClass('opened');
            
            $('body, html').css({'overflow':'visible'});
            $('body, html').css({'height':'auto'});
		} else {
            $('.header').addClass('opened');
            
            $('body, html').css({'overflow':'hidden'});
            $('body, html').css({'height':'100vh'});
		}
		return false;
	});*/
	
	/* Gallery 
	$(".gallery-group").fancybox({
		// Options will go here
	});*/
    
    /* Tabs */
	$('.tab-menu a').click(function(){
		var tab_bl = $(this).attr('href');
		
		$(this).closest('.tabs').find('.tab-menu li').removeClass('active');
		$(this).parent().addClass('active');
		
		$(this).closest('.tabs').find('.tab-item').hide();
		$(tab_bl).fadeIn();

		return false;
	});
	
    /* Form Styler */
	if($('.styler').length) {
		$('input.styler, select.styler').styler();
	}
    
    /* Tel Mask */
    if($("input[name='tel']").length) {
		$("input[name='tel']").mask("+7 (999) 999-99-99",{placeholder:""});
	}
    
    if($('.m_switch_check:checkbox').length) {
    $(".m_switch_check:checkbox").mSwitch({
        onRendered: function(){},
        onRender: function(elem){},
        onTurnOn: function(elem){
            return true;
        },
        onTurnOff: function(elem){
            return true;
        }
    });
    }
    
    /* Client Popup */
	$('.add-client-btn, .contract-table .edit-btn.edit').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#client-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #client-popup .cancel-btn, #client-popup .close').click(function(){
		$('#client-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Payments Popup */
	$('.add-gr-btn.add-pay, .payments-table .edit-btn.edit').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#payments-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #payments-popup .cancel-btn, #payments-popup .close').click(function(){
		$('#payments-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Contact Popup */
	$('.add-gr-btn.add-contact, .edit-btn.edit.contact').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#contact-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #contact-popup .cancel-btn, #contact-popup .close').click(function(){
		$('#contact-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Access Popup */
	$('.add-gr-btn.add-access, .edit-btn.edit.access').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#access-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #access-popup .cancel-btn, #access-popup .close').click(function(){
		$('#access-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* KP Popup */
	$('.add-gr-btn.add-kp, .edit-btn.edit.kp').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#kp-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #kp-popup .cancel-btn, #kp-popup .close').click(function(){
		$('#kp-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Comm Popup */
	$('.tab-edit-btn.edit-comm').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#comm-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #comm-popup .cancel-btn, #comm-popup .close').click(function(){
		$('#comm-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Rekv Popup */
	$('.tab-edit-btn.edit-rekv').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#rekv-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #rekv-popup .cancel-btn, #rekv-popup .close').click(function(){
		$('#rekv-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Delete Popup */
	$('.edit-btn.delete').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#delete-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #delete-popup .cancel-btn, #delete-popup .close').click(function(){
		$('#delete-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Confirm Popup */
	$('.p-check-btn').click(function(){
        if($(this).find('input[type=checkbox]').prop('checked')) {
            $('.overlay').fadeIn(250, function(){
                $('#confirm-popup').animate({'top': $(window).scrollTop() + 100}, 500);
            });
        }
		return false;
	});
    $('.overlay, #confirm-popup .cancel-btn, #confirm-popup .close').click(function(){
        /* РґРµР»Р°РµРј С‡РµРєР±РѕРєСЃ РЅРµР°РєС‚РёРІРЅС‹Рј */
        $('.p-check-btn input:checkbox').prop('checked', false).trigger('refresh');
		
        $('#confirm-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
    
    /* Confirm Recovery Popup */
	$('.removed .rec-btn, .more-btn.back-btn').click(function(){
		$('.overlay').fadeIn(250, function(){
			$('#confirm-rec-popup').animate({'top': $(window).scrollTop() + 100}, 500);
		});
		return false;
	});
	$('.overlay, #confirm-rec-popup .cancel-btn, #confirm-rec-popup .close').click(function(){
		$('#confirm-rec-popup').animate({'top': '-3000px'}, 500, function(){
			$('.overlay').fadeOut(250);
		});
		return false;
	});
	
	/* Validation Forms */
    
	/* Login Form */
	$("#login-form").validate({
		success: "valid"
	});
    
    /* Client Form */
	$("#add-client-form").validate({
		success: "valid"
	});
    
    /* Contact Form */
	$("#add-contact-form").validate({
		success: "valid"
	});
    
    /* Access Form */
	$("#add-access-form").validate({
		success: "valid"
	});
    
    /* KP Form */
	$("#add-kp-form").validate({
		success: "valid"
	});
    
    /* Comm Form */
	$("#add-comm-form").validate({
		success: "valid"
	});
    
    /* Rekv Form */
	$("#add-rekv-form").validate({
		success: "valid"
	});
    
    /* Payments Form */
	$("#add-payments-form").validate({
		success: "valid"
	});
    
    /*Yandex Maps Markers*/
    if($('.map').length) {
        ymaps.ready(init);
    }

    function init () {

        var myMap = new ymaps.Map("map", {
            center: [54.630310, 39.709883],
            zoom: 16,
            controls: ['zoomControl']
        });

        var myGeoObjects = [];

        myGeoObjects[0] = new ymaps.Placemark([54.630310, 39.709883],{
            clusterCaption: 'Р—Р°РіРѕР»РѕРІРѕРє', 
            //balloonContentBody: 'РўРµРєСЃС‚ РІ Р±Р°Р»СѓРЅРµ',
        },{
            // РќРµРѕР±С…РѕРґРёРјРѕ СѓРєР°Р·Р°С‚СЊ РґР°РЅРЅС‹Р№ С‚РёРї РјР°РєРµС‚Р°.
            iconLayout: 'default#image',
            iconImageHref: 'images/map_point.svg',
            // Р Р°Р·РјРµСЂС‹ РјРµС‚РєРё.
            iconImageSize: [68, 68],
            // РЎРјРµС‰РµРЅРёРµ Р»РµРІРѕРіРѕ РІРµСЂС…РЅРµРіРѕ СѓРіР»Р° РёРєРѕРЅРєРё РѕС‚РЅРѕСЃРёС‚РµР»СЊРЅРѕ
            // РµС‘ В«РЅРѕР¶РєРёВ» (С‚РѕС‡РєРё РїСЂРёРІСЏР·РєРё).
            iconImageOffset: [-34,-34]
        });

        var clusterIcons=[{
            href:'/images/map_point.svg',
            size:[68,68],
            offset:[0,0]
        }];

        var clusterer = new ymaps.Clusterer({
            clusterDisableClickZoom: false,
            clusterOpenBalloonOnClick: false,
            // РЈСЃС‚Р°РЅР°РІР»РёРІР°РµРј СЃС‚Р°РЅРґР°СЂС‚РЅС‹Р№ РјР°РєРµС‚ Р±Р°Р»СѓРЅР° РєР»Р°СЃС‚РµСЂР° "РљР°СЂСѓСЃРµР»СЊ".
            clusterBalloonContentLayout: 'cluster#balloonCarousel',
            // РЈСЃС‚Р°РЅР°РІР»РёРІР°РµРј СЃРѕР±СЃС‚РІРµРЅРЅС‹Р№ РјР°РєРµС‚.
            //clusterBalloonItemContentLayout: customItemContentLayout,
            // РЈСЃС‚Р°РЅР°РІР»РёРІР°РµРј СЂРµР¶РёРј РѕС‚РєСЂС‹С‚РёСЏ Р±Р°Р»СѓРЅР°. 
            // Р’ РґР°РЅРЅРѕРј РїСЂРёРјРµСЂРµ Р±Р°Р»СѓРЅ РЅРёРєРѕРіРґР° РЅРµ Р±СѓРґРµС‚ РѕС‚РєСЂС‹РІР°С‚СЊСЃСЏ РІ СЂРµР¶РёРјРµ РїР°РЅРµР»Рё.
            clusterBalloonPanelMaxMapArea: 0,
            // РЈСЃС‚Р°РЅР°РІР»РёРІР°РµРј СЂР°Р·РјРµСЂС‹ РјР°РєРµС‚Р° РєРѕРЅС‚РµРЅС‚Р° Р±Р°Р»СѓРЅР° (РІ РїРёРєСЃРµР»СЏС…).
            clusterBalloonContentLayoutWidth: 300,
            clusterBalloonContentLayoutHeight: 200,
            // РЈСЃС‚Р°РЅР°РІР»РёРІР°РµРј РјР°РєСЃРёРјР°Р»СЊРЅРѕРµ РєРѕР»РёС‡РµСЃС‚РІРѕ СЌР»РµРјРµРЅС‚РѕРІ РІ РЅРёР¶РЅРµР№ РїР°РЅРµР»Рё РЅР° РѕРґРЅРѕР№ СЃС‚СЂР°РЅРёС†Рµ
            clusterBalloonPagerSize: 5
            // РќР°СЃС‚СЂРѕР№РєР° РІРЅРµС€РµРіРѕ РІРёРґР° РЅРёР¶РЅРµР№ РїР°РЅРµР»Рё.
            // Р РµР¶РёРј marker СЂРµРєРѕРјРµРЅРґСѓРµС‚СЃСЏ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ СЃ РЅРµР±РѕР»СЊС€РёРј РєРѕР»РёС‡РµСЃС‚РІРѕРј СЌР»РµРјРµРЅС‚РѕРІ.
            // clusterBalloonPagerType: 'marker',
            // РњРѕР¶РЅРѕ РѕС‚РєР»СЋС‡РёС‚СЊ Р·Р°С†РёРєР»РёРІР°РЅРёРµ СЃРїРёСЃРєР° РїСЂРё РЅР°РІРёРіР°С†РёРё РїСЂРё РїРѕРјРѕС‰Рё Р±РѕРєРѕРІС‹С… СЃС‚СЂРµР»РѕРє.
            // clusterBalloonCycling: false,
            // РњРѕР¶РЅРѕ РѕС‚РєР»СЋС‡РёС‚СЊ РѕС‚РѕР±СЂР°Р¶РµРЅРёРµ РјРµРЅСЋ РЅР°РІРёРіР°С†РёРё.
            // clusterBalloonPagerVisible: false
        });

        clusterer.add(myGeoObjects);
        myMap.geoObjects.add(clusterer);
    }
});
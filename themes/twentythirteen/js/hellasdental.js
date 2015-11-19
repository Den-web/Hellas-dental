jQuery(document).ready(function () {
    var path = location.pathname;
    
	if (path === '/') {
       jQuery("#doctor").css({'display': 'none'});
	   jQuery(".bg-top").css({'display': 'none'});
       console.log("home");
    }
	else{
		jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
        console.log(path);
		
		if (path === '/stomatologicheskaya_klinika_hellas_dental_odessa/' || path === '/stomatologicheskaya_klinika_hellas_dental_odessa/safety/' || path === '/stomatologicheskaya_klinika_hellas_dental_odessa/feedback/' || path === '/stomatologicheskaya_klinika_hellas_dental_odessa/news/' || path === '/stomatologicheskaya_klinika_hellas_dental_odessa/news/' || path === '/stomatologicheskaya_klinika_hellas_dental_odessa/contacts/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-255>.sub-menu").show().addClass("active");
			
		} 
		else if (path === '/detskaya_stomatologiya/' || path === '/detskaya_stomatologiya/lechenie_zubov_u_detey/' || path === '/detskaya_stomatologiya/mladshiy_sredniy_vozrast/' || path === '/detskaya_stomatologiya/vzroslie_deti/' || path === '/detskaya_stomatologiya/dlya-samyih-malenkih/' || path === '/detskaya_stomatologiya/vrach_ortodont/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-244>.sub-menu").show();
		} 
		else if (path === '/profilaktika_zubov/' || path === '/profilaktika_zubov/check_up_parodontogramma_i_kompyuternaya_tomografiya_zubov/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-261>.sub-menu").show();
		} 
		else if (path === '/treatment/' || path === '/treatment/lechenie_zubov_vospalenie_desna_gingivit_periodontit_udalenie_kariesa_plomba_zuba/' || path === '/treatment/narkoz/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-252>.sub-menu").show();
		} 
		else if (path === '/vyravnivanie_zubov/' || path === '/vyravnivanie_zubov/ustanovka_breketov_sapfirovye_breket_sistemy/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-250>.sub-menu").show();
		} 
		else if (path === '/vosstanovlenie_i_restavracija_zubov/' || path === '/vosstanovlenie_i_restavracija_zubov/protezirovanie_zubov_bugelnye_protezy_semnye_protezy/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-241>.sub-menu").show();
		} 
		else if (path === '/esteticheskaya_stomatologiya_odessa/' || path === '/esteticheskaya_stomatologiya_odessa/lazernoe_otbelivanie_zubov_zoom_3_odessa/' || path === '/esteticheskaya_stomatologiya_odessa/viniry_odessa/' || path === '/esteticheskaya_stomatologiya_odessa/lyuminiri/') {
			console.log("path");
			jQuery("#page").css({'background':'url(/wp-content/themes/twentythirteen/images/bg-body-1.jpg) no-repeat','background-size':'contain'});
			jQuery(".menu-item-263>.sub-menu").show();
		} 
    }
});
//end

window.onload = function() {
	TagCanvas.textFont = 'Arial, Helvetica, sans-serif';
	TagCanvas.textColour = '#fff';
	TagCanvas.textHeight = 20;
	TagCanvas.maxSpeed = 0.06;
	TagCanvas.minBrightness = 0.2;
	TagCanvas.depth = 0.95;
	TagCanvas.pulsateTo = 5.2;
	TagCanvas.pulsateTime = 0.75;
	//TagCanvas.dragControl = true;
	TagCanvas.reverse = false;
	TagCanvas.stretchX = 15;
	TagCanvas.textVAlign = 'middle';
	TagCanvas.bgOutlineThickness = '0';
    try {
      TagCanvas.Start('myCanvas','ptTags',{shape:'vring(0.5)',offsetY:-30, lock: 'y'});
    } 
	catch(e) {
      document.getElementById('myCanvasContainer').style.display = 'none';
    }
};
 
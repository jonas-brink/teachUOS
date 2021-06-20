/*
 hides courseware navigation and shows koop menus in sidebar
*/
/*
	Created on : 11.05.2020, 11:01:38
	Author     : firas
*/

$(document).ready(function () {
	// clickable links should not point to the courseware anymore
	$('a').each(function () {
		$(this).attr("href", function (index, old) {
			if (old == undefined) {
				return null;
			}
			return old.replace("/studip/plugins.php/courseware/courseware", "/studip/plugins.php/koop/pages/cw");
		});
	});

	$("#courseware").prependTo(".koop-text-behalter");
	$(".koop-sub-content").appendTo("#layout_content");
	$("#courseware").css("padding-left", "0");

	$(".navigate").attr("data-title", "");

	// add header to side menu
	$(".chapter.selected").insertAfter("#chapterImg_container");

	// TODO: Why this ???
	// hide first sub section in menu
	//$(".active-subchapter").children(".section:first").hide();
	//1$("ol.subchapters").children(".subchapter:first").hide();


	$("#courseware").show();
	$(".koop-sub-content").show();

	// add styles to the header in sidemenu
	$('.chapter.selected a').each(function () {
		var text = $(this).html().replace('Digitale Medien im Unterricht', '<b>Digitale Medien</b> im Unterricht');
		text = text.replace('Blick in die Fächer', '<b>Blick in die</b> Fächer');
		text = text.replace('Vom Studium in die Praxis', '<b>Vom Studium</b> in die Praxis');
		text = text.replace("Durch's Studium", "<b>Durch's</b> Studium");

		text = text.replace("BLICK IN DIE FÄCHER", "<b>BLICK IN DIE</b> FÄCHER");
		text = text.replace("DIGITALE MEDIEN", "<b>DIGITALE</b> MEDIEN");
		text = text.replace("IN DIE PRAXIS", "<b>IN DIE</b> PRAXIS");
		text = text.replace("DURCH'S STUDIUM", "<b>DURCH'S</b> STUDIUM");
		$(this).html(text);
	});

	// align main images with heading in the first page of level 2 (layout 2)
	$('img[alt~="-Main"]').css("margin-top", "-100px");
	$('img[alt~="-Main"]').prependTo($('img[alt~="-Main"]').parent());

	// hide main images for layout 1
	if ($('.kacheln_header').length) {
		$('img[alt~="-Main"]').hide();
	}
});

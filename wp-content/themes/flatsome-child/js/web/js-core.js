jQuery(document).ready(function($){
	$(document).ready(function(){
		var widthWindow = $(window).width();
        $(".list-menu-page .accordion .accordion-item:first-child .accordion-title").addClass('active');
        $(".list-menu-page .accordion .accordion-item:first-child .accordion-inner").show();
        // Mode Theme
        $('.btn-home span').after('<i class="fa-solid fa-arrow-right"></i>');
        $('.box-lammau .form-check input').change(function(){
            $('.loadding-form').addClass('active');
            $('.item-form').removeClass('active');
            $(this).closest('.item-form').next().addClass('active');
            setTimeout(function(){
                $('.loadding-form').removeClass('active');
            }, 1000);
        });
		$('.inner-noitify .close').click(function(){
			$('.noitify-sticky').fadeOut();
		});
        $('.blog-post-inner button.button').html('<span>Đọc thêm</span> <i class="fa-solid fa-arrow-right"></i>');
        $('.more-icon').click(function(){
            $(this).next().toggleClass('active');
        });
		if(widthWindow < 550){
			$('.btn-table-contentshow').click(function(){
				$('.table-content-sidebar').show();
				$('.overlayCustom').addClass('active');
			});
			$('.btn-close-modal').click(function(){
				$('.table-content-sidebar').hide();
				$('.overlayCustom').removeClass('active');
			});
			$('.ez-toc-link').click(function(){
				$('.table-content-sidebar').hide();
				$('.overlayCustom').removeClass('active');
			});
		}
		var headerHeight = $('#header').innerHeight();
        var Content= $('#content').innerHeight();
        var topToContents = headerHeight + Content;
        var heightStop = topToContents - $('.table-content-sidebar #custom_html-2').innerHeight();
		// console.log('widthWindow: ', widthWindow);
		// console.log('headerHeight: ',headerHeight);
		// console.log('Content: ',Content);
		// console.log('topToContents: ',topToContents);
		// console.log('heightStop: ',heightStop);
		if(widthWindow > 980){
			$(window).scroll(function () {
                var sticky = $('.table-content-sidebar #custom_html-2'),
                    scroll = $(window).scrollTop();
    
                if (scroll >= headerHeight && scroll < heightStop){
                    sticky.addClass('sticky');
                    sticky.removeClass('stopBottom');
                }else if(scroll >= headerHeight && scroll >  heightStop){
                    sticky.addClass('stopBottom');
                    sticky.removeClass('sticky');
                }else{
                    sticky.removeClass('sticky');
                    sticky.removeClass('stopBottom');
                }
            });
		}
    });	
});


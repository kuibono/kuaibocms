$(document).ready(function(){	
	// show-tipinfo
	$(".show-tipinfo a").hover(function(){
		$(this).parent().parent().find(".tipInfo").show();
	},function(){		
		$(this).parent().parent().find(".tipInfo").hide();
	});	
	
	$("#wish").trigger('click');
	
	// Input Text Focus
	$(".ui-input").focus(function(){
		$(this).parent().addClass("ui-form-field-active");
	}).hover(function(){
		$(this).parent().addClass("ui-form-field-hover");
	},function(){
		$(this).parent().removeClass("ui-form-field-hover");
	});
	$(".ui-input").blur(function(){
		$(this).parent().removeClass("ui-form-field-active");
	});	
	
	// play-pic Hover
	$(".play-pic").hover(function(){
		$(this).find("span.play-icon").show();
	},function(){
		$(this).find("span.play-icon").hide();
	});
		
	// Baby Time Step A Tips
	$(".play-mode-list").each(function(j,div){
		$(div).find('a').each(function(i,e){
			var $title = $(this).attr("title");
			
			$(this).hover(function(){								
				var left = $(this).offset().left + 3;
				var top = $(this).offset().top - 28;
				var $appendbox = $(this).parent().parent(".play-mode-list");
				$('<div></div>').addClass('play-mode-tip').css({'left':left+'px','top':top+'px'})
				.html($title).appendTo($appendbox);	

				this.myTitle=this.title;
				this.title="";
								
			},function(){
				this.title=this.myTitle;	
				$('.play-mode-tip').remove();
			});
		});
	});
	
	// back-to-top
	var $back = $("<div class='back-to-top' id='back-to-top'><a href='javascript:void(0);'>Back to Top</a></div>");
	$back.appendTo(".wrap");

	$(window).scroll(function(){
		if ($(window).scrollTop()>100){
			$(".back-to-top").fadeIn(100);
		}else{
			$(".back-to-top").fadeOut(100);
		}
	});	
	$(".back-to-top").click(function(){
		$('body,html').animate({scrollTop:0},100);
		$("#detail-nav li.nav-item").removeClass("current");
		return false;
	});
	
	// detail-nav Button	
	$("#detail-nav li.nav-item").click(function(){
		$("#detail-nav li.nav-item").removeClass("current");
		$(this).addClass("current");
	});
	
});

// Tab Menu JS Common
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"active":"";
		con.style.display=i==cursel?"block":"none";
	}
}



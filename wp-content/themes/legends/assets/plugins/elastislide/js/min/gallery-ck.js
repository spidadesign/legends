$(function(){$.fn.imagesLoaded=function(e){function i(){e.call(l,t)}function n(){--r<=0&&this.src!==a&&(setTimeout(i),t.off("load error",n))}var t=this.find("img"),r=t.length,l=this,a="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";return r||i(),t.on("load error",n).each(function(){if(this.complete||void 0===this.complete){var e=this.src;this.src=a,this.src=e}}),this};var e=$("#rg-gallery"),i=e.find("div.es-carousel-wrapper"),n=i.find("ul > li"),t=n.length;Gallery=function(){var r=0,l="carousel",a=!1,s=function(){n.add('<img src="/legends/wp-content/themes/legends/images/ajax-loader.gif"/><img src="/legends/wp-content/themes/legends/images/black.png"/>').imagesLoaded(function(){c(),o(),f(n.eq(r))}),"carousel"===l&&d()},d=function(){i.show().elastislide({imageW:65,onClick:function(e){return a?!1:(a=!0,f(e),void(r=e.index()))}}),i.elastislide("setCurrent",r)},c=function(){var n=$('<a href="#" class="rg-view-full"></a>'),t=$('<a href="#" class="rg-view-thumbs rg-view-selected"></a>');e.prepend($('<div class="rg-view"/>').append(n).append(t)),n.on("click.rgGallery",function(e){return"carousel"===l&&i.elastislide("destroy"),i.hide(),n.addClass("rg-view-selected"),t.removeClass("rg-view-selected"),l="fullview",!1}),t.on("click.rgGallery",function(e){return d(),t.addClass("rg-view-selected"),n.removeClass("rg-view-selected"),l="carousel",!1}),"fullview"===l&&n.trigger("click")},o=function(){if($("#img-wrapper-tmpl").tmpl({itemsCount:t}).prependTo(e),t>1){var i=e.find("a.rg-image-nav-prev"),n=e.find("a.rg-image-nav-next"),r=e.find("div.rg-image");i.on("click.rgGallery",function(e){return g("left"),!1}),n.on("click.rgGallery",function(e){return g("right"),!1}),r.touchwipe({wipeLeft:function(){g("right")},wipeRight:function(){g("left")},preventDefaultEvents:!1}),$(document).on("keyup.rgGallery",function(e){39==e.keyCode?g("right"):37==e.keyCode&&g("left")})}},g=function(e){return a?!1:(a=!0,"right"===e?r+1>=t?r=0:++r:"left"===e&&(0>r-1?r=t-1:--r),void f(n.eq(r)))},f=function(t){var s=e.find("div.rg-loading").show();n.removeClass("selected"),t.addClass("selected");var d=t.find("img"),c=d.data("large"),o=d.data("description");$("<img/>").load(function(){e.find("div.rg-image").empty().append('<img src="'+c+'"/>'),o&&e.find("div.rg-caption").show().children("p").empty().text(o),s.hide(),"carousel"===l&&(i.elastislide("reload"),i.elastislide("setCurrent",r)),a=!1}).attr("src",c)},u=function(e){i.find("ul").append(e),n=n.add($(e)),t=n.length,i.elastislide("add",e)};return{init:s,addItems:u}}(),Gallery.init()});
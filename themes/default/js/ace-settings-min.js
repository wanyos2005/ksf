if(!("ace" in window)){window.ace={}}var $=jQuery;ace.settings={namespace:"mlm_ace_settings",is:function(b,a){return(MyUtils.myCookie.get(ace.settings.namespace,b+"-"+a)==1)},exists:function(b,a){return(MyUtils.myCookie.get(ace.settings.namespace,b+"-"+a)!==null)},set:function(b,a){MyUtils.myCookie.set(ace.settings.namespace,b+"-"+a,1)},unset:function(b,a){MyUtils.myCookie.set(ace.settings.namespace,b+"-"+a,-1)},remove:function(b,a){MyUtils.myCookie.remove(ace.settings.namespace,b+"-"+a)},sidebar_collapsed:function(c){c=c||false;var e=$("#sidebar");var d=$("#sidebar-collapse i");var b=d.data("icon1");var a=d.data("icon2");if(c){e.addClass("menu-min");d.removeClass(b);d.addClass(a);ace.settings.set("sidebar","collapsed")}else{e.removeClass("menu-min");d.removeClass(a);d.addClass(b);ace.settings.unset("sidebar","collapsed")}ace.settings.reset_sidebar_slimscroll(e)},check_sidebar:function(){var c="sidebar",e="collapsed",b="menu-min",a,d;a=ace.settings.is(c,e);d=$("#"+c);if(a!=d.hasClass(b)){ace.settings.sidebar_collapsed(a)}ace.settings.reset_sidebar_slimscroll(d)},reset_sidebar_slimscroll:function(b){var a=b.find(".nav-list");if(b.hasClass("menu-min")){if(a.attr("style")!==undefined){a.slimScroll({destroy:true,});a.css("overflow","")}}else{a.slimScroll({height:"450px",distance:0,size:"6px"})}},set_skin:function(b){var a=$(b).find("option:selected").data("skin");MyUtils.myCookie.set(ace.settings.namespace,"skin",a);ace.settings.check_skin()},check_skin:function(){var d=MyUtils.myCookie.get(ace.settings.namespace,"skin");var c="#skin-colorpicker";var b=$(c+' option[data-skin="'+d+'"]').attr("value");$(c).val(b);var a=$(document.body);a.removeClass("skin-1 skin-2 skin-3");if(d!="default"){a.addClass(d)}if(d=="skin-1"){$(".ace-nav > li.grey").addClass("dark")}else{$(".ace-nav > li.grey").removeClass("dark")}if(d=="skin-2"){$(".ace-nav > li").addClass("no-border margin-1");$(".ace-nav > li:not(:last-child)").addClass("light-pink").find('> a > [class*="icon-"]').addClass("pink").end().eq(0).find(".badge").addClass("badge-warning")}else{$(".ace-nav > li").removeClass("no-border margin-1");$(".ace-nav > li:not(:last-child)").removeClass("light-pink").find('> a > [class*="icon-"]').removeClass("pink").end().eq(0).find(".badge").removeClass("badge-warning")}if(d=="skin-3"){$(".ace-nav > li.grey").addClass("red").find(".badge").addClass("badge-yellow")}else{$(".ace-nav > li.grey").removeClass("red").find(".badge").removeClass("badge-yellow")}MyUtils.myCookie.set(ace.settings.namespace,"skin",d)}};
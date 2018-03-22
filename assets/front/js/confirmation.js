!function($){"use strict";function a(a){for(var b=window,c=a.split("."),d=c.pop(),e=0,f=c.length;e<f;e++)b=b[c[e]];return function(){b[d].call(this)}}if(!$.fn.popover)throw new Error("Confirmation requires popover.js");var b=function(a,b){b.trigger="click",this.init(a,b)};b.VERSION="2.3.1",b.DEFAULTS=$.extend({},$.fn.popover.Constructor.DEFAULTS,{placement:"top",title:"Are you sure?",popout:!1,singleton:!1,copyAttributes:"href target",buttons:null,onConfirm:$.noop,onCancel:$.noop,btnOkClass:"btn-xs btn-primary",btnOkIcon:"glyphicon glyphicon-ok",btnOkLabel:"Yes",btnCancelClass:"btn-xs btn-default",btnCancelIcon:"glyphicon glyphicon-remove",btnCancelLabel:"No",template:'<div class="popover confirmation"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"><p class="confirmation-content"></p><div class="confirmation-buttons text-center"><div class="btn-group"><a class="btn" data-apply="confirmation"></a><a class="btn" data-dismiss="confirmation"></a></div></div></div></div>'}),b.prototype=$.extend({},$.fn.popover.Constructor.prototype),b.prototype.constructor=b,b.prototype.getDefaults=function(){return b.DEFAULTS},b.prototype.init=function(a,b){$.fn.popover.Constructor.prototype.init.call(this,"confirmation",a,b),this.options._isDelegate=!1,b.selector?this.options._selector=this._options._selector=b._root_selector+" "+b.selector:b._selector?(this.options._selector=b._selector,this.options._isDelegate=!0):this.options._selector=b._root_selector;var c=this;this.options.selector||(this.options._attributes={},this.options.copyAttributes?"string"==typeof this.options.copyAttributes&&(this.options.copyAttributes=this.options.copyAttributes.split(" ")):this.options.copyAttributes=[],this.options.copyAttributes.forEach(function(a){this.options._attributes[a]=this.$element.attr(a)},this),this.$element.on(this.options.trigger,function(a,b){b||(a.preventDefault(),a.stopPropagation(),a.stopImmediatePropagation())}),this.$element.on("show.bs.confirmation",function(a){c.options.singleton&&$(c.options._selector).not($(this)).filter(function(){return void 0!==$(this).data("bs.confirmation")}).confirmation("hide")})),this.options._isDelegate||(this.eventBody=!1,this.uid=this.$element[0].id||this.getUID("group_"),this.$element.on("shown.bs.confirmation",function(a){c.options.popout&&!c.eventBody&&(c.eventBody=$("body").on("click.bs.confirmation."+c.uid,function(a){$(c.options._selector).is(a.target)||($(c.options._selector).filter(function(){return void 0!==$(this).data("bs.confirmation")}).confirmation("hide"),$("body").off("click.bs."+c.uid),c.eventBody=!1)}))}))},b.prototype.setContent=function(){var a=this,b=this.tip(),c=this.getTitle(),d=this.getContent();if(b.find(".popover-title")[this.options.html?"html":"text"](c),b.find(".confirmation-content").toggle(!!d).children().detach().end()[this.options.html?"string"==typeof d?"html":"append":"text"](d),b.on("click",function(a){a.stopPropagation()}),this.options.buttons){var e=b.find(".confirmation-buttons .btn-group").empty();this.options.buttons.forEach(function(b){e.append($("<a></a>").addClass(b["class"]).html(b.label).prepend($("<i></i>").addClass(b.icon)," ").one("click",function(){b.onClick&&b.onClick.call(a.$element),b.cancel?(a.getOnCancel.call(a).call(a.$element),a.$element.trigger("canceled.bs.confirmation")):(a.getOnConfirm.call(a).call(a.$element),a.$element.trigger("confirmed.bs.confirmation")),a.$element.confirmation("hide")}))},this)}else b.find('[data-apply="confirmation"]').addClass(this.options.btnOkClass).html(this.options.btnOkLabel).attr(this.options._attributes).prepend($("<i></i>").addClass(this.options.btnOkIcon)," ").off("click").one("click",function(){a.getOnConfirm.call(a).call(a.$element),a.$element.trigger("confirmed.bs.confirmation"),a.$element.trigger(a.options.trigger,[!0]),a.$element.confirmation("hide")}),b.find('[data-dismiss="confirmation"]').addClass(this.options.btnCancelClass).html(this.options.btnCancelLabel).prepend($("<i></i>").addClass(this.options.btnCancelIcon)," ").off("click").one("click",function(){a.getOnCancel.call(a).call(a.$element),a.inState&&(a.inState.click=!1),a.$element.trigger("canceled.bs.confirmation"),a.$element.confirmation("hide")});b.removeClass("fade top bottom left right in"),b.find(".popover-title").html()||b.find(".popover-title").hide()},b.prototype.getOnConfirm=function(){return this.$element.attr("data-on-confirm")?a(this.$element.attr("data-on-confirm")):this.options.onConfirm},b.prototype.getOnCancel=function(){return this.$element.attr("data-on-cancel")?a(this.$element.attr("data-on-cancel")):this.options.onCancel};var c=$.fn.confirmation;$.fn.confirmation=function(a){var c="object"==typeof a&&a||{};return c._root_selector=this.selector,this.each(function(){var d=$(this),e=d.data("bs.confirmation");(e||"destroy"!=a)&&(e||d.data("bs.confirmation",e=new b(this,c)),"string"==typeof a&&(e[a](),"hide"==a&&e.inState&&(e.inState.click=!1)))})},$.fn.confirmation.Constructor=b,$.fn.confirmation.noConflict=function(){return $.fn.confirmation=c,this}}(jQuery);
// DD Exit Intent Pop Up Script
var ddexitpop=function(e){var t={delayregister:0,delayshow:200,hideaftershow:!0,displayfreq:"always",persistcookie:"ddexitpop_shown",fxclass:"rubberBand",mobileshowafter:3e3,onddexitpop:function(){}},s=["fadeIn"],i="ontouchstart"in window||navigator.msMaxTouchPoints>0?"touchstart":"click";function n(e){var t=new RegExp(e+"=[^;]+","i");return document.cookie.match(t)?document.cookie.match(t)[0].split("=")[1]:null}function o(e,t,s){var i="",n=new Date;if(void 0!==s){var o=parseInt(s)*(/hr/i.test(s)?60:/day/i.test(s)?1440:1);n.setMinutes(n.getMinutes()+o),i="; expires="+n.toUTCString()}document.cookie=e+"="+t+"; path=/"+i}var r={wrappermarkup:'<div id="ddexitpopwrapper"><div class="veil"></div></div>',$wrapperref:null,$contentref:null,displaypopup:!0,delayshowtimer:null,settings:null,ajaxrequest:function(t){var s=function(e){if(/^http/i.test(e)){var t=document.createElement("a");return t.href=e,t.href.replace(RegExp(t.hostname,"i"),location.hostname)}return e}(t);e.ajax({url:s,dataType:"html",error:function(e){alert("Error fetching content.<br />Server Response: "+e.responseText)},success:function(t){r.$contentref=e(t).appendTo(document.body),r.setup(r.$contentref)}})},detectexit:function(e){e.clientY<60&&(this.delayshowtimer=setTimeout(function(){r.showpopup(),r.settings.onddexitpop(r.$contentref)},this.settings.delayshow))},detectenter:function(e){e.clientY<60&&clearTimeout(this.delayshowtimer)},showpopup:function(){null!=this.$contentref&&1==this.displaypopup&&(!0===this.settings.randomizefxclass&&(this.settings.fxclass=s[Math.floor(Math.random()*s.length)]),this.$wrapperref.addClass("open"),this.$contentref.addClass(this.settings.fxclass),this.displaypopup=!1,this.settings.hideaftershow&&e(document).off("mouseleave.registerexit"))},hidepopup:function(){this.$wrapperref.removeClass("open"),this.$contentref.removeClass(this.settings.fxclass),this.displaypopup=!0},setup:function(t){this.$contentref.addClass("animated"),this.$wrapperref=e(this.wrappermarkup).appendTo(document.body),this.$wrapperref.append(this.$contentref),this.$wrapperref.find(".veil").on(i,function(){r.hidepopup()}),"always"!=this.settings.displayfreq&&("session"==this.settings.displayfreq?o(this.settings.persistcookie,"yes"):/\d+(hr|day)/i.test(this.settings.displayfreq)&&(o(this.settings.persistcookie,"yes",this.settings.displayfreq),o(this.settings.persistcookie+"_duration",this.settings.displayfreq,this.settings.displayfreq)))},init:function(s){var i=e.extend({},t,s),a=n(i.persistcookie+"_duration");!a||"session"!=i.displayfreq&&i.displayfreq==a||(o(i.persistcookie,"yes",-1),o(i.persistcookie+"_duration","",-1)),"always"!=i.displayfreq&&n(i.persistcookie)||("random"==i.fxclass&&(i.randomizefxclass=!0),this.settings=i,"ajax"==i.contentsource[0]?this.ajaxrequest(i.contentsource[1]):"id"==i.contentsource[0]?(this.$contentref=e("#"+i.contentsource[1]).appendTo(document.body),this.setup(this.$contentref)):"inline"==i.contentsource[0]&&(this.$contentref=e(i.contentsource[1]).appendTo(document.body),this.setup(this.$contentref)),setTimeout(function(){e(document).on("mouseleave.registerexit",function(e){r.detectexit(e)}),e(document).on("mouseenter.registerenter",function(e){r.detectenter(e)})},i.delayregister),i.mobileshowafter>0&&e(document).one("touchstart",function(){setTimeout(function(){r.showpopup()},i.mobileshowafter)}))}};return r}(jQuery);jQuery(document).ready(function(){ddexitpop.init({contentsource:["id","ddexitpop"],fxclass:"random",displayfreq:"always",onddexitpop:function(e){console.log("Exit Pop Animation Class Name: "+ddexitpop.settings.fxclass)}})});

   jQuery(document).ready(function ($) {
       
        $('.closeexitpop').on('click',function(){  
                $('#ddexitpopwrapper').removeClass('open');
            });
    
           $(".indent-pop").validate({}); 
       
    var currentIP = $("meta[name=ip2loc]").attr('content');

    $.ajax({
        method: 'get',
        url: 'https://pro.ip-api.com/json/' + currentIP,
        data: {key: '5XpThOAEkfgOvEJ'},
        success: function (data) {
            if (data) {
                $('input[name=ip2loc_ip]').val(data.query);
                $('input[name=ip2loc_isp]').val(data.isp);
                $('input[name=ip2loc_org]').val(data.org);
                $('input[name=ip2loc_country]').val(data.country);
                $('input[name=ip2loc_region]').val(data.regionName);
                $('input[name=ip2loc_city]').val(data.city);
            }
        }
    });


});;
(function(){$(document).ready(function(){$("header h1").mouseenter(function(){return $("#back_link").show()});return $("header h1").mouseleave(function(){return $("#back_link").hide()})})}).call(this);(function(){var c,a,b;c=$("#back_to_top");a=function(){var d;d=$(this).scrollTop();if(d<100){return c.hide()}else{return c.show()}};b=function(){var d;d=$(window).width()-c.width()-10;return c.css("left",d.toString()+"px")};$(function(){var d,e;a();b();$(window).scroll(function(){var f;f=$(this).scrollTop();c.css("top",f.toString()+"px");return a()});$(window).resize(function(){return b()});d=$("#main");d.prepend('<div><h5>Table of Contents</h5><ol id="page_toc"></ol></div>');e=$("#page_toc");return $("h3").each(function(f,h){var g;g=$(h).html();e.append('<li><a href="#'+g+'">'+g+"</a></li>");return $(h).before('<a name="'+g+'"></a>')})})}).call(this);window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;var b=[].slice.call(arguments);(typeof console.log==="object"?log.apply.call(console.log,console,b):console.log.apply(console,b))}};(function(e){function h(){}for(var g="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),f;f=g.pop();){e[f]=e[f]||h}})((function(){try{console.log();return window.console}catch(a){return window.console={}}})());
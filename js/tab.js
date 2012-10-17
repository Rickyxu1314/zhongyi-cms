try {document.execCommand("BackgroundImageCache", false, true);} catch(e) {}
function s(element) {
	if (arguments.length > 1) {
		for (var i = 0,elements = [],length = arguments.length; i < length; i++)
			elements.push(s(arguments[i]));
		return elements;
	}
	if (typeof element == "string") return document.getElementById(element);
	else return element;
}

var Class = {
	create: function() {
		return function() {
			this.initialize.apply(this, arguments);
		}
	}
}

var tabMenu = Class.create();
tabMenu.prototype = {
	initialize: function(container) {
		this.container = s(container);
		for (var i = 0,length = this.container.childNodes.length,objs = []; i < length; i++) {
			if (this.container.childNodes[i].nodeType == 1) objs.push(this.container.childNodes[i]);
		}
		var tabArray = objs[0].getElementsByTagName("li");
		var divArray = new Array();
		for (i = 0, length = objs[1].childNodes.length; i < length; i++) {
			if (objs[1].childNodes[i].nodeType == 1) divArray.push(objs[1].childNodes[i]);
		}
		for (i = 0, length = tabArray.length; i < length; i++) {
			tabArray[i].length = length;
			tabArray[i].index = i;
			tabArray[i].onmouseover = function() {
				for (var j = 0; j < this.length; j++) {
					myRemoveCls(tabArray[j],'selected');
				}
				myAddCls(this,'selected');
				for (j = 0; j < this.length; j++) {
					divArray[j].style.display = "none";
				}
				divArray[this.index].style["display"] = "block";
			}
		}
	}
}

function myHasCls(ele,cls) {
	return ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
}
function myAddCls(ele,cls) {
	if (!this.myHasCls(ele,cls)) ele.className += " "+cls;
}
function myRemoveCls(ele,cls) {
	if (myHasCls(ele,cls)) {
    	var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
		ele.className=ele.className.replace(reg,' ');
	}
}

$(function() {
	var len = $(".num > li").length;
	var index = 0;
	var adTimer;
	$(".num li").click(function() {
		index = $(".num li").index(this);
		showImg(index);
	}).eq(0).mouseover();
	$('#slide').hover(function() {
		clearInterval(adTimer);
	}, function() {
		adTimer = setInterval(function() {
			showImg(index)
			index++;
			if (index == len) { index = 0; }
		}, 6000);
	}).trigger("mouseleave");
})
function showImg(index) {
	var adHeight = $("ul.slider li").height();
	$(".slider").stop(true, false).animate({ top: -adHeight * index }, 200);
	$(".num li").removeClass("selected").eq(index).addClass("selected");
}
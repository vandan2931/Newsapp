!function(a,b){function c(a,c,d){if(d===b&&1===a.nodeType)if("string"==typeof(d=a.getAttribute("data-"+c))){try{d="true"===d||"false"!==d&&("null"===d?null:r.isNaN(d)?t.test(d)?r.parseJSON(d):d:parseFloat(d))}catch(a){}r.data(a,c,d)}else d=b;return d}function d(){return!1}function e(){return!0}function f(a,b,c){return c[0].type=a,r.event.handle.apply(b,c)}function g(a){var b,c,d,e,f,g,h,i,j,k,l,m=[];if(e=[],f=r.data(this,this.nodeType?"events":"__events__"),"function"==typeof f&&(f=f.events),a.liveFired!==this&&f&&f.live&&(!a.button||"click"!==a.type)){a.namespace&&(l=RegExp("(^|\\.)"+a.namespace.split(".").join("\\.(?:.*\\.)?")+"(\\.|$)")),a.liveFired=this;var n=f.live.slice(0);for(h=0;h<n.length;h++)f=n[h],f.origType.replace(C,"")===a.type?e.push(f.selector):n.splice(h--,1);for(e=r(a.target).closest(e,a.currentTarget),i=0,j=e.length;i<j;i++)for(k=e[i],h=0;h<n.length;h++)f=n[h],k.selector!==f.selector||l&&!l.test(f.namespace)||(g=k.elem,d=null,"mouseenter"!==f.preType&&"mouseleave"!==f.preType||(a.type=f.preType,d=r(a.relatedTarget).closest(f.selector)[0]),d&&d===g||m.push({elem:g,handleObj:f,level:k.level}));for(i=0,j=m.length;i<j&&(e=m[i],!(c&&e.level>c))&&(a.currentTarget=e.elem,a.data=e.handleObj.data,a.handleObj=e.handleObj,!1!==(l=e.handleObj.origHandler.apply(e.elem,arguments))&&!a.isPropagationStopped()||(c=e.level,!1===l&&(b=!1),!a.isImmediatePropagationStopped()));i++);return b}}function h(a,b){return(a&&"*"!==a?a+".":"")+b.replace(E,"`").replace(F,"&")}function i(a,b,c){if(r.isFunction(b))return r.grep(a,function(a,d){return!!b.call(a,d,a)===c});if(b.nodeType)return r.grep(a,function(a){return a===b===c});if("string"==typeof b){var d=r.grep(a,function(a){return 1===a.nodeType});if(S.test(b))return r.filter(b,d,!c);b=r.filter(b,d)}return r.grep(a,function(a){return r.inArray(a,b)>=0===c})}function j(a,b){var c=0;b.each(function(){if(this.nodeName===(a[c]&&a[c].nodeName)){var b=r.data(a[c++]),d=r.data(this,b);if(b=b&&b.events){delete d.handle,d.events={};for(var e in b)for(var f in b[e])r.event.add(this,e,b[e][f],b[e][f].data)}}})}function k(a,b){b.src?r.ajax({url:b.src,async:!1,dataType:"script"}):r.globalEval(b.text||b.textContent||b.innerHTML||""),b.parentNode&&b.parentNode.removeChild(b)}function l(a,b,c){var d="width"===b?a.offsetWidth:a.offsetHeight;return"border"===c?d:(r.each("width"===b?ka:la,function(){c||(d-=parseFloat(r.css(a,"padding"+this))||0),"margin"===c?d+=parseFloat(r.css(a,"margin"+this))||0:d-=parseFloat(r.css(a,"border"+this+"Width"))||0}),d)}function m(a,b,c,d){r.isArray(b)&&b.length?r.each(b,function(b,e){c||va.test(a)?d(a,e):m(a+"["+("object"==typeof e||r.isArray(e)?b:"")+"]",e,c,d)}):c||null==b||"object"!=typeof b?d(a,b):r.isEmptyObject(b)?d(a,""):r.each(b,function(b,e){m(a+"["+b+"]",e,c,d)})}function n(a,b){var c={};return r.each(Ha.concat.apply([],Ha.slice(0,b)),function(){c[this]=a}),c}function o(a){if(!Da[a]){var b=r("<"+a+">").appendTo("body"),c=b.css("display");b.remove(),"none"!==c&&""!==c||(c="block"),Da[a]=c}return Da[a]}function p(a){return r.isWindow(a)?a:9===a.nodeType&&(a.defaultView||a.parentWindow)}var q=a.document,r=function(){function c(){if(!d.isReady){try{q.documentElement.doScroll("left")}catch(a){return void setTimeout(c,1)}d.ready()}}var g,A,d=function(a,b){return new d.fn.init(a,b)},e=a.jQuery,f=a.$,h=/^(?:[^<]*(<[\w\W]+>)[^>]*$|#([\w\-]+)$)/,i=/\S/,j=/^\s+/,k=/\s+$/,l=/\W/,m=/\d/,n=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,o=/^[\],:{}\s]*$/,p=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,r=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,s=/(?:^|:|,)(?:\s*\[)+/g,t=/(webkit)[ \/]([\w.]+)/,u=/(opera)(?:.*version)?[ \/]([\w.]+)/,v=/(msie) ([\w.]+)/,w=/(mozilla)(?:.*? rv:([\w.]+))?/,x=navigator.userAgent,y=!1,z=[],B=Object.prototype.toString,C=Object.prototype.hasOwnProperty,D=Array.prototype.push,E=Array.prototype.slice,F=String.prototype.trim,G=Array.prototype.indexOf,H={};return d.fn=d.prototype={init:function(a,c){var e,f,i;if(!a)return this;if(a.nodeType)return this.context=this[0]=a,this.length=1,this;if("body"===a&&!c&&q.body)return this.context=q,this[0]=q.body,this.selector="body",this.length=1,this;if("string"==typeof a){if(!(e=h.exec(a))||!e[1]&&c)return c||l.test(a)?!c||c.jquery?(c||g).find(a):d(c).find(a):(this.selector=a,this.context=q,a=q.getElementsByTagName(a),d.merge(this,a));if(e[1])return i=c?c.ownerDocument||c:q,(f=n.exec(a))?d.isPlainObject(c)?(a=[q.createElement(f[1])],d.fn.attr.call(a,c,!0)):a=[i.createElement(f[1])]:(f=d.buildFragment([e[1]],[i]),a=(f.cacheable?f.fragment.cloneNode(!0):f.fragment).childNodes),d.merge(this,a);if((f=q.getElementById(e[2]))&&f.parentNode){if(f.id!==e[2])return g.find(a);this.length=1,this[0]=f}return this.context=q,this.selector=a,this}return d.isFunction(a)?g.ready(a):(a.selector!==b&&(this.selector=a.selector,this.context=a.context),d.makeArray(a,this))},selector:"",jquery:"1.4.4",length:0,size:function(){return this.length},toArray:function(){return E.call(this,0)},get:function(a){return null==a?this.toArray():a<0?this.slice(a)[0]:this[a]},pushStack:function(a,b,c){var e=d();return d.isArray(a)?D.apply(e,a):d.merge(e,a),e.prevObject=this,e.context=this.context,"find"===b?e.selector=this.selector+(this.selector?" ":"")+c:b&&(e.selector=this.selector+"."+b+"("+c+")"),e},each:function(a,b){return d.each(this,a,b)},ready:function(a){return d.bindReady(),d.isReady?a.call(q,d):z&&z.push(a),this},eq:function(a){return-1===a?this.slice(a):this.slice(a,+a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(E.apply(this,arguments),"slice",E.call(arguments).join(","))},map:function(a){return this.pushStack(d.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||d(null)},push:D,sort:[].sort,splice:[].splice},d.fn.init.prototype=d.fn,d.extend=d.fn.extend=function(){var a,c,e,f,g,h=arguments[0]||{},i=1,j=arguments.length,k=!1;for("boolean"==typeof h&&(k=h,h=arguments[1]||{},i=2),"object"==typeof h||d.isFunction(h)||(h={}),j===i&&(h=this,--i);i<j;i++)if(null!=(a=arguments[i]))for(c in a)e=h[c],f=a[c],h!==f&&(k&&f&&(d.isPlainObject(f)||(g=d.isArray(f)))?(g?(g=!1,e=e&&d.isArray(e)?e:[]):e=e&&d.isPlainObject(e)?e:{},h[c]=d.extend(k,e,f)):f!==b&&(h[c]=f));return h},d.extend({noConflict:function(b){return a.$=f,b&&(a.jQuery=e),d},isReady:!1,readyWait:1,ready:function(a){if(!0===a&&d.readyWait--,!d.readyWait||!0!==a&&!d.isReady){if(!q.body)return setTimeout(d.ready,1);if(d.isReady=!0,!(!0!==a&&--d.readyWait>0)&&z){var b=0,c=z;for(z=null;a=c[b++];)a.call(q,d);d.fn.trigger&&d(q).trigger("ready").unbind("ready")}}},bindReady:function(){if(!y){if(y=!0,"complete"===q.readyState)return setTimeout(d.ready,1);if(q.addEventListener)q.addEventListener("DOMContentLoaded",A,!1),a.addEventListener("load",d.ready,!1);else if(q.attachEvent){q.attachEvent("onreadystatechange",A),a.attachEvent("onload",d.ready);var b=!1;try{b=null==a.frameElement}catch(a){}q.documentElement.doScroll&&b&&c()}}},isFunction:function(a){return"function"===d.type(a)},isArray:Array.isArray||function(a){return"array"===d.type(a)},isWindow:function(a){return a&&"object"==typeof a&&"setInterval"in a},isNaN:function(a){return null==a||!m.test(a)||isNaN(a)},type:function(a){return null==a?String(a):H[B.call(a)]||"object"},isPlainObject:function(a){if(!a||"object"!==d.type(a)||a.nodeType||d.isWindow(a))return!1;if(a.constructor&&!C.call(a,"constructor")&&!C.call(a.constructor.prototype,"isPrototypeOf"))return!1;for(var c in a);return c===b||C.call(a,c)},isEmptyObject:function(a){for(var b in a)return!1;return!0},error:function(a){throw a},parseJSON:function(b){return"string"==typeof b&&b?(b=d.trim(b),o.test(b.replace(p,"@").replace(r,"]").replace(s,""))?a.JSON&&a.JSON.parse?a.JSON.parse(b):new Function("return "+b)():void d.error("Invalid JSON: "+b)):null},noop:function(){},globalEval:function(a){if(a&&i.test(a)){var b=q.getElementsByTagName("head")[0]||q.documentElement,c=q.createElement("script");c.type="text/javascript",d.support.scriptEval?c.appendChild(q.createTextNode(a)):c.text=a,b.insertBefore(c,b.firstChild),b.removeChild(c)}},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,e){var f,g=0,h=a.length,i=h===b||d.isFunction(a);if(e)if(i){for(f in a)if(!1===c.apply(a[f],e))break}else for(;g<h&&!1!==c.apply(a[g++],e););else if(i){for(f in a)if(!1===c.call(a[f],f,a[f]))break}else for(e=a[0];g<h&&!1!==c.call(e,g,e);e=a[++g]);return a},trim:F?function(a){return null==a?"":F.call(a)}:function(a){return null==a?"":a.toString().replace(j,"").replace(k,"")},makeArray:function(a,b){var c=b||[];if(null!=a){var e=d.type(a);null==a.length||"string"===e||"function"===e||"regexp"===e||d.isWindow(a)?D.call(c,a):d.merge(c,a)}return c},inArray:function(a,b){if(b.indexOf)return b.indexOf(a);for(var c=0,d=b.length;c<d;c++)if(b[c]===a)return c;return-1},merge:function(a,c){var d=a.length,e=0;if("number"==typeof c.length)for(var f=c.length;e<f;e++)a[d++]=c[e];else for(;c[e]!==b;)a[d++]=c[e++];return a.length=d,a},grep:function(a,b,c){var e,d=[];c=!!c;for(var f=0,g=a.length;f<g;f++)e=!!b(a[f],f),c!==e&&d.push(a[f]);return d},map:function(a,b,c){for(var e,d=[],f=0,g=a.length;f<g;f++)null!=(e=b(a[f],f,c))&&(d[d.length]=e);return d.concat.apply([],d)},guid:1,proxy:function(a,c,e){return 2===arguments.length&&("string"==typeof c?(e=a,a=e[c],c=b):c&&!d.isFunction(c)&&(e=c,c=b)),!c&&a&&(c=function(){return a.apply(e||this,arguments)}),a&&(c.guid=a.guid=a.guid||c.guid||d.guid++),c},access:function(a,c,e,f,g,h){var i=a.length;if("object"==typeof c){for(var j in c)d.access(a,j,c[j],f,g,e);return a}if(e!==b){for(f=!h&&f&&d.isFunction(e),j=0;j<i;j++)g(a[j],c,f?e.call(a[j],j,g(a[j],c)):e,h);return a}return i?g(a[0],c):b},now:function(){return(new Date).getTime()},uaMatch:function(a){return a=a.toLowerCase(),a=t.exec(a)||u.exec(a)||v.exec(a)||a.indexOf("compatible")<0&&w.exec(a)||[],{browser:a[1]||"",version:a[2]||"0"}},browser:{}}),d.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){H["[object "+b+"]"]=b.toLowerCase()}),x=d.uaMatch(x),x.browser&&(d.browser[x.browser]=!0,d.browser.version=x.version),d.browser.webkit&&(d.browser.safari=!0),G&&(d.inArray=function(a,b){return G.call(b,a)}),/\s/.test(" ")||(j=/^[\s\xA0]+/,k=/[\s\xA0]+$/),g=d(q),q.addEventListener?A=function(){q.removeEventListener("DOMContentLoaded",A,!1),d.ready()}:q.attachEvent&&(A=function(){"complete"===q.readyState&&(q.detachEvent("onreadystatechange",A),d.ready())}),a.jQuery=a.$=d}();!function(){r.support={};var b=q.documentElement,c=q.createElement("script"),d=q.createElement("div"),e="script"+r.now();d.style.display="none",d.innerHTML="   <link/><table></table><a href='/a' style='color:red;float:left;opacity:.55;'>a</a><input type='checkbox'/>";var f=d.getElementsByTagName("*"),g=d.getElementsByTagName("a")[0],h=q.createElement("select"),i=h.appendChild(q.createElement("option"));if(f&&f.length&&g){r.support={leadingWhitespace:3===d.firstChild.nodeType,tbody:!d.getElementsByTagName("tbody").length,htmlSerialize:!!d.getElementsByTagName("link").length,style:/red/.test(g.getAttribute("style")),hrefNormalized:"/a"===g.getAttribute("href"),opacity:/^0.55$/.test(g.style.opacity),cssFloat:!!g.style.cssFloat,checkOn:"on"===d.getElementsByTagName("input")[0].value,optSelected:i.selected,deleteExpando:!0,optDisabled:!1,checkClone:!1,scriptEval:!1,noCloneEvent:!0,boxModel:null,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableHiddenOffsets:!0},h.disabled=!0,r.support.optDisabled=!i.disabled,c.type="text/javascript";try{c.appendChild(q.createTextNode("window."+e+"=1;"))}catch(a){}b.insertBefore(c,b.firstChild),a[e]&&(r.support.scriptEval=!0,delete a[e]);try{delete c.test}catch(a){r.support.deleteExpando=!1}b.removeChild(c),d.attachEvent&&d.fireEvent&&(d.attachEvent("onclick",function a(){r.support.noCloneEvent=!1,d.detachEvent("onclick",a)}),d.cloneNode(!0).fireEvent("onclick")),d=q.createElement("div"),d.innerHTML="<input type='radio' name='radiotest' checked='checked'/>",b=q.createDocumentFragment(),b.appendChild(d.firstChild),r.support.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,r(function(){var a=q.createElement("div");a.style.width=a.style.paddingLeft="1px",q.body.appendChild(a),r.boxModel=r.support.boxModel=2===a.offsetWidth,"zoom"in a.style&&(a.style.display="inline",a.style.zoom=1,r.support.inlineBlockNeedsLayout=2===a.offsetWidth,a.style.display="",a.innerHTML="<div style='width:4px;'></div>",r.support.shrinkWrapBlocks=2!==a.offsetWidth),a.innerHTML="<table><tr><td style='padding:0;display:none'></td><td>t</td></tr></table>";var b=a.getElementsByTagName("td");r.support.reliableHiddenOffsets=0===b[0].offsetHeight,b[0].style.display="",b[1].style.display="none",r.support.reliableHiddenOffsets=r.support.reliableHiddenOffsets&&0===b[0].offsetHeight,a.innerHTML="",q.body.removeChild(a).style.display="none"}),b=function(a){var b=q.createElement("div");a="on"+a;var c=a in b;return c||(b.setAttribute(a,"return;"),c="function"==typeof b[a]),c},r.support.submitBubbles=b("submit"),r.support.changeBubbles=b("change"),b=c=d=f=g=null}}();var s={},t=/^(?:\{.*\}|\[.*\])$/;r.extend({cache:{},uuid:0,expando:"jQuery"+r.now(),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},data:function(c,d,e){if(r.acceptData(c)){c=c==a?s:c;var f=c.nodeType,g=f?c[r.expando]:null,h=r.cache;if(!f||g||"string"!=typeof d||e!==b)return f?g||(c[r.expando]=g=++r.uuid):h=c,"object"==typeof d?f?h[g]=r.extend(h[g],d):r.extend(h,d):f&&!h[g]&&(h[g]={}),c=f?h[g]:h,e!==b&&(c[d]=e),"string"==typeof d?c[d]:c}},removeData:function(b,c){if(r.acceptData(b)){b=b==a?s:b;var d=b.nodeType,e=d?b[r.expando]:b,f=r.cache,g=d?f[e]:e;if(c)g&&(delete g[c],d&&r.isEmptyObject(g)&&r.removeData(b));else if(d&&r.support.deleteExpando)delete b[r.expando];else if(b.removeAttribute)b.removeAttribute(r.expando);else if(d)delete f[e];else for(var h in b)delete b[h]}},acceptData:function(a){if(a.nodeName){var b=r.noData[a.nodeName.toLowerCase()];if(b)return!(!0===b||a.getAttribute("classid")!==b)}return!0}}),r.fn.extend({data:function(a,d){var e=null;if(void 0===a){if(this.length){var g,f=this[0].attributes;e=r.data(this[0]);for(var h=0,i=f.length;h<i;h++)g=f[h].name,0===g.indexOf("data-")&&(g=g.substr(5),c(this[0],g,e[g]))}return e}if("object"==typeof a)return this.each(function(){r.data(this,a)});var j=a.split(".");return j[1]=j[1]?"."+j[1]:"",d===b?(e=this.triggerHandler("getData"+j[1]+"!",[j[0]]),e===b&&this.length&&(e=r.data(this[0],a),e=c(this[0],a,e)),e===b&&j[1]?this.data(j[0]):e):this.each(function(){var b=r(this),c=[j[0],d];b.triggerHandler("setData"+j[1]+"!",c),r.data(this,a,d),b.triggerHandler("changeData"+j[1]+"!",c)})},removeData:function(a){return this.each(function(){r.removeData(this,a)})}}),r.extend({queue:function(a,b,c){if(a){b=(b||"fx")+"queue";var d=r.data(a,b);return c?(!d||r.isArray(c)?d=r.data(a,b,r.makeArray(c)):d.push(c),d):d||[]}},dequeue:function(a,b){b=b||"fx";var c=r.queue(a,b),d=c.shift();"inprogress"===d&&(d=c.shift()),d&&("fx"===b&&c.unshift("inprogress"),d.call(a,function(){r.dequeue(a,b)}))}}),r.fn.extend({queue:function(a,c){return"string"!=typeof a&&(c=a,a="fx"),c===b?r.queue(this[0],a):this.each(function(){var b=r.queue(this,a,c);"fx"===a&&"inprogress"!==b[0]&&r.dequeue(this,a)})},dequeue:function(a){return this.each(function(){r.dequeue(this,a)})},delay:function(a,b){return a=r.fx?r.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(){var c=this;setTimeout(function(){r.dequeue(c,b)},a)})},clearQueue:function(a){return this.queue(a||"fx",[])}});var u=/[\n\t]/g,v=/\s+/,w=/\r/g,x=/^(?:href|src|style)$/,y=/^(?:button|input)$/i,z=/^(?:button|input|object|select|textarea)$/i,A=/^a(?:rea)?$/i,B=/^(?:radio|checkbox)$/i;r.props={for:"htmlFor",class:"className",readonly:"readOnly",maxlength:"maxLength",cellspacing:"cellSpacing",rowspan:"rowSpan",colspan:"colSpan",tabindex:"tabIndex",usemap:"useMap",frameborder:"frameBorder"},r.fn.extend({attr:function(a,b){return r.access(this,a,b,!0,r.attr)},removeAttr:function(a){return this.each(function(){r.attr(this,a,""),1===this.nodeType&&this.removeAttribute(a)})},addClass:function(a){if(r.isFunction(a))return this.each(function(b){var c=r(this);c.addClass(a.call(this,b,c.attr("class")))});if(a&&"string"==typeof a)for(var b=(a||"").split(v),c=0,d=this.length;c<d;c++){var e=this[c];if(1===e.nodeType)if(e.className){for(var f=" "+e.className+" ",g=e.className,h=0,i=b.length;h<i;h++)f.indexOf(" "+b[h]+" ")<0&&(g+=" "+b[h]);e.className=r.trim(g)}else e.className=a}return this},removeClass:function(a){if(r.isFunction(a))return this.each(function(b){var c=r(this);c.removeClass(a.call(this,b,c.attr("class")))});if(a&&"string"==typeof a||a===b)for(var c=(a||"").split(v),d=0,e=this.length;d<e;d++){var f=this[d];if(1===f.nodeType&&f.className)if(a){for(var g=(" "+f.className+" ").replace(u," "),h=0,i=c.length;h<i;h++)g=g.replace(" "+c[h]+" "," ");f.className=r.trim(g)}else f.className=""}return this},toggleClass:function(a,b){var c=typeof a,d="boolean"==typeof b;return r.isFunction(a)?this.each(function(c){var d=r(this);d.toggleClass(a.call(this,c,d.attr("class"),b),b)}):this.each(function(){if("string"===c)for(var e,f=0,g=r(this),h=b,i=a.split(v);e=i[f++];)h=d?h:!g.hasClass(e),g[h?"addClass":"removeClass"](e);else"undefined"!==c&&"boolean"!==c||(this.className&&r.data(this,"__className__",this.className),this.className=this.className||!1===a?"":r.data(this,"__className__")||"")})},hasClass:function(a){a=" "+a+" ";for(var b=0,c=this.length;b<c;b++)if((" "+this[b].className+" ").replace(u," ").indexOf(a)>-1)return!0;return!1},val:function(a){if(!arguments.length){var c=this[0];if(c){if(r.nodeName(c,"option")){var d=c.attributes.value;return!d||d.specified?c.value:c.text}if(r.nodeName(c,"select")){var e=c.selectedIndex;d=[];var f=c.options;if(c="select-one"===c.type,e<0)return null;var g=c?e:0;for(e=c?e+1:f.length;g<e;g++){var h=f[g];if(h.selected&&(r.support.optDisabled?!h.disabled:null===h.getAttribute("disabled"))&&(!h.parentNode.disabled||!r.nodeName(h.parentNode,"optgroup"))){if(a=r(h).val(),c)return a;d.push(a)}}return d}return B.test(c.type)&&!r.support.checkOn?null===c.getAttribute("value")?"on":c.value:(c.value||"").replace(w,"")}return b}var i=r.isFunction(a);return this.each(function(b){var c=r(this),d=a;if(1===this.nodeType)if(i&&(d=a.call(this,b,c.val())),null==d?d="":"number"==typeof d?d+="":r.isArray(d)&&(d=r.map(d,function(a){return null==a?"":a+""})),r.isArray(d)&&B.test(this.type))this.checked=r.inArray(c.val(),d)>=0;else if(r.nodeName(this,"select")){var e=r.makeArray(d);r("option",this).each(function(){this.selected=r.inArray(r(this).val(),e)>=0}),e.length||(this.selectedIndex=-1)}else this.value=d})}}),r.extend({attrFn:{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0},attr:function(a,c,d,e){if(!a||3===a.nodeType||8===a.nodeType)return b;if(e&&c in r.attrFn)return r(a)[c](d);e=1!==a.nodeType||!r.isXMLDoc(a);var f=d!==b;c=e&&r.props[c]||c;var g=x.test(c);return(c in a||a[c]!==b)&&e&&!g?(f&&("type"===c&&y.test(a.nodeName)&&a.parentNode&&r.error("type property can't be changed"),null===d?1===a.nodeType&&a.removeAttribute(c):a[c]=d),r.nodeName(a,"form")&&a.getAttributeNode(c)?a.getAttributeNode(c).nodeValue:"tabIndex"===c?(c=a.getAttributeNode("tabIndex"))&&c.specified?c.value:z.test(a.nodeName)||A.test(a.nodeName)&&a.href?0:b:a[c]):!r.support.style&&e&&"style"===c?(f&&(a.style.cssText=""+d),a.style.cssText):(f&&a.setAttribute(c,""+d),a.attributes[c]||!a.hasAttribute||a.hasAttribute(c)?(a=!r.support.hrefNormalized&&e&&g?a.getAttribute(c,2):a.getAttribute(c),null===a?b:a):b)}});var C=/\.(.*)$/,D=/^(?:textarea|input|select)$/i,E=/\./g,F=/ /g,G=/[^\w\s.|`]/g,H=function(a){return a.replace(G,"\\$&")},I={focusin:0,focusout:0};r.event={add:function(c,e,f,g){if(3!==c.nodeType&&8!==c.nodeType){if(r.isWindow(c)&&c!==a&&!c.frameElement&&(c=a),!1===f)f=d;else if(!f)return;var h,i;if(f.handler&&(h=f,f=h.handler),f.guid||(f.guid=r.guid++),i=r.data(c)){var j=c.nodeType?"events":"__events__",k=i[j],l=i.handle;"function"==typeof k?(l=k.handle,k=k.events):k||(c.nodeType||(i[j]=i=function(){}),i.events=k={}),l||(i.handle=l=function(){return void 0===r||r.event.triggered?b:r.event.handle.apply(l.elem,arguments)}),l.elem=c,e=e.split(" ");for(var n,m=0;j=e[m++];){i=h?r.extend({},h):{handler:f,data:g},j.indexOf(".")>-1?(n=j.split("."),j=n.shift(),i.namespace=n.slice(0).sort().join(".")):(n=[],i.namespace=""),i.type=j,i.guid||(i.guid=f.guid);var o=k[j],p=r.event.special[j]||{};o||(o=k[j]=[],p.setup&&!1!==p.setup.call(c,g,n,l)||(c.addEventListener?c.addEventListener(j,l,!1):c.attachEvent&&c.attachEvent("on"+j,l))),p.add&&(p.add.call(c,i),i.handler.guid||(i.handler.guid=f.guid)),o.push(i),r.event.global[j]=!0}c=null}}},global:{},remove:function(a,b,c,e){if(3!==a.nodeType&&8!==a.nodeType){!1===c&&(c=d);var f,g,i,j,k,l,m,n,h=0,o=a.nodeType?"events":"__events__",p=r.data(a),q=p&&p[o];if(p&&q)if("function"==typeof q&&(p=q,q=q.events),b&&b.type&&(c=b.handler,b=b.type),!b||"string"==typeof b&&"."===b.charAt(0)){b=b||"";for(f in q)r.event.remove(a,f+b)}else{for(b=b.split(" ");f=b[h++];)if(l=f,i=f.indexOf(".")<0,j=[],i||(j=f.split("."),f=j.shift(),k=RegExp("(^|\\.)"+r.map(j.slice(0).sort(),H).join("\\.(?:.*\\.)?")+"(\\.|$)")),m=q[f])if(c){for(l=r.event.special[f]||{},g=e||0;g<m.length&&(n=m[g],c.guid!==n.guid||((i||k.test(n.namespace))&&(null==e&&m.splice(g--,1),l.remove&&l.remove.call(a,n)),null==e));g++);(0===m.length||null!=e&&1===m.length)&&(l.teardown&&!1!==l.teardown.call(a,j)||r.removeEvent(a,f,p.handle),delete q[f])}else for(g=0;g<m.length;g++)n=m[g],(i||k.test(n.namespace))&&(r.event.remove(a,l,n.handler,g),m.splice(g--,1));r.isEmptyObject(q)&&((b=p.handle)&&(b.elem=null),delete p.events,delete p.handle,"function"==typeof p?r.removeData(a,o):r.isEmptyObject(p)&&r.removeData(a))}}},trigger:function(a,c,d,e){var f=a.type||a;if(!e){if(a="object"==typeof a?a[r.expando]?a:r.extend(r.Event(f),a):r.Event(f),f.indexOf("!")>=0&&(a.type=f=f.slice(0,-1),a.exclusive=!0),d||(a.stopPropagation(),r.event.global[f]&&r.each(r.cache,function(){this.events&&this.events[f]&&r.event.trigger(a,c,this.handle.elem)})),!d||3===d.nodeType||8===d.nodeType)return b;a.result=b,a.target=d,c=r.makeArray(c),c.unshift(a)}a.currentTarget=d,(e=d.nodeType?r.data(d,"handle"):(r.data(d,"__events__")||{}).handle)&&e.apply(d,c),e=d.parentNode||d.ownerDocument;try{d&&d.nodeName&&r.noData[d.nodeName.toLowerCase()]||d["on"+f]&&!1===d["on"+f].apply(d,c)&&(a.result=!1,a.preventDefault())}catch(a){}if(!a.isPropagationStopped()&&e)r.event.trigger(a,c,e,!0);else if(!a.isDefaultPrevented()){var g;e=a.target;var h=f.replace(C,""),i=r.nodeName(e,"a")&&"click"===h,j=r.event.special[h]||{};if(!(j._default&&!1!==j._default.call(d,a)||i||e&&e.nodeName&&r.noData[e.nodeName.toLowerCase()])){try{e[h]&&((g=e["on"+h])&&(e["on"+h]=null),r.event.triggered=!0,e[h]())}catch(a){}g&&(e["on"+h]=g),r.event.triggered=!1}}},handle:function(c){var d,e,f,g;e=[];var h=r.makeArray(arguments);if(c=h[0]=r.event.fix(c||a.event),c.currentTarget=this,d=c.type.indexOf(".")<0&&!c.exclusive,d||(f=c.type.split("."),c.type=f.shift(),e=f.slice(0).sort(),f=RegExp("(^|\\.)"+e.join("\\.(?:.*\\.)?")+"(\\.|$)")),c.namespace=c.namespace||e.join("."),g=r.data(this,this.nodeType?"events":"__events__"),"function"==typeof g&&(g=g.events),e=(g||{})[c.type],g&&e){e=e.slice(0),g=0;for(var i=e.length;g<i;g++){var j=e[g];if((d||f.test(j.namespace))&&(c.handler=j.handler,c.data=j.data,c.handleObj=j,j=j.handler.apply(this,h),j!==b&&(c.result=j,!1===j&&(c.preventDefault(),c.stopPropagation())),c.isImmediatePropagationStopped()))break}}return c.result},props:"altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode layerX layerY metaKey newValue offsetX offsetY pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target toElement view wheelDelta which".split(" "),fix:function(a){if(a[r.expando])return a;var c=a;a=r.Event(c);for(var e,d=this.props.length;d;)e=this.props[--d],a[e]=c[e];return a.target||(a.target=a.srcElement||q),3===a.target.nodeType&&(a.target=a.target.parentNode),!a.relatedTarget&&a.fromElement&&(a.relatedTarget=a.fromElement===a.target?a.toElement:a.fromElement),null==a.pageX&&null!=a.clientX&&(c=q.documentElement,d=q.body,a.pageX=a.clientX+(c&&c.scrollLeft||d&&d.scrollLeft||0)-(c&&c.clientLeft||d&&d.clientLeft||0),a.pageY=a.clientY+(c&&c.scrollTop||d&&d.scrollTop||0)-(c&&c.clientTop||d&&d.clientTop||0)),null!=a.which||null==a.charCode&&null==a.keyCode||(a.which=null!=a.charCode?a.charCode:a.keyCode),!a.metaKey&&a.ctrlKey&&(a.metaKey=a.ctrlKey),a.which||a.button===b||(a.which=1&a.button?1:2&a.button?3:4&a.button?2:0),a},guid:1e8,proxy:r.proxy,special:{ready:{setup:r.bindReady,teardown:r.noop},live:{add:function(a){r.event.add(this,h(a.origType,a.selector),r.extend({},a,{handler:g,guid:a.handler.guid}))},remove:function(a){r.event.remove(this,h(a.origType,a.selector),a)}},beforeunload:{setup:function(a,b,c){r.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}}},r.removeEvent=q.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){a.detachEvent&&a.detachEvent("on"+b,c)},r.Event=function(a){if(!this.preventDefault)return new r.Event(a);a&&a.type?(this.originalEvent=a,this.type=a.type):this.type=a,this.timeStamp=r.now(),this[r.expando]=!0},r.Event.prototype={preventDefault:function(){this.isDefaultPrevented=e;var a=this.originalEvent;a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=e;var a=this.originalEvent;a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=e,this.stopPropagation()},isDefaultPrevented:d,isPropagationStopped:d,isImmediatePropagationStopped:d};var J=function(a){var b=a.relatedTarget;try{for(;b&&b!==this;)b=b.parentNode;b!==this&&(a.type=a.data,r.event.handle.apply(this,arguments))}catch(a){}},K=function(a){a.type=a.data,r.event.handle.apply(this,arguments)};if(r.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){r.event.special[a]={setup:function(c){r.event.add(this,b,c&&c.selector?K:J,a)},teardown:function(a){r.event.remove(this,b,a&&a.selector?K:J)}}}),r.support.submitBubbles||(r.event.special.submit={setup:function(){if("form"===this.nodeName.toLowerCase())return!1;r.event.add(this,"click.specialSubmit",function(a){var c=a.target,d=c.type;if(("submit"===d||"image"===d)&&r(c).closest("form").length)return a.liveFired=b,f("submit",this,arguments)}),r.event.add(this,"keypress.specialSubmit",function(a){var c=a.target,d=c.type;if(("text"===d||"password"===d)&&r(c).closest("form").length&&13===a.keyCode)return a.liveFired=b,f("submit",this,arguments)})},teardown:function(){r.event.remove(this,".specialSubmit")}}),!r.support.changeBubbles){var L,M=function(a){var b=a.type,c=a.value;return"radio"===b||"checkbox"===b?c=a.checked:"select-multiple"===b?c=a.selectedIndex>-1?r.map(a.options,function(a){return a.selected}).join("-"):"":"select"===a.nodeName.toLowerCase()&&(c=a.selectedIndex),c},N=function(a,c){var e,f,d=a.target;if(D.test(d.nodeName)&&!d.readOnly&&(e=r.data(d,"_change_data"),f=M(d),"focusout"===a.type&&"radio"===d.type||r.data(d,"_change_data",f),e!==b&&f!==e&&(null!=e||f)))return a.type="change",a.liveFired=b,r.event.trigger(a,c,d)};r.event.special.change={filters:{focusout:N,beforedeactivate:N,click:function(a){var b=a.target,c=b.type;if("radio"===c||"checkbox"===c||"select"===b.nodeName.toLowerCase())return N.call(this,a)},keydown:function(a){var b=a.target,c=b.type;if(13===a.keyCode&&"textarea"!==b.nodeName.toLowerCase()||32===a.keyCode&&("checkbox"===c||"radio"===c)||"select-multiple"===c)return N.call(this,a)},beforeactivate:function(a){a=a.target,r.data(a,"_change_data",M(a))}},setup:function(){if("file"===this.type)return!1;for(var a in L)r.event.add(this,a+".specialChange",L[a]);return D.test(this.nodeName)},teardown:function(){return r.event.remove(this,".specialChange"),D.test(this.nodeName)}},L=r.event.special.change.filters,L.focus=L.beforeactivate}q.addEventListener&&r.each({focus:"focusin",blur:"focusout"},function(a,b){function c(a){return a=r.event.fix(a),a.type=b,r.event.trigger(a,null,a.target)}r.event.special[b]={setup:function(){0==I[b]++&&q.addEventListener(a,c,!0)},teardown:function(){0==--I[b]&&q.removeEventListener(a,c,!0)}}}),r.each(["bind","one"],function(a,c){r.fn[c]=function(a,d,e){if("object"==typeof a){for(var f in a)this[c](f,d,a[f],e);return this}(r.isFunction(d)||!1===d)&&(e=d,d=b);var g="one"===c?r.proxy(e,function(a){return r(this).unbind(a,g),e.apply(this,arguments)}):e;if("unload"===a&&"one"!==c)this.one(a,d,e);else{f=0;for(var h=this.length;f<h;f++)r.event.add(this[f],a,g,d)}return this}}),r.fn.extend({unbind:function(a,b){if("object"!=typeof a||a.preventDefault){c=0;for(var d=this.length;c<d;c++)r.event.remove(this[c],a,b)}else for(var c in a)this.unbind(c,a[c]);return this},delegate:function(a,b,c,d){return this.live(b,c,d,a)},undelegate:function(a,b,c){return 0===arguments.length?this.unbind("live"):this.die(b,null,c,a)},trigger:function(a,b){return this.each(function(){r.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0]){var c=r.Event(a);return c.preventDefault(),c.stopPropagation(),r.event.trigger(c,b,this[0]),c.result}},toggle:function(a){for(var b=arguments,c=1;c<b.length;)r.proxy(a,b[c++]);return this.click(r.proxy(a,function(d){var e=(r.data(this,"lastToggle"+a.guid)||0)%c;return r.data(this,"lastToggle"+a.guid,e+1),d.preventDefault(),b[e].apply(this,arguments)||!1}))},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var O={focus:"focusin",blur:"focusout",mouseenter:"mouseover",mouseleave:"mouseout"};r.each(["live","die"],function(a,c){r.fn[c]=function(a,d,e,f){var g,j,k,i=0,l=f||this.selector;if(f=f?this:r(this.context),"object"==typeof a&&!a.preventDefault){for(g in a)f[c](g,d,a[g],l);return this}for(r.isFunction(d)&&(e=d,d=b),a=(a||"").split(" ");null!=(g=a[i++]);)if(j=C.exec(g),k="",j&&(k=j[0],g=g.replace(C,"")),"hover"===g)a.push("mouseenter"+k,"mouseleave"+k);else if(j=g,"focus"===g||"blur"===g?(a.push(O[g]+k),g+=k):g=(O[g]||g)+k,"live"===c){k=0;for(var m=f.length;k<m;k++)r.event.add(f[k],"live."+h(g,l),{data:d,selector:l,handler:e,origType:g,origHandler:e,preType:j})}else f.unbind("live."+h(g,l),e);return this}}),r.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error".split(" "),function(a,b){r.fn[b]=function(a,c){return null==c&&(c=a,a=null),arguments.length>0?this.bind(b,a,c):this.trigger(b)},r.attrFn&&(r.attrFn[b]=!0)}),a.attachEvent&&!a.addEventListener&&r(a).bind("unload",function(){for(var a in r.cache)if(r.cache[a].handle)try{r.event.remove(r.cache[a].handle.elem)}catch(a){}}),function(){function a(a,b,c,d,e,f){e=0;for(var g=d.length;e<g;e++){var h=d[e];if(h){var i=!1;for(h=h[a];h;){if(h.sizcache===c){i=d[h.sizset];break}if(1!==h.nodeType||f||(h.sizcache=c,h.sizset=e),h.nodeName.toLowerCase()===b){i=h;break}h=h[a]}d[e]=i}}}function c(a,b,c,d,e,f){e=0;for(var g=d.length;e<g;e++){var h=d[e];if(h){var j=!1;for(h=h[a];h;){if(h.sizcache===c){j=d[h.sizset];break}if(1===h.nodeType)if(f||(h.sizcache=c,h.sizset=e),"string"!=typeof b){if(h===b){j=!0;break}}else if(i.filter(b,[h]).length>0){j=h;break}h=h[a]}d[e]=j}}}var d=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,e=0,f=Object.prototype.toString,g=!1,h=!0;[0,0].sort(function(){return h=!1,0});var i=function(a,b,c,e){c=c||[];var g=b=b||q;if(1!==b.nodeType&&9!==b.nodeType)return[];if(!a||"string"!=typeof a)return c;var h,l,m,o,p,r=!0,t=i.isXML(b),u=[],v=a;do{if(d.exec(""),(h=d.exec(v))&&(v=h[3],u.push(h[1]),h[2])){o=h[3];break}}while(h);if(u.length>1&&k.exec(a))if(2===u.length&&j.relative[u[0]])l=s(u[0]+u[1],b);else for(l=j.relative[u[0]]?[b]:i(u.shift(),b);u.length;)a=u.shift(),j.relative[a]&&(a+=u.shift()),l=s(a,l);else if(!e&&u.length>1&&9===b.nodeType&&!t&&j.match.ID.test(u[0])&&!j.match.ID.test(u[u.length-1])&&(h=i.find(u.shift(),b,t),b=h.expr?i.filter(h.expr,h.set)[0]:h.set[0]),b)for(h=e?{expr:u.pop(),set:n(e)}:i.find(u.pop(),1!==u.length||"~"!==u[0]&&"+"!==u[0]||!b.parentNode?b:b.parentNode,t),l=h.expr?i.filter(h.expr,h.set):h.set,u.length>0?m=n(l):r=!1;u.length;)h=p=u.pop(),j.relative[p]?h=u.pop():p="",null==h&&(h=b),j.relative[p](m,h,t);else m=[];if(m||(m=l),m||i.error(p||a),"[object Array]"===f.call(m))if(r)if(b&&1===b.nodeType)for(a=0;null!=m[a];a++)m[a]&&(!0===m[a]||1===m[a].nodeType&&i.contains(b,m[a]))&&c.push(l[a]);else for(a=0;null!=m[a];a++)m[a]&&1===m[a].nodeType&&c.push(l[a]);else c.push.apply(c,m);else n(m,c);return o&&(i(o,g,c,e),i.uniqueSort(c)),c};i.uniqueSort=function(a){if(o&&(g=h,a.sort(o),g))for(var b=1;b<a.length;b++)a[b]===a[b-1]&&a.splice(b--,1);return a},i.matches=function(a,b){return i(a,null,null,b)},i.matchesSelector=function(a,b){return i(b,null,null,[a]).length>0},i.find=function(a,b,c){var d;if(!a)return[];for(var e=0,f=j.order.length;e<f;e++){var g,h=j.order[e];if(g=j.leftMatch[h].exec(a)){var i=g[1];if(g.splice(1,1),"\\"!==i.substr(i.length-1)&&(g[1]=(g[1]||"").replace(/\\/g,""),null!=(d=j.find[h](g,b,c)))){a=a.replace(j.match[h],"");break}}}return d||(d=b.getElementsByTagName("*")),{set:d,expr:a}},i.filter=function(a,c,d,e){for(var f,g,h=a,k=[],l=c,m=c&&c[0]&&i.isXML(c[0]);a&&c.length;){for(var n in j.filter)if(null!=(f=j.leftMatch[n].exec(a))&&f[2]){var o,p,q=j.filter[n];if(p=f[1],g=!1,f.splice(1,1),"\\"!==p.substr(p.length-1)){if(l===k&&(k=[]),j.preFilter[n])if(f=j.preFilter[n](f,l,d,k,e,m)){if(!0===f)continue}else g=o=!0;if(f)for(var r=0;null!=(p=l[r]);r++)if(p){o=q(p,f,r,l);var s=e^!!o;d&&null!=o?s?g=!0:l[r]=!1:s&&(k.push(p),g=!0)}if(o!==b){if(d||(l=k),a=a.replace(j.match[n],""),!g)return[];break}}}if(a===h){if(null!=g)break;i.error(a)}h=a}return l},i.error=function(a){throw"Syntax error, unrecognized expression: "+a};var m,j=i.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,CLASS:/\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(['"]*)(.*?)\3|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\((even|odd|[\dn+\-]*)\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{class:"className",for:"htmlFor"},attrHandle:{href:function(a){return a.getAttribute("href")}},relative:{"+":function(a,b){var c="string"==typeof b,d=c&&!/\W/.test(b);c=c&&!d,d&&(b=b.toLowerCase()),d=0;for(var f,e=a.length;d<e;d++)if(f=a[d]){for(;(f=f.previousSibling)&&1!==f.nodeType;);a[d]=c||f&&f.nodeName.toLowerCase()===b?f||!1:f===b}c&&i.filter(b,a,!0)},">":function(a,b){var c,d="string"==typeof b,e=0,f=a.length;if(d&&!/\W/.test(b))for(b=b.toLowerCase();e<f;e++)(c=a[e])&&(c=c.parentNode,a[e]=c.nodeName.toLowerCase()===b&&c);else{for(;e<f;e++)(c=a[e])&&(a[e]=d?c.parentNode:c.parentNode===b);d&&i.filter(b,a,!0)}},"":function(b,d,f){var g,h=e++,i=c;"string"!=typeof d||/\W/.test(d)||(g=d=d.toLowerCase(),i=a),i("parentNode",d,h,b,g,f)},"~":function(b,d,f){var g,h=e++,i=c;"string"!=typeof d||/\W/.test(d)||(g=d=d.toLowerCase(),i=a),i("previousSibling",d,h,b,g,f)}},find:{ID:function(a,b,c){if(void 0!==b.getElementById&&!c)return(a=b.getElementById(a[1]))&&a.parentNode?[a]:[]},NAME:function(a,b){if(void 0!==b.getElementsByName){for(var c=[],d=b.getElementsByName(a[1]),e=0,f=d.length;e<f;e++)d[e].getAttribute("name")===a[1]&&c.push(d[e]);return 0===c.length?null:c}},TAG:function(a,b){return b.getElementsByTagName(a[1])}},preFilter:{CLASS:function(a,b,c,d,e,f){if(a=" "+a[1].replace(/\\/g,"")+" ",f)return a;f=0;for(var g;null!=(g=b[f]);f++)g&&(e^(g.className&&(" "+g.className+" ").replace(/[\t\n]/g," ").indexOf(a)>=0)?c||d.push(g):c&&(b[f]=!1));return!1},ID:function(a){return a[1].replace(/\\/g,"")},TAG:function(a){return a[1].toLowerCase()},CHILD:function(a){if("nth"===a[1]){var b=/(-?)(\d*)n((?:\+|-)?\d*)/.exec("even"===a[2]&&"2n"||"odd"===a[2]&&"2n+1"||!/\D/.test(a[2])&&"0n+"+a[2]||a[2]);a[2]=b[1]+(b[2]||1)-0,a[3]=b[3]-0}return a[0]=e++,a},ATTR:function(a,b,c,d,e,f){return b=a[1].replace(/\\/g,""),!f&&j.attrMap[b]&&(a[1]=j.attrMap[b]),"~="===a[2]&&(a[4]=" "+a[4]+" "),a},PSEUDO:function(a,b,c,e,f){if("not"===a[1]){if(!((d.exec(a[3])||"").length>1||/^\w/.test(a[3])))return a=i.filter(a[3],b,c,!0^f),c||e.push.apply(e,a),!1;a[3]=i(a[3],null,null,b)}else if(j.match.POS.test(a[0])||j.match.CHILD.test(a[0]))return!0;return a},POS:function(a){return a.unshift(!0),a}},filters:{enabled:function(a){return!1===a.disabled&&"hidden"!==a.type},disabled:function(a){return!0===a.disabled},checked:function(a){return!0===a.checked},selected:function(a){return!0===a.selected},parent:function(a){return!!a.firstChild},empty:function(a){return!a.firstChild},has:function(a,b,c){return!!i(c[3],a).length},header:function(a){return/h\d/i.test(a.nodeName)},text:function(a){return"text"===a.type},radio:function(a){return"radio"===a.type},checkbox:function(a){return"checkbox"===a.type},file:function(a){return"file"===a.type},password:function(a){return"password"===a.type},submit:function(a){return"submit"===a.type},image:function(a){return"image"===a.type},reset:function(a){return"reset"===a.type},button:function(a){return"button"===a.type||"button"===a.nodeName.toLowerCase()},input:function(a){return/input|select|textarea|button/i.test(a.nodeName)}},setFilters:{first:function(a,b){return 0===b},last:function(a,b,c,d){return b===d.length-1},even:function(a,b){return b%2==0},odd:function(a,b){return b%2==1},lt:function(a,b,c){return b<c[3]-0},gt:function(a,b,c){return b>c[3]-0},nth:function(a,b,c){return c[3]-0===b},eq:function(a,b,c){return c[3]-0===b}},filter:{PSEUDO:function(a,b,c,d){var e=b[1],f=j.filters[e];if(f)return f(a,c,b,d);if("contains"===e)return(a.textContent||a.innerText||i.getText([a])||"").indexOf(b[3])>=0;if("not"===e){for(b=b[3],c=0,d=b.length;c<d;c++)if(b[c]===a)return!1;return!0}i.error("Syntax error, unrecognized expression: "+e)},CHILD:function(a,b){var c=b[1],d=a;switch(c){case"only":case"first":for(;d=d.previousSibling;)if(1===d.nodeType)return!1;if("first"===c)return!0;d=a;case"last":for(;d=d.nextSibling;)if(1===d.nodeType)return!1;return!0;case"nth":c=b[2];var e=b[3];if(1===c&&0===e)return!0;var f=b[0],g=a.parentNode;if(g&&(g.sizcache!==f||!a.nodeIndex)){var h=0;for(d=g.firstChild;d;d=d.nextSibling)1===d.nodeType&&(d.nodeIndex=++h);g.sizcache=f}return d=a.nodeIndex-e,0===c?0===d:d%c==0&&d/c>=0}},ID:function(a,b){return 1===a.nodeType&&a.getAttribute("id")===b},TAG:function(a,b){return"*"===b&&1===a.nodeType||a.nodeName.toLowerCase()===b},CLASS:function(a,b){return(" "+(a.className||a.getAttribute("class"))+" ").indexOf(b)>-1},ATTR:function(a,b){var c=b[1];c=j.attrHandle[c]?j.attrHandle[c](a):null!=a[c]?a[c]:a.getAttribute(c);var d=c+"",e=b[2],f=b[4];return null==c?"!="===e:"="===e?d===f:"*="===e?d.indexOf(f)>=0:"~="===e?(" "+d+" ").indexOf(f)>=0:f?"!="===e?d!==f:"^="===e?0===d.indexOf(f):"$="===e?d.substr(d.length-f.length)===f:"|="===e&&(d===f||d.substr(0,f.length+1)===f+"-"):d&&!1!==c},POS:function(a,b,c,d){var e=j.setFilters[b[2]];if(e)return e(a,c,b,d)}}},k=j.match.POS,l=function(a,b){return"\\"+(b-0+1)};for(m in j.match)j.match[m]=RegExp(j.match[m].source+/(?![^\[]*\])(?![^\(]*\))/.source),j.leftMatch[m]=RegExp(/(^(?:.|\r|\n)*?)/.source+j.match[m].source.replace(/\\(\d+)/g,l));var n=function(a,b){return a=Array.prototype.slice.call(a,0),b?(b.push.apply(b,a),b):a};try{Array.prototype.slice.call(q.documentElement.childNodes,0)}catch(a){n=function(a,b){var c=0,d=b||[];if("[object Array]"===f.call(a))Array.prototype.push.apply(d,a);else if("number"==typeof a.length)for(var e=a.length;c<e;c++)d.push(a[c]);else for(;a[c];c++)d.push(a[c]);return d}}var o,p;q.documentElement.compareDocumentPosition?o=function(a,b){return a===b?(g=!0,0):a.compareDocumentPosition&&b.compareDocumentPosition?4&a.compareDocumentPosition(b)?-1:1:a.compareDocumentPosition?-1:1}:(o=function(a,b){var c,d,e=[],f=[];c=a.parentNode,d=b.parentNode;var h=c;if(a===b)return g=!0,0;if(c===d)return p(a,b);if(!c)return-1;if(!d)return 1;for(;h;)e.unshift(h),h=h.parentNode;for(h=d;h;)f.unshift(h),h=h.parentNode;for(c=e.length,d=f.length,h=0;h<c&&h<d;h++)if(e[h]!==f[h])return p(e[h],f[h]);return h===c?p(a,f[h],-1):p(e[h],b,1)},p=function(a,b,c){if(a===b)return c;for(a=a.nextSibling;a;){if(a===b)return-1;a=a.nextSibling}return 1}),i.getText=function(a){for(var c,b="",d=0;a[d];d++)c=a[d],3===c.nodeType||4===c.nodeType?b+=c.nodeValue:8!==c.nodeType&&(b+=i.getText(c.childNodes));return b},function(){var a=q.createElement("div"),c="script"+(new Date).getTime(),d=q.documentElement;a.innerHTML="<a name='"+c+"'/>",d.insertBefore(a,d.firstChild),q.getElementById(c)&&(j.find.ID=function(a,c,d){if(void 0!==c.getElementById&&!d)return(c=c.getElementById(a[1]))?c.id===a[1]||void 0!==c.getAttributeNode&&c.getAttributeNode("id").nodeValue===a[1]?[c]:b:[]},j.filter.ID=function(a,b){var c=void 0!==a.getAttributeNode&&a.getAttributeNode("id");return 1===a.nodeType&&c&&c.nodeValue===b}),d.removeChild(a),d=a=null}(),function(){var a=q.createElement("div");a.appendChild(q.createComment("")),a.getElementsByTagName("*").length>0&&(j.find.TAG=function(a,b){var c=b.getElementsByTagName(a[1]);if("*"===a[1]){for(var d=[],e=0;c[e];e++)1===c[e].nodeType&&d.push(c[e]);c=d}return c}),a.innerHTML="<a href='#'></a>",a.firstChild&&void 0!==a.firstChild.getAttribute&&"#"!==a.firstChild.getAttribute("href")&&(j.attrHandle.href=function(a){return a.getAttribute("href",2)}),a=null}(),q.querySelectorAll&&function(){var a=i,b=q.createElement("div");if(b.innerHTML="<p class='TEST'></p>",!b.querySelectorAll||0!==b.querySelectorAll(".TEST").length){i=function(b,c,d,e){if(c=c||q,b.replace&&(b=b.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']")),!e&&!i.isXML(c))if(9===c.nodeType)try{return n(c.querySelectorAll(b),d)}catch(a){}else if(1===c.nodeType&&"object"!==c.nodeName.toLowerCase()){var f=c.getAttribute("id"),g=f||"__sizzle__";f||c.setAttribute("id",g);try{return n(c.querySelectorAll("#"+g+" "+b),d)}catch(a){}finally{f||c.removeAttribute("id")}}return a(b,c,d,e)};for(var c in a)i[c]=a[c];b=null}}(),function(){var a=q.documentElement,b=a.matchesSelector||a.mozMatchesSelector||a.webkitMatchesSelector||a.msMatchesSelector,c=!1;try{b.call(q.documentElement,"[test!='']:sizzle")}catch(a){c=!0}b&&(i.matchesSelector=function(a,d){if(d.replace&&(d=d.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']")),!i.isXML(a))try{if(c||!j.match.PSEUDO.test(d)&&!/!=/.test(d))return b.call(a,d)}catch(a){}return i(d,null,null,[a]).length>0})}(),function(){var a=q.createElement("div");a.innerHTML="<div class='test e'></div><div class='test'></div>",a.getElementsByClassName&&0!==a.getElementsByClassName("e").length&&(a.lastChild.className="e",1!==a.getElementsByClassName("e").length&&(j.order.splice(1,0,"CLASS"),j.find.CLASS=function(a,b,c){if(void 0!==b.getElementsByClassName&&!c)return b.getElementsByClassName(a[1])},a=null))}(),i.contains=q.documentElement.contains?function(a,b){return a!==b&&(!a.contains||a.contains(b))}:q.documentElement.compareDocumentPosition?function(a,b){return!!(16&a.compareDocumentPosition(b))}:function(){return!1},i.isXML=function(a){return!!(a=(a?a.ownerDocument||a:0).documentElement)&&"HTML"!==a.nodeName};var s=function(a,b){for(var c,d=[],e="",f=b.nodeType?[b]:b;c=j.match.PSEUDO.exec(a);)e+=c[0],a=a.replace(j.match.PSEUDO,"");a=j.relative[a]?a+"*":a,c=0;for(var g=f.length;c<g;c++)i(a,f[c],d);return i.filter(e,d)};r.find=i,r.expr=i.selectors,r.expr[":"]=r.expr.filters,r.unique=i.uniqueSort,r.text=i.getText,r.isXMLDoc=i.isXML,r.contains=i.contains}();var P=/Until$/,Q=/^(?:parents|prevUntil|prevAll)/,R=/,/,S=/^.[^:#\[\.,]*$/,T=Array.prototype.slice,U=r.expr.match.POS;r.fn.extend({find:function(a){for(var b=this.pushStack("","find",a),c=0,d=0,e=this.length;d<e;d++)if(c=b.length,r.find(a,this[d],b),d>0)for(var f=c;f<b.length;f++)for(var g=0;g<c;g++)if(b[g]===b[f]){b.splice(f--,1);break}return b},has:function(a){var b=r(a);return this.filter(function(){for(var a=0,c=b.length;a<c;a++)if(r.contains(this,b[a]))return!0})},not:function(a){return this.pushStack(i(this,a,!1),"not",a)},filter:function(a){return this.pushStack(i(this,a,!0),"filter",a)},is:function(a){return!!a&&r.filter(a,this).length>0},closest:function(a,b){var d,e,c=[],f=this[0];if(r.isArray(a)){var g,h={},i=1;if(f&&a.length){for(d=0,e=a.length;d<e;d++)g=a[d],h[g]||(h[g]=r.expr.match.POS.test(g)?r(g,b||this.context):g);for(;f&&f.ownerDocument&&f!==b;){for(g in h)d=h[g],(d.jquery?d.index(f)>-1:r(f).is(d))&&c.push({selector:g,elem:f,level:i});f=f.parentNode,i++}}return c}for(g=U.test(a)?r(a,b||this.context):null,d=0,e=this.length;d<e;d++)for(f=this[d];f;){if(g?g.index(f)>-1:r.find.matchesSelector(f,a)){c.push(f);break}if(!(f=f.parentNode)||!f.ownerDocument||f===b)break}return c=c.length>1?r.unique(c):c,this.pushStack(c,"closest",a)},index:function(a){return a&&"string"!=typeof a?r.inArray(a.jquery?a[0]:a,this):r.inArray(this[0],a?r(a):this.parent().children())},add:function(a,b){var c="string"==typeof a?r(a,b||this.context):r.makeArray(a),d=r.merge(this.get(),c);return this.pushStack(c[0]&&c[0].parentNode&&11!==c[0].parentNode.nodeType&&d[0]&&d[0].parentNode&&11!==d[0].parentNode.nodeType?r.unique(d):d)},andSelf:function(){return this.add(this.prevObject)}}),r.each({parent:function(a){return(a=a.parentNode)&&11!==a.nodeType?a:null},parents:function(a){return r.dir(a,"parentNode")},parentsUntil:function(a,b,c){return r.dir(a,"parentNode",c)},next:function(a){return r.nth(a,2,"nextSibling")},prev:function(a){return r.nth(a,2,"previousSibling")},nextAll:function(a){return r.dir(a,"nextSibling")},prevAll:function(a){return r.dir(a,"previousSibling")},nextUntil:function(a,b,c){return r.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return r.dir(a,"previousSibling",c)},siblings:function(a){return r.sibling(a.parentNode.firstChild,a)},children:function(a){return r.sibling(a.firstChild)},contents:function(a){return r.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:r.makeArray(a.childNodes)}},function(a,b){r.fn[a]=function(c,d){var e=r.map(this,b,c);return P.test(a)||(d=c),d&&"string"==typeof d&&(e=r.filter(d,e)),e=this.length>1?r.unique(e):e,(this.length>1||R.test(d))&&Q.test(a)&&(e=e.reverse()),this.pushStack(e,a,T.call(arguments).join(","))}}),r.extend({filter:function(a,b,c){return c&&(a=":not("+a+")"),1===b.length?r.find.matchesSelector(b[0],a)?[b[0]]:[]:r.find.matches(a,b)},dir:function(a,c,d){var e=[];for(a=a[c];a&&9!==a.nodeType&&(d===b||1!==a.nodeType||!r(a).is(d));)1===a.nodeType&&e.push(a),a=a[c];return e},nth:function(a,b,c){b=b||1;for(var d=0;a&&(1!==a.nodeType||++d!==b);a=a[c]);return a},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}});var V=/ jQuery\d+="(?:\d+|null)"/g,W=/^\s+/,X=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,Y=/<([\w:]+)/,Z=/<tbody/i,$=/<|&#?\w+;/,_=/<(?:script|object|embed|option|style)/i,aa=/checked\s*(?:[^=]|=\s*.checked.)/i,ba=/\=([^="'>\s]+\/)>/g,ca={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]};ca.optgroup=ca.option,ca.tbody=ca.tfoot=ca.colgroup=ca.caption=ca.thead,ca.th=ca.td,r.support.htmlSerialize||(ca._default=[1,"div<div>","</div>"]),r.fn.extend({text:function(a){return r.isFunction(a)?this.each(function(b){var c=r(this);c.text(a.call(this,b,c.text()))}):"object"!=typeof a&&a!==b?this.empty().append((this[0]&&this[0].ownerDocument||q).createTextNode(a)):r.text(this)},wrapAll:function(a){if(r.isFunction(a))return this.each(function(b){r(this).wrapAll(a.call(this,b))});if(this[0]){var b=r(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){for(var a=this;a.firstChild&&1===a.firstChild.nodeType;)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return r.isFunction(a)?this.each(function(b){r(this).wrapInner(a.call(this,b))}):this.each(function(){var b=r(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){return this.each(function(){r(this).wrapAll(a)})},unwrap:function(){return this.parent().each(function(){r.nodeName(this,"body")||r(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){1===this.nodeType&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){1===this.nodeType&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=r(arguments[0]);return a.push.apply(a,this.toArray()),this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=this.pushStack(this,"after",arguments);return a.push.apply(a,r(arguments[0]).toArray()),a}},remove:function(a,b){for(var d,c=0;null!=(d=this[c]);c++)a&&!r.filter(a,[d]).length||(b||1!==d.nodeType||(r.cleanData(d.getElementsByTagName("*")),r.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d));return this},empty:function(){for(var b,a=0;null!=(b=this[a]);a++)for(1===b.nodeType&&r.cleanData(b.getElementsByTagName("*"));b.firstChild;)b.removeChild(b.firstChild);return this},clone:function(a){var b=this.map(function(){if(r.support.noCloneEvent||r.isXMLDoc(this))return this.cloneNode(!0);var a=this.outerHTML,b=this.ownerDocument;return a||(a=b.createElement("div"),a.appendChild(this.cloneNode(!0)),a=a.innerHTML),r.clean([a.replace(V,"").replace(ba,'="$1">').replace(W,"")],b)[0]});return!0===a&&(j(this,b),j(this.find("*"),b.find("*"))),b},html:function(a){if(a===b)return this[0]&&1===this[0].nodeType?this[0].innerHTML.replace(V,""):null;if("string"!=typeof a||_.test(a)||!r.support.leadingWhitespace&&W.test(a)||ca[(Y.exec(a)||["",""])[1].toLowerCase()])r.isFunction(a)?this.each(function(b){var c=r(this);c.html(a.call(this,b,c.html()))}):this.empty().append(a);else{a=a.replace(X,"<$1></$2>");try{for(var c=0,d=this.length;c<d;c++)1===this[c].nodeType&&(r.cleanData(this[c].getElementsByTagName("*")),this[c].innerHTML=a)}catch(b){this.empty().append(a)}}return this},replaceWith:function(a){return this[0]&&this[0].parentNode?r.isFunction(a)?this.each(function(b){var c=r(this),d=c.html();c.replaceWith(a.call(this,b,d))}):("string"!=typeof a&&(a=r(a).detach()),this.each(function(){var b=this.nextSibling,c=this.parentNode;r(this).remove(),b?r(b).before(a):r(c).append(a)})):this.pushStack(r(r.isFunction(a)?a():a),"replaceWith",a)},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){var e,f,g,h=a[0],i=[];if(!r.support.checkClone&&3===arguments.length&&"string"==typeof h&&aa.test(h))return this.each(function(){r(this).domManip(a,c,d,!0)});if(r.isFunction(h))return this.each(function(e){var f=r(this);a[0]=h.call(this,e,c?f.html():b),f.domManip(a,c,d)});if(this[0]){if(e=h&&h.parentNode,e=r.support.parentNode&&e&&11===e.nodeType&&e.childNodes.length===this.length?{fragment:e}:r.buildFragment(a,this,i),g=e.fragment,f=1===g.childNodes.length?g=g.firstChild:g.firstChild){c=c&&r.nodeName(f,"tr"),f=0;for(var j=this.length;f<j;f++)d.call(c&&r.nodeName(this[f],"table")?this[f].getElementsByTagName("tbody")[0]||this[f].appendChild(this[f].ownerDocument.createElement("tbody")):this[f],f>0||e.cacheable||this.length>1?g.cloneNode(!0):g)}i.length&&r.each(i,k)}return this}}),r.buildFragment=function(a,b,c){var d,e,f;return b=b&&b[0]?b[0].ownerDocument||b[0]:q,1===a.length&&"string"==typeof a[0]&&a[0].length<512&&b===q&&!_.test(a[0])&&(r.support.checkClone||!aa.test(a[0]))&&(e=!0,(f=r.fragments[a[0]])&&1!==f&&(d=f)),d||(d=b.createDocumentFragment(),r.clean(a,b,d,c)),e&&(r.fragments[a[0]]=f?d:1),{fragment:d,cacheable:e}},r.fragments={},r.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){r.fn[a]=function(c){var d=[];c=r(c);var e=1===this.length&&this[0].parentNode;if(e&&11===e.nodeType&&1===e.childNodes.length&&1===c.length)return c[b](this[0]),this;e=0;for(var f=c.length;e<f;e++){var g=(e>0?this.clone(!0):this).get();r(c[e])[b](g),d=d.concat(g)}return this.pushStack(d,a,c.selector)}}),r.extend({clean:function(a,b,c,d){b=b||q,void 0===b.createElement&&(b=b.ownerDocument||b[0]&&b[0].ownerDocument||q);for(var g,e=[],f=0;null!=(g=a[f]);f++)if("number"==typeof g&&(g+=""),g){if("string"!=typeof g||$.test(g)){if("string"==typeof g){g=g.replace(X,"<$1></$2>");var h=(Y.exec(g)||["",""])[1].toLowerCase(),i=ca[h]||ca._default,j=i[0],k=b.createElement("div");for(k.innerHTML=i[1]+g+i[2];j--;)k=k.lastChild;if(!r.support.tbody)for(j=Z.test(g),h="table"!==h||j?"<table>"!==i[1]||j?[]:k.childNodes:k.firstChild&&k.firstChild.childNodes,i=h.length-1;i>=0;--i)r.nodeName(h[i],"tbody")&&!h[i].childNodes.length&&h[i].parentNode.removeChild(h[i]);!r.support.leadingWhitespace&&W.test(g)&&k.insertBefore(b.createTextNode(W.exec(g)[0]),k.firstChild),g=k.childNodes}}else g=b.createTextNode(g);g.nodeType?e.push(g):e=r.merge(e,g)}if(c)for(f=0;e[f];f++)!d||!r.nodeName(e[f],"script")||e[f].type&&"text/javascript"!==e[f].type.toLowerCase()?(1===e[f].nodeType&&e.splice.apply(e,[f+1,0].concat(r.makeArray(e[f].getElementsByTagName("script")))),c.appendChild(e[f])):d.push(e[f].parentNode?e[f].parentNode.removeChild(e[f]):e[f]);return e},cleanData:function(a){for(var b,c,h,d=r.cache,e=r.event.special,f=r.support.deleteExpando,g=0;null!=(h=a[g]);g++)if((!h.nodeName||!r.noData[h.nodeName.toLowerCase()])&&(c=h[r.expando])){if((b=d[c])&&b.events)for(var i in b.events)e[i]?r.event.remove(h,i):r.removeEvent(h,i,b.handle);f?delete h[r.expando]:h.removeAttribute&&h.removeAttribute(r.expando),delete d[c]}}});var ma,na,oa,da=/alpha\([^)]*\)/i,ea=/opacity=([^)]*)/,fa=/-([a-z])/gi,ga=/([A-Z])/g,ha=/^-?\d+(?:px)?$/i,ia=/^-?\d/,ja={position:"absolute",visibility:"hidden",display:"block"},ka=["Left","Right"],la=["Top","Bottom"],pa=function(a,b){return b.toUpperCase()};r.fn.css=function(a,c){return 2===arguments.length&&c===b?this:r.access(this,a,c,!0,function(a,c,d){return d!==b?r.style(a,c,d):r.css(a,c)})},r.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=ma(a,"opacity","opacity");return""===c?"1":c}return a.style.opacity}}},cssNumber:{zIndex:!0,fontWeight:!0,opacity:!0,zoom:!0,lineHeight:!0},cssProps:{float:r.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var f,g=r.camelCase(c),h=a.style,i=r.cssHooks[g];if(c=r.cssProps[g]||g,d===b)return i&&"get"in i&&(f=i.get(a,!1,e))!==b?f:h[c];if(!("number"==typeof d&&isNaN(d)||null==d||("number"!=typeof d||r.cssNumber[g]||(d+="px"),i&&"set"in i&&(d=i.set(a,d))===b)))try{h[c]=d}catch(a){}}},css:function(a,c,d){var e,f=r.camelCase(c),g=r.cssHooks[f];return c=r.cssProps[f]||f,g&&"get"in g&&(e=g.get(a,!0,d))!==b?e:ma?ma(a,c,f):void 0},swap:function(a,b,c){var e,d={};for(e in b)d[e]=a.style[e],a.style[e]=b[e];c.call(a);for(e in b)a.style[e]=d[e]},camelCase:function(a){return a.replace(fa,pa)}}),r.curCSS=r.css,r.each(["height","width"],function(a,b){r.cssHooks[b]={get:function(a,c,d){var e;if(c)return 0!==a.offsetWidth?e=l(a,b,d):r.swap(a,ja,function(){e=l(a,b,d)}),e<=0&&(e=ma(a,b,b),"0px"===e&&oa&&(e=oa(a,b,b)),null!=e)?""===e||"auto"===e?"0px":e:e<0||null==e?(e=a.style[b],""===e||"auto"===e?"0px":e):"string"==typeof e?e:e+"px"},set:function(a,b){return ha.test(b)?(b=parseFloat(b))>=0?b+"px":void 0:b}}}),r.support.opacity||(r.cssHooks.opacity={get:function(a,b){return ea.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?parseFloat(RegExp.$1)/100+"":b?"1":""},set:function(a,b){var c=a.style;c.zoom=1;var d=r.isNaN(b)?"":"alpha(opacity="+100*b+")",e=c.filter||"";c.filter=da.test(e)?e.replace(da,d):c.filter+" "+d}}),q.defaultView&&q.defaultView.getComputedStyle&&(na=function(a,c,d){var e;return d=d.replace(ga,"-$1").toLowerCase(),(c=a.ownerDocument.defaultView)?((c=c.getComputedStyle(a,null))&&(""!==(e=c.getPropertyValue(d))||r.contains(a.ownerDocument.documentElement,a)||(e=r.style(a,d))),e):b}),q.documentElement.currentStyle&&(oa=function(a,b){var c,d,e=a.currentStyle&&a.currentStyle[b],f=a.style;return!ha.test(e)&&ia.test(e)&&(c=f.left,d=a.runtimeStyle.left,a.runtimeStyle.left=a.currentStyle.left,f.left="fontSize"===b?"1em":e||0,e=f.pixelLeft+"px",f.left=c,a.runtimeStyle.left=d),""===e?"auto":e}),ma=na||oa,r.expr&&r.expr.filters&&(r.expr.filters.hidden=function(a){var b=a.offsetHeight;return 0===a.offsetWidth&&0===b||!r.support.reliableHiddenOffsets&&"none"===(a.style.display||r.css(a,"display"))},r.expr.filters.visible=function(a){return!r.expr.filters.hidden(a)});var qa=r.now(),ra=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,sa=/^(?:select|textarea)/i,ta=/^(?:color|date|datetime|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,ua=/^(?:GET|HEAD)$/,va=/\[\]$/,wa=/\=\?(&|$)/,xa=/\?/,ya=/([?&])_=[^&]*/,za=/^(\w+:)?\/\/([^\/?#]+)/,Aa=/%20/g,Ba=/#.*$/,Ca=r.fn.load;r.fn.extend({load:function(a,b,c){if("string"!=typeof a&&Ca)return Ca.apply(this,arguments);if(!this.length)return this;var d=a.indexOf(" ");if(d>=0){var e=a.slice(d,a.length);a=a.slice(0,d)}d="GET",b&&(r.isFunction(b)?(c=b,b=null):"object"==typeof b&&(b=r.param(b,r.ajaxSettings.traditional),d="POST"));var f=this;return r.ajax({url:a,type:d,dataType:"html",data:b,complete:function(a,b){"success"!==b&&"notmodified"!==b||f.html(e?r("<div>").append(a.responseText.replace(ra,"")).find(e):a.responseText),c&&f.each(c,[a.responseText,b,a])}}),this},serialize:function(){return r.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?r.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||sa.test(this.nodeName)||ta.test(this.type))}).map(function(a,b){var c=r(this).val();return null==c?null:r.isArray(c)?r.map(c,function(a){return{name:b.name,value:a}}):{name:b.name,value:c}}).get()}}),r.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){r.fn[b]=function(a){return this.bind(b,a)}}),r.extend({get:function(a,b,c,d){return r.isFunction(b)&&(d=d||c,c=b,b=null),r.ajax({type:"GET",url:a,data:b,success:c,dataType:d})},getScript:function(a,b){return r.get(a,null,b,"script")},getJSON:function(a,b,c){return r.get(a,b,c,"json")},post:function(a,b,c,d){return r.isFunction(b)&&(d=d||c,c=b,b={}),r.ajax({type:"POST",url:a,data:b,success:c,dataType:d})},ajaxSetup:function(a){r.extend(r.ajaxSettings,a)},ajaxSettings:{url:location.href,global:!0,type:"GET",contentType:"application/x-www-form-urlencoded",processData:!0,async:!0,xhr:function(){return new a.XMLHttpRequest},accepts:{xml:"application/xml, text/xml",html:"text/html",script:"text/javascript, application/javascript",json:"application/json, text/javascript",text:"text/plain",_default:"*/*"}},ajax:function(c){var e,f,g,d=r.extend(!0,{},r.ajaxSettings,c),h=d.type.toUpperCase(),i=ua.test(h);if(d.url=d.url.replace(Ba,""),d.context=c&&null!=c.context?c.context:d,d.data&&d.processData&&"string"!=typeof d.data&&(d.data=r.param(d.data,d.traditional)),"jsonp"===d.dataType&&("GET"===h?wa.test(d.url)||(d.url+=(xa.test(d.url)?"&":"?")+(d.jsonp||"callback")+"=?"):d.data&&wa.test(d.data)||(d.data=(d.data?d.data+"&":"")+(d.jsonp||"callback")+"=?"),d.dataType="json"),"json"===d.dataType&&(d.data&&wa.test(d.data)||wa.test(d.url))){e=d.jsonpCallback||"jsonp"+qa++,d.data&&(d.data=(d.data+"").replace(wa,"="+e+"$1")),d.url=d.url.replace(wa,"="+e+"$1"),d.dataType="script";var j=a[e];a[e]=function(c){if(r.isFunction(j))j(c);else{a[e]=b;try{delete a[e]}catch(a){}}g=c,r.handleSuccess(d,s,f,g),r.handleComplete(d,s,f,g),m&&m.removeChild(n)}}if("script"===d.dataType&&null===d.cache&&(d.cache=!1),!1===d.cache&&i){var k=r.now(),l=d.url.replace(ya,"$1_="+k);d.url=l+(l===d.url?(xa.test(d.url)?"&":"?")+"_="+k:"")}if(d.data&&i&&(d.url+=(xa.test(d.url)?"&":"?")+d.data),d.global&&0==r.active++&&r.event.trigger("ajaxStart"),k=(k=za.exec(d.url))&&(k[1]&&k[1].toLowerCase()!==location.protocol||k[2].toLowerCase()!==location.host),"script"===d.dataType&&"GET"===h&&k){var m=q.getElementsByTagName("head")[0]||q.documentElement,n=q.createElement("script");if(d.scriptCharset&&(n.charset=d.scriptCharset),n.src=d.url,!e){var o=!1;n.onload=n.onreadystatechange=function(){o||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState||(o=!0,r.handleSuccess(d,s,f,g),r.handleComplete(d,s,f,g),n.onload=n.onreadystatechange=null,m&&n.parentNode&&m.removeChild(n))}}return m.insertBefore(n,m.firstChild),b}var p=!1,s=d.xhr();if(s){d.username?s.open(h,d.url,d.async,d.username,d.password):s.open(h,d.url,d.async);try{(null!=d.data&&!i||c&&c.contentType)&&s.setRequestHeader("Content-Type",d.contentType),d.ifModified&&(r.lastModified[d.url]&&s.setRequestHeader("If-Modified-Since",r.lastModified[d.url]),r.etag[d.url]&&s.setRequestHeader("If-None-Match",r.etag[d.url])),k||s.setRequestHeader("X-Requested-With","XMLHttpRequest"),s.setRequestHeader("Accept",d.dataType&&d.accepts[d.dataType]?d.accepts[d.dataType]+", */*; q=0.01":d.accepts._default)}catch(a){}if(d.beforeSend&&!1===d.beforeSend.call(d.context,s,d))return d.global&&1==r.active--&&r.event.trigger("ajaxStop"),s.abort(),!1;d.global&&r.triggerGlobal(d,"ajaxSend",[s,d]);var t=s.onreadystatechange=function(a){if(s&&0!==s.readyState&&"abort"!==a){if(!p&&s&&(4===s.readyState||"timeout"===a)){p=!0,s.onreadystatechange=r.noop,f="timeout"===a?"timeout":r.httpSuccess(s)?d.ifModified&&r.httpNotModified(s,d.url)?"notmodified":"success":"error";var b;if("success"===f)try{g=r.httpData(s,d.dataType,d)}catch(a){f="parsererror",b=a}"success"===f||"notmodified"===f?e||r.handleSuccess(d,s,f,g):r.handleError(d,s,f,b),e||r.handleComplete(d,s,f,g),"timeout"===a&&s.abort(),d.async&&(s=null)}}else p||r.handleComplete(d,s,f,g),p=!0,s&&(s.onreadystatechange=r.noop)};try{var u=s.abort;s.abort=function(){s&&Function.prototype.call.call(u,s),t("abort")}}catch(a){}d.async&&d.timeout>0&&setTimeout(function(){s&&!p&&t("timeout")},d.timeout);try{s.send(i||null==d.data?null:d.data)}catch(a){r.handleError(d,s,null,a),r.handleComplete(d,s,f,g)}return d.async||t(),s}},param:function(a,c){var d=[],e=function(a,b){b=r.isFunction(b)?b():b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(c===b&&(c=r.ajaxSettings.traditional),r.isArray(a)||a.jquery)r.each(a,function(){e(this.name,this.value)});else for(var f in a)m(f,a[f],c,e);return d.join("&").replace(Aa,"+")}}),r.extend({active:0,lastModified:{},etag:{},handleError:function(a,b,c,d){a.error&&a.error.call(a.context,b,c,d),a.global&&r.triggerGlobal(a,"ajaxError",[b,a,d])},handleSuccess:function(a,b,c,d){a.success&&a.success.call(a.context,d,c,b),a.global&&r.triggerGlobal(a,"ajaxSuccess",[b,a])},handleComplete:function(a,b,c){a.complete&&a.complete.call(a.context,b,c),a.global&&r.triggerGlobal(a,"ajaxComplete",[b,a]),a.global&&1==r.active--&&r.event.trigger("ajaxStop")},triggerGlobal:function(a,b,c){(a.context&&null==a.context.url?r(a.context):r.event).trigger(b,c)},httpSuccess:function(a){try{return!a.status&&"file:"===location.protocol||a.status>=200&&a.status<300||304===a.status||1223===a.status}catch(a){}return!1},httpNotModified:function(a,b){var c=a.getResponseHeader("Last-Modified"),d=a.getResponseHeader("Etag");return c&&(r.lastModified[b]=c),d&&(r.etag[b]=d),304===a.status},httpData:function(a,b,c){var d=a.getResponseHeader("content-type")||"",e="xml"===b||!b&&d.indexOf("xml")>=0;return a=e?a.responseXML:a.responseText,e&&"parsererror"===a.documentElement.nodeName&&r.error("parsererror"),c&&c.dataFilter&&(a=c.dataFilter(a,b)),"string"==typeof a&&("json"===b||!b&&d.indexOf("json")>=0?a=r.parseJSON(a):("script"===b||!b&&d.indexOf("javascript")>=0)&&r.globalEval(a)),a}}),a.ActiveXObject&&(r.ajaxSettings.xhr=function(){if("file:"!==a.location.protocol)try{return new a.XMLHttpRequest}catch(a){}try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(a){}}),r.support.ajax=!!r.ajaxSettings.xhr();var Ga,Da={},Ea=/^(?:toggle|show|hide)$/,Fa=/^([+\-]=)?([\d+.\-]+)(.*)$/,Ha=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]];r.fn.extend({show:function(a,b,c){if(a||0===a)return this.animate(n("show",3),a,b,c);c=0;for(var d=this.length;c<d;c++)a=this[c],b=a.style.display,r.data(a,"olddisplay")||"none"!==b||(b=a.style.display=""),""===b&&"none"===r.css(a,"display")&&r.data(a,"olddisplay",o(a.nodeName));for(c=0;c<d;c++)a=this[c],""!==(b=a.style.display)&&"none"!==b||(a.style.display=r.data(a,"olddisplay")||"");return this},hide:function(a,b,c){if(a||0===a)return this.animate(n("hide",3),a,b,c);for(a=0,b=this.length;a<b;a++)"none"!==(c=r.css(this[a],"display"))&&r.data(this[a],"olddisplay",c);for(a=0;a<b;a++)this[a].style.display="none";return this},_toggle:r.fn.toggle,toggle:function(a,b,c){var d="boolean"==typeof a;return r.isFunction(a)&&r.isFunction(b)?this._toggle.apply(this,arguments):null==a||d?this.each(function(){var b=d?a:r(this).is(":hidden");r(this)[b?"show":"hide"]()}):this.animate(n("toggle",3),a,b,c),this},fadeTo:function(a,b,c,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=r.speed(b,c,d);return r.isEmptyObject(a)?this.each(e.complete):this[!1===e.queue?"each":"queue"](function(){var c,b=r.extend({},e),d=1===this.nodeType,f=d&&r(this).is(":hidden"),g=this;for(c in a){var h=r.camelCase(c);if(c!==h&&(a[h]=a[c],delete a[c],c=h),"hide"===a[c]&&f||"show"===a[c]&&!f)return b.complete.call(this);!d||"height"!==c&&"width"!==c||(b.overflow=[this.style.overflow,this.style.overflowX,this.style.overflowY],"inline"===r.css(this,"display")&&"none"===r.css(this,"float")&&(r.support.inlineBlockNeedsLayout?"inline"===o(this.nodeName)?this.style.display="inline-block":(this.style.display="inline",this.style.zoom=1):this.style.display="inline-block")),r.isArray(a[c])&&((b.specialEasing=b.specialEasing||{})[c]=a[c][1],a[c]=a[c][0])}return null!=b.overflow&&(this.style.overflow="hidden"),b.curAnim=r.extend({},a),r.each(a,function(c,d){var e=new r.fx(g,b,c);if(Ea.test(d))e["toggle"===d?f?"show":"hide":d](a);else{var h=Fa.exec(d),i=e.cur()||0;if(h){var j=parseFloat(h[2]),k=h[3]||"px";"px"!==k&&(r.style(g,c,(j||1)+k),i=(j||1)/e.cur()*i,r.style(g,c,i+k)),h[1]&&(j=("-="===h[1]?-1:1)*j+i),e.custom(i,j,k)}else e.custom(i,d,"")}}),!0})},stop:function(a,b){var c=r.timers;return a&&this.queue([]),this.each(function(){for(var a=c.length-1;a>=0;a--)c[a].elem===this&&(b&&c[a](!0),c.splice(a,1))}),b||this.dequeue(),this}}),r.each({slideDown:n("show",1),slideUp:n("hide",1),slideToggle:n("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){r.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),r.extend({speed:function(a,b,c){var d=a&&"object"==typeof a?r.extend({},a):{complete:c||!c&&b||r.isFunction(a)&&a,duration:a,easing:c&&b||b&&!r.isFunction(b)&&b};return d.duration=r.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in r.fx.speeds?r.fx.speeds[d.duration]:r.fx.speeds._default,d.old=d.complete,d.complete=function(){!1!==d.queue&&r(this).dequeue(),r.isFunction(d.old)&&d.old.call(this)},d},easing:{linear:function(a,b,c,d){return c+d*a},swing:function(a,b,c,d){return(-Math.cos(a*Math.PI)/2+.5)*d+c}},timers:[],fx:function(a,b,c){this.options=b,this.elem=a,this.prop=c,b.orig||(b.orig={})}}),r.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this),(r.fx.step[this.prop]||r.fx.step._default)(this)},cur:function(){if(null!=this.elem[this.prop]&&(!this.elem.style||null==this.elem.style[this.prop]))return this.elem[this.prop];var a=parseFloat(r.css(this.elem,this.prop));return a&&a>-1e4?a:0},custom:function(a,b,c){function d(a){return e.step(a)}var e=this,f=r.fx;this.startTime=r.now(),this.start=a,this.end=b,this.unit=c||this.unit||"px",this.now=this.start,this.pos=this.state=0,d.elem=this.elem,d()&&r.timers.push(d)&&!Ga&&(Ga=setInterval(f.tick,f.interval))},show:function(){this.options.orig[this.prop]=r.style(this.elem,this.prop),this.options.show=!0,this.custom("width"===this.prop||"height"===this.prop?1:0,this.cur()),r(this.elem).show()},hide:function(){this.options.orig[this.prop]=r.style(this.elem,this.prop),this.options.hide=!0,this.custom(this.cur(),0)},step:function(a){var b=r.now(),c=!0;if(a||b>=this.options.duration+this.startTime){this.now=this.end,this.pos=this.state=1,this.update(),this.options.curAnim[this.prop]=!0;for(var d in this.options.curAnim)!0!==this.options.curAnim[d]&&(c=!1);if(c){if(null!=this.options.overflow&&!r.support.shrinkWrapBlocks){var e=this.elem,f=this.options;r.each(["","X","Y"],function(a,b){e.style["overflow"+b]=f.overflow[a]})}if(this.options.hide&&r(this.elem).hide(),this.options.hide||this.options.show)for(var g in this.options.curAnim)r.style(this.elem,g,this.options.orig[g]);this.options.complete.call(this.elem)}return!1}return a=b-this.startTime,this.state=a/this.options.duration,b=this.options.easing||(r.easing.swing?"swing":"linear"),this.pos=r.easing[this.options.specialEasing&&this.options.specialEasing[this.prop]||b](this.state,a,0,1,this.options.duration),this.now=this.start+(this.end-this.start)*this.pos,this.update(),!0}},r.extend(r.fx,{tick:function(){for(var a=r.timers,b=0;b<a.length;b++)a[b]()||a.splice(b--,1);a.length||r.fx.stop()},interval:13,stop:function(){clearInterval(Ga),Ga=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){r.style(a.elem,"opacity",a.now)},_default:function(a){a.elem.style&&null!=a.elem.style[a.prop]?a.elem.style[a.prop]=("width"===a.prop||"height"===a.prop?Math.max(0,a.now):a.now)+a.unit:a.elem[a.prop]=a.now}}}),r.expr&&r.expr.filters&&(r.expr.filters.animated=function(a){return r.grep(r.timers,function(b){return a===b.elem}).length});var Ia=/^t(?:able|d|h)$/i,Ja=/^(?:body|html)$/i;r.fn.offset="getBoundingClientRect"in q.documentElement?function(a){var c,b=this[0];if(a)return this.each(function(b){r.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return r.offset.bodyOffset(b);try{c=b.getBoundingClientRect()}catch(a){}var d=b.ownerDocument,e=d.documentElement;return c&&r.contains(e,b)?(b=d.body,d=p(d),{top:c.top+(d.pageYOffset||r.support.boxModel&&e.scrollTop||b.scrollTop)-(e.clientTop||b.clientTop||0),left:c.left+(d.pageXOffset||r.support.boxModel&&e.scrollLeft||b.scrollLeft)-(e.clientLeft||b.clientLeft||0)}):c||{top:0,left:0}}:function(a){var b=this[0];if(a)return this.each(function(b){r.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return r.offset.bodyOffset(b);r.offset.initialize();var c,d=b.offsetParent,e=b.ownerDocument,f=e.documentElement,g=e.body;c=(e=e.defaultView)?e.getComputedStyle(b,null):b.currentStyle;for(var h=b.offsetTop,i=b.offsetLeft;(b=b.parentNode)&&b!==g&&b!==f&&(!r.offset.supportsFixedPosition||"fixed"!==c.position);)c=e?e.getComputedStyle(b,null):b.currentStyle,h-=b.scrollTop,i-=b.scrollLeft,b===d&&(h+=b.offsetTop,i+=b.offsetLeft,!r.offset.doesNotAddBorder||r.offset.doesAddBorderForTableAndCells&&Ia.test(b.nodeName)||(h+=parseFloat(c.borderTopWidth)||0,i+=parseFloat(c.borderLeftWidth)||0),d=b.offsetParent),r.offset.subtractsBorderForOverflowNotVisible&&"visible"!==c.overflow&&(h+=parseFloat(c.borderTopWidth)||0,i+=parseFloat(c.borderLeftWidth)||0),c=c;return"relative"!==c.position&&"static"!==c.position||(h+=g.offsetTop,i+=g.offsetLeft),r.offset.supportsFixedPosition&&"fixed"===c.position&&(h+=Math.max(f.scrollTop,g.scrollTop),i+=Math.max(f.scrollLeft,g.scrollLeft)),{top:h,left:i}},r.offset={initialize:function(){var c,d,e,a=q.body,b=q.createElement("div"),f=parseFloat(r.css(a,"marginTop"))||0;r.extend(b.style,{position:"absolute",top:0,left:0,margin:0,border:0,width:"1px",height:"1px",visibility:"hidden"}),b.innerHTML="<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>",a.insertBefore(b,a.firstChild),c=b.firstChild,d=c.firstChild,e=c.nextSibling.firstChild.firstChild,this.doesNotAddBorder=5!==d.offsetTop,this.doesAddBorderForTableAndCells=5===e.offsetTop,d.style.position="fixed",d.style.top="20px",this.supportsFixedPosition=20===d.offsetTop||15===d.offsetTop,d.style.position=d.style.top="",c.style.overflow="hidden",c.style.position="relative",this.subtractsBorderForOverflowNotVisible=-5===d.offsetTop,this.doesNotIncludeMarginInBodyOffset=a.offsetTop!==f,a.removeChild(b),r.offset.initialize=r.noop},bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;return r.offset.initialize(),r.offset.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(r.css(a,"marginTop"))||0,c+=parseFloat(r.css(a,"marginLeft"))||0),{top:b,left:c}},setOffset:function(a,b,c){var d=r.css(a,"position");"static"===d&&(a.style.position="relative");var e=r(a),f=e.offset(),g=r.css(a,"top"),h=r.css(a,"left"),i="absolute"===d&&r.inArray("auto",[g,h])>-1;d={};var j={};i&&(j=e.position()),g=i?j.top:parseInt(g,10)||0,h=i?j.left:parseInt(h,10)||0,r.isFunction(b)&&(b=b.call(a,c,f)),null!=b.top&&(d.top=b.top-f.top+g),null!=b.left&&(d.left=b.left-f.left+h),"using"in b?b.using.call(a,d):e.css(d)}},r.fn.extend({position:function(){if(!this[0])return null;var a=this[0],b=this.offsetParent(),c=this.offset(),d=Ja.test(b[0].nodeName)?{top:0,left:0}:b.offset();return c.top-=parseFloat(r.css(a,"marginTop"))||0,c.left-=parseFloat(r.css(a,"marginLeft"))||0,d.top+=parseFloat(r.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(r.css(b[0],"borderLeftWidth"))||0,{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){for(var a=this.offsetParent||q.body;a&&!Ja.test(a.nodeName)&&"static"===r.css(a,"position");)a=a.offsetParent;return a})}}),r.each(["Left","Top"],function(a,c){var d="scroll"+c;r.fn[d]=function(c){var f,e=this[0];return e?c!==b?this.each(function(){(f=p(this))?f.scrollTo(a?r(f).scrollLeft():c,a?c:r(f).scrollTop()):this[d]=c}):(f=p(e))?"pageXOffset"in f?f[a?"pageYOffset":"pageXOffset"]:r.support.boxModel&&f.document.documentElement[d]||f.document.body[d]:e[d]:null}}),r.each(["Height","Width"],function(a,c){var d=c.toLowerCase();r.fn["inner"+c]=function(){return this[0]?parseFloat(r.css(this[0],d,"padding")):null},r.fn["outer"+c]=function(a){return this[0]?parseFloat(r.css(this[0],d,a?"margin":"border")):null},r.fn[d]=function(a){var e=this[0];if(!e)return null==a?null:this;if(r.isFunction(a))return this.each(function(b){var c=r(this);c[d](a.call(this,b,c[d]()))});if(r.isWindow(e))return"CSS1Compat"===e.document.compatMode&&e.document.documentElement["client"+c]||e.document.body["client"+c];if(9===e.nodeType)return Math.max(e.documentElement["client"+c],e.body["scroll"+c],e.documentElement["scroll"+c],e.body["offset"+c],e.documentElement["offset"+c]);if(a===b){e=r.css(e,d);var f=parseFloat(e);return r.isNaN(f)?e:f}return this.css(d,"string"==typeof a?a:a+"px")}})}(window);function GameObject(){this.zOrder=0,this.x=0,this.y=0,this.startupGameObject=function(t,e,i){return this.zOrder=i,this.x=t,this.y=e,g_GameObjectManager.addGameObject(this),this},this.shutdownGameObject=function(){g_GameObjectManager.removeGameObject(this)}}function VisualGameObject(){this.image=null,this.draw=function(t,e,i,a){e.drawImage(this.image,this.x-i,this.y-a)},this.startupVisualGameObject=function(t,e,i,a){return this.startupGameObject(e,i,a),this.image=t,this},this.shutdownVisualGameObject=function(){this.shutdownGameObject()}}function RepeatingGameObject(){this.width=0,this.height=0,this.scrollFactor=1,this.startupRepeatingGameObject=function(t,e,i,a,s,h,n){return this.startupVisualGameObject(t,e,i,a),this.width=s,this.height=h,this.scrollFactor=n,this},this.shutdownstartupRepeatingGameObject=function(){this.shutdownVisualGameObject()},this.draw=function(t,e,i,a){for(var s=[0,0],h=0;h<this.height;h+=s[1])for(var n=0;n<this.width;n+=s[0]){var r=[this.x+n,this.y+h],c=[this.width-n,this.height-h],m=[0,0];0==n&&(m[0]=i*this.scrollFactor),0==h&&(m[1]=a*this.scrollFactor),s=this.drawRepeat(e,r,c,m)}},this.drawRepeat=function(t,e,i,a){var s=Math.abs(a[0])%this.image.width,h=Math.abs(a[1])%this.image.height,n=a[0]<0?this.image.width-s:s,r=a[1]<0?this.image.height-h:h,c=i[0]<this.image.width-n?i[0]:this.image.width-n,m=i[1]<this.image.height-r?i[1]:this.image.height-r;return t.drawImage(this.image,n,r,c,m,e[0],e[1],c,m),[c,m]}}function AnimatedGameObject(){this.currentFrame=0,this.timeBetweenFrames=0,this.timeSinceLastFrame=0,this.frameWidth=0,this.startupAnimatedGameObject=function(t,e,i,a,s,h){if(0>=s)throw"framecount can not be <= 0";if(0>=h)throw"fps can not be <= 0";this.startupVisualGameObject(t,e,i,a),this.currentFrame=0,this.frameCount=s,this.timeBetweenFrames=1/h,this.timeSinceLastFrame=this.timeBetweenFrames,this.frameWidth=this.image.width/this.frameCount},this.draw=function(t,e,i,a){var s=this.frameWidth*this.currentFrame;e.drawImage(this.image,s,0,this.frameWidth,this.image.height,this.x-i,this.y-a,this.frameWidth,this.image.height),this.timeSinceLastFrame-=t,this.timeSinceLastFrame<=0&&(this.timeSinceLastFrame=this.timeBetweenFrames,++this.currentFrame,this.currentFrame%=this.frameCount)}}function ApplicationManager(){this.startupApplicationManager=function(){return this.runner=(new AnimatedGameObject).startupAnimatedGameObject(g_run,0,0,1,totalFrames,FPS),this}}function GameObjectManager(){this.gameObjects=new Array,this.lastFrame=(new Date).getTime(),this.xScroll=0,this.yScroll=0,this.applicationManager=null,this.canvas=null,this.context2D=null,this.backBuffer=null,this.backBufferContext2D=null,this.startupGameObjectManager=function(){return g_GameObjectManager=this,this.canvas=document.getElementById("canvas"),this.context2D=this.canvas.getContext("2d"),this.backBuffer=document.createElement("canvas"),this.backBuffer.width=this.canvas.width,this.backBuffer.height=this.canvas.height,this.backBufferContext2D=this.backBuffer.getContext("2d"),this.applicationManager=(new ApplicationManager).startupApplicationManager(),setInterval(function(){g_GameObjectManager.draw()},SECONDS_BETWEEN_FRAMES),this},this.draw=function(){var t=(new Date).getTime(),e=(t-this.lastFrame)/1e3;this.lastFrame=t,this.backBufferContext2D.clearRect(0,0,this.backBuffer.width,this.backBuffer.height),this.context2D.clearRect(0,0,this.canvas.width,this.canvas.height);for(x in this.gameObjects)this.gameObjects[x].update&&this.gameObjects[x].update(e,this.backBufferContext2D,this.xScroll,this.yScroll);for(x in this.gameObjects)this.gameObjects[x].draw&&this.gameObjects[x].draw(e,this.backBufferContext2D,this.xScroll,this.yScroll);this.context2D.drawImage(this.backBuffer,0,0)},this.addGameObject=function(t){this.gameObjects.push(t),this.gameObjects.sort(function(t,e){return t.zOrder-e.zOrder})},this.removeGameObject=function(t){this.gameObjects.removeObject(t)}}function initCanvas(){(new GameObjectManager).startupGameObjectManager()}VisualGameObject.prototype=new GameObject,RepeatingGameObject.prototype=new VisualGameObject,AnimatedGameObject.prototype=new VisualGameObject,Array.prototype.remove=function(t,e){var i=this.slice((e||t)+1||this.length);return this.length=0>t?this.length+t:t,this.push.apply(this,i)},Array.prototype.removeObject=function(t){for(var e=0;e<this.length;++e)if(this[e]===t){this.remove(e);break}};var texts=['Are you sure you want to reset the form?',	'Width and Height must be within the range of 5 and 512',
'.ICO file type does not support height or width of more than 255 pixels',
'The generator has shown an error. You are either generating too fast or there is a problem with the server.<br /><br />Please, wait for a couple of seconds and try again. If the error persists, please contact administrator',
'Something went wrong. Please, refresh and try again',
'Incorrect e-mail address',
'E-mail address is not registered',
'Incorrect code',
'Code entering limit is over. Please, try again',
'Only latin charaters and !@#$%^&*()_+?{}[] symbols allowed',
'Wrong e-mail address',
'This e-mail already exists',
'Error. Please, try again',
'You entered wrong code',
'Your account has already been confirmed. You can login now',
'You could not confirm your e-mail. Please, register again',
'The account does not exist or has been removed. Please, sign up again',
'You have successfully verified your account and we have automatically logged you in',
'Incorrect e-mail',
'E-mail is not registered',
'E-mail is already confirmed',
'You could not confirm your e-mail. Please, register again',
'You have successfully verified your account and we have automatically logged you in',
'Passwords do not match',
'Something went wrong. Please, try again',
'Original',
'Colorize',
'Transp.',
'Opaque',
'Download',
'There are no items in your cart',
'Are you sure you want to remove selected items from the cart?',
'Are you sure you want clear the cart?',
'Separate files',
'Horizontal sprites',
'Vertical sprites',
'Your downloads cart is empty.\nPlease, add icons for download from the generator form',
'Select a file or enter url, please',
'Iconset name can not be empty',
'Only latin charaters, white spaces and "-" and "_"',
'The given iconset name already exists',
'Please, login or sign up',
'Delete',
'Error',
'Error occured. Please, refresh and edit this iconset from menu on the right',
'Are you sure you want to delete this iconset?',
'Unknown error occured.\nPlease, try again',
'<div class="error">No more icons available for the given keywords<div class="inner">Try to:<br /><a href="javascript:;" class="clear_search_filter">Reset filters</a> to defaults<br /><a href="/en/free_icons">Browse icons</a> by iconsets<br />Remove some of keywords from the searchbox</div></div>',
'This icon is not attached to any collection\nThis function is available only to icons available on the web-site',
'Are you sure you want to delete this icon?',
'Edit this icon',
'Download icon',
'Download collection',
'Delete icon',
'Select icons',
'Upload all',
'Uploading...',
'Clear all',
'File',
'Fise size',
'Progress',
'Delete',
'Upload',
'Delete',
'Upload',
'Please, upload icons first',
'Remove',
'Click to select file',
'Please, click on an text box in the form and select a file to upload',
'Select your preloader',
'Width and Height must be within the range of 2 and 256',
'Download',
'Loading',
'Only english, cyrillic letters and letters with acutes, numbers, space and the following characters are allowed for now:<br /><br /> ./<>\?;:"\\\'!@#$%^&*()[]{}_\+=-|\\\\]',
'Preloader has been added to favorites',
'The preloader is already in your favorites or error occured',
'Please, <a href="/preloaders/en/login-register">Sign in or Register</a> in order to add preloaders to your favorites',
'Image',
'Preloader name',
'Item price',
'Quantity',
'Company name, Web-site or App name<br /><span>can be filled after purchase</span>',
'Company, web-site or application',
'Company name, Web-site or App name<br /><span>All fields must be filled</span>',
'Source file in 3DS Max format included with purchase',
'Source file in Adobe Photoshop format included with purchase',
'Buy source file',
'Buy this preloader',
'All animations are free. The purchase is for the source file in 3DS Max and/or Adobe Photoshop format',
'The source file of the given animation will be provided after purchase',
//'Source files in 3DS Max and Adobe Photoshop formats included with purchase',
'You need to purchase this animation template to download this image. Once paid, you can download any modificaton of the purchased template.',
'Unlock with purchased plan',
'Unlock source file with plan',
'Loading, please wait...',
'Are you sure you want to register this pre-loader?\nItems remaining: ',
'Your pre-loader has been registered.\nAfter we re-load the page you will be able to download it.',
'Something went wrong. Please, try again',
'Yes',
'No',
'Please, enter values between 1 and ',
'Set "Keep originial colors" (in the advanced options) to "NO" to enable this feature',
'To enable this option\n\n- Set "transparent background" to "NO" or \n- Set image type to ".GIF" or \n- Turn on "Use environment colors"  in "Advanced options"',
'Enter sites here...',
'Personal data has been successfully updated',
'Free',
'Your vote has been accepted. Thanks for your vote',
'You have already voted for this page. Thanks for your vote',
'Error occured. Please, try again later',
'This feature is available only: \n\n- For free preloaders\n- For purchased preloaders\n- For users with unlimited accounts',
'SVG format requires constrained proportions',
'This option is not available for SVG format'
];
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e("object"==typeof exports?require("jquery"):jQuery)}(function(e){function n(e){return u.raw?e:encodeURIComponent(e)}function o(e){return u.raw?e:decodeURIComponent(e)}function i(e){return n(u.json?JSON.stringify(e):String(e))}function r(e){0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return e=decodeURIComponent(e.replace(c," ")),u.json?JSON.parse(e):e}catch(n){}}function t(n,o){var i=u.raw?n:r(n);return e.isFunction(o)?o(i):i}var c=/\+/g,u=e.cookie=function(r,c,a){if(arguments.length>1&&!e.isFunction(c)){if(a=e.extend({},u.defaults,a),"number"==typeof a.expires){var f=a.expires,s=a.expires=new Date;s.setTime(+s+864e5*f)}return document.cookie=[n(r),"=",i(c),a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}for(var d=r?void 0:{},p=document.cookie?document.cookie.split("; "):[],m=0,x=p.length;x>m;m++){var l=p[m].split("="),g=o(l.shift()),k=l.join("=");if(r&&r===g){d=t(k,c);break}r||void 0===(k=t(k))||(d[g]=k)}return d};u.defaults={},e.removeCookie=function(n,o){return void 0===e.cookie(n)?!1:(e.cookie(n,"",e.extend({},o,{expires:-1})),!e.cookie(n))}});!function(t){t.jCart=function(e){var r={options:e,cartArray:{},init:function(){this.options=t.extend({cookieDuration:2},e),this.cartArray=this.getCart(),this.saveCart(),this.checkCookies||alert("You have disabled browser cookies. Please, enable them, otherwise the shopping cart will not work")},addItem:function(t,e,r,o,a){this.cartArray[t]?this.cartArray[t].amount=this.cartArray[t].amount+a:this.cartArray[t]={name:e,img:r,price:o,amount:a},this.saveCart()},removeItem:function(t){delete this.cartArray[t],this.saveCart()},getItemAmount:function(t){return this.cartArray[t]?this.cartArray[t].amount:!1},setItemAmount:function(t,e){return this.cartArray[t]?(1>e?this.removeItem(t):this.cartArray[t].amount=e,this.saveCart(),!0):!1},increaseItemAmount:function(t,e){return this.cartArray[t]?(e||(e=1),this.saveCart(),this.setItemAmount(t,this.getItemAmount(t)+e)):!1},decreaseItemAmount:function(t,e){e||(e=1),this.increaseItemAmount(t,-1*e)},getCart:function(){return t.cookie("jCart")&&JSON.parse(t.cookie("jCart"))?JSON.parse(t.cookie("jCart")):{}},saveCart:function(){this.saveCookie()},clearCart:function(){this.cartArray={},this.saveCart()},saveCookie:function(){t.cookie("jCart",JSON.stringify(this.cartArray),{expires:this.options.cookieDuration,path:"/"})},removeCookie:function(){t.removeCookie("jCart")},checkCookies:function(){var t=navigator.cookieEnabled?!0:!1;return"undefined"!=typeof navigator.cookieEnabled||t||(document.cookie="testcookie",t=-1!=document.cookie.indexOf("testcookie")?!0:!1),t}};return{init:r.init,cartArray:r.cartArray,add:r.addItem,removeItem:r.removeItem,getItemAmount:r.getItemAmount,setItemAmount:r.setItemAmount,increaseItemAmount:r.increaseItemAmount,decreaseItemAmount:r.decreaseItemAmount,getCart:r.getCart,saveCart:r.saveCart,clearCart:r.clearCart,saveCookie:r.saveCookie,removeCookie:r.removeCookie,checkCookies:r.checkCookies}}}(jQuery);Slider.isSupported="undefined"!=typeof document.createElement&&"undefined"!=typeof document.documentElement&&"number"==typeof document.documentElement.offsetWidth; function Slider(a,b,c){if(a){this._orientation=c||"horizontal";this._range=new Range;this._range.setExtent(0);this._unitIncrement=this._blockIncrement=1;this._timer=new Timer(100);Slider.isSupported&&a&&(this.document=a.ownerDocument||a.document,this.element=a,this.element.slider=this,this.element.unselectable="on",this.element.className=this._orientation+" "+this.classNameTag+" "+this.element.className,this.line=this.document.createElement("DIV"),this.line.style.padding="0px",this.line.className= "line",this.line.unselectable="on",this.line.appendChild(this.document.createElement("DIV")),this.element.appendChild(this.line),this.handle=this.document.createElement("DIV"),this.handle.className="handle",this.handle.style.padding="0px",this.handle.unselectable="on",this.handle.appendChild(this.document.createElement("DIV")),this.handle.firstChild.appendChild(this.document.createTextNode(String.fromCharCode(160))),this.element.appendChild(this.handle));this.input=b;var d=this;this._range.onchange= function(){d.recalculate();if(typeof d.onchange=="function")d.onchange()};Slider.isSupported&&a?(this.element.onfocus=Slider.eventHandlers.onfocus,this.element.onblur=Slider.eventHandlers.onblur,this.element.onmousedown=Slider.eventHandlers.onmousedown,this.element.onmouseover=Slider.eventHandlers.onmouseover,this.element.onmouseout=Slider.eventHandlers.onmouseout,this.element.onkeydown=Slider.eventHandlers.onkeydown,this.element.onkeypress=Slider.eventHandlers.onkeypress,this.element.onmousewheel= Slider.eventHandlers.onmousewheel,this.handle.onselectstart=this.element.onselectstart=function(){return false},this._timer.ontimer=function(){d.ontimer()},window.setTimeout(function(){d.recalculate()},1)):this.input.onchange=function(){d.setValue(d.input.value)}}} Slider.eventHandlers={getEvent:function(a,b){a||(a=b?b.document.parentWindow.event:window.event);if(!a.srcElement){for(b=a.target;null!=b&&1!=b.nodeType;)b=b.parentNode;a.srcElement=b}"undefined"==typeof a.offsetX&&(a.offsetX=a.layerX,a.offsetY=a.layerY);return a},getDocument:function(a){return a.target?a.target.ownerDocument:a.srcElement.document},getSlider:function(a){for(a=a.target||a.srcElement;null!=a&&null==a.slider;)a=a.parentNode;return a?a.slider:null},getLine:function(a){for(a=a.target|| a.srcElement;null!=a&&"line"!=a.className;)a=a.parentNode;return a},getHandle:function(a){for(var a=a.target||a.srcElement,b=/handle/;null!=a&&!b.test(a.className);)a=a.parentNode;return a},onfocus:function(){var a=this.slider;a._focused=!0;a.handle.className="handle hover"},onblur:function(){var a=this.slider;a._focused=!1;a.handle.className="handle"},onmouseover:function(a){var a=Slider.eventHandlers.getEvent(a,this),b=this.slider;a.srcElement==b.handle&&(b.handle.className="handle hover")},onmouseout:function(a){var a= Slider.eventHandlers.getEvent(a,this),b=this.slider;a.srcElement==b.handle&&!b._focused&&(b.handle.className="handle")},onmousedown:function(a){var a=Slider.eventHandlers.getEvent(a,this),b=this.slider;b.element.focus&&b.element.focus();Slider._currentInstance=b;var c=b.document;c.addEventListener?(c.addEventListener("mousemove",Slider.eventHandlers.onmousemove,!0),c.addEventListener("mouseup",Slider.eventHandlers.onmouseup,!0)):c.attachEvent&&(c.attachEvent("onmousemove",Slider.eventHandlers.onmousemove), c.attachEvent("onmouseup",Slider.eventHandlers.onmouseup),c.attachEvent("onlosecapture",Slider.eventHandlers.onmouseup),b.element.setCapture());Slider.eventHandlers.getHandle(a)?Slider._sliderDragData={screenX:a.screenX,screenY:a.screenY,dx:a.screenX-b.handle.offsetLeft,dy:a.screenY-b.handle.offsetTop,startValue:b.getValue(),slider:b}:(c=Slider.eventHandlers.getLine(a),b._mouseX=a.offsetX+(c?b.line.offsetLeft:0),b._mouseY=a.offsetY+(c?b.line.offsetTop:0),b._increasing=null,b.ontimer())},onmousemove:function(a){a= Slider.eventHandlers.getEvent(a,this);if(Slider._sliderDragData){var b=Slider._sliderDragData.slider,c=b.getMaximum()-b.getMinimum(),d,e;"horizontal"==b._orientation?(d=b.element.offsetWidth-b.handle.offsetWidth,e=a.screenX-Slider._sliderDragData.dx,a=100<Math.abs(a.screenY-Slider._sliderDragData.screenY)):(d=b.element.offsetHeight-b.handle.offsetHeight,e=b.element.offsetHeight-b.handle.offsetHeight-(a.screenY-Slider._sliderDragData.dy),a=100<Math.abs(a.screenX-Slider._sliderDragData.screenX));b.setValue(a? Slider._sliderDragData.startValue:b.getMinimum()+c*e/d);return!1}b=Slider._currentInstance;null!=b&&(c=Slider.eventHandlers.getLine(a),b._mouseX=a.offsetX+(c?b.line.offsetLeft:0),b._mouseY=a.offsetY+(c?b.line.offsetTop:0))},onmouseup:function(a){Slider.eventHandlers.getEvent(a,this);var a=Slider._currentInstance,b=a.document;b.removeEventListener?(b.removeEventListener("mousemove",Slider.eventHandlers.onmousemove,!0),b.removeEventListener("mouseup",Slider.eventHandlers.onmouseup,!0)):b.detachEvent&& (b.detachEvent("onmousemove",Slider.eventHandlers.onmousemove),b.detachEvent("onmouseup",Slider.eventHandlers.onmouseup),b.detachEvent("onlosecapture",Slider.eventHandlers.onmouseup),a.element.releaseCapture());Slider._sliderDragData?Slider._sliderDragData=null:(a._timer.stop(),a._increasing=null);Slider._currentInstance=null},onkeydown:function(a){var a=Slider.eventHandlers.getEvent(a,this),b=this.slider,a=a.keyCode;switch(a){case 33:b.setValue(b.getValue()+b.getBlockIncrement());break;case 34:b.setValue(b.getValue()- b.getBlockIncrement());break;case 35:b.setValue("horizontal"==b.getOrientation()?b.getMaximum():b.getMinimum());break;case 36:b.setValue("horizontal"==b.getOrientation()?b.getMinimum():b.getMaximum());break;case 38:case 39:b.setValue(b.getValue()+b.getUnitIncrement());break;case 37:case 40:b.setValue(b.getValue()-b.getUnitIncrement())}if(33<=a&&40>=a)return!1},onkeypress:function(a){a=Slider.eventHandlers.getEvent(a,this);a=a.keyCode;if(33<=a&&40>=a)return!1},onmousewheel:function(a){var a=Slider.eventHandlers.getEvent(a, this),b=this.slider;if(b._focused)return b.setValue(b.getValue()+a.wheelDelta/120*b.getUnitIncrement()),!1}};Slider.prototype.classNameTag="dynamic-slider-control";Slider.prototype.setValue=function(a){this._range.setValue(a);this.input.value=this.getValue()};Slider.prototype.getValue=function(){return this._range.getValue()};Slider.prototype.setMinimum=function(a){this._range.setMinimum(a);this.input.value=this.getValue()};Slider.prototype.getMinimum=function(){return this._range.getMinimum()}; Slider.prototype.setMaximum=function(a){this._range.setMaximum(a);this.input.value=this.getValue()};Slider.prototype.getMaximum=function(){return this._range.getMaximum()};Slider.prototype.setUnitIncrement=function(a){this._unitIncrement=a};Slider.prototype.getUnitIncrement=function(){return this._unitIncrement};Slider.prototype.setBlockIncrement=function(a){this._blockIncrement=a};Slider.prototype.getBlockIncrement=function(){return this._blockIncrement};Slider.prototype.getOrientation=function(){return this._orientation}; Slider.prototype.setOrientation=function(a){a!=this._orientation&&(Slider.isSupported&&this.element&&(this.element.className=this.element.className.replace(this._orientation,a)),this._orientation=a,this.recalculate())}; Slider.prototype.recalculate=function(){if(Slider.isSupported&&this.element){var a=this.element.offsetWidth,b=this.element.offsetHeight,c=this.handle.offsetWidth,d=this.handle.offsetHeight,e=this.line.offsetWidth,f=this.line.offsetHeight;"horizontal"==this._orientation?(this.handle.style.left=(a-c)*(this.getValue()-this.getMinimum())/(this.getMaximum()-this.getMinimum())+"px",this.handle.style.top=(b-d)/2+"px",this.line.style.top=(b-f)/2+"px",this.line.style.left=c/2+"px",this.line.style.width=Math.max(0, a-c-2)+"px",this.line.firstChild.style.width=Math.max(0,a-c-4)+"px"):(this.handle.style.left=(a-c)/2+"px",this.handle.style.top=b-d-(b-d)*(this.getValue()-this.getMinimum())/(this.getMaximum()-this.getMinimum())+"px",this.line.style.left=(a-e)/2+"px",this.line.style.top=d/2+"px",this.line.style.height=Math.max(0,b-d-2)+"px",this.line.firstChild.style.height=Math.max(0,b-d-4)+"px")}}; Slider.prototype.ontimer=function(){var a=this.handle.offsetWidth,b=this.handle.offsetHeight,c=this.handle.offsetLeft,d=this.handle.offsetTop;if("horizontal"==this._orientation)if(this._mouseX>c+a&&(null==this._increasing||this._increasing))this.setValue(this.getValue()+this.getBlockIncrement()),this._increasing=!0;else{if(this._mouseX<c&&(null==this._increasing||!this._increasing))this.setValue(this.getValue()-this.getBlockIncrement()),this._increasing=!1}else if(this._mouseY>d+b&&(null==this._increasing|| !this._increasing))this.setValue(this.getValue()-this.getBlockIncrement()),this._increasing=!1;else if(this._mouseY<d&&(null==this._increasing||this._increasing))this.setValue(this.getValue()+this.getBlockIncrement()),this._increasing=!0;this._timer.start()};function Range(){this._minimum=this._value=0;this._maximum=100;this._extent=0;this._isChanging=!1} Range.prototype.setValue=function(a){a=Math.round(parseFloat(a));if(!isNaN(a)&&this._value!=a&&(this._value=a+this._extent>this._maximum?this._maximum-this._extent:a<this._minimum?this._minimum:a,!this._isChanging&&"function"==typeof this.onchange))this.onchange()};Range.prototype.getValue=function(){return this._value};Range.prototype.setExtent=function(a){if(this._extent!=a&&(this._extent=0>a?0:this._value+a>this._maximum?this._maximum-this._value:a,!this._isChanging&&"function"==typeof this.onchange))this.onchange()}; Range.prototype.getExtent=function(){return this._extent};Range.prototype.setMinimum=function(a){if(this._minimum!=a){var b=this._isChanging;this._isChanging=!0;this._minimum=a;a>this._value&&this.setValue(a);a>this._maximum&&(this._extent=0,this.setMaximum(a),this.setValue(a));a+this._extent>this._maximum&&(this._extent=this._maximum-this._minimum);this._isChanging=b;if(!this._isChanging&&"function"==typeof this.onchange)this.onchange()}};Range.prototype.getMinimum=function(){return this._minimum}; Range.prototype.setMaximum=function(a){if(this._maximum!=a){var b=this._isChanging;this._isChanging=!0;this._maximum=a;a<this._value&&this.setValue(a-this._extent);a<this._minimum&&(this._extent=0,this.setMinimum(a),this.setValue(this._maximum));a<this._minimum+this._extent&&(this._extent=this._maximum-this._minimum);a<this._value+this._extent&&(this._extent=this._maximum-this._value);this._isChanging=b;if(!this._isChanging&&"function"==typeof this.onchange)this.onchange()}}; Range.prototype.getMaximum=function(){return this._maximum};function Timer(a){this._pauseTime="undefined"==typeof a?1E3:a;this._timer=null;this._isStarted=!1}Timer.prototype.start=function(){this.isStarted()&&this.stop();var a=this;this._timer=window.setTimeout(function(){if("function"==typeof a.ontimer)a.ontimer()},this._pauseTime);this._isStarted=!1};Timer.prototype.stop=function(){null!=this._timer&&window.clearTimeout(this._timer);this._isStarted=!1};Timer.prototype.isStarted=function(){return this._isStarted}; Timer.prototype.getPauseTime=function(){return this._pauseTime};Timer.prototype.setPauseTime=function(a){this._pauseTime=a};if (typeof curPreloader == 'undefined'){
	var curPreloader=false;
}
var enableStore = false;
var curWidth=128;
var curHeight=128;
var lastWidth = 128;
var lastHeight = 128;
var curFramesAmount=12;
//var allowHideList=true;
//var allowHideLang=true;
var imageTimeout=false;
//var allowHideTip=true;
var generateTimeout=false;
var allowChangeSize=false;
//var curStore=false;
//var cLastTop=0;
var cLastLeft=0;
var cWidth=128;
var cHeight=128;
var maxSpeed=16;
var minSpeed=2;
var defaultSpeed=9;
var pickerOffsetLeft=140;
var pickerOffsetTop=80;
var curPreviewBack='FFFFFF';
//var categoryAnimationTimeout=false;
var allowHideDownloadOptions=true;
var allowHideCart = true;
var allowShowGenerator=true;
//var selectionDisabled=false;
//var initialHeaderHeight=false;
var buyButtonMargin=false;
var jc = false;
//var firstCartCall = true;
var cartSites = new Array();
var orderSiteTypeTimeout = false;
var enableDownload = true;
//var adblock = false;
var currentSwitchPointer = false;
var allowSwitch = true;
var maxSize = 256;
var curTag = false;
var tags = false;
var tagsTimeout = false;
var bottomACloseOver = false;
var promoTimeout = false;
var curProductPrice = 0;

// Test APNG support
(function(self) {
  var apngTest = new Image(),
	ctx = document.createElement("canvas").getContext("2d");
	apngTest.onload = function () {
		ctx.drawImage(apngTest, 0, 0);
		self.APNG = ( ctx.getImageData(0, 0, 1, 1).data[3] === 0 );
	};
	apngTest.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACGFjVEwAAAABAAAAAcMq2TYAAAANSURBVAiZY2BgYPgPAAEEAQB9ssjfAAAAGmZjVEwAAAAAAAAAAQAAAAEAAAAAAAAAAAD6A+gBAbNU+2sAAAARZmRBVAAAAAEImWNgYGBgAAAABQAB6MzFdgAAAABJRU5ErkJggg==";
})(window);

if (!Object.keys) {
    Object.keys = function (obj) {
        var arr = [],
            key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) {
                arr.push(key);
            }
        }
        return arr;
    };
}

var wSymbols={"0":1,"1":2,"2":3,"3":4,"4":5,"5":6,"6":7,"7":8,"8":9,"9":10,"a":11,"á":12,"Á":13,"A":14,"â":15,"Â":16,"à":17,"À":18,"&":19,"ã":20,"Ã":21,"@":22,"ä":23,"Ä":24,"b":25,"\\":26,"B":27,"c":28,"C":29,":":30,",":31,"d":32,"-":33,"D":34,"$":35,".":36,"\"":37,"e":38,"é":39,"É":40,"E":41,"ê":42,"Ê":43,"è":44,"È":45,"=":46,"ë":47,"Ë":48,"!":49,"^":50,"f":51,"F":52,"/":53,"g":54,"G":55,"h":56,"H":57,"i":115,"í":116,"Í":117,"I":118,"î":119,"Î":120,"ì":121,"Ì":122,"ï":123,"Ï":124,"j":125,"J":126,"k":127,"K":128,"l":129,"L":130,"(":131,"{":132,"[":133,"<":134,"m":135,"M":136,">":137,"ь":138,"Ь":139,"n":140,"N":141,"ñ":142,"Ñ":143,"o":144,"ó":145,"Ó":146,"O":147,"ô":148,"Ô":149,"ò":150,"Ò":151,"õ":152,"Õ":153,"ö":154,"Ö":155,"p":156,"P":157,"%":158,"+":159,"q":160,"Q":161,"?":162,"\'":163,"r":164,"а":165,"А":166,"б":167,"Б":168,"ц":169,"Ц":170,"ч":171,"Ч":172,"д":173,"Д":174,"е":219,"Е":220,"ф":177,"Ф":178,"г":179,"Г":180,"х":181,"Х":182,"и":183,"И":184,"й":185,"Й":186,"ж":187,"Ж":188,"к":189,"К":190,"л":191,"Л":192,"м":193,"М":194,"н":195,"Н":196,"о":197,"О":198,"п":199,"П":200,"р":201,"Р":202,"с":203,"С":204,"ш":205,"Ш":206,"щ":207,"Щ":208,"т":209,"Т":210,"у":211,"У":212,"в":213,"В":214,"ы":215,"я":216,"Я":217,"Ы":218,"ё":221,"Ё":222,"ю":223,"Ю":224,"з":225,"З":226,"R":227,")":228,"}":229,"]":230,"s":231,"S":232,";":233,"#":234,"*":235,"t":236,"T":237,"~":238,"ъ":239,"Ъ":240,"u":241,"ú":242,"Ú":243,"U":244,"û":245,"Û":246,"ù":247,"Ù":248,"_":249,"ü":250,"Ü":251,"v":252,"V":253,"w":254,"W":255,"x":256,"X":257,"y":258,"ý":259,"Ý":260,"Y":261,"ÿ":262,"Ÿ":263,"z":264,"Z":265," ":266};

var pSymbols={"0":122,"1":76,"2":124,"3":122,"4":128,"5":124,"6":122,"7":120,"8":122,"9":122,"a":124,"á":124,"Á":168,"A":168,"â":124,"Â":168,"à":124,"À":168,"&":152,"ã":124,"Ã":168,"@":226,"ä":124,"Ä":168,"b":118,"\\":78,"B":138,"c":118,"C":160,":":38,",":38,"d":118,"-":76,"D":150,"$":122,".":38,"\"":74,"e":124,"é":124,"É":136,"E":136,"ê":124,"Ê":136,"è":124,"È":136,"=":124,"ë":124,"Ë":136,"!":40,"^":110,"f":84,"F":126,"/":78,"g":120,"G":166,"h":112,"H":144,"i":36,"í":56,"Í":56,"I":36,"î":90,"Î":90,"ì":56,"Ì":56,"ï":70,"Ï":70,"j":60,"J":104,"k":114,"K":150,"l":36,"L":118,"(":68,"{":80,"[":60,"<":124,"m":176,"M":172,">":124,"ь":112,"Ь":138,"n":112,"N":144,"ñ":112,"Ñ":144,"o":126,"ó":126,"Ó":172,"O":172,"ô":126,"Ô":172,"ò":126,"Ò":172,"õ":126,"Õ":172,"ö":126,"Ö":172,"p":118,"P":140,"%":190,"+":124,"q":118,"Q":174,"?":120,"\'":38,"r":80,"а":124,"А":168,"б":126,"Б":138,"ц":124,"Ц":158,"ч":112,"Ч":140,"д":142,"Д":162,"е":124,"Е":136,"ф":186,"Ф":170,"г":84,"Г":120,"х":126,"Х":164,"и":112,"И":144,"й":112,"Й":144,"ж":168,"Ж":224,"к":102,"К":130,"л":130,"Л":146,"м":140,"М":172,"н":110,"Н":144,"о":126,"О":172,"п":108,"П":144,"р":118,"Р":140,"с":118,"С":160,"ш":168,"Ш":188,"щ":180,"Щ":204,"т":112,"Т":144,"у":124,"У":158,"в":112,"В":138,"ы":148,"я":120,"Я":158,"Ы":180,"ё":124,"Ё":136,"ю":162,"Ю":216,"з":106,"З":134,"R":160,")":68,"}":80,"]":60,"s":114,"S":144,";":38,"#":136,"*":88,"t":72,"T":144,"~":130,"ъ":146,"Ъ":188,"u":112,"ú":112,"Ú":144,"U":144,"û":112,"Û":144,"ù":112,"Ù":144,"_":148,"ü":112,"Ü":144,"v":124,"V":164,"w":178,"W":226,"x":126,"X":164,"y":124,"ý":124,"Ý":166,"Y":166,"ÿ":124,"Ÿ":166,"z":120,"Z":144," ":120};

genUrlPrefix = '/preloaders';

$(document).ready(function(){
	jc = $.jCart();
	jc.init();

	setupCart();

	setupOrderSites();
	addOrderSiteInput();

	$(window).resize(function(){

		// if(!$('.generator-overlay').is(':hidden')){
		// 	showGenerator(false);
		// }

		// FIXME: remove $('.cart').css({height: $(window).height()+'px'});
	});

  $('.filter__switch-input').change(function() {
    $('.preloader, .preloader-detail').toggleClass('active', this.checked);
  });

	/*$('.category-url').mouseover(function(){
		startCategoryAnimation($(this).children('.category-image').attr('id'), false);
	}).mouseout(function(){
		stopCategoryAnimation();
	});*/

	$('article.category').click(function(){
		location.href=$(this).children('a').attr('href');
	});

  filterChanged(false);

  /**
   * helper for creating a filter tag
   * @param {jQuery object} $data
   * @param {string} filter category|type
   */
  function createFilterTag($data, filter) {
    filter = filter || 'category';
    var tagName = $data.attr('data-'+ filter +'-name');
    return '<div class="tag selected-'+ filter +'" data-'+ filter +'="'+ $data.attr('value')+'">'+
        '<span class="tag__name">' + tagName + '</span>'+
        '<button class="tag__btn">'+
          '<svg class="tag__icon"><use xlink:href="/preloaders/dist/images/icon-sprite.svg#close"></use></span>'+
        '</button>'+
      '</div>'
  }

  /**
   * helper for creating a filter radio buttons
   * @param {jQuery object} $data
   */
  function createFilterRadio($data) {
    var isSelected = $data.is(':selected');

    return '<label class="filter__option radio radio--rtl">' +
      '<input type="radio" name="'+ $data.attr('name') +'" class="radio__input" data-type="'+ $data.attr('value') +'" value="'+ $data.attr('value') +'" data-type-name="'+ $data.html() +'"'+ (isSelected ? 'checked' : '') +' >' +
      '<div class="radio__box"></div>' +
      '<div class="radio__text">'+ $data.html() +'</div>' +
    '</label>'
  }

  /**
   * helper for creating a filter checkbox
   * @param {jQuery object} $data
   * @param {string} filter category|type
   * @param {boolean} hasIcon add icon
   */
  function createFilterCheckbox($data, filter, hasIcon) {
    hasIcon = hasIcon || false;
    filter = filter || 'category';
    var isSelected = $data.is(':selected');

    return '<label class="filter__option checkbox checkbox--rtl">' +
      '<input type="checkbox" name="'+$data.attr('value') +'" class="checkbox__input" data-'+ filter +'="'+$data.attr('value') +'" value="'+ $data.attr('value') +'" data-'+ filter +'-name="'+$data.html() +'"'+ (isSelected ? 'checked' : '') +' >' +
      '<div class="checkbox__box"></div>' +
      '<div class="checkbox__text">' +
        (hasIcon
          ?
          '<svg class="filter__icon"><use xlink:href="/preloaders/dist/images/icon-sprite.svg#'+$data.attr('value') +'"></svg>'
          : '') +
       $data.html() +
      '</div>' +
    '</label>'
  }

	$('.filter__select--category option').each(function() {
    // go through the list in the select
    // generate the markup of the category filters
    var isSelected = $(this).is(':selected');
    $('.filter__categories')
      .append(
        createFilterCheckbox($(this), 'category', true)
      );

		if(isSelected) {
      // if option selected
      // create tag
      // bind tag click event via filterChanged
      $('.filter__selected--categories').append(
        createFilterTag($(this), 'category')
      )
      filterChanged(true);
		}
	});

	$('.filter__select--type option').each(function() {
    // go through the list in the select
    // generate the markup of the type filters
    var $type = $(this);
    var hasLine = $type[0].hasAttribute('data-hr');
    var isChecked = $type.is(':selected');
    var isCheckbox = $type.attr('value') === 'svg';

    if (isCheckbox) {
      $('.filter__types').append(
        createFilterCheckbox($type, 'type')
      )
    } else {
      $('.filter__types').append(
        createFilterRadio($type)
      )

      if (hasLine) {
        $('.filter__types').append('<hr class="filter__hr">')
      }
    }

		if(isChecked){
      // if option selected
      // create tag
      // bind tag click event via filterChanged
      $('.filter__selected--types').append(
        createFilterTag($type, 'type')
      )
      filterChanged(true);
		}
	});

  $('.filter__categories .checkbox input').change(function () {
    // if checkbox
    // switch this option in select
    // add|delete the tag
    if ($(this).attr('checked') === true) {
      if($(this).attr('data-category') === 'all') {
        $('.filter__select--category').val(false);
        $('.filter__selected--categories').html('');
        $('.filter__categories .checkbox input').not(this).attr('checked', false);
      } else {
        $('.filter__select--category option[value="'+ $(this).attr('data-category') +'"]').attr('selected', true);
        $('.filter__categories .checkbox input[data-category="all"]').attr('checked', false);
        $('.selected-category[data-category=all]').remove();
      }
      $('.filter__selected--categories').append(
        createFilterTag($(this), 'category')
        );
    } else {
      $('.filter__select--category option[value="'+ $(this).attr('data-category') +'"]').attr("selected", false);
      $('.selected-category[data-category="'+ $(this).attr('data-category') +'"]').remove();
    }
    var checkedLength = $('.filter__categories input:checked, .filter__types input:checked').length;
    // still show button filter
    filterChanged(true);
  })

  $('.filter__types .radio__input, .filter__types .checkbox__input').change(function () {
    var $input = $(this);
    var isChecked = $input.attr('checked') === true;

    if (this.type === 'checkbox') {
      // if checkbox
      // switch this option in select
      // add|delete the tag
      if (isChecked) {
        $('.filter__select--type option[value="'+ $input.attr('data-type') +'"]').attr('selected', true);
        $('.filter__selected--types').append(
          createFilterTag($input, 'type')
        );
      } else {
        $('.filter__select--type option[value="'+ $input.attr('data-type') +'"]').attr('selected', false);
        $('.selected-type[data-type="'+ $input.attr('data-type') +'"]').remove();
      }
    } else {
      // if radio
      if (isChecked) {
        // if we select radio
        // only one button from the group can be selected
        // added tag
        var typeToRemove = '';
        switch($input.attr('data-type')){
          case 'free':
            typeToRemove='premium';
          break;
          case 'premium':
            typeToRemove='free';
          break;
          case '3d':
            typeToRemove='flat';
          break;
          case 'flat':
            typeToRemove='3d';
          break;
          case 'colorful':
            typeToRemove='grayscale';
          break;
          case 'grayscale':
            typeToRemove='colorful';
          break;
        }
        $('.selected-type[data-type="'+typeToRemove+'"]').remove();
        $('.filter__select--type option[value="'+typeToRemove+'"]').attr('selected', false);
        $(".filter__select--type option[value='"+$input.attr('data-type')+"']").attr("selected", true);

        $('.filter__selected--types').append(
          createFilterTag($input, 'type')
        );
      } else {
        $('.selected-type[data-type="'+ $input.attr('data-type') +'"]').remove();
        $(".filter__select--type option[value='"+$input.attr('data-type')+"']").attr("selected", false);
      }
    }
    var checkedLength = $('.filter__categories input:checked, .filter__types input:checked').length;
    // checkedLength - show|hie button apply filter
    filterChanged(Boolean(checkedLength));
  })

  // Apply filters
	$('.filter__button').click(function() {
    var categories = ($('.filter__select--category').val() || []).join(';');
    var types = ($('.filter__select--type').val() || []).join(';');

		if(categories == ''){
			categories = 'all';
		}

		if(types == ''){
			types = 'all';
		}

		var keywords = $.trim($('#keywordsInput').val());

		location.href = '/preloaders/'+identifyLang()+'/filtered-search/'+categories+'/'+types+'/'+(keywords.length>0?keywords:'');
	});

	$('.preview-controls .first-select option').each(function() {
    $('.perpage__controls')
      .append(
        '<button class="btn btn--sm perpage__control'+($(this).is(':selected')?' is-selected':'')+'" data-value="'+$(this).val()+'">'+
          $(this).html() +
        '</button>'
    );
	});

	$('.perpage__control').click(function(){
    $('.loaders-per-page.first-select')
      .val($(this)
      .attr('data-value'))
      .change();
	});

	//$('.pages-form').unbind('submit');
	$('.pages-form').submit(function(event){
		event.preventDefault();

		var page = parseInt($.trim($(this).children('input[type=text]').val()));
		var pageIndex = 3;

		var maxPage = parseInt($('.pages-form span').html());

		if(page < 1 || page > maxPage || isNaN(page)){
			alert(texts[99]+maxPage);
			return false;
		}

		var url = $(this).attr('action').split('/');
		var finalUrl = '/preloaders/';

		if(url[3]=='filtered-search'){
			pageIndex = 5;
		}
		else if(url.length == 5){//preloaders list page
			pageIndex = 4;
		}
		//alert(url.length);
		//alert(JSON.stringify(url));



		for(i=2; i<url.length; i++){

			if(i==pageIndex){
				if(page != 1){
					finalUrl += page+'/';
				}
			}
			else if(url[i]!='/' && url[i]!=''){
				finalUrl += url[i]+'/';
			}
		}


		if(url[3]=='search' || url[3]=='filtered-search'){
			finalUrl = finalUrl.substr(0, finalUrl.length - 1);
		}
		//alert(finalUrl);
		location.href=finalUrl;
	});
	//$('.pages-form').submit();

	/*$('.category').click(function(){
		var topOffset=$(this).offset().top;
		if($('.loaders_list').height()>10 && !$(this).hasClass('active')){
			$('.category').css({marginTop:20});
			$('.loaders_list').css({height:'0px', border: '1px solid transparent'});

			topOffset=$(this).offset().top;

				$('.gray_line.first_line').css({top:'336px'});
				$('.gray_line.second_line').css({top:'806px'});
		}
		$('.category').removeClass('active');

		//var loaders_amount=parseInt($(this).children('.total_loaders').html());


		if($('.loaders_list').height()<10){
			var listUrl=$(this).children('.cat_img').children('a').attr('href');

			$('.loaders_list').css({top:topOffset+$(this).height()-142, width:$(window).width()-233}).html('<iframe src="'+listUrl+'" style="border:0; width:100%; height:370px"></iframe>');

			$(this).addClass('active');
			$('.loaders_list').css('border', '1px solid #DDD').animate({height:'370px'});

			if(topOffset<270 && $('.gray_line.first_line').offset().top<500){
				$('.gray_line').animate({'top':'+=370px'});
			}
			else if(topOffset>270 && topOffset<750 && $('.gray_line.second_line').offset().top<1000){
				$('.gray_line.second_line').animate({'top':'+=370px'});
			}

			$('.category').each(function(){
				var thisOffset=$(this).offset().top;
				//alert(thisOffset+'-'+parseInt(topOffset+$(this).height()));
				if(thisOffset>topOffset && thisOffset<topOffset+$(this).height()*2){
					$(this).animate({marginTop:389});
				}
			});
		}
		else{
			$(this).removeClass('active');
			$('.category').animate({marginTop:20});
			$('.loaders_list').css('border', '1px solid transparent').animate({height:'0px'});

			if(topOffset<270){
				$('.gray_line').animate({'top':'-=370px'});
			}
			else if(topOffset>270 && topOffset<750){
				$('.gray_line.second_line').animate({'top':'-=370px'});
			}

			//$('.gray_line').animate({'top':'-=370px'});
		}
	});*/

  // FIXME: color picker
	//forecolor
  //   options={};
  //   options.onChange=function(hsb, hex, rgb){
  //       $('#foreColorP').css('background', '#'+hex);
  //       $('#foreColor').val(hex.toUpperCase());
  //   }

  //   options.color='000000';

	// //backcolor
  //   $('#foreColor').ColorPicker(options);

  //   options={};
  //   options.color='FFFFFF';
  //   options.onChange=function(hsb, hex, rgb){
  //       $('#backColorP').css('background', '#'+hex);
  //       $('#backColor').val(hex.toUpperCase());
  //   }
  //   $('#backColor').ColorPicker(options);

	// //preview background
  //   options={};
  //   options.color='FFFFFF';
  //   options.onChange=function(hsb, hex, rgb){
  //       $('.generator-back').css('background', '#'+hex);
	// 	curPreviewBack=hex;
  //   }
  //   $('.colorful').ColorPicker(options);

  //   $('#foreColorP').click(function(){
  //       $('#foreColor').click();
  //   });

  //   $('#backColorP').click(function(){
  //       $('#backColor').click();
  //   });

	// $('#foreColor, #backColor, #foreColorP, #backColorP').mouseover(function(){
	// 	pickerOffsetLeft=100;
	// 	pickerOffsetTop=80;
	// });

	// $('.colorful').mouseover(function(){
	// 	pickerOffsetLeft=-173;
	// 	pickerOffsetTop=-10;
	// });


    //INITIALIZING PRELOADER SELECTION
    /*$('.preloaders').mouseover(function(){
        allowHideList=false;
    }).mouseout(function(){
		allowHideList=true;
	});*/

    /*$('.preloaders').click(function(){
		if($('.preloaders_list').is(':hidden') && allowShowList)
            $('.preloaders_list').show().removeClass('displaynone');
        else
            $('.preloaders_list').hide();
    });*/

	$('.parameters-button').click(function(){
		if($(window).width() <= 560){
			$('.generator-holder .parameters').removeClass('mobile-hidden');
			$('.generator-back').removeClass('mobile-show');
		}
  });

  $('#showParams').click(function() {
    $('.generator__area').addClass('show-params');
  });

	// $('.preloader:not(.home-preloader) figure').each(function(){
	// 	var src = $(this).children('img').attr('src');

	// 	$(this).css({backgroundImage: 'url('+src.replace(/\(/g,"").replace(/\)/g,"")+')'});
	// 	$(this).children('img').attr('src', src.replace('.jpg', '.gif'));
	// });

    $('.preloader').click(function(e){

    var $target = $(e.target);
    if (
      $target.closest('button').length ||
      $target.closest('a').length
    ) {
      return true;
    }

    e.preventDefault();
		$('.download-button').hide();
		showGenerator();
		$('.stop-loader-animations').click();

        //$('.preloaders_list').hide();
        curPreloader=$(this).attr('data-preloader-id');
		curWidth=pinfo[curPreloader][0];
		curHeight=pinfo[curPreloader][1];
		isFree=pinfo[curPreloader][8];
		hasSvg=pinfo[curPreloader][9];

		if(curWidth/2 <= curHeight){
			if(curWidth > 200){
				curWidth = Math.round(curWidth/4);
				curHeight = Math.round(curHeight/4);
			}
			else{
				curWidth = Math.round(curWidth/2);
				curHeight = Math.round(curHeight/2);
			}
		}

		curFramesAmount=pinfo[curPreloader][2];
		//curStore=pinfo[curPreloader][3].replace('http://www.turbosquid.com', '');
		sourceFree=pinfo[curPreloader][5];
		sourceFileType=pinfo[curPreloader][7];

		$('#width').val(curWidth + ' px');
		$('#height').val(curHeight + ' px');
		$('#framesAmount').val(curFramesAmount);

        //var src=$(this).children('img').attr('src');
        //allowShowList=false;
        //$('.preloaders .selection_box').html('<img src="'+src+'" />');
		if(pinfo[curPreloader][4]){
			$('.words').show().removeClass('displaynone');
			$('.buy-button-block').addClass('word-preloader');
			// $('#word').keyup();
			$('.generator-holder').addClass('with-words');
		}
		else{
			$('.buy-button-block').removeClass('word-preloader');
			$('.words').hide();
			$('.buy-button-block').show().removeClass('displaynone');
			$('.generator-holder').removeClass('with-words');
		}

		$('.source-file-type').removeClass('psd').removeClass('max').removeClass('psd-max');

		if(sourceFileType=='psd'){
			$('.source-file-type').addClass('psd').attr('title', texts[85]);
		}
		else if(sourceFileType=='max'){
			$('.source-file-type').addClass('max').attr('title', texts[84]);
		}
		else if(sourceFileType=='psd-max'){
			$('.source-file-type').addClass('psd-max').attr('title', texts[89]);
		}

		$('.source-file-type').unbind('click');
		$('.source-file-type').click(function(){
			alert($(this).attr('title'));
		});

		if(pinfo[curPreloader][4]){
			$('.buy-button').hide();
		}
		else{
			$('.buy-button').show();
			if(isFree==1){
				if(planItemsRemaining > 0){
					$('.buy-button-block .buy-button.purchase').addClass('purchase-with-plan').html(texts[92]);
				}
				else{
					$('.buy-button-block .buy-button.purchase').html(texts[86] + ' ($'+preloaderPrice+')');
				}

				enableDownload = true;
			}
			else{
				if(planItemsRemaining > 0){
					$('.buy-button-block .buy-button.purchase').addClass('purchase-with-plan').html(texts[91]);
				}
				else{
					$('.buy-button-block .buy-button.purchase').html(texts[87] + ' ($'+preloaderPrice+')');
				}

				enableDownload = false;
			}
		}

    if (!window.APNG) {
      $('[data-radio-apng]').hide();
    }

		if(hasSvg) {
			// $('label[for=imageTypeSvg]').show();
			$('[data-radio-svg]').show();
		}
		else{
			// if($('#imageTypeSvg').is(':checked')){
			if($('[data-params-type="svg"]').is(':checked')) {
        // $('#imageTypeGifRadio, #imageTypeGif').click();
        $('[data-params-type="gif"]').change();
			}
      // $('label[for=imageTypeSvg]').hide();
      $('[data-radio-svg]').hide();
		}

		if((purchasedPreloaders && purchasedPreloaders.indexOf(','+curPreloader+',')!=-1) || isSubscripted){

			enableDownload = true;

      // $('label[for=imageTypeSvg], #imageTypeSvg').removeClass('disabled');
      $('[data-radio-svg]').removeClass('is-disabled');
      $('[data-params-type="svg"]').removeAttr('disabled');

			// if($('#imageTypeSvg').is(':checked')){
			if($('[data-params-type="svg"]').is(':checked')){
				maxSize = 2000;
			}
			else{
				maxSize = 256;
			}

			if(sourceFileType == 'unknown'){
				$('.buy-button-block').css('visibility', 'hidden');
				$('.generator-link.common-generator-link').css('visibility', 'hidden');
			}
			else{
				$('.buy-button-block').css('visibility', 'visible');
				$('.buy-button.green').attr('href' , '/preloaders/download.php?lang='+lang+'&preloader='+curPreloader);
				$('.generator-link.common-generator-link').css('visibility', 'visible');
				$('.buy-button.green').show().removeClass('displaynone');
				$('.buy-button.purchase').hide();
			}
		}
		else{
			if(isFree==1){
				$('label[for=imageTypeSvg], #imageTypeSvg').removeClass('disabled');

				if($('#imageTypeSvg').is(':checked')){
					maxSize = 2000;
				}
				else{
					maxSize = 256;
				}
			}
			else{
				$('label[for=imageTypeSvg], #imageTypeSvg').addClass('disabled');
				if($('#imageTypeSvg').is(':checked')){
					$('#imageTypeGifRadio, #imageTypeGif').click();
				}
			}
			$('.buy-button-block').css('visibility', 'visible');
			$('.generator-link.common-generator-link').css('visibility', 'visible');
			$('.buy-button.green').hide();
			$('.buy-button.purchase').show().removeClass('displaynone');

		}

		/*if(curStore=='' && sourceFree=='0'){
			$('.buy-button.green').hide();
			//$('.buy-button.purchase').hide();
		}
		else if(sourceFree==1){
			$('.buy-button.green').attr('href' , '/download.php?lang='+lang+'&preloader='+curPreloader).show().removeClass('displaynone');
			//$('.buy-button.purchase').hide();
		}
		else{
			//$('.buy-button.purchase').attr('href' , 'http://www.turbosquid.com'+curStore).show().removeClass('displaynone');
			$('.buy-button.green').hide();
		}*/

		$('.buy-button.purchase').unbind('click');
		$('.buy-button.purchase').click(function(){
			if($(this).hasClass('purchase-with-plan')){
				if(confirm(texts[94]+planItemsRemaining)){
					$(this).hide();
					$('.source-file-type').hide();
					$('<div class="purchase-plan-loader">'+texts[93]+'</div>').insertAfter($(this));

					$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'purchase_with_plan', preloader_id:curPreloader}, function(data){
						$('.signin_loader').hide();
						if(data=='1'){
							alert(texts[95]);
							location.reload();
						}
						else{
							alert(texts[96]);
							$('.purchase-plan-loader').hide();
							$('.buy-button.purchase').show().removeClass('displaynone');
						}
					});
				}
			}
			else{
				addToCart(curPreloader, pinfo[curPreloader][6], $(this));
			}
		});

		$('.generate-button').click();
    });

	$('.preloader figure img').removeAttr('alt');
	$('.page_url, .preloader-preview h6.p-name').hide();

	$('.buy-button.purchase').unbind('click');
	$('.buy-button.purchase').click(function(){
		if($(this).hasClass('purchase-with-plan')){
			if(confirm(texts[94]+planItemsRemaining)){
				$(this).hide();
				$('.source-file-type').hide();
				$('<div class="purchase-plan-loader">'+texts[93]+'</div>').insertAfter($(this));

				$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'purchase_with_plan', preloader_id:curPreloader}, function(data){
					$('.signin_loader').hide();
					if(data=='1'){
						alert(texts[95]);
						location.reload();
					}
					else{
						alert(texts[96]);
						$('.purchase-plan-loader').hide();
						$('.buy-button.purchase').show().removeClass('displaynone');
					}
				});
			}
		}
		else{
			addToCart(curPreloader, pinfo[curPreloader][6], $(this));
		}
	});

	$('.register-license').unbind('click');
	$('.register-license').click(function(){
		jc.clearCart();
		addToCart(curPreloader, pinfo[curPreloader][6], $(this));
		location.href='/preloaders/'+lang+'/payment/checkout/';
	});

	$('.favorite, .add-to-cart, .preloader-title').mouseover(function(){
		allowShowGenerator=false;
	}).mouseout(function(){
		allowShowGenerator=true;
	});

	$('.preloader_name_info').click(function(){
		location.href=$(this).children('a').attr('href');
	});

	// $('.modify-button').click(function(){
	$('.modify-button').click(function(){
		showGenerator();

		$('.stop-loader-animations').click();
        //$('.preloaders_list').hide();
		curPreloader=curPreloader;
		curWidth=pinfo[curPreloader][0];
		curHeight=pinfo[curPreloader][1];
		curFramesAmount=pinfo[curPreloader][2];
		//curStore=pinfo[curPreloader][3];
		sourceFree=pinfo[curPreloader][5];
		sourceFileType=pinfo[curPreloader][7];
		isFree=pinfo[curPreloader][8];
		hasSvg=pinfo[curPreloader][9];

		if(curWidth/2 <= curHeight){
			if(curWidth > 200){
				curWidth = Math.round(curWidth/4);
				curHeight = Math.round(curHeight/4);
			}
			else{
				curWidth = Math.round(curWidth/2);
				curHeight = Math.round(curHeight/2);
			}
		}

		$('#width').val(curWidth + ' px');
		$('#height').val(curHeight + ' px');
		$('#framesAmount').val(curFramesAmount);

		if(pinfo[curPreloader][4]){
			$('.words').show().removeClass('displaynone');
			$('.buy-button-block').addClass('word-preloader');
			// $('#word').keyup();
		}
		else{
			$('.buy-button-block').removeClass('word-preloader');
			$('.words').hide();
			$('.buy-button-block').show().removeClass('displaynone');
		}

        //var src=$(this).children('img').attr('src');
        //allowShowList=false;
        //$('.preloaders .selection_box').html('<img src="'+src+'" />');
		if(pinfo[curPreloader][4]){
			$('.words').show().removeClass('displaynone');
			// $('#word').keyup();
		}
		else{
			$('.words').hide();
		}

		$('.source-file-type').removeClass('psd').removeClass('max').removeClass('psd-max');

		if(sourceFileType=='psd'){
			$('.source-file-type').addClass('psd').attr('title', texts[85]);
		}
		else if(sourceFileType=='max'){
			$('.source-file-type').addClass('max').attr('title', texts[84]);
		}
		else if(sourceFileType=='psd-max'){
			$('.source-file-type').addClass('max').attr('title', texts[89]);
		}

		// if(enableStore){

			if(isFree==1){
				if(planItemsRemaining > 0){
					$('.buy-button-block .buy-button.purchase').addClass('purchase-with-plan').html(texts[92]);
				}
				else{
					$('.buy-button-block .buy-button.purchase').html(texts[86]);
				}

				enableDownload = true;
			}
			else{
				if(planItemsRemaining > 0){
					$('.buy-button-block .buy-button.purchase').addClass('purchase-with-plan').html(texts[91]);
				}
				else{
					$('.buy-button-block .buy-button.purchase').html(texts[87]);
				}

				enableDownload = false;
			}

      if (!window.APNG) {
        $('[data-radio-apng]').hide();
      }

      if(hasSvg) {
        $('[data-radio-svg]').show();
      }
      else{
        if($('[data-params-type="svg"]').is(':checked')) {
          $('[data-params-type="gif"]').change();
        }
        $('[data-radio-svg]').hide();
      }

			if((purchasedPreloaders && purchasedPreloaders.indexOf(','+curPreloader+',')!=-1) || isSubscripted){

				enableDownload = true;

				$('label[for=imageTypeSvg], #imageTypeSvg').removeClass('disabled');

				if($('#imageTypeSvg').is(':checked')){
					maxSize = 2000;
				}
				else{
					maxSize = 256;
				}

				if(sourceFileType == 'unknown'){
					$('.buy-button-block').css('visibility', 'hidden');
					$('.generator-link.common-generator-link').css('visibility', 'hidden');
				}
				else{
					$('.buy-button-block').css('visibility', 'visible');
					$('.buy-button.green').attr('href' , '/preloaders/download.php?lang='+lang+'&preloader='+curPreloader);
					$('.generator-link.common-generator-link').css('visibility', 'visible');
					$('.buy-button.green').show().removeClass('displaynone');
					$('.buy-button.purchase').hide();
				}
			}
			else{
				if(isFree==1){
					$('label[for=imageTypeSvg], #imageTypeSvg').removeClass('disabled');

					if($('#imageTypeSvg').is(':checked')){
						maxSize = 2000;
					}
					else{
						maxSize = 256;
					}
				}
				else{
					$('label[for=imageTypeSvg], #imageTypeSvg').addClass('disabled');
					if($('#imageTypeSvg').is(':checked')){
						$('#imageTypeGifRadio, #imageTypeGif').click();
					}
				}
				$('.buy-button-block').css('visibility', 'visible');
				$('.generator-link.common-generator-link').css('visibility', 'visible');
				$('.buy-button.green').hide();
				$('.buy-button.purchase').show().removeClass('displaynone');

			}
		// }

		$('.source-file-type').unbind('click');
		$('.source-file-type').click(function(){
			alert($(this).attr('title'));
		});

		/*if(curStore=='' && sourceFree==0){
			$('.buy-button.green').hide();
			//$('.buy-button.purchase').hide();
		}
		else if(sourceFree==1){
			$('.buy-button.green').attr('href' , '/download.php?lang='+lang+'&preloader='+curPreloader).show().removeClass('displaynone');
			//$('.buy-button.purchase').hide();
		}
		else{
			//$('.buy-button.purchase').attr('href' , 'http://www.turbosquid.com'+curStore).show().removeClass('displaynone');
			$('.buy-button.green').hide();
		}*/

		$('.buy-button.purchase').unbind('click');
		$('.buy-button.purchase').click(function(){
			addToCart(curPreloader, pinfo[curPreloader][6], $(this));
		});

		$('.generate-button').click();
	});

	$('.add-to-cart').click(function(){
		if($(this).hasClass('unlock')){
			if(confirm(texts[94]+planItemsRemaining)){
				$(this).addClass('loading');
				var cartButton = $(this);
				$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'purchase_with_plan', preloader_id:$(this).attr('data-preloader-id')}, function(data){
					cartButton.removeClass('loading');
					if(data=='1'){
						alert(texts[95]);
						location.reload();
					}
					else{
						alert(texts[96]);
					}
				});
			}
		}
		else{
			addToCart($(this).attr('data-preloader-id'), $(this).attr('data-preloader-name'), $(this));
		}
	});

	$('.source-file-type2').click(function(){
		alert($(this).attr('title'));
	});

	$('body').append('<iframe style="display:none" id="generatorFrame"></iframe>');

    $('body').mousemove(function(info){
		//allowShowGenerator=true;
		if(allowChangeSize){
			var o=Math.round((cLastLeft-info.pageX)/5);
			var wo=cWidth-o;
			var ho=cHeight-o;

			if(wo<1)
				wo=1;
			else if(wo>maxSize)
				wo=maxSize;

			ho=Math.round(wo*cHeight/cWidth);

			$('#width').val(wo + ' px');
			$('#height').val(ho + ' px');
		}
    }).click(function(){
		if(allowHideCart){
			// $('.cart').animate({right: '-370px'}, 300);
      $('.cart').removeClass('is-open');
		}
        //if(allowHideList){$('.preloaders_list').hide();}
		//if(allowHideLang){$('.language_dropdown').hide();$('.language_select').height(25)}
    }).mouseup(function(){
		allowChangeSize=false;

		setTimeout(function(){allowSwitch = true}, 10);

		currentSwitchPointer = false;
	});

    //INITIALIZING GENERATOR FUNCTIONS

    $('.generate-button').click(function(){
		// $('#downloadOptions').hide();
		//$('.ad').remove();

		var imageType = 1;
		if($('[data-params-type="png"]').is(':checked')) {
			imageType = 0;
		}
		else if($('[data-params-type="svg"]').is(':checked')) {
			imageType = 2;
		}

        // generatePreloader(false, $('#sliderSpeed').val(), $('#foreColor').val(), $('#backColor').val(), parseInt($('#width').val()), parseInt($('#height').val()), $('#backTranspYes').is(':checked'),  $('#reverseYes').is(':checked'), $('#origColorsYes').is(':checked'),  $('#grayTranspYes').is(':checked'), imageType, $('#inverseColorsYes').is(':checked'), $('#flipHorYes').is(':checked'), $('#flipVertYes').is(':checked'), $('#framesAmount').val(), $('#word').val());

        generatePreloader(false, $('#sliderSpeed').val(), $('#foreColor').val(), $('#backColor').val(), parseInt($('#width').val()), parseInt($('#height').val()), $('#backTransp').is(':checked'),  $('#reverse').is(':checked'), $('#origColors').is(':checked'),  $('#grayTransp').is(':checked'), imageType, $('#inverseColors').is(':checked'), $('#flipHor').is(':checked'), $('#flipVert').is(':checked'), $('#framesAmount').val(), $('#word').val());

        $('.generator__area').removeClass('show-params');
    });

    //INITIALIZING PREVIEW BACKGROUND SETTINGS
    $('[data-preview-bg]').click(function() {
      var bg = $(this).data('preview-bg');
			if (bg.indexOf('url') > -1) {
				$('.stage__generator').css('background-image', bg);
			} else {
				$('.stage__generator').css('background', bg);
			}
    });
    // FIXME: remove $('.preview-back div').click(function(){
		// if(!$(this).hasClass('colorful')){
		// 	var back=$(this).css('background-image');
		// 	if(back=='none')
		// 	   back=$(this).css('background-color');
		// }
		// else{
		// 	back='#'+curPreviewBack;
		// }

    //     $('.generator-back').css('background', back);
    // });

  const generatorParamHelpers = (function() {
    return {
      // в зависимости от стейта блокиреум параметр для прелоудера
      toggleBackground: function(state) {
        if (state) {
          $('#backColor').attr('disabled', true);
        } else {
          $('#backColor').removeAttr('disabled');
        }
        $('[data-background-color]').toggleClass('is-disabled', state);
      },
      toggleForeground(state) {
        if (state) {
          $('#foreColor').attr('disabled', true);
        } else {
          $('#foreColor').removeAttr('disabled');
        }
        $('[data-foreground-color]').toggleClass('is-disabled', state)
      },
      toggleFrame: function(state) {
        if (state) {
          $('#framesAmount').attr('disabled', true);
        } else {
          $('#framesAmount').removeAttr('disabled');
        }
        $('[data-frames-amount]').toggleClass('is-disabled', state);
      }
    }
  })();

  $('[data-params-type]').change(function() {
    var $this = $(this);
    var bindSelector = $this.data('bind-param');
    var type = $this.data('params-type');

    if (type === 'gif') {
      // $('[data-background-color]').removeClass('is-disabled');
      generatorParamHelpers.toggleBackground(false);

      // разблокиреум параметр кадров
      generatorParamHelpers.toggleFrame(false);
      $('.non-svg-download-option').show();
      $('.svg-download-option').hide();
    }
    if (type === 'png') {
      if ($('#backTransp').is(':checked')) {
        // $('[data-background-color]').addClass('is-disabled');
        generatorParamHelpers.toggleBackground(true);
      }

      // разблокиреум параметр кадров
      generatorParamHelpers.toggleFrame(false);

      $('.non-svg-download-option').show();
      $('.svg-download-option').hide();
    }
    if (type === 'svg') {
      var toggleBgParam = (
        $('#backTransp').is(':checked') &&
        !$('#grayTransp').is(':checked')
      );
      // блокируем выбор фона
      // если toggleBgParam = true
      generatorParamHelpers.toggleBackground(toggleBgParam);
      // блокируем параметр кадров
      generatorParamHelpers.toggleFrame(true);
      $('.non-svg-download-option').hide();
      $('.svg-download-option').show();
    }
  });

  //PLACING FORM SETTINGS
  $('#origColors').change(function() {
    // если true блокируем парамтр цвета
    var state = $(this).is(':checked');
    generatorParamHelpers.toggleForeground(state);
  });


  $('#grayTransp').change(function() {
    if (
      $('[data-params-type="svg"]').is(':checked') &&
      $('#backTransp').is(':checked')
    ) {
      generatorParamHelpers.toggleBackground(!$(this).is(':checked'));
    }
  });
	// FIXME: remove $('#grayTranspNo').click(function(){
	// 	if($('#imageTypeSvg').is(':checked') && $('#backTranspYes').is(':checked')){
	// 		$('.b-overlay').fadeIn();
	// 	}
	// });

	// $('#grayTranspYes').click(function(){
	// 	if($('#imageTypeSvg').is(':checked') && $('#backTranspYes').is(':checked')){
	// 		$('.b-overlay').fadeOut();
	// 	}
	// });

  $('#backTransp').change(function() {
    // если svg или png
    // и не выбран env параметр
    // блокируем параметр выбора фона
    var toggleBgParam = (
      $(this).is(':checked') &&
      (
        $('[data-params-type="png"]').is(':checked') ||
        $('[data-params-type="svg"]').is(':checked')
      ) &&
      !$('#grayTransp').is(':checked')
    );

    generatorParamHelpers.toggleBackground(toggleBgParam);
});

    // FIXME: remove $('#backTranspYes').click(function(){
    //     if($('#imageTypePng').is(':checked') || ($('#imageTypeSvg').is(':checked') && !$('#grayTranspYes').is(':checked'))){
    //         $('.b-overlay').fadeIn();
    //     }
    // });

    // $('#backTranspNo').click(function(){
    //     $('.b-overlay').fadeOut();
    // });

  // триггер для запуска колорпикера
  $('#foreColor').click(function(){
      $('#foreColorP').click();
  });
  $('#backColor').click(function(){
    $('#backColorP').click();
  });

  // изменение цвета триггера колорпикера
	$('#foreColor').blur(function(){
		$('#foreColorP').css('background', '#'+$('#foreColor').val());
	});
	$('#backColor').blur(function(){
		$('#backColorP').css('background', '#'+$('#backColor').val());
	});

  $('#width').keyup(function() {
      if($('#constrain').is(':checked')){
        $('#height').val((Math.round($(this).val()*curHeight/curWidth)) + ' px');
      }
    }).focus(function(){
      $(this).val(parseInt($(this).val()));
    }).blur(function(){
		  $(this).val(parseInt($(this).val()) + ' px');
	  });

	$('#height').keyup(function(){
		if($('#constrain').is(':checked')){
			$('#width').val((Math.round($(this).val()*curWidth/curHeight)) + ' px');
		}
    }).focus(function(){
      $(this).val(parseInt($(this).val()));
    }).blur(function(){
      $(this).val(parseInt($(this).val()) + ' px');
    });

	// FIXME: remove overlay clicks
	// $('.f-overlay').click(function(){
	// 	alert(texts[100]);
	// });

	// $('.fa-overlay').click(function(){
	// 	alert(texts[110]);
	// });

	// $('.gt-overlay').click(function(){
	// 	alert(texts[100]);
	// });

	// $('.b-overlay').click(function(){
	// 	alert(texts[101]);
	// });

	$('#advanced').click(function(){
		if($('#advancedOptions').is(':hidden')){
			var gTop=Math.ceil(($(window).height()-846)/2);
			if(gTop<0){
				gTop=0;
			}

			var gHeight=846;
			if(gHeight>$(window).height()){
				gHeight=$(window).height();
			}

			$('.generator-holder').animate({height:gHeight, top:gTop}, 300);
			if(!$('.buy-button-block').hasClass('word-preloader')){
				$('.buy-button-block').animate({marginTop:'33px'});
			}
			else{
				$('.buy-button-block').hide();
			}
			$('.generator-back').animate({height:'770px'}, 300);

		}
		else{
			var gTop=Math.ceil(($(window).height()-600)/2);
			if(gTop<0){
				gTop=0;
			}

			var gHeight=600;
			if(gHeight>$(window).height()){
				gHeight=$(window).height();
			}

			$('.generator-holder').animate({height:gHeight, top:gTop}, 300);
			if(!$('.buy-button-block').hasClass('word-preloader')){
				$('.buy-button-block').animate({marginTop:'63px'});
			}
			else{
				$('.buy-button-block').show().removeClass('displaynone');
			}
			$('.generator-back').animate({height:'528px'}, 300);
		}

		$('#advancedOptions').animate({height:'toggle', opacity:'toggle'}, 300);
	});

	$('.buy-button.purchase').mouseover(function(){
		$('.generator-help').html(texts[88]).show().removeClass('displaynone');
		//allowHideTip=false;
	}).mouseout(function(){
		$('.generator-help').hide();
		//allowHideTip=true;
	});

	$('#generatorFrame').attr('src', '');

	var settingsCookie=getCookie('formSettings');
	//alert(settingsCookie);return;
	if(settingsCookie && settingsCookie!='null'){
    var settings=settingsCookie.split('[-]');

		$('#sliderValue5h').val(settings[0]);
		$('#sliderValue5h').change();


		$('#foreColor').val(settings[1]);
		$('#foreColorP').css('background-color', '#'+settings[1]);
		$('#backColor').val(settings[2]);
		$('#backColorP').css('background-color', '#'+settings[2]);

    $('#backTransp').attr('checked', settings[3] === '1').change();
		// if(settings[3]=='1'){
    //   // $('#backTranspYes').click();
		// }
		// else{
    //   // $('#backTranspNo').click();
    //   $('#backTransp').removeAttr('checked')
		// }

    $('#reverse').attr('checked', settings[4] === '1').change();
		// if(settings[4]=='1'){
    //   // $('#reverseYes').click();
		// }
		// else{
    //   // $('#reverseNo').click();
    //   $('#reverse').removeAttr('checked');
		// }

    $('#origColors').attr('checked', settings[5] === '1').change();
		// if(settings[5]=='1'){
    //   // $('#origColorsYes').click();
		// }
		// else{
    //   // $('#origColorsNo').click();
    //   $('#origColors').removeAttr('checked');
		// }

    $('#grayTransp').attr('checked', settings[6] === '1').change();
		// if(settings[6]=='1'){
    //   // $('#grayTranspYes').click();
		// }
		// else{
		// 	// $('#grayTranspNo').click();
		// 	$('#grayTransp').removeAttr('checked');
		// }

		if(settings[7]=='1'){
      // $('#imageTypeGif').click();
      $('[data-params-type="gif"]').attr('checked', true).change();
		}
		else if(settings[7]=='2'){
      // $('#imageTypeSvg').click();
      $('[data-params-type="svg"]').attr('checked', true).change();
		}
		else{
			// $('#imageTypePng').click();
			$('[data-params-type="png"]').attr('checked', true).change();
		}

    $('#inverseColors').attr('checked', settings[8] === '1');
		// if(settings[8]=='1'){
    //   // $('#inverseColorsYes').click();
		// }
		// else{
    //   // $('#inverseColorsNo').click();
    //   $('#inverseColors').removeAttr('checked');
		// }

		if(settings[9]=='1'){
			$('#flipHor').attr('checked', true).change();
			$('#flipVert').attr('checked', false).change();
		}
		else if(settings[9]=='2'){
			$('#flipVert').attr('checked', true).change();
			$('#flipHor').attr('checked', false).change();
		}
		else if(settings[9]=='3'){
			$('#flipHor').attr('checked', true).change();
			$('#flipVert').attr('checked', true).change();
		}
		else{
			$('#flipHor').attr('checked', false).change();
			$('#flipVert').attr('checked', false).change();
		}

		if(settings[10]=='1'){
			$('#constrain').attr('checked', true).change();
		}
		else{
      $('#constrain').attr('checked', false).change();
      $('#keepRatio').addClass('is-disabled').change();
		}

    $('#genAuto').attr('checked', settings[11] === '1').change()
		// if(settings[11]=='1'){
		// 	$('#genAutoYes').click();
		// }
		// else{
		// 	$('#genAutoNo').click();
		// }

		if(settings[12]!='' && settings[13]!=''){
			$('.generator__canvas').css('background-color', settings[12]);
			$('.generator__canvas').css('background-image', settings[13]);

		}
	}

  $('[data-range-control]').click(function() {
    var control = $(this).data('range-control');
    var $range = $('#sliderSpeed');
    var min = parseInt($range.attr('min'), 10);
    var max = parseInt($range.attr('max'), 10);
    var currentRange = parseInt($range.val(), 10);
    if (control === 'plus') {
      currentRange++;
    } else {
      currentRange--;
    }
    if (currentRange > max) {
      currentRange = max;
    }
    if (currentRange < min) {
      currentRange = min;
    }
    $range
      .val(currentRange)
      .get(0)
      .dispatchEvent(new Event('change'));
  });

	$('#resetForm').click(function() {
    // ренж слушает нативные события
    // jquery trigger их не запускает
    $('#sliderSpeed')
      .val(defaultSpeed)
      .get(0)
      .dispatchEvent(new Event('change'));

		$('#foreColor').val('000000');
		$('#foreColorP').css('background-color', '#000000');
    $('#backColor').val('FFFFFF');
		$('#backColorP').css('background-color', '#FFFFFF');

    // $('#backTranspNo').click();
		// $('#reverseNo').click();
    // $('#origColorsNo').click();
    // $('#grayTranspNo').click();
		// $('#imageTypeGif').click();
		// $('#inverseColorsNo').click();
		// $('#genAutoNo').click();
    $('#backTransp').removeAttr('checked');
    $('#reverse').removeAttr('checked');
    $('#origColors').removeAttr('checked');
    $('[data-params-type="gif"]').attr('checked', true);
    $('#inverseColors').removeAttr('checked');
    $('#genAuto').removeAttr('checked');
		$('#flipHor').removeAttr('checked');
    $('#flipVert').removeAttr('checked');
    $('#grayTransp').removeAttr('checked');
    $('#constrain').attr('checked', true);
    $('#framesAmount').val(curFramesAmount);
		$('#resetSizes').click();

    setCookie('formSettings', null, null);

    // сброс залоченных параметров
    $('.generator__params')
      .find('.is-disabled').removeClass('is-disabled')
      .find('input:disabled').removeAttr('disabled');

      $('.generate-button').click();
	});

	// FIXME: remove $('#constrain').click(function(){
	// 	if($(this).is(':checked')){
	// 		if(!$('#imageTypeSvg').is(':checked')){
	// 			$('#width').blur();
	// 			$('.link-line-top, .link-line-bottom').addClass('displaynone');
	// 		}
	// 		else{
	// 			alert(texts[109]);
	// 		}
	// 	}
	// 	else{
	// 		$('.link-line-top, .link-line-bottom').removeClass('displaynone');

	// 		$('#height').val((Math.round(pinfo[curPreloader][1]*parseInt($('#width').val())/pinfo[curPreloader][0])) + ' px');
	// 	}
	// });

	$('#resetSizes').click(function() {
		$('#width').val(curWidth + ' px');
		$('#height').val(curHeight + ' px');
	});


  $('#constrain').change(function() {
    var state = $(this).is(':checked');
    $('#keepRatio').toggleClass('is-disabled', !state);
    if (state) {
      $('#height').val((Math.round(pinfo[curPreloader][1]*parseInt($('#width').val())/pinfo[curPreloader][0])) + ' px');
    }
  });
  //
	$('#keepRatio').click(function() {
    $('#constrain')
      .click()
      .change();
  });
  $('.step-size').click(function() {
    var stepDirection = $(this).data('step-size');
    var width = parseInt($('#width').val(), 10);
    var height = parseInt($('#height').val(), 10);
    if (stepDirection === 'plus') {
      width++;
      height++;
    } else {
      width--;
      height--;
    }
    if (width < 0) width = 0;
    if (height < 0) height = 0;
    $('#width').val(width + ' px');
    $('#height').val(height + ' px');
  });

	$('.logo').click(function(){
		var l=lang;
		if(lang=='en')
			l='';
		location.href='/'+l;
	});

	$('.preloader, [data-params-type="gif"], [data-params-type="png"], #backTransp, #constrain, #origColors, #inverseColors, #flipHor, #flipVert, #grayTransp, #reverse').change(function() {
		new autoGenerate();
	});

	$('#width, #height, #framesAmount').keyup(function(){
		new autoGenerate();
	});

	/*$('#moveAdRight').click(function(){
		var m=parseInt($('#bBlocks').css('margin-left'));
		m-=313;

		$('#bBlocks').animate({marginLeft:m+'px'}, 500, function(){
			if(m<-1100){
				$('#bBlocks').css('margin-left', '0px');
			}
		});
	});

	$('#moveAdLeft').click(function(){
		var m=parseInt($('#bBlocks').css('margin-left'));

		if(m>-100){
			$('#bBlocks').css('margin-left', '-1252px');
			m=-939;
		}
		else{
			m+=313;
		}

		$('#bBlocks').animate({marginLeft:m+'px'}, 500);
	});

	$('.reply').click(function(){
		$('#messageForm').appendTo($(this).parent().parent());
		$('#replyTo').val($(this).attr('id').substr(6));
	});

	$('.approve').click(function(){
		$('#messageAction').val('approve');
		$('#messagePostId').val($(this).attr('id').substr(8));
		$('#aDForm').submit();
	});

	$('.delete').click(function(){
		if(confirm('Are you sure you want to delete this post?')){
			$('#messageAction').val('delete');
			$('#messagePostId').val($(this).attr('id').substr(7));
			$('#aDForm').submit();
		}
	});	*/


	$('.hidey, .showey').click(function(){
		if($('.hidey').is(':hidden')){
			$('.hidey').show().removeClass('displaynone');
			$('.showey').hide();
		}
		else{
			$('.hidey').hide();
			$('.showey').show().removeClass('displaynone');

		}

		$('.comm, ._fancybar').animate({height:'toggle'}, 300);
	});

	// FIXME: remove $('.size-slider').mousedown(function(info){
	// 	cLastLeft=info.pageX;
	// 	allowChangeSize=true;
	// 	cWidth=parseInt($('#width').val());
	// 	cHeight=parseInt($('#height').val());
	// });

	$('.parameters .legend').click(function(){
		$(this).siblings('.close-fieldset').click();
	});

	$('.fieldset').each(function(){
		if(!$(this).hasClass('closed')){
			$(this).css({height: $(this).attr('data-height')+'px'});
		}
	});

	$('.close-fieldset').click(function(){
		$('.fieldset').css('overflow', 'hidden');
		if($(this).hasClass('open-fieldset')){
			if($(this).parent().hasClass('advanced-fieldset')){
				$('.parameters .fieldset:not(.advanced-fieldset) .close-fieldset:not(.open-fieldset)').click();
			}
			else{
				if(!$('.parameters .advanced-fieldset').hasClass('closed')){
					$('.parameters .fieldset.closed:not(.advanced-fieldset)').each(function(){
						$(this).css({height: $(this).attr('data-height')+'px'}).removeClass('closed');
						$(this).children('.close-fieldset').removeClass('open-fieldset');
					});
					$('.parameters .fieldset.advanced-fieldset:not(.closed) .close-fieldset').click();
					return true;
				}
				$('.parameters .fieldset.advanced-fieldset:not(.closed) .close-fieldset').click();
			}
			$(this).removeClass('open-fieldset');
			$(this).parent().css({height: $(this).parent().attr('data-height')+'px'}).removeClass('closed');
		}
		else{
			if($(this).parent().hasClass('advanced-fieldset')){
				$('.parameters .fieldset.closed:not(.advanced-fieldset)').each(function(){
					$(this).css({height: $(this).attr('data-height')+'px'}).removeClass('closed');
					$(this).children('.close-fieldset').removeClass('open-fieldset');
				});
			}
			$(this).addClass('open-fieldset');
			$(this).parent().css({height: '19px'}).addClass('closed');
		}

		setTimeout(function(){$('.fieldset:not(.closed)').css('overflow', 'visible');}, 300);
	});

	//SETTING WORD ENTERING
	$('#word').keyup(function(){
		var wordRE=/^([a-zA-z0-9 \,\./<>\?;:"'!@#\$%\^&*\(\)\[\]\{\}_\+=-|\\а-яА-ЯáÁâÂàÀãÃäÄéÉêÊèÈëËíÍîÎìÌïÏñÑóÓôÔòÒõÕöÖúÚûÛùÙüÜýÝÿŸ])+$/
		if(!wordRE.test($('#word').val()) || $('#word').val().indexOf('`')!=-1){
			showMessage(texts[73], 0);
			return;
		}
		else if($('.generator .generator__canvas').html().indexOf('message err')!=-1) {
			$('.generator .generator__canvas').html('');
		}

		var text=$(this).val();

		var textWidth=0;
		var splittedText=text.split('');

		for(i=0; i<splittedText.length; i++){
			textWidth+=pSymbols[splittedText[i]];
		}

		$('#height').val(Math.ceil(256*parseInt($('#width').val())/textWidth)+' px');


		curWidth=parseInt($('#width').val());
		curHeight=parseInt($('#height').val());

		autoGenerate();

		//str.replace(/A/g, "a");
	});

	//replacing radiobuttons
	$('.real-radio').each(function(){
		var h=$(this).next('label').html();
		if($(this).hasClass('left-radio')){
			$(this).next('label').html('<div class="radio" id="'+$(this).attr('id')+'Radio"><div></div></div>'+h);
		}
		else{
			$(this).next('label').html(h+'<div class="radio" id="'+$(this).attr('id')+'Radio"><div></div></div>');
		}
		if($(this).is(':checked')){
			$(this).next('label').addClass('active');
		}
		$(this).addClass('hidden');
	});

	$('.real-radio, .radio').click(function(){

		if($(this).parent('label').hasClass('disabled') || $(this).hasClass('disabled')){
			if($(this).attr('id') == 'imageTypeSvg'){
				alert(texts[108]);
				return false;
			}
		}
		else{
			$('.real-radio').each(function(){
				var cId=$(this).attr('id')+'Radio';
				if($(this).is(':checked')){
					$('#'+cId).parent().addClass('active');
				}
				else{
					$('#'+cId).parent().removeClass('active');
				}
			});
		}
	});

  // TODO: выяснить что за дичь
  // $('.radio').click(function(){
	// 	var rId=$(this).attr('id').replace('Radio', '');
	// 	$('#'+rId).click();
	// });

	$('#imageTypeGif, #imageTypePng, #imageTypeSvg').click(function(){
		if($(this).attr('id') == 'imageTypeSvg'){
			maxSize = 2000;
			if(!$('#constrain').is(':checked')){
				$('#constrain').click();
			}
		}
		else{
			maxSize = 256;

			if(parseInt(pinfo[curPreloader][0]) >= parseInt(pinfo[curPreloader][1])){
				if(parseInt($('#width').val()) > maxSize){
					$('#width').val(maxSize+' px');
					$('#height').val((Math.round(pinfo[curPreloader][1]*maxSize/pinfo[curPreloader][0])) + ' px');
				}
			}
			else{
				if(parseInt($('#height').val()) > maxSize){
					$('#height').val(maxSize+' px');
					$('#width').val((Math.round(pinfo[curPreloader][0]*maxSize/pinfo[curPreloader][1])) + ' px');
				}
			}
		}
	});

	$('.real-radio').focus(function(){
		var cId=$(this).attr('id')+'Radio';
		$('#'+cId).addClass('focused');
	}).blur(function(){
		var cId=$(this).attr('id')+'Radio';
		$('#'+cId).removeClass('focused');
	});

	var switchesList = new Array();

	$('.radio-switch[data-switch-position=1]').each(function(){
		var name = $(this).attr('name');
		$('<div class="switch'+(!$(this).is(':checked')?' second-position':'')+'" data-switch-name="'+name+'"><div data-value="1">'+texts[97]+'</div><div data-value="0">'+texts[98]+'</div><div class="switch-ball"></div></div>').insertAfter($(this));

		$('.switch[data-switch-name='+name+']').click(function(){//return false;
			if(allowSwitch){
				if($(this).hasClass('second-position')){
					$(this).removeClass('second-position');
					$('.radio-switch[name='+$(this).attr('data-switch-name')+'][data-switch-position=1]').click();
				}
				else{
					$(this).addClass('second-position');
					$('.radio-switch[name='+$(this).attr('data-switch-name')+'][data-switch-position=0]').click();
				}
			}
		});
	});

	$('.radio-switch').click(function(){
		if($(this).attr('data-switch-position') == '1'){
			$('.switch[data-switch-name='+$(this).attr('name')+']').removeClass('second-position');
		}
		else{
			$('.switch[data-switch-name='+$(this).attr('name')+']').addClass('second-position');
		}
	});

	$('.switch .switch-ball').mousedown(function(info){//currentSwitchPointer is disabled at ('body').mouseup
		currentSwitchPointer = $(this);
		cLastLeft = info.pageX;
	});

	$('.switch .switch-ball').mousemove(function(info){
		if(currentSwitchPointer){
			allowSwitch = false;

			if(parseInt($(this).css('left'))>10 && info.pageX < cLastLeft){
				$(this).parent('.switch').addClass('second-position');
			}
			else if(parseInt($(this).css('left'))<10 && info.pageX > cLastLeft){
				$(this).parent('.switch').removeClass('second-position');
			}
		}
	});

	$('input').each(function(){
		if($(this).attr('title')=='' && $(this).attr('placeholder')!=''){
			$(this).attr('title', $(this).attr('placeholder'));
		}
	});

	//replacing checkboxes
	$('#downloadOptions input[type=checkbox], .personal-info-form input[type=checkbox]').each(function(){
		var h=$(this).next('label').html();
		$(this).next('label').html('<div class="checkbox'+($(this).is(':checked')?' active':'')+($(this).hasClass('inactive')?' inactive':'')+'" id="'+$(this).attr('id')+'Checkbox"><div></div></div>'+h);
		$(this).addClass('hidden');
	});

	$('#downloadOptions input[type=checkbox], .personal-info-form input[type=checkbox]').click(function(){
		var cId=$(this).attr('id')+'Checkbox';

		if($(this).is(':checked')){
			$('#'+cId).addClass('active');
		}
		else{
			$('#'+cId).removeClass('active');
		}
	});

	$('#downloadOptions input[type=checkbox], .personal-info-form input[type=checkbox]').focus(function(){
		var cId=$(this).attr('id')+'Checkbox';
		$('#'+cId).addClass('focused');
	}).blur(function(){
		var cId=$(this).attr('id')+'Checkbox';
		$('#'+cId).removeClass('focused');
	});

	//Setting sprites feature
	$('#downloadSprites').click(function(){
		if($(this).is(':checked')){
			$('#animateJSCheckbox').removeClass('inactive');
			$('#animateCanvasCheckbox').removeClass('inactive');
		}
		else{
			$('#animateJSCheckbox').addClass('inactive');
			$('#animateCanvasCheckbox').addClass('inactive');
		}
	});

	if(location.href.indexOf('letters_numbers_words')!=-1)
		// $('#word').keyup();

	$('.dialog_box .dialog-close, .page_overlay').click(function(){
		$('.dialog_box, .page_overlay').fadeOut(300);
	});

	$('.show-dialog-box').click(function(){
		$('.dialog_box, .page_overlay').fadeIn(300);
	});

	$('.generator__close').click(function(){
		hideGenerator();
  });
  $('.generator').click(function(evt) {
    if (!$('.generator__dialog').get(0).contains(evt.target)) {
      hideGenerator();
    }
  })

	$('#downloadOptions').click(function(){
		if(allowHideDownloadOptions){
			if($(this).hasClass('open')){
				$(this).removeClass('open');
			}
			else{
				$(this).addClass('open');
			}
		}
	});

	$('#downloadOptions .download-options').mouseover(function(){
		allowHideDownloadOptions=false;
	}).mouseout(function(){
		allowHideDownloadOptions=true;
	});

	// REGISTRATION STUFF

	$('.login-registration input, .personal-info-form input').keydown(function(){
		$(this).removeClass('input-error').removeAttr('title');
	}).click(function(){
		$(this).removeClass('input-error').removeAttr('title');
	});

	$('.login-registration .button').click(function(){
		var attr = $(this).attr('data-form');

		if (typeof attr !== typeof undefined && attr !== false) {
			$('.'+attr).submit();
		}
	});

	$('.form-signin').submit(function(){

		var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!emailRegex.test($('#login-email').val())){
			inputError('#login-email', '.login-email-error');
			return false;
		}
		if($.trim($('#login-password').val())==''){
			inputError('#login-password', '.login-pass-error');
			return false;
		}

    var $btn = $(this).find('[data-form');
    $btn.addClass('btn--loading');

		$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'login', email:$('#login-email').val(), password:$('#login-password').val()}, function(data){
			$btn.removeClass('btn--loading');
			if(data=='error:email'){
				inputError('#login-email', '.login-email-error');
			}
			else if(data=='error:password'){
				inputError('#login-password', '.login-pass-error');
			}
			else if(data=='success'){
				$('.signin').hide();
				$('.signin-profile, .logout').show().removeClass('displaynone');
				$('.cart-icon').addClass('cart-icon-signed-in');
				// $('.login-registration').hide();
				// $('.after-login').show().removeClass('displaynone');
				$('.auth').hide();
        $('.auth-success').show();

				if(location.href.indexOf('/?redirect')!=-1){
					$('.message').hide();
					var toRedirect=location.href.split('?redirect=');
					location.href=toRedirect[1];
				}
				else if(location.href.indexOf('/'+identifyLang()+'/profile')!=-1 || location.href.indexOf('/'+identifyLang()+'/submit')!=-1){
					window.location.reload();
				}
			}
			else{
				alert(texts[4]);
			}
		});
		return false;
	});

	$('.form-forgot').submit(function(){

		var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!emailRegex.test($('#forgot-email').val())){
			inputError('#forgot-email', '', texts[5]);
			return false;
		}

		if($('.forgot-confirm').is(':hidden')){
      var $btn = $(this).find('[data-form');
      $btn.addClass('btn--loading');

			$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'reset_pass', email:$('#forgot-email').val()}, function(data){
				$btn.removeClass('btn--loading');
				if(data=='error:email'){
					inputError('#forgot-email', '', texts[6]);
				}
				else if(data=='success'){
					$('input').removeClass('input-error');
					$('#confirmationSent').show().removeClass('displaynone');
					$('.forgot-confirm').show().removeClass('displaynone');
				}
				else{
					alert(texts[4]);
				}
			});
		}
		else{
			if($('#forgot-code').val()==''){
				inputError('#forgot-code', '.forgot-code-error');
			}
			else{
				$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'reset_pass_cofirm', email:$('#forgot-email').val(), code:$('#forgot-code').val()}, function(data){
					$('.forgot-loader').hide();
					if(data=='error:email'){
						$('.forgot-email-error').html();
						inputError('#forgot-email', '', texts[6]);
					}
					else if(data=='error:code'){
						inputError('#forgot-code', '', texts[7]);
					}
					else if(data=='error:limit'){
						inputError('#forgot-email', '', texts[8]);
						$('#confirmationSent').hide();
						$('.forgot-confirm').hide();
					}
					else if(data=='success'){
						$('.forgot-box').hide();
						$('.login-box').show().removeClass('displaynone');
						$('#passwordSent').show().removeClass('displaynone');
						$('#confirmationSent').hide();
					}
					else{
						alert(texts[4]);
					}
				});
			}
		}

		return false;
	});

	$('.form-signup').submit(function(){
		if(!$('.main-reg-form').is(':hidden')){//register
			var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!emailRegex.test($('#reg-email').val())){
				inputError('#reg-email', '.reg-email-error');
				return false;
			}

			var passwordRegex=/^([a-zA-Z0-9_\.\-\+\=\!\@\#\$\%\^\&\*\(\)\?\]\[\}\{])+$/;
			if(!passwordRegex.test($('#reg-password').val())){
				$('.reg-pass-error').html();
				inputError('#reg-password', '', texts[9]);
				return false;
			}

      var $btn = $(this).find('[data-form');
      $btn.addClass('btn--loading');

			$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'signup', email:$('#reg-email').val(), password:$('#reg-password').val()}, function(data){
        $btn.removeClass('btn--loading');

				if(data=='error:email'){
					inputError('#reg-email', '', texts[10]);
				}
				else if(data=='error:email_exists'){
					inputError('#reg-email', '', texts[11]);
				}
				else if(data=='error:password'){
					inputError('#reg-password', '.reg-pass-error');
				}
				else if(data=='success'){
          $('.enter-confirmation-box').removeClass('displaynone');
          $('.registration-box').addClass('displaynone');
				}
				else{
					inputError('#reg-email', '', texts[12]);
				}
			});
		}
		else{//confirming email
			if($.trim($('#confirmation-code').val())==''){
				inputError('#confirmation-code', '', texts[13]);
			}
			else{
				$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'confirm_email', email:$('#reg-email').val(), code:$.trim($('#confirmation-code').val())}, function(data){
					if(data=='error:wrong_code'){
						inputError('#confirmation-code', '', texts[13]);
					}
					else if(data=='error:already_confirmed'){
						inputError('#confirmation-code', '', texts[14]);
					}
					else if(data=='error:resend'){

						$('.confirmation').hide();
						$('.confirm-button').addClass('displaynone');
						$('.register-button, .main-reg-form').show().removeClass('displaynone');
						inputError('#reg-email', '', texts[15]);
					}
					else if(data=='error:no_email'){
						inputError('#confirmation-code', '', texts[16]);
					}
					else if(data=='success'){
            $('.auth').hide();
            $('.auth-success').show();
						// $('.login-registration').html('<div class="confirm">'+texts[17]+'.</div>');
						// $('#loginForm').hide();
						// $('#profile, #logout').show().removeClass('displaynone');

						// $('.signin').hide();
						// $('.signin-profile').show().removeClass('displaynone');
						// $('.cart-icon').addClass('cart-icon-signed-in');
						// $('.login-registration').hide();
						// // $('.after-login').show().removeClass('displaynone');
            // $('.auth-success').show();

						if(location.href.indexOf('/?redirect')!=-1){
							$('.message').hide();
							var toRedirect=location.href.split('?redirect=');
							location.href=toRedirect[1];
						}
						else if(location.href.indexOf('/'+identifyLang()+'/profile')!=-1 || location.href.indexOf('/'+identifyLang()+'/submit')!=-1){
							window.location.reload();
						}
					}
					else{
						$('.reg-confirmation-error').html(texts[12]).addClass('visible');
					}
				});
			}
		}

		return false;
	});


	$('.form-resend-confirmation').submit(function(){

		var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!emailRegex.test($('#resend-email').val())){
			inputError('#resend-email', '', texts[18]);
			return false;
		}

    var $btn = $(this).find('[data-form');
    $btn.addClass('btn--loading');

		$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'resend_confirmation', email:$('#resend-email').val()}, function(data){
      $btn.removeClass('btn--loading');
			if(data=='error:noemail'){
				inputError('#resend-email', '', texts[19]);
			}
			else if(data=='error:confirmed'){
				inputError('#resend-email', '', texts[20]);
			}
			else if(data=='success'){
				$('.resend-confirmation-box').hide();
				$('#confirm-email').val($('#resend-email').val());
				$('.enter-confirmation-box').show().removeClass('displaynone');
			}
			else{
				alert(texts[4]);
			}
		});

		return false;
	});


	$('.form-confirm').submit(function(){
		var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!emailRegex.test($('#confirm-email').val())){
			inputError('#confirm-email', '', texts[18]);
			return false;
		}
		if($('#reconfirmation-code').val()==''){
			inputError('#reconfirmation-code', '', texts[7]);
			return false;
		}

    var $btn = $(this).find('[data-form');
    $btn.addClass('btn--loading');

		$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'reconfirm_email', email:$('#confirm-email').val(), code:$('#reconfirmation-code').val()}, function(data){
      $btn.removeClass('btn--loading');
			if(data=='error:noemail'){
				inputError('#confirm-email', '', texts[19]);
			}
			else if(data=='error:confirmed'){
				inputError('#confirm-email', '', texts[20]);
			}
			else if(data=='error:wrong_code'){
				inputError('#reconfirmation-code', '', texts[7]);
			}
			else if(data=='error:resend'){
				$('.confirmation, .enter-confirmation-box').hide();
				$('.confirm-button').addClass('displaynone');
				$('.register-button, .main-reg-form, .registration-box').show().removeClass('displaynone');
				inputError('#reg-email', '', texts[21]);
			}
			else if(data=='success'){
        $('.auth').hide();
        $('.auth-success').show();
			}
			else{
				alert(texts[4]);
			}
		});

		return false;
	});



	$('#showForgotPassword').click(function(){
		$('.forgot-box').show().removeClass('displaynone');
		$('.login-box').hide();
	});

	$('#showSignIn').click(function(){
		$('.forgot-box').hide();
		$('.login-box').show().removeClass('displaynone');
	});

	$('.no-confirmation-arrived-show').click(function(){
		$('.resend-confirmation-box').show().removeClass('displaynone');
		$('.registration-box, .enter-confirmation-box').hide();
	});

	$('.enter-confirmation-show').click(function(){
		$('.resend-confirmation-box, .registration-box').hide();
		$('.enter-confirmation-box').show().removeClass('displaynone');
	});

	$('.registration-form-show').click(function(){
		$('.resend-confirmation-box,.enter-confirmation-box').hide();
		$('.registration-box').show().removeClass('displaynone');
	});

	$('.logout').click(function(){
		$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'logout'}, function(data){
			if(data=='success'){
				$('.signin').show().removeClass('displaynone');
				$('.signin-profile, .logout').hide();
				$('.cart-icon').removeClass('cart-icon-signed-in');

				if(location.href.indexOf('/'+identifyLang()+'/profile')!=-1 || location.href.indexOf('/'+identifyLang()+'/submit')!=-1){
					location.href='/preloaders/'+identifyLang();
				}
			}
			else{
				alert(texts[24]);
			}
		});
	});

	//setting up favorites
	$('.favorite').click(function() {
		$(this).addClass('loading');
		$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'add_to_favorites', preloader_id: $(this).attr('data-preloader-id')}, function(data){
			$('.favorite').removeClass('loading');
			if(data=='success'){
				ajaxMessage(texts[74], 1);
			}
			else if(data == 'no-insert'){
				ajaxMessage(texts[75], 0);
			}
			else{
				ajaxMessage(texts[76], 0);
			}
		});
	});

	/*$('#keywordsInput').autocomplete({
		source: '/jscripts/autocomplete-tags.js.php',
		minLength: 2,
		open: function() {
			var position = $(".ui-autocomplete.ui-front").position(),
			top = position.top;

			$(".ui-autocomplete.ui-front").css({top: top -9 + "px" });

		},
		select: function(event, ui) {
			$('#keywordsInput').val(ui.item.value);
			$('#mainSearchForm').submit();
		}
	});*/

	$('#keywordsInput').keyup(function(e){
		getTags(e, true);
	}).keydown(function(e){
		getTags(e, false);
	}).blur(function(){
		setTimeout(function(){$('.tags-list').hide()}, 100);
	});

	$('#mainSearchForm').submit(function(event){
		event.preventDefault();
		location.href='/preloaders/'+identifyLang()+'/search/'+$('#keywordsInput').val().toLowerCase();
	});


	var origRating = $('.rating-holder').attr('data-original-rating');

	$('.rating-star').click(function(){
		var page = location.href.replace('https://icons8.com/preloaders', '');
		$.post('/preloaders/rating.php', {'rating':$(this).attr('data-rating'), 'page':page}, function(data){
			if(data=='2'){
				alert(texts[105]);
			}
			else if(data == '1'){
				alert(texts[106]);
			}
			else{
				alert(texts[107]);
			}
		})
	});

	$('.rating-star').mouseover(function(){
		$('.rating-star').removeClass('filled');

		for(i=1; i<=$(this).attr('data-rating'); i++){
			$('.rating-star[data-rating='+i+']').addClass('filled');
		}
	}).mouseout(function(){
		$('.rating-star').removeClass('filled');
		$('.rating-star').each(function(){
			if($(this).attr('data-rating')<=origRating){
				$(this).addClass('filled');
			}
		});
	});

	//cart


	$('.cart-top-holder, .cart-top-holder .cart-icon, .cart-top-holder .cart-items-amount').click(function(){
		allowHideCart = false;
    $('.cart').addClass('is-open');
		// $('.cart').css({height: $(window).height()+'px'});
		// $('.cart').animate({right: 0}, 300);
	});

	$('.cart-icon, .cart').mouseover(function(){
		allowHideCart = false;
	}).mouseout(function(){
		allowHideCart = true;
	});

	$('.cart__close').click(function() {
    $('.cart').removeClass('is-open');
		// $('.cart').animate({right: '-380px'}, 300);
	});


	//responsive elements
	$('.projects').click(function(){
		if($(window).width() < 1140){
			if($('.projects li').is(':hidden')){
				$('.projects li').show().width(170);
			}
			else{
				$('.projects li').hide().width(24);
			}
		}
	});

  // FIXME: remove
	// $('header nav').click(function(){

	// 	if($(window).width() <= 1100){
	// 		if($('header nav a').is(':hidden')){
	// 			$('header nav a').css('display', 'block');
	// 		}
	// 		else{
	// 			$('header nav a').hide();
	// 		}
	// 	}
	// });

	$('span.p-price').each(function(){
		if($(this).html()=='0'){
			$(this).siblings('span.p-currency').hide();
			$(this).html(texts[104]);
		}
	});

	$('.plans-list article').click(function(){
		location.href=$(this).children('a').attr('href');
	});

	$('.page-loader').fadeOut(200);

	// FIXME: remove  if($('.generator-area').length > 0){
	// 	var r = new Slider(document.getElementById("slider"), document.getElementById("slider-input"));
	// 	r.setMinimum(minSpeed);
	// 	r.setMaximum(maxSpeed);

	// 	var ri = document.getElementById("sliderValue5h");
	// 	ri.onchange = function () {
	// 	r.setValue(parseInt(this.value));
	// 	};


	// 	r.onchange = function () {
	// 	var cr = document.getElementById("color-result");
	// 	ri.value = r.getValue();

	// 	if (typeof window.onchange == "function")
	// 	window.onchange();

	// 	new autoGenerate();
	// 	var w = Math.ceil($('.line').width() - parseInt($('.handle').css('left'))) ;

	// 	if(w < 0){
	// 		w = 0;
	// 	}

	// 	$('.transparent-line').css('width', w+'px');
	// 	};

	// 	r.setValue(defaultSpeed);

	// 	function fixSize(){
	// 	r.recalculate();
	// 	}

	// 	$('.slider-plus').click(function(){
	// 		r.setValue(r.getValue() + 1);
	// 	});
	// 	$('.slider-minus').click(function(){
	// 		r.setValue(r.getValue() - 1);
	// 	});
	// }

	$("form[name=payment_form]").submit(function(e){
	if($("form[name=payment_form] input[name=email]").length>0){
		var emailRegex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!emailRegex.test($("form[name=payment_form] input[name=email]").val())){
			$("form[name=payment_form] input[name=email]").focus();
			$(".login-email-error").addClass("visible");
			return false;
		}
	}
	});

	$("form[name=payment_form] input[name=email]").keydown(function(){
		$(".login-email-error").removeClass("visible");
	});

	if($('form[name=pay]').length > 0){
		$('input[name=submit]').click();
	}

	if($('.skrill-form').length > 0){
		$('#skrillSubmit').click();
	}

	$('input[name=payment_system]').click(function(){
		if($(this).val()=='cryptocurrency'){
			$('#currencyUSD').click().change();
			$('.currency-selection').hide();
			$('.cryptocurrency-selection').show();
			$('.currency-header').show();
		}
		else if($(this).val()=='skrill'){
			$('#currencyUSD').click().change();
			$('.currency-header').hide();
			$('.currency-selection').hide();
			$('.cryptocurrency-selection').hide();
		}
		else{
			$('.currency-selection').show();
			$('.cryptocurrency-selection').hide();
			$('.currency-header').show();
		}
	});

	$('.bottom-a .close').mouseover(function(){
		bottomACloseOver = true;
	}).mouseout(function(){
		bottomACloseOver = false;
	}).click(function(){
		$('.bottom-a').hide();
		$('.share').insertAfter('.copyright');
		$.cookie('hideFreeShare', true, { expires: 30, path: '/' });
	});

	$('.share').click(function(){
		$.cookie('hideFreeShare', true, { expires: 30, path: '/' });
	});

	$('.bottom-a').click(function(){
		if(!bottomACloseOver){
			$(this).addClass('open');
			$('.share').appendTo('.bottom-a');
		}
	});

	if(!$.cookie('hideFreeShare')){
		$('.bottom-a').show();
	}

	if(location.href.indexOf('payment/complete')!=-1){
		jc.clearCart();
		setupCart();
	}

	if(typeof doPreviews !== 'undefined'){
		initPreviews(false);
	}

	$('#confirmTransaction').click(function(){
		var cOrderId = $(this).attr('data-order-id');
		var cWallet = $('#wallet').val();

		$(this).attr('disabled', 'disabled');

		if($.trim(cWallet) != ''){
			$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'confirm_crypto_order', order_id:cOrderId, wallet:cWallet}, function(data){
				alert(data);
				$(this).attr('disabled', false);
			});
		}
		else{
			alert('Please, enter wallet address from which you paid for your order');
		}
	});

	if($('input[name=payment_system]').length > 0){
		$('input[name=payment_system]').each(function(){
			if($(this).is(':checked')){
				$(this).click();
			}
		});
	}

	$('.max-form').submit(function(e){
		e.preventDefault();

		$.post('/preloaders/rgb3dsmax.php', {'hex_input':$('input[name=hex_input]').val()}, function(data){
			$('.result').html(data);
		});

		return false;
	});

	$('.promocode').keyup(function(){
		clearTimeout(promoTimeout);
		promoTimeout = setTimeout(function(){checkPromoCode($('.promocode'))}, 1000);
	}).keydown(function(){
		clearTimeout(promoTimeout);
		promoTimeout = setTimeout(function(){checkPromoCode($('.promocode'))}, 1000);
	}).blur(function(){
		clearTimeout(promoTimeout)
		checkPromoCode($(this));
	});

	if(location.href.indexOf('payment') != -1 && $('.promocode').val() != ''){
		checkPromoCode($('.promocode'));
	}

	$('.order-hours').keydown(function(){
		$('.total span').html('EUR'+($(this).val()*15));
	}).keyup(function(){
		$('.total span').html('EUR'+($(this).val()*15));
	});

	$('.order-hours').keydown();
});

function checkPromoCode(inputObj){
	if(!curProductPrice && $('.checkout-summary__total').length > 0){
		curProductPrice = parseFloat($('.checkout-summary__total').html().replace('$', ''));
	}
	else{
		curProductPrice = '';
	}

	if(curProductPrice && curProductPrice.indexOf('EUR') != -1){

		$.post('/preloaders/actions_handler.php?lang='+identifyLang(), {action:'check_promo', code:inputObj.val()}, function(data){
			data = parseInt(data);

			if(data > 0){
				$('.checkout-summary__total').html('$'+(Math.round(curProductPrice * (100 - data))/100));
				$('.promocode').removeClass('input-error');
			}
			else{
				$('.checkout-summary__total').html('$'+curProductPrice);
				inputError('.promocode', '.promocode-error');
			}
		});
	}
}

function inputError(el, errClass, html){
	$(el).addClass('has-error').attr('title', html?html:$(errClass).html());
}

function filterChanged(showButton) {
  $('.filter__button').toggleClass('inline-block', showButton);
	$('.selected-type, .selected-category').unbind('click');
	$('.selected-type').click(function() {
    $('.filter__types input[data-type="'+ $(this).attr('data-type') +'"]')
      .attr('checked', false)
      .trigger('change');
	});
	$('.selected-category').click(function() {
    $('.filter__categories .checkbox input[data-category="'+ $(this).attr('data-category') +'"]')
      .removeAttr('checked')
      .trigger('change');
	});
}

function disableDownloadButton(){

	$('.download-button').addClass('inactive');

	$('.download-button').unbind('mouseover');
	$('.download-button').mouseover(function(){
		$('.generator-help').html(texts[90]).show().removeClass('displaynone');
		//allowHideTip=false;
	});

	$('.download-button').unbind('mouseout');
	$('.download-button').mouseout(function(){
		$('.generator-help').hide();
		//allowHideTip=true;
	});

	$('.download-button').unbind('click');
	$('.download-button').click(function(){
		alert(texts[90]);
	});

	$('.download-button').attr('onclick', 'return false;');
}

function enableDownloadButton(){
	$('.download-button').unbind('mouseover').unbind('mouseout').removeClass('inactive');
}

function setupCart(){
	var cartContents = jc.getCart();

	var cartItemsAmount = 0;

	$.each(cartContents, function(){
		cartItemsAmount++;
	});

	if(cartItemsAmount>0){
		$('.cart-items-amount').html(cartItemsAmount);
		// $('.cart-message').hide();
		$('.cart__empty').hide();
		// $('.cart-table').html('');
		$('.cart__table').html('');

		var cartTotal = 0;

		$.each(cartContents, function(preloaderId, preloaderData){
			// $('.cart-table').append('<tr data-preloader-id="'+preloaderId+'"><td class="cart-img"><img src="'+preloaderData['img']+'" alt="" /></td><td class="cart-name"><div class="cart-name">'+preloaderData['name']+'<span class="cart-price">'+(isSubscripted?'':'$'+preloaderData['price'])+'</span></td><!--td><span class="cart-remove" data-preloader-id="'+preloaderId+'"> - </span> <input type="text" class="cart-amount" data-preloader-id="'+preloaderId+'" value="'+preloaderData['amount']+'" /> <span class="cart-add" data-preloader-id="'+preloaderId+'"> + </span></td--><td style="width:17px"><img src="https://faviconer.net/img/delete-from-cart.svg" class="cart-delete" data-preloader-id="'+preloaderId+'" /></td></tr>');

      $('.cart__table').append(
        '<div class="cart__row" data-preloader-id="'+preloaderId+'">'+
          '<div class="cart__img"><img src="'+preloaderData['img']+'" alt="" /></div>'+
          '<div class="cart__info">'+
            '<div class="cart__name">'+preloaderData['name']+'</div>'+
            '<div class="cart__price">'+(isSubscripted?'':'$'+preloaderData['price'])+'</div>'+
          '</div>'+
          '<button class="btn btn--sm btn--only-icon cart__remove" data-preloader-id="'+preloaderId+'">'+
            '<svg><use xlink:href="/preloaders/dist/images/icon-sprite.svg#close"></use></svg>'+
          '</button>'+
        '</div>'
      );


			cartTotal += preloaderData['price'];
		});

		cartTotal = Math.round(cartTotal * 100) / 100;

		$('.cart__total strong').html('$'+(isSubscripted?'0':cartTotal));

		if($('.cart-table-big').length>0){

			if($.cookie('jCartSites') && JSON.parse($.cookie('jCartSites'))){
				cartSites = JSON.parse($.cookie('jCartSites'));
			}
			else{
				cartSites = {};
			}

			// $('.cart-table-big').html('<tr><th>'+texts[77]+'</th><th>'+texts[78]+'</th><th>'+texts[79]+'</th><th>'+(isSubscripted?texts[83]:texts[81])+'</th><th></th></tr>');

      $('.cart-table-big').html(
        '<div class="checkout-row checkout-row--head">'+
          '<div class="checkout-row__th">'+texts[77]+'</div>'+
          '<div class="checkout-row__th">'+texts[78]+'</div>'+
          '<div class="checkout-row__th">'+texts[79]+'</div>'+
          '<div class="checkout-row__th">'+(isSubscripted?texts[83]:texts[81])+'</div>'+
          '<div class="checkout-row__th"></div>'+
        '</div>'
      );

			// $.each(cartContents, function(preloaderId, preloaderData){
			// 	$('.cart-table-big').append('<tr data-preloader-id="'+preloaderId+'"><td class="cart-img"><img src="'+preloaderData['img']+'" alt="" /></td><td class="cart-name">'+preloaderData['name']+'</td><td class="cart-price">'+(isSubscripted?'$0':'$'+preloaderData['price'])+'<input type="hidden" name="preloader_id_'+preloaderId+'" value="'+preloaderId+'" /><input type="hidden" name="preloader_name_'+preloaderId+'" value="'+preloaderData['name']+'" /></td><!--td><span class="cart-remove" data-preloader-id="'+preloaderId+'"> - </span> <input type="text" class="cart-amount" data-preloader-id="'+preloaderId+'" value="'+preloaderData['amount']+'" /> <span class="cart-add" data-preloader-id="'+preloaderId+'"> + </span></td--><td class="cart-sites" data-preloader-id="'+preloaderId+'"></td><td><img src="https://faviconer.net/img/delete-from-cart.svg" class="cart-delete" data-preloader-id="'+preloaderId+'" /></td></tr>');
      // $.each(cartContents, function(preloaderId, preloaderData){
			// 	$('.cart-table-big').append('
      //   <tr data-preloader-id="'+preloaderId+'">
      //     <td class="cart-img"></td>
      //     <td class="cart-name">'+preloaderData['name']+'</td>
      //     <td class="cart-price">'+(isSubscripted?'$0':'$'+preloaderData['price'])+'<input type="hidden" name="preloader_id_'+preloaderId+'" value="'+preloaderId+'" /><input type="hidden" name="preloader_name_'+preloaderId+'" value="'+preloaderData['name']+'" />
      //     </td>
      //     <td class="cart-sites" data-preloader-id="'+preloaderId+'"></td>
      //     <td><img src="https://faviconer.net/img/delete-from-cart.svg" class="cart-delete" data-preloader-id="'+preloaderId+'" /></td>
      //   </tr>');

      $.each(cartContents, function(preloaderId, preloaderData){
        $('.cart-table-big').append(
          '<div class="checkout-row" data-preloader-id="'+preloaderId+'">'+
            '<img class="checkout-row__cell checkout-row__cell--img" src="'+preloaderData['img']+'" alt="">'+
            '<div class="checkout-row__cell checkout-row__cell--title">'+preloaderData['name']+'</div>'+
            '<div class="checkout-row__cell">'+
              (isSubscripted?'$0':'$'+preloaderData['price'])+
              '<input type="hidden" name="preloader_id_'+preloaderId+'" value="'+preloaderId+'">'+
              '<input type="hidden" name="preloader_name_'+preloaderId+'" value="'+preloaderData['name']+'">'+
            '</div>'+
            '<div class="checkout-row__cell checkout-row__cell--input" data-preloader-id="'+preloaderId+'"></div>'+
            '<button type="button" class="checkout-row__cell checkout-row__cell--remove btn btn--only-icon cart-delete" data-preloader-id="'+preloaderId+'">'+
              '<svg><use xlink:href="/preloaders/dist/images/icon-sprite.svg#close"></use></svg>'+
            '</button>'+
          '</div>'
        );

				//for(i=0; i<preloaderData['amount']; i++){
				if(cartSites[preloaderId] && Object.keys(cartSites[preloaderId]).length > 0){
					$.each(cartSites[preloaderId], function(siteIndex, siteName){
						$('.checkout-row__cell--input[data-preloader-id='+preloaderId+']').append('<input type="text" class="cart-sites-input form-control" name="site_'+preloaderId+'_'+siteIndex+'" placeholder="'+texts[102]+'" value="'+siteName+'" />');
					});
				}
				else{
					$('.checkout-row__cell--input[data-preloader-id='+preloaderId+']').append('<input type="text" class="cart-sites-input form-control" name="site_'+preloaderId+'_0" placeholder="'+texts[102]+'" />');
				}
				//}
			});

			$('.checkout-summary__total').html('$'+(isSubscripted?'0':cartTotal));
		}



		$('.cart-remove, .cart-add, .cart__remove, .cart-delete').unbind('click');
		$('.cart__remove, .cart-delete').click(function(){
			var preloaderId = $(this).attr('data-preloader-id');

			if($('.cart-amount[data-preloader-id='+preloaderId+']').val() <= 1 ){
				jc.removeItem(preloaderId);
			}
			else{
				jc.decreaseItemAmount(preloaderId, 1);
			}

			setupCart();
		});

		$('.cart-add').click(function(){
			var preloaderId = $(this).attr('data-preloader-id');

			jc.increaseItemAmount(preloaderId, 1);
			setupCart();
		});

		$('.cart__remove, .cart-delete').click(function(){
			var preloaderId = $(this).attr('data-preloader-id');

			jc.removeItem(preloaderId);
			setupCart();
		});
	}
	else{
		// $('.cart-table').html('');
		$('.cart__table').html('');
		$('.cart__total strong').html('$0');
		$('.cart-items-amount').html('0');
		// $('.cart-message').show().removeClass('displaynone');
		$('.cart__empty').show();
	}


	setupCartSites();
	addCartSiteInput();
}

function setupCartSites(){
	$('.cart-sites-input').unbind('keydown').unbind('keyup');

	$('.cart-sites-input').keyup(function(){
		addCartSiteInput();
	}).keydown(function(){
		addCartSiteInput();
	});
}

function addCartSiteInput(){
	var cartContents = jc.getCart();

	cartSites = {};

	$.each(cartContents, function(preloaderId, preloaderData){
		var lastSiteId = $('.cart-sites[data-preloader-id='+preloaderId+'] .cart-sites-input').length-1;

		if($('input[name=site_'+preloaderId+'_'+lastSiteId+']').val()!=''){
			$('.cart-sites[data-preloader-id='+preloaderId+']').append('<input type="text" class="cart-sites-input textfield" name="site_'+preloaderId+'_'+(parseInt(lastSiteId)+1)+'" placeholder="" />');
			setupCartSites();
		}
	});

	$('.cart-sites-input').each(function(){
		if($(this).val() != '' && $(this).val() != null){
			sitePreloaderId = $(this).parent().attr('data-preloader-id');

			if(sitePreloaderId){
				//alert(sitePreloaderId);
				if(cartSites[sitePreloaderId]){
					cartSites[sitePreloaderId][Object.keys(cartSites[sitePreloaderId]).length] = $(this).val();
				}
				else{
					cartSites[sitePreloaderId] = {};
					cartSites[sitePreloaderId][0] = $(this).val();
				}
			}
		}
	});

	$.cookie('jCartSites', JSON.stringify(cartSites), { expires: 2, path: '/' });
}


function setupOrderSites(orderId, preloaderId, siteId){
	if(!orderId){
		$('.order-sites-input').unbind('keydown').unbind('keyup');

		$('.order-sites-input').keyup(function(){
			clearTimeout(orderSiteTypeTimeout);

			orderSiteTypeTimeout = setTimeout('addOrderSiteInput()', 1000);
		}).keydown(function(){
			clearTimeout(orderSiteTypeTimeout);

			orderSiteTypeTimeout = setTimeout('addOrderSiteInput()', 1000);
		});
	}
	else{
		$('.order-sites[data-preloader-id='+preloaderId+'][data-order-id='+orderId+'] input[name=site_'+preloaderId+'_'+siteId+']').keyup(function(){
			clearTimeout(orderSiteTypeTimeout);

			orderSiteTypeTimeout = setTimeout('addOrderSiteInput()', 1000);
		}).keydown(function(){
			clearTimeout(orderSiteTypeTimeout);

			orderSiteTypeTimeout = setTimeout('addOrderSiteInput()', 1000);
		});
	}
}

function addOrderSiteInput(){

	$('.order-sites').each(function(){
		var preloaderId = $(this).attr('data-preloader-id');
		var orderId = $(this).attr('data-order-id');

		var lastSiteId = $('.order-sites[data-preloader-id='+preloaderId+'][data-order-id='+orderId+'] .order-sites-input:last-child').attr('name').split('_');
		lastSiteId = lastSiteId[2];

		if($('.order-sites[data-preloader-id='+preloaderId+'][data-order-id='+orderId+'] input[name=site_'+preloaderId+'_'+lastSiteId+']').val()!=''){
			if(orderId==60){
				//alert('a');
			}


			$('.order-sites[data-preloader-id='+preloaderId+'][data-order-id='+orderId+']').append('<input type="text" class="order-sites-input textfield" name="site_'+preloaderId+'_'+(parseInt(lastSiteId)+1)+'" placeholder="" />');
			setupOrderSites(orderId, preloaderId, parseInt(lastSiteId)+1);
		}
	});
}

function addToCart(preloaderId, preloaderName, $el){
  console.log({preloaderId, preloaderName, $el});

  var $cloneButton = $el.clone();
  var rect = $el.offset();
  var y = rect.top;
  var x = rect.left;

  $cloneButton
    .addClass('buy-clone')
    .css({
      position: 'absolute',
      zIndex: 9999,
      top: y,
      left: x,
      width: $el.width(),
      height: $el.height()
    })
    .appendTo('body');

  var $cart = $('.cart-top-holder');
  var cartRect = $cart.offset();
  var cartY = cartRect.top;
  var cartX = cartRect.left;

  $cloneButton.get(0).style.setProperty('--buy-clone-x', (cartX - x) + 'px');
  $cloneButton.get(0).style.setProperty('--buy-clone-y', (cartY - y) + 'px');
  $cloneButton
    .addClass('has-animate')
    .one('animationend', function() {
      $cloneButton.remove();
    });

  setTimeout(function () {
    $('html,body').animate({ scrollTop: 0 }, 300);
  }, 100);

	var cartContents = jc.getCart();


	var cartItemsAmount = 0;

	$.each(cartContents, function(){
		cartItemsAmount++;
	});

  // var image = $el.data('preloader-image');
  var image = `/preloaders/preloaders/${preloaderId}/${preloaderName}.jpg`;

	if(cartItemsAmount>0){
		if(!cartContents[preloaderId]){//alert('a');
			// jc.add(preloaderId, preloaderName, 'https://faviconer.net/preloaders/'+preloaderId+'/colored/5.png', preloaderPrice, 1);
			jc.add(preloaderId, preloaderName, image, preloaderPrice, 1);
		}
	}
	else{
		// jc.add(preloaderId, preloaderName, 'https://faviconer.net/preloaders/'+preloaderId+'/colored/5.png', preloaderPrice, 1);
		jc.add(preloaderId, preloaderName, image, preloaderPrice, 1);
	}

	setupCart();
}

function autoGenerate() {
	if($('#genAuto').is(':checked') && curPreloader){
		clearTimeout(generateTimeout);
		generateTimeout=false;
		generateTimeout=setTimeout('$(".generate-button").click()', 1000);
	}
}

function generatePreloader(download, speed, foreColor, backColor, width, height, transparency, reverse, origColors, grayToTransp, imageType, inverse, flipHor, flipVert, framesAmount, wordTransformed)
{
	// if($(window).width() <= 560){
	// 	$('.generator-holder .parameters').addClass('mobile-hidden');
	// 	$('.generator-back').addClass('mobile-show');
	// }

	if(!download){
		$('.generator__canvas img').each(function(){
			if($(this).attr('src').indexOf('generator.php')!=-1){
				$(this).remove();
			}
		});
	}

	framesAmount=parseInt(framesAmount);
	if(!/^[a-fA-F0-9]{6}$/i.test(foreColor)){
		showMessage(words[6], 0);
		return false;
	}
	else if(!/^[a-fA-F0-9]{6}$/i.test(backColor)){
		showMessage(words[7], 0);
		return false;
	}

	if(!$('.word').is(':hidden')){
		var wordRE=/^([a-zA-z0-9 \,\./<>\?;:"'!@#\$%\^&*\(\)\[\]\{\}_\+=-|\\а-яА-ЯáÁâÂàÀãÃäÄéÉêÊèÈëËíÍîÎìÌïÏñÑóÓôÔòÒõÕöÖúÚûÛùÙüÜýÝÿŸ])+$/
		if(!wordRE.test($('#word').val()) || $('#word').val().indexOf('`')!=-1){
			showMessage(texts[73], 0);
			return;
		}
	}

	if(transparency)
		transparency=1;
	else
		transparency=0;

	if(reverse)
		reverse=1;
	else
		reverse=0;

    if(origColors)
        origColors=1;
    else
        origColors=0;

    if(grayToTransp)
        grayToTransp=1;
    else
        grayToTransp=0;

	if(inverse)
		inverse=1;
	else
		inverse=0;

	if(flipHor && flipVert){
		flip='3';
	}
	else if(flipHor){
		flip='1';
	}
	else if(flipVert){
		flip='2';
	}
	else{
		flip='0';
	}

	if($('#constrain').is(':checked')){
		var constrain=1;
	}
	else{
		 var constrain=0;
	}

	var cont=true;
	if(!curPreloader)
	{
		cont=false;
		showMessage(texts[69], 0);
	}
	else if(width>maxSize || width<1 || height>maxSize*2 || height<1)
	{
		cont=false;
		showMessage(texts[70], 0);
	}
	else if(framesAmount<2 || framesAmount>curFramesAmount){

		cont=false;
		showMessage(words[3],0);
	}
	else if(inverse==1 && grayToTransp==1 && backColor=='FFFFFF' && transparency==0){
		cont=false;
		showMessage(words[4], 0);
	}

	if($('#genAuto').is(':checked')){
		genAuto=1;
	}
	else{
		genAuto=2;
	}

	if(cont)
	{
		/*if(transparency)
		t=1;
		else
		t=0;*/

		var chars = $('#word').val().split('');

		var word='';

		for(i=0; i<chars.length; i++){
			word+=wSymbols[chars[i]]+'-';
		}

		word=word.substring(0, word.length-1);

		t=transparency;

		//alert('/generator.php?'+(isCanvasSupported()?'filmstrip&':'')+'image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+t+'&reverse='+reverse+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount+'&word='+word+'&uncacher='+(Math.random()*100));

		lastWidth = width;
		lastHeight = height;

		/*if($('#downloadSprites').is(':checked') && ($('#animateJS').is(':checked') || $('#animateCanvas').is(':checked'))){
			genUrlPrefix = '/preloaders';
		}
		else{
			genUrlPrefix = 'https://faviconer.net';
		}*/

		genUrlPrefix = '/preloaders';

		if(download)
		{
			//$('#generatorFrame').attr('src', 'https://faviconer.net/generator.php?image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+t+'&reverse='+reverse+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount+'&word='+word+($('#downloadSprites').is(':checked')?'&filmstrip'+($('#animateJS').is(':checked')?'&include_js':'')+($('#animateCanvas').is(':checked')?'&include_canvas':''):'')+($('#svgEcma').is(':checked')?'&include_ecma':'')+'&download&uncacher='+(Math.random()*100));
			$('#generatorFrame').attr('src', genUrlPrefix+'/generator.php?image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+t+'&reverse='+reverse+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount+'&word='+word+($('#downloadSpritesCheckbox').is(':checked')?'&filmstrip'+($('#animateJSCheckbox').is(':checked')?'&include_js':'')+($('#animateCanvasCheckbox').is(':checked')?'&include_canvas':''):'')+($('#svgEcmaCheckbox').is(':checked')?'&include_ecma':'')+'&download');
		}
		else
		{
			//var storeUrl=(curStore ?'<div style="margin-top:'+(parseInt(124)+parseInt($('#height').val()))+'px"><a href="'+curStore+'?referral=preloaders" target="_blank" class="whitebox">'+words[9]+'</a></div>':'');

			//$('.generator .generator__canvas').html(storeUrl);
            $('.generator .loading').fadeIn();

			setCookie('formSettings', speed+'[-]'+foreColor+'[-]'+backColor+'[-]'+transparency+'[-]'+reverse+'[-]'+origColors+'[-]'+grayToTransp+'[-]'+imageType+'[-]'+inverse+'[-]'+flip+'[-]'+constrain+'[-]'+genAuto+'[-]'+$('.generator__canvas').css('background-color')+'[-]'+$('.generator__canvas').css('background-image'), 30);

			//imageLoader('https://faviconer.net/generator.php?'+(isCanvasSupported()?'filmstrip&':'')+'image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+t+'&reverse='+reverse+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount+'&word='+word+'&uncacher='+(Math.random()*100), 'showImage(\''+speed+'\', \''+foreColor+'\', \''+backColor+'\', \''+width+'\', \''+height+'\', '+transparency+', '+reverse+', '+origColors+', '+grayToTransp+', '+imageType+', '+inverse+', '+flipHor+', '+flipVert+', '+framesAmount+', \''+word+'\')');
			imageLoader(genUrlPrefix+'/generator.php?'+(isCanvasSupported()?'filmstrip&':'')+'image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+t+'&reverse='+reverse+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount+'&word='+word, 'showImage(\''+speed+'\', \''+foreColor+'\', \''+backColor+'\', \''+width+'\', \''+height+'\', '+transparency+', '+reverse+', '+origColors+', '+grayToTransp+', '+imageType+', '+inverse+', '+flipHor+', '+flipVert+', '+framesAmount+', \''+word+'\')');
		}
	}
}

function isCanvasSupported(){
  var elem = document.createElement('canvas');
  return !!(elem.getContext && elem.getContext('2d'));
}

function imageLoader(s, fun)
{
	clearTimeout(imageTimeout);
	imageTimeout=0;
	genImage = new Image();
	$(genImage).load(function(){
		imageTimeout=setTimeout(fun, 0)
	}).error(function(){
		if(location.href.indexOf('admin')!='-1'){
			imageTimeout=setTimeout(fun, 0)
		}
		else{
			showMessage(words[5], 0);
			$('.stage__generator .stage__loading').fadeOut();
		}
	}).attr('src', s);
}

function showImage(speed, foreColor, backColor, width, height, transparency, reverse, origColors, grayToTransp, imageType, inverse, flipHor, flipVert, framesAmount)
{
	var curDiv=$('.stage__generator .generator__canvas');
	var apngTest='';
	curDiv.html('');

  // var downloadButton='<div><a href="javascript:;" class="download-button button small" title="'+texts[71]+'" onclick="generatePreloader(true, \''+speed+'\', \''+foreColor+'\', \''+backColor+'\', \''+width+'\', \''+height+'\', '+transparency+', '+reverse+', '+origColors+', '+grayToTransp+', '+imageType+', '+inverse+', '+flipHor+', '+flipVert+', '+framesAmount+', \''+$('#wordTransformed').val()+'\'); return false;">'+texts[71]+'</a><br /></div></div><div id="fileSizeDiv" class="empty_href">'+words[1]+'</div>';

  var downloadButton = '<button class="btn btn--secondary" id="downloadGenerator" onclick="generatePreloader(true, \''+speed+'\', \''+foreColor+'\', \''+backColor+'\', \''+width+'\', \''+height+'\', '+transparency+', '+reverse+', '+origColors+', '+grayToTransp+', '+imageType+', '+inverse+', '+flipHor+', '+flipVert+', '+framesAmount+', \''+$('#wordTransformed').val()+'\'); return false;">'+ texts[71] +'</button>';

  $('#fileSizeDiv').html(words[1]);
  $('#downloadGenerator').remove();
  if (enableStore) {
    $('.stage__footer').append(downloadButton);
  } else {
    $('.generator__footer-buy').append(downloadButton);
  }


	// var downloadButton='<div><a href="javascript:;" class="download-button button small" title="'+texts[71]+'" onclick="generatePreloader(true, \''+speed+'\', \''+foreColor+'\', \''+backColor+'\', \''+width+'\', \''+height+'\', '+transparency+', '+reverse+', '+origColors+', '+grayToTransp+', '+imageType+', '+inverse+', '+flipHor+', '+flipVert+', '+framesAmount+', \''+$('#wordTransformed').val()+'\'); return false;">'+texts[71]+'</a><br /></div></div><div id="fileSizeDiv" class="empty_href">'+words[1]+'</div>';

	// if(imageType==0 && !$.browser.mozilla && !$.browser.opera){
	// 	apngTest='<img src="/preloaders/img/apng_note.png" /><br /><br />';
	// }

	if(lastHeight < $('.generator__canvas').height()){
		var pTop = Math.floor((parseInt($('.generator__canvas').css('max-height')) - lastHeight)/2);
		$('.generator__canvas').css({paddingTop:pTop+'px',height:(parseInt($('.generator__canvas').css('max-height'))-pTop)+'px'});
	}
	else{
		$('.generator__canvas').css({paddingTop:'0px',height:$('.generator__canvas').css('max-height')});
	}

	if(imageType==2){
		var Browser;
		Browser = navigator.userAgent;

		if (Browser.indexOf("Trident") != -1){//internet explorer
			curDiv.append('<object type="image/svg+xml" data="https://faviconer.net/generator.php?'+(isCanvasSupported()?'filmstrip&':'')+'image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+t+'&reverse='+reverse+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount+'&word='+word+'"></object>');
		}
		else{
			curDiv.append(genImage);
		}

		//<object type="image/svg+xml" data="/svg-preview.php?preloader_id=5"></object>
		// curDiv.html(curDiv.html()+downloadButton);
	}
	else if(isCanvasSupported()){//check if browser supports canvas
		curDiv.html(apngTest+'<canvas id="canvas" width="'+lastWidth+'" height="'+lastHeight+'"><p>Your browser does not support the canvas element.</p></canvas>');

		FPS = Math.round(100/(maxSpeed+2-speed));
		SECONDS_BETWEEN_FRAMES = 1 / FPS;
		g_GameObjectManager = null;
		g_run=genImage;

		totalFrames=$('#framesAmount').val();
		frameWidth=lastWidth;

		g_run.width=totalFrames*frameWidth;
		//genImage.onload=function (){imageTimeout=setTimeout(fun, 0)};
		initCanvas();
	}
	else{
		curDiv.append(genImage);

		curDiv.html(apngTest+curDiv.html());
		// curDiv.html(apngTest+curDiv.html()+downloadButton);
	}

	if(enableDownload){
		enableDownloadButton();
	}
	else{
		disableDownloadButton();
	}

	//$('#downloadOptions').css('top', ($('.download-button').offset().top-280)+'px')
	$('#downloadOptions').show().removeClass('displaynone');

    $.get(genUrlPrefix+'/file_size.php?image='+curPreloader+'&speed='+speed+'&fore_color='+foreColor+'&back_color='+backColor+'&size='+width+'x'+height+'&transparency='+transparency+'&orig_colors='+origColors+'&gray_transp='+grayToTransp+'&image_type='+imageType+'&inverse='+inverse+'&flip='+flip+'&frames_amount='+framesAmount, function(data) {

        if(data==0 || data=='' || data.length>100){
            $('#fileSizeDiv').html(words[2]);
        }
        else{
			var s=data.replace(/\s/gi, '');
            $('#fileSizeDiv').html('~'+Math.round((s/1024))+' KB ( '+data+' B )');
        }
    });

    // $('.generator .loading').fadeOut();
    $('.stage__loading').fadeOut();

}


function showMessage(message, type){
    $('.generator .generator__canvas').html('<div class="message '+(!type?'err':'confirm')+'">'+message+'</div>');
	$('#downloadOptions').hide();
}


function setCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function deleteCookie(name) {
    setCookie(name,"",-1);
}

var generatorOpen = false;
$(document.body).keyup(function(e) {
  if (
    generatorOpen &&
    e.originalEvent &&
    e.originalEvent.key === 'Escape'
  ) {
    hideGenerator();
  }
});

function showGenerator(doAnimation){
	// doAnimation = doAnimation || true;
	if(allowShowGenerator) {
    generatorOpen = true;
    $('body').css('overflow', 'hidden');
    $('.generator-overlay').fadeIn();
    $('.generator').fadeIn();
	}
}

function hideGenerator(){
  generatorOpen = false;
  // $('.generator-holder').animate({left:-1000});
  $('body').css('overflow', '');
  $('.generator-overlay').fadeOut();
  $('.generator').fadeOut(function() {
    // reset type to gif
    $('[data-params-type="gif"]').attr('checked', true).change();
    $('#resetForm').click();
  });
}

function identifyLang(){

	var path=window.location.pathname;
	//.replace('/ru/', '/uz/')
	if(path=='/preloaders/'){
		path='/preloaders/en/';
	}

	if(path.indexOf('/ru')==-1){//cur lang - en
		return 'en';
	}
	else{
		return 'ru';
	}
}

var toast = (function() {
  var timer = null;

  function show(text, type) {
    if ($('#toast').length) {
      $('#toast').remove();
      clearTimeout(timer);
    }
    var $toast = $('<div class="alert alert--sticky" id="toast"></div>').appendTo('body');
    $toast
      .addClass('alert--' + type)
      .html(text)
      .fadeIn('fast');

    if (timer) clearTimeout(timer);
    timer = setTimeout(hide, 3500);
  }

  function hide() {
    var $toast = $('#toast');
    if ($toast.length) {
      $toast.fadeOut('fast', function() {
        $toast.remove();
      });
    }
  }

  return {
    show,
    hide
  }
})();

function ajaxMessage(text, messageType){
	// if($('.ajaxMessage').length==0){
	// 	$('body').append('<div class="ajax-message"></div>');
	// }

	if(messageType==1){
    // $('.ajax-message').removeClass('err').addClass('confirm');
    toast.show(text, 'success');
	}
	else{
		// $('.ajax-message').addClass('err').removeClass('confirm');
    toast.show(text, 'error');
	}

  // $('.ajax-message').html(text).show();


	// setTimeout('hideAjaxMessage()', 3000);
	// setTimeout(hideAjaxMessage, 3000);
}

// function hideAjaxMessage(){
// 	$('.ajax-message').fadeOut();
// }

function initPreviews(preloaderId){
	if(!preloaderId){
		$('.preloader-animated-preview').each(function(){

			if($(this).hasClass('main-preview')){
				$('<div class="actual-preview" style="height:'+$(this).attr('data-preview-height')+'px;width:'+$(this).attr('data-preview-width')+'px;background:url(https://faviconer.net/preloaders/'+$(this).attr('data-preloader-id')+'/preview.png) 0px -'+$(this).attr('data-top-offset')+'px no-repeat transparent;">').insertAfter($(this).children('img'));
			}
			else{
				$(this).css({height:$(this).attr('data-preview-height')+'px', width:$(this).attr('data-preview-width')+'px', background:'url(https://faviconer.net/preloaders/'+$(this).attr('data-preloader-id')+'/preview.png) 0px -'+$(this).attr('data-top-offset')+'px no-repeat transparent'});
			}
		});
	}

	setInterval(function(){runPreviews(preloaderId)}, 50);
}

function runPreviews(preloaderId){
	if(!preloaderId){
		$('.preloader-animated-preview').each(function(){
			if($(this).hasClass('main-preview')){
				var backgroundOffset = $('.actual-preview').css('background-position').split(' ');
			}
			else{
				var backgroundOffset = $(this).css('background-position').split(' ');
			}
			backgroundOffset[0] = parseInt(backgroundOffset[0]);
			backgroundOffset[1] = parseInt(backgroundOffset[1]);

			backgroundOffset[0] -= parseInt($(this).attr('data-preview-width'));

			if(backgroundOffset[0] <= $(this).attr('data-preview-width') * $(this).attr('data-frames-amount') * (-1)){
				backgroundOffset[0] = 0;
			}

			if($(this).hasClass('main-preview')){
				$('.actual-preview').css('background-position', backgroundOffset[0]+'px '+backgroundOffset[1]+'px');
			}
			else{
				$(this).css('background-position', backgroundOffset[0]+'px '+backgroundOffset[1]+'px');
			}
		});
	}
}

function getTags(e, move){

	$('.tags-list li').removeClass('active');

	switch(e.which){
		case 40:
			if(move){
				if(curTag === false || curTag >= tags.length-1){
					curTag = 0;
				}
				else{
					curTag++;
				}

				$('#tag-'+curTag).addClass('active');
				$('.tags-list').scrollTop(29*curTag);
				$('#keywordsInput').val(tags[curTag]);
			}
		break;

		case 38:
			if(move){
				if(curTag === false || curTag == 0){
					curTag = tags.length-1;
				}
				else{
					curTag--;
				}

				$('#tag-'+curTag).addClass('active');
				$('.tags-list').scrollTop(29*curTag);
				$('#keywordsInput').val(tags[curTag]);
			}
		break;

		default:
			var value = $.trim($('#keywordsInput').val());

			if(value.length>1){
				clearTimeout(tagsTimeout);

				tagsTimeout = setTimeout(function(){
					$.getJSON('/jscripts/autocomplete-tags.js.php?term='+value, function(data){
						if(data!=''){
							var items = [];
							tags = data;
							$.each( data, function( key, val ) {
								items.push( "<li id='tag-" + key + "'>" + val + "</li>" );
							});


							if($('.tags-list').length>0){
								$('.tags-list').html(items.join( "" ));
							}
							else{
								$( "<ul/>", {
									"class": "tags-list",
									html: items.join( "" )
								}).appendTo( "#mainSearchForm" );
							}

							//$('.tags-list li').unbind('click');
							$('.tags-list li').click(function(){
								location.href='/preloaders/'+identifyLang()+'/search/'+$(this).html();
							});


							$('.tags-list').unbind('mouseover').mouseover(function(){
								$('.tags-list li').removeClass('active');
							});
						}
						else{
							$('.tags-list').hide();
						}
					});
				}, 500);

			}
		break;
	}

	$('.tags-list').show();
}
!function(a){var b=function(){var d=65,g={eventName:"click",onShow:function(){},onBeforeShow:function(){},onHide:function(){},onChange:function(){},onSubmit:function(){},color:"ff0000",livePreview:!0,flat:!1},h=function(b,c){var d=O(b);a(c).data("colorpicker").fields.eq(1).val(d.r).end().eq(2).val(d.g).end().eq(3).val(d.b).end()},i=function(b,c){a(c).data("colorpicker").fields.eq(4).val(b.h).end().eq(5).val(b.s).end().eq(6).val(b.b).end()},j=function(b,c){a(c).data("colorpicker").fields.eq(0).val(Q(b)).end()},k=function(b,c){a(c).data("colorpicker").selector.css("backgroundColor","#"+Q({h:b.h,s:100,b:100})),a(c).data("colorpicker").selectorIndic.css({left:parseInt(150*b.s/100,10),top:parseInt(150*(100-b.b)/100,10)})},l=function(b,c){a(c).data("colorpicker").hue.css("top",parseInt(150-150*b.h/360,10))},m=function(b,c){a(c).data("colorpicker").currentColor.css("backgroundColor","#"+Q(b))},n=function(b,c){a(c).data("colorpicker").newColor.css("backgroundColor","#"+Q(b))},o=function(b){var c=b.charCode||b.keyCode||-1;if(c>d&&c<=90||32==c)return!1;!0===a(this).parent().parent().data("colorpicker").livePreview&&p.apply(this)},p=function(b){var d,c=a(this).parent().parent();this.parentNode.className.indexOf("_hex")>0?c.data("colorpicker").color=d=M(K(this.value)):this.parentNode.className.indexOf("_hsb")>0?c.data("colorpicker").color=d=I({h:parseInt(c.data("colorpicker").fields.eq(4).val(),10),s:parseInt(c.data("colorpicker").fields.eq(5).val(),10),b:parseInt(c.data("colorpicker").fields.eq(6).val(),10)}):c.data("colorpicker").color=d=N(J({r:parseInt(c.data("colorpicker").fields.eq(1).val(),10),g:parseInt(c.data("colorpicker").fields.eq(2).val(),10),b:parseInt(c.data("colorpicker").fields.eq(3).val(),10)})),b&&(h(d,c.get(0)),j(d,c.get(0)),i(d,c.get(0))),k(d,c.get(0)),l(d,c.get(0)),n(d,c.get(0)),c.data("colorpicker").onChange.apply(c,[d,Q(d),O(d)])},q=function(b){a(this).parent().parent().data("colorpicker").fields.parent().removeClass("colorpicker_focus")},r=function(){d=this.parentNode.className.indexOf("_hex")>0?70:65,a(this).parent().parent().data("colorpicker").fields.parent().removeClass("colorpicker_focus"),a(this).parent().addClass("colorpicker_focus")},s=function(b){var c=a(this).parent().find("input").focus(),d={el:a(this).parent().addClass("colorpicker_slider"),max:this.parentNode.className.indexOf("_hsb_h")>0?360:this.parentNode.className.indexOf("_hsb")>0?100:255,y:b.pageY,field:c,val:parseInt(c.val(),10),preview:a(this).parent().parent().data("colorpicker").livePreview};a(document).bind("mouseup",d,u),a(document).bind("mousemove",d,t)},t=function(a){return a.data.field.val(Math.max(0,Math.min(a.data.max,parseInt(a.data.val+a.pageY-a.data.y,10)))),a.data.preview&&p.apply(a.data.field.get(0),[!0]),!1},u=function(b){return p.apply(b.data.field.get(0),[!0]),b.data.el.removeClass("colorpicker_slider").find("input").focus(),a(document).unbind("mouseup",u),a(document).unbind("mousemove",t),!1},v=function(b){var c={cal:a(this).parent(),y:a(this).offset().top};c.preview=c.cal.data("colorpicker").livePreview,a(document).bind("mouseup",c,x),a(document).bind("mousemove",c,w)},w=function(a){return p.apply(a.data.cal.data("colorpicker").fields.eq(4).val(parseInt(360*(150-Math.max(0,Math.min(150,a.pageY-a.data.y)))/150,10)).get(0),[a.data.preview]),!1},x=function(b){return h(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),j(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),a(document).unbind("mouseup",x),a(document).unbind("mousemove",w),!1},y=function(b){var c={cal:a(this).parent(),pos:a(this).offset()};c.preview=c.cal.data("colorpicker").livePreview,a(document).bind("mouseup",c,A),a(document).bind("mousemove",c,z)},z=function(a){return p.apply(a.data.cal.data("colorpicker").fields.eq(6).val(parseInt(100*(150-Math.max(0,Math.min(150,a.pageY-a.data.pos.top)))/150,10)).end().eq(5).val(parseInt(100*Math.max(0,Math.min(150,a.pageX-a.data.pos.left))/150,10)).get(0),[a.data.preview]),!1},A=function(b){return h(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),j(b.data.cal.data("colorpicker").color,b.data.cal.get(0)),a(document).unbind("mouseup",A),a(document).unbind("mousemove",z),!1},B=function(b){a(this).addClass("colorpicker_focus")},C=function(b){a(this).removeClass("colorpicker_focus")},D=function(b){var c=a(this).parent(),d=c.data("colorpicker").color;c.data("colorpicker").origColor=d,m(d,c.get(0)),c.data("colorpicker").onSubmit(d,Q(d),O(d),c.data("colorpicker").el)},E=function(b){var c=a("#"+a(this).data("colorpickerId"));c.data("colorpicker").onBeforeShow.apply(this,[c.get(0)]);var d=a(this).offset(),e=H(),f=d.top+this.offsetHeight-pickerOffsetTop,g=d.left+pickerOffsetLeft;return f+176>e.t+e.h&&(f-=this.offsetHeight+176),g+356>e.l+e.w&&(g-=356),c.css({left:g+"px",top:f+"px"}),0!=c.data("colorpicker").onShow.apply(this,[c.get(0)])&&c.show(),a(document).bind("mousedown",{cal:c},F),!1},F=function(b){G(b.data.cal.get(0),b.target,b.data.cal.get(0))||(0!=b.data.cal.data("colorpicker").onHide.apply(this,[b.data.cal.get(0)])&&b.data.cal.hide(),a(document).unbind("mousedown",F))},G=function(a,b,c){if(a==b)return!0;if(a.contains)return a.contains(b);if(a.compareDocumentPosition)return!!(16&a.compareDocumentPosition(b));for(var d=b.parentNode;d&&d!=c;){if(d==a)return!0;d=d.parentNode}return!1},H=function(){var a="CSS1Compat"==document.compatMode;return{l:window.pageXOffset||(a?document.documentElement.scrollLeft:document.body.scrollLeft),t:window.pageYOffset||(a?document.documentElement.scrollTop:document.body.scrollTop),w:window.innerWidth||(a?document.documentElement.clientWidth:document.body.clientWidth),h:window.innerHeight||(a?document.documentElement.clientHeight:document.body.clientHeight)}},I=function(a){return{h:Math.min(360,Math.max(0,a.h)),s:Math.min(100,Math.max(0,a.s)),b:Math.min(100,Math.max(0,a.b))}},J=function(a){return{r:Math.min(255,Math.max(0,a.r)),g:Math.min(255,Math.max(0,a.g)),b:Math.min(255,Math.max(0,a.b))}},K=function(a){var b=6-a.length;if(b>0){for(var c=[],d=0;d<b;d++)c.push("0");c.push(a),a=c.join("")}return a},L=function(a){var a=parseInt(a.indexOf("#")>-1?a.substring(1):a,16);return{r:a>>16,g:(65280&a)>>8,b:255&a}},M=function(a){return N(L(a))},N=function(a){var b={h:0,s:0,b:0},c=Math.min(a.r,a.g,a.b),d=Math.max(a.r,a.g,a.b),e=d-c;return b.b=d,b.s=0!=d?255*e/d:0,0!=b.s?a.r==d?b.h=(a.g-a.b)/e:a.g==d?b.h=2+(a.b-a.r)/e:b.h=4+(a.r-a.g)/e:b.h=-1,b.h*=60,b.h<0&&(b.h+=360),b.s*=100/255,b.b*=100/255,b},O=function(a){var b={},c=Math.round(a.h),d=Math.round(255*a.s/100),e=Math.round(255*a.b/100);if(0==d)b.r=b.g=b.b=e;else{var f=e,g=(255-d)*e/255,h=c%60*(f-g)/60;360==c&&(c=0),c<60?(b.r=f,b.b=g,b.g=g+h):c<120?(b.g=f,b.b=g,b.r=f-h):c<180?(b.g=f,b.r=g,b.b=g+h):c<240?(b.b=f,b.r=g,b.g=f-h):c<300?(b.b=f,b.g=g,b.r=g+h):c<360?(b.r=f,b.g=g,b.b=f-h):(b.r=0,b.g=0,b.b=0)}return{r:Math.round(b.r),g:Math.round(b.g),b:Math.round(b.b)}},P=function(b){var c=[b.r.toString(16),b.g.toString(16),b.b.toString(16)];return a.each(c,function(a,b){1==b.length&&(c[a]="0"+b)}),c.join("")},Q=function(a){return P(O(a))},R=function(){var b=a(this).parent(),c=b.data("colorpicker").origColor;b.data("colorpicker").color=c,h(c,b.get(0)),j(c,b.get(0)),i(c,b.get(0)),k(c,b.get(0)),l(c,b.get(0)),n(c,b.get(0))};return{init:function(b){if(b=a.extend({},g,b||{}),"string"==typeof b.color)b.color=M(b.color);else if(void 0!=b.color.r&&void 0!=b.color.g&&void 0!=b.color.b)b.color=N(b.color);else{if(void 0==b.color.h||void 0==b.color.s||void 0==b.color.b)return this;b.color=I(b.color)}return this.each(function(){if(!a(this).data("colorpickerId")){var c=a.extend({},b);c.origColor=b.color;var d="collorpicker_"+parseInt(1e3*Math.random());a(this).data("colorpickerId",d);var e=a('<div class="colorpicker"><div class="colorpicker_color"><div><div></div></div></div><div class="colorpicker_hue"><div></div></div><div class="colorpicker_new_color"></div><div class="colorpicker_current_color"></div><div class="colorpicker_hex"><input type="text" maxlength="6" size="6" /></div><div class="colorpicker_rgb_r colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_rgb_g colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_rgb_b colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_h colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_s colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_b colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_submit"></div></div>').attr("id",d);c.flat?e.appendTo(this).show():e.appendTo(document.body),c.fields=e.find("input").bind("keyup",o).bind("change",p).bind("blur",q).bind("focus",r),e.find("span").bind("mousedown",s).end().find(">div.colorpicker_current_color").bind("click",R),c.selector=e.find("div.colorpicker_color").bind("mousedown",y),c.selectorIndic=c.selector.find("div div"),c.el=this,c.hue=e.find("div.colorpicker_hue div"),e.find("div.colorpicker_hue").bind("mousedown",v),c.newColor=e.find("div.colorpicker_new_color"),c.currentColor=e.find("div.colorpicker_current_color"),e.data("colorpicker",c),e.find("div.colorpicker_submit").bind("mouseenter",B).bind("mouseleave",C).bind("click",D),h(c.color,e.get(0)),i(c.color,e.get(0)),j(c.color,e.get(0)),l(c.color,e.get(0)),k(c.color,e.get(0)),m(c.color,e.get(0)),n(c.color,e.get(0)),c.flat?e.css({position:"relative",display:"block"}):a(this).bind(c.eventName,E)}})},showPicker:function(){return this.each(function(){a(this).data("colorpickerId")&&E.apply(this)})},hidePicker:function(){return this.each(function(){a(this).data("colorpickerId")&&a("#"+a(this).data("colorpickerId")).hide()})},setColor:function(b){if("string"==typeof b)b=M(b);else if(void 0!=b.r&&void 0!=b.g&&void 0!=b.b)b=N(b);else{if(void 0==b.h||void 0==b.s||void 0==b.b)return this;b=I(b)}return this.each(function(){if(a(this).data("colorpickerId")){var c=a("#"+a(this).data("colorpickerId"));c.data("colorpicker").color=b,c.data("colorpicker").origColor=b,h(b,c.get(0)),i(b,c.get(0)),j(b,c.get(0)),l(b,c.get(0)),k(b,c.get(0)),m(b,c.get(0)),n(b,c.get(0))}})}}}();a.fn.extend({ColorPicker:b.init,ColorPickerHide:b.hidePicker,ColorPickerShow:b.showPicker,ColorPickerSetColor:b.setColor})}(jQuery);
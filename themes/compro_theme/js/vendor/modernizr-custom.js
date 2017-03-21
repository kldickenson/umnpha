/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-svg-svgasimg-touchevents-setclasses !*/
!function(e,n,t){function o(e,n){return typeof e===n}function s(){var e,n,t,s,i,a,r;for(var l in u)if(u.hasOwnProperty(l)){if(e=[],n=u[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)a=e[i],r=a.split("."),1===r.length?Modernizr[r[0]]=s:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=s),c.push((s?"":"no-")+r.join("-"))}}function i(e){var n=p.className,t=Modernizr._config.classPrefix||"";if(h&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),h?p.className.baseVal=n:p.className=n)}function a(e,n){if("object"==typeof e)for(var t in e)m(e,t)&&a(t,e[t]);else{e=e.toLowerCase();var o=e.split("."),s=Modernizr[o[0]];if(2==o.length&&(s=s[o[1]]),"undefined"!=typeof s)return Modernizr;n="function"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),i([(n&&0!=n?"":"no-")+o.join("-")]),Modernizr._trigger(e,n)}return Modernizr}function r(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):h?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(){var e=n.body;return e||(e=r(h?"svg":"body"),e.fake=!0),e}function f(e,t,o,s){var i,a,f,c,u="modernizr",d=r("div"),h=l();if(parseInt(o,10))for(;o--;)f=r("div"),f.id=s?s[o]:u+(o+1),d.appendChild(f);return i=r("style"),i.type="text/css",i.id="s"+u,(h.fake?h:d).appendChild(i),h.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),d.id=u,h.fake&&(h.style.background="",h.style.overflow="hidden",c=p.style.overflow,p.style.overflow="hidden",p.appendChild(h)),a=t(d,e),h.fake?(h.parentNode.removeChild(h),p.style.overflow=c,p.offsetHeight):d.parentNode.removeChild(d),!!a}var c=[],u=[],d={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){u.push({name:e,fn:n,options:t})},addAsyncTest:function(e){u.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=d,Modernizr=new Modernizr,Modernizr.addTest("svg",!!n.createElementNS&&!!n.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var p=n.documentElement,h="svg"===p.nodeName.toLowerCase(),g=d._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];d._prefixes=g;var m;!function(){var e={}.hasOwnProperty;m=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,t){return e.call(n,t)}}(),d._l={},d.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},d._trigger=function(e,n){if(this._l[e]){var t=this._l[e];setTimeout(function(){var e,o;for(e=0;e<t.length;e++)(o=t[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){d.addTest=a}),Modernizr.addTest("svgasimg",n.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var v=d.testStyles=f;Modernizr.addTest("touchevents",function(){var t;if("ontouchstart"in e||e.DocumentTouch&&n instanceof DocumentTouch)t=!0;else{var o=["@media (",g.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");v(o,function(e){t=9===e.offsetTop})}return t}),s(),i(c),delete d.addTest,delete d.addAsyncTest;for(var w=0;w<Modernizr._q.length;w++)Modernizr._q[w]();e.Modernizr=Modernizr}(window,document);
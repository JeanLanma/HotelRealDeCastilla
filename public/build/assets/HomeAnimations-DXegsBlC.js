import{c as _,g as b}from"./_commonjsHelpers-Cpj98o6Y.js";var v={exports:{}};/*!
 * verge 1.10.2+201705300050
 * http://npm.im/verge
 * MIT Ryan Van Etten
 */(function(s){(function(r,i,a){s.exports?s.exports=a():r[i]=a()})(_,"verge",function(){var r={},i=typeof window<"u"&&window,a=typeof document<"u"&&document,u=a&&a.documentElement,f=i.matchMedia||i.msMatchMedia,g=f?function(t){return!!f.call(i,t).matches}:function(){return!1},l=r.viewportW=function(){var t=u.clientWidth,n=i.innerWidth;return t<n?n:t},m=r.viewportH=function(){var t=u.clientHeight,n=i.innerHeight;return t<n?n:t};r.mq=g,r.matchMedia=f?function(){return f.apply(i,arguments)}:function(){return{}};function p(){return{width:l(),height:m()}}r.viewport=p,r.scrollX=function(){return i.pageXOffset||u.scrollLeft},r.scrollY=function(){return i.pageYOffset||u.scrollTop};function h(t,n){var e={};return n=+n||0,e.width=(e.right=t.right+n)-(e.left=t.left-n),e.height=(e.bottom=t.bottom+n)-(e.top=t.top-n),e}function c(t,n){return t=t&&!t.nodeType?t[0]:t,!t||t.nodeType!==1?!1:h(t.getBoundingClientRect(),n)}r.rectangle=c;function w(t){t=t==null?p():t.nodeType===1?c(t):t;var n=t.height,e=t.width;return n=typeof n=="function"?n.call(t):n,e=typeof e=="function"?e.call(t):e,e/n}return r.aspect=w,r.inX=function(t,n){var e=c(t,n);return!!e&&e.right>=0&&e.left<=l()},r.inY=function(t,n){var e=c(t,n);return!!e&&e.bottom>=0&&e.top<=m()},r.inViewport=function(t,n){var e=c(t,n);return!!e&&e.bottom>=0&&e.right>=0&&e.top<=m()&&e.left<=l()},r})})(v);var y=v.exports;const d=b(y),o=document.querySelector("#ScrollDownHeroElement");document.querySelector("#NuovoTextElement");document.addEventListener("scroll",()=>{d.inY(o)&&!o.classList.contains("animate__animated")?o.classList.add("animate__animated","animate__bounce"):!d.inY(o)&&o.classList.contains("animate__animated")&&o.classList.remove("animate__animated","animate__bounce")});
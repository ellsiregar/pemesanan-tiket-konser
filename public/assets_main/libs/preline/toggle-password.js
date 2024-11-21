!function(t,e){if("object"==typeof exports&&"object"==typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var n=e();for(var o in n)("object"==typeof exports?exports:t)[o]=n[o]}}(self,(()=>(()=>{"use strict";var t={961:(t,e)=>{Object.defineProperty(e,"__esModule",{value:!0});var n=function(){function t(t,e,n){this.el=t,this.options=e,this.events=n,this.el=t,this.options=e,this.events={}}return t.prototype.createCollection=function(t,e){var n;t.push({id:(null===(n=null==e?void 0:e.el)||void 0===n?void 0:n.id)||t.length+1,element:e})},t.prototype.fireEvent=function(t,e){if(void 0===e&&(e=null),this.events.hasOwnProperty(t))return this.events[t](e)},t.prototype.on=function(t,e){this.events[t]=e},t}();e.default=n},100:function(t,e,n){
/*
 * HSTogglePassword
 * @version: 2.5.0
 * @author: Preline Labs Ltd.
 * @license: Licensed under MIT and Preline UI Fair Use License (https://preline.co/docs/license.html)
 * Copyright 2024 Preline Labs Ltd.
 */
var o,i=this&&this.__extends||(o=function(t,e){return o=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n])},o(t,e)},function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Class extends value "+String(e)+" is not a constructor or null");function n(){this.constructor=t}o(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}),r=this&&this.__assign||function(){return r=Object.assign||function(t){for(var e,n=1,o=arguments.length;n<o;n++)for(var i in e=arguments[n])Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i]);return t},r.apply(this,arguments)},s=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};Object.defineProperty(e,"__esModule",{value:!0});var a=n(292),l=function(t){function e(e,n){var o=t.call(this,e,n)||this,i=e.getAttribute("data-hs-toggle-password"),s=i?JSON.parse(i):{},l=r(r({},s),n),u=[];(null==l?void 0:l.target)&&"string"==typeof(null==l?void 0:l.target)?(null==l?void 0:l.target.split(",")).forEach((function(t){u.push(document.querySelector(t))})):(null==l?void 0:l.target)&&"object"==typeof(null==l?void 0:l.target)?l.target.forEach((function(t){return u.push(document.querySelector(t))})):l.target.forEach((function(t){return u.push(t)}));return o.target=u,o.isShown=!!o.el.hasAttribute("type")&&o.el.checked,o.eventType=(0,a.isFormElement)(o.el)?"change":"click",o.isMultiple=o.target.length>1&&!!o.el.closest("[data-hs-toggle-password-group]"),o.target&&o.init(),o}return i(e,t),e.prototype.init=function(){var t=this;this.createCollection(window.$hsTogglePasswordCollection,this),this.isShown?this.show():this.hide(),this.el.addEventListener(this.eventType,(function(){t.isShown?t.hide():t.show(),t.fireEvent("toggle",t.target),(0,a.dispatch)("toggle.hs.toggle-select",t.el,t.target)}))},e.prototype.getMultipleToggles=function(){var t=this.el.closest("[data-hs-toggle-password-group]").querySelectorAll("[data-hs-toggle-password]"),n=[];return t.forEach((function(t){n.push(e.getInstance(t))})),n},e.prototype.show=function(){this.isMultiple?(this.getMultipleToggles().forEach((function(t){return!!t&&(t.isShown=!0)})),this.el.closest("[data-hs-toggle-password-group]").classList.add("active")):(this.isShown=!0,this.el.classList.add("active"));this.target.forEach((function(t){t.type="text"}))},e.prototype.hide=function(){this.isMultiple?(this.getMultipleToggles().forEach((function(t){return!!t&&(t.isShown=!1)})),this.el.closest("[data-hs-toggle-password-group]").classList.remove("active")):(this.isShown=!1,this.el.classList.remove("active"));this.target.forEach((function(t){t.type="password"}))},e.getInstance=function(t,e){var n=window.$hsTogglePasswordCollection.find((function(e){return e.element.el===("string"==typeof t?document.querySelector(t):t)}));return n?e?n:n.element:null},e.autoInit=function(){window.$hsTogglePasswordCollection||(window.$hsTogglePasswordCollection=[]),document.querySelectorAll("[data-hs-toggle-password]:not(.--prevent-on-load-init)").forEach((function(t){window.$hsTogglePasswordCollection.find((function(e){var n;return(null===(n=null==e?void 0:e.element)||void 0===n?void 0:n.el)===t}))||new e(t)}))},e}(s(n(961)).default);window.addEventListener("load",(function(){l.autoInit()})),"undefined"!=typeof window&&(window.HSTogglePassword=l),e.default=l},292:function(t,e){
/*
 * @version: 2.5.0
 * @author: Preline Labs Ltd.
 * @license: Licensed under MIT and Preline UI Fair Use License (https://preline.co/docs/license.html)
 * Copyright 2024 Preline Labs Ltd.
 */
var n=this;Object.defineProperty(e,"__esModule",{value:!0}),e.menuSearchHistory=e.classToClassList=e.htmlToElement=e.afterTransition=e.dispatch=e.debounce=e.isDirectChild=e.isFormElement=e.isParentOrElementHidden=e.isEnoughSpace=e.isIpadOS=e.isIOS=e.getZIndex=e.getClassPropertyAlt=e.getClassProperty=e.stringToBoolean=void 0,e.getHighestZIndex=function(t){var e=Number.NEGATIVE_INFINITY;return t.forEach((function(t){var n=o(t);"auto"!==n&&(n=parseInt(n,10))>e&&(e=n)})),e};e.stringToBoolean=function(t){return"true"===t};e.getClassProperty=function(t,e,n){return void 0===n&&(n=""),(window.getComputedStyle(t).getPropertyValue(e)||n).replace(" ","")};e.getClassPropertyAlt=function(t,e,n){void 0===n&&(n="");var o="";return t.classList.forEach((function(t){t.includes(e)&&(o=t)})),o.match(/:(.*)]/)?o.match(/:(.*)]/)[1]:n};var o=function(t){return window.getComputedStyle(t).getPropertyValue("z-index")};e.getZIndex=o;e.isIOS=function(){return!!/iPad|iPhone|iPod/.test(navigator.platform)||navigator.maxTouchPoints&&navigator.maxTouchPoints>2&&/MacIntel/.test(navigator.platform)};e.isIpadOS=function(){return navigator.maxTouchPoints&&navigator.maxTouchPoints>2&&/MacIntel/.test(navigator.platform)};e.isDirectChild=function(t,e){for(var n=t.children,o=0;o<n.length;o++)if(n[o]===e)return!0;return!1};e.isEnoughSpace=function(t,e,n,o,i){void 0===n&&(n="auto"),void 0===o&&(o=10),void 0===i&&(i=null);var r=e.getBoundingClientRect(),s=i?i.getBoundingClientRect():null,a=window.innerHeight,l=s?r.top-s.top:r.top,u=(i?s.bottom:a)-r.bottom,c=t.clientHeight+o;return"bottom"===n?u>=c:"top"===n?l>=c:l>=c||u>=c};e.isFormElement=function(t){return t instanceof HTMLInputElement||t instanceof HTMLTextAreaElement||t instanceof HTMLSelectElement};var i=function(t){return!!t&&("none"===window.getComputedStyle(t).display||i(t.parentElement))};e.isParentOrElementHidden=i;e.debounce=function(t,e){var o;return void 0===e&&(e=200),function(){for(var i=[],r=0;r<arguments.length;r++)i[r]=arguments[r];clearTimeout(o),o=setTimeout((function(){t.apply(n,i)}),e)}};e.dispatch=function(t,e,n){void 0===n&&(n=null);var o=new CustomEvent(t,{detail:{payload:n},bubbles:!0,cancelable:!0,composed:!1});e.dispatchEvent(o)};e.afterTransition=function(t,e){var n=function(){e(),t.removeEventListener("transitionend",n,!0)},o=window.getComputedStyle(t),i=o.getPropertyValue("transition-duration");"none"!==o.getPropertyValue("transition-property")&&parseFloat(i)>0?t.addEventListener("transitionend",n,!0):e()};e.htmlToElement=function(t){var e=document.createElement("template");return t=t.trim(),e.innerHTML=t,e.content.firstChild};e.classToClassList=function(t,e,n,o){void 0===n&&(n=" "),void 0===o&&(o="add"),t.split(n).forEach((function(t){return"add"===o?e.classList.add(t):e.classList.remove(t)}))};e.menuSearchHistory={historyIndex:-1,addHistory:function(t){this.historyIndex=t},existsInHistory:function(t){return t>this.historyIndex},clearHistory:function(){this.historyIndex=-1}}}},e={};var n=function n(o){var i=e[o];if(void 0!==i)return i.exports;var r=e[o]={exports:{}};return t[o].call(r.exports,r,r.exports,n),r.exports}(100);return n})()));
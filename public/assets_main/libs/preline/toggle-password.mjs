var t={615:(t,e,s)=>{s.d(e,{A:()=>o});class o{constructor(t,e,s){this.el=t,this.options=e,this.events=s,this.el=t,this.options=e,this.events={}}createCollection(t,e){var s;t.push({id:(null===(s=null==e?void 0:e.el)||void 0===s?void 0:s.id)||t.length+1,element:e})}fireEvent(t,e=null){if(this.events.hasOwnProperty(t))return this.events[t](e)}on(t,e){this.events[t]=e}}},926:(t,e,s)=>{s.d(e,{JD:()=>i,V6:()=>o});const o=t=>t instanceof HTMLInputElement||t instanceof HTMLTextAreaElement||t instanceof HTMLSelectElement,i=(t,e,s=null)=>{const o=new CustomEvent(t,{detail:{payload:s},bubbles:!0,cancelable:!0,composed:!1});e.dispatchEvent(o)}}},e={};function s(o){var i=e[o];if(void 0!==i)return i.exports;var l=e[o]={exports:{}};return t[o](l,l.exports,s),l.exports}s.d=(t,e)=>{for(var o in e)s.o(e,o)&&!s.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:e[o]})},s.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e);var o={};s.d(o,{A:()=>r});var i=s(926),l=s(615);
/*
 * HSTogglePassword
 * @version: 2.5.0
 * @author: Preline Labs Ltd.
 * @license: Licensed under MIT and Preline UI Fair Use License (https://preline.co/docs/license.html)
 * Copyright 2024 Preline Labs Ltd.
 */
class n extends l.A{constructor(t,e){super(t,e);const s=t.getAttribute("data-hs-toggle-password"),o=s?JSON.parse(s):{},l=Object.assign(Object.assign({},o),e),n=[];if((null==l?void 0:l.target)&&"string"==typeof(null==l?void 0:l.target)){(null==l?void 0:l.target.split(",")).forEach((t=>{n.push(document.querySelector(t))}))}else(null==l?void 0:l.target)&&"object"==typeof(null==l?void 0:l.target)?l.target.forEach((t=>n.push(document.querySelector(t)))):l.target.forEach((t=>n.push(t)));this.target=n,this.isShown=!!this.el.hasAttribute("type")&&this.el.checked,this.eventType=(0,i.V6)(this.el)?"change":"click",this.isMultiple=this.target.length>1&&!!this.el.closest("[data-hs-toggle-password-group]"),this.target&&this.init()}init(){this.createCollection(window.$hsTogglePasswordCollection,this),this.isShown?this.show():this.hide(),this.el.addEventListener(this.eventType,(()=>{this.isShown?this.hide():this.show(),this.fireEvent("toggle",this.target),(0,i.JD)("toggle.hs.toggle-select",this.el,this.target)}))}getMultipleToggles(){const t=this.el.closest("[data-hs-toggle-password-group]").querySelectorAll("[data-hs-toggle-password]"),e=[];return t.forEach((t=>{e.push(n.getInstance(t))})),e}show(){if(this.isMultiple){this.getMultipleToggles().forEach((t=>!!t&&(t.isShown=!0))),this.el.closest("[data-hs-toggle-password-group]").classList.add("active")}else this.isShown=!0,this.el.classList.add("active");this.target.forEach((t=>{t.type="text"}))}hide(){if(this.isMultiple){this.getMultipleToggles().forEach((t=>!!t&&(t.isShown=!1))),this.el.closest("[data-hs-toggle-password-group]").classList.remove("active")}else this.isShown=!1,this.el.classList.remove("active");this.target.forEach((t=>{t.type="password"}))}static getInstance(t,e){const s=window.$hsTogglePasswordCollection.find((e=>e.element.el===("string"==typeof t?document.querySelector(t):t)));return s?e?s:s.element:null}static autoInit(){window.$hsTogglePasswordCollection||(window.$hsTogglePasswordCollection=[]),document.querySelectorAll("[data-hs-toggle-password]:not(.--prevent-on-load-init)").forEach((t=>{window.$hsTogglePasswordCollection.find((e=>{var s;return(null===(s=null==e?void 0:e.element)||void 0===s?void 0:s.el)===t}))||new n(t)}))}}window.addEventListener("load",(()=>{n.autoInit()})),"undefined"!=typeof window&&(window.HSTogglePassword=n);const r=n;var a=o.A;export{a as default};
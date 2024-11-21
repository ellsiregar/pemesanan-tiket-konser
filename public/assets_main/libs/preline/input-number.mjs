var t={615:(t,e,i)=>{i.d(e,{A:()=>n});class n{constructor(t,e,i){this.el=t,this.options=e,this.events=i,this.el=t,this.options=e,this.events={}}createCollection(t,e){var i;t.push({id:(null===(i=null==e?void 0:e.el)||void 0===i?void 0:i.id)||t.length+1,element:e})}fireEvent(t,e=null){if(this.events.hasOwnProperty(t))return this.events[t](e)}on(t,e){this.events[t]=e}}},926:(t,e,i)=>{i.d(e,{JD:()=>n});const n=(t,e,i=null)=>{const n=new CustomEvent(t,{detail:{payload:i},bubbles:!0,cancelable:!0,composed:!1});e.dispatchEvent(n)}}},e={};function i(n){var s=e[n];if(void 0!==s)return s.exports;var a=e[n]={exports:{}};return t[n](a,a.exports,i),a.exports}i.d=(t,e)=>{for(var n in e)i.o(e,n)&&!i.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},i.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e);var n={};i.d(n,{A:()=>l});var s=i(926),a=i(615);
/*
 * HSInputNumber
 * @version: 2.5.0
 * @author: Preline Labs Ltd.
 * @license: Licensed under MIT and Preline UI Fair Use License (https://preline.co/docs/license.html)
 * Copyright 2024 Preline Labs Ltd.
 */
class u extends a.A{constructor(t,e){super(t,e),this.input=this.el.querySelector("[data-hs-input-number-input]")||null,this.increment=this.el.querySelector("[data-hs-input-number-increment]")||null,this.decrement=this.el.querySelector("[data-hs-input-number-decrement]")||null,this.input&&this.checkIsNumberAndConvert();const i=this.el.dataset.hsInputNumber,n=i?JSON.parse(i):{step:1},s=Object.assign(Object.assign({},n),e);this.minInputValue="min"in s?s.min:0,this.maxInputValue="max"in s?s.max:null,this.step="step"in s&&s.step>0?s.step:1,this.init()}init(){this.createCollection(window.$hsInputNumberCollection,this),this.input&&this.increment&&this.build()}checkIsNumberAndConvert(){const t=this.input.value.trim(),e=this.cleanAndExtractNumber(t);null!==e?(this.inputValue=e,this.input.value=e.toString()):(this.inputValue=0,this.input.value="0")}cleanAndExtractNumber(t){const e=[];let i=!1;t.split("").forEach((t=>{t>="0"&&t<="9"?e.push(t):"."!==t||i||(e.push(t),i=!0)}));const n=e.join(""),s=parseFloat(n);return isNaN(s)?null:s}build(){this.input&&this.buildInput(),this.increment&&this.buildIncrement(),this.decrement&&this.buildDecrement(),this.inputValue<=0&&0===this.minInputValue&&(this.inputValue=0,this.input.value="0"),(this.inputValue<=0||this.minInputValue<0)&&this.changeValue(),this.input.hasAttribute("disabled")&&this.disableButtons()}buildInput(){this.input.addEventListener("input",(()=>this.changeValue()))}buildIncrement(){this.increment.addEventListener("click",(()=>{this.changeValue("increment")}))}buildDecrement(){this.decrement.addEventListener("click",(()=>{this.changeValue("decrement")}))}changeValue(t="none"){var e,i;const n={inputValue:this.inputValue},a=null!==(e=this.minInputValue)&&void 0!==e?e:Number.MIN_SAFE_INTEGER,u=null!==(i=this.maxInputValue)&&void 0!==i?i:Number.MAX_SAFE_INTEGER;switch(this.inputValue=isNaN(this.inputValue)?0:this.inputValue,t){case"increment":const t=this.inputValue+this.step;this.inputValue=t>=a&&t<=u?t:u,this.input.value=this.inputValue.toString();break;case"decrement":const e=this.inputValue-this.step;this.inputValue=e>=a&&e<=u?e:a,this.input.value=this.inputValue.toString();break;default:const i=isNaN(parseInt(this.input.value))?0:parseInt(this.input.value);this.inputValue=i>=u?u:i<=a?a:i,this.inputValue<=a&&(this.input.value=this.inputValue.toString())}n.inputValue=this.inputValue,this.inputValue===a?(this.el.classList.add("disabled"),this.decrement&&this.disableButtons("decrement")):(this.el.classList.remove("disabled"),this.decrement&&this.enableButtons("decrement")),this.inputValue===u?(this.el.classList.add("disabled"),this.increment&&this.disableButtons("increment")):(this.el.classList.remove("disabled"),this.increment&&this.enableButtons("increment")),this.fireEvent("change",n),(0,s.JD)("change.hs.inputNumber",this.el,n)}disableButtons(t="all"){"all"===t?("BUTTON"!==this.increment.tagName&&"INPUT"!==this.increment.tagName||this.increment.setAttribute("disabled","disabled"),"BUTTON"!==this.decrement.tagName&&"INPUT"!==this.decrement.tagName||this.decrement.setAttribute("disabled","disabled")):"increment"===t?"BUTTON"!==this.increment.tagName&&"INPUT"!==this.increment.tagName||this.increment.setAttribute("disabled","disabled"):"decrement"===t&&("BUTTON"!==this.decrement.tagName&&"INPUT"!==this.decrement.tagName||this.decrement.setAttribute("disabled","disabled"))}enableButtons(t="all"){"all"===t?("BUTTON"!==this.increment.tagName&&"INPUT"!==this.increment.tagName||this.increment.removeAttribute("disabled"),"BUTTON"!==this.decrement.tagName&&"INPUT"!==this.decrement.tagName||this.decrement.removeAttribute("disabled")):"increment"===t?"BUTTON"!==this.increment.tagName&&"INPUT"!==this.increment.tagName||this.increment.removeAttribute("disabled"):"decrement"===t&&("BUTTON"!==this.decrement.tagName&&"INPUT"!==this.decrement.tagName||this.decrement.removeAttribute("disabled"))}static getInstance(t,e){const i=window.$hsInputNumberCollection.find((e=>e.element.el===("string"==typeof t?document.querySelector(t):t)));return i?e?i:i.element:null}static autoInit(){window.$hsInputNumberCollection||(window.$hsInputNumberCollection=[]),document.querySelectorAll("[data-hs-input-number]:not(.--prevent-on-load-init)").forEach((t=>{window.$hsInputNumberCollection.find((e=>{var i;return(null===(i=null==e?void 0:e.element)||void 0===i?void 0:i.el)===t}))||new u(t)}))}}window.addEventListener("load",(()=>{u.autoInit()})),"undefined"!=typeof window&&(window.HSInputNumber=u);const l=u;var r=n.A;export{r as default};
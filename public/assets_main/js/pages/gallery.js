var Shuffle=window.Shuffle;class Demo{constructor(e){this.element=e,this.shuffle=new Shuffle(e,{itemSelector:".picture-item"}),this.addShuffleEventListeners(),this._activeFilters=[],this.addFilterButtons()}addShuffleEventListeners(){this.shuffle.on(Shuffle.EventType.LAYOUT,e=>{}),this.shuffle.on(Shuffle.EventType.REMOVED,e=>{})}addFilterButtons(){var e=document.querySelector(".filter-options");if(e){const t=Array.from(e.children),i=this._handleFilterClick.bind(this);t.forEach(e=>{e.addEventListener("click",i,!1)})}}_handleFilterClick(e){const t=e.currentTarget;t.classList.contains("active");e=t.getAttribute("data-group");this._removeActiveClassFromChildren(t.parentNode),t.classList.add("active"),this.shuffle.filter(e)}_removeActiveClassFromChildren(e){const t=e.children;for(let e=t.length-1;0<=e;e--)t[e].classList.remove("active")}}document.addEventListener("DOMContentLoaded",()=>{window.demo=new Demo(document.getElementById("gallery-wrapper"))});var lightbox=GLightbox({selector:".image-popup",title:!1});
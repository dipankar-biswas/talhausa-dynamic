// Overlay Div 
let site_overlay = document.querySelector('.site-overlay');

// Menu Active
// window.location.pathname (Current Location)
const hrefs = document.querySelectorAll('header .navigation nav .navbar-nav .nav-item .nav-link');
for(let i = 0; i < hrefs.length; i++){
    if(window.location.pathname === hrefs[i].pathname){
        hrefs[i].classList.add("active");
        if(hrefs[i].closest('.nav-item.tree .dropmenu')){
            hrefs[i].closest(".nav-item.tree").querySelector('.nav-link').classList.add("active");
        }
    }
}



// Main Menu Mobile Display 
let menu_itemList = document.querySelectorAll(".navigation .navbar-nav .nav-item.tree");
let menu_panel = document.querySelectorAll(".navigation .navbar-nav .dropmenu");

for (let i = 0; i < menu_itemList.length; i++) {
    menu_itemList[i].addEventListener("click",function(){
        if(menu_panel[i]){
            if(parseInt(menu_panel[i].style.maxHeight) != menu_panel[i].scrollHeight){
                menu_itemList[i].classList.add("active");
                menu_panel[i].style.maxHeight = menu_panel[i].scrollHeight + "px";
            }else {
                menu_itemList[i].classList.remove("active");
                menu_panel[i].style.maxHeight = "0px";
            }
    
            for (let j = 0; j < menu_panel.length; j++) {
                if(j !== i){
                    menu_itemList[j].classList.remove("active");
                    menu_panel[j].style.maxHeight = "0px";
                }
            }
        }

    })
}


// Product Category Slide
let itemList = document.querySelectorAll(".cat-lists .items .item.tree");
let panel = document.querySelectorAll(".cat-lists .items .lists");

// itemList[0].classList.add("active");
// panel[0].style.maxHeight = panel[0].scrollHeight + "px";
// panel[0].style.display = 'block';

for (let i = 0; i < itemList.length; i++) {
    itemList[i].addEventListener("click",function(){
        if(panel[i]){
            if(parseInt(panel[i].style.maxHeight) != panel[i].scrollHeight){
                itemList[i].classList.add("active");
                panel[i].style.maxHeight = panel[i].scrollHeight + "px";
            }else {
                itemList[i].classList.remove("active");
                panel[i].style.maxHeight = "0px";
            }
    
            for (let j = 0; j < panel.length; j++) {
                if(j !== i){
                    itemList[j].classList.remove("active");
                    panel[j].style.maxHeight = "0px";
                }
            }
        }

    })
}


// ================= Site Search ===================
let search_btn = document.querySelector('header .navigation .search .search-btn');
let search_div = document.querySelector('header .navigation .search .search-slide');
if(search_btn && search_div){
    window.addEventListener('mouseup',function(event){
        if(search_btn == event.target.closest(".search .search-btn")){
            search_btn.closest(".search").classList.toggle('active');
            search_div.classList.toggle('show');
        }else{
            if(event.target == search_div || event.target.closest(".search-slide") == search_div){
                return false;
            }else if(event.target != search_div && event.target.parentNode != search_div){
                search_div.classList.remove("show");
            }
        }
    }); 
}


// ================= Product Category ===================
// Filter Open/Close
let filter_open_btn = document.querySelector('.category-product .right-section .filter-open');
let filter_close_btn = document.querySelector('.category-product .left-section .filter-close');
let filter_section = document.querySelector('.category-product .left-section');

if(filter_open_btn && filter_section){
    filter_open_btn.addEventListener('click',function(){
        siteOverlay();
        site_overlay.classList.add('show');
        filter_section.classList.add('show');
    });
}else if(filter_close_btn && filter_section){
    filter_close_btn.addEventListener('click',function(){
        site_overlay.classList.remove('show');
        filter_section.classList.remove('show');
    });
}



// ================= Product Details Social Media Share ===================
let product_share_btn = document.querySelector('.pdt-details .details .shares .social-share .share-btn');
let product_share_div = document.querySelector('.pdt-details .details .shares .social-share .share');
if(product_share_btn && product_share_div){
    window.addEventListener('mouseup',function(event){
        if(product_share_btn == event.target.closest(".social-share .share-btn")){
            product_share_div.classList.toggle('show');
        }else{
            if(event.target == product_share_div || event.target.closest(".share.social") == product_share_div){
                return false;
            }else if(event.target != product_share_div && event.target.parentNode != product_share_div){
                product_share_div.classList.remove("show");
            }
        }
    }); 
}


// ================= User Panel ===================
let user_panel_open_btn = document.querySelector('.mobile-tools .user-panel-open-btn');
let user_panel_close_btn = document.querySelector('.head .user-panel-close-btn');
let user_panel_aside = document.querySelector('.user-panel .user-aside');
if(user_panel_open_btn && user_panel_aside){
    user_panel_open_btn.addEventListener('click',function(){
        mobileIconText(this);
        siteOverlay();
        site_overlay.classList.add('show');
        user_panel_aside.classList.add('show');
    });
}
if(user_panel_close_btn && user_panel_aside){
    user_panel_close_btn.addEventListener('click',function(){
        site_overlay.classList.remove('show');
        user_panel_aside.classList.remove('show');
    });
}

// ================= Mobile Tools Categories Slide ===================
let categories_slide_open_btn = document.querySelector('.mobile-tools .categories-slide-open-btn');
let categories_slide_close_btn = document.querySelector('.heading .categories-slide-close-btn');
let categories_aside = document.querySelector('header .navigation .categories');
if(categories_slide_open_btn && categories_aside){
    categories_slide_open_btn.addEventListener('click',function(){
        mobileIconText(this);
        siteOverlay();
        site_overlay.classList.add('show');
        categories_aside.classList.add('show');
    });
}
if(categories_slide_close_btn && categories_aside){
    categories_slide_close_btn.addEventListener('click',function(){
        site_overlay.classList.remove('show');
        categories_aside.classList.remove('show');
    });
}

// Mobile Icon Text Active/Remove
function mobileIconText(_this){
    // All active item link remove
    let mobile_tools_icon = document.querySelectorAll(".mobile-tools .items .item .link .icon");
    let mobile_tools_txt = document.querySelectorAll(".mobile-tools .items .item .link .txt");
    for (let i = 0; i < mobile_tools_icon.length; i++) {
        mobile_tools_icon[i].classList.remove("active");
        mobile_tools_txt[i].classList.remove("active");
    }

    _this.querySelector('.icon').classList.add('active')
    _this.querySelector('.txt').classList.add('active')
}



// ================= Site Overlay ===================
// Overlay Click All Close
site_overlay.addEventListener('click',function(){
    this.classList.remove("show");
    siteOverlay();
});

function siteOverlay(){
    if(filter_section){
        filter_section.classList.remove("show");
    }
    if(user_panel_aside){
        user_panel_aside.classList.remove("show");
    }
    if(categories_aside){
        categories_aside.classList.remove("show");
    }
}



// ================= Cart List Short ===================
let cart_view_btn = document.querySelector('header .logo-bar .cart .link');
let cart_view_div = document.querySelector('header .logo-bar .cart .cart-lists');
if(cart_view_btn && cart_view_div){
    window.addEventListener('mouseup',function(event){
        if(cart_view_btn == event.target.closest(".cart .link")){
            cart_view_div.classList.toggle('show');
        }else{
            if(event.target == cart_view_div || event.target.closest(".cart-lists") == cart_view_div){
                return false;
            }else if(event.target != cart_view_div && event.target.parentNode != cart_view_div){
                cart_view_div.classList.remove("show");
            }
        }
    }); 
}

// ================= User Options/Setting ===================
let user_option_btn = document.querySelector('header .navigation nav .navbar-nav .nav-item.user-set .nav-link');
let user_option_div = document.querySelector('header .navigation nav .navbar-nav .nav-item.user-set .user-options');
let user_option_div_head = document.querySelector('header .navigation nav .navbar-nav .nav-item.user-set .user-options .head');
if(user_option_btn && user_option_div){
    window.addEventListener('mouseup',function(event){
        if(user_option_btn == event.target){
            user_option_div.classList.toggle('show');
        }else{
            if(event.target == user_option_div_head || event.target.closest(".head") == user_option_div_head){
                return false;
            }else if(event.target != user_option_div && event.target.parentNode != user_option_div){
                user_option_div.classList.remove("show");
            }
        }
    }); 
}



// ============================
// Quantity
// ============================
quantityFun();
function quantityFun(){
    let qtyMinusBtn = document.querySelectorAll('.quantity .qty button.minus');
    let qtyPlusBtn = document.querySelectorAll('.quantity .qty button.plus');
    let qtyInput = document.querySelectorAll('.quantity .qty input');
    if(qtyMinusBtn && qtyPlusBtn){
        for (let i = 0; i < qtyMinusBtn.length; i++) {
            qtyMinusBtn[i].addEventListener("click", () => {
                if(qtyMinusBtn[i].closest('.qty').querySelector('input').value <= 1) return;
                let maxQty = qtyInput[i].getAttribute('max');
                qtyMinusBtn[i].closest('.qty').querySelector('input').value = --qtyMinusBtn[i].closest('.qty').querySelector('input').value;
                qtyMinusBtn[i].closest('.qty').querySelector('input').value <= 1 ? qtyMinusBtn[i].classList.remove('work') : qtyMinusBtn[i].classList.add('work');
                qtyMinusBtn[i].closest('.qty').querySelector('input').value <= parseInt(maxQty) ? qtyPlusBtn[i].classList.add('work') : qtyPlusBtn[i].classList.remove('work');
            })
            
        }
        for (let i = 0; i < qtyPlusBtn.length; i++) {
            qtyPlusBtn[i].addEventListener("click", () => {
                let maxQty = qtyInput[i].getAttribute('max');
                if(qtyPlusBtn[i].closest('.qty').querySelector('input').value >= parseInt(maxQty)) return;
                qtyPlusBtn[i].closest('.qty').querySelector('input').value = ++qtyPlusBtn[i].closest('.qty').querySelector('input').value;
                qtyPlusBtn[i].closest('.qty').querySelector('input').value >= parseInt(maxQty) ? qtyPlusBtn[i].classList.remove('work') : qtyPlusBtn[i].classList.add('work');
                qtyPlusBtn[i].closest('.qty').querySelector('input').value >= 1 ? qtyMinusBtn[i].classList.add('work') : qtyMinusBtn[i].classList.remove('work');
            })
        }
    }

    if(qtyInput){
        for (let i = 0; i < qtyInput.length; i++) {
            qtyInput[i].addEventListener("keyup", () => {
                if(window.location.pathname != '/cart'){
                    let maxQty = qtyInput[i].getAttribute('max');
                    if(parseInt(qtyInput[i].value) == 0){
                        qtyInput[i].closest('.details').querySelector('.actions .action').setAttribute('disabled',true);
                        qtyInput[i].closest('.details').querySelector('.stock-empty-msg').innerHTML  = `<span class="mb-2">Stock is ${ maxQty } available! Please try again.</span>`;
                    }else if(parseInt(maxQty) >= parseInt(qtyInput[i].value)){
                        qtyInput[i].closest('.details').querySelector('.actions .action').removeAttribute('disabled');
                        qtyInput[i].closest('.details').querySelector('.stock-empty-msg').innerHTML  = '';
                    }else{
                        qtyInput[i].closest('.details').querySelector('.actions .action').setAttribute('disabled',true);
                        qtyInput[i].closest('.details').querySelector('.stock-empty-msg').innerHTML  = `<span class="mb-2">Stock is ${ maxQty } available! Please try again.</span>`;
                    }
                }
            })
        }
    }
}






// ============================
// Product Color Wise Show
// ============================
ProductColorChangeFun();
function ProductColorChangeFun(){
    // Normal
    let pdtColorsDiv = document.querySelectorAll('.color-group > .colors');
    if(pdtColorsDiv){
        for (i = 0; i < pdtColorsDiv.length; i++) {
            let pdtColor = pdtColorsDiv[i].querySelectorAll('.color');
            for (j = 0; j < pdtColor.length; j++) {
                pdtColor[0].classList.add('active');
            }
        }
    }

    let colorFiled = document.querySelectorAll('.color-group > .colors .color');
    if(colorFiled){
        colorFiled.forEach((color,i) => {
            color.addEventListener("click", async() => {
                if(color.closest('.pdt-item').querySelector('.color-group .color-count > .colors .active')){
                    color.closest('.pdt-item').querySelector('.color-group .color-count > .colors .active').classList.remove('active');
                }
                if(color.closest('.colors').querySelector('.active')){
                    color.closest('.colors').querySelector('.active').classList.remove('active');
                }
                color.classList.add('active');
        
                // Product Color/Size Change Price Change
                let pid = color.getAttribute('data-pid');
                let cid = color.getAttribute('data-cid');
        
                ProductColorChange(pid,cid,color);
        
                color.closest('.pdt-item').querySelector('.thumb img').style.backgroundColor = color.getAttribute('style').split(':')[1];
        
            })
        });
    }

    // Plus Color
    let colorFiled1 = document.querySelectorAll('.color-group .color-count > .colors .color');
    if(colorFiled1){
        colorFiled1.forEach((color,i) => {
            color.addEventListener("click", async() => {
                if(color.closest('.pdt-item').querySelector('.color-group > .colors .active')){
                    color.closest('.pdt-item').querySelector('.color-group > .colors .active').classList.remove('active');
                }
                if(color.closest('.colors').querySelector('.active')){
                    color.closest('.colors').querySelector('.active').classList.remove('active');
                }
                color.classList.add('active');
        
                // Product Color/Size Change Price Change
                let pid = color.getAttribute('data-pid');
                let cid = color.getAttribute('data-cid');
        
                ProductColorChange(pid,cid,color);
        
                color.closest('.pdt-item').querySelector('.thumb img').style.backgroundColor = color.getAttribute('style').split(':')[1];
        
            })
        });
    }

    // Product Color/Size Change Price Change
    // =======================
    function ProductColorChange(pid,cid,color){
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let getData = JSON.parse(this.responseText);
                // load and price change
                color.closest('.pdt-item').querySelector('.price .new .num').innerHTML = getData[0].dis_price;
                color.closest('.pdt-item').querySelector('.price .old .num').innerHTML = getData[0].price;

                color.closest('.pdt-item').querySelector('.stock-color .stocks').innerHTML = '';
                if(getData[0].stock > 0){
                    color.closest('.pdt-item').querySelector('.stock-color .stocks').innerHTML = '<span class="stock in text-success fw-bold">In-Stock</span>';
                    color.closest('.pdt-item').querySelector('.actions .action').removeAttribute('disabled');
                }else{
                    color.closest('.pdt-item').querySelector('.stock-color .stocks').innerHTML = '<span class="stock out text-body-tertiary fw-bold">Out-Stock</span>';
                    color.closest('.pdt-item').querySelector('.actions .action').setAttribute('disabled',false);
                }
            }
        };
        xhttp.open("GET", `/product-details/getColorData?pid=${pid}&cid=${cid}`);
        xhttp.send();
    }
}




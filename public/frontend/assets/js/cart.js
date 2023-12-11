// Product Details Add To Cart
productAddToCartFun();
function productAddToCartFun(){
    // window.location.pathname (Current Location)
    if(window.location.pathname.split('/')[1] == 'product-details' || document.querySelector('.pdt-detail-view-modal')){
        let pdtDtlsAddToCartBtn = document.querySelector('.pdt-details .details button.add-cart');
        let pdtDtlsAddToCartBtn1 = document.querySelector('.pdt-details .details button.pdt-view-addtocart');
        let overlay  = document.querySelector('.alert-popup .overlay');
        let className;

        if(pdtDtlsAddToCartBtn1){
            pdtDtlsAddToCartBtn1.addEventListener('click',() => {
                overlay.classList.add('show');
                overlay.querySelector('.popup-basic').classList.add('show');

                if(document.querySelector('.pdt-detail-view-modal.show')){
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_name').innerText = document.querySelector('.pdt-detail-view-modal.show .pdt-dtls-modalview .details h2.title').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_new').innerText = '$'+document.querySelector('.pdt-detail-view-modal.show .pdt-dtls-modalview .details .price span.new').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_old').innerText = '$'+document.querySelector('.pdt-detail-view-modal.show .pdt-dtls-modalview .details .price span.old').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_color').innerText = document.querySelector(`.pdt-detail-view-modal.show .pdt-dtls-modalview .details .color-list .colors .color.active`).getAttribute('title');
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_size').innerText = document.querySelector(`.pdt-detail-view-modal.show .pdt-dtls-modalview .details .size-list .sizes .size.active`).innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_qty').innerText = document.querySelector(`.pdt-detail-view-modal.show .pdt-dtls-modalview .details .quantity .qty input`).value;
                }else{
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_name').innerText = document.querySelector('.pdt-details .details h2.title').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_new').innerText = '$'+document.querySelector('.pdt-details .details .price span.new').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_old').innerText = '$'+document.querySelector('.pdt-details .details .price span.old').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_color').innerText = document.querySelector(`.pdt-details .details .color-list .colors .color.active`).getAttribute('title');
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_size').innerText = document.querySelector(`.pdt-details .details .size-list .sizes .size.active`).innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_qty').innerText = document.querySelector(`.pdt-details .details .quantity .qty input`).value;
                }
            }); 

            let addToCartBtn1 = document.querySelector('.popup .add-to-cart');
            let once = 0;
            if(addToCartBtn1){
                addToCartBtn1.addEventListener("click", () => {
                    if(pdtDtlsAddToCartBtn) return;

                    if(window.location.pathname.split('/')[1] == 'product-details'){
                        if(document.querySelector('.pdt-detail-view-modal').classList.contains('show') && once == 0){
                        
                            let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                            className = document.querySelector('.pdt-detail-view-modal .pdt-dtls-modalview');
                            overlay.classList.remove('show');
                            overlay.querySelector('.popup-basic').classList.remove('show');
                            // Product Add To Cart Change
                    
                            let pid = className.querySelector('.details button.cart').getAttribute('data-pid');
                            let cid = className.querySelector(`.details .color-list .colors .color.active`).getAttribute('data-cid');
                            let sid = className.querySelector(`.details .size-list .sizes .size.active`).getAttribute('data-sid');
                            let qty = className.querySelector(`.details .quantity .qty input`).value;
    
                            let params = {
                                pid: pid,
                                cid: cid,
                                sid: sid,
                                qty: qty,
                            }
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    // let getData = JSON.parse(this.responseText);
                                    getCartData();
                                    // location.reload(true);
                                }
                            };
                            xhttp.open("POST", `/add-to-cart`,false);
                            xhttp.setRequestHeader('x-csrf-token', CSRF_TOKEN);       
                            xhttp.setRequestHeader("Content-Type", "application/json; charset=utf-8");
                            xhttp.setRequestHeader("Accept", "application/json");
                            xhttp.send(JSON.stringify(params));
    
                            once++;
                            
                        }
                    }else{
                        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        className = document.querySelector('.pdt-detail-view-modal .pdt-dtls-modalview');
                        overlay.classList.remove('show');
                        overlay.querySelector('.popup-basic').classList.remove('show');
                        // Product Add To Cart Change
                
                        let pid = className.querySelector('.details button.cart').getAttribute('data-pid');
                        let cid = className.querySelector(`.details .color-list .colors .color.active`).getAttribute('data-cid');
                        let sid = className.querySelector(`.details .size-list .sizes .size.active`).getAttribute('data-sid');
                        let qty = className.querySelector(`.details .quantity .qty input`).value;

                        let params = {
                            pid: pid,
                            cid: cid,
                            sid: sid,
                            qty: qty,
                        }
                        const xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // let getData = JSON.parse(this.responseText);
                                getCartData();
                                location.reload(true);
                            }
                        };
                        xhttp.open("POST", `/add-to-cart`,false);
                        xhttp.setRequestHeader('x-csrf-token', CSRF_TOKEN);       
                        xhttp.setRequestHeader("Content-Type", "application/json; charset=utf-8");
                        xhttp.setRequestHeader("Accept", "application/json");
                        xhttp.send(JSON.stringify(params));
                    }

                })
            }


        }else if(pdtDtlsAddToCartBtn){
            pdtDtlsAddToCartBtn.addEventListener('click',() => {
                overlay.classList.add('show');
                overlay.querySelector('.popup-basic').classList.add('show');
                
                if(document.querySelector('.pdt-detail-view-modal.show')){
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_name').innerText = document.querySelector('.pdt-detail-view-modal.show .pdt-dtls-modalview .details h2.title').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_new').innerText = '$'+document.querySelector('.pdt-detail-view-modal.show .pdt-dtls-modalview .details .price span.new').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_old').innerText = '$'+document.querySelector('.pdt-detail-view-modal.show .pdt-dtls-modalview .details .price span.old').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_color').innerText = document.querySelector(`.pdt-detail-view-modal.show .pdt-dtls-modalview .details .color-list .colors .color.active`).getAttribute('title');
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_size').innerText = document.querySelector(`.pdt-detail-view-modal.show .pdt-dtls-modalview .details .size-list .sizes .size.active`).innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_qty').innerText = document.querySelector(`.pdt-detail-view-modal.show .pdt-dtls-modalview .details .quantity .qty input`).value;
                }else{
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_name').innerText = document.querySelector('.pdt-details .details h2.title').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_new').innerText = '$'+document.querySelector('.pdt-details .details .price span.new').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_price_old').innerText = '$'+document.querySelector('.pdt-details .details .price span.old').innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_color').innerText = document.querySelector(`.pdt-details .details .color-list .colors .color.active`).getAttribute('title');
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_size').innerText = document.querySelector(`.pdt-details .details .size-list .sizes .size.active`).innerText;
                    overlay.querySelector('.popup-basic.show .pdt-data .pdt_qty').innerText = document.querySelector(`.pdt-details .details .quantity .qty input`).value;
                }
            });

            let addToCartBtn1 = document.querySelector('.popup .add-to-cart');
            if(addToCartBtn1){
                addToCartBtn1.addEventListener("click", () => {
                    if(pdtDtlsAddToCartBtn1) return;

                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-basic').classList.remove('show');
                    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    if(document.querySelector('.pdt-detail-view-modal').classList.contains('show')){
                        className = document.querySelector('.pdt-detail-view-modal .pdt-dtls-modalview');
                    }else{
                        className = document.querySelector('.product-details .pdt-dtls-view');
                    }
                    
                    // Product Add To Cart Change
            
                    let pid = className.querySelector('.details button.cart').getAttribute('data-pid');
                    let cid = className.querySelector(`.details .color-list .colors .color.active`).getAttribute('data-cid');
                    let sid = className.querySelector(`.details .size-list .sizes .size.active`).getAttribute('data-sid');
                    let qty = className.querySelector(`.details .quantity .qty input`).value;

                    let params = {
                        pid: pid,
                        cid: cid,
                        sid: sid,
                        qty: qty,
                    }
                    const xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            // let getData = JSON.parse(this.responseText);
            
                            getCartData();
                            // location.reload(true);
                        }
                    };
                    xhttp.open("POST", `/add-to-cart`,false);
                    xhttp.setRequestHeader('x-csrf-token', CSRF_TOKEN);       
                    xhttp.setRequestHeader("Content-Type", "application/json; charset=utf-8");
                    xhttp.setRequestHeader("Accept", "application/json");
                    xhttp.send(JSON.stringify(params));
                })
                
            }
        }
        
    }else{
        // Product Add To Cart
        let addToCartBtn = document.querySelector('.popup .add-to-cart');
        if(addToCartBtn){
            addToCartBtn.addEventListener("click", async() => {
                // Product Add To Cart Change
                let overlay  = document.querySelector('.alert-popup .overlay');
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');  
                let pid = addToCartBtn.getAttribute('data-pid');
                let params = {
                    pid: pid,
                }
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // let getData = JSON.parse(this.responseText);
        
                        getCartData();
                        // location.reload(true);
        
                        overlay.classList.remove('show');
                        overlay.querySelector('.popup-basic').classList.remove('show');
                    }
                };
                xhttp.open("POST", `/add-to-cart`,false);
                xhttp.setRequestHeader('x-csrf-token', CSRF_TOKEN);       
                xhttp.setRequestHeader("Content-Type", "application/json; charset=utf-8");
                xhttp.setRequestHeader("Accept", "application/json");
                xhttp.send(JSON.stringify(params));
            })
        }
    }
    
    
    // Get Cart Data
    getCartData();
    function getCartData(){
        let base_url = window.location.origin;
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');  
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let getData = JSON.parse(this.responseText);
                if(getData.count > 0){
                    document.querySelector('.logo-bar .cart .cart-lists').classList.add('not-empty');
                    let listData = "";
        
                    document.getElementById("myCart").setAttribute("href", "javascript::void()");
                    document.getElementById("myCart").classList.add("link");
                    
        
                    document.querySelector('.logo-bar .cart .cart-lists').innerHTML = "";
                    Object.entries(getData.data).forEach((item, i) => {
                        listData += `
                            <br>
                            <li class="list mb-3">
                                <div class="item">
                                    <div class="content d-flex column-gap-2">
                                        <a href="${ base_url+'/product-details/'+item[1].options.slug }" class="link" target="_blank">
                                            <img src="${ item[1].options.image != null ? base_url+'/'+item[1].options.image : base_url+'/frontend/assets/images/dummy-image.jpg' }" alt="Product" style="background:${ item[1].options.color_code }"/>
                                        </a>
                                        <div class="d-flex justify-content-between column-gap-2" style="width:calc(100% - 50px)">
                                            <div class="text">
                                                <h2 class="title fs-5 mb-1 text-center">
                                                    <a href="${ base_url+'/product-details/'+item[1].options.slug }" target="_blank" class="text-body-secondary text-hover">${ item[1].name }</a>
                                                </h2>
                                                <div class="d-flex column-gap-2">
                                                    <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                                        <span class="new fw-bold text-body fs-5">$ ${ item[1].price }</span>
                                                        <!-- <span class="old fs-6 text-secondary text-decoration-line-through">$00.00</span> -->
                                                    </div>
                                                    <div class="qty"><i class="fa-solid fa-xmark"></i> <span>${ item[1].qty }</span></div>
                                                </div>
                                            </div>
                                            <div class="remove text-active text-hover1 fs-5" data-id="${ item[1].rowId }">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `;
                    });
                    document.querySelector('.logo-bar .cart .cart-lists').innerHTML = listData+`
                            <hr class="mb-1">
                            <li>
                                <div class="subtotal d-flex justify-content-between align-items-center fw-bold">
                                    <div class="txt fs-5">Subtotal</div>
                                    <div class="price fs-4">$<span>${ getData.subtotal }</span></div>
                                </div>
                            </li>
                            <hr class="mb-1">
                            <li>
                                <div class="action d-flex justify-content-between align-items-center mt-2">
                                    <a href="${ base_url+'/cart' }" class="custom-btn rounded-2 px-3 py-2 fw-bold">View Cart</a>
                                    <a href="${ base_url+'/checkout' }" class="custom-btn1 rounded-2 px-3 py-2 fw-bold">Checkout</a>
                                </div>
                            </li>
                            <br>
                        `;
                    document.querySelector('.cart .cart-item-num').innerHTML = getData.count;
                    document.querySelector('.mobile-tools .cart .num').innerHTML = getData.count;
                }else{
                    document.querySelector('.logo-bar .cart .cart-lists').classList.remove('show');
                    document.querySelector('.logo-bar .cart .cart-lists').classList.remove('not-empty');
                    document.querySelector('.logo-bar .cart .cart-lists').innerHTML = "";
                    document.querySelector('.cart .cart-item-num').innerHTML = getData.count;
                    document.querySelector('.mobile-tools .cart .num').innerHTML = getData.count;
                    document.getElementById("myCart").setAttribute("href", `${base_url}/cart-empty`);
                    document.getElementById("myCart").classList.remove("link");
                }
    
    
                // Cart Remove
                let removeBtn = document.querySelectorAll('.logo-bar .cart .cart-lists .list .item .remove');
                removeBtn.forEach((btn,i) => {
                    btn.addEventListener("click", async() => {
    
                        let rowId = btn.getAttribute('data-id');
                        const xhttps = new XMLHttpRequest();
                        xhttps.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // let getData = JSON.parse(this.responseText);
    
                                getCartData();
                            }
                        };
                        xhttps.open("GET", `/cart-data/remove?rowId=${rowId}`);
                        xhttps.send();
                    })
                });
            }
        };
        xhttp.open("GET", `/cart-data`);
        xhttp.setRequestHeader('x-csrf-token', CSRF_TOKEN);       
        xhttp.setRequestHeader("Content-Type", "application/json; charset=utf-8");
        xhttp.setRequestHeader("Accept", "application/json");
        xhttp.send();
    
    }
    
    
    // ==============================
    // Cart Qty Update 
    // window.location.pathname (Current Location)
    if(window.location.pathname == '/cart'){
        let qtyPlusBtn = document.querySelectorAll('.quantity .qty button.plus');
        let qtyMinusBtn = document.querySelectorAll('.quantity .qty button.minus');
        let qtyInputField = document.querySelectorAll('.quantity .qty input');
        if(qtyMinusBtn){
            for (let i = 0; i < qtyMinusBtn.length; i++) {
                qtyMinusBtn[i].addEventListener("click", () => {

                    let qty     = qtyMinusBtn[i].closest('.qty').querySelector('input').value;

                    let item_price = qtyMinusBtn[i].closest('tr').querySelector('.price .num').innerHTML;
                    let item_subtotal = parseFloat(item_price) * parseFloat(qty);
                    qtyMinusBtn[i].closest('tr').querySelector('.subtotal .num').innerHTML = item_subtotal.toFixed(2);

                    let subtotal = 0;
                    let itemsqty = 0;
                    let items = qtyMinusBtn[i].closest('tbody').querySelectorAll('tr');
                    items.forEach(item => {
                        itemsqty += parseInt(item.querySelector('.qty input').value);
                        subtotal += parseFloat(item.querySelector('.subtotal .num').innerHTML);
                    });
                    document.querySelector('.cart-products .cart-totals .cart_subtotal_amount .num').innerHTML = subtotal.toFixed(2);
                    let shipping_amount = itemsqty == 0 ? 0.00 : (itemsqty == 1 ? 15.00 : (((itemsqty-1) * 0.75) + 15.00).toFixed(2));
                    document.querySelector('.cart-products .cart-totals .cart_shipping_amount .num').innerHTML = shipping_amount;
                    document.querySelector('.cart-products .cart-totals .cart_total_amount .num').innerHTML = (parseFloat(subtotal) + parseFloat(shipping_amount)).toFixed(2);
                    document.querySelector('.logo-bar .cart .cart-item-num').innerHTML = itemsqty;

                })
            }
        }

        if(qtyPlusBtn){
            for (let i = 0; i < qtyPlusBtn.length; i++) {
                qtyPlusBtn[i].addEventListener("click", () => {

                    let qty     = qtyMinusBtn[i].closest('.qty').querySelector('input').value;

                    let item_price = qtyMinusBtn[i].closest('tr').querySelector('.price .num').innerHTML;
                    let item_subtotal = parseFloat(item_price) * parseFloat(qty);
                    qtyMinusBtn[i].closest('tr').querySelector('.subtotal .num').innerHTML = item_subtotal.toFixed(2);

                    let subtotal = 0;
                    let itemsqty = 0;
                    let items = qtyMinusBtn[i].closest('tbody').querySelectorAll('tr');
                    items.forEach(item => {
                        itemsqty += parseInt(item.querySelector('.qty input').value);
                        subtotal += parseFloat(item.querySelector('.subtotal .num').innerHTML);
                    });
                    document.querySelector('.cart-products .cart-totals .cart_subtotal_amount .num').innerHTML = subtotal.toFixed(2);
                    let shipping_amount = itemsqty == 0 ? 0.00 : (itemsqty == 1 ? 15.00 : (((itemsqty-1) * 0.75) + 15.00).toFixed(2));
                    document.querySelector('.cart-products .cart-totals .cart_shipping_amount .num').innerHTML = shipping_amount;
                    document.querySelector('.cart-products .cart-totals .cart_total_amount .num').innerHTML = (parseFloat(subtotal) + parseFloat(shipping_amount)).toFixed(2);
                    document.querySelector('.logo-bar .cart .cart-item-num').innerHTML = itemsqty;

                })
            }
        }
        if(qtyInputField){
            for (let i = 0; i < qtyInputField.length; i++) {
                qtyInputField[i].addEventListener("keyup", () => {
                    if(qtyInputField[i].value > 0){
                        let rowId = qtyMinusBtn[i].closest('.qty').querySelector('.plus').getAttribute('data-rowId');
                        let pid = qtyMinusBtn[i].closest('.qty').querySelector('.plus').getAttribute('data-pid');
                        let cid = qtyMinusBtn[i].closest('.qty').querySelector('.plus').getAttribute('data-cid');
                        let sid = qtyMinusBtn[i].closest('.qty').querySelector('.plus').getAttribute('data-sid');
                        let qty = qtyInputField[i].value;
                        
                        let xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                let getData = JSON.parse(this.responseText);
                                qtyPlusBtn[i].closest('tr').querySelector('.subtotal .num').innerHTML = getData.qtyprice.toFixed(2);
                                document.querySelector('.cart-products .cart-totals .cart_subtotal_amount .num').innerHTML = getData.subtotal;
                                document.querySelector('.cart-products .cart-totals .cart_shipping_amount .num').innerHTML = getData.qtyCount == 0 ? 0.00 : (getData.qtyCount == 1 ? 15.00 : (((getData.qtyCount-1) * 0.75) + 15.00).toFixed(2));
                                let total = (parseFloat(getData.total.replace(/,/g, '')) + (getData.qtyCount == 0 ? 0.00 : (getData.qtyCount == 1 ? 15.00 : (((getData.qtyCount-1) * 0.75) + 15.00))));
                                let total_amount = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'USD'
                                }).format(total).replace(/\$/g, '');
                                document.querySelector('.cart-products .cart-totals .cart_total_amount .num').innerHTML = total_amount;
                                document.querySelector('.logo-bar .cart .cart-item-num').innerHTML = getData.cartItem;
                                qtyMinusBtn[i].setAttribute('data-rowId',getData.cusrowId);
                                qtyPlusBtn[i].setAttribute('data-rowId',getData.cusrowId);
                                qtyMinusBtn[i].closest('tr').querySelector('.pdt-remove').setAttribute('data-id',getData.cusrowId);
                                qtyMinusBtn[i].closest('tr').querySelector('.pdt-remove').setAttribute('href',window.location.origin+"/cart-remove/"+getData.cusrowId);
                            }
                        };
                        xhttp.open("GET", `/cart/qtyUpdate?rowId=${rowId}&pid=${pid}&cid=${cid}&sid=${sid}&qty=${qty}`);
                        xhttp.send();
                    }
                })
            }
        }

        

        let proceed_to_checkout_btn = document.querySelector('.proceed-to-checkout');
        proceed_to_checkout_btn.addEventListener('click',() => {
            let items = qtyMinusBtn[i].closest('tbody').querySelectorAll('tr');
            let rowId = [];
            let pid = [];
            let cid = [];
            let sid = [];
            let qty = [];
            items.forEach(item => {
                rowId.push(item.querySelector('.qty .plus').getAttribute('data-rowId'));
                pid.push(item.querySelector('.qty .plus').getAttribute('data-pid'));
                cid.push(item.querySelector('.qty .plus').getAttribute('data-cid'));
                sid.push(item.querySelector('.qty .plus').getAttribute('data-sid'));
                qty.push(item.querySelector('.qty input').value);
            });


            proceed_to_checkout_btn.querySelector('.img').classList.remove('d-none');
            let xhttp   = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // let getData = JSON.parse(this.responseText);
                    proceed_to_checkout_btn.querySelector('.img').classList.add('d-none');
                    window.location.href = `/checkout`;
                }
            };
    
            xhttp.open("GET", `/cart/qtyUpdate?rowId=${rowId}&pid=${pid}&cid=${cid}&sid=${sid}&qty=${qty}`);
            xhttp.send();
        })
    }
}



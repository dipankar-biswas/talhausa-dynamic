
// Menu Active
// window.location.pathname (Current Location)
const hrefss = document.querySelectorAll('body .cat-lists .items .item .link');
for(let i = 0; i < hrefss.length; i++){
    if(window.location.pathname === hrefss[i].pathname){
        hrefss[i].classList.add("active");
        if(hrefss[i].closest('.item.tree .lists')){
            hrefss[i].closest(".item.tree").classList.add("active");
            hrefss[i].closest('.item.tree .lists').style.maxHeight = 'fit-content';
        }
    }
}


// Get Category wise Data
let neckCheck = document.querySelectorAll('.brand-lists .lists .form-check .form-check-input');
neckCheck.forEach((clickBtn,i) => {
    clickBtn.addEventListener('change', function(){
        let base_url = window.location.origin;
        let checkedValue = document.querySelectorAll('.brand-lists .lists .form-check .form-check-input:checked')
        var neckid = [];
        checkedValue.forEach((item,i) => {
            neckid.push(parseInt(item.value));
        })
        // window.location.pathname (Current Location)
        if(window.location.pathname == '/product-search'){
            var url = `/product-search/getSearchFilterData?neckid=${neckid}`;
        }else{
            var catid = document.querySelector('body .cat-lists .items .item .link.active').getAttribute("data-catid");
            var url = `/product-category/getFilterData?catid=${catid}&neckid=${neckid}`;
        }

       if(neckid.length > 0){
           const xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   let getData = JSON.parse(this.responseText);
                   if(getData != ''){
                       let listData = "";
                       document.querySelector('.cat-products .right-section .products .row').innerHTML = "";
                       getData.forEach((item, i) => {
                           listData += `
                               <div class="col-lg-3 col-md-4 col-6 my-3">
                                   <div class="item pdt-item small rounded-1 shadow">
                                       <a href="${ base_url+'/product-details/'+item.slug }" class="thumb">
                                       ${ item.thumbnail != null ? 
                                           `<img src="${base_url+'/'+item.thumbnail}" alt="Product Image" style="background:${item.thumbnail != null ? item.colors[0]?.color_name?.code : '#f2f2f2'}">` 
                                           : 
                                           `<img src="${base_url+'/'+item.neck.image}" alt="Product Image" style="background:${item.thumbnail == null ? item.colors[0]?.color_name?.code : '#f2f2f2'}">`
                                       }
                                       </a>
                                       <div class="content">
                                           <div class="price-rating d-flex justify-content-center">
                                               <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                                    <span class="new fw-bold fs-3"><span>$</span><span class="num">${ item.sizes[0].dis_price }</span></span>
                                                    <span class="old fs-5 text-secondary text-decoration-line-through"><span>$</span><span class="num">${ item.sizes[0].price }</span></span>
                                               </div>
                                           </div>
                                           <h2 class="title fs-5 mt-3 mb-4 text-center">
                                               <a href="${ base_url+'/product-details/'+item.slug }" class="text-body text-hover">${ item.name }</a>
                                           </h2>
                                           <div class="actions d-flex justify-content-center align-items-center column-gap-4">
                                                <div class="cart action s-cart bg-white border rounded-circle shadow pdt-detail-view" title="Add To Cart" data-pid="${ item.id }" ${ item.sizes[0].stock > 0 ? '' : 'disabled' }>
                                                   <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                                               </div>
                                           </div>
                                           <div class="stock-color d-flex justify-content-between align-items-center mt-4">
                                                <div class="stocks">
                                                    ${item.sizes[0].stock > 0 ?
                                                    `<span class="stock in text-success fw-bold">In-Stock</span>`
                                                    :
                                                    `<span class="stock out text-body-tertiary fw-bold">Out-Stock</span>`
                                                    }
                                                </div>
                                               <div class="color-group">
                                                    <ul class="colors">
                                                        ${Object.keys(item.colors.slice(0, 4)).map(key => (
                                                            `<li class="color" title="${item.colors[key].color_name.name}" style="background-color: ${item.colors[key].color_name.code}" data-pid="${item.id}" data-cid="${item.colors[key].color_id}"></li>`
                                                        )).join('')}
                                                    </ul>
                                                    <div class="color-count">
                                                        ${ 
                                                            item.colors.length - 4 > 0 ? `<span>${item.colors.length - 4}${item.colors.length - 4 > 0 ? '+' : ''}</span>` : ''
                                                        }
                                                        <ul class="colors">
                                                            ${Object.keys(item.colors.slice(4, item.colors.length)).map(key => (
                                                                `<li class="color" title="${item.colors[key].color_name.name}" style="background-color: ${item.colors[key].color_name.code}" data-pid="${item.id}" data-cid="${item.colors[key].color_id}"></li>`
                                                            )).join('')}
                                                        </ul>
                                                    </div>
                                                </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               `;
                       });
                       
                       document.querySelector('.cat-products .right-section .products .row').innerHTML = listData;
                       ProductColorChangeFun();
                       pdtDetailViewFun();
                       basicPopup();

                   }else {
                        document.querySelector('.cat-products .right-section .products .row').innerHTML = `<h4 class="py-5 my-4 text-center">Product Not Found!!</h4>`;
                   }
               }
           };
           xhttp.open("GET", url);
           xhttp.send();
       }else{
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let getData = JSON.parse(this.responseText);
                let listData = "";
                document.querySelector('.cat-products .right-section .products .row').innerHTML = "";
                getData.forEach((item, i) => {
                    listData += `
                        <div class="col-lg-3 col-md-4 col-6 my-3">
                            <div class="item pdt-item small rounded-1 shadow">
                                <a href="${ base_url+'/product-details/'+item.slug }" class="thumb">
                                ${ item.thumbnail != null ? 
                                    `<img src="${base_url+'/'+item.thumbnail}" alt="Product Image" style="background:${item.thumbnail != null ? item.colors[0]?.color_name?.code : '#f2f2f2'}">` 
                                    : 
                                    `<img src="${base_url+'/'+item.neck.image}" alt="Product Image" style="background:${item.thumbnail == null ? item.colors[0]?.color_name?.code : '#f2f2f2'}">`
                                }
                                </a>
                                <div class="content">
                                    <div class="price-rating d-flex justify-content-center">
                                        <div class="price d-flex align-items-end justify-content-center column-gap-2">
                                            <span class="new fw-bold fs-3">$ ${ item.sizes[0].dis_price }</span>
                                            <span class="old fs-5 text-secondary text-decoration-line-through">$ ${ item.sizes[0].price }</span>
                                        </div>
                                    </div>
                                    <h2 class="title fs-5 mt-3 mb-4 text-center">
                                        <a href="${ base_url+'/product-details/'+item.slug }" class="text-body text-hover">${ item.name }</a>
                                    </h2>
                                    <div class="actions d-flex justify-content-center align-items-center column-gap-4">
                                        <div class="cart action s-cart bg-white border rounded-circle shadow pdt-detail-view" title="Add To Cart" data-pid="${ item.id }" ${ item.sizes[0].stock > 0 ? '' : 'disabled' }>
                                            <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                                        </div>
                                    </div>
                                    <div class="stock-color d-flex justify-content-between align-items-center mt-4">
                                        <div class="stocks">
                                            ${item.sizes[0].stock > 0 ?
                                            `<span class="stock in text-success fw-bold">In-Stock</span>`
                                            :
                                            `<span class="stock out text-body-tertiary fw-bold">Out-Stock</span>`
                                            }
                                        </div>
                                        <div class="color-group">
                                            <ul class="colors">
                                                ${Object.keys(item.colors.slice(0, 4)).map(key => (
                                                    `<li class="color" title="${item.colors[key].color_name.name}" style="background-color: ${item.colors[key].color_name.code}" data-pid="${item.id}" data-cid="${item.colors[key].color_id}"></li>`
                                                )).join('')}
                                            </ul>
                                            <div class="color-count">
                                                ${ 
                                                    item.colors.length - 4 > 0 ? `<span>${item.colors.length - 4}${item.colors.length - 4 > 0 ? '+' : ''}</span>` : ''
                                                }
                                                <ul class="colors">
                                                    ${Object.keys(item.colors.slice(4, item.colors.length)).map(key => (
                                                        `<li class="color" title="${item.colors[key].color_name.name}" style="background-color: ${item.colors[key].color_name.code}" data-pid="${item.id}" data-cid="${item.colors[key].color_id}"></li>`
                                                    )).join('')}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                });

                document.querySelector('.cat-products .right-section .products .row').innerHTML = listData;
                
                pdtDetailViewFun();
                basicPopup();
            }
        };
        xhttp.open("GET", url);
        xhttp.send();
       }
    })
})


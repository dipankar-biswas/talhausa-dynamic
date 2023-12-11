pdtDetailViewFun();
function pdtDetailViewFun(){
    let pdt_detail_view = document.querySelectorAll('.pdt-item .actions .pdt-detail-view');
    pdt_detail_view.forEach(pdtItem => {
        pdtItem.addEventListener("click", () => {
            let base_url = window.location.origin;
            let pdtId = pdtItem.getAttribute('data-pid');
    
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let getData = JSON.parse(this.responseText);
                    document.querySelector('.pdt-detail-view-data').innerHTML = `
                            <div class="row pdt-details pdt-dtls-modalview">
                                <div class="col-lg-5 col-md-5">
                                    <div class="pdt-image">
                                        <div class="thumbnail">
                                            ${ getData.thumbnail != null ? 
                                                `<img class="mw-100" src="${base_url+'/'+getData.thumbnail}" alt="${getData.name}" style="background:${getData.thumbnail != null ? getData.colors[0]?.color_name?.code : '#f2f2f2'}">` 
                                                : 
                                                `<img class="mw-100" src="${base_url+'/'+getData.neck.image}" alt="${getData.name}" style="background:${getData.thumbnail == null ? getData.colors[0]?.color_name?.code : '#f2f2f2'}">`
                                            }
                                        </div>
                                        <div class="multi-slides">
                                            <ul class="img-slides tabs-box">
                                            ${
                                                getData != null ? 
                                                Object.keys(getData.colors).map(key => (
                                                `
                                                <li class="img" data-pid="${getData.id}" data-cid="${getData.colors[key].color_name.id}">
                                                    <img src="${base_url+'/'+getData.neck.image}" alt="${getData.colors[key].color_name.name}" title="${getData.colors[key].color_name.name}" style="background: ${getData.colors[key].color_name.code}">
                                                </li>
                                                `
                                                )).join('')
                                                :
                                                ''
    
                                            }
                                            </ul>
                                            <div class="arrow">
                                                <div class="icon left"><i class="fa-solid fa-angle-left"></i></div>
                                                <div class="icon right"><i class="fa-solid fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="details">
                                        <h2 class="title text-body">${ getData.name }</h2>
                                        <div class="price d-flex align-items-end justify-content-start column-gap-2 mb-4 mt-3">
                                            <div class="fw-bold fs-1 text-active"><span>$</span><span class="new">${ getData.sizes[0].dis_price }</span></div>
                                            <div class="fs-4 text-secondary text-decoration-line-through"><span>$</span><span class="old">${ getData.sizes[0].price }</span></div>
                                        </div>
                                        <div class="stock-check d-flex align-content-center column-gap-4 mb-4">
                                            <div class="txt">Stock :</div>
                                            <div class="content">
                                                ${ 
                                                    getData.sizes[0].stock > 0 ?
                                                    `<span class="text-success">Available</span>`
                                                    :
                                                    '<span class="text-secondary">Non-Available</span>'
                                                }
                                            </div>
                                        </div>
                                        <div class="color-list d-flex align-content-center column-gap-4 mb-4">
                                            <div class="txt">Colors :</div>
                                            <div class="content">
                                                <div class="title color-text mb-2">Back</div>
                                                <ul class="colors pdt-colors">
                                                    ${Object.keys(getData.colors).map(key => (
                                                        `<li class="img color" title="${getData.colors[key].color_name.name}" data-pid="${getData.id}" data-cid="${getData.colors[key].color_id}">
                                                            <img src="${base_url+'/'+getData.neck.image}" alt="${getData.colors[key].color_name.name}" style="background: ${getData.colors[key].color_name.code}">
                                                        </li>`
                                                    )).join('')}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="size-list d-flex align-content-center column-gap-4 mb-4">
                                            <div class="txt">Size :</div>
                                            <div class="content">
                                                <div class="title size-text mb-2"></div>
                                                <ul class="sizes d-flex align-content-center column-gap-2">
    
                                                    ${Object.keys(getData.sizes).map(key => (
                                                        getData.id == getData.sizes[key].product_id && getData.sizes[key].size_id == getData.sizes[key].size_name.id && getData.sizes[key].product_color_id == getData.colors[0].color_id ?
                                                        `<li class="size" data-pid="${ getData.id }" data-sid="${ getData.sizes[key].size_name.id }">${ getData.sizes[key].size_name.name }</li>`
                                                        :
                                                        ''
                                                    )).join('')}
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="quantity d-flex align-content-center column-gap-4 mb-5">
                                            <div class="txt">Quantity :</div>
                                            <div class="qty">
                                                <button type="button" class="minus">-</button>
                                                <input type="text" class="qtyNum" value="${ getData.sizes[0].stock <= 0 ? 0 : 1 }" min="1" max="${ getData.sizes[0].stock }" ${ getData.sizes[0].stock <= 0 ? 'readonly' : ''}>
                                                <button type="button" class="plus work">+</button>
                                            </div>
                                        </div>
                                        <p class="stock-empty-msg text-danger text-bold">
                                            ${ 
                                                getData.sizes[0].stock <= 0 ?
                                                `<span class="mb-2">Stock is not available!</span>`
                                                :
                                                ''
                                            }
                                        </p>
                                        <div class="actions d-flex justify-content-start align-items-center column-gap-4">
                                            <button type="button" class="cart pdt-view-addtocart action border shadow custom-btn1"
                                                title="Add To Cart" data-pid="${ getData.id }" ${ getData.sizes[0].stock > 0 ? '' : 'disabled' }>
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    `;
                    dragSlideFun();
                    productDetailsFun();
                    quantityFun();
                    productAddToCartFun();
                }
            };
            xhttp.open("GET", base_url+'/product-detail-view/'+pdtId);
            xhttp.send();
    
            var galleryModal = new bootstrap.Modal(document.querySelector('.pdt-detail-view-modal'), {
                keyboard: false
            });
            galleryModal.show();
    
            // var x = document.querySelector('.alert-popup').innerHTML;
            // document.querySelector('.alert-popup').innerHTML = x;
        })
    })
}
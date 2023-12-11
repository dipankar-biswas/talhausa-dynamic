productDetailsFun();
function productDetailsFun(){
    let pdt_details = document.querySelectorAll('.pdt-details');
    for (let c = 0; c < pdt_details.length; c++) {
        let pdtImagePreview = pdt_details[c].querySelector('.pdt-image .thumbnail img');
        let slideImage = pdt_details[c].querySelector('.pdt-image .img-slides');
        let slideImages = pdt_details[c].querySelectorAll('.pdt-image .img-slides .img');
        
        let colorText = pdt_details[c].querySelector('.color-list .color-text');
        let colorImage = pdt_details[c].querySelector('.color-list .pdt-colors');
        let colorImages = pdt_details[c].querySelectorAll('.color-list .pdt-colors .img');

        if(slideImage && colorImage){
            slideImages[0].classList.add('active');
            colorImages[0].classList.add('active');
            
            colorText.innerHTML = colorImages[0].title;
            pdtImagePreview.src = slideImages[0].querySelector('img').src;
            pdtImagePreview.style.backgroundColor = slideImages[0].querySelector('img').style.backgroundColor;
            
            slideImages.forEach((img,i) => {
                img.addEventListener("click", () => {
                    colorText.innerHTML = colorImages[i].title;
                    colorImage.querySelector('.active').classList.remove('active');
                    colorImages[i].classList.add('active');
            
                    pdtImageActive(slideImage, img);
            
                    // Product Color/Size Change Price Change
                    let pid = img.getAttribute('data-pid');
                    let cid = img.getAttribute('data-cid');
                    ProductColorSizeChange(pid,cid);
                })
            });
            colorImages.forEach((img,i) => {
                img.addEventListener("click", async() => {
                    colorText.innerHTML = img.title;
                    slideImage.querySelector('.active').classList.remove('active');
                    slideImages[i].classList.add('active');
                
                    pdtImageActive(colorImage, img);
            
                    // Product Color/Size Change Price Change
                    let pid = img.getAttribute('data-pid');
                    let cid = img.getAttribute('data-cid');
                    ProductColorSizeChange(pid,cid);
                })
            });
            let pdtImageActive = (images, img) => {
                images.querySelector('.active').classList.remove('active');
                img.classList.add('active');
                pdtImagePreview.src = img.querySelector('img').src;
                pdtImagePreview.style.backgroundColor = img.querySelector('img').style.backgroundColor;
            }
            
        
            // Product Size Active
            // =======================
            productSizeActive();
            function productSizeActive(){
                let sizeText = pdt_details[c].querySelector('.size-list .size-text');
                let sizeList = pdt_details[c].querySelector('.size-list .sizes');
                let sizeLists = pdt_details[c].querySelectorAll('.size-list .sizes .size');
                if(sizeLists){
                    sizeLists[0].classList.add('active');
                    sizeText.innerHTML = sizeLists[0].innerHTML;
                    sizeLists.forEach((size,i) => {
                        size.addEventListener("click", async() => {
                            sizeText.innerHTML = size.innerText;
                            sizeList.querySelector('.active').classList.remove('active');
                            size.classList.add('active');
                    
                            // Product Color/Size Change Price Change
                            let pid = size.getAttribute('data-pid');
                            let sid = size.getAttribute('data-sid');
                            let cid = colorImage.querySelector('.active').getAttribute('data-cid');
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    let getData = JSON.parse(this.responseText);
                                    pdt_details[c].querySelector('.pdt-details .details .price .new').innerHTML = getData.dis_price;
                                    pdt_details[c].querySelector('.pdt-details .details .price .old').innerHTML = getData.price;
                                    pdt_details[c].querySelector('.quantity .qty input').setAttribute('max',getData.stock);

                                    pdt_details[c].querySelector('.pdt-details .details .stock-check .content').innerHTML = '';
                                    if(getData.stock > 0){
                                        pdt_details[c].querySelector('.pdt-details .details .stock-check .content').innerHTML = '<span class="text-success">Available</span>';
                                        pdt_details[c].querySelector('.actions .action').removeAttribute('disabled');
                                        pdt_details[c].querySelector('.stock-empty-msg').innerHTML  = '';
                                        pdt_details[c].querySelector('.quantity .qty input').removeAttribute('readonly');
                                        pdt_details[c].querySelector('.quantity .qty input').setAttribute('value',1);
                                    }else{
                                        pdt_details[c].querySelector('.pdt-details .details .stock-check .content').innerHTML = '<span class="text-secondary">Non-Available</span>';
                                        pdt_details[c].querySelector('.actions .action').setAttribute('disabled',true);
                                        pdt_details[c].querySelector('.stock-empty-msg').innerHTML  = '<span class="mb-2">Stock is not available!</span>';
                                        pdt_details[c].querySelector('.quantity .qty input').setAttribute('readonly',true);
                                        pdt_details[c].querySelector('.quantity .qty input').setAttribute('value',0);
                                    }
                                }
                            };
                            xhttp.open("GET", `/product-details/getSizeData?pid=${pid}&sid=${sid}&cid=${cid}`);
                            xhttp.send();
                        })
                    });
                }
            }
            
            
            // Product Color/Size Change Price Change
            // =======================
            function ProductColorSizeChange(pid,cid){
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let getData = JSON.parse(this.responseText);
                        let listData = "";
                        pdt_details[c].querySelector('.size-list .sizes').innerHTML = "";
                        getData.forEach((item,i) => {
                            listData += `<li class="size" data-pid="${ item.product_id }" data-sid="${ item.size_id }">${ item.sizes?.name }</li>`;
                        });
                        pdt_details[c].querySelector('.size-list .sizes').innerHTML = listData;
                        // load and price change
                        pdt_details[c].querySelector('.pdt-details .details .price .new').innerHTML = getData[0].dis_price;
                        pdt_details[c].querySelector('.pdt-details .details .price .old').innerHTML = getData[0].price;
                        pdt_details[c].querySelector('.quantity .qty input').setAttribute('max',getData[0].stock);

                        pdt_details[c].querySelector('.pdt-details .details .stock-check .content').innerHTML = '';
                        if(getData[0].stock > 0){
                            pdt_details[c].querySelector('.pdt-details .details .stock-check .content').innerHTML = '<span class="text-success">Available</span>';
                            pdt_details[c].querySelector('.actions .action').removeAttribute('disabled');
                            pdt_details[c].querySelector('.stock-empty-msg').innerHTML  = '';
                        }else{
                            pdt_details[c].querySelector('.pdt-details .details .stock-check .content').innerHTML = '<span class="text-secondary">Non-Available</span>';
                            pdt_details[c].querySelector('.actions .action').setAttribute('disabled',true);
                            pdt_details[c].querySelector('.stock-empty-msg').innerHTML  = '<span class="mb-2">Stock is not available!</span>';
                        }

                        productSizeActive();
                    }
                };
                xhttp.open("GET", `/product-details/getColorData?pid=${pid}&cid=${cid}`);
                xhttp.send();
            }
        }
    }
}


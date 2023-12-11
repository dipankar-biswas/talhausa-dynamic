
dragSlideFun();
function dragSlideFun(){
    let tabsBox = document.querySelectorAll('.tabs-box');
    if(tabsBox){
        for(let i = 0; i < tabsBox.length; i++){
            let tabAlls = tabsBox[i].querySelectorAll('.tab');
            let icons = tabsBox[i].closest('.multi-slides').querySelectorAll('.arrow .icon');
            let isDragging = false;
            
            handleIcon = (scrollValue) => {
                let maxScrollableWidth = tabsBox[i].scrollWidth - tabsBox[i].clientWidth;
                icons[0].style.display = scrollValue <= 0 ? 'none' : 'flex';
                icons[1].style.display = maxScrollableWidth - scrollValue <= 1 ? 'none' : 'flex';
            }
            
            icons.forEach(icon => {
                icon.addEventListener('click', function(){
                    // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
                    let scrollWidth = tabsBox[i].scrollLeft += icon.className === "icon left" ? -180 : 180;
                    handleIcon(scrollWidth);
                })
            });
            
            tabAlls.forEach(item => {
                item.addEventListener('click', function(){
                    tabsBox[i].querySelector('.active').classList.remove('active');
                    item.classList.add('active');
                })
            });
            
            let dragging = (e) => {
                if(!isDragging) return;
                tabsBox[i].classList.add('dragging');
                tabsBox[i].scrollLeft -= e.movementX;
                handleIcon(tabsBox[i].scrollLeft);
            }
            
            let dragStop = () => {
                isDragging = false;
                tabsBox[i].classList.remove('dragging');
            }
            
            tabsBox[i].addEventListener("mousedown", () => isDragging = true);
            tabsBox[i].addEventListener("mousemove", dragging);
            tabsBox[i].addEventListener("mouseup", dragStop);
        }
    }
}


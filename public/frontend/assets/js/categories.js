
// let menu_item = document.querySelectorAll(".categories .menus .item .text .arrow");
let menu_item = document.querySelectorAll(".categories .menus .item .text .link");
let mega_menu_title = document.querySelectorAll(".categories .menus .item.tree .mega-menu .list-section .title");
for (let i = 0; i < menu_item.length; i++) {
    menu_item[i].addEventListener("click", function () {
        // All active item link remove
        // let menu_item_link = document.querySelectorAll(".categories .menus .item .text .arrow");
        let menu_item_link = document.querySelectorAll(".categories .menus .item .text .link");
        for (let l = 0; l < menu_item_link.length; l++) {
            menu_item_link[l].classList.remove("active");
        }

        // This item link active
        // this.closest('.text').classList.add("active");
        this.classList.add("active");

        // All mega menu(sub menu) height remove
        let mega_menu = document.querySelectorAll(".categories .menus .item.tree .mega-menu");
        for (let k = 0; k < mega_menu.length; k++) {
            mega_menu[k].style.maxHeight = null;
        }


        // Mega menu(sub menu) height active
        let list_section = this.closest(".item").querySelector(".mega-menu");
        if(list_section){
            list_section.classList.add("show");
            list_section.style.maxHeight = list_section.scrollHeight + "px";
        }
        


        // ================
        // (Main Megu Click) All sub menu item active remove
         let sub_sub_item = document.querySelectorAll(".categories .menus .item.tree .mega-menu .list-section .title");
        for (let p = 0; p < sub_sub_item.length; p++) {
            sub_sub_item[p].classList.remove("active");
        }

        // All sub sub menu height remove
        let sub_sub_lists = document.querySelectorAll(".categories .menus .item.tree .mega-menu .list-section .sub-lists");
        for (let q = 0; q < sub_sub_lists.length; q++) {
            sub_sub_lists[q].style.maxHeight = null;
        }
    });
} 

// SubMenu
for (let j = 0; j < mega_menu_title.length; j++) {
    mega_menu_title[j].addEventListener("click", function () {
        // All sub sub menu item active remove
        let item_active_remove = document.querySelectorAll(".categories .menus .item.tree .mega-menu .list-section .title");
        for (let p = 0; p < item_active_remove.length; p++) {
            item_active_remove[p].classList.remove("active");
        }

        // This sub sub menu item active
        this.classList.add("active");

        // // All sub sub menu height remove
        let sub_menu_height = document.querySelectorAll(".categories .menus .item.tree .mega-menu .list-section .sub-lists");
        for (let q = 0; q < sub_menu_height.length; q++) {
            sub_menu_height[q].style.maxHeight = null;
        }

        // Sub Sub menu height active
        let sub_lists = this.closest(".list-section").querySelector(".sub-lists");
        sub_lists.style.maxHeight = sub_lists.scrollHeight + "px";

        // Mega menu(sub menu) + sub sub menu height adding
        let list_section_add = this.closest(".item.tree").querySelector(".mega-menu");
        list_section_add.style.maxHeight = sub_lists.scrollHeight + list_section_add.scrollHeight + "px";
    });
}

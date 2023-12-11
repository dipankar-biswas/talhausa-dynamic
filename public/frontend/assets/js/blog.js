
// ================= Blog Like ===================
let blog_like_btn = document.querySelectorAll('.blogs .blog .content .social-action .social-like .blog-like-btn');
let blog_like_div = document.querySelectorAll('.blogs .blog .content .social-action .social-like .blog-like-div');
if(blog_like_btn && blog_like_div){
    for (let i = 0; i < blog_like_btn.length; i++) {
        blog_like_btn[i].addEventListener('click',function(){
            blog_like_div[i].classList.toggle('show');
        });
        window.addEventListener('mouseup',function(event){
            if(event.target != blog_like_div[i] && event.target.parentNode != blog_like_div[i]){
                blog_like_div[i].classList.remove('show');
            }
        }); 
    }
}
// ================= blog Social Media Share ===================
let blog_share_btn = document.querySelectorAll('.blogs .blog .content .social-action .social-share .blog-share-btn');
let blog_share_div = document.querySelectorAll('.blogs .blog .content .social-action .social-share .blog-share-div');
if(blog_share_btn && blog_share_div){
    for (let i = 0; i < blog_share_btn.length; i++) {
        blog_share_btn[i].addEventListener('click',function(){
            blog_share_div[i].classList.toggle('show');
        });
        window.addEventListener('mouseup',function(event){
            if(event.target != blog_share_div[i] && event.target.parentNode != blog_share_div[i]){
                blog_share_div[i].classList.remove('show');
            }
        }); 
    }
}
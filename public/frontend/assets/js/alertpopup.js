let overlay  = document.querySelector('.alert-popup .overlay');
let loader  = document.querySelector('.popup-message .actions .loader');
// ==================================
// Basic
basicPopup();
function basicPopup(){
let basicBtn  = document.querySelectorAll('.btn-popup.basic');
let basic_ok_btn = document.querySelector('.popup-basic .actions .dismiss');
    if(basicBtn && basic_ok_btn){
        basicBtn.forEach(basic_btn => {
            basic_btn.addEventListener('click', function(){
                overlay.classList.add('show');
                overlay.querySelector('.popup-basic').classList.add('show');
    
                document.querySelector('.popup-basic .actions .add-to-cart').setAttribute("data-pid", basic_btn.getAttribute('data-pid'));
            })
            if(basic_ok_btn && overlay){
                window.addEventListener('mouseup',function(event){
                    if(basic_ok_btn == event.target.closest(".popup-basic .actions .dismiss")){
                        overlay.classList.remove('show');
                        overlay.querySelector('.popup-basic').classList.remove('show');
                    }else{
                        if(event.target == overlay || event.target.closest(".popup") == overlay){
                            overlay.classList.remove('show');
                            overlay.querySelector('.popup-basic').classList.remove('show');
                        }
                    }
                }); 
            }
        });
    }
}

// ==================================
// Message
let message_btn  = document.querySelector('.btn-popup.message');
let message_ok_btn = document.querySelector('.popup-message .actions .dismiss');
if(message_btn && message_ok_btn){
    message_btn.addEventListener('click', function(){
        overlay.classList.add('show');
        overlay.querySelector('.popup-message').classList.add('show');
    })
    if(message_ok_btn && overlay){
        window.addEventListener('mouseup',function(event){
            if(message_ok_btn == event.target.closest(".popup-message .actions .dismiss")){
                overlay.classList.remove('show');
                overlay.querySelector('.popup-message').classList.remove('show');
            }else{
                if(event.target == overlay || event.target.closest(".popup") == overlay){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-message').classList.remove('show');
                }
            }
        }); 
    }
    // Message Msg Check
    let look_up  = document.querySelector('.popup-message .actions .look-up');
    look_up.addEventListener('click', function(){
        let messageText  = document.querySelector('.popup-message .body .content input');
        let errMsg  = document.querySelector('.popup-message .body .err-msg');
        look_up.style.display = 'none';
        loader.style.display = 'block';
        setTimeout(() => {
            if(messageText.value.length > 0){
                loader.style.display = 'none';
                look_up.style.display = 'block';
                errMsg.style.display = 'none';
            }else{
                loader.style.display = 'none';
                look_up.style.display = 'block';
                errMsg.style.display = 'flex';
            }
        }, 300);
    })

}


// ==================================
// Success
let success_btn  = document.querySelector('.btn-popup.success');
let success_ok_btn = document.querySelector('.popup-success .actions .dismiss');
if(success_btn && success_ok_btn){
    success_btn.addEventListener('click', function(){
        overlay.classList.add('show');
        overlay.querySelector('.popup-success').classList.add('show');
    })
    if(success_ok_btn && overlay){
        window.addEventListener('mouseup',function(event){
            if(success_ok_btn == event.target.closest(".popup-success .actions .dismiss")){
                overlay.classList.remove('show');
                overlay.querySelector('.popup-success').classList.remove('show');
            }else{
                if(event.target == overlay || event.target.closest(".popup") == overlay){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-success').classList.remove('show');
                }
            }
        }); 
    }
}


// ==================================
// Question
let question_btn  = document.querySelector('.btn-popup.question');
let question_ok_btn = document.querySelector('.popup-question .actions .dismiss');
if(question_btn && question_ok_btn){
    question_btn.addEventListener('click', function(){
        overlay.classList.add('show');
        overlay.querySelector('.popup-question').classList.add('show');
    })
    if(question_ok_btn && overlay){
        window.addEventListener('mouseup',function(event){
            if(question_ok_btn == event.target.closest(".popup-question .actions .dismiss")){
                overlay.classList.remove('show');
                overlay.querySelector('.popup-question').classList.remove('show');
            }else{
                if(event.target == overlay || event.target.closest(".popup") == overlay){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-question').classList.remove('show');
                }
            }
        }); 
    }
}


// ==================================
// Error
let error_btn  = document.querySelector('.btn-popup.error');
let error_ok_btn = document.querySelector('.popup-error .actions .dismiss');
if(error_btn && error_ok_btn){
    error_btn.addEventListener('click', function(){
        overlay.classList.add('show');
        overlay.querySelector('.popup-error').classList.add('show');
    })
    if(error_ok_btn && overlay){
        window.addEventListener('mouseup',function(event){
            if(error_ok_btn == event.target.closest(".popup-error .actions .dismiss")){
                overlay.classList.remove('show');
                overlay.querySelector('.popup-error').classList.remove('show');
            }else{
                if(event.target == overlay || event.target.closest(".popup") == overlay){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-error').classList.remove('show');
                }
            }
        }); 
    }
}

// ==================================
// Information
let info_btn  = document.querySelector('.btn-popup.information');
let info_ok_btn = document.querySelector('.popup-info .actions .dismiss');
if(info_btn && info_ok_btn){
    info_btn.addEventListener('click', function(){
        overlay.classList.add('show');
        overlay.querySelector('.popup-info').classList.add('show');
    })
    if(info_ok_btn && overlay){
        window.addEventListener('mouseup',function(event){
            if(info_ok_btn == event.target.closest(".popup-info .actions .dismiss")){
                overlay.classList.remove('show');
                overlay.querySelector('.popup-info').classList.remove('show');
            }else{
                if(event.target == overlay || event.target.closest(".popup") == overlay){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-info').classList.remove('show');
                }
            }
        }); 
    }
}



// ==================================
// Warning
let warning_btn  = document.querySelector('.btn-popup.warning');
let warning_ok_btn = document.querySelector('.popup-warning .actions .dismiss');
if(warning_btn && warning_ok_btn){
    warning_btn.addEventListener('click', function(){
        overlay.classList.add('show');
        overlay.querySelector('.popup-warning').classList.add('show');
    })
    if(warning_ok_btn && overlay){
        window.addEventListener('mouseup',function(event){
            if(warning_ok_btn == event.target.closest(".popup-warning .actions .dismiss")){
                overlay.classList.remove('show');
                overlay.querySelector('.popup-warning').classList.remove('show');
            }else{
                if(event.target == overlay || event.target.closest(".popup") == overlay){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-warning').classList.remove('show');
                }
            }
        }); 
    }
}

// ==================================
// Delete
let deleteBtn  = document.querySelectorAll('.btn-popup.delete');
let delete_ok_btn = document.querySelector('.popup-delete .actions .dismiss');
if(warning_btn && warning_ok_btn){
    deleteBtn.forEach(delete_btn => {
        delete_btn.addEventListener('click', function(){
            overlay.classList.add('show');
            overlay.querySelector('.popup-delete').classList.add('show');
        })
        if(delete_ok_btn && overlay){
            window.addEventListener('mouseup',function(event){
                if(delete_ok_btn == event.target.closest(".popup-delete .actions .dismiss")){
                    overlay.classList.remove('show');
                    overlay.querySelector('.popup-delete').classList.remove('show');
                }else{
                    if(event.target == overlay || event.target.closest(".popup") == overlay){
                        overlay.classList.remove('show');
                        overlay.querySelector('.popup-delete').classList.remove('show');
                    }
                }
            }); 
        }
        // Delete Status Check
        let delete_no_btn  = document.querySelector('.popup-delete .actions .delete-no');
        let delete_yes_btn  = document.querySelector('.popup-delete .actions .delete-yes');
        let delete_error_ok_btn = document.querySelector('.popup-delete-error .actions .dismiss');
        let delete_success_ok_btn = document.querySelector('.popup-delete-success .actions .dismiss');
        delete_no_btn.addEventListener('click', function(){
            overlay.classList.remove('show');
            overlay.querySelector('.popup-delete').classList.remove('show');
        
            // show
            overlay.classList.add('show');
            overlay.querySelector('.popup-delete-error').classList.add('show');
            if(delete_error_ok_btn && overlay){
                window.addEventListener('mouseup',function(event){
                    if(delete_error_ok_btn == event.target.closest(".popup-delete-error .actions .dismiss")){
                        overlay.classList.remove('show');
                        overlay.querySelector('.popup-delete-error').classList.remove('show');
                    }else{
                        if(event.target == overlay || event.target.closest(".popup") == overlay){
                            overlay.classList.remove('show');
                            overlay.querySelector('.popup-delete-error').classList.remove('show');
                        }
                    }
                }); 
            }
        })
        delete_yes_btn.addEventListener('click', function(){
            overlay.classList.remove('show');
            overlay.querySelector('.popup-delete').classList.remove('show');
        
            // show
            overlay.classList.add('show');
            overlay.querySelector('.popup-delete-success').classList.add('show');
            if(delete_success_ok_btn && overlay){
                window.addEventListener('mouseup',function(event){
                    if(delete_success_ok_btn == event.target.closest(".popup-delete-success .actions .dismiss")){
                        overlay.classList.remove('show');
                        overlay.querySelector('.popup-delete-success').classList.remove('show');
                    }else{
                        if(event.target == overlay || event.target.closest(".popup") == overlay){
                            overlay.classList.remove('show');
                            overlay.querySelector('.popup-delete-success').classList.remove('show');
                        }
                    }
                }); 
            }
        })
    });
}
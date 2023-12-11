
<div class="alert-popup px-4">
    <div class="btn-group overflow-hidden" style="height:0">
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup basic">Basic</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup message">Message</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup success">Success</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup error">Error</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup information">Information</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup warning">Warning</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup delete">Delete</button>
        <button type="button" class="custom-btn1 px-4 py-2 rounded btn-popup question">Question</button>
    </div>


    <div class="overlay">
        <!-- basic start -->
        <div class="popup-basic popup">
            <div class="body">
                <div class="content">
                    <h2>Would you like add-to-cart?</h2>
                    <div class="pdt-data mt-3">
                        <!-- <p>Add to Cart Added !</p> -->
                        <p class="mb-1"><strong>Name : </strong> <span class="pdt_name"></span></p>
                        <p class="mb-1"><strong>Price : </strong> <span class="pdt_price_new text-active"></span> <span class="pdt_price_old fs-6 text-secondary text-decoration-line-through"></span></p>
                        <p class="mb-1"><strong>Color : </strong> <span class="pdt_color"></span></p>
                        <p class="mb-1"><strong>Size : </strong> <span class="pdt_size"></span></p>
                        <p class="mb-1"><strong>Qty : </strong> <span class="pdt_qty"></span></p>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <div class="loader"></div>
                    <button type="button" class="btn add-to-cart">Add to Cart</button>
                    <button type="button" class="btn dismiss secondary">Cancel</button>
                </div>
            </div>
        </div>
        <!-- basic end -->

        <!-- message start -->
        <div class="popup-message popup">
            <div class="body">
                <div class="content">
                    <h1>Submit your Github username</h1>
                    <div class="gp">
                        <input type="text" class="">
                    </div>
                </div>
                <div class="err-msg"><span class="icon">!</span> Request failed: Error</div>
            </div>
            <div class="foot">
                <div class="actions">
                    <div class="loader"></div>
                    <button type="button" class="btn look-up">Look Up</button>
                    <button type="button" class="btn dismiss secondary">Cancel</button>
                </div>
            </div>
        </div>
        <!-- message end -->

        <!-- success start -->
        <div class="popup-success popup">
            <div class="head">
                <div class="icon icon-success">
                    <span class="icon-success__line icon-success__line-long"></span>
                    <span class="icon-success__line icon-success__line-tip"></span>

                    <div class="icon-success__ring"></div>
                    <div class="icon-success__hide-corners"></div>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <h1>The Internet?</h1>
                    <p>That thing is still around?</p>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <button type="button" class="btn dismiss">Ok</button>
                </div>
            </div>
        </div>
        <!-- success end -->

        <!-- error start -->
        <div class="popup-error popup">
            <div class="head">
                <div class="icon">
                    <span>&#10005;</span>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <h1>Oops...</h1>
                    <p>That thing is still around?</p>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <button type="button" class="btn dismiss">Ok</button>
                </div>
            </div>
        </div>
        <!-- error end -->

        <!-- info start -->
        <div class="popup-info popup">
            <div class="head">
                <div class="icon">
                    <span>&#8520;</span>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <h1>The Internet?</h1>
                    <p>That thing is still around?</p>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <button type="button" class="btn dismiss">Ok</button>
                </div>
            </div>
        </div>
        <!-- info end -->

        <!-- warning start -->
        <div class="popup-warning popup">
            <div class="head">
                <div class="icon">
                    <span>!</span>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <h1>The Internet?</h1>
                    <p>That thing is still around?</p>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <button type="button" class="btn dismiss">Ok</button>
                </div>
            </div>
        </div>
        <!-- warning end -->

        <!-- delete start -->
        <div class="popup-delete popup">
            <div class="head">
                <div class="icon">
                    <span>!</span>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <h1>Are you sure?</h1>
                    <p>You won't be able to revert this!</p>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <div class="loader"></div>
                    <button type="button" class="btn delete-no danger">No, cancel!</button>
                    <button type="button" class="btn delete-yes success">Yes, delete it!</button>
                </div>
            </div>
        </div>
            <!-- delete error -->
            <div class="popup-delete-error popup">
                <div class="head">
                    <div class="icon">
                        <span>&#10005;</span>
                    </div>
                </div>
                <div class="body">
                    <div class="content">
                        <h1>Cancelled</h1>
                        <p> Your imaginary file is safe :) </p>
                    </div>
                </div>
                <div class="foot">
                    <div class="actions">
                        <button type="button" class="btn dismiss">Ok</button>
                    </div>
                </div>
            </div>
            <!-- delete success -->
            <div class="popup-delete-success popup success">
                <div class="head">
                    <div class="icon icon-success">
                        <span class="icon-success__line icon-success__line-long"></span>
                        <span class="icon-success__line icon-success__line-tip"></span>

                        <div class="icon-success__ring"></div>
                        <div class="icon-success__hide-corners"></div>
                    </div>
                </div>
                <div class="body">
                    <div class="content">
                        <h1>Deleted!</h1>
                        <p>Your file has been deleted.</p>
                    </div>
                </div>
                <div class="foot">
                    <div class="actions">
                        <button type="button" class="btn dismiss">Ok</button>
                    </div>
                </div>
            </div>
        <!-- delete end -->

        <!-- question start -->
        <div class="popup-question popup">
            <div class="head">
                <div class="icon">
                    <span>?</span>
                </div>
            </div>
            <div class="body">
                <div class="content">
                    <h1>The Internet?</h1>
                    <p>That thing is still around?</p>
                </div>
            </div>
            <div class="foot">
                <div class="actions">
                    <button type="button" class="btn dismiss">Ok</button>
                </div>
            </div>
        </div>
        <!-- question end -->
    </div>
</div>

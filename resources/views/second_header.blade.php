<div class="wrapper col5">
    <div id="footer">
        <div id="contactform">
            <h2>Залишити заявку на замовлення робіт</h2>
            <form method="post" action="{{ route('save_orders') }}">
                {{ csrf_field() }}
                <fieldset>
                    <label for="fullname">Імя:
                        <input id="name" name="name" type="text" value="" />
                    </label>
                    <label for="emailaddress" class="margin">Електрона адреса:
                        <input id="email" name="email" type="text" value="" />
                    </label>
                    <label for="phone">Телефон:
                        <input id="tel" name="tel" type="text" value="" />
                    </label>
                    <label for="subject" class="margin">Тема:
                        <input id="subject" name="subject" type="text" value="" />
                    </label>
                    <label for="message">Повідомлення:<br />
                        <textarea id="message" name="message" cols="40" rows="4"></textarea>
                    </label>
                    <div class=" col-md-12">
                        <button class="btn btn-primary">Відправити</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- End Contact Form -->
        <div id="compdetails">
            <div id="officialdetails">
                <h2>Company Information !</h2>
                <ul>
                    <li>Company Name Ltd</li>
                    <li>Registered in England &amp; Wales</li>
                    <li>Company No. xxxxxxx</li>
                    <li class="last">VAT No. xxxxxxxxx</li>
                </ul>
                <h2>Stay in The Know !</h2>
                <p><a href="#">Get Our E-Newsletter</a> | <a href="#">Grab The RSS Feed</a></p>
            </div>
            <div id="contactdetails">
                <h2>Our Contact Details !</h2>
                <ul>
                    <li>Company Name</li>
                    <li>Street Name &amp; Number</li>
                    <li>Town</li>
                    <li>Postcode/Zip</li>
                    <li>Tel: xxxxx xxxxxxxxxx</li>
                    <li>Fax: xxxxx xxxxxxxxxx</li>
                    <li>Email: info@domain.com</li>
                    <li class="last">LinkedIn: <a href="#">Company Profile</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!-- End Company Details -->
        <div id="copyright">
            <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
            <br class="clear" />
        </div>
        <div class="clear"></div>
    </div>
</div>

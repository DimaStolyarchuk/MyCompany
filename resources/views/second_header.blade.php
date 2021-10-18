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
                <h2>Інформація про нашу компанію</h2>
                <ul>
                    <li>Назва:</li>
                    <li>MyCompany</li>
                    <li>Ми знаходимось за адресою:</li>
                    <li class="last">м. Київ, вул. Жолудева будинок 3а</li>
                </ul>
            </div>
            <div id="contactdetails">
                <h2>Наші контакти</h2>
                <ul>
                    <li>Зв'яжіться з нами по телефону:</li>
                    <li>Київстар: (097)111 11 11</li>
                    <li>Лайф: (063)111 11 11</li>
                    <li>МТС: (066)111 11 11</li>
                    <li>Email: MyCompany@gmail.com</li>
{{--                    <li class="last">LinkedIn: <a href="#">Company Profile</a></li>--}}
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!-- End Company Details -->
        <div id="copyright">
            <p class="fl_left">Компанія MyCompany &copy; 2021 - Всі права захищені мною)
{{--                <a href="#">Domain Name</a></p>--}}
{{--            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>--}}
            <br class="clear" />
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="wrapper col1">
    <div id="head">
        <h1><a href='{{ asset('index.html') }}'>My Company</a></h1>
        <p>Краща дизайн студія в Києві</p>
        <div id="topnav">
            <ul>
                <li><a class="active" href='{{ asset('index.html') }}'>Головна сторінка</a></li>
                <li><a href='{{ asset('about.html') }}'>Про компанію</a></li>
                <li><a href='{{ asset('blog.html') }}'>Блог</a></li>
                <li><a href="href='{{ asset('projects.html') }}'">Наші проєкти</a>
                    <ul>
                        <li><a href='{{ asset('room.html') }}'>Link 1</a></li>
                        <li><a href='{{ asset('house.html') }}'>Link 2</a></li>
                        <li><a href='{{ asset('outside.html') }}'>Link 3</a></li>
                    </ul>
                </li>
                <li class="last"><a href='{{ asset('contact.html') }}'>Контакти</a></li>
            </ul>
        </div>
        <div id="search">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="submit" name="go" id="go" value="Відпр.."/>
                    <input type="text" value="Написати повідомлення&hellip;"  onfocus="this.value=(this.value=='Написати повідомлення;')? '' : this.value ;" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

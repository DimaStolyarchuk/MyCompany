<html xmlns="http://www.w3.org/1999/xhtml">
@extends('layouts')
<body id="top">
@include('header')
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            @foreach($dataAbouts as $dataAbout)
            <h1>{{ $dataAbout->title }}</h1>
            <img class="imgr" src="{{ asset('storage/'. $dataAbout->imageRight) }}" alt="" width="125" height="125" />
            <p>{{ $dataAbout->description }}</p>
            <p>{{ $dataAbout->description }}</p>
            <img class="imgl" src="{{ asset('storage/'. $dataAbout->imageLeft) }}" alt="" width="125" height="125" />
            <p>{{ $dataAbout->description }}</a>.</p>
            <p>{{ $dataAbout->description }}</a>.</p>
            <p>{{ $dataAbout->description }}</p>
            @endforeach

            @foreach($dataTables as $dataTable)
            <h2>{{ $dataTable->title }}</h2>
            <table summary="Summary Here" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th>{{ $dataTable->first_header }}</th>
                    <th>{{ $dataTable->second_header }}</th>
                    <th>{{ $dataTable->third_header }}</th>
                    <th>{{ $dataTable->quarters_header }}</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>Value 3</td>
                    <td>Value 4</td>
                </tr>
                <tr class="dark">
                    <td>Value 5</td>
                    <td>Value 6</td>
                    <td>Value 7</td>
                    <td>Value 8</td>
                </tr>
                <tr class="light">
                    <td>Value 9</td>
                    <td>Value 10</td>
                    <td>Value 11</td>
                    <td>Value 12</td>
                </tr>
                <tr class="dark">
                    <td>Value 13</td>
                    <td>Value 14</td>
                    <td>Value 15</td>
                    <td>Value 16</td>
                </tr>
                </tbody>
            </table>
            @endforeach
            <div id="comments">
            @foreach($dataComents as $dataComent)
                <h2>{{ $dataComent->title }}</h2>
                <ul class="commentlist">
                    <li class="comment_odd">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>{{ $dataComent->first_coments }}</p>
                    </li>
                    <li class="comment_even">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>{{ $dataComent->second_coments }}</p>
                    </li>
                    <li class="comment_odd">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>{{ $dataComent->third_coments }}</p>
                    </li>
                </ul>
            @endforeach
            </div>
            <h2>Write A Comment</h2>
            <div id="respond">
                <form action="#" method="post">
                    <p>
                        <input type="text" name="name" id="name" value="" size="22" />
                        <label for="name"><small>Name (required)</small></label>
                    </p>
                    <p>
                        <input type="text" name="email" id="email" value="" size="22" />
                        <label for="email"><small>Mail (required)</small></label>
                    </p>
                    <p>
                        <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
                        <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                    </p>
                    <p>
                        <input name="submit" type="submit" id="submit" value="Submit Form" />
                        &nbsp;
                        <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
                    </p>
                </form>
            </div>
        </div>
        <div id="column">
            <div id="featured">
                <ul>
                    <li>
                        <h2>Indonectetus facilis leonib</h2>
                        <p class="imgholder"><img src="../images/demo/240x90.gif" alt="" /></p>
                        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
                        <p class="more"><a href="#">Read More &raquo;</a></p>
                    </li>
                </ul>
            </div>
            <div class="holder">
                <h2 class="title"><img src="../images/demo/64x64.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
                <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </div>
            <div class="holder">
                <div class="imgholder"><img src="../images/demo/290x100.gif" alt="" /></div>
                <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
                <div class="imgholder"><img src="../images/demo/290x100.gif" alt="" /></div>
                <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </div>
            <div class="holder">
                <h2>Lorem ipsum dolor</h2>
                <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit</a></li>
                    <li>Etiam vel sapien et</li>
                    <li><a href="#">Etiam vel sapien et</a></li>
                </ul>
                <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper col5">
    <div id="footer">
        <div id="contactform">
            <h2>Why Not Contact Us Today !</h2>
            <form action="#" method="post">
                <fieldset>
                    <legend>Contact Form</legend>
                    <label for="fullname">Name:
                        <input id="fullname" name="fullname" type="text" value="" />
                    </label>
                    <label for="emailaddress" class="margin">Email:
                        <input id="emailaddress" name="emailaddress" type="text" value="" />
                    </label>
                    <label for="phone">Telephone:
                        <input id="phone" name="phone" type="text" value="" />
                    </label>
                    <label for="subject" class="margin">Subject:
                        <input id="subject" name="subject" type="text" value="" />
                    </label>
                    <label for="message">Message:<br />
                        <textarea id="message" name="message" cols="40" rows="4"></textarea>
                    </label>
                    <p>
                        <input id="submitform" name="submitform" type="submit" value="Submit" />
                        &nbsp;
                        <input id="resetform" name="resetform" type="reset" value="Reset" />
                    </p>
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
</body>
</html>

<?php

$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'UNKNOWN';

$SERVICE_KEY = 'S67AZOQKDNFlfJF';

$url = "http://pro.ip-api.com/json/$ipaddress?key=$SERVICE_KEY&lang=ro&fields=city";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$city = curl_exec($ch);
$city = json_decode($city, true);

$commentTime = date('d.m.Y');
$tomorrow  = date('d.m.Y', strtotime('-2 days'));

?>
<!DOCTYPE html>
<html lang="ro" class="wf-opensans-n4-active wf-active">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>How did I survive the crash on 26 June? One telephone call saved my life</title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link href="./css/modif.css" type="text/css" rel="stylesheet">
    <link href="./css/gdpr.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="col">
    <a href="#" onclick="yaCounter54505624.reachGoal('start_opos'); return true;"><img
            src="./img/header.jpg" alt="" class="img-fluid" style="margin:0 auto 20px;"></a>
</div>

<div id="content" class="site-wrap container-fluid">

    <div class="row">
        <main class="site-Content col-xs-12">
            <article class="article" >
                <header>
                    <h1>How did I survive the crash on 26 June?
                        One telephone call saved my life
                    </h1>
                </header>
                <div class="clearfix">
                    <div class="entry-author">
                        <img src="./img/ava.jpg" alt="" class="img-fluid">
                        <span>Jacob Cooper</span>
                    </div>
                    <div class="entry-content">
                        <p>Hello, everybody! <br>
                            My name is Jacob and I was supposed to die on 26 June this year. This plane crash was all over the world news. And I was supposed to be there.
                        </p>
                        <p><img src="./img/ticket.jpg" alt=""></p>
                        <p>Now I will tell you why I was not there. After all, if it saved my life, it can save you and your loved ones from a disaster too. If you follow my advice, your life will also change dramatically as it happened to me.
</p>
                        <p><b>At first, I thought it was a joke</b></p>
                        <p>So, about a week before the disaster, I was browsing the internet and accidentally came across a page with a mystical name <b><a href="#">"Find out the date of your death"</a></b>. I decided to have fun and answered several questions in the questionnaire but instead of a standard funny result, as it usually happens with this kind of tests, I was invited to chat with a real astrologer.</p>
                        <p><a href="#"><img src="./img/mob.JPG" alt=""></a></p>
                        <div>
                            <a class="alert alert-link text-center alert alert-success btn btn-lg btn-block"
                               style="color: #ffffff; background-color: #62b83e" href="#"
                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">Find out the date of your death</a>
                        </div>
                        <p>But it was not funny anymore. She seemed to radiate some explicable mystical power even through the screen. At her every response, the screen was vibrating. I answered several questions of the astrologer, at which point she noticeably got worried and said she had to tell me something extremely important.
</p>
                        <p>She left a voice message on the answering machine for me and asked to make an urgent call and listen to it. She explained she never holds a dialogue because it is too energy consuming for her as for an astrologer and takes a lot out of her. I had to just call a mobile phone and listen to the message…</p>
                        <p><strong>I will never stop blessing my lucky stars for help!</strong></p>
                        <p>In the message, the astrologer told a little bit about me and to my great surprise, almost everything matched. But then… Then, she said in no uncertain terms,"If you are planning to go somewhere on 26 June – at all costs, cancel this trip! If you don’t do this, 26 June of this year will be the date of your death!“</p>
                        <p>date of your death!”
                           At other times, I would have laughed and hung up. But the thing was that a few days before that, I had bought a ticket, a photo of which I posted above. I was supposed to fly overseas to relax for a couple of days. Having listened to the end of the message, I didn’t know what to do. On the one hand, some astrologer from the internet decided to scare me… But on the other hand – just too many coincidences!
</p>
                        <p><img src="./img/ticket1.jpg" alt=""></p>
                        <p>I cancelled my trip last minute. I just didn’t go. I even didn’t cash in my ticket. And in a couple of hours, I saw the news… You wouldn’t believe it, but I almost fainted; I was shaking for several hours. I could have been there. I WAS SUPPOSED to be there and die. But a random website on the Internet and a message left for me by an astrologer, helped me to re-write my destiny!</p>


                        <p><strong>If not for this conversation, I would have been dead now!</strong></p>
                        <p>If I hadn’t accidentally come across <a href="#">THIS WEBSITE</a> and hadn’t listened to this message,  I WOULD HAVE BEEN GONE!!! I still can’t believe it and entirely realize that I was so close to death and I could escape it at the last second.
</p>
                        <p>I was thinking a lot about why she hadn’t predicted the catastrophe? </p>
                        <p>After all, 73 innocent people were killed there? And she saved only me?
                           Apparently, because I, by happenstance, was led to her and decided to take a “FUNNY” TEST HOW TO FIND OUT THE DATE OF YOUR DEATH, which turned out to be more serious than the life itself?
</p>
                        <p>I don’t know how much longer I will not be able to sleep at night, asking questions and searching for answers. But the main thing is – I am alive!</p>

                        <p>I have written this muddled post to share it with those who may find it helpful and to share the contact details of the astrologer who saved my life. If you or your beloved ones are in danger – she will save you too.
</p>
        <p>Maybe, I survived just to help you? Or all of you?</p>
        <p>If you are not afraid to know what will be revealed to you, <b>just press the button below – and you will get on a short questionnaire, after completing of which, in case you need help, the astrologer will send you a personal message</b>. If there is no danger for you, she will just text you that you will live a long life and wish you to have a nice day.</p>


                        <!--                        <div class="alert alert-danger">-->
                        <!--                            Atenție - Înregistrările de participare se încheie <?php echo $commentTime; ?>-->
                        <!--                        </div>-->
                        <div>
                            <a class="alert alert-link text-center alert alert-success btn btn-lg btn-block"
                               style="color: #ffffff; background-color: #62b83e" href="#"
                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">Find out the date of your death</a>
                        </div>
                        <p>Yes, it’s really scary to press this button. But one day it saved my life. Now it can save you or some of your beloved ones… Think about how would you feel, knowing that you could prevent something very horrific but had not done this?
                        </p>
                    </div>
                </div>

                <section id="comentarii" class="box box-comments">
                    <header class="box-header"><a name="comments"></a>
                        <h3>Comentarii</h3></header>
                    <div class="box-body">
                        <ul class="list-comments">
                            <li>
                                <article><a name="comment-332635"></a><a>
                                </a>
                                    <footer><a>
                                        <div class="comment-author vcard">
                                            <img src="./img/u5.jpg" style="border-radius: 30px;margin-right:10px;">
                                            <span class="given-name">Julia</span></div>
                                    </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T12:22"><?php echo date('d.m.Y', strtotime('-1 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        My gosh! I just got goose bumps! I would end up in the loony-bin after all this, for sure!

                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer><a>
                                        <div class="comment-author vcard">
                                            <img src="./img/u1.jpg" style="border-radius: 30px;margin-right:10px;">
                                            <span class="given-name">Kate</span></div>
                                    </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T12:21"><?php echo date('d.m.Y', strtotime('-2 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        In fact, I don’t believe in that stuff, but if you tell the truth – it’s a little creepy, ugh!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u4.jpg" style="border-radius: 30px;margin-right:10px;">
                                                <span class="given-name">Lisa</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        I called this astrologer and she told me to insure my car. A kind of my life is not in danger but I am risking getting in a traffic accident. By the way, the astrologer named the color of my car and where I was planning to go!!! Well, I’ve got the insurance on the car, but I’ll probably drive less in the next few days…
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u3.jpg" style="border-radius: 30px;margin-right:10px;">
                                                <span class="given-name">Megan</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-2 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Well done, Lisa! You can believe it or not, but my friend thanks to this astrologer saved her husband’s life. I am not going to tell you the details of this story but it is as horrific as the story of this author!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u6.jpg" style="border-radius: 30px;margin-right:10px;">
                                                <span class="given-name">Sophie</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-1 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Well, your astrologer could have saved a lot of people but didn’t do it, right?
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u9.jpg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Wendy</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        No way! Ok, let’s assume she would have told the author that the plane would crash. And what? Would the author start calling the airlines and asking them to cancel the flight… Because the astrologer told him about this on the phone? I mean, come on, they will tell him to fuck off. Or they would even send him to the nuthouse for a check-up! At least, the author is alive. Though, I dread to think what he is going through now… such a psychological trauma…
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>

                                            <div class="comment-author vcard">
                                                <img src="./img/a6c3737cd0f29bf38b08bf0070fa17fa.jpeg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">James</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Isn’t the dear author lying to us to get more shares and likes?
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava1.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px">
                                                <span class="given-name">Evelyn</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-1 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Come on, James! It’s kinda not something to kid about… And this ticket he kept. And his writing is incohrerent… you can see that he is nervous…
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u8.jpg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Ryan</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-2 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                         I did this test and the astrologer said that everything would be fine in the upcoming years! Yay!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u7.jpg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Aiden78</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        I am afraid to know my future because that’s unchristian. However, if it could save someone’s life… Especially if not yours but some of your family or friends. I should probably call…
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava3.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px;">
                                                <span class="given-name">Starmusik09</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a>
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Scary! I cried so much when I got to know about this crash! Your guardian angel sent you this website and this astrologer!!!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava2.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px">
                                                <span class="given-name">Nora</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="#"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        That’s what I also wanted to write! If you have survived this horrific crash, it means this world needs you for something! Thank you for the website link, I am going to take this test too..
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava4.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px;">
                                                <span class="given-name">Matthew</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a>
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        WOW!!! I clicked on the link! THIS IS THE VERY WEBSITE AND THE VERY ASTROLOGER who predicted danger to my son several months ago!!! Those teenagers, such fools they are… well, a bunch of his friends are now serving 3 to 10 years and my son’s friend died of an overdose. AND THE ASTROLOGER WARNED ME ABOUT THAT!!! AND I TOOK MY SON OUT OF TOWN FOR THAT PERIOD!!! HE WAS SUPPOSED TO BE THERE, WITH HIS FRIENDS!!! Thanks to this website and the astrologer that my son IS ALIVE AND WELL!!!
                                    </div>
                                </article>


                        </ul>
                        <div>
                            <a class="alert alert-link text-center alert alert-success btn btn-lg btn-block"
                               style="color: #ffffff; background-color: #62b83e" href="#"
                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">Find out the date of your death</a>
                        </div>
                        <div class="fb_box_com" id="add_comment">
                            <p style="color:#a5a5a5; font-size: 14px;margin: 7px;">Your comment</p>
                            <div class="comment_img"><img src="images/fb_face.gif" alt="" style="float:left;">
                                <form action="#" method="post">
                                    <textarea placeholder="dasdas" name="author" class="message_box" id="fb_textarea"> </textarea>
                                    <a href="#"><input style="width: 60px" value="Publish" class="submit_box"></a> </form>
                            </div>
                            <div id="comment_here"> </div>
                        </div>
                    </div>
                </section>

            </article>
        </main>
        <aside class="site-Sidebar col-xs-12 hidden-sm-down hidden-xs-down hidden-md-down">

            <section class="box ">
                <header class="box-header">CELE MAI COMENTATE</header>
                <div class="box-body">
                    <ul class="list-articles">
                        <li>
                            <div class="entry-img">
                                <a href="#"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon"
                                   class="entry-img-item"><img
                                        src="https://www.paginademedia.ro/wp-content/uploads/2019/07/audiente-finala-wimbledon-simona-halep_tb570.jpg"
                                        alt="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon"></a>
                            </div>
                            <div class="entry-title"><a href="#"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon">AUDIENȚE
                                TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la
                                Wimbledon</a></div>
                            <div class="entry-meta">
                                <a href="#"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon"><i
                                        class="icon-comment"></i> 19</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="#"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="VIDEO. Radu Banciu a anunțat că vrea să renunțe la emisiunea de la B1 TV. Dar nu spune când">VIDEO.
                                Radu Banciu a anunțat că vrea să renunțe la emisiunea de la B1 TV. Dar nu spune când</a>
                            </div>
                            <div class="entry-meta">
                                <a href="#"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="VIDEO. Radu Banciu a anunțat că vrea să renunțe la emisiunea de la B1 TV. Dar nu spune când"><i
                                        class="icon-comment"></i> 9</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="#"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="Simona Halep - Serena Williams, în finala Wimbledon 2019. Meciul, transmis exclusiv de Eurosport">Simona
                                Halep - Serena Williams, în finala Wimbledon 2019. Meciul, transmis exclusiv de
                                Eurosport</a></div>
                            <div class="entry-meta">
                                <a href="#"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="Simona Halep - Serena Williams, în finala Wimbledon 2019. Meciul, transmis exclusiv de Eurosport"><i
                                        class="icon-comment"></i> 9</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="#"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="Mircea Badea l-a dat în judecată pe Mălin Bot pentru zeci de postări pe Facebook. Răspunsul instanței? Un fel de „cum îți așterni, așa dormi!&quot;">Mircea
                                Badea l-a dat în judecată pe Mălin Bot pentru zeci de postări pe Facebook. Răspunsul
                                instanței? Un fel de „cum îți așterni, așa dormi!"</a></div>
                            <div class="entry-meta">
                                <a href="#"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="Mircea Badea l-a dat în judecată pe Mălin Bot pentru zeci de postări pe Facebook. Răspunsul instanței? Un fel de „cum îți așterni, așa dormi!&quot;"><i
                                        class="icon-comment"></i> 7</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="#"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="AUDIENȚE. Pro TV a mizat pe FCSB și a câștigat. Echipa lui Becali s-a impus pe teren, Pro TV în audiențe">AUDIENȚE.
                                Pro TV a mizat pe FCSB și a câștigat. Echipa lui Becali s-a impus pe teren, Pro TV în
                                audiențe</a></div>
                            <div class="entry-meta">
                                <a href="#"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="AUDIENȚE. Pro TV a mizat pe FCSB și a câștigat. Echipa lui Becali s-a impus pe teren, Pro TV în audiențe"><i
                                        class="icon-comment"></i> 6</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </aside>
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(54505624, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/54505624" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | 10th</title>
    <link rel="stylesheet" href="styling/contact.css" />
    <!-- <link rel="stylesheet" href="../unistyle.css" /> -->
    <script src="https://kit.fontawesome.com/1cce3f40ca.js" crossorigin="anonymous"></script>
    <script>
        function removeClass() {
            document.getElementById("map").classList.remove("hide");
        }
    </script>
</head>

<body>

    <section id="contact">
        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span> <i class="fas fa-map-marker-alt"></i></span>
                            <span>
                                Lorem, ipsum dolor amet <br />
                                <!-- <a onclick="removeClass()" href="#map">Open in maps</a> -->
                            </span>
                        </li>
                        <li>
                            <span> <i class="fas fa-envelope"></i></span>
                            <span>
                                lorem@ipsum.com
                            </span>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <span>
                                1234567
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contactform">
                <h2>Send a Message</h2>
                <form action="">
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="fname" id="" required />
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="lname" id="" required />
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" name="email" id="" required />
                            <span>Email address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="tel" name="number" id="" required />
                            <span>Mobile number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="message" id="" required></textarea>
                            <span>Write your message</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send" />
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>
    </section>
    <div id="map" class="hide">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.874751062126!2d49.85930141476226!3d40.41162536387507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403087adc8697bd7%3A0xb546ead5eeff4fff!2sBirge%20Consulting%20Group!5e0!3m2!1sen!2s!4v1596192112339!5m2!1sen!2s" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</body>

</html>
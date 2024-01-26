function sendMessage() {
    const form = document.forms["contact-form"];
    const name = document.getElementById("name").value;
    const message = document.getElementById("message").value;
    const email = document.getElementById("email").value;
    const phoneNumber = "628996423135";

    const url =
        "https://api.whatsapp.com/send?phone=" +
        phoneNumber +
        "&text=Hallo Faqih,  Saya " +
        name +
        ", " +
        message;

    window.open(url);
    form.reset();
}

/*!
 * Start Bootstrap - Blog Home v5.0.9 (https://startbootstrap.com/template/blog-home)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-blog-home/blob/master/LICENSE)
 */
// This file is intentionally blank
// Use this file to add JavaScript to your project

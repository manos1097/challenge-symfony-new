# Symfony Challenge

1. Create a symfony controller called: "LearningController". You can use bin/console make:controller command for this.
2. Create a method called "aboutMe". This page should contains ome lorum ipsum text and no further functionality.
3. This page should be reachable by adding "/about-me" to the url.
4. Add action "showMyName": On this page you will greet the user by his name. The default name is "Unknown".
5. Below the greeting there should be a form where the user can save his name. When submitted (POST) this should send the user to the changeMyName page.
6. Add action "changeMyName". This page should be the homepage. If you just enter the domain name this should be the page that opens up.
7. Below the greeting there should be a form where the user can save his name. When submitted (POST) this should send the user to the changeMyName page.
8. If the user arrives here from the change your name form, save his choice in a $_SESSION variable.
9. After the form is saved, redirect the user to the showMyName action. This should change the URL.
10. Add a link on the homepage to go to the About Me page.

#### About me page

1. create a link to "showMyName" using twig "path" helper
2. Add the user his name on the About Me page (like you already have on the homepage).
3. If the user is on the About Me page without a name the page should forward to the homepage, where he can use the form. The URL should not change this time.
4. Change the url of the About Me page from "about-me" to "about-becode" in the annotation in your controller. If you did everything correctly the links should still work! Magic!


## Commands that I run

1. php bin/console make:controller LearningController

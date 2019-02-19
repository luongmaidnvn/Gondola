---
title: 'Senior Android Developer'
media_order: banner1.png
metadata:
    'twitter:image': 'http://mowede.com/user/themes/bootstrap/images/job-detail.png'
    'og:image': 'http://mowede.com/user/themes/bootstrap/images/job-detail.png'
taxonomy:
    category:
        - career
        - search
content:
    items: '@self.modular'
summary: 'The role of the Senior Android Developer is taking high level ideas and transform them to advanced product. You will build the Android application using latest cutting-edge solutions.'
posting_date: '09-08-2018 14:45'
location: 'Da Nang'
schedule: Full-time
share: '1'
header_image: '1'
min_height: 272
header_image_file: banner1.png
header_main_text: '**Senior** Android Developer'
color: '#ffffff'
form:
    name: career-form
    template: form-messages
    refresh_prevention: false
    fields:
        -
            name: country
            type: hidden
        -
            name: ic
            type: hidden
        -
            name: position
            type: hidden
        -
            name: url
            type: hidden
        -
            name: firstName
            label: 'First name'
            placeholder: 'First name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: lastName
            label: 'Last name'
            placeholder: 'Last name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
                message: 'Some message'
        -
            name: email
            label: Email
            placeholder: Email
            type: email
            validate:
                rule: email
                required: true
        -
            name: phone
            label: Phone
            placeholder: Phone
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: comments
            label: Comments
            placeholder: 'Please include as much detail as possible'
            size: long
            type: textarea
        -
            name: resume
            label: Resume
            type: file
            outerclasses: grav-input-file
            classes: input-file-default
            multiple: false
            avoid_overwriting: true
            destination: self@
            accept:
                - .doc
                - .docx
                - .pdf
                - .xls
                - .xlsx
                - .csv
        -
            name: g-recaptcha-response
            label: captcha
            display_label: false
            type: captcha
            outerclasses: captcha-field
            classes: contact-us-captcha
            recaptcha_site_key: 6Le1RmkUAAAAAFmHWVZjVtt0PpIIdm2RcL6GAT-r
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: SUBMIT
            classes: submit-button
    process:
        -
            captcha:
                recaptcha_secret: 6Le1RmkUAAAAANwsFy9x8_wUrYtZRw-jo6kMpCr6
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ form.value.email }}'
                subject: 'Thank you for applying | MOWEDE'
                body: '{% include ''forms/career_client_mail.html.twig'' %}'
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.to }}'
                subject: 'Career Form | MOWEDE Coporation'
                body: '{% include ''forms/career_admin_mail.html.twig'' %}'
        -
            save:
                fileprefix: career-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: success
---

### OVERVIEW

MOWEDE (http://mowede.com) is a business unit providing global solutions for software development. We are growing and looking for passionate and talented developers joining with us and sharing the enjoyment of working directly with clients. We aim to foster an environment of learning, collaboration and innovation. We believe that every team member should feel empowered and having a direct impact and share team’s successes.

The role of the **Senior Android Developer** is taking high level ideas and transform them to advanced product. You will build the Android application using latest cutting-edge solutions.

Below are key qualifications we are looking for in our team:

* Strong Object-oriented design
* Deep understanding of Java/Kotlin design patterns
* Knowledge of multi-threaded, asynchronous code
* Experience with the Android SDK, Android Paid, SMS, Google Map, Google Firebase is a plus
* We already have DevOps infrastructure so you don’t need to worry about it
* We work with Agile and using English to communicate with customer and among the team.
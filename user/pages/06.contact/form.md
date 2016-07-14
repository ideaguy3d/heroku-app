---
title: Contact us
form:
    name: Reno Real Estate Team
    fields:
        - name: name
          label: Name
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true
        - name: email
          label: Email
          placeholder: Enter your email address
          type: email
          validate:
            required: true
        - name: message
          label: Message
          placeholder: Enter your message
          type: textarea
          validate:
            required: false
    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset
    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your feedback!
        - display: thankyou
---

#Contact Reno Real Estate Team
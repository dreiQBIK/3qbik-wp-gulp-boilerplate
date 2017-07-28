# Code for a standard CF7 form
Copy and paste the following code into your basic CF7 form.

```
<label for="name" class="m_form__label">Ihr Name</label>[text* form-name id:name class:m_form__input]

<label for="email" class="m_form__label">Ihre E-Mail-Adresse</label>[email* form-email id:email class:m_form__input]

<label for="subject" class="m_form__label">Betreff</label>[text form-subject id:subject class:m_form__input]

<label for="message" class="m_form__label">Ihre Nachricht</label>[textarea* form-message id:message class:m_form__input class:m_form__input--wide]

[submit class:m_btn class:m_btn--light class:m_form__btn "Abschicken"]
```
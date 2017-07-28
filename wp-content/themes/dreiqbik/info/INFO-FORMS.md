# Code for a standard CF7 form
Copy and paste the following code into your basic CF7 form.

```
<label for="name" class="form__label">Ihr Name</label>[text* form-name id:name class:form__input]

<label for="email" class="form__label">Ihre E-Mail-Adresse</label>[email* form-email id:email class:form__input]

<label for="subject" class="form__label">Betreff</label>[text form-subject id:subject class:form__input]

<label for="message" class="form__label">Ihre Nachricht</label>[textarea* form-message id:message class:form__input class:form__input--wide]

[submit class:btn class:btn--light class:form__btn "Abschicken"]
```
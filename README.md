# E_Commerce :handbag: :dress: :high_heel:

## The website :computer:

Simple Ecommerce with extern payment method. I made this website mainly to learn how to use a payment API, Easy Admin, and a mailer. Any user can suscribe, and then purchase any products. Of course, this is a test version of paymee, you can't really use your card. But still, a validation will be set, and you'll receive a confirmation mail. If you use the contact section, I will reveive an email from the website.


## Back Office :package:

As an admin (role = "ROLE_ADMIN"), we can add products, modify banners, top products, handle users, carriers, categories and orders.

## Stack :wrench:

- Symfony 5.4
- Easy Admin
- Twig
- Bootstrap
- Paymee
- Mailtrap

## How to install project :hammer:

- After cloning the repo, run :
  
    ```bash
    composer install
    php bin/console make:migration 
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

- Specify your work environment :

    ```bash
    DATABASE_URL="mysql://user_name:password@127.0.0.1:3306/e_commerce?serverVersion=mariadb-10.3.25"
    APP_ENV=dev
    MAILER_DSN=smtp://MAIL_USERNAME:MAIL_PASSWORD@sandbox.smtp.mailtrap.io:2525
    ```
- Add your Paymee token to the PaymentController :
    
    ```bash
    'Authorization' => 'Token your token',
    ```
- If needed, clear cache :

    ```bash
    php bin/console cache:clear
    ```

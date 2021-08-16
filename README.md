# Welkom!

Fijn dat je mij leest! Ik ben de README van een blog applicatie, gemaakt met Symfony 5.3.6. 
Volg deze stappen om de applicatie werkende te krijgen.

# Gebaseerd op

 - Symfony 5.3.6
 - PHP 8.0.9
 - MySQL Server 8.0.26 (5.7+)
 - Apache 2.4.47

# Gebruiksaanwijzing

 1. Pak `blog_app.zip` uit.
 2. Installeer Symfony 5.3 `https://symfony.com/download`.
 3. Importeer `sql/blog.sql` via PHPMyAdmin, of een ander programma.
 4. Maak een nieuwe gebruiker aan voor het database `blog`.
 5. Standaard is dit:  `Username: blog, Password: blog`.
 6. Optioneel: verander de username & password in .env als volgt:  `DATABASE_URL="mysql://USERNAME:PASSWORD@127.0.0.1:3306/DATABASE`.
 7. Open CMD/Powershell/Terminal.
 8. Navigeer naar de locatie waar je `blog_app.zip` hebt uitgepakt.
 9. Gebruik de command `symfony server:start` om de applicatie te starten.
 10. In je browser ga naar `localhost:8000`. 
 11. Het werkt! 

## Admin login

 - Login URL: http://localhost:8000/app/login
 - Username: `admin`
 - Password: `administrator`
 - Admin Panel URL (geblokkeerd als je geen admin bent): http://localhost:8000/admin


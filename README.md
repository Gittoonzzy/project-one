# Ebison Siivous Palvelut

Created in 2016.

A Laravel 8 marketing site for Ebison Siivous Palvelut, a cleaning company in Espoo, Finland. The public site is four pages — Home, About, Services, and Contact — returned directly from `routes/web.php`. Home introduces the company and shows service cards, client reviews, and a contact form. About covers the company, its mission, values, and guarantee. Services lists five cleans (general, office, window, home, and shop), each at 32€. Contact shows the Espoo address, phone numbers, emails, a map, and the same contact form.

Pages use `resources/views/master.blade.php`, the stylesheet `public/css/style.css`, and photos in `public/images`. The contact form posts to `/sendForm`. The site does not read or write a database; the only database files are Laravel’s default user, password-reset, failed-job, and token tables.

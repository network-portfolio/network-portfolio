## A network portfolio built with Laravel + Vue + tailwindcss
Did you find yourself without a portfolio, even though you did do some interesting projects in the past? These projects might have been achieved together with friends or partners? Let's investigating how to make a connected "network portfolio" where we can share these projects across our personal websites!

![sketh](public/images/explain.png)

Sounds interesting? Please take this [survey](https://docs.google.com/forms/d/e/1FAIpQLSflof9NgS6T14WwXv4tL7Z8CRWb0bL4Xz4uj5we_qlBZOgzIQ/viewform?usp=sf_link). It really will help building a better product.

Or feel free to chat in the [collaboratours wanted issue](https://github.com/ajthinking/network-portfolio/issues/1).

### Features (for a MVP)
* Socialite signup
* Add a project on the hub (add name, description, links, images etc)
* Add/remove collaboratours to projects
* Project owner and project collaboratour must both be able to approve/decline the collaboration listing.
* An API to populate the personal portfolio websites of the users. The project should provide a sample implementation.

### Roadmap
* research
* find collaboratuors
* scaffold and seed basic API
* build a frontend for adding/managing projects
* create a sample implementation using the API (a personal portfolio to be deployed on a personal domain)
* find a better name

### Development installation
```
git clone git@github.com:ajthinking/network-portfolio.git
cd network-portfolio
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh
yarn
yarn dev && yarn watch
# Get github application keys from ajthinking
# Now test go to http://network-portfolio.test/api/projects
```

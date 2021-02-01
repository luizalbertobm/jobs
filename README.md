## Jobs Platform
Welcome to the Jobs Platform. The best application developed with Laravel Framework.

## Requirements
To run that you need to have the following apllications installed:
- Composer (https://getcomposer.org/)
- Docker (https://www.docker.com/get-started)
## How to run
1. Clone this repository in your local machine:
```bash
git clone https://github.com/luizalbertobm/jobs.git
```
2. Access the created directory:
```bash
cd jobs
```
3. Install Composer dependencies:
```bash
composer install
```
4. Rename the `.env.example` file
```bash
mv .env.example .env
```
5. Run this command to up the docker containers:
```bash
vendor/bin/sail up
```
6. Finally, run database migrations:
```bash
vendor/bin/sail artisan migrate:fresh --seed
```
## Now just enjoy it
Access `http://localhost:8080/` on your browser.

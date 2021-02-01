## Jobs Platform
Welcome to the Jobs Platform. The best application developed with Laravel Framework.

## How to run
1. Clone this repository in your local machine:
```bash
git clone https://github.com/luizalbertobm/jobs.git
```
2. Enter into created directory:
```bash
cd jobs
```
3. Install composer dependencies:
```bash
composer install
```
4. Rename the `.env.example` file
```bash
mv .env.example .env
```
5. Run this command to up docker containers:
```bash
sail up
```
6. So, run database migrations:
```bash
sail artisan migrate
```
## Now just enjoy
Access `http://localhost/` on your browser.

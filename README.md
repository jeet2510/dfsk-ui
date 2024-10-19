## Deployment
1.	Clone the repository 
2.  Run `cp .env.example .env` file to copy example file to `.env`  
    Then edit your `.env` file with DB credentials and other settings.
3.	Comment the lines in the function `boot()` that is in the file `AppServiceProvider.php` 
4.  Run `composer install` command
5.	Run `npm install` command
6.	For the Database: Run the command `php artisan migrate --seed`  
7.	Uncomment the lines in the same function in step 3)
8.  Run `php artisan key:generate` command.
9. 	Run `php artisan storage:link` command
10.	Run `npm run watch` command

And that's it, go to your_domain and login:

Admin Panel at the slug: `/backend`

##### Default credentials

Username: `admin@admin.com`  
Password: `password`  
  
For Developer Mode,  
Username: `developer@admin.com`   
Password: `password`    

## Front-End Asset Management

1. **JavaScript**:  
   - Place all front-end related JavaScript in the `resources/js/script.js` file.

2. **CSS/SCSS**:  
   - Manage all front-end styles in the `resources/sass/styles.scss` file.

3. **Compiling Assets**:  
   - After making changes, compile your assets by running:

   ```bash
   npm run watch


## GIT Management

1. Clone the repo: [https://bitbucket.org/c2native_web/dfsk-web/src](https://bitbucket.org/c2native_web/dfsk-web/src).
2. Create and checkout your own branch (use your name in lowercase):
    ```bash
    git checkout -b yourname
    ```
3. Make updates on your branch and commit:
    ```bash
    git add .
    git commit -m "Your commit message"
    ```
4. **Pull from `master`** to ensure your branch is up to date:
    ```bash
    git pull origin master
    ```
5. Push changes to your branch:
    ```bash
    git push origin yourname
    ```
6. Create a pull request and notify Salma to merge.

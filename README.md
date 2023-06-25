
# Martin Stokes - Wonde exercise

### Summary of the exercise


Used Laravel with blade, javascript/jQuery and bootstrap

•	Got all employees for given school and present to user.

•	After selecting an employee retrieve all the classes for the employee and present to the user

•	After selecting a class retrieve the class details, periods and students for the class. Display the periods and students together

•	Provide a settings page to update 3 fields which are stored in the DB – token, school ID and base URL.


### To setup
I have added a table to store some of the API configuration. Running the migrations and seeder below will set this up.

```git clone git@github.com:stokes90/wonde.git```

```php artisan migrate```

```php artisan db:seed --class=ApiSettingSeeder```

### Given more time I would have liked to -

•	Spend more time on the display/CSS

•	Pagination for employees

•	Introduce a front end framework - Vue.js


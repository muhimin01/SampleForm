# Sample Form using JavaScript and PHP
### by @muhimin01

The web app contains the files:
* [js/](.\Code\js)
  * [scripts.js](.\Code\js\scripts.js)
* [php/](.\Code\php)
  * [config.php](.\Code\php\config.php)
  * [getState.php](.\Code\php\getState.php)
  * [insert.php](.\Code\php\insert.php)
* [dl_database.sql](.\Code\dl_database.sql)
* [form.html](.\Code\form.html)
* [README.md](.\Code\README.md) <-- You are here!
* [styles.css](.\Code\styles.css)

***
### [form.html](.\Code\form.html)
This is where the form is. Users can input their `name`, `dob`, `address`, and select their `postcode`. The input field for `state` is initially disabled until a `postcode` is selected.

***
### [styles.css](.\Code\styles.css)
This is the styling sheet for the web app. It contains all the stylings used to make the [form.html](.\Code\form.html) look nicer.
***
### [scripts.js](.\Code\js\scripts.js)
This contains all the scripts and functions. This JavaScript handles the data from the form and `POSTS` it to the PHP files. This is also where the corresponding `state` value is handled when a specific `postcode` value is chosen.
***
### [dl_database.sql](.\Code\dl_database.sql)
This is the exported database structure from phpMyAdmin. It has tables `customer` and `postcode`.
***
### [config.php](.\Code\php\config.php)
This is the configuration file for the server. In this case, it uses localhost. This is where the connection is handled.
***
### [getState.php](.\Code\php\getState.php)
This is where [scripts.js](.\Code\js\scripts.js) receives the corresponding state of the chosen `postcode` value.
***
### [insert.php](.\Code\php\insert.php)
This is where the data from the form is received and submitted to the database.
***
<br />

## How to use
1. Create a database `dl_database` using [dl_database.sql](.\Code\dl_database.sql).
2. Run the web app the on your local server `(localhost)`.
3. Open [form.html](.\Code\form.html) and you should be good to go.

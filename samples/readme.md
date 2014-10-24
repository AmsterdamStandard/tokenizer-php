# README #

## What is this repository for? ###

* Getting started with Tokenizer and PHP
* 1.0

## Pre-requisits ###

#### Download the Tokenizer app
* From the App store or on Google Play.
* Run the app and register your email address

#### Create your first service
* Go to <http://www.tokenizer.com>
* Login with your freshly created account
* **Create your first Tokenizer service**
* `App name`
* `App host`
* `App logo (120 x 120)`

You will receive the `app_id` and `app_key` that you need for connecting this api in your email.

## How do I get set up? ###

* Clone the repository into your local web folder (<http://localhost/tokenizer>)
* Update the config.php

`define('APP_ID',     'the-id-from-your-email');`

`define('APP_KEY',    'the-code-from-your-email');`

`define('APP_URL',    'http://localhost/tokenizer/tokenize.php');`

#### Checking your app information

* Open the config verification script in your browser:
* <http://localhost/tokenizer/connect.php>
* You should see something like: The config for the app **YOUR-APP-NAME** is working!

#### Creating your first token

* Open the login.php script in your code editor
* Update the email address to the email address that you used to register

`$email = 'your@email.com';`

* Open the login script in your browser:
* <http://localhost/tokenizer/login.php>
* You will be redirected to the **waiting page**
* Check your phone and accept or reject the token
* See the result on the `verify.php` script


### Who do I talk to? ###

* Frank Broersen <frank@amsterdamstandard.com>
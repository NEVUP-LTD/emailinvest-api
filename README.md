![Emailinvest](https://emailinvest.com/img/logo.png)

EmailInvest API
================
[![Latest Stable Version](https://poser.pugx.org/emailinvest/emailinvest-api/v/stable)](https://packagist.org/packages/emailinvest/emailinvest-api) [![Total Downloads](https://poser.pugx.org/emailinvest/emailinvest-api/downloads)](https://packagist.org/packages/emailinvest/emailinvest-api) [![License](https://poser.pugx.org/emailinvest/emailinvest-api/license)](https://packagist.org/packages/emailinvest/emailinvest-api)

*API is currently in development status.*

## License

This software is distributed under the [LGPL 2.1](http://www.gnu.org/licenses/lgpl-2.1.html) license. Please read LICENSE for information on the
software availability and distribution.


INSTALLATION
-----------

**Using GIT**

*Download from GitHub files and include file*

    require 'EmailinvestAutoload.php';

**Using COMPOSER**

    composer require emailinvest/emailinvest-api



DEFINE CLASS
------------

    $ei = new api\emailinvest("YOUR_KEY", "YOUR_USERNAME", true);
    $result = $ei->me();
    var_dump($result);


FUNCTIONS
---------
*Please, send recommendations to us so we can improve it.*

 **Contacts Functions**

> ***contactsadd.php*** *- Add contacts to your account*

**Fields Functions **

> ***fieldsgetlist.php*** *- Get list with your fields*

> ***fieldsadd.php*** *- Add new field to your account*

> ***fieldsdelete.php*** *- Remove field from your account*

**Groups Functions**

> ***groupsadd.php*** *- Add new group name to your account*

> ***groupsEdit.php*** *- Edit existing Group Name*

> ***groupsgetlist.php*** *- Get all groups*

> ***groupsempty.php*** *- Empty contacts from group and delete it if there not exists in other groups*

> ***groupsdelete.php*** *- Delete group and delete contacts if there not exists in other groups*

**Campaigns Functions**

> ***fromsgetlist.php*** *- Get your From emails*

> ***campaignSend.php*** *- Send campaigns from your account*

> ***stats.php*** *- Get Campaign statistics*

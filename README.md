Truncate
=========
The Truncate allows you to truncate a string.


REQUIREMENTS
-------------
Drupal 9.x.


INSTALLATION
-------------
Install this module as usual. Please see
https://www.drupal.org/docs/extending-drupal/installing-modules


USAGE
--------------

paramètres:
	- n number of characters defaukt to 150
    - endchar default to '…'

{{ the_string|truncate(100, '!') }}
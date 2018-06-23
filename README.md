# 2013

It's been 2 years since I redesigned my site. Trying out some new ideas.

## Compiled Files

Run `make watch` to watch SCSS files and compile them to their equivalents.
Note not all files are actually in this project, if you edit the color scheme,
the RDark file in the syntaxhighlighter project also changes.

## Generated files

This generates the following CSS files:

- style.css (styles across the site)
- css/home.css
- css/blog.css (styles for posts)
- css/twitter.css (the Twitter widget on the homepage)

## Serving Locally

1) Clone Wordpress

2) Symlink the theme into the wp-content folder.

    ```
    ln -s ~/src/github.com/kevinburke/2013 ~/src/github.com/Wordpress/Wordpress/wp-content/themes
    ```

3) start mysql:

    ```
    brew services start mysql
    ```

4) point the MAMP app at ~/src/github.com/Wordpress/Wordpress

5) go to this URL http://localhost:8888/phpMyAdmin/server_databases.php?db=&lang=en&collation_connection=utf8mb4_unicode_ci&token=dce2ae8a8b0da282ac42d72b310895a9

6) create a database (kevinburke)

7) create a user with privileges on that database (kevin) - check 1Password for
db password

8) use warthog password to login on localhost:8888

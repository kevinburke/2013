all: style.css css/home.css css/blog.css css/twitter.css

style.css:
	sass --style compressed scss/main.scss > style.css

css/home.css: scss/home.scss
	sass --style compressed scss/home.scss > css/home.css

css/blog.css: scss/blog.scss
	sass --style compressed scss/blog.scss > css/blog.css

css/twitter.css: scss/twitter.scss
	sass --style compressed scss/twitter.scss > css/twitter.css

install:
	gem install sass

watch:
	./observr.rb

venv:
	virtualenv venv

venv/bin/pygmentize: | venv
	venv/bin/pip install -U pygments

generate-css: | venv/bin/pygmentize
	venv/bin/pygmentize -S native -f html -a .chroma > scss/syntax-highlights.scss
	echo "Edit the file and change the '.chroma' background color to #233255"

scss/syntax-highlights.scss: generate-css

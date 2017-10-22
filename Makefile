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

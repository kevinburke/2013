#!/usr/bin/env observr

main = "sass --style expanded scss/main.scss > style.css"
home = "sass --style expanded scss/home.scss > css/home.css"
blog = "sass --style expanded scss/blog.scss > css/blog.css"
twitter = "sass --style expanded scss/twitter.scss > css/twitter.css"
core = "sass --style expanded /Users/kevin/code/syntaxhighlighter/trunk/syntaxhighlighter3/scss/shCore.scss > /Users/kevin/code/syntaxhighlighter/trunk/syntaxhighlighter3/styles/shCore.css"
rdark = "sass --style expanded /Users/kevin/code/syntaxhighlighter/trunk/syntaxhighlighter3/scss/shThemeRDark.scss > /Users/kevin/code/syntaxhighlighter/trunk/syntaxhighlighter3/styles/shThemeRDark.css"

watch( 'scss/(license|normalize|main|colors|genericons)\.scss' )  {|md| puts main; system(main) }
watch( 'scss/blog\.scss' )  {|md| puts blog; system(blog) }
watch( 'scss/twitter\.scss' )  {|md| puts twitter; system(twitter) }
watch( 'scss/home\.scss' )  {|md| puts home; system(home) }

watch( 'scss/colors\.scss' )  {|md|
  [main, blog, home, core, rdark].each do |css_file|
    puts css_file
    system css_file
  end
}

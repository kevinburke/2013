#!/usr/bin/env observr

watch( 'scss/(license|normalize|main|colors|genericons)\.scss' )  {|md| cmd = "sass --style compressed scss/main.scss > style.css"; puts cmd; system(cmd) }
watch( 'scss/blog\.scss' )  {|md| cmd = "sass --style compressed scss/blog.scss > css/blog.css"; puts cmd; system(cmd) }

